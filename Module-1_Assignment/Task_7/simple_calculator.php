<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple calculator</title>
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
            height: 450px;
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
            margin-top: 20px;
            width: 80%;
            color: white;
        }
    </style>

</head>





<body>

    <div class="container">
        <div class="head">
            <h1 class="heading bg-primary text-white">Simple Calculator</h1>
        </div>
        <div class="box">
            <form action="" method="POST">


                <label for="number1">Enter first number: </label><br>
                <input type="text" name="number1" id="" required><br>

                <label for="number2">Enter second number: </label><br>
                <input type="text" name="number2" id="" required><br>

                <label for="operation">Select the Operation</label><br>
                <select name="operation" id="">
                    <option value="addition">Addition</option>
                    <option value="subtraction">Subtraction</option>
                    <option value="multiplication">Multiplication</option>
                    <option value="division">Division</option>
                </select>
                <br>

                <button class="bg-primary" type="submit">Calculate Result</button><br>


                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {



                    $number1 = $_POST['number1'];
                    $number2 = $_POST['number2'];
                    $operation = $_POST['operation'];

                    if (is_numeric($number1) && is_numeric($number2)) {

                        if ($operation == "addition") {
                            $result = $number1 + $number2;
                        } elseif ($operation == "subtraction") {
                            $result = $number1 - $number2;
                        } elseif ($operation == "multiplication") {
                            $result = $number1 * $number2;
                        } elseif ($operation == "division") {
                            $result = $number1 / $number2;
                        } else {
                            $result = "Something Wrong!!";
                        }

                        if (isset($result)) {

                            printf("<span class='output'>Calculated result is = <b>%.2f</b> </span>", $result);
                        }
                    } else {
                        printf("<span class='output'>Enter a valid Number");
                    }
                }

                ?>

            </form>
        </div>

    </div>


</body>

</html>