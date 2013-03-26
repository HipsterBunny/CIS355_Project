-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2013 at 07:45 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categoryID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`categoryID`),
  UNIQUE KEY `type` (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `type`) VALUES
(6, 'Apparel'),
(1, 'Art'),
(4, 'Cute'),
(5, 'Geek'),
(8, 'Home Living'),
(2, 'Jewelry'),
(7, 'Plush'),
(3, 'Vintage');

-- --------------------------------------------------------

--
-- Table structure for table `homeinfo`
--

CREATE TABLE IF NOT EXISTS `homeinfo` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `brand` varchar(50) NOT NULL,
  `headline1` varchar(100) NOT NULL,
  `lead1` varchar(500) NOT NULL,
  `button1` varchar(30) NOT NULL,
  `href1` varchar(50) NOT NULL DEFAULT '#',
  `img1` varchar(50) NOT NULL,
  `headline2` varchar(100) NOT NULL,
  `lead2` varchar(500) NOT NULL,
  `button2` varchar(30) NOT NULL,
  `href2` varchar(50) NOT NULL DEFAULT '#',
  `img2` varchar(50) NOT NULL,
  `headline3` varchar(100) NOT NULL,
  `lead3` varchar(500) NOT NULL,
  `button3` varchar(30) NOT NULL,
  `href3` varchar(50) NOT NULL DEFAULT '#',
  `img3` varchar(50) NOT NULL,
  `featureHead1` varchar(50) NOT NULL,
  `featureFoot1` varchar(50) NOT NULL,
  `featureLead1` varchar(500) NOT NULL,
  `featureImg1` varchar(50) NOT NULL,
  `featureHead2` varchar(50) NOT NULL,
  `featureFoot2` varchar(50) NOT NULL,
  `featureLead2` varchar(500) NOT NULL,
  `featureImg2` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `homeinfo`
--

INSERT INTO `homeinfo` (`ID`, `brand`, `headline1`, `lead1`, `button1`, `href1`, `img1`, `headline2`, `lead2`, `button2`, `href2`, `img2`, `headline3`, `lead3`, `button3`, `href3`, `img3`, `featureHead1`, `featureFoot1`, `featureLead1`, `featureImg1`, `featureHead2`, `featureFoot2`, `featureLead2`, `featureImg2`) VALUES
(1, 'Store Name', 'Example headline.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Sign up today', '#', '', 'Another example headline.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Learn more', '#', '', 'One more for good measure.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Browse gallery', '#', '', '', '', '', '', '', '', '', ''),
(2, 'HB Store', 'Buy something special.', 'HB has an eclectic collection of gifts, many of which are hand made.  What''s more special than hand crafted gifts made with love?  Possibly nothing.', 'Take a peek', '#', 'slide-01.jpg', 'Don''t see what you want?', 'Here at HB, we believe in the individual.  If you see something you want, but would like it more specialized - send us a message, we can work with you to customize.', 'Send request', '#', 'slide-02.jpg', 'New items.', 'WE GOT''S A NEW SHIPMENT OF STUFF. ', 'Take a look?', '#', 'slide-03.jpg', 'First featurette headling. ', 'It''ll blow your mind.', 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'browser-icon-chrome.png', 'Oh yeah, it''s that good. ', 'See for yourself.', 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'browser-icon-firefox.png');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`ID`, `name`, `link`) VALUES
(1, 'products', 'products.php'),
(2, 'home', 'index.php'),
(5, 'about', 'about.php');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `productName` varchar(100) NOT NULL,
  `price` decimal(10,2) unsigned NOT NULL,
  `stockCount` int(10) unsigned NOT NULL,
  `shipping` decimal(10,2) unsigned NOT NULL,
  `imgPath1` varchar(110) DEFAULT NULL,
  `imgPath2` varchar(110) DEFAULT NULL,
  `imgPath3` varchar(110) DEFAULT NULL,
  `imgThumb` varchar(110) DEFAULT NULL,
  `description` varchar(2000) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `dimension` varchar(20) NOT NULL,
  `numOfViews` int(20) NOT NULL DEFAULT '0',
  `monthAdded` int(2) NOT NULL,
  `yearAdded` int(4) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `productName` (`productName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `productName`, `price`, `stockCount`, `shipping`, `imgPath1`, `imgPath2`, `imgPath3`, `imgThumb`, `description`, `weight`, `dimension`, `numOfViews`, `monthAdded`, `yearAdded`) VALUES
(1, 'Plush Minecraft Cube', '8.00', 10, '3.00', 'mineCube1.jpg', 'mineCube2.jpg', NULL, 'mineCube.jpg', 'A fluffy plush toy for any Minecraft enthusiast.  Soft and safe for the young Minecraft lover.  Composed of printed 6 Ounce Cotton. ', 'Very Light', '~ 3 in x 3 in', 0, 3, 2013),
(2, 'Plush BMO - Adventure Time', '30.00', 4, '5.00', 'bmo1.img', 'bmo2.img', 'bmo3.img', 'bmo.img', 'A love-able, real sized replica of BMO from Adventure Time.  She sits very nicely and is astoundingly well behaved.  Modifications and controller accessories can be added on commission basis, just email your request. ', 'Light', '~ 10 in * 6 in', 0, 3, 2013);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
