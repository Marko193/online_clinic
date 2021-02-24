-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2016 г., 22:17
-- Версия сервера: 5.6.29
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `stud`
--

-- --------------------------------------------------------

--
-- Структура таблицы `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL,
  `family` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `patronymic` varchar(150) NOT NULL,
  `date_rasp` varchar(150) NOT NULL,
  `info` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `doctor`
--

INSERT INTO `doctor` (`id`, `family`, `name`, `patronymic`, `date_rasp`, `info`) VALUES
(1, 'Павлюк', 'Андрей ', 'Викторович', '8:00 - 13:00', 'Врач терапевт'),
(2, 'Мороз', 'Наталия', 'Николаевна', '10:00 - 15:00', 'врач-гениколог'),
(3, 'Водяницкая', 'Ирина', 'Алексеевна', '09:00 - 14:00', 'старшая медсестра'),
(6, 'Завизион ', 'Олег', 'Петрович', '12:00 - 17:00', 'хирург'),
(7, 'Лятин', 'Денис', 'Викторович', '08:00 - 15:00', 'невропатолог'),
(8, 'Митрофанов', 'Илья ', 'Александрович', '14:00 -  17:00', 'Лор'),
(9, 'Казак ', 'Надежда ', 'николаевна', '13:00 - 17:00', 'дерматолог');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL DEFAULT '',
  `family` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `login` varchar(15) NOT NULL DEFAULT '',
  `pass` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `user`, `family`, `email`, `login`, `pass`) VALUES
(1, 'Александр', 'Водяницкий', 'sasha-vodyanickij@yandex.ru', 'sashka', '19191001'),
(4, 'ddc', 'cdcd', 'ddcdc', 'cdcd', 'dcd'),
(5, 'ddc21', 'cdcd21', 'ddcdc', 'cdcd21', '2121'),
(6, 're', 'rtr', 'retre', 'rerter', 'db6222f4cad595d78bf2928be999d718cad6bd68'),
(7, 'мала', 'мала', 'мала', 'мала', 'b2a64a99328468804bdd8ae3f2ebdbbcf4461cba'),
(8, 'admin', 'admin', 'sasha.vodyckij91@yandex.ru', 'sas', '66ce72a4ef09356a01ef6578953425dace9b4a4e'),
(9, '1', '1', '1@b.r', '1', '17ba0791499db908433b80f37c5fbc89b870084b'),
(10, '2', '2', '2@n.o', '2', '12c6fc06c99a462375eeb3f43dfd832b08ca9e17'),
(11, '2', '2', '2@n.o', '3', 'b6692ea5df920cad691c20319a6fffd7a4a766b8'),
(12, 'ds', 'ds', 'ds@n.o', 'ds', '3fdb13677b10691debb3909dd917b00ee751115a'),
(13, '5', '5', '5@5.5', '5', '8effee409c625e1a2d8f5033631840e6ce1dcb64'),
(14, 'а', 'а', 'sasha-vodyanickij@yandex.ru', 'ф', '9377f639c7609e34b00d08589e77c0b6ab265fdf'),
(15, '5', '5', '5@d.r', '6', '59129aacfb6cebbe2c52f30ef3424209f7252e82'),
(16, 'admin', '5', 'vodyanickij7@gmail.com', 'sasр', 'e6ed18812a8c36e46083d1837fd5d13ff185368e'),
(17, 'admin1', 'admin1', 'admin1@m.p', 'admin1', '496c6c6694e4ccf546519ef21bdeef4f74419567'),
(18, 'ed', 'ed', 'ed@d.t', 'dff', '419b5623271408b1598e4fbb77e89db7b2d3857b');

-- --------------------------------------------------------

--
-- Структура таблицы `visit`
--

CREATE TABLE IF NOT EXISTS `visit` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `telefon` varchar(200) NOT NULL,
  `date` int(11) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `doctorName` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `visit`
--

INSERT INTO `visit` (`id`, `name`, `last_name`, `adress`, `telefon`, `date`, `comments`, `doctorName`) VALUES
(1, 'xxxxx', 'xxxxxxxxx', 'xxxxxxxx', 'xxxxxxxxxxx', 2016, 'xxxxxxxxxxx', ''),
(2, 'xxxxx', 'xxxxxxxxx', 'xxxxxxxx', 'xxxxxxxxxxx', 2016, 'xxxxxxxxxxx', ''),
(3, 'вч', 'ввввввввввыч', 'ыыыыы', 'ыыыы', 2016, 'ыффффф', 'Павлюк Андрей Викторович');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `visit`
--
ALTER TABLE `visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
