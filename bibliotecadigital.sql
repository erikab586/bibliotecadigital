-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2025 a las 22:00:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bibliotecadigital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `idalumno` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apaterno` varchar(100) NOT NULL,
  `amaterno` varchar(100) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `matricula` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `ciclo` varchar(50) NOT NULL,
  `ultimaconexion` datetime NOT NULL,
  `idrol` int(11) NOT NULL,
  `idcarrera` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areaconocimiento`
--

CREATE TABLE `areaconocimiento` (
  `idarea` int(11) NOT NULL,
  `nombrearea` varchar(200) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `idconsulta` int(11) NOT NULL,
  `idlibro` int(11) NOT NULL,
  `idalumno` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descarga`
--

CREATE TABLE `descarga` (
  `iddescarga` int(11) NOT NULL,
  `idlibro` int(11) NOT NULL,
  `idalumno` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idlibros` int(11) NOT NULL,
  `codigo` varchar(40) NOT NULL,
  `titulo` varchar(110) NOT NULL,
  `nombreautor` varchar(110) NOT NULL,
  `editorial` varchar(200) NOT NULL,
  `edicion` varchar(110) NOT NULL,
  `aniopublicacion` varchar(4) NOT NULL,
  `lugarpublicacion` varchar(110) NOT NULL,
  `sinopsis` text NOT NULL,
  `imagen` text NOT NULL,
  `urlarchivo` text NOT NULL,
  `palabrasclave` text NOT NULL,
  `id_carrera` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idrol` int(11) NOT NULL,
  `nombrerol` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idrol`, `nombrerol`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'ADMINISTRADOR GENERAL', 'Es el encargado de tener el control total del sistema.', '2025-02-22 04:14:23', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `nombreusuario` varchar(200) NOT NULL,
  `apellidousuario` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `ultimaconexion` datetime NOT NULL,
  `idrol` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`idalumno`),
  ADD KEY `fk_idrola` (`idrol`),
  ADD KEY `fk_idcarrera` (`idcarrera`);

--
-- Indices de la tabla `areaconocimiento`
--
ALTER TABLE `areaconocimiento`
  ADD PRIMARY KEY (`idarea`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idconsulta`),
  ADD KEY `fk_idlibroc` (`idlibro`),
  ADD KEY `fk_idalumnoc` (`idalumno`);

--
-- Indices de la tabla `descarga`
--
ALTER TABLE `descarga`
  ADD PRIMARY KEY (`iddescarga`),
  ADD KEY `fk_idlibrod` (`idlibro`),
  ADD KEY `fk_idalumnod` (`idalumno`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idlibros`),
  ADD KEY `fk_idcarreral` (`id_carrera`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_idrolu` (`idrol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `idalumno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `areaconocimiento`
--
ALTER TABLE `areaconocimiento`
  MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `idconsulta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `descarga`
--
ALTER TABLE `descarga`
  MODIFY `iddescarga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idlibros` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `fk_idcarrera` FOREIGN KEY (`idcarrera`) REFERENCES `areaconocimiento` (`idarea`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idrola` FOREIGN KEY (`idrol`) REFERENCES `roles` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `fk_idalumnoc` FOREIGN KEY (`idalumno`) REFERENCES `alumnos` (`idalumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idlibroc` FOREIGN KEY (`idlibro`) REFERENCES `libros` (`idlibros`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `descarga`
--
ALTER TABLE `descarga`
  ADD CONSTRAINT `fk_idalumnod` FOREIGN KEY (`idalumno`) REFERENCES `alumnos` (`idalumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idlibrod` FOREIGN KEY (`idlibro`) REFERENCES `libros` (`idlibros`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `fk_idcarreral` FOREIGN KEY (`id_carrera`) REFERENCES `areaconocimiento` (`idarea`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_idrolu` FOREIGN KEY (`idrol`) REFERENCES `roles` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
