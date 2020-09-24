-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 03:31 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chromatus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `user_pass`, `mobile`, `email`, `image`) VALUES
(1, 'Aniket', 'Bable', 'abc#123', '1234567890', 'testadmin@gmail.com', 'profile-icon1.png');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blogID` int(11) NOT NULL,
  `title` varchar(350) NOT NULL,
  `category` varchar(30) NOT NULL,
  `metaDescription` varchar(1000) NOT NULL,
  `description` text NOT NULL,
  `dateAdded` date NOT NULL DEFAULT current_timestamp(),
  `dateModified` date DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `permalink` varchar(256) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogID`, `title`, `category`, `metaDescription`, `description`, `dateAdded`, `dateModified`, `image`, `permalink`, `status`) VALUES
(1, 'Covid19', '', 'Test', '<p>test</p>\r\n', '2020-09-20', '2020-09-20', 'Screenshot from 2020-08-20 18-52-26.png', '', 0),
(2, 'Covid19', 'Chemical', 'TestT                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ', '<p>Test</p>\r\n', '2020-09-21', '2020-09-21', '1999.png', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `blogCategoryID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(256) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`blogCategoryID`, `name`, `image`, `status`) VALUES
(1, 'Transport', 'test.jpg', 1),
(2, 'Chemicalllyuu', 'test.jpg', 1),
(3, 'Healthcare', 'test.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chromatus_info`
--

CREATE TABLE `chromatus_info` (
  `infoID` int(11) NOT NULL,
  `linkedinLink` varchar(256) NOT NULL,
  `facebookLink` varchar(256) NOT NULL,
  `twitterLink` varchar(256) NOT NULL,
  `number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contactID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `company` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faqID` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `imageID` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `image_text` varchar(256) NOT NULL,
  `display` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`imageID`, `image`, `image_text`, `display`, `status`) VALUES
(8, 'placeholder1.jpg', 'Car 1', 1, 1),
(9, 'placeholder2.jpg', 'Car 2', 1, 1),
(10, 'placeholder3.jpg', 'Car 3', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsID` int(11) NOT NULL,
  `title` varchar(350) NOT NULL,
  `category` varchar(30) NOT NULL,
  `metaDescription` varchar(1000) NOT NULL,
  `description` text NOT NULL,
  `permalink` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsID`, `title`, `category`, `metaDescription`, `description`, `permalink`, `date`, `status`) VALUES
(2, 'WHO Initiates a Joint Mission to Start Investigating Coronavirus and its Outbreak', 'Automation and Transport', 'WHO director general said on Friday that WHO led mission will initiate the investigation in China about the outbreak of coronavirus with focus on its spread and its severity.', '<p style=\"margin-left:13px !important;\">WHO director general said on Friday that WHO led mission will initiate the investigation in China about the outbreak of coronavirus with focus on its spread and its severity.&nbsp;</p>\r\n\r\n<p style=\"margin-left:13px !important;\">The joint team constitutes of 12 international and Chinese members that will seek details on when, how, and where the 1,700 infected workers contracted the virus from.&nbsp;</p>\r\n\r\n<p style=\"margin-left:13px !important;\">Tedros Adhanom Ghebreyesus, WHO chief from Kinshasa in Democratic Republic of Congo said that they are expecting the whole team to touch down by the weekend.&nbsp;</p>\r\n\r\n<p style=\"margin-left:13px !important;\">He added that the goal of the joined mission is to swiftly inform the further steps in response and preparedness of CODVID-19 in China and globally. He said this in reference to the medical name given to the acute respiratory disease cause by the virus. Special attention will be given to understand the communication of the virus, seriousness of the disease, and the effects of ongoing response measures.&nbsp;</p>\r\n\r\n<p style=\"margin-left:13px !important;\">Dr. Mike Ryan, WHO&rsquo;s health emergencies program&rsquo;s executive director said that he believed that WHO led team will include U.S. health officials.&nbsp;</p>\r\n\r\n<p style=\"margin-left:13px !important;\">The highly regarded technical experts of U.S.A Centers for Disease Control have voiced interest in participating.&nbsp;</p>\r\n\r\n<p style=\"margin-left:13px !important;\">Japan is one of the most affected countries in China.</p>\r\n\r\n<p style=\"margin-left:13px !important;\">On Friday, Chinese authorities have announced 5,090 new cases in China mainland, inclusive of more than 120 deaths summing the total number of infected to 63,851 and the count of deaths from the COVID-19 to 1,380.&nbsp;</p>\r\n\r\n<p style=\"margin-left:13px !important;\">The infections among health workers in a released data by China depicts 1,716 reported cases and 6 deaths.</p>\r\n', '', '2020-09-17', 1),
(3, 'Amazon Committed $10 Billion to Fight Climate Change', 'Internet and Communication', 'to intensify known ways and to investigate better approaches for battling the overwhelming effect of environmental change on this planet we equally share.\"\r\n\r\nThe Bezos Earth Fund will start giving awards this late spring as a feature of the activity.\r\n\r\n\"It will make aggregate move from huge organizations, little organizations, country states, worldwide associations, and people,\" Bezos said.\r\n\r\nBalancing environmental change has become a well-known reason for U.S. very rich people as of late, with Microsoft\'s Bill Gates, Michael Bloomberg and fence invest', '<p style=\"margin-left:13px !important;\"><strong>Amazon&rsquo;s Chief Executive Officer Jeff Bezos will submit $10 billion to subsidize researchers, activists, non-profit organizations and different gatherings battling to ensure the earth and counter the impacts of environmental change.</strong></p>\r\n\r\n<p style=\"margin-left:13px !important;\">Reducing emissions will be hard for Amazon. The e-commerce organization conveys 10 billion things every year, has a gigantic transportation, and has confronted analysis from inside its own workforce.</p>\r\n\r\n<p style=\"margin-left:13px !important;\">Bezos, the richest man on earth, is among a developing rundown of very rich people to commit significant assets to fighting the effect of an Earth-wide temperature boost.</p>\r\n\r\n<p style=\"margin-left:13px !important;\">&quot;Environmental change is the greatest danger to earth,&quot; Bezos said in an Instagram post. &quot;I need to work close by others both to intensify known ways and to investigate better approaches for battling the overwhelming effect of environmental change on this planet we equally share.&quot;</p>\r\n\r\n<p style=\"margin-left:13px !important;\">The Bezos Earth Fund will start giving awards this late spring as a feature of the activity.</p>\r\n\r\n<p style=\"margin-left:13px !important;\">&quot;It will make aggregate move from huge organizations, little organizations, country states, worldwide associations, and people,&quot; Bezos said.</p>\r\n\r\n<p style=\"margin-left:13px !important;\">Balancing environmental change has become a well-known reason for U.S. very rich people as of late, with Microsoft&#39;s Bill Gates, Michael Bloomberg and fence investments chief Tom Steyer considered as a part of the world&#39;s wealthiest natural donors. A year ago, Bezos swore to make online retailer Amazon net carbon impartial by 2040 - the principal significant organization to report such an objective - and to purchase 100,000 electric conveyance vehicles from U.S. vehicle plan and assembling start-up Rivian Automotive LLC.</p>\r\n\r\n<p style=\"margin-left:13px !important;\">Bezos likewise said at the time that Amazon would meet the objectives of the Paris atmosphere accord 10 years in front of the agreement&#39;s calendar and contribute $100 million to re-establish woodlands and wetlands.</p>\r\n\r\n<p style=\"margin-left:13px !important;\">Amazon has confronted dissents by ecological activists and weight from its workers to make a move on environmental change.</p>\r\n\r\n<p style=\"margin-left:13px !important;\">Amazon labourers were among many representatives of enormous innovation organizations to join environmental change walks in San Francisco and Seattle toward the end of last year, saying their bosses had been too delayed to even think about tackling a dangerous atmospheric deviation and expected to make increasingly extreme move.</p>\r\n\r\n<p style=\"margin-left:13px !important;\">Amazon Employees for Climate Justice, a dissident specialists gathering, respected the Bezos Earth Fund declaration, however said it didn&#39;t compensate for the organization&#39;s utilization of petroleum derivatives and different exercises that add to environmental change.</p>\r\n\r\n<p style=\"margin-left:13px !important;\">&quot;We acclaim Jeff Bezos&#39; magnanimity, however one hand can&#39;t give what the other is removing,&quot; the gathering said on Twitter.</p>\r\n', '', '2020-09-17', 1),
(4, 'Nike’s Colin Kaepernick Sneakers Goes out of Stock within Minutes', 'Consumer Goods', 'Colin Kaepernick may be exiled from the National Football League but his collaboration with Nike has grown with the launch of Air Force 1 \'07 x Colin Kaepernick. The sneaker was an instant hit among the customers of Nike, rocketing up the sales soon after its launch.\r\n\r\nThe shoes are no longer available in North America at Nike stores, SNKRS, and\r\nselect retailers. They were sold out in all kids as well as adult sizes in few minutes. These shoes bear a portrait of the former NFL player, Colin Kaepernick, on the heel tab and his p', '<div>\r\n<div style=\"margin-left:-15px;\">\r\n<p style=\"margin-left:13px !important;\">Colin Kaepernick may be exiled from the National Football League but his collaboration with Nike has grown with the launch of Air Force 1 &#39;07 x Colin Kaepernick. The sneaker was an instant hit among the customers of Nike, rocketing up the sales soon after its launch.</p>\r\n\r\n<p style=\"margin-left:13px !important;\">The shoes are no longer available in North America at Nike stores, SNKRS, andselect retailers. They were sold out in all kids as well as adult sizes in few minutes. These shoes bear a portrait of the former NFL player, Colin Kaepernick, on the heel tab and his personal logo on the shoe tongue. As per sources, Nike is refusing to disclose the sales figures.</p>\r\n\r\n<p style=\"margin-left:13px !important;\">Nike Aims to Design an AF1 that Connects to the Collaborators&rsquo; Personal Life</p>\r\n\r\n<p style=\"margin-left:13px !important;\">&quot;This Air Force 1 season, Nike teamed up with a group of collaborators to design an AF1 that relates to their life in person. Colin was selected because we think that his voice and perspective motivate many generations while he is playing on the field as well as personally,&quot; remarked Nike.</p>\r\n\r\n<p style=\"margin-left:13px !important;\">The collaboration comes after a year when Nike released an advertising campaign presenting Kaepernick, who started his protest against racial injustices and kneeled during the national anthem, initiating a controversy across the US.</p>\r\n\r\n<p style=\"margin-left:13px !important;\">Release of Air Max 1 Trainers Called Off During Summer</p>\r\n\r\n<p style=\"margin-left:13px !important;\">During the summer, Nike agreed not to disclose its Air Max 1 Quick Strike Fourth of July shoe, due to the concerns from Kaepernick. He told the company that the shoes featured an old version of the American flag with 13 white stars in a circle, which represented slavery and white supremacy.</p>\r\n\r\n<p style=\"margin-left:13px !important;\">Nike is a key business partner of the NFL, making it difficult sometimes, taking into consideration the company&#39;s strong ties with the controversial player, Kaepernick. In November, the league arranged a workout for the quarterback that attracted huge interest of the media but less immediate attention from the National Football League teams that sent some representatives to observe.</p>\r\n</div>\r\n</div>\r\n\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>\r\n', '', '2020-09-17', 1),
(5, 'WHO Initiates a Joint Mission to Start Investigating Coronavirus and its Outbreak', 'Chemicals and Materials', 'WHO director general said on Friday that WHO led mission will initiate the investigation in China about the outbreak of coronavirus with focus on its spread and its severity. \r\n\r\nThe joint team constitutes of 12 international and Chinese members that will seek details on when, how, and where the 1,700 infected workers contracted the virus from.', '<p style=\"margin-top: 0px; margin-right: 0px; margin-bottom: 1rem; padding: 0px; box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; margin-left: 13px !important;\">WHO director general said on Friday that WHO led mission will initiate the investigation in China about the outbreak of coronavirus with focus on its spread and its severity.&nbsp;</p>\r\n\r\n<p style=\"margin-top: 0px; margin-right: 0px; margin-bottom: 1rem; padding: 0px; box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; margin-left: 13px !important;\">The joint team constitutes of 12 international and Chinese members that will seek details on when, how, and where the 1,700 infected workers contracted the virus from.&nbsp;</p>\r\n\r\n<p style=\"margin-top: 0px; margin-right: 0px; margin-bottom: 1rem; padding: 0px; box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; margin-left: 13px !important;\">Tedros Adhanom Ghebreyesus, WHO chief from Kinshasa in Democratic Republic of Congo said that they are expecting the whole team to touch down by the weekend.&nbsp;</p>\r\n\r\n<p style=\"margin-top: 0px; margin-right: 0px; margin-bottom: 1rem; padding: 0px; box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; margin-left: 13px !important;\">He added that the goal of the joined mission is to swiftly inform the further steps in response and preparedness of CODVID-19 in China and globally. He said this in reference to the medical name given to the acute respiratory disease cause by the virus. Special attention will be given to understand the communication of the virus, seriousness of the disease, and the effects of ongoing response measures.&nbsp;</p>\r\n\r\n<p style=\"margin-top: 0px; margin-right: 0px; margin-bottom: 1rem; padding: 0px; box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; margin-left: 13px !important;\">Dr. Mike Ryan, WHO&rsquo;s health emergencies program&rsquo;s executive director said that he believed that WHO led team will include U.S. health officials.&nbsp;</p>\r\n\r\n<p style=\"margin-top: 0px; margin-right: 0px; margin-bottom: 1rem; padding: 0px; box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; margin-left: 13px !important;\">The highly regarded technical experts of U.S.A Centers for Disease Control have voiced interest in participating.&nbsp;</p>\r\n\r\n<p style=\"margin-top: 0px; margin-right: 0px; margin-bottom: 1rem; padding: 0px; box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; margin-left: 13px !important;\">Japan is one of the most affected countries in China.</p>\r\n\r\n<p style=\"margin-top: 0px; margin-right: 0px; margin-bottom: 1rem; padding: 0px; box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; margin-left: 13px !important;\">On Friday, Chinese authorities have announced 5,090 new cases in China mainland, inclusive of more than 120 deaths summing the total number of infected to 63,851 and the count of deaths from the COVID-19 to 1,380.&nbsp;</p>\r\n\r\n<p style=\"margin-top: 0px; margin-right: 0px; margin-bottom: 1rem; padding: 0px; box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; margin-left: 13px !important;\">The infections among health workers in a released data by China depicts 1,716 reported cases and 6 deaths.</p>\r\n', '', '2020-09-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `newsCategoryID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`newsCategoryID`, `name`, `status`) VALUES
(1, 'Chemicals and Materials', 1),
(2, 'Automation and Transport', 1),
(3, 'Consumer Goods', 1),
(4, 'Electronics and Semiconductors', 1),
(5, 'Foods and Beverages', 1),
(6, 'Internet and Communication', 1),
(7, 'Life Science', 1),
(8, 'Sports', 1),
(9, 'Machinery and Equipment', 1),
(10, 'Packaging', 1),
(11, 'Miscellaneous', 1);

-- --------------------------------------------------------

--
-- Table structure for table `press_release`
--

CREATE TABLE `press_release` (
  `prID` int(11) NOT NULL,
  `title` varchar(350) NOT NULL,
  `category` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `metaDescription` varchar(1000) NOT NULL,
  `description` text NOT NULL,
  `dateAdded` date NOT NULL DEFAULT current_timestamp(),
  `dateModified` date DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `permalink` varchar(256) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `isAccepted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pr_category`
--

CREATE TABLE `pr_category` (
  `prCategoryID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(256) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subscriptionID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `allotedPR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `tncID` int(11) NOT NULL,
  `title` varchar(350) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `subscription` varchar(30) DEFAULT NULL,
  `remainingPR` int(11) NOT NULL DEFAULT 0,
  `country` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogID`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`blogCategoryID`);

--
-- Indexes for table `chromatus_info`
--
ALTER TABLE `chromatus_info`
  ADD PRIMARY KEY (`infoID`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faqID`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsID`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`newsCategoryID`);

--
-- Indexes for table `press_release`
--
ALTER TABLE `press_release`
  ADD PRIMARY KEY (`prID`);

--
-- Indexes for table `pr_category`
--
ALTER TABLE `pr_category`
  ADD PRIMARY KEY (`prCategoryID`);

--
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  ADD PRIMARY KEY (`tncID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `blogCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chromatus_info`
--
ALTER TABLE `chromatus_info`
  MODIFY `infoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faqID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `newsCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `press_release`
--
ALTER TABLE `press_release`
  MODIFY `prID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pr_category`
--
ALTER TABLE `pr_category`
  MODIFY `prCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `tncID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
