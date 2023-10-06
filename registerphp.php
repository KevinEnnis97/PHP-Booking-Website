<?php
require('connect.php');
// If form submitted, insert values into the database.
if (isset($_POST['submit'])){
        // removes backslashes
    $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string

    $email = stripslashes($_REQUEST['email']);

    $password = stripslashes($_REQUEST['password']);

    $phone = stripslashes($_REQUEST['phone']);


    $rand = mt_rand(100000,999999);

        $query = "INSERT into `users` (username, password, email, verifycode, phone)
VALUES ('$username', '$password', '$email', '$rand', '$phone')";
        $result = mysqli_query($db,$query);

        header('location:loginscreen.php');
    }
       
?>

