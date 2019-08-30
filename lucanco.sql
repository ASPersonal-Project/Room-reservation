-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 07:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lucanco`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `Billing_no` varchar(10) NOT NULL,
  `Reservation_no` char(8) DEFAULT NULL,
  `Payment_method` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`Billing_no`, `Reservation_no`, `Payment_method`) VALUES
('', '', ''),
('19080205', '19080205', 'CARD'),
('19080207', '19080206', 'CASH'),
('19080208', '19080207', 'CARD');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` char(10) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `L_name` varchar(20) DEFAULT NULL,
  `Contact_no` int(10) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `F_name`, `L_name`, `Contact_no`, `Address`) VALUES
('', '', '', 0, ''),
('697782445V', 'Sarath', 'Witharanage', 775042233, '15, Pilimathalawa, kandy'),
('752844950V', 'Thamal', 'Roopasinghe', 718592101, '7/A, Raja mawatha, ussatakeiyawa'),
('878898991V', 'Nirmal', 'Ranasinghe', 772332426, '46, soyza mawatha, Maratuwa'),
('901002544V', 'Nadun', 'Perera', 785395352, '198, Kandy road, Kurunagala '),
('919256489V', 'Maduka', 'Munasinghe', 776393567, '18, Palmadulla, rathnapura '),
('952921215v', 'Anjana', 'Shakthi', 712073771, 'hbh'),
('952921216v', 'Kaveena', 'Harshani', 712073771, 'hgjhfj'),
('95292121v', 'thima', 'lu', 712073771, 'sdgg');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Hotel_ID` char(5) NOT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Tel_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Hotel_ID`, `Address`, `Tel_number`) VALUES
('LGC01', 'No 101, Galle road, Dehiwala', 112920100),
('LGC02', 'No 22, Negambo road, Ja-Ela', 112233202),
('LGC03', 'No 53, Beach road, Mathara', 412227571),
('LGC04', 'No 11, Kandy road, Kiribathgoda', 112921575),
('LGC05', 'No 45, Galle road, Panadura', 312920111);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Reservation_no` char(8) NOT NULL,
  `Customer_ID` char(10) NOT NULL,
  `No_of_guests` int(3) NOT NULL,
  `Check_in_date` date NOT NULL,
  `Check_out_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Reservation_no`, `Customer_ID`, `No_of_guests`, `Check_in_date`, `Check_out_date`) VALUES
('', '', 0, '0000-00-00', '0000-00-00'),
('19080205', '952921215v', 5, '2019-08-10', '2019-08-17'),
('19080206', '952921216v', 3, '2019-08-03', '2019-08-10'),
('19080207', '95292121v', 4, '2019-08-24', '2019-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_charge`
--

CREATE TABLE `reservation_charge` (
  `Reservation_no` char(8) NOT NULL,
  `Room_charge` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_charge`
--

INSERT INTO `reservation_charge` (`Reservation_no`, `Room_charge`) VALUES
('19080101', 7890),
('19080102', 13290),
('19080201', 23670),
('19080202', 19890),
('19080203', 4490),
('19080204', 50000),
('19080205', 3500),
('19080206', 2000),
('19080207', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_number` char(3) NOT NULL,
  `Room_type` varchar(30) NOT NULL,
  `Hotel_ID` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_number`, `Room_type`, `Hotel_ID`) VALUES
('', '', 'LGC01'),
('101', 'Single bedroom', 'LGC01'),
('102', 'Single bedroom', 'LGC01'),
('103', 'Single bedroom', 'LGC01'),
('104', 'Deluxe double room', 'LGC01'),
('105', 'Supirier double room', 'LGC01'),
('106', 'Supirier double room', 'LGC01'),
('107', 'Master suite', 'LGC01'),
('108', 'Master suite', 'LGC01'),
('500', 'Master suite', 'LGC01'),
('501', 'Master suite', 'LGC01'),
('503', 'Supirier double room', 'LGC01');

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `Room_type` varchar(30) NOT NULL,
  `Rates` int(11) NOT NULL,
  `No_of_max_pepole` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`Room_type`, `Rates`, `No_of_max_pepole`) VALUES
('Deluxe double room', 13290, 4),
('Master suite', 19890, 6),
('Single bedroom', 4490, 1),
('Superior double room', 7890, 2);

-- --------------------------------------------------------

--
-- Table structure for table `room_number`
--

CREATE TABLE `room_number` (
  `reservation_no` char(8) NOT NULL,
  `Room_number` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_number`
--

INSERT INTO `room_number` (`reservation_no`, `Room_number`) VALUES
('', ''),
('19080205', '500'),
('19080206', '501'),
('19080207', '503');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`Billing_no`),
  ADD KEY `Reservation_no` (`Reservation_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Hotel_ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Reservation_no`),
  ADD KEY `reservation_ibfk_1` (`Customer_ID`);

--
-- Indexes for table `reservation_charge`
--
ALTER TABLE `reservation_charge`
  ADD PRIMARY KEY (`Reservation_no`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_number`),
  ADD KEY `room_ibfk_1` (`Hotel_ID`);

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
  ADD PRIMARY KEY (`Room_type`);

--
-- Indexes for table `room_number`
--
ALTER TABLE `room_number`
  ADD PRIMARY KEY (`reservation_no`,`Room_number`),
  ADD KEY `Room_number` (`Room_number`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `billing_ibfk_1` FOREIGN KEY (`Reservation_no`) REFERENCES `reservation` (`Reservation_no`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`Hotel_ID`) REFERENCES `hotel` (`Hotel_ID`);

--
-- Constraints for table `room_number`
--
ALTER TABLE `room_number`
  ADD CONSTRAINT `room_number_ibfk1` FOREIGN KEY (`reservation_no`) REFERENCES `reservation` (`Reservation_no`),
  ADD CONSTRAINT `room_number_ibfk2` FOREIGN KEY (`Room_number`) REFERENCES `room` (`Room_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
