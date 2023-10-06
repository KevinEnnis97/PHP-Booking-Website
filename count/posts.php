<?php
include 'connect.php';




$result = $db->query("SELECT COUNT(*) FROM `shop`");
$row = $result->fetch_row();
echo ' ', $row[0];


//$largestNumber = "SELECT max(shopid) FROM table";
//$results = mysqli_query($db, $largestNumber);

//$row = mysqli_fetch_array($results);

//echo $row[0];



//$results = $db->query(largestNumber);
//if ($result->num_rows > 0 ) {

//}

//while ($row = mysqli_fetch_array($result))
//{
//echo "{$largestNumber}"
 //       echo "<br>";
//}




?>