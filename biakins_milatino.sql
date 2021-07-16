-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 06:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biakins_milatino`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirmorder`
--

CREATE TABLE `confirmorder` (
  `id` int(255) NOT NULL,
  `customeremail` varchar(255) NOT NULL,
  `productid` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productprice` varchar(255) NOT NULL,
  `productquantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirmorder`
--

INSERT INTO `confirmorder` (`id`, `customeremail`, `productid`, `productname`, `productprice`, `productquantity`) VALUES
(5, 'nidhisept25@gmail.com', '20002', 'White Cake', '230', '1'),
(6, 'nidhi1@gmail.com', '20001', 'Birthday Cake', '450', '10');

-- --------------------------------------------------------

--
-- Table structure for table `customercontact`
--

CREATE TABLE `customercontact` (
  `id` int(255) NOT NULL,
  `customername` varchar(255) NOT NULL,
  `customeremail` varchar(255) NOT NULL,
  `querysubject` varchar(255) NOT NULL,
  `customerquery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customercontact`
--

INSERT INTO `customercontact` (`id`, `customername`, `customeremail`, `querysubject`, `customerquery`) VALUES
(2, 'Nidhi', 'n@gmail.com', 'Order Inquiry', 'I have not received my order yet'),
(3, 'Nidhi', 'n@gmail.com', 'Order Inquiry', 'I have not received my order yet');

-- --------------------------------------------------------

--
-- Table structure for table `generalcontact`
--

CREATE TABLE `generalcontact` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `usersubject` varchar(255) NOT NULL,
  `usermessage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generalcontact`
--

INSERT INTO `generalcontact` (`id`, `username`, `useremail`, `usersubject`, `usermessage`) VALUES
(1, 'Nidhi Singh', 'nidhi25901@gmail.com', 'Cake Delivery Inquiry ', 'Do you provide service at sunday?'),
(2, 'NIDHI SINGH', 'nidhi2590@gmail.com', 'ee', 'ee'),
(3, 'Nidhi Singh', 'nidhi25901@gmail.com', 'Cake Inquiry', 'Is the service provided on Sunday ?'),
(4, 'NIDHI SINGH', 'nidhi25901@gmail.com', '1', '1'),
(5, 'NIDHI SINGH', 'nidhi25901@gmail.com', 'Timing Inquiry', 'Do you provide service on sunday ?'),
(7, 'Rishika', 'rishika@gmail.com', 'Timing inquiry', 'Do you provide service on sunday ?'),
(8, 'Nidhi Singh', 'nidhi25901@gmail.com', 'Inquiry', 'Do you provide service on Sunday ?');

-- --------------------------------------------------------

--
-- Table structure for table `orderlists`
--

CREATE TABLE `orderlists` (
  `id` int(255) NOT NULL,
  `customeremail` varchar(255) NOT NULL,
  `productid` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productprice` varchar(255) NOT NULL,
  `productquantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `usermobile` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `useraddress1` varchar(255) NOT NULL,
  `useraddress2` varchar(255) NOT NULL,
  `userpassword` varchar(255) NOT NULL,
  `usercpasword` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `usermobile`, `useremail`, `useraddress1`, `useraddress2`, `userpassword`, `usercpasword`, `pass`) VALUES
(2, 'aniket', '920458723', 'nidhisept25@gmail.com', 'QR. NO.-EML/4, MAIN ROAD (NEAR PETROL PUMP)', 'Jharkhand', '$2y$10$88gY2RD9zJJ1NNMe/JD3vOZKN730htqidwf8qnmnu.WjYri9Dxcke', '$2y$10$a61qbOlrsWbo89WxMmeby.z4FLkj8JqMEt0.GK8sKRxbp..FbAYyC', ''),
(3, 'NIDHI', '6200156713', 'nidhi1@gmail.com', 'MUSABANI, JHARKHAND', 'JHARKHAND', '$2y$10$ajx34cOOSHlNIJmQjqG1gODlVMRCeWo23VbPyM3bOjVrcZGbHFaXG', '$2y$10$Jfqux/edkgD.BGI.VO9HfeHtUOQ25rCQrtXh9Z7wZUUbkPBKFtoza', ''),
(5, 'Nidhi', '6200156719', 'n@gmail.com', 'House No. EML/9, Ghatsila', 'Jharkhand', '$2y$10$lKD/MWOIOFNGfaQA2vDkt.JqrZRGaM0OdzsgtE0rRv7qBZqImR0cO', '$2y$10$ndbTivkB/S58sKS9KGmSVOo2x2nI.x2NcUu0jV3cy98caeqVqn8ce', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirmorder`
--
ALTER TABLE `confirmorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customercontact`
--
ALTER TABLE `customercontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalcontact`
--
ALTER TABLE `generalcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderlists`
--
ALTER TABLE `orderlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirmorder`
--
ALTER TABLE `confirmorder`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customercontact`
--
ALTER TABLE `customercontact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `generalcontact`
--
ALTER TABLE `generalcontact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orderlists`
--
ALTER TABLE `orderlists`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
