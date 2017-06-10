-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2017 at 10:45 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1-log
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PiastCode`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name`) VALUES
(1, 'CWK'),
(2, 'Kappa'),
(40, 'Kino40');

-- --------------------------------------------------------

--
-- Table structure for table `event`
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
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `name`, `description`, `datetime_start`, `datetime_end`, `verified`, `fk_user_creator`, `fk_place`) VALUES
(4, 'PiastCode', 'programowanie', '2016-12-21 09:00:00', '2016-12-23 18:00:00', 1, 1, 1),
(5, 'Zbieranie ziemniaków', 'Kappa', '2017-06-10 06:00:00', '2017-06-16 09:37:00', 1, 1, 1),
(6, 'Kappa', 'lubię placki', '2017-06-15 06:00:00', '2017-07-17 15:00:00', 1, 1, 2),
(7, 'Kappa', 'lubię placki', '2017-06-15 06:00:00', '2017-07-17 15:00:00', 1, 1, 2),
(8, 'Kappa', 'lubię placki', '2017-06-15 06:00:00', '2017-07-17 15:00:00', 0, 1, 2),
(9, 'Kappa', 'lubię placki', '2017-06-15 06:00:00', '2017-07-17 15:00:00', 1, 1, 2),
(10, 'Kappa', 'lubię placki', '2017-06-15 06:00:00', '2017-07-17 15:00:00', 1, 1, 2),
(11, 'Kat 40', 'Keepo', '2017-06-14 09:34:00', '2017-06-25 21:37:00', 0, 1, 1),
(12, 'allin', 'Keepo', '2017-06-14 09:34:00', '2017-06-25 21:37:00', 0, 1, 1),
(13, 'allin', 'Keepo', '2017-06-14 09:34:00', '2017-06-25 21:37:00', 0, 1, 1),
(14, 'allin', 'Keepo', '2017-06-14 09:34:00', '2017-06-25 21:37:00', 0, 1, 1),
(15, 'allin', 'Keepo', '2017-06-14 09:34:00', '2017-06-25 21:37:00', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_has_category`
--

CREATE TABLE `event_has_category` (
  `id_event_has_category` int(11) NOT NULL,
  `fk_event` int(11) NOT NULL,
  `fk_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_has_category`
--

INSERT INTO `event_has_category` (`id_event_has_category`, `fk_event`, `fk_category`) VALUES
(1, 9, 1),
(2, 10, 1),
(3, 12, 1),
(9, 14, 1),
(4, 12, 2),
(10, 14, 2),
(12, 15, 2),
(5, 9, 40),
(6, 10, 40),
(7, 11, 40),
(8, 12, 40),
(11, 14, 40);

-- --------------------------------------------------------

--
-- Table structure for table `password_change_requests`
--

CREATE TABLE `password_change_requests` (
  `id_password_change_requests` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id_place` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id_place`, `name`, `description`, `address`) VALUES
(1, 'CWK', 'centrum', 'Wrocławska 6/2'),
(2, 'solaris', 'jakiś opis', 'kamienna 2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `email`, `verified`, `is_admin`) VALUES
(1, 'admin', 0x243279243130245a4d4542356d3448537a34675077767968496957564f3461614d38477761614c42436b766f6758706a335a44754c36434d52584243, 'admin@admin.pl', 1, 1);

--
-- Indexes for dumped tables
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
  ADD PRIMARY KEY (`id_event_has_category`,`fk_event`,`fk_category`),
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
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_event_place1` FOREIGN KEY (`fk_place`) REFERENCES `place` (`id_place`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_event_user1` FOREIGN KEY (`fk_user_creator`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_has_category`
--
ALTER TABLE `event_has_category`
  ADD CONSTRAINT `fk_event_has_category_category1` FOREIGN KEY (`fk_category`) REFERENCES `category` (`id_category`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_event_has_category_event` FOREIGN KEY (`fk_event`) REFERENCES `event` (`id_event`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
