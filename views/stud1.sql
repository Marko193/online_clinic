-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 13 2019 г., 10:10
-- Версия сервера: 5.5.25
-- Версия PHP: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `stud1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL DEFAULT '',
  `family` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `login` varchar(15) NOT NULL DEFAULT '',
  `pass` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `user`, `family`, `email`, `login`, `pass`) VALUES
(0, 'sasha', 'ivanovich', 'admin@ad.com', 'admin', 'dd94709528bb1c83d08f3088d4043f4742891f4f');

-- --------------------------------------------------------

--
-- Структура таблицы `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `patronymic` varchar(150) NOT NULL,
  `date_rasp` varchar(150) NOT NULL,
  `info` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `doctor`
--

INSERT INTO `doctor` (`id`, `family`, `name`, `patronymic`, `date_rasp`, `info`) VALUES
(1, 'Павлюк', 'Андрей ', 'Викторович', '8:00 - 13:00', 'Врач терапевт'),
(2, 'Мороз', 'Наталия', 'Николаевна', '10:00 - 15:00', 'Врач-гениколог'),
(3, 'Водяницкая', 'Ирина', 'Алексеевна', '09:00 - 14:00', 'Старшая медсестра'),
(6, 'Завизион ', 'Олег', 'Петрович', '12:00 - 17:00', 'Хирург'),
(7, 'Лятин', 'Денис', 'Викторович', '08:00 - 15:00', 'Невропатолог'),
(8, 'Митрофанов', 'Илья ', 'Александрович', '14:00 -  17:00', 'Лор'),
(9, 'Казак ', 'Надежда ', 'николаевна', '13:00 - 17:00', 'Дерматолог');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL DEFAULT '',
  `family` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `login` varchar(15) NOT NULL DEFAULT '',
  `pass` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `user`, `family`, `email`, `login`, `pass`) VALUES
(1, 'Alex', 'Panas', 'Panas@r.r', '123', '601f1889667efaebb33b8c12572835da3f027f78');

-- --------------------------------------------------------

--
-- Структура таблицы `visit`
--

CREATE TABLE IF NOT EXISTS `visit` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `telefon` varchar(200) NOT NULL,
  `date` varchar(11) NOT NULL,
  `time_resp` varchar(20) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `doctorName` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'обработка',
  `ses` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
