<?php
 class plus_and_minus
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
    url: '/ajax_plus.php',         /* Куда пойдет запрос */
    method: 'get',             /* Метод передачи (post или get) */
    dataType: 'json',          /* Тип данных в ответе (xml, json, script, html). */
    data: {id: num},     /* Параметры передаваемые в запросе. */
    success: function(data){   /* функция которая будет выполнена после успешного запроса.  */
        alert(data);            /* В переменной data содержится ответ от ajax.php. */
    }
});
}
</script>

<script>
 function minus_quanity(num) {
$("#h" + num);

    $.ajax({
    url: '/ajax_minus.php',         /* Куда пойдет запрос */
    method: 'get',             /* Метод передачи (post или get) */
    dataType: 'json',          /* Тип данных в ответе (xml, json, script, html). */
    data: {id: num},     /* Параметры передаваемые в запросе. */
    success: function(data){   /* функция которая будет выполнена после успешного запроса.  */
        alert(data);            /* В переменной data содержится ответ от ajax.php. */
    }
});
}
</script>