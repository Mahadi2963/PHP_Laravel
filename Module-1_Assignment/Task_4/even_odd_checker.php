<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even odd checker</title>
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
            height: 300px;
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
    </style>

</head>

<body>

    <div class="container">
        <div class="head">
            <h1 class="heading bg-primary text-white">Even or Odd Checker</h1>
        </div>
        <div class="box">
            <form action="" method="POST">

                <label for="number">Enter a Number: </label><br>
                <input type="number" name="number" id="" required><br>

                <button class="bg-primary" type="submit">Check Number</button><br><br>


                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $number = $_POST['number'];

                    if ($number % 2 == 0) {
                        $message =  sprintf("The number %d is an EVEN number.", $number);
                    } else {
                        $message =  sprintf("The number %d is an ODD number.", $number);
                    }


                    if (isset($message)) {

                        echo $message;
                    }
                }

                ?>

            </form>
        </div>
    </div>


</body>

</html>