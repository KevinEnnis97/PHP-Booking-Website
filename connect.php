<?php
$server = "localhost";
$username = "root";
$pass = "12345";
$dbname = "justcut";

//$db = new mysqli ($user, $username, $pass, $dbname) or die ("unable to connect");



$db = new mysqli($server, $username, $pass, $dbname);
//check connection
//if ($db->connect_error){die ("connection failed:".$db->connect_error);}
if (!$db){die("Connection failed: ".mysqli_connect_error());}


?>