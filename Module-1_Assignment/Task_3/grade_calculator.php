<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
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
            <h1 class="heading bg-primary">Grade Calculator Form</h1>
        </div>
        <div class="box">
            <form action="" method="POST">

                <label for="score1">Enter 1st test score: </label><br>
                <input type="text" name="score1" id="" required><br>

                <label for="score2">Enter 2nd test score: </label><br>
                <input type="text" name="score2" id="" required><br>

                <label for="score3">Enter 3rd test score: </label><br>
                <input type="text" name="score3" id="" required><br>
                <button class="bg-primary" type="submit">Calculate</button><br>


                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $score1 = $_POST['score1'];
                    $score2 = $_POST['score2'];
                    $score3 = $_POST['score3'];


                    $average = ($score1 + $score2 + $score3) / 3;

                    if ($average >= 33 && $average < 33) {
                        $result = "F";
                    } elseif ($average >= 33 && $average < 50) {
                        $result = "D";
                    } elseif ($average >= 50 && $average < 70) {
                        $result = "C";
                    } elseif ($average >= 70 && $average < 80) {
                        $result = "B";
                    } elseif ($average >= 80 && $average <= 100) {
                        $result = "A";
                    } else {
                        $result = "Wrong Input!";
                    }



                    if (isset($average)) {

                        printf("<span class='output'>Average result is = %.2f And the grade is: <b>%s</b> </span>", $average, $result);
                    }
                }

                ?>

            </form>
        </div>
    </div>

    <h3 style="text-align: center;">This is the grading system</h3>
    <table>
        <tr>
            <th>Mark</th>
            <td>0-32</td>
            <td>33-49</td>
            <td>50-69</td>
            <td>70-79</td>
            <td>80-100</td>
        </tr>

        <tr>
            <th>Grade</th>
            <td>F</td>
            <td>D</td>
            <td>C</td>
            <td>B</td>
            <td>A</td>
        </tr>

    </table>




</body>

</html>