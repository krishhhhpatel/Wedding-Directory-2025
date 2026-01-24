-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2025 at 06:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(5) NOT NULL,
  `admin_name` varchar(15) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  `admin_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Nayan Parekh', 'nayan1@gmail.com', '123'),
(2, 'Kavya Rajput', 'kavya@gmail.com', '7788'),
(3, 'Dev Vyash', 'dev@gmail.com', '567');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_area`
--

CREATE TABLE `tbl_area` (
  `area_id` int(5) NOT NULL,
  `area_name` varchar(20) NOT NULL,
  `area_pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_area`
--

INSERT INTO `tbl_area` (`area_id`, `area_name`, `area_pincode`) VALUES
(1, 'C.G.Road', 380009),
(2, 'Satellite', 380015),
(3, 'Maninagar', 380008),
(4, 'Navrangpura', 380009),
(5, 'Bopal', 380058),
(6, 'Ghatlodia', 380061),
(7, 'Vastrapur', 380015),
(8, 'Sarkhej', 380055),
(9, 'Ambawadi', 380006),
(10, 'Shahibaug', 380004),
(11, 'Mithakhali', 380006),
(12, 'Naranpura', 380013),
(13, 'Vejalpur', 380051),
(14, 'Kankaria', 380022),
(15, 'Paldi', 380007),
(16, 'Ashram Road', 380009),
(17, 'Kalupur', 380001),
(18, 'Gulbhai Tekra', 380015),
(19, 'Vastral', 380052),
(20, 'Odhav', 380038),
(21, 'Prahlad Nagar', 380015),
(22, 'Chandkheda', 382424),
(23, 'Gota', 382481),
(24, 'Naroda', 382325),
(25, 'Sardarnagar', 382475),
(26, 'Kubernagar', 282340),
(27, 'Nobalnagar', 382340),
(28, 'Nana Chiloda', 382330),
(29, 'Ghodasar', 380050),
(30, 'Gurukul', 380052);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(10) NOT NULL,
  `vendor_name` varchar(30) NOT NULL,
  `vendor_id` int(10) NOT NULL,
  `user_id` int(5) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_status` varchar(25) NOT NULL,
  `booking_address` varchar(160) NOT NULL,
  `vendor_details` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(5) NOT NULL,
  `category_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Florists'),
(2, 'Decorator'),
(3, 'Photographer'),
(4, 'Videographer'),
(5, 'DJ'),
(6, 'Catering Services'),
(7, 'Mehandi Artist'),
(8, 'Beauty Artist'),
(9, 'Supplier Cakes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `feedback_details` varchar(30) NOT NULL,
  `feedback_date` varchar(20) NOT NULL,
  `vendor_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) NOT NULL,
  `booking_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `amount` int(30) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_details` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `booking_id`, `user_id`, `amount`, `payment_method`, `payment_date`, `payment_details`) VALUES
(101, 1, 2, 30000, 'card', '2025-01-14', 'adferfcrds'),
(102, 102, 1, 5000, 'check', '2025-02-17', 'dsjkdjskdnjkd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcategory_id`, `subcategory_name`, `category_id`) VALUES
(401, 'Venues', 1),
(402, 'Wedding_Attire', 1),
(403, 'Beauty_staff', 1),
(404, 'Flower & Decorations', 1),
(405, 'Music & Entertainment', 1),
(406, 'Catering & Beverages', 1),
(407, 'Mehndi Designers & Artists', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_gender` varchar(6) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_password` int(20) NOT NULL,
  `user_mobile` int(10) NOT NULL,
  `user_address` varchar(160) NOT NULL,
  `area_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_gender`, `user_email`, `user_password`, `user_mobile`, `user_address`, `area_id`) VALUES
(1, 'Hemali Soni', 'Female', 'hemali703@gmail.com', 7030, 2003464580, 'Paldi, Ahmedabad', 0),
(2, 'Jiya Kapuruya', 'Female', 'jiya706@gmail.com', 7060, 2080324567, 'Bopal,Ahmedabad', 0),
(701, 'Neer Kushvaha', 'Male', 'Neer053@gmail.com', 123, 2100980765, 'Chandranagar,Ahmedabad', 0),
(702, 'Shivani Raval', 'Female', 'shivani702@gmail.com', 7020, 2134533456, 'Bhatta,Ahmedabad', 0),
(704, 'Manish Borana', 'Male', 'Manish704@gmail.com', 7040, 2099322567, 'Paldi,Ahmedabad', 0),
(705, 'Meet Shah', 'Male', 'meet705@gmail.com', 7050, 2100856234, 'Saraspur, Ahmedabad', 0),
(707, 'sad', 'on', 'jinal@gmail.com', 123, 2147483647, 'paldi', 18);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor`
--

CREATE TABLE `tbl_vendor` (
  `vendor_id` int(10) NOT NULL,
  `vendor_name` varchar(30) NOT NULL,
  `vendor_details` varchar(100) NOT NULL,
  `vendor_email` varchar(20) NOT NULL,
  `vendor_mobile` int(10) NOT NULL,
  `vendor_password` varchar(10) NOT NULL,
  `vendor_address` varchar(160) NOT NULL,
  `amount` double NOT NULL,
  `about_me` varchar(100) NOT NULL,
  `vendor_img` varchar(250) NOT NULL,
  `category_id` int(5) NOT NULL,
  `area_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vendor`
--

INSERT INTO `tbl_vendor` (`vendor_id`, `vendor_name`, `vendor_details`, `vendor_email`, `vendor_mobile`, `vendor_password`, `vendor_address`, `amount`, `about_me`, `vendor_img`, `category_id`, `area_id`) VALUES
(201, 'Vihar Kumar', 'Florists', 'vihar201@gmail.com', 2100221123, 'vihar201', 'Jamalpur,Ahmedabad', 10500, 'Contact for flowers', 'Florist1.png.png', 1, 1),
(202, 'Riya Twani', 'Florist', 'riya202@gmail.com', 2100982311, 'riya202', 'Vastral,Ahmedabad', 15000, 'Contact for flower', 'Florist2.png.png', 1, 2),
(203, 'Nihari Sharma', 'Decorator', 'nihari203@gmail.com', 2100231791, 'nihari203', 'AmbaWadi,Ahmedabad', 30000, 'Decoration Service Provider', 'Decorator1.png', 2, 3),
(204, 'Nilesh Goswarni', 'Decorator', 'nilesh204@gmail.com', 2100115982, 'nilesh204', 'Naroda,Ahmedabad', 40000, 'Decoration Service Available', 'Decorater2.png', 2, 2),
(205, 'Kritika Patel', 'Photographer', 'kritika205@gmail.com', 2147483647, 'kritika205', 'Maninagar,Ahmedabad', 10000, 'Photography Services Available ', 'photographer2.png', 3, 3),
(206, 'RahulPatel', 'Photographer', 'rahul206@gmail.com', 2011332089, 'rahul206', 'SG Highway,Ahmedabad', 10500, 'Photography Services Available', 'photographer1.png', 3, 2),
(207, 'Rakesh Gandhi', 'Videographer', 'rakesh207@gmail.com', 2011402345, 'rakesh207', 'Ellisbridge,Ahmedabad', 15000, 'Video Shooter', 'Videographer1.png', 4, 3),
(208, 'Rakesh Kapadiya', 'Videographer', 'rakesh208@gmail.com', 2100231465, 'rakesh208', 'Panjarapol,Ahmedabad', 9500, 'Video Shooter', 'Videographer2.png', 4, 3),
(209, 'AAnand Patel', 'DJ ', 'aanand209@gmail.com', 2012032411, 'aanad209', 'Navarangpura,Ahmedabad', 17500, 'DJ Service', 'DJ1.PNG', 5, 3),
(210, 'Kalpesh Soni', 'DJ ', 'kalpesh210@gmail.com', 2012443126, 'kalpesh210', 'Naroda,Ahmedabad', 20000, 'DJ Service', 'DJ2.PNG', 5, 2),
(211, 'Kaushik Parekh', 'Catering Services', 'kaushik211@gmail.com', 2103421190, 'kaushik211', 'Satelite,Ahmedabad', 21000, 'Catering Services Provider', 'Catering Services1.PNG', 6, 2),
(212, 'Prakash Shah', 'Catering Services', 'prakash212@gmail.com', 2100234512, 'prakash212', 'Hathijan,Ahmedabad', 35000, 'Catering Services Provider', 'Catering Services2.PNG', 6, 2),
(213, 'khyati Shah', 'Mehandi Artist', 'khyati213@gmail.com', 2100231123, 'khyati213', 'Paldi,Ahmedabad', 5000, 'Mehandi Designer', 'Mehandi Artist1.PNG', 7, 2),
(214, 'Khushi Vyash', 'Mehandi Artist', 'khushi214@gmail.com', 2100231234, 'khushi214', 'Navrangpura,Ahmedabad', 6000, 'Mehandi Designer', 'Mehandi Artist2.PNG', 7, 0),
(215, 'Ishani Khatik', 'Beauty Artist', 'ishani215@gmail.com', 2100324512, 'ishani215@', 'Vejalpur,Ahmedabad', 12000, 'Beauty Artist', 'Beauty Artist1.PNG', 8, 0),
(216, 'Rashmi Goswani ', 'Beauty Artist', 'rashmi216@gmail.com', 1922345238, 'rashmi216@', 'Saraspur,Ahmedabad', 14500, 'Beauty Artist', 'Beauty Artist2.PNG', 8, 0),
(217, 'Saloni Barot', 'Supplier Cakes', 'saloni217@gmail.com', 1900235521, 'saloni217', 'Bhatta,Ahmedabad', 900, 'Supplier Cakes', 'Supplier-Cakes-1.jpg', 9, 0),
(218, 'Ritika Kahar', 'Supplier Cakes', 'ritika218@gmail.com', 1102231456, 'ritika218', 'Odhav,Ahmedabad', 1300, 'Supplier Cakes', 'supplier-cake-2.jpg', 9, 0),
(219, 'Khushi  shah', 'Florist', 'khushi219@gmail.com', 2047480647, 'kushi219', 'Paldi, Ahmedabad', 20000, 'Contect for flowers ', 'Florist3.png', 1, 0),
(220, 'Krishna Patel', 'Florist', 'krishna220@gmail.com', 2100232345, 'krishna220', 'Narol ,Ahmedabad', 30000, 'Contact For Flowers ', 'Florist4.png', 1, 0),
(221, 'Kashish Patel', 'Florist', 'kashish221@gmail.com', 2102312212, 'kashish221', 'Vastral, Ahmedabad', 10500, 'Contact For Flower', 'Florist6.png', 1, 0),
(222, 'Kashirav Mavalankar', 'Florist', 'kashirav222@gmail.co', 2101123123, 'kashirav22', 'Panjarapol,Ahmedabad', 23000, 'Contact For Flowers', 'Florist7.png', 1, 0),
(223, 'Sandeep Goshvani', 'Florist', 'sandeep223@gmail.com', 2100213424, 'sandeep223', 'Navrangpura, Ahmedabad', 50000, 'Contact For FLower', 'Florist8.png', 1, 0),
(224, 'Rahul Panchal', 'Florist', 'rahul224@gmail.com', 2147483647, 'rahul224', 'Kalupur, Ahmedabad', 35000, 'Contact For Flowers', 'Florist9.png', 1, 0),
(225, 'Abhinav Sharma', 'Florist', 'abhinav225@gmail.com', 2011349435, 'abhinav225', 'Jamalpur ,Ahmedabad', 50000, 'Contect For Flower', 'Florist10.png', 1, 0),
(226, 'Mayank Dube', 'Decorator', 'mayank226@gmail.com', 2147483647, 'mayank226', 'Astodia,Ahmedabad', 70000, 'Decoration Service Provider', 'Decoration3.png', 2, 0),
(227, 'Kavya Joshi', 'Decorator', 'kavya227@gmail.com', 2077213425, 'kavya227', 'Hathijan,Ahmedabad', 60000, 'Decoration Service Provider', 'Decoration4.png', 2, 0),
(228, 'Raj Soni', 'Decorator', 'raj228@gmail.com', 2100223845, 'raj228', 'Jamalpur,Ahmedabad', 80000, 'Decoration Service Provider', 'Decoration5.png', 2, 0),
(229, 'Dhaval Patel', 'Decorator', 'dhaval229@gmail.com', 2100213214, 'dhaval229', 'Sarangpur,Ahmedabad', 50000, 'Decoration Service Provider', 'Decoration6.png', 2, 0),
(230, 'Yuvan Panchal', 'Photographer', 'yuvan230@gmail.com', 2100122124, 'yuvan230', 'Naroda, Ahmedabad', 30000, 'Photography Services Available	', 'photographer5.png', 3, 0),
(231, 'Priya Soni', 'Photographer', 'priya231@gmail.com', 2133122345, 'priya231', 'Bopal, Ahmedabad', 40000, 'Photography Services Available	', 'photographer3.png', 3, 0),
(232, 'Disha Patel', 'Photographer', 'disha232@gmail.com', 2100213544, 'disha232', 'Maninagar, Ahmedabad', 35000, 'Photography Services Available	', 'photographer4.png', 3, 0),
(233, 'Parekh Rajput', 'Photographer', 'parekh233@gmail.com', 2012003241, 'parekh233', 'S.G. highway, Ahmedabad', 55000, 'Photography Services Available	', 'photographer6.png', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_area`
--
ALTER TABLE `tbl_area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_area`
--
ALTER TABLE `tbl_area`
  MODIFY `area_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=408;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=708;

--
-- AUTO_INCREMENT for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  MODIFY `vendor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2094;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
