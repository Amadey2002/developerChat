-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 29 2022 г., 20:53
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `devchat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `private`
--

CREATE TABLE `private` (
  `id` int(10) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `msg` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `private`
--

INSERT INTO `private` (`id`, `name`, `msg`) VALUES
(1, '', ''),
(2, 'Amadey', ''),
(3, 'Amadey', ''),
(4, 'Amadey', ''),
(5, 'Amadey', ''),
(6, 'Amadey', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `pass` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`, `admin`) VALUES
(50, 'wer234@wef.ru', '03316c37657d6ff8e0fefb5f33a34110', 'sadgfwerf', 0),
(48, 'wdefwererf@wsdf.ru', '4522dbaed2874c8b0f4a902192c4b625', 'wefwer', 0),
(49, 'wertwer4t@rthrth', '2d790112f85319e18466695672aa4706', 'erfgert', 0),
(47, 'efgerg@sdf.ru', '39ca836d4fef7a7d79ad1c99b5f95a53', 'hjgchgc', 0),
(46, 'sadf@wlsdknghfw.ru', '9b0ebc31e1643e67c357bc2441550f88', 'QLUJWHdg;SDGF', 0),
(45, 'wdefwerf@wsdf.ru', '39ca836d4fef7a7d79ad1c99b5f95a53', 'Amadey', 0),
(44, 'sadfsadf@inwedffreeddrfg.ru', 'acafdcc6752266482efa358031b18b9c', 'qwertyu', 0),
(43, 'sadfsadf@inwedffreddrfg.ru', 'acafdcc6752266482efa358031b18b9c', 'qwertyu', 0),
(42, 'sadfsadf@inwedfeddrfg.ru', 'acafdcc6752266482efa358031b18b9c', 'qwertyu', 0),
(41, 'sadfsadf@inwdrfg.ru', 'acafdcc6752266482efa358031b18b9c', 'qwertyu', 0),
(40, 'sadfsadf@ing.ru', 'acafdcc6752266482efa358031b18b9c', 'qwertyu', 0),
(38, 'pgihf@gmail.ru', 'fe8f9604f9e2cc4827ada1a0597a5b96', 'Slava', 0),
(37, 'asdfsdgf@yandex.ru', '2fa44db91d213cee095874da397e5ef1', 'Arkadiy', 0),
(39, 'natalprhrv@gmail.com', 'be1d337a55553430f2b925ac4db8b11e', 'fuck', 0),
(36, 'adsgkfhjasf@mail.ru', '9086107b729aa94d7a4d0a815942f1d5', 'Boris', 0),
(34, 'vip.amadey@inbox.ru', '39ca836d4fef7a7d79ad1c99b5f95a53', 'Amadey', 1),
(51, 'qwert43@sdgf.ru', '0a99132cbee609684c3c01649bb94f31', 'qwert1435', 0),
(52, 'qwerty@a.ru', 'c12d31910b22b8cf337f4376feb50194', 'Ford', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `private`
--
ALTER TABLE `private`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `private`
--
ALTER TABLE `private`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
