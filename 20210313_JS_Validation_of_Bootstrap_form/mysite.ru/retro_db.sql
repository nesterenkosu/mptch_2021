-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 13 2021 г., 13:56
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `retro_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comp`
--

CREATE TABLE IF NOT EXISTS `comp` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Tovara` int(11) DEFAULT NULL,
  `Proc` int(11) DEFAULT NULL,
  `Pamyat` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `comp`
--

INSERT INTO `comp` (`ID`, `ID_Tovara`, `Proc`, `Pamyat`) VALUES
(10, 15, 1234, 1234),
(3, 8, 0, 0),
(4, 9, 0, 0),
(5, 10, 12, 0),
(6, 11, 13, 0),
(7, 12, 12, 15),
(8, 13, 100, 100);

-- --------------------------------------------------------

--
-- Структура таблицы `compinterfeisy`
--

CREATE TABLE IF NOT EXISTS `compinterfeisy` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Tovara` int(11) DEFAULT NULL,
  `ID_Interfeisa` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=92 ;

--
-- Дамп данных таблицы `compinterfeisy`
--

INSERT INTO `compinterfeisy` (`ID`, `ID_Tovara`, `ID_Interfeisa`) VALUES
(36, 8, 2),
(2, 2, 1),
(35, 8, 1),
(37, 9, 1),
(38, 9, 2),
(39, 10, 2),
(40, 11, 2),
(41, 12, 1),
(82, 13, 1),
(91, 15, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `compnakopitely`
--

CREATE TABLE IF NOT EXISTS `compnakopitely` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Tovara` int(11) DEFAULT NULL,
  `ID_Nakopitelya` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=198 ;

--
-- Дамп данных таблицы `compnakopitely`
--

INSERT INTO `compnakopitely` (`ID`, `ID_Tovara`, `ID_Nakopitelya`) VALUES
(96, 9, 1),
(2, 2, 1),
(3, 2, 3),
(95, 8, 2),
(197, 15, 3),
(196, 15, 2),
(97, 9, 2),
(98, 10, 1),
(99, 11, 1),
(100, 12, 2),
(182, 13, 2),
(181, 13, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `interfeisy`
--

CREATE TABLE IF NOT EXISTS `interfeisy` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nazvanie` tinytext,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `interfeisy`
--

INSERT INTO `interfeisy` (`ID`, `Nazvanie`) VALUES
(1, 'Последовательный порт'),
(2, 'Параллельный порт');

-- --------------------------------------------------------

--
-- Структура таблицы `nakopitely`
--

CREATE TABLE IF NOT EXISTS `nakopitely` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nazvanie` tinytext,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `nakopitely`
--

INSERT INTO `nakopitely` (`ID`, `Nazvanie`) VALUES
(1, 'CD-ROM '),
(2, 'FDD'),
(3, ' Магнитная лента ');

-- --------------------------------------------------------

--
-- Структура таблицы `tovary`
--

CREATE TABLE IF NOT EXISTS `tovary` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nazvanie` tinytext,
  `Cena` double DEFAULT NULL,
  `Kol` int(11) DEFAULT NULL,
  `God` int(11) DEFAULT NULL,
  `Strana` int(11) DEFAULT NULL,
  `Opisanie` text,
  `RashIzobraj` tinytext,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Дамп данных таблицы `tovary`
--

INSERT INTO `tovary` (`ID`, `Nazvanie`, `Cena`, `Kol`, `God`, `Strana`, `Opisanie`, `RashIzobraj`) VALUES
(15, 'test3', 123, 123, 1997, 1, 'rrrrrrrrrrrrrrrrrr', '-'),
(2, 'test2', 1024, 101, 1985, 0, 'er tser', 'jpg'),
(8, 'test5', 12, 122, 12, 3, '', 'jpg'),
(11, 'e', 1111, 111, 11, 2, '', 'jpg'),
(9, 'tes', 12, 19, 19, 2, '', 'jpg'),
(10, 'test33', 111, 111, 111, 1, '', 'jpg'),
(12, 'y', 12, 121, 12, 1, '', 'jpg'),
(13, 'егноно', 12, 12, 1999, 1, '', '-'),
(16, '123', 2, 5, 2000, NULL, NULL, NULL),
(17, 'Ещё проверка', 10000, 7, 2001, NULL, NULL, NULL),
(18, 'Ещё проверка 2', 10000, 10, 2002, NULL, NULL, NULL),
(19, '', 0, 0, 0, NULL, NULL, NULL),
(20, '', 0, 0, 0, NULL, NULL, NULL),
(21, '123', 111, 0, 0, NULL, NULL, NULL),
(22, '11', 111, 0, 0, NULL, NULL, NULL),
(23, '', 0, 0, 0, NULL, NULL, NULL),
(24, '', 0, 0, 0, NULL, NULL, NULL),
(25, '', 0, 0, 0, NULL, NULL, NULL),
(26, '', 0, 0, 0, NULL, NULL, NULL),
(27, '', 0, 0, 0, NULL, NULL, NULL),
(28, '', 0, 0, 0, NULL, NULL, NULL),
(29, '', 0, 0, 0, NULL, NULL, NULL),
(30, '', 0, 0, 0, NULL, NULL, NULL),
(31, '111', 111, 0, 0, NULL, NULL, NULL),
(32, '', 0, 0, 0, NULL, NULL, NULL),
(33, '', 0, 0, 0, NULL, NULL, NULL),
(34, '', 0, 0, 0, NULL, NULL, NULL),
(35, '', 0, 0, 0, NULL, NULL, NULL),
(36, '', 0, 0, 0, NULL, NULL, NULL),
(37, '', 0, 0, 0, NULL, NULL, NULL),
(38, '', 0, 0, 0, NULL, NULL, NULL),
(39, '', 0, 0, 0, NULL, NULL, NULL),
(40, '', 0, 0, 0, NULL, NULL, NULL),
(41, '', 0, 0, 0, NULL, NULL, NULL),
(42, '', 0, 0, 0, NULL, NULL, NULL),
(43, '', 0, 0, 0, NULL, NULL, NULL),
(44, '', 0, 0, 0, NULL, NULL, NULL),
(45, '', 0, 0, 0, NULL, NULL, NULL),
(46, '', 0, 0, 0, NULL, NULL, NULL),
(47, '', 0, 0, 0, NULL, NULL, NULL),
(48, '', 0, 0, 0, NULL, NULL, NULL),
(49, '', 0, 0, 0, NULL, NULL, NULL),
(50, '', 0, 0, 0, NULL, NULL, NULL),
(51, 'цйй', 23, 0, 0, NULL, NULL, NULL),
(52, '', 0, 0, 0, NULL, NULL, NULL),
(53, '', 0, 0, 0, NULL, NULL, NULL),
(54, '123', 123, 0, 0, NULL, NULL, NULL),
(55, '123', 11, 0, 0, NULL, NULL, NULL),
(56, '123', 123, 0, 0, NULL, NULL, NULL),
(57, '111', 1222, 0, 0, NULL, NULL, NULL),
(58, '', 0, 0, 0, NULL, NULL, NULL),
(59, '2323', 0, 0, 0, NULL, NULL, NULL),
(60, '222', 0, 0, 0, NULL, NULL, NULL),
(61, '12121', 121212, 0, 0, NULL, NULL, NULL),
(62, '11', 121212, 0, 0, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
