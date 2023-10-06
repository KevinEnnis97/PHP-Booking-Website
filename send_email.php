<?php
include 'connect.php';
/*
$query3= "SELECT verifycode FROM users
    WHERE id = '4'";

$result = $db->query($query3);
while ($row = mysqli_fetch_array($result))
{

	 echo $row['verifycode'];
	 $random = $row['verifycode'];




$query2= "SELECT email FROM users
    WHERE id = '4'";
*/


$to      = 'kevinennis97@gmail.com';
$subject = 'Fake sendmail test';
$message = 'If we can read this, it means that our fake Sendmail setup works!';

if(mail($to, $subject, $message)) {
    echo 'Email sent successfully!';
} else {
    die('Failure: Email was not sent!');
}






?>