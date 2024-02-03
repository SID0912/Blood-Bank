-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 08:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `a_id` int(5) NOT NULL,
  `a_nm` varchar(20) NOT NULL,
  `a_code` int(11) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`a_id`, `a_nm`, `a_code`, `city_id`) VALUES
(1, 'Anandnagar', 380007, 1),
(2, 'chandlodia', 382481, 1),
(11, 'jivraj park', 380051, 1),
(12, 'nava vadaj ', 380013, 1),
(13, 'sarkhej', 380007, 1),
(14, 'Maninagar', 380008, 1),
(15, 'Jodhpur char rasta', 380015, 1),
(16, 'Lal darwaja', 380001, 1),
(17, 'Anand Nagar', 38007, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE `blood_donor` (
  `don_id` int(11) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `don_nm` varchar(100) NOT NULL,
  `don_add` varchar(500) NOT NULL,
  `don_pnum` bigint(15) NOT NULL,
  `don_dob` int(11) NOT NULL,
  `don_weight` int(11) NOT NULL,
  `don_height` int(11) NOT NULL,
  `don_dtl` varchar(500) NOT NULL,
  `b_g_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`don_id`, `blood_type`, `don_nm`, `don_add`, `don_pnum`, `don_dob`, `don_weight`, `don_height`, `don_dtl`, `b_g_id`) VALUES
(4, '20', 'manish', '65 shivanand so maninagar a bad	', 7787453202, 2002, 70, 7, 'i have many times donate blood.', 1),
(6, '17', 'mistry aarati', 'a101 vishvakarma so vejalpur a bad', 7405183724, 2000, 40, 5, 'I cann not donate blood but I started to donate blood', 1),
(9, '18', 'gupta aryan', '450 gaganbihar so. narol a\'bad	', 9426532771, 2001, 55, 6, 'i can donate blood beause i am healthy', 1),
(13, '21', 'rahul dravid', 'b/shivam app near nava vadaj ahmedabad	', 7565345238, 2002, 60, 6, 'I have donate blood every month and i am happy	', 1),
(14, '21', 'Nelson', 'B/9 DEvPark  Society\r\nAhmedabad-38022 ', 99245564, 2001, 60, 7, 'i can donate blood beause i am healthy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blood_group`
--

CREATE TABLE `blood_group` (
  `b_g_id` int(11) NOT NULL,
  `b_g_type` varchar(5) NOT NULL,
  `b_g_desc` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_group`
--

INSERT INTO `blood_group` (`b_g_id`, `b_g_type`, `b_g_desc`) VALUES
(1, 'AB', 'It has neither A or B antigens on red call and It can donate to other AB\'s, but can receive from all others.	'),
(17, 'O+', 'It has  neither A nor B antigens on red cells It can donate red blood cells to anybody It has unvarsal donor '),
(18, 'A', 'It can donate red blood cells to A\'s  and AB\'s'),
(19, 'B', 'It has only the B antiden on red cells and it can donate red  cells B\'s and AB\'s'),
(20, 'O-', 'It has neither A or B antigens on red call and It can donate to other O-\'s, but can receive from O-.	'),
(21, 'A', 'It can donate red blood cells to A\'s and AB\'s	'),
(22, 'B', 'It has only the B antiden on red cells and it can donate red cells B\'s and AB\'s	\r\n'),
(23, 'B', 'It has only the B antiden on red cells and it can donate red cells B\'s and AB\'s	'),
(24, 'B', 'And it Can Donate red Cell B\'s and AB\'s ');

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

CREATE TABLE `blood_request` (
  `req_id` int(11) NOT NULL,
  `req_type` varchar(10) NOT NULL,
  `req_hosp_name` varchar(200) NOT NULL,
  `req_hosp_add` varchar(500) NOT NULL,
  `req_hosp_num` bigint(12) NOT NULL,
  `req_date` date NOT NULL,
  `req_msg` varchar(500) NOT NULL,
  `u_id` varchar(20) NOT NULL,
  `status` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_request`
--

INSERT INTO `blood_request` (`req_id`, `req_type`, `req_hosp_name`, `req_hosp_add`, `req_hosp_num`, `req_date`, `req_msg`, `u_id`, `status`) VALUES
(14, '17', 'mansi hospital	', 'akhabar nagar char rasta a bad	', 26531480, '2022-04-21', 'my sister have thairod.	', 'anuradha', 'Reject'),
(15, '21', 'navjivan hospital	', 'nehrunagar char rasta opp zanshi rani brts a bad	', 26587410, '2021-04-14', 'i m donor but i have donate blood at before one week.	', 'aarati', 'Approve'),
(16, '20', 'laxmi hospital', 'navarga pua char rasta  a bad', 9654324243, '2022-02-09', 'my grand father condition is very weak.	', 'rahul', 'Pending'),
(20, '20', 'Sarita Hospital ', 'Green Park  Ahmedabad-38022', 1800023564, '2022-03-29', 'We Need Blood for operation ', 'Siddhant', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_nm` varchar(20) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_nm`, `s_id`) VALUES
(1, 'Ahmedabad', 1),
(3, 'Surat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_nm` varchar(20) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_msg` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_nm`, `c_email`, `c_msg`) VALUES
(2, 'jagadesh rathod', 'jrathod@gmail.com', 'i have support you for your site online blood.  '),
(3, 'suthar dipak', 'suthar73@gmail.com', 'i  like your web application.i join your system.'),
(4, 'patel santosh', 'santosh1996@gmail.com', 'your web application is very help full.	'),
(5, 'rockey aahuja', 'rockeyaahuja091@gmail.com', 'i wish is that my website adverticement display your website.');

-- --------------------------------------------------------

--
-- Table structure for table `donation_camp`
--

CREATE TABLE `donation_camp` (
  `camp_id` int(11) NOT NULL,
  `camp_nm` varchar(20) NOT NULL,
  `camp_location` varchar(400) NOT NULL,
  `camp_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation_camp`
--

INSERT INTO `donation_camp` (`camp_id`, `camp_nm`, `camp_location`, `camp_date`, `start_time`, `end_time`) VALUES
(7, 'people\'s blood camp	', 'Anand Niketan satelite	', '2022-05-05', '10:15:00', '12:15:00'),
(8, 'Red cross', 'vishvkrama soc. nr ramapir temple	', '2022-05-02', '11:25:00', '01:25:00'),
(9, 'Organize Blood bank	', '3/27 bhagya laxmi app, near bhavasar hostel nava vadaj a,bad	', '2022-05-26', '11:15:00', '01:15:00'),
(10, 'IDONATE Organisation', 'b/245 shiva nagar app, nr jivraj park a,bad	', '2022-04-28', '10:30:00', '12:30:00'),
(11, 'sarita blood camp	', 'sarita hospital green acress prahaladnagar a bad	', '2022-04-07', '02:20:00', '04:20:00'),
(12, 'yuva blood donation	', 'ram leela medaan maninagar	', '2022-05-13', '10:45:00', '01:45:00'),
(13, 'yuva blood donation	', 'ram leela medaan maninagar	', '2022-05-13', '10:45:00', '01:45:00'),
(14, 'Ahmedabad Donation C', 'Ram Leela Medaan \r\nManinagar', '2022-02-28', '05:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_nm` varchar(20) NOT NULL,
  `f_desc` varchar(250) NOT NULL,
  `u_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_nm`, `f_desc`, `u_id`) VALUES
(1, 'Appreciation', 'online blood bank is very useful for people	', 'aarati'),
(2, 'Appreciation', 'thank you for a give me a blood in emergency.	', 'anuradha'),
(6, 'appreciation', 'your system is super.', 'anuradha'),
(14, 'suggeestion', 'Awesome services', 'pooja'),
(15, 'Appreciation', 'amazing ', 'manish'),
(16, 'suggeestion', 'average', 'anuradha'),
(17, 'suggeestion', 'Average', 'Siddhant');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL,
  `g_path` varchar(20) NOT NULL,
  `g_desc` varchar(300) NOT NULL,
  `fimg` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `g_path`, `g_desc`, `fimg`) VALUES
(2, 'Blood Manage ', 'this image is abouted how to secure blood in bank.', 'upload/images (2).jpg'),
(3, 'Blood Group Type', 'its describes a blood group type define A,B,AB,O.	', 'upload/images (4).jpg'),
(5, 'Blood 350ml', 'user can donote the blood 350ml only	', 'upload/images (13).jpg'),
(6, 'Blood  Store in Bag', 'this is the blood in plastic bag store.	', 'upload/images (15).jpg'),
(7, 'Campaign Bus', 'It has all time to ready for help full	', 'upload/images (5).jpg'),
(10, 'WOMAN', 'This Woman is Happily donate blood.', 'upload/download (8).jpg'),
(11, 'Raj patel', 'This Man is happily Donate Blood ', 'upload/download(2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `noti_id` int(11) NOT NULL,
  `noti_name` varchar(30) NOT NULL,
  `noti_time` time NOT NULL,
  `noti_desc` varchar(300) NOT NULL,
  `noti_date` date NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`noti_id`, `noti_name`, `noti_time`, `noti_desc`, `noti_date`, `u_id`) VALUES
(16, 'donor', '02:00:00', 'Want a given a blood.	', '2017-03-14', 1),
(17, 'Request for blood ', '02:30:00', 'It has request to a blood give urgently of user', '2017-03-11', 2),
(18, 'prathama blood center ', '12:00:00', 'This hospital request for blood AB+.', '2017-05-05', 1),
(19, 'donate blood', '02:00:00', 'Please you send your donation camp address.', '2017-05-25', 15),
(20, 'donation camp	', '11:00:00', 'Oraganizing donation camp	', '2017-04-19', 18),
(201, 'prathama blood center ', '12:00:00', 'This hospital request for blood AB+.', '2017-05-05', 1),
(202, 'Donation Camps', '11:00:00', 'Organize The Blood Camp  ', '2022-03-16', 2);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `s_id` int(11) NOT NULL,
  `state_nm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`s_id`, `state_nm`) VALUES
(1, 'Gujarat'),
(2, 'Maharashtra'),
(3, 'Rajasthan ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_fnm` varchar(10) NOT NULL,
  `u_mnm` varchar(10) NOT NULL,
  `u_lnm` varchar(10) NOT NULL,
  `u_dob` date NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_add` varchar(300) NOT NULL,
  `u_contact` bigint(12) NOT NULL,
  `u_role` varchar(20) NOT NULL,
  `u_doner` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_pwd`, `u_fnm`, `u_mnm`, `u_lnm`, `u_dob`, `u_email`, `u_add`, `u_contact`, `u_role`, `u_doner`) VALUES
(1, '123456', 'Siddhant', 'Gopal', 'Gayakwad', '2001-12-18', 'SidU@gmail.com', 'B/9 RamDev Park Society,\r\nAhmedabad -380022', 9924510179, 'Admin', 'N'),
(2, '123456', 'Nelson', 'Jay', 'Christian', '1999-07-09', 'NelsonU@gmail.com', 'B/9 Shivam Society near nava Vadaj,Ahmedabad-380015', 7565345238, 'Customer', 'Y'),
(3, '123456', 'Asif', 'Raza ', 'Khan', '2001-09-10', 'AsifU@gmail.com', 'A/101 vishvakarma  Ahmedabad-380007', 898075727, 'Customer', 'Y'),
(4, '123456', 'Mushaa', 'Iqba Bhai', 'Nagori', '2001-03-19', 'MushaaU@gmail.com', '3/27 Bhagya Laxami,Nr,bhavasr hostel nava vadaj Ahmedabad-380422', 7043621975, 'Customer', 'Y'),
(5, '123456', 'Moin', 'Raj', 'Shakhi', '2001-03-19', 'MoinU@gmail.com', '450/B Gaganbihar so. narol Ahmedabad-380005', 9425432117, 'Customer', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `van_schedule`
--

CREATE TABLE `van_schedule` (
  `van_id` int(11) NOT NULL,
  `van_date` date NOT NULL,
  `van_add` varchar(400) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `area_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `van_schedule`
--

INSERT INTO `van_schedule` (`van_id`, `van_date`, `van_add`, `start_time`, `end_time`, `area_id`) VALUES
(14, '2022-04-03', 'Anand Niketan shetellite,Near A1School.', '10:00:00', '02:00:00', 1),
(15, '2022-05-23', 'vishvkrama soc. nr ramapir temple	', '02:00:00', '05:00:00', 2),
(17, '2022-05-04', 'chintan hospital nr jivraj char rashta', '10:45:00', '02:00:00', 11),
(18, '2022-04-28', '3/27 bhagya laxmi app, near bhavasar hostel nava vadaj a,bad	', '03:00:00', '05:00:00', 1),
(19, '2022-04-15', '245 saraswati society nr 32 ring road chandlodia a,bad', '11:30:00', '01:30:00', 2),
(20, '2022-03-31', 'Ram Leela madaan\r\nManinagar ', '11:00:00', '23:00:00', 14),
(21, '2022-03-31', 'Ram Mandir \r\nManinagar', '11:00:00', '22:43:00', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD PRIMARY KEY (`don_id`);

--
-- Indexes for table `blood_group`
--
ALTER TABLE `blood_group`
  ADD PRIMARY KEY (`b_g_id`);

--
-- Indexes for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `donation_camp`
--
ALTER TABLE `donation_camp`
  ADD PRIMARY KEY (`camp_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`noti_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `van_schedule`
--
ALTER TABLE `van_schedule`
  ADD PRIMARY KEY (`van_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `a_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blood_donor`
--
ALTER TABLE `blood_donor`
  MODIFY `don_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blood_group`
--
ALTER TABLE `blood_group`
  MODIFY `b_g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `blood_request`
--
ALTER TABLE `blood_request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donation_camp`
--
ALTER TABLE `donation_camp`
  MODIFY `camp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `noti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `van_schedule`
--
ALTER TABLE `van_schedule`
  MODIFY `van_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
