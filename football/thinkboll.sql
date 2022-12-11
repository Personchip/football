-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 10 2022 г., 13:23
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `thinkboll`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Accounts`
--

CREATE TABLE `Accounts` (
  `ID` int NOT NULL,
  `Login` varchar(32) CHARACTER SET cp1251 COLLATE cp1251_general_cs NOT NULL,
  `Password` varchar(32) CHARACTER SET cp1251 COLLATE cp1251_general_ci NOT NULL,
  `access` int DEFAULT NULL,
  `IP_reg` int NOT NULL,
  `IP_last` int NOT NULL,
  `UA_reg` int NOT NULL,
  `UA_last` int NOT NULL,
  `HTTP_USER_AGENT` varchar(32) CHARACTER SET cp1251 COLLATE cp1251_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `Accounts`
--

INSERT INTO `Accounts` (`ID`, `Login`, `Password`, `access`, `IP_reg`, `IP_last`, `UA_reg`, `UA_last`, `HTTP_USER_AGENT`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 0, 0, 0, 0, '0'),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 0, 0, 0, 0, 0, '0'),
(4, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 0, 0, 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int UNSIGNED NOT NULL,
  `user_login` varchar(30) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_fio` varchar(64) CHARACTER SET cp1251 COLLATE cp1251_general_ci NOT NULL DEFAULT '',
  `user_ip` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `user_password`, `user_fio`, `user_ip`) VALUES
(1, 'user', '0d8d5cd06832b29560745fe4e1b941cf', '13010cb8950bc8eeae72595a680cc3a4', 0),
(2, 'user1', 'b1734c3c466b3ddcdd3b841d02a24b56', '', 0),
(3, 'user2', 'd079f41b77a39477b1547e6259d70ebd', '', 0),
(4, 'user3', '9c47a0019e1a7db25de579f2f3b62964', '', 0),
(5, 'Sungat', '14e1b600b1fd579f47433b88e8d85291', 'Балташ Сунгат ', 0),
(6, 'nurs111', '6d5b99e2462271fc96ae32a5266fca93', 'Нурсипат', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Accounts`
--
ALTER TABLE `Accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Accounts`
--
ALTER TABLE `Accounts`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
