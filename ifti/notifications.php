<?php
if (!isset($_COOKIE['seen_notification'])) {
    echo "<div style='background:yellow;padding:10px;'>📢 New Features Added! Check admin panel.</div>";
    setcookie("seen_notification", "true", time() + 3600); // 1 hour
}
?>
<h2>Notifications Page</h2>