-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 29, 2020 at 02:29 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(3, 'Agriculture Industry', 'Miscellaneous', 'Agriculture industry is experiencing a paradigm shift as patients are becoming increasingly demanding.\r\nThe industry is adopting a path which is centered towards patients instead of hospitals, hospital systems and physicians. \r\nHence, for organizations it is crucial now to prioritize patient experience first.                                                                                ', '<p><span font-size:=\"\" open=\"\" style=\"color: rgb(68, 68, 68); font-family: \" text-align:=\"\">Agriculture industry is experiencing a paradigm shift as patients are becoming increasingly demanding.The industry is adopting a path which is centered towards patients instead of hospitals, hospital systems and physicians. Hence, for organizations it is crucial now to prioritize patient experience first.</span><br font-size:=\"\" open=\"\" style=\"box-sizing: border-box; color: rgb(68, 68, 68); font-family: \" text-align:=\"\" />\r\n<br font-size:=\"\" open=\"\" style=\"box-sizing: border-box; color: rgb(68, 68, 68); font-family: \" text-align:=\"\" />\r\n<span font-size:=\"\" open=\"\" style=\"color: rgb(68, 68, 68); font-family: \" text-align:=\"\">Internet of Things (IoT) is another big thing which is currently building stature in healthcare. IoT has offered a new way to embed healthcare into the horizon of technology and automation. Although the industry is undergoing stringent regulations, technological advancements are shaping up the future of healthcaredomain.Artificial Intelligence(AI) and Machine learning holds an immense potential with a wide range of applications in oncology, neurology and cardiology. Patients are also opting for virtual care for preliminary diagnosis which is now a day challenging regulatory bodies.</span><br font-size:=\"\" open=\"\" style=\"box-sizing: border-box; color: rgb(68, 68, 68); font-family: \" text-align:=\"\" />\r\n<br font-size:=\"\" open=\"\" style=\"box-sizing: border-box; color: rgb(68, 68, 68); font-family: \" text-align:=\"\" />\r\n<span font-size:=\"\" open=\"\" style=\"color: rgb(68, 68, 68); font-family: \" text-align:=\"\">For companies, it is very important to be updated with current trends and ongoing developments in the industry. We will not only assist you in understanding the present but also help you to strategize for a better future.</span></p>\r\n', '2020-09-26', '2020-09-26', 'Agriculture.jpeg', '', 1),
(4, 'Healthcare', 'Life Science', 'Healthcare industry is experiencing a paradigm shift as patients are becoming increasingly demanding.The industry is adopting a path which is centered towards patients instead of hospitals, hospital systems and physicians. Hence, for organizations it is crucial now to prioritize patient experience first.', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\">Healthcare industry is experiencing a paradigm shift as patients are becoming increasingly demanding.The industry is adopting a path which is centered towards patients instead of hospitals, hospital systems and physicians. Hence, for organizations it is crucial now to prioritize patient experience first.</span><br style=\"box-sizing: border-box; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\" />\r\n<br style=\"box-sizing: border-box; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\" />\r\n<span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\">Internet of Things (IoT) is another big thing which is currently building stature in healthcare. IoT has offered a new way to embed healthcare into the horizon of technology and automation. Although the industry is undergoing stringent regulations, technological advancements are shaping up the future of healthcaredomain.Artificial Intelligence(AI) and Machine learning holds an immense potential with a wide range of applications in oncology, neurology and cardiology. Patients are also opting for virtual care for preliminary diagnosis which is now a day challenging regulatory bodies.</span><br style=\"box-sizing: border-box; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\" />\r\n<br style=\"box-sizing: border-box; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\" />\r\n<span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\">For companies, it is very important to be updated with current trends and ongoing developments in the industry. We will not only assist you in understanding the present but also help you to strategize for a better future.</span></p>\r\n', '2020-09-26', '2020-09-26', 'lifeScience.png', '', 1),
(5, 'Chemicals', 'Chemicals and Materials', 'Chemical and Materials industry is undergoing through rapid change and foreseeing a pressure from environmental point of view, companies from this industry must quickly adapt to this revolution. It is must to get acclimatized to this change as it will aid the companies in maintaining competitive edge and embracing opportunities.\r\n', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\">Chemical and Materials industry is undergoing through rapid change and foreseeing a pressure from environmental point of view, companies from this industry must quickly adapt to this revolution. It is must to get acclimatized to this change as it will aid the companies in maintaining competitive edge and embracing opportunities.</span><br style=\"box-sizing: border-box; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\" />\r\n<br style=\"box-sizing: border-box; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\" />\r\n<span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\">Chromatus has a team of industry experts who are carrying a vast experience of working in Chemicals and Materials domain. We at Chromatus believe in commenting on high growth markets and revenue impacting verticals from Chemicals and Materials domain which has proven records of creating measurable impact to our client&rsquo;s businesses. The team of experts focuses emerging trends in Chemicals and Materials domain and also design the strategies based on the client&rsquo;s business challenge. Some of the key trends witnessed by this industry are &ndash; paradigm shift towards environment friendly products, recycling and reusability of products, implementation of digital technologies and artificial intelligence for driving efficiencies, adopting novel manufacturing processes, and innovation in advanced materials.</span><br style=\"box-sizing: border-box; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\" />\r\n<br style=\"box-sizing: border-box; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\" />\r\n<span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\">Chromatus has strong heritage of maintaining business relationships with stakeholders of Chemicals and Materials industry which is then leveraged in gathering holistic and unbiased opinion future trends, market evolution and embracing the potential opportunities. We are offering business solution for below sub industries from chemicals and materials domain.</span></p>\r\n', '2020-09-26', '2020-09-26', 'chemicalsAndMaterials.jpg', '', 1),
(6, 'Energy', 'Miscellaneous', 'Industrial scenario for energy and natural resources is depicting positive outlook since the sector is growing and unfolding key opportunities. Although the market is optimistic, it is important to avoid unsustainable pressure on natural resources. Hence, Energy and natural resources industry is heavily regulated thus challenging the players from this domain. Within the available sources, renewable sources are having comparative edge over other depleting resources. Many of the advanced solutions are being introduced for energy storage since it is a key growth pocket and in future recycling and reusing will become a pivotal issue.', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\">Industrial scenario for energy and natural resources is depicting positive outlook since the sector is growing and unfolding key opportunities. Although the market is optimistic, it is important to avoid unsustainable pressure on natural resources. Hence, Energy and natural resources industry is heavily regulated thus challenging the players from this domain. Within the available sources, renewable sources are having comparative edge over other depleting resources. Many of the advanced solutions are being introduced for energy storage since it is a key growth pocket and in future recycling and reusing will become a pivotal issue.</span><br style=\"box-sizing: border-box; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\" />\r\n<br style=\"box-sizing: border-box; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\" />\r\n<span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\">Chromatus closely works with Original Equipment Manufacturers (OEM&rsquo;s), service providers and other key stakeholders from energy and natural resources industry. Our team of analysts track the industry updates including innovation, key rules and regulations, major activities by key companies on a daily basis. We have experience of executing projects in various geographies that have helped clients in expanding their operations. Chromatus offers strategies for any of the stages of energy and natural resources value chain based on the business need.</span></p>\r\n', '2020-09-26', '2020-09-26', 'miscellaneous.jpg', '', 1),
(7, 'Food', 'Food and Beverages', 'Altering consumer food habits, change in lifestyle and the emerging trend of healthy foods, and growing demand for dietary products and supplements are creating plentiful opportunities within food and beverage industry. ', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\">Altering consumer food habits, change in lifestyle and the emerging trend of healthy foods, and growing demand for dietary products and supplements are creating plentiful opportunities within food and beverage industry. The industry has already emerged by creating trends which has impacted many of the ancillary industries. Growing disposable income, economic growth in emerging economies is demanding more and more Processed foods, packaged foods, and ready-to-go products which is further fostering the growth in this market. Apart from this, there is heavy demand for special foods like diabetic foods, gluten free products, protein products, dietary supplements are serving as a key to growth of this market.</span></p>\r\n', '2020-09-26', '2020-09-26', 'foodsAndBeverages.jpg', '', 1),
(8, 'Technology', 'Electronics and Semiconductors', 'Technology is aiding industries in better accessibility and simplifying their business. Every business is very much dependant on technology which is gaining more traction these days and also foreseeing the positive outlook in coming years. ', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\">Technology is aiding industries in better accessibility and simplifying their business. Every business is very much dependant on technology which is gaining more traction these days and also foreseeing the positive outlook in coming years. Digitalization, Automation, adoption of 4G and 5G network services, and easy connectivity are further pushing the IT and Telecom industry. It is important to witness, what innovation further the technology is bringing and what will aid the next revolution. This industry vertical is already occupied by tech giants but start-up is the next big things which cannot be ignored.</span><br style=\"box-sizing: border-box; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\" />\r\n<br style=\"box-sizing: border-box; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\" />\r\n<span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; text-align: justify;\">Industrial revolution is acting as a key to unlock the growth opportunities within electronics and semi-conductor industry. Internet of things (IoT), AI-driven electronics, and augmented reality (AR), and virtual reality (VR) are the key trends witnessed in this market arena. As the technological revolution is undergoing, at one end it is offering opportunities while at another end it is presenting its own set of challenges. The one of the key trends and necessity of this industry is building silicon from disaggregated and pre-verified chiplets which will definitely gain traction.</span></p>\r\n', '2020-09-26', '2020-09-26', 'electronicsAndSemiconductors.jpg', '', 1);

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
(4, 'Automation and Transport', 'automationAndTransport.jpg', 1),
(5, 'Chemicals and Materials', 'chemicalsAndMaterials.jpg', 1),
(6, 'Consumer Goods', 'consumerGoods.jpg', 1),
(7, 'Electronics and Semiconductors', 'electronicsAndSemiconductors.jpg', 1),
(8, 'Food and Beverages', 'foodsAndBeverages.jpg', 1),
(9, 'Internet and Communication', 'internetAndCommunication.jpg', 1),
(10, 'Life Science', 'lifeScience.png', 1),
(11, 'Machinery and Equipment', 'machineryAndEquipment.jpg', 1),
(12, 'Packaging', 'packaging.jpg', 1),
(13, 'Sports', 'sports.jpg', 1),
(14, 'Miscellaneous', 'miscellaneous.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chromatus_info`
--

CREATE TABLE `chromatus_info` (
  `infoID` int(11) NOT NULL,
  `linkedinLink` varchar(256) NOT NULL,
  `facebookLink` varchar(256) NOT NULL,
  `twitterLink` varchar(256) NOT NULL,
  `number` varchar(15) NOT NULL,
  `gmail` varchar(256) NOT NULL
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

--
-- Dumping data for table `press_release`
--

INSERT INTO `press_release` (`prID`, `title`, `category`, `author`, `metaDescription`, `description`, `dateAdded`, `dateModified`, `image`, `permalink`, `status`, `isAccepted`) VALUES
(1, 'Bromhexine Market Size Analysis, Trends, Top Manufacturers, Share, Growth, Statistics, Opportunities and Forecast to 2026', 'Consumer Goods', 'admin', ' In the future, with the development of 5G communication, the complexity of high-frequency PCB is also increasing. Traditional high-frequency PCB is mainly single-sided, and there is likely to be demand for multi-layer boards or even HDI in the future. In recent years, the research and development of materials has also become popular, while ensuring very low dielectric loss and stable dielectric constant of the plate, the development of new and preferential prices of new materials and modified materials.', 'The report titled Global Polyurethane Elastic Sealant Market is one of the most comprehensive and important additions to QY Research’s archive of market research studies. It offers detailed research and analysis of key aspects of the global Polyurethane Elastic Sealant market. The market analysts authoring this report have provided in-depth information on leading growth drivers, restraints, challenges, trends, and opportunities to offer a complete analysis of the global Polyurethane Elastic Sealant market. Market participants can use the analysis on market dynamics to plan effective growth strategies and prepare for future challenges beforehand. Each trend of the global Polyurethane Elastic Sealant market is carefully analyzed and researched about by the market analysts.\r\n\r\nGlobal Polyurethane Elastic Sealant Market is valued at USD XX million in 2019 and is projected to reach USD XX million by the end of 2025, growing at a CAGR of XX% during the period 2019 to 2025.\r\n\r\nTop Key Players of the Global Polyurethane Elastic Sealant Market:3M, Arkema S.A., Sika AG, H.B. Fuller, Henkel AG & Company, KGaA, BASF SE, DOW Chemical Company, Mapei S.P.A., Asian Paints Limited, Itw Polymer Sealants North America, Inc., Soudal N.V., Konishi Co., Ltd., Sel Dis Ticaret Ve Kimya Sanayi A.?., Pidilite Industries Limited, EMS-Chemie Holding AG, KCC Corporation, The Yokohama Rubber Co.,Ltd., RPM International Inc., Selena SA, Kommerling Chemische Fabrik Kg, PCI Augsburg GmbH, Sunstar Engineering, Inc., Hodgson Sealants (Holdings) Ltd., Akfix, Splendor Industry Company Limited\r\n\r\n>>>Download Full PDF Sample Copy of Report: (Including Full TOC, List of Tables & Figures, Chart) : https://www.qyresearch.com/sample-form/form/930456/global-polyurethane-elastic-sealant-market\r\n\r\nThe Essential Content Covered in the Global Polyurethane Elastic Sealant Market Report:\r\n\r\n* Top Key Company Profiles.\r\n* Main Business and Rival Information\r\n* SWOT Analysis and PESTEL Analysis\r\n* Production, Sales, Revenue, Price and Gross Margin\r\n* Market Share and Size\r\n\r\nGlobal Polyurethane Elastic Sealant Market Segmentation By Product: One-Component Polyurethane Elastic Sealant, Two-Component Polyurethane Elastic Sealant\r\n\r\nGlobal Polyurethane Elastic Sealant Market Segmentation By Application: Building & Construction, Automotive, General Industrial, Marine, Others\r\n\r\nIn terms of region, this research report covers almost all the major regions across the globe such as North America, Europe, South America, the Middle East, and Africa and the Asia Pacific. Europe and North America regions are anticipated to show an upward growth in the years to come. While Polyurethane Elastic Sealant Market in Asia Pacific regions is likely to show remarkable growth during the forecasted period. Cutting edge technology and innovations are the most important traits of the North America region and that’s the reason most of the time the US dominates the global markets. Polyurethane Elastic Sealant Market in South, America region is also expected to grow in near future.\r\n\r\nKey questions answered in the report\r\n\r\nWhat will be the market size in terms of value and volume in the next five years?\r\nWhich segment is currently leading the market?\r\nIn which region will the market find its highest growth?\r\nWhich players will take the lead in the market?\r\nWhat are the key drivers and restraints of the market’s growth?\r\nWe provide detailed product mapping and analysis of various market scenarios. Our analysts are experts in providing in-depth analysis and breakdown of the business of key market leaders. We keep a close eye on recent developments and follow latest company news related to different players operating in the global Polyurethane Elastic Sealant market. This helps us to deeply analyze companies as well as the competitive landscape. Our vendor landscape analysis offers a complete study that will help you to stay on top of the competition.\r\n\r\nWhy to Buy this Report?\r\n\r\nMarket Size Forecasts: The report has provided accurate and precise estimations of the global Polyurethane Elastic Sealant market size in terms of value and volume\r\nMarket Trend Analysis: Here, the report has shed light on the upcoming trends and developments anticipated to impact the Polyurethane Elastic Sealant market growth\r\nFuture Prospects: The analysts have focused on the growth opportunities that may prove beneficial for the market players to make their mark in the Polyurethane Elastic Sealant market\r\nSegmental Analysis: Exclusive analysis of the product type, application, and end user segments is provided in this unit of the report\r\nRegional Analysis: This section explores the growth opportunities in key regions and countries, which will help the market players to focus on the potential regions\r\nVendor Competitive Analysis: The report has focused on the strategies considered by the market participants to gain a major share in the global Polyurethane Elastic Sealant market. This will help the competitors to get an overview of the competitive landscape so as to make sound business decisions\r\nRequest Customization of Report :https://www.qyresearch.com/customize-request/form/930456/global-polyurethane-elastic-sealant-market\r\n\r\nTable of Contents\r\n\r\nExecutive Summary\r\n1 Polyurethane Elastic Sealant Market Overview\r\n1.1 Product Overview and Scope of Polyurethane Elastic Sealant\r\n1.2 Polyurethane Elastic Sealant Segment by Type\r\n1.3 Polyurethane Elastic Sealant Segment by Application\r\n1.4 Global Polyurethane Elastic Sealant Market Size\r\n\r\n2 Global Polyurethane Elastic Sealant Market Competition by Manufacturers\r\n2.1 Global Polyurethane Elastic Sealant Production Market Share by Manufacturers (2014-2019)\r\n2.2 Global Polyurethane Elastic Sealant Revenue Share by Manufacturers (2014-2019)\r\n2.3 Global Polyurethane Elastic Sealant Average Price by Manufacturers (2014-2019)\r\n2.4 Manufacturers Polyurethane Elastic Sealant Production Sites, Area Served, Product Types\r\n2.5 Polyurethane Elastic Sealant Market Competitive Situation and Trends\r\n\r\n3 Global Polyurethane Elastic Sealant Production Market Share by Regions\r\n3.1 Global Polyurethane Elastic Sealant Production Market Share by Regions\r\n3.2 Global Polyurethane Elastic Sealant Revenue Market Share by Regions (2014-2019)\r\n3.3 Global Polyurethane Elastic Sealant Production, Revenue, Price and Gross Margin (2014-2019)\r\n3.4 North America Polyurethane Elastic Sealant Production\r\n3.5 Europe Polyurethane Elastic Sealant Production\r\n3.6 China Polyurethane Elastic Sealant Production (2014-2019)\r\n3.7 Japan Polyurethane Elastic Sealant Production (2014-2019)', '2020-09-29', NULL, 'pr3.jpg', 'perma2', 1, 1),
(2, 'Copper Coated Wire for Welding Purposes Market 2020 Business Strategies, Product Sales and Growth Rate, Assessment to 2026', 'Machinery and Equipment', 'admin', 'Copper Coated Wire for Welding Purposes Market provides market competition, segmentation, geographical expansion, regional growth, market size, and other factors that are important from a market expert’s point of view.', 'The report titled Global Copper Coated Wire for Welding Purposes Market is one of the most comprehensive and important additions to QY Research’s archive of market research studies. It offers detailed research and analysis of key aspects of the global Copper Coated Wire for Welding Purposes market. The market analysts authoring this report have provided in-depth information on leading growth drivers, restraints, challenges, trends, and opportunities to offer a complete analysis of the global Copper Coated Wire for Welding Purposes market. Market participants can use the analysis on market dynamics to plan effective growth strategies and prepare for future challenges beforehand. Each trend of the global Copper Coated Wire for Welding Purposes market is carefully analyzed and researched about by the market analysts.\r\n\r\nGlobal Copper Coated Wire for Welding Purposes Market is valued at USD XX million in 2019 and is projected to reach USD XX million by the end of 2025, growing at a CAGR of XX% during the period 2019 to 2025.\r\n\r\nTop Key Players of the Global Copper Coated Wire for Welding Purposes Market\r\n:\r\nAnand Arc Ltd, Raajratna Electrodes, Klinweld, Salooja Brothers Private Limited, Sadana Brothers, Aero Tech Solutions, Ideal Electrodes, MSME-DI Kanpur, LINCOLN ELECTRIC, Unique Welding Products Pvt. Ltd., Systematic Industries Private Limited, The Lincoln Electric Company, Select-Arc, Philatron Wire & Cable, B. B. Electrotechnic\r\n\r\nDownload Full PDF Sample Copy of Report: (Including Full TOC, List of Tables & Figures, Chart) : \r\nhttps://www.qyresearch.com/sample-form/form/1009037/global-copper-coated-wire-for-welding-purposes-competition-situation-research-report-\r\n\r\nThe Essential Content Covered in the Global Copper Coated Wire for Welding Purposes Market Report\r\n:\r\n\r\n \r\n\r\n* Top Key Company Profiles.\r\n* Main Business and Rival Information\r\n* SWOT Analysis and PESTEL Analysis\r\n* Production, Sales, Revenue, Price and Gross Margin\r\n* Market Share and Size\r\n\r\nGlobal Copper Coated Wire for Welding Purposes Market Segmentation By Product: Copper Coated SAW Wire, Copper Coated MIG Wire, Copper Coated TIG Wire\r\n\r\nGlobal Copper Coated Wire for Welding Purposes Market Segmentation By Application: Semi Automatic Submerged ARC Welding Machines, Automatic Submerged ARC Welding Machines\r\n\r\nIn terms of region, this research report covers almost all the major regions across the globe such as North America, Europe, South America, the Middle East, and Africa and the Asia Pacific. Europe and North America regions are anticipated to show an upward growth in the years to come. While Copper Coated Wire for Welding Purposes Market in Asia Pacific regions is likely to show remarkable growth during the forecasted period. Cutting edge technology and innovations are the most important traits of the North America region and that’s the reason most of the time the US dominates the global markets. Copper Coated Wire for Welding Purposes Market in South, America region is also expected to grow in near future.\r\n\r\nKey questions answered in the report\r\n\r\nWhat will be the market size in terms of value and volume in the next five years?\r\nWhich segment is currently leading the market?\r\nIn which region will the market find its highest growth?\r\nWhich players will take the lead in the market?\r\nWhat are the key drivers and restraints of the market’s growth?\r\nResearch Methodology', '2020-09-29', NULL, 'pr2.jpg', 'perma4', 1, 1),
(3, 'Bromhexine Market Size Analysis, Trends, Top Manufacturers, Share, Growth, Statistics, Opportunities and Forecast to 2026', 'Consumer Goods', 'admin', ' In the future, with the development of 5G communication, the complexity of high-frequency PCB is also increasing. Traditional high-frequency PCB is mainly single-sided, and there is likely to be demand for multi-layer boards or even HDI in the future. In recent years, the research and development of materials has also become popular, while ensuring very low dielectric loss and stable dielectric constant of the plate, the development of new and preferential prices of new materials and modified materials.', 'The report titled Global Polyurethane Elastic Sealant Market is one of the most comprehensive and important additions to QY Research’s archive of market research studies. It offers detailed research and analysis of key aspects of the global Polyurethane Elastic Sealant market. The market analysts authoring this report have provided in-depth information on leading growth drivers, restraints, challenges, trends, and opportunities to offer a complete analysis of the global Polyurethane Elastic Sealant market. Market participants can use the analysis on market dynamics to plan effective growth strategies and prepare for future challenges beforehand. Each trend of the global Polyurethane Elastic Sealant market is carefully analyzed and researched about by the market analysts.\r\n\r\nGlobal Polyurethane Elastic Sealant Market is valued at USD XX million in 2019 and is projected to reach USD XX million by the end of 2025, growing at a CAGR of XX% during the period 2019 to 2025.\r\n\r\nTop Key Players of the Global Polyurethane Elastic Sealant Market:3M, Arkema S.A., Sika AG, H.B. Fuller, Henkel AG & Company, KGaA, BASF SE, DOW Chemical Company, Mapei S.P.A., Asian Paints Limited, Itw Polymer Sealants North America, Inc., Soudal N.V., Konishi Co., Ltd., Sel Dis Ticaret Ve Kimya Sanayi A.?., Pidilite Industries Limited, EMS-Chemie Holding AG, KCC Corporation, The Yokohama Rubber Co.,Ltd., RPM International Inc., Selena SA, Kommerling Chemische Fabrik Kg, PCI Augsburg GmbH, Sunstar Engineering, Inc., Hodgson Sealants (Holdings) Ltd., Akfix, Splendor Industry Company Limited\r\n\r\n>>>Download Full PDF Sample Copy of Report: (Including Full TOC, List of Tables & Figures, Chart) : https://www.qyresearch.com/sample-form/form/930456/global-polyurethane-elastic-sealant-market\r\n\r\nThe Essential Content Covered in the Global Polyurethane Elastic Sealant Market Report:\r\n\r\n* Top Key Company Profiles.\r\n* Main Business and Rival Information\r\n* SWOT Analysis and PESTEL Analysis\r\n* Production, Sales, Revenue, Price and Gross Margin\r\n* Market Share and Size\r\n\r\nGlobal Polyurethane Elastic Sealant Market Segmentation By Product: One-Component Polyurethane Elastic Sealant, Two-Component Polyurethane Elastic Sealant\r\n\r\nGlobal Polyurethane Elastic Sealant Market Segmentation By Application: Building & Construction, Automotive, General Industrial, Marine, Others\r\n\r\nIn terms of region, this research report covers almost all the major regions across the globe such as North America, Europe, South America, the Middle East, and Africa and the Asia Pacific. Europe and North America regions are anticipated to show an upward growth in the years to come. While Polyurethane Elastic Sealant Market in Asia Pacific regions is likely to show remarkable growth during the forecasted period. Cutting edge technology and innovations are the most important traits of the North America region and that’s the reason most of the time the US dominates the global markets. Polyurethane Elastic Sealant Market in South, America region is also expected to grow in near future.\r\n\r\nKey questions answered in the report\r\n\r\nWhat will be the market size in terms of value and volume in the next five years?\r\nWhich segment is currently leading the market?\r\nIn which region will the market find its highest growth?\r\nWhich players will take the lead in the market?\r\nWhat are the key drivers and restraints of the market’s growth?\r\nWe provide detailed product mapping and analysis of various market scenarios. Our analysts are experts in providing in-depth analysis and breakdown of the business of key market leaders. We keep a close eye on recent developments and follow latest company news related to different players operating in the global Polyurethane Elastic Sealant market. This helps us to deeply analyze companies as well as the competitive landscape. Our vendor landscape analysis offers a complete study that will help you to stay on top of the competition.\r\n\r\nWhy to Buy this Report?\r\n\r\nMarket Size Forecasts: The report has provided accurate and precise estimations of the global Polyurethane Elastic Sealant market size in terms of value and volume\r\nMarket Trend Analysis: Here, the report has shed light on the upcoming trends and developments anticipated to impact the Polyurethane Elastic Sealant market growth\r\nFuture Prospects: The analysts have focused on the growth opportunities that may prove beneficial for the market players to make their mark in the Polyurethane Elastic Sealant market\r\nSegmental Analysis: Exclusive analysis of the product type, application, and end user segments is provided in this unit of the report\r\nRegional Analysis: This section explores the growth opportunities in key regions and countries, which will help the market players to focus on the potential regions\r\nVendor Competitive Analysis: The report has focused on the strategies considered by the market participants to gain a major share in the global Polyurethane Elastic Sealant market. This will help the competitors to get an overview of the competitive landscape so as to make sound business decisions\r\nRequest Customization of Report :https://www.qyresearch.com/customize-request/form/930456/global-polyurethane-elastic-sealant-market\r\n\r\nTable of Contents\r\n\r\nExecutive Summary\r\n1 Polyurethane Elastic Sealant Market Overview\r\n1.1 Product Overview and Scope of Polyurethane Elastic Sealant\r\n1.2 Polyurethane Elastic Sealant Segment by Type\r\n1.3 Polyurethane Elastic Sealant Segment by Application\r\n1.4 Global Polyurethane Elastic Sealant Market Size\r\n\r\n2 Global Polyurethane Elastic Sealant Market Competition by Manufacturers\r\n2.1 Global Polyurethane Elastic Sealant Production Market Share by Manufacturers (2014-2019)\r\n2.2 Global Polyurethane Elastic Sealant Revenue Share by Manufacturers (2014-2019)\r\n2.3 Global Polyurethane Elastic Sealant Average Price by Manufacturers (2014-2019)\r\n2.4 Manufacturers Polyurethane Elastic Sealant Production Sites, Area Served, Product Types\r\n2.5 Polyurethane Elastic Sealant Market Competitive Situation and Trends\r\n\r\n3 Global Polyurethane Elastic Sealant Production Market Share by Regions\r\n3.1 Global Polyurethane Elastic Sealant Production Market Share by Regions\r\n3.2 Global Polyurethane Elastic Sealant Revenue Market Share by Regions (2014-2019)\r\n3.3 Global Polyurethane Elastic Sealant Production, Revenue, Price and Gross Margin (2014-2019)\r\n3.4 North America Polyurethane Elastic Sealant Production\r\n3.5 Europe Polyurethane Elastic Sealant Production\r\n3.6 China Polyurethane Elastic Sealant Production (2014-2019)\r\n3.7 Japan Polyurethane Elastic Sealant Production (2014-2019)', '2020-09-29', NULL, 'pr3.jpg', 'perma2', 1, 1),
(4, 'Copper Coated Wire for Welding Purposes Market 2020 Business Strategies, Product Sales and Growth Rate, Assessment to 2026', 'Machinery and Equipment', 'admin', 'Copper Coated Wire for Welding Purposes Market provides market competition, segmentation, geographical expansion, regional growth, market size, and other factors that are important from a market expert’s point of view.', 'The report titled Global Copper Coated Wire for Welding Purposes Market is one of the most comprehensive and important additions to QY Research’s archive of market research studies. It offers detailed research and analysis of key aspects of the global Copper Coated Wire for Welding Purposes market. The market analysts authoring this report have provided in-depth information on leading growth drivers, restraints, challenges, trends, and opportunities to offer a complete analysis of the global Copper Coated Wire for Welding Purposes market. Market participants can use the analysis on market dynamics to plan effective growth strategies and prepare for future challenges beforehand. Each trend of the global Copper Coated Wire for Welding Purposes market is carefully analyzed and researched about by the market analysts.\r\n\r\nGlobal Copper Coated Wire for Welding Purposes Market is valued at USD XX million in 2019 and is projected to reach USD XX million by the end of 2025, growing at a CAGR of XX% during the period 2019 to 2025.\r\n\r\nTop Key Players of the Global Copper Coated Wire for Welding Purposes Market\r\n:\r\nAnand Arc Ltd, Raajratna Electrodes, Klinweld, Salooja Brothers Private Limited, Sadana Brothers, Aero Tech Solutions, Ideal Electrodes, MSME-DI Kanpur, LINCOLN ELECTRIC, Unique Welding Products Pvt. Ltd., Systematic Industries Private Limited, The Lincoln Electric Company, Select-Arc, Philatron Wire & Cable, B. B. Electrotechnic\r\n\r\nDownload Full PDF Sample Copy of Report: (Including Full TOC, List of Tables & Figures, Chart) : \r\nhttps://www.qyresearch.com/sample-form/form/1009037/global-copper-coated-wire-for-welding-purposes-competition-situation-research-report-\r\n\r\nThe Essential Content Covered in the Global Copper Coated Wire for Welding Purposes Market Report\r\n:\r\n\r\n \r\n\r\n* Top Key Company Profiles.\r\n* Main Business and Rival Information\r\n* SWOT Analysis and PESTEL Analysis\r\n* Production, Sales, Revenue, Price and Gross Margin\r\n* Market Share and Size\r\n\r\nGlobal Copper Coated Wire for Welding Purposes Market Segmentation By Product: Copper Coated SAW Wire, Copper Coated MIG Wire, Copper Coated TIG Wire\r\n\r\nGlobal Copper Coated Wire for Welding Purposes Market Segmentation By Application: Semi Automatic Submerged ARC Welding Machines, Automatic Submerged ARC Welding Machines\r\n\r\nIn terms of region, this research report covers almost all the major regions across the globe such as North America, Europe, South America, the Middle East, and Africa and the Asia Pacific. Europe and North America regions are anticipated to show an upward growth in the years to come. While Copper Coated Wire for Welding Purposes Market in Asia Pacific regions is likely to show remarkable growth during the forecasted period. Cutting edge technology and innovations are the most important traits of the North America region and that’s the reason most of the time the US dominates the global markets. Copper Coated Wire for Welding Purposes Market in South, America region is also expected to grow in near future.\r\n\r\nKey questions answered in the report\r\n\r\nWhat will be the market size in terms of value and volume in the next five years?\r\nWhich segment is currently leading the market?\r\nIn which region will the market find its highest growth?\r\nWhich players will take the lead in the market?\r\nWhat are the key drivers and restraints of the market’s growth?\r\nResearch Methodology', '2020-09-29', NULL, 'pr2.jpg', 'perma4', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pr_category`
--

CREATE TABLE `pr_category` (
  `prCategoryID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fa-icon` varchar(30) NOT NULL DEFAULT 'fa fa-angle-double-right',
  `image` varchar(256) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pr_category`
--

INSERT INTO `pr_category` (`prCategoryID`, `name`, `fa-icon`, `image`, `status`) VALUES
(1, 'Automation and Transport', 'fa fa-subway', 'automationAndTransport.jpg', 1),
(2, 'Chemicals and Materials', 'fa fa-magic', 'chemicalsAndMaterials.jpg', 1),
(3, 'Consumer Goods', 'fa fa-truck\r\n', 'consumerGoods.jpg', 1),
(4, 'Electronics and Semiconductors', 'fa fa-bolt\r\n', 'electronicsAndSemiconductors.jpg', 1),
(5, 'Food and Beverages', 'fa fa-glass\r\n', 'foodsAndBeverages.jpg', 1),
(6, 'Internet and Communication', 'fa fa-wifi\r\n', 'internetAndCommunication.jpg', 1),
(7, 'Life Science', 'fa fa-life-ring\r\n', 'lifeScience.png', 1),
(8, 'Machinery and Equipment', 'fa fa-space-shuttle\r\n', 'machineryAndEquipment.jpg', 1),
(9, 'Packaging', 'fa fa-dropbox\r\n', 'packaging.jpg', 1),
(10, 'Sports', 'fa fa-child\r\n', 'sports.jpg', 1),
(11, 'Miscellaneous', 'fa fa-angle-double-right', 'miscellaneous.jpg', 1);

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
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `subscription` varchar(30) DEFAULT NULL,
  `remainingPR` int(11) NOT NULL DEFAULT 0,
  `company` varchar(30) NOT NULL,
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
  MODIFY `blogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `blogCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `faqID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `prID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pr_category`
--
ALTER TABLE `pr_category`
  MODIFY `prCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
