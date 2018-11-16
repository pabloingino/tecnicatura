-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2018 a las 19:09:35
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.11

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
  `programaCarrera` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`idCarreras`, `nombreCarrera`, `descripCarrera`, `programaCarrera`) VALUES
(1, 'Tecnicatura Superior En Analisis de Sistemas', 'La Tecnicatura Superior en Análisis de Sistemas se plantea como finalidad general una formación integral que promueva en los estudiantes la construcción de las herramientas intelectuales y prácticas necesarias para la operación, programación y el análisis de sistemas informáticos, fortalecer su identidad como analistas de sistemas y la elaboración de perspectivas éticas en el desarrollo de su tarea. Se propone la confluencia de saberes y habilidades técnicas con el conocimiento profundo y amplio que requiere el desempeño en este campo laboral.\r\nAlcances de la Titulación: El Técnico Superior en Análisis de Sistemas egresado de esta carrera podrá desempeñarse en empresas de informática y/o áreas de sistemas de organismos gubernamentales, empresas y organizaciones del tercer sector así como también en forma independiente.', 'instituto.pdf'),
(2, 'Tecnicatura en telecomunicaciones', 'La Tecnicatura Superior en Análisis de Sistemas se plantea como finalidad general una formación integral que promueva en los estudiantes la construcción de las herramientas intelectuales y prácticas necesarias para la operación, programación y el análisis de sistemas informáticos, fortalecer su identidad como analistas de sistemas y la elaboración de perspectivas éticas en el desarrollo de su tarea. Se propone la confluencia de saberes y habilidades técnicas con el conocimiento profundo y amplio que requiere el desempeño en este campo laboral. Alcances de la Titulación: El Técnico Superior en Análisis de Sistemas egresado de esta carrera podrá desempeñarse en empresas de informática y/o áreas de sistemas de organismos gubernamentales, empresas y organizaciones del tercer sector así como también en forma independiente.', 'ResolucionAS.pdf');

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

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`idCurso`, `materiaCurso`, `profesorCurso`, `diaCurso`, `ordenDia`, `horaCurso`, `añoCurso`, `cuatrimestre`) VALUES
(3, 7, 2, 'Lunes', 1, '1', 1, 1),
(4, 12, 7, 'Lunes', 1, '2', 1, 1),
(5, 8, 2, 'Martes', 2, '1', 1, 1),
(6, 9, 3, 'Miercoles', 3, '1', 1, 1),
(7, 10, 5, 'Jueves', 4, '1', 1, 1),
(8, 11, 6, 'Viernes', 5, '1', 1, 1),
(9, 13, 8, 'Lunes', 1, '1', 1, 2),
(10, 12, 7, 'Lunes', 1, '2', 1, 2),
(11, 14, 9, 'Martes', 2, '1', 1, 2),
(12, 15, 2, 'Miercoles', 3, '1', 1, 2),
(13, 16, 10, 'Jueves', 4, '1', 1, 2),
(14, 18, 11, 'Lunes', 1, '1', 2, 1),
(15, 19, 12, 'Martes', 2, '1', 2, 1),
(16, 20, 10, 'Miercoles', 3, '1', 2, 1),
(17, 21, 10, 'Jueves', 4, '1', 2, 1),
(18, 22, 9, 'Viernes', 5, '1', 2, 1),
(19, 23, 8, 'Lunes', 1, '1', 2, 2),
(20, 24, 12, 'Martes', 2, '1', 2, 2),
(21, 25, 3, 'Miercoles', 3, '1', 2, 2),
(22, 26, 9, 'Jueves', 4, '1', 2, 2),
(23, 27, 13, 'Viernes', 5, '1', 2, 2),
(24, 28, 14, 'Lunes', 1, '1', 3, 1),
(25, 29, 15, 'Martes', 2, '1', 3, 1),
(26, 34, 9, 'Miercoles', 3, '1', 3, 1),
(27, 30, 9, 'Jueves', 4, '1', 3, 1),
(28, 31, 3, 'Viernes', 5, '1', 3, 1),
(29, 32, 15, 'Lunes', 1, '1', 3, 2),
(30, 33, 10, 'Martes', 2, '1', 3, 2),
(31, 34, 9, 'Miercoles', 3, '1', 3, 2),
(32, 35, 5, 'Jueves', 4, '1', 3, 2),
(33, 36, 3, 'Viernes', 5, '1', 3, 2);

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
-- Volcado de datos para la tabla `datosinstituto`
--

