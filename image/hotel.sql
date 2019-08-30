-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 03:43 PM
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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `Billing_no` varchar(10) NOT NULL,
  `Reservation_no` char(8) NOT NULL,
  `Payment_method` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`Billing_no`, `Reservation_no`, `Payment_method`) VALUES
('19080205', '19080204', 'CARD'),
('19080206', '19080207', 'CASH');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` char(10) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `L_name` varchar(20) DEFAULT NULL,
  `Contact_no` int(10) NOT NULL,
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
('952921215v', 'Anjana', 'Shakthi', 712073771, 'kamburugamuwa'),
('952921216v', 'Anjana', 'Shakthi', 712073771, 'nkjb'),
('952921217v', 'Anjana', 'Shakthi', 712073771, 'zvxb'),
('952921218v', 'Anjana', 'Shakthi', 712073771, 'fgdfh'),
('952921219v', 'Anjana', 'Shakthi', 712073771, 'zvxb'),
('952921220v', 'Anjana', 'Shakthi', 712073771, 'mnmb'),
('952921221v', 'Anjana', 'Shakthi', 712073771, 'kklh'),
('952921222v', 'Anjana', 'Shakthi', 712073771, 'asfg'),
('9529212237', 'Anjana', 'Shakthi', 712073771, ' m '),
('952921230v', 'Anjana', 'Shakthi', 712073771, 'jhh'),
('952921231v', 'Anjana', 'Shakthi', 712073771, 'jnjk'),
('952921232v', 'Anjana', 'Shakthi', 712073771, 'mlm'),
('952921233v', 'Anjana', 'Shakthi', 712073771, 'njo'),
('952921254v', 'Anjana', 'Shakthi', 712073771, 'kl'),
('952921255v', 'Anjana', 'Shakthi', 712073771, 'anjana');

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
  `Check_out_date` date NOT NULL,
  `Billing_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Reservation_no`, `Customer_ID`, `No_of_guests`, `Check_in_date`, `Check_out_date`, `Billing_no`) VALUES
('', '', 0, '0000-00-00', '0000-00-00', ''),
('19080204', '952921254v', 5, '2019-08-03', '2019-08-10', ''),
('19080206', '952921219v', 5, '2019-08-17', '2019-08-10', '2315487521'),
('19080207', '952921255v', 5, '2019-08-17', '2019-08-24', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_charge`
--

CREATE TABLE `reservation_charge` (
  `Reservation_no` char(8) NOT NULL,
  `Room_charge` int(11) NOT NULL
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
('19080204', 2500),
('19080207', 3000),
('19080212', 1235),
('19080213', 25000),
('19080215', 2000);

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
('101', 'Single bedroom', 'LGC01'),
('102', 'Single bedroom', 'LGC01'),
('103', 'Single bedroom', 'LGC01'),
('104', 'Superior double room', 'LGC01'),
('105', 'Superior double room', 'LGC01'),
('106', 'Superior double room', 'LGC01'),
('107', 'Deluxe double room', 'LGC01'),
('201', 'Single bedroom', 'LGC01'),
('202', 'Single bedroom', 'LGC01'),
('203', 'Superior double room', 'LGC01'),
('204', 'Superior double room', 'LGC01'),
('205', 'Superior double room', 'LGC01'),
('206', 'Superior double room', 'LGC01'),
('207', 'Superior double room', 'LGC01'),
('301', 'Master suite', 'LGC01'),
('302', 'Master suite', 'LGC01'),
('303', 'Deluxe double room', 'LGC01'),
('304', 'Deluxe double room', 'LGC01'),
('500', 'Deluxe double room', 'LGC01'),
('501', 'Deluxe double room', 'LGC01'),
('502', 'Master suite', 'LGC01'),
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
('Deluxe double room', 0, 5),
('Master suite', 0, 6);

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
  ADD KEY `Customer_ID` (`Customer_ID`),
  ADD KEY `Billing_no` (`Billing_no`);

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
  ADD KEY `Hotel_ID` (`Hotel_ID`);

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
  ADD PRIMARY KEY (`Room_type`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
