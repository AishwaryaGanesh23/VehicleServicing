-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 11:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servicecenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `date_booking` date NOT NULL,
  `kilometers_run` int(11) NOT NULL,
  `pick_drop_opted` varchar(5) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `customer_id`, `vehicle_id`, `date_booking`, `kilometers_run`, `pick_drop_opted`, `description`) VALUES
(1, 1, 2, '2021-02-24', 2000, 'no', 'krkrkr noise pls fix'),
(2, 2, 1, '2021-02-24', 5000, 'no', 'light'),
(3, 2, 1, '2021-02-20', 5010, 'no', 'brake loose'),
(13, 3, 3, '2021-02-25', 177, 'no', ''),
(17, 3, 3, '2021-02-25', 20, 'no', ''),
(18, 3, 3, '2021-02-25', 20, 'no', ''),
(19, 3, 3, '2021-02-25', 20, 'no', ''),
(20, 3, 3, '2021-02-25', 20, 'no', ''),
(21, 3, 3, '2021-02-25', 20, 'no', ''),
(22, 3, 3, '2021-02-25', 20, 'no', ''),
(23, 3, 3, '2021-02-27', 20, 'no', ''),
(24, 3, 3, '2021-03-03', 30, 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_phno` varchar(10) NOT NULL,
  `customer_email` varchar(20) NOT NULL,
  `customer_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_phno`, `customer_email`, `customer_address`) VALUES
(1, 'Aishwarya', '7778789997', 'aishwarya@gmail.com', 'porvorim'),
(2, 'Melrick', '9994562898', 'melrick@gmail.com', 'mapusa'),
(3, 'Rushikesh Arlekar', '8888888888', 'ruarlekar@gmail.com', 'Mapusa');

-- --------------------------------------------------------

--
-- Table structure for table `opted_services`
--

CREATE TABLE `opted_services` (
  `appointment_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opted_services`
--

INSERT INTO `opted_services` (`appointment_id`, `service_id`) VALUES
(2, 2),
(13, 2),
(13, 1),
(13, 1),
(13, 3),
(13, 1),
(13, 3),
(13, 1),
(13, 3),
(13, 1),
(13, 3),
(13, 1),
(13, 3),
(13, 1),
(13, 3),
(13, 1),
(13, 3),
(13, 2),
(13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services_offered`
--

CREATE TABLE `services_offered` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `service_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_offered`
--

INSERT INTO `services_offered` (`service_id`, `service_name`, `service_price`) VALUES
(1, 'Bike Wash', '100'),
(2, 'Air Check', '10'),
(3, 'Nitrogen', '50');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_model` varchar(50) NOT NULL,
  `vehicle_registration_no` varchar(15) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `vehicle_model`, `vehicle_registration_no`, `customer_id`) VALUES
(1, 'vespa', 'GA/03/AE/1783', 2),
(2, 'Activa', 'GA/05/K/7658', 1),
(3, 'Hero Passion Pro', 'GA/03/AK/7994', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `customer_fk` (`customer_id`),
  ADD KEY `vehicle_fk` (`vehicle_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `opted_services`
--
ALTER TABLE `opted_services`
  ADD KEY `appointment_fk` (`appointment_id`),
  ADD KEY `service_fk` (`service_id`);

--
-- Indexes for table `services_offered`
--
ALTER TABLE `services_offered`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD KEY `customervehicle_fk` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services_offered`
--
ALTER TABLE `services_offered`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `customer_fk` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `vehicle_fk` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`);

--
-- Constraints for table `opted_services`
--
ALTER TABLE `opted_services`
  ADD CONSTRAINT `appointment_fk` FOREIGN KEY (`appointment_id`) REFERENCES `appointment` (`appointment_id`),
  ADD CONSTRAINT `service_fk` FOREIGN KEY (`service_id`) REFERENCES `services_offered` (`service_id`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `customervehicle_fk` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
