<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weathe reoprt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        .heading {
            text-align: center;
            margin-top: 40px;
            height: 60px;
        }

        .head {
            display: block;
            width: 90%;
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
        }

        table,
        tr,
        td {
            border: 2px solid black;
            padding: 20px;
            text-align: center;
            margin: 0 auto;
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="head">
            <h1 class="heading bg-primary">Weathe Reoprt</h1>
        </div>
        <div class="box">
            <form action="" method="POST">

                <label for="temp">Enter the Temperature: </label><br>
                <input type="temp" name="temp" id="" required><br>

                <button class="bg-primary" type="temp">Weather Info</button><br><br>


                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $temperature = $_POST['temp'];


                    if ($temperature <= 0) {
                        $message = "It's Freezing";
                    } elseif ($temperature > 0 && $temperature <= 20) {
                        $message = "It's Cool";
                    } elseif ($temperature > 19 && $temperature <= 35) {
                        $message = "It's Warm";
                    } else {
                        $message = "It's Hot";
                    }
                    if (isset($message)) {

                        echo $message;
                    }
                }

                ?>

            </form>
        </div>
    </div>

    <h3 style="text-align: center;">This is the Temperature Range</h3>
    <table>
        <tr>
            <th>Temperature</th>
            <td>-infinity to 0</td>
            <td>01 to 20</td>
            <td>21 to 35</td>
            <td>35 to +infinity</td>

        </tr>

        <tr>
            <th>Weathe Info</th>
            <td>"It's Freezing</td>
            <td>"It's Cool"</td>
            <td>It's Warm</td>
            <td>It's Hot</td>

        </tr>

    </table>


</body>

</html>