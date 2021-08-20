-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2021 a las 22:57:10
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casarosalinda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `Cliente` int(10) DEFAULT NULL,
  `Producto` int(10) DEFAULT NULL,
  `Cantidad` int(5) DEFAULT NULL,
  `folio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`Cliente`, `Producto`, `Cantidad`, `folio`) VALUES
(1, 24, 5, 4),
(1, 17, 3, 5),
(1, 21, 3, 6),
(1, 1, 5, 7),
(1, 17, 8, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `CategoriaID` int(10) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`CategoriaID`, `Nombre`) VALUES
(1, 'Superiores'),
(2, 'Inferiores'),
(3, 'Accesorios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ClienteID` int(10) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Correo` varchar(20) DEFAULT NULL,
  `Telefono` char(10) DEFAULT NULL,
  `CP` char(5) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `Nivel` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ClienteID`, `Nombre`, `Apellido`, `Correo`, `Telefono`, `CP`, `password`, `Nivel`) VALUES
(1, 'Jose Ignacio', 'Olivo Rios', 'jose@gmail.com', '8713325689', '27083', '$2y$10$b8dXfQ76h9fZH7atx1dTvut0Li/gXWhmuPJT1QW2gmbRPSXySJV5.', 3),
(2, 'Aaron Ismael', 'Santos Beltran', 'aaon@gmail.com', '8715659724', '27056', '$2y$10$6VjzH.v8GZN6hD0MnWwxj./KEzR9DUWd3lUaCqy3LQucEJuOX.6xe', 3),
(3, 'Juan Jesus', 'Monreal Del Rio', 'monreal@gmail.com', '8716534365', '27056', '$2y$10$M0ZcbLrd8J/lMoeoYC5VkumuMwRy7zstNeMCMniozEuNuJjQx9xFS', 3),
(4, 'Ismael', 'Flores Montoya', 'isma@gmail.com', '8713345234', '27067', '$2y$10$DRqT8HtacPZHVsnqpDeBUu0TxuB8tvtZOYinI6Y.CHTLOOJjlW4BO', 3),
(5, 'Melissa Fabiola', 'Ramirez Cruz', 'melissa@gmail.com', '8712453454', '27067', '$2y$10$k8vtV.Fgp2b59PU3EjG12el5N8y9Rulgd126ZCKKMioDA7XkI1nTS', 3),
(6, 'Daniel', 'Cortes Castro', 'daniel@gmail.com', '8712324576', '27083', '$2y$10$HjKCdIEsJ7JVZaITO6UaNu8a3GZnH9fCgoUHPNXcQc/YRNpHDKY9O', 3),
(7, 'Carlos', 'Fernandez Martinez', 'carlos@gmail.com', '8712345334', '27083', '$2y$10$6FuNzY6wyiyawqoBasViHuZqnRwhT1024V3zINsG0kcn00P.FdWQy', 3),
(8, 'Gustavo', 'Cruz Avala', 'gustabo@gmail.com', '8712354323', '27083', '$2y$10$Q15NopQ50lJesdFaJT1QgetY9uKOV3eVUMhnwpFbw9YcbCQemWX7G', 3),
(9, 'Gabriel', 'Vargaz Vazquez', 'gabriel@gmail.com', '8712345426', '27083', '$2y$10$BkvVePVknlq4x0Qe9cJ8N.hH67WQeBD5aZVEB3JdiCPUY5QIfqJ.i', 3),
(10, 'Geraldine', 'Mu?oz Barretero', 'geraldine@gmail.com', '8716743423', '27083', '$2y$10$MeqUIY4LNgYlQyR6Sh/tU.b8/engY7RUKpePj8/oc7/kafJwLuQJK', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_orden_compra`
--

CREATE TABLE `detalle_orden_compra` (
  `Orden_Compra` int(10) NOT NULL,
  `Producto` int(10) DEFAULT NULL,
  `Cantidad` int(4) DEFAULT NULL,
  `Precio` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_orden_compra`
--

INSERT INTO `detalle_orden_compra` (`Orden_Compra`, `Producto`, `Cantidad`, `Precio`) VALUES
(1, 2, 5, 400),
(2, 4, 4, 320),
(3, 6, 6, 480),
(4, 8, 9, 720),
(5, 3, 10, 800),
(6, 3, 30, 2400),
(7, 6, 50, 4000),
(8, 7, 10, 800),
(9, 1, 20, 1600),
(10, 5, 12, 960),
(11, 3, 11, 880),
(12, 7, 34, 2720),
(13, 9, 15, 1500),
(14, 10, 22, 2200),
(15, 11, 16, 1600);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_orden_venta`
--

CREATE TABLE `detalle_orden_venta` (
  `Orden_Venta` int(10) NOT NULL,
  `Producto` int(10) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Descuento` double DEFAULT NULL,
  `Precio` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_orden_venta`
--

INSERT INTO `detalle_orden_venta` (`Orden_Venta`, `Producto`, `Cantidad`, `Descuento`, `Precio`) VALUES
(1, 1, 1, 0, 80),
(2, 2, 1, 0.15, 68),
(3, 3, 1, 0.15, 68),
(4, 4, 2, 0, 160),
(5, 5, 3, 0, 240),
(6, 6, 4, 0.15, 272),
(7, 7, 2, 0, 160),
(8, 1, 1, 0, 80),
(9, 2, 1, 0.15, 68),
(10, 10, 1, 0.1, 72),
(1, 9, 1, 0, 100),
(2, 10, 1, 0, 100),
(3, 11, 1, 0, 100),
(4, 12, 2, 0.15, 85),
(5, 13, 3, 0.2, 80),
(6, 17, 4, 0.25, 75),
(7, 18, 2, 0.15, 85),
(8, 19, 1, 0, 100),
(9, 20, 1, 0, 100),
(10, 21, 1, 0, 100),
(11, 1, 2, 0.05, 152),
(11, 12, 1, 0, 100),
(12, 5, 2, 0.05, 152),
(12, 17, 1, 0, 100),
(13, 27, 1, 0, 80),
(13, 34, 1, 0, 100),
(14, 56, 2, 0.05, 152),
(14, 75, 2, 0.05, 180),
(15, 86, 2, 0.05, 152),
(15, 102, 1, 0, 100),
(16, 112, 2, 0.05, 152),
(16, 119, 1, 0, 100),
(17, 135, 2, 0.05, 152),
(17, 143, 2, 0.05, 180),
(18, 4, 2, 0.05, 152),
(18, 13, 1, 0, 100),
(19, 28, 2, 0.05, 152),
(19, 46, 1, 0, 100),
(20, 87, 1, 0, 80),
(20, 103, 1, 0, 100),
(21, 114, 2, 0.05, 152),
(21, 127, 2, 0.05, 180),
(22, 133, 2, 0.05, 152),
(22, 149, 1, 0, 100),
(23, 5, 2, 0.05, 152),
(23, 19, 1, 0, 100),
(24, 57, 1, 0, 80),
(24, 76, 1, 0, 100),
(25, 138, 1, 0, 80),
(25, 143, 1, 0, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `EmpleadoID` int(10) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Fecha_Nac` date DEFAULT NULL,
  `Correo` varchar(20) DEFAULT NULL,
  `Telefono` char(10) DEFAULT NULL,
  `Direccion` varchar(40) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `Nivel` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`EmpleadoID`, `Nombre`, `Apellido`, `Fecha_Nac`, `Correo`, `Telefono`, `Direccion`, `password`, `Nivel`) VALUES
