-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 03:38 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokedumb`
--

-- --------------------------------------------------------

--
-- Table structure for table `element_tb`
--

CREATE TABLE `element_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `element_tb`
--

INSERT INTO `element_tb` (`id`, `name`) VALUES
(1, 'tanah'),
(2, 'petir'),
(3, 'air'),
(4, 'poison'),
(5, 'Petir'),
(6, 'Petir'),
(7, 'Petir');

-- --------------------------------------------------------

--
-- Table structure for table `pokemon_tb`
--

CREATE TABLE `pokemon_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `str` varchar(30) DEFAULT NULL,
  `def` varchar(30) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pokemon_tb`
--

INSERT INTO `pokemon_tb` (`id`, `name`, `str`, `def`, `photo`) VALUES
(1, 'bulbasaur', '50', '50', 'bulbasaur.jpg'),
(2, 'pikachu', '70', '30', 'pikachu.jpg'),
(3, 'squirtle', '40', '60', 'squirtle.png'),
(5, 'Pika', '60', '40', 'fa_anti_mage_dota2_by_xar623-d968vwx.png');

-- --------------------------------------------------------

--
-- Table structure for table `poke_element`
--

CREATE TABLE `poke_element` (
  `id` int(11) NOT NULL,
  `pokemon_id` int(11) DEFAULT NULL,
  `element_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poke_element`
--

INSERT INTO `poke_element` (`id`, `pokemon_id`, `element_name`) VALUES
(5, 1, 'tanah'),
(6, 1, 'poison'),
(7, 2, 'petir'),
(8, 3, 'air'),
(11, 5, 'Petir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `element_tb`
--
ALTER TABLE `element_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pokemon_tb`
--
ALTER TABLE `pokemon_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poke_element`
--
ALTER TABLE `poke_element`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `element_tb`
--
ALTER TABLE `element_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pokemon_tb`
--
ALTER TABLE `pokemon_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `poke_element`
--
ALTER TABLE `poke_element`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
