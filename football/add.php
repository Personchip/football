<?php
$data = $_POST['list']; # Получаем данные за POST запроса
if ($data == '') {
    header('Location: /notes.php'); # Перенаправляем на главную страницу
}

require 'confdb.php'; # Подключаем файл базы данных

$sql = 'INSERT INTO mydata(data) VALUES(:data)'; # Создаем запрос SQL
$query = $pdo->prepare($sql); # Подготавливаем к отправке
$query->execute(['data' => $data]); # Отправляем запрос подставляя значение переменной

header('Location: /notes.php');