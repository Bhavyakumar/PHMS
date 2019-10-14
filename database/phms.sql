-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 09:31 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phms`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE IF NOT EXISTS `diseases` (
`d_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `d_name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `d_discription` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sy_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`d_id`, `p_id`, `d_name`, `d_discription`, `sy_id`) VALUES
(7, 62, 'પાનનો ગેરુ', 'રોગની શરૂઆત થાય ત્યારથી મેંકોઝોબ દવાના ત્રણ છંટકાવ કરવા ૧૫ દિવસના અંતરે.', 5),
(8, 63, 'ગેરુ (રસ્ટ) ', 'રોગની શરૂઆત થાય ત્યારથી મેંકોઝોબ અથવા ઝાયનેબ દવાના ત્રણ છંટકાવ કરવા ૧૫ દિવસના અંતરે.', 6),
(10, 65, 'ભૂકી છારો', 'ફુગનાશક કાર્બેનડઝિમ નાખો', 8),
(11, 64, 'મૂળનો કોહવારો ', 'પાક વાવતા પેહલા દિવેલાનો ખોળ હેક્ટરે ૧૦૦૦ કિલો જમીનમાં આપવો. ', 9);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
`dis_id` int(10) NOT NULL,
  `dis_name` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`dis_id`, `dis_name`) VALUES
(2, 'અમદાવાદ'),
(1, 'આણંદ'),
(22, 'છોટાઉદેપુર'),
(24, 'ડીસા'),
(4, 'દાહોદ'),
(3, 'મોડાસા'),
(15, 'સાબરકાંઠા'),
(14, 'સુરેન્દ્રનગર');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
`q_id` int(10) NOT NULL,
  `f_id` int(10) NOT NULL,
  `s_type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `f_question` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

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
`a_id` int(10) NOT NULL,
  `s_type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `q_id` int(10) NOT NULL,
  `s_answer` varchar(500) CHARACTER SET utf8 NOT NULL,
  `f_id` int(10) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

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
`f_id` int(10) NOT NULL,
  `f_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `f_address` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dis_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `t_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `v_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `f_pincode` varchar(10) CHARACTER SET utf8 NOT NULL,
  `f_phone_no` varchar(20) CHARACTER SET utf8 NOT NULL,
  `f_username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `f_password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`f_id`, `f_name`, `f_address`, `dis_name`, `t_name`, `v_name`, `f_pincode`, `f_phone_no`, `f_username`, `f_password`) VALUES
(18, 'સંદીપ રાઠવા ', 'અણદેજ ચોક,અનાદેજ ', 'અમદાવાદ', 'સાણંદ', 'અનાદેજ', '379665', '૭૮૫૪૯૪૧૨૬૬', 'સંદીપ', '123'),
(19, 'ધ્રુવિલ વસાવા ', 'આમોદ ચોક,આમોદ  ', 'આણંદ', 'પેટલાદ', 'આમોદ', '૩૮૮૧૧૦', '૮૮૪૯૪૮૭૪૧૪', 'ધ્રુવિલ', '123');

-- --------------------------------------------------------

--
-- Table structure for table `plantname`
--