INSERT INTO `datosinstituto` (`idDatos`, `direccionInstituto`, `localidadInstituto`, `codigoPostal`, `numeroCasa`, `emailInstituto`, `telefonoInstituto`) VALUES
(1, 'Trelles', 'C.A.B.A.', 1406, 948, 'dfts_ifts4_de7@bue.edu.ar', 45818556);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE `materias` (
  `idMaterias` int(11) NOT NULL,
  `nombreMateria` varchar(50) NOT NULL,
  `programaMateria` varchar(50) DEFAULT NULL,
  `carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`idMaterias`, `nombreMateria`, `programaMateria`, `carrera`) VALUES
(7, 'Lógica computacional', 'LOGICA COMPUTACIONAL.pdf', 1),
(8, 'Diagramación lógica', 'DIAGRAMACIÓ LÓGICA.pdf', 1),
(9, 'Introducción al estudio de las Tic', 'INTRODUCCION AL ESTUDIO DE LAS TICS.pdf', 1),
(10, 'Arquitectura de computadoras', 'ARQUITECTURA DE COMPUTADORAS.pdf', 1),
(11, 'Contabilidad básica y de costos', 'CONTABILIDAD BASICA Y DE COSTOS.pdf', 1),
(12, 'Inglés Técnico', 'INGLES TECNICO.pdf', 1),
(13, 'Algebra Lineal', 'ALGEBRA LINEAL.pdf', 1),
(14, 'Paradigmas de Prog ramación', 'PARADIGMAS DE PROGRAMACIÓN.pdf', 1),
(15, 'Estructura de datos', 'ESTRUCTURA DE DATOS.pdf', 1),
(16, 'Práctica Profesional I', 'PRACTICA PROFESIONAL I.pdf', 1),
(17, 'Estructura de las Org anizaciones', 'ESTRUCTURA DE LAS ORGANIZACIONES.pdf', 1),
(18, 'Planeamiento y Ctrol de gestión', 'PLANEAMIENTO Y CONTROL DE GESTION.pdf', 1),
(19, 'Programación Aplicada', 'PROGRAMACION APLICADA.pdf', 1),
(20, 'Ingeniería de Software', 'INGENIERIA DE SOFTWARE.pdf', 1),
(21, 'Análisis de sistemas', 'ANALISIS DE SISTEMAS.pdf', 1),
(22, 'Sistemas operativos', 'SISTEMAS OPERATIVOS Y COMUNICACIONES.pdf', 1),
(23, 'Cálculo Numérico', 'CÁLCULO NUMÉRICO.pdf', 1),
(24, 'Base de datos', 'BASE DE DATOS.pdf', 1),
(25, 'Práctica Profesional II', 'PRACTICA PROFESIONAL II.pdf', 1),
(26, 'Gestión de Proyectos', 'GESTION DE PROYECTOS INFORMATICOS.pdf', 1),
(27, 'Diseño de Sistemas', 'DISEÑO DE SISTEMAS.pdf', 1),
(28, 'Estadística Aplicada', 'ESTADISTICA APLICADA.pdf', 1),
(29, 'Herramientas de Gestión', 'HERRAMIENTAS DE GESTION ORGANIZACIONAL.pdf', 1),
(30, 'Seminario 1', 'SEMINARIO I.pdf', 1),
(31, 'Laboratorio de Redes', 'LABORATORIO DE REDES.pdf', 1),
(32, 'Legislación Aplicables a las TICS', 'LEGISLACION APLICABLE A LA TECNOLOGIA.pdf', 1),
(33, 'Seguridad Informática', 'SEGURIDAD INFORMÁTICA.pdf', 1),
(34, 'Práctica Profesional III', 'PRACTICA PROFESIONAL III.pdf', 1),
(35, 'Seminario 2', 'SEMINARIO II.pdf', 1),
(36, 'Desarrollo aplicaciones Web', 'DESARROLLO DE APLICACIONES WEB.pdf', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

DROP TABLE IF EXISTS `novedades`;
CREATE TABLE `novedades` (
  `idNovedad` int(11) NOT NULL,
  `tituloNovedad` varchar(50) NOT NULL,
  `textNovedad` longtext,
  `fechaNovedad` date DEFAULT NULL,
  `isActive` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`idNovedad`, `tituloNovedad`, `textNovedad`, `fechaNovedad`, `isActive`) VALUES
(2, 'Tenemos Pagina Web Nueva', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras enim dolor, bibendum varius risus at, egestas molestie quam. In ultrices auctor ex eget sodales. Cras ac viverra augue, lobortis luctus orci. Morbi vitae nibh id magna elementum consequat vel ac turpis. Sed interdum nulla a ex auctor semper.', '2018-10-18', 1),
(4, 'El Miercoles no hay clases', 'El miercoles no hay clases manga de sopencos', '2018-10-19', 1),
(5, 'Se termina el año', 'El caos reina en este fin de curso. Los exámenes finales terminaron el 1 de junio y los centros educativos no saben qué hacer con los alumnos que han aprobado. ¡Manda narices! Resulta que el estudiante que saca buenas notas es un estorbo porque los profesores se tienen que volcar y dar clases de refuerzo a los que han suspendido.\r\nPerdonen mi ignorancia pero no consigo entender por qué en el sistema educativo español siempre se toman medidas para perjudicar al buen alumno y favorecer al mediocre. De los brillantes, ya ni hablamos. ¡Así nos va!', '2018-11-14', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

DROP TABLE IF EXISTS `profesores`;
CREATE TABLE `profesores` (
  `idProfesor` int(11) NOT NULL,
  `nombreProfesor` varchar(50) NOT NULL,
  `apellidoProfesor` varchar(50) NOT NULL,
  `dniProfesor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`idProfesor`, `nombreProfesor`, `apellidoProfesor`, `dniProfesor`) VALUES