(1, 'Yedid ', 'Garcia', '1990-07-07', 'yedid@gmail.com', '8713767890', 'Abastos #1200', '$2y$10$pZVrleMcg.oEyNNoEJuK1OqnjXOhCRX6lW0yZ7JTbGfU1SnM7l6O.', 2),
(2, 'Daniela', 'Gomez Martinez', '2000-05-02', 'danielagoma@gmail.co', '8719876590', 'Flores #265', '$2y$10$q4POfLMMv4gwWcGex94fCOtAWZQykiLgLYYBBejcLTgPzgXK407xW', 2),
(3, 'Jose Antonio', 'Rodriguez Perez', '2005-09-07', 'josean@gmail.com', '8719019823', 'Las Torres #450', '$2y$10$NpMTYBoZjF63gMDaJfPqsu0U9ky3K9iEDZFWpALD9xKNOAN7iVyqG', 2),
(4, 'Jose Martin', 'Chavez Perez', '1970-12-07', 'josecha@gmail.com', '8716278934', 'Nueva Vista #870', '$2y$10$KZ9zEODIeH/ri/o4cPGdW.50JuuH/4lo7uTVvBBrFfmzjGFmU6Hay', 2),
(5, 'Miguel', 'Mu?oz Ortiz', '2000-04-05', 'miguel@gmail.com', '8712537535', 'abastos#54', '$2y$10$2.sjMaZIbXlKzew21Ounq.PsQ/P.RmSsaJcKw8qi.yIgN7NHm/Q5C', 2),
(6, 'Angel David', 'Palafox Salda?a', '1995-06-23', 'palafox@gmail.com', '8714024730', 'Las torres #62', '$2y$10$45wVsH4bcibDQSPZSRzwoOo1pkUk/yx4I7mlm8isGi0oDRojAjorK', 1),
(7, 'Zair Eli', 'Ortiz Velazquez', '1998-07-04', 'zair@gmail.com', '8714627543', 'las torres #24', '$2y$10$/OprpVXATemtHp2bmufcUO3gMpnFbnurVsEuSeuHK8hpEibkQb0Bq', 1),
(8, 'Jesus Fabian', 'Ortiz Mora', '2001-09-02', 'fabian@@gmail.com', '8714983912', 'Nueva vista #13', '$2y$10$IvfVRNMIiyUNQwh6xWo/.ejFr15D9DLif1qk0Ll6xYL4maG33QUqm', 1),
(9, 'Angel Jahaziel', 'Ontiveros Mendez', '1999-05-24', 'ontiveros@gmail.com', '8713590326', 'Las Flores #56', '$2y$10$.w38TMMjbsFxy6Og7.U1AeasvaJLSw/AaJt3t74pRjvYvWJKzDZP6', 1),
(10, 'Fernando', 'Gomez Gutierrez', '1996-12-05', 'fernando@gmail.com', '8715644734', 'abastos#94', '$2y$10$MkiFXD0Hn5q8idpNQrnN7ew8cS1k6YizOflEe8H0i9vpNfIw0MvJS', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuelas`
--

CREATE TABLE `escuelas` (
  `EscuelaID` int(10) NOT NULL,
  `Nombre` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `escuelas`
--

INSERT INTO `escuelas` (`EscuelaID`, `Nombre`) VALUES
(1, 'Primaria Nueva Laguna'),
(2, 'CBTIS 156'),
(3, 'CECYTEC Jabonera'),
(4, 'Colegio Mijares'),
(5, 'Escuela Secundaria Tecnica #1'),
(6, 'Escuela España');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_compra`
--

CREATE TABLE `orden_compra` (
  `Reg` int(10) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Proveedor` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden_compra`
--

INSERT INTO `orden_compra` (`Reg`, `Fecha`, `Proveedor`) VALUES
(1, '2021-02-01', 1),
(2, '2021-03-03', 3),
(3, '2021-04-24', 4),
(4, '2021-05-05', 5),
(5, '2021-06-09', 7),
(6, '2021-05-07', 1),
(7, '2021-05-12', 2),
(8, '2021-05-17', 3),
(9, '2021-05-23', 4),
(10, '2021-05-30', 5),
(11, '2021-06-04', 6),
(12, '2021-06-09', 7),
(13, '2021-06-14', 8),
(14, '2021-06-19', 9),
(15, '2021-06-24', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_venta`
--

CREATE TABLE `orden_venta` (
  `Reg` int(10) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Empleado` int(10) DEFAULT NULL,
  `Cliente` int(10) DEFAULT NULL,
  `Paqueteria` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden_venta`
--

INSERT INTO `orden_venta` (`Reg`, `Fecha`, `Empleado`, `Cliente`, `Paqueteria`) VALUES
(1, '2021-05-02', 1, 2, 1),
(2, '2021-06-30', 2, 1, 2),
(3, '2021-07-01', 3, 5, 3),
(4, '2021-07-02', 4, 3, 3),
(5, '2021-07-10', 5, 4, 1),
(6, '2021-07-15', 6, 6, 2),
(7, '2021-07-20', 7, 9, 1),
(8, '2021-07-26', 8, 7, 3),
(9, '2021-08-02', 9, 10, 2),
(10, '2021-08-10', 10, 8, 1),
(11, '2021-05-01', 1, 3, 1),
(12, '2021-05-05', 5, 2, 3),
(13, '2021-05-06', 4, 4, 2),
(14, '2021-05-08', 7, 6, 3),
(15, '2021-05-10', 8, 3, 2),
(16, '2021-05-13', 6, 7, 1),
(17, '2021-05-16', 4, 3, 2),
(18, '2021-05-18', 2, 8, 3),
(19, '2021-05-22', 4, 10, 2),
(20, '2021-05-26', 3, 2, 1),
(21, '2021-05-30', 2, 4, 2),
(22, '2021-06-04', 1, 5, 3),
(23, '2021-06-07', 8, 1, 2),
(24, '2021-06-08', 9, 5, 1),
(25, '2021-06-09', 10, 7, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paqueterias`
--

CREATE TABLE `paqueterias` (
  `PaqueteriaID` int(10) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Telefono` char(10) DEFAULT NULL,
  `Correo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paqueterias`
--

INSERT INTO `paqueterias` (`PaqueteriaID`, `Nombre`, `Telefono`, `Correo`) VALUES
(1, 'Estafeta', '8712325769', 'estafeta@gmail.com'),
(2, 'FedEx', '8717908954', 'fedex@gmail.com'),
(3, 'DHL', '8713435687', 'dhl@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ProductoID` int(10) NOT NULL,
  `Nombre` varchar(40) DEFAULT NULL,
  `Color` varchar(15) DEFAULT NULL,
  `Material` set('Algodon','Poliester','Licra') DEFAULT NULL,
  `Existencia` int(5) DEFAULT NULL,
  `Precio` double DEFAULT NULL,
  `Escuela` int(10) DEFAULT NULL,
  `Categoria` int(10) DEFAULT NULL,
  `Talla` int(10) DEFAULT NULL,
  `Imagen` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ProductoID`, `Nombre`, `Color`, `Material`, `Existencia`, `Precio`, `Escuela`, `Categoria`, `Talla`, `Imagen`) VALUES
(1, 'Playera', 'Blanco', 'Algodon', 30, 80, 1, 1, 5, 'img/1.jpg'),
(2, 'Playera', 'Blanco', 'Algodon', 30, 80, 1, 1, 6, 'img/1.jpg'),
(3, 'Playera', 'Blanco', 'Algodon', 30, 80, 1, 1, 7, 'img/1.jpg'),
(4, 'Playera', 'Blanco', 'Algodon', 30, 80, 1, 1, 8, 'img/1.jpg'),
(5, 'Playera', 'Blanco', 'Algodon', 30, 80, 1, 1, 9, 'img/1.jpg'),
(6, 'Playera', 'Blanco', 'Algodon', 30, 80, 1, 1, 10, 'img/1.jpg'),
(7, 'Playera', 'Blanco', 'Algodon', 30, 80, 1, 1, 11, 'img/1.jpg'),
(8, 'Playera', 'Blanco', 'Algodon', 30, 80, 1, 1, 12, 'img/1.jpg'),
(9, 'Pantalon', 'Azul Marino', 'Algodon', 30, 100, 1, 2, 5, 'img/2.jpg'),
(10, 'Pantalon', 'Azul Marino', 'Algodon', 30, 100, 1, 2, 6, 'img/2.jpg'),
(11, 'Pantalon', 'Azul Marino', 'Algodon', 30, 100, 1, 2, 7, 'img/2.jpg'),
(12, 'Pantalon', 'Azul Marino', 'Algodon', 30, 100, 1, 2, 8, 'img/2.jpg'),
(13, 'Pantalon', 'Azul Marino', 'Algodon', 30, 100, 1, 2, 9, 'img/2.jpg'),
(14, 'Pantalon', 'Azul Marino', 'Algodon', 30, 100, 1, 2, 10, 'img/2.jpg'),
(15, 'Pantalon', 'Azul Marino', 'Algodon', 30, 100, 1, 2, 11, 'img/2.jpg'),
(16, 'Pantalon', 'Azul Marino', 'Algodon', 30, 100, 1, 2, 12, 'img/2.jpg'),
(17, 'Falda', 'Azul Marino', 'Algodon', 30, 80, 1, 2, 5, 'img/3.jpg'),
(18, 'Falda', 'Azul Marino', 'Algodon', 20, 80, 1, 2, 6, 'img/3.jpg'),
(19, 'Falda', 'Azul Marino', 'Algodon', 30, 90, 1, 2, 7, 'img/3.jpg'),
(20, 'Falda', 'Azul Marino', 'Algodon', 30, 90, 1, 2, 8, 'img/3.jpg'),
(21, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 1, 2, 9, 'img/3.jpg'),
(22, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 1, 2, 10, 'img/3.jpg'),
(23, 'Falda', 'Azul Marino', 'Algodon', 30, 110, 1, 2, 11, 'img/3.jpg'),
(24, 'Falda', 'Azul Marino', 'Algodon', 30, 110, 1, 2, 12, 'img/3.jpg'),
(25, 'Playera', 'Blanco', 'Algodon', 30, 80, 2, 1, 7, 'img/4.jpg'),
(26, 'Playera', 'Blanco', 'Algodon', 30, 80, 2, 1, 8, 'img/4.jpg'),
(27, 'Playera', 'Blanco', 'Algodon', 30, 80, 2, 1, 9, 'img/4.jpg'),
(28, 'Playera', 'Blanco', 'Algodon', 30, 80, 2, 1, 10, 'img/4.jpg'),
(29, 'Playera', 'Blanco', 'Algodon', 30, 80, 2, 1, 22, 'img/4.jpg'),
(30, 'Playera', 'Blanco', 'Algodon', 30, 80, 2, 1, 23, 'img/4.jpg'),
(31, 'Playera', 'Blanco', 'Algodon', 30, 80, 2, 1, 24, 'img/4.jpg'),
(32, 'Playera', 'Blanco', 'Algodon', 30, 80, 2, 1, 25, 'img/4.jpg'),
(33, 'Pantalon', 'Gris', 'Algodon', 30, 100, 2, 2, 7, 'img/5.jpg'),
(34, 'Pantalon', 'Gris', 'Algodon', 30, 100, 2, 2, 8, 'img/5.jpg'),
(35, 'Pantalon', 'Gris', 'Algodon', 30, 100, 2, 2, 9, 'img/5.jpg'),
(36, 'Pantalon', 'Gris', 'Algodon', 30, 100, 2, 2, 10, 'img/5.jpg'),
(37, 'Pantalon', 'Gris', 'Algodon', 30, 100, 2, 2, 11, 'img/5.jpg'),
(38, 'Pantalon', 'Gris', 'Algodon', 30, 100, 2, 2, 12, 'img/5.jpg'),
(39, 'Pantalon', 'Gris', 'Algodon', 30, 100, 2, 2, 13, 'img/5.jpg'),
(40, 'Pantalon', 'Gris', 'Algodon', 30, 100, 2, 2, 14, 'img/5.jpg'),
(41, 'Pantalon', 'Gris', 'Algodon', 30, 100, 2, 2, 15, 'img/5.jpg'),
(42, 'Pantalon', 'Gris', 'Algodon', 30, 100, 2, 2, 16, 'img/5.jpg'),
(43, 'Pantalon', 'Gris', 'Algodon', 30, 100, 2, 2, 17, 'img/5.jpg'),
(44, 'Falda', 'Gris', 'Algodon', 30, 100, 2, 2, 7, 'img/6.jpg'),
(45, 'Falda', 'Gris', 'Algodon', 30, 100, 2, 2, 8, 'img/6.jpg'),
(46, 'Falda', 'Gris', 'Algodon', 30, 100, 2, 2, 9, 'img/6.jpg'),
(47, 'Falda', 'Gris', 'Algodon', 30, 100, 2, 2, 10, 'img/6.jpg'),
(48, 'Falda', 'Gris', 'Algodon', 30, 100, 2, 2, 11, 'img/6.jpg'),
(49, 'Falda', 'Gris', 'Algodon', 30, 100, 2, 2, 12, 'img/6.jpg'),
(50, 'Falda', 'Gris', 'Algodon', 30, 100, 2, 2, 13, 'img/6.jpg'),
(51, 'Falda', 'Gris', 'Algodon', 30, 100, 2, 2, 14, 'img/6.jpg'),
(52, 'Falda', 'Gris', 'Algodon', 30, 100, 2, 2, 15, 'img/6.jpg'),
(53, 'Falda', 'Gris', 'Algodon', 30, 100, 2, 2, 16, 'img/6.jpg'),
(54, 'Falda', 'Gris', 'Algodon', 30, 100, 2, 2, 17, 'img/6.jpg'),
(55, 'Playera', 'Blanco', 'Algodon', 30, 80, 3, 1, 7, 'img/7.jpg'),
(56, 'Playera', 'Blanco', 'Algodon', 30, 80, 3, 1, 8, 'img/7.jpg'),
(57, 'Playera', 'Blanco', 'Algodon', 30, 80, 3, 1, 9, 'img/7.jpg'),
(58, 'Playera', 'Blanco', 'Algodon', 30, 80, 3, 1, 10, 'img/7.jpg'),
(59, 'Playera', 'Blanco', 'Algodon', 30, 80, 3, 1, 22, 'img/7.jpg'),
(60, 'Playera', 'Blanco', 'Algodon', 30, 80, 3, 1, 23, 'img/7.jpg'),
(61, 'Playera', 'Blanco', 'Algodon', 30, 80, 3, 1, 24, 'img/7.jpg'),
(62, 'Playera', 'Blanco', 'Algodon', 30, 80, 3, 1, 25, 'img/7.jpg'),
(63, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 3, 2, 7, 'img/8.jpg'),
(64, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 3, 2, 8, 'img/8.jpg'),
(65, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 3, 2, 9, 'img/8.jpg'),
(66, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 3, 2, 10, 'img/8.jpg'),
(67, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 3, 2, 11, 'img/8.jpg'),
(68, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 3, 2, 12, 'img/8.jpg'),
(69, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 3, 2, 13, 'img/8.jpg'),
(70, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 3, 2, 14, 'img/8.jpg'),
(71, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 3, 2, 15, 'img/8.jpg'),
(72, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 3, 2, 16, 'img/8.jpg'),
(73, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 3, 2, 17, 'img/8.jpg'),
(74, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 3, 2, 7, 'img/9.jpg'),
(75, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 3, 2, 8, 'img/9.jpg'),
(76, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 3, 2, 9, 'img/9.jpg'),
(77, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 3, 2, 10, 'img/9.jpg'),
(78, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 3, 2, 11, 'img/9.jpg'),
(79, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 3, 2, 12, 'img/9.jpg'),
(80, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 3, 2, 13, 'img/9.jpg'),
(81, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 3, 2, 14, 'img/9.jpg'),
(82, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 3, 2, 15, 'img/9.jpg'),
(83, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 3, 2, 16, 'img/9.jpg'),
(84, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 3, 2, 17, 'img/9.jpg'),
(85, 'Playera', 'Blanco', 'Algodon', 30, 80, 4, 1, 5, 'img/10.jpg'),
(86, 'Playera', 'Blanco', 'Algodon', 30, 80, 4, 1, 6, 'img/10.jpg'),
(87, 'Playera', 'Blanco', 'Algodon', 30, 80, 4, 1, 7, 'img/10.jpg'),
(88, 'Playera', 'Blanco', 'Algodon', 30, 80, 4, 1, 8, 'img/10.jpg'),
(89, 'Playera', 'Blanco', 'Algodon', 30, 80, 4, 1, 9, 'img/10.jpg'),
(90, 'Playera', 'Blanco', 'Algodon', 30, 80, 4, 1, 10, 'img/10.jpg'),
(91, 'Playera', 'Blanco', 'Algodon', 30, 80, 4, 1, 11, 'img/10.jpg'),
(92, 'Playera', 'Blanco', 'Algodon', 30, 80, 4, 1, 12, 'img/10.jpg'),
(93, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 4, 2, 5, 'img/11.jpg'),
(94, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 4, 2, 6, 'img/11.jpg'),
(95, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 4, 2, 7, 'img/11.jpg'),
(96, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 4, 2, 8, 'img/11.jpg'),
(97, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 4, 2, 9, 'img/11.jpg'),
(98, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 4, 2, 10, 'img/11.jpg'),
(99, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 4, 2, 11, 'img/11.jpg'),
(100, 'Pantalon', 'Cafe', 'Algodon', 30, 100, 4, 2, 12, 'img/11.jpg'),
(101, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 4, 2, 5, 'img/12.jpg'),
(102, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 4, 2, 6, 'img/12.jpg'),
(103, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 4, 2, 7, 'img/12.jpg'),
(104, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 4, 2, 8, 'img/12.jpg'),
(105, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 4, 2, 9, 'img/12.jpg'),
(106, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 4, 2, 10, 'img/12.jpg'),
(107, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 4, 2, 11, 'img/12.jpg'),
(108, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 4, 2, 12, 'img/12.jpg'),
(109, 'Playera', 'Blanco', 'Algodon', 30, 80, 5, 1, 5, 'img/13.jpg'),
(110, 'Playera', 'Blanco', 'Algodon', 30, 80, 5, 1, 6, 'img/13.jpg'),
(111, 'Playera', 'Blanco', 'Algodon', 30, 80, 5, 1, 7, 'img/13.jpg'),
(112, 'Playera', 'Blanco', 'Algodon', 30, 80, 5, 1, 8, 'img/13.jpg'),
(113, 'Playera', 'Blanco', 'Algodon', 30, 80, 5, 1, 9, 'img/13.jpg'),
(114, 'Playera', 'Blanco', 'Algodon', 30, 80, 5, 1, 10, 'img/13.jpg'),
(115, 'Playera', 'Blanco', 'Algodon', 30, 80, 5, 1, 11, 'img/13.jpg'),
(116, 'Playera', 'Blanco', 'Algodon', 30, 80, 5, 1, 12, 'img/13.jpg'),
(117, 'Pantalon', 'Azul Marino', 'Algodon', 30, 100, 5, 2, 5, 'img/14.jpg'),
(118, 'Pantalon', 'Azul Marino', 'Algodon', 30, 100, 5, 2, 6, 'img/14.jpg'),
(119, 'Pantalon', 'Azul Marino', 'Algodon', 30, 100, 5, 2, 7, 'img/14.jpg'),
(120, 'Pantalon', 'Azul Marino', 'Algodon', 30, 100, 5, 2, 8, 'img/14.jpg'),
(121, 'Pantalon', 'Azul Marino', 'Algodon', 30, 100, 5, 2, 9, 'img/14.jpg'),
(122, 'Pantalon', 'Azul Marino', 'Algodon', 30, 100, 5, 2, 10, 'img/14.jpg'),
(123, 'Pantalon', 'Azul Marino', 'Algodon', 30, 100, 5, 2, 11, 'img/14.jpg'),
(124, 'Pantalon', 'Azul Marino', 'Algodon', 30, 100, 5, 2, 12, 'img/14.jpg'),
(125, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 5, 2, 5, 'img/15.jpg'),
(126, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 5, 2, 6, 'img/15.jpg'),
(127, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 5, 2, 7, 'img/15.jpg'),
(128, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 5, 2, 8, 'img/15.jpg'),
(129, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 5, 2, 9, 'img/15.jpg'),
(130, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 5, 2, 10, 'img/15.jpg'),
(131, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 5, 2, 11, 'img/15.jpg'),
(132, 'Falda', 'Azul Marino', 'Algodon', 30, 100, 5, 2, 12, 'img/15.jpg'),
(133, 'Playera', 'Blanco', 'Algodon', 30, 80, 6, 1, 5, 'img/16.jpg'),
(134, 'Playera', 'Blanco', 'Algodon', 30, 80, 6, 1, 6, 'img/16.jpg'),
(135, 'Playera', 'Blanco', 'Algodon', 30, 80, 6, 1, 7, 'img/16.jpg'),
(136, 'Playera', 'Blanco', 'Algodon', 30, 80, 6, 1, 8, 'img/16.jpg'),
(137, 'Playera', 'Blanco', 'Algodon', 30, 80, 6, 1, 9, 'img/16.jpg'),
(138, 'Playera', 'Blanco', 'Algodon', 30, 80, 6, 1, 10, 'img/16.jpg'),
(139, 'Playera', 'Blanco', 'Algodon', 30, 80, 6, 1, 11, 'img/16.jpg'),
(140, 'Playera', 'Blanco', 'Algodon', 30, 80, 6, 1, 12, 'img/16.jpg'),
(141, 'Pantalon', 'Gris', 'Algodon', 30, 100, 6, 2, 5, 'img/17.jpg'),
(142, 'Pantalon', 'Gris', 'Algodon', 30, 100, 6, 2, 6, 'img/17.jpg'),
(143, 'Pantalon', 'Gris', 'Algodon', 30, 100, 6, 2, 7, 'img/17.jpg'),
(144, 'Pantalon', 'Gris', 'Algodon', 30, 100, 6, 2, 8, 'img/17.jpg'),
(145, 'Pantalon', 'Gris', 'Algodon', 30, 100, 6, 2, 9, 'img/17.jpg'),
(146, 'Pantalon', 'Gris', 'Algodon', 30, 100, 6, 2, 10, 'img/17.jpg'),
(147, 'Pantalon', 'Gris', 'Algodon', 30, 100, 6, 2, 11, 'img/17.jpg'),
(148, 'Pantalon', 'Gris', 'Algodon', 30, 100, 6, 2, 12, 'img/17.jpg'),
(149, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 6, 2, 5, 'img/18.jpg'),
(150, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 6, 2, 6, 'img/18.jpg'),
(151, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 6, 2, 7, 'img/18.jpg'),
(152, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 6, 2, 8, 'img/18.jpg'),
(153, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 6, 2, 9, 'img/18.jpg'),
(154, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 6, 2, 10, 'img/18.jpg'),
(155, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 6, 2, 11, 'img/18.jpg'),
(156, 'Falda', 'Rojo Blanco', 'Algodon', 30, 100, 6, 2, 12, 'img/18.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `ProveedorID` int(10) NOT NULL,
  `Nombre` varchar(40) DEFAULT NULL,
  `Correo` varchar(20) DEFAULT NULL,
  `Telefono` char(10) DEFAULT NULL,
  `CP` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`ProveedorID`, `Nombre`, `Correo`, `Telefono`, `CP`) VALUES
(1, 'Pedro Ontiveros', 'pedro@gmail.com', '8714123456', '27296'),
(2, 'Jorge Sanchez', 'jorge@gmail.com', '8711233243', '27270'),
(3, 'Miguel Zapata', 'miguel@gmail.com', '8714546547', '27265'),
(4, 'Juan Esparza', 'juan@gmail.com', '8715938193', '27192'),
(5, 'Manuel Avila', 'manuel@gmail.com', '8714918309', '27012'),
(6, 'Rodrigo Martinez', 'rodrigo@gmail.com', '8714918391', '27554'),
(7, 'Ignacio Rodriguez', 'ignacio@gmail.com', '8715819312', '27184'),
(8, 'Hernesto Lopez', 'hernesto@gmail.com', '8714938130', '27194'),
(9, 'Mario Ortiz', 'mario@gmail.com', '8716918391', '27000'),
(10, 'Luis Casta?eda', 'luis@gmail.com', '8710019312', '27001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE `tallas` (
  `TallaID` int(10) NOT NULL,
  `Talla` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tallas`
--

INSERT INTO `tallas` (`TallaID`, `Talla`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '6'),
(6, '8'),
(7, '10'),
(8, '12'),
(9, '14'),
(10, '16'),
(11, '30'),
(12, '32'),
(13, '34'),
(14, '36'),
(15, '38'),
(16, '40'),
(17, '42'),
(18, '3-5'),
(19, '6-8'),
(20, '9-12'),
(21, '13-18'),
(22, 'CH'),
(23, 'MD'),
(24, 'GR'),
(25, 'EGR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarioID` int(1) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuarioID`, `nombre`) VALUES
(1, 'Admin'),
(2, 'Empleado'),
(3, 'Cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`folio`),
  ADD KEY `Cliente` (`Cliente`),
  ADD KEY `Producto` (`Producto`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CategoriaID`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ClienteID`),
  ADD KEY `Fk_nivel_c` (`Nivel`);

--
-- Indices de la tabla `detalle_orden_compra`
--
ALTER TABLE `detalle_orden_compra`
  ADD KEY `fk_producto_DOC` (`Producto`),
  ADD KEY `fk_oc_DOC` (`Orden_Compra`);

--
-- Indices de la tabla `detalle_orden_venta`
--
ALTER TABLE `detalle_orden_venta`
  ADD KEY `fk_producto_DOV` (`Producto`),
  ADD KEY `fk_ov_DOV` (`Orden_Venta`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`EmpleadoID`),
  ADD KEY `Fk_nivel_e` (`Nivel`);

--
-- Indices de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  ADD PRIMARY KEY (`EscuelaID`);

--
-- Indices de la tabla `orden_compra`
--
ALTER TABLE `orden_compra`
  ADD PRIMARY KEY (`Reg`),
  ADD KEY `fk_proveedores_OC` (`Proveedor`);

--
-- Indices de la tabla `orden_venta`
--
ALTER TABLE `orden_venta`
  ADD PRIMARY KEY (`Reg`),
  ADD KEY `fk_empleado_OC` (`Empleado`),
  ADD KEY `fk_cliente_OC` (`Cliente`),
  ADD KEY `fk_paqueteria_OC` (`Paqueteria`);

--
-- Indices de la tabla `paqueterias`
--
ALTER TABLE `paqueterias`
  ADD PRIMARY KEY (`PaqueteriaID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ProductoID`),
  ADD KEY `fk_escuela_pro` (`Escuela`),
  ADD KEY `fk_categoria_pro` (`Categoria`),
  ADD KEY `fk_talla_pro` (`Talla`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`ProveedorID`);

--
-- Indices de la tabla `tallas`
--
ALTER TABLE `tallas`
  ADD PRIMARY KEY (`TallaID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarioID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `folio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CategoriaID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ClienteID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `detalle_orden_compra`
--
ALTER TABLE `detalle_orden_compra`
  MODIFY `Orden_Compra` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `detalle_orden_venta`
--
ALTER TABLE `detalle_orden_venta`
  MODIFY `Orden_Venta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `EmpleadoID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  MODIFY `EscuelaID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `orden_compra`
--
ALTER TABLE `orden_compra`
  MODIFY `Reg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `orden_venta`
--
ALTER TABLE `orden_venta`
  MODIFY `Reg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `paqueterias`
--
ALTER TABLE `paqueterias`
  MODIFY `PaqueteriaID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ProductoID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `ProveedorID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tallas`
--
ALTER TABLE `tallas`
  MODIFY `TallaID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarioID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`Cliente`) REFERENCES `clientes` (`ClienteID`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`Producto`) REFERENCES `productos` (`ProductoID`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `Fk_nivel_c` FOREIGN KEY (`Nivel`) REFERENCES `usuarios` (`usuarioID`);

--
-- Filtros para la tabla `detalle_orden_compra`
--
ALTER TABLE `detalle_orden_compra`
  ADD CONSTRAINT `fk_oc_DOC` FOREIGN KEY (`Orden_Compra`) REFERENCES `orden_compra` (`Reg`),
  ADD CONSTRAINT `fk_producto_DOC` FOREIGN KEY (`Producto`) REFERENCES `productos` (`ProductoID`);

--
-- Filtros para la tabla `detalle_orden_venta`
--
ALTER TABLE `detalle_orden_venta`
  ADD CONSTRAINT `fk_ov_DOV` FOREIGN KEY (`Orden_Venta`) REFERENCES `orden_venta` (`Reg`),
  ADD CONSTRAINT `fk_producto_DOV` FOREIGN KEY (`Producto`) REFERENCES `productos` (`ProductoID`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `Fk_nivel_e` FOREIGN KEY (`Nivel`) REFERENCES `usuarios` (`usuarioID`);

--
-- Filtros para la tabla `orden_compra`
--
ALTER TABLE `orden_compra`
  ADD CONSTRAINT `fk_proveedores_OC` FOREIGN KEY (`Proveedor`) REFERENCES `proveedores` (`ProveedorID`);

--
-- Filtros para la tabla `orden_venta`
--
ALTER TABLE `orden_venta`
  ADD CONSTRAINT `fk_cliente_OC` FOREIGN KEY (`Cliente`) REFERENCES `clientes` (`ClienteID`),
  ADD CONSTRAINT `fk_empleado_OC` FOREIGN KEY (`Empleado`) REFERENCES `empleados` (`EmpleadoID`),
  ADD CONSTRAINT `fk_paqueteria_OC` FOREIGN KEY (`Paqueteria`) REFERENCES `paqueterias` (`PaqueteriaID`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_categoria_pro` FOREIGN KEY (`Categoria`) REFERENCES `categorias` (`CategoriaID`),
  ADD CONSTRAINT `fk_escuela_pro` FOREIGN KEY (`Escuela`) REFERENCES `escuelas` (`EscuelaID`),
  ADD CONSTRAINT `fk_talla_pro` FOREIGN KEY (`Talla`) REFERENCES `tallas` (`TallaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
