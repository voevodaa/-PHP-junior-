<?php
 class no_visible
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
 $result = mysqli_query($conn, "SELECT * FROM `products`  Where `VISIBLE`= 1");
 echo '<table><tr><td><b>ID</b></td> <td><b>Продукт ID</b></td> <td><b>Название</b></td><td><b>Цена</b></td> <td><b>Описание</b></td> <td><b>Количество</b></td> <td><b>Дата</b></td></tr>';
 while ( ( $name = mysqli_fetch_assoc($result) ) )
  {
    echo '<tr><td>'. $name['ID']. '</td><td> '. $name['PRODUCT_ID']. '</td><td> '.$name['PRODUCT_NAME']. '</td><td> '.$name['PRODUCT_PRICE'].'</td><td> '. $name['PRODUCT_ARTICLE']. '</td><td> '.$name['PRODUCT_QUANTITY']. '</td><td> '.$name['DATE_CREATE']. '</td></tr>';
 }
 echo '</table>';
 mysqli_close($conn);
}
}
?>