-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2019 at 12:07 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phms`
--

-- --------------------------------------------------------

--
-- Table structure for table `animaltype`
--

CREATE TABLE IF NOT EXISTS `animaltype` (
  `type_id` int(10) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `animaltype`
--


-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE IF NOT EXISTS `diseases` (
  `d_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` int(10) NOT NULL,
  `d_name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `d_discription` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sy_id` int(10) NOT NULL,
  PRIMARY KEY (`d_id`),
  KEY `p_id` (`p_id`),
  KEY `sy_id` (`sy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `diseases`
--


-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `dis_id` int(10) NOT NULL AUTO_INCREMENT,
  `dis_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`dis_id`),
  UNIQUE KEY `dis_name` (`dis_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`dis_id`, `dis_name`) VALUES
(2, 'Ahmedabad'),
(1, 'Anand'),
(24, 'arjun'),
(22, 'Bhavnagar'),
(25, 'sdfhhgh');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `q_id` int(10) NOT NULL AUTO_INCREMENT,
  `f_id` int(10) NOT NULL,
  `s_type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `f_question` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`q_id`),
  KEY `s_id` (`s_type`),
  KEY `s_id_2` (`s_type`),
  KEY `f_id` (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`q_id`, `f_id`, `s_type`, `f_question`, `p_name`, `image`, `status`) VALUES
(36, 18, 'કઠોળ', 'પાન પર પીળા રંગના ટપકાં છે? ', 'મગ', 'fsendimage/PHMS1.jpg', 1),
(37, 19, 'ધાન્ય', 'રોગમાં દાણાના ઉગાવાવાળા ભાગ ઉપર કાલા ડાઘ પડતા દેખાય છે? ', 'ઘઉં', 'fsendimage/PHMS2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faq_answer`
--

