<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        table,
        tr,
        td,
        th {
            border: 2px solid black;
            padding: 20px;
            font-size: 25px;
            background-color: lightblue;
        }

        .container {
            margin-top: 60px;
        }

        .head {
            text-align: center;
            margin-top: 40px;
            height: 60px;
            border: 2px solid black;
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="head bg-primary text-white">
            <h1>Personal Information</h1>
        </div>
    </div>

    <?php

    $name = "Mahadi Hasan";
    $age = 24;
    $country = "Bangladesh";
    $brief_intro = "Hello, I'm Mahadi Hasan and I come from Cumilla. I'm here for my strong passion for PHP & Laravel. Currently, I'm pursuing a degree in Computer Science and Engineering (BSCSE) at United International University (UIU). As a university student, I'm dedicated to honing my skills and knowledge in the field of computer science. I'm thrilled to be part of this community and look forward to engaging with all of you!";

    echo "
    <div class='container'>
        <table>
            <tr>
                <th>Name: </th>
                <td> $name </td>
            </tr>

            <tr>
                <th>Age: </th>
                <td> $age </td>
            </tr>

            <tr>
                <th>Country: </th>
                <td> $country </td>
            </tr>

            <tr>
                <th>Brief_Introduction: </th>
                <td> $brief_intro </td>
            </tr>
        </table>
    </div>
    ";

    ?>

</body>

</html>