


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
    <a href="/123/index.php" class="w3-bar-item w3-button">HOME</a>
    <a href="\123\loginscreen.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> LOGIN</a>
    <a href="/123/register.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> REGISTER</a>
    <a href="\123\add1.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> ADD</a>
    <a href="logout.php" class="w3-bar-item w3-white w3-button w3-hide-small w3-right w3-hover-red">LOGOUT</a>
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

<!--
Name: Kevin Ennis
Organisation: IT Carlow
Date: 22/03/2018
Sancationed: Catherine Monloney
Purpose: php for login screen and building the login page

-->
<?php include 'connect.php';
//session variable for attempts to login
session_start();
if (isset($_POST['username']) && isset($_POST['password']))
{
	$attempts = $_SESSION['attempts'];
//selects username and password from table
	$sql = "SELECT * FROM users WHERE Username ='$_POST[username]' AND Password ='$_POST[password]'";
	$result = mysqli_query($db,$sql);

if(mysqli_num_rows ($result)==1)
			{
				$_SESSION['user']=$_POST['username'];
				while ($row = mysqli_fetch_assoc($result))
				{ 
				 	
				 	$_SESSION["userid"]=$row["id"];
				 	$_SESSION["verified"]=$row["verified"];
				}
				header('location: index.php');
				buildPage(3, true);


}
	
		//if attempts are more than 3 redirects to home page
	
		else
		{
			$attempts++;
			if ($attempts <=3)
			{	$_SESSION['attempts'] = $attempts;
			 buildPage($attempts, false);

			 echo "<div class='errorstyle'> No record found with this login name and password combination";
			}
			else{
				echo "<div class='errorstyle'>Sorry - You have used all 3 attempts <br>
						shutting down...</div>";
				//echo "<script>window.location=\"index.php\";</script>";

			}
		}
		
}
else
{
	//building page for intial display

	$attempts = 1; //screen will be displayed first  attempts
	$_SESSION['attempts'] =$attempts; //set session variables so that tbhe number of attempts can be counted
	buildPage($attempts, false); //parameter passed so  that a heading can display the number of attempts

}

function buildPage($att, $success)
{	
	//function to build the page when success
	echo <<<EOD
	<!--Preferred browser is Chrome-->
<!DOCTYPE html>
<html>










	

EOD;
		//if login is false prints out attempt numbers 
if ($success == false)
{
	echo "<h2> Attempt Number: $att </h2>";
	
	echo <<<EOD
		<div class="form">
<h1>Log In</h1>
<form action="" class = "container" method="post" name="login">
	<label>Username</label>
<input type="text" name="username" placeholder="Username" required /> <br>
<label>Password</label>
<input type="password" name="password" placeholder="Password" required /><br> <br>
<input name="submit" type="submit" value="Login" /><br>
</form><br>
<p>Not registered yet? <a href='register.php'>Register Here</a></p>
</div>
EOD;
}
else //success is true then no need to display the username and password login form
{
	?> 
	<div class="form">
<h1>Log In</h1>
<form action="" class = "container" method="post" name="login">
	<label>Username</label>
<input type="text" name="username" placeholder="Username" required /> <br>
<label>Password</label>
<input type="password" name="password" placeholder="Password" required /><br> <br>
<input name="submit" type="submit" value="Login" /><br>
</form><br>
<p>Not registered yet? <a href='register.php'>Register Here</a></p>
</div>
<?php
		
					
					
					
}	
	echo "</div>

	</div>
	</body>
</html>";
		
}
	
	mysqli_close($db);
?>
