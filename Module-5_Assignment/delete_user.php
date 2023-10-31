<?php
session_start();

if (isset($_SESSION['email']) && $_SESSION['email'] === 'admin@gmail.com') {

    if (isset($_GET['key'])) {
        $key = $_GET['key'];

        $user_data = file_get_contents('user_data.txt');
        $user_data = unserialize($user_data);

        if (array_key_exists($key, $user_data)) {
            unset($user_data[$key]);

            $user_data = array_values($user_data);

            file_put_contents('user_data.txt', serialize($user_data));

            header("Location: user_list.php");
            exit();
        } else {
            echo "Invalid user key.";
        }
    } else {
        echo "User key is missing.";
    }
} else {
    echo "You do not have permission to access this page.";
}