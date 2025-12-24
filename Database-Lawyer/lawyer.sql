-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2025 at 07:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'admin', 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `app_id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `d_id` int(11) NOT NULL,
  `app_date` varchar(50) NOT NULL,
  `app_time` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`app_id`, `p_id`, `d_id`, `app_date`, `app_time`, `status`) VALUES
(2, 6, 9, '2022-10-05', '11-1', ''),
(3, 8, 9, '2022-10-15', '9-11', ''),
(4, 8, 12, '10/20/2022', '9-11', 'Cancel'),
(5, 9, 9, '10/05/2022', '11-1', ''),
(6, 9, 12, '10/12/2022', '3-5', ''),
(7, 13, 14, '2024-10-31', '3-5', 'Cancel'),
(8, 9, 12, '2024-10-22', '11-1', ''),
(9, 6, 12, '2024-10-17', '11-1', ''),
(10, 19, 12, '10/05/2024', '3-5', ''),
(11, 13, 14, '12/24/2025', '9-11', ''),
(12, 13, 12, '', 'null', ''),
(13, 13, 14, '12/24/2025', 'null', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE `tbl_cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`city_id`, `city_name`) VALUES
(1, 'Karachi'),
(2, 'Lahore'),
(3, 'Sukkur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_email` varchar(50) NOT NULL,
  `p_phone` varchar(50) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `p_username` varchar(50) NOT NULL,
  `p_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`p_id`, `p_name`, `p_email`, `p_phone`, `p_address`, `p_username`, `p_password`) VALUES
(6, 'daniyal', 'daniyal@gmail.com', '03132843239', 'Korangi', 'daniyal123', 'daniyal123'),
(8, 'Hamza', 'hamza@gmail.com', '08974596312', 'Karachi', 'hamza101', 'hamza123'),
(9, 'bilal', 'bilal@gmail.com', '0321564987', 'karachi', 'bilal123', 'bilal123'),
(13, 'saad', 'saad@gmail.com', '123456789', 'karachi', 'user', '1234'),
(14, 'Raza', 'raza@gmail.com', '03123456789', 'karachi', 'raza123', '1234'),
(15, 'ahmed', 'ahmed@gmail.com', '03123455667', 'Islamabad', 'ahmed123', '1234'),
(16, 'dawood', 'dawood@gmail.com', '031236778899', 'karachi', 'dawood123', '1234'),
(17, 'dawood', 'dawood@gmail.com', '031236778899', 'karachi', 'dawood123', '1234'),
(18, 'hamza', 'hamza@gmail.com', '0312567899', 'karachi', 'hamza123', '1234'),
(19, 'fizza', 'FIZZA@GMAIL.COM', '39549345879', 'KARACHI', 'FIZZA', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lawyer`
--

CREATE TABLE `tbl_lawyer` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_email` varchar(50) NOT NULL,
  `d_phone` varchar(50) NOT NULL,
  `d_username` varchar(50) NOT NULL,
  `d_password` varchar(50) NOT NULL,
  `specialization` int(11) NOT NULL,
  `consult_charges` int(11) DEFAULT NULL,
  `d_image` varchar(100) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lawyer`
--

INSERT INTO `tbl_lawyer` (`d_id`, `d_name`, `d_email`, `d_phone`, `d_username`, `d_password`, `specialization`, `consult_charges`, `d_image`, `city_id`) VALUES
(9, 'Azan', 'azan@gmail.com', '1-122172170', 'lawyer', '1234', 4, 2000, 'img/profilepic/doctor-thumb-06 (2).jpg', 1),
(12, 'Hassan', 'hassan@gmail.com', '0854139979', 'hassan101', 'hassan123', 3, 700, 'img/profilepic/doctor-thumb-06 (2).jpg', 2),
(13, 'Talha', 'talha@gmail.com', '1-122172170', 'Talha', 'talha123', 4, 2000, 'img/profilepic/doctor-thumb-06 (2).jpg', 1),
(14, 'M.Saad', 'saad@gmail.com', '03183787485', 'saad', '1234', 3, 10000, 'img/profilepic/doctor-thumb-06 (2).jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_specialization`
--

CREATE TABLE `tbl_specialization` (
  `sp_id` int(11) NOT NULL,
  `specialization_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_specialization`
--

INSERT INTO `tbl_specialization` (`sp_id`, `specialization_name`) VALUES
(1, 'CIVIL'),
(2, 'FAMILY'),
(3, 'BUSINESS'),
(4, 'CRIMINAL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `fk_appointment_doctor` (`d_id`),
  ADD KEY `fk_appointment_patient` (`p_id`);

--
-- Indexes for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_lawyer`
--
ALTER TABLE `tbl_lawyer`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `fk_doctor_specialization` (`specialization`),
  ADD KEY `fk_city` (`city_id`);

--
-- Indexes for table `tbl_specialization`
--
ALTER TABLE `tbl_specialization`
  ADD PRIMARY KEY (`sp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_lawyer`
--
ALTER TABLE `tbl_lawyer`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_specialization`
--
ALTER TABLE `tbl_specialization`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD CONSTRAINT `fk_appointment_doctor` FOREIGN KEY (`d_id`) REFERENCES `tbl_lawyer` (`d_id`),
  ADD CONSTRAINT `fk_appointment_patient` FOREIGN KEY (`p_id`) REFERENCES `tbl_customer` (`p_id`);

--
-- Constraints for table `tbl_lawyer`
--
ALTER TABLE `tbl_lawyer`
  ADD CONSTRAINT `fk_city` FOREIGN KEY (`city_id`) REFERENCES `tbl_cities` (`city_id`),
  ADD CONSTRAINT `fk_doctor_specialization` FOREIGN KEY (`specialization`) REFERENCES `tbl_specialization` (`sp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
