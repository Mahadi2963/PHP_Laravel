<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>

<body>
    <h2>Add User</h2>

    <?php
session_start();

if (isset($_SESSION['email']) && $_SESSION['email'] === 'admin@gmail.com') {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $newUsername = $_POST['new_username'];
        $newEmail = $_POST['new_email'];
        $newPassword = password_hash($_POST['new_password'], PASSWORD_BCRYPT);

        $user_data = file_get_contents('user_data.txt');
        $user_data = unserialize($user_data);

        $user_data[] = ['username' => $newUsername, 'email' => $newEmail, 'password' => $newPassword];

        file_put_contents('user_data.txt', serialize($user_data));

        header("Location: user_list.php");
        exit();
    }

    echo "<form method='post' action='add_user.php'>";
    echo "<label for='new_username'>Username:</label>";
    echo "<input type='text' name='new_username' id='new_username' required><br><br>";
    echo "<label for='new_email'>Email:</label>";
    echo "<input type='email' name='new_email' id='new_email' required><br><br>";
    echo "<label for='new_password'>Password:</label>";
    echo "<input type='password' name='new_password' id='new_password' required><br><br>";
    echo "<input type='submit' value='Add User'>";
    echo "</form>";

    echo "<p><a href='user_list.php'>Back to User List</a></p>";
} else {
    echo "You do not have permission to access this page.";
}
?>

</body>

</html>