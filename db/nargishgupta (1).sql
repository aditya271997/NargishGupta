-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 05:47 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nargishgupta`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `query` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `query`) VALUES
(2, 'hvvvvhvb', 'adityasinghrajput862', 'tfvhvv'),
(3, 'aditya singh', 'adityasinghrajput862', 'hello sir'),
(7, 'c++', 'dk.dkidd@gmail.com', 'hey dude'),
(9, 'c++', 'dk.dkidd@gmail.com', 'hey dude'),
(10, 'c++', 'dk.dkidd@gmail.com', 'hey dude'),
(11, 'c++', 'dk.dkidd@gmail.com', 'hey dude'),
(12, 'c++', 'dk.dkidd@gmail.com', 'hey dude'),
(13, 'c++', 'dk.dkidd@gmail.com', 'hey dude'),
(14, 'c++', 'dk.dkidd@gmail.com', 'hey dude'),
(15, 'c++', 'dk.dkidd@gmail.com', 'hey dude'),
(16, 'c++', 'dk.dkidd@gmail.com', 'hey dude'),
(17, 'nargish gupta', 'nargishgupta@sistec.', 'hi sir..');

-- --------------------------------------------------------

--
-- Table structure for table `ds`
--

CREATE TABLE `ds` (
  `chapter` int(20) NOT NULL,
  `topic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ds`
--

INSERT INTO `ds` (`chapter`, `topic`) VALUES
(1, 'Introduction of Data Structure .'),
(2, 'Stack Data Structure | Push and Pop Algorithm .'),
(3, 'Stack Data Structure | Application .'),
(4, 'Infix  to Postfix | Conversion.'),
(5, ' Infix to Prefix | Conversion .'),
(6, ' Infix to Postfix Conversion | Using Stack.'),
(7, ' Infix to Postfix Conversion | Using Stack.'),
(8, 'GATE Question Based on Stack-1 .'),
(9, 'GATE Questions Based on Stack-2 .'),
(10, 'Queue Data Structure | Introduction.'),
(11, 'Circular Queue Data Structure .'),
(12, 'GATE Questions Based on Queue Data Structure .'),
(13, ' GATE Questions Based on Programming-1 .'),
(14, 'GATE Questions Based on Programming-2 .'),
(15, 'GATE Questions Based on Programming-3.'),
(16, 'Linked List | Introduction'),
(17, 'Linked List | Traversing');

-- --------------------------------------------------------

--
-- Table structure for table `toc`
--

CREATE TABLE `toc` (
  `chapter` int(20) NOT NULL,
  `topic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toc`
--

INSERT INTO `toc` (`chapter`, `topic`) VALUES
(1, 'Introduction of TOC'),
(2, 'Finite Automata | Types | Introduction.'),
(3, 'DFA Construction | Binary No. Divisible by 3 '),
(4, ' DFA Construction | Neither Accept\'00\' Nor \'11\' .'),
(5, ' DFA Construction | Exmaples.'),
(6, 'DFA Construction | Ending With Substring \'ab\''),
(7, ' DFA Construction | Starting With \'a\' and Ending With \'b\' .'),
(8, 'DFA Construction | Length of the String .'),
(9, 'DFA Construction | Length of the String | Exactly-3 Atleast-3 '),
(10, '\r\n DFA Construction | Start and End With Different Symbol.'),
(11, 'DFA Construction | Start and End With Same Symbol .'),
(12, ' DFA Construction | Example 2 .'),
(13, 'DFA Construction | Example 3.'),
(14, 'DFA Construction | Example 4.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ds`
--
ALTER TABLE `ds`
  ADD PRIMARY KEY (`chapter`);

--
-- Indexes for table `toc`
--
ALTER TABLE `toc`
  ADD PRIMARY KEY (`chapter`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ds`
--
ALTER TABLE `ds`
  MODIFY `chapter` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `toc`
--
ALTER TABLE `toc`
  MODIFY `chapter` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