CREATE TABLE IF NOT EXISTS `plantname` (
`p_id` int(10) NOT NULL,
  `p_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `type_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plantname`
--

INSERT INTO `plantname` (`p_id`, `p_name`, `type_id`) VALUES
(62, 'ઘઉં', 118),
(63, 'બાજરી', 118),
(64, 'ચણા', 119),
(65, 'તુવેર', 119);

-- --------------------------------------------------------

--
-- Table structure for table `planttype`
--

CREATE TABLE IF NOT EXISTS `planttype` (
`type_id` int(10) NOT NULL,
  `type_name` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planttype`
--

INSERT INTO `planttype` (`type_id`, `type_name`) VALUES
(119, 'કઠોળ'),
(118, 'ધાન્ય');

-- --------------------------------------------------------

--
-- Table structure for table `scientist`
--

CREATE TABLE IF NOT EXISTS `scientist` (
`s_id` int(10) NOT NULL,
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
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scientist`
--

INSERT INTO `scientist` (`s_id`, `q_id`, `s_name`, `s_address`, `dis_name`, `t_name`, `v_name`, `s_pincode`, `s_phoneno`, `s_email`, `s_type`, `s_username`, `s_password`, `type_id`, `status`) VALUES
(47, 0, 'સિંહલ સોલંકી ', 'બોરસદ ચોક ,ભાદરણ ', 'આણંદ', 'બોરસદ', 'ભાદરણ', '૩૮૮૧૧૦', '૭૮૫૪૫૯૫૬૬૨', 'sinhalsolanki2@gmail.com', 'કઠોળ', 'સિંહલ', '123', 119, 1),
(48, 0, 'નિગમ પટેલ', 'અંધેરી મુખ્ય ચોક , અંધેરી ', 'અમદાવાદ', 'ધોળકા', 'અંધેરી', '૩૭૯૬૬૫', '૯૮૭૪૫૫૪૫૫૬', 'patelnigam4599@student.aau.in', 'ધાન્ય', 'નિગમ', '123', 118, 1);

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE IF NOT EXISTS `symptoms` (
`sy_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `p_symptoms` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`sy_id`, `p_id`, `p_symptoms`) VALUES
(5, 62, 'પાંદડા પર બદામી રંગના ઉપસેલા ચાઠાં '),
(6, 63, 'પાંદડા પર નાના કથ્થાઈ રંગના ટાંચણીના માથા જેવડા,ગો'),
(8, 65, 'પાન પર અને બીજા ભાગ પર સફેદ ફૂગનો પાવડર જોવા મળે'),
(9, 64, 'છોડના જમીનના સ્તરે કાળાશ પડતા ડાઘા જોવા મળે  ');

-- --------------------------------------------------------

--
-- Table structure for table `taluka`
--

CREATE TABLE IF NOT EXISTS `taluka` (
`t_id` int(10) NOT NULL,
  `t_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dis_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taluka`
--

INSERT INTO `taluka` (`t_id`, `t_name`, `dis_id`) VALUES
(1, 'બોરસદ', 1),
(2, 'પેટલાદ', 1),
(3, 'ધોળકા', 2),
(4, 'સાણંદ', 2),
(10, 'ફતેહપુરા', 4),
(11, 'ધનસુરા', 3),
(12, 'વઢવાણ', 14),
(13, 'મેઘરજ', 3),
(14, 'ઇડર', 15),
(16, 'જેતપુર પાવી', 22),
(17, 'કવાંટ', 22);

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE IF NOT EXISTS `village` (
`v_id` int(10) NOT NULL,
  `t_id` int(10) NOT NULL,
  `v_name` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`v_id`, `t_id`, `v_name`) VALUES
(1, 1, 'ભાદરણ'),
(2, 2, 'આમોદ'),
(3, 3, 'અંધેરી'),
(4, 4, 'અનાદેજ'),
(5, 11, 'શીકા'),
(11, 13, 'પાંચાલ'),
(12, 2, 'બામરોલી'),
(13, 14, 'બડોલી');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
 ADD PRIMARY KEY (`d_id`), ADD KEY `p_id` (`p_id`), ADD KEY `sy_id` (`sy_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
 ADD PRIMARY KEY (`dis_id`), ADD UNIQUE KEY `dis_name` (`dis_name`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
 ADD PRIMARY KEY (`q_id`), ADD KEY `s_id` (`s_type`), ADD KEY `s_id_2` (`s_type`), ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `faq_answer`
--
ALTER TABLE `faq_answer`
 ADD PRIMARY KEY (`a_id`), ADD KEY `s_id` (`s_type`), ADD KEY `q_id` (`q_id`), ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
 ADD PRIMARY KEY (`f_id`), ADD UNIQUE KEY `f_username` (`f_username`), ADD UNIQUE KEY `f_username_2` (`f_username`);

--
-- Indexes for table `plantname`
--
ALTER TABLE `plantname`
 ADD PRIMARY KEY (`p_id`), ADD UNIQUE KEY `p_name` (`p_name`), ADD KEY `type_id` (`type_id`), ADD KEY `type_id_2` (`type_id`), ADD KEY `type_id_3` (`type_id`), ADD KEY `type_id_4` (`type_id`);

--
-- Indexes for table `planttype`
--
ALTER TABLE `planttype`
 ADD PRIMARY KEY (`type_id`), ADD UNIQUE KEY `type_name` (`type_name`);

--
-- Indexes for table `scientist`
--
ALTER TABLE `scientist`
 ADD PRIMARY KEY (`s_id`), ADD UNIQUE KEY `s_email` (`s_email`), ADD UNIQUE KEY `s_username` (`s_username`), ADD KEY `type_id` (`type_id`), ADD KEY `q_id` (`q_id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
 ADD PRIMARY KEY (`sy_id`), ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `taluka`
--
ALTER TABLE `taluka`
 ADD PRIMARY KEY (`t_id`), ADD KEY `dis_id` (`dis_id`);

--
-- Indexes for table `village`
--
ALTER TABLE `village`
 ADD PRIMARY KEY (`v_id`), ADD KEY `t_id` (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
MODIFY `dis_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
MODIFY `q_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `faq_answer`
--
ALTER TABLE `faq_answer`
MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `plantname`
--
ALTER TABLE `plantname`
MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `planttype`
--
ALTER TABLE `planttype`
MODIFY `type_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `scientist`
--
ALTER TABLE `scientist`
MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
MODIFY `sy_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `taluka`
--
ALTER TABLE `taluka`
MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `village`
--
ALTER TABLE `village`
MODIFY `v_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
