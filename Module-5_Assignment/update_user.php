<?php
session_start();

if (isset($_SESSION['email']) && $_SESSION['email'] === 'admin@gmail.com') {

    if (isset($_GET['key'])) {
        $key = $_GET['key'];

        $user_data = file_get_contents('user_data.txt');
        $user_data = unserialize($user_data);

        if (array_key_exists($key, $user_data)) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $newUsername = $_POST['new_username'];

                $user_data[$key]['username'] = $newUsername;

                file_put_contents('user_data.txt', serialize($user_data));

                header("Location: user_list.php");
                exit();
            } else {
                header("Location: edit_user.php?key=$key");
                exit();
            }
        } else {
            echo "Invalid user key.";
        }
    } else {
        echo "User key is missing.";
    }
} else {
    echo "You do not have permission to access this page.";
    echo "<p><a href='user_dashboard.php'>Back to Dashboard</a></p>";

}