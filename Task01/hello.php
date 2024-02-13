<?php
$firstName = "Иван";
$lastName = "Цыбисов";

date_default_timezone_set('Europe/Moscow'); 

echo "Дата: " . date("Y-m-d") . "<br>";
echo "Время: " . date("H:i:s") . "<br>";
echo "Имя: " . $firstName . "<br>";
echo "Фамилия: " . $lastName;
?>