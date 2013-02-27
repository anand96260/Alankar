-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2012 at 07:13 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alankar`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `RoomType` varchar(255) DEFAULT NULL,
  `Arrival` varchar(255) DEFAULT NULL,
  `Departure` varchar(255) DEFAULT NULL,
  `Units` int(10) DEFAULT NULL,
  `Adults` int(10) DEFAULT NULL,
  `Children` int(10) DEFAULT NULL,
  `Nights` int(10) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Firstname` varchar(255) DEFAULT NULL,
  `Lastname` varchar(255) DEFAULT NULL,
  `Telephone` varchar(255) DEFAULT NULL,
  `Fax` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Address` text,
  `PostalCode` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `Approval` int(10) NOT NULL DEFAULT '0',
  `CreateDate` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `RoomType`, `Arrival`, `Departure`, `Units`, `Adults`, `Children`, `Nights`, `Title`, `Firstname`, `Lastname`, `Telephone`, `Fax`, `Email`, `Address`, `PostalCode`, `City`, `Country`, `Approval`, `CreateDate`) VALUES
(1, 'Standard', '22-09-2012', '23-09-2012', 4, 4, 2, 2, 'Mr', 'Ashok', 'Kumar', '12345678', '123455678', 'ashok@geniustouch.in', '#114, 5th Street, Gandhipuram', '641012', 'Coimbatore', 'India', 1, '2012-09-22 14:43:44'),
(2, 'Standard', '22-09-2012', '23-09-2012', 2, 2, 1, 1, 'Mr', 'Ashok', 'Kuamr ', '123214', '1635215', 'ashok@geniustouch.in', '#114 askdfh alksdf hl', '123456', 'Ganapathy', 'India', 1, '2012-09-22 16:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `gts_users`
--

CREATE TABLE IF NOT EXISTS `gts_users` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(100) DEFAULT NULL,
  `user_pass` varchar(255) DEFAULT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `display_name` varchar(250) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_registered` datetime DEFAULT NULL,
  `user_status` int(11) DEFAULT '0',
  `user_role` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gts_users`
--

INSERT INTO `gts_users` (`ID`, `user_login`, `user_pass`, `first_name`, `last_name`, `display_name`, `user_email`, `user_registered`, `user_status`, `user_role`) VALUES
(1, 'admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'Kamalesh', 'Jayaraman', 'Kamalesh', 'kamalesh.kj@gmail.com', '2012-04-16 16:15:39', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gt_content`
--

CREATE TABLE IF NOT EXISTS `gt_content` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `PageTitle` text,
  `MKeywords` text,
  `MDescription` text,
  `ContentTitle` text,
  `Content` text,
  `CreatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gt_content`
--

INSERT INTO `gt_content` (`ID`, `PageTitle`, `MKeywords`, `MDescription`, `ContentTitle`, `Content`, `CreatedDate`) VALUES
(1, 'Hotel Alankar Grande', '', 'Hotel Alankar Grande', 'Welcome to Hotel Alankar Grande', 'Hotel Alankar grande is the perfect place for the person in search of a luxurious hotel in Coimbatore with 3 star facilities. Set right in the Gandhipuram area which is the heart of the cosmopolitan city of Coimbatore, just 2 km from the railway station and 10 km from the airport, Hotel Alankar Grande is one of the best hotels in Coimbatore. Hotel Alankar grande has been the first choice for the visitors of this vibrant city since its renovation and re opening in the year 2003. The hotel houses 61 well appointed rooms that include standard, deluxe, suite and the Grand Suites, with state of the art facilities and amenities. Our staffs pride themselves in providing unmatched services so that our guests always feel at home. We at Hotel Alankar Grande, always strive to be the hallmark of hospitality. ', '2012-08-20 00:00:00'),
(2, 'About Us', '', '', '', 'aljfd sfd\r\naskd fjlasfd \r\nsdla jldsjf a\r\nd lja lskdfj asfd \r\nsad\r\nads f\r\nj;lds fas\r\nj ', NULL),
(3, 'Accomodation', NULL, NULL, NULL, NULL, NULL),
(4, 'Testimonials', NULL, NULL, NULL, NULL, NULL),
(5, 'Contact Us', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gt_item`
--

CREATE TABLE IF NOT EXISTS `gt_item` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `ItemCategory` text,
  `Item` text,
  `Approval` int(10) DEFAULT '1',
  `CreatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gt_item`
--

INSERT INTO `gt_item` (`ID`, `ItemCategory`, `Item`, `Approval`, `CreatedDate`) VALUES
(1, 'SOUP', 'Garlic Soup - Veg', 1, '2012-08-31 13:58:49'),
(2, 'None', 'Tomato Egg Drop Soup (Non-Veg)', 1, '2012-08-31 13:59:01'),
(3, 'VEG', 'Dragon Sprout Rolls (D)', 1, '2012-08-31 16:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `gt_itemcategory`
--

CREATE TABLE IF NOT EXISTS `gt_itemcategory` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `ItemCategory` varchar(255) DEFAULT NULL,
  `Approval` int(10) DEFAULT '1',
  `CreatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gt_itemcategory`
--

INSERT INTO `gt_itemcategory` (`ID`, `ItemCategory`, `Approval`, `CreatedDate`) VALUES
(2, 'SOUP', 1, '2012-08-31 13:40:42'),
(3, 'SALAD', 1, '2012-08-31 13:40:52'),
(4, 'VEG', 1, '2012-08-31 16:52:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
