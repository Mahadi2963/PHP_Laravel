<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison tool</title>
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
            height: 400px;
            width: 650px;
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

        table,
        tr,
        td,
        th {
            width: 650px;
            border: 2px solid black;
            margin: 0 auto;
            text-align: center;
            padding: 10px;
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="head">
            <h1 class="heading bg-primary text-white">Comparison Tool</h1>
        </div>
        <div class="box">
            <form action="" method="POST">

                <label for="num1">Enter 1st Number: </label><br>
                <input type="text" name="num1" id="" required><br>

                <label for="num2">Enter 2nd Number: </label><br>
                <input type="text" name="num2" id="" required><br>

                <button class="bg-primary" type="submit">Compare Now</button><br><br>


                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];

                    if (is_numeric($num1) && is_numeric($num2)) {
                        $result = ($num1 === $num2) ? "Both are equal number" : (($num1 > $num2) ? "First number: {$num1} is the large number" : "Second number: {$num2} is the large number");

                        if (isset($result)) {

                            echo $result;
                        }
                    } else {
                        echo "Enter a valid number";
                    }
                }

                ?>

            </form>
        </div>
    </div>

</body>

</html>