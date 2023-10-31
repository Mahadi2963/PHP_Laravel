<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>
    <h2>Admin Dashboard</h2>

    <?php
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    $email = $_SESSION['email'];
    $role = $_SESSION['role'];

    echo "<p>Welcome, $email (Admin)!</p>";

    include 'users.php';

    echo "<table border='1'>";
    echo "<tr><th>Email</th><th>Role</th><th>Action</th></tr>";

    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . $user['email'] . "</td>";
        echo "<td>" . $user['role'] . "</td>";
        echo "<td><a href='edit_user.php?email=" . $user['email'] . "'>Edit</a> | <a href='delete_user.php?email=" . $user['email'] . "'>Delete</a></td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<p><a href='add_user.php'>Add User</a></p>";
    echo "<p><a href='users_list.php'>View User List</a></p>";
    echo "<p><a href='logout.php'>Logout</a></p>";
} else {
    header("Location: login_form.php");
}
?>
</body>

</html>