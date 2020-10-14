-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2020 a las 21:51:32
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `senasoftt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodegas`
--

CREATE TABLE `bodegas` (
  `Id_Bodega` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Celular` int(15) DEFAULT NULL,
  `Telefono` int(15) DEFAULT NULL,
  `Id_Producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id_Cliente` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Apellidos` varchar(30) DEFAULT NULL,
  `Documento` int(15) DEFAULT NULL,
  `Celular` int(15) DEFAULT NULL,
  `Direccion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_fc`
--

CREATE TABLE `detalle_fc` (
  `Id_DetalleFc` int(11) NOT NULL,
  `Cantidad` int(10) DEFAULT NULL,
  `Valor_Pago` int(10) DEFAULT NULL,
  `Impuesto` int(10) DEFAULT NULL,
  `Id_Producto` int(11) DEFAULT NULL,
  `Id_Proveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_fv`
--

CREATE TABLE `detalle_fv` (
  `Id_DetalleFv` int(11) NOT NULL,
  `Cantidad` int(10) DEFAULT NULL,
  `Pago` int(10) DEFAULT NULL,
  `Devolucion` int(10) DEFAULT NULL,
  `Impuesto` int(10) DEFAULT NULL,
  `Id_Producto` int(11) DEFAULT NULL,
  `Id_Tienda` int(11) DEFAULT NULL,
  `Id_Cliente` int(11) DEFAULT NULL,
  `Id_Empleado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Id_Empleado` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Apellidos` varchar(30) DEFAULT NULL,
  `Cargo` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Edad` int(15) DEFAULT NULL,
  `Ciudad` varchar(30) DEFAULT NULL,
  `Documento` int(15) DEFAULT NULL,
  `Usuario_Empleado` varchar(30) DEFAULT NULL,
  `Contrasena_Empleado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `Id_Empresa` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Usuario_Empresa` varchar(30) DEFAULT NULL,
  `Contrasena_Empresa` varchar(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Nit_Empresa` varchar(15) DEFAULT NULL,
  `Pais` varchar(30) DEFAULT NULL,
  `Tipo_Empresa` varchar(30) DEFAULT NULL,
  `Id_Bodega` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_compra`
--

CREATE TABLE `factura_compra` (
  `Id_FacturaC` int(11) NOT NULL,
  `FechaC` date DEFAULT NULL,
  `Id_DetalleFc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_venta`
--

CREATE TABLE `factura_venta` (
  `Id_FacturaV` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Id_DetalleFv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_Producto` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Cantidad_Existencia` int(30) DEFAULT NULL,
  `Precio` int(30) DEFAULT NULL,
  `Id_Proveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `Id_Proveedor` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Celular` int(15) DEFAULT NULL,
  `Telefono` int(15) DEFAULT NULL,
  `Documento` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `Id_Tienda` int(11) NOT NULL,
  `Sede` varchar(30) DEFAULT NULL,
  `Direccion` varchar(30) DEFAULT NULL,
  `Celular` int(15) DEFAULT NULL,
  `Telefono` int(15) DEFAULT NULL,
  `Id_Empresa` int(11) DEFAULT NULL,
  `Id_Empleado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bodegas`
--
ALTER TABLE `bodegas`
  ADD PRIMARY KEY (`Id_Bodega`),
  ADD KEY `Id_Producto` (`Id_Producto`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_Cliente`);

--
-- Indices de la tabla `detalle_fc`
--
ALTER TABLE `detalle_fc`
  ADD PRIMARY KEY (`Id_DetalleFc`),
  ADD KEY `Id_Producto` (`Id_Producto`),
  ADD KEY `Id_Proveedor` (`Id_Proveedor`);

--
-- Indices de la tabla `detalle_fv`
--
ALTER TABLE `detalle_fv`
  ADD PRIMARY KEY (`Id_DetalleFv`),
  ADD KEY `Id_Producto` (`Id_Producto`),
  ADD KEY `Id_Tienda` (`Id_Tienda`),
  ADD KEY `Id_Cliente` (`Id_Cliente`),
  ADD KEY `Id_Empleado` (`Id_Empleado`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Id_Empleado`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`Id_Empresa`),
  ADD KEY `Id_Bodega` (`Id_Bodega`);

--
-- Indices de la tabla `factura_compra`
--
ALTER TABLE `factura_compra`
  ADD PRIMARY KEY (`Id_FacturaC`),
  ADD KEY `Id_DetalleFc` (`Id_DetalleFc`);

--
-- Indices de la tabla `factura_venta`
--
ALTER TABLE `factura_venta`
  ADD PRIMARY KEY (`Id_FacturaV`),
  ADD KEY `Id_DetalleFv` (`Id_DetalleFv`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_Producto`),
  ADD KEY `Id_Proveedor` (`Id_Proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`Id_Proveedor`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`Id_Tienda`),
  ADD KEY `Id_Empresa` (`Id_Empresa`),
  ADD KEY `Id_Empleado` (`Id_Empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bodegas`
--
ALTER TABLE `bodegas`
  MODIFY `Id_Bodega` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id_Cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_fc`
--
ALTER TABLE `detalle_fc`
  MODIFY `Id_DetalleFc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_fv`
--
ALTER TABLE `detalle_fv`
  MODIFY `Id_DetalleFv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `Id_Empleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `Id_Empresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura_compra`
--
ALTER TABLE `factura_compra`
  MODIFY `Id_FacturaC` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura_venta`
--
ALTER TABLE `factura_venta`
  MODIFY `Id_FacturaV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id_Producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `Id_Proveedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `Id_Tienda` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bodegas`
--
ALTER TABLE `bodegas`
  ADD CONSTRAINT `bodegas_ibfk_1` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id_Producto`);

--
-- Filtros para la tabla `detalle_fc`
--
ALTER TABLE `detalle_fc`
  ADD CONSTRAINT `detalle_fc_ibfk_1` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id_Producto`),
  ADD CONSTRAINT `detalle_fc_ibfk_2` FOREIGN KEY (`Id_Proveedor`) REFERENCES `proveedor` (`Id_Proveedor`);

--
-- Filtros para la tabla `detalle_fv`
--
ALTER TABLE `detalle_fv`
  ADD CONSTRAINT `detalle_fv_ibfk_1` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id_Producto`),
  ADD CONSTRAINT `detalle_fv_ibfk_2` FOREIGN KEY (`Id_Tienda`) REFERENCES `tienda` (`Id_Tienda`),
  ADD CONSTRAINT `detalle_fv_ibfk_3` FOREIGN KEY (`Id_Cliente`) REFERENCES `cliente` (`Id_Cliente`),
  ADD CONSTRAINT `detalle_fv_ibfk_4` FOREIGN KEY (`Id_Empleado`) REFERENCES `empleado` (`Id_Empleado`);

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`Id_Bodega`) REFERENCES `bodegas` (`Id_Bodega`);

--
-- Filtros para la tabla `factura_compra`
--
ALTER TABLE `factura_compra`
  ADD CONSTRAINT `factura_compra_ibfk_1` FOREIGN KEY (`Id_DetalleFc`) REFERENCES `detalle_fc` (`Id_DetalleFc`);

--
-- Filtros para la tabla `factura_venta`
--
ALTER TABLE `factura_venta`
  ADD CONSTRAINT `factura_venta_ibfk_1` FOREIGN KEY (`Id_DetalleFv`) REFERENCES `detalle_fv` (`Id_DetalleFv`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`Id_Proveedor`) REFERENCES `proveedor` (`Id_Proveedor`);

--
-- Filtros para la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD CONSTRAINT `tienda_ibfk_1` FOREIGN KEY (`Id_Empresa`) REFERENCES `empresa` (`Id_Empresa`),
  ADD CONSTRAINT `tienda_ibfk_2` FOREIGN KEY (`Id_Empleado`) REFERENCES `empleado` (`Id_Empleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
