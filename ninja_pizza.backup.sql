-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para ninja_pizza
CREATE DATABASE IF NOT EXISTS `ninja_pizza` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `ninja_pizza`;

-- Volcando estructura para tabla ninja_pizza.pizzas
CREATE TABLE IF NOT EXISTS `pizzas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `ingredients` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla ninja_pizza.pizzas: ~21 rows (aproximadamente)
/*!40000 ALTER TABLE `pizzas` DISABLE KEYS */;
INSERT INTO `pizzas` (`id`, `title`, `ingredients`, `email`, `created_at`) VALUES
	(1, 'ninja supreme', 'tomato, cheese, tofu', 'jose@gmail.com', '2020-09-23 01:26:29'),
	(2, 'Random Pizza', 'Pinapple, cheese', 'jose@gmail.com', '2020-09-23 01:46:21'),
	(5, 'Hawaiana', 'Pineapple, cheese', 'something@gmail.com', '2020-09-23 20:25:33'),
	(6, 'Margaret', 'Cheese', 'algo@gmail.com', '2020-09-23 20:26:37'),
	(7, 'BBQ', 'Cheese, Sausage, beef', 'jose@gmail.com', '2020-09-23 20:27:10'),
	(8, 'Napoli', 'Cheese', 'some@thing.com', '2020-09-23 20:27:32'),
	(9, '4 stations', 'tomato, cheese, mushrooms', 'stations@gmail.com', '2020-09-23 20:30:27'),
	(10, 'Calzone', 'tomato, mushrooms, jam, cheese', 'aaa@aaa.aaa', '2020-09-23 20:31:05'),
	(11, 'Pizza', 'Something', 's@hotmail.com', '2020-09-23 22:35:54'),
	(12, 'Pecorino', 'Perorine', 'pero@rine.com', '2020-09-23 22:36:24'),
	(13, 'somethinmg', 'aaaaa', 'a@a.com', '2020-09-23 22:36:36'),
	(14, 'aaa', 'aaa', 'prueba', '2020-09-24 20:30:00'),
	(15, 'prueba2', 'prueba2', 'prueba2', '2020-09-24 21:59:33'),
	(16, 'hola', 'hola', 'prueba3', '2020-09-24 22:02:11'),
	(17, 'asdasd', 'asdasd', 'asdsad', '2020-09-24 22:03:47'),
	(18, 'plomo', 'plomo', 'brando heaft', '2020-09-24 22:07:26'),
	(19, 'aaaaa', 'aaaaa', 'aasd', '2020-09-24 22:07:45'),
	(20, 'aaa', 'aaa', 'asdas', '2020-09-24 22:08:24'),
	(21, 'a', 'a', 'a', '2020-09-24 22:09:16'),
	(22, 'queso', 'queso', 'josedavidmelian@gmail.com', '2020-09-24 22:10:42'),
	(23, 'la pruebita', 'quesito', 'josedavidmelian@gmail.com', '2020-09-24 22:14:18'),
	(24, 'f', 'f', 'prueba ffffinal', '2020-09-24 23:07:29'),
	(25, 'a', 'a', 'a', '2020-09-25 00:04:24');
/*!40000 ALTER TABLE `pizzas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
