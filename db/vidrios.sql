
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2023 a las 16:11:07
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vidrios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category_user`
--

CREATE TABLE `category_user` (
  `id_category` int(25) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `id_person` varchar(25) NOT NULL,
  `status_category` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `category_user`
--

INSERT INTO `category_user` (`id_category`, `category_name`, `id_person`, `status_category`) VALUES
(1, 'transporte', '77777', 1),
(3, 'Internet', '77777', 1),
(4, 'Luz', '77777', 1),
(5, 'Carro', '12345', 1),
(6, 'Administracion', '12345', 1),
(7, 'Casa', '12345', 1),
(8, 'casa', '99999', 0),
(9, 'memoria', '77777', 1),
(10, 'mas', '77777', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotiza`
--

CREATE TABLE `cotiza` (
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` int(15) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `proyecto` varchar(500) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `cotiza`
--

INSERT INTO `cotiza` (`nombre`, `apellido`, `telefono`, `ciudad`, `direccion`, `correo`, `proyecto`, `id`) VALUES
('digo', 'ale', 2147483647, '', '0', '', '', 1),
('ramo', 'roman', 2147483647, '', '0', '', '', 2),
('dsfdf', 'ddfsadf', 654567676, '', '0', '', '', 3),
('digo', 'algo', 255485, 'bogota', '0', 'gonza@hotmail.com', 'guytuytytuytuytuy  gjgjhgjhgjhgj', 4),
('monica', 'perez', 562565, 'bogota', 'tvs 39 de 34', 'monica@hotmail.com', 'compred fflkgkjlkfjsldfjldslkfj ddjfsdjfsk', 5),
('julio', 'aranza', 2147483647, 'Bogota', '', 'julio@hotmail.com', 'instalación de división es la cocina  con 2 metros de alto y 1,50 de ancho', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expenses`
--

CREATE TABLE `expenses` (
  `id_expense` int(25) NOT NULL,
  `value_expenses` int(255) NOT NULL,
  `date_expenses` datetime NOT NULL,
  `id_category` int(25) NOT NULL,
  `id_person` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `income`
--

CREATE TABLE `income` (
  `id_income` int(25) NOT NULL,
  `value_income` int(255) NOT NULL,
  `date_income` datetime NOT NULL,
  `id_category` int(25) NOT NULL,
  `id_person` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `id_plan` int(25) NOT NULL,
  `month_plan` date NOT NULL,
  `value_plan` int(255) NOT NULL,
  `id_category` int(25) NOT NULL,
  `id_person` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`id_plan`, `month_plan`, `value_plan`, `id_category`, `id_person`) VALUES
(1, '0000-00-00', 120000, 5, '12345'),
(2, '0000-00-00', 100000, 6, '12345'),
(3, '0000-00-00', 250000, 7, '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_person` varchar(20) NOT NULL,
  `id` int(10) NOT NULL,
  `names` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_person`, `id`, `names`, `lastname`, `birth`, `email`, `pass`) VALUES
('12345', 0, 'julio', 'julio', '1998-05-25', 'julio@gmail.com', 'MTIzNDU='),
('23232', 0, 'maria', 'maria', '1984-06-25', 'maria@hotmail.com', 'MTIzNDU='),
('333333', 15, 'asdasdas', 'asdasd', '2014-03-31', 'sas@hotmail.com', 'MTIzNDU='),
('44444', 14, 'Mario', 'Gama', '1998-05-25', 'mario@gmail.com', 'MTIzNDU='),
('77777', 13, 'Diego', 'Gonzalez', '1987-11-23', 'diego@hotmail.com', 'MTIzNDU='),
('99999', 16, 'diana', 'perez', '2019-11-19', 'diana@gmail.com', 'MTIzNDU=');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category_user`
--
ALTER TABLE `category_user`
  ADD PRIMARY KEY (`id_category`),
  ADD KEY `id_person` (`id_person`);

--
-- Indices de la tabla `cotiza`
--
ALTER TABLE `cotiza`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id_expense`),
  ADD KEY `id_person` (`id_person`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id_income`),
  ADD KEY `id_person` (`id_person`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id_plan`),
  ADD KEY `id_person` (`id_person`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_person`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category_user`
--
ALTER TABLE `category_user`
  MODIFY `id_category` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `cotiza`
--
ALTER TABLE `cotiza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id_expense` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `income`
--
ALTER TABLE `income`
  MODIFY `id_income` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plan`
--
ALTER TABLE `plan`
  MODIFY `id_plan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `category_user`
--
ALTER TABLE `category_user`
  ADD CONSTRAINT `category_user_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `user` (`id_person`);

--
-- Filtros para la tabla `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `user` (`id_person`),
  ADD CONSTRAINT `expenses_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category_user` (`id_category`);

--
-- Filtros para la tabla `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `income_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `user` (`id_person`),
  ADD CONSTRAINT `income_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category_user` (`id_category`);

--
-- Filtros para la tabla `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `plan_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `user` (`id_person`),
  ADD CONSTRAINT `plan_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category_user` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
