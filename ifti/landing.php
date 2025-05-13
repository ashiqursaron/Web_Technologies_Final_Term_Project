<?php
session_start();
?>
<h1>Welcome to Our Website</h1>
<?php
if (isset($_SESSION['admin_user'])) {
    echo "<p>Logged in as: " . $_SESSION['admin_user'] . "</p>";
} else {
    echo "<p><a href='login.php'>Admin Login</a></p>";
}
?>