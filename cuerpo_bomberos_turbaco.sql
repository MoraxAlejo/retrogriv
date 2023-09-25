-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2020 a las 20:04:16
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuerpo_bomberos_turbaco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1800741`
--

CREATE TABLE `1800741` (
  `id_estudiante` varchar(50) DEFAULT NULL,
  `nombre_estudiante` varchar(80) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `notas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `nombre` varchar(50) NOT NULL,
  `costo` varchar(50) NOT NULL,
  `tutor_acargo` varchar(50) NOT NULL,
  `duracion` varchar(50) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `identificacion_profesor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`nombre`, `costo`, `tutor_acargo`, `duracion`, `codigo`, `identificacion_profesor`) VALUES
('Maestria Pokemon', '3 millones', 'Maxim', '3 años', '1800741', '123456789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `identificacion` varchar(50) NOT NULL,
  `correo_estudiante` varchar(50) NOT NULL,
  `notas` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `nombre_curso` varchar(50) NOT NULL,
  `codigo_curso` varchar(50) NOT NULL,
  `num_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `identificacion_prof` varchar(50) NOT NULL,
  `curso_acargo` varchar(50) NOT NULL,
  `codigo_curso_acargo` varchar(50) NOT NULL,
  `num_prof` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`nombre`, `apellidos`, `identificacion_prof`, `curso_acargo`, `codigo_curso_acargo`, `num_prof`) VALUES
('Maxim', 'Pokemon', '123456789', 'Maestria Pokemon', '1800741', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `modo_identificacion` varchar(50) NOT NULL,
  `identificacion` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `password` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `estado_cuenta` varchar(50) NOT NULL,
  `cursos_acargo` varchar(50) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellidos`, `modo_identificacion`, `identificacion`, `fecha_nacimiento`, `password`, `correo`, `cargo`, `estado_cuenta`, `cursos_acargo`, `user`) VALUES
('Alejandro ', 'Uribe Guzman', 'Cedula', '1002244325', '2002-03-17', '6436763Ee', 'alejodevilukegmail.com', 'Admin', 'Aprobada', '', 1),
('Maxim', 'Pokemon', 'Cedula', '123456789', '2020-11-16', '123456789', 'maxim@hotmail.com', 'Profesor', 'Aprobada', '', 26);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`num_curso`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`num_prof`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `num_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `num_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
