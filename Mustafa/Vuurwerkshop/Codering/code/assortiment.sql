-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 dec 2018 om 15:46
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vuurwerk`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `assortiment`
--

CREATE TABLE `assortiment` (
  `naam` varchar(999) NOT NULL,
  `omschrijving` varchar(999) NOT NULL,
  `prijs` varchar(999) NOT NULL,
  `Afbeelding` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `assortiment`
--

INSERT INTO `assortiment` (`naam`, `omschrijving`, `prijs`, `Afbeelding`) VALUES
('Dynamite', 'Grote dynamietstaaf met loeiharde dreun.\r\n', '&euro;3,49\r\n', 'https://anypos-sbo.o.auroraobjects.eu/2/article/4312.1475587707.png'),
('Kanonslag', 'Box met 100 kanonslagen!\r\n', '&euro;1,99\r\n', 'https://anypos-sbo.o.auroraobjects.eu/2/article/2.1406552408.png'),
('Bazooka', 'Genadeloos harde knallen. Per 12 stuks.\r\n', '&euro;5,99\r\n', 'https://anypos-sbo.o.auroraobjects.eu/2/article/5416.1503413293.png'),
('Star Festival\r\n', 'Fantastisch siervuurwerk pakket.\r\n', '&euro;22,50\r\n', 'https://anypos-sbo.o.auroraobjects.eu/2/article/3527.1444743634.png'),
('Crown Titan\r\n', 'Prachtig siervuurwerk pakket met 4 cakes, 2 fontei...\r\n', '&euro;89,99\r\n', 'https://anypos-sbo.o.auroraobjects.eu/2/article/1443.1448548373.png'),
('Family Pakket XXXL\r\n', 'Zeer groot familiepakket met diverse soorten sierv...\r\n', '&euro;59,95\r\n', 'https://anypos-sbo.o.auroraobjects.eu/2/article/4570.1479157044.png'),
('New Year Assortment\r\n', 'Dit New Year pakket zit boordevol met diverse soor...\r\n', '&euro;172,00\r\n', 'https://anypos-sbo.o.auroraobjects.eu/2/article/6226.1540827380.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
