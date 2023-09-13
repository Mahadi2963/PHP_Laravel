<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .heading {
            text-align: center;
            margin-top: 40px;
            height: 60px;
        }

        .head {
            display: block;
            width: 70%;
            margin: 0 auto;
        }

        .box {
            height: 350px;
            width: 600px;
            box-shadow: 20px 20px 20px grey;
            margin: 40px auto;
            font-size: 25px;
            text-align: center;
            background: lightblue;
        }

        span {
            display: block;
            margin-top: 20px;
        }

        label {
            margin-top: 10px;
        }

        select {
            width: 80%;
            margin-top: 10px;
        }

        select option {
            text-align: center;
            font-size: 20px;
        }

        input {
            margin-top: 10px;
            height: 38px;
            width: 80%;
            font-size: 20px;
        }

        button {
            margin-top: 15px;
            width: 80%;
        }
    </style>

</head>





<body>

    <div class="container">
        <div class="head">
            <h1 class="heading bg-primary">Temperature Converter</h1>
        </div>
        <div class="box">
            <form action="" method="POST">

                <label for="option">Select Conversion Direction</label><br>
                <select name="option" id="">
                    <option value="celToFar">Celcius to Farenheit</option>
                    <option value="farToCel">Farenheit to Celcius</option>
                </select>
                <br>
                <label for="temp">Enter a temperature value: </label><br>
                <input type="text" name="temp" id="" required><br>
                <button class="bg-primary" type="submit">Calculate</button><br>


                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $temp = $_POST['temp'];
                    $option = $_POST['option'];

                    if ($option == "celToFar") {
                        $result = ($temp * 9 / 5) + 32;
                        $unit = "Farenheit";
                    } elseif ($option == "farToCel") {
                        $result = ($temp - 32) * (5 / 9);
                        $unit = "Celsius";
                    } else {
                        echo "Something Wrong!!";
                    }

                    if (isset($result)) {

                        printf("<span class='output'>Converted temperater is = %.2f °  %s </span>", $result, $unit);
                    }
                }

                ?>

            </form>
        </div>
    </div>


</body>

</html>