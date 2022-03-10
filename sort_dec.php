<?php
 class sort_dec
{ 
 public static function greet()
 {
 $servername = "127.0.0.1";
 $username = "root";
 $password = "";
 $dbname = "test_db";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 } 
 $result = mysqli_query($conn, "SELECT * FROM `products` ORDER BY `DATE_CREATE` DESC");
echo '<table><tr><td><b>Название</b></td><td><b>Дата</b></td></tr>';
  while ( ( $name = mysqli_fetch_assoc($result) ) )
  {
   echo '<tr><td>' . $name['PRODUCT_NAME']. '</td><td>'. $name['DATE_CREATE'].'</td></tr>';
  }
  echo '</table>';
  mysqli_close($conn);
 }
}

?>