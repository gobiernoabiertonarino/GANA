-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-05-2016 a las 08:54:44
-- Versión del servidor: 5.5.28
-- Versión de PHP: 5.4.4-9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tics_gana`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes`
--

CREATE TABLE IF NOT EXISTS `informes` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `tip_act` varchar(25) NOT NULL,
  `mes_act` varchar(15) NOT NULL,
  `ano_act` int(4) NOT NULL,
  `tit_act` varchar(1000) NOT NULL,
  `des_act` longtext NOT NULL,
  `pil_act` varchar(30) NOT NULL,
  `cod_sub_fk` int(2) NOT NULL,
  `val_act` double NOT NULL,
  `doc_act` varchar(500) NOT NULL,
  `fec_sys` date NOT NULL,
  `hor_sys` time NOT NULL,
  `ide_per_fk` double NOT NULL,
  `est_inf` int(3) NOT NULL,
  `gus_act` int(11) NOT NULL,
  `nogus_act` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2530 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes_comentarios`
--

CREATE TABLE IF NOT EXISTS `informes_comentarios` (
  `id_com` int(5) NOT NULL AUTO_INCREMENT,
  `text_com` text NOT NULL,
  `fec_com` date NOT NULL,
  `hor_com` time NOT NULL,
  `ip_com` varchar(30) NOT NULL,
  `id_inf_fk` int(5) NOT NULL,
  `gus_act` int(9) NOT NULL,
  `nogus_act` int(9) NOT NULL,
  PRIMARY KEY (`id_com`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes_historico`
--

CREATE TABLE IF NOT EXISTS `informes_historico` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `tip_act` varchar(25) NOT NULL,
  `mes_act` varchar(15) NOT NULL,
  `ano_act` int(4) NOT NULL,
  `tit_act` varchar(500) NOT NULL,
  `des_act` longtext NOT NULL,
  `pil_act` varchar(30) NOT NULL,
  `cod_sub_fk` int(2) NOT NULL,
  `val_act` double NOT NULL,
  `doc_act` varchar(500) NOT NULL,
  `fec_sys` date NOT NULL,
  `hor_sys` time NOT NULL,
  `ide_per_fk` double NOT NULL,
  `est_inf` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1178 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes_like`
--

CREATE TABLE IF NOT EXISTS `informes_like` (
  `id_inf_fk` int(11) NOT NULL,
  `gus` int(11) NOT NULL,
  `nogus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