CREATE TABLE IF NOT EXISTS `faq_answer` (
  `a_id` int(10) NOT NULL AUTO_INCREMENT,
  `s_type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `q_id` int(10) NOT NULL,
  `s_answer` varchar(500) CHARACTER SET utf8 NOT NULL,
  `f_id` int(10) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`a_id`),
  KEY `s_id` (`s_type`),
  KEY `q_id` (`q_id`),
  KEY `f_id` (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `faq_answer`
--

INSERT INTO `faq_answer` (`a_id`, `s_type`, `q_id`, `s_answer`, `f_id`, `status`) VALUES
(16, 'કઠોળ', 36, 'બીજને થયોંમેંથોક્ઝામ ૩૫ એફએસ ૧૦ મિલી/કિલો બીજ પ્રમાણે માવજત આપી વાવણી કરવી .', 18, 1),
(17, 'ધાન્ય', 37, 'પાકની પાછલી અવસ્થામાં, હળવું પિયત આપવાથી રોગની માત્રા ઘટાડી શકાય છે. ', 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE IF NOT EXISTS `farmer` (
  `f_id` int(10) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `f_address` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dis_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `t_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `v_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `f_pincode` varchar(10) CHARACTER SET utf8 NOT NULL,
  `f_phone_no` varchar(20) CHARACTER SET utf8 NOT NULL,
  `f_username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `f_password` varchar(30) NOT NULL,
  PRIMARY KEY (`f_id`),
  UNIQUE KEY `f_username` (`f_username`),
  UNIQUE KEY `f_username_2` (`f_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`f_id`, `f_name`, `f_address`, `dis_name`, `t_name`, `v_name`, `f_pincode`, `f_phone_no`, `f_username`, `f_password`) VALUES
(18, 'સંદીપ રાઠવા ', 'અણદેજ ચોક,અનાદેજ ', 'અમદાવાદ', 'સાણંદ', 'અનાદેજ', '379665', '૭૮૫૪૯૪૧૨૬૬', 'સંદીપ', '123'),
(19, 'ધ્રુવિલ વસાવા ', 'આમોદ ચોક,આમોદ  ', 'આણંદ', 'પેટલાદ', 'આમોદ', '૩૮૮૧૧૦', '૮૮૪૯૪૮૭૪૧૪', 'ધ્રુવિલ', '123'),
(20, 'arjunchopda', 'ram', 'Ahmedabad', 'Dholka', 'અંધેરી', '364140', '9924994460', 'arjunchopda', '9924994460'),
(21, 'હેમલ', 'મહેમદાબાદ', 'Anand', 'Borsad', 'ભાદરણ', '567655', '8978675654', 'hvp', '123qwe');

-- --------------------------------------------------------

--
-- Table structure for table `plantname`
--

CREATE TABLE IF NOT EXISTS `plantname` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `type_id` int(10) NOT NULL,
  PRIMARY KEY (`p_id`),
  UNIQUE KEY `p_name` (`p_name`),
  KEY `type_id` (`type_id`),
  KEY `type_id_2` (`type_id`),
  KEY `type_id_3` (`type_id`),
  KEY `type_id_4` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `plantname`
--

INSERT INTO `plantname` (`p_id`, `p_name`, `type_id`) VALUES
(67, 'ABC', 120),
(68, 'CHOPDA', 120),
(69, 'ARJUNNNNNNN', 121),
(70, 'ARJUN', 120),
(72, 'ytytyvyu', 123),
(73, 'rohit', 121),
(74, 'arrrrrrrrr', 124);

-- --------------------------------------------------------

--
-- Table structure for table `planttype`
--

CREATE TABLE IF NOT EXISTS `planttype` (
  `type_id` int(10) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`type_id`),
  UNIQUE KEY `type_name` (`type_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `planttype`
--

INSERT INTO `planttype` (`type_id`, `type_name`) VALUES
(126, 'arjughjghkghk'),
(120, 'ARJUN'),
(121, 'ARJUVCHOP'),
(124, 'choooooooo'),
(123, 'rohiy');

-- --------------------------------------------------------

--
-- Table structure for table `scientist`
--

CREATE TABLE IF NOT EXISTS `scientist` (
  `s_id` int(10) NOT NULL AUTO_INCREMENT,
  `q_id` int(10) NOT NULL,
  `s_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `s_address` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dis_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `t_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `v_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `s_pincode` varchar(6) CHARACTER SET utf8 NOT NULL,
  `s_phoneno` varchar(20) CHARACTER SET utf8 NOT NULL,
  `s_email` varchar(30) NOT NULL,
  `s_type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `s_username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `s_password` varchar(30) NOT NULL,
  `type_id` int(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`s_id`),
  UNIQUE KEY `s_email` (`s_email`),
  UNIQUE KEY `s_username` (`s_username`),
  KEY `type_id` (`type_id`),
  KEY `q_id` (`q_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `scientist`
--


-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE IF NOT EXISTS `symptoms` (
  `sy_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` int(10) NOT NULL,
  `p_symptoms` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`sy_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `symptoms`
--


-- --------------------------------------------------------

--
-- Table structure for table `taluka`
--

CREATE TABLE IF NOT EXISTS `taluka` (
  `t_id` int(10) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dis_id` int(10) NOT NULL,
  PRIMARY KEY (`t_id`),
  KEY `dis_id` (`dis_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `taluka`
--

INSERT INTO `taluka` (`t_id`, `t_name`, `dis_id`) VALUES
(1, 'Borsad', 1),
(2, 'Petal', 1),
(3, 'Dholka', 2),
(4, 'talaja', 22);

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE IF NOT EXISTS `village` (
  `v_id` int(10) NOT NULL AUTO_INCREMENT,
  `t_id` int(10) NOT NULL,
  `v_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`v_id`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`v_id`, `t_id`, `v_name`) VALUES
(1, 1, 'ભાદરણ'),
(2, 2, 'આમોદ'),
(3, 3, 'અંધેરી'),
(12, 2, 'બામરોલી'),
(13, 4, 'RAMAPARA');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diseases`
--
ALTER TABLE `diseases`
  ADD CONSTRAINT `diseases_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `plantname` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diseases_ibfk_2` FOREIGN KEY (`sy_id`) REFERENCES `symptoms` (`sy_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `faq_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `farmer` (`f_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faq_answer`
--
ALTER TABLE `faq_answer`
  ADD CONSTRAINT `faq_answer_ibfk_2` FOREIGN KEY (`q_id`) REFERENCES `faq` (`q_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faq_answer_ibfk_3` FOREIGN KEY (`f_id`) REFERENCES `farmer` (`f_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plantname`
--
ALTER TABLE `plantname`
  ADD CONSTRAINT `plantname_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `planttype` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scientist`
--
ALTER TABLE `scientist`
  ADD CONSTRAINT `scientist_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `planttype` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD CONSTRAINT `symptoms_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `plantname` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taluka`
--
ALTER TABLE `taluka`
  ADD CONSTRAINT `taluka_ibfk_1` FOREIGN KEY (`dis_id`) REFERENCES `district` (`dis_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `village`
--
ALTER TABLE `village`
  ADD CONSTRAINT `village_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `taluka` (`t_id`) ON DELETE CASCADE ON UPDATE CASCADE;
