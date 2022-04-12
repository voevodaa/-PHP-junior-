<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['id'];
$sql = "UPDATE Products SET Visible='0' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
