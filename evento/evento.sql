-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2018 a las 21:19:43
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `Detalhe` text NOT NULL,
  `DataeHora` datetime NOT NULL,
  `cod_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitacion`
--

CREATE TABLE `invitacion` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `cod_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loja`
--

CREATE TABLE `loja` (
  `ID` int(11) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `Nome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regalos`
--

CREATE TABLE `regalos` (
  `ID` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `Imagem` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teme`
--

CREATE TABLE `teme` (
  `cod_event` int(11) DEFAULT NULL,
  `cod_reg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temr`
--

CREATE TABLE `temr` (
  `cod_loj` int(11) DEFAULT NULL,
  `cod_reg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Senha` varchar(80) NOT NULL,
  `Imagem` varchar(150) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `chave` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `cod_user` (`cod_user`);

--
-- Indices de la tabla `invitacion`
--
ALTER TABLE `invitacion`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `cod_event` (`cod_event`);

--
-- Indices de la tabla `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `regalos`
--
ALTER TABLE `regalos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `teme`
--
ALTER TABLE `teme`
  ADD KEY `cod_event` (`cod_event`),
  ADD KEY `cod_reg` (`cod_reg`);

--
-- Indices de la tabla `temr`
--
ALTER TABLE `temr`
  ADD KEY `cod_loj` (`cod_loj`),
  ADD KEY `cod_reg` (`cod_reg`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `invitacion`
--
ALTER TABLE `invitacion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `loja`
--
ALTER TABLE `loja`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `regalos`
--
ALTER TABLE `regalos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`cod_user`) REFERENCES `usuarios` (`ID`);

--
-- Filtros para la tabla `invitacion`
--
ALTER TABLE `invitacion`
  ADD CONSTRAINT `invitacion_ibfk_1` FOREIGN KEY (`cod_event`) REFERENCES `eventos` (`ID`);

--
-- Filtros para la tabla `teme`
--
ALTER TABLE `teme`
  ADD CONSTRAINT `teme_ibfk_1` FOREIGN KEY (`cod_event`) REFERENCES `eventos` (`ID`),
  ADD CONSTRAINT `teme_ibfk_2` FOREIGN KEY (`cod_reg`) REFERENCES `regalos` (`ID`);

--
-- Filtros para la tabla `temr`
--
ALTER TABLE `temr`
  ADD CONSTRAINT `temr_ibfk_1` FOREIGN KEY (`cod_loj`) REFERENCES `loja` (`ID`),
  ADD CONSTRAINT `temr_ibfk_2` FOREIGN KEY (`cod_reg`) REFERENCES `regalos` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
