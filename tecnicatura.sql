-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2018 a las 20:57:49
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnicatura`
--
CREATE DATABASE IF NOT EXISTS `tecnicatura` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tecnicatura`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE `alumnos` (
  `idAlumno` int(11) NOT NULL,
  `nombreAlumno` varchar(50) DEFAULT NULL,
  `apellidoAlumno` varchar(50) DEFAULT NULL,
  `direccionAlumno` varchar(50) DEFAULT NULL,
  `localidadAlumno` varchar(50) DEFAULT NULL,
  `codigoPostalAlumno` int(11) DEFAULT NULL,
  `telAlumno` int(11) DEFAULT NULL,
  `mailAlumno` varchar(50) DEFAULT NULL,
  `passAlumno` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `alumnos`
--

TRUNCATE TABLE `alumnos`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

DROP TABLE IF EXISTS `carreras`;
CREATE TABLE `carreras` (
  `idCarreras` int(11) NOT NULL,
  `nombreCarrera` varchar(50) DEFAULT NULL,
  `programaCarrera` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `carreras`
--

TRUNCATE TABLE `carreras`;
--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`idCarreras`, `nombreCarrera`, `programaCarrera`) VALUES
(0, 'Tecnicatura superior en analisis de sistemas', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE `cursos` (
  `idCurso` int(11) NOT NULL,
  `materiaCurso` int(11) DEFAULT NULL,
  `profesorCurso` int(11) DEFAULT NULL,
  `diaCurso` varchar(45) DEFAULT NULL,
  `horaCurso` varchar(45) DEFAULT NULL,
  `añoCurso` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `cursos`
--

TRUNCATE TABLE `cursos`;
--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`idCurso`, `materiaCurso`, `profesorCurso`, `diaCurso`, `horaCurso`, `añoCurso`) VALUES
(0, 0, 0, 'Lunes', '1', 1),
(1, 1, 1, 'Martes', '1', 3),
(2, 1, 1, 'Jueves', '1', 2),
(3, 0, 0, 'Miercoles', '1', 1),
(4, 1, 1, 'Jueves', '1', 1),
(5, 0, 0, 'Martes', '1', 1),
(6, 1, 1, 'Viernes', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosinstituto`
--

DROP TABLE IF EXISTS `datosinstituto`;
CREATE TABLE `datosinstituto` (
  `idDatos` int(11) NOT NULL,
  `direccionInstituto` varchar(50) DEFAULT NULL,
  `localidadInstituto` varchar(50) DEFAULT NULL,
  `codigoPostal` int(11) DEFAULT NULL,
  `numeroCasa` int(11) DEFAULT NULL,
  `emailInstituto` varchar(45) DEFAULT NULL,
  `telefonoInstituto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `datosinstituto`
--

TRUNCATE TABLE `datosinstituto`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE `materias` (
  `idMaterias` int(11) NOT NULL,
  `nombreMateria` varchar(50) DEFAULT NULL,
  `programaMateria` longtext,
  `carrera` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `materias`
--

TRUNCATE TABLE `materias`;
--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`idMaterias`, `nombreMateria`, `programaMateria`, `carrera`) VALUES
(0, 'Contabilidad', '/var/www/programa.pdf', 0),
(1, 'Practica Profecional 2', '/var/www', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

DROP TABLE IF EXISTS `novedades`;
CREATE TABLE `novedades` (
  `idNovedad` int(11) NOT NULL,
  `textNovedad` longtext,
  `fechaNovedad` date DEFAULT NULL,
  `isActive` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `novedades`
--

TRUNCATE TABLE `novedades`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

DROP TABLE IF EXISTS `profesores`;
CREATE TABLE `profesores` (
  `idProfesor` int(11) NOT NULL,
  `nombreProfesor` varchar(50) DEFAULT NULL,
  `dniProfesor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `profesores`
--

TRUNCATE TABLE `profesores`;
--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`idProfesor`, `nombreProfesor`, `dniProfesor`) VALUES
(0, 'Lino Osorio', 30654538),
(1, 'Sebastian Cohen', 33256692);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nickUsuario` varchar(50) DEFAULT NULL,
  `nombreUsuario` varchar(50) DEFAULT NULL,
  `hashPass` varchar(60) DEFAULT NULL,
  `nivel` int(2) DEFAULT NULL,
  `actualizado` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `usuarios`
--

TRUNCATE TABLE `usuarios`;
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`idAlumno`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`idCarreras`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idCurso`),
  ADD KEY `idMateria` (`materiaCurso`),
  ADD KEY `idProfesor` (`profesorCurso`);

--
-- Indices de la tabla `datosinstituto`
--
ALTER TABLE `datosinstituto`
  ADD PRIMARY KEY (`idDatos`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`idMaterias`),
  ADD KEY `fk_id_carrera` (`carrera`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`idNovedad`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`idProfesor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `idMateria` FOREIGN KEY (`materiaCurso`) REFERENCES `materias` (`idMaterias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idProfesor` FOREIGN KEY (`profesorCurso`) REFERENCES `profesores` (`idProfesor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `fk_id_carrera` FOREIGN KEY (`carrera`) REFERENCES `carreras` (`idCarreras`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
