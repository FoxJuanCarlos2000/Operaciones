-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2020 a las 20:38:17
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `operacionestlm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `id` int(11) NOT NULL,
  `origendestino` varchar(150) DEFAULT NULL,
  `contenedor` varchar(150) DEFAULT NULL,
  `fecha` date NOT NULL,
  `ptracing` varchar(50) DEFAULT NULL,
  `km` varchar(50) DEFAULT NULL,
  `ptracingkm` varchar(50) DEFAULT NULL,
  `sobrepeso` varchar(50) DEFAULT NULL,
  `pproveedor` varchar(50) DEFAULT NULL,
  `pkm` varchar(50) DEFAULT NULL,
  `pproveedorkm` varchar(50) DEFAULT NULL,
  `psobrepeso` varchar(50) DEFAULT NULL,
  `vpista` varchar(50) DEFAULT NULL,
  `vpistaporcentaje` varchar(50) DEFAULT NULL,
  `pistaporcentaje` varchar(50) DEFAULT NULL,
  `spp` varchar(50) DEFAULT NULL,
  `ptracspp` varchar(50) DEFAULT NULL,
  `provsobrevp` varchar(50) DEFAULT NULL,
  `ganancia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`id`, `origendestino`, `contenedor`, `fecha`, `ptracing`, `km`, `ptracingkm`, `sobrepeso`, `pproveedor`, `pkm`, `pproveedorkm`, `psobrepeso`, `vpista`, `vpistaporcentaje`, `pistaporcentaje`, `spp`, `ptracspp`, `provsobrevp`, `ganancia`) VALUES
(342, 'hola es una prueba ', 'raka taka taka ', '2020-06-16', '40000', '25', '1600', '0', '4000', '25', '160', '0', '2000', '200', '2200', '2200', '42200', '6', ''),
(343, 'Manzanillo - Guanajuato', 'Sencillo', '2020-07-01', '40000', '25', '1600', '0', '3000', '25', '120', '0', '2000', '200', '2200', '2200', '42200', '5000', '37200'),
(344, 'Colima - Cdmx', 'Full', '2020-07-02', '68500', '600', '114.16666666666667', '0', '65000', '600', '108.33333333333333', '0', '3000', '300', '3300', '3300', '71800', '68000', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eir`
--

CREATE TABLE `eir` (
  `id` int(11) NOT NULL,
  `folio` varchar(100) NOT NULL,
  `contenedor` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `embalaje` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `danado` varchar(100) NOT NULL,
  `naviera` varchar(100) NOT NULL,
  `transporte` varchar(100) NOT NULL,
  `placas` varchar(100) NOT NULL,
  `origenDestino` varchar(100) NOT NULL,
  `sello` varchar(100) NOT NULL,
  `limpieza` varchar(100) NOT NULL,
  `Oentrada` varchar(100) NOT NULL,
  `Osalida` varchar(100) NOT NULL,
  `transportista` varchar(100) NOT NULL,
  `deposito` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eir`
--

INSERT INTO `eir` (`id`, `folio`, `contenedor`, `fecha`, `embalaje`, `tipo`, `danado`, `naviera`, `transporte`, `placas`, `origenDestino`, `sello`, `limpieza`, `Oentrada`, `Osalida`, `transportista`, `deposito`) VALUES
(3, '123', 'qqq', '2020-07-13', 'qqq', 'www', 'eee', 'eee', 'ttt', 'yyy', 'uuu', 'iii', 'Especial', 'prueba entrada ', 'prueba salida', 'Accesa', 'tracing');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ruta` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `nombre`, `ruta`) VALUES
(21, 'barco1.jpg', 'imagenes/barco1.jpg'),
(22, 'manzan.jpg', 'imagenes/manzan.jpg'),
(23, 'manzanillo.jpg', 'imagenes/manzanillo.jpg'),
(24, 'puerto.jpg', 'imagenes/puerto.jpg'),
(25, 'tracing.jpg', 'imagenes/tracing.jpg'),
(26, 'rrr.JPG', 'imagenes/rrr.JPG'),
(27, 'manzanillo.jpg', 'imagenes/manzanillo.jpg'),
(28, 'WYRF7067.JPG', 'imagenes/WYRF7067.JPG'),
(29, 'JUAN.jpeg', 'imagenes/JUAN.jpeg'),
(30, 'CESAR.jpeg', 'imagenes/CESAR.jpeg'),
(31, 'DARIEN.jpeg', 'imagenes/DARIEN.jpeg'),
(32, 'KENIA.jpeg', 'imagenes/KENIA.jpeg'),
(33, 'MIRIAM.jpeg', 'imagenes/MIRIAM.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarja`
--

CREATE TABLE `tarja` (
  `id` int(11) NOT NULL,
  `folio` varchar(10) NOT NULL,
  `aduana` varchar(200) NOT NULL,
  `Ncontenedor` varchar(100) NOT NULL,
  `selloI` varchar(100) NOT NULL,
  `Npedimento` varchar(100) NOT NULL,
  `Pdeclarado` varchar(100) NOT NULL,
  `Nmercancias` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `Nbultos` varchar(100) NOT NULL,
  `selloF` varchar(100) NOT NULL,
  `contener` varchar(100) NOT NULL,
  `buque` varchar(100) NOT NULL,
  `Tmercancias` varchar(100) NOT NULL,
  `consolidacion` varchar(250) NOT NULL,
  `carga` varchar(100) NOT NULL,
  `traspaleo` varchar(100) NOT NULL,
  `conteo` varchar(100) NOT NULL,
  `etiquetado` varchar(100) NOT NULL,
  `desconsolidacion` varchar(100) NOT NULL,
  `descarga` varchar(100) NOT NULL,
  `revision` varchar(250) NOT NULL,
  `Pconsolidado` varchar(100) NOT NULL,
  `Lmaniobra` varchar(100) NOT NULL,
  `Hinicio` time NOT NULL,
  `Hterminacion` time NOT NULL,
  `observacion` text NOT NULL,
  `supervisor` varchar(200) NOT NULL,
  `operador` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarja`
--

INSERT INTO `tarja` (`id`, `folio`, `aduana`, `Ncontenedor`, `selloI`, `Npedimento`, `Pdeclarado`, `Nmercancias`, `fecha`, `Nbultos`, `selloF`, `contener`, `buque`, `Tmercancias`, `consolidacion`, `carga`, `traspaleo`, `conteo`, `etiquetado`, `desconsolidacion`, `descarga`, `revision`, `Pconsolidado`, `Lmaniobra`, `Hinicio`, `Hterminacion`, `observacion`, `supervisor`, `operador`) VALUES
(7, 'prueba', 'Victor Salinas', '1234', 'NJN', '4949304390di00id0', '12 kg', '345', '2020-06-22', '666', '455654g', 'nose', 'HAMBURGS SUD', 'peligrosas', 'SSA', 'CONTENEDOR 40 HC', 'Ã±klkl', 'JJHOHO', 'HOHHOHO', 'UHU', 'STARION REYNOSA', 'HOU', 'HUU', 'OH', '03:43:00', '15:44:00', 'hola es una prueba', 'JUAN CARLOS GARCIA FLORES', 'JUAN CARLOS GARCIA FLORES');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eir`
--
ALTER TABLE `eir`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tarja`
--
ALTER TABLE `tarja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345;

--
-- AUTO_INCREMENT de la tabla `eir`
--
ALTER TABLE `eir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `tarja`
--
ALTER TABLE `tarja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
