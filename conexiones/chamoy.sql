-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2015 a las 05:54:18
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8
-- Marcos Diaz

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `chamoy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodega`
--

CREATE TABLE IF NOT EXISTS `bodega` (
  `idproducto` int(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `presentacion` varchar(100) NOT NULL,
  `fechaentrada` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` int(100) NOT NULL,
  `idnegocio_fk` int(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `idfactura` int(100) NOT NULL,
  `idpedido_fk` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `pago` int(100) NOT NULL,
  `adeudo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocio`
--

CREATE TABLE IF NOT EXISTS `negocio` (
  `idnegocio` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `rfc` varchar(100) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `negocio`
--

INSERT INTO `negocio` (`idnegocio`, `nombre`, `rfc`, `colonia`, `calle`, `numero`, `ciudad`) VALUES
(2, 'empresa', 'rrdsdsd', 'COLO', 'callle', '33434343', 'tijuana'),
(3, 'mi otra empresa', 'xxsdzszz', 'reforema', 'salvadorenos', '129999', 'tijuana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `idpedido` int(100) NOT NULL,
  `idproducto_fk` int(100) NOT NULL,
  `idcliente_fk` int(100) NOT NULL,
  `fechapedido` date NOT NULL,
  `factura` varchar(100) NOT NULL,
  `empaque` varchar(100) NOT NULL,
  `plazo` varchar(100) NOT NULL,
  `clavepedido` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefononegocio`
--

CREATE TABLE IF NOT EXISTS `telefononegocio` (
  `idtelefononegocio` int(100) NOT NULL,
  `idnegocio_fk` int(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `ext` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bodega`
--
ALTER TABLE `bodega`
  ADD PRIMARY KEY (`idproducto`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`), ADD KEY `idnegocio_fk` (`idnegocio_fk`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idfactura`), ADD KEY `idpedido_fk` (`idpedido_fk`);

--
-- Indices de la tabla `negocio`
--
ALTER TABLE `negocio`
  ADD PRIMARY KEY (`idnegocio`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idpedido`), ADD KEY `idproducto_fk` (`idproducto_fk`), ADD KEY `idcliente_fk` (`idcliente_fk`);

--
-- Indices de la tabla `telefononegocio`
--
ALTER TABLE `telefononegocio`
  ADD PRIMARY KEY (`idtelefononegocio`), ADD KEY `idnegocio_fk` (`idnegocio_fk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bodega`
--
ALTER TABLE `bodega`
  MODIFY `idproducto` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `negocio`
--
ALTER TABLE `negocio`
  MODIFY `idnegocio` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `telefononegocio`
--
ALTER TABLE `telefononegocio`
  MODIFY `idtelefononegocio` int(100) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idnegocio_fk`) REFERENCES `negocio` (`idnegocio`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`idpedido_fk`) REFERENCES `pedidos` (`idpedido`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`idproducto_fk`) REFERENCES `bodega` (`idproducto`),
ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`idcliente_fk`) REFERENCES `cliente` (`idcliente`);

--
-- Filtros para la tabla `telefononegocio`
--
ALTER TABLE `telefononegocio`
ADD CONSTRAINT `telefononegocio_ibfk_1` FOREIGN KEY (`idnegocio_fk`) REFERENCES `negocio` (`idnegocio`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
