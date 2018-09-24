-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 24, 2018 at 09:06 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `cs_addmenu`
--

CREATE TABLE `cs_addmenu` (
  `OrderID` int(100) NOT NULL,
  `cs_Menus` varchar(50) NOT NULL,
  `cs_Links` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_addmenu`
--

INSERT INTO `cs_addmenu` (`OrderID`, `cs_Menus`, `cs_Links`) VALUES
(1, 'Nicky Jacobo  :)', 'https://nicky.comzx1'),
(2, 'Shana Hirai :)', 'https://shana.com3'),
(3, 'Tohka Yatogami :)', 'https://tohka.com'),
(4, 'Asuna Yuki :)', 'https:/Asuna.com');

-- --------------------------------------------------------

--
-- Table structure for table `cs_home_url`
--

CREATE TABLE `cs_home_url` (
  `home_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_home_url`
--

INSERT INTO `cs_home_url` (`home_url`) VALUES
('CodeSensei');

-- --------------------------------------------------------

--
-- Table structure for table `cs_menu`
--

CREATE TABLE `cs_menu` (
  `nav_menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_menu`
--

INSERT INTO `cs_menu` (`nav_menu`) VALUES
('1sa');

-- --------------------------------------------------------

--
-- Table structure for table `cs_page`
--

CREATE TABLE `cs_page` (
  `PageID` int(250) NOT NULL,
  `PageName` varchar(250) NOT NULL,
  `PageLink` varchar(250) NOT NULL,
  `TemplateFile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_page`
--

INSERT INTO `cs_page` (`PageID`, `PageName`, `PageLink`, `TemplateFile`) VALUES
(1, 'yui', 'mio', ''),
(2, 'mugi', 'ritsu', ''),
(3, 'yahoo', 'hehe', ''),
(4, 'eat', 'newpage', ''),
(5, 'NickyShana', 'nickyshana', ''),
(8, 'Mia', 'Mia', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('poi', '555');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `pw` varchar(90) NOT NULL,
  `user` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cs_addmenu`
--
ALTER TABLE `cs_addmenu`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `cs_menu`
--
ALTER TABLE `cs_menu`
  ADD PRIMARY KEY (`nav_menu`);

--
-- Indexes for table `cs_page`
--
ALTER TABLE `cs_page`
  ADD PRIMARY KEY (`PageID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`pw`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cs_addmenu`
--
ALTER TABLE `cs_addmenu`
  MODIFY `OrderID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cs_page`
--
ALTER TABLE `cs_page`
  MODIFY `PageID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
