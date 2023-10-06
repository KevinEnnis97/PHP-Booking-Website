
<?php 
session_start();
if(!isset($_SESSION['user'])) 
{
 header("location:loginform.html");


 
}

if($_SESSION['verified']== 0)
{
  header("location:send_sms.php");
}


?>
<!DOCTYPE html>
<html>







<title>JustCut</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<body>


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/123/index.html" class="w3-bar-item w3-button">HOME</a>
    <a href="\123\loginscreen.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> BOOKINGS</a>
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

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">J U S T <span class="w3-hide-small"> &nbsp; </span> C U T</span> <br><Br><Br>

    <body>
  <form class="search-container" action="search.php" method="POST"> 
    <input type="text" id="search-bar" name="search" placeholder="What can I help you with today?">
  <!-- <a href="search.php"><img class="search-icon" src="static/search-icon.png" ></a> -->

    <input type="submit" name= "submit" value="submit" class=small>

  </form>
</body>





  </div>
</div>

Welcome <?php echo $_SESSION['userid'];
echo $_SESSION['verified']; ?>
<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">Just Cut</h3>
  <p class="w3-center"><em>Find your nearest barber</em></p>
  <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
    qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>Just Cut</b></p><br>
      <img src="static/shop1.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16"></p>
  <p class="w3-wide"></i></p>
  <div class="w3-light-grey">

  </div>

  </div>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">

<?php 

include( 'count/posts.php' ); ?>

    </span><br>
    Shops
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">
      

      <?php 

include( 'count/users.php' ); ?>
  






    </span><br>
    Users
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">0</span><br>
    Bookings
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">

      <?php 

include( 'count/counter.php' ); ?>
  

</span><br>
     Monthly Vistiors
  </div>
</div>



 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}




</script>

</body>
</html>
