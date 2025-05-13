<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["contact_email"] = $_POST["email"];
    echo "Thank you! We'll reply to: " . $_SESSION["contact_email"];
}
?>

<form method="POST">
  <input type="text" name="name" required placeholder="Name">
  <input type="email" name="email" required placeholder="Email">
  <textarea name="message" required placeholder="Your Message"></textarea>
  <button type="submit">Send</button>
</form>