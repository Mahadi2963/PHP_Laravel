<?php
session_start();

if (isset($_SESSION['email'])) {
    $_SESSION = array();

    session_destroy();

    header("Location: login_form.php");
    exit();
} else {
    header("Location: login_form.php");
    exit();
}