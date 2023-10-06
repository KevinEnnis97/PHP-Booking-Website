<?php
include 'connect.php';






$result = $db->query("SELECT COUNT(*) FROM `users`");
$row = $result->fetch_row();
echo ' ', $row[0];



?>