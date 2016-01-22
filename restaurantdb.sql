-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2015 at 06:29 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurantdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `BookingId` int(10) NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `PersonNumber` int(11) NOT NULL,
  `BookingDate` date NOT NULL,
  `TimeBand` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingId`, `CustomerName`, `ContactNo`, `Email`, `PersonNumber`, `BookingDate`, `TimeBand`) VALUES
(1, 'farin', '87238782738', 'hshdjhsjdhj', 67, '2015-08-11', '67 am'),
(2, 'kathedrela', '3498294732987482', 'kathedrleknjk.ddfd@gmail.com', 30, '2015-08-12', '1 P.M');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `BranchId` int(10) NOT NULL,
  `BranchName` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `BranchImg` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`BranchId`, `BranchName`, `Location`, `ContactNo`, `BranchImg`) VALUES
(1, 'Dhaka', '33', '01921617125', 'BranchImg/Dhaka_branch.jpg'),
(2, 'Rajshahi\r\n\r\n', 'Shaheb Bazar,Zero point', '01882938387', 'BranchImg/Rajshahi_branch.jpg'),
(3, 'Chittagong\r\n', 'Monsurabad,road-15', '0192828383727', 'BranchImg/Chittagong_branch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `FoodId` int(11) NOT NULL,
  `FoodName` varchar(255) DEFAULT NULL,
  `FoodType` varchar(255) DEFAULT NULL,
  `Price` double DEFAULT NULL,
  `FoodImg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`FoodId`, `FoodName`, `FoodType`, `Price`, `FoodImg`) VALUES
