<?php
session_start();

$admin_user = "admin";
$admin_pass = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $admin_user && $password == $admin_pass) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_user'] = $username;
        header("Location: admin_panel.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>
<form method="POST">
  <input type="text" name="username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit">Login</button>
</form>