-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 11:24 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

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
(1, '16 J.A. Clarin Street Tagbilaran City near Florencio\'s Caltex Station', 'ACTIVE');

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
(1, 'felystoursandtravel@yahoo.com', 'ACTIVE'),
(2, 'ftt_bookings@yahoo.com', 'ACTIVE');

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
(1, '0915-829-5095', 'ACTIVE'),
(2, '0916-359-6126', 'ACTIVE'),
(3, '0922-300-1458', 'ACTIVE'),
(4, '0939-904-5521', 'ACTIVE');

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
(1, 'Fiesta Bolanon Cuisine', 'A delicious Eat All You Can Restaurant for affordable price.', 'fiesta bolanon.png', 'ACTIVE'),
(2, 'GTL Car Rental', 'A delicious Eat All You Can Restaurant for affordable price.11', '', 'ACTIVE'),
(3, 'GTL Driving School', 'A delicious Eat All You Can Restaurant for affordable price.22', '', 'ACTIVE'),
(4, 'Fely\'s Pension House', 'A delicious Eat All You Can Restaurant for affordable price.33', '', 'ACTIVE'),
(5, 'Jojo\'s Tracking and Septic Tank Services', 'A delicious Eat All You Can Restaurant for affordable price.\r\n44', '', 'ACTIVE'),
(10, 'COMPUTER TECHNICIANS@@@', '   COMPUTER@', '2712201911092412065835_396575820553098_1161884164385031682_n - Copy.jpg', 'ACTIVE');

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
(1, 3, 'Bohol Dream Land'),
(2, 3, 'Dauis Church'),
(3, 3, 'Nova Shell Museum'),
(4, 3, 'Hinagdanan Cave'),
(5, 4, 'Baclayon Church & Museum'),
(6, 4, 'Tarsier Conservation Park'),
(7, 4, 'Loboc River & Floating Restaurant'),
(8, 4, 'Bilar Man Made Forest'),
(9, 4, 'Simply Butterflies'),
(10, 4, 'Chocolate Hills'),
(12, 5, 'Alona Panglao'),
(13, 5, 'Isola De Francisco'),
(14, 6, 'Chocolate Hills Adventure Park (CHAP) is Bohol\'s latest eco-tourism adventure park. CHAP offers thrilling adventure activities for adults and children. This includes the Rush Bike Zip , Wave Runner Surf Zipline, Eco-nature hiking, Mountain Biking, Horse-back Riding Trails, and many more.'),
(15, 7, 'E.A.T. Danao is a tourism concept set up to benefit the municipality of Danao and its people. The specific activities were grouped into three: Extreme, Economic, and Educational. So \"E\" stands for any of the three; \"A\" for Adventure; then \"T\" for Tour.'),
(16, 8, 'Abatan River'),
(17, 8, 'Loay River'),
(18, 4, 'Blood Compact Shrine');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `location` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Airlines', 'AirAsia', ' a low-cost airline based at Kuala Lumpur International Airport, Malaysia. The airline has partnered with other airlines and investors to create ventures in the Philippines, India and Japan.', '26122019135953AirAsia.png', 'ARCHIVE'),
(2, 'Airlines', 'Cebu Pacific', ' a flag carrier of the Philippines. The airline was founded in 1941 and is the first and oldest commercial airline in Asia. It serves 31 destinations in the Philippines and 41 overseas destinations.', '26122019140005cebupacific.png', 'ARCHIVE'),
(3, 'Airlines', 'Philippine Airliness', '         a Philippine low-cost airline based on the grounds of Ninoy Aquino International Airport (NAIA Terminal 3), Pasay City, Metro Manila, in the Philippines. It offers scheduled flights to both domestic and international destinations.', '2612201914580626122019140011Philippine-Airlines-Logo.jpg', 'ARCHIVE'),
(4, 'Shippings', 'Ocean Fast Ferries Inc. Travel', 'which is formerly known as Ocean Jet, is a Filipino-owned shipping company that you can trust when you want to visit Cebu if you\'re from Visayas and Mindanao. Ocean Fast Ferries assures its passengers a safe and comfortable ride.', 'oceanjetlogo.png', 'ARCHIVE'),
(5, 'Shippings', 'Supercar Fast Ferry Corporation', 'commonly known as SuperCat, was a shipping company that operated a fleet of High Speed Catamarans in the Philippines. It is now part of 2GO Travel. Supercat was the sister company of SuperFerry and Cebu Ferries. It operated 7 vessels in 7 ports around the Philippines.', 'scat.png', 'ARCHIVE'),
(6, 'Shippings', 'Cokaliong Shipping Lines, Inc. (CSLI)', 'a shipping line based in Cebu City, Philippines. A shipping line that operates both passenger and cargo ferries on eight routes between islands in the Visayas and Mindanao regions.', 'cokaliong.jpg', 'ARCHIVE'),
(7, 'Shippings', 'Trans Asia Shipping Lines, Incorporated (TA SLI)', 'a shipping company based in Cebu City, Philippines. It offers services such as passenger and cargo transportation.', 'trans.png', 'ARCHIVE'),
(8, 'Shippings', '2GO Travel', ' a passenger ferry company which is based in Manila, Philippines and part of 2GO Group. It is the largest ferry company in the Philippines with its main hub located in Eva Macapagal Super Terminal in Pier 15 in the Manila South Harbor.', '261220191457462GO-Travel-Transparent-Reversal-1.png', 'ARCHIVE');

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
(1, '(038) 411-4476', 'ACTIVE'),
(2, '(038) 416-1198', 'ACTIVE'),
(3, '(038) 510-1652', 'ACTIVE');

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
(1, 'Bohol Water Bike Adventure', 'I. Water Bike Adventure Fun Ride - 1 hour downstream ride with guide and life vest within vicinity of the port. 8:00 am-5:30 pm operational time scale.\r\n\r\nII. Water Bike Exercise Ride - Offered to all nearby residents. 1 hour exercise ride with guide and life vest within vicinity of the port. 5:30 am-7:30 am operational time scale.\r\n\r\nIII. Water Bike Adventure Tour - Port to Ugpong Foot Bridge route/ Port to Busai Falls respectively. 2 hours maximum tour with guide and life vest and minimum of 5 persons per tour. 8:00 am-5:00 pm operational time scale.\r\n\r\nIV. Water Bike Firefly Watching Ride- Port to Canlasid, Loboc route. 3 hours maximum ride and minimum of 2 persons per tour. 7:00 pm-10:00 pm operational time.\r\n\r\nV. Water Bike Night Adventure Ride- 1 hour ride with guide and life vest within vicinity of the port. 6:00 pm-9:30 pm operational time scale.', 'ACTIVE'),
(2, 'Jardin Necitas', 'At Jardin Necitas, there are LED roses and tulips that light up during nightfall, the stem is made out of a steel bar that the flowers stand on. The entrance is adorned with animals such as flamingos and swans, a perfect background for selfies. This place is perfect for anyone who\'s into taking pictures and having it as a setup for prenups and events. Located on a hilltop in Barangay Bagumbayan, Jardin Necitas Pilar Glowing Garden has a colorful and romantic scenery.', ''),
(3, 'Sagbayan Peak', 'A Tourism Site overlooking a scenic valley with an observation platform and children\'s playground. A destination with whimsical animal sculptures, a small waterpark & swings, plus a cafe.', 'ACTIVE'),
(4, 'Bet N Choy Farms', 'Bet\'n Choy Farms is an attraction / resort offering a wholesome destination and perfect place for family getaway and picnic. This resort has huge pools and water slides for adult and kids. It\'s a perfect getaway for family to enjoy water, pool and sun. The farm is located in Catigbian, Bohol, about 900 meters from the Catigbian PNP Station and is about an hour trip from Tagbilaran City.', 'ACTIVE'),
(5, 'Cabagnow Cave Pool', 'Anda in Bohol is famous for its long white sand beach but for the traveler, there are other options, like the beautiful and cool cave pools. These are refreshing alternatives to sun worshiping. Because of the soft nature of the rock, over time, the action of water and other geologic activities has led to the formations of caves across, not just in the municipality but in many parts of Bohol.\r\n\r\nCabagnow Cave Pool in Anda Bohol is famous for its long white sand beach but for the traveler, there are other options, like the beautiful and cool cave pools. These are refreshing alternatives to sun worshiping. Because of the soft nature of the rock, over time, the action of water and other geologic activities has led to the formations of caves across, not just in the municipality but in many parts of Bohol.', ''),
(6, 'Sea of Clouds', 'Sea of Clouds in Anda Bohol is famous for its long white sand beach but for the traveler, there are other options, like the beautiful and cool cave pools. These are refreshing alternatives to sun worshiping. Because of the soft nature of the rock, over time, the action of water and other geologic activities has led to the formations of caves across, not just in the municipality but in many parts of Bohol.', ''),
(7, 'Candijay Falls', 'Caumantad Falls a 30 minute travel from the Poblacion of Candijay and you\'re going to see this amazing and stunning water fall. You will be in awe in Mother Nature\'s Beauty. A 60 feet high and is said to be the tallest waterfall in Bohol. It\'s clean, clear and cold water will surely entice you to enjoy swimming.\r\n\r\nThis site is suitable for picnics and other fun activities like river trekking and swimming with your loved ones. Have a free back massage with the splash of heavy flowing water. The experience is priceless if you visit and swim to this highest falls. Aside from the waterfalls; Candijay has still a lot more to offer.', '');

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
(1, 5, 'Cabagnow_1.jpg'),
(2, 5, 'Cabagnow_2.jpg'),
(3, 7, 'Candijay_1.jpg'),
(4, 7, 'Candijay_2.jpg'),
(5, 6, 'Clouds_1.jpg'),
(6, 6, 'Clouds_2.jpg'),
(7, 4, 'Farms_1.jpg'),
(8, 4, 'Farms_2.png'),
(9, 2, 'Necitas_1.jpg'),
(10, 2, 'Necitas_2.jpg'),
(11, 3, 'Sagbayan_2.JPG'),
(12, 3, 'Sagbayan_1.JPG'),
(13, 1, 'waterbike_2.png'),
(14, 1, 'waterbike_1.png');

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
(3, 'Panglao Island Tours', '', 'ARCHIVE'),
(4, 'Bohol Countryside Tour', '', 'ARCHIVE'),
(5, 'Island Hopping Tour', '', 'ARCHIVE'),
(6, 'CHAP Tour', '', 'ARCHIVE'),
(7, 'E.A.T Danao', '', 'ARCHIVE'),
(8, 'Firefly Watching', '', 'ARCHIVE');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `header` varchar(100) NOT NULL,
  `image_location` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_address`
--
ALTER TABLE `email_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mobile_number`
--
ALTER TABLE `mobile_number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `other_services`
--
ALTER TABLE `other_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `package_destinations`
--
ALTER TABLE `package_destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
