<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>break on condition</title>
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
            <h1 class="heading bg-primary text-white">Break on Condition</h1>
        </div>
        <div class="box">
            <form action="" method="POST">

                <label for="total">How many fibonacci numbers want to print: </label><br>
                <input type="text" name="total" id="" required><br>


                <label for="break">Break when greater than of: </label><br>
                <input type="text" name="break" id="" required><br>
                <button class="bg-primary" type="submit">Print Numbers</button><br><br>


                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $total = $_POST['total'];
                    $break = $_POST['break'];



                    if (is_numeric($total) && is_numeric($break)) {



                        $first = 0;
                        $second = 1;
                        $count = 2;

                        echo "Fibonacci Series up to $total numbers and less than $break are :  ";
                        echo $first . " " . $second;

                        for ($i = 2; $i < $total; $i++) {
                            $sum = $first + $second;
                            if ($sum > $break) {
                                echo "<br>Total printed $count numbers.";
                                break;
                            }
                            echo " " . $sum;
                            $count++;
                            $first = $second;
                            $second = $sum;
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