-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Ноя 11 2023 г., 10:21
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
-- База данных: `book`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Вторые блюда'),
(2, 'Супы'),
(3, 'Салаты'),
(4, 'Десерты'),
(5, 'Выпечка'),
(6, 'Первые блюда');

-- --------------------------------------------------------

--
-- Структура таблицы `recipes`
--

CREATE TABLE `recipes` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `preparation` text NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `recipes`
--

INSERT INTO `recipes` (`id`, `user_id`, `title`, `category_id`, `img`, `description`, `preparation`, `time`) VALUES
(1, 4, 'Спагетти с тефтельками', 1, '6549f925dba8a.jpeg', 'Здесь Вы можете написать информацию для автора…', 'Здесь Вы можете написать информацию для автора…', '05:00'),
(2, 4, 'Спагетти с тефтельками', 1, '6549f95e87c3a.jpeg', 'Ням ням', 'Ням ням', '01:50'),
(4, 4, 'Борщ', 2, '654e1e78454c6.jpeg', 'Здесь Вы можете написать информfcssfацию для автора…', 'Здесь Вы можете написать инфорsfsfsfsацию для автора…', '01:25'),
(5, 5, 'Борщ', 2, '654e1f5e24147.jpeg', 'Здесь Вы можете написатcsfsfь информацию для автора…', 'Здесь Вы можете написsfsfать информацию для автора…', '01:25'),
(7, 5, 'Картошечка с отбивной', 1, '654ef9b63571c.jpeg', 'Здесь Вы можете написать информацию для автора…', 'Здесь Вы можете написать информацию для автора…', '02:30');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `status`) VALUES
(1, 'ann', 'ann@mail.ru', '6eaba0ec2895244b0dcd02f4978b2a97', 'user'),
(2, 'admin', '1@1', '6eaba0ec2895244b0dcd02f4978b2a97', 'user'),
(3, 'Аня', 'email@mail', '6eaba0ec2895244b0dcd02f4978b2a97', 'user'),
(4, 'ANCHOYS', '2@2mail.ru', '12345', 'user'),
(5, 'admin', 'admin@mail.ru', '12345', 'admin'),
(6, 'amogus', 'am@mail.ru', '12345', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
