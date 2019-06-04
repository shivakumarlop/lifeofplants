-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 07:30 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ictatjcu_plants`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contactno` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `email`, `password`, `contactno`) VALUES
(1, 'test', 'test@gmail.com', 'test@123', '0424458029');

-- --------------------------------------------------------

--
-- Table structure for table `age`
--

CREATE TABLE IF NOT EXISTS `age` (
  `id` int(11) NOT NULL,
  `lifespan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `age`
--

INSERT INTO `age` (`id`, `lifespan`) VALUES
(1, 'adult'),
(2, 'seedling');

-- --------------------------------------------------------

--
-- Table structure for table `care`
--

CREATE TABLE IF NOT EXISTS `care` (
  `id` int(255) NOT NULL,
  `generaid` varchar(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ageid` varchar(255) NOT NULL,
  `speciesid` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `care`
--

INSERT INTO `care` (`id`, `generaid`, `season`, `image`, `description`, `ageid`, `speciesid`) VALUES
(1, '1', 'Fall', 'fall.gif', 'In the fall, usually in August or September, the plants will begin growing. The first sign of growth is noticed when the fissure between the leaves begins to separate. In the days to follow, a bud will force its way up through the fissure and shortly thereafter a white or yellow flower will unfold. The flowers of many of the Lithops species have a spicy-sweet scent. If a plant does not flower the first year, perhaps it is not quite old enough. Lithops usually must be three to five years old before they begin flowering: they have been grown as seedlings for two years or more in the nursery. As the fissure separates further, a new pair of leaves can be seen developing inside. As the plant becomes older, it increases in size by division. This will begin by one plant producing two pairs of new leaves. The plant will then have two "bodies" attached to one root system. Some plants in Lithops collections have as many as ten or more bodies per plant, but it takes many years to develop a plant of this size. \r\n\r\nIn the wild, Lithops begin to flower and grow just after the seasonal rains have begun **. In cultivation, watering should generally begins from early to mid August for most species. Often a good drenching of the soil will encourage the plants to begin their growth cycles. It is safe to water deeply during the fall, and in fact is better than a shallow watering because the plants have taproots. It is important to let the soil dry out quite a bit between waterings: it should not still be wet when you water again. The soil mix should be a type that drains quickly and dries out relatively fast. A soggy soil remaining around the plants for days must be avoided to prevent rot. Regular waterings should be steadily decreased after the flowering period. Discontinue watering altogether by about late September for most species to allow the soil to dry out completely in preparation for the cold winter months. ', '1', '1'),
(2, '1', 'Winter', 'winter.gif', 'During the winter months, the plants will still be growing; the new bodies will be increasing in size as the old outer leaves begin to shrivel. No water at all should be given during the winter … the soil should remain bone dry no matter how shrivelled the plants become. The new body actually draws out the water stored in the old leaves to continue growth, so do not remove the shriveled leaves. Lithops should not be exposed to temperature lower than 40°F (5°C). If the plant are too near a window during freezing weather, they will be damaged by frost even though the room seems warm, so move them back a little during really cold winter weather. ', '1', ''),
(3, '1', 'Spring', 'Spring.gif', 'The new body continues to extract the water and nutrient stored in the old leaves until the old leaves are reduced to nothing more than thin papery shells. These shells can then be easily removed from around the plant. It is spring by the time the plants reach this stage, and it is safe to water again to let the plants increase their growth. Begin by watering lightly, increasing the amount of water gradually, working up to several good drenchings during mid spring. Be sure to let the soil dry between waterings. Reduce watering as the heat and long days of summer approach, allowing the plants to prepare for their dormant period. \r\n\r\nThis brings the discussion of the growth cycle of Lithops full circle. It should be noted that this serves only as general guide to the way that Lithops grow. Each species has its own timetable for completing each stage of its growth, and it is nearly impossible to alter. Some species bloom as early as July, others as late as November. Although the method of cultivation described above is suitable for all species, you may wish to vary the times of watering a little as you become experienced in recognizing the different habits of each. \r\n\r\nAn ideal setting for Lithops is a group planting in a dish garden, intermixed with rounded stones of varous sizes and colors. The plants then display their nature of mimicry to the fullest as they become almost indistinguishable from the pebbles at a glance. Pots that are about 3 – 5 inches deep are recommended to allow the roots adequate room to grow. Make sure that drain holes are provided for the pot. Use a quick draining soil mix (a packaged soil mix for cactus and succulents should have sand added at the rate of about 2 parts soil mix to one part sand by volume). Space the plants at random, poking a hole into the soil to accommodate the taproot and lower portion of the body. Position the plants in the soil so that about three-quarters of the height of the plant remains above the soil level to permit the plant to „breathe“. Collapse the hole around the taproot by carefully poking a pencil into the soil near the plant. Set a few pebbles among the plants and finally sprinkle a thin layer of coarse sand (or bird gravel) over the exposed soil. Some of the plants will actually seem to have disappeared from sight among pebbles. (Note – planting Lithops in terrariums is not recommended due to extreme humidity). \r\n\r\nSpider mites are troublesome pests that sometimes attack Lithops. Their small size often lets them go unnoticed, but the damage that they cause can be seen as small spots of white scar tissue on the surface of the plant. Any insecticide used for the control of mites that is safe for most houseplants can be used at the recommended rate per label directions. \r\n\r\nConcern has arisen in recent years about the hazard that toxic houseplants represent to small children. Lithops are non-toxic. In fact, literature makes reference to children of several African races sometimes eating these plants as a means to quench thirst ***. It should be stressed however that any non-poisonous plant becomes toxic for a certain time after insecticides have been applied. ', '2', ''),
(4, '1', 'Summer', 'Summer.gif', ' During the summer months, Lithops become dormant, resting as they do in the wild, although as a houseplant the conditions are not so severe. The plants require little or no water when they are dormant. Regular watering during this period would almost surely cause them to suddenly rot and turn into mush. But if a prominent shrivelling occurs during the summer, it is safe to give just enough water to restore the firm appearance of the plant. Water lightly so that about only the top one-half inch or so of the soil is moistened. Never water deeply when the plants are dormant. \r\n', '2', ''),
(5, '2', 'Fall', '2figfall.jpg', 'During The Fall Pleiospilos nelii is a very adaptable plant, it will grow whenever it has water and good sunlight, but it will become dormant in very hot weather to conserve water. It need full sun to light shade with a very open compost that drains quickly. The container should be at least 10 cm deep to accommodate the long tap root. Very little water is needed during the growing season, and we do not fertilize the plants. In late summer to early fall before nighttime temperatures fall, watering of the plants is stepped up to once a week. When the nighttime temperatures drop to 9°C, watering is restricted throughout the winter months. In the winter, it grows new leaves from the center of the split, and the new leaves then consume the old leaves. If the plant is over watered, the old leaves remain and the plant usually rots and dies. Not to water it when it is splitting, just leave it alone. Even with no watering the leaves don''t shrink and prune up like some succulents do when they are not watered they stays plump even after several months with no water. For an idea of how succulent these plants are, a mature specimen can easily go a whole year without any water in a typical European or North American climate. If the plants are grown correctly, ideally there should only ever be 2 pairs of leaves. The lower ones are the previous years, and the top ones, the current years. One sign of good care is a firm, round, symmetrical plant with no old leaves still attached at the end of summer.', '1', ''),
(6, '2', 'Winter', '2figwinter.jpg', 'In The Winter The Pleiospilos nelii is The kwaggavygie does best in a greenhouse or on a sunny windowsill. In arid regions, especially summer rainfall areas, it can also be planted outside in a rockery. It should be planted in well-drained soil, and keep in mind that this plant has a relatively long taproot. Pleiospilos nelii should get little water in winter and in summer. Unlike other Pleiospilos species, P. nelii will not flower if it is kept dry in winter. When watering, rather drench the soil and allow the soil to dry out for 2-3 weeks before watering again. The new pair of leaves starts growing in winter. The plant uses the moisture from the old leaves to create the new ones. If the old leaves are still present in summer, this could indicate that the plant might be getting too much water.', '1', ''),
(7, '2', 'Summer', '2figsummer.jpg', 'In Summer Pleiospilos nelii can easily be grown from seeds. Sow seeds in the summer months. To improve the success of germination, place the seeds in a small container with lukewarm water and leave for 24 hours. This will soften the hard outer layer of the seed. Sow the seeds in a sandy medium. Cover the seeds with a 1 mm thick layer of fine sand but make sure that they are not covered too thickly. The layer of sand prevents the tiny seeds from washing away, and it is best to water with a very fine spray. Keep them damp until they start to germinate in about seven days. Once the seedlings start growing, slowly reduce the amount of water given. The seedlings grow very slowly and should be replanted once they have reached a height of about 10 mm.', '2', ''),
(8, '2', 'Spring', '2figspring.jpg', 'In Spring The Pleiospilos is The 60 mm-diameter, salmon or pinkish-yellow flowers are borne from July to August. Once the flowers start to wither, their colour changes to orange. The flowers are solitary or up to four growing between the leaves. The fragrant flowers have a short pedicel and open in the mid-afternoon. The nine- to fifteen-locular, mostly eleven-locular, capsules open when wet and release the tiny seeds.', '2', ''),
(9, '3', 'Winter', '3figwinter.jpg', 'In The Winter This plants are relatively easy to cultivate in a an open, gritty and well drained soil, but have the tendency to up and die if the conditions are not right and, sometimes it seems, even if they are! They need full bright sunlight throughout the year. They will grow strongly at any time when the weather is warm and sunny and water is available and are considered opportunistic growers.', '1', ''),
(10, '3', 'Summer', '3figsummer.jpg', 'During Summer They will become dormant in very hot weather, particularly when nights stay very warm in the hottest couple of months of summer, and should hardly be watered at this time. Probably best to shade them during the hottest weather, they will be dormant anyway.', '1', ''),
(11, '3', 'Spring', '3figspring.jpg', 'In The Spring They will grow strongly in autumn and also may grow in spring. They probably won''t show much growth in winter but might if they are in a very sunny position perhaps indoors. Water during the growing season about once every one-two weeks (depending on the humidity of the air) like a cactus and then leave it to drain well and to dry out completely before watering again. If in doubt, don''t water, you are very unlikely to kill it from underwatering.', '2', ''),
(12, '3', 'Fall', '3figfall.jpg', 'During Fall do not over-water as they are very greedy drinkers and split within a day or so if given too much water Although the split of course disfigures the plant, this is not a major disaster as the following season, when the old body has shrivelled, the new one appears clean and unblemished. Be cautious about watering in winter because you may produce etiolated growth from lack of sun. At growth resumption when the new buds appear (after the old basal pair of leaves is totally shrivelled) a little water is given but not too much. Frost Tolerance -4 deg C for short periods.', '2', ''),
(13, '4', 'Winter', '4figwinter.jpg', 'Light. Haworthia species like bright light, but not direct sunlight. Soil. Use a cactus mix or very fast-draining potting soil.Water. Water evenly and generously in the summer, letting the soil media dry out between waterings.Fertilizer.Propagating Haworthia.', '1', ''),
(14, '4', 'Fall', '4figfall.jpg', 'Light. Haworthia species like bright light, but not direct sunlight. Soil. Use a cactus mix or very fast-draining potting soil.Water. Water evenly and generously in the summer, letting the soil media dry out between waterings.Fertilizer.Propagating Haworthia.', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `genera`
--

CREATE TABLE IF NOT EXISTS `genera` (
  `id` int(11) NOT NULL,
  `generaname` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genera`
--

INSERT INTO `genera` (`id`, `generaname`) VALUES
(1, 'Lithops'),
(2, 'Pleiospilos'),
(3, 'Lapidaria'),
(4, 'Haworthia');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL,
  `generaid` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `season` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `generaid`, `image`, `season`) VALUES
(1, '1', '1392_1.jpg', 'Winter'),
(2, '1', 'winter2.jpg', 'Winter'),
(3, '1', 'winter3.jpg', 'Winter'),
(4, '1', 'winter4.jpg', 'Winter'),
(5, '1', 'winter5.jpg', 'Winter'),
(6, '1', 'winter6.jpg', 'Winter'),
(7, '1', 'winter7.jpg', 'winter'),
(8, '1', 'fall1.jpg', 'Fall'),
(9, '1', 'fall2.jpg', 'Fall'),
(10, '1', 'fall3.jpg', 'Fall'),
(11, '1', 'fall4.jpg', 'Fall'),
(12, '1', 'fall5.jpg', 'Fall'),
(13, '1', 'spring1.jpg', 'Spring'),
(14, '1', 'spring2.jpg', 'Spring'),
(15, '1', 'spring3.jpg', 'Spring'),
(16, '1', 'spring4.jpg', 'Spring'),
(17, '1', 'spring5.jpg', 'Spring'),
(18, '1', 'spring6.jpg', 'Spring'),
(19, '1', 'summer1.jpg', 'Summer'),
(20, '1', 'summer2.jpg', 'Summer'),
(21, '1', 'summer3.jpg', 'Summer'),
(22, '1', 'summer4.jpg', 'Summer'),
(23, '1', 'summer5.jpg', 'Summer'),
(24, '1', 'summer6.jpg', 'Summer'),
(25, '2', '2winter1.jpg', 'Winter'),
(26, '2', '2winter2.jpg', 'Winter'),
(27, '2', '2winter3.jpg', 'Winter'),
(28, '2', '2summer1.jpg', 'Summer'),
(29, '2', '2summer2.jpg', 'Summer'),
(30, '2', '2summer3.jpg', 'Summer'),
(31, '2', '2fall1.jpg', 'Fall'),
(32, '2', '2fall2.jpg', 'Fall'),
(33, '2', '2fall3.jpg', 'Fall'),
(34, '2', '2spring1.jpg', 'Spring'),
(35, '2', '2spring1.jpg', 'Spring'),
(36, '2', '2spring2.jpg', 'Spring'),
(37, '2', '2spring3.jpg', 'Spring'),
(38, '3', '3winter1.jpg', 'Winter'),
(39, '3', '3winter2.jpg', 'Winter'),
(40, '3', '3winter3.jpeg', 'Winter'),
(41, '3', '3summer1.jpg', 'Summer'),
(42, '3', '3summer2.jpg', 'Summer'),
(43, '3', '3summer3.jpg', 'Summer'),
(44, '3', '3fall1.jpg', 'Fall'),
(45, '3', '3fall2.jpg', 'Fall'),
(46, '3', '3fall3.jpg', 'Fall'),
(47, '3', '3spring1.jpg', 'Spring'),
(48, '3', '3spring2.jpg', 'Spring'),
(49, '3', '3spring3.jpg', 'Spring'),
(50, '4', '4winter1.jpg', 'Winter'),
(51, '4', '4winter2.jpg', 'Winter'),
(52, '4', '4winter3.jpg', 'Winter'),
(53, '4', '4summer1.jpg', 'Summer'),
(54, '4', '4summer2.jpg', 'Summer'),
(55, '4', '4summer3.jpg', 'Summer'),
(56, '4', '4fall1.jpg', 'Fall'),
(57, '4', '4fall2.png', 'Fall'),
(58, '4', '4fall3.jpg', 'Fall'),
(59, '4', '4spring1.jpg', 'Spring'),
(60, '4', '4spring2.jpg', 'Spring'),
(61, '4', '4spring3.jpg', 'Spring'),
(62, '1', '4237_9.jpg', 'Winter');

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE IF NOT EXISTS `plants` (
  `id` int(11) NOT NULL,
  `generaid` varchar(255) NOT NULL,
  `plantname` varchar(255) NOT NULL,
  `ageid` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `generaid`, `plantname`, `ageid`) VALUES
(1, '1', 'Aurea', '1'),
(2, '1', 'Witblom', '2'),
(3, '1', 'Rose of Texas', '1'),
(4, '2', 'Royal Flush', '2'),
(5, '2', 'nelii', '1'),
(6, '2', 'Split Rock', '2'),
(7, '3', 'margaretae', '1'),
(8, '3', 'Karoo Rose', '2'),
(9, '3', 'Lapidaria ', '1'),
(10, '4', 'demo plants', '2'),
(11, '4', 'demo 2', '1'),
(12, '4', 'demo 3', '2'),
(13, '4', 'demo 2 ', '2'),
(14, '1', 'General', '1'),
(16, '2', 'test', '1'),
(17, '2', 'test', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `age`
--
ALTER TABLE `age`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `care`
--
ALTER TABLE `care`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genera`
--
ALTER TABLE `genera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `age`
--
ALTER TABLE `age`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `care`
--
ALTER TABLE `care`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `genera`
--
ALTER TABLE `genera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
