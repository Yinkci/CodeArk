-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2018 at 10:31 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.20

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
  `menu_title` varchar(250) NOT NULL,
  `cs_Menus` varchar(50) NOT NULL,
  `cs_Links` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_addmenu`
--

INSERT INTO `cs_addmenu` (`OrderID`, `menu_title`, `cs_Menus`, `cs_Links`) VALUES
(1, 'TopMenu', 'Homepage', 'LINK'),
(2, 'TopMenu', 'About Us', 'LINK'),
(3, 'TopMenu', 'Services', 'LINK'),
(4, 'TopMenu', 'Contact Us', 'LINK');

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
  `TemplateFile` varchar(100) NOT NULL,
  `htmlcontent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_page`
--

INSERT INTO `cs_page` (`PageID`, `PageName`, `PageLink`, `TemplateFile`, `htmlcontent`) VALUES
(1, 'Homepage', 'homepage', 'about', ''),
(2, 'About us', 'about-us', 'Default Template', ''),
(3, 'Contact Us', 'contact-us', 'Default Template', ''),
(4, 'Introduction Page', 'introduction-page', 'Default Template', '<h1 style=\"text-align: center; color: #ff0000;\"><span style=\"color: #333300;\"><strong>Code <em>A</em>rk</strong></span></h1>\r\n<p><span style=\"color: #333300;\">Lorem ipsum dolor sit amet, feugiat officia, maecenas quisque malesuada adipiscing gravida, voluptatum a, purus maecenas vivamus eget ac tellus, platea nec ut quisque lorem. Sed mattis laoreet interdum convallis nisl aliquam, donec mauris senectus lectus nulla, wisi laoreet etiam turpis. Molestie amet a hendrerit, pulvinar ante. Metus in penatibus purus porta. Sed voluptatem integer aenean dui, sed porta elit sapien, vestibulum quis urna in sociosqu ut justo, metus nullam non. Sem integer nec nisl iaculis suspendisse odio, tempus malesuada, quaerat facilisi at erat ac, velit suscipit duis aliquam, sit aenean sit aliquam sit. Justo in adipiscing, nunc eget felis sem, eu sit ullamcorper class occaecat</span></p>\r\n<p><span style=\"color: #333300;\">Selit suscipit duis aliquam, sit aenean sit aliquam sit. Justo in adipiscing, nunc eget felis sem, eu sit ullamcorper class occaecat met lor.</span></p>');

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
  MODIFY `OrderID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cs_page`
--
ALTER TABLE `cs_page`
  MODIFY `PageID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
