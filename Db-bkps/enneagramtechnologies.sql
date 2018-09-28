-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 02:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enneagramtechnologies`
--

-- --------------------------------------------------------

--
-- Table structure for table `et_login`
--

CREATE TABLE `et_login` (
  `et_login_id` int(100) NOT NULL,
  `et_login_name` varchar(255) NOT NULL,
  `et_login_email` varchar(255) NOT NULL,
  `et_login_api` varchar(255) NOT NULL,
  `et_login_password` varchar(255) NOT NULL,
  `et_login_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `et_login`
--

INSERT INTO `et_login` (`et_login_id`, `et_login_name`, `et_login_email`, `et_login_api`, `et_login_password`, `et_login_img`) VALUES
(59, 'Neethu A.N', 'neethu@takyonline.com', '115611799086117940255', '', ''),
(62, 'pavi', 'pavi@gmail.com', '', 'MTIz', ''),
(69, 'Neethu Karthik', 'neethukarthik0430@gmail.com', '113850690572371275226', '', 'https://lh4.googleusercontent.com/-EpJRtoShaKM/AAAAAAAAAAI/AAAAAAAAABA/X8PSr9Joy9I/s96-c/photo.jpg'),
(70, 'Neethu AN', 'neethunass29@gmail.com', '1690747794384753', '', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=1690747794384753&height=150&width=150&ext=1540724988&hash=AeQLz_FwM2fxML8V');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `et_login`
--
ALTER TABLE `et_login`
  ADD PRIMARY KEY (`et_login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `et_login`
--
ALTER TABLE `et_login`
  MODIFY `et_login_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
