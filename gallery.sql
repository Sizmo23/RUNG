-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 08, 2023 at 04:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Gender` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`ID`, `Fname`, `Lname`, `Address`, `Phone`, `Password`, `Email`, `Gender`) VALUES
(1, 'Anas', 'Baig', 'Lahore', '03340248650', '123456', 'kemgadjeo@outlook.com', 'Male'),
(2, 'Yusuf', 'Zubairi', 'Karachi', '03219731234', '12345678', 'yusuf@hotmail.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `ID` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `location` varchar(100) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Price` int(11) NOT NULL,
  `AID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`ID`, `image`, `location`, `Name`, `Price`, `AID`) VALUES
(28, '6456ea4fdf8cf.jpg', 'upload/6456ea4fdf8cf.jpg', 'The trees', 25000, 2),
(30, '6456eae9bc232.jpg', 'upload/6456eae9bc232.jpg', 'Golden Gate', 13000, 2),
(31, '6456eb45cb176.jpg', 'upload/6456eb45cb176.jpg', 'Silent Woman', 43000, 2),
(32, '6456ebdf079fe.jpg', 'upload/6456ebdf079fe.jpg', 'The Pink Bud', 9000, 2),
(33, '6456ecac8d3e5.jpg', 'upload/6456ecac8d3e5.jpg', 'The Preacher', 75000, 2),
(34, '6456ed1ab917a.jpg', 'upload/6456ed1ab917a.jpg', 'Crosssing Alps', 25000, 2),
(35, '645791a50a431.jpg', 'upload/645791a50a431.jpg', 'Facets of Self', 19000, 1),
(36, '6457920ec7d22.jpg', 'upload/6457920ec7d22.jpg', 'Whispers of the Past', 22000, 1),
(37, '645792c748ac7.jpeg', 'upload/645792c748ac7.jpeg', 'Beyond the Surface', 32500, 1),
(38, '6457933fa4724.jpg', 'upload/6457933fa4724.jpg', 'Cursive Creativity', 10000, 1),
(39, '645793ef87338.jpeg', 'upload/645793ef87338.jpeg', 'Zikar e Yaar Chalay', 39000, 1),
(40, '64579459db0a9.jpg', 'upload/64579459db0a9.jpg', 'The Card Players', 51000, 1),
(41, '645794bb8c441.jpg', 'upload/645794bb8c441.jpg', 'Nafea Faa Ipoipo', 47000, 1),
(42, '645795511bd21.jpg', 'upload/645795511bd21.jpg', ' Treaty of Allahabad', 82000, 1),
(43, '6457971d5eb7a.jpg', 'upload/6457971d5eb7a.jpg', 'Fields of Grace', 41000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `fname`, `lname`, `Address`, `email`, `phone`, `password`) VALUES
(1, 'Yusuf', 'Zubairi', 'MaskanChowrangi', 'yusuf@gmail.com', '03322247861', 'yusuf1234'),
(2, 'Anas', 'Baig', 'Karimabad', 'mirzabaig@gmail.com', '03330377469', 'anasbaig123'),
(3, 'Moiz', 'Mustafa', 'Gulshan13D', 'moiz@gmail.com', '03354678910', 'moiz1234'),
(4, 'Rida', 'Rahat', 'PECHS', 'rida@gmail.com', '03343567', 'rida12345'),
(5, 'Abdullah', 'Ghori', 'GulshanIqbal', 'abdullah@gmail.com', '03322247861', 'abdullah1234'),
(6, 'Umer', 'Hussain', 'ModelColony', 'umer@gmail.com', '03322247861', 'umer1234'),
(7, 'Zoha', 'Hassan', 'FiveStar', 'zoha@gmail.com', '03322247861', 'zoha1234'),
(8, 'Yusuf', 'Zubairi', ' GulshaneIqbal', 'zuwe@gmail.com', '03322247861', 'hello1234'),
(9, 'Kashif', 'Ahmed', 'a-12/gushan iqbal', 'as@gamil.com', '03322247861', '12345678'),
(10, 'moiz', 'hassan', 'fsffsffs', 'yusuf@yahoo.com', 'vffygff', 'abc12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `test` (`AID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `test` FOREIGN KEY (`AID`) REFERENCES `artist` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
