<html>
<head>
	<title>Product for me</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<?php
require_once 'cproducts.php';
require_once 'sort_dec.php';
require_once 'button_visible.php';
require_once 'no_visible.php';
require_once 'plus_and_minus.php';

echo '<p>Задача 2 Возвращать из таблицы товаров хотя бы с одним ограничителем';
cproducts::greet(80);


echo '<p>Задача 3 Сортировка по дате создания (по убыванию)';
sort_dec::greet();


echo '<p>Задача 4 добавить кнопку скрыть';
button_visible::greet();


echo '<p> Задача 8 на вывод всех данных кроме скрытых';
no_visible::greet();


echo '<p> Задача 9 изменение данных с помщью + -';
plus_and_minus::greet();

?>
</body>
</html>
