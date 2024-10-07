-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 06:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eventlizer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adminreg`
--

CREATE TABLE `tbl_adminreg` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_contact` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_adminreg`
--

INSERT INTO `tbl_adminreg` (`admin_id`, `admin_name`, `admin_contact`, `admin_email`, `admin_password`) VALUES
(1, 'Albin PB', '9526407108', 'albin2@gmail.com', '5555'),
(2, 'Salmanul Fariz NK', '8136975933', 'salmanul2@gmail.com', '8888');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `booking_fordate` varchar(50) NOT NULL,
  `booking_fortime` varchar(50) NOT NULL,
  `place_id` int(11) NOT NULL,
  `booking_details` varchar(50) NOT NULL,
  `package_id` int(11) NOT NULL,
  `booking_status` varchar(50) NOT NULL DEFAULT '0',
  `booking_amount` varchar(50) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `booking_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_fordate`, `booking_fortime`, `place_id`, `booking_details`, `package_id`, `booking_status`, `booking_amount`, `user_id`, `booking_date`) VALUES
(1, '2023-06-15', '7.00 pm', 40, 'For more Enjoyment', 0, '0', '0', 0, ''),
(2, '2023-07-01', '10:00', 11, 'Enjoy!Enjoy', 0, '0', '0', 0, ''),
(3, '2023-06-29', '', 10, 'fhtujtfti', 0, '0', '0', 0, ''),
(4, '2023-06-15', '', 10, 'hkghk', 0, '0', '0', 12, ''),
(5, '2023-05-31', '14:26', 7, 'rtgjkhnmfdgfcgvbm', 0, '0', '0', 12, ''),
(6, '2023-05-31', '14:27', 7, 'dfghjk', 0, '1', '0', 12, ''),
(8, '2023-06-16', '10:27', 10, 'ghjkl', 0, '0', '0', 12, '2023-06-16'),
(9, '2023-06-16', '07:30', 41, 'adxgvhjvfxezsddszerserstr', 0, '0', '0', 12, '2023-06-16'),
(10, '2023-06-16', '12:30', 4, 'dgrtkiulkaererghli;', 0, '0', '0', 12, '2023-06-16'),
(11, '2023-06-16', '11:32', 18, 'm,', 0, '0', '0', 12, '2023-06-16'),
(12, '2023-06-16', '10:35', 28, 'hfgj', 0, '0', '0', 12, '2023-06-16'),
(13, '2023-06-16', '10:43', 6, 'ertg', 1, '1', '0', 12, '2023-06-16'),
(14, '2023-06-16', '', 7, 'dsf', 2, '1', '0', 12, '2023-06-16'),
(15, '2023-06-30', '12:00', 59, 'Stage decoration for wedding', 4, '1', '1500', 5, '2023-06-23'),
(16, '2023-06-23', '18:00', 8, 'Wedding event', 0, '1', '0', 5, '2023-06-23'),
(17, '2023-06-23', '05:00', 40, 'I hope this is very Entertainment', 0, '1', '5000', 4, '2023-06-23'),
(18, '2023-06-25', '11:30', 7, 'For Baptism', 1, '1', '0', 3, '2023-06-23'),
(19, '2023-06-30', '05:00', 36, 'For Perunnal', 0, '1', '10000', 4, '2023-06-30'),
(20, '2023-07-03', '13:00', 39, 'wertgyhj', 1, '1', '20000', 1, '2023-07-03'),
(21, '2023-07-14', '14:30', 5, 'for party', 1, '1', '2000', 2, '2023-07-14'),
(22, '2023-07-14', '14:38', 7, 'for........', 0, '1', '0', 2, '2023-07-14'),
(23, '2023-09-11', '03:00', 8, 'For College Program', 0, '1', '5000', 2, '2023-09-01'),
(24, '2023-09-05', '18:33', 6, 'hkjnkmm,ds', 1, '1', '0', 2, '2023-09-04'),
(25, '2023-09-09', '10:12', 0, 'oj', 0, '0', '0', 2, '2023-09-09'),
(26, '2023-09-09', '10:19', 0, '', 0, '0', '0', 2, '2023-09-09'),
(27, '2023-10-14', '14:30', 8, 'rerdehryt', 1, '1', '0', 2, '2023-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_title` varchar(50) NOT NULL,
  `complaint_content` varchar(50) NOT NULL,
  `complaint_date` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `complaint_reply` varchar(50) NOT NULL DEFAULT 'Not replied',
  `complaint_img` varchar(50) NOT NULL,
  `complaint_status` varchar(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complaint_title`, `complaint_content`, `complaint_date`, `user_id`, `complaint_reply`, `complaint_img`, `complaint_status`) VALUES
(1, 'Working', 'Sometimes it do not work properly and still ', '2023-06-17', 2, 'Sorry for this,and we take necessary solution', 'lambert.png', '1'),
(2, 'Not working', 'site is not working properly', '2023-06-23', 5, 'ok', '', '0'),
(4, 'Do Not Work Properly', 'This seems many errors', '2023-06-23', 4, 'sorry', '', '1'),
(6, 'Miss Behaviour', 'One of the event planner in your site miss behavio', '2023-09-30', 2, 'Sorry!', 'kites.jpg', '1'),
(13, 'mjhj', 'jhjh', '2023-10-05', 2, 'Not replied', 'wedds4.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(8, 'Kannur..'),
(10, 'Kozhikod'),
(11, 'Malapuram'),
(13, 'Palakkad'),
(14, 'Thrissur'),
(15, 'Ernakulam'),
(16, 'Idukki'),
(17, 'Kottayam'),
(18, 'Alappuzha'),
(19, 'Pathanamthitta'),
(20, 'Kollam'),
(21, 'Thiruvananthapuram'),
(33, 'Kasargod');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_eventorganiser`
--

CREATE TABLE `tbl_eventorganiser` (
  `organiser_id` int(11) NOT NULL,
  `organiser_name` varchar(50) NOT NULL,
  `organiser_address` varchar(150) NOT NULL,
  `organiser_contact` varchar(50) NOT NULL,
  `organiser_email` varchar(50) NOT NULL,
  `place_id` int(11) NOT NULL,
  `organiser_photo` varchar(50) NOT NULL,
  `organiser_license` varchar(50) NOT NULL,
  `organiser_proof` varchar(50) NOT NULL,
  `organiser_details` varchar(100) NOT NULL,
  `organiser_username` varchar(50) NOT NULL,
  `organiser_password` varchar(50) NOT NULL,
  `organiser_vstatus` int(11) NOT NULL,
  `organiser_about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_eventorganiser`
--

INSERT INTO `tbl_eventorganiser` (`organiser_id`, `organiser_name`, `organiser_address`, `organiser_contact`, `organiser_email`, `place_id`, `organiser_photo`, `organiser_license`, `organiser_proof`, `organiser_details`, `organiser_username`, `organiser_password`, `organiser_vstatus`, `organiser_about`) VALUES
(1, 'Ponnus Events', 'TPJ Buildings, W.Vengola PO', '6845921748', 'ponnus123@gmail.com', 8, 'ponnus.png', 'KL234ABP12F2006', 'proof4.jpg', 'Make more Memorable and Happiness', 'ponnus123@', '2468', 1, ''),
(2, 'Magnolia Events & Weddings', 'Arogyamatha Buildings,First Floor, Chalikkava', '07593800008', 'magnoliaevents12@gmail.com', 39, 'magnolia.jpg', '48/1640B', 'proof2.jpg', 'Gifted by a Happy day', 'root', '1234', 1, ''),
(4, 'Kappithan Event', 'Thirumoolapuram, Thiruvalla, \r\nPathanamthitta', '9526407108', 'kappithanevents@gmail.com', 56, 'kapithan.jpg', 'KL2008B24J28', 'proof4.jpg', 'About Kappithan:\r\nEvent Pvt. Ltd\r\nKappithan Event ', 'kappithan@123', '2468', 1, ''),
(5, 'Kites Wedding Planner', 'Thodupuzha, Kerala 685608, India', '8281467354', 'kitesevent@gmail.com', 47, 'kites.jpg', 'Lic 1234546', 'proof5.jpg', 'Event management company in Thodupuzha, Kerala', 'root', '1234', 1, 'Kites Event Planner , the most renowned event planner centre in Thodupuzha , has been established in the year 2017, Kites Events Thodupuzha in Akshayacatering,Idukki listed under in Idukki. '),
(7, 'Canavil caters', 'Vengola P.O, Perumbavoor', '9656147890', 'canavil@gmail.com', 8, 'Abj events1.jpg', 'K12345Q2023', 'proof3.jpg', 'Decor,Catering', 'Canavil', '123', 1, ''),
(8, 'Unicorn Wedding', 'Buildings, 2nd floor, A, Divyam, Bus stop, 7, KP Vallon Rd, near Paadom, Giri Nagar, Kadavanthra, Kochi, Ernakulam, Kerala 682020', '09447672736', 'unicorn@gmail.com', 40, 'unicorn.jpg', 'AACWP234', 'proof3.jpg', 'Unicorn is one of the best Wedding Planners in Kochi, Kerala focused on providing all kind of event ', 'Unicorn', '1234', 1, 'We Unicorn wedding planners understand how you feel when it comes to wedding planning, the most wonderful event of your life. We listen to you, working closely and intently with you and your family to create a special wedding event that is completely unique as you want it to be. We have a great team that will make every aspect of planning exciting with fresh designs and ideas. Welcome to Unicorn Wedding Planners.'),
(9, 'Salmanevent', 'Mangalath(H) W.Vengola', '8136975933', 'farizsalmanul@gmail.com', 61, 'Screenshot (5).png', '456458965', 'Screenshot (4).png', 'hilcjfe', 'Salman', '12345', 2, 'uhknknre'),
(10, 'SF Events ', 'Chemberakki', '9847561245', 'sfevent@gmail.com', 8, 'estell.jpg', 'AACWP235', 'proof3.jpg', 'Colorful events', 'Sf', '1234', 1, 'We Sf Event planners understand how you feel when it comes to wedding planning, the most wonderful event of your life. We listen to you, working closely and intently with you and your family to create a special wedding event that is completely unique as you want it to be. We have a great team that will make every aspect of planning exciting with fresh designs and ideas. Welcome to SF Event Planners.'),
(13, 'Atham Events', 'Sreekrishna Complex, Shoranur Rd, near thiruvambady temple, Thrissur, Kerala 680022', '09961333686', 'athamevents@gmail.com', 62, 'atham.jpg', 'KL1234', 'proof1.jpg', 'The Ideal Resort of Event Manangement', 'root', '123', 1, 'A wedding is one of the most significant moments of your life, You have to make your wedding day all about you. For making your special moment an unforgettable celebration, ATHAM EVENTS provides a one stop solution for weddings and related events in Kerala.  We work on everything from start to finish - invites, venue selection, caterers, decor concepts, hospitality and transport arrangements etc. As wedding planners, we are a part of every minute detail of putting together the most special day i'),
(14, 'Albin', 'dsdsf', '2665456161', 'alb@gmail.com', 5, 'atham.jpg', 'erer', 'atham.jpg', 'dwfef', 'Albin', '1234', 1, 'erwee'),
(15, 'Salman event', 'sxsdsdd', '8136975933', 'salmanul@gmail.com', 9, 'atham1.jpg', '8136975933', 'atham3.jpg', 'asdwdedwedew', 'Salmanulfariz', '8888', 1, 'dwedwed'),
(16, 'Salmanevent', 'dsefretrt', '8136975933', 'salmanul@gmail.com', 9, 'atham3.jpg', '44664946561213', 'atham1.jpg', 'saxdsdwerefre', 'Salmanul Fariz N K', '8888', 1, 'xcdfrg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_eventtype`
--

CREATE TABLE `tbl_eventtype` (
  `eventtype_id` int(11) NOT NULL,
  `eventtype_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_eventtype`
--

INSERT INTO `tbl_eventtype` (`eventtype_id`, `eventtype_name`) VALUES
(1, 'Catering Service'),
(2, 'Catering+Decorations'),
(3, 'Funeral'),
(4, 'Food varients'),
(5, 'Photography and Videography'),
(6, 'Decorations'),
(7, 'Ordinary Package'),
(8, 'Luxury Vehicles rent'),
(9, 'Stage Work');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_content` varchar(50) NOT NULL,
  `feedback_date` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_content`, `feedback_date`, `user_id`) VALUES
(1, 'Excellent site', '2023-06-17', 2),
(2, 'Good', '2023-06-17', 2),
(3, 'Good', '2023-06-23', 5),
(4, 'This website helps us to choose best event compani', '2023-08-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_image` varchar(50) NOT NULL,
  `gallery_caption` varchar(50) NOT NULL,
  `details_id` int(11) NOT NULL,
  `band_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_id`, `gallery_image`, `gallery_caption`, `details_id`, `band_id`) VALUES
(1, 'magnoliacat1.jpg', 'Buffet', 1, 0),
(2, 'magnoliacatjpg.jpg', 'Delicious Food', 1, 0),
(3, 'Singari1.jpg', 'Traditional chenda melam', 0, 1),
(4, 'Singari4.jpg', '', 0, 1),
(5, 'Singari3.jpg', '', 0, 1),
(6, 'arabian1.jpg', 'Arabian Food', 3, 0),
(7, 'Thaikkudam1.jpg', 'Instrumental', 0, 2),
(8, 'Abj events3.jpg', 'Welcome', 4, 0),
(9, 'piano.jpg', 'classical instrument', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `package_details` varchar(50) NOT NULL,
  `eventtype_id` int(11) NOT NULL,
  `organizer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  `place_pin` varchar(50) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `place_pin`, `district_id`) VALUES
(4, 'Kalppatta', '435435', 9),
(5, 'Vengola', '683556', 15),
(6, 'Pattimattom', '683562', 15),
(7, 'Palakkal', '680001', 14),
(8, 'Perumbavoor', '683542', 15),
(9, 'Kizhakkambalam', '683562', 15),
(10, 'Ponnani', '679577', 11),
(11, 'varkala', '695141', 21),
(12, 'Thampannor', '695014', 21),
(13, 'Neyyattinkara', '695121', 21),
(14, 'Nedumangad', '695541', 21),
(15, 'Kattakada', '695572', 21),
(16, 'Kottarakkara', '691506', 20),
(17, 'Punalur', '69135', 20),
(18, 'Sasthamcottah', '690521', 20),
(19, 'Kottukal', '691306', 20),
(20, 'Maloor', '689695', 20),
(21, 'Manjappara', '691533', 20),
(22, 'Pandalam', '689501', 19),
(23, 'Chengaroor', '689594', 19),
(24, 'Cherukulanji', '689673', 19),
(25, 'Gavi', '685533', 19),
(26, 'Konny', '689691', 19),
(27, 'Mannady', '691530', 19),
(28, 'Cherthala', '688524', 18),
(29, 'Puthuppally', '692527', 18),
(30, 'Mavelikara', '690101', 18),
(31, 'Kayangulam', '690502', 18),
(32, 'Chengannur', '689121', 18),
(33, 'Kuttanad', '688561', 18),
(34, 'Changanacherry HO', '686101', 17),
(35, 'Erumely', '686509', 17),
(36, 'Kanjirapally', '686507', 17),
(37, 'Kumarakom', '686563', 17),
(38, 'Pala', '686575', 17),
(39, 'Vennala', '682028', 15),
(40, 'Kochi', '682001', 15),
(41, 'Adimali', '685561', 16),
(42, 'Chinnakanal', '685618', 16),
(43, 'Devikulam', '685613', 16),
(44, 'Kattappana', '685508', 16),
(45, 'Kumily', '685509', 16),
(46, 'Manjappara', '685553', 16),
(47, 'Munnar', '685612', 16),
(48, 'Peermade', '685531', 16),
(49, 'Peringassery', '685581', 16),
(50, 'Ponmudi', '685564', 16),
(51, 'Rajakad', '685566', 16),
(52, 'Thekkady', '685536', 16),
(53, 'vagamon', '685503', 16),
(54, 'Vyttila', '682019', 15),
(55, 'Edapally', '682024', 15),
(56, 'Thiruvalla', '689101', 19),
(57, 'Vazhuthacaud', '605036', 21),
(58, 'Valayanchirangara', '683556', 15),
(59, 'Kalady', '683574', 15),
(60, 'Allapra', '683556', 15),
(61, 'W.Chelakkulam', '683556', 15),
(62, 'Thiruvambady', '680022', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_contact` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `place_id` int(11) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_photo` varchar(50) NOT NULL,
  `user_vstatus` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_contact`, `user_email`, `user_address`, `place_id`, `user_password`, `user_photo`, `user_vstatus`) VALUES
(1, 'Ananthakrishnan O V', '8136908168', 'ananthan3000@gmail.com', 'Olikal House, Chengara', 6, 'appu12', 'download (2).jpg', 0),
(2, 'Salmanul Fariz', '8136975933', 'salman@gmail.com', 'Address(H)', 6, '1234', 'images.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_adminreg`
--
ALTER TABLE `tbl_adminreg`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_eventorganiser`
--
ALTER TABLE `tbl_eventorganiser`
  ADD PRIMARY KEY (`organiser_id`);

--
-- Indexes for table `tbl_eventtype`
--
ALTER TABLE `tbl_eventtype`
  ADD PRIMARY KEY (`eventtype_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_adminreg`
--
ALTER TABLE `tbl_adminreg`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_eventorganiser`
--
ALTER TABLE `tbl_eventorganiser`
  MODIFY `organiser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_eventtype`
--
ALTER TABLE `tbl_eventtype`
  MODIFY `eventtype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
