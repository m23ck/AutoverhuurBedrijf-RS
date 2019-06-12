-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 07 jun 2019 om 13:42
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoverhuurBedrijfRS`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_klanten`
--

CREATE TABLE `tbl_klanten` (
  `klantid` int(255) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `bedrijf` varchar(255) NOT NULL,
  `straatnaam` varchar(255) NOT NULL,
  `huisnummer` int(50) NOT NULL,
  `toevoeging` varchar(50) NOT NULL,
  `telefoon` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_klanten`
--

INSERT INTO `tbl_klanten` (`klantid`, `naam`, `voornaam`, `bedrijf`, `straatnaam`, `huisnummer`, `toevoeging`, `telefoon`) VALUES
(1, 'Mack', 'Andojo', 'Surex', 'aardappelstraat', 44, 'c', 7254402),
(2, 'Latchmansing', 'Kenson', 'Ken & Sons', 'granietstraat', 3, '', 8564321),
(3, 'Samadhan', 'Shaniel', 'Vector', 'perolastraat', 1, '', 8965432),
(5, 'Mack', 'Tafarel', '', 'keizerstraat', 463, '', 7645321),
(6, 'Pawirodinomo', 'Mitchel', 'Above Normal Co,', 'Etnalaan', 74, '', 8964521),
(7, 'Juan', 'Rosa', '', 'ourostraat', 23, '', 8754231);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_tarief`
--

CREATE TABLE `tbl_tarief` (
  `categorie` varchar(50) NOT NULL,
  `borgsom` int(255) NOT NULL,
  `prijs` int(255) NOT NULL,
  `boete` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_verhuren`
--

CREATE TABLE `tbl_verhuren` (
  `huurid` int(255) NOT NULL,
  `voertuigid` int(255) NOT NULL,
  `kentekennummer` varchar(50) NOT NULL,
  `klantid` int(255) NOT NULL,
  `uitgeefdatum` varchar(255) NOT NULL,
  `inleverdatum` varchar(255) NOT NULL,
  `prijs` int(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_verhuren`
--

INSERT INTO `tbl_verhuren` (`huurid`, `voertuigid`, `kentekennummer`, `klantid`, `uitgeefdatum`, `inleverdatum`, `prijs`, `status`) VALUES
(5, 6, '1452PA', 1, '2019-06-07', '2019-06-14', 134, 'onbetaald'),
(6, 3, '1735CM', 0, '2019-06-07', '2019-06-30', 2000, 'betaald'),
(7, 1, '1853PG', 3, '2019-06-07', '2019-06-26', 1800, 'betaald'),
(8, 4, '1654PC', 1, '2019-06-07', '2019-06-26', 1500, 'betaald'),
(9, 3, '1735CM', 1, '2019-06-07', '2019-06-11', 500, 'betaald');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_voertuig`
--

CREATE TABLE `tbl_voertuig` (
  `voertuigid` int(255) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `kentekennummer` varchar(50) NOT NULL,
  `bouwjaar` int(50) NOT NULL,
  `kilometerstand` int(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_voertuig`
--

INSERT INTO `tbl_voertuig` (`voertuigid`, `merk`, `model`, `categorie`, `kentekennummer`, `bouwjaar`, `kilometerstand`, `status`) VALUES
(3, '0', 'Terano', 'C', '1735CM', 2010, 700, 'verhuurd'),
(4, '0', 'Cami', 'C', '1654PC', 2012, 700, 'garage'),
(6, '0', 'Skyline', 'B', '1452PA', 2016, 1200, 'garage'),
(8, '0', 'Fit', 'B', '1482BA', 2016, 800, 'garage');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tbl_klanten`
--
ALTER TABLE `tbl_klanten`
  ADD PRIMARY KEY (`klantid`);

--
-- Indexen voor tabel `tbl_tarief`
--
ALTER TABLE `tbl_tarief`
  ADD PRIMARY KEY (`categorie`);

--
-- Indexen voor tabel `tbl_verhuren`
--
ALTER TABLE `tbl_verhuren`
  ADD PRIMARY KEY (`huurid`);

--
-- Indexen voor tabel `tbl_voertuig`
--
ALTER TABLE `tbl_voertuig`
  ADD PRIMARY KEY (`voertuigid`),
  ADD UNIQUE KEY `kentekennummer` (`kentekennummer`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tbl_klanten`
--
ALTER TABLE `tbl_klanten`
  MODIFY `klantid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `tbl_verhuren`
--
ALTER TABLE `tbl_verhuren`
  MODIFY `huurid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT voor een tabel `tbl_voertuig`
--
ALTER TABLE `tbl_voertuig`
  MODIFY `voertuigid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
