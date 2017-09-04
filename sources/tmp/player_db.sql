-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 04 2017 г., 21:06
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
-- Структура таблицы `player_db`
--

CREATE TABLE IF NOT EXISTS `player_db` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `steamid` int(11) NOT NULL,
  `personaname` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `realname` varchar(255) NOT NULL,
  `games` int(11) NOT NULL,
  `victories` int(11) NOT NULL,
  `defeats` int(11) NOT NULL,
  `money_donate` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`,`steamid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `player_db`
--

INSERT INTO `player_db` (`id`, `steamid`, `personaname`, `avatar`, `realname`, `games`, `victories`, `defeats`, `money_donate`, `date`) VALUES
(1, 2147483647, 'qwert', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/9a/9a121d831dcc217cf10af5585a0af756c529a791.jpg', 'Real name not given', 0, 0, 0, 0, '2021-01-30 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
