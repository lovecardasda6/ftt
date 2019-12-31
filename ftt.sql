-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2019 at 04:07 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ftt`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `action` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `address`, `action`) VALUES
(1, '16 J.A. Clarin Street Tagbilaran City near Florencio\'s Caltex Station', '');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `posted` date NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `posted`, `title`, `description`) VALUES
(1, '2019-12-30', 'Man-Made Forest w/ FTT', 'I love the feel of the cold air. It feel like it touch my body inside.'),
(2, '2019-12-30', 'Man-Made Forest w/ FTT', 'I love the feel of the cold air. It feel like it touch my body inside.'),
(3, '2019-12-30', 'Man-Made Forest w/ FTT', 'I love the feel of the cold air. It feel like it touch my body inside.'),
(4, '2019-12-30', 'Man-Made Forest w/ FTT', 'I love the feel of the cold air. It feel like it touch my body inside.'),
(5, '2019-12-30', 'Man-Made Forest w/ FTT', 'I love the feel of the cold air. It feel like it touch my body inside.'),
(6, '0000-00-00', '1@@@@@@@@@2', '1@@@@@@@@@2');

-- --------------------------------------------------------

--
-- Table structure for table `email_address`
--

CREATE TABLE `email_address` (
  `id` int(11) NOT NULL,
  `email_address` varchar(150) NOT NULL,
  `action` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email_address`
--

