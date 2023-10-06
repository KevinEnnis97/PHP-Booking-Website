
<?php  
include 'connect.php'
$result = mysql_query("SELECT MAX(id) FROM users");
$idrow = mysql_fetch_row($result);

?>