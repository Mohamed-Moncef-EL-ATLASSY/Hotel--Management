-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 11:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bivago`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `room_type` text NOT NULL,
  `bed_type` text NOT NULL,
  `view` text NOT NULL DEFAULT '0',
  `kid0_2yo` tinyint(4) NOT NULL,
  `kid2_14yo` tinyint(4) NOT NULL,
  `kid14yo` tinyint(4) NOT NULL,
  `add_bed` int(11) NOT NULL,
  `add_room` int(11) NOT NULL,
  `food_pension` text NOT NULL,
  `entry_date` date NOT NULL,
  `exit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `customer_id`, `room_type`, `bed_type`, `view`, `kid0_2yo`, `kid2_14yo`, `kid14yo`, `add_bed`, `add_room`, `food_pension`, `entry_date`, `exit_date`) VALUES
(11, 0, 'Simple Room', 'Double Bed', 'External', 1, 1, 2, 3, 3, 'Partial', '2021-05-27', '2021-05-28'),
(13, 0, 'Bungalow', '2 Single Beds', 'External', 1, 3, 2, 1, 0, 'Partial', '2021-05-19', '2021-05-28'),
(15, 0, 'Apartment', '2 Single Beds', 'Internal', 1, 1, 2, 3, 0, 'Complete', '2021-05-26', '2021-05-28'),
(16, 0, 'Simple Room', 'Double Bed', 'Internal', 0, 1, 0, 0, 1, 'Complete', '2021-05-27', '2021-05-28'),
(18, 0, 'Simple Room', '2 Single Beds', 'Internal', 2, 0, 0, 1, 0, 'Partial', '2021-05-26', '2021-05-29'),
(19, 0, 'Apartment', 'Double Bed', 'External', 0, 0, 0, 0, 0, 'Partial', '2021-05-27', '2021-05-27'),
(20, 0, 'Bungalow', '2 Single Beds', 'Internal', 0, 0, 1, 2, 0, 'Partial', '2021-05-26', '2021-05-28'),
(21, 0, 'Apartment', 'Double Bed', 'External', 0, 0, 0, 0, 0, 'Complete', '2021-05-29', '2021-05-31'),
(24, 0, 'Apartment', 'Double Bed', 'Internal', 0, 0, 0, 2, 0, 'Complete', '2021-05-31', '2021-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` char(25) NOT NULL,
  `last_name` char(25) NOT NULL,
  `email` char(25) NOT NULL,
  `password` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin@bivago.com', 'adminpass'),
(2, 'moncef', 'atlassy', 'moncef@msqkd.com', 'moncef'),
(10, 'fname', 'lname', 'email@gmail.com', 'password'),
(11, 'Moncef', 'Atlassy', 'moncef@gmail.com', '124578'),
(12, 'moncef', 'moncef', 'moncef@gmail.com', '124578'),
(17, 'safae', 'sou', 'sa@gmail.com', 'lou'),
(18, 'testrequired', 'requiredtest', 'required@gmail.com', 'required'),
(19, 'Ziad', 'Bloukid', 'B.ziad@gmail.com', 'ziadziad'),
(20, 'Moncef', 'Atlassy', 'monceftest@gmail.com', 'azerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
