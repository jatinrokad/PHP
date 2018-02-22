-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 08:21 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jplist`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ID` int(11) NOT NULL,
  `Title` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `Image` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `Description` varchar(1500) CHARACTER SET utf8 DEFAULT NULL,
  `Likes` int(11) DEFAULT NULL,
  `ViewsNumber` int(11) DEFAULT NULL,
  `Keyword1` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `Keyword2` varchar(150) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ID`, `Title`, `Image`, `Description`, `Likes`, `ViewsNumber`, `Keyword1`, `Keyword2`) VALUES
(1, 'Architecture', '../img/thumbs/arch-2.jpg', 'Architecture is both the process and product of planning, designing and construction. Architectural works, in the material form of buildings, are often perceived as cultural symbols and as works of art. Historical civilizations are often identified with their surviving architectural achievements.', 25, 100, 'Architecture', 'Brown'),
(2, 'Autumn', '../img/thumbs/autumn-1.jpg', 'Autumn or Fall is one of the four temperate seasons. Autumn marks the transition from summer into winter, in September (Northern Hemisphere) or March (Southern Hemisphere)\r\nwhen the arrival of night becomes noticeably earlier. The equinoxes might be expected to be in the middle of their respective seasons, but temperature lag (caused by the thermal latency of the ground and sea) means that seasons appear later than dates calculated from a purely astronomical perspective.', 12, 330, 'Nature', 'Red'),
(3, 'Boats', '../img/thumbs/boats-1.jpg', 'A boat is a watercraft of any size designed to float or plane, to provide passage across water. Usually this water will be inland (lakes) or in protected coastal areas. However, boats such as the whaleboat were designed to be operated from a ship in an offshore environment. In naval terms, a boat is a vessel small enough to be carried aboard another vessel (a ship).', 11, 50, 'Nature', 'Brown'),
(4, 'Architecture', '../img/thumbs/arch-2.jpg', 'Architecture is both the process and product of planning, designing and construction. Architectural works, in the material form of buildings, are often perceived as cultural symbols and as works of art. Historical civilizations are often identified with their surviving architectural achievements.', 25, 100, 'Architecture', 'Brown'),
(5, 'Autumn', '../img/thumbs/autumn-1.jpg', 'Autumn or Fall is one of the four temperate seasons. Autumn marks the transition from summer into winter, in September (Northern Hemisphere) or March (Southern Hemisphere)\r\nwhen the arrival of night becomes noticeably earlier. The equinoxes might be expected to be in the middle of their respective seasons, but temperature lag (caused by the thermal latency of the ground and sea) means that seasons appear later than dates calculated from a purely astronomical perspective.', 12, 330, 'Nature', 'Red'),
(6, 'Boats', '../img/thumbs/boats-1.jpg', 'A boat is a watercraft of any size designed to float or plane, to provide passage across water. Usually this water will be inland (lakes) or in protected coastal areas. However, boats such as the whaleboat were designed to be operated from a ship in an offshore environment. In naval terms, a boat is a vessel small enough to be carried aboard another vessel (a ship).', 11, 50, 'Nature', 'Brown'),
(7, 'Sunset', '../img/thumbs/sunset-1.jpg', 'Sunset or sundown is the daily disappearance of the Sun below the horizon in the west as a result of Earth''s rotation. The time of sunset is defined in astronomy as the moment when the trailing edge of the Sun''s disk disappears below the horizon in the west. The ray path of light from the setting Sun is highly distorted near the horizon because of atmospheric refraction, making the sunset appear to occur when the Sun''s disk is already about one diameter below the horizon. Sunset is distinct from dusk, which is the moment at which darkness falls, which occurs when the Sun is approximately eighteen degrees below the horizon. The period between sunset and dusk is called twilight.', 25, 305, 'Nature', 'Green'),
(8, 'River Source', '../img/thumbs/river-2.jpg', 'The source or headwaters of a river or stream is the furthest place in that river or stream from its estuary or confluence with another river, as measured along the course of the river.', 62, 95, 'Nature', 'Brown'),
(9, 'Rivers RJ', '../img/thumbs/river-1.jpg', 'A river is a\r\nnatural watercourse, usually freshwater, flowing towards an ocean, a lake, a sea, or another river. In a few cases, a river simply flows into the ground or dries up completely before reaching another body of water. Small rivers may also be\r\ncalled by several other names, including stream, creek, brook, rivulet, tributary and rill. There are no official definitions for generic terms, such as river,\r\nas applied to geographic features, although in some countries or communities a stream may be defined by its size. Many names for small rivers are specific to geographic location; one example is ''burn'' in Scotland and northeast England. Sometimes a river is said to be larger than a creek, but this is not always the case, because of vagueness in the language.', 88, 230, 'Nature', 'Blue'),
(10, 'Leaves', '../img/thumbs/leaves.jpg', 'A leaf is an organ of a vascular plant, as defined in botanical terms, and in particular in plant morphology. Foliage is a mass noun that refers to leaves as a feature of plants. Typically a leaf is a thin, flattened organ borne above ground and specialized or photosynthesis, but many types of leaves are adapted in ways almost unrecognisable in those terms: some are not flat (for example many succulent leaves and conifers), some are not above ground (such as bulb scales), and some are without major photosynthetic function (consider for example cataphylls, spines, and\r\ncotyledons).', 42, 35, 'Nature', 'Green'),
(11, 'Flowering Plant', '../img/thumbs/flower-3.jpg', 'The flowering plants (angiosperms), also known as Angiospermae or Magnoliophyta, are the most diverse group of land plants. Angiosperms are seed-producing plants like the gymnosperms and can be distinguished from the gymnosperms by a series of synapomorphies (derived characteristics). These characteristics include flowers, endosperm within the seeds, and the production of fruits that contain the seeds.', 90, 170, 'Nature', 'Red'),
(12, 'Wood', '../img/thumbs/woodstump.jpg', 'Wood is a hard, fibrous tissue found in many trees. It has been used for hundreds of thousands of years for both fuel and as a construction material. It is an organic material, a natural composite of cellulose fibers (which are strong in tension) embedded in a matrix of lignin which resists compression. Wood is produced as secondary xylem in the stems of trees (and other woody plants). In a living tree it performs a support function, enabling woody plants to grow large or to stand up for\r\nthemselves. It also mediates the transfer of water and nutrients to the leaves and other growing tissues. Wood may also refer to other plant materials with comparable properties, and to material engineered from wood, or wood chips or fiber.', 25, 358, 'Nature', 'Green');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
