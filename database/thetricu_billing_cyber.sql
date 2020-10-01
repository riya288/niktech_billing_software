-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2020 at 07:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thetricu_billing_cyber`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt_created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `dt_created`) VALUES
(1, 'admin', 'e6e061838856bf47e1de730719fb2609', '2019-04-17 15:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `bill_to` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `state_code` varchar(25) NOT NULL,
  `gst_no` varchar(25) NOT NULL,
  `book_no` varchar(25) NOT NULL,
  `invoice_date` date NOT NULL,
  `p_o_no` varchar(25) NOT NULL,
  `description` mediumtext NOT NULL,
  `qty` varchar(25) NOT NULL,
  `rate` varchar(25) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `tax` varchar(1000) NOT NULL,
  `gst` varchar(25) NOT NULL,
  `total` varchar(255) NOT NULL,
  `curency` varchar(255) NOT NULL,
  `rs_word` varchar(255) NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `bill_to`, `company`, `address`, `state_code`, `gst_no`, `book_no`, `invoice_date`, `p_o_no`, `description`, `qty`, `rate`, `amount`, `tax`, `gst`, `total`, `curency`, `rs_word`, `dt_created`, `dt_updated`) VALUES
(46, 'riyapate', 'nik tech solution', 'B-301, Samruddhi Complex, Near Geeta Khaman HouseBeside Makarpura depo', 'Central', '24BSPPP2356E1ZM', '103', '0000-00-00', '123456', 'website\napplication\n\n\n', '3\n2\n6\n5\n', '5999\n9999\n5465\n5465\n', '17997\n19998\n32790\n27325\n', 'GST', '17659.8', '115769.8', 'UK', 'One Lakhs Fifteen Thousand Seven Hundred and Sixty Nine ', '2020-10-01 06:10:10', '2020-10-01 03:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `curency`
--

CREATE TABLE `curency` (
  `id` int(11) NOT NULL,
  `cname` varchar(1000) NOT NULL,
  `symbol` varchar(10) NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `curency`
--

INSERT INTO `curency` (`id`, `cname`, `symbol`, `dt_created`, `dt_updated`) VALUES
(7, 'India', '₹', '2020-10-01 06:07:28', '2020-10-01 12:37:28'),
(8, 'UK', '$', '2020-10-01 06:07:40', '2020-10-01 12:37:40'),
(9, 'xyz', '€', '2020-10-01 08:43:16', '2020-10-01 15:13:16');

-- --------------------------------------------------------

--
-- Table structure for table `gst`
--

CREATE TABLE `gst` (
  `id` int(11) NOT NULL,
  `tax` varchar(1000) NOT NULL,
  `cgst` varchar(255) NOT NULL,
  `sgst` varchar(255) NOT NULL,
  `total_gst` varchar(255) NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gst`
--

INSERT INTO `gst` (`id`, `tax`, `cgst`, `sgst`, `total_gst`, `dt_created`, `dt_updated`) VALUES
(12, 'GST', '9', '9', '18', '2020-10-01 06:06:59', '2020-10-01 12:36:59'),
(13, 'non gst', '0', '0', '0', '2020-10-01 06:07:08', '2020-10-01 12:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `term_condition`
--

CREATE TABLE `term_condition` (
  `id` int(10) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `term_condition`
--

INSERT INTO `term_condition` (`id`, `name`, `dt_created`, `dt_updated`) VALUES
(2, '<p>1) Nik tech solutio</p><p>2) Nik tech solution</p><p>3) Nik tech solution</p>', '2020-10-01 06:08:41', '2020-10-01 12:38:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curency`
--
ALTER TABLE `curency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gst`
--
ALTER TABLE `gst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term_condition`
--
ALTER TABLE `term_condition`
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
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `curency`
--
ALTER TABLE `curency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gst`
--
ALTER TABLE `gst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `term_condition`
--
ALTER TABLE `term_condition`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
