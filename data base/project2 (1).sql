-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 06:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `package_price` int(200) NOT NULL,
  `package_name` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_name`, `package_price`, `package_name`, `date`) VALUES
(29, 'Anas Sharaf', 6000, 'Mecca-Hajj', '2022-05-31'),
(31, 'Ahmad Sharaf', 5000, 'Imam Hussien karbala', '2022-06-01'),
(33, 'Ahmad Sharaf', 3500, 'France- The Alps', '2022-05-31'),
(35, 'Anas Sharaf', 5000, 'MALDIVES', '2022-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_id` int(100) NOT NULL,
  `Cat_name` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_id`, `Cat_name`) VALUES
(8, 'Regular trips'),
(9, 'Camping'),
(10, 'Religious tours'),
(11, 'Hiking'),
(12, 'Diving'),
(13, 'Sky diving'),
(14, 'Safari ');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `fname`, `lname`, `email`, `phone`, `message`) VALUES
(8, 'mhmmad', 'maaad', 'mhmmad@gmail,com', 76655567, 'wonderful service '),
(9, 'ahmad', 'sharaf', 'ahmad@gmail,com', 76554678, 'test test test '),
(10, 'ahmad', 'sharaf', 'ahmad@gmail,com', 76655567, 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Pacid` int(200) NOT NULL,
  `Packname` varchar(1000) NOT NULL,
  `Category` int(100) NOT NULL,
  `Subcategory` int(200) NOT NULL,
  `Packprice` int(200) NOT NULL,
  `Pic1` varchar(6000) NOT NULL,
  `Detail` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Pacid`, `Packname`, `Category`, `Subcategory`, `Packprice`, `Pic1`, `Detail`) VALUES
(27, 'EGYPT', 8, 10, 599, 'egypt.jpg', 'Egypt is very famous for its ancient civilization and the monuments of the majestic pharaohs, such as the Great Pyramids of Giza, the Great Sphinx, the Egyptian Museum, the GEM (The Grand Egyptian Museum), Sakkara, and Dahshur.'),
(28, 'African Animals-Incredible Moments On Safari', 14, 20, 2000, 'safari2.jpg', 'Going on a safari in Africa is one of the most thrilling adventures in the world. There is nothing more exciting than seeing African animals roaming free on the great plains. We have been on safari in  South Africa, Kenya, Tanzania, Namibia, and Botswana. We are truly lucky people.'),
(29, 'Canada Churchill, Manitoba ', 14, 21, 2500, 'safari1.jfif', 'We always thought that you had to see the polar bears in the winter. We had visions of massive glassed-in buggies crossing the white tundra landscape packed with people in search of the great polar bear. We never thought of walking with polar bears.'),
(30, 'United-States, Oahu ', 11, 24, 3500, 'hiking1.jpg', 'Oahu is home to some of the best hikes in all of Hawaii. The island is home to two vast mountain ranges, the Koolau and Waianae. Running alongside each other they help to create dramatic and memorable landscapes and most of the best hikes on Oahu soar up their ridgelines'),
(31, 'Canada- Moraine Lake', 11, 24, 3500, 'hiking2.jpg', 'We’ve written a lot about our favorite things to do in Canada, best adventures and all about the beautiful places  of our home country but we realized that we have yet to round up all of the amazing hikes that can be done in the Great White North. So, to help you plan the best outdoor trip, we’ve compiled a resource for the best places to hike in Canada.'),
(32, 'United-States, Oahu', 12, 25, 5000, 'diving1.jpg', 'Oahu is home to some of the best hikes in all of Hawaii. The island is home to two vast mountain ranges, the Koolau and Waianae. Running alongside each other they help to create dramatic and memorable landscapes and most of the best hikes on Oahu soar up their ridgelines'),
(33, 'Sipadan Island- BARRACUDA POINT', 12, 26, 5500, 'diving2.jpg', 'One of the most impressive places to vacation thanks to the warm tropical waters, beach resorts and incredible diving opportunities such as Barracuda Point which is a real highlight for anyone who enjoys scuba diving.For those who want to be surrounded by some of the most fascinating ocean life the world has to offer, Barracuda Point just off Sipadan Island is certainly one of the best places to go.'),
(34, 'Skydive Dubai', 13, 27, 7000, 'skydive1.jpg', 'Skydiving in Dubai is an amazing and surreal experience. Soaring up to a whopping altitude of around 13,000 feet, jumping off into the vast sky from a plane, and free-falling at a high speed of 120 miles per hour is nothing but an exquisite and spellbinding feeling that is sure to offer you an experience of a lifetime. You can feel all your senses awake and get captivated as you perform your activity in the deep blue sky.'),
(35, 'Skydive Hawaii ', 13, 28, 6000, 'skydive2.webp', 'Skydive Hawaii has mixed feelings. The tandem master and jump staff are awesome, the views are incredible and you will not regret jumping over the beautiful shores of Hawaii. However, the customer service--or lack thereof--from the front desk staff needs improvement.'),
(36, 'Mecca-Umrah', 10, 29, 4000, 'hajj.jpg', ''),
(37, 'Mecca-Hajj', 10, 29, 6000, 'haj.jpg', ''),
(38, 'Imam Hussien karbala', 10, 29, 5000, 'iraq.jpg', ''),
(39, 'vatican', 10, 30, 8000, 'vatican2.jpg', ''),
(41, 'Mount Cook National Park, New Zealand', 9, 22, 4000, 'camping2.jpg', 'One of the best places for camping is Aoraki/Mount Cook National Park a rugged land of ice and rock, with 19 peaks over 3,000 metres including New Zealand highest mountain.Camp beneath magnificent alpine scenery including Mt Sefton. Enjoy a variety of walks from the valley floor to mountain tops.'),
(43, 'France- The Alps', 9, 23, 3500, 'camping1.jpg', 'The mountains are also the perfect destination for your summer holiday with the family. So while the beaches are overrun with tourists and space beside the water is at a premium, why not go for a summer holiday in the mountains? This means you will be able to recharge those batteries far from the hubbub and enjoy your time with the family in peace. So come and enjoy some real fresh air in the Alps this summer, and take advantage of the various hiking options and activities available in the heart of some truly breathtaking scenery!'),
(44, 'SOUTH AFRICA ', 8, 10, 400, 'SOUTH AFRICA.jpg', 'South Africa, the southernmost country on the African continent, renowned for its varied topography, great natural beauty, and cultural diversity, all of which have made the country a favoured destination for travelers since the legal ending of apartheid'),
(45, 'Morocco', 8, 10, 550, 'Morocco.jpg', 'Morocco is, for the most part, a safe country to visit. Its crime rates are relatively low, but it is advised to remain vigilant at all times and keep your valuables in a safe place. It is a friendly Muslim country, so it is expected of tourists to be respectful of Islamic culture and customs.'),
(46, 'Brazil', 8, 14, 350, 'Brazil.jpg', 'One of the world most captivating places, Brazil is a country of powdery whitesand beaches, verdant rainforests and wild, rhythm-filled metropolises, with its attractions extending to otherworldly landscapes of red-rock canyons, thundering waterfalls and coral-fringed tropical islands.'),
(47, 'Colombia', 8, 14, 400, 'colombia.jpg', 'Colombia is a country with everything you could ask for fantastic weather, beautiful mountains, Caribbean beaches, and arepas for days! It also has an incredibly captivating Afro-Latinx history and heritage that is embraced in the city of Cartagena.'),
(48, 'Peru', 8, 14, 550, 'peru.jpg', 'Peru is a veritable treasure trove of unforgettable places to visit and things to do from vertiginous Andean mountain peaks and breath-taking.'),
(49, 'Venzuela', 8, 14, 600, 'venz.jpg', 'Venezuela is a country in South America on the Caribbean Sea. The country is known for being the home of the Angel Falls (Kerepakupai Vená).'),
(50, 'Ecuador', 8, 14, 650, 'ecuador.jpg', 'Tiny by South American standards, Ecuador is packed with an amazing range of natural and cultural attractions a microcosm of everything that is appealing about this fascinating continent. Tucked between Colombia and Peru, Ecuador outdoes its heavyweight neighbours because of, rather than despite, its size.'),
(51, 'England', 8, 15, 1700, 'england.jpg', 'Plan a wonderful trip with our England travel guide. The most comprehensive tourist guide with advice on things to do, see, places to visit and more.'),
(52, 'Germany', 8, 15, 850, 'Germany.jpg', 'Prepare for a roller-coaster ride of feasts, treats and temptations experiencing Germany  soul-stirring scenery, spirit-lifting culture, big-city beauties.'),
(53, 'France', 8, 15, 1500, 'france.jpg', 'You could spend a lifetimes worth of holidays in France and still feel as if you hadnt done the country justice. It remains one the planets most visited.'),
(54, 'Italy', 8, 15, 1200, 'italy.jpg', 'Visit Italy and find the most beautiful places, the best time to visit and authentic food with Lonely Planet.'),
(55, 'Greece', 8, 15, 800, 'GREECE.jpg', 'If you are looking for travel inspiration, visitgreece.gr has everything you need to know. Travel ideas, Events, guides, what to do, where to go in Greece.\r\n'),
(56, 'Spain', 8, 15, 1000, 'spain.jpg', 'Spain is a foodie paradise featuring diverse and delicious cuisine. There is music and dancing galore, heaps of art '),
(57, 'Sweden', 8, 15, 950, 'sweden.jpg', 'With its rich history and varied landscapes, Sweden is a travelers paradise. If you love the outdoors, its certainly hard to beat. The air and water are crystal clean, and there are thousands of acres of unspoiled forests and majestic lakes to explore, not to mention vast archipelagos along its coasts.'),
(58, 'Romania', 8, 15, 800, 'brasov-romania.jpg', 'Romania has a rich cultural and natural diversity. Its dramatic mountain scenery includes the densely forested Carpathian Mountains, picturesque valleys and miles of fine white sandy beaches on the Black Sea Coast.'),
(59, 'Portugal', 8, 15, 749, 'sunnyportugalestoril_search_v2.jpg', 'The presence of the Atlantic Ocean and the climate, with very sunny summers and mild winters make Portugal a holiday destination renowned for sun and sea.'),
(60, 'Chile', 8, 14, 650, 'CHILE.jpg', 'Preposterously thin and unreasonably long, Chile stretches from the belly of South America to its foot, reaching from the driest desert on earth to vast southern glacial fields.'),
(61, 'CAYMAN ISLANDS', 8, 16, 1950, 'CAYMAN ISLANDS.jpg', 'A trip to the Caymans is all about switching off. The extraordinary beaches on all three islands are perfect for whiling away lazy days.'),
(62, 'Cuba', 8, 16, 2000, 'cuba.jpg', 'Cuban travel is characterized by heat, music, dance and culture. Its not possible to see all the island has to offer on one trip, so here are some of the very best places to visit in Cuba.'),
(63, 'Bahamas', 8, 16, 1700, 'BAHAMAS.jpg', 'Bahamians are friendly, warm and relaxed people. They are known to be very welcoming and are happy to educate visitors about the islands. '),
(64, 'Australia', 8, 18, 1200, 'AUSTRALIA.jpg', 'Australia is a land of savage beauty, big adventure and even bigger horizons. There are good reasons why the country finds itself touted as one of the ultimate.'),
(65, 'NEW ZEALAND', 8, 18, 2300, 'NEW ZEALAND.jpg', 'Widely held to be one of the most breathtaking countries on the planet, New Zealand is a phenomenal travel destination.'),
(66, 'ANTARCTICA', 8, 19, 3500, 'ANTARCTICA.jpg', 'The Antarctic Peninsula is an environment of exquisite isolation, rich wildlife, stimulating history and majestic landscapes.'),
(67, 'GREENLAND', 8, 19, 4000, 'GREENLAND.jpg', 'Greenland is the largest island in the world, and more than 80% of it is covered in ice! Here, you do not travel on a road between towns and villages.'),
(68, 'MALDIVES', 8, 17, 5000, 'maldives.jpg', 'The Maldives are an irresistible destination with white beaches, turquoise blue seawater, blue lagoons and a sea wildlife, which you cannot find elsewhere.\r\n'),
(69, 'RUSSIA', 8, 17, 700, 'RUSSIA.jpg', 'The nature is incredibly beautiful, real and fascinating. Cities such as Moscow and St. Petersburg are worth visiting.'),
(70, 'THAILAND', 8, 17, 2000, 'THAILAND.jpg', 'Thailand is one of the prettiest South-Asian countries, which is why Thailand tourism has increased over time. '),
(71, 'MALAYSIA  ', 8, 17, 3000, 'Malaysia-Malacca-1-718x539.jpg', 'Malaysia is a country which is loved by tourists for their visit in SE Asia. This country has something to offer to everyone. You can try a different type of diving, track wild jungles, enjoy beautiful beaches. '),
(72, 'CAMBODIA', 8, 17, 1500, 'CAMBODIA.jpg', 'Visit Cambodia, and you will find plentiful attractions ranging from unspoilt beaches and colonial townscapes through to dense forests and majestic rivers .'),
(73, 'SINGAPORE', 8, 17, 1950, 'SINGAPORE.jpg', 'a wonderful tropical climate, vibrant nightlife, fantastic shopping and exotic cuisine, Singapore is a popular holiday destination.');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcatid` int(200) NOT NULL,
  `subcatname` varchar(2000) NOT NULL,
  `Catid` int(200) NOT NULL,
  `Pic` mediumtext NOT NULL,
  `Detail` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcatid`, `subcatname`, `Catid`, `Pic`, `Detail`) VALUES
(10, 'Africa', 8, 'Africa.jpg', 'Africa is the most tropical of all continents. Climate and vegetation range from equatorial rainforests, tropical deserts and savanna grassland to Mediterranean. The Sahara Desert, the largest of its kind anywhere in the world.'),
(14, 'South America', 8, 'South America.jpg', 'TEST'),
(15, 'Europe', 8, 'Europe.jpeg', 'test'),
(16, 'Caribbean', 8, 'Caribbean.jpg', 'test'),
(17, 'Asia', 8, 'Asia.jpg', 'test'),
(18, 'Oceania', 8, 'oceania.jpg', 'test'),
(19, 'Polar Regions', 8, 'Polar regions.png', 'test'),
(20, 'Africa', 14, 'Africa.jpg', 'test'),
(21, 'North America', 14, 'Polar bear.jpg', 'test'),
(22, 'Oceania', 9, 'oceania.jpg', 'test'),
(23, 'Europe ', 9, 'camping europ.jpg', 'test'),
(24, 'North America', 11, 'hiking  norht.jpg', 'test'),
(25, 'North America', 12, 'diving north america.jpg', 'test'),
(26, 'Asia', 12, 'diving asia.jpg', 'test'),
(27, 'Asia', 13, 'Fagbemi-Skydive.jpg', 'test'),
(28, 'North America ', 13, 'sky diving south america.jpg', 'test'),
(29, 'Asia', 10, 'makka.jpg', 'test'),
(30, 'Europe', 10, 'vatican.jpg', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(11, 'houssam', 'houssam_shooter@hotmail.com', 'admin', '75073276b37041978bf956f7346980fc'),
(13, 'Anas Sharaf', 'anas@gmail.com', 'user', 'fcea920f7412b5da7be0cf42b8c93759'),
(14, 'Ahmad Sharaf', 'ahmad@gmail.com', 'user', 'fcea920f7412b5da7be0cf42b8c93759'),
(15, 'Imad Bikai', 'Imad@gmail.com', 'user', 'fcea920f7412b5da7be0cf42b8c93759');

-- --------------------------------------------------------

--
-- Table structure for table `user_booking`
--

CREATE TABLE `user_booking` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `package_id` int(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_booking`
--

INSERT INTO `user_booking` (`id`, `user_id`, `package_id`, `date`) VALUES
(3, 13, 31, '2022-06-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Pacid`),
  ADD KEY `FK_subcat_id` (`Subcategory`),
  ADD KEY `FK_category_id` (`Category`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcatid`),
  ADD KEY `FK_cat_id` (`Catid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_booking`
--
ALTER TABLE `user_booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_user_id` (`user_id`),
  ADD KEY `FK_package_id` (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Pacid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcatid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_booking`
--
ALTER TABLE `user_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `FK_category_id` FOREIGN KEY (`Category`) REFERENCES `category` (`Cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_subcat_id` FOREIGN KEY (`Subcategory`) REFERENCES `subcategory` (`subcatid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `FK_cat_id` FOREIGN KEY (`Catid`) REFERENCES `category` (`Cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_booking`
--
ALTER TABLE `user_booking`
  ADD CONSTRAINT `FK_package_id` FOREIGN KEY (`package_id`) REFERENCES `package` (`Pacid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
