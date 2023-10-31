<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>
    <h2>Edit User</h2>

    <?php

session_start();

if (isset($_SESSION['email']) && $_SESSION['email'] === 'admin@gmail.com') {
    $user_data = file_get_contents('user_data.txt');
    $user_data = unserialize($user_data);

    if (isset($_GET['key'])) {
        $key = $_GET['key'];

        if (array_key_exists($key, $user_data)) {
            $user = $user_data[$key];

            echo "<form method='post' action='update_user.php?key=$key'>";
            echo "<label for='new_username'>New Username:</label>";
            echo "<input type='text' name='new_username' id='new_username' value='{$user['username']}' required><br><br>";
            echo "<input type='submit' value='Update User'>";
            echo "</form>";
        } else {
            echo "Invalid user key.";
        }
    } else {
        echo "User key is missing.";
    }

    echo "<p><a href='user_list.php'>Back to User List</a></p>";
} else {
    echo "You do not have permission to access this page.";
    echo "<p><a href='user_dashboard.php'>Back to Dashboard</a></p>";
}
?>

</body>

</html>