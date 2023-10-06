
<?php 
session_start();
if(!isset($_SESSION['user'])) 
{
 header("location:loginscreen.php");


 
}


require 'twilio-php-master/Twilio/autoload.php';
use Twilio\Rest\Client;
require('connect.php');


$userid = $_SESSION['userid'];
$sql = "SELECT phone FROM users WHERE id = '$userid'";
 $result = mysqli_query($db,$sql);

//$sql = "SELECT phone
//FROM users
//where max(id)
 //   from users";

 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
        $phone = $row["phone"];
   
?>
   <html>
   <br><br>
   </html>
<?php
       
echo $phone;



// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC23ffcb1d92d798bcfa9026b1128e7dc4';
$auth_token = '371d4c8bf7c97374dd798ce67533f9ab';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+17249543222";


$rand = mt_rand(100000,999999); 


 // $query2 = "SELECT 'users' SET verifycode='1234' where id = '2'";




$query3= "SELECT verifycode FROM users
    WHERE id = '$userid'";

 $result = $db->query($query3);
while ($row = mysqli_fetch_array($result))
{

	 echo $row['verifycode'];
	 $random = $row['verifycode'];


/*
while ($row = mysqli_fetch_array($query3))
{

	 echo $row['verifycode'];
 	$verifycode="result";

*/




$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    $phone,
    array(
        'from' => $twilio_number,
        'body' => 'Hello, Welcome to JUSTCUT enter this number  to verify your account ' . $random

    )
);





}}}

?>





<title>JustCut</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<body>


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/123/index.html" class="w3-bar-item w3-button">HOME</a>
    <a href="\123\login.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> LOGIN</a>
    <a href="/123/register.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> REGISTER</a>
    <a href="\123\add1.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> ADD</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>







Enter the code that has been sent to your number

<div class="form">
	please enter the code that has been sent to your phone
<h1>Code</h1>
<form name="verifycode" class = "container" method="POST" action="activateaccount.php">
    Username
<input type="text" name="code" placeholder="code" required /><Br>


<input type="submit" name="submit" value="code" onclick="activateaccount.php"> <br><Br>
</form>


</div>



</body>
</html>

