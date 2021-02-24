-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 03 2019 г., 18:38
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL DEFAULT '',
  `family` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `login` varchar(15) NOT NULL DEFAULT '',
  `pass` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

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
(18, 'ed', 'ed', 'ed@d.t', 'dff', '419b5623271408b1598e4fbb77e89db7b2d3857b'),
(19, 'qwe', 'qwe', 'qweqwe@r.r', 'dfgdfgdfg', '100497a058d570819d9f49b66c0afcd718d9b4b9'),
(20, '85858', 'asdasd', '12123@r', '123', '601f1889667efaebb33b8c12572835da3f027f78'),
(21, 'petr', 'petr', 'petre@w.w', 'pet', '62cb6ec33d497d758f765cba5a064cc65a7f3d6f');

-- --------------------------------------------------------

--
-- Структура таблицы `visit`
--

CREATE TABLE IF NOT EXISTS `visit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `telefon` varchar(200) NOT NULL,
  `date` int(11) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `doctorName` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'обработка',
  `ses` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Дамп данных таблицы `visit`
--

INSERT INTO `visit` (`id`, `name`, `last_name`, `adress`, `telefon`, `date`, `comments`, `doctorName`, `status`, `ses`) VALUES
(24, 'petr', 'petr', 'petrobka', '9468746', 1972, 'petr', 'Завизион Олег Петрович', 'обработка', 'pet'),
(25, 'sasha', 'ivanovich', 'kiyv gagarini28', '+380501496319', 1965, '16', 'Павлюк Андрей Викторович', 'обработка', 'pet'),
(26, 'sasha', 'ivanovich', 'kiyv gagarini28', '+380501496319', 2016, 'qwe', 'Павлюк Андрей Викторович', 'обработка', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
