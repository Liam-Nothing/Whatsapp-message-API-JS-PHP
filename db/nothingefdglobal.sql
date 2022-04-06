-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 09:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nothingefdglobal`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_whatsapp_messager`
--

CREATE TABLE `app_whatsapp_messager` (
  `id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `last_wirte_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `receiver` varchar(100) NOT NULL,
  `pass` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_whatsapp_messager`
--

INSERT INTO `app_whatsapp_messager` (`id`, `message`, `last_wirte_date`, `receiver`, `pass`) VALUES
(1, 'hellow', '2022-04-05 19:01:27', 'XXXXXX', '1234567891234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_whatsapp_messager`
--
ALTER TABLE `app_whatsapp_messager`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_whatsapp_messager`
--
ALTER TABLE `app_whatsapp_messager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
