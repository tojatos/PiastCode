-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Cze 2017, 09:08
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `piastcode`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`id_category`, `name`) VALUES
(0, 'kino'),
(1, 'CWK'),
(2, 'Kappa'),
(3, 'teatr'),
(4, 'festiwal'),
(5, 'koncert');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `datetime_start` datetime NOT NULL,
  `datetime_end` datetime NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `fk_user_creator` int(11) NOT NULL,
  `fk_place` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `event`
--

INSERT INTO `event` (`id_event`, `name`, `description`, `datetime_start`, `datetime_end`, `verified`, `fk_user_creator`, `fk_place`) VALUES
(4, 'PiastCode', 'programowanie', '2016-12-21 09:00:00', '2016-12-23 18:00:00', 1, 1, 1),
(5, 'Zbieranie ziemniaków', 'Kappa', '2017-06-10 06:00:00', '2017-06-16 09:37:00', 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `event_has_category`
--

CREATE TABLE `event_has_category` (
  `fk_event` int(11) NOT NULL,
  `fk_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_change_requests`
--

CREATE TABLE `password_change_requests` (
  `id_password_change_requests` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `place`
--

CREATE TABLE `place` (
  `id_place` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `place`
--

INSERT INTO `place` (`id_place`, `name`, `description`, `address`) VALUES
(1, 'CWK', 'centrum', 'Wrocławska 6/2'),
(2, 'solaris', 'jakiś opis', 'kamienna 2');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` binary(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `email`, `verified`, `is_admin`) VALUES
(1, 'admin', 0x243279243130245a4d4542356d3448537a34675077767968496957564f3461614d38477761614c42436b766f6758706a335a44754c36434d52584243, 'admin@admin.pl', 1, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `fk_event_user1_idx` (`fk_user_creator`),
  ADD KEY `fk_event_place1_idx` (`fk_place`);

--
-- Indexes for table `event_has_category`
--
ALTER TABLE `event_has_category`
  ADD PRIMARY KEY (`fk_event`,`fk_category`),
  ADD KEY `fk_event_has_category_category1_idx` (`fk_category`),
  ADD KEY `fk_event_has_category_event_idx` (`fk_event`);

--
-- Indexes for table `password_change_requests`
--
ALTER TABLE `password_change_requests`
  ADD PRIMARY KEY (`id_password_change_requests`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id_place`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_event_place1` FOREIGN KEY (`fk_place`) REFERENCES `place` (`id_place`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_event_user1` FOREIGN KEY (`fk_user_creator`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `event_has_category`
--
ALTER TABLE `event_has_category`
  ADD CONSTRAINT `fk_event_has_category_category1` FOREIGN KEY (`fk_category`) REFERENCES `category` (`id_category`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_event_has_category_event` FOREIGN KEY (`fk_event`) REFERENCES `event` (`id_event`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
