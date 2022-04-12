<?php
 class cproducts
{
 public static function greet($quantity)
 {
 $servername = "127.0.0.1";
 $username = "root";
 $password = "";
 $dbname = "test_db";

 $conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 } 
 $result = mysqli_query($conn, "SELECT * FROM `products` WHERE `PRODUCT_QUANTITY` > ". $quantity);
echo '<table><tr><td><b>Название</b></td><td><b>Количество</b></td></tr>';
  while ( ( $name = mysqli_fetch_assoc($result) ) )
   {  
   echo '<tr><td>' . $name['PRODUCT_NAME']. '</td><td>'. $name['PRODUCT_QUANTITY']. '</td></tr>'; 
   }  
echo '</table>';  
  mysqli_close($conn);
}
}
?>