(2, 'Cristina', 'Ferro Croce', 0),
(3, 'Sebastian', 'Cohen', 0),
(5, 'Gustavo', 'Virtos', 0),
(6, 'Lino', 'Osorio', 0),
(7, 'Andrea', 'Mackiewicz', 0),
(8, 'Gabriela', 'Crespo', 0),
(9, 'Silvia', 'Cirello', 0),
(10, 'Ruben', 'Hawryluk', 0),
(11, 'Maria Jose', 'Galeano', 0),
(12, 'Luis', 'Perez', 0),
(13, 'Leandro', 'Alvarez', 0),
(14, 'Gustavo', 'Berbery', 0),
(15, 'Matias', 'Perez Carresso', 0);

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
(12, 'pabloi', 'Pablo A. Ingino', '$2y$12$6dX2w4v/23ImfM38hwjOyOIwMzn1O2vDXYDVjHvrGbzSUGS0CefFi', 0, '2018-10-25'),
(13, 'admin2', 'Administrador 02', '$2y$12$u2PxnEQ3Yb7EHzyGRON2A.paWIlWXScZvQgbc4PHHTQDB8KfCY1K6', 1, '2018-10-22');

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
  MODIFY `idCarreras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `datosinstituto`
--
ALTER TABLE `datosinstituto`
  MODIFY `idDatos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `idMaterias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `novedades`
--
ALTER TABLE `novedades`
  MODIFY `idNovedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `idProfesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
