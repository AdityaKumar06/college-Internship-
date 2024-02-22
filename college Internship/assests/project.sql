-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 10:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `PERSONID` varchar(10) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`PERSONID`, `NAME`, `PASSWORD`) VALUES
('', NULL, NULL),
('ad1', 'varna', '$2y$10$EzcJolfoFr32qAhjVcIk2uSPsPtq27x7xPRFonusJ14aWzlpZAQkK'),
('ad2', 'jathin', '$2y$10$VYmBzKKk3f1sMYbfx3UbFeVT2Xmos/QdTbU7WYx8SPp5ubub6KI4S'),
('ad3', 'swapna', '$2y$10$ScyTGW1Gp/GI4Sb9jFFGTu9D/m04Xfkdolp1HW06S9PCSaw7OMTxW'),
('ad4', 'bharath', '$2y$10$Jpt4/Cu98mjCRfDJSw3sE.mWtQahENnmOu7ygejpDSA/zdfQlO0J2'),
('ad5', 'amulya', '$2y$10$oVuZ2FesCZYdmWVXcC4MpOD4OfPhAPNmyTqPt6iZDpKdGgeM/3PI6');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `COMPANYID` int(11) NOT NULL,
  `CNAME` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PHONE` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`COMPANYID`, `CNAME`, `EMAIL`, `PHONE`) VALUES
(1, 'Dell Technologies', 'dell@gmail.in', 265598),
(2, 'L’Oréal', 'loreal2gmail.in', 245698),
(3, 'Facebook', 'facebook@gmail.in', 214563),
(4, ' Google', 'goolge@gmail.in', 255412),
(5, 'Newell Brands', 'newell@gmail.in', 214412),
(6, 'CohnReznick', 'cohnreznick@gmail.in', 255310),
(7, 'Enterprise Rent-A-Car', 'rentacar@gmail.in', 255641),
(8, 'Under Armour', 'armour@gmail.in', 254416),
(9, 'YouTern', 'youtern@gmail.in', 241156),
(10, 'Glassdoor', 'glassdoor@gmail.in', 289961),
(11, 'Aruba- College Intern', 'aruba2gmail.in', 213302),
(12, 'Headout ', 'headout@gmail.in', 241105),
(13, 'Intellipaat', 'intellipaat@gmail.in', 215489),
(14, 'Intel', 'intel@gmail.in', 214401),
(15, 'Amazon', 'amazon@gmail.in', 258741);

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `INTERNSHIP_ID` varchar(10) NOT NULL,
  `COMPANYID` int(11) DEFAULT NULL,
  `DESCRIPTION` varchar(400) DEFAULT NULL,
  `LOCATION` varchar(255) DEFAULT NULL,
  `START_DATE` date DEFAULT NULL,
  `END_DATE` date DEFAULT NULL,
  `SKILLS` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`INTERNSHIP_ID`, `COMPANYID`, `DESCRIPTION`, `LOCATION`, `START_DATE`, `END_DATE`, `SKILLS`) VALUES
('IN1  ', 1, 'The computer and technology company is serious about hiring more college students. By 2020, it aims to have 25 percent of all external hiring come from college campuses, according to a company memo.\r\nThe company offers internships in accounting, financial services, engineering and computer science, finance, global operations, human resources, marketing, information technology and more.', 'Jayanagr, Bangalore', '2020-10-01', '2020-12-01', 'JavaScript\r\nSoftware Testing\r\nManual Testing\r\nMS-Excel'),
('IN10', 10, 'Founded in 2007 and based in Sausalito, CA, Glassdoor gets its internship listings from several sources, including company websites, partnerships with job boards and directly from employers. But its main attraction is that it offers an instant way to search for salaries, company reviews and descriptions of job interviews. ', 'Jayanagar', '2020-06-30', '2020-08-31', 'Java\r\nSoftware Testing\r\nManual Testing'),
('IN11', 11, 'Aruba is redefining the Intelligent Edge Aruba is creating new customer experiences by building intelligent spaces and digital workspaces - leading next-generation network access solutions for the mobile enterprise. We are focused on campus, branch, mobility and the IoT to transform businesses with the combined power of compute, context, control and secure connectivity. We help some of the largest', 'Vijayanagar', '2020-07-01', '2020-08-01', 'Work Ethic. \r\nEntrepreneurial. \r\nAbility to Problem Solve.\r\nSelf-Disciplined. \r\nIndependent. '),
('IN12', 12, 'We\'re looking for someone who can join the Marketing team at Headout in a Frontend Developer role, to help build a world-class user interface for our blog and ship Marketing projects with ease. This role is expected to bring an eye for design along with practical web development abilities.', 'TR Nagar', '2022-03-01', '2022-04-01', 'Work Ethic. \r\nEntrepreneurial. \r\nAbility to Problem Solve. \r\nSelf-Disciplined. \r\nIndependent. '),
('IN13', 13, '1. Promote the webinars which are hosted by industry experts from Google, Accenture, Infosys, etc.\r\n2. Represent Intellipaat in the college and promote the Free Courses available on Intellipaat Academy (https://intellipaat.com/academy/)\r\n3. Brand awareness and promotion in your society\r\n4. Curate marketing ideas and their implementation', 'JP Nagar', '2022-01-01', '2022-02-01', 'passionate\r\nwork ethics\r\nprobleming solving skill'),
('IN14', 14, 'Intel Recruitment Drive– Intel scheduled to recruit for the role of Graduate Intern Technical for B.Tech/ B.E/ M.Tech graduates at Bangalore Office', 'RR Nagar', '2019-11-01', '2019-12-01', 'java\r\npython\r\nc#\r\ndata mining'),
('IN15', 15, 'Amazon interns work on a variety of projects that accelerate their career growth and delight Amazon customers.', 'bangalore', '2019-10-01', '2019-12-01', 'Java\r\npython\r\nproblem solving skill'),
('IN2', 2, 'The beauty company offers a range of internships, from digital marketing to consumer product design and sales. Some of the company’s internships are open to recent graduates as well and can last for up to 12 months. Interns make approximately $20 to $22 per hour.', 'Vijaynagar, Bangalore', '2020-07-15', '2020-08-15', 'MS-Office\r\nSoftware Testing\r\nManual Testing'),
('IN3', 3, 'Facebook VP of Engineering Vladimir Fedorov says his interns work alongside engineers to test and change the website.\r\n“What sets us apart is the fact that you can have real impact,” he tells Glassdoor. “So there are three months in the summer [that] fly by at some places, but at Facebook, you’re going to get to do real work.”\r\n', 'JP nagar', '2020-08-20', '2020-09-30', 'MS-Office\r\nSoftware Testing\r\nManual Testing'),
('IN4', 4, 'An internship for the internet and tech giant pays very well. Software engineering interns make more than $6,600 each month and an internship for MBA students pays $8,200 each month, according to anonymous.', 'Marathahalli', '2019-06-05', '2019-07-31', 'Manual Testing\r\nUI & UX Design'),
('IN5', 5, 'Newell Brands, the company behind Paper Mate pens, Elmer’s Glue and many other office and household products offers internships in areas ranging from e-commerce to design to research.', 'Vijaynagar', '2021-05-01', '2021-06-01', 'Manual Testing\r\nUI & UX Design'),
('IN6', 6, 'At the accounting and tax advisory firm, interns “will learn by doing real work on real engagements,” according to the company website, with the opportunity to work on projects in industries such as renewable energy, technology, life sciences and real estate.', 'Gandhi Bazar', '2020-10-01', '2020-11-15', 'Computer Networking\r\nComputer Networks'),
('IN7', 7, 'Multiple intern reports on Glassdoor tout good on-the-job experience and a fun working environment. At the same time, however, some said working weekends wasn’t fun.', 'TR Nagar', '2020-09-01', '2020-10-01', 'Computer Networking\r\nComputer Networks'),
('IN8', 8, 'The athletic wear company calls its internship the “summer league.” Each intern is assigned a mentor and has access to learning seminars like Q&A sessions with executives, according to the company.', 'Yelanka, Bangalore', '2021-06-16', '2021-08-20', 'Software Testing\r\nManual Testing\r\nGUI Testing\r\nDatabase Testing'),
('IN9', 9, 'An unusual site, YouTern tries to mentor and connect would-be interns using social media tools like Twitter. Internship seekers fill out a profile and interact with mentors. Founder Mark Babbitt says he has relationships with recruiters at 100 companies and personally refers appropriate candidates. But internship seekers need to interact with the site before they get referred to jobs.', 'Katriguppe', '2020-08-01', '2020-09-01', 'Software Testing\r\nManual Testing\r\nGUI Testing\r\nDatabase Testing');

-- --------------------------------------------------------

--
-- Table structure for table `placements`
--

CREATE TABLE `placements` (
  `USN` varchar(10) NOT NULL,
  `COMPANYID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `placements`
