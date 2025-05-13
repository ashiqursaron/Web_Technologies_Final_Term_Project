<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}
?>
<h2>Welcome to Admin Panel, <?= $_SESSION['admin_user'] ?>!</h2>
<a href="logout.php">Logout</a>