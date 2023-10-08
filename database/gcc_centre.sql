-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 03:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gcc_centre`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(2, 'admin2', 'admin2@gmail.com', 'admin2', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `specialty` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `nrc` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'doctor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `qualification`, `specialty`, `dob`, `gender`, `nrc`, `image`, `phone`, `address`, `email`, `password`, `confirm`, `role`) VALUES
(1, 'Dr. Thandar', 'M.B.,B.S, M.Med.Sc', 'Cardiologist', '03/14/1987', 'female', '12/La Ma Na (N) 234654', '6514d81d42ed1.jpg', '09-5464678', 'No(56), Kan Str, (6)Qt, Hlaing Tsp, Yangon', 'drthandar@gmail.com', 'drthandar', 'drthandar', 'doctor'),
(2, 'Dr. Thae Thae', 'M.B.,B.S, M.Med.Sc', 'General Physician', '06/12/1986', 'female', '14/Ka Ma Na (N) 6464535', '6514dacbc3808.jpg', '09-654646487', 'No(10), Hnin Si Str, (9)Qt, Dagon Tsp, Yangon', 'drthaethae@gmail.com', 'drthaethae', 'drthaethae', 'doctor'),
(3, 'Dr. Kyaw Swar', 'M.B.,B.S, M.Med.Sc', 'Psychiatrist', '06/22/1985', 'male', '12/La Ma Na (N) 4648979', '6514dadba2f43.jpg', '09-6549789', 'No(6), Lan Thit Str, (6)Qtr, Bahan Tsp, Yangon', 'drkyawswar@gmail.com', 'drkyawswar', 'drkyawswar', 'doctor'),
(4, 'Dr. Aung Phyo', 'M.B.,B.S, M.Med.Sc, M.R.C.P, F.R.C.P, F.As.C.C', 'General Physician', '06/15/1982', 'male', '14/Ta Ka Na (N) 5654345', '6514da89abf32.jpg', '09-464764646', 'No(16), Baho Str, (9)Qt, Hlaing Tsp, Yangon', 'doctor@gmail.com', 'doctor', 'doctor', 'doctor'),
(5, 'Dr. Sandar Win', 'M.B.,B.S, M.Med.Sc', 'Gastroenterologist', '07/09/1986', 'female', '12/La Ma Na (N) 566464', '6514dbafc4c01.jpg', '09-564674664', 'No(3), Damar Yone Str, (8)Qt, Dagon Tsp, Yangon', 'drsandarwin@gmail.com', 'drsandarwin', 'drsandarwin', 'doctor'),
(6, 'Dr. Aye Aye Maw', 'M.B.,B.S, M.Med.Sc, M.R.C.P', 'Hepatologist', '09/10/1992', 'female', '12/La Ma Na (N) 654646', '6514e27bded94.jpg', '09-4646567', 'No(6), Hnin Si Str, (9)Qt, Hlaing Tsp, Yangon', 'drayeayemaw@gmail.com', 'drayeayemaw', 'drayeayemaw', 'doctor'),
(7, 'Dr. Min Thu', 'M.B.,B.S, M.Med.Sc ', 'Orthopaedic Surgeon', '06/10/1986', 'male', '14/Ka Ma Ta (N) 2165464', '6514e3451fa5d.jpg', '09-46546546', 'No(3), Lan Thit Str, (5)Qt, Dagon Tsp, Yangon', 'drminthu@gmail.com', 'drminthu', 'drminthu', 'doctor'),
(8, 'Dr. Aye Aye Swe', 'M.B.,B.S, M.Med.Sc', 'Nephrologist', '10/13/1983', 'female', '12/La Ma Na (N) 465464', '6514e3e06d68c.jpg', '09-65464646', 'No(66), Taw Win St, (5)Qt, Hlaing Tsp, Yangon', 'drayeayeswe@gmail.com', 'drayeayeswe', 'drayeayeswe', 'doctor'),
(9, 'Dr. Tun Tun', 'M.B.,B.S, M.Med.Sc', 'Chest Physician', '10/17/1985', 'male', '12/La Ka Ma (N) 2643434', '6514e466dc03d.jpg', '09-46464644', 'No(36), Kann Nar Str, (6)Qt, Hlaing Tsp, Yangon', 'drtuntun@gmail.com', 'drtuntun', 'drtuntun', 'doctor'),
(10, 'Dr. Si Thu', 'M.B.,B.S, M.Med.Sc, M.R.C.P, F.R.C.P,', 'General Physician', '08/15/1986', 'male', '14/Sa Ma Na (N) 6546464', '6514e521a1ca6.jpg', '09-564654654', 'No(16), Baho Str, (6)Qt, Hlaing Tsp, Yangon', 'drsithu@gmail.com', 'drsithu', 'drsithu', 'doctor'),
(11, 'Dr. Nan Thu Zar', 'M.B.,B.S, M.Med.Sc', 'Rehabilitation', '06/08/1983', 'female', '12/La Ma Na (N) 5464645', '6514e5b1519ed.jpg', '09-654646499', 'No(69), Hnin Si Str, (5)Qt, Tar Mwe Tsp, Yangon', 'drnanthuzar@gmail.com', 'drnanthuzar', 'drnanthuzar', 'doctor'),
(12, 'Dr. Aye Aye Thwe', 'M.B.,B.S, M.Med.Sc', 'General Physician', '08/04/1982', 'female', '12/La Ma Na (N) 654654', '6514e68eb7e06.jpg', '09-65465464', 'No(69), Inya Str, (5)Qt, Hlaing Tsp, Yangon', 'drayeayethwe@gmail.com', 'drayeayethwe', 'drayeayethwe', 'doctor'),
(13, 'Dr. Su Mon', 'M.B.,B.S, M.Med.Sc', 'Rehabilitation', '08/08/1985', 'female', '12/La Ma Na (N) 654676', '6514e9bc3fea7.jpg', '09-65464688', 'No(69), Than St, (8)Qt, Hlaing Tsp, Yangon', 'drsumon@gmail.com', 'drsumon', 'drsumon', 'doctor'),
(14, 'Dr. Aye Aye Myint', 'M.B.,B.S, M.Med.Sc', 'Rehabilitation', '07/09/1985', 'female', '12/La Ma Na (N) 564646', '6514ecb6a8efe.jpg', '09-65464698', 'No(69), Kan St, (6)Qt, Tarmwe Tsp, Yangon', 'drayeayemyint@gmail.com', 'drayeayemyint', 'drayeayemyint', 'doctor'),
(15, 'Dr. Kyaw Aye', 'M.B.,B.S, M.Med.Sc', 'General Physician', '06/18/1987', 'male', '12/Ta Sa Na (N)324654', '6514ee0b384dc.jpg', '09-65464646', 'No(65), :Lan Thit St, (5)Qt, Hlaing Tsp, Yangon', 'drkyawaye@gmail.com', 'drkyawaye', 'drkyawaye', 'doctor'),
(16, 'Dr. Ei Phyo', 'M.B.,B.S, M.Med.Sc', 'Rehabilitation', '07/18/1985', 'female', '12/La Ma Na (N) 654646', '6514ee9de80ae.jpg', '09-65465767', 'No(6), Thit Sar St, (9)Qt, Tar Mwe Tsp, Yangon', 'dreiphyo@gmail.com', 'dreiphyo', 'dreiphyo', 'doctor'),
(17, 'Dr. Thu Zar Myint', 'M.B.,B.S, M.Med.Sc', 'Rehabilitation', '08/15/1986', 'female', '14/Ka Ta Na (N) 32646', '6514ef5422c2b.jpg', '09-46464648', 'No(2), Palae St, (6)Qt, Dagon Tsp, Yangon', 'drthuzarmyint@gmail.com', 'drthuzarmyint', 'drthuzarmyint', 'doctor'),
(18, 'Dr. Myo Myo', 'M.B.,B.S, M.Med.Sc', 'General Physician', '07/16/1986', 'female', '12/La Ma Na (N) 655464', '6514efc381f6b.jpg', '09-5646576', 'No(69), Than St, (5)Qt, Hlaing Tsp, Yangon', 'drmyomyo@gmail.com', 'drmyomyo', 'drmyomyo', 'doctor'),
(19, 'Dr. Aye Sandar', 'M.B.,B.S, M.Med.Sc', 'Orthopaedic Surgeon', '08/02/1986', 'female', '15/Da Ya Na (N) 246546', '6514f087497c7.jpg', '09-6546464', 'No(69), Kan Nar St, (5)Qt, Dagon Tsp, Yangon', 'drayesandar@gmail.com', 'drayesandar', 'drayesandar', 'doctor'),
(20, 'Dr. Su Su Twe', 'M.B.,B.S, M.Med.Sc', 'Rehabilitation', '08/11/1985', 'female', '12/La Ma Na (N) 665464', '6514f0fb741be.jpg', '09-535434', 'No(19), Baho St, (5)Qt, Ta Mai Tsp, Yangon', 'drsusutwe@gmai.com', 'drsusutwe', 'drsusutwe', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `nrc` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'nurse'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `name`, `dob`, `gender`, `nrc`, `image`, `qualification`, `phone`, `address`, `email`, `password`, `confirm`, `role`) VALUES
(1, 'Ma Su Su', '04/09/1992', 'female', '12/La Ma Na (N) 235698', '6513f71f3655e.jpg', 'B.S.N (YGN)', '09-442645342', 'No(1), Than St, Hlaing Tsp, (2)Qt, Yangon', 'nurse@gmail.com', 'nurse', 'nurse', 'nurse'),
(2, 'Ma Aye Thandar', '02/10/1992', 'female', '2/Ta Ka Na (N) 1564755', '65142303dfc06.jpg', 'B.S.N (YGN)', '09-56768767', 'No(10), Kan St, (5)Qt, Hlaing Tsp, Yangon', 'ayethandar@gmail.com', 'ayethandar', 'ayethandar', 'nurse'),
(3, 'Ma Thida Aung', '12/08/1992', 'female', '9/Sa Ma Na (N) 4645651', '65142386bc620.jpg', 'M.S.N (YGN)', '09-65464646', 'No(3), Thuka St, (5)Qt, Hlaing Tsp, Yangon', 'thidaaung@gmail.com', 'thidaaung', 'thidaaung', 'nurse'),
(4, 'Ma Aye Aye Myint', '01/14/1992', 'female', '13/Sa Ma Na (N) 5324523', '6514b4d63ff2f.jpg', 'B.S.N (YGN)', '09-363642232', 'No(6), Than St, (9)Qt, Dagon Tsp, Yangon', 'ayeayemyint@gmail.com', 'ayeayemyint', 'ayeayemyint', 'nurse'),
(5, 'Ma Su Thet Hnin', '11/18/1992', 'female', '12/La Ma Na (N) 2623652', '6514b54631ef3.jpg', 'B.S.N (YGN)', '09-62652524', 'No(19), Bayar Str, (3)Qt, Hlaing Tsp, Yangon', 'suthethnin@gmail.com', 'suthethnin', 'suthethnin', 'nurse'),
(6, 'Ma Swe Swe Myint', '08/13/1992', 'female', '13/La Ta Na (N) 3225153', '6514b5e7378d6.jpg', 'B.S.N (YGN)', '09-36236226', 'No(14), Tadar Str, (3)Qt, Dagon Township, Yangon', 'sweswemyint@gmail.com', 'sweswemyint', 'sweswemyint', 'nurse'),
(7, 'Ma Thandar', '02/09/1993', 'female', '5/La Ka Na (N) 426233', '6514b67029144.jpg', 'B.S.N (YGN)', '09-7643633', 'No(34), Pagoda Str, (6)Qt, Bahan Township, Ygn', 'thandar@gmail.com', 'thandar', 'thandar', 'nurse'),
(8, 'Ma Thet Mon', '06/16/1992', 'female', '12/La Ma Na (N) 3452535', '6514b6d4b69ea.jpg', 'M.S.N (YGN)', '09-62622654', 'No(2), Kan Str, (4)Qt, Hlaing Township, Yangon', 'thetmon@gmail.com', 'thetmon', 'thetmon', 'nurse'),
(9, 'Ma Hnin Hnin', '05/14/1992', 'female', '13/Ta Ma Na (N) 89979098', '6514b79be8f49.jpg', 'B.S.N (YGN)', '09-43255352', 'No(10), Hnin Si Street, (7)Qt, Hlaing Tsp, Yangon', 'hninhnin@gmail.com', 'hninhnin', 'hninhnin', 'nurse'),
(10, 'Ma Cho Cho', '04/13/1992', 'female', '12/Sa Ma Na (N) 35252525', '6514b82ad342a.jpg', 'B.S.N (YGN)', '09-57364344', 'No(3), Baho Str, (5)Qt, Hlaing Tsp, Yangon', 'chocho@gmail.com', 'chocho', 'chocho', 'nurse'),
(11, 'Ma Thri Aung', '11/26/1992', 'female', '13/Ta Ma Na (N) 4525112', '6514b8be67d0b.jpg', 'B.S.N (YGN)', '09-453636456', 'No(2), Thit Sar Str, (2)Qt, Dagon Tsp, Yangon', 'thriaung@gmail.com', 'thriaung', 'thriaung', 'nurse'),
(12, 'Ma Cho Thet', '07/18/1992', 'female', '6/Pa Ma Na (N) 36262363', '6514b98404774.jpg', 'B.S.N (YGN)', '09-5636633', 'No(17), Tawwin Str, (9)Qt, Bahan Tsp, Yangon', 'chothet@gmail.com', 'chothet', 'chothet', 'nurse'),
(13, 'Ma Aye Aye Swe', '01/08/1992', 'female', '12/Ka Ma Na (N) 3422253', '6514b9fdbcb53.jpg', 'B.S.N (YGN)', '09-63263252', 'No(17), Lan Thit Str, (3)Qt, Hlaing Tsp, Yangon', 'ayeayeswe@gmail.com', 'ayeayeswe', 'ayeayeswe', 'nurse'),
(14, 'Ma Thae Su', '08/10/1992', 'female', '12/La Ma Na (N) 3623433', '6514ba67077b9.jpg', 'B.S.N (YGN)', '09-342335343', 'No(1), Kyaung Str, (8)Qt, Dagon, Tsp, Yangon', 'thaesu@gmail.com', 'thaesu', 'thaesu', 'nurse'),
(15, 'Ma Su thet Aung', '06/16/1992', 'female', '12/La Ma Na (N) 5242524', '6514bad9c6e01.jpg', 'B.S.N (YGN)', '09-62334223', 'No(10), Pan Hliaing Str, (5)Qt, Hlaing Tsp, Yangon', 'suthetaung@gmail.com', 'suthetaung', 'suthetaung', 'nurse'),
(16, 'Ma Thae Thae', '07/18/1992', 'female', '2/Ta Ma Na (N) 5242422', '6514bb7f1cb7a.jpg', 'B.S.N (YGN)', '09-34523542', 'No(12), Tha Mai Str, (4)Qt, Hlaing Tsp, Yangon', 'thaethae@gmail.com', 'thaethae', 'thaethae', 'nurse'),
(17, 'Ma Soe Soe', '07/17/1993', 'female', '12/La Ma Na (N) 4525415', '6514bc3b1df93.jpg', 'B.S.N (YGN)', '09-65326354', 'No(12), Palae Str, (5)Qt, Tar Mwae Tsp, Yangon', 'soesoe@gmail.com', 'soesoe', 'soesoe', 'nurse'),
(18, 'Ma Aye Aye Soe', '08/18/1994', 'female', '12/La Ma Na (N) 2525253', '6514bcbc83413.jpg', 'B.S.N (YGN)', '09-54352523', 'No(11), Than Str, (8)Qt, Hlaing Tsp, Yangon', 'ayeayesoe@gmail.com', 'ayeayesoe', 'ayeayesoe', 'nurse'),
(19, 'Ma Shin Thet', '12/20/1994', 'female', '12/Pa Ma Na (N) 553141', '6514bd4ee863f.jpg', 'M.S.N (YGN)', '09-457434534', 'No(5), Kan Str, (6)Qt, Dagon Tsp, Yangon', 'shinthet@gmail.com', 'shinthet', 'shinthet', 'nurse'),
(20, 'Ma Hnin Pyae', '04/03/1995', 'female', '13/La Pa Na (N) 4525252', '6514be1379b2f.jpg', 'B.S.N (YGN)', '09-252525265', 'No(13), Than Str, (5)Qt, Hlaing Tsp, Yangon', 'hninpyae@gmail.com', 'hninpyae', 'hninpyae', 'nurse'),
(21, 'Ma Pyu Pyu Htwe', '02/02/1994', 'female', '12/La Ma Na (N) 5252224', '6514be7a5fe67.jpg', 'B.S.N (YGN)', '09-74635334', 'No(23), Than Str, (6)Qt, Hlaing Tsp, Yangon', 'phyuphyuhtwe@gmail.com', 'phyuphyuhtwe', 'phyuphyuhtwe', 'nurse'),
(22, 'Ma Thet Thet', '12/13/1994', 'female', '12/La Ma Na (N) 5151413', '6514c4e5f2c54.jpg', 'B.S.N (YGN)', '09-65636333', 'No(41), Than Str, (6)Qt, Hlaing Tsp, Yangon', 'thetthet@gmail.com', 'thetthet', 'thetthet', 'nurse'),
(23, 'Ma Shwe Zin', '01/21/1995', 'female', '2/Ka Ma Na (N) 436363', '6514c58f249ef.jpg', 'B.S.N (YGN)', '09-35435353', 'No(13), Kan Str, (6)Qt, Hlaing Tsp, Yangon', 'shwezin@gmail.com', 'shwezin', 'shwezin', 'nurse'),
(24, 'Ma Su Pyae', '08/09/1994', 'female', '12/La Ma Na (N) 5435533', '6514c640018b1.jpg', 'B.S.N (YGN)', '09-45553522', 'No(10), Than Str, (7)Qt, Hlaing Tsp, Yangon', 'supyae@gmail.com', 'supyae', 'supyae', 'nurse'),
(25, 'Ma Sandar', '07/27/1993', 'female', '12/La Ta Na (N) 53252254', '6514c6d410dac.jpg', 'B.S.N (YGN)', '09-25245252', 'No(11), Kan Str, (5)Qt, Hlaing Tsp, Yangon', 'sandar@gmail.com', 'sandar', 'sandar', 'nurse'),
(26, 'Ma Aye Aye Twae', '08/08/1995', 'female', '12/La Ma Na (N) 3466363', '6514c74e1fd17.jpg', 'M.S.N (YGN)', '09-52524254', 'No(13), Thit Sar Str, (5)Qt, Dagon Tsp, Yangon', 'ayeayetwae@gmail.com', 'ayeayetwae', 'ayeayetwae', 'nurse'),
(27, 'Ma Wai Wai Aung', '08/09/1995', 'female', '12/La Ma Na (N) 5235425', '6514c7e152afc.jpg', 'B.S.N (YGN)', '09-54255252', 'No(2), Than Str, (8)Qt, Hlaing Tsp, Yangon', 'waiwaiaung@gmail.com', 'waiwaiaung', 'waiwaiaung', 'nurse'),
(28, 'Ma Mae Than', '08/05/1992', 'female', '13/Ha Ma Na (N) 3424234', '6514c85e6c485.jpg', 'M.S.N (YGN)', '09-2421423', 'No(55), Hnin Si Str, Tar Mwe Tsp, Yangon', 'maethan@gmail.com', 'maethan', 'maethan', 'nurse'),
(29, 'Ma Su Thazin', '07/06/1992', 'female', '12/La Ma Na (N) 5425242', '6514c8f824591.jpg', 'B.S.N (YGN)', '09-25776585', 'No(32), Baho Street, (7)Qt, Hlaing Tsp, Yangon', 'suthazin@gmail.com', 'suthazin', 'suthazin', 'nurse'),
(30, 'Ma Thandar Win', '02/24/1995', 'female', '13/Ta Ma Na (N) 54524342', '6514c98089c4f.jpg', 'M.S.N (YGN)', '09-34534533', 'No(3), Than Str, (7)Qt, Hlaing Tsp, Yangon', 'thandarwin@gmail.com', 'thandarwin', 'thandarwin', 'nurse');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`id`, `name`) VALUES
(1, 'M.B.,B.S, M.Med.Sc'),
(2, 'M.B.,B.S, M.Med.Sc, M.R.C.P, F.R.C.P, F.As.C.C'),
(3, 'M.B.,B.S, M.Med.Sc, M.R.C.P'),
(4, 'M.B.,B.S, M.Med.Sc, M.R.C.P, F.R.C.P,');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `specialty` varchar(100) NOT NULL,
  `day1` varchar(100) NOT NULL,
  `start1` varchar(100) NOT NULL,
  `end1` varchar(100) NOT NULL,
  `day2` varchar(100) NOT NULL,
  `start2` varchar(100) NOT NULL,
  `end2` varchar(100) NOT NULL,
  `day3` varchar(100) NOT NULL,
  `start3` varchar(100) NOT NULL,
  `end3` varchar(100) NOT NULL,
  `day4` varchar(100) NOT NULL,
  `start4` varchar(100) NOT NULL,
  `end4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `doctor_id`, `name`, `qualification`, `specialty`, `day1`, `start1`, `end1`, `day2`, `start2`, `end2`, `day3`, `start3`, `end3`, `day4`, `start4`, `end4`) VALUES