--

INSERT INTO `placements` (`USN`, `COMPANYID`) VALUES
('1CE16CS012', 14),
('1CE16CS114', 4),
('1CE16IS086', 15),
('1CE16IS107', 15),
('1CE17CS034', 4),
('1CE17CS046', 3),
('1CE17CS061', 2),
('1CE17CS085', 4),
('1CE17EC041', 6),
('1CE17ME123', 2),
('1CE18CI023', 5),
('1CE18EC030', 8),
('1CE18EC057', 8),
('1CE19CI059', 12),
('1CE19ME092', 5),
('1CE19ME092', 13);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `USN` varchar(10) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `PASSWORD` varchar(260) NOT NULL,
  `PHONE` bigint(10) NOT NULL,
  `DEPARTMENT` varchar(100) NOT NULL,
  `GRAD` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`USN`, `NAME`, `EMAIL`, `PASSWORD`, `PHONE`, `DEPARTMENT`, `GRAD`) VALUES
('1CE16CS012', 'chaya', 'chaya@gmail.com', '$2y$10$aY34dgZ9BUk4tfqRiAM/5ufaBSp4j7zWMUFogij1gzCQTmRQfYnBm', 9855621478, 'CSE', 2020),
('1CE16CS114', 'varun', 'varun@gmail.com', '$2y$10$pNTmfotxnntkHh9eb3DmceyGkfEVb5H.sXRUEMRtyvMcjjUaauGUW', 9855632014, 'CSE', 2020),
('1CE16IS086', 'sadvini', 'sadvini@gmail.com', '$2y$10$euxw3WsGbBJIfmWqBZRmbuIJmGCdzLpyUvwddY8ByF.K0VCzRgiyq', 985621456, 'ISE', 2020),
('1CE16IS107', 'spandana', 'spandana@gmail.com', '$2y$10$TNZSrnA3empqZ0xcdZHKreZZ36Fu96BPfWy3Jdkyp8dDrFGfDCo6m', 9855632110, 'ISE', 2020),
('1CE17CS034', 'harsha', 'harsha@gmail.com', '$2y$10$QM3cBIP3A5Zfg5vccaoiX.fFU6Fs1EwtGWXBEP23cf2s8gTgkeoOC', 8745693201, 'CSE', 2021),
('1CE17CS046', 'manvitha', 'manvitha@gmail.com', '$2y$10$JsLyEYmLgQZq/0TbPeXy..3ydlsK7cmqAkRuT55UTCuN/xO0o9XVK', 9855632014, 'CSE', 2021),
('1CE17CS061', 'radha', 'radha@gmail.com', '$2y$10$MqqEceyyjIwSF1HbVZs7Peb9AmnUkJ9XMTra.mmlarGfd2/pu7ol.', 8456995866, 'CSE', 2021),
('1CE17CS085', 'pooja', 'pooja@gmail.com', '$2y$10$lbF5FWLmhV6ATVAOjFUKPe0LCPRJM.tMcmsSNU9jJ61uKL383AKQu', 8105439015, 'CSE', 2021),
('1CE17EC041', 'geetha', 'geetha@gmail.com', '$2y$10$6P3txqwpsJ9yS1N3gLuDWuM8DumZb3k4jLOWyVrAbFtm6szJiQ8jG', 9855654120, 'ECE', 2021),
('1CE17ME123', 'param', 'param@gmail.com', '$2y$10$7/CMfyeK4sPWFw.SksSToOOBL85JrGUtGK0SETtny.1o7gG9aliFe', 8456932102, 'MECH', 2021),
('1CE18CI023', 'jeeva', 'jeeva@gmail.com', '$2y$10$E.nkses9DkTBmE8wp/du7.tbjwIgM9WXXgLNJ4ZZ1VdzPiC08DzXy', 8956214702, 'CIVIL', 2022),
('1CE18EC030', 'deekshith', 'deekshith@gmail.com', '$2y$10$yG6GMTjDKsdulY73wXrl.udYjHU7AMO/mnimm9BLQ.4H1yBst3kVW', 8966253320, 'ECE', 2022),
('1CE18EC057', 'kiran', 'kiran@gmail.com', '$2y$10$hQeeAAg.pwiRjB94XHt0EeoEwU02uh.0pBkhOZnTu2N5Ej9jCk8GG', 8956320147, 'ECE', 2022),
('1CE19CI059', 'nayana', 'nayana@gmail.com', '$2y$10$Uyfr.24xRRKxacx18bPut.VgPnYt85E44EVDmhbjFNS.18z3zONTW', 8966523012, 'CIVIL', 2023),
('1CE19ME016', 'charan', 'charan@gmail.com', '$2y$10$uZD/uLT8Ak.JZ4GUpOTC3.9nrNvTHzc.hJ85zWPl3Sn87ojOJHMYW', 8956234102, 'MECH', 2023),
('1CE19ME092', 'pavani', 'pavani@gmail.com', '$2y$10$ZGmDsgeiZl.xxXa/6WxJROGFTBgns1JedivOa47BOTeVOPHXsOHlq', 8966555232, 'MECH', 2023);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`PERSONID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`COMPANYID`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`INTERNSHIP_ID`),
  ADD KEY `COMPANYID` (`COMPANYID`);

--
-- Indexes for table `placements`
--
ALTER TABLE `placements`
  ADD PRIMARY KEY (`USN`,`COMPANYID`),
  ADD KEY `COMPANYID` (`COMPANYID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`USN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `internship`
--
ALTER TABLE `internship`
  ADD CONSTRAINT `internship_ibfk_1` FOREIGN KEY (`COMPANYID`) REFERENCES `company` (`COMPANYID`);

--
-- Constraints for table `placements`
--
ALTER TABLE `placements`
  ADD CONSTRAINT `placements_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `student` (`USN`),
  ADD CONSTRAINT `placements_ibfk_2` FOREIGN KEY (`COMPANYID`) REFERENCES `company` (`COMPANYID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
