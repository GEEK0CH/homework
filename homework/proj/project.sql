-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 10 2022 г., 15:42
-- Версия сервера: 8.0.24
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id` int UNSIGNED NOT NULL,
  `user_id` smallint UNSIGNED NOT NULL,
  `date` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id`, `user_id`, `date`, `text`, `image`) VALUES
(26, 5, '2022-09-09 16:07:19', 'dwa', '5de9053e31d40f8bbee576c10cbe84730fe8587d.jpg'),
(28, 1, '2022-09-10 15:33:21', 'ddd', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date`) VALUES
(1, 'ADM', 'adm@mail.ru', 'admin', '2022-09-08'),
(5, 'Natan', 'natan@mail.ru', '27dc59a24fd6d77d570c2b25a77db5213bc65399', '2022-09-02'),
(7, 'Julia', 'julia@mail.ru', 'c111a9b8fa76d79da742aba6a9f87e3628c67db9', '2022-09-02'),
(14, 'Natan', 'natan@mail.ru3', 'c111a9b8fa76d79da742aba6a9f87e3628c67db9', '2022-09-07'),
(16, 'Natan', 'natanbayrakov02@mail.r', 'af82033cc7466c3cf66e045c004ff477aee1861c', '2022-09-08'),
(17, 'Natan', 'natanbayrakov02@mail.', 'af82033cc7466c3cf66e045c004ff477aee1861c', '2022-09-08'),
(18, 'Natan', 'natanbayrakov02@mail', 'af82033cc7466c3cf66e045c004ff477aee1861c', '2022-09-08'),
(19, 'lexa', 'lexa@mail.ru', 'c64603e4a1b00f5631e25b7b504987c6b703e3d5', '2022-09-08');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
