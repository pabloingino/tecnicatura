-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2018 a las 21:45:26
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

DROP TABLE IF EXISTS `carreras`;
CREATE TABLE `carreras` (
  `idCarreras` int(11) NOT NULL,
  `nombreCarrera` varchar(50) NOT NULL,
  `descripCarrera` longtext NOT NULL,
  `programaCarrera` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE `cursos` (
  `idCurso` int(11) NOT NULL,
  `materiaCurso` int(11) DEFAULT NULL,
  `profesorCurso` int(11) DEFAULT NULL,
  `diaCurso` varchar(45) NOT NULL,
  `ordenDia` int(11) NOT NULL,
  `horaCurso` varchar(45) NOT NULL,
  `añoCurso` int(3) NOT NULL,
  `cuatrimestre` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE `materias` (
  `idMaterias` int(11) NOT NULL,
  `nombreMateria` varchar(50) NOT NULL,
  `programaMateria` longtext,
  `carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

DROP TABLE IF EXISTS `novedades`;
CREATE TABLE `novedades` (
  `idNovedad` int(11) NOT NULL,
  `tituloNovedad` text NOT NULL,
  `textNovedad` longtext,
  `fechaNovedad` date DEFAULT NULL,
  `isActive` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

DROP TABLE IF EXISTS `profesores`;
CREATE TABLE `profesores` (
  `idProfesor` int(11) NOT NULL,
  `nombreProfesor` varchar(50) NOT NULL,
  `dniProfesor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nickUsuario` varchar(50) NOT NULL,
  `nombreUsuario` varchar(50) DEFAULT NULL,
  `hashPass` varchar(60) NOT NULL,
  `nivel` int(2) NOT NULL,
  `actualizado` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nickUsuario`, `nombreUsuario`, `hashPass`, `nivel`, `actualizado`) VALUES
(11, 'admin', 'Super Adminsitrador', '$2a$12$5.VTKXMVwlFGxxYiSOCBC.UYYE/QgcTfp.e0q.9YuoFDF.qrqpy7O', 1, '2018-10-16'),
(12, 'pabloi', 'Pablo', '$2y$12$mi43OvQHNbe60.3IrtU2ruyr0PHmKjg/Ta7Q9qFPwqtmZnT69E1Jq', 0, '2018-10-16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`idAlumno`),
  ADD UNIQUE KEY `idAlumno` (`idAlumno`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`idCarreras`),
  ADD UNIQUE KEY `idCarreras` (`idCarreras`),
  ADD UNIQUE KEY `nombreCarrera` (`nombreCarrera`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idCurso`),
  ADD UNIQUE KEY `idCurso` (`idCurso`),
  ADD KEY `idMateria` (`materiaCurso`),
  ADD KEY `idProfesor` (`profesorCurso`);

--
-- Indices de la tabla `datosinstituto`
--
ALTER TABLE `datosinstituto`
  ADD PRIMARY KEY (`idDatos`),
  ADD UNIQUE KEY `idDatos` (`idDatos`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`idMaterias`),
  ADD UNIQUE KEY `idMaterias` (`idMaterias`),
  ADD KEY `fk_id_carrera` (`carrera`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`idNovedad`),
  ADD UNIQUE KEY `idNovedad` (`idNovedad`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`idProfesor`),
  ADD UNIQUE KEY `idProfesor` (`idProfesor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `idUsuario` (`idUsuario`),
  ADD UNIQUE KEY `nickUsuario` (`nickUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `idAlumno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `idCarreras` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datosinstituto`
--
ALTER TABLE `datosinstituto`
  MODIFY `idDatos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `idMaterias` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `novedades`
--
ALTER TABLE `novedades`
  MODIFY `idNovedad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `idProfesor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
