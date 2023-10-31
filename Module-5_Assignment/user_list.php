<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>

<body>
    <h2>User List</h2>

    <?php
session_start();

if (isset($_SESSION['email']) && $_SESSION['email'] === 'admin@gmail.com') {
    $user_data = file_get_contents('user_data.txt');
    $user_data = unserialize($user_data);

    echo "<table border='1'>";
    echo "<tr><th>Username</th><th>Email</th><th>Action</th></tr>";

    foreach ($user_data as $key => $user) {
        echo "<tr>";
        echo "<td>" . $user['username'] . "</td>";
        echo "<td>" . $user['email'] . "</td>";
        echo "<td><a href='edit_user.php?key=$key'>Edit</a> | <a href='delete_user.php?key=$key'>Delete</a></td>";
        echo "</tr>";
    }

    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td><a href='add_user.php'>Add User</a></td>";
    echo "</tr>";

    echo "</table>";

    echo "<p><a href='user_dashboard.php'>Back to Dashboard</a></p>";
} else {
    echo "You do not have permission to access this page.";
    echo "<p><a href='user_dashboard.php'>Back to Dashboard</a></p>";
}
?>

</body>

</html>