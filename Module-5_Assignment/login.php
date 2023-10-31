<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_data = file_get_contents('user_data.txt');
    $user_data = unserialize($user_data);

    foreach ($user_data as $user) {
        if ($user['email'] === $email && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $user['username'];

            header("Location: user_dashboard.php");
            exit();
        }
    }

    // If login Error.
    echo "Invalid email or password. Please try again.";
    echo "<br>";
    echo "<p>Try Again? <a href='login_form.php'>Login Page</a></p>";

}