INSERT INTO `email_address` (`id`, `email_address`, `action`) VALUES
(1, 'felystoursandtravel@yahoo.com', ''),
(2, 'ftt_bookings@yahoo.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `type`) VALUES
(1, '1.png', 'slide'),
(2, '2.png', 'slide'),
(3, '3.png', ''),
(4, 'logo.png', 'logo');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_number`
--

CREATE TABLE `mobile_number` (
  `id` int(11) NOT NULL,
  `mobile_number` varchar(60) NOT NULL,
  `action` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobile_number`
--

INSERT INTO `mobile_number` (`id`, `mobile_number`, `action`) VALUES
(1, '0916-359-6126', ''),
(2, '0915-829-5095', ''),
(3, '0922-300-1458', ''),
(4, '0939-904-5521', '');

-- --------------------------------------------------------

--
-- Table structure for table `other_services`
--

CREATE TABLE `other_services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_services`
--

INSERT INTO `other_services` (`id`, `service_name`, `description`, `image`, `action`) VALUES
(2, 'Fiesta Bolanon Cuisine', ' A delicious Eat All You Can Restaurant for affordable price.', '30122019073240fiesta bolanon.png', ''),
(3, 'Fely\'s Pension House', ' ', '30122019073448house.png', ''),
(4, 'GTL Driving School', ' ', '301220190736384101075.png', ''),
(5, 'GTL Car Rental', ' ', '3012201907404718827473.png', ''),
(6, 'Geofel Trucking', '  ', '30122019074155icon_septic_services-300x300.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `package_destinations`
--

CREATE TABLE `package_destinations` (
  `id` int(11) NOT NULL,
  `tour_package_id` int(11) NOT NULL,
  `destination` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_destinations`
--

INSERT INTO `package_destinations` (`id`, `tour_package_id`, `destination`) VALUES
(1, 1, 'Bohol Dream Land'),
(2, 1, 'Dauis Church'),
(3, 1, 'Nova Shell Museum'),
(4, 1, 'Hinagdanan Cave'),
(5, 2, 'Blood Compact Shrine'),
(6, 2, 'Baclayon Church & Museum'),
(7, 2, 'Tarsier Conservation Park'),
(8, 2, 'Loboc River & Floating Restaurant'),
(9, 2, 'Bilar Man Made Forest'),
(10, 2, 'Simply Butterflies'),
(11, 2, 'Chocolate Hills'),
(12, 3, 'Alona Panglao'),
(13, 3, 'Isola De Francisco'),
(14, 4, 'Chocolate Hills Adventure Park (CHAP) is Bohol\'s latest eco-tourism adventure park. CHAP offers thrilling adventure activities for adults and children. This includes the Rush Bike Zip , Wave Runner Surf Zipline, Eco-nature hiking, Mountain Biking, Horse-back Riding Trails, and many more.'),
(15, 5, 'E.A.T. Danao is a tourism concept set up to benefit the municipality of Danao and its people. The specific activities were grouped into three: Extreme, Economic, and Educational. So â€œEâ€ stands for any of the three; â€œAâ€ for Adventure; then â€œTâ€ for Tour.'),
(16, 6, 'Abatan River'),
(17, 6, 'Loay River');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `album_id`, `image`) VALUES
(1, 1, 'blog_1.jpg'),
(2, 1, 'img_2.jpg'),
(3, 1, 'img_3.jpg'),
(4, 1, 'img_4.jpg'),
(5, 1, 'person_2.jpg'),
(6, 2, 'blog_1.jpg'),
(7, 2, 'img_2.jpg'),
(8, 2, 'img_3.jpg'),
(9, 2, 'img_4.jpg'),
(10, 2, 'person_2.jpg'),
(11, 3, 'blog_1.jpg'),
(12, 3, 'img_2.jpg'),
(13, 3, 'img_3.jpg'),
(14, 3, 'img_4.jpg'),
(15, 3, 'person_2.jpg'),
(16, 4, 'blog_1.jpg'),
(17, 4, 'img_2.jpg'),
(18, 4, 'img_3.jpg'),
(19, 4, 'img_4.jpg'),
(20, 4, 'person_2.jpg'),
(21, 5, 'blog_1.jpg'),
(22, 5, 'img_2.jpg'),
(23, 5, 'img_3.jpg'),
(24, 5, 'img_4.jpg'),
(25, 5, 'person_2.jpg'),
(26, 5, 'person_2.jpg'),
(27, 5, 'img_4.jpg'),
(28, 5, 'person_2.jpg'),
(32, 6, '3112201903210017.jpg'),
(35, 6, '3112201903501413.png'),
(36, 6, '3112201903501420.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `type`, `name`, `description`, `image`, `action`) VALUES
(1, 'Airlines', 'AirAsia', ' a low-cost airline based at Kuala Lumpur International Airport, Malaysia. The airline has partnered with other airlines and investors to create ventures in the Philippines, India and Japan.', '30122019065732airasia.png', ''),
(2, 'Airlines', 'Cebu Pacific', ' a flag carrier of the Philippines. The airline was founded in 1941 and is the first and oldest commercial airline in Asia. It serves 31 destinations in the Philippines and 41 overseas destinations.', '30122019065752cebupacific.png', ''),
(3, 'Airlines', 'Philippine Airlines', 'a Philippine low-cost airline based on the grounds of Ninoy Aquino International Airport (NAIA Terminal 3), Pasay City, Metro Manila, in the Philippines. It offers scheduled flights to both domestic and international destinations.', '30122019065804philair.png', ''),
(4, 'Shippings', 'Cokaliong Shipping Lines, Inc. (CSLI)', 'a shipping line based in Cebu City, Philippines. A shipping line that operates both passenger and cargo ferries on eight routes between islands in the Visayas and Mindanao regions.', '30122019065919cokaliong.jpg', ''),
(5, 'Shippings', 'Trans Asia Shipping Lines, Incorporated (TA SLI)', 'a shipping company based in Cebu City, Philippines. It offers services such as passenger and cargo transportation.', '30122019065935trans.png', ''),
(6, 'Shippings', '2GO Travel', 'a passenger ferry company which is based in Manila, Philippines and part of 2GO Group. It is the largest ferry company in the Philippines with its main hub located in Eva Macapagal Super Terminal in Pier 15 in the Manila South Harbor.', '301220190659482go.png', ''),
(7, 'Shippings', 'Ocean Fast Ferries Inc. Travel', 'which is formerly known as Ocean Jet, is a Filipino-owned shipping company that you can trust when you want to visit Cebu if youâ€™re from Visayas and Mindanao. Ocean Fast Ferries assures its passengers a safe and comfortable ride.', '30122019070010oceanjetlogo.png', ''),
(8, 'Shippings', 'Supercar Fast Ferry Corporation', 'commonly known as SuperCat, was a shipping company that operated a fleet of High Speed Catamarans in the Philippines. It is now part of 2GO Travel. Supercat was the sister company of SuperFerry and Cebu Ferries. It operated 7 vessels in 7 ports around the Philippines.', '30122019070024scat.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `telephone_number`
--

CREATE TABLE `telephone_number` (
  `id` int(11) NOT NULL,
  `tel_number` varchar(60) NOT NULL,
  `action` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telephone_number`
--

INSERT INTO `telephone_number` (`id`, `tel_number`, `action`) VALUES
(1, '(038) 411-4476', ''),
(2, '(038) 416-1198', ''),
(3, '(038) 510-1652', '');

-- --------------------------------------------------------

--
-- Table structure for table `tour_destinations`
--

CREATE TABLE `tour_destinations` (
  `id` int(11) NOT NULL,
  `destinations` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_destinations`
--

INSERT INTO `tour_destinations` (`id`, `destinations`, `description`, `action`) VALUES
(1, 'Bohol Water Bike Adventure', ' I. Water Bike Adventure Fun Ride - 1 hour downstream ride with guide and life vest within vicinity of the port. 8:00 am-5:30 pm operational time scale.\r\n<Br><Br>\r\nII. Water Bike Exercise Ride - Offered to all nearby residents. 1 hour exercise ride with guide and life vest within vicinity of the port. 5:30 am-7:30 am operational time scale.\r\n<Br><Br>\r\nIII. Water Bike Adventure Tour - Port to Ugpong Foot Bridge route/ Port to Busai Falls respectively. 2 hours maximum tour with guide and life vest and minimum of 5 persons per tour. 8:00 am-5:00 pm operational time scale.\r\n<Br><Br>\r\nIV. Water Bike Firefly Watching Ride- Port to Canlasid, Loboc route. 3 hours maximum ride and minimum of 2 persons per tour. 7:00 pm-10:00 pm operational time.\r\n<Br><Br>\r\nV. Water Bike Night Adventure Ride- 1 hour ride with guide and life vest within vicinity of the port. 6:00 pm-9:30 pm operational time scale.', ''),
(2, 'Jardin Necitas', ' At Jardin Necitas, there are LED roses and tulips that light up during nightfall, the stem is made out of a steel bar that the flowers stand on. The entrance is adorned with animals such as flamingos and swans, a perfect background for selfies. This place is perfect for anyone whoâ€™s into taking pictures and having it as a setup for prenups and events. Located on a hilltop in Barangay Bagumbayan, Jardin Necitas Pilar Glowing Garden has a colorful and romantic scenery.', ''),
(3, 'Sagbayan Peak', ' A Tourism Site overlooking a scenic valley with an observation platform and children\'s playground. A destination with whimsical animal sculptures, a small waterpark & swings, plus a cafe.', ''),
(4, 'Bet N Choy Farms', ' Bet \'n Choy Farms is an attraction / resort offering a wholesome destination and perfect place for family getaway and picnic. This resort has huge pools and water slides for adult and kids. Itâ€™s a perfect getaway for family to enjoy water, pool and sun. The farm is located in Catigbian, Bohol, about 900 meters from the Catigbian PNP Station and is about an hour trip from Tagbilaran City.', 'ARCHIVE'),
(5, 'Cabagnow Cave Pool', ' Anda in Bohol is famous for its long white sand beach but for the traveler, there are other options, like the beautiful and cool cave pools. These are refreshing alternatives to sun worshiping. Because of the soft nature of the rock, over time, the action of water and other geologic activities has led to the formations of caves across, not just in the municipality but in many parts of Bohol.\r\n\r\nCabagnow Cave Pool in Anda Bohol is famous for its long white sand beach but for the traveler, there are other options, like the beautiful and cool cave pools. These are refreshing alternatives to sun worshiping. Because of the soft nature of the rock, over time, the action of water and other geologic activities has led to the formations of caves across, not just in the municipality but in many parts of Bohol.', ''),
(6, 'Sea of Clouds', 'Sea of Clouds in Anda Bohol is famous for its long white sand beach but for the traveler, there are other options, like the beautiful and cool cave pools. These are refreshing alternatives to sun worshiping. Because of the soft nature of the rock, over time, the action of water and other geologic activities has led to the formations of caves across, not just in the municipality but in many parts of Bohol.', ''),
(7, 'Candijay Falls', ' Caumantad Falls a 30 minute travel from the Poblacion of Candijay and youâ€™re going to see this amazing and stunning water fall. You will be in awe in Mother Natureâ€™s Beauty. A 60 feet high and is said to be the tallest waterfall in Bohol. Itâ€™s clean, clear and cold water will surely entice you to enjoy swimming.\r\n\r\nThis site is suitable for picnics and other fun activities like river trekking and swimming with your loved ones. Have a free back massage with the splash of heavy flowing water. The experience is priceless if you visit and swim to this highest falls. Aside from the waterfalls; Candijay has still a lot more to offer.', '');

-- --------------------------------------------------------

--
-- Table structure for table `tour_destination_image`
--

CREATE TABLE `tour_destination_image` (
  `id` int(11) NOT NULL,
  `tour_destination_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_destination_image`
--

INSERT INTO `tour_destination_image` (`id`, `tour_destination_id`, `image`) VALUES
(1, 1, '3012201907050612.png'),
(2, 1, '3012201907050613.png'),
(3, 2, '3012201907114015.jpg'),
(4, 2, '3012201907111416.png'),
(5, 3, '3012201907134024.jpg'),
(6, 3, '3012201907134025.JPG'),
(7, 4, '3012201907141117.jpg'),
(8, 4, '3012201907293618.png'),
(9, 5, '3012201907143523.jpg'),
(10, 5, '3012201907143522.jpg'),
(11, 6, '3012201907150318.jpg'),
(12, 6, '3012201907150319.jpg'),
(13, 7, '3012201907154221.JPG'),
(14, 7, '3012201907154220.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour_packages`
--

CREATE TABLE `tour_packages` (
  `id` int(11) NOT NULL,
  `package_name` varchar(120) NOT NULL,
  `price` varchar(50) NOT NULL,
  `action` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_packages`
--

INSERT INTO `tour_packages` (`id`, `package_name`, `price`, `action`) VALUES
(1, 'Panglao Island Tours', '', 'ACTIVE'),
(2, 'Bohol Countryside Tour', '', 'ACTIVE'),
(3, 'Island Hopping Tour', '', 'ACTIVE'),
(4, 'CHAP Tour', '', 'ACTIVE'),
(5, 'E.A.T Danao', '', 'ACTIVE'),
(6, 'Firefly Watching', '', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `posted` timestamp NOT NULL DEFAULT current_timestamp(),
  `header` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `posted`, `header`, `description`, `image`, `action`) VALUES
(16, '2019-12-30 05:53:39', 'New Payment Method', ' We now accept payment through MLHUILLIER, just go to your nearest MLHUILLIER outlet and say payment for \"FELY\'S TOURS AND TRAVEL\".', '30122019065339ML.png', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `last_active` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(30) NOT NULL,
  `token` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `last_active`, `status`, `token`) VALUES
(2, 'admin', 'admin2020', 'Administrators', '2019-12-30 01:44:52', '', '0923j21313fasf12090asdi09m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_address`
--
ALTER TABLE `email_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_number`
--
ALTER TABLE `mobile_number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_services`
--
ALTER TABLE `other_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_destinations`
--
ALTER TABLE `package_destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_package_id` (`tour_package_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telephone_number`
--
ALTER TABLE `telephone_number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_destinations`
--
ALTER TABLE `tour_destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_destination_image`
--
ALTER TABLE `tour_destination_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_destination_id` (`tour_destination_id`);

--
-- Indexes for table `tour_packages`
--
ALTER TABLE `tour_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `email_address`
--
ALTER TABLE `email_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mobile_number`
--
ALTER TABLE `mobile_number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `other_services`
--
ALTER TABLE `other_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package_destinations`
--
ALTER TABLE `package_destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `telephone_number`
--
ALTER TABLE `telephone_number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tour_destinations`
--
ALTER TABLE `tour_destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tour_destination_image`
--
ALTER TABLE `tour_destination_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tour_packages`
--
ALTER TABLE `tour_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `package_destinations`
--
ALTER TABLE `package_destinations`
  ADD CONSTRAINT `package_destinations_ibfk_1` FOREIGN KEY (`tour_package_id`) REFERENCES `tour_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tour_destination_image`
--
ALTER TABLE `tour_destination_image`
  ADD CONSTRAINT `tour_destination_image_ibfk_1` FOREIGN KEY (`tour_destination_id`) REFERENCES `tour_destinations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
