<?php
 class button_visible
{ 
 public static function greet()
 {
 $servername = "127.0.0.1";
 $username = "root";
 $password = "";
 $dbname = "test_db";

 $conn = mysqli_connect($servername, $username, $password, $dbname);
 if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 } 
 $result = mysqli_query($conn, "SELECT * FROM `products`");

 while ( ( $name = mysqli_fetch_assoc($result) ) )
  {
  
   echo "<p  id=h{$name['ID']}>". $name['ID']. ' '. $name['PRODUCT_ID']. ''.$name['PRODUCT_NAME']. ' '.$name['PRODUCT_PRICE']. ' '. $name['PRODUCT_ARTICLE'].' '.$name['PRODUCT_QUANTITY']. ' '.$name['DATE_CREATE']. "<button onclick=\"mytoggle('{$name['ID']}')\">Скрыть</button> </p> ";
 }
 mysqli_close($conn);
}
}
?>

<script>
 function mytoggle(num) {
$("#h" + num).toggle();        

    $.ajax({                  
    url: '/ajax.php',         
    method: 'get',            
    dataType: 'json',         
    data: {id: num},    
    success: function(data){   
        alert(data);            
    }
});
}
</script>
