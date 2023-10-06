<html>


<html>
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




  </div>
</div>
<br><br><br>




















</html>




<?php
include 'connect.php';


//echo "search";

/*

if(isset($_POST['submit'])){
echo 'hello';

?><Br><Br><Br>
<?php

 $latitu = $_POST['Latitude'];
 $longit = $_POST['Longitude'];

echo distance($latitu, $longit, 53.2120, 6.8195, "K") . " Kilometers<br>";




}
	*/




if(isset($_POST['submit'])){ 
	$search = $_POST['search'];
$sql= "SELECT * FROM shop
    WHERE detail = '$search'";
$result = $db->query($sql);
while ($row = mysqli_fetch_array($result))
{

?><br><?php



 
// Storing session data



?>

<a href="displayget.php?shopid=<?php echo $row['shopid']; ?>" ><?php echo $row['firstname']; ?></a><?php




?>	 <html> <br> </html> <?php
        echo $row['detail'];
?>	 <html> <br> </html> <?php
         echo $row['address'];

?>	

<br>	 

</div>

  <?php
        
}
}

 






/*
if(isset($_POST['submit'])){
echo 'hello';



 $search = $_POST['search'];


echo ($search) 

}

*/



?>

