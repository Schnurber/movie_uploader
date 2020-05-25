-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 11. Jul 2019 um 13:14
-- Server-Version: 5.7.25
-- PHP-Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `othmovies`
--
CREATE DATABASE IF NOT EXISTS `othmovies` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `othmovies`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `oth_movies`
--

CREATE TABLE `oth_movies` (
  `id` int(11) NOT NULL,
  `vorname` varchar(60) NOT NULL,
  `nachname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `titel` varchar(100) NOT NULL,
  `laenge` int(11) NOT NULL,
  `jahr` int(11) NOT NULL,
  `beschreibung` text NOT NULL,
  `file` varchar(80) NOT NULL,
  `einverstaendnis` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `oth_movies`
--

INSERT INTO `oth_movies` (`id`, `vorname`, `nachname`, `email`, `titel`, `laenge`, `jahr`, `beschreibung`, `file`, `einverstaendnis`) VALUES
(7, 'HANS', 'WURST', 'd.meiller@oth-aw.de', 'FOOBAR', 100, 2019, 'FOO', 'Survival_Film_Final.mp4', 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `oth_movies`
--
ALTER TABLE `oth_movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `oth_movies`
--
ALTER TABLE `oth_movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
