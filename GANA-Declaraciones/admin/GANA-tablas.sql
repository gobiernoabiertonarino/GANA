-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-05-2016 a las 20:42:04
-- Versión del servidor: 5.5.28
-- Versión de PHP: 5.4.4-9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Narino_personas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gana_cuentas`
--

CREATE TABLE IF NOT EXISTS `gana_cuentas` (
  `cod_cue_pk` int(2) NOT NULL AUTO_INCREMENT,
  `des_cue` int(2) NOT NULL,
  `ban_cue` varchar(255) NOT NULL,
  `val_cue` double NOT NULL,
  `obs_cue` varchar(255) NOT NULL,
  `ide_per_fk` double NOT NULL,
  `fec_sys` date NOT NULL,
  PRIMARY KEY (`cod_cue_pk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=129 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gana_declaracion`
--

CREATE TABLE IF NOT EXISTS `gana_declaracion` (
  `cod_dec` int(1) NOT NULL AUTO_INCREMENT,
  `ing_pub` double NOT NULL,
  `ing_men` double NOT NULL,
  `act_com` varchar(255) NOT NULL,
  `fec_dec` date NOT NULL,
  `ide_per_fk` int(11) NOT NULL,
  PRIMARY KEY (`cod_dec`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gana_deudas`
--

CREATE TABLE IF NOT EXISTS `gana_deudas` (
  `cod_deu_pk` int(2) NOT NULL AUTO_INCREMENT,
  `des_deu` int(2) NOT NULL,
  `tip_deu` varchar(255) NOT NULL,
  `val_deu` double NOT NULL,
  `obs_deu` varchar(255) NOT NULL,
  `ide_per_fk` double NOT NULL,
  `fec_sys` date NOT NULL,
  PRIMARY KEY (`cod_deu_pk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gana_inmuebles`
--

CREATE TABLE IF NOT EXISTS `gana_inmuebles` (
  `cod_inm_pk` int(2) NOT NULL AUTO_INCREMENT,
  `cod_inm_fk` int(2) NOT NULL,
  `fec_inm` date NOT NULL,
  `val_inm` double NOT NULL,
  `ubi_inm` varchar(255) NOT NULL,
  `ide_per_fk` double NOT NULL,
  `fec_sys` date NOT NULL,
  PRIMARY KEY (`cod_inm_pk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=157 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gana_muebles`
--

CREATE TABLE IF NOT EXISTS `gana_muebles` (
  `cod_mue_pk` int(2) NOT NULL AUTO_INCREMENT,
  `des_mue` varchar(255) NOT NULL,
  `fec_mue` date NOT NULL,
  `val_mue` double NOT NULL,
  `obs_mue` varchar(255) NOT NULL,
  `ide_per_fk` double NOT NULL,
  `fec_sys` date NOT NULL,
  PRIMARY KEY (`cod_mue_pk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gana_tipos_cuenta`
--

CREATE TABLE IF NOT EXISTS `gana_tipos_cuenta` (
  `cod_cue` int(1) NOT NULL AUTO_INCREMENT,
  `nom_cue` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_cue`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gana_tipos_deuda`
--

CREATE TABLE IF NOT EXISTS `gana_tipos_deuda` (
  `cod_deu` int(1) NOT NULL AUTO_INCREMENT,
  `nom_deu` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_deu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gana_tipos_inmueble`
--

CREATE TABLE IF NOT EXISTS `gana_tipos_inmueble` (
  `cod_inm` int(2) NOT NULL,
  `nom_inm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