(1, 'Rice(bashmoti)', 'Bengali', 100, 'FoodImg/food/Rice(bashmoti)high.jpg'),
(2, 'Biriyani', 'Bengali', 140, 'FoodImg/food/Biriyani.jpg'),
(3, 'Khichuri', 'Bengali', 120, 'FoodImg/food/khichuri_high.jpg'),
(5, 'Beef Kala Bhuna', 'Bengali', 200, 'FoodImg/food/beef_kala_bhuna.jpg'),
(6, 'Chicken Rejalaa', 'Bengali', 170, 'FoodImg/food/chicken_rejalaa.jpg'),
(7, 'Chicken Roast', 'Bengali', 170, 'FoodImg/food/chicken_roast_2.jpg'),
(8, 'Hasher Jhal Mangsho', 'Bengali', 200, 'FoodImg/food/hasher _jhal_mangsho.jpg'),
(9, 'Mutton Rejala', 'Bengali', 210, 'FoodImg/food/mutton_rejala.jpg'),
(10, 'Shorshe Ilish', 'Bengali', 150, 'FoodImg/food/Shorshe_ilish.jpg'),
(11, 'Dim ER Jhal Vuna', 'Bengali', 110, 'FoodImg/food/dim_jhal_vuna1.jpg'),
(12, 'Chingrir Dopeyaja', 'Bengali', 180, 'FoodImg/food/Chingri_dopeyaja.jpg'),
(13, 'Chingrir Malai Curry', 'Bengali', 175, 'FoodImg/food/chingri_malai_curry.jpg'),
(14, 'Doi Mach', 'Bengali', 145, 'FoodImg/food/doi_mach.jpg'),
(15, 'Alu Vorta', 'Bengali', 40, '\r\nFoodImg/food/alu_bhorta.jpg'),
(16, 'Begun Bhaji', 'Bengali', 60, 'FoodImg/food/begun_bhaji.jpg'),
(17, 'Begun Bhorta', 'Bengali', 49, 'FoodImg/food/begun_bhorta.jpg'),
(18, 'Shutki Bhorta', 'Bengali', 110, 'FoodImg/food/shutki(loitta).jpg'),
(19, 'Gajorer Halua', 'Bengali', 120, 'FoodImg/food/gajorer_halua.jpg'),
(20, 'Gulab Jamun', 'Bengali', 70, 'FoodImg/food/gulab_jamun.jpg'),
(21, 'Jilapi', 'Bengali', 40, 'FoodImg/food/jilappii.jpg'),
(22, 'Jorda', 'Bengali', 58, 'FoodImg/food/jorda.jpg'),
(23, 'Patishapta Pitha', 'Bengali', 80, 'FoodImg/food/patishapta_pitha.jpg'),
(24, 'Payesh', 'Bengali', 110, 'FoodImg/food/payesh.jpg'),
(25, 'Rosh Malai', 'Bengali', 70, 'FoodImg/food/rosh_malai.jpg'),
(26, 'Roll Shondesh', 'Bengali', 120, 'FoodImg/food/roll_shondesh.jpg'),
(27, 'Kacha Aamer Shorbot', 'Bengali', 130, 'FoodImg/food/kacha_amer_shorbot.jpg'),
(28, 'Lachchi', 'Bengali', 110, 'FoodImg/food/lachchi.jpg'),
(29, 'Peking Roasted Duck', 'Chinese', 230, 'FoodImg/food/peking_roasted_duck.jpg'),
(30, 'Lobster Cantonese', 'Chinese', 230, 'FoodImg/food/Lobster Cantonese.jpg'),
(31, 'Chinese Chicken Pizza', 'Chinese', 500, 'FoodImg/food/chinese_chicken_pizza.jpg'),
(32, 'chow_mein_1', 'Chinese', 390, 'FoodImg/food/chow_mein_1.jpg'),
(33, 'Dumplings', 'Chinese', 430, 'FoodImg/food/dumplings.jpg'),
(34, 'Chinese Coconut Buns', 'Chinese', 370, 'FoodImg/food/chinese coconut buns.jpg'),
(35, 'Egg Fried Rice', 'Chinese', 440, 'FoodImg/food/egg_fried_rice.jpg'),
(36, 'Eight Treasure Rice', 'Chinese', 510, 'FoodImg/food/Eight Treasure Rice.jpg'),
(37, 'Fried Shrimps with Cashews', 'Chinese', 390, 'FoodImg/food/Fried Shrimps with Cashews.jpg'),
(38, 'Gong Bao Chicken', 'Chinese', 670, 'FoodImg/food/Gong_bao_chicken.jpg'),
(39, 'Chinese Baked Pears', 'Chinese', 440, 'FoodImg/food/Chinese Baked Pears.jpg'),
(40, 'Chinese Chews', 'Chinese', 405, 'FoodImg/food/Chinese Chews.jpg'),
(41, 'Kumquats', 'Chinese', 290, 'FoodImg/food/Kumquats.jpg'),
(42, 'Ma Po Tofu', 'Chinese', 290, 'FoodImg/food/ma_po_tofu.jpg'),
(43, 'Spring Roll', 'Chinese', 240, 'FoodImg/food/Spring_Rolls_2.jpg'),
(44, 'Sweet And Sour Pork', 'Chinese', 410, 'FoodImg/food/sweet_and_sour_pork.jpg'),
(45, 'Won Ton Soup', 'Chinese', 310, 'FoodImg/food/won_ton_soup.jpg'),
(46, 'wontons', 'Chinese', 350, 'FoodImg/food/wontons1.jpg'),
(47, 'carrot-juice', 'Chinese', 299, 'FoodImg/food/carrot-juice.jpg'),
(48, 'Freshly Squeezed Orange Juice', 'Chinese', 299, 'FoodImg/food/Freshly Squeezed Orange Juice.jpg'),
(49, 'Mango Juice', 'Chinese', 269, 'FoodImg/food/mango_juice.jpg'),
(50, 'Strawberry Juice', 'Chinese', 259, 'FoodImg/food/strawnerry_juice.jpg'),
(51, 'Watermelon Juice', 'Chinese', 239, 'FoodImg/food/watermelon-juice.jpg'),
(52, 'Black Tea', 'Chinese', 169, 'FoodImg/food/black_tea.jpg'),
(53, 'Chrysanthemum tea', 'Chinese', 239, 'FoodImg/food/Chrysanthemum tea3.jpg'),
(54, 'Green Tea', 'Chinese', 159, 'FoodImg/food/green_tea.jpg'),
(55, 'Oolong Tea', 'Chinese', 180, 'FoodImg/food/Oolong_tea.jpg'),
(56, 'Pearl Milk Tea', 'Chinese', 180, 'FoodImg/food/pearl_milk_tea.jpg'),
(57, 'Scented Tea', 'Chinese', 190, 'FoodImg/food/Scented_tea.jpg'),
(58, 'Tieguanyin', 'Chinese', 310, 'FoodImg/food/Tieguanyin1.jpg'),
(59, 'Tang Yuan', 'Chinese', 340, 'FoodImg/food/Tang Yuan.jpg'),
(60, 'Tom Kha Kai (Chicken in Coconut Soup)', 'Thai', 540, 'FoodImg/food/Tom Kha Kai (Chicken in Coconut Soup).jpg'),
(61, 'Tom Yam Kung', 'Thai', 440, 'FoodImg/food/Tom Yam Kung.jpg'),
(62, 'Phat Thai(fried_noodles_thai_style)', 'Thai', 350, 'FoodImg/food/Phat Thai(fried_noodles_thai_style).jpg'),
(63, 'Kai Phat Met Mamuang Himmaphan(Chicken Fried with Cashew Nuts)', 'Thai', 450, 'FoodImg/food/Kai Phat Met Mamuang Himmaphan(Chicken Fried with Cashew Nuts).jpg'),
(64, 'Thai Chicken Pizza', 'Thai', 650, 'FoodImg/food/thai_chicken_pizza.jpg'),
(65, 'Water Chestnuts in Coconut Soup', 'Thai', 650, 'FoodImg/food/Water Chestnuts in Coconut Soup.jpg'),
(66, 'Yam Nua(Spicy Beef Salad)', 'Thai', 550, 'FoodImg/food/Yam Nua(Spicy Beef Salad).jpg'),
(67, 'Coconut Rice Pudding', 'Thai', 750, 'FoodImg/food/Coconut Rice Pudding.jpg'),
(68, 'Corn Cakes with Sweet Chilli Sauce', 'Thai', 630, 'FoodImg/food/Corn Cakes with Sweet Chilli Sauce.jpg'),
(69, 'Green Papaya Salad', 'Thai', 430, 'FoodImg/food/Green Papaya Salad.jpg'),
(70, 'Kaeng Khiao Wan Kai(Green-Chicken-Curry)', 'Thai', 590, 'FoodImg/food/Kaeng Khiao Wan Kai(Green-Chicken-Curry).jpg'),
(71, 'Kaeng Phanaeng(Meat in Coconut Cream)', 'Thai', 490, 'FoodImg/food/Kaeng Phanaeng(Meat in Coconut Cream).jpg'),
(72, 'Kaeng Phet Pet Yang(Roast Duck Curry)', 'Thai', 570, 'FoodImg/food/Kaeng Phet Pet Yang(Roast Duck Curry).jpg'),
(73, 'Mu or Kai Sa-te(Roast Pork or Chicken Coated with Turmeric)', 'Thai', 490, 'FoodImg/food/Mu or Kai Sa-te(Roast Pork or Chicken Coated with Turmeric).jpg'),
(74, 'Phat Kaphrao(Meat or Seafood Fried with Sweet Basil)', 'Thai', 490, 'FoodImg/food/Phat Kaphrao(Meat or Seafood Fried with Sweet Basil).jpg'),
(75, 'Sweet Rolled Sesame Pancake', 'Thai', 340, 'FoodImg/food/Sweet Rolled Sesame Pancake.jpg'),
(76, 'Khao Tom Mud (Banana Leaf Sticky Rice)(Banana Leaf Sticky Rice)', 'Thai', 240, 'FoodImg/food/Khao Tom Mud (Banana Leaf Sticky Rice)(Banana Leaf Sticky Rice).jpg'),
(77, 'Khanom Pang Wan  (Sweet Breads)', 'Thai', 330, 'FoodImg/food/Khanom Pang Wan  (Sweet Breads).jpg'),
(78, 'Khao Lam(sticky_rice_in_bamboo)', 'Thai', 380, 'FoodImg/food/khao-lam(sticky_rice_in_bamboo).jpg'),
(79, 'Thai Chilli Broccoli Salad', 'Thai', 430, 'FoodImg/food/Thai Chilli Broccoli Salad.jpg'),
(80, 'Khao Neow Sang Kaya (Sticky Rice with Custard)', 'Thai', 340, 'FoodImg/food/Khao Neow Sang Kaya (Sticky Rice with Custard).jpg'),
(81, 'Takoh(Coconut Cream Jelly)', 'Thai', 310, 'FoodImg/food/Takoh(Coconut Cream Jelly).jpg'),
(82, 'Woon (jelly)', 'Thai', 200, 'FoodImg/food/Woon (jelly).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'asif', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderId` int(10) NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `FoodName` varchar(255) NOT NULL,
  `Quantity` int(2) NOT NULL,
  `FoodName2` varchar(255) DEFAULT NULL,
  `Quantity2` int(2) DEFAULT NULL,
  `FoodName3` varchar(255) DEFAULT NULL,
  `Quantity3` int(2) DEFAULT NULL,
  `BranchName` varchar(255) DEFAULT NULL,
  `OrderDate` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderId`, `CustomerName`, `Address`, `ContactNo`, `FoodName`, `Quantity`, `FoodName2`, `Quantity2`, `FoodName3`, `Quantity3`, `BranchName`, `OrderDate`) VALUES
(1, '', '', '', 'Beef Kala Bhuna', 2, 'Alu Vorta', 1, 'Chicken Roast', 2, 'Dhaka', NULL),
(2, 'alif', 'boshundhara', '7298378127382', 'Chingrir Dopeyaja', 2, 'Doi Mach', 5, 'Gulab Jamun', 2, 'Rajshahi\r\n\r\n', '2015-08-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BranchId`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`FoodId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `BranchId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `FoodId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
