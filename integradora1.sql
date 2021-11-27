-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2019 a las 20:42:13
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `integradora1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `nombre`, `username`, `contraseña`) VALUES
(1, 'Mario Aguilar', 'mario26464', 'cat123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor_academico`
--

CREATE TABLE `asesor_academico` (
  `id_asesor_academico` int(11) NOT NULL,
  `asesor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` int(11) NOT NULL,
  `carrera` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_empresas` int(11) NOT NULL,
  `empresa` varchar(100) DEFAULT NULL,
  `dirección` varchar(50) DEFAULT NULL,
  `teléfono` int(10) DEFAULT NULL,
  `pagina` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `número_de_registro` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generaciones`
--

CREATE TABLE `generaciones` (
  `Id_generacion` int(11) NOT NULL,
  `generación` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `id_grado` int(5) NOT NULL,
  `grado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `memorias`
--

CREATE TABLE `memorias` (
  `id_memorias` int(11) NOT NULL,
  `id_universidades` int(100) DEFAULT NULL,
  `id_carrera` int(100) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `id_generacion` int(4) DEFAULT NULL,
  `asesor_empresarial` varchar(100) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `alumno` varchar(100) NOT NULL,
  `id_grado` int(1) DEFAULT NULL,
  `id_empresa` int(100) DEFAULT NULL,
  `id_asesor_academico` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_registro` varchar(797) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `hora_ingreso` time DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_documentos`
--

CREATE TABLE `tbl_documentos` (
  `id_documento` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` mediumtext,
  `tamanio` int(10) UNSIGNED DEFAULT NULL,
  `tipo` varchar(150) DEFAULT NULL,
  `nombre_archivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_documentos`
--

INSERT INTO `tbl_documentos` (`id_documento`, `titulo`, `descripcion`, `tamanio`, `tipo`, `nombre_archivo`) VALUES
(4, 'prueba', 'esta es una prueba', 171758, 'application/pdf', 'EJEMPLO.pdf'),
(5, 'ejemplo 2', 'segundo ejemplo', 100152, 'application/pdf', 'php.pdf'),
(6, 'sdf', 'sdsad', 1747584, 'application/pdf', 'MEMORÃA JONATHAN GONZALEZ NOYOLA.pdf'),
(7, 'mama', 'asd', 1747584, 'application/pdf', 'MEMORÃA JONATHAN GONZALEZ NOYOLA.pdf'),
(8, 'mama', 'asd', 1747584, 'application/pdf', 'MEMORÃA JONATHAN GONZALEZ NOYOLA.pdf'),
(9, 'Mario', 'quiero dormir', 1747584, 'application/pdf', 'MEMORÃA JONATHAN GONZALEZ NOYOLA.pdf'),
(10, 'Mario', 'quiero dormir', 1747584, 'application/pdf', 'MEMORÃA JONATHAN GONZALEZ NOYOLA.pdf'),
(11, 'Mario', 'Quiero dormir .3', 1747584, 'application/pdf', 'MEMORÃA JONATHAN GONZALEZ NOYOLA.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidades`
--

CREATE TABLE `universidades` (
  `id_universidades` int(11) NOT NULL,
  `universidad` varchar(100) DEFAULT NULL,
  `dirección` varchar(50) DEFAULT NULL,
  `codigo_postal` int(5) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `teléfono` int(10) DEFAULT NULL,
  `pagina` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `tipo_de_usuario` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `contraseña` varchar(8) DEFAULT NULL,
  `pregunta` varchar(100) DEFAULT NULL,
  `nivel` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asesor_academico`
--
ALTER TABLE `asesor_academico`
  ADD PRIMARY KEY (`id_asesor_academico`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresas`);

--
-- Indices de la tabla `generaciones`
--
ALTER TABLE `generaciones`
  ADD PRIMARY KEY (`Id_generacion`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id_grado`);

--
-- Indices de la tabla `memorias`
--
ALTER TABLE `memorias`
  ADD PRIMARY KEY (`id_memorias`),
  ADD KEY `fk_grado` (`id_grado`),
  ADD KEY `fk_generaciones` (`id_generacion`),
  ADD KEY `fk_carrera` (`id_carrera`),
  ADD KEY `fk_asesor` (`id_asesor_academico`),
  ADD KEY `fk_universidades` (`id_universidades`),
  ADD KEY `fk_empresas` (`id_empresa`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `universidades`
--
ALTER TABLE `universidades`
  ADD PRIMARY KEY (`id_universidades`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `asesor_academico`
--
ALTER TABLE `asesor_academico`
  MODIFY `id_asesor_academico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `generaciones`
--
ALTER TABLE `generaciones`
  MODIFY `Id_generacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `id_grado` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `memorias`
--
ALTER TABLE `memorias`
  MODIFY `id_memorias` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  MODIFY `id_documento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `universidades`
--
ALTER TABLE `universidades`
  MODIFY `id_universidades` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `pk_carrera` FOREIGN KEY (`id_carrera`) REFERENCES `asesor_academico` (`id_asesor_academico`);

--
-- Filtros para la tabla `memorias`
--
ALTER TABLE `memorias`
  ADD CONSTRAINT `fk_asesor` FOREIGN KEY (`id_asesor_academico`) REFERENCES `asesor_academico` (`id_asesor_academico`),
  ADD CONSTRAINT `fk_carrera` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`),
  ADD CONSTRAINT `fk_empresas` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id_empresas`),
  ADD CONSTRAINT `fk_generaciones` FOREIGN KEY (`id_generacion`) REFERENCES `generaciones` (`Id_generacion`),
  ADD CONSTRAINT `fk_grado` FOREIGN KEY (`id_grado`) REFERENCES `grado` (`id_grado`),
  ADD CONSTRAINT `fk_universidades` FOREIGN KEY (`id_universidades`) REFERENCES `universidades` (`id_universidades`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `pk_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuarios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
