-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2020 at 04:42 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_donation_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `msg`) VALUES
(16, 'Rama Ryan', 'tezo@mailinator.com', 'Iste qui atque molli', 'Soluta dolor eaque q'),
(17, 'Edan Maxwell', 'mahuloh@mailinator.com', 'Quam ad qui eum qui ', 'Voluptatum quae nihi');

-- --------------------------------------------------------

--
-- Table structure for table `trans_history`
--

CREATE TABLE `trans_history` (
  `id` int(11) NOT NULL,
  `amount` int(150) NOT NULL,
  `cus_campign` varchar(150) NOT NULL,
  `cus_name` varchar(150) NOT NULL,
  `cus_email` varchar(150) NOT NULL,
  `cus_phone` int(150) NOT NULL,
  `tran_date` datetime(6) NOT NULL,
  `tran_id` varchar(150) NOT NULL,
  `card_type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans_history`
--

INSERT INTO `trans_history` (`id`, `amount`, `cus_campign`, `cus_name`, `cus_email`, `cus_phone`, `tran_date`, `tran_id`, `card_type`) VALUES
(1, 1000, '', '', '', 0, '2020-08-27 09:29:21.000000', 'SSLCZ_TEST_5f47287b22c3a', 'BKASH-BKash'),
(2, 100, '', '', '', 0, '2020-08-27 09:50:13.000000', 'SSLCZ_TEST_5f472d5e72338', 'BKASH-BKash'),
(3, 600, '', '', '', 0, '2020-08-27 10:05:26.000000', 'SSLCZ_TEST_5f4730ef47343', 'BKASH-BKash'),
(4, 3000, '', '', '', 0, '2020-08-27 10:17:03.000000', 'SSLCZ_TEST_5f4733a939ad9', 'DBBLMOBILEB-Dbbl Mobile Banking'),
(5, 105, '', '', '', 0, '2020-08-27 12:25:53.000000', 'SSLCZ_5f4751dac4935', 'BKASH-BKash'),
(6, 101, '', '', '', 0, '2020-08-27 12:31:03.000000', 'SSLCZ_5f475310c4e65', 'BKASH-BKash'),
(7, 106, '', '', '', 0, '2020-08-27 12:58:00.000000', 'SSLCZ_5f4759611b37e', 'BKASH-BKash'),
(8, 108, '', '', '', 0, '2020-08-27 13:59:40.000000', 'SSLCZ_5f4767d56c99a', 'BKASH-BKash'),
(9, 108, '', '', '', 0, '2020-08-27 14:01:40.000000', 'SSLCZ_5f47684d6a474', 'BKASH-BKash'),
(10, 110, '', '', '', 0, '2020-08-27 14:08:35.000000', 'SSLCZ_5f4769ebb758a', 'BKASH-BKash'),
(11, 111, '', '', '', 0, '2020-08-27 14:33:26.000000', 'SSLCZ_5f476fbf09f91', 'DBBLMOBILEB-Dbbl Mobile Banking'),
(12, 112, '', '', '', 0, '2020-08-27 14:41:47.000000', 'SSLCZ_5f4771b4951a6', 'BKASH-BKash'),
(13, 113, '', '', '', 0, '2020-08-28 18:17:26.000000', 'SSLCZ_5f48f5bdcb91c', 'BKASH-BKash'),
(14, 10, '', '', '', 0, '2020-08-28 18:23:31.000000', 'SSLCZ_5f48f72a038d0', 'BKASH-BKash'),
(15, 1000, '', '', '', 0, '2020-08-28 18:53:20.000000', 'SSLCZ_5f48fe269bb96', 'BKASH-BKash'),
(16, 100, '', '', '', 0, '2020-08-28 18:55:08.000000', 'SSLCZ_5f48fe932ee58', 'BKASH-BKash');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `email`, `msg`) VALUES
(1, 'Helen Mcgee', 'widoxev@mailinator.com', 'Esse deleniti sunt '),
(2, 'Pandora Beard', 'jijitu@mailinator.com', 'Minima iure recusand'),
(3, 'Ainsley Dillard', 'rybud@mailinator.com', 'Fugiat eum enim nihi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trans_history`
--
ALTER TABLE `trans_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `trans_history`
--
ALTER TABLE `trans_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
