<?php
 class plus_and_minus
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
 echo '<table><tr><td><b>Количество</b></td><td><b>Плюс</b></td><td><b>Минус</b></td>'; 
  while ( ( $name = mysqli_fetch_assoc($result) ) )
  {
   echo "<p  id=h{$name['ID']}><tr><td>". $name['PRODUCT_QUANTITY']."</td><td><button onclick=\"plus_quanity('{$name['ID']}')\">+</button>
                                                             </td><td><button onclick=\"minus_quanity('{$name['ID']}')\">-</button></p></td></tr>";
  }
  echo '</table>';
  mysqli_close($conn);
}
}
?>

<script>
 function plus_quanity(num) {
$("#h" + num);

    $.ajax({
    url: '/ajax_plus.php',        
    method: 'get',             
    dataType: 'json',          
    data: {id: num},     
    success: function(data){   
        alert(data);          
    }
});
}
</script>

<script>
 function minus_quanity(num) {
$("#h" + num);

    $.ajax({
    url: '/ajax_minus.php',        
    method: 'get',            
    dataType: 'json',          
    data: {id: num},     
    success: function(data){   
        alert(data);            
    }
});
}
</script>