(1, 1, 'Dr. Thandar', 'M.B.,B.S, M.Med.Sc', 'Cardiologist', 'Mon', '10 AM', '12 PM', 'Wed', '1 PM', '3 PM', 'Fri', '10 AM', '12 PM', '-', '-', '-'),
(2, 2, 'Dr. Thae Thae', 'M.B.,B.S, M.Med.Sc', 'General Physician', 'Wed', '10 AM', '12 PM', 'Fri', '1 PM', '3 PM', 'Sat', '9 AM', '11 AM', '-', '-', '-'),
(3, 3, 'Dr. Kyaw Swar', 'M.B.,B.S, M.Med.Sc', 'Psychiatrist', 'Mon', '11 AM', '1 PM', 'Wed', '1 PM', '3 PM', 'Fri', '3 PM', '5 PM', 'Sun', '4 PM', '6 PM'),
(4, 4, 'Dr. Aung Phyo', 'M.B.,B.S, M.Med.Sc, M.R.C.P, F.R.C.P, F.As.C.C', 'General Physician', 'Mon', '9 AM', '11 AM', 'Wed', '12 PM', '2 PM', 'Fri', '2 PM', '4 PM', '-', '-', '-'),
(5, 5, 'Dr. Sandar Win', 'M.B.,B.S, M.Med.Sc', 'Gastroenterologist', 'Mon', '1 PM', '3 PM', 'Fri', '12 PM', '2 PM', 'Sun', '10 AM', '12 PM', '-', '-', '-'),
(6, 6, 'Dr. Aye Aye Maw', 'M.B.,B.S, M.Med.Sc, M.R.C.P', 'Hepatologist', 'Tue', '10 AM', '12 PM', 'Thu', '1 PM', '3 PM', 'Fri', '9 AM', '11 AM', '-', '-', '-'),
(7, 7, 'Dr. Min Thu', 'M.B.,B.S, M.Med.Sc', 'Orthopaedic Surgeon', 'Mon', '1 PM', '3 PM', 'Fri', '11 AM', '1 PM', '-', '-', '-', '-', '-', '-'),
(8, 8, 'Dr. Aye Aye Swe', 'M.B.,B.S, M.Med.Sc', 'Nephrologist', 'Mon', '2 PM', '4 PM', 'Wed', '10 AM', '12 PM', 'Fri', '4 PM', '6 PM', '-', '-', '-'),
(9, 9, 'Dr. Tun Tun', 'M.B.,B.S, M.Med.Sc', 'Chest Physician', 'Thu', '9 AM', '11 AM', 'Sat', '1 PM', '3 PM', 'Sun', '11 AM', '1 PM', '-', '-', '-'),
(10, 10, 'Dr. Si Thu', 'M.B.,B.S, M.Med.Sc, M.R.C.P, F.R.C.P,', 'General Physician', 'Mon', '9 AM', '11 AM', 'Wed', '1 PM', '3 PM', 'Fri', '10 AM', '12 PM', 'Sun', '4 PM', '6 PM'),
(11, 11, 'Dr. Nan Thu Zar', 'M.B.,B.S, M.Med.Sc', 'Rehabilitation', 'Tue', '11 AM', '1 PM', 'Fri', '9 AM', '12 PM', '-', '-', '-', '-', '-', '-'),
(12, 12, 'Dr. Aye Aye Thwe', 'M.B.,B.S, M.Med.Sc', 'General Physician', 'Wed', '2 PM', '4 PM', 'Fri', '1 PM', '3 PM', 'Sat', '4 PM', '6 PM', '-', '-', '-'),
(13, 13, 'Dr. Su Mon', 'M.B.,B.S, M.Med.Sc', 'Rehabilitation', 'Mon', '10 AM', '12 PM', 'Thu', '3 PM', '5 PM', 'Sat', '2 PM', '4 PM', 'Sun', '4 PM', '6 PM'),
(14, 14, 'Dr. Aye Aye Myint', 'M.B.,B.S, M.Med.Sc', 'Rehabilitation', 'Mon', '12 PM', '1 PM', 'Wed', '2 PM', '4 PM', '-', '-', '-', '-', '-', '-'),
(15, 15, 'Dr. Kyaw Aye', 'M.B.,B.S, M.Med.Sc', 'General Physician', 'Mon', '10 AM', '12 PM', 'Wed', '1 PM', '3 PM', 'Sat', '4 PM', '6 PM', '-', '-', '-'),
(16, 16, 'Dr. Ei Phyo', 'M.B.,B.S, M.Med.Sc', 'Rehabilitation', 'Tue', '10 AM', '12 PM', 'Wed', '1 PM', '3 PM', '-', '-', '-', '-', '-', '-'),
(17, 17, 'Dr. Thu Zar Myint', 'M.B.,B.S, M.Med.Sc', 'Rehabilitation', 'Mon', '9 AM', '11 AM', 'Tue', '1 PM', '3 PM', 'Fri', '2 PM', '4 PM', 'Sun', '10 AM', '12 PM'),
(18, 18, 'Dr. Myo Myo', 'M.B.,B.S, M.Med.Sc', 'General Physician', 'Tue', '11 AM', '1 PM', 'Fri', '1 PM', '3 PM', '-', '-', '-', '-', '-', '-'),
(19, 19, 'Dr. Aye Sandar', 'M.B.,B.S, M.Med.Sc', 'Orthopaedic Surgeon', 'Mon', '1 PM', '3 PM', 'Sat', '12 PM', '1 PM', '-', '-', '-', '-', '-', '-'),
(20, 20, 'Dr. Su Su Twe', 'M.B.,B.S, M.Med.Sc', 'Rehabilitation', 'Mon', '11 AM', '12 PM', 'Fri', '3 PM', '5 PM', 'Sun', '9 AM', '11 AM', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `senior`
--

CREATE TABLE `senior` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `nrc` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `senior`
--

INSERT INTO `senior` (`id`, `name`, `dob`, `gender`, `nrc`, `image`, `phone`, `address`, `email`) VALUES
(1, 'U Mya', '07/15/1943', 'male', '12/La Ma Na (N)123456', '6512ed91c0d77.jpg', '09-442945342', 'No(5), Than Street, (3)Quarter, Hlaing Township, Yangon', 'umya@gmail.com'),
(2, 'U Kyaw Swar', '02/08/1944', 'male', '12/Na Ma Ta (N) 0567857', '6512f1b1d95d3.jpg', '09-412655342', 'No(5), Ma Yan Myaing Street, (7) Quarter, Hlaing Township, Yangon', 'kyawswar@gmail.com'),
(3, 'U Tun Kyaw', '08/20/1945', 'male', '9/Ma Ka Ta (N)6626765', '6512ee625f2f8.jpg', '01-707005', 'No(15), Shwe Sa Pal Street, (9)Quarter, South Dagon Township, Yangon', 'tunkyaw@gmail.com'),
(4, 'U Hla Shwe', '06/03/1946', 'male', '8/Ta Ma Na (N)252575', '6512ef0e0b000.jpg', '09-51513534', 'No(10), Tha Yat Myaing Street, (13)Quarter, Sanchaung Township, Yangon', 'hlashwe@gmail.com'),
(5, 'U Tun Aung', '06/20/1955', 'male', '7/La Ma Ga (N) 5234522', '6512efa23559b.jpg', '09-4426453342', 'No(99), Si Pin Street, (8)Quarter, Dagon Township, Yangon', 'tunaung@gmail.com'),
(6, 'Daw Su Su', '08/09/1952', 'female', '7/La Sa Na (N) 4226262', '6512f0811f5fa.jpg', '09-14145647', 'No(33), Baho Street, (1)Quarter, Hlaing Township, Yangon', 'susu@gmail.com'),
(7, 'Daw Khin Than', '02/02/1955', 'female', '10/Ka Ma Na (N) 6436227', '6512f1395d1e0.jpg', '01-5255151', 'No(2), Zay Street, (4)Quarter, Shwe Pyi Thar Township, Yangon', 'khinthan@gmail.com'),
(8, 'Daw Nyo Nyo', '07/06/1965', 'female', '11/Ka Pa Na (N) 5235534', '6512f299edde7.jpg', '09-2525343', 'No(3), Than Sein Street, (2)Quarter, South Dagon Township, Yangon', 'nyonyo@gmail.com'),
(9, 'Daw Hla Thaung', '04/09/1946', 'female', '12/La Ma Na (N) 3645242', '6512f353aee8c.jpg', '09-0606873', 'No(15), Pagoda Street, (6)Quarter, Hlaing Township, Yangon', 'hlathaung@gmail.com'),
(10, 'U Myint Swe', '11/24/1949', 'male', '13/Pa Ma Na (N) 515411', '6512f59f0f438.jpg', '01-353423', 'No(11), Kan Thar Yar Street, (7)Quarter, Hlaing Township, Yangon', 'myintswe@gmail.com'),
(11, 'U Maung Maung', '09/06/1955', 'male', '12/La Sa Na (N)345324', '6512f687a64c8.jpg', '09-77845753', 'No(1), Than Thu Mar Street, (8) Quarter, Hlaing Township, Yangon', 'maungmaung@gmail.com'),
(12, 'U Yae Kyaw', '03/08/1948', 'male', '2/Sa Ma Na (N) 534533', '6512f911ce7cc.jpg', '09-15153534', 'No(4), Gamone Street, (6)Quarter, Thar Kay Ta Township, Yangon', 'yaekyaw@gmail.com'),
(13, 'U Ba Kyaw', '12/07/1942', 'male', '11/La Ta Na (N) 636435', '6512f9e7b43aa.jpg', '09-3643643', 'No(255), Moe Kaung Street, (9)Quarter, Tar Mwe Township, Yangon', 'bakyaw@gmail.com'),
(14, 'U Soe Aung', '01/13/1945', 'male', '2/Sa Da Na (N) 747474', '6512fb0b94d62.jpg', '09-5377363', 'No(5), Than Lwin Street, (5)Quarter, Ma Yan Gone Township, Yangon', 'soeaung@gmail.com'),
(15, 'U Hla Soe', '01/05/1960', 'male', '14/Pa Ma Na (N)34636363', '6512fc3801292.jpg', '09-8568742', 'No(5), Yar Zar Street,(5)Quarter, Hlaing Township, Yangon', 'hlasoe@gmail.com'),
(16, 'Daw Hla Nu', '06/08/1942', 'female', '3/Ta Ga Na (N) 5215125', '6512fec4a8c30.jpg', '09-64624572', 'No(16), Baho Street, (4)Quarter, Hlaing Township, Yangon', 'hlanu@gmail.com'),
(17, 'U Chan Thar', '06/12/1944', 'male', '3/La Ma Na (N)3643636', '6512ffc2cfda4.jpg', '01-4525252', 'No(10), Sit Taung Street, (2)Quarter, Hlaing Township, Yangon', 'chanthar@gmail.com'),
(18, 'Daw Swe Zin Oo', '12/06/1949', 'female', '13/Ka La Na (N) 757375', '6513016090a8e.jpg', '09-42535665', 'No(8), Thit Sar Street, (2)Quarter, Hlaing Township, Yangon', 'shwezinoo@gmail.com'),
(19, 'U Thi Ha', '09/05/1460', 'male', '4/Pa Ta Na (N) 647437', '651302d63bad1.jpg', '01-422325', 'No(10), Dagon Street, (9)Quarter, Tar Kay Ta Township, Yangon', 'thiha@gmail.com'),
(20, 'Daw Khin Hla', '04/02/1950', 'female', '12/Ga Ba Ta (N) 674363', '651303bd5e598.jpg', '09-567743231', 'No(11), Than Lwin Street, (7)Quarter, Halpin Township, Yangon', 'khinhla@gmail.com'),
(21, 'Daw Kyi Htwe', '02/13/1940', 'female', '9/Ka Ta Na (N) 668799', '65135b87c122b.jpg', '09-9798908', 'No(7), Hnin Si Street, (13)Quarter, Hlaing Township, Yangon', 'kyihtwe@gmail.com'),
(22, 'U Aye Kyi', '08/08/1953', 'male', '12/La Ma Na (N) 979765', '65135bf7cea44.jpg', '09-64565567', 'No(1), San Pya Street, (4)Quarter, Hlaing Township, Yangon', 'ayekyi@gmail.com'),
(23, 'Daw Khin Mya', '01/04/1954', 'female', '8/Ga Ma Ta (N) 243626', '65135cc497fea.jpg', '09-88064676', 'No(10), Mo Kaung Street, (4)Quarter, Hlaing Township, Yangon', 'khinmya@gmail.com'),
(24, 'U Mya Kyaing', '02/02/1952', 'male', '12/La Ma Na (N) 0988759', '65135d7c16557.jpg', '09-98790764', 'No(11), Tha Mai Street, (7)Quarter, Ma Yan Gone Township, Yangon', 'myakhaing@gmail.com'),
(25, 'Daw Hla Swe', '04/05/1954', 'female', '2/Ka Ma Na (N) 463636', '65135e3685216.jpg', '09-64425646', 'No(6), Taw Win Street, (3)Quarter, Hlaing Township, Yangon', 'hlaswe@gmail.com'),
(26, 'U Than Aung', '06/11/1956', 'male', '14/Ka Ma Na (N) 6896898', '65135eed0cc82.jpg', '09-5433656', 'No(18), Palae Street, (2)Quarter, Hlaing Township, Yangon', 'thanaung@gmail.com'),
(27, 'Daw Khin Aye', '05/10/1954', 'female', '2/Sa Ma Na (N) 6757886', '6513613f039e4.jpg', '09-65467476', 'No(11), Lan Thit Street, (7)Quater, Hlaing Township, Yangon', 'khinaye@gmail.com'),
(28, 'U Kyaw Thu', '08/04/1954', 'male', '2/Sa Ma Na (N) 9879796', '651361b91a56e.jpg', '09-79079858', 'No(19), Kyaung Street, (6)Quarter, Dagon Township, Yangon', 'kyawthu@gmail.com'),
(29, 'U San Aye', '07/15/1955', 'male', '4/Ma La Na (N) 0980890', '6513621839753.jpg', '09-97979899', 'No(10), Da Mar Yone Street, (8)Quarter, Hlaing Township, Yangon', 'sanaye@gmail.com'),
(30, 'Daw San Myint', '05/09/1955', 'female', '14/Sa Ma Na (N) 9879709', '6513629b44809.jpg', '09-9089888809', 'No(10), Mo Kaung Street, (6)Quarter, Hlaing Township, Yangon', 'sanmyint@gmail.com'),
(31, 'Daw Ei Phyo', '07/14/1955', 'female', '13/Ka Ma Na (N) 0990797', '65136433c1a3e.jpg', '09-99088080', 'No(10), Sal Pal Street, (4)Quarter, Dagon Township, Yangon', 'eiphyo@gmail.com'),
(32, 'Daw Hla Sein', '11/25/1954', 'female', '5/Ba Ma Na (N) 45266262', '6513648cedd97.jpg', '09-2552524', 'No(10), Kyaw Swar Street, (5)Quarter, Hlaing Township, Yangon', 'hlasein@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `specialty`
--

CREATE TABLE `specialty` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialty`
--

INSERT INTO `specialty` (`id`, `name`) VALUES
(1, 'Cardiologist'),
(2, 'General Physician'),
(3, 'Psychiatrist'),
(4, 'Gastroenterologist'),
(5, 'Hepatologist'),
(6, 'Orthopaedic Surgeon'),
(7, 'Nephrologist'),
(8, 'Chest Physician'),
(10, 'Rehabilitation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedule_ibfk_1` (`doctor_id`);

--
-- Indexes for table `senior`
--
ALTER TABLE `senior`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialty`
--
ALTER TABLE `specialty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `senior`
--
ALTER TABLE `senior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `specialty`
--
ALTER TABLE `specialty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
