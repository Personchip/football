<?php
/*
 * Данные для подключения к БД MYSQL
 */
define('DB_Host', 'localhost');
define('DB_User', 'root');
define('DB_Password', '');
define('DB_Name', 'thinkboll');

/*
 * 1. Получаем данные авторизации
 * 2. Устанавливаем таблицу символов UTF-8
 */
$db = mysqli_connect(DB_Host, DB_User, DB_Password, DB_Name); // 1
mysqli_query($db, "SET NAMES utf8"); // 2