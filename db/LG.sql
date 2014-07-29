-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-07-2014 a las 13:31:18
-- Versión del servidor: 5.5.38
-- Versión de PHP: 5.3.10-1ubuntu3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `LG`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poi_moon`
--

CREATE TABLE IF NOT EXISTS `poi_moon` (
  `Id` int(11) NOT NULL,
  `Name` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Lat` float NOT NULL,
  `Lang` float NOT NULL,
  `Description` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Image` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Type` int(11) NOT NULL,
  KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `poi_moon`
--

INSERT INTO `poi_moon` (`Id`, `Name`, `Lat`, `Lang`, `Description`, `Image`, `Type`) VALUES
(1, 'Apollo 11', 0.67408, 23.473, 'Apolo 11 fue una misión espacial tripulada de Estados Unidos cuyo objetivo fue lograr que un ser humano caminara en la superficie de la Luna. La misión se envió al espacio el 16 de julio de 1969, llegó a la superficie de la Luna el 20 de julio de ese mismo año y al día siguiente logró que 2 astronautas (Armstrong y Aldrin) caminaran sobre la superficie lunar. El Apolo 11 fue impulsado por un cohete Saturno V desde la plataforma LC 39A y lanzado a las 13:32 hora local del complejo de Cabo Kennedy, en Florida (EE.UU.). Oficialmente se conoció a la misión como AS-506. La misión está considerada como uno de los momentos más significativos de la historia de la Humanidad y la Tecnología.', 'img/apollo/apollo11.png', 1),
(2, 'Apollo 12', -3.01239, -23.4216, 'Apolo 12 fue la sexta misión tripulada del programa Apolo de la NASA, y la segunda que alunizó. Lanzada unos meses después del Apolo 11, el Apolo 12 alunizó en el Oceanus Procellarum, muy cerca de la sonda estadounidense Surveyor 3, posada en la Luna desde abril de 1967, y los astronautas trajeron algunas piezas de esta sonda de vuelta a la Tierra para su estudio, entre ellas la cámara fotográfica.', 'img/apollo/apollo12.png', 1),
(3, 'Apollo 13', 0, 0, 'Apolo 11 fue una misión espacial tripulada de Estados Unidos cuyo objetivo fue lograr que un ser humano caminara en la superficie de la Luna. La misión se envió al espacio el 16 de julio de 1969, llegó a la superficie de la Luna el 20 de julio de ese mismo año y al día siguiente logró que 2 astronautas (Armstrong y Aldrin) caminaran sobre la superficie lunar. El Apolo 11 fue impulsado por un cohete Saturno V desde la plataforma LC 39A y lanzado a las 13:32 hora local del complejo de Cabo Kennedy, en Florida (EE.UU.). Oficialmente se conoció a la misión como AS-506. La misión está considerada como uno de los momentos más significativos de la historia de la Humanidad y la Tecnología.', 'img/apollo/apollo13.png', 1),
(4, 'Apollo 14', -3.6453, -17.4714, 'Apolo 11 fue una misión espacial tripulada de Estados Unidos cuyo objetivo fue lograr que un ser humano caminara en la superficie de la Luna. La misión se envió al espacio el 16 de julio de 1969, llegó a la superficie de la Luna el 20 de julio de ese mismo año y al día siguiente logró que 2 astronautas (Armstrong y Aldrin) caminaran sobre la superficie lunar. El Apolo 11 fue impulsado por un cohete Saturno V desde la plataforma LC 39A y lanzado a las 13:32 hora local del complejo de Cabo Kennedy, en Florida (EE.UU.). Oficialmente se conoció a la misión como AS-506. La misión está considerada como uno de los momentos más significativos de la historia de la Humanidad y la Tecnología.', 'img/apollo/apollo14.png', 1),
(5, 'Apollo 15', 26.1322, 3.63386, 'Decimoquinto vuelo del programa Apolo (denominado oficialmente AS-510), fue lanzado el 26 de julio de 1971 mediante un cohete del tipo Saturno 5, en dirección a la Luna.Fue la primera de las misiones del tipo J, es decir, con modificaciones en la astronave que permitía una duración del vuelo de hasta 14 días.Poco después de comenzar la órbita lunar número 12, el módulo de descenso consiguió alunizar a 26,08º N 3,66º E (a sólo un centenar de metros del punto teórico en la región de Hadley-Apeninos, en el Mare Imbrium) llevando como tripulantes a David R. Scott -comandante-, Alfred M. Worden y James B. Irwin.', 'img/apollo/apollo15.png', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
