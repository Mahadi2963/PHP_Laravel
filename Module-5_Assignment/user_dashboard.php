<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>

<body>
    <h2>User Dashboard</h2>

    <?php
session_start();

if (isset($_SESSION['email']) && $_SESSION['email'] == 'admin@gmail.com') {

    $username = $_SESSION['username'];
    $email = $_SESSION['email'];

    echo "<p>Welcome, $username!</p>";
    echo "<p>Email: $email</p>";

    echo "<p><a href='edit_profile.php'>Edit Profile</a></p>";

    echo "<p><a href='logout.php'>Logout</a></p>";

    echo "<p><a href='user_list.php'>User Data</a></p>";

} else if (isset($_SESSION['email']) && $_SESSION['email'] != 'admin@gmail.com') {

    $username = $_SESSION['username'];
    $email = $_SESSION['email'];

    echo "<p>Welcome, $username!</p>";
    echo "<p>Email: $email</p>";

    echo "<p><a href='edit_profile.php'>Edit Profile</a></p>";

    echo "<p><a href='logout.php'>Logout</a></p>";

} else {
    //not logged in.
    header("Location: login_form.php");
    exit();
}

?>

</body>

</html>



















<!DOCTYPE html>
<html>

<head>

</head>



</html>