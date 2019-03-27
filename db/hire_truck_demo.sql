-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 04:07 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hire_truck_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_info`
--

CREATE TABLE `account_info` (
  `Ac_id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `balance` float NOT NULL,
  `S_id` int(10) NOT NULL,
  `T_id` int(10) NOT NULL,
  `atm_no` decimal(20,0) NOT NULL,
  `expiry` varchar(10) NOT NULL,
  `cvv` int(10) NOT NULL,
  `extra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_info`
--

INSERT INTO `account_info` (`Ac_id`, `name`, `balance`, `S_id`, `T_id`, `atm_no`, `expiry`, `cvv`, `extra`) VALUES
(4, 'mediator', 40000, 2, 16, '5196439812348898', '9', 231, '0'),
(5, 'akshat', 45000, 2, 0, '5196234467843212', '08/20', 512, '0'),
(6, 'LogImp', 40000, 0, 16, '5196784434567812', '08/21', 735, '0');

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `AD_id` int(10) NOT NULL,
  `S_id` int(10) NOT NULL,
  `source` varchar(50) NOT NULL,
  `no_destination` varchar(200) NOT NULL,
  `luggage` varchar(50) NOT NULL,
  `type_luggage` varchar(50) NOT NULL,
  `weight` decimal(20,0) NOT NULL,
  `price_budget` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `order_date` date NOT NULL,
  `vehicle_type` varchar(200) NOT NULL,
  `add_requirement` varchar(200) NOT NULL,
  `ad_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`AD_id`, `S_id`, `source`, `no_destination`, `luggage`, `type_luggage`, `weight`, `price_budget`, `status`, `order_date`, `vehicle_type`, `add_requirement`, `ad_date`) VALUES
(7, 2, 'ahm', '0', 'wer', '2021-03-19', '12', 123, 1, '2021-03-19', '6-Wheel,Close', 'no', '2018-12-10'),
(9, 2, 'ffff', '0', 'wer', '2021-03-19', '12', 123, 0, '2021-03-19', '4-Wheel,Close', '2018-12-10', '2018-12-10'),
(13, 2, '', '', '', '', '0', 0, 0, '0000-00-00', ',', '', '2019-02-21'),
(14, 2, '', '', '', '', '0', 0, 0, '0000-00-00', ',', '', '0000-00-00'),
(16, 2, '', '', '', '', '0', 0, 0, '0000-00-00', ',', '', '2019-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `ad_ref`
--

CREATE TABLE `ad_ref` (
  `Ad_id` int(11) NOT NULL,
  `destiantion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `B_id` int(10) NOT NULL,
  `Ad_id` int(11) NOT NULL,
  `B_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`B_id`, `Ad_id`, `B_status`) VALUES
(1, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bid_ref`
--

