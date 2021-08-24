-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 11:26 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hybreed`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `shopno` varchar(200) NOT NULL,
  `redevelopment` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `carpetarea` varchar(200) NOT NULL,
  `index2` varchar(200) NOT NULL,
  `propertycart` varchar(200) NOT NULL,
  `loandocument` varchar(200) NOT NULL,
  `anyother` varchar(200) NOT NULL,
  `secretarycarpet` varchar(200) NOT NULL,
  `revisedarea` varchar(200) NOT NULL,
  `claimedarea` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `shopno`, `redevelopment`, `email`, `mobile`, `carpetarea`, `index2`, `propertycart`, `loandocument`, `anyother`, `secretarycarpet`, `revisedarea`, `claimedarea`, `created_at`, `updated_at`) VALUES
(1, 'swapnil borhade', '213', 'No', 'swapnil.borhade74@gmail.com', '9768165858', '5654 Sqr Mtr', 'upload/swapnil borhade/test2.png', 'upload/swapnil borhade/welcome to powerpoint.pptx', 'upload/swapnil borhade/name.pdf', 'upload/swapnil borhade/image2.png', '6546 Sqr Mtr', '54654654 Sqr Mtr', '6546 Sqr Mtr', '2021-08-23 02:54:53', '2021-08-23 02:54:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
