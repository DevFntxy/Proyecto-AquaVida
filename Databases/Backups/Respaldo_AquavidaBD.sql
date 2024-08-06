CREATE DATABASE  IF NOT EXISTS `aquavidaa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `aquavidaa`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: aquavidaa
-- ------------------------------------------------------
-- Server version	8.0.37

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administradores`
--

DROP TABLE IF EXISTS `administradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `administradores` (
  `Id_administrador` int NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido_P` varchar(50) DEFAULT NULL,
  `Apellido_M` varchar(50) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Id_administrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administradores`
--

LOCK TABLES `administradores` WRITE;
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
INSERT INTO `administradores` VALUES (11,'Alberto','Ramírez','Núñez','alberto.ramirez@example.com','555-1122'),(22,'Beatriz','Morales','Castillo','beatriz.morales@example.com','555-3344'),(35,'David','Hernández','Ortega','david.hernandez@example.com','555-5566'),(47,'Elena','Vargas','Gómez','elena.vargas@example.com','555-7788'),(59,'Fernando','Rojas','Martínez','fernando.rojas@example.com','555-9900');
/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consumo_agua`
--

DROP TABLE IF EXISTS `consumo_agua`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `consumo_agua` (
  `Id_consumo` int NOT NULL,
  `Id_zona` int DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Cantidad` decimal(10,2) DEFAULT NULL,
  `Descripcion` text,
  PRIMARY KEY (`Id_consumo`),
  KEY `Id_zona` (`Id_zona`),
  CONSTRAINT `consumo_agua_ibfk_1` FOREIGN KEY (`Id_zona`) REFERENCES `zonas` (`Id_zona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consumo_agua`
--

LOCK TABLES `consumo_agua` WRITE;
/*!40000 ALTER TABLE `consumo_agua` DISABLE KEYS */;
INSERT INTO `consumo_agua` VALUES (1005,3,'2024-07-01',120.50,'Consumo mensual'),(2011,14,'2024-07-01',95.30,'Consumo mensual'),(3023,28,'2024-07-01',110.70,'Consumo mensual'),(4077,37,'2024-07-01',87.90,'Consumo mensual'),(5098,49,'2024-07-01',130.20,'Consumo mensual');
/*!40000 ALTER TABLE `consumo_agua` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_reportes`
--

DROP TABLE IF EXISTS `estado_reportes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estado_reportes` (
  `Id_estado` int NOT NULL,
  `Estado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_reportes`
--

LOCK TABLES `estado_reportes` WRITE;
/*!40000 ALTER TABLE `estado_reportes` DISABLE KEYS */;
INSERT INTO `estado_reportes` VALUES (1,'Pendiente'),(2,'En proceso'),(3,'Realizado'),(4,'Cancelado'),(5,'Revisado');
/*!40000 ALTER TABLE `estado_reportes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fomentacion_responsable`
--

DROP TABLE IF EXISTS `fomentacion_responsable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fomentacion_responsable` (
  `Id_fomentacion` int NOT NULL,
  `Id_usuario` int DEFAULT NULL,
  `Descripcion` text,
  `Estado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id_fomentacion`),
  KEY `Id_usuario` (`Id_usuario`),
  CONSTRAINT `fomentacion_responsable_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuarios` (`Id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fomentacion_responsable`
--

LOCK TABLES `fomentacion_responsable` WRITE;
/*!40000 ALTER TABLE `fomentacion_responsable` DISABLE KEYS */;
INSERT INTO `fomentacion_responsable` VALUES (150,105,'Campaña de uso responsable del agua','Activo'),(230,207,'Programa educativo en escuelas','Inactivo'),(345,312,'Talleres comunitarios sobre ahorro de agua','Activo'),(410,450,'Iniciativa de recolección de agua de lluvia','Activo'),(589,578,'Proyecto de reciclaje de agua','Inactivo');
/*!40000 ALTER TABLE `fomentacion_responsable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `predicciones`
--

DROP TABLE IF EXISTS `predicciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `predicciones` (
  `Id_prediccion` int NOT NULL,
  `Id_zona` int DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Tipo` varchar(50) DEFAULT NULL,
  `Descripcion` text,
  PRIMARY KEY (`Id_prediccion`),
  KEY `Id_zona` (`Id_zona`),
  CONSTRAINT `predicciones_ibfk_1` FOREIGN KEY (`Id_zona`) REFERENCES `zonas` (`Id_zona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `predicciones`
--

LOCK TABLES `predicciones` WRITE;
/*!40000 ALTER TABLE `predicciones` DISABLE KEYS */;
INSERT INTO `predicciones` VALUES (17,3,'2024-08-01','Consumo','Predicción de consumo mensual'),(24,14,'2024-08-01','Demanda','Predicción de demanda'),(38,28,'2024-08-01','Suministro','Predicción de suministro'),(46,37,'2024-08-01','Consumo','Predicción de consumo mensual'),(53,49,'2024-08-01','Demanda','Predicción de demanda');
/*!40000 ALTER TABLE `predicciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reportes`
--

DROP TABLE IF EXISTS `reportes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reportes` (
  `Id_reporte` int NOT NULL,
  `Id_usuario` int DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Tipo_incidente` varchar(50) DEFAULT NULL,
  `Descripcion` text,
  `Estado_del_reporte` varchar(20) DEFAULT NULL,
  `Nivel_de_reporte` varchar(20) DEFAULT NULL,
  `Id_estado` int DEFAULT NULL,
  PRIMARY KEY (`Id_reporte`),
  KEY `Id_usuario` (`Id_usuario`),
  KEY `Id_estado` (`Id_estado`),
  CONSTRAINT `reportes_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuarios` (`Id_usuario`),
  CONSTRAINT `reportes_ibfk_2` FOREIGN KEY (`Id_estado`) REFERENCES `estado_reportes` (`Id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reportes`
--

LOCK TABLES `reportes` WRITE;
/*!40000 ALTER TABLE `reportes` DISABLE KEYS */;
INSERT INTO `reportes` VALUES (1023,105,'2024-07-01','Fuga de agua','Fuga en la calle principal',NULL,'Alto',1),(2047,207,'2024-07-03','Falta de agua','No hay suministro en el barrio',NULL,'Medio',2),(3091,312,'2024-07-05','Contaminación','Agua con mal olor',NULL,'Bajo',1),(4012,450,'2024-07-07','Fuga de agua','Fuga en la tubería del parque',NULL,'Alto',3),(5203,578,'2024-07-09','Falta de presión','Baja presión en las mañanas',NULL,'Medio',2);
/*!40000 ALTER TABLE `reportes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `revisiones`
--

DROP TABLE IF EXISTS `revisiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `revisiones` (
  `Id_revision` int NOT NULL,
  `Id_reporte` int DEFAULT NULL,
  `Id_administrador` int DEFAULT NULL,
  `Fecha_revision` date DEFAULT NULL,
  `Comentarios` text,
  PRIMARY KEY (`Id_revision`),
  KEY `Id_reporte` (`Id_reporte`),
  KEY `Id_administrador` (`Id_administrador`),
  CONSTRAINT `revisiones_ibfk_1` FOREIGN KEY (`Id_reporte`) REFERENCES `reportes` (`Id_reporte`),
  CONSTRAINT `revisiones_ibfk_2` FOREIGN KEY (`Id_administrador`) REFERENCES `administradores` (`Id_administrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `revisiones`
--

LOCK TABLES `revisiones` WRITE;
/*!40000 ALTER TABLE `revisiones` DISABLE KEYS */;
INSERT INTO `revisiones` VALUES (101,1023,11,'2024-07-10','Revisión inicial realizada, pendiente de reparación.'),(202,2047,22,'2024-07-12','Se detectó problema en la red principal.'),(303,3091,35,'2024-07-14','Revisión completa, problema resuelto.'),(404,4012,47,'2024-07-16','Reparación en proceso.'),(505,5203,59,'2024-07-18','Se necesita equipo especializado para reparación.');
/*!40000 ALTER TABLE `revisiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `Id_usuario` int NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido_P` varchar(50) DEFAULT NULL,
  `Apellido_M` varchar(50) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Contraseña` varchar(100) DEFAULT NULL,
  `Numero_telefono` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (105,'María','López','Fernández','maria.lopez@example.com','password123','555-1234'),(207,'Carlos','Gómez','Hernández','carlos.gomez@example.com','password456','555-5678'),(312,'Laura','Martínez','Ruiz','laura.martinez@example.com','password789','555-8765'),(450,'Jorge','Pérez','García','jorge.perez@example.com','password321','555-4321'),(578,'Ana','Sánchez','Mendoza','ana.sanchez@example.com','password654','555-6789');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zonas`
--

DROP TABLE IF EXISTS `zonas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zonas` (
  `Id_zona` int NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Calle` varchar(100) DEFAULT NULL,
  `CP` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Id_zona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zonas`
--

LOCK TABLES `zonas` WRITE;
/*!40000 ALTER TABLE `zonas` DISABLE KEYS */;
INSERT INTO `zonas` VALUES (3,'Zona Centro','Calle Principal','10001'),(14,'Zona Norte','Avenida del Norte','10002'),(28,'Zona Sur','Calle Sur','10003'),(37,'Zona Este','Calle Este','10004'),(49,'Zona Oeste','Avenida del Oeste','10005');
/*!40000 ALTER TABLE `zonas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'aquavidaa'
--

--
-- Dumping routines for database 'aquavidaa'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-05 21:53:09
