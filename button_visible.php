<?php
 class button_visible
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
$("#h" + num).toggle();        /* скрытие записи на html страничке*/ 

    $.ajax({                  /*Запрос на ДБ для скрытия записи путем изменения колонки VISIBLE*/
    url: '/ajax.php',         /* Куда пойдет запрос */
    method: 'get',             /* Метод передачи (post или get) */
    dataType: 'json',          /* Тип данных в ответе (xml, json, script, html). */
    data: {id: num},     /* Параметры передаваемые в запросе. */
    success: function(data){   /* функция которая будет выполнена после успешного запроса.  */
        alert(data);            /* В переменной data содержится ответ от ajax.php. */
    }
});
}
</script>