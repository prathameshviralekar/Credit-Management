-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 03:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `credit_managment`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_statement`
--

CREATE TABLE `mini_statement` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `mini_statement` (`sender`, `receiver`, `credits`) VALUES
('Prathamesh', 'Monika', 200),
('Atharv', 'Monika', 100),
('Vaishali', 'Avinash', 200),
('Shubham', 'Monika', 10),
('Avdhut', 'Ravina', 50),
('Mahesh', 'Prathamesh', 400),
('Rahul', 'Prathamesh', 1000),
('Rahul', 'Atharv', 100),
('Atharv', 'Rahul', 100),
('Prathamesh', 'Rahul', 1000),
('Atharv', 'Avdhut', 100),
('Prathamesh', 'Monika', 500),
('Prathamesh', 'Ravina', 10),
('Prathamesh', 'Vaishali', 200),
('Prathamesh', 'Mahesh', 400),
('Avinash', 'Atharv', 200),
('Prathamesh', 'Atharv', 90),
('Prathamesh', 'Shubham', 100),
('Prathamesh', 'Atharv', 200),
('Prathamesh', 'Ravina', 400),
('Rahul', 'Monika', 100),
('Atharv', 'Prathamesh', 100),
('Prathamesh', 'Atharv', 10),
('Prathamesh', 'Atharv', 100),
('Prathamesh', 'Atharv', 10),
('Prathamesh', 'Atharv', 10),
('Prathamesh', 'Atharv', 100),
('Prathamesh', 'Atharv', 100),
('Atharv', 'Prathamesh', 100),
('Prathamesh', 'Atharv', 200),
('Mahesh', 'Rahul', 50),
('Prathamesh', 'Vaishali', 10),
('Prathamesh', 'Atharv', 400),
('Prathamesh', 'Ravina', 10),
('Prathamesh', 'Vaishali', 10),
('Atharv', 'Prathamesh', 500),
('Atharv', 'Prathamesh', 400),
('Monika', 'Vaishali', 10),
('Monika', 'Vaishali', 10),
('Vaishali', 'Mahesh', 10),
('Monika', 'Prathamesh', 200),
('Prathamesh', 'Shubham', 100),
('Prathamesh', 'Monika', 100),
('Prathamesh', 'Atharv', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `credits` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `credits`) VALUES
('Prathamesh', 'prathamesh@gmail.com', 1000),
('Atharv', 'atharv@gmail.com', 1000),
('Avinash', 'avinash@gmail.com', 1000),
('Mahesh', 'mahesh@gmail.com', 1000),
('Vaishali', 'vaishali@gmail.com', 1000),
('Monika', 'monika@gmail.com', 1000),
('Ravina', 'ravina@gmail.com', 1000),
('Rahul', 'rahul@gmail.com', 1000),
('Avdhut', 'avdhut@gmail.com', 1000),
('Shubham', 'shubham@gmail.com', 1000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
