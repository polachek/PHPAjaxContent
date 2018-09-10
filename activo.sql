-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-09-2018 a las 16:15:18
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `activo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `section` varchar(20) NOT NULL,
  `content` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `content`
--

INSERT INTO `content` (`section`, `content`) VALUES
('home', '<h1>Hello Activo World :D !!</h1>\n<p>Home - This is some content that will be editable with TinyMCE.</p>'),
('sports', '<p>Sports - This is some content that will be editable with TinyMCE.</p>'),
('casino', '<p>Casino - This is some content that will be editable with TinyMCE.</p>'),
('holdem', '<p>Holdem - This is some content that will be editable with TinyMCE.</p>'),
('poker', '<p>Poker - This is some content that will be editable with TinyMCE.</p>'),
('articles', '<p>Articles - This is some content that will be editable with TinyMCE.</p>'),
('promotions', '<p>Promotions - This is some content that will be editable with TinyMCE.</p>'),
('tennis', '<p>Tennis - This is some content that will be editable with TinyMCE.</p>'),
('slots', '<p>Slots - This is some content that will be editable with TinyMCE.</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`email`, `password`) VALUES
('admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