CREATE TABLE `bid_ref` (
  `B_id` int(11) NOT NULL,
  `T_id` int(11) NOT NULL,
  `T-org_name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `date` date NOT NULL,
  `Bid_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c_feedback`
--

CREATE TABLE `c_feedback` (
  `f_id` int(10) NOT NULL,
  `F_mail` varchar(50) NOT NULL,
  `F_msg` varchar(200) NOT NULL,
  `F_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deal`
--

CREATE TABLE `deal` (
  `D_id` int(10) NOT NULL,
  `Ad_id` int(11) NOT NULL,
  `S_id` int(11) NOT NULL,
  `T_id` int(11) NOT NULL,
  `B_id` int(11) NOT NULL,
  `conform_date` date NOT NULL,
  `price` int(10) NOT NULL,
  `d_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deal`
--

INSERT INTO `deal` (`D_id`, `Ad_id`, `S_id`, `T_id`, `B_id`, `conform_date`, `price`, `d_status`) VALUES
(1, 7, 2, 16, 1, '2019-02-22', 50000, 1),
(2, 9, 2, 16, 1, '2019-02-21', 4500, 0),
(5, 7, 2, 16, 1, '0000-00-00', 50000, 0),
(6, 7, 2, 16, 1, '0000-00-00', 6786, 0),
(7, 7, 2, 16, 1, '0000-00-00', 50000, 0),
(8, 7, 2, 16, 1, '0000-00-00', 6786, 0),
(9, 7, 2, 16, 1, '0000-00-00', 50000, 0),
(10, 7, 2, 16, 1, '0000-00-00', 6786, 0),
(11, 7, 2, 16, 1, '0000-00-00', 6786, 0),
(12, 7, 2, 16, 1, '0000-00-00', 6786, 0),
(13, 7, 2, 16, 1, '0000-00-00', 5000, 0),
(14, 7, 2, 16, 1, '2019-03-26', 5000, 0),
(15, 7, 2, 16, 1, '2019-03-26', 6786, 0),
(16, 7, 2, 16, 1, '2019-03-26', 6786, 0),
(42, 7, 2, 16, 1, '2019-03-26', 50000, 0),
(43, 7, 2, 16, 1, '2019-03-26', 6786, 0),
(44, 7, 2, 16, 1, '2019-03-26', 50000, 0),
(45, 7, 2, 16, 1, '2019-03-26', 6786, 0),
(46, 7, 2, 16, 1, '2019-03-26', 50000, 0),
(47, 7, 2, 16, 1, '2019-03-26', 6786, 0);

-- --------------------------------------------------------

--
-- Table structure for table `deal_dtails`
--

CREATE TABLE `deal_dtails` (
  `Dd_id` int(10) NOT NULL,
  `Ad_id` int(10) NOT NULL,
  `S_id` int(10) NOT NULL,
  `D_id` int(10) NOT NULL,
  `R_name` varchar(200) NOT NULL DEFAULT '',
  `R_number` tinyint(10) NOT NULL,
  `R_mail` varchar(200) NOT NULL,
  `T_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deal_dtails`
--

INSERT INTO `deal_dtails` (`Dd_id`, `Ad_id`, `S_id`, `D_id`, `R_name`, `R_number`, `R_mail`, `T_id`) VALUES
(3, 7, 2, 2, 'shah', 127, 'receiver@gmail.com', 16);

-- --------------------------------------------------------

--
-- Table structure for table `status_payment`
--

CREATE TABLE `status_payment` (
  `Sp_id` int(10) NOT NULL,
  `D_id` int(10) NOT NULL,
  `S_id` int(10) NOT NULL,
  `T_id` int(10) NOT NULL,
  `Ad_id` int(10) NOT NULL,
  `amount` float NOT NULL,
  `R_response` int(10) NOT NULL,
  `date` date NOT NULL,
  `Ac_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `st_feedback`
--

CREATE TABLE `st_feedback` (
  `U_id` int(10) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `Status_id` int(10) NOT NULL,
  `D_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_s`
--

CREATE TABLE `user_s` (
  `S_id` int(10) NOT NULL,
  `S_fname` varchar(50) NOT NULL,
  `S_lname` varchar(50) NOT NULL,
  `S_mail` varchar(50) NOT NULL,
  `S_mnumber` bigint(30) NOT NULL,
  `S_address` varchar(200) NOT NULL,
  `S_password` varchar(200) NOT NULL,
  `S_security_question` varchar(50) NOT NULL,
  `S_security_answer` varchar(200) NOT NULL,
  `S_status` tinyint(1) NOT NULL DEFAULT '0',
  `S_active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_s`
--

INSERT INTO `user_s` (`S_id`, `S_fname`, `S_lname`, `S_mail`, `S_mnumber`, `S_address`, `S_password`, `S_security_question`, `S_security_answer`, `S_status`, `S_active`) VALUES
(1, 'Parmar', 'Viral', 'parmarviral93@gmail.com', 1, 'Talaja, Bhavanagar', 'd163e820', '', '', 0, 0),
(2, 'Akshat', 'Soni', 'akshatsoni64@gmial.com', 5, 'Ahemedabad', '12345', 'What is your favourite food?', 'Vadapav', 0, 0),
(3, 'viral', 'Parmar', 'ply4game@gmail.com', 2147483647, 'talaja ', '7eb1b2dc', 'What is your first Mobile modal?', 'J7', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_t`
--

CREATE TABLE `user_t` (
  `T_id` int(10) NOT NULL,
  `T_org_name` varchar(50) NOT NULL,
  `T_owner_name` varchar(50) NOT NULL,
  `T_mail` varchar(100) NOT NULL,
  `T_address` varchar(200) NOT NULL,
  `Type_of_vehicle` varchar(100) NOT NULL,
  `T_number` int(20) NOT NULL,
  `T_anumber` int(20) NOT NULL,
  `T_no_vehicle` int(10) NOT NULL,
  `T_service` varchar(200) NOT NULL,
  `T_password` varchar(200) NOT NULL,
  `T_security_question` varchar(50) NOT NULL,
  `T_security_answer` varchar(200) NOT NULL,
  `T_status` tinyint(1) NOT NULL DEFAULT '0',
  `T_active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_t`
--

INSERT INTO `user_t` (`T_id`, `T_org_name`, `T_owner_name`, `T_mail`, `T_address`, `Type_of_vehicle`, `T_number`, `T_anumber`, `T_no_vehicle`, `T_service`, `T_password`, `T_security_question`, `T_security_answer`, `T_status`, `T_active`) VALUES
(16, 'LogImp', 'Prince Shah', 'sp@gmail.com', 'Bhuj', 'Open Truck', 2, 40212101, 1201245, 'Bhavanagar', '74a318d5', '', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_info`
--
ALTER TABLE `account_info`
  ADD PRIMARY KEY (`Ac_id`),
  ADD KEY `T_id` (`T_id`),
  ADD KEY `S_id` (`S_id`);

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`AD_id`),
  ADD KEY `S_id` (`S_id`);

--
-- Indexes for table `ad_ref`
--
ALTER TABLE `ad_ref`
  ADD KEY `Ad_id` (`Ad_id`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`B_id`),
  ADD KEY `Ad_id` (`Ad_id`);

--
-- Indexes for table `bid_ref`
--
ALTER TABLE `bid_ref`
  ADD PRIMARY KEY (`Bid_id`),
  ADD KEY `B_id` (`B_id`),
  ADD KEY `T_id` (`T_id`);

--
-- Indexes for table `c_feedback`
--
ALTER TABLE `c_feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `deal`
--
ALTER TABLE `deal`
  ADD PRIMARY KEY (`D_id`),
  ADD KEY `Ad_id` (`Ad_id`),
  ADD KEY `S_id` (`S_id`),
  ADD KEY `T_id` (`T_id`),
  ADD KEY `B_id` (`B_id`);

--
-- Indexes for table `deal_dtails`
--
ALTER TABLE `deal_dtails`
  ADD PRIMARY KEY (`Dd_id`),
  ADD KEY `Ad_id` (`Ad_id`),
  ADD KEY `S_id` (`S_id`),
  ADD KEY `T_id` (`T_id`),
  ADD KEY `D_id` (`D_id`);

--
-- Indexes for table `status_payment`
--
ALTER TABLE `status_payment`
  ADD PRIMARY KEY (`Sp_id`),
  ADD KEY `Ad_id` (`Ad_id`),
  ADD KEY `D_id` (`D_id`),
  ADD KEY `S_id` (`S_id`),
  ADD KEY `T_id` (`T_id`),
  ADD KEY `Ac_id` (`Ac_id`);

--
-- Indexes for table `user_s`
--
ALTER TABLE `user_s`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `user_t`
--
ALTER TABLE `user_t`
  ADD PRIMARY KEY (`T_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_info`
--
ALTER TABLE `account_info`
  MODIFY `Ac_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `AD_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `B_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bid_ref`
--
ALTER TABLE `bid_ref`
  MODIFY `Bid_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c_feedback`
--
ALTER TABLE `c_feedback`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deal`
--
ALTER TABLE `deal`
  MODIFY `D_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `deal_dtails`
--
ALTER TABLE `deal_dtails`
  MODIFY `Dd_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_payment`
--
ALTER TABLE `status_payment`
  MODIFY `Sp_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_s`
--
ALTER TABLE `user_s`
  MODIFY `S_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_t`
--
ALTER TABLE `user_t`
  MODIFY `T_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ad`
--
ALTER TABLE `ad`
  ADD CONSTRAINT `ad_ibfk_1` FOREIGN KEY (`S_id`) REFERENCES `user_s` (`S_id`);

--
-- Constraints for table `ad_ref`
--
ALTER TABLE `ad_ref`
  ADD CONSTRAINT `ad_ref_ibfk_1` FOREIGN KEY (`Ad_id`) REFERENCES `ad` (`AD_id`);

--
-- Constraints for table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`Ad_id`) REFERENCES `ad` (`AD_id`);

--
-- Constraints for table `bid_ref`
--
ALTER TABLE `bid_ref`
  ADD CONSTRAINT `bid_ref_ibfk_1` FOREIGN KEY (`B_id`) REFERENCES `bid` (`B_id`),
  ADD CONSTRAINT `bid_ref_ibfk_2` FOREIGN KEY (`T_id`) REFERENCES `user_t` (`T_id`),
  ADD CONSTRAINT `bid_ref_ibfk_3` FOREIGN KEY (`B_id`) REFERENCES `bid` (`B_id`);

--
-- Constraints for table `deal`
--
ALTER TABLE `deal`
  ADD CONSTRAINT `deal_ibfk_1` FOREIGN KEY (`Ad_id`) REFERENCES `ad` (`AD_id`),
  ADD CONSTRAINT `deal_ibfk_2` FOREIGN KEY (`B_id`) REFERENCES `bid` (`B_id`),
  ADD CONSTRAINT `deal_ibfk_3` FOREIGN KEY (`S_id`) REFERENCES `user_s` (`S_id`),
  ADD CONSTRAINT `deal_ibfk_4` FOREIGN KEY (`T_id`) REFERENCES `user_t` (`T_id`);

--
-- Constraints for table `deal_dtails`
--
ALTER TABLE `deal_dtails`
  ADD CONSTRAINT `deal_dtails_ibfk_1` FOREIGN KEY (`Ad_id`) REFERENCES `ad` (`AD_id`),
  ADD CONSTRAINT `deal_dtails_ibfk_2` FOREIGN KEY (`S_id`) REFERENCES `user_s` (`S_id`),
  ADD CONSTRAINT `deal_dtails_ibfk_3` FOREIGN KEY (`T_id`) REFERENCES `user_t` (`T_id`),
  ADD CONSTRAINT `deal_dtails_ibfk_4` FOREIGN KEY (`D_id`) REFERENCES `deal` (`D_id`);

--
-- Constraints for table `status_payment`
--
ALTER TABLE `status_payment`
  ADD CONSTRAINT `status_payment_ibfk_1` FOREIGN KEY (`Ad_id`) REFERENCES `ad` (`AD_id`),
  ADD CONSTRAINT `status_payment_ibfk_2` FOREIGN KEY (`D_id`) REFERENCES `deal` (`D_id`),
  ADD CONSTRAINT `status_payment_ibfk_3` FOREIGN KEY (`S_id`) REFERENCES `user_s` (`S_id`),
  ADD CONSTRAINT `status_payment_ibfk_4` FOREIGN KEY (`T_id`) REFERENCES `user_t` (`T_id`),
  ADD CONSTRAINT `status_payment_ibfk_5` FOREIGN KEY (`Ac_id`) REFERENCES `account_info` (`Ac_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
