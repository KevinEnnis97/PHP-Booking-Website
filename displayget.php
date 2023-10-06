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
<br><br><br>s









































<?php
include 'connect.php';
$shopid = $_GET["shopid"];
$sql= "SELECT * FROM shop
    WHERE shopid = '$shopid'";
$result = $db->query($sql);
while ($row = mysqli_fetch_array($result))
{
$shopid = $_GET["shopid"];
?> <br> <?php
		 echo $row['firstname'];
?> <br> <?php
        echo $row['detail'];
?> <br> <?php
         echo $row['address'];
?> <br> <?php

}

$sql2= "SELECT * FROM shopimages
    WHERE id = '$shopid'";
$result2 = $db->query($sql2);
while ($row2 = mysqli_fetch_array($result2))
{
/*
?>
<img src="<?php echo 'uploads/'.$row2['file_name'];?>" height="20%" width ="20%" />
<?php }
?>

*/
}
?>



<?php

$sql2= "SELECT * FROM shopimages
    WHERE id = '$shopid'";
$result2 = $db->query($sql2);


?>

<html>
<head>
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 200;

/*  SECTIONS  */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}
.col:first-child { margin-left: 0; }

/*  GROUPING  */
.group:before,
.group:after { content:""; display:table; }
.group:after { clear:both;}
.group { zoom:1; /* For IE 6/7 */ }
/*  GRID OF THREE  */
.span_3_of_3 { width: 100%; }
.span_2_of_3 { width: 66.13%; }
.span_1_of_3 { width: 32.26%; }

/*  GO FULL WIDTH BELOW 480 PIXELS */
@media only screen and (max-width: 480px) {
	.col {  margin: 1% 0 1% 0%; }
	.span_3_of_3, .span_2_of_3, .span_1_of_3 { width: 100%; }
}



  

</style>
</head>
<body>
<div class="section group">
	<div class="col span_1_of_3">
	This is column 1
	</div>
	<div class="col span_1_of_3">
	This is column 2
	</div>
	<div class="col span_1_of_3">
	This is column 3
	</div>
</div>



<?php
$result2 = $db->query($sql2);
while ($row2 = mysqli_fetch_array($result2))
{

?>
	

<div class="gallery">
  <a target="_blank" href="<?php echo 'uploads/'.$row2['file_name'];?>">
     <img src="<?php echo 'uploads/'.$row2['file_name'];?>" alt="Forest" width="600" height="400">
  </a>
</div>



<?php } ?>


<div class="section group">
	<div class="col span_1_of_3">
	This is column 1
	</div>
	<div class="col span_1_of_3">
	This is column 2
	</div>
	<div class="col span_1_of_3">
	This is column 3
	</div>
</div>





</body>
</html>

