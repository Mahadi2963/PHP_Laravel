<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>

<body>
    <h2>Edit Profile</h2>

    <?php
session_start();

if (isset($_SESSION['email'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_SESSION['username'];
        $email = $_SESSION['email'];

        $newUsername = $_POST['new_username'];

        $_SESSION['username'] = $newUsername;

        echo "<p>Profile updated successfully!</p>";
    } else {
        echo "<form method='post' action='edit_profile.php'>";
        echo "<label for='new_username'>New Username:</label>";
        echo "<input type='text' name='new_username' id='new_username' required><br><br>";
        echo "<input type='submit' value='Update Profile'>";
        echo "</form>";
    }

    echo "<p><a href='user_dashboard.php'>Back to Dashboard</a></p>";
} else {
    header("Location: login.php");
    exit();
}
?>
</body>

</html>