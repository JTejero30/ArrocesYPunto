-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-05-2023 a las 15:46:40
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `arrocesypunto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3_cardsreceta`
--

DROP TABLE IF EXISTS `3_cardsreceta`;
CREATE TABLE IF NOT EXISTS `3_cardsreceta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombreReceta` varchar(40) NOT NULL,
  `descripcionReceta` varchar(100) NOT NULL,
  `ingredientes` text NOT NULL,
  `pasos` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `3_cardsreceta`
--

INSERT INTO `3_cardsreceta` (`id`, `nombreReceta`, `descripcionReceta`, `ingredientes`, `pasos`, `imagen`) VALUES
(1, 'Arroz de salmonete', '', '    -4 filetes de salmonete<br>\r\n    -2 tazas de arroz<br>\r\n    -1 cebolla picada<br>\r\n    -2 dientes de ajo picados<br>\r\n    -1 pimiento rojo picado<br>\r\n    -1 pimiento verde picado<br>\r\n    -2 tomates pelados y picados<br>\r\n    -4 tazas de caldo de pescado<br>', '    Sazona y dora los filetes de salmonete en una sartén. Reserva.\r\n\r\n    -Sofríe la cebolla, ajo, pimiento rojo y verde en la misma sartén.\r\n\r\n    -Añade los tomates picados y cocina unos minutos.\r\n\r\n    -Agrega el arroz y mézclalo con el sofrito.\r\n\r\n    -Vierte el caldo de pescado y cocina a fuego medio/bajo por 15/20 minutos.\r\n\r\n    -Coloca los filetes de salmonete sobre el arroz y cocina por 5 minutos más.\r\n', 'arrozsalmonete'),
(3, 'Arroz con carabinero', '', '    -400 gramos de arroz<br>\r\n    -2 carabineros<br>\r\n    -1 cebolla picada<br>\r\n    -2 dientes de ajo picados<br>\r\n    -1 pimiento verde picado<br>\r\n    -1 tomate pelado y picado<br>\r\n    -1 sobre de tinta de calamar<br>\r\n    -4 tazas de caldo de pescado<br>', '    Sazona los carabineros con sal y dóralos en una sartén con aceite de oliva. Reserva.\r\n    En la misma sartén, sofríe la cebolla, el ajo y el pimiento verde.\r\n    -Añade el tomate picado y cocina unos minutos.\r\n    -Agrega el arroz y mézclalo con el sofrito.\r\n    -Disuelve el sobre de tinta de calamar en el caldo de pescado y viértelo sobre el arroz.\r\n    -Cocina a fuego medio/bajo por 15/20 minutos hasta que el arroz esté en su punto.\r\n    -Coloca los carabineros encima del arroz y cocina por 5 minutos más.\r\n    -Retira del fuego y deja reposar antes de servir.', 'arrozcarabinero'),
(4, 'Arroz de costilla', '', '-2 tazas de arroz<br>\r\n-500 gramos de costilla de cerdo<br>\r\n-1 cebolla picada<br>\r\n-2 dientes de ajo picados<br>\r\n-1 pimiento rojo picado<br>\r\n-1 pimiento verde picado<br>\r\n-2 tomates pelados y picados<br>\r\n-4 tazas de caldo de carne<br>', '    Sazona las costillas de cerdo con sal y dóralas en una sartén con aceite de oliva. Reserva.\r\n    -En la misma sartén, sofríe la cebolla, el ajo, el pimiento rojo y verde.\r\n    -Añade los tomates picados y cocina unos minutos.\r\n    -Agrega el arroz y mézclalo con el sofrito.\r\n    -Vierte el caldo de carne y cocina a fuego medio/bajo por 15/20 minutos.\r\n    -Coloca las costillas de cerdo sobre el arroz y cocina por 5 minutos más.\r\n    -Retira del fuego y deja reposar antes de servir.', 'arrozcostilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3_cursos`
--

DROP TABLE IF EXISTS `3_cursos`;
CREATE TABLE IF NOT EXISTS `3_cursos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `duracion` varchar(10) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `descripcion` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `3_cursos`
--

INSERT INTO `3_cursos` (`id`, `nombre`, `duracion`, `precio`, `descripcion`) VALUES
(1, 'Arroces', '4 horas', '60 €', 'En este curso se aprenderá a realizar arroces avanzados, dando trucos y recomendaciones de forma presencial para que hagas las mejores comidas.'),
(2, 'Arroces Online', '3 horas', '40 €', 'En este curso se aprenderá a cocinar los mejores arroces de forma online.'),
(3, 'Caldos', '4 horas', '65 €', 'En este curso se aprenderá a cocinar los mejores arroces caldosos, otorgando trucos y informacion con la cual calcular los tiempos perfectos.'),
(4, 'Arroces Hosteleria', '35 horas', '600 €', 'En este curso se aprenderá a preparar los mejores postres relacionados con arroces, siendo un curso de una semana a 5 horas al dia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3_proveedores`
--

DROP TABLE IF EXISTS `3_proveedores`;
CREATE TABLE IF NOT EXISTS `3_proveedores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `nif` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nif` (`nif`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3_restaurantes`
--

DROP TABLE IF EXISTS `3_restaurantes`;
CREATE TABLE IF NOT EXISTS `3_restaurantes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `valoración` varchar(20) NOT NULL,
  `localizacion` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `3_restaurantes`
--

INSERT INTO `3_restaurantes` (`id`, `nombre`, `valoración`, `localizacion`) VALUES
(1, 'Torrezno Filipino', '5 estrellas', 'C. De Martín Soler, 10, 28045, Madrid'),
(2, 'Havana Blues', '4 estrellas', '56 Paseo de Santa María de la Cabeza, 28045, ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3_tienda`
--

DROP TABLE IF EXISTS `3_tienda`;
CREATE TABLE IF NOT EXISTS `3_tienda` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(40) NOT NULL,
  `categoria` varchar(29) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `3_tienda`
--

INSERT INTO `3_tienda` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `categoria`) VALUES
(1, 'Paella 24cm', 'La paella de 24 cm es ideal para 2 personas.', 19.5, 'paella1', 'paella'),
(2, 'Paella 24cm', 'La paella de 24 cm es ideal para 2 personas.', 19.5, 'paella1', 'paella'),
(3, 'Paella 32cm', 'La paella de 32 cm es ideal para 3 personas.', 25, 'paella2', 'paella'),
(4, 'Paella 48cm', 'La paella de 48 cm es ideal para 4 personas.', 35, 'paella3', 'paella'),
(5, 'Paella 90cm', 'La paella de 90 cm es ideal para 6 personas.', 46, 'paella4', 'paella'),
(6, 'Arroz Molino Roca', 'Saco de 3kg de Arroz envejecido durante 2 años en un bajo grado de humedad, Catalogado como uno de los mejores arroces del mundo.', 8.9, 'molinoVerde', 'arroz'),
(7, 'Arroz Molino Roca Dinamita', 'Variedad Dinamita De grano redondo, perlado y corto, esta variedad se caracteriza por su alto contenido en amilosa, su baja adhesividad y gran consistencia, (dura).', 5.9, 'molinoRojo', 'arroz'),
(8, 'Arroz Carnaroli Merlano', 'Especialmente indicado para risottos. También indicado para cocinar arroces melosos y arroz con leche.', 4.54, 'arrozBlanco', 'arroz'),
(9, 'Espatula de madera de haya 30 cms ', 'Espatula de madera de gran calidad. Perfecta para usar en ollas, sartenes, cacerolas puesto que no raya superficies antiadhertente.', 5.5, 'espatula', 'utensilios'),
(10, 'Tabla de Cortar, Madera de Acacia ', 'Tabla de madera de acacia 28x30x4. Madera premium.', 26.7, 'tablaMadera', 'utensilios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3_users`
--

DROP TABLE IF EXISTS `3_users`;
CREATE TABLE IF NOT EXISTS `3_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nick` varchar(20) NOT NULL,
  `f_nacimiento` date NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `rol_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nick` (`nick`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `3_users`
--

INSERT INTO `3_users` (`id`, `nick`, `f_nacimiento`, `contraseña`, `email`, `rol_id`) VALUES
(1, 'rexs224', '2003-08-06', '1234', 'mgonzalezHBST@gmail.com', 1),
(2, 'JaviTej', '1993-09-14', '12345', 'javitejero93@gmail.com', 1),
(3, 'Fernandinho', '2000-06-23', '123456', 'fernandinho2000@gmail.com', 2),
(4, 'JoJ', '2004-09-12', '1234567', 'joaquiño224@gmail.com', 2),
(7, 'javiAdmin', '0000-00-00', '1234', 'javitejerodev@gmail.com', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
