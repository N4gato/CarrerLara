-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2014 at 04:44 AM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Carrer`
--

-- --------------------------------------------------------

--
-- Table structure for table `avoir`
--

CREATE TABLE IF NOT EXISTS `avoir` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `id_com` int(11) NOT NULL,
  `date_com` date DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id_c`,`id_com`),
  KEY `FK_avoir_id_com` (`id_com`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id_com` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text,
  `text` text,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id_com`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE IF NOT EXISTS `cours` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `url` text,
  `img` text,
  `categorie` text,
  `date_deb` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `type_cours` text,
  `paye` tinyint(1) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inscrit`
--

CREATE TABLE IF NOT EXISTS `inscrit` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `id_u` int(11) NOT NULL,
  `date_insc` date DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id_c`,`id_u`),
  KEY `FK_inscrit_id_u` (`id_u`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `id_u` int(11) NOT NULL,
  `message` text,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id_p`,`id_u`),
  KEY `FK_message_id_u` (`id_u`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `id_com` int(11) NOT NULL,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL,
  PRIMARY KEY (`id_u`,`id_com`),
  KEY `FK_post_id_com` (`id_com`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prof`
--

CREATE TABLE IF NOT EXISTS `prof` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `prenom` text,
  `CIN` text,
  `mail_p` text,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `prof`
--

INSERT INTO `prof` (`id_p`, `name`, `prenom`, `CIN`, `mail_p`, `created_at`, `updated_at`) VALUES
(1, 'Nagato', 'Bouayad', '1129761021', 'bouayad.n4@gmail.com', 0, 0),
(2, 'Nagato', 'Bouayad', '1129761021', 'bouayad.n4@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shared_cours`
--

CREATE TABLE IF NOT EXISTS `shared_cours` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `id_c` int(11) NOT NULL,
  `date_shared` date DEFAULT NULL,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL,
  PRIMARY KEY (`id_p`,`id_c`),
  KEY `FK_shared_cours_id_c` (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `CNE` text,
  `password` text,
  `mail_u` text,
  `username` text,
  `remember_Token` text,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `name_u` text,
  `type` int(11) NOT NULL DEFAULT '0',
  `admin` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_u`, `CNE`, `password`, `mail_u`, `username`, `remember_Token`, `updated_at`, `created_at`, `name_u`, `type`, `admin`) VALUES
(2, '1129761021', '$2y$10$IAIvjbQXNnnhEjO5BG0tx.KhHPjlimZwcqsYjncVKv8ICgrzfOIa6', 'bouayad.n4@gmail.com', 'Nagato', NULL, '2014-05-09', '2014-05-09', 'otmane', 1, 1),
(3, '10101010', '$2y$10$QH6I1uCvgDPoziGa/OYMweUm0UXwam/1n5SWFFkYIqsLqpKApAtLu', 'karazi@gmail.com', 'Mery', 'h4tWfu0Mhq3zNY445Am2DEL4P2MGJMNrzzobdnhPjv2b6nvT9dxtuT3MzEuB', '2014-05-09', '2014-05-09', 'Mery', 0, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `FK_avoir_id_c` FOREIGN KEY (`id_c`) REFERENCES `cours` (`id_c`),
  ADD CONSTRAINT `FK_avoir_id_com` FOREIGN KEY (`id_com`) REFERENCES `comment` (`id_com`);

--
-- Constraints for table `inscrit`
--
ALTER TABLE `inscrit`
  ADD CONSTRAINT `FK_inscrit_id_c` FOREIGN KEY (`id_c`) REFERENCES `cours` (`id_c`),
  ADD CONSTRAINT `FK_inscrit_id_u` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `FK_message_id_p` FOREIGN KEY (`id_p`) REFERENCES `prof` (`id_p`),
  ADD CONSTRAINT `FK_message_id_u` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_post_id_com` FOREIGN KEY (`id_com`) REFERENCES `comment` (`id_com`),
  ADD CONSTRAINT `FK_post_id_u` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`);

--
-- Constraints for table `shared_cours`
--
ALTER TABLE `shared_cours`
  ADD CONSTRAINT `FK_shared_cours_id_c` FOREIGN KEY (`id_c`) REFERENCES `cours` (`id_c`),
  ADD CONSTRAINT `FK_shared_cours_id_p` FOREIGN KEY (`id_p`) REFERENCES `prof` (`id_p`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
