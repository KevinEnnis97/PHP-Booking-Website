
<?php 
session_start();
if(!isset($_SESSION['user'])) 
{
 header("location:loginform.html");


 
}



require('connect.php');
$userid = $_SESSION['userid'];
$query3= "SELECT verifycode FROM users
    WHERE id = '$userid'";

 $result = $db->query($query3);
while ($row = mysqli_fetch_array($result))
{

	 echo $row['verifycode'];
	 $random = $row['verifycode'];

if($_POST["code"] == $random)
{
	//echo "matched";



// $db->execute("UPDATE users SET verified='1' where id = '4'");


				$sql = "UPDATE users SET verified ='1' WHERE id ='$userid'";
				if (! mysqli_query($db, $sql))
				{
				  echo "Error in Update query ".mysli_error($db);
				}
				else
				{
				 

				  header('location:loginscreen.php');

				}




}}
?>