-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2025 at 02:43 PM
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
-- Database: `irererotrainigsystem`
--
CREATE DATABASE IF NOT EXISTS `irererotrainigsystem` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `irererotrainigsystem`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `Pass`) VALUES
(1, 'admin', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `attandances`
--

CREATE TABLE `attandances` (
  `id` int(11) NOT NULL,
  `child_name` varchar(100) NOT NULL,
  `child_kilo` varchar(100) NOT NULL,
  `child_attance_day` varchar(100) NOT NULL,
  `child_item` varchar(100) NOT NULL,
  `child_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attandances`
--

INSERT INTO `attandances` (`id`, `child_name`, `child_kilo`, `child_attance_day`, `child_item`, `child_status`) VALUES
(7, 'kamari', '12', 'Sep 01, 2023', '1', 'Mumuhondo'),
(8, 'kamari', '12', 'Sep 06, 2023', '1', 'Mumuhondo');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `child_name` varchar(100) NOT NULL,
  `child_kilo` varchar(100) NOT NULL,
  `child_attance_day` varchar(100) NOT NULL,
  `child_item` int(11) NOT NULL,
  `child_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `child_name`, `child_kilo`, `child_attance_day`, `child_item`, `child_status`) VALUES
(1, 'Muhaweniama', '30kg', '12/08/2022', 1, 'mumuhondo'),
(2, 'muhaweniamana', '30kg', 'Sep 16, 2022', 1, 'Mumuhondo');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mather_naame` varchar(100) NOT NULL,
  `idnumber` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `kilo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `name`, `father_name`, `mather_naame`, `idnumber`, `gender`, `status`, `birthdate`, `kilo`) VALUES
(1, 'dkjhgh', 'hkjhkj', 'hkhkjh', 'hjkhkhk', 'hkjhkhkh', 'mmmm', 'hkhkh', ''),
(2, 'dkjhgh', 'hkjhkj', 'hkhkjh', 'hjkhkhk', 'hkjhkhkh', 'mmmm', 'hkhkh', ''),
(3, 'yves', 'fcnb,n', 'sdsad', 'sdfjdb', 'Gore', 'Mumuhondo', 'sda', ''),
(4, 'bkbkbkjb', 'sfbjb', 'mdmm', '12020220202020', 'male', 'yellow', '12/2/2022', '10'),
(5, 'muhaweniamana', 'ngirimana augistine', 'nyirabasare chantal', '19000000000000000', 'Gabo', 'Mumuhondo', '12/02/2015', '30kg');

-- --------------------------------------------------------

--
-- Table structure for table `childrens`
--

CREATE TABLE `childrens` (
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mather_naame` varchar(100) NOT NULL,
  `idnumber` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `kilo` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `childrens`
--

INSERT INTO `childrens` (`name`, `father_name`, `mather_naame`, `idnumber`, `gender`, `status`, `birthdate`, `kilo`, `id`) VALUES
('kamari', 'john', 'muka', '2829293', 'Gabo', 'Mumuhondo', '7/8/2012', '12', 5),
('kalim', 'titi', 'sisi', '3456789', 'Gabo', 'Mumutuku', '12/12/2019', '13', 6);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mudugudu_reg`
--

CREATE TABLE `mudugudu_reg` (
  `id` int(11) NOT NULL,
  `names` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `idnumber` varchar(200) NOT NULL,
  `sector` varchar(200) NOT NULL,
  `village` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mudugudu_reg`
--

INSERT INTO `mudugudu_reg` (`id`, `names`, `email`, `phone`, `password`, `idnumber`, `sector`, `village`, `gender`) VALUES
(1, 'tuzimimana Faustine', 'tuzimana@gmail.com', '0788517392', 'qwerty', '1200098765543', 'kimuhura', 'rweru', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `mudugudu _registration`
--

CREATE TABLE `mudugudu _registration` (
  `id` int(11) NOT NULL,
  `names` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `idnumber` varchar(200) NOT NULL,
  `sector` varchar(200) NOT NULL,
  `village` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mudugudu _registration`
--

INSERT INTO `mudugudu _registration` (`id`, `names`, `email`, `phone`, `password`, `idnumber`, `sector`, `village`, `gender`) VALUES
(6, 'shengero', 'shengeropacifique@gmail.com', '0786560003', 'shengero', '12000151211037', 'mwendo', 'mwendo', 'male'),
(7, 'shengero', 'shengeropacifique@gmail.com', '0786560003', '12345', '12000151211037', 'mwendo', 'muhanga', 'male'),
(8, 'bruce', 'kaji@gmail.com', '0788461293', 'shasha', '12000151211036b', 'mwendo', 'mwendo', 'male'),
(9, 'bruce', 'chancelydivine10@gmail.com', '0788461299', 'shenge', '12000151211036t', 'mwendo', 'mwendo', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `phone`, `password`, `address`) VALUES
(6, '0786560003', 'shengero', 'mwendo');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `item` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`item`, `Quantity`, `date`, `id`) VALUES
('Milk', 80, '01/09/23', 17),
('Milk', 100, '01/09/23', 18),
('Flour', 100, '01/09/23', 19);

-- --------------------------------------------------------

--
-- Table structure for table `stock_out`
--

CREATE TABLE `stock_out` (
  `id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_out`
--

INSERT INTO `stock_out` (`id`, `item`, `Quantity`, `mid`, `date`) VALUES
(16, 'Milk', 45, 6, '01/09/23'),
(17, 'Milk', 80, 6, '01/09/23'),
(18, 'Flour', 60, 6, '01/09/23');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `Username` char(30) DEFAULT NULL,
  `Password` char(30) DEFAULT NULL,
  `Role` char(30) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`Username`, `Password`, `Role`, `id`) VALUES
('admin', 'Test@12345', 'adminstrator', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attandances`
--
ALTER TABLE `attandances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childrens`
--
ALTER TABLE `childrens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mudugudu_reg`
--
ALTER TABLE `mudugudu_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mudugudu _registration`
--
ALTER TABLE `mudugudu _registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_out`
--
ALTER TABLE `stock_out`
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
-- AUTO_INCREMENT for table `attandances`
--
ALTER TABLE `attandances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `childrens`
--
ALTER TABLE `childrens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mudugudu_reg`
--
ALTER TABLE `mudugudu_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mudugudu _registration`
--
ALTER TABLE `mudugudu _registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `stock_out`
--
ALTER TABLE `stock_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Database: `lawyer`
--
CREATE DATABASE IF NOT EXISTS `lawyer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lawyer`;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `administrator_id` varchar(20) NOT NULL,
  `city` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`administrator_id`, `city`, `address`) VALUES
('Admin010101', 'Dhaka', 'Dhanmondi 32, dhaka -1212');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `description` varchar(300) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `lawyer_id` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `date`, `description`, `client_id`, `lawyer_id`, `status`) VALUES
(2, '2019-04-24', 'ok test', 'Client5cbab2a1987da', 'Lawyer5cba0637a2a93', 'Pending'),
(3, '2019-04-22', 'test ok', 'Client5cbab2a1987da', 'Lawyer5cba06796f40b', 'Pending'),
(4, '2019-04-17', 'eygdshjdfcd', 'Client5cbab2a1987da', 'Lawyer5cbb38fddeafa', 'Pending'),
(5, '2019-04-24', 'ok ', 'Client5cbb36c2cfd64', 'Lawyer5cbb38fddeafa', 'Pending'),
(6, '2019-04-17', 'jdncdjkfc', 'Client5cbb36c2cfd64', 'Lawyer5cba0637a2a93', 'Accepted'),
(7, '2022-09-29', 'family law', 'Client633164b0818db', 'Lawyer633035fc85712', 'Pending'),
(8, '2022-09-13', 'violence', 'Client633164b0818db', 'Lawyer633039d83f69a', 'Pending'),
(9, '', '', 'Client633164b0818db', 'Lawyer633035fc85712', 'Rejected'),
(10, '2022-09-21', ';lkjhgfd', 'Client633164b0818db', 'Lawyer63303cb881a32', 'Pending'),
(11, '2023-05-18', 'crirmina ghtktuket', 'Client633164b0818db', 'Lawyer633035fc85712', 'Rejected'),
(12, '2023-05-04', 'hjgghkr', 'Client633075ac96256', 'Lawyer63303cb881a32', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `case`
--

CREATE TABLE `case` (
  `case_id` int(200) NOT NULL,
  `client_id` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `contact` int(15) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `case`
--

INSERT INTO `case` (`case_id`, `client_id`, `fname`, `lname`, `contact`, `description`, `status`) VALUES
(1, 'Client633164b0818db', 'hora', 'happy', 782951511, 'jjjjjj', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` varchar(20) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `full_address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `contact_number`, `full_address`, `city`, `zip_code`, `image`) VALUES
('Client5cb6315a228dd', '01782343423', 'djbhd', 'Dhaka', '111 ', '20190420074817_24774766_1437963912919320_8170347638881.jpg'),
('Client5cbab2a1987da', '01780003423', 'ssdsd', 'Barishal', '1000', '20190420074817_24774766_1437963912919320_8170347638881673647_n.jpg '),
('Client5cbb36c2cfd64', '01782343423', 'dhaka', 'Dhaka', '1234 ', '20190420171202_Entity Relationship Diagram.jpeg '),
('Client6330327e4cd15', '0782951511', 'south', 'Muhanga', 'nyamabuye ', ' '),
('Client633033faa48bf', '0782951500', 'north', 'Musanze', 'muhoza ', ' '),
('Client6330354b8474d', '0782951787', 'north', 'Nyanza', 'jhgfdsa ', ' '),
('Client63303d268c960', '0987654999', 'kjhg', 'Musanze', 'kjhg ', ' '),
('Client63303d6e10c58', '0782951990', 'kjh', 'Nyanza', 'hjii ', '  '),
('Client633075ac96256', '0782951665', 'jhg', 'Ruhango', 'kjhhh ', '  '),
('Client633079c55eb41', '0781212322', 'muhnga', 'Nyanza', 'lkjhgw ', '  '),
('Client63307d5897bb1', '0781212322', 'muhnga', 'Nyanza', 'lkjhgw ', '  '),
('Client63307f62aed29', '9178381791', 'lkjuygf', 'Nyanza', 'lkjhgf ', '  '),
('Client633082c865e90', '9178381791', 'lkjuygf', 'Nyanza', 'lkjhgf ', '  '),
('Client633087a4c13bd', '9178381791', 'lkjuygf', 'Nyanza', 'lkjhgf ', '  '),
('Client63308d3c644ab', '9178381791', 'lkjuygf', 'Nyanza', 'lkjhgf ', '  '),
('Client63309bd2dfcca', '1234543322', 'kigal', 'Nyanza', 'lkjhgw ', '  '),
('Client6330b29e71a54', '9178381791', 'asdfghjmj', 'Muhanga', 'asdfg ', '  '),
('Client633164b0818db', '0782951511', 'south', '', 'nyamabuye ', '  ');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `lawyer_id` varchar(20) NOT NULL,
  `contact_Number` varchar(15) NOT NULL,
  `university_College` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `passing_year` varchar(100) NOT NULL,
  `full_address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `practise_Length` varchar(100) NOT NULL,
  `case_handle` varchar(500) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`lawyer_id`, `contact_Number`, `university_College`, `degree`, `passing_year`, `full_address`, `city`, `zip_code`, `practise_Length`, `case_handle`, `speciality`, `image`) VALUES
('Lawyer633035fc85712', '0782951511', 'ines', 'LLM', '2006', '', 'nyamabuye', '', '16-20 years', 'Criminal matter,Civil matter,Writ Jurisdiction,Company law,Contract law,Commercial matter,', 'Commercial Law', '20220925130532_20220915164832_01-dominique-camm-001a.jpeg'),
('Lawyer633039d83f69a', '6543456789', 'uk', 'LLM', '2004', '', 'kigali', '', '11-15 years', 'Criminal matter,Civil matter,', 'Company Law', '20220925132200_20220915164832_01-dominique-camm-001a.jpeg'),
('Lawyer63303cb881a32', '0782951511', 'kigali', 'LLB', '2002', 'kigalik', 'nyamabuye', 'kjhgf', '6-10 years', 'Civil matter,', 'Labour Law', '20220925133416_20220915164832_01-dominique-camm-001a.jpeg'),
('Lawyer6464ee708dbe5', '0782515525', 'mount kenya', 'LLB', '2004', '\"VN\"', 'wq', 'fd', '6-10 years', 'Company law,Contract law,Family Law,', 'Family Law', '20230517171040_hy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` varchar(20) NOT NULL,
  `first_Name` varchar(100) NOT NULL,
  `last_Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `first_Name`, `last_Name`, `email`, `password`, `status`, `role`) VALUES
('Admin010101', 'Ershad', 'Husam', 'admin@gmail.com', 'admin', 'Active', 'Admin'),
('Client633075ac96256', 'hora', 'nkjhgfd', 'o@gmail.com ', '38461 ', 'Active', 'User'),
('Client633164b0818db', 'hora ', 'happy Norbert', 'happykhayne@gmail.com ', '123456', 'Active', 'User'),
('Lawyer633035fc85712', 'man', 'norbert', 'h@gmail.com ', '77978 ', 'Active', 'Lawyer'),
('Lawyer633039d83f69a', 'hora', 'happy', 'ho@gmail.com ', '88255 ', 'Active', 'Lawyer'),
('Lawyer63303cb881a32', 'asdf', 'asd', 'ki1@gmail.com ', '38785 ', 'Active', 'Lawyer'),
('Lawyer6464ee708dbe5', 'UWIZERA', 'Denyse', 'uwizeradenyse@gmail.com ', '24668 ', 'Active', 'Lawyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`administrator_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `case`
--
ALTER TABLE `case`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`lawyer_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `case`
--
ALTER TABLE `case`
  MODIFY `case_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `ncdsfinal`
--
CREATE DATABASE IF NOT EXISTS `ncdsfinal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ncdsfinal`;
--
-- Database: `ovas_db`
--
CREATE DATABASE IF NOT EXISTS `ovas_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ovas_db`;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_list`
--

CREATE TABLE `appointment_list` (
  `id` int(30) NOT NULL,
  `code` varchar(100) NOT NULL,
  `schedule` date NOT NULL,
  `owner_name` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `category_id` int(30) NOT NULL,
  `breed` text NOT NULL,
  `age` varchar(50) NOT NULL,
  `service_ids` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_list`
--

INSERT INTO `appointment_list` (`id`, `code`, `schedule`, `owner_name`, `contact`, `email`, `address`, `category_id`, `breed`, `age`, `service_ids`, `status`, `date_created`, `date_updated`) VALUES
(13, 'OVAS-2023100004', '2023-10-06', 'Ntigurirwa ', '0782014771', 'ntigurirwashaffy1@gmail.com', 'kiziguro', 7, 'inyarwanda', '12months', '7', 1, '2023-10-06 16:54:00', '2023-10-23 14:16:51'),
(19, 'OVAS-2023100001', '2023-10-23', 'shaffy', '0782014771', 'ntigurirwashaffy1@gmail.com', 'kiziguro/rubona', 7, 'inyarwanda', '1', '21', 1, '2023-10-23 15:07:42', '2023-10-23 15:16:18'),
(20, 'OVAS-2023100002', '2023-10-29', 'mutoni betty', '0784567341', 'mutonibetty1@gmail.com', 'kiziguro/taba', 9, 'inyarwanda', '1', '15', 0, '2023-10-29 11:16:25', NULL),
(21, 'OVAS-2023100003', '2023-10-29', 'ishimwe david', '0788543122', 'ishimwedavid1@gmail.com', 'tumba', 7, 'inzungu', '2', '16', 2, '2023-10-29 15:10:51', '2023-10-29 15:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = Active, 1 = Delete',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `name`, `delete_flag`, `date_created`, `date_updated`) VALUES
(1, 'Dogs', 1, '2022-01-04 10:31:11', NULL),
(2, 'Cats', 1, '2022-01-04 10:31:38', NULL),
(3, 'Hamsters', 1, '2022-01-04 10:32:02', NULL),
(4, 'Rabbits', 1, '2022-01-04 10:32:13', NULL),
(5, 'Birds', 1, '2022-01-04 10:32:47', NULL),
(6, 'test', 1, '2022-01-04 10:33:02', NULL),
(7, 'inka(cow)', 0, '2023-10-01 16:46:38', NULL),
(8, 'intama(sheep)', 0, '2023-10-01 16:46:56', NULL),
(9, 'ihene(goat)', 0, '2023-10-01 16:47:04', NULL),
(10, 'chicken', 1, '2023-10-06 16:59:57', NULL),
(11, 'ingurube(pig)', 0, '2023-10-23 14:18:20', NULL),
(12, 'inkoko(hen)', 0, '2023-10-23 14:18:46', NULL),
(13, 'imbwa(dog)', 0, '2023-10-23 14:19:03', NULL),
(14, 'ipusi(cat)', 0, '2023-10-23 14:19:32', NULL),
(15, 'urukwavu(rabbit)', 0, '2023-10-23 14:21:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message_list`
--

CREATE TABLE `message_list` (
  `id` int(30) NOT NULL,
  `fullname` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message_list`
--

INSERT INTO `message_list` (`id`, `fullname`, `contact`, `email`, `message`, `status`, `date_created`) VALUES
(5, 'ntigurirwashaffy', '0788828384', 'ntigurirwashaffy1@gmail.com', 'mwarakoze cyane', 1, '2023-10-23 15:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_list`
--

CREATE TABLE `service_list` (
  `id` int(30) NOT NULL,
  `category_ids` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `fee` float NOT NULL DEFAULT 0,
  `delete_flag` tinyint(4) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_list`
--

INSERT INTO `service_list` (`id`, `category_ids`, `name`, `description`, `fee`, `delete_flag`, `date_created`, `date_updated`) VALUES
(1, '2,1', 'Immunization', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis quam tellus. Nam elit lectus, lobortis vitae eros a, condimentum pretium eros. Sed mauris nulla, aliquam vel hendrerit ac, aliquam quis mi. In non purus ac metus luctus aliquam. Praesent porta turpis eget molestie pellentesque. In fringilla est vitae sem imperdiet eleifend. Praesent lacinia arcu elit, quis venenatis nisl sollicitudin nec. Pellentesque tempor est nec porta mattis. In hendrerit eleifend felis, quis fermentum dolor eleifend quis. Maecenas dolor magna, luctus id blandit sit amet, bibendum id lacus.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Nunc pellentesque nibh vel sapien lobortis tempus. In pretium nulla felis, cursus bibendum augue pretium at. Integer eget dignissim libero. Praesent laoreet, purus eu vehicula hendrerit, felis leo lobortis mi, at aliquet nisl est a dolor. Duis eleifend pharetra augue ut finibus. Curabitur id lorem lobortis, tempus mauris quis, fermentum nunc. Vestibulum eu euismod diam, fermentum vulputate elit. Aenean eu odio tincidunt, semper nulla eget, pretium eros. In ullamcorper fringilla faucibus. Curabitur aliquam leo ex, in cursus arcu commodo eu. Vivamus in nulla id massa efficitur rhoncus. Ut sagittis arcu ipsum, at posuere eros pretium nec. Nam neque mauris, molestie eu euismod a, vulputate at diam. Nullam mattis purus tortor, rutrum fringilla lorem eleifend nec. Vestibulum vitae purus sit amet leo imperdiet tristique at ac orci.</p>', 1500, 1, '2022-01-04 10:59:49', '2023-10-23 14:23:58'),
(2, '2,1', 'Vaccination', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Curabitur facilisis consequat lacinia. Curabitur luctus nunc ac libero mattis, id bibendum mauris pretium. Donec vulputate ac velit ac laoreet. Aliquam cursus feugiat turpis, id posuere nisl ornare sit amet. Duis pharetra quam vel risus semper vestibulum. Aliquam lacinia sit amet dolor a viverra. Ut sit amet turpis laoreet, euismod dui at, accumsan lacus. Fusce est nunc, consectetur ac neque at, commodo faucibus ipsum. Nullam rutrum dapibus pulvinar. Mauris eget magna id nisl consequat mollis vitae id purus. Cras eros tellus, fringilla et dictum quis, vulputate id erat. Aliquam erat volutpat.</span><br></p>', 1700, 1, '2022-01-04 11:14:24', '2023-10-23 14:24:25'),
(3, '5,2,1,3,4', 'Check-up', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Ut fringilla velit quis condimentum mattis. Sed egestas ligula imperdiet orci elementum, eu aliquet sem cursus. Vestibulum maximus ex ut mi lobortis ultricies. Ut id congue ipsum. Donec porttitor a nunc a egestas. Ut non urna eget erat vestibulum eleifend. Phasellus blandit dui non neque cursus, id viverra turpis aliquet. Sed tempor nisl a ipsum porta, eget iaculis sem venenatis. Sed ac dolor sagittis, interdum leo ut, sagittis risus. Etiam suscipit, orci eget hendrerit malesuada, nisl mauris semper dolor, non accumsan nisl nibh ac augue. Integer vel lectus quis quam suscipit pharetra quis in lectus. Nulla bibendum ex sed accumsan laoreet. Cras et elit vitae sapien faucibus luctus. Morbi leo nibh, viverra vitae elit ac, luctus elementum urna.</span><br></p>', 500, 1, '2022-01-04 11:15:09', '2023-10-23 14:22:42'),
(4, '1', 'Anti-Rabies', '<p><span style=\"color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Ut fringilla velit quis condimentum mattis. Sed egestas ligula imperdiet orci elementum, eu aliquet sem cursus. Vestibulum maximus ex ut mi lobortis ultricies. Ut id congue ipsum. Donec porttitor a nunc a egestas. Ut non urna eget erat vestibulum eleifend. Phasellus blandit dui non neque cursus, id viverra turpis aliquet. Sed tempor nisl a ipsum porta, eget iaculis sem venenatis. Sed ac dolor sagittis, interdum leo ut, sagittis risus. Etiam suscipit, orci eget hendrerit malesuada, nisl mauris semper dolor, non accumsan nisl nibh ac augue. Integer vel lectus quis quam suscipit pharetra quis in lectus. Nulla bibendum ex sed accumsan laoreet. Cras et elit vitae sapien faucibus luctus. Morbi leo nibh, viverra vitae elit ac, luctus elementum urna.</span><br></p>', 500, 1, '2022-01-04 11:16:24', '2023-10-23 14:22:02'),
(5, '2', 'Anti-Rabies', '<p>Ut fringilla velit quis condimentum mattis. Sed egestas ligula imperdiet orci elementum, eu aliquet sem cursus. Vestibulum maximus ex ut mi lobortis ultricies. Ut id congue ipsum. Donec porttitor a nunc a egestas. Ut non urna eget erat vestibulum eleifend. Phasellus blandit dui non neque cursus, id viverra turpis aliquet. Sed tempor nisl a ipsum porta, eget iaculis sem venenatis. Sed ac dolor sagittis, interdum leo ut, sagittis risus. Etiam suscipit, orci eget hendrerit malesuada, nisl mauris semper dolor, non accumsan nisl nibh ac augue. Integer vel lectus quis quam suscipit pharetra quis in lectus. Nulla bibendum ex sed accumsan laoreet. Cras et elit vitae sapien faucibus luctus. Morbi leo nibh, viverra vitae elit ac, luctus elementum urna.<br></p>', 250, 1, '2022-01-04 11:16:38', '2023-10-23 14:22:33'),
(6, '4', 'deleted', '<p>test</p>', 123, 1, '2022-01-04 11:17:34', '2022-01-04 11:17:46'),
(7, '7', 'guca amahembe', '<p>duca amahembe inka ntoya kugiciro cyiza kumafaranga 5000.</p>', 5000, 0, '2023-10-01 16:48:11', '2023-10-23 14:23:47'),
(8, '8,4', 'kugabanya ubwoya', '<p>kugabanya ubwoya kuntama</p>', 1500, 1, '2023-10-01 16:49:59', '2023-10-23 14:24:07'),
(9, '10', 'vacinnation', '<p>vaccination is better for cheicken</p>', 2000, 1, '2023-10-06 17:03:20', '2023-10-23 14:22:24'),
(10, '10', 'normal treatment', '<p>hhhhh</p>', 500, 1, '2023-10-06 17:04:09', '2023-10-23 14:24:17'),
(11, '9,8', 'guca amahembe', '<p>duca amahembe ihene n\'intama kugiciro cyiza kumafaranga 3000.</p>', 3000, 0, '2023-10-23 14:25:36', NULL),
(12, '7', 'kuvura bisanzwe(normal treatment)', '<p class=\"MsoNormal\" style=\"line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Segoe UI&quot;, sans-serif;\">tuvura inka kugiciro cyiza kumafaranga 5000,ashobora kongerwa bitewe\r\nnuko irwaye nibimenyetso igaragaza.<o:p></o:p></span></p><p>\r\n\r\n</p><p class=\"MsoNormal\" style=\"line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 12pt; font-family: &quot;Segoe UI&quot;, sans-serif;\">we treat your cows at aprice of 5000, the price can be boosted acording\r\nto symptoms and sickness.<o:p></o:p></span></p>', 5000, 0, '2023-10-23 14:27:58', NULL),
(13, '9,11,8', 'kuvurabisanzwe(normal treatment)', '<p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: \"Segoe UI\", sans-serif;\">tuvura ihene ,inguruben\'intama kugiciro cyiza kumafaranga\r\n3000.ashora kongerwa bitewe nindwara itungo ryawe rifite.<o:p></o:p></span></p><p>\r\n\r\n</p><p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: \"Segoe UI\", sans-serif;\">we treat your goats,pigs and sheeps at agood price at 3000\r\nrwf.which can be boosted acording to disease of your domestic animal<o:p></o:p></span></p>', 3000, 0, '2023-10-23 14:29:03', '2023-10-23 14:30:46'),
(14, '12,14,15', 'kuvurabisanzwe(normal treatment)', '<p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\">tuvura inkoko,ipusi n\'inkwavu kugiciro cyiza kumafaranga\r\n1000.ashobora kongerwa tugendeye kundwara itungo ryawe rifite.<o:p></o:p></span></p><p>\r\n\r\n</p><p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\">we treat your chicken,cat and rabbit at agood price of\r\n1000rwf.which can be boosted acording to disease of your domestic animal.<o:p></o:p></span></p>', 1000, 0, '2023-10-23 14:33:05', NULL),
(15, '9,11,8', 'gukingira(vaccination)', '<p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\">dukingira ihene,inguruben\'intama kugiciro cyiza kumafaranga\r\n3000.<o:p></o:p></span></p><p>\r\n\r\n<span style=\"font-size: 11pt; line-height: 107%; font-family: &quot;Segoe UI&quot;, sans-serif;\">we\r\nvaccinate your goats,pigs and sheeps at agood price at 3000rwf</span><br></p>', 3000, 0, '2023-10-23 14:34:58', NULL),
(16, '7', 'gukingira(vaccination)', '<p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\">dukingira inka kugiciro cyiza kumafaranga 6000.<o:p></o:p></span></p><p>\r\n\r\n<span style=\"font-size: 11pt; line-height: 107%; font-family: &quot;Segoe UI&quot;, sans-serif;\">we\r\nvaccinate your cows at agood price at 6000rwf.</span><br></p>', 6000, 0, '2023-10-23 14:36:14', NULL),
(17, '13,12,14,15', 'gukingira(vaccination)', '<p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\">dukingira imbwa,inkoko,inkwavu,ipusi kugiciro cyiza kumafaranga 1500 .<o:p></o:p></span></p><p>\r\n\r\n<span style=\"font-size: 11pt; line-height: 107%; font-family: &quot;Segoe UI&quot;, sans-serif;\">we\r\nvaccinate your dogs,chicken,rabbits,cats at a good price&nbsp; at 1500rwf</span><br></p>', 1500, 0, '2023-10-23 14:38:53', NULL),
(18, '8', 'kugabanya ubwoya intama(sheep wool reduction)', '<p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\">tugabanya ubwoya intamakugiciro cyiza<o:p></o:p></span></p><p>\r\n\r\n</p><p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\">kumafaranga igihumbi namaganatanu (1500).</span></p><p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">we reduce sheep\'s wool at agood price at 1500rwf.</p>', 1500, 0, '2023-10-23 14:41:56', NULL),
(19, '15', 'kugabanya ubwoya urukwavu(rabbit fur reduction)', '<p><span style=\"font-size: 11pt; line-height: 107%; font-family: &quot;Segoe UI&quot;, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">tugabanya ubwoya inkwavu kugiciro cyamafaranga 1000.</span></p><p><span style=\"font-size: 11pt; line-height: 107%; font-family: &quot;Segoe UI&quot;, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">we reduce rabbit\'s fur at agood price at 1000rwf.<br></span><br></p>', 1000, 0, '2023-10-23 14:44:54', NULL),
(20, '9,11,8', 'gutera intanga(insemination)', '<p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\">dutera intanga ihene,ingurube n\'intama kugiciro cyiza\r\nkumafaranga 3000.<o:p></o:p></span></p><p>\r\n\r\n</p><p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\">we inseminate your goats,pigs and sheeps at agood price at\r\n3000rwf.<o:p></o:p></span></p>', 3000, 0, '2023-10-23 14:46:03', NULL),
(21, '7', 'gutera intanga(insemination)', '<p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\">dutera intanga inka kugiciro cyiza kumafaranga 5000.<o:p></o:p></span></p><p>\r\n\r\n</p><p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\">we inseminate cows at agood price of 5000rwf.<o:p></o:p></span></p>', 5000, 0, '2023-10-23 14:47:00', NULL),
(22, '7', 'gusuzuma(check-up)', '<p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\">dusuzuma inka kugiciro cyiza kumafaranga 2000.<o:p></o:p></span></p><p>\r\n\r\n</p><p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\">we treat your cows at agood price at 2000rwf.<o:p></o:p></span></p>', 2000, 0, '2023-10-23 14:48:23', NULL),
(23, '9,11,8', 'gusuzuma(check-up)', '<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p><p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif;\r\ncolor:black\">dusuzuma ihene,ingurube,intama gugiciro cyiza kumafaranga\r\n1000.icyo twiyemeje nukubafasha</span><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\"><o:p></o:p></span></p><p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif;\r\ncolor:black\">we checkup your goats,pig and sheeps at agood price at 1000 rwf.</span><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\"><o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n</p><p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif;\r\ncolor:black\">&nbsp;we decided to assist you.</span><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\"><o:p></o:p></span></p>', 1000, 0, '2023-10-23 14:49:31', NULL),
(24, '13,12,14,15', 'gusuzuma(check-up)', '<p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\">dusuzuma imbwa,inkoko,ipusi,urukwavu kugiciro cyiza kumafaranga 500.<o:p></o:p></span></p><p>\r\n\r\n</p><p style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif;\">we check-up your dogs,hen,cat and rabbit at agood price at\r\n500rwf.<o:p></o:p></span></p>', 500, 0, '2023-10-23 14:51:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Online Umurenge Veterinary Appointment System '),
(6, 'short_name', 'OUVAS '),
(11, 'logo', 'uploads/logo-1696603336.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/cover-1696602305.png'),
(15, 'content', 'Array'),
(16, 'email', 'ntigurirwashaffy1@gmail.com'),
(17, 'contact', '0782014771'),
(18, 'from_time', '11:00'),
(19, 'to_time', '21:30'),
(20, 'address', 'Gatsibo/Kiziguro'),
(23, 'max_appointment', '5'),
(24, 'clinic_schedule', '9:00 AM - 5:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` text DEFAULT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '0=not verified, 1 = verified',
  `reset_token` text DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `status`, `reset_token`, `date_added`, `date_updated`) VALUES
(1, 'Adminstrator', NULL, 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', 'uploads/avatar-1.png?v=1696602406', NULL, 1, 1, NULL, '2021-01-20 14:02:37', '2023-10-06 16:26:46'),
(25, 'mugisha', NULL, 'eric', 'veterinary mugisha', 'd8362345eeafcdb7019a786452a0576c', NULL, NULL, 2, 1, NULL, '2023-10-29 10:56:23', NULL),
(26, 'mugabo ', NULL, 'damascene', 'veterinary mugabo', '495dcc78c9881306a8df04a4efdffa65', NULL, NULL, 2, 1, NULL, '2023-10-29 10:57:48', NULL),
(27, 'musoni', NULL, 'jcloude', 'veterinary musoni', 'ee7522029d2baef3b29635073f23289c', NULL, NULL, 2, 1, NULL, '2023-10-29 10:59:17', NULL),
(28, 'mutoni', NULL, 'betty', 'mutonibetty1@gmail.com', '$2y$10$c31xIlKkz5o8/enUpUjjF.wlGL1Rdz/CIYHBL2ZIY99oteFxaEtiu', NULL, NULL, 3, 1, NULL, '2023-10-29 10:08:33', NULL),
(29, 'ntigurirwa', NULL, 'shaffy', 'ntigurirwashaffy1@gmail.com', '$2y$10$plYb3KUiyiinp3PAL7WpgOC7ZV7XY5mk0qLUabbmyW6ANB7tZBOS6', NULL, NULL, 2, 1, NULL, '2023-10-29 14:03:35', '2023-10-29 15:17:58'),
(30, 'ishimwe', NULL, 'david', 'ishimwedavid1@gmail.com', '$2y$10$aIIEIQH.MAUEBXuDgDGqyOTSKbchx9q9CCMRz4g4jahdwToudE3z2', NULL, NULL, 3, 1, NULL, '2023-10-29 14:07:07', NULL),
(31, 'kimenyi', NULL, 'christian', 'kchristianvalois@gmail.com', '$2y$10$OnS.eWkw5T9Qz62Isfl70.El1zCnIyBPJQg4T1IUEChWHTsBQ4mnC', NULL, NULL, 3, 1, NULL, '2024-01-06 14:45:34', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_list`
--
ALTER TABLE `appointment_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_list`
--
ALTER TABLE `message_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `service_list`
--
ALTER TABLE `service_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_list`
--
ALTER TABLE `appointment_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `message_list`
--
ALTER TABLE `message_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service_list`
--
ALTER TABLE `service_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment_list`
--
ALTER TABLE `appointment_list`
  ADD CONSTRAINT `appointment_list_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category_list` (`id`) ON DELETE CASCADE;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"relation_lines\":\"true\",\"snap_to_grid\":\"off\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"lawyer\",\"table\":\"user\"},{\"db\":\"lawyer\",\"table\":\"administrator\"},{\"db\":\"lawyers\",\"table\":\"lawyer\"},{\"db\":\"lawyer\",\"table\":\"lawyer\"},{\"db\":\"lawyer\",\"table\":\"client\"},{\"db\":\"irererotrainigsystem\",\"table\":\"attendance\"},{\"db\":\"irererotrainigsystem\",\"table\":\"attandances\"},{\"db\":\"irererotrainigsystem\",\"table\":\"admin\"},{\"db\":\"irererotrainigsystem\",\"table\":\"stock_out\"},{\"db\":\"irererotrainigsystem\",\"table\":\"parent\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2025-02-26 13:42:14', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
