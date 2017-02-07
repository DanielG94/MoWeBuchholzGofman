-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 21. Nov 2016 um 14:17
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `schalkedb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `applications`
--

CREATE TABLE `applications` (
  `application_id` int(6) NOT NULL,
  `prename` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `application` varchar(100) NOT NULL,
  `curriculum_vitae` varchar(100) NOT NULL,
  `application_date` date NOT NULL,
  `application_approved` varchar(1) NOT NULL,
  `position_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `applications`
--

INSERT INTO `applications` (`application_id`, `prename`, `surname`, `email`, `phone`, `application`, `curriculum_vitae`, `application_date`, `application_approved`, `position_id`) VALUES
(1, 'Daniel', 'Buchholz', 'd.buchholz94@web.de', 123456789, 'C:/Applications/application_BuchholzDaniel.pdf', 'C:/Applications/curriculum_vitae_BuchholzDaniel.pdf', '2016-11-21', 'y', 1),
(2, 'Daniel', 'Buchholz', 'd.buchholz94@web.de', 123456789, 'C:/Applications/application_BuchholzDaniel.pdf', 'C:/Applications/curriculumvitae_BuchholzDaniel.pdf', '2016-11-21', 'y', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `positions`
--

CREATE TABLE `positions` (
  `position_id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `valid_until` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `positions`
--

INSERT INTO `positions` (`position_id`, `name`, `description`, `valid_until`) VALUES
(1, 'Pflegekraft', 'Wir suchen eine engagierte Pflegekraft mit mindestens 5 Jahren Berufserfahrung...', '2017-01-30'),
(2, 'Pflegekraft Aushilfe', 'Wir suchen eine engagierte Pflegekraft für ca. 20h/Woche, gerne auch nach Ausbildung...', '2016-12-24');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `role`
--

CREATE TABLE `role` (
  `role_id` int(6) NOT NULL,
  `role_name` varchar(15) NOT NULL,
  `role_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `role_description`) VALUES
(1, 'admin', 'Full admin permissions (user management, news, applications)'),
(2, 'application', 'Full permission for applications only (view, approve, decline)'),
(3, 'news', 'Full permissions for news only (view, edit, delete)');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `user_id` int(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `valid_until` date NOT NULL,
  `role_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `valid_until`, `role_id`) VALUES
(1, 'manfred', 'geheim', '2017-03-02', 2),
(2, 'admin', 'admin', '2016-12-10', 1),
(3, 'ulla', 'alles_x', '2017-11-29', 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`application_id`);

--
-- Indizes für die Tabelle `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`position_id`);

--
-- Indizes für die Tabelle `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `applications`
--
ALTER TABLE `applications`
  MODIFY `application_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `positions`
--
ALTER TABLE `positions`
  MODIFY `position_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
