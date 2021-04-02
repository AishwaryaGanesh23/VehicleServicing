-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 02:15 PM
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
(25, 1, 2, '2021-02-23', 5026, 'no', 'light broke'),
(26, 1, 2, '2021-02-25', 5026, 'no', 'light broke again'),
(29, 3, 3, '2021-02-22', 45, 'no', 'nothing'),
(43, 3, 3, '2021-03-11', 32432, 'no', 'null'),
(44, 3, 3, '2021-03-16', 32432, 'no', 'null'),
(45, 3, 3, '2021-02-27', 6, 'no', 'null'),
(46, 3, 3, '2021-02-26', 3323, 'no', 'null'),
(47, 3, 3, '2021-03-03', 333, 'no', 'null'),
(48, 3, 3, '2021-03-19', 33, 'no', 'null'),
(49, 3, 3, '2021-03-23', 44444, 'no', 'null');

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
(3, 'Rushikesh Arlekar', '8888888888', 'ruarlekar@gmail.com', 'Mapusa'),
(6, 'Khushboo Shetkar', '8007014757', 'khushboo.shetkar43.k', 'Oxel'),
(8, 'Khushboo Shetkar', '8007014757', 'khushboo.shetkar43.k', 'Oxel'),
(9, 'kunal', '1234512345', 'kunal@gmail.com', 'vasco'),
(10, 'sanchai', '1234565432', 'sanchai@gmail.com', 'Parra'),
(11, 'Rushikesh Arlekar', '7887330486', 'ruarlekar1@gmail.com', 'H.no 78/127, Verla Freitas Vado, Mapusa, Bardez Goa'),
(12, 'Rushikesh Arlekar', '7887330486', 'ruarlekar11@gmail.co', 'H.no 78/127, Verla Freitas Vado, Mapusa, Bardez Goa'),
(13, 'Rushikesh Arlekar', '7887330486', 'ruarlekar111@gmail.c', 'H.no 78/127, Verla Freitas Vado, Mapusa, Bardez Goa'),
(14, 'lenin', '9999999999', 'lenin@gmail.com', 'Margao');

-- --------------------------------------------------------

--
-- Table structure for table `opted_services`
--

CREATE TABLE `opted_services` (
  `os_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opted_services`
--

INSERT INTO `opted_services` (`os_id`, `appointment_id`, `service_id`) VALUES
(1, 2, 2),
(2, 13, 2),
(3, 13, 1),
(4, 13, 1),
(5, 13, 3),
(6, 13, 1),
(7, 13, 3),
(8, 13, 1),
(9, 13, 3),
(10, 13, 1),
(11, 13, 3),
(12, 13, 1),
(13, 13, 3),
(14, 13, 1),
(15, 13, 3),
(16, 13, 1),
(17, 13, 3),
(18, 13, 2),
(19, 13, 1),
(20, 1, 2),
(21, 1, 2),
(22, 1, 3),
(23, 13, 1),
(24, 13, 1),
(25, 13, 3),
(26, 13, 2),
(27, 13, 2),
(28, 13, 1),
(29, 13, 2),
(30, 13, 1),
(31, 13, 3),
(32, 13, 2),
(33, 13, 1),
(34, 13, 1),
(35, 13, 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `password`, `type`) VALUES
(1, 'ruarlekar@gmail.com', '12345', 'employee'),
(6, 'khushboo.shetkar43.ks@gmail.com', '123456', 'customer'),
(7, 'kunal@gmail.com', 'qwertyui', 'customer'),
(8, 'sanchai@gmail.com', '123456', 'customer'),
(9, 'ruarlekar1@gmail.com', '123455', 'customer'),
(10, 'ruarlekar11@gmail.com', '5555555', 'customer'),
(11, 'ruarlekar111@gmail.com', 'jvhvkhvh', 'customer'),
(12, 'lenin@gmail.com', '1234567', 'customer');

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
(3, 'Hero Passion Pro', 'GA/03/AK/7994', 3),
(34, 'maesto', 'GA/03/AA/2103', 14);

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
  ADD PRIMARY KEY (`os_id`),
  ADD KEY `appointment_fk` (`appointment_id`),
  ADD KEY `service_fk` (`service_id`);

--
-- Indexes for table `services_offered`
--
ALTER TABLE `services_offered`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

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
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `opted_services`
--
ALTER TABLE `opted_services`
  MODIFY `os_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `services_offered`
--
ALTER TABLE `services_offered`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
