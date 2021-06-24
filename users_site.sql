-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 05:41 PM
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
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_site`
--

CREATE TABLE `users_site` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `feed` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_site`
--

INSERT INTO `users_site` (`id`, `name`, `email`, `experience`, `feed`) VALUES
(1, 'Nisha Kumari', 'nisha.nkr12@gmail.com', '', 'hkjhgukgkgu'),
(5, 'Nisha Kumari', 'nisha.nkr12@gmail.com', 'bad', 'hkjhgukgkgu'),
(11, 'ksndksf', 'asbnam@gmail.com', 'bad', 'nics'),
(12, 'ksndksf', 'asbnam@gmail.com', 'bad', 'nics'),
(13, 'ksndksf', 'asbnam@gmail.com', 'bad', 'nics'),
(14, 'uugu', 'as@gmail.com', 'bad', 'nice hhhg'),
(15, 'nishaa', 'nis@gmail.com', 'Average', 'jsfeguei'),
(16, 'kshdjkh', 'nisbfjksdb@gmail.com', 'Good', 'jsfegueidkkhfkegfedvjkdv\r\nkewhvihvowr\r\njkefkjwgfukw'),
(17, 'Nisha Kumari', 'nisha.nkr12@gmail.com', 'Average', 'jghjh'),
(18, 'kjhkj', 'rsrs@gmail.com', 'Good', 'uggwf guwefuu jhbdjsjh\r\njsbiasgf\r\n\r\nhdsfvuyfyuw'),
(19, 'dew', 'nisha.nkr12@gmail.com', 'Average', 'dff'),
(20, 'dew', 'nisha.nkr12@gmail.com', 'Average', 'dff'),
(21, 'Nisha Kumari', 'nisha.nkr12@gmail.com', 'Average', 'wd'),
(22, 'dew', 'nisha.nkr12@gmail.com', 'Average', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_site`
--
ALTER TABLE `users_site`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_site`
--
ALTER TABLE `users_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
