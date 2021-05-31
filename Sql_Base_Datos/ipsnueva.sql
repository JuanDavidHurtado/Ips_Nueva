-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2021 a las 02:07:17
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ipsnueva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cups`
--

CREATE TABLE `cups` (
  `idCups` int(11) NOT NULL,
  `cupCodigo` varchar(50) NOT NULL,
  `cupDescripcion` varchar(300) NOT NULL,
  `cupEstado` enum('Activo','Inactivo','','') NOT NULL,
  `empresa_idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cups`
--

INSERT INTO `cups` (`idCups`, `cupCodigo`, `cupDescripcion`, `cupEstado`, `empresa_idEmpresa`) VALUES
(1, '71122028', 'Descripción Cups', 'Activo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `idDocumento` int(11) NOT NULL,
  `docct` longblob NOT NULL,
  `docaf` longblob NOT NULL,
  `docus` longblob NOT NULL,
  `docac` longblob NOT NULL,
  `docap` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idEmpresa` int(11) NOT NULL,
  `empNombre` varchar(50) NOT NULL,
  `empNit` varchar(50) NOT NULL,
  `empCorreo` varchar(50) NOT NULL,
  `empTelefono` varchar(10) NOT NULL,
  `empEstado` enum('Activo','Inactivo','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idEmpresa`, `empNombre`, `empNit`, `empCorreo`, `empTelefono`, `empEstado`) VALUES
(2, 'Asmet Salud', 'AC123', 'sistemas@AsmetSalud.org', '325698', 'Activo'),
(3, 'Ips Fundación Nacer Para Vivir', '577577', 'sistemas@fnpv.org', '456789', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `estNombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `estNombre`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `rolNombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `rolNombre`) VALUES
(1, 'Administrador'),
(2, 'Validador'),
(3, 'Auditor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuLogin` varchar(50) NOT NULL,
  `usuNombre` varchar(50) NOT NULL,
  `usuApellido` varchar(50) NOT NULL,
  `usuClave` varchar(50) NOT NULL,
  `usuTelefono` varchar(10) NOT NULL,
  `usuTelefono1` varchar(10) DEFAULT NULL,
  `usuCorreo` varchar(50) NOT NULL,
  `usuDireccion` varchar(50) NOT NULL,
  `rol_idRol` int(11) NOT NULL,
  `estado_idEstado` int(11) NOT NULL,
  `empresa_idEmpresa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuLogin`, `usuNombre`, `usuApellido`, `usuClave`, `usuTelefono`, `usuTelefono1`, `usuCorreo`, `usuDireccion`, `rol_idRol`, `estado_idEstado`, `empresa_idEmpresa`) VALUES
(17, 'david123', 'Juan David', 'Hurtado Delgado', '123', '3203812577', '217107', 'juandavidhurtadod@hotmail.com', 'Avenida siemptre viva', 1, 1, NULL),
(18, 'pepe', 'pepe', 'dorado ', '123', '3203815555', '8222222', 'pp@gmail.com', 'Avenida siempre viva', 2, 1, 3),
(19, 'fer123', 'Fernanda', 'Arteaga Laserna', '123', '3125896321', '541541', 'arteaga@gmail', 'Calle 5', 3, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_documento`
--

CREATE TABLE `usuario_documento` (
  `usuDoc` int(11) NOT NULL,
  `usuario_idUsuario` int(11) NOT NULL,
  `documento_idDocumento` int(11) NOT NULL,
  `usu_doc_Fecha` date NOT NULL,
  `usu_doc_Fec_Periodo` varchar(10) NOT NULL,
  `usu_doc_Factura` varchar(50) NOT NULL,
  `usu_doc_Valor` varchar(50) NOT NULL,
  `usu_doc_Revisado` enum('NO','SI','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_documento`
--

INSERT INTO `usuario_documento` (`usuDoc`, `usuario_idUsuario`, `documento_idDocumento`, `usu_doc_Fecha`, `usu_doc_Fec_Periodo`, `usu_doc_Factura`, `usu_doc_Valor`, `usu_doc_Revisado`) VALUES
(394, 17, 416, '2021-04-06', '01/02/2021', '139', '6985967', 'NO'),
(395, 17, 417, '2021-04-06', '01/02/2021', '139', '6985967', 'NO'),
(396, 17, 418, '2021-04-06', '01/02/2021', '139', '6985967', 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cups`
--
ALTER TABLE `cups`
  ADD PRIMARY KEY (`idCups`),
  ADD KEY `fk_empresa_idEmpresa` (`empresa_idEmpresa`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`idDocumento`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_rol_idRol` (`rol_idRol`),
  ADD KEY `fk_estado_idEstado` (`estado_idEstado`),
  ADD KEY `fk_empresa` (`empresa_idEmpresa`);

--
-- Indices de la tabla `usuario_documento`
--
ALTER TABLE `usuario_documento`
  ADD PRIMARY KEY (`usuDoc`),
  ADD KEY `fk_usuario_idUsuario` (`usuario_idUsuario`),
  ADD KEY `fk_documento_idDocumento` (`documento_idDocumento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cups`
--
ALTER TABLE `cups`
  MODIFY `idCups` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `idDocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=419;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuario_documento`
--
ALTER TABLE `usuario_documento`
  MODIFY `usuDoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=397;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cups`
--
ALTER TABLE `cups`
  ADD CONSTRAINT `fk_empresa_idEmpresa` FOREIGN KEY (`empresa_idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_empresa` FOREIGN KEY (`empresa_idEmpresa`) REFERENCES `empresa` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estado_idEstado` FOREIGN KEY (`estado_idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rol_idRol` FOREIGN KEY (`rol_idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_documento`
--
ALTER TABLE `usuario_documento`
  ADD CONSTRAINT `fk_documento_idDocumento` FOREIGN KEY (`documento_idDocumento`) REFERENCES `documento` (`idDocumento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_idUsuario` FOREIGN KEY (`usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
