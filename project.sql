-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 02:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `fac_details`
--

CREATE TABLE `fac_details` (
  `Uname` varchar(100) NOT NULL,
  `Fid` char(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fac_details`
--

INSERT INTO `fac_details` (`Uname`, `Fid`, `Email`, `Pass`) VALUES
('priyanka123', '9876543210', 'priyanka.cse@anits.edu.in', 'Priyanka@123'),
('lokeswari', '9876543211', 'lokeswari.cse@anits.edu.in', 'lokeswari@123'),
('amaravathi', '9876543212', 'amaravathi.cse@anits.edu.in', 'amara@123'),
('krishna123', '9876543213', 'pkrishna.cse@anits.edu.in', 'krishna@123');

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE `sem1` (
  `Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Size` int(50) NOT NULL,
  `Subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem1`
--

INSERT INTO `sem1` (`Id`, `Name`, `Size`, `Subject`) VALUES
(2, 'Engineering Mathematics-1 Syllabus.pdf', 245705, 'em1'),
(3, 'Communicative English Syllabus.pdf', 333237, 'ce'),
(4, 'Basic Electronic Engineering Syllabus.pdf', 228148, 'bee'),
(5, 'Digital Logic Design Syllabus.pdf', 307202, 'dld'),
(6, 'Problem Solving with C Syllabus.pdf', 354552, 'c'),
(7, 'Environmental Science Syllabus.pdf', 264563, 'es'),
(8, 'unit 1_CSE-I-ENGINEERING MATHEMATICS I-L1.pdf', 2642275, 'em1'),
(9, 'unit 2_CSE-I-ENGINEERING MATHEMATICS I-L2.pdf', 1830567, 'em1'),
(10, 'unit 3_CSE-I-ENGINEERING MATHEMATICS I-L3.pdf', 1848169, 'em1'),
(11, 'unit 4_CSE-I-ENGINEERING MATHEMATICS I-L4.pdf', 1269019, 'em1'),
(12, 'unit 5_CSE - I-ENGINEERING MATHEMATICS I-L5.pdf', 2250034, 'em1');

-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

CREATE TABLE `sem2` (
  `Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Size` int(50) NOT NULL,
  `Subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem2`
--

INSERT INTO `sem2` (`Id`, `Name`, `Size`, `Subject`) VALUES
(1, 'Engineering Mathematics-2 Syllabus.pdf', 486651, 'em2'),
(2, 'Engineering Physics Syllabus.pdf', 385780, 'ep'),
(3, 'Engineering Chemistry Syllabus.pdf', 298517, 'ec'),
(4, 'Elements of Electrical Engineering Syllabus.pdf', 240631, 'eee'),
(5, 'Engineering Drawing Syllabus.pdf', 412337, 'ed'),
(6, 'Human Values and Professional Ethics Syllabus.pdf', 135332, 'hvpe'),
(7, 'unit 1_Water chemistry material.pdf', 672051, 'ec'),
(8, 'unit 2_Energy.pdf', 527617, 'ec'),
(9, 'unit 3_CORROSION NOTES.pdf', 361084, 'ec'),
(10, 'unit 4_Solid State and Building materials.pdf', 710865, 'ec'),
(11, 'unit 5_NANOCHEMISTRY.pdf', 299123, 'ec'),
(12, 'unit 5_Polymers and Composites.pdf', 442789, 'ec'),
(13, 'unit 5_UNIT-V Lubricants and Green chemistry.output.pdf', 230725, 'ec');

-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

CREATE TABLE `sem3` (
  `Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Size` int(50) NOT NULL,
  `Subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem3`
--

INSERT INTO `sem3` (`Id`, `Name`, `Size`, `Subject`) VALUES
(1, 'Data Structures and Algorithms Syllabus.pdf', 161651, 'dsa'),
(2, 'Computer Organization Syllabus.pdf', 156572, 'co'),
(3, 'OOP with Java Syllabus.pdf', 259711, 'java'),
(4, 'Data Communications Syllabus.pdf', 262587, 'dc'),
(6, 'Discrete Mathematics Structure Syllabus.pdf', 229337, 'dms'),
(7, 'Design Thinking and Product Innovation Syllabus.pdf', 327714, 'dtpi'),
(8, 'unit 1_CAO-UNIT-1.pdf', 5804183, 'co'),
(9, 'unit 1_final.docx', 534577, 'co'),
(10, 'unit 1_part2_final.docx', 106210, 'co'),
(11, 'unit 1_register transfer_1.pdf', 3198529, 'co'),
(12, 'unit 2_basic design of computer_2.pdf', 77316, 'co'),
(13, 'unit 2_unit-2_final.docx', 531254, 'co'),
(14, 'unit 3_basic design of computer_2.pdf', 77316, 'co'),
(15, 'unit 3_unit-3 (1).pdf', 1200410, 'co'),
(16, 'unit 4_part1_final.docx', 132681, 'co'),
(17, 'unit 4_part2_final.docx', 167882, 'co'),
(18, 'unit 5_final.docx', 380163, 'co'),
(19, 'unit 5_Input_Output_Organization_11.pdf', 876075, 'co'),
(20, 'unit 5_Memory Organization.pdf', 529577, 'co');

-- --------------------------------------------------------

--
-- Table structure for table `sem4`
--

CREATE TABLE `sem4` (
  `Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Size` int(50) NOT NULL,
  `Subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem4`
--

INSERT INTO `sem4` (`Id`, `Name`, `Size`, `Subject`) VALUES
(1, 'Probability Statistics and Queueing Theorm Syllabus.pdf', 159730, 'psqt'),
(2, 'Microprocessors and Interfacing Syllabus.pdf', 161039, 'mpi'),
(3, 'Operating Systems Syllabus.pdf', 145373, 'os'),
(4, 'Computer Networks Syllabus.pdf', 259179, 'cn'),
(5, 'Computer Graphics Syllabus.pdf', 176741, 'cg'),
(6, 'Formal Languages and Automata Theory Syllabus.pdf', 160632, 'flat'),
(7, 'unit 1_UNIT-1 NOTES.docx', 24165, 'psqt'),
(8, 'unit 2_PROBABILITY DISTRIBUTIONS.docx', 16624, 'psqt'),
(9, 'unit 3_curve fitting .pdf', 466277, 'psqt'),
(10, 'unit 4_.docx', 298447, 'psqt'),
(11, 'unit 5_queuimg theory.pdf', 100300, 'psqt');

-- --------------------------------------------------------

--
-- Table structure for table `sem5`
--

CREATE TABLE `sem5` (
  `Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Size` int(50) NOT NULL,
  `Subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem5`
--

INSERT INTO `sem5` (`Id`, `Name`, `Size`, `Subject`) VALUES
(1, 'Compiler Design Syllabus.pdf', 444650, 'cd'),
(2, 'Database Management System Syllabus.pdf', 446320, 'dbms'),
(3, 'Design Analysis of Algorithms Syllabus.pdf', 256568, 'daa'),
(4, 'Quantitative and Verbal Aptitude-1 Syllabus.pdf', 406304, 'qa1');

-- --------------------------------------------------------

--
-- Table structure for table `sem6`
--

CREATE TABLE `sem6` (
  `Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Size` int(50) NOT NULL,
  `Subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem6`
--

INSERT INTO `sem6` (`Id`, `Name`, `Size`, `Subject`) VALUES
(1, 'Web Technologies Syllabus.pdf', 360034, 'wt'),
(2, 'Quantitative Aptitude-2 and Sofskills.pdf', 410480, 'qa2');

-- --------------------------------------------------------

--
-- Table structure for table `stu_details`
--

CREATE TABLE `stu_details` (
  `Uname` varchar(100) NOT NULL,
  `Rollno` char(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu_details`
--

INSERT INTO `stu_details` (`Uname`, `Rollno`, `Email`, `Pass`) VALUES
('Bharathi', '318126510123', 'bbharathilakshmi.18.cse@anits.edu.in', 'Bharathi@1234'),
('MadhuNitesh', '318126510124', 'bmnitesh.18.cse@anits.edu.in', 'Madhu@1234'),
('prasanthkumar', '318126510127', 'bprasanthkumar.18.cse@anits.edu.in ', 'Prasanth@2000'),
('Divyanth', '318126510134', 'ddramnath.18.cse@anits.edu.in', 'Divyanth@123'),
('udaykumar', '319126510140', 'botsaudaybhaskar.19.cse@anits.edu.in', 'uday2001'),
('Nagendra', '319126510L15', 'mnagendra.l19.cse@anits.edu.in', 'Nag@1234'),
('Anandrao', '319126510L16', 'nanandarao.l19.cse@anits.edu.in', 'Anand123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fac_details`
--
ALTER TABLE `fac_details`
  ADD PRIMARY KEY (`Fid`);

--
-- Indexes for table `sem1`
--
ALTER TABLE `sem1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sem2`
--
ALTER TABLE `sem2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sem3`
--
ALTER TABLE `sem3`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sem4`
--
ALTER TABLE `sem4`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sem5`
--
ALTER TABLE `sem5`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sem6`
--
ALTER TABLE `sem6`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `stu_details`
--
ALTER TABLE `stu_details`
  ADD PRIMARY KEY (`Rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sem1`
--
ALTER TABLE `sem1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sem2`
--
ALTER TABLE `sem2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sem3`
--
ALTER TABLE `sem3`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sem4`
--
ALTER TABLE `sem4`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sem5`
--
ALTER TABLE `sem5`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sem6`
--
ALTER TABLE `sem6`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
