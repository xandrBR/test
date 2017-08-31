-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 31 2017 г., 23:09
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `steam_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `player_bd`
--

CREATE TABLE IF NOT EXISTS `player_bd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personaname` text NOT NULL,
  `avatar` text NOT NULL,
  `realname` text NOT NULL,
  `date` datetime NOT NULL,
  `games` int(11) NOT NULL,
  `victories` int(11) NOT NULL,
  `defeats` int(11) NOT NULL,
  `money_donate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `player_bd`
--

INSERT INTO `player_bd` (`id`, `personaname`, `avatar`, `realname`, `date`, `games`, `victories`, `defeats`, `money_donate`) VALUES
(1, 'qwert', '', 'qwert228', '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, '', '', '', '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, '2qwert228', '', '', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 'qwert228', '', '', '0000-00-00 00:00:00', 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
