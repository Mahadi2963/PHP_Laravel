<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping in php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        .heading {
            text-align: center;
            margin-top: 40px;
            height: auto;
        }

        .head {
            display: block;
            width: 70%;
            margin: 0 auto;
        }

        .box {
            height: auto;
            width: 650px;
            box-shadow: 20px 20px 20px grey;
            margin: 40px auto;
            font-size: 25px;
            text-align: center;
            background: lightblue;
        }

        span {
            padding: 10px;
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
    </style>

</head>

<body>

    <div class="container">
        <div class="head">
            <h1 class="heading bg-primary text-white">Looping with increment using a function </h1>
        </div>
        <div class="box">
            <form action="" method="POST">

                <label for="operation">Select the Operation</label><br>
                <select name="operation" id="">
                    <option value="for">For Loop</option>
                    <option value="while">While Loop</option>
                    <option value="do">Do While loop</option>
                </select>
                <br>

                <label for="start">Start Number: </label><br>
                <input type="text" name="start" id="" required><br>

                <label for="end">End Number: </label><br>
                <input type="text" name="end" id="" required><br>

                <label for="step">Enter steps: </label><br>
                <input type="text" name="step" id="" required><br>
                <button class="bg-primary" type="submit">Print Numbers</button><br><br>


                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $start = $_POST['start'];
                    $end = $_POST['end'];
                    $step = $_POST['step'];
                    $operation = $_POST['operation'];



                    if (is_numeric($start) && is_numeric($end) && is_numeric($step)) {


                        if ("for" == $operation) {

                            function printEvenForLoop($start, $end, $step)
                            {
                                echo "Using For loop the numbers are: ";
                                for ($i = $start; $i <= $end; $i += $step) {
                                    printf("<span class='output'>$i </span>");
                                }
                            }

                            printEvenForLoop($start, $end, $step);
                        } elseif ("while" == $operation) {

                            function printEvenWhileLoop($start, $end, $step)
                            {
                                echo "Using while loop the numbers are: ";
                                $i = $start;
                                while ($i <= $end) {
                                    printf("<span class='output'>$i </span>");
                                    $i += $step;
                                }
                            }

                            printEvenWhileLoop($start, $end, $step);
                        } else {

                            function printEvenDoWhileLoop($start, $end, $step)
                            {
                                echo "Using do while loop the numbers are: ";
                                $i = $start;
                                do {
                                    printf("<span class='output'>$i </span>");;
                                    $i += $step;
                                } while ($i <= $end);
                            }


                            printEvenDoWhileLoop($start, $end, $step);
                        }
                    } else {
                        printf("<span class='output'>Enter Valid Numbers</span>");
                    }
                }

                ?>

                <br>

            </form>
        </div>
    </div>

</body>

</html>