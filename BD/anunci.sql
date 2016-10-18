-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2016 a las 10:35:08
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_bicis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anunci`
--

CREATE TABLE `anunci` (
  `anu_id` int(4) NOT NULL,
  `anu_titol` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `anu_data_anunci` date NOT NULL,
  `anu_data_robatori` date NOT NULL,
  `anu_ubicacio_robatori` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `anu_descripcio_robatori` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `anu_marca` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `anu_model` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_color` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_antiguitat` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anu_descripcio` text COLLATE utf8_spanish_ci NOT NULL,
  `anu_numero_serie` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anu_foto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_compensacio` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `anunci`:
--

--
-- Volcado de datos para la tabla `anunci`
--

INSERT INTO `anunci` (`anu_id`, `anu_titol`, `anu_data_anunci`, `anu_data_robatori`, `anu_ubicacio_robatori`, `anu_descripcio_robatori`, `anu_marca`, `anu_model`, `anu_color`, `anu_antiguitat`, `anu_descripcio`, `anu_numero_serie`, `anu_foto`, `anu_compensacio`) VALUES
(1, 'Me han robado mi Bici (plegable)', '2016-09-01', '2016-09-01', 'Les Corts', 'La tenia atada debajo de mi casa y se la han llevado.', 'BROMPTON', 'M3', 'BLANCO / NEGRO', NULL, 'En el manillar derecho tiene una desgastacion y tiene 3 velocidades.', '000001', '', NULL),
(2, 'He perdido mi Bici plegable', '2016-07-14', '2016-07-16', 'Horta-Guinardó', 'La he dejado en la puerta de la panaderia y al salir no estaba en el sitio. ', 'BROMPTON', 'M3', 'VERDE LIMA', NULL, 'Tiene el pedal izquierdo roto y además tiene 3 velocidades.', '000002', '', NULL),
(3, 'No encuentro mi bici (plegable)', '2016-05-13', '2016-05-13', 'San Martín', 'La dejé atada a lado del metro y cuando he vuelto ya no estaba.', 'BROMPTON', 'M3', 'VAINILLA', NULL, 'Tiene una pegatina de un corazón en el cuadro y contiene 3 velocidades.', '000003', '', NULL),
(4, 'URGENTE! Me han robado la bici', '2016-10-05', '2016-10-05', 'Nou Barris', 'Me han roto el candado de la bici.', 'BROMPTON', 'P ', 'NEGRO ', NULL, 'Es un bici desplegable y tiene 6 velocidades.', '000004', '', NULL),
(5, 'Me han robado la bici de mi hijo', '2016-08-11', '2016-10-12', 'Gracia', 'Me han robado al bici de mi hijo en el parking que tenemos. ', 'CANNONDALE', '24 M TRAIL BERSERKER ', 'VERDE', NULL, 'Tiene unas ruedas del 35 pulgadas de color blanco perla.', '000005', '', NULL),
(6, 'He perdido mi bici ', '2016-08-11', '2016-08-11', 'Les Corts', 'Estaba en el parking sacando la bici y al cerrar la puerta del parking ya no estaba.', 'CANNONDALE', ' MTB 24 TRAIL 4', 'NEGRA', NULL, '', '000006', '', NULL),
(7, 'No encuentro la bici de mi hija ', '2016-09-13', '2016-10-19', 'Sants-Montjuic', 'He ido a buscar la bicicleta de mi hija al parking y ya no estaba. ', 'CONOR', 'HALEBOP ', 'BLANCO / ROSA', NULL, 'Porfavor si la veis contactar conmigo.', '000007', '', NULL),
(8, 'URGENTE!! Me han robado la bici', '2016-09-07', '2016-09-07', 'Sarriá-San Gervasio', 'Me acaban de abrir la puerta del parking y se han llevado mi bicicleta.', 'CANNONDALE', 'MTB 29 TRAIL 3', 'NARANJA / NEGRA', NULL, 'Es nueva.', '000008', '', NULL),
(9, 'Se ha perdido la bici de mi hijo ', '2016-07-08', '2016-07-09', 'Horta-Guinardó', 'La ha dejado un momento atada a lado del cajero y cuando ha vuelto ya no estaba.', 'CANNONDALE', 'CAADX TGRA ', 'NEGRA / AZUL ', NULL, 'En las ruedas tiene letras de color Naranja y pone:\r\nCX 3.0 ....', '000009', '', NULL),
(10, 'He perdido la bici de mi hijo', '2016-10-07', '2016-10-08', 'San Andrés', 'La dejo en el parque y al volver a buscar ya no estaba.', 'CONOR', 'MONSTER', 'ROJO', NULL, 'Es una bicicleta pequeña, que tiene unas ruedas bastante amplias.', '000010', '', NULL),
(11, 'URGENTE!! Me han robado las bici de mi hijo', '2016-06-07', '2016-06-11', 'San Martín', 'Estaba haciendo unas fotos a unos paisajes y al volver ya no estaba.', 'CONOR ', 'MONSTER', 'Azul ', NULL, '', '000011', '', NULL),
(12, 'URGENTE!! Se ha perdido la bici de mi hija', '2016-08-09', '2016-08-11', 'Gracia', 'Se ha despistado de la bici y al volver ya no la tenia.', 'CONOR', 'RAY 14', 'BLANCO / ROSA', NULL, 'Tiene una etiqueta de la hello kitty en el manillar.', '000012', '', NULL),
(13, 'Me han robado la bici de mi hijo', '2016-10-05', '2016-10-05', 'Ciutat Vella', 'Han roto la puerta del bicing y se han llevado mi bici.', 'CONOR', 'RAY 14', 'NEGRO / ROJO', NULL, 'El pedal derecho esta roto por la mitad.', '000013', '', NULL),
(14, 'PÉRDIDA DE LA BICI DE MI HIJO', '2016-09-05', '2016-10-06', 'Sants-Montjuic', 'La tenia en el parking y ya no está.', 'CONOR', 'METEOR 16 ', 'NEGRO / VERDE', NULL, '', '000014', '', NULL),
(15, 'ME HAN ROBADO LA BICI', '2016-06-07', '2016-06-08', 'Les Corts', 'La tenia en el taller y me han entrado a robar en el taller.', 'CONOR', 'WRC INVADER', 'ROJO', NULL, '', '000015', '', NULL),
(16, 'URGENTE! Me han robado la bici', '2016-02-03', '2016-02-06', 'Horta-Guinardó', 'La tenia guardada en la peluqueria y me han robado en la peluqueria.', 'CONOR ', '540', 'BLANCO / ROSA', NULL, 'Porfavor contactar conmigo.', '000016', '', NULL),
(17, 'MI BICI (PLEGABLE)', '2016-10-05', '2016-10-05', 'San Andrés', 'Me han robado la bici a lado del metro.', 'DAHON', 'SUV', 'GRIS / BLANCA', NULL, 'Necesito recuperar mi bicicleta porfavor, ayudarme.', '000017', '', NULL),
(18, 'He perdido mi bici', '2016-10-02', '2016-10-04', 'San Martín', 'Me la han robado en el parking.', 'DAHON', 'VYBE', 'BLANCA', NULL, '', '000018', '', NULL),
(19, 'NO ENCUENTRO MI BICI PLEGABLE', '2016-10-07', '2016-10-07', 'Gracia', 'Me la han robado a la fuerza.', 'DAHON', 'VYBE', 'NEGRA', NULL, 'Es una bici plegable y el manillar esta desgastado.', '000019', '', NULL),
(20, 'URGENTE!!!', '2016-08-16', '2016-08-17', 'Sarriá-San Gervasio', 'He ido a buscar la bici al almacen y mi sorpresa que ya no estaba.', 'GIANT', 'FLOURISH FS 2', 'AZUL', NULL, '', '000020', '', NULL),
(21, 'URGENTE! NO ENCUENTRO MI BICI', '2016-02-09', '2016-02-09', 'Les Corts', 'La deje en la puerta de la panederia y al volver ya no estaba.', 'GIANT', 'TALON 4', 'AZUL', NULL, '', '000021', '', NULL),
(22, 'He perdido la bici ', '2016-07-05', '2016-07-05', 'Sants-Montjuic', 'Me la han robado a la fuerza.', 'GIANT', 'FLOURISH 2', 'CREMA', NULL, '', '000022', '', NULL),
(23, 'URGENTE!! Me han robado las bici de mi mujer', '2016-09-07', '2016-09-07', 'Ensanche', 'Se despitó de la bici y se la llevaron.', 'GIANT', 'TCR ADVANCED 3', 'NEGRA', NULL, 'Tiene una linia amarilla en la parte delante y en las ruedas tiene una tira blanca en toda la rueda.', '000023', '', NULL),
(24, 'URGENTE!!', '2016-09-14', '2016-09-14', 'Ciutat Vella', 'Me han robado mi de carretera', 'GIANT', 'TCR ADVANCED 2', 'ROJO', NULL, 'En las letras GIANT tiene un fondo de color rojo y las ruedas tiene una linia en toda la rueda.', '000024', '', NULL),
(25, 'me han robado la bici', '2016-10-12', '2016-10-13', 'Les Corts', 'Me han roto la puerta del parking y se han llevado la bici.', 'LIV ', 'TEMPT 4', 'NEGRA', NULL, 'PORFAVOR AYUDARME.', '000025', '', NULL),
(26, 'He perdido la bicicleta', '2016-10-11', '2016-10-11', 'Sarriá-San Gervasio', 'Me han robado la bici a la fuerza', 'LIV', 'TEMPT 2', 'BLANCA', NULL, 'ESPERO ENCONTRARLA PRONTO, AYUDARME PORFAVOR.', '000026', '', NULL),
(27, 'Le han robad la bici a mi hija', '2016-09-12', '2016-09-12', 'Gracia', 'Le han robado la bici a la fuerza, 2 chicos.', 'LIV', 'INTRIGUE 2', 'NEGRA / AZUL', NULL, 'PORFAVOR AYUDARME A ENCONTRARLA.', '000027', '', NULL),
(28, 'URGENTE!!!', '2016-10-10', '2016-10-10', 'Horta-Guinardó', 'La tenia en el garaje y han entrado a robar la bici.', 'QUIPPLAN', 'F02 CITY B', 'NEGRA', NULL, 'Si la encontrais contactar porfavor.', '000028', '', NULL),
(29, 'Me han robado la bici electrica', '2016-09-08', '2016-09-08', 'Nou Barris', 'La he dejado aparcada en el bicibox y ahora ya no esta.', 'QUIPPLAN', 'F02 CITY W', 'NEGRA', NULL, '', '000029', '', NULL),
(30, 'HE PERDIDO LA BICI', '2016-10-14', '2016-10-15', 'San Andrés', 'Se la deje a un amigo y se la robaron.', 'QUIPPLAN', 'F08 PLUS CITY B', 'NEGRA', NULL, '', '000030', '', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anunci`
--
ALTER TABLE `anunci`
  ADD PRIMARY KEY (`anu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anunci`
--
ALTER TABLE `anunci`
  MODIFY `anu_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
