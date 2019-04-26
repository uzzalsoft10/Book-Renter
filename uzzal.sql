-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 05:41 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uzzal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE IF NOT EXISTS `admin_register` (
`id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `writter` varchar(20) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `category`, `writter`, `image`) VALUES
(7, 'Chitra', 'Novel', 'Rabindranath Tagore', 'chitra.jpg'),
(8, 'Chokher Bali', 'Novel', 'Rabindranath Tagore', 'chokher_bali.JPG'),
(9, 'Gitanjali', 'Poem', 'Rabindranath Tagore', 'gitanjali.jpg'),
(10, 'Kabuliwala', 'Novel', 'Rabindranath Tagore', 'kabliwala.jpg'),
(11, 'Bethar Dan', 'Poem', 'Kazi Nazrul Islam', 'bethar_dan.jpg'),
(12, 'Sorbohara', 'Poem', 'Kazi Nazrul Islam', 'sorbohara.jpg'),
(13, 'Dolon Chapa', 'Poem', 'Kazi Nazrul Islam', 'dolon_chapa.jpg'),
(14, 'Mrittu Khudha', 'Novel', 'Kazi Nazrul Islam', 'mrittu_khuda.JPG'),
(15, 'Dying Earth', 'Science Fiction', 'Jack Vance', 'Dying_earth.jpg'),
(16, 'Earthling', 'Science Fiction', 'Mark Frearing', 'earthling.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(30) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(5, 'Science Fiction'),
(8, 'Poem'),
(10, 'Novel');

-- --------------------------------------------------------

--
-- Table structure for table `customer_register`
--

CREATE TABLE IF NOT EXISTS `customer_register` (
`cid` int(20) NOT NULL,
  `cname` varchar(40) NOT NULL,
  `caddress` varchar(40) NOT NULL,
  `ccity` varchar(40) NOT NULL,
  `cemail` varchar(40) NOT NULL,
  `czipcode` varchar(40) NOT NULL,
  `cphone` varchar(40) NOT NULL,
  `cusername` varchar(40) NOT NULL,
  `cpassword` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `customer_register`
--

INSERT INTO `customer_register` (`cid`, `cname`, `caddress`, `ccity`, `cemail`, `czipcode`, `cphone`, `cusername`, `cpassword`) VALUES
(5, 'Uzzal', 'PSTU', 'Patuakhali', 'uzzal@gmail.com', '34534', '0167453456', 'uzzal', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `uzzal`
--

CREATE TABLE IF NOT EXISTS `uzzal` (
  `id` int(100) NOT NULL,
  `name` varchar(400) NOT NULL,
  `category` varchar(300) NOT NULL,
  `writter` varchar(300) NOT NULL,
  `quantity` varchar(40) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uzzal`
--

INSERT INTO `uzzal` (`id`, `name`, `category`, `writter`, `quantity`, `image`) VALUES
(8, 'Chokher Bali', 'Novel', 'Rabindranath Tagore', '1', 'chokher_bali.JPG'),
(10, 'Kabuliwala', 'Novel', 'Rabindranath Tagore', '1', 'kabliwala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `writter`
--

CREATE TABLE IF NOT EXISTS `writter` (
`id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `writter`
--

INSERT INTO `writter` (`id`, `name`) VALUES
(6, 'Rabindranath Tagore'),
(7, 'Kazi Nazrul Islam'),
(8, 'Jack Vance'),
(9, 'Mark Frearing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_register`
--
ALTER TABLE `customer_register`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `writter`
--
ALTER TABLE `writter`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `customer_register`
--
ALTER TABLE `customer_register`
MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `writter`
--
ALTER TABLE `writter`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
