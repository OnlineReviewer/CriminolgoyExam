-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql206.infinityfree.com
-- Generation Time: Dec 10, 2023 at 10:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_35491360_reviewer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(1000) NOT NULL,
  `admin_pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`admin_id`, `admin_user`, `admin_pass`) VALUES
(1, 'admin@username', 'ac8197900127801b4ce12251dc8f379765d976c4638491fe31db86bfb3080848');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `anid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `tim` time NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`anid`, `title`, `description`, `tim`, `dates`) VALUES
(14, 'Christmas Vacation', 'Start of Christmas Vacation', '00:00:00', '2023-12-20'),
(16, 'Thesis ', 'Prepare on coming Defense', '12:00:00', '2023-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `assignteacher`
--

CREATE TABLE `assignteacher` (
  `id` int(11) NOT NULL,
  `assigntid` varchar(255) NOT NULL,
  `subjectid` varchar(255) NOT NULL,
  `classid` varchar(255) NOT NULL,
  `teacherfname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignteacher`
--

INSERT INTO `assignteacher` (`id`, `assigntid`, `subjectid`, `classid`, `teacherfname`, `password`) VALUES
(14, '0320-0570', '', '2', 'kyla', '542e1c1ef0727494cf2b84491e91a5e825407d6b93486f2f6ac9e181b11f1240'),
(15, '0320-0570', '', '1', 'kyla', ''),
(16, '0320-0570', '', '1', 'kyla', ''),
(17, '0320-0570', '', '1', 'kyla', ''),
(18, '0320-0570', '', '1', 'kyla', ''),
(19, '0320-0570', '', '6', 'kyla', ''),
(20, '0320-0540', '', '3', 'lyn', 'ba018b938caa0591fd353d6357961c23a7f02f10eaf4371f25e4b2080f548729'),
(23, '0123-0111', '', '6', 'JC Macxx', '925cc4c8099bea7875e3961ca4a6369aaaa230a1bd74cf3ce7593f4ef92cfc07'),
(25, '0510-0510', '', '3', 'Aljon Caguitla', '3eb2f5cb152dc23b1dd82f30c90456953e60acbc9bfb3ea91ec375fe04d97fc2'),
(28, '8888', '', '6', 'JM Rivera', '0390024610415f44c9d5ca4a01dd96bb09fc95e6450bfd740a9a4cf4abcc8130'),
(42, '123-123', '', '1', 'John Doe', 'a09189839f97a823e29e5dde179ef33bc709f81d3eae7dfb80e1a2c7893d53c0'),
(44, '0320-0493', '', '6', 'Frederick', '88113bf757ef8fb21692138d0ba72ecc71ab49c94ff975bd000d9d5051c1fb27'),
(46, '0000-0000', '', '6', 'Example', '88113bf757ef8fb21692138d0ba72ecc71ab49c94ff975bd000d9d5051c1fb27'),
(47, '0000-0000', '', '5', 'Example', '');

-- --------------------------------------------------------

--
-- Table structure for table `barchart`
--

CREATE TABLE `barchart` (
  `id` int(11) NOT NULL,
  `studid` varchar(255) NOT NULL,
  `preTest` double NOT NULL,
  `postTest` double NOT NULL,
  `classid` int(11) NOT NULL,
  `datesofpretest` date NOT NULL,
  `datesofposttest` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barchart`
--

INSERT INTO `barchart` (`id`, `studid`, `preTest`, `postTest`, `classid`, `datesofpretest`, `datesofposttest`) VALUES
(19, '0320-0493', 65, 100, 6, '2023-11-20', '2023-11-20'),
(20, '0123-4568', 8, 0, 1, '2023-11-23', '0000-00-00'),
(21, '0123-4568', 0, 7, 1, '0000-00-00', '2023-11-23'),
(22, '1234567', 7, 11, 1, '2023-11-25', '2023-11-25'),
(23, '1000-1000', 11, 0, 1, '2023-11-25', '0000-00-00'),
(24, '1000-1000', 0, 5, 1, '0000-00-00', '2023-11-25'),
(25, '1000-1000', 0, 13, 1, '0000-00-00', '2023-11-25'),
(26, '1000-1000', 11, 0, 2, '2023-11-25', '0000-00-00'),
(27, '1000-1000', 0, 11, 2, '0000-00-00', '2023-11-26'),
(28, '123-456', 13, 0, 1, '2023-11-28', '0000-00-00'),
(29, '123-456', 0, 18, 1, '0000-00-00', '2023-11-28'),
(30, '789-123', 11, 0, 6, '2023-11-28', '0000-00-00'),
(31, '789-123', 20, 0, 5, '2023-11-28', '0000-00-00'),
(32, '789-123', 10, 0, 4, '2023-11-28', '0000-00-00'),
(33, '789-123', 7, 0, 3, '2023-11-28', '0000-00-00'),
(34, '789-123', 8, 0, 2, '2023-11-28', '0000-00-00'),
(35, '789-123', 18, 0, 1, '2023-11-28', '0000-00-00'),
(36, '789-123', 0, 9, 1, '0000-00-00', '2023-11-28'),
(37, '789-123', 0, 9, 2, '0000-00-00', '2023-11-28'),
(38, '789-123', 0, 17, 3, '0000-00-00', '2023-11-28'),
(39, '789-123', 0, 14, 4, '0000-00-00', '2023-11-28'),
(40, '789-123', 0, 3, 5, '0000-00-00', '2023-11-28'),
(41, '789-123', 0, 9, 6, '0000-00-00', '2023-11-28'),
(42, '789-123', 0, 18, 1, '0000-00-00', '2023-11-28'),
(43, '789-123', 0, 15, 2, '0000-00-00', '2023-11-28'),
(44, '789-123', 0, 3, 3, '0000-00-00', '2023-11-28'),
(45, '789-123', 0, 3, 4, '0000-00-00', '2023-11-28'),
(46, '789-123', 0, 14, 5, '0000-00-00', '2023-11-28'),
(47, '789-123', 0, 8, 6, '0000-00-00', '2023-11-28'),
(48, '987-654', 18, 0, 1, '2023-11-29', '0000-00-00'),
(49, '0320-0120', 11, 0, 1, '2023-12-04', '0000-00-00'),
(50, '0320-0120', 0, 10, 1, '0000-00-00', '2023-12-04'),
(51, '0320-0121', 13, 0, 1, '2023-12-04', '0000-00-00'),
(52, '0320-0121', 0, 14, 1, '0000-00-00', '2023-12-04'),
(53, '0320-0220', 15, 0, 2, '2023-12-04', '0000-00-00'),
(54, '0320-0220', 0, 11, 2, '0000-00-00', '2023-12-04'),
(55, '0320-0410', 16, 0, 1, '2023-12-04', '0000-00-00'),
(56, '0320-0410', 0, 7, 1, '0000-00-00', '2023-12-04'),
(57, '0320-0129', 6, 0, 4, '2023-12-04', '0000-00-00'),
(58, '0320-0129', 0, 8, 4, '0000-00-00', '2023-12-04'),
(59, '0320-0234', 3, 0, 3, '2023-12-04', '0000-00-00'),
(60, '0320-0234', 0, 2, 3, '0000-00-00', '2023-12-04'),
(61, '0320-0237', 16, 0, 6, '2023-12-04', '0000-00-00'),
(62, '0320-0237', 0, 16, 6, '0000-00-00', '2023-12-04'),
(63, '0320-0236', 16, 0, 6, '2023-12-04', '0000-00-00'),
(64, '0320-0236', 0, 23, 6, '0000-00-00', '2023-12-04'),
(65, '0000-0000', 23, 49, 6, '2023-12-04', '2023-12-09'),
(66, '0000-0000', 25, 12, 1, '2023-12-05', '2023-12-09'),
(67, '0000-0000', 32, 47, 5, '2023-12-06', '2023-12-09'),
(68, '0000-0000', 40, 48, 3, '2023-12-09', '2023-12-09'),
(69, '0000-0000', 25, 48, 2, '2023-12-04', '2023-12-09'),
(70, '0000-0000', 20, 46, 4, '2023-12-28', '2023-12-09'),
(71, '0320-0297', 4, 0, 4, '2023-12-04', '0000-00-00'),
(72, '0320-0297', 0, 5, 4, '0000-00-00', '2023-12-04'),
(73, '0320-0337', 6, 0, 4, '2023-12-05', '0000-00-00'),
(74, '0320-0337', 0, 30, 4, '0000-00-00', '2023-12-05'),
(75, '0320-0222', 9, 0, 6, '2023-12-05', '0000-00-00'),
(76, '0320-0222', 0, 15, 6, '0000-00-00', '2023-12-05'),
(77, '0320-0277', 13, 0, 6, '2023-12-05', '0000-00-00'),
(78, '0320-0277', 0, 19, 6, '0000-00-00', '2023-12-05'),
(79, '0320-0537', 11, 0, 5, '2023-12-05', '0000-00-00'),
(80, '0320-0537', 0, 14, 5, '0000-00-00', '2023-12-05'),
(81, '0320-0397', 3, 0, 3, '2023-12-05', '0000-00-00'),
(82, '0320-0397', 0, 7, 3, '0000-00-00', '2023-12-05'),
(83, '0320-0637', 11, 0, 2, '2023-12-05', '0000-00-00'),
(84, '0320-0637', 0, 8, 2, '0000-00-00', '2023-12-05'),
(85, '0320-0437', 8, 0, 6, '2023-12-05', '0000-00-00'),
(86, '0320-0437', 0, 14, 6, '0000-00-00', '2023-12-05'),
(87, '0320-1111', 22, 0, 1, '2023-12-05', '0000-00-00'),
(88, '0320-1111', 0, 12, 1, '0000-00-00', '2023-12-05'),
(89, '0320-0761', 16, 0, 1, '2023-12-05', '0000-00-00'),
(90, '0320-0761', 0, 21, 1, '0000-00-00', '2023-12-05'),
(91, '0320-0511', 3, 0, 4, '2023-12-05', '0000-00-00'),
(92, '0320-0511', 0, 6, 4, '0000-00-00', '2023-12-05'),
(93, '0320-0411', 15, 0, 6, '2023-12-05', '0000-00-00'),
(94, '0320-0411', 0, 19, 6, '0000-00-00', '2023-12-05'),
(95, '0320-0211', 18, 0, 5, '2023-12-06', '0000-00-00'),
(96, '0320-0211', 0, 9, 5, '0000-00-00', '2023-12-06'),
(97, '0320-0245', 15, 0, 6, '2023-12-06', '0000-00-00'),
(98, '0320-0245', 0, 13, 6, '0000-00-00', '2023-12-06'),
(99, '0320-0381', 6, 0, 5, '2023-12-06', '0000-00-00'),
(100, '0320-0381', 0, 13, 5, '0000-00-00', '2023-12-06'),
(101, '0320-0331', 3, 0, 3, '2023-12-06', '0000-00-00'),
(102, '0320-0331', 0, 1, 3, '0000-00-00', '2023-12-06'),
(103, '0320-0331', 0, 5, 3, '0000-00-00', '2023-12-06'),
(104, '0320-0461', 15, 0, 6, '2023-12-06', '0000-00-00'),
(105, '0320-0481', 15, 0, 6, '2023-12-06', '0000-00-00'),
(106, '0320-0481', 0, 18, 6, '0000-00-00', '2023-12-06'),
(107, '0320-381', 15, 0, 6, '2023-12-06', '0000-00-00'),
(108, '0320-0401', 15, 0, 5, '2023-12-06', '0000-00-00'),
(109, '0320-0384', 15, 0, 5, '2023-12-06', '0000-00-00'),
(110, '0320-0459', 11, 0, 2, '2023-12-06', '0000-00-00'),
(111, '0317-0381', 17, 0, 6, '2023-12-06', '0000-00-00'),
(112, '0320-0459', 0, 15, 2, '0000-00-00', '2023-12-06'),
(113, '0310-0381', 5, 0, 3, '2023-12-06', '0000-00-00'),
(114, '0320-0499', 7, 0, 4, '2023-12-06', '0000-00-00'),
(115, '0320-0499', 0, 6, 4, '0000-00-00', '2023-12-06'),
(116, '0320-0181', 17, 0, 1, '2023-12-06', '0000-00-00'),
(117, '0320-0487', 7, 0, 4, '2023-12-06', '0000-00-00'),
(118, '0320-0599', 5, 0, 4, '2023-12-06', '0000-00-00'),
(119, '0320-0599', 0, 7, 4, '0000-00-00', '2023-12-06'),
(120, '0310-0799', 11, 0, 4, '2023-12-06', '0000-00-00'),
(121, '0310-0799', 0, 2, 4, '0000-00-00', '2023-12-06'),
(122, '0320-0699', 6, 0, 4, '2023-12-07', '0000-00-00'),
(123, '0320-0699', 0, 8, 4, '0000-00-00', '2023-12-07'),
(124, '0310-0639', 9, 0, 2, '2023-12-07', '0000-00-00'),
(125, '0310-0639', 0, 9, 2, '0000-00-00', '2023-12-07'),
(126, '0320-0636', 13, 0, 5, '2023-12-07', '0000-00-00'),
(127, '0320-0636', 0, 16, 5, '0000-00-00', '2023-12-07'),
(128, '0320-0416', 18, 0, 2, '2023-12-08', '0000-00-00'),
(129, '0320-0416', 0, 12, 2, '0000-00-00', '2023-12-08'),
(130, '0321-0328', 12, 0, 5, '2023-12-08', '0000-00-00'),
(131, '0321-0328', 0, 12, 5, '0000-00-00', '2023-12-08'),
(132, '0321-0822', 16, 0, 6, '2023-12-08', '0000-00-00'),
(133, '0321-0822', 0, 12, 6, '0000-00-00', '2023-12-08'),
(134, '0321-0342', 14, 0, 5, '2023-12-08', '0000-00-00'),
(135, '0320-0116', 6, 0, 3, '2023-12-08', '0000-00-00'),
(136, '0320-0116', 0, 12, 3, '0000-00-00', '2023-12-08'),
(137, '0320-0249', 6, 0, 4, '2023-12-09', '0000-00-00'),
(138, '0320-0249', 0, 9, 4, '0000-00-00', '2023-12-09'),
(139, '0320-0849', 9, 0, 2, '2023-12-09', '0000-00-00'),
(140, '0320-0849', 0, 11, 2, '0000-00-00', '2023-12-09'),
(141, '0321-0849', 14, 0, 2, '2023-12-09', '0000-00-00'),
(142, '0321-0849', 0, 8, 2, '0000-00-00', '2023-12-09'),
(143, '0321-0849', 0, 10, 2, '0000-00-00', '2023-12-09'),
(144, '0321-0449', 12, 0, 5, '2023-12-09', '0000-00-00'),
(145, '0321-0449', 0, 12, 5, '0000-00-00', '2023-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classid` int(11) NOT NULL,
  `classname` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classid`, `classname`, `description`) VALUES
(1, 'Criminal Jurisprudence, Procedure and Evidence', 'Criminal Jurisprudence, are the foundations of the criminal justice system, ensuring that defendants\' rights are protected, justice is served, and the system operates fairly. Constantly evolving, while criminal procedure is designed to ensure fairness and impartiality.'),
(2, 'Law Enforcement Administration', 'is the management and supervision of law enforcement agencies and personnel to uphold law and order, maintain public safety, and prevent crime. It encompasses planning, organizing, directing, and controlling law enforcement activities effectively and efficiently.'),
(3, 'Criminalistics        ', 'Criminalistics is the application of scientific principles and methods to the examination and interpretation of physical evidence associated with criminal activity. It encompasses various disciplines, including fingerprint analysis, DNA profiling, and forensic pathology, to aid criminal investigations.'),
(4, 'Crime Detection and Investigation', 'Investigators must possess various skills, including attention to detail, critical thinking, communication, interpersonal skills, and knowledge of criminal law. The field is constantly evolving, requiring investigators to stay up-to-date on new technologies and techniques.'),
(5, 'Sociology of Crimes and Ethics', 'Sociology of Crimes and Ethics delves into the social and ethical aspects of crime, examining its causes, consequences, and societal implications. It explores the interplay between criminal behavior, social norms, ethical principles, and the criminal justice system.'),
(6, 'Correctional Administration', 'Correctional Administration is the management of correctional facilities and the supervision of offenders.It encompasses a wide range of activities, including institutional operations, offender management, policy development, staffing, and budgeting and finance');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `examid` int(11) NOT NULL,
  `examques` text NOT NULL,
  `answer` varchar(255) NOT NULL,
  `options1` varchar(255) NOT NULL,
  `options2` varchar(255) NOT NULL,
  `options3` varchar(255) NOT NULL,
  `options4` varchar(255) NOT NULL,
  `classid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`examid`, `examques`, `answer`, `options1`, `options2`, `options3`, `options4`, `classid`) VALUES
(1, 'It is the authority of the President of the Philippines to     suspend the execution of a penalty, reduce the sentence and     extinguish criminal liability.', 'Executive clemency', 'Parole', 'Executive clemency', 'Pardon ', 'President\'s clemency', 6),
(2, 'The B.J.M.P. is under the administration of the: ', 'D.I.L.G', ' P.N.P.', 'D.I.L.G', 'D.O.J  ', 'Executive Department', 6),
(3, 'There are three (3) casework techniques applied by the parole      officer, which is not included?', 'The trick and treat techniques', 'The trick and treat techniques', 'The executive techniques', 'The guidance, counseling and leadership techniques', 'The manipulative techniques ', 6),
(4, 'Berto, with evident premeditation and treachery killed his father.      What was the crime committed?', 'Parricide', 'Murder', 'Parricide', 'Homicide', 'Qualified Homicide ', 1),
(5, 'PO3 Bagsik entered the dwelling of Totoy against the latter’s will     on suspicion that Bitoy keep unlicensed firearms     in his home. What was the crime committed by PO3 Bagsik?', 'Violation of Domicile', 'Trespass to Dwelling', 'Violation of Domicile', 'Usurpation Of Authority', 'Forcible Trespassing ', 1),
(6, 'Charlie and Lea had been married for more than 6 months.They     live together with the children of Lea from her first husband.     Charlie had sexual relation with Jane, the 14 year old daughter of     Lea.Jane loves Charlie very much.What was the crime ', 'Qualified Seduction', 'Simple Seduction', 'Qualified Seduction', 'Consented Abduction', 'Rape', 1),
(7, 'Prof. Jose gave a failing grade to one of his students, Lito. When     the two met the following day, Lito slapped     Prof. Jose on the face.  What was the crime committed by Lito?', 'Direct Assault', 'Corruption of Public Officials', 'Direct Assault', 'Slight Physical Injuries', 'Grave Coercion', 1),
(8, 'A warrant of arrest was issued against Fred for the killing of his parents.  When PO2 Tapang tried to arrest him,Fred gave him 1 million pesos to set him free. PO2 Tapang refrained in arresting Fred.  What was the crime committed by PO2 Tapang?', 'Qualified Bribery', 'Indirect Bribery   ', 'Direct Bribery', 'Corruption of Public Officials', 'Qualified Bribery', 1),
(9, 'Which of the following is the exemption to the hearsy rule made under the consciousness of an impending death?', 'Dead man statute', 'Parol Evidence', 'Ante mortem statement', 'Suicide note', 'Dead man statute', 1),
(10, 'Factum probans means __.', 'evidentiary fact', 'preponderance of evidence', 'ultimate fact', 'evidentiary fact', 'sufficiency of evidence', 1),
(11, 'It refers to family history or descent transmitted from one generation to another.', 'pedigree', 'inheritance', 'heritage', 'pedigree', 'culture', 1),
(12, 'The authority of the court to take cognizance of the case in the first instance.', 'Original Jurisdiction', 'Appellate Jurisdiction', 'General Jurisdiction', 'Original Jurisdiction', 'Exclusive Jurisdiction', 1),
(13, 'A person designated by the court to assist destitute litigants.', 'Counsel de officio', 'Counsel de officio', 'Attorney on record', 'Attorney at law', 'Special counsel', 1),
(14, 'Berto, with evident premeditation and treachery killed his father. What was the crime committed?', 'Parricide', 'Murder', 'Parricide', 'Homicide', 'Qualified Homicide ', 1),
(15, 'PO3 Bagsik entered the dwelling of Totoy against the latter’s will     on suspicion that Bitoy keep unlicensed firearms     in his home. What was the crime committed by PO3 Bagsik?', 'Violation of Domicile', 'Trespass to Dwelling', 'Violation of Domicile', 'Usurpation Of Authority', 'Forcible Trespassing ', 1),
(16, 'Charlie and Lea had been married for more than 6 months.They     live together with the children of Lea from her first husband.     Charlie had sexual relation with Jane, the 14 year old daughter of     Lea.Jane loves Charlie very much.What was the crime ', 'Qualified Seduction', 'Simple Seduction', 'Qualified Seduction', 'Consented Abduction', 'Rape', 1),
(17, 'Prof. Jose gave a failing grade to one of his students, Lito. When     the two met the following day, Lito slapped     Prof. Jose on the face.  What was the crime committed by Lito?', 'Direct Assault', 'Corruption of Public Officials', 'Direct Assault', 'Slight Physical Injuries', 'Grave Coercion', 1),
(18, 'A warrant of arrest was issued against Fred for the killing of his parents.  When PO2 Tapang tried to arrest him,Fred gave him 1 million pesos to set him free. PO2 Tapang refrained in arresting Fred.  What was the crime committed by PO2 Tapang?', 'Qualified Bribery       ', 'Indirect Bribery   ', 'Direct Bribery', 'Corruption of Public Officials', 'Qualified Bribery       ', 1),
(19, 'Which of the following is the exemption to the hearsy rule made under the consciousness of an impending death?', 'Dead man statute', 'Parol Evidence', 'Ante mortem statement', 'Suicide note', 'Dead man statute', 1),
(20, 'Factum probans means __.', 'evidentiary fact', 'preponderance of evidence', 'ultimate fact', 'evidentiary fact', 'sufficiency of evidence', 1),
(21, 'It refers to family history or descent transmitted from one generation to another.', 'pedigree', 'inheritance', 'heritage', 'pedigree', 'culture  ', 1),
(22, 'The authority of the court to take cognizance of the case in the first instance.', 'Original Jurisdiction', 'Appellate Jurisdiction', 'General Jurisdiction', 'Original Jurisdiction', 'Exclusive Jurisdiction', 1),
(23, 'A person designated by the court to assist destitute litigants.', 'Counsel de officio', 'Counsel de officio', 'Attorney on record', 'Attorney at law', 'Special counsel', 1),
(24, 'Charlie and Lea had been married for more than 6 months.They     live together with the children of Lea from her first husband.     Charlie had sexual relation with Jane, the 14 year old daughter of     Lea.Jane loves Charlie very much.What was the crime committed     by Charlie?', 'Qualified Seduction', 'Simple Seduction', 'Qualified Seduction', 'Consented Abduction', 'Rape', 1),
(25, 'Prof. Jose gave a failing grade to one of his students, Lito. When the two met the following day, Lito slapped     Prof. Jose on the face.  What was the crime committed by Lito?', 'Direct Assault', 'Corruption of Public Officials', 'Direct Assault', 'Slight Physical Injuries', 'Grave Coercion', 1),
(26, 'A warrant of arrest was issued against Fred for the killing of his parents.  When PO2 Tapang tried to arrest him,Fred gave him 1 million pesos to set him free. PO2 Tapang refrained in arresting Fred.  What was the crime committed by PO2 Tapang?', 'Qualified Bribery', 'Indirect Bribery   ', 'Direct Bribery', 'Corruption of Public Officials', 'Qualified Bribery', 1),
(27, 'Which of the following is the exemption to the hearsy rule made under the consciousness of an impending death?', 'Dead man statute', 'Parol Evidence', 'Ante mortem statement', 'Suicide note', 'Dead man statute', 1),
(28, 'Factum probans means __.', '', 'preponderance of evidence', 'ultimate fact', 'evidentiary fact', 'sufficiency of evidence', 1),
(29, 'It refers to family history or descent transmitted from one generation to another.', 'pedigree', 'inheritance', 'heritage', 'pedigree', 'culture', 1),
(30, 'The authority of the court to take cognizance of the case in the first instance.', 'Original Jurisdiction', 'Appellate Jurisdiction', 'General Jurisdiction', 'Original Jurisdiction', 'Exclusive Jurisdiction', 1),
(31, 'A person designated by the court to assist destitute litigants.', 'Counsel de officio', 'Counsel de officio', 'Attorney on record', 'Attorney at law', 'Special counsel', 1),
(32, 'Which of the following is not covered by the Rules on Summary      Procedure?', 'The penalty is more than six months of imprisonment', 'Violation of rental laws', 'Violation of traffic laws', 'The penalty is more than six months of imprisonment', 'The penalty  does not exceed six months imprisonment', 1),
(33, 'It refers to a territorial unit where the power of the court is to      be exercised.', 'venue', 'jurisdiction     ', 'jurisprudence', 'venue', 'bench  ', 1),
(34, 'The Anti-Bouncing Check Law.', 'BP.22', 'RA 6425', 'RA 8353', 'BP.22', 'RA 6975', 1),
(35, 'The taking of another person’s personal property, with intent to gain, by means of force and intimidation', 'robbery', 'qualified theft', 'robbery', 'theft', 'malicious mischief       ', 1),
(36, 'Felony committed when a person compels another by means of force, violence or intimidation to do something against his will, whether right or wrong.', 'grave coercion', 'grave threat', 'grave coercion', 'direct assault', 'slander by deed ', 1),
(37, 'A medley of discordant voices, a mock serenade of discordant noises designed to annoy and insult.', 'charivari', 'Tumultuous', 'charivari', 'sedition', 'scandal', 1),
(38, 'These are persons having no apparent means of subsistence but have the physical ability to work and neglect to apply himself or herself to lawful calling.', 'vagrants ', 'Pimps', 'prostitutes', 'gang members', 'vagrants ', 0),
(39, 'A medley of discordant voices, a mock serenade of discordant noises designed to annoy and insult.', 'charivari', 'Tumultuous', 'charivari', 'sedition', 'scandal', 1),
(40, 'These are persons having no apparent means of subsistence but have the physical ability to work and neglect to apply himself or herself to lawful calling.', 'vagrants ', 'Pimps', 'prostitutes', 'gang members', 'vagrants ', 1),
(41, 'The unauthorized act of a public officer who compels another person to change his residence.', 'expulsion', 'violation of domicile   ', 'arbitrary detention', 'expulsion', 'direct assault', 1),
(42, 'The deprivation of a private person of the liberty of another person without legal grounds.', 'illegal detention   ', 'illegal detention   ', 'arbitrary detention', 'forcible abduction', 'forcible detention      ', 1),
(43, 'An offense committed by a married woman through carnal knowledge with a man not her husband who knows her to be married, although the marriage can be later declared void.', 'adultery', 'concubinage', 'bigamy', 'adultery', 'immorality ', 1),
(44, 'Age of absolute irresponsibility in the commission of a crime.', '9 years old and below', '15-18 years old', '18-70  years old', '9 years old and below', 'between 9 and 15 years old', 1),
(45, 'Those who, not being principals cooperate in the execution of the offense by previous or simultaneous acts.', 'Accomplices', 'Accomplices', 'Suspects', 'principal actors', 'accessories', 1),
(46, 'The loss or forfeiture of the right of the government to execute the final sentence after the lapse of a certaintime fixed by law.', 'prescription of penalty', 'prescription of crime', 'prescription of prosecution', 'prescription of judgement   ', 'prescription of penalty', 1),
(47, 'A kind of executive clemency whereby the execution of penalty is suspended.', 'reprieve   ', 'Pardon', 'commutation', 'amnesty', 'reprieve   ', 1),
(48, 'Infractions of mere rules of convenience designed to secure a more orderly regulation of the affairs of the society.', 'mala prohibita', 'mala prohibita', 'mala in se', 'private crimes', 'public crimes', 1),
(49, 'Felony committed by a public officer who agrees to commit an act in consideration of a gift and this act is connected with the discharge of his public duties.', 'direct bribery', 'qualified bribery', 'direct bribery', 'estafa', 'indirect bribery', 1),
(50, 'The willful and corrupt assertion of falsehood under oath of affirmation, administered by authority of law on a material matter.', 'perjury', 'libel   ', 'falsification', 'perjury', 'slander', 1),
(51, 'Deliberate planning of act before execution.', 'evident premeditation', 'Treachery', 'evident premeditation', 'ignominy', 'cruelty  ', 1),
(52, 'Whenever more than 3 armed malefactors shall have acted together in the commission of a crime.', 'band', 'gang', 'conspiracy', 'band', 'piracy', 1),
(53, 'The failure to perform a positive duty which one is bound to.', 'omission', 'Negligence', 'imprudence', 'omission', 'act ', 1),
(54, 'Ways and means are employed for the purpose of trapping and capturing the law breaker in the execution of his criminal plan.', 'entrapment ', 'Misfeasance', 'entrapment ', 'inducement', 'instigation ', 1),
(55, 'Those where the act committed is a crime but for reasons of public policy and sentiment there is no penalty imposed.', 'absolutory causes', 'impossible crimes', 'aggravating circumstances', 'absolutory causes', 'Complex Crimes', 1),
(56, 'One of the following is an alternative circumstance.', 'intoxication    ', 'Insanity', 'intoxication       ', 'passion or obfuscation', 'evident premeditation', 1),
(57, 'The amount and nature of the demands of the police service', 'Time', 'Clientele', 'Purpose', 'Time', 'Process  ', 2),
(58, 'The PNP has a program which ensures the deployment of       policemen in busy and crime prone areas.  This is called', 'patrol and visibility program', ' patrol deployment program', 'roving patrol program', '  patrol and visibility program', 'police patrol program          ', 2),
(59, 'All regional appointments of commissioned officers commence      with the rank of: ', ' Inspector', 'Senior Police Officer I', 'Inspector', 'Police Officer III', 'Senior Inspector           ', 2),
(60, 'In busy and thickly populated commercial streets like those       in Divisoria, police patrol is very necessary.  Since there       are several types of patrol, which of the following will you       recommend:', ' Foot patrol', ' Horse patrol', 'Mobile patrol', 'Foot patrol', ' Helicopter patrol         ', 2),
(61, 'It is the product resulting from the collection, evaluation,       analysis, and interpretation of all available information which       concerns one or more aspects of criminal activity and which is       immediately or potentially significant to police planning.', 'intelligence       ', ' Investigation', ' Information', 'Data', 'intelligence       ', 2),
(62, 'These are work programs of line divisions which related to       the nature and extent of the workload and the availability          of resources.', ' operational plan', 'administrative plan', ' operational plan', 'strategic plan', 'tactical plan   ', 2),
(63, 'It is the premier educational institution for the police,       fire and jail personnel.', 'Philippine Public Safety College   ', 'Philippine Military Academy', 'Development Academy of the Philippines', 'Philippine College of Criminology', 'Philippine Public Safety College   ', 2),
(64, ' A crew which is assigned to a mobile car usually consist of', 'a driver, recorder and supervisor    ', 'a driver and intelligence agent', 'a driver and traffic man', ' a driver and a recorder', 'a driver, recorder and supervisor    ', 2),
(65, 'An industrial complex must establish its first line of      physical defense.  It must have', 'perimeter barriers', 'the building itself   ', 'perimeter barriers', 'communication barriers', ' window barriers     ', 2),
(66, 'All of the following are members of the Peopleâ€™s Law        Enforcement Board (PLEB), EXCEPT:', 'A bar member chosen by the Integrated bar of the  Philippines (IBP)   ', 'Three (3) members chosen by the Peace and Order                    Council from among the respected members of the                   community.', 'Any barangay Captain of the city/municipality                   concerned chosen by the association of the                   Barangay Captains.', 'Any member of the Sangguniang   Panglungsod/Pambayan', 'A bar member chosen by the Integrated bar of the                   Philippines (IBP)   ', 2),
(67, 'It is the circumspect inspection of a place to determine its suitability for a particular operational purpose.', '  Survey', ' Inspection     ', ' Surveillance', '  Survey', 'Casing       ', 2),
(68, 'In the civil service system, merit and fitness are the primary        considerations in the', 'promotional system', ' two-party system   ', 'evaluation system', 'promotional system', 'spoils system      ', 2),
(69, 'In the de-briefing, the intelligence agent is asked to discuss       which of the following:', ' his observations and experiences in the intelligence  ', 'his educational profile and schools attended', 'his personal circumstances such as his age, religious                   affiliation, address, etc.', ' his political inclination and/or party affiliation', ' his observations and experiences in the intelligence  ', 2),
(70, ' It is a natural or man-made structure or physical device which      is capable of restricting, determine, or delaying illegal access to      an installation.', 'barrier', 'alarm    ', ' wall   ', 'barrier', ' hazard            ', 2),
(71, 'What form of intelligence is involved when information is       obtained without the knowledge of the person against whom       the information or documents may be used, or if the       information is clandestinely acquired?', 'covert    ', 'covert    ', ' overt   ', 'active', 'underground          ', 2),
(72, ' The provincial Governor shall choose the provincial Director from a list of ___________ eligible recommended by the      Regional Director, preferable from the same province, city,  municipality.  ', ' three (3)   ', ' three (3)   ', 'five (5)', 'four (4)     ', '  Two (2)        ', 2),
(73, ' Republic Act 6975 provides that on the average nationwide,      the manning levels of the PNP shall be approximately in      accordance with a police-to-population ratio of:', ' one (1) policeman for every five hundred (500)                   inhabitants.', 'one (1) policeman for every seven hundred (700)                   inhabitants.', 'one (1) policeman for every one thousand five hundred                   (1,500) C.inhabitants.', ' one (1) policeman for every five hundred (500)                   inhabitants.', ' one (1) policeman for every one thousand (1,000)                   inhabitants.  ', 2),
(74, 'In disaster control operations, there is a need to establish a        ______where telephones or any means of communication      shall  ', 'command post      ', 'ensure open lines of communication.', 'command post      ', 'operations center', 'field room          ', 2),
(75, 'Registration of a security agency must be done at the______.', 'PNP Criminal Investigation Group      ', 'Securities and Exchange Commission', 'National Police Commission', 'Department of National Defense', 'PNP Criminal Investigation Group      ', 2),
(76, 'The cheapest form of police patrol.', 'Foot Patrol', ' Bicycle Patrol', 'Foot Patrol', 'Motorcycle Patrol', 'Helicopter Patrol   ', 2),
(77, 'The budget is a _________________ in terms of expenditure        requirements.', 'financial plan   ', 'tactical plan        ', 'financial plan   ', 'work plan', 'control plan       ', 2),
(78, 'The term used for the object of surveillance is a subject while       the investigator conducting the surveillance is:', 'rabbit           ', 'rabbit           ', 'surveillant', 'traffic enforcement', 'patrol         ', 2),
(79, 'It is a police function which serves as the backbone of the      police service.  In all types of police stations, there is a specific      unit assigned to undertake this function in view of its      importance.', 'patrol    ', 'vice control           ', 'criminal investigation', 'Traffic management', 'patrol    ', 2),
(80, ' Which of the following is considered as the most important      factor in formulating an effective patrol strategy?', 'adequacy of resources of the police station', 'training of station commander', 'adequacy of resources of the police station', 'rank of the patrol commander', 'salary rates of police personnel            ', 2),
(81, 'Who among the following have summary disciplinary powers      over errant police members?', 'Chief, PNP       ', 'District Director   ', 'Provincial Director', 'Chief of Police', 'Chief, PNP       ', 2),
(82, 'You are the Patrol Supervisor for the morning shift.  You donâ€™t        have enough men to cover all the patrol beats.  Which of the        following will you implement?', 'assign mobile patrols only in strategic places', 'assign roving mobile patrol with no foot patrol', 'assign mobile patrols only in strategic places', 'maintain your patrolmen at the station and just wait                  for calls for police assistance', 'assign foot patrol in congested and busy patrol beats                  but assign a roving mobile patrol to cover beats which                  are not covered by foot patrol    ', 2),
(83, ' The father of organized military espionage was:', 'Frederick the Great               ', 'Akbar     ', 'Alexander the Great   ', 'Genghis Khan', 'Frederick the Great               ', 2),
(84, 'Which of the following is the most common reason why informer        can give information to the police?', 'monetary reward', 'wants to be known to the policeman', 'monetary reward', 'as a good citizen', 'revenge ', 2),
(85, 'To improve delegation, the following must be done, EXCEPT:', 'require completed work', 'establish objectives and standards', 'count the number of supervisor', 'require completed work', 'define authority and responsibility ', 2),
(86, 'What administrative support unit conducts identification and      evaluation of physical evidences related to crimes, with      emphasis on their medical, chemical, biological and physical      nature.', 'Crime Laboratory   ', 'Logistics Service    ', 'Crime Laboratory   ', 'Communication and Electronic service', 'Finance Center    ', 2),
(87, 'Those who are charged with the actual fulfillment of the       agencyâ€™s mission are ________.', ' line  ', 'staff        ', 'supervision   ', 'management', ' line  ', 2),
(88, 'When the subject identifies or obtains knowledge that the        investigation is conducting surveillance on him, the latter is:', ' burnt out', 'cut out   ', 'sold out', ' burnt out', 'get out   ', 2),
(89, 'Small alley like those in the squatters area of Tondo can be      best penetrated by the police through:', ' foot patrol      ', ' foot patrol      ', 'mobile patrol   ', 'highway patrol', 'helicopter patrol            ', 2),
(90, 'Some of the instructions in foot surveillance are the following,        EXCEPT', 'drop paper, never mind what happens to the paper', 'stop quickly, look behind', 'drop paper, never mind what happens to the paper', ' window shop, watch reflection', 'retrace steps    ', 2),
(91, 'On many occasions, the bulk of the most valuable information        comes from:', 'newspaper clippings', 'business world   ', 'newspaper clippings', 'an underworld informant', 'communications media    ', 2),
(92, 'Highly qualified police applicants such as engineers, nurses and        graduates of forensic sciences can enter the police service as        officers through:', ' lateral entry', 'regular promotion          ', ' commissionship', ' lateral entry', 'attrition       ', 2),
(93, 'Police Inspector Juan Dela Cruz is the Chief of Police of a      municipality.  He wants his subordinates to be drawn closer to      the people in the different barangays.  He should adopt which      of the following projects?', ' COPS on the blocks    ', ' COPS on the blocks    ', ' Oplan Bakal', ' Oplan Sandugo', ' Complan Pagbabago          ', 2),
(94, ' What should be undertaken by a Security Officer before he can        prepare a comprehensive security program for his industrial        plan?', 'security survey', 'security conference      ', 'security check  ', 'security survey', 'security education   ', 2),
(95, 'This patrol method utilizes disguise, deception and lying in wait        rather than upon high-visibility patrol techniques.', ' low-visibility patrol      ', 'low-visibility patrol      ', 'directed deterrent patrol', 'decoy patrol', ' high-visibility patrol        ', 2),
(96, ' It enforces all traffic laws and regulations to ensure the safety      of motorists and pedestrians and attain an orderly traffic.', 'Traffic Management Command', 'Civil Relations Unit    ', 'Traffic Operations Center', 'Traffic Management Command', ' Aviation Security Command    ', 2),
(97, 'A method of collecting information wherein the investigator        merely uses his different senses.', 'observation         ', 'observation         ', '  casing', 'research', 'interrogation         ', 2),
(98, 'In stationary surveillance, the following must be observed,        EXCEPT', 'recognize fellow agent', 'never meet subject face to face', 'avoid eye contact', 'recognize fellow agent', ' if burnt out, drop subject       ', 2),
(99, 'Pedro is a thief who is eying at the handbag of Maria.  PO1        Santos Reyes is standing a few meters from Maria.The thiefâ€™s        desire to steal is not diminished by the presence of the police        officer but the _______________ for successful theft is.', 'ambition     ', 'ambition     ', 'feeling', 'intention', 'opportunity          ', 2),
(100, 'Graduates of the Philippine National Police Academy (PNPA) are        automatically appointed to the rank of:', 'Senior Police Officer 1', ' Senior Superintendent     ', 'Inspector', 'Senior Police Officer 1', 'Superintendent       ', 2),
(101, 'PNP in-service training programs are under the responsibility of         the:', ' PNP Directorate for Personnel and Records                  Management', 'PNP Directorate for Plans', 'PNP Directorate for Human Resource and Doctrine                  Development', ' PNP Directorate for Personnel and Records                  Management', ' PNP Directorate for Comptrollership    ', 2),
(102, 'One way of extending the power of police observation is to get        information from persons within the vicinity.In the police work,        this is called:', ' field inquiry', ' data gathering       ', ' field inquiry', 'interrogation', 'interview        ', 2),
(103, 'Dogs have an acute sense of _______________ thus, their       utilization in tracking down lost persons or illegal drugs.', ' smell         ', ' smell         ', 'hearing', 'eating', 'drinking   ', 2),
(104, 'Intelligence on _________________ makes heavy use of       geographic information because law enforcement officials must       know exact locations to interdict the flow of drugs.', 'Narcotics Trafficking', 'Logistics   ', 'Human Cargo Trafficking', 'Narcotics Trafficking', ' Economic resources     ', 2),
(105, 'Which of the following is most ideally suited to evacuation and        search-and-rescue duties?', 'helicopter       ', 'motorcycle', ' helicopter    ', 'patrol car', ' bicycle               ', 2),
(106, 'A method of collection of information wherein the investigator        tails or follows the person or vehicle.', 'casing', 'research   ', 'undercover operation', 'casing', ' surveillance   ', 2),
(107, 'There is freehand invitation and is considered as the most  skilful\r\n    class of forgery\r\n', 'simulated or copied forgery\r\n', 'simulated or copied forgery\r\n', 'simple forgery', ' traced forgery', 'carbon tracing           ', 3),
(118, ' Condensed and compact set of authentic specimen which is\r\n    adequate and proper, should contain a cross section\r\n    of the material from known sources. \r\n', 'standard document', 'disguised document ', 'questioned document', ' standard document', 'requested document ', 3),
(119, ' Specimens of hand writing or of typescript which is of known \r\n    origin.\r\n', ' Exemplars', ' Letters', ' Samples\r\n', ' Exemplars\r\n', ' Documents  ', 3),
(120, 'A document which is being questioned because of its origin, its  \r\n    contents or the circumstances or the stories of its production. \r\n          A.    disputed document\r\n', ' questioned document    ', 'disputed document\r\n', ' standard document\r\n', 'requested document\r\n', ' questioned document    ', 3),
(121, 'The art of beautiful writing is known as\r\n', 'Calligraphy', 'Drafting\r\n', ' Calligraphy\r\n', 'Art appreciation\r\n', 'Gothic   ', 3),
(122, '. Any written instrument by which a right or obligation is    established.', 'Document', ' Certificate', 'Subpoena', 'Warrant', 'Document ', 3),
(123, 'A type of fingerprint pattern in which the slope or downward \r\n      flow  of the innermost sufficient recurve is towards the \r\n      thumb of radius   bone of the hand of origin.\r\n', ' radial loop            ', '  ulnar loop\r\n', 'tented arch\r\n', ' accidental whorl\r\n', ' radial loop            ', 3),
(124, 'The forking or dividing of one line to two or more branches.\r\n', 'Bifurcation     ', 'Ridge\r\n', ' Island\r\n', 'Delta\r\n', 'Bifurcation     ', 3),
(125, 'The point on a ridge at or in front of and nearest the center  of\r\n    the divergence of the type lines.\r\n', 'Delta', ' Divergence\r\n', '  Island\r\n', ' Delta\r\n', 'Bifurcation          ', 3),
(126, 'The following are considerations used for the identification  \r\n      of a  loop except one:\r\n', 'Core\r\n', 'Delta\r\n', ' Core\r\n', ' a sufficient recurve\r\n', 'a ridge count across a looping bridge    ', 3),
(127, 'The process of recording fingerprint through the use of \r\n      fingerprint ink. \r\n', 'Fingerprinting\r\n', 'Pathology\r\n', 'Fingerprinting\r\n', ' Dactyloscopy\r\n', 'Printing press    ', 3),
(130, 'The fingerprint method of identification.\r\n', 'Dactyloscopy', 'Pathology\r\n', 'Fingerprinting\r\n', ' Dactyloscopy\r\n', 'Printing press                 ', 3),
(131, 'Two lines that run parallel or nearly parallel, diverge and \r\n     surround  the pattern area. \r\n', 'Type line\r\n', 'Ridges', 'Delta\r\n', 'Type line\r\n', 'Bifurcation    ', 3),
(132, 'A part of the whorl or loop in which appear the cores, deltas\r\n     and ridges.\r\n', ' pattern area\r\n', ' type line\r\n', 'bifurcation\r\n', ' pattern area\r\n', 'furrow    ', 3),
(133, 'Fingerprints left on various surfaces at the crime scene which are\r\n    not clearly visible.\r\n', ' latent fingerprints', 'plane impressions', ' visible fingerprints\r\n', ' rolled impressions\r\n', ' latent fingerprints', 3),
(134, 'The impressions left by the patterns of ridges and depressions on\r\n     various surfaces.\r\n', 'fingerprints           ', 'kiss marks\r\n', 'finger rolls\r\n', 'thumb marks\r\n', 'fingerprints           ', 3),
(135, 'Which among the following is not considered as a basic fingerprint     pattern? \r\n', 'Accidental', '  Arch\r\n', ' Accidental\r\n', ' Loop\r\n', ' Whorl  ', 3),
(136, 'The minimum identical characteristics to justify the identity\r\n     between two points. \r\n', 'Nine        ', 'Eighteen\r\n', ' Fifteen\r\n', 'Twelve\r\n', 'Nine        ', 3),
(137, 'A fingerprint pattern in which the ridges form a sequence of\r\n    spirals around core axes.\r\n', '   whorl\r\n', '   whorl\r\n', ' double loop\r\n', '  central pocket loop\r\n', '  accidental  ', 3),
(138, 'A fingerprint pattern which one or more ridges enter on either side\r\n    of the impression by a recurve, and terminate on the same side\r\n    where the ridge has entered.  \r\n', ' ulnar loop\r\n', ' Loop\r\n', ' radial loop', 'ulnar loop', 'tented arch     ', 3),
(139, 'A person allowed who gives his/her opinion or conclusion on a\r\n    given scientific evidence is considered\r\n', ' expert witness', ' interrogator\r\n', ' expert witness\r\n', ' prosecutor\r\n', 'judge \r\n', 3),
(140, '.The application of scientific knowledge and techniques in the  \r\n     detection of crime and apprehension of criminals. \r\n', ' Criminalistics     ', ' Law Enforcement Administration', '  Forensic Administration\r\n', 'Criminal Psychology\r\n', ' Criminalistics     ', 3),
(141, 'Lens that is characterized by a thicker center and thinner sides.\r\n', 'concave lens', 'concave lens', ' convex lens\r\n', '  negative lens\r\n', 'positive lens       ', 3),
(142, 'The normal developing time of a paper or film.\r\n', '5-10 minutes\r\n', '30-60 minutes\r\n', '20-30  minutes\r\n', '5-10 minutes', '1- 2 minutes                                   ', 3),
(143, 'This part of a camera is used to allow light to enter  the lens for\r\n     a  predetermined time interval.\r\n', 'shutter', ' holder of sensitized material\r\n', 'view finder\r\n', 'shutter\r\n', 'view finder            ', 3),
(144, 'A lens with a focal length of less than the diagonal of its negative\r\n    material.\r\n', ' telephoto lens\r\n', ' telephoto lens\r\n', 'long lens\r\n', ' normal lens\r\n', 'wide angle lens', 3),
(145, 'Chemical used as an accelerator in a developer solution.\r\n', 'Sodium Carbonate ', 'Potassium Bromide\r\n', 'Sodium Carbonate   \r\n', ' Sodium Sulfite', ' Hydroquinone  ', 3),
(146, 'A part of a camera used in focusing the light from the subject\r\n', 'lens', ' view finder', 'lens\r\n', 'shutter\r\n', '  light tight box  ', 3),
(147, 'A component of the polygraph instrument which records the \r\n    breathing of the subject.\r\n', ' Pneumograph', 'Cardiosphygmograph\r\n', 'Pneumograph\r\n', 'Galvanograph\r\n', ' Kymograph         ', 3),
(148, 'A component of the polygraph instrument which records the\r\n    blood  pressure and the pulse rate of the subject.\r\n', 'Cardiosphygmograph\r\n', 'Cardiosphygmograph\r\n', ' Pneumograph\r\n', 'Galvanograph\r\n', 'Kymograph               ', 3),
(149, 'A component of the polygraph instrument which is a motor that drives or pulls the chart paper under the recording pen simultaneously at the rate of 6 or 12 inches per minute.  \r\n', ' Kymograph                                     \r\n\r\n', ' Cardiosphygmograph\r\n', ' Pneumograph\r\n', 'Galvanograph\r\n', ' Kymograph                                     \r\n\r\n', 3),
(150, 'The following are specific rules to be followed in the formulation of\r\n     the questions in a polygraph test except one.\r\n', ' Questions must all be in the form of accusations\r\n', 'Questions must be clear and phrased in a language the \r\n                 subject can easily understand.   \r\n', ' Questions must be answerable by yes or no.\r\n', ' Questions must be as short as possible.\r\n', ' Questions must all be in the form of accusations\r\n', 3),
(151, 'In “ polygraph examination”, the term “ examination” means a  \r\n     detection of\r\n', ' deception           ', 'Forgery\r\n', 'Emotion\r\n', ' the mind\r\n', ' deception           ', 3),
(152, 'It refers to an emotional response to a specific danger, which   \r\n     appears to go beyond a person’s defensive power.\r\n', 'Fear', 'Fear\r\n', ' Stimuli\r\n', 'Response\r\n', '   Reaction            ', 3),
(153, 'The primary purpose of pre-test interview.\r\n', 'Prepare subject for polygraph test\r\n', ' Prepare subject for polygraph test\r\n', ' Obtain confession\r\n', 'Make the subject calm\r\n', ' Explain the polygraph test procedures  ', 3),
(154, 'The deviation from normal tracing of the subject in the relevant  \r\n     question.\r\n', ' positive response', 'positive response\r\n', ' specific response\r\n', 'normal response\r\n', 'reaction   ', 3),
(155, 'The study of the effect of the impact of a projectile on the\r\n     target.  \r\n', 'Terminal Ballistics\r\n', ' Terminal Ballistics\r\n', ' Internal Ballistics\r\n', '  External Ballistics', 'Forensic Ballistics  ', 3),
(156, ' The unstable rotating motion of the bullet is called\r\n', ' Yaw', 'Trajectory\r\n', 'Yaw\r\n', ' Velocity\r\n', 'Gyroscopic action                             ', 3),
(157, 'The part of the mechanism of a firearm that withdraws the shell \r\n      or cartridge from the chamber.\r\n', 'Ejector', 'Extractor\r\n', 'Ejector\r\n', 'Striker\r\n', 'Trigger            ', 3),
(158, 'The pattern or curved path of the bullet in flight.\r\n', 'Trajectory           ', 'Yaw\r\n', ' Range\r\n', ' Velocity\r\n', 'Trajectory           ', 3),
(159, 'This refers to the deflection of the bullet from its normal path\r\n      after striking a resistant surface.\r\n', 'Ricochet', 'Misfire\r\n', ' Mushroom\r\n', 'Ricochet\r\n', 'Key hole shot             ', 3),
(160, 'A type of primer with two vents or flash holes.\r\n', 'Boxer Primer    ', 'Bordan primer', ' Berdan Primer\r\n', ' Baterry Primer\r\n', 'Boxer Primer    ', 3),
(161, 'This refers to the helical grooves cut in the interior surface of\r\n      the   bore.\r\n', ' breaching              ', 'swaging \r\n', 'ogive\r\n', 'rifling\r\n', ' breaching              ', 3),
(162, 'It refers to the unstable rotating motion of the bullet.\r\n', 'Yaw\r\n', 'Trajectory\r\n', 'Yaw\r\n', ' Velocity\r\n', 'Gyproscopic action                 ', 3),
(163, 'It is the measurement of the bore diameter from land to land.\r\n', ' Calibre\r\n', ' Calibre\r\n', 'Mean diameter\r\n', 'Gauge         ', ' Rifling                ', 3),
(164, ' He is known as the Father of Ballistics.', 'Calvin Goddard         ', 'Hans Gross\r\n', ' Charles Waite\r\n', '  Albert Osborne\r\n', 'Calvin Goddard         ', 3),
(165, ' A document in which some issues have been raised or is under\r\n     scrutiny.\r\n', 'Questioned Document    ', ' Void Document\r\n', '   Illegal Document\r\n', '  Forged Document\r\n', 'Questioned Document    ', 3),
(166, 'The following are characteristics of   forgery  except one:\r\n', 'Presence of Natural Variation', 'Presence of Natural Variation', 'Multiple Pen Lifts\r\n', 'Show bad quality  of ink lines\r\n', ' Patchwork Appearance                ', 3),
(167, 'Standards which are prepared upon the request of the\r\n     investigator and for the purpose of comparison with the\r\n     questioned document.  \r\n', 'requested standards       ', ' relative standards\r\n', 'collected standards\r\n', 'extended standards\r\n', 'requested standards       ', 3),
(168, 'Any stroke which goes back over another writing stroke.\r\n', 'retracing', ' natural variation', 'rhythm', 'retracing', ' shading                                       \r\n \r\n', 3),
(169, 'An extra judicial confession obtained from a suspect is admissible\r\n    in a court of law if it was made in the presence of a counsel\r\n    of his own choice and must be in\r\n', ' writing', 'the presence of  a  fiscal   \r\n', 'the presence of a police investigator\r\n', 'writing', 'front of a judge', 4),
(170, ' Fiscals and Prosecutors  are under the control and supervision\r\n    of the\r\n', 'Department of Justice       ', 'National Bureau of Investigation\r\n', 'Department of the Interior and Local Government\r\n', 'Supreme Court\r\n', 'Department of Justice       ', 4),
(171, 'The questioning of a person in a formal and systematic way and is\r\n  most often used to question criminal suspects to determine their\r\n  probable guilt or innocence.  \r\n', 'interrogation     ', 'Inquiry\r\n', ' Interview\r\n', 'polygraph examination\r\n', 'interrogation     ', 4),
(172, 'A form of investigation in which the investigator assume a\r\n   different and unofficial identity.\r\n', 'Undercover work                   ', ' Tailing\r\n', ' Casing\r\n', 'Espionage\r\n', 'Undercover work                   ', 4),
(173, 'A type of surveillance in which extreme precautions and actions\r\n   are taken in not losing the subject.\r\n', '', 'loose tail\r\n', ' casing\r\n', ' pony tail\r\n', ' close tail', 4),
(174, 'A type of shadowing employed when a general impression of the\r\n   subject’s habits and associates is required.\r\n', '  loose tail\r\n', '  loose tail\r\n', ' casing\r\n', 'pony tail\r\n', 'close tail     ', 4),
(175, 'A surveillance activity for the purpose of waiting the anticipated\r\n   arrival of a suspect or observing his actions from a fixed location.\r\n', '  Stake out\r\n', ' Casing\r\n', 'Tailing\r\n', 'Stake out', ' Espionage   ', 4),
(176, 'An examination of an individual’s person, houses, or effects or a\r\n  building, or premises with the purpose of discovering contraband\'s\r\n  or personal properties connected in a crime.\r\n', 'Search', ' Search\r\n', ' Raid', ' Investigation\r\n', 'Seizure       ', 4),
(177, 'A kind of evidence that tends to prove additional evidence of a\r\n   different character to the same point.\r\n', ' Corroborative evidence\r\n', ' Corroborative evidence\r\n', 'Circumstantial evidence\r\n', 'Direct evidence', 'Real evidence     ', 4),
(178, 'The process of bringing together in a logical manner all evidence\r\n     collected during the investigation and present it to the\r\n     prosecutor.\r\n', 'case preparation\r\n', 'case preparation\r\n', 'order maintenance\r\n', ' crime prevention\r\n', ' public service          ', 4),
(179, 'Ways and means are resorted for the purpose of trapping and\r\n     capturing the law breaker during the execution of a criminal act.\r\n', 'Entrapment      ', ' Instigation', 'Inducement\r\n', ' Buy bust operation\r\n', 'Entrapment      ', 4),
(180, 'A special qualification for an undercover agent.\r\n', ' excellent memory      ', ' excellent built\r\n', 'excellent eyesight\r\n', '  excellent looks\r\n', ' excellent memory      ', 4),
(181, 'The discreet observation of places, persons and vehicles for the\r\n   purpose of obtaining information concerning the identities or\r\n   activities of suspects.\r\n', 'surveillance  ', ' close observation\r\n', 'espionage\r\n', ' tailing\r\n', 'surveillance  ', 4),
(182, 'The questioning of a person by law enforcement officers after  \r\n      that person has been taken into custody.\r\n', 'interrogation', ' preliminary investigation', ' interrogation\r\n', ' custodial investigation\r\n', ' cross examination  ', 4),
(183, 'As a general rule, a warrant of arrest can be served at\r\n', ' any day and at any time of the day or night\r\n', 'day time   ', ' night time\r\n', 'any day and at any time of the day or night', ' weekdays     ', 4),
(184, 'Measures through which police seek to detect crimes, or\r\n    attempts to be present when they are committed, through the\r\n    use of the undercover agents, electronic devices for wiretapping\r\n    or bugging, and stakeouts.\r\n', ' pro-active measure', 'preventive measures\r\n', '   countermeasures', 'pro-active measures\r\n', ' tape measures      ', 4),
(185, '.A police activity directed toward the identification and\r\n    apprehension of alleged criminals and the accumulation,\r\n    preservation, and presentation of evidence regarding their\r\n    alleged crimes.\r\n', 'Criminal investigation        ', 'police patrol\r\n', ' police intelligence\r\n', 'Criminal procedure', 'Criminal investigation        ', 4),
(186, 'An extension or continuation of the preliminary investigation.\r\n', 'follow-up investigation  ', ' initial investigation   ', 'custodial investigation\r\n', 'secondary investigation\r\n', 'follow-up investigation  ', 4),
(187, 'To obtain admission and confession of guilt is the primary purpose\r\n     of\r\n', 'Interrogation          ', 'Interview\r\n', 'Surveillance\r\n', ' Investigation\r\n', 'Interrogation          ', 4),
(188, 'Such facts and circumstances that would lead a reasonably\r\n    discreet and prudent man to believe that an offense has been\r\n    committed and that the object sought in connection with the \r\n    offense are in the place sought to be searched.\r\n', 'probable cause', 'prima facie evidence\r\n', 'probable cause', ' prejudicial question\r\n', '.res ipsa loquitur     ', 4),
(189, 'A search warrant shall be valid for _____ days from its date.\r\n    Thereafter, it shall be void.\r\n', '10\r\n', '10\r\n', '15\r\n', ' 30\r\n', '45      ', 4),
(190, 'It means that a specific crime was committed at a specified time,\r\n    date and place, and that the person named in his report\r\n    committed the crime.\r\n', ' corpus delicti\r\n', ' corpus delicti\r\n', 'sufficiency of evidence\r\n', 'stare decisis\r\n', ' parens patriae  ', 4),
(191, 'Police seek to prevent crime by being present in places where\r\n    crimes might be committed and by alerting citizens to refrain from\r\n    practices that make them or their property vulnerable.\r\n', 'opportunity denial', ' opportunity denial\r\n', ' order maintenance\r\n', 'criminal investigation\r\n', ' police intelligence    ', 4),
(192, 'A statement of the suspect directly acknowledging his guilt.\r\n', 'Confession\r\n', ' Admission\r\n', 'Confession\r\n', '  Deposition\r\n', ' Accusation ', 4),
(193, 'It may be a direct acknowledgement of the truth of the guilty\r\n    fact as charge or of some essential part of the commission of the\r\n    criminal act itself.\r\n', ' Confession', ' Admission\r\n', 'Confession\r\n', ' Deposition', ' Accusation         ', 4),
(194, 'It may be a self-incriminatory statement by the subject falling\r\n    short of an acknowledgement of guilt.\r\n', ' Admission', ' Admission', 'Confession\r\n', ' Deposition\r\n', 'Accusation   ', 4),
(195, 'The simplest type of interview which concerns with the gathering\r\n     of information regarding the personal circumstances of a\r\n     person who is the subject of investigation.\r\n', 'background interview\r\n', ' background interview\r\n', 'personal interview\r\n', 'intimate interview\r\n', '  pre-game interview  ', 4),
(196, 'It means method of operation.\r\n', ' modus operandi       ', 'corpus delicti\r\n', 'parens patriae\r\n', ' stare decisis', ' modus operandi       ', 4),
(197, 'It is one which induces the criminal to act and need not be\r\n    shown in order to obtain conviction.\r\n', 'Motive\r\n', '  Intent\r\n', ' Motive\r\n', ' Opportunity\r\n', ' Inducement    ', 4),
(198, 'The three tools in criminal investigation, whereby their\r\n    application varies in proportion on their necessity to establish\r\n    the guilt of the accused in a criminal case.\r\n', '  information, interrogation, instrumentation\r\n', '  information, interrogation, instrumentation\r\n', 'detection, apprehension, conviction', 'inquiry, observation, conclusion\r\n', ' magnifying glass, pencil, tape measure    \r\n\r\n', 4),
(199, 'The simple questioning of a person who is cooperating in the\r\n    investigation.\r\n', ' Interview\r\n', ' Interview\r\n', 'Inquiry\r\n', ' Interrogation\r\n', '  Instrumentation      ', 4),
(200, '.It involves a number of persons who might have handled \r\n    evidence     between the time of the commission of the alleged\r\n    offense and the disposition of the case, should be kept to\r\n    a minimum\r\n', 'chain of command\r\n', 'chain of command\r\n', 'chain of custody\r\n', 'evidence tracking\r\n', '.tracing evidence                         ', 4),
(201, 'A kind of evidence which may link the suspect to the crime scene\r\n    or offense. Examples are fingerprints, impressions, blood etc.\r\n', 'tracing evidence', '  physical evidence', 'associative evidence', ' tracing evidence', ' factual evidence    ', 4),
(202, 'Articles and materials which are found in connection with an\r\n    investigation and which help in establishing the identity of the\r\n    perpetrator or the circumstances under which the crime was \r\n    committed or which in general, assist in the prosecution of the\r\n     criminal.\r\n', 'physical evidence\r\n', 'physical evidence\r\n', 'documentary evidence\r\n', 'tracing evidence\r\n', 'testimonial evidence            ', 4),
(203, 'The following are different techniques in interrogation except \r\n      one:\r\n', ' financial assistance\r\n', ' sympathetic approach\r\n', 'emotional appeal\r\n', 'financial assistance\r\n', '  friendliness    ', 4),
(204, 'This may be applicable to a crime scene which is approximately\r\n    circular or oval.  The searchers gather at the center and proceed\r\n    outward along radii or spokes.\r\n', 'wheel method', 'strip method\r\n', 'wheel method', 'spiral method\r\n', 'zone method', 4),
(205, 'The area to be searched is divided into quadrants and each\r\n    searcher is assigned to one quadrant.\r\n', 'zone method       ', 'strip method\r\n', 'wheel method\r\n', 'spiral method\r\n', 'zone method       ', 4),
(206, 'The searchers follow each other in the path of a crime scene\r\n    beginning in the outside and circling around a central point.\r\n', 'spiral method\r\n', ' strip method\r\n', ' wheel method\r\n', 'spiral method\r\n', 'zone method  ', 4),
(207, 'A kind of gathering information whereby a subject is being\r\n     followed.\r\n', 'Tailing', ' Convoy\r\n', 'Caravan\r\n', ' Tailing', 'Surveillance ', 4),
(208, 'Another term for tailing.\r\n', 'Backing\r\n', 'Impersonating\r\n', 'Backing\r\n', 'Supporting\r\n', 'Shadowing                                ', 4),
(209, 'A person who gives necessary information to the investigator.\r\n    He may give the information openly and even offer to be a\r\n    witness or he may inform the investigator surreptitiously and\r\n    request to remain anonymous.\r\n', 'Informant      ', ' Witness\r\n', ' Expert witness\r\n', 'Hostile witness', 'Informant      ', 4),
(210, 'The use of an equipment or tool to listen and record discreetly\r\n    conversations of other people.\r\n', ' Bugging', '  Bugging\r\n', ' Dubbing\r\n', 'Mimicking\r\n', 'Tapping                                      \r\n', 4),
(211, 'The questioning of persons not suspected of being involved in a\r\n    crime,but who knows about the crime or individuals involved in it.\r\n', ' interview\r\n', ' Interrogation\r\n', '  rumor mongering\r\n', ' interview\r\n', 'inquiry                                        \r\n\r\n', 4),
(212, 'An objective of criminal investigation.', 'identify criminals', 'determine the motive', ' identify criminals\r\n', ' rehabilitate criminals\r\n', 'prevent crimes', 4),
(213, 'A term used to describe a transition which occur in the\r\n    development of a fire, when, for example, most of all the\r\n    combustible surfaces within a room are heated above their\r\n    ignition temperature at the same time.\r\n', 'Flash over', 'Intensity\r\n', 'Ignition\r\n', ' Flash over\r\n', ' Starter                ', 4),
(214, 'A term of the start of the combustion, its detailed process of\r\n    a solid is very complicated, since the proportion of different\r\n    flammable vapors varies from one material to another and  \r\n    contact with oxygen must take place before combustion can\r\n    begin.\r\n', ' Ignition\r\n', ' Intensity\r\n', '  Ignition\r\n', '  Flash over\r\n', ' Starter   ', 4);
INSERT INTO `exam` (`examid`, `examques`, `answer`, `options1`, `options2`, `options3`, `options4`, `classid`) VALUES
(215, 'The term describes the transfer of heat through a gas or vacuum in a similar way to that of light.\r\n', ' Radiation', ' Ignition\r\n', 'Convection\r\n', ' Radiation\r\n', 'Conduction                         ', 4),
(216, 'The transfer of heat within a solid material from hotter to\r\n    cooler parts.\r\n', 'Conduction ', ' Ignition\r\n', ' Convection\r\n', 'Radiation', 'Conduction ', 4),
(217, 'The greatest concern of the firemen at the fire/crime scene is to\r\n', ' preserve the fire/crime scene\r\n', '  interview witnesses\r\n', ' view the site of the crime\r\n', ' preserve the fire/crime scene\r\n', 'opportunity in the fire/crime scene \r\n\r\n', 4),
(218, 'Most malicious fires are set by individuals secretly; it is\r\n    either set for revenge or self aggrandizing; or set by psychotic\r\n    fire setter, or for sexual gratification.\r\n', 'solitary fire setter          ', ' group fire setter\r\n', 'arson for profit\r\n', '  fire starter\r\n', 'solitary fire setter          ', 4),
(219, 'An old woman approached PO3 Gomez asking the police officer to run after an unidentified young man who allegedly snatched her  mobile phone. PO3 Gomez declined claiming that the man was   already a block away from them and besides the police officer  alleged that he is rushing home for an urgent matter. The  officer’s  refusal to help the old woman is an example of\r\n', 'nonfeasance\r\n', 'nonfeasance\r\n', 'malfeasance \r\n', 'misfeasance\r\n', 'misconduct ', 5),
(220, 'When the accused is found not guilty of the charges presented  before the court, he is', 'acquitted\r\n', 'convicted\r\n', 'suspended', ' acquitted\r\n', ' absuelto        ', 5),
(221, ' Guilty by act means', ' Actus Reus\r\n', ' Actus Reus\r\n', 'Actus Numbus', 'Giltus reus', ' Rea mensa ', 5),
(222, 'If physiological or psychological dependence on some agent are obviously detected from a person, he is in the state of\r\n', 'dependency or addiction\r\n', 'dependency or addiction\r\n', 'comatose\r\n', 'insanity\r\n', 'metamorphosis ', 5),
(223, ' Which of the following is described as the threatening behaviors, either verbal or physical, directed at others\r\n', 'Aggression\r\n', 'Abnormality\r\n', 'Dependency\r\n', 'Aggression\r\n', ' Violence ', 5),
(224, 'What aggressive behavior includes repeated noncompliance to a direct command, verbal abuse-name calling, verbal abuse-threat,\r\nand physical abuse?\r\n', 'Interactive', 'Interactive', 'Isolated\r\n', 'Covert', 'Overt   ', 5),
(225, 'What aggressive behavior includes cursing/swearing, intentional destruction of property, and self destructive behaviors?\r\n', 'Isolated\r\n', 'Isolated\r\n', 'Covert\r\n', 'Interactive\r\n', 'Overt  ', 5),
(226, 'What aggressive behavior includes the emotional and cognitive components of aggression such as anger and hostility?\r\n', 'Covert', 'Covert', 'Dynamic\r\n', 'Interactive\r\n', 'Directive', 5),
(227, 'When there is an apparent, intentional, and physically aggressive act irrespective of severity against another person, there is\r\n', 'Assault', 'Battering', 'Assault', 'Chaos', 'Crisis ', 5),
(228, 'What kind of assault committed when it includes kicking, punching,deliberately throwing an object and drawing a lethal\r\nweapon against someone?\r\n', 'Physical', 'Mental\r\n', 'Physical', 'Sexua', 'Verbal', 5),
(229, 'Allege means', 'Assert or make an accusation', 'Assert or make an accusation', 'remove from its position\r\n', 'direct an act from doing\r\n', ' intentional mutilation ', 5),
(230, 'What do you call measures other than judicial proceedings used to deal with a young person alleged to have committed an\r\noffense?\r\n', 'Alternative measures\r\n', 'Rehabilitation', 'Alternative measures\r\n', 'Individual response against bad behavior', 'Extra judicial proceedings ', 5),
(231, '.What do we call the psychological, emotional and behavioral reactions and deficits of women victims and their inability to respond effectively to repeated physical and psychological violence?\r\n', 'Battered Woman Syndrome\r\n', 'Woman Menopausal Syndrome', 'Battered Woman Syndrome\r\n', 'Violence against women', 'M\'Naghten Rule', 5),
(232, 'What is the theory that tumors and seizures have been associated with aggression and violent behavior?\r\n', 'Brain lesion theory', 'Brain lesion theory', 'Conspiracy theory', 'Neurotic Mind theory\r\n', 'Dementia praecox ', 5),
(233, '.A term used to describe a clinical condition in young children who have received non-accidental, inexcusable violence or injury, ranging from minimal to severe or fatal trauma, at the hand of an adult in a position of trust, generally a parent or guardian\r\n', 'Battered Child Syndrome', 'Battered Child Syndrome', 'Incapacitated Child Syndrome\r\n', 'Abuse Trauma Syndrome', 'None of these ', 5),
(234, 'When we say capital offense, it means:\r\n', 'a very serious crime, for which the death penalty is imposed\r\n', 'a very serious crime, for which the death penalty is imposed\r\n', 'the highest penalty for selected offenses', ' total punishment of offender by incarceration', ' all of the above   ', 5),
(235, 'At trial, the authenticity of an item as evidence is crucial, whether it be a physical object like a bullet, a medical record or a photograph. The item cannot be offered in court without a testimonial sponsor who can vouch for its unaltered authenticity to the court and the jury. To validate an items unaltered authenticity, a record must be kept of each and every time the item changes hands. This refers to\r\n', 'Records management', 'Records management', 'Presentation of evidence in court', 'Chain of custody', 'Laboratory analysis of items', 5),
(236, 'The negligent treatment or maltreatment of a child by a parent or caretaker under circumstances indicating harm or threatened harm to the child\'s health or welfare is known as\r\n', 'Child Dilemma', 'Child Abuse', 'Child Neglect\r\n', 'Child Dilemma', 'Child in conflict with the law ', 5),
(237, 'The exchange of sexual favors for money or other material goods without any emotional involvement  involving a person under the\r\nage of 18 years is called\r\n', 'Child prostitution', 'Child prostitution', 'Child trafficking', 'Both A and B are correct\r\n', 'Both A and B are wrong', 5),
(238, 'An abuse that is kept secret for a purpose, concealed, or underhanded is called\r\n', 'Clandestine abuse', 'Clandestine abuse', ' Clinical abuse\r\n', 'Overt abuse', 'Abuse of authority ', 5),
(239, 'A false belief based on an incorrect inference about external reality and firmly sustained despite clear evidence to the contrary, and which is not related to cultural or religious beliefs\r\n', ' Incoherence\r\n', ' False alarm', ' Wrong perception\r\n', ' Incoherence\r\n', 'Delusion ', 5),
(240, 'Which of the following is an act committed by a juvenile for which an adult could be prosecuted in a criminal court?\r\n', 'Delinquency offense\r\n', 'Adult offense', 'Status offense', 'Delinquency offense\r\n', 'Children in conflict with the law ', 5),
(241, 'Anything that has been used, left, removed, altered or contaminated during the commission of a crime by either the\r\nsuspect or victim is part of\r\n', 'Evidence', 'Evidence', 'Modus operandi\r\n', 'Recidivism\r\n', 'Preservation of crime scene', 5),
(242, 'Generally, putting to death a person, as a legal penalty, is called\r\n', ' Execution\r\n', ' Infliction\r\n', ' Execution\r\n', 'Murder', 'Capital punishment   ', 5),
(243, 'Among the following, what is the form of abuse where the use of the victim is for selfish purposes and or financial gain?\r\n', 'Racketeering\r\n', 'Verbal Abuse\r\n', 'Exploitation', 'Racketeering\r\n', 'Khotongism    ', 5),
(244, 'The most common legal grounds for termination of parental rights, also a form of child abuse in most states. Sporadic visits, a few phone calls, or birthday cards are not sufficient to maintain parental rights.\r\n', 'Abuse\r\n', 'Exploitation', 'Abuse\r\n', ' Neglect', 'Abandonment  ', 5),
(245, 'Which of the following is defined as acts or omissions by a legal caretaker that encompasses a broad range of acts, and usually requires proof of intent.\r\n', 'Abuse', 'Abuse', 'Exploitation', 'Neglect', 'Abandonment ', 5),
(246, 'The phase of a delinquency hearing similar to a \"trial\" in adult criminal court,except that juveniles have no right to a jury trial, a public trial, or bail.\r\n', 'Adjudication\r\n', 'Acquittal', 'Conviction\r\n', 'Adjudication\r\n', 'Entertainment ', 5),
(247, 'Any of the processes involving enforcement of care, custody, or support orders by an executive agency rather than by courts or\r\njudges.\r\n', 'Administrative procedure\r\n', 'Criminal procedure', 'Administrative procedure\r\n', 'Summary procedure\r\n', ' Trial ', 5),
(248, 'A legal relationship between two people not biologically related,usually terminating the rights of biological parents, and usually with a trial \"live-in\" period. Once it is finalized, the records are sealed and only the most compelling interests will enable disclosure of documents.\r\n', 'Adoption\r\n', 'Adoption\r\n', ' Foster parenting\r\n', 'Common law relationship\r\n', 'Brotherhood', 5),
(249, 'What is the legal doctrine establishing court as determiner of best environment for raising child which is an alternative to the Parens Patriae Doctrine?\r\n', 'Best interest of the Child Rule\r\n', 'Rights of Society\r\n', 'Miranda Doctrine\r\n', 'Best interest of the Child Rule\r\n', 'Parental Obligation   ', 5),
(250, 'What was the case that allowed second prosecution in adult court for conviction in juvenile court which was based on idea\r\nthat first conviction was a \"civil\" matter?\r\n', 'Breed v. Jones', 'Case Law\r\n', 'Breed v. Jones', 'Miranda v. Arizona\r\n', 'Matt v. Jeff    ', 5),
(251, 'The Law established by the history of judicial decisions in cases decided by judges, as opposed to common law which is\r\ndeveloped from the history of judicial decisions and social customs.\r\n', 'Case Law\r\n', 'Case Law\r\n', 'Breed v. Jones', 'Miranda v. Arizona\r\n', 'Matt v. Jeff', 5),
(252, 'The filing of legal papers by a child welfare agency when its investigation has turned up evidence of child abuse. This is a civil,rather than criminal, charge designed to take preventive action, like appointment of a guardian for at-risk children before abuse occurs. \r\n', ' Child protection action\r\n', 'Child prosecution\r\n', ' Child protection action\r\n', 'Parens Patriae', 'Preliminary investigation', 5),
(253, 'The act of being responsible for enforcing child support obligations is known as\r\n', 'Child support      ', ' Child’s care', 'Parental Guidance', ' Child at risk', 'Child support      ', 5),
(254, 'A court order for placement in a secure facility, separate from adults, for the rehabilitation of a juvenile delinquent.\r\n', 'Custodial confinement\r\n', ' Summon', 'Subpoena', 'Custodial confinement\r\n', 'Rehabilitation order ', 5),
(255, '___ is anyone under the care of someone else. A child ceases to be a dependent when they reach the age of emancipation.\r\n', 'Dependent\r\n', 'Delinquent\r\n', 'Dependent\r\n', 'Independent\r\n', 'Recognizance ', 5),
(256, 'It a phase of delinquency proceeding similar to \"sentencing\" phase of adult trial. The judge must consider alternative, innovative, and individualized sentences rather than imposing standard sentences.\r\n', 'Disposition', 'Preliminary investigation\r\n', 'Judgment\r\n', 'Disposition', 'Probationary period  ', 5),
(257, 'The independence of a minor from his or her parents before reaching age of majority is known as\r\n', 'Emancipation\r\n', 'Enlightenment', 'Recognizance\r\n', 'Emancipation\r\n', 'Freedom from parental obligation', 5),
(258, 'A clause requiring government to treat similarly situated people the same or have good reason for treating them differently.\r\nCompelling reasons are considered to exist for treating children differently.\r\n', 'Equal Protection', 'Bill of Rights', 'Equal Protection', 'Parens Patriae\r\n', 'Diversion ', 5),
(259, 'What is the legal doctrine preventing unemancipated children from suing their parents?\r\n', 'Family Immunity Doctrine\r\n', 'Parens Patriae Doctrine\r\n', 'Equal Protection', 'Family Immunity Doctrine\r\n', 'Poisonous Tree Doctrine ', 5),
(260, 'What is the legal doctrine holding parents liable for injuries caused by a child\'s negligent driving or other actions?\r\n', 'Family Purpose Doctrine', 'Family Purpose Doctrine', 'Family Immunity Doctrine\r\n', 'Parens Patriae Doctrine\r\n', 'None of the above  ', 5),
(261, 'Guardian ad litem means:', '“For the Proceeding\"\r\n', '“For the Proceeding\"\r\n', '“Protection of child by the law”\r\n', '“Guardians of the little children”', '“Legal authority”   ', 5),
(262, 'A court order giving an individual or organization legal authority over a child. A guardian of the person is usually an individual and the child is called a ward. A guardian of the estate is usually an organization, like a bank, which manages the property and assets of a child\'s inheritance. Guardians are usually compensated for their services.\r\n', 'Guardianship\r\n', 'Guardianship\r\n', 'Order of Authority\r\n', 'In Loco Parentis\r\n', 'Parens Patriae   ', 5),
(263, 'Teachers, administrators, and babysitters who are viewed as having some temporary parental rights & obligations are considered\r\n', 'In Loco Parentis', 'Guardianship\r\n', 'Order of Authority', 'In Loco Parentis', 'Parens Patriae ', 5),
(264, 'What is the legal doctrine establishing \"parental\" role of state over welfare of its citizens, especially its children?\r\n', 'Parens Patriae ', 'Guardianship\r\n', 'Order of Authority\r\n', 'In Loco Parentis\r\n', 'Parens Patriae ', 5),
(265, 'The emergency, temporary custody by a child welfare agency, police agency, or hospital for reasons of immanent danger to the child is called\r\n', 'Protective custody', 'Preventive detention', ' Diversion\r\n', 'Witness protection program\r\n', 'Protective custody', 5),
(266, 'What is the legal doctrine granting custody to the parent whom the child feels the greatest emotional attachment to?\r\n', 'Psychological Parent', 'Psychological Parent', 'Maternity', 'Paternity\r\n', 'Parental Selection   ', 5),
(267, 'A disposition requiring a defendant to pay damages to a victim. The law prohibits making it a condition of receiving probation. Poor families cannot be deprived of probation simply because they are  too poor to afford it.\r\n', 'Restitution\r\n', 'Bond', 'Surety\r\n', 'Restitution\r\n', 'Protection money         ', 5),
(268, 'An activity illegal when engaged in by a minor, but not when done by an adult. Examples include truancy, curfew, running away, or habitually disobeying parents.\r\n', 'Status Offenses\r\n', 'Adult Offenses\r\n', 'Minor Offenses', 'Status Offenses\r\n', 'Stubbornness ', 5),
(269, 'It is the authority of the President of the Philippines to suspend the execution of a penalty, reduce the sentence and extinguish criminal liability.\r\n', 'Executive clemency', 'Parole', 'Executive clemency', ' Pardon  ', 'President’s clemency   ', 6),
(270, 'The B.J.M.P. is under the administration of the:\r\n', 'D.I.L.G.', 'Executive Department    ', ' P.N.P.', 'D.I.L.G.', 'D.O.J   ', 6),
(271, 'There are three (3) casework techniques applied by the parole officer, which is not included?\r\n', 'The trick and treat techniques\r\n', 'The trick and treat techniques\r\n', 'The executive techniques\r\n', 'The guidance, counseling and leadership techniques\r\n', 'The manipulative techniques ', 6),
(272, 'The basis of this old school of penology is the human free-will.\r\n', 'Classical School\r\n', 'Penology School ', 'Classical School\r\n', ' Neo-classical', 'Positivist', 6),
(273, 'This helps the prisoner/detainee in the resolution of his problems\r\n', 'Counseling', 'Meeting', ' Working\r\n', 'Recreation   ', 'Counseling', 6),
(274, 'Takes charge of financial matters especially in programming, budgeting, accounting, and other activities related to financial services.  It consolidates and prepares financial reports and related statements of subsistence outlays and disbursements in the operational of the jail.\r\n', 'Budget and finance branch  ', 'Budget and finance branch  ', 'General services branch', 'Property and supply branch', 'Mess services branch     ', 6),
(275, 'Operation conducted by the BJMP wherein a prisoner maybe checked at any time.  His bedding\'s, lockers and personal belongings may also be opened at anytime, in his presence, whenever possible.  This practice is known as:\r\n', '', 'Check and balance', 'S.O.P.\r\n', 'Inventory\r\n', 'Operation Greyhound ', 6),
(276, 'Pardon cannot be extended to one of the following instances.', 'Impeachment', 'Murder', 'Brigandage', ' Rape', 'Impeachment', 6),
(277, 'It refers to commission of another crime during service of sentence of penalty imposed for another previous offense.\r\n', 'Quasi-recidivism', 'Recidivism', 'Delinquency', 'Quasi-recidivism', 'City prisoner  ', 6),
(278, 'A person who is detained for the violation of law or ordinance and has not been convicted is a -\r\n', 'Detention Prisoner', 'Detention Prisoner', 'Provincial Prisoner\r\n', 'Municipal Prisoner', 'City Prisoner ', 6),
(279, 'The following are forms of executive clemency, EXCEPT\r\n', 'Reform model\r\n', 'Commutation', 'Reform model\r\n', 'Amnesty', 'Pardon    ', 6),
(280, ' It is that branch of the administration of Criminal Justice System charged with the responsibility for the custody, supervision, and rehabilitation of the convicted offender.\r\n', 'corrections', 'conviction ', 'corrections', 'penalty', 'punishment  ', 6),
(281, 'Which of the following instances Pardon cannot be exercised?', 'before trial', 'before conviction', 'before trial', 'after conviction\r\n', 'during service of sentence  ', 6),
(282, 'This is a procedure which permits a jail prisoner to pursue his normal job during the week and return to the jail to serve his sentence during the weekend or non-working hours.\r\n', 'delayed sentence', 'Amnesty\r\n', 'good conduct time allowance\r\n', 'probation', 'delayed sentence', 6),
(283, 'The following are the justifications of punishment, EXCEPT', 'Redress', 'Retribution   ', 'Deterrence', 'Redress', 'Expiration or atonement  ', 6),
(284, 'Pardon is exercised when the person is __.', 'already convicted', 'already convicted', 'not yet convicted', 'about to be convicted', 'serve the sentence', 6),
(285, 'The idea that punishment will be give the offender lesson by showing to others what would happen to them if they have  committed   the heinous crime.\r\n', 'Deterrence\r\n', 'Protection', 'Deterrence\r\n', 'Lethal injection', 'Stoning   ', 6),
(286, 'For a convicted offender, probation is a form of __.\r\n', 'Treatment', 'Punishment', 'Treatment', 'Enjoyment', 'Incarceration   ', 6),
(287, ' For amnesty to be granted, there should be __.\r\n', 'Concurrence of the congress  ', 'Recommendation from U.N.', 'Recommendation from C.H.R.', 'Application from C.H.R', 'Concurrence of the congress  ', 6),
(288, 'The head of the Bureau of Corrections is the\r\n', 'Director', 'Director', 'Secretary of the DND\r\n', 'Chief of Executive\r\n', 'Prison Inspector ', 6),
(289, 'Which program plays a unique role in the moral and spiritual regeneration of the prisoner?\r\n', 'Religious programs      ', 'None of these\r\n', 'Work programs', 'Education programs\r\n', 'Religious programs      ', 6),
(290, 'It is a penalty wherein a convicted person shall not be permitted to enter the place designated in the sentence or within the radius therein specified, which shall not be more than 250 and not less than 25 kilometers from the place designated.\r\n', 'None of these\r\n', 'Fine', 'None of these\r\n', 'P22.00/day', 'P19.00/day ', 6),
(291, 'Giving punishment to a person so to serve as an example to others is the theory of\r\n', 'Exemplary', 'Self-defense', 'Social defense', 'Exemplary', 'Equality ', 6),
(292, 'The purpose of the decree on probation shall be to', '', 'provide an opportunity for the reformation of a penitent offender\r\n', 'prevent the commission of offenses', 'promote the correction and rehabilitation of an offender by providing him with individualized treatment\r\n', 'All of these', 6),
(293, 'In the Philippines, the most common problem of the National Prison is\r\n', 'Lack of adequate funding', 'Excessive number of escapes', 'Overcrowding', 'Disagreement about their mess\r\n', 'Lack of adequate funding', 6),
(294, 'A justification of penalty which states that nobody can assume the suffering for a crime committed by others.\r\n', 'Personal', 'Justice\r\n', 'Personal', 'Legal', 'Certain  ', 6),
(295, 'These are the factors considered in diversification, EXCEPT;\r\n', 'Mother of offender', 'Age of offenders ', 'Mother of offender', 'Sex of offenders', 'Medical condition', 6),
(296, 'This branch takes charge of the preparation of the daily menu, makes foodstuff purchases, prepares and cooks the food and     \r\nserves it to the inmates.It maintains a record of daily purchases and consumption and submits a daily report to the warden.\r\n', 'Mess services Branch  ', 'General Services Branch', 'Mittimus Computing Branch', 'Budget and Finance', 'Mess services Branch  ', 6),
(297, 'Under Article VII, Section 10 paragraph (B) of the Philippines Constitution, pardoning power is vested with the\r\n', 'Chief Executive', 'Department of Justice', 'Judiciary', 'Chief Executive', 'Legislative', 6),
(298, 'The temporary stay of execution of sentence is called', 'Reprieve\r\n', 'Reprieve\r\n', 'Pardon', 'Communication', 'Amnesty', 6),
(299, 'Parole is a matter of ___.', 'Privilege', 'Privilege', 'Right', 'Grace\r\n', 'Requirement ', 6),
(300, 'This group consists of chronic troublemakers but not as   dangerous as the super security prisoners.  They are not allowed to work outside the institution.\r\n', 'maximum security prisoners\r\n', 'maximum security prisoners\r\n', 'super security prisoners', 'minimum security prisoners\r\n', 'medium security prisoners   ', 6),
(301, 'Among the following, which has the authority to grant parole?\r\n', 'Board of Pardons and Parole\r\n', 'President', 'Board of Pardons and Parole\r\n', 'Director of Prison\r\n', 'Court', 6),
(302, 'A recipient of absolute pardon is ________ from civil liability imposed upon him by the sentence.\r\n', 'not exempted', 'partially exempted\r\n', 'exempted\r\n', 'conditionally exempted\r\n', 'not exempted', 6),
(303, 'It is an act of clemency which changes a heavier sentence to a less serious one or a longer term to a shorter term.\r\n', 'Commutation', 'Amnesty ', 'Commutation', 'Reprieve', 'none of these  ', 6),
(304, ' ___ is an act of grace and the recipient is not entitled to it as a matter of right.\r\n', 'Parole\r\n', 'Pardon\r\n', 'Parole\r\n', 'Probation\r\n', 'none of these', 6),
(305, 'In probation system’s philosophy and concept, it is stated that the individual has the ability to ____ and to modify his anti-social behavior with the right kind of help.\r\n', 'change', 'challenge', 'none of these\r\n', 'change', 'aggravate his behavior  ', 6),
(306, 'The Bureau of Corrections is under the _____.\r\n', 'Department of Justice', 'Department of Social Welfare and Development\r\n', 'Department of Justice', 'Department of the Interior and Local Government\r\n', 'Department of Health ', 6),
(307, ' A person who is sentenced to serve a prison term of over three (3) years is a _________________.\r\n', 'City prisone', 'Municipal prisoner\r\n', 'Detention prisoner\r\n', 'National or Insular prisoner\r\n', 'City prisone', 6),
(308, 'The Head of Bureau of Corrections is also the', 'Director of the Bureau of Corrections', 'Chief of the Bureau of Corrections', 'Director of the Bureau of Corrections', 'Superintendent of the Bureau of Corrections', 'Warden', 6),
(309, 'What is the type of Jails under the Supervision of the BJMP?', 'City and Municipal Jails\r\n', 'Provincial and sub-Provincial Jails', 'City and Municipal Jails\r\n', 'Lock up Jails', 'Insular Jails ', 6),
(310, 'Provincial Jails were first established in 1910 under the American Regime.  At present, who supervises and controls the  said jails?\r\n', 'Provincial Government\r\n', 'BJMP', 'Provincial Government\r\n', 'DOJ\r\n', 'Municipal or City Mayor ', 6),
(311, 'What is the primary purpose of imprisonment?\r\n', 'Rehabilitation and Reformation', 'Rehabilitation and Reformation', 'To stand trial\r\n', 'Punishment', 'Socialization ', 6),
(312, 'Which is a place of confinement for persons awaiting trial or court action and where the convicted offenders serve short sentences or penalty of imprisonment?\r\n', 'Jail\r\n', 'Jail\r\n', 'Lock-up', 'Penitentiary\r\n', 'Detention Cells ', 6),
(313, 'Which is a warrant issued by the court bearing its seal and signature of the judge directing the jail or prison authorities to\r\nreceive the convicted offender for service of sentence or detention?\r\n', 'Sentence Mittimus', 'Mittimus', 'Detention Mittimus\r\n', 'Sentence Mittimus', 'Detention Warrant', 6),
(314, 'The maintenance or care and protection accorded to people who by authority of law are temporarily incarcerated for violation\r\nof laws and also those who were sentenced by the court to serve judgment is called –\r\n', 'custody\r\n', 'custody\r\n', 'safe-keeping\r\n', 'classification', 'caring', 6),
(315, 'Which of these refers to the assigning or grouping of offenders according to their sentence, gender, age, nationality, health,\r\n criminal record, etc.?\r\n', 'None of these', 'None of these', 'Custody', 'Security', 'Safe-keeping', 6),
(316, 'The institution for dangerous but not incorrigible prisoners in the Philippines is the\r\n', 'Medium Security Institution\r\n', 'NBP', 'Medium Security Institution\r\n', 'Maximum Security Institution\r\n', 'Minimum Security Institutio', 6),
(317, 'The act of grace from a sovereign power inherent in the state which exempts an individual from the punishment which the law imposes or prescribes for his crime, extended by the President thru the recommendation of the Board of Parole and Pardon is called\r\n', 'Pardon\r\n', 'Amnesty', 'Parole', 'Pardon\r\n', 'Probation', 6),
(318, 'Under the prison service manual, the prescribed color of prison uniform for maximum security prison is -\r\n', 'Orange ', 'Orange ', 'Brown', 'Stripe Orange\r\n', 'Blue', 6),
(319, 'test', 'test', 'testtes', 'tests', 'tset', 'test', 8),
(321, 'q', '1', '1', '2', '3', '4', 14),
(322, 'q', '2', '1', '2', '3', '4', 14);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `assigntid` varchar(255) NOT NULL,
  `oras` varchar(255) NOT NULL,
  `araw` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `teachfname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `assigntid`, `oras`, `araw`, `activity`, `teachfname`) VALUES
(456, '111-222', '08:49:49am', '2023-11-29', 'Login in', 'kyla'),
(457, '111-222', '08:51:10am', '2023-11-29', 'Add Exam', 'kyla'),
(458, '111-222', '08:51:31am', '2023-11-29', 'Delete Exam ', 'kyla'),
(459, '111-222', '08:52:06am', '2023-11-29', 'Delete Announcement', 'kyla'),
(460, '0320-0540', '03:50:43pm', '2023-11-29', 'Login in', 'lyn'),
(461, '0320-0570', '03:53:51pm', '2023-11-29', 'Login in', 'kyla'),
(462, '0320-0540', '03:55:38pm', '2023-11-29', 'Add Quiz ', 'lyn'),
(463, '0320-0540', '03:56:01pm', '2023-11-29', 'Delete quiz ', 'lyn'),
(464, '0320-0570', '01:47:51pm', '2023-12-04', 'Login in', 'kyla'),
(465, '0320-0570', '08:04:21pm', '2023-12-04', 'Login in', 'kyla'),
(466, '0320-0570', '08:05:27pm', '2023-12-04', 'Edit Quiz ', 'kyla'),
(467, '0320-0570', '08:05:41pm', '2023-12-04', 'Edit Quiz ', 'kyla'),
(468, '0320-0570', '08:42:11pm', '2023-12-04', 'Login in', 'kyla'),
(469, '0320-0570', '08:53:44pm', '2023-12-04', 'Login in', 'kyla'),
(470, '0320-0570', '10:21:16pm', '2023-12-04', 'Login in', 'kyla'),
(471, '0320-0570', '10:38:58pm', '2023-12-04', 'Login in', 'kyla'),
(472, '0320-0493', '10:46:01pm', '2023-12-04', 'Login in', 'Frederick'),
(473, '0320-0570', '11:00:41pm', '2023-12-04', 'Login in', 'kyla'),
(474, '0000-0000', '03:08:52pm', '2023-12-05', 'Login in', 'ExampleTeacher'),
(475, '0000-0000', '03:38:36pm', '2023-12-05', 'Login in', 'ExampleTeacher'),
(476, '0320-0570', '10:45:04pm', '2023-12-05', 'Login in', 'kyla'),
(477, '0320-0570', '10:46:44pm', '2023-12-06', 'Login in', 'kyla'),
(478, '0320-0570', '10:56:22pm', '2023-12-06', 'Login in', 'kyla'),
(479, '0320-0570', '11:01:58pm', '2023-12-06', 'Login in', 'kyla'),
(480, '0320-0570', '08:38:51pm', '2023-12-07', 'Login in', 'kyla'),
(481, '0320-0570', '08:53:32pm', '2023-12-07', 'Login in', 'kyla'),
(482, '0320-0570', '10:21:50pm', '2023-12-08', 'Login in', 'kyla'),
(483, '0320-0570', '10:33:15pm', '2023-12-08', 'Login in', 'kyla'),
(485, '0000-0000', '05:50:10pm', '2023-12-09', 'Login in', 'Example'),
(486, '0000-0000', '05:50:42pm', '2023-12-09', 'Add Handle Class ', 'Example'),
(487, '0000-0000', '03:36:16pm', '2023-12-10', 'Login in', 'Example'),
(488, '0000-0000', '03:37:25pm', '2023-12-10', 'Add Quiz ', 'Example'),
(489, '0000-0000', '03:37:34pm', '2023-12-10', 'Delete quiz ', 'Example'),
(490, '0000-0000', '03:49:32pm', '2023-12-10', 'Login in', 'Example');

-- --------------------------------------------------------

--
-- Table structure for table `learnm`
--

CREATE TABLE `learnm` (
  `learnmid` int(11) NOT NULL,
  `subid` int(11) NOT NULL,
  `module` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learnm`
--

INSERT INTO `learnm` (`learnmid`, `subid`, `module`, `video`) VALUES
(21, 30, 'CA -  Institutional Corrections.pdf', ''),
(22, 31, 'ca - Non-Institutional Corrections.pdf', ''),
(23, 22, 'CDI - Drug Education and Vice Control.pdf', ''),
(24, 23, 'CDI - Fire Technology and Arson Investigation.pdf', ''),
(25, 17, 'CDI - Fundamentals of Criminal Investigation.pdf', ''),
(26, 20, 'CDI - Special Crime Investigation.pdf', ''),
(27, 18, 'CDI - Traffic Management and Accident Investigation.pdf', ''),
(29, 2, 'CJPE - Criminal Law Book II.pdf', ''),
(30, 3, 'CJPE - Criminal Procedure,.pdf', ''),
(31, 4, 'CJPE - Evidence and Court Testimony.pdf', ''),
(32, 13, 'C - Forensic Ballistics.pdf', ''),
(33, 16, 'C - Legal Medicine.pdf', ''),
(34, 11, 'C - Personal Identification.pdf', ''),
(35, 12, 'C -  Police Photography.pdf', ''),
(36, 15, 'C - Polygraph â€” Lie Detection.pdf', ''),
(37, 14, 'C - Questioned Documents Examination.pdf', ''),
(38, 10, 'LEA - Comparative Police System.pdf', ''),
(39, 6, 'LEA - Industrial Security Administration.pdf', ''),
(40, 8, 'LEA - Police Intelligence.pdf', ''),
(41, 5, 'LEA-Police Organization and Administration with Police Planning.pdf', ''),
(42, 7, 'LEA - Police Patrol Operations with Police Communication System.pdf', ''),
(43, 9, 'LEA - Police Personnel and Records Management,.pdf', ''),
(44, 26, 'SCE - Ethics and Values.pdf', ''),
(45, 28, 'SCE - Human Behavior and Crisis Management.pdf', ''),
(46, 24, 'SCE - Introduction to Criminology and Psychology of Crimes,.pdf', ''),
(47, 27, 'SCE - Juvenile Delinquency.pdf', ''),
(48, 25, 'SCE - Philippine Criminal Justice System.pdf', ''),
(51, 1, 'CJPE - Criminal Law Book I,.pdf', ''),
(52, 30, '', '1 Minute Timer.mp4'),
(53, 13, 'Elden Ring Walkthrough.pdf', ''),
(54, 13, 'Daloy ng Program.docx', ''),
(55, 13, '123.zip', ''),
(56, 13, '2021-01-04_5ff3756f355ee_1541662149879.jpg', ''),
(57, 13, '', 'Monalisa.jpg'),
(58, 13, '', '5-6-7-0-9.mp4'),
(60, 13, '', 'YUMI-2.0.7.0.exe'),
(61, 13, '', 'IWG.exe'),
(64, 13, '', 'sample video.mp4'),
(66, 13, '', 'sample video.mp4'),
(68, 13, 'test.txt', ''),
(69, 13, '', 'test.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `optionid` int(11) NOT NULL,
  `quizid` int(11) NOT NULL,
  `option1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`optionid`, `quizid`, `option1`) VALUES
(1, 1, 'bad'),
(2, 1, 'asdas'),
(3, 1, 'to'),
(4, 2, 'baha'),
(5, 2, 'tafa'),
(6, 2, 'sada'),
(7, 3, ';p;'),
(8, 3, 'cv1'),
(9, 3, 'sadca'),
(11, 4, 'magmahal'),
(12, 4, 'babae'),
(13, 4, 'redhorse'),
(14, 5, 'yung bumitaw'),
(15, 5, 'yung naiwan'),
(16, 5, 'lalaki'),
(17, 6, 'okie'),
(18, 6, 'okay'),
(19, 6, 'k'),
(20, 54, '1'),
(21, 54, '2'),
(22, 54, '3');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quizid` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `subid` int(11) NOT NULL,
  `options1` varchar(255) NOT NULL,
  `options2` varchar(255) NOT NULL,
  `options3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quizid`, `question`, `answer`, `subid`, `options1`, `options2`, `options3`) VALUES
(54, 'a US federal penitentiary, Often referred to as ', 'Alcatraz ', 30, 'Alcatraz ', 'Alcatraz ', 'Alcatraz '),
(55, 'was a Scottish naval officer, geographer, and penal reformer. He is known as the Father of Parole.', 'Alexander Maconochie', 30, 'Alcatraz ', 'Alexander Maconochie', 'Auburn Prison'),
(56, 'Constructed in 1816,(opened 1819) it was the second state prison in New York, the site of the first execution by electric chair in 1890. It uses the silent or congregate system.', 'Auburn Prison', 30, 'Alcatraz ', 'Alexander Maconochie', 'Auburn Prison'),
(57, 'a punishment originating in ancient times, that required offenders to leave the community and live elsewhere, commonly in the wilderness.', 'Banishment', 30, 'Banishment', 'Alexander Maconochie', 'Auburn Prison'),
(58, 'The benefit of clergy was a legal practice in which church authorities were exempt from prosecution under secular courts. From the 13th to 19th centuries, clemency was shown to clergy guilty of crimes and extended eventually to any offender who could read', 'Benefit of Clergy', 30, 'Banishment', 'Benefit of Clergy', 'BJMP '),
(59, 'is a government agency mandated by law (RA 6975) to take operational and administrative control over all city, district, and municipal jails. It takes custody of detainees accused before a court who are temporarily confined in such jails while undergoing ', 'BJMP', 30, 'Banishment', 'Benefit of Clergy', 'BJMP'),
(60, 'the 2nd highest ranking BJMP officer. Appointed by the President upon recommendation of the DILG Secretary. The rank is Chief Superintendent.', 'BJMP Deputy Chief for Administration', 30, 'BJMP Deputy Chief for Administration', 'BJMP Deputy Chief for Operations', 'BJMP Chief of the Directorial Staff'),
(61, 'BJMP Deputy Chief for Operations - the 3rd highest ranking BJMP officer. Appointed by the President upon recommendation of the DILG Secretary. The rank is Chief Superintendent.', 'BJMP Deputy Chief for Operations', 30, 'BJMP Deputy Chief for Administration', 'BJMP Deputy Chief for Operations', 'BJMP Chief of the Directorial Staff'),
(62, 'BJMP Chief of the Directorial Staff - the 4th highest BJMP officer. Appointed by the President upon recommendation of the DILG Secretary. The rank is Chief Superintendent.', 'BJMP Chief of the Directorial Staff', 30, 'BJMP Deputy Chief for Administration', 'BJMP Deputy Chief for Operations', 'BJMP Chief of the Directorial Staff'),
(63, 'a van used to transport prisoners, Paddly-wagon.', 'Black Maria', 30, 'Black Maria', 'Borstal System', 'Branding'),
(64, 'was created pursuant to Act No. 4103, as amended. It is the intent of the law to uplift and redeem valuable human material to economic usefulness and to prevent unnecessary and excessive deprivation of personal liberty.', 'Board of Pardons and Parole ', 31, 'Board of Pardons and Parole ', 'Conditional Pardon', 'Absolute Pardon '),
(65, 'An act of grace, proceeding from the power entrusted with the execution of the laws, Exempts the individual from the penalty of the crime, he has committed.', 'Absolute Pardon', 31, 'Board of Pardons and Parole ', 'Conditional Pardon', 'Absolute Pardon'),
(66, 'If delivered and accepted, it is a contract between the executive and the convict that the former will release the latter upon compliance with the condition.', 'Conditional Pardon', 31, 'Board of Pardons and Parole ', 'Conditional Pardon', 'Absolute Pardon'),
(67, 'Where the penalty imposed exceeds three years, the offender shall serve his or her sentence in the penal institutions of the BuCor.', 'Bureau of Correction', 31, 'Bureau of Correction', 'District Jail', 'Jail'),
(68, 'certificate of non-appeal,certificate of detention and other pertinent documents of the case.', 'Carpeta', 31, 'District Jail', 'Jail  ', 'Carpeta'),
(69, 'is a cluster of small jails, each having a monthly average population of ten or less inmates, and is located in the vicinity of the court.', 'District Jail', 31, 'Bureau of Correction', 'District Jail', 'Jail'),
(70, 'is defined as a place of confinement for inmates under investigation or undergoing trial, or serving short- term sentences.', 'Jail', 31, 'is defined as a place of confinement for inmates under investigation or undergoing trial, or serving short- term sentences.', 'District Jail', 'Jail'),
(71, 'Where the imposable penalty for the crime committed is more than six months and the same was committed within the municipality, the offender must serve his or her sentence in the provincial jail which is under the Office of the Governor.', 'Provincial Jail', 31, 'Provincial Jail', 'Executive Clemency', 'Prison'),
(72, 'refers to Reprieve, Absolute Pardon, Conditional Pardon with or without Parole Conditions and Commutation of Sentence as may be granted by the President of the Philippines.', 'Executive Clemency', 31, 'Provincial Jail', 'Executive Clemency', 'Prison'),
(73, 'refers to the national prisons or penitentiaries managed and supervised by the Bureau of Corrections, an agency under the Department of Justice.', 'Prison', 31, 'Provincial Jail', 'Executive Clemency', 'Prison'),
(74, 'In San Francisco California, enacted an ordinance which banned the smoking of opium in opium dens.', '1875', 22, '1875', '1919', '1920'),
(75, 'The prohibition of alcohol commenced in Finland', '1919', 22, '1875', '1919', '1920'),
(76, 'The prohibition of alcohol commenced in the United States.', '1920', 22, '1875', '1919', '1920'),
(77, 'were founded in Colombia to meet the new demand for cocaine. The Cali Cartel became the number one cocaine trafficker after the death of Pablo Escobar.', 'Medellin and Cali Cartel', 22, 'Medellin and Cali Cartel', 'Pablo Escobar', 'Chemicals'),
(78, 'the founder of the Medellin Cartel who was killed by the police in late 1993.', 'Pablo Escobar', 22, 'Medellin and Cali Cartel', 'Pablo Escobar', 'Chemicals'),
(79, 'is any substance taken into the body, which alters the way, the mind and the bodywork.', 'Chemicals', 22, 'Medellin and Cali Cartel', 'Pablo Escobar', 'Chemicals'),
(80, 'NYC ', 'National Youth Commission', 22, 'National Youth Commission', 'National Youth Committee', 'National Youth Complex'),
(81, 'Integrated Bar of the Philippines', 'President of the IBP', 22, 'President of the IBP', 'Certificate of Exemption', 'Dependency'),
(82, 'is the national flagship program on drug abuse prevention launched by the DDB in 1995.', 'Oplan Iwas Droga', 22, 'Certificate of Exemption ', 'Oplan Iwas Droga', 'Dependency'),
(83, 'is issued to exempt products or preparations containing dangerous drugs and/or controlled substances that are below and above the 30% threshold from certain regulatory control measures.', 'Certificate of Exemption ', 22, 'Certificate of Exemption ', 'Oplan Iwas Droga', 'Dependency'),
(84, 'The amount of heat generated by the combustion (oxidation) process.', 'Heat of Decomposition', 23, 'Heat of Decomposition', 'Heat of Combustion', 'Boiling Point'),
(85, 'The release of heat from decomposing compounds. These compounds may be unstable and release their heat very quickly or they may detonate.', 'Heat of Combustion', 23, 'Heat of Decomposition', 'Heat of Combustion', 'Boiling Point'),
(86, 'The temperature of a substance where the rate of evaporation exceeds the rate of condensation.', 'Boiling Point', 23, 'Heat of Decomposition', 'Heat of Decomposition', 'Boiling Point'),
(87, 'The amount of heat needed to raise the temperature of one pound of water one degree F.', 'British Thermal Unit', 23, 'Class K Fires', 'British Thermal Unit', 'Radiation'),
(88, 'Class K is a new classification of fire as of 1998 and involves fires in combustible cooking fuels such as vegetable or animal fats', 'Class K Fires', 23, 'Class K Fires', 'British Thermal Unit', 'Radiation'),
(89, 'is the self-sustaining process of rapid oxidation of a fuel being reduced by an oxidizing agent along with the evolution of heat and light.', 'Combustion', 23, 'Radiation', 'Combustion', 'Ignition Temperature'),
(90, 'is the transfer of heat by electromagnetic waves. This process does not require a material to be in contact with the object that is emitting the radiation. Radiation can travel through a vacuum, which makes it very efficient at transferring heat over long', 'Radiation', 23, 'Radiation', 'Combustion', 'Ignition Temperature'),
(91, 'The minimum temperature to which a fuel in air must be heated in order to start self- sustained combustion independent of the heating source.', 'Ignition Temperature', 23, 'Radiation', 'Combustion', 'Ignition Temperature'),
(92, 'are those materials that yield oxygen or other oxidizing gases during the course of a chemical reaction.', 'Oxidizing Agents', 23, 'Radiation', 'Oxidizing Agents', 'Oxygen Dilution'),
(93, 'is the reduction of the oxygen concentration to the fire area.', 'Oxidizing Agents', 23, 'Radiation', 'Oxidizing Agents', 'Oxidizing Agents'),
(94, 'What is the definition of investigation in the context of criminal investigation?', 'The process of inquiring, eliciting, and collecting facts to establish the truth.', 17, 'A court proceeding to establish the truth.', 'The process of inquiring, eliciting, and collecting facts to establish the truth.', 'A summary of arrests and events reported in a police station.'),
(95, 'What does the term \"Corpus delicti\" refer to in criminal investigation?    ', 'The physical or material evidence that a crime has been committed.', 17, 'The confession made by the accused.', 'The physical or material evidence that a crime has been committed.', 'A collection of pictures of criminals and suspects for identification.'),
(96, 'What is the purpose of Neighborhood Investigation in kidnap for ransom cases?  ', 'To identify and interview individuals in the area where the crime scene is located.', 17, 'To identify and interview individuals in the area where the crime scene is located.', 'To gather information from public records and private records.', 'To establish the guilt of the accused through confession.'),
(97, 'What does the term \"Miranda vs. Arizona\" refer to?                 ', 'A case where a conviction was overturned due to failure to inform the accused of their right to counsel and remain silent.', 17, 'An interrogation technique involving waterboarding.', 'A confession made by the accused after being informed of their rights.', 'A case where a conviction was overturned due to failure to inform the accused of their right to counsel and remain silent.'),
(98, 'What is the primary aim of a Mugshot in criminal investigation?                 ', 'To capture a photographic portrait of an individual after arrest.', 17, 'To create a rough drawing of the crime scene.', 'To identify and apprehend suspects.', 'To capture a photographic portrait of an individual after arrest.'),
(99, 'What does the term \"Actus Reus\" refer to in criminal investigation?       ', 'Proof that a criminal act has occurred.', 17, 'Proof that a criminal act has occurred.', 'A confession made by the accused', 'An interrogation technique involving Chinese water torture.'),
(100, 'What is the definition of a Serial Killer in criminal investigation? ', 'An individual who murders three or more people with \"cooling off\" periods.', 17, 'Someone who murders with the aim of committing serious crimes', 'An individual who murders three or more people with \"cooling off\" periods.', 'A structured group of three or more persons engaged in criminal activities.'),
(101, 'What is the primary purpose of the Police Blotter?             ', 'To maintain a logbook of daily crime incident reports.', 17, 'To maintain a logbook of daily crime incident reports.', 'To conduct a neighborhood investigation.', 'To gather physical evidence at the crime scene.'),
(102, '. What is the definition of Victimology/victim profiling in criminal investigation?        ', 'A detailed account of the victims lifestyle and personality to assist in determining the nature of the disappearance.', 17, 'A detailed account of the victims lifestyle and personality to assist in determining the nature of the disappearance.', 'An interrogation technique involving repeated dripping of water on the suspects forehead.', 'The process of inquiring, eliciting, and collecting facts to establish the truth.'),
(103, 'Who is Allan Pinkerton in the context of criminal investigation?           ', 'The creator of the first detective agency in the US.', 17, 'The creator of the first detective agency in the US.', 'A victim profiler specializing in identifying suspects.', 'A suspect involved in a high-profile criminal case'),
(104, 'What is AFIS in the context of special crime investigation?    ', 'Automated Fingerprint Identification System (AFIS) is a method for measuring crime scenes', 20, 'Automated Fingerprint Identification System (AFIS) is a method for measuring crime scenes', 'AFIS is a test for identifying and evaluating genetic information.', 'AFIS is an interrogation technique involving emotional appeal.'),
(105, 'What does the term \"Modus Operandi\" refer to in special crime investigation?', 'Methods of Operation, Modes of Operation, Manner of committing the crime.', 20, 'Methods of Operation, Modes of Operation, Manner of committing the crime.', 'A test to identify and evaluate genetic information.', 'A method for determining the volume of an object with an irregular shape.'),
(106, 'What does the term \"Power-Reassurance Rapist\" refer to in special crime investigation?        ', 'The rapist who exercises power and control over women to dispel doubts about masculinity.', 20, 'A type of robber characterized by a long-term commitment to crime.', 'The rapist who exercises power and control over women to dispel doubts about masculinity.', 'The rapist who exercises power and control over women to dispel doubts about masculinity.'),
(107, 'What is the primary aim of the Kastleâ€“Meyer Test in special crime investigation?      ', 'A presumptive blood test to detect the possible presence of hemoglobin.', 20, 'To create a rough sketch of the crime scene.', 'A presumptive blood test to detect the possible presence of hemoglobin.', 'To identify and apprehend suspects.'),
(108, 'What is the purpose of RA 7438 in special crime investigation?          ', 'An act defining certain rights of a person under custodial investigation', 20, 'What is the purpose of RA 7438 in special crime investigation?          ', 'An act defining certain rights of a person under custodial investigation', 'The Fire Code of the Philippines.'),
(109, 'What is the primary aim of the Miranda Doctrine in special crime investigation?', 'To protect the rights of a suspect against forced self-incrimination during police interrogation.', 20, 'To define certain rights of a person under custodial investigation', 'To preserve the crime scene or evidence through photography.', 'To protect the rights of a suspect against forced self-incrimination during police interrogation.'),
(110, 'What is the definition of \"Armed Robbery\" in special crime investigation?      ', 'Involves the use of weapons such as a firearm, a knife, or other dangerous weapons.', 20, 'The use of threat or violence against persons or property for political or social objectives.', 'An act in which an individual kills one or more other persons immediately before or at the same time as him or herself.', 'Involves the use of weapons such as a firearm, a knife, or other dangerous weapons.'),
(111, 'What is the primary aim of the RA 8353 in special crime investigation?        ', 'The Anti-Rape Law of 1997', 20, 'To define certain rights of a person under custodial investigation.', 'The Anti-Rape Law of 1997', 'The Anti-Rape Law of 1997'),
(112, 'What is the meaning of \"Animus Lucrandi\" in special crime investigation?   ', 'What is the meaning of \"Animus Lucrandi\" in special crime investigation?   ', 20, 'What is the meaning of \"Animus Lucrandi\" in special crime investigation?   ', 'The unlawful use of threat or violence for political objectives.', 'A method for determining the volume of an object with an irregular shape.'),
(113, 'What is the definition of \"Suspect\" in special crime investigation?   ', 'A person arrested for a crime', 20, 'A person arrested for a crime', 'The officer responsible for recording a crime scene', 'A person whose case was forwarded to the office of the prosecutor and filed in court'),
(114, 'What is the legal definition of an accident in traffic management and accident investigation?   ', 'Any happening beyond the control of a person', 18, 'Any planned event', 'Any happening beyond the control of a person', 'Any predictable occurrence'),
(115, 'What is the primary aim of Defensive Driving in traffic management?   ', 'Preventing accidents despite the wrong actions of others', 18, 'What is the primary aim of Defensive Driving in traffic management?   ', 'Preventing accidents despite the wrong actions of others', 'Ignoring adverse driving conditions'),
(116, 'What is the significance of Milestones in traffic management?      ', 'To indicate the distance traveled', 18, 'To indicate the distance traveled', 'To warn of traffic congestion', 'To mark parking spaces'),
(117, 'According to PD 96, which vehicles are exempted from the prohibition of using sirens, bells, horns, etc.?', 'Government vehicles', 18, 'Private vehicles', 'Government vehicles', 'Commercial vehicles'),
(118, 'What does the term \"Force Majeure\" refer to in traffic management and accident investigation?', 'An inevitable accident or casualty', 18, 'A powerful vehicle', 'An inevitable accident or casualty', 'A skilled driver'),
(119, 'Who is credited with establishing the first scientific approach to road building in the 18th century?', 'John McAdam', 18, 'Karl Benz', 'John McAdam', 'Ferdinand Verbiest'),
(120, 'What is the primary aim of RA 6539 in traffic management?', 'Preventing and penalizing carnapping', 18, 'Promoting road safety', 'Preventing and penalizing carnapping', 'Establishing traffic rules'),
(121, 'What is the definition of \"Evasive Action\" in traffic management?', 'The first action taken to escape a collision course', 18, 'Driving recklessly to avoid hazards', 'The first action taken to escape a collision course', 'Ignoring traffic signals'),
(122, 'According to the Last Clear Chance principle, who bears the responsibility of preventing an accident?', 'The driver in the better position to prevent the accident', 18, 'The driver who caused the accident ', 'The driver in the better position to prevent the accident', 'The pedestrian involved in the accident'),
(123, 'What is the primary aim of RA 4136 in traffic management?', 'Regulating land transportation and traffic', 18, 'Preventing road accidents', 'Regulating land transportation and traffic', 'Establishing road construction standards'),
(124, 'What is the time when an act takes effect?', 'As provided by law', 1, 'At the time of commission', 'At the time of discovery', 'As provided by law'),
(125, 'Which article defines that acts and omissions punishable by law are felonies?', 'Article 3', 1, 'Article 3', 'Article 4', 'Article 5'),
(126, 'When are light felonies punishable?', 'Only when expressly provided by law', 1, 'Always', 'Only when they cause damage', 'Only when expressly provided by law'),
(127, 'What is the effect of pardon by the offended party?', 'It extinguishes criminal liability', 1, 'It extinguishes criminal liability', 'It extinguishes criminal liability', 'It extinguishes criminal liability'),
(128, 'Who are criminally liable as principals?', 'Those who directly commit, induce, or cooperate in the commission of a crime', 1, 'Who are criminally liable as principals?', 'Only those who induce others to commit the crime', 'Those who directly commit, induce, or cooperate in the commission of a crime'),
(129, 'What is the penalty for complex crimes?', 'The penalty for the most serious crime, increased by one degree', 1, 'The penalty for the most serious crime, increased by one degree', 'The penalty for the most serious crime, increased by one degree', 'The penalty for the most serious crime, increased by one degree'),
(130, 'In what cases shall the death penalty not be imposed?', 'When the law prescribes a specific penalty', 1, 'In all cases', 'When the law prescribes a specific penalty', 'When the offender is a minor'),
(131, 'What is the penalty for frustrated parricide, murder, or homicide?', 'One degree lower than the penalty for the consummated crime', 1, 'One degree lower than the penalty for the consummated crime', 'One degree higher than the penalty for the consummated crime', 'The same penalty as the consummated crime'),
(132, 'What is the penalty for theft?', 'Prision correccional', 1, 'Arresto mayor', 'Prision correccional', 'Prision correccional'),
(133, 'Which law repealed Articles 190 to 194 related to crimes against prohibited drugs?', 'RA 9165', 1, 'RA 947', 'RA 9165', 'RA 8353'),
(134, 'What crime is defined in Art. 114 of Book II?', 'Treason  ', 2, 'Sedition  ', 'Treason  ', 'Conspiracy to Commit Treason  '),
(135, 'Which crime involves the incitement to war or giving motives for reprisals?', 'Inciting to War or Giving Motives for Reprisals  ', 2, 'Espionage  ', 'Violation of Neutrality  ', 'Inciting to War or Giving Motives for Reprisals  '),
(136, 'Art. 138 of Title III deals with the disloyalty of public officers or employees. What is the penalty for disloyalty?', 'Fine  ', 2, 'Imprisonment  ', 'Fine  ', 'Disqualification '),
(137, 'Which crime involves acts tending to prevent the meeting of Congress?', 'Acts Tending to Prevent the Meeting of Congress  ', 2, 'Direct Assault  ', 'Violation of Parliamentary Immunity  ', 'Acts Tending to Prevent the Meeting of Congress  '),
(138, 'What crime is defined in Art. 167 of Title IV?', 'Counterfeiting, Importing, and Uttering Instruments Not Payable to Bearer  ', 2, 'Falsification by Public Officer  ', 'Using Forged Signature or Counterfeit Seal or Stamp  ', 'Counterfeiting, Importing, and Uttering Instruments Not Payable to Bearer  '),
(139, 'In Title VI, which law is specifically mentioned in relation to crimes against public morals?', 'Cockfighting Law of 1974  ', 2, 'In Title VI, which law is specifically mentioned in relation to crimes against public morals?', 'Cockfighting Law of 1974  ', 'Prescribing Stiffer Penalties in Illegal Gambling  '),
(140, 'Art. 211-A of Title VII deals with what type of bribery?', 'Qualified Bribery  ', 2, 'Direct Bribery  ', 'Indirect Bribery  ', 'Qualified Bribery  '),
(141, 'What crime is defined in Art. 267 of Title IX?', 'Kidnapping and Serious Illegal Detention  ', 2, 'Kidnapping and Serious Illegal Detention  ', 'Unlawful Arrest  ', 'Slavery'),
(142, 'Art. 298 of Title X deals with the execution of deeds by means of what?', 'Violence or Intimidation', 2, 'Violence or Intimidation', 'Fraud  ', 'Deceit '),
(143, 'Which crime is addressed in Art. 334 of Title XI?', 'Concubinage  ', 2, 'Acts of Lasciviousness  ', 'Concubinage  ', 'Adultery  '),
(144, 'What is the definition of a \"Complaint\" in the context of criminal actions?', 'A formal accusation filed by the offended party  ', 3, 'A formal accusation filed by the offended party  ', 'A formal accusation filed by the offended party  ', 'A request for legal action without specific charges  '),
(145, ' Who is authorized to conduct a Preliminary Investigation?', 'Both judges and prosecutors  ', 3, 'Judges only  ', 'Prosecutors only  ', 'Both judges and prosecutors  '),
(146, 'According to Rule 113, when is an arrest without a warrant considered lawful?', 'When a crime is committed in the presence of the arresting officer  ', 3, 'When a crime is committed in the presence of the arresting officer  ', 'When a crime is committed within the past 72 hours  ', 'When there is an outstanding arrest warrant  '),
(147, 'In Rule 114, when is bail considered a matter of right?', 'For all offenses  ', 3, 'For capital offenses  ', 'For offenses punishable by life imprisonment  ', 'For all offenses  '),
(148, 'What is the purpose of the Pre-Trial in criminal cases?', 'To expedite the trial process  ', 3, 'To determine the guilt or innocence of the accused  ', 'To expedite the trial process  ', 'To negotiate a plea bargain  '),
(149, 'What does Rule 120 define?', 'Judgment', 3, 'Preliminary Investigation  ', 'Bail  ', 'Judgment'),
(150, 'When can a new trial or reconsideration be granted according to Rule 121?', 'For various grounds specified in the rules  ', 3, 'Only for capital offenses  ', 'Only for non-capital offenses  ', 'For various grounds specified in the rules  '),
(151, 'In Rule 122, who may appeal a criminal case?', 'Either the accused or the prosecution  ', 3, 'Only the accused  ', 'Only the prosecution  ', 'Either the accused or the prosecution  '),
(152, 'What is the role of the Court of Appeals in the criminal procedure?', 'To review decisions of the lower courts  ', 3, 'To conduct the preliminary investigation  ', 'To review decisions of the lower courts  ', 'To issue search warrants  '),
(153, 'According to Rule 126, what is a Search Warrant?', 'A court order authorizing the search and seizure of specified items  ', 3, 'A request for permission to search a person or property  ', 'A court order authorizing the search and seizure of specified items  ', 'A warrant issued after an arrest is made  '),
(154, 'What is the definition of evidence according to Rule 128, Section 1?', 'The means of ascertaining the truth in a judicial proceeding  ', 4, '. Legal arguments presented in court  ', 'The means of ascertaining the truth in a judicial proceeding  ', 'Witness testimonies  '),
(155, 'In the classification of evidence, what does  object evidence primarily refer to?', 'Tangible items directly presented to the courts senses  ', 4, 'Tangible items directly presented to the courts senses  ', 'Witness testimonies  ', 'Documentary evidence  '),
(156, 'Which rule provides for \"judicial admissions\"?', 'Rule 129  ', 4, 'Rule 129  ', 'Rule 130  ', 'Rule 131  '),
(157, 'When does the court take \"judicial notice\" as mandatory?', 'When it is a matter of common knowledge  ', 4, 'When it is a matter of common knowledge  ', 'When it is discretionary  ', 'When a hearing is necessary  '),
(158, 'What is the term for evidence directly addressed to the senses of the court, also known as real evidence?', 'Object evidence  ', 4, 'Testimonial evidence  ', 'Object evidence  ', 'Documentary evidence  '),
(159, 'Which section of Rule 132 deals with the presentation of documents as evidence?', 'Section 20  ', 4, 'Section 19   ', 'Section 20  ', 'Section 21  '),
(160, 'In Rule 133, what does \"proof beyond reasonable doubt\" refer to?', 'Highest degree of certainty  ', 4, 'Preponderance of evidence  ', 'Certainty of evidence  ', 'Highest degree of certainty  '),
(161, 'What is the purpose of \"cross-examination\" according to Rule 132, Section 6?', 'To impeach or discredit the witness  ', 4, 'To support the witness testimony  ', 'To impeach or discredit the witness  ', 'To clarify ambiguous statements  '),
(162, 'In Rule 134, what does \"perpetuation of testimony\" involve?', 'Preserving evidence for future use  ', 4, 'Preserving evidence for future use  ', 'Presenting evidence in court  ', 'Recording proceedings during trial  '),
(163, 'According to the introduction, what is the definition of evidence compared to proof?', 'Evidence is the means of ascertaining the truth, and proof is the result  ', 4, 'Evidence is the result of proof  ', 'Proof is the means of ascertaining the truth  ', 'Evidence is the means of ascertaining the truth, and proof is the result  '),
(164, 'Who is considered the first female photographer?', 'Anna Atkins  ', 12, 'Alhazen  ', 'Angelo Sala  ', 'Anna Atkins  '),
(165, 'Which inventor is known for creating the first practical process of photography?', 'Louis Daguerre  ', 12, 'Louis Daguerre  ', 'Henry Fox Talbot  ', 'Johann Heinrich Schulze  '),
(166, 'What is the term for a photographic portrait taken after a person is arrested?', 'Mugshot  ', 12, 'Mugshot  ', 'Snapshot  ', 'Rogues Gallery  '),
(167, 'Who invented the wet plate negative in 1851, making detailed negatives on glass possible? ', 'Frederick Scoff Archer  ', 12, 'Frederick Scoff Archer  ', 'George Eastman  ', 'Henry Fox Talbot  '),
(168, 'What is the term for a displacement or difference in the apparent position of an object viewed along two different lines of sight?', 'Parallax', 12, 'Shutter Lag   ', 'Parallax', 'Viewfinder  '),
(169, 'What process did Carl William Scheele make a breakthrough in, involving the chemical reactions between silver nitrate and sunlight?', 'Chemistry of Photography  ', 12, 'Forensic Photography  ', 'Digital Photography  ', 'Chemistry of Photography  '),
(170, 'Who is known for the creation of the first color multi-layered film?', 'Kodak  ', 12, 'Kodak  ', 'Polaroid  ', 'Fuji Photo Film  '),
(171, 'What is the term for the length of time a cameras shutter is open when taking a photograph?', 'Shutter Speed  ', 12, 'Shutter Speed  ', 'Exposure', 'Film Speed  '),
(172, 'Which scientist made the first known photographic image using the camera obscura?', 'Joseph Nicephore Niepce  ', 12, 'Joseph Nicephore Niepce  ', 'Sir Humphry Davy  ', 'Hercules Florence  '),
(173, 'What is the name for a still camera designed primarily for simple operation, often using autofocus and automatic exposure?', 'Point-and-Shoot Camera  ', 12, 'Single-Lens Reflex Camera (SLR)  ', 'Point-and-Shoot Camera  ', 'Twin-Lens Reflex Camera (TLR)  '),
(174, 'What does ACP stand for in Forensic Ballistics?', 'Automatic Colt Pistol', 13, 'Automatic Colt Pistol', 'Advanced Cartridge Primer', 'Ammunition Cartridge Propellant'),
(175, 'What is the definition of Air Resistance  in Forensic Ballistics?', 'Decelerates the projectile with a force proportional to the square of the velocity', 13, 'The force exerted by compressed air in a firearm', 'Decelerates the projectile with a force proportional to the square of the velocity', 'The resistance of a gun s barrel to air pressure'),
(176, 'Who is credited as the inventor of gunpowder in Forensic Ballistics?', 'Berthold Schwartz', 13, 'Samuel Colt', 'John C. Garand', 'Berthold Schwartz'),
(177, 'What is the definition of \"Blowback\" in Forensic Ballistics?', 'A leakage of gas backward between the case and chamber wall', 13, 'What is the definition of \"Blowback\" in Forensic Ballistics?', 'A leakage of gas backward between the case and chamber wall', 'The impact of the bullet on a hard surface'),
(178, 'What is the main function of an \"Anvil\" in Forensic Ballistics?', 'An internal metal component against which the priming mixture is crushed', 13, 'To create a rifling impression on a barrel', 'To create a rifling impression on a barrel', 'An internal metal component against which the priming mixture is crushed'),
(179, 'Who is associated with the development of the M16 rifle at Armalite in Forensic Ballistics?', 'Eugene Stoner', 13, 'Eugene Stoner', 'John M. Browning', 'Samuel Colt'),
(180, 'What is the definition of \"Gas Check Bullet\" in Forensic Ballistics?', 'Lead bullets protected with a small copper cup to prevent base melting', 13, 'A bullet used for firing tear gas', 'Lead bullets protected with a small copper cup to prevent base melting', 'A bullet designed for gas-operated firearms'),
(181, 'What is the origin of the term \"Dum-Dum Bullet\" in Forensic Ballistics?', 'Named after a British ordinance force', 13, 'Named after a British ordinance force', 'Invented by Eugene Stoner', 'Derived from the French word \"Dummage\"'),
(182, 'What is \"Muzzle Energy\" in Forensic Ballistics?', 'The kinetic energy of a bullet as it exits the muzzle of a firearm', 13, 'The kinetic energy of a bullet as it exits the muzzle of a firearm', 'Energy released during a misfire', 'The energy needed to reload a firearm'),
(183, 'Which instrument is used for determining the speed of a bullet or the muzzle velocity in Forensic Ballistics?', 'Chronograph', 13, 'Stereoscope Microscope', 'Chronograph', 'Comparison Microscope'),
(184, 'What is the Tokyo Declaration related to?', 'Human rights in detention', 16, 'Environmental protection', 'Human rights in detention', 'International trade'),
(185, 'What is the principal aim of an autopsy', 'To determine the cause of death', 16, 'To determine the state of health before death', 'To diagnose a particular disease', 'To determine the cause of death'),
(186, 'What is the meaning of the term Algor Mortis?', ' Cooling of the body after death', 16, 'Stiffness of death', ' Cooling of the body after death', 'Discoloration of the skin after death'),
(187, 'Who are authorized to perform an autopsy?', 'Health officers', 16, 'Law enforcement officers', 'Members of the medical staff of accredited hospitals', 'Health officers'),
(188, 'What does the term \"Lazarus Sign\" refer to?', 'A reflex movement in brain-dead patients', 16, 'Spontaneous return of circulation after failed resuscitation', 'A reflex movement in brain-dead patients', 'Post-mortem lividity'),
(189, 'What is the primary function of the circulatory system?', 'Transport of nutrients', 16, 'Transport of nutrients', 'Maintenance of body temperature', 'Oxygenation of blood'),
(190, 'What is \"Contempt of Court\" in legal terminology?', 'Disobedience to a court order or misconduct', 16, 'Disrespect towards legal practitioners', 'Disobedience to a court order or misconduct', 'Unauthorized disclosure of court proceedings'),
(191, 'What does Defloration refer to?', 'Rupture of the hymen due to sexual intercourse', 16, 'Rupture of the hymen due to sexual intercourse', 'Laceration caused by a surgical procedure', 'Formation of grave-wax in corpses'),
(192, 'What is the branch of science concerned with the chemical processes in living organisms?', 'Biochemistry', 16, 'Anatomy', 'Physiology', 'Biochemistry'),
(193, 'What is the immediate sign of death mentioned in the Signs of Death section?', 'Cessation of heart action and circulation', 16, 'Cessation of respiration', 'Cooling of the body (Algor Mortis)', 'Cessation of heart action and circulation'),
(194, 'What is the immediate sign of death mentioned in the Signs of Death section?', 'Cessation of heart action and circulation', 16, 'Cessation of respiration', 'Cooling of the body (Algor Mortis)', 'Cessation of heart action and circulation'),
(195, 'Who is credited with creating the first system of physical measurements, photography, and record-keeping for identifying recidivist criminals?', 'Alphonse Bertillon', 11, 'Sir Edward Richard Henry', 'Alphonse Bertillon', 'Juan Vucetich'),
(196, 'In which ancient civilization were fingerprints used on clay tablets for business transactions between 1000-2000 B.C.?', 'Ancient Babylon', 11, 'Ancient Greece', 'Ancient Egypt', 'Ancient Babylon'),
(197, 'What is Chiroscopy?', 'Examination of the palms of the human hand for identification', 11, 'Study of footprints', 'Examination of the palms of the human hand for identification', 'Analysis of hair strands for identification'),
(198, 'Who developed the science of poroscopy, the study of fingerprint pores and impressions produced by these pores?', 'Alphonse Bertillon', 11, 'Sir Francis Galton', 'Edmond Locard', 'Alphonse Bertillon'),
(199, 'What is the approximate center of a fingerprint pattern called?', 'Core', 11, 'Core', 'Delta', 'Dactyl'),
(200, 'Who accomplished the first fingerprint file established in the United States and the first use of fingerprinting by a U.S. government agency?', 'Dr. Henry P. DeForrest', 11, 'Sir Edward Richard Henry', 'Dr. Henry P. DeForrest', 'Juan Vucetich'),
(201, 'What are the three principles of fingerprint science?', 'Principle of individuality, Principle of permanency, Principle of infallibility', 11, 'Principle of unity, Principle of integrity, Principle of reliability', 'Principle of individuality, Principle of permanency, Principle of infallibility', 'Principle of consistency, Principle of adaptability, Principle of accuracy'),
(202, 'Principle of consistency, Principle of adaptability, Principle of accuracy', 'Bertillon System', 11, 'The Henry Classification System', 'Identakey', 'Bertillon System'),
(203, 'Bertillon System', 'Dactyloscopy', 11, 'Dactyloscopy', 'Dactyloscopy', 'Edgeoscopy'),
(204, 'In 1892, who made the first successful use of fingerprint identification in a murder investigation?', 'Juan Vucetich', 11, 'Sir Edward Richard Henry', 'Alphonse Bertillon', 'Juan Vucetich'),
(205, 'Juan Vucetich', '1875', 15, '1992', '1915  ', '1875'),
(206, 'Which scientist initiated the research on psycho-physiological diagnostic instrumentation methods in criminal investigations in the 1920s?', 'Alexander R. Luria', 15, 'John Augustus Larson', 'John Augustus Larson', 'Alexander R. Luria'),
(207, 'In Ancient Rome, how were bodyguard candidates selected based on their response to provocative questions?', 'By their blush response  ', 15, 'By their complexion', 'By their body odor  ', 'By their blush response  '),
(208, 'Which ancient method of lie detection involved chewing dry rice, with guilt judged based on the moisture content?', 'The Ordeal of Rice  ', 15, 'The Ordeal of Rice  ', 'The Ordeal of the Hot Iron  ', 'The Ordeal of the Sacred Donkey  '),
(209, 'Who developed the first modern polygraph in 1935?', 'Leonarde Keeler ', 15, 'Leonarde Keeler ', 'John E. Reid  ', 'Cleve Backster  '),
(210, 'What does EDA stand for in the context of lie detection?', 'Electrodermal Response', 15, 'What does EDA stand for in the context of lie detection?', 'Electrodermal Arousal  ', 'Electrodermal Response'),
(211, 'Who is considered the father of modern polygraph ?', 'Leonarde Keeler', 15, 'John Augustus Larson', 'Cleve Backster', 'Leonarde Keeler'),
(212, 'Which company dominates the international polygraph market and was founded in 1947?', 'Lafayette Instrument Company  ', 15, 'Lafayette Instrument Company  ', 'Stoelting Company', 'Associated Research Inc'),
(213, 'What is the primary relevant question in a polygraph test?', 'Primary Relevant Question  ', 15, 'Irrelevant Question', 'Primary Relevant Question  ', 'Control Question '),
(214, 'Which kind of lie is intended to preserve the harmony of a relationship?', 'White or Benign Lie  ', 15, 'Pathological Lie  ', 'White or Benign Lie  ', 'Red Lie  '),
(215, 'What is the term for the act of replacing original entries or writing with another to deceive?', 'Substitution', 14, 'Substitution', 'Addition', 'Alteration'),
(216, 'Who authored \"Questioned Documents,\" a seminal work in scientific document analysis, and founded the American Society of Questioned Document Examiners in 1942?', 'Albert Sherman Osborn', 14, 'Albert Sherman Osborn', 'Alfred Dreyfus', 'Henry Mill'),
(217, 'In the context of Questioned Document Examination, what does the term \"Casting\" refer to?', 'Coin counterfeiting method', 14, 'Writing alignment', 'Coin counterfeiting method', 'Indented writing'),
(218, 'What is the primary purpose of a Video Spectral Comparator (VSC) in a Questioned Document Laboratory?', 'Analyze and compare inks', 14, 'Analyze and compare inks', 'Examine handwriting speed', 'Detect typewriter patterns'),
(219, 'Which of the following is NOT considered an Individual Characteristic in handwriting?', 'Class Characteristics', 14, 'Spacing', 'Speed', 'Class Characteristics'),
(220, 'What term is used for the act of deliberately altering one is handwriting to prevent recognition?', 'Disguised Writing', 14, 'Indentation', 'Disguised Writing', 'Embellishment'),
(221, 'What is the purpose of a Stereo Microscope in a Questioned Document Examination laboratory?', 'Observe low magnification of a sample', 14, 'Analyze ink composition', 'Examine handwriting rhythm', 'Observe low magnification of a sample'),
(222, 'Which type of forgery involves copying or imitating a signature?', 'Simulated Forgery', 14, 'Simple Forgery', 'Simulated Forgery', 'Freehand Method'),
(223, 'What is the purpose of the EURion Constellation in banknote designs?', 'Preventing counterfeiting', 14, 'Preventing counterfeiting', 'Enhancing ink visibility', 'Identifying the country of origin'),
(224, 'Which writing speed division is described as Fast and slow speeds are difficult to duplicate, leaving behind inconsistencies in the writing?', 'Rapid', 14, 'Slow and Drawn', 'Deliberate', 'Rapid'),
(225, 'Which Southeast Asian country is a member of Aseanapol?', 'Laos PDR  ', 10, 'Laos PDR  ', 'Bhutan  ', 'Maldives  '),
(226, 'What does Abu Sayyaf  mean?', 'Father of the Swordsmith', 10, 'Holy Warriors', 'Father of the Swordsmith', 'Sons of the Desert  '),
(227, 'In which country is the National Police Agency known as Arvan Tavnii Tsagdaa?', 'Mongolia  ', 10, 'Mongolia  ', 'Vietnam  ', 'Cambodia  '),
(228, 'Which country has the highest-ranking police officer with the title Commissioner General?', 'China  ', 10, 'Thailand  ', 'China  ', 'Japan  '),
(229, 'Under what department does the Bangladesh Police operate?', 'Ministry of Home Affairs', 10, 'Ministry of Home Affairs', 'Ministry of Defense  ', 'Ministry of Interior and Justice  '),
(230, 'Who is the highest-ranking officer in the Royal Brunei Police Force?', 'Chief of Police  ', 10, 'Commissioner  ', 'Chief of Police  ', 'Inspector General of Police  '),
(231, 'What is the name of the police agency in Hong Kong?', 'Hong Kong Police Force', 10, 'Hong Kong National Police  ', 'Hong Kong Police Force', 'Hong Kong Security Bureau  '),
(232, 'Hong Kong Police Force', 'Ministry of Interior and Justice  ', 10, 'Ministry of Interior and Justice  ', 'Ministry of Interior and Justice  ', 'Ministry of Interior and Justice  '),
(233, 'Which organization is known as the European Unionâ€™s criminal intelligence agency?', 'Europol  ', 10, 'Europol  ', 'Interpol  ', 'UN policing'),
(234, 'What is the primary focus of the International Association of Chiefs of Police (IACP)?', 'Police Executives', 10, 'Human Trafficking  ', 'Drug Trafficking', 'Police Executives'),
(235, 'What is an \"Access List\" in the context of industrial security?', 'A list of authorized personnel allowed entry', 6, 'A list of security personnel', 'A list of authorized personnel allowed entry', 'A list of security threats'),
(236, 'What is the duty of a Company Guard Force (CGF)?', 'Watch, secure, or guard a business establishment', 6, 'Investigate security breaches', 'Operate private detective services', 'Watch, secure, or guard a business establishment'),
(237, 'What is a Duty Detail Order in industrial security?', 'A written order assigning security duties', 6, 'A detailed security plan', 'A written order assigning security duties', 'An order for detective services'),
(238, 'What does Vulnerability refer to in industrial security terminology?', 'A weakness that can be exploited', 6, 'A physical barrier', 'A weakness that can be exploited', '. A security inspection'),
(239, 'What is the \"Government Guard Unit (GGU)\" responsible for securing?', 'Government offices and compounds', 6, 'Private businesses', 'Government offices and compounds', 'Military installations'),
(240, 'Who issues the License to Exercise Security Profession (LESP)?', 'Chief of the PNP', 6, 'Chief of the PNP', 'Security consultants', 'Private security agencies'),
(241, 'What does Kenner Master refer to in industrial security?', 'Person responsible for canine care', 6, 'Head of a security agency', 'Person responsible for canine care', 'Supervisor for security guards'),
(242, 'What is the primary purpose of \"Security Warning Signs\"?', 'To inform about security measures in place', 6, 'To warn of security breaches', 'To guide security personnel', 'To inform about security measures in place'),
(243, 'In what situations may a security guard be deputized to assist the PNP?', 'In times of disaster or emergency', 6, 'During normal operations', 'In times of disaster or emergency', 'Only during night shifts'),
(244, 'What does SOSIA stand for in the context of industrial security?', 'Supervisory Office for Security and Investigation Agencies', 6, 'Security Officers Supervision and Investigation Association', 'Supervisory Office for Security and Investigation Agencies', 'Security Operations and Surveillance Investigation Agency'),
(245, 'Alexander The Great - A Greek Conqueror, was able to identify those who were disloyal to him by ordering the opening of communication letters of his men and was successful in uplifting the esprit de corps and morale of his men', 'Probably True', 8, 'Confirmed By Other Sources', 'Probably True', 'Possibly True'),
(246, 'Artificial Intelligence - The ability of a digital computer or computer-controlled robot to perform tasks commonly associated with intelligent beings', 'Confirmed By Other Sources', 8, 'Confirmed By Other Sources', 'Probably True', 'Possibly True'),
(247, 'ASIS - Australian Secret Intelligence Service - Primary responsibility is gathering intelligence from mainly Asian and Pacific interests using agents stationed in a wide variety of areas. Its main purpose, like other most agencies, is to protect the count', 'Confirmed By Other Sources', 8, 'Confirmed By Other Sources', 'Probably True', 'Possibly True'),
(248, 'Bundesnachrichtendienst - BND, Federal Intelligence Service, is the foreign intelligence agency of the German government, the BND acts as the early warning system to alert the German government against threats to its interests coming from abroad', 'Probably True', 8, 'Confirmed By Other Sources', 'Probably True', 'Possibly True'),
(249, 'CIA - Central Intelligence Agency, is the civilian intelligence agency of the USA. It is the largest intelligence agency in the world', 'Confirmed By Other Sources', 8, 'Confirmed By Other Sources', 'Probably True', 'Possibly True'),
(250, 'Categories of Intelligence: National Intelligence - an integrated product of intelligence developed by all government departments concerning the broad aspect of national policy and national security', 'Confirmed By Other Sources', 8, 'Confirmed By Other Sources', 'Probably True', 'Possibly True'),
(251, 'Cryptography - arts and science of codes and ciphers', 'Confirmed By Other Sources', 8, 'Confirmed By Other Sources', 'Probably True', 'Possibly True'),
(252, 'Informants - any person who hands over information to the agents that is relevant to the subject.', 'Confirmed By Other Sources', 8, 'Confirmed By Other Sources', 'Probably True', 'Possibly True'),
(253, 'Intelligence - the organized effort to collect information, to assist it little by little, and piece it together until it forms a larger and clearer pattern. (intelligence as an activity', 'Probably True', 8, 'Confirmed By Other Sources', 'Probably True', 'Possibly True'),
(254, 'ISI - Inter-Services Intelligence, Pakistan is premier intelligence agency. It was established in 1948. Its office is located in Islamabad', 'Confirmed By Other Sources', 8, 'Confirmed By Other Sources', 'Probably True', 'Possibly True'),
(256, '1842 - the London Metropolitan Police established the first detective branch', 'True', 5, 'True', 'False', ' Not Specified'),
(257, 'Boston Police - first public police force established in 1631', 'False', 5, 'True', 'False', 'Not Specified'),
(258, 'Patrol Functions (Categories): Crime prevention - pro-active deterrence', 'True', 5, 'True', 'False', 'Not Specified'),
(259, 'Patrol As A Function: Eliminate opportunity for crime', 'True', 5, 'True', 'False', 'Not Specified'),
(260, 'Peel s 9 (Nine) Principles: Principle 1. The basic mission for which the police exist is to prevent crime and disorder', 'True', 5, 'True', 'False', 'Not Specified'),
(261, 'Police Traffic Enforcement Activities: Investigate Traffic Accidents', 'True', 5, 'True', 'False', 'Not Specified'),
(262, 'Patrol Method: Aircraft Patrol', 'True', 5, 'True', 'False', 'Not Specified'),
(263, 'Police Functional Units: Section - functional unit within a division that is necessary for specialization', 'True', 5, 'True', 'False', 'Not Specified'),
(264, 'Police Territorial Units: District - a geographical subdivision of a city for patrol purposes, usually with its own station', 'True', 5, 'True', 'False', 'Not Specified'),
(265, 'Purposes of Criminal Investigation: Identify the perpetrator', 'True', 5, 'True', 'False', 'Not Specified'),
(266, 'What is Attrition in the context of Police Personnel Management?', 'Retirement or separation from the police service', 9, 'Hiring of new personnel', 'Retirement or separation from the police service', 'Training and development programs'),
(267, 'What is the maximum tenure for the Chief PNP position?', '4 years', 9, '2 years', '4 years', '6 years'),
(268, 'What does \"Discipline\" mean in the context of Police Personnel Management?', 'Training people to obey rules', 9, 'Training people to obey rules', 'Physical punishment for disobedience', 'Promoting teamwork'),
(269, 'Promoting teamwork', 'Making temporary appointments permanent', 9, 'Physical fitness testing', 'Budgeting and planning', 'Making temporary appointments permanent'),
(270, 'What does Equity refer to in management?', 'Kindness and fairness to subordinates', 9, 'Kindness and fairness to subordinates', 'Strict adherence to rules', 'Hierarchy of authority'),
(271, 'What is the primary focus of  Police Appraisal or Performance Rating?', 'Evaluation of traits and effectiveness of a police officer', 9, 'Financial compensation', 'Evaluation of traits and effectiveness of a police officer', 'Recruitment and selection'),
(272, 'What is the purpose of \"Police Recruitment\" in an organization?', 'Encouraging applicants to seek employment', 9, 'Employee training', 'Encouraging applicants to seek employment', 'Budget planning'),
(273, 'What does \"Scalar Chain\" imply in Police Personnel Management?', 'Line of authority from top to bottom', 9, 'Employee turnover', 'Recruitment process', 'Line of authority from top to bottom'),
(274, 'What is the significance of \"Unity of Command\" in management?', 'Every employee should receive orders from only one superior', 9, 'Employees should receive orders from multiple superiors', 'Orders should follow the hierarchy strictly', 'Every employee should receive orders from only one superior');
INSERT INTO `quiz` (`quizid`, `question`, `answer`, `subid`, `options1`, `options2`, `options3`) VALUES
(275, 'Every employee should receive orders from only one superior?', 'Bringing in and training the staff', 9, 'Budgeting and planning', 'Training and development', 'Bringing in and training the staff'),
(277, 'What does the term \"police\" derive from?**', 'Politia', 7, 'Politeia', 'Police', 'Politia'),
(278, 'What is the primary responsibility of a Law Enforcement Agency?', 'Enforcing the laws', 7, 'Enforcing traffic rules', 'Enforcing the laws', 'Managing public events'),
(279, 'Which principle of efficient management emphasizes the right to command and the power to require obedience?', 'Authority and Responsibility', 7, 'Unity of Command', 'Division of Work', 'Authority and Responsibility'),
(280, 'What does the term \"Enforcement\" mean in the context of police work?', 'Compelling obedience to a law or command', 7, 'Compelling obedience to a law or command', 'Persuading individuals to follow the law', 'Providing social services'),
(281, 'In the context of police organization, what does \"Planning\" refer to?', 'Setting goals and objectives', 7, 'Patrolling the streets', 'Setting goals and objectives', 'Making financial decisions'),
(282, 'Who is recognized as the Father of Modern Law Enforcement for his contributions in the development of the field of criminal justice in the US?', 'August Vollmer', 7, 'Sir Robert Peel', 'August Vollmer', 'Lambert Javalera'),
(283, 'What is the primary function of the Metropolitan Police of Act 1829 in London, England?', 'Crime prevention', 7, 'Crime prevention', 'Firefighting', 'Traffic control'),
(284, 'What is the main objective of the Continental Theory of Police Service?', 'State control over the police', 7, 'Preservation of public peace and security', 'State control over the police', 'Community participation in police duties'),
(285, 'What law created the first modern police force in the United States in 1845?', 'New York Police Department Act', 7, 'Police Integration Law of 1975', 'New York Police Department Act', 'Police Professionalization Act of 1966'),
(286, 'Who was the first Filipino Chief of the Philippine National Police?', 'Dir. Gen. Cesar Nazareno', 7, 'Brig. Gen. Rafael Crame', 'Col. Antonio Torres', 'Dir. Gen. Cesar Nazareno'),
(287, 'What is one of the core values of the PNP?', 'Honor', 26, 'Honor', 'Orderliness', 'Morality'),
(288, 'Which term refers to great courage in the face of danger?', 'Valor', 26, 'Duty', 'Valor', 'Loyalty'),
(289, 'What does \"Makatao\" among the PNP Core Values mean?', 'Humane', 26, 'Nationalistic', 'Humane', 'God-Fearing'),
(290, 'Which ethical act emphasizes the proper and fair use of authority?', 'Judicious use of authority', 26, 'Integrity', 'Justice', 'Judicious use of authority'),
(291, 'What does the term \"Spiritual Beliefs\" in police traditions refer to?', 'Inner path to discover oneis essence', 26, 'Love of country', 'Inner path to discover one is essence', 'Goodwill and lighthearted rapport'),
(292, 'Which principle involves mutual trust and friendship among people who spend a lot of time together?', 'Camaraderie', 26, 'Discipline', 'Patriotism', 'Camaraderie'),
(293, 'What is the correct definition of \"Courtesy\" in the context of PNP values?', 'A manifestation of expression of consideration and respect for others', 26, 'A manifestation of expression of consideration and respect for others', 'A formal act or set of formal acts established by customs.', 'A set of norms and standards practiced during social activities.'),
(294, 'Which term refers to an unwritten law carried on by tradition?', 'Customs', 26, 'Ceremonies', 'Customs', 'Traditions'),
(295, 'What does the term \"Duty\" signify in police traditions?', 'A task or action that someone is required to perform', 26, 'Strength of mind or spirit in the face of danger', 'A task or action that someone is required to perform', 'Faithfulness or devotion to a person, country, group, or cause.'),
(296, 'Which community-related term involves members of the community actively helping the police?', 'Community Participation', 26, 'Community Participation', 'Police Community Relation', 'Community Service'),
(297, 'What is the term for a situation during hostage-taking where the victim develops rapport and sympathy with the captor?', 'Stockholm Syndrome', 28, 'Rapport Syndrome', 'Crisis Bond', 'Stockholm Syndrome'),
(298, 'Which term refers to a pervasive pattern of instability in interpersonal relationships, self-image, and emotions?', 'Borderline Personality Disorder', 28, 'Avoidant Personality Disorder', 'Borderline Personality Disorder', 'Dependent Personality Disorder'),
(299, 'What is the definition of \"Counter-Surveillance\" in the context of criminal behavior?', 'Surveillance employed by offenders to detect law enforcement involvement', 28, 'Surveillance by law enforcement', 'Surveillance employed by offenders to detect law enforcement involvement', 'Surveillance during hostage negotiation'),
(300, 'What is the term for a situation that is threatening and could harm people or property, seriously interrupt operations, damage reputation, and/or negatively impact the bottom line?', 'Crisis', 28, 'Hostage Crisis', 'Criminal Siege', 'Crisis'),
(301, 'Which personality disorder is characterized by a long-standing pattern of grandiosity, an overwhelming need for admiration, and a lack of empathy toward others?', 'Narcissistic Personality Disorder', 28, 'Histrionic Personality Disorder', 'Paranoid Personality Disorder', 'Narcissistic Personality Disorder'),
(302, 'What does the term \"Hostage\" refer to in the context of crisis management?', 'An individual held against their will', 28, 'The negotiator in a hostage situation', 'An individual held against their will', 'A person delivering concessions to the offenders'),
(303, 'Which phase of a crisis involves the instance in time at which the incident occurs or starts to occur if it has not been prevented?', 'Incident Occurrence', 28, 'Post-Occurrence Phase', 'Incident Occurrence', '. Pre-Incident Phase'),
(304, 'What is the definition of Rapport in the context of crisis negotiation?', 'A close and harmonious relationship in which people understand each other is feelings or ideas', 28, 'A close and harmonious relationship between hostages', 'A close and harmonious relationship in which people understand each other is feelings or ideas', 'A close and harmonious relationship between negotiators'),
(305, 'Which personality disorder is characterized by a long-standing pattern of attention-seeking behavior and extreme emotionality?', 'Histrionic Personality Disorder', 28, 'Schizoid Personality Disorde', 'Histrionic Personality Disorder', 'Dependent Personality Disorder'),
(306, 'What is the primary responsibility of the Negotiation Team Leader in a Crisis Negotiation Team?', 'Acting as a buffer between command personnel and the Negotiation Team', 28, 'Communicating with the hostage-taker', 'Coordinating the process with SWAT', 'Acting as a buffer between command personnel and the Negotiation Team');

-- --------------------------------------------------------

--
-- Table structure for table `quizscore`
--

CREATE TABLE `quizscore` (
  `id` int(11) NOT NULL,
  `studid` varchar(255) NOT NULL,
  `subid` int(11) NOT NULL,
  `score` double NOT NULL,
  `classid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizscore`
--

INSERT INTO `quizscore` (`id`, `studid`, `subid`, `score`, `classid`) VALUES
(39, '0320-0493', 4, 9, 0),
(40, '1000-1000', 1, 4, 0),
(41, '123', 1, 4, 0),
(42, '123-456', 1, 5, 0),
(43, '789-123', 1, 1, 0),
(44, '789-123', 2, 5, 0),
(45, '789-123', 17, 6, 0),
(46, '789-123', 3, 4, 0),
(47, '789-123', 8, 3, 0),
(48, '987-654', 1, 3, 0),
(49, '0320-0120', 1, 4, 0),
(50, '0320-0120', 2, 6, 0),
(51, '0320-0120', 3, 5, 0),
(52, '0320-0120', 4, 3, 0),
(53, '0320-0121', 1, 3, 0),
(54, '0320-0121', 2, 5, 0),
(55, '0320-0121', 3, 5, 0),
(56, '0320-0121', 4, 2, 0),
(57, '0320-0220', 5, 7, 0),
(58, '0320-0220', 6, 2, 0),
(59, '0320-0220', 7, 4, 0),
(60, '0320-0220', 8, 4, 0),
(61, '0320-0220', 9, 4, 0),
(62, '0320-0220', 10, 4, 0),
(63, '0320-0410', 1, 7, 0),
(64, '0320-0410', 2, 2, 0),
(65, '0320-0410', 3, 3, 0),
(66, '0320-0410', 4, 5, 0),
(67, '0320-0129', 17, 3, 0),
(68, '0320-0129', 18, 4, 0),
(69, '0320-0129', 20, 3, 0),
(70, '0320-0129', 22, 3, 0),
(71, '0320-0129', 23, 5, 0),
(72, '0320-0237', 30, 4, 0),
(73, '0320-0237', 31, 3, 0),
(74, '0320-0236', 30, 2, 0),
(75, '0320-0236', 31, 4, 0),
(76, '0000-0000', 1, 4, 0),
(77, '0000-0000', 2, 7, 0),
(78, '0000-0000', 3, 8, 0),
(79, '0000-0000', 4, 6, 0),
(80, '0000-0000', 5, 6, 0),
(81, '0000-0000', 6, 7, 0),
(82, '0000-0000', 7, 8, 0),
(83, '0000-0000', 8, 9, 0),
(84, '0000-0000', 9, 10, 0),
(85, '0000-0000', 10, 9, 0),
(86, '0000-0000', 11, 8, 0),
(87, '0000-0000', 12, 7, 0),
(88, '0000-0000', 13, 6, 0),
(89, '0000-0000', 14, 5, 0),
(90, '0000-0000', 15, 4, 0),
(91, '0000-0000', 16, 3, 0),
(92, '0000-0000', 17, 5, 0),
(93, '0000-0000', 18, 6, 0),
(94, '0000-0000', 19, 7, 0),
(95, '0000-0000', 20, 8, 0),
(96, '0000-0000', 21, 9, 0),
(97, '0000-0000', 22, 10, 0),
(98, '0000-0000', 23, 9, 0),
(99, '0000-0000', 24, 8, 0),
(100, '0000-0000', 25, 7, 0),
(101, '0000-0000', 26, 6, 0),
(102, '0000-0000', 27, 5, 0),
(103, '0000-0000', 28, 6, 0),
(104, '0000-0000', 29, 7, 0),
(105, '0000-0000', 30, 8, 0),
(106, '0000-0000', 31, 9, 0),
(107, '0320-0297', 17, 4, 0),
(108, '0320-0297', 18, 3, 0),
(109, '0320-0297', 20, 2, 0),
(110, '0320-0297', 22, 3, 0),
(111, '0320-0297', 23, 6, 0),
(112, '0320-0337', 17, 9, 0),
(113, '0320-0337', 18, 9, 0),
(114, '0320-0337', 20, 9, 0),
(115, '0320-0337', 22, 8, 0),
(116, '0320-0337', 23, 5, 0),
(117, '0320-0222', 30, 3, 0),
(118, '0320-0222', 31, 2, 0),
(119, '0320-0277', 30, 5, 0),
(120, '0320-0277', 31, 1, 0),
(121, '0320-0537', 26, 2, 0),
(122, '0320-0537', 28, 2, 0),
(123, '0320-0397', 11, 5, 0),
(124, '0320-0397', 12, 2, 0),
(125, '0320-0397', 13, 4, 0),
(126, '0320-0397', 14, 4, 0),
(127, '0320-0397', 15, 2, 0),
(128, '0320-0397', 16, 5, 0),
(129, '0320-0637', 5, 8, 0),
(130, '0320-0637', 6, 6, 0),
(131, '0320-0637', 7, 4, 0),
(132, '0320-0637', 8, 3, 0),
(133, '0320-0637', 9, 3, 0),
(134, '0320-0637', 10, 4, 0),
(135, '0320-0437', 30, 2, 0),
(136, '0320-0437', 31, 3, 0),
(137, '0320-1111', 1, 6, 0),
(138, '0320-1111', 2, 2, 0),
(139, '0320-1111', 3, 5, 0),
(140, '0320-1111', 4, 6, 0),
(141, '0320-0761', 30, 7, 0),
(142, '0320-0761', 31, 4, 0),
(143, '0320-0511', 26, 0, 0),
(144, '0320-0511', 28, 3, 0),
(145, '0320-0511', 30, 4, 0),
(146, '0320-0511', 31, 3, 0),
(147, '0320-0511', 6, 3, 0),
(148, '0320-0511', 9, 3, 0),
(149, '0320-0411', 30, 4, 0),
(150, '0320-0411', 31, 4, 0),
(151, '0320-0211', 26, 2, 0),
(152, '0320-0211', 28, 5, 0),
(153, '0320-0245', 30, 6, 0),
(154, '0320-0245', 31, 4, 0),
(155, '0320-0381', 26, 5, 0),
(156, '0320-0381', 28, 2, 0),
(157, '0320-0331', 11, 3, 0),
(158, '0320-0331', 13, 2, 0),
(159, '0320-0331', 16, 4, 0),
(160, '0320-0331', 12, 1, 0),
(161, '0320-0461', 1, 5, 0),
(162, '0320-0481', 30, 4, 0),
(163, '0320-0481', 31, 1, 0),
(164, '0320-381', 17, 2, 0),
(165, '0320-0401', 26, 2, 0),
(166, '0320-0401', 28, 3, 0),
(167, '0317-0381', 30, 4, 0),
(168, '0320-0459', 6, 4, 0),
(169, '0320-0459', 8, 5, 0),
(170, '0320-0459', 10, 3, 0),
(171, '0310-0381', 13, 7, 0),
(172, '0320-0499', 20, 5, 0),
(173, '0320-0499', 22, 3, 0),
(174, '0320-0499', 23, 3, 0),
(175, '0320-0499', 17, 4, 0),
(176, '0320-0181', 2, 1, 0),
(177, '0320-0487', 18, 3, 0),
(178, '0320-0599', 20, 3, 0),
(179, '0320-0599', 17, 1, 0),
(180, '0320-0599', 22, 2, 0),
(181, '0310-0799', 20, 2, 0),
(182, '0310-0799', 22, 4, 0),
(183, '0310-0799', 17, 3, 0),
(184, '0320-0699', 18, 6, 0),
(185, '0320-0699', 20, 3, 0),
(186, '0320-0699', 22, 5, 0),
(187, '0320-0699', 23, 4, 0),
(188, '0310-0639', 7, 4, 0),
(189, '0310-0639', 9, 4, 0),
(190, '0310-0639', 5, 8, 0),
(191, '0310-0639', 10, 2, 0),
(192, '0320-0636', 26, 1, 0),
(193, '0320-0636', 28, 2, 0),
(194, '0320-0416', 3, 6, 0),
(195, '0320-0416', 20, 2, 0),
(196, '0320-0416', 31, 3, 0),
(197, '0321-0328', 26, 2, 0),
(198, '0321-0328', 28, 5, 0),
(199, '0321-0822', 30, 3, 0),
(200, '0321-0822', 31, 1, 0),
(201, '0321-0472', 1, 3, 0),
(202, '0321-0472', 7, 6, 0),
(203, '0321-0472', 3, 2, 0),
(204, '0321-0472', 4, 5, 0),
(205, '0321-0472', 13, 4, 0),
(206, '0321-0472', 26, 2, 0),
(207, '0321-0772', 20, 3, 0),
(208, '0321-0772', 7, 6, 0),
(209, '0321-0772', 2, 4, 0),
(210, '0321-0772', 4, 4, 0),
(211, '0321-0342', 13, 2, 0),
(212, '0321-0342', 20, 3, 0),
(213, '0321-0342', 18, 6, 0),
(214, '0321-0342', 15, 2, 0),
(215, '0321-0342', 6, 7, 0),
(216, '0321-0342', 8, 6, 0),
(217, '0320-0842', 7, 4, 0),
(218, '0320-0842', 8, 5, 0),
(219, '0320-0842', 26, 3, 0),
(220, '0320-0842', 31, 2, 0),
(221, '0320-0842', 2, 6, 0),
(222, '0320-0351', 20, 4, 0),
(223, '0320-0351', 22, 3, 0),
(224, '0320-0351', 13, 4, 0),
(225, '0320-0351', 31, 5, 0),
(226, '0320-0116', 11, 5, 0),
(227, '0320-0116', 31, 4, 0),
(228, '0320-0116', 17, 5, 0),
(229, '0320-0249', 2, 5, 0),
(230, '0320-0249', 23, 3, 0),
(231, '0320-0249', 28, 4, 0),
(232, '0320-0849', 16, 4, 0),
(233, '0320-0849', 31, 5, 0),
(234, '0320-0849', 5, 9, 0),
(235, '0321-0849', 3, 6, 0),
(236, '0321-0849', 28, 7, 0),
(237, '0321-0849', 14, 3, 0),
(238, '0321-0449', 7, 4, 0),
(239, '0321-0449', 17, 5, 0),
(240, '0321-0449', 31, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studid` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dateregister` date NOT NULL,
  `lastupdate` varchar(255) NOT NULL,
  `grade` double NOT NULL,
  `avequiz` double NOT NULL,
  `aveexamscore` double NOT NULL,
  `reset_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studid`, `fname`, `mname`, `lname`, `email`, `profile`, `uname`, `pass`, `gender`, `dateregister`, `lastupdate`, `grade`, `avequiz`, `aveexamscore`, `reset_token`) VALUES
('0000-0000', 'exam', 'ple', 'student', '', 'received_341198035139734.jpeg', '', 'ffc5e558b8c73e7dfa74208684fd8a5c368cf40f67931def94fe16bbe1780cee', 'male', '2023-12-04', '2023-12-04 02:19:47pm', 79.3333333333, 70, 83.3333333333, ''),
('010510', 'Aljon', 'Castillo', 'Caguitla', '', '', '', '0c39bd1c79206adf035d05fa9bf26b110fe540819d969d9a92ca3924bf68f42c', 'Male', '2023-11-27', '', 0, 0, 0, ''),
('0120-0339', 'RONNEL', 'TEGEO', 'JACINTO', '', '', '', '8a95959a6e67d24a09417de3773dd8993039664915f491e3002571eb3851bf26', 'male', '2023-12-03', '', 0, 0, 0, ''),
('0120-0354', 'J', 'O', 'G', '', '', '', '85625ba398f14f0cd8c89d38f45a7de826713ce2630d3af821225348ced50928', 'male', '2023-12-03', '', 0, 0, 0, ''),
('0120-0363', 'JOHN', 'MICHAEL', 'ANDA', '', '', '', 'e04db2a9c16585c2b767e33d5a5abab56cf460796a67a24bb14ea49832dbc324', 'male', '2023-12-02', '', 0, 0, 0, ''),
('0120-0396', 'Kurt', 'Tubino', 'Violanta', '', '', '', 'dc498482e1cf1ff93fccc5380554e66fbda40cf2d7d06472440c01ce83f59922', 'male', '2023-12-02', '', 0, 0, 0, ''),
('0120-0410', 'Nicole', 'D', 'DelMoro', '', '', '', '058c3915018a88ef963fb87b19d3bf2c973f3cf3e567465363689bc7e1e4d95e', 'female', '2023-12-02', '', 0, 0, 0, ''),
('0120-0414', 'JohnMalvin', 'Borbe', 'Valles', '', '', '', '04b69fd48fe7a3b80ce436e4973954369323672179596eec60a2ed150481bb7b', 'male', '2023-12-03', '', 0, 0, 0, ''),
('0123-4567', 'Kyla', 'Gueverra', 'Tolentino', '', 'Penguins.jpg', '0123-4567', 'uname123', '', '2023-11-24', '', 0, 0, 0, ''),
('0123-4568', 'Frederick', 'Parco', 'Razo', '', 'Lighthouse.jpg', '', '3d8291ab168247a5a197b8d7f58a555bfc3ec1fa54132b08055aa75a0cf46a42', 'Male', '2023-11-23', '2023-11-23 08:17:54pm', 10.9, 0, 0, ''),
('0310-0381', 'Ignacio', 'Pascual', 'Marcelo', '', '', '', '376686d53aef1092c6ea8dc48abab1b2f582a947735c538fb5ec0b0a386cf18f', 'male', '2023-12-06', '', 21, 70, 0, ''),
('0310-0639', 'Veronica', 'Dominguez', 'Vergara', '', '', '', '86abb32d72a6612a716382b3c999a68b2664a31b1304cca6f22d5e8ff9420824', 'female', '2023-12-07', '', 19.8, 45, 9, ''),
('0310-0799', 'Camilla', 'Malabanan', 'Dominguez', '', '', '', '86abb32d72a6612a716382b3c999a68b2664a31b1304cca6f22d5e8ff9420824', 'female', '2023-12-06', '', 10.4, 30, 2, ''),
('0312-5411', 'Kate', 'Cat', 'Rasonab', '', 'face8.jpg', '', '82ebf3b94a396d67f3a0b0e99acf697d37cb0861a98ea820c8a886d0758e1a32', '', '2023-11-14', '', 0, 0, 0, ''),
('0317-0381', 'Jennifer', 'Agbayani', 'Espinosa', '', '', '', '9ba03409ebb9db5d795245ee0a5b6fb3dcb018d9b60e7ce5d704fdbc4e09bfbb', 'male', '2023-12-06', '', 12, 40, 0, ''),
('0320-0116', 'Alfonso', 'Reyes', 'Dizon', '', '', '', '6ab01266051de56cfb9104318a937628d2524dfc75a94fffdd047625f39fa6cb', 'male', '2023-12-08', '', 22.4, 46.6666666667, 12, ''),
('0320-0120', 'Maria', 'DelaCruz', 'Reyes', '', '', '', 'e518a135ded754701aa92e3f2b43ada1fb60d74f97f94ed94f229bb1a533a261', 'female', '2023-12-04', '', 20.5, 0, 0, ''),
('0320-0121', 'Juan', 'Santos', 'Santos', '', 'Penguins.jpg', '', '313e0d3ecf7c98e9b48d71128fc43f5020a7665018fcb35c44837ff21bb02622', 'male', '2023-12-04', '2023-12-05 11:10:41pm', 21.05, 0, 0, ''),
('0320-0129', 'Gabriel', 'Garcia', 'Tan', '', '', '', '11d028fb9e19a736b93ac00adf160d69e509a88c70430bdda83f45637f4e545d', 'male', '2023-12-04', '', 16.4, 0, 0, ''),
('0320-0181', 'Mariane', 'Espinosa', 'Soriano', '', '', '', 'b76df761677e5dbc6cc50aaaec378e305a4c8bbd10dcd8fd370955c22611eea1', 'female', '2023-12-06', '', 3, 10, 0, ''),
('0320-0211', 'Francisco', 'Abad', 'Salvador', '', '', '', 'bc465458e7a90a1d69ae0f203b87f3243d08dca9ef2385b1bb2993d67245170a', 'male', '2023-12-06', '', 16.8, 35, 9, ''),
('0320-0220', 'Angel', 'Reyes', 'Lim', '', '', '', '102855908e517617207a906f2bca19c9c462f585318e304e30e6491a54091bc5', 'female', '2023-12-04', '', 20.2, 0, 0, ''),
('0320-0222', 'Miguel', 'Villanueva', 'Fernandez', '', '', '', 'd998c8d0fbbad6e0d27399c88de7b4506ea11c3c45973e7c7a94ed2bf820bb2f', 'male', '2023-12-05', '', 18, 25, 15, ''),
('0320-0234', 'Sofia', 'Tan', 'Aquino', '', '', '', 'b716c0475e186cfaba95820830c1fba9196a1ce42a4152f8bcbe7d6d504e01fa', 'female', '2023-12-04', '', 1.4, 0, 0, ''),
('0320-0236', 'Andrea', 'Ramos', 'Gonzales', '', 'Lighthouse.jpg', '', '94afe3432e8afaeedf907572dc51f400e77268609ad9ef28ffa26e0973dffd6a', 'female', '2023-12-04', '2023-12-05 11:07:34pm', 25.1, 10, 50, ''),
('0320-0237', 'Jose', 'Aquino', 'Ramos', '', 'Jellyfish.jpg', '', '1590dd1cb5438ac3c0f67156fe07baea278a36d239f9fd4e30036b81a769f16e', 'male', '2023-12-04', '2023-12-05 11:10:10pm', 21.7, 0, 0, ''),
('0320-0245', 'Angela', 'Balagtas', 'Baluyot', '', '', '', 'e3c99b851fb5306e2a6db92620bba3c90d06567b2525640cfbff75f9bd66c2e2', 'male', '2023-12-06', '', 24.1, 50, 13, ''),
('0320-0249', 'Elizabeth', 'Tolentino', 'Santiago', '', '', '', '5c7f52838ee9f59f80284b4370cd2b98039079bddb0004cc1a2d08fac6aa7244', '', '2023-12-09', '', 18.3, 40, 9, ''),
('0320-0277', 'Isabella', 'Reyes', 'Ocampo', '', 'Lighthouse.jpg', '', 'c20e4e9bbb46cf2e99c5a234be212fecf435b270433b9f9a535b74dcd28d4b12', 'female', '2023-12-05', '2023-12-05 11:09:32pm', 22.3, 30, 19, ''),
('0320-0297', 'Carlos', 'Gonzales', 'Cruz', '', '', '', '090f691924770468b820a1291cc021a4d804761f4775d2d7ef3cd9a518ee4fcd', 'male', '2023-12-04', '', 14.3, 0, 0, ''),
('0320-0331', 'Patricia', 'Baluyot', 'Geronimo', '', '', '', 'a39cfb7411079f16f4ebd7442019c7903f8b95caff2c3566954af020d35c8a91', 'female', '2023-12-06', '', 10.3, 25, 4, ''),
('0320-0337', 'Camille', 'Cruz', 'Villanueva', '', 'Koala.jpg', '', '3bd4bf06e9882095c87fc65e8b0696751ab8a1956214cab232b24fae3fc89281', 'female', '2023-12-05', '2023-12-05 11:08:18pm', 45, 80, 30, ''),
('0320-0351', 'Maureen', 'Olalia', 'Ocampo', '', '', '', '86abb32d72a6612a716382b3c999a68b2664a31b1304cca6f22d5e8ff9420824', 'female', '2023-12-08', '', 12, 40, 0, ''),
('0320-0381', 'Ronaldo', 'Salvador', 'Geronimo', '', '', '', '7295422ab0bba9f5d93851d54a93542e4759524d2e3bb5abb1a633e0c72bb3d3', 'male', '2023-12-06', '', 19.6, 35, 13, ''),
('0320-0384', 'Enrique', 'Estrella', 'Espinosa', '', '', '', '71f2cb2ad424eb4e5e3d425ab443549030c688bd6b7ce990d3a43129379bc194', 'male', '2023-12-06', '', 0, 0, 0, ''),
('0320-0397', 'Bea', 'Ocampo', 'Perez', '', '', '', 'c149181300da23d826804a5a5b71bab2149260e13a889026d4b4285990c6ad91', 'female', '2023-12-05', '', 15.9, 36.6666666667, 7, ''),
('0320-0401', 'Clarisse', 'Soriano', 'Matias', '', '', '', '86abb32d72a6612a716382b3c999a68b2664a31b1304cca6f22d5e8ff9420824', 'female', '2023-12-06', '', 7.5, 25, 0, ''),
('0320-0410', 'Jasmine', 'Lim', 'Garcia', '', '', '', 'd6d5172cb9666c79fdc6872fe8cc4ef2367c1c42f12e941228c97e3b946045cc', 'female', '2023-12-04', '', 17.65, 0, 0, ''),
('0320-0411', 'Michelle', 'Tizon', 'Balagtas', '', '', '', '6024f19f8d1e3aef5e33a12f6fba77c30dcada4acc27d87ca4892a0a5402c788', 'female', '2023-12-05', '', 25.3, 40, 19, ''),
('0320-0416', 'Francesca', 'Vergara', 'Tolentino', '', '', '', 'cde28d50560156899354099d206e391869f510b2bf267ac8c92628cff8d40cd7', 'female', '2023-12-08', '', 19.4, 36.6666666667, 12, ''),
('0320-0437', 'Karen', 'Perez', 'Lee', '', 'Tulips.jpg', '', '15308805c510d92f43414807526f899e8cefd81a1faa274efd89aaa3630ff718', 'female', '2023-12-05', '2023-12-05 10:43:27pm', 17.3, 25, 14, ''),
('0320-0459', 'Diego', 'Balaguer', 'Cruz', '', '', '', '86abb32d72a6612a716382b3c999a68b2664a31b1304cca6f22d5e8ff9420824', 'male', '2023-12-06', '', 22.5, 40, 15, ''),
('0320-0461', 'Danielle', 'Geronimo', 'Cervantes', '', '', '', 'bb05a0b4aae49cef89ef4a4730bbf05010ecd5cad8e107b0baae6db149733db6', '', '2023-12-06', '', 15, 50, 0, ''),
('0320-0481', 'Alejandro', 'Salvador', 'Jimenez', '', '', '', '9b2ada560e9865235e075018326338e3271b511b0204a5b3055a9d1f6928a402', 'male', '2023-12-06', '', 20.1, 25, 18, ''),
('0320-0487', 'Benjamin', 'Marcelo', 'Balaguer', '', '', '', '786051d504c43b27d9eb8ce82f80dab913263c0db6952883247745a738d1e080', 'male', '2023-12-06', '', 9, 30, 0, ''),
('0320-0497', 'Frederick', 'Parco', 'Razo', '', '', '', '0390024610415f44c9d5ca4a01dd96bb09fc95e6450bfd740a9a4cf4abcc8130', 'male', '2023-11-28', '', 0, 0, 0, ''),
('0320-0499', 'Cynthia', 'Matias', 'Malabanan', '', '', '', '86abb32d72a6612a716382b3c999a68b2664a31b1304cca6f22d5e8ff9420824', 'female', '2023-12-06', '', 15.45, 37.5, 6, ''),
('0320-0511', 'Javier', 'Mendoza', 'Abad', '', 'Hydrangeas.jpg', '', '502ab7495e0631caef2bd619c79123022d68b49c5b2142c755214730117476bc', 'male', '2023-12-05', '2023-12-05 11:06:13pm', 12.2, 26.6666666667, 6, ''),
('0320-0537', 'Luis', 'Fernandez', 'Flores', '', '', '', '29ba4672308508c50abccb561f46b1c3e5112e77bc78cd51a34b76cd87d65133', 'male', '2023-12-05', '', 15.8, 20, 14, ''),
('0320-0570', 'kyla', 'guevarra', 'tolentino', '', '', '', 'ffc5e558b8c73e7dfa74208684fd8a5c368cf40f67931def94fe16bbe1780cee', 'female', '2023-11-27', '', 0, 0, 0, ''),
('0320-0584', 'Berna', 'L', 'Fortades', '', '', '', '52f0e7c5c9fbaa1b0400d0ce5f86d593854ed0823ad88be017cb93964fee89b7', 'Female', '2023-11-26', '', 0, 0, 0, ''),
('0320-0599', 'Andres', 'Cruz', 'Palacio', '', '', '', '86abb32d72a6612a716382b3c999a68b2664a31b1304cca6f22d5e8ff9420824', 'male', '2023-12-06', '', 10.9, 20, 7, ''),
('0320-0636', 'Armando', 'Lapid', 'Reyes', '', '', '', '86abb32d72a6612a716382b3c999a68b2664a31b1304cca6f22d5e8ff9420824', 'male', '2023-12-07', '', 15.7, 15, 16, ''),
('0320-0637', 'Emmanuel', 'Flores', 'Solis', '', '', '', '84bb6fcc69d159eab34edc9547ac0a4e813b32fe679af27e84aaed85d0e3fb4e', 'male', '2023-12-05', '', 19.6, 46.6666666667, 8, ''),
('0320-0699', 'Victor', 'Palacio', 'Lapid', '', '', '', '86abb32d72a6612a716382b3c999a68b2664a31b1304cca6f22d5e8ff9420824', 'male', '2023-12-07', '', 19.1, 45, 8, ''),
('0320-0761', 'Theresa', 'Lee', 'Tizon', '', 'Jellyfish.jpg', '', 'a9ddf0853d8d0547c4a076a298e2cfcdda2f3dd99d6e7dd8bd681a40a5dd940e', 'female', '2023-12-05', '2023-12-05 11:00:28pm', 31.2, 55, 21, ''),
('0320-0842', 'Leandro', 'Lao', 'Tuazon', '', '', '', '86abb32d72a6612a716382b3c999a68b2664a31b1304cca6f22d5e8ff9420824', 'male', '2023-12-08', '', 12, 40, 0, ''),
('0320-0849', 'Ramon', 'Dizon', 'Francisco', '', '', '', '343313f9e380f90642561a64292216559d644ec3b9e7f5dfbb9f00cd2d49e1ce', 'male', '2023-12-09', '', 25.7, 60, 11, ''),
('0320-1111', 'Antonio', 'Solis', 'Mendoza', '', 'ai4zz-yhugc.jpg', '', '2671775eb075da9c8f1591f8778bc1b59e9a55f7267a4634fd458e350424d751', 'male', '2023-12-05', '2023-12-05 10:48:12pm', 22.65, 47.5, 12, ''),
('0320-381', 'Rafael', 'Jimenez', 'Estrella', '', '', '', '360f06dfb13df6ca16177373a668aaaa1cd1a14f001a3902479ab662e9f95a76', 'male', '2023-12-06', '', 6, 20, 0, ''),
('0321-0328', 'Eduardo', 'Paredes', 'Manalo', '', '', '', '86abb32d72a6612a716382b3c999a68b2664a31b1304cca6f22d5e8ff9420824', 'male', '2023-12-08', '', 18.9, 35, 12, ''),
('0321-0342', 'Lourdes', 'Ong', 'Olalia', '', '', '', '86abb32d72a6612a716382b3c999a68b2664a31b1304cca6f22d5e8ff9420824', 'female', '2023-12-08', '', 13, 43.3333333333, 0, ''),
('0321-0449', 'Jaime', 'Francisco', 'Marcelo', '', '', '', 'a135f2dabb2113335ee5d15161a52a7da79c7fac2333c5c24adfc49d67084514', 'female', '2023-12-09', '', 15, 50, 0, ''),
('0321-0472', 'Ramona', 'Manalo', 'Ong', '', '', '', '86abb32d72a6612a716382b3c999a68b2664a31b1304cca6f22d5e8ff9420824', 'female', '2023-12-08', '', 11, 36.6666666667, 0, ''),
('0321-0772', 'Alberto', 'Macalintal', 'Lao', '', '', '', '86abb32d72a6612a716382b3c999a68b2664a31b1304cca6f22d5e8ff9420824', 'male', '2023-12-08', '', 12.75, 42.5, 0, ''),
('0321-0822', 'Samantha', 'Baquiran', 'Macalintal', '', '', '', '86abb32d72a6612a716382b3c999a68b2664a31b1304cca6f22d5e8ff9420824', 'female', '2023-12-08', '', 14.4, 20, 12, ''),
('0321-0849', 'Janice', 'Santiago', 'Barreto', '', '', '', '732884b1a495847225dabc12b1e7ea91b9e1f8608c298ff3938aac8d08939910', 'female', '2023-12-09', '', 24.4, 53.3333333333, 12, ''),
('123-032', 'Sas', 'Bad', 'Bad', '', '', '', '0390024610415f44c9d5ca4a01dd96bb09fc95e6450bfd740a9a4cf4abcc8130', 'male', '2023-11-30', '', 0, 0, 0, ''),
('123-456', 'John', 'NA', 'Doe', '', '', '', 'Password', 'other', '2023-11-29', '', 0, 0, 0, ''),
('1230-1111', 'trylang', 'trylang', 'trylang', '', '', '', 'bb771acb7facce28b7d581303fcbb70c7bb465bbf92b9a7a39e440dd6dc71ef0', 'female', '2023-12-10', '', 0, 0, 0, 'f99f82fb7a85969f50661b9a3dee859c'),
('456-789', 'Test', 'M', 'Tart', '', 'test.jpg', '', 'Password', '', '0000-00-00', '', 0, 20, 50, ''),
('789-123', 'Test', 'M', 'Tart', '', '', '', 'e6de38b59f967fde2ffd48b5ff1feb7831e202c7fb382dc38b24e8e30a656259', 'other', '2023-11-28', '', 20.8888888889, 0, 0, ''),
('987-654', 'Kyla', 'Guevarra', 'Tolentino', '', '', '', '5942dbfbdf6af80d135b5a01538bc62f4a0bf63f74c677ab97421b97ae24b48e', 'female', '2023-11-29', '', 9, 30, 0, ''),
('9999 OR 1=1', 'Jerem', 'asd', 'Rivera', '', '', '', 'ca79d8d60c228e3670c67e50020683006d17b4d934eedb3c3c74d41f9c27ec6d', 'Male', '2023-11-28', '2023-11-28 03:49:09pm', 0, 0, 0, ''),
('A1234', 'JC', 'Gutz', 'Macxx', '', '', '', 'b75e33bffdfaf4fee56ad72efa7e676029e7752e6842c948be3dd48a3212d098', 'Male', '2023-11-27', '', 0, 0, 0, ''),
('C1234', 'Lance', 'Gutz', 'Macxxx', '', '', '', '5d0f33c3e5a686505b33644096cf2660961ffcb3463dae3bab76cdfca41475b5', 'Male', '2023-11-27', '2023-11-27 06:18:30pm', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subid` int(11) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `assigntid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `learnmid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subid`, `subname`, `assigntid`, `classid`, `learnmid`) VALUES
(1, 'Criminal Law Book I', 0, 1, 'Lab2- Razo, Frederick- 3WMAD2.pdf'),
(2, 'Criminal Law Book II', 0, 1, 'itep308-Razo, Frederick- WMAD2.docx'),
(3, 'Criminal Procedure', 0, 1, ''),
(4, ' Evidence and Court Testimony', 0, 1, ''),
(5, 'Police Organization and Administration with Police Planning', 0, 2, ''),
(6, 'Industrial Security Administration', 0, 2, ''),
(7, 'Police Patrol Operations with Police Communication System', 0, 2, ''),
(8, 'Police Intelligence', 0, 2, ''),
(9, 'Police Personnel and Records Management', 0, 2, ''),
(10, 'Comparative Police System', 0, 2, 'FinalExam(Checked)-Razo_Frederick-BS InfoTech 2-A.pdf'),
(11, 'Personal Identification', 0, 3, ''),
(12, 'Police Photography', 0, 3, ''),
(13, 'Forensic Ballistics', 0, 3, ''),
(14, 'Questioned Documents Examination', 0, 3, ''),
(15, 'Polygraph - Lie Detection', 0, 3, ''),
(16, 'Legal Medicine', 0, 3, ''),
(17, 'Fundamentals of Criminal Investigation', 0, 4, ''),
(18, 'Traffic Management and Accident Investigation', 0, 4, ''),
(20, 'Special Crime Investigation', 0, 4, ''),
(21, 'Organized Crime Investigation', 0, 4, ''),
(22, 'Drug Education and Vice Control', 0, 4, ''),
(23, ' Fire Technology and Arson Investigation', 0, 4, ''),
(24, 'Introduction to Criminology and Psychology of Crimes', 0, 5, ''),
(25, 'Philippine Criminal Justice System', 0, 5, ''),
(26, 'Ethics and Values', 0, 5, ''),
(27, 'Juvenile Delinquency', 0, 5, ''),
(28, 'Human Behavior and Crisis Management and Criminological', 0, 5, ''),
(29, 'Research and Statistics', 0, 5, ''),
(30, ' Institutional Corrections', 0, 6, ''),
(31, 'Non-Institutional Corrections', 2, 6, 'Module-3-Activity-No-4 ERP-Short-Answer-Essay.docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`anid`);

--
-- Indexes for table `assignteacher`
--
ALTER TABLE `assignteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barchart`
--
ALTER TABLE `barchart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`examid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learnm`
--
ALTER TABLE `learnm`
  ADD PRIMARY KEY (`learnmid`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`optionid`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizid`);

--
-- Indexes for table `quizscore`
--
ALTER TABLE `quizscore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `anid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `assignteacher`
--
ALTER TABLE `assignteacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `barchart`
--
ALTER TABLE `barchart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `classid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `examid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=491;

--
-- AUTO_INCREMENT for table `learnm`
--
ALTER TABLE `learnm`
  MODIFY `learnmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `optionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quizid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;

--
-- AUTO_INCREMENT for table `quizscore`
--
ALTER TABLE `quizscore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
