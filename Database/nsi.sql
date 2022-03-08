-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2021 at 04:23 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Sports Admin', 'admin@nsm.com', 'nsm2020');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `utype` varchar(100) DEFAULT NULL,
  `pic` text DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip` varchar(100) DEFAULT NULL,
  `datejoined` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `pstatus` varchar(100) DEFAULT NULL,
  `startdate` text DEFAULT NULL,
  `expiredate` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `password`, `utype`, `pic`, `phone`, `address`, `country`, `state`, `zip`, `datejoined`, `status`, `pstatus`, `startdate`, `expiredate`) VALUES
(5, 'Frederick Ennin', 'kpin463@gmail.com', '7b7f50a6836e9aa947492fbb19ee53bd', 'Coach', '{}-1610455252.JPG', '+233556676471', 'Dome CFC', NULL, NULL, NULL, '12th January, 2021', 'active', 'paid', NULL, '21-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `sender` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `dateadded` varchar(100) DEFAULT NULL,
  `timeadded` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `pic` text DEFAULT NULL,
  `ref` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `pic`, `ref`) VALUES
(33, 'lo.png', 'NSM82237199'),
(34, 'foot.png', 'NSM82237199'),
(35, 'mme.png', 'NSM82237199'),
(36, 'messi3.png', 'NSM82237199'),
(37, 'messi.png', 'NSM82237199'),
(38, 'l2.png', 'NSM82237199'),
(39, 'lo.png', 'NSM46760675'),
(40, 'foot.png', 'NSM46760675'),
(41, 'mme.png', 'NSM46760675'),
(42, 'messi3.png', 'NSM46760675'),
(43, 'messi.png', 'NSM46760675'),
(44, 'l2.png', 'NSM46760675'),
(45, 'lo.png', 'NSM92374000'),
(46, 'foot.png', 'NSM92374000'),
(47, 'mme.png', 'NSM92374000'),
(48, 'messi3.png', 'NSM92374000'),
(49, 'messi.png', 'NSM92374000'),
(50, 'l2.png', 'NSM92374000'),
(51, 'lo.png', 'NSM65119357'),
(52, 'foot.png', 'NSM65119357'),
(53, 'mme.png', 'NSM65119357'),
(54, 'messi3.png', 'NSM65119357'),
(55, 'messi.png', 'NSM65119357'),
(56, 'l2.png', 'NSM65119357'),
(57, 'lo.png', 'NSM20804174'),
(58, 'foot.png', 'NSM20804174'),
(59, 'mme.png', 'NSM20804174'),
(60, 'messi3.png', 'NSM20804174'),
(61, 'messi.png', 'NSM20804174'),
(62, 'l2.png', 'NSM20804174');

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `id` int(11) NOT NULL,
  `pid` varchar(11) NOT NULL,
  `head` text DEFAULT NULL,
  `eyes` text DEFAULT NULL,
  `ears` text DEFAULT NULL,
  `brains` text DEFAULT NULL,
  `lungs` text DEFAULT NULL,
  `pulse` text DEFAULT NULL,
  `bp` text DEFAULT NULL,
  `heart` text DEFAULT NULL,
  `ecg` text DEFAULT NULL,
  `limbs` text DEFAULT NULL,
  `tone` text DEFAULT NULL,
  `joints` text DEFAULT NULL,
  `abdominal` text DEFAULT NULL,
  `custome` text DEFAULT NULL,
  `ref` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`id`, `pid`, `head`, `eyes`, `ears`, `brains`, `lungs`, `pulse`, `bp`, `heart`, `ecg`, `limbs`, `tone`, `joints`, `abdominal`, `custome`, `ref`) VALUES
(1, 'NSM22010198', 'good', 'ereer', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', '', 'nothing', 'NSM22010198'),
(2, 'NSM20020601', 'good', 'ereer', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'nothing', 'NSM20020601'),
(3, 'NSM72439534', 'good', 'ereer', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'nothing', 'NSM72439534'),
(4, 'NSM15445314', 'good', 'ereer', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'nothing', 'NSM15445314'),
(5, 'NSM82237199', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'NSM82237199'),
(6, 'NSM46760675', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'NSM46760675'),
(7, 'NSM92374000', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'NSM92374000'),
(8, 'NSM65119357', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'NSM65119357'),
(9, 'NSM20804174', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'Good condition', 'NSM20804174');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `cid` varchar(100) DEFAULT NULL,
  `mdate` varchar(100) DEFAULT NULL,
  `ref` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) DEFAULT NULL,
  `pic` text DEFAULT NULL,
  `jnumber` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `pob` varchar(100) DEFAULT NULL,
  `pfor` varchar(100) DEFAULT NULL,
  `height` text DEFAULT NULL,
  `weight` text DEFAULT NULL,
  `ecolor` varchar(100) DEFAULT NULL,
  `hcolor` varchar(100) DEFAULT NULL,
  `position` text DEFAULT NULL,
  `etc` varchar(100) DEFAULT NULL,
  `defend` varchar(100) DEFAULT NULL,
  `speed` varchar(100) DEFAULT NULL,
  `possession` varchar(100) DEFAULT NULL,
  `throw` varchar(100) DEFAULT NULL,
  `passess` varchar(100) DEFAULT NULL,
  `dribble` varchar(100) DEFAULT NULL,
  `keeping` varchar(100) DEFAULT NULL,
  `attack` varchar(100) DEFAULT NULL,
  `video` text DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `ref` varchar(100) DEFAULT NULL,
  `dateadded` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `pname`, `pic`, `jnumber`, `nationality`, `dob`, `pob`, `pfor`, `height`, `weight`, `ecolor`, `hcolor`, `position`, `etc`, `defend`, `speed`, `possession`, `throw`, `passess`, `dribble`, `keeping`, `attack`, `video`, `bio`, `ref`, `dateadded`, `status`) VALUES
(24, 'Lionel Messi', 'messi-1610456425.png', '10', 'Ghanaian', '1987-06-24', 'Kumasi', 'Barcelona', '30cm', '75kg', 'brown', 'brown', 'Striker', 'African', '30', '90', '95', '40', '95', '100', '0', '85', 'kidi worship-1610456425.mp4', 'Hello messi', 'NSM20804174', '12th January, 2021', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `cid` varchar(11) DEFAULT NULL,
  `pid` varchar(11) DEFAULT NULL,
  `club` varchar(100) DEFAULT NULL,
  `dof` varchar(100) DEFAULT NULL,
  `cfrom` varchar(100) DEFAULT NULL,
  `cto` varchar(100) DEFAULT NULL,
  `bs` varchar(200) DEFAULT NULL,
  `mpay` varchar(200) DEFAULT NULL,
  `rpay` varchar(200) DEFAULT NULL,
  `other` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `zip` varchar(200) DEFAULT NULL,
  `country` text DEFAULT NULL,
  `signature` text DEFAULT NULL,
  `dateadded` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `cid`, `pid`, `club`, `dof`, `cfrom`, `cto`, `bs`, `mpay`, `rpay`, `other`, `city`, `state`, `zip`, `country`, `signature`, `dateadded`, `status`) VALUES
(5, '5', '24', 'Chealsea FC', '12/12/21', '2021', '2024', '20000', '15000', '2500', '', 'San Francisco, CA', 'Greater Accra', '00233', 'Ghana', 'signature-1610457817.png', '12th January, 2021', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
