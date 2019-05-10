-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 mei 2019 om 14:11
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yacht`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bookings`
--

CREATE TABLE `bookings` (
  `bookingID` int(10) NOT NULL,
  `Customers` int(10) NOT NULL,
  `Yachts` int(10) NOT NULL,
  `Status` enum('Optie','Bevestigd','Geannuleerd','') NOT NULL,
  `paymentStatus` enum('Open','In afwachting','Deels voldaan','voldaan','Gecrediteerd') NOT NULL,
  `paymentPreference` enum('Per bank','Creditcard','Paypal','iDEAL') NOT NULL,
  `date_start` datetime NOT NULL,
  `Date_end` datetime NOT NULL,
  `catering` enum('Y','N','','') NOT NULL,
  `skipper` enum('Y','N','','') NOT NULL,
  `flottielje` enum('Y','N','','') NOT NULL,
  `groceries` enum('Y','N','','') NOT NULL,
  `transfer` enum('Y','N','','') NOT NULL,
  `insurence` enum('Y','N','','') NOT NULL,
  `childLifejackets` enum('Y','N','','') NOT NULL,
  `fishinggear` enum('Y','N','','') NOT NULL,
  `paddleboard` enum('Y','N','','') NOT NULL,
  `aggreedToTerms` enum('Y','N','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customers`
--

CREATE TABLE `customers` (
  `customerID` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` char(2) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `internalNotes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pages`
--

CREATE TABLE `pages` (
  `PageID` int(10) NOT NULL,
  `online` enum('Y','N','','') NOT NULL,
  `type` enum('test','test1','','') NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ports`
--

CREATE TABLE `ports` (
  `portID` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` char(2) NOT NULL,
  `contactperson` varchar(255) NOT NULL,
  `contactphone` varchar(20) NOT NULL,
  `contactemail` varchar(100) NOT NULL,
  `facilities` text NOT NULL,
  `directions` text NOT NULL,
  `parking` text NOT NULL,
  `catering` enum('Y','N','','') NOT NULL,
  `skipper` enum('Y','N','','') NOT NULL,
  `flottielje` enum('Y','N','','') NOT NULL,
  `groceries` enum('Y','N','','') NOT NULL,
  `transfer` enum('Y','N','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `settings`
--

CREATE TABLE `settings` (
  `settingID` int(10) NOT NULL,
  `key` varchar(100) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `yachts`
--

CREATE TABLE `yachts` (
  `yachtID` int(10) NOT NULL,
  `Yachttypes` int(10) NOT NULL,
  `Ports` int(10) NOT NULL,
  `status` enum('test','test1','test2','') NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `yachttypes`
--

CREATE TABLE `yachttypes` (
  `yachtTypeID` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(20) NOT NULL,
  `type` enum('test','test2','test3','') NOT NULL,
  `length` double(10,2) DEFAULT NULL,
  `depth` double(10,2) NOT NULL,
  `engine` varchar(100) NOT NULL,
  `sail` double(10,2) NOT NULL,
  `1pcabins` int(10) NOT NULL,
  `2pcabins` int(10) NOT NULL,
  `beds` int(10) NOT NULL,
  `toilets` int(10) NOT NULL,
  `showers` int(10) NOT NULL,
  `gear` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingID`),
  ADD KEY `Customers` (`Customers`),
  ADD KEY `Yachts` (`Yachts`);

--
-- Indexen voor tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexen voor tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`PageID`);

--
-- Indexen voor tabel `ports`
--
ALTER TABLE `ports`
  ADD PRIMARY KEY (`portID`);

--
-- Indexen voor tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settingID`);

--
-- Indexen voor tabel `yachts`
--
ALTER TABLE `yachts`
  ADD PRIMARY KEY (`yachtID`),
  ADD KEY `Yachttypes_yachtTypeID` (`Yachttypes`),
  ADD KEY `Ports_portID` (`Ports`);

--
-- Indexen voor tabel `yachttypes`
--
ALTER TABLE `yachttypes`
  ADD PRIMARY KEY (`yachtTypeID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `PageID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `ports`
--
ALTER TABLE `ports`
  MODIFY `portID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `settingID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `yachts`
--
ALTER TABLE `yachts`
  MODIFY `yachtID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `yachttypes`
--
ALTER TABLE `yachttypes`
  MODIFY `yachtTypeID` int(10) NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`Customers`) REFERENCES `customers` (`customerID`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`Yachts`) REFERENCES `yachts` (`yachtID`);

--
-- Beperkingen voor tabel `yachts`
--
ALTER TABLE `yachts`
  ADD CONSTRAINT `yachts_ibfk_1` FOREIGN KEY (`Yachttypes`) REFERENCES `yachttypes` (`yachtTypeID`),
  ADD CONSTRAINT `yachts_ibfk_2` FOREIGN KEY (`Ports`) REFERENCES `ports` (`portID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
