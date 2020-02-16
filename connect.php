<?php
$host='localhost'; //название сервера с базой данных
$name='root'; // имя пользователя
$psswd=''; // пароль
$link=mysqli_connect($host,$name,$psswd)
	or die("Ошибка " . mysqli_error($link)); // подключение к серверу
mysqli_select_db($link, 'databasename'); // выбор на сервере базы данных
mysqli_query($link, "SET NAMES utf8"); // кодировка общения utf8
?>