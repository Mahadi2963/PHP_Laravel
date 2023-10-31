<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $user_data = file_get_contents('user_data.txt');
    $user_data = unserialize($user_data);
    $user_data[] = ['username' => $username, 'email' => $email, 'password' => $password];
    file_put_contents('user_data.txt', serialize($user_data));

    header("Location: login_form.php");
}