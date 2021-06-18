-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 05, 2021 at 12:29 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `state_id`) VALUES
(1, 'Ahmedabad', 1),
(2, 'Surat', 1),
(3, 'Gandhinagar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mytextarea` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `mytextarea`) VALUES
(3, '<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 21px; line-height: 1.5em; color: rgba(0, 0, 0, 0.75); letter-spacing: -0.01em; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; padding-left: 0px !important; margin: -10px 0px !important 20px !important 0px !important;\"><strong style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility;\">Bottomline:</strong>&nbsp;Go for it, don&rsquo;t hesitate to include a next step on your contact us page. You have their attention, use it to guide them further down your funnel!</p>\r\n<h3 style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 28px; line-height: 1.25em; color: #2e2e2e; margin-bottom: 10px; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; margin-top: 30px !important;\">3.&nbsp;<a style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; transition: all 0.25s ease 0s; color: #1082c1 !important; font: inherit !important; text-transform: inherit !important; word-spacing: inherit !important; letter-spacing: inherit !important;\" href=\"https://www.zendesk.com/contact/\" target=\"_blank\" rel=\"noopener\">Zendesk</a></h3>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 21px; line-height: 1.5em; color: rgba(0, 0, 0, 0.75); letter-spacing: -0.01em; margin: 0px 0px 20px !important; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; padding-left: 0px !important;\"><img class=\"lazy entered loaded\" style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; outline: 0px; border: 0px; max-width: 100%; width: 1924px;\" src=\"https://www.impactplus.com/hubfs/zendesk-contact-us--2021.jpg\" alt=\"zendesk-contact-us--2021\" width=\"1924\" loading=\"lazy\" data-src=\"https://www.impactplus.com/hubfs/zendesk-contact-us--2021.jpg\" data-ll-status=\"loaded\" /></p>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 21px; line-height: 1.5em; color: rgba(0, 0, 0, 0.75); letter-spacing: -0.01em; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; padding-left: 0px !important; margin: -10px 0px !important 20px !important 0px !important;\"><a style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; color: #1082c1; transition: all 0.25s ease 0s;\" href=\"https://www.zendesk.com/\"><span style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility;\">Zendesk</span></a>&nbsp;hit all the major needs with its contact us page while maintaining a clean design and even including touches of&nbsp;<a style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; color: #1082c1; transition: all 0.25s ease 0s;\" href=\"https://www.impactplus.com/blog/what-are-self-configuration-tools-why-do-you-need-them-on-your-website\"><span style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility;\">self-selection</span></a>. On the page, they have two directions for a user to follow: either talking to a member of their sales team or going to the help center for product and account support.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 21px; line-height: 1.5em; color: rgba(0, 0, 0, 0.75); letter-spacing: -0.01em; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; padding-left: 0px !important; margin: -10px 0px !important 20px !important 0px !important;\">By choosing a path upfront, the website can show the user the content that is most relevant to them and, in turn, makes it easier for users to find what they&rsquo;re looking for. There&rsquo;s something more frustrating than not being able to find what you need on a website.</p>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 21px; line-height: 1.5em; color: rgba(0, 0, 0, 0.75); letter-spacing: -0.01em; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; padding-left: 0px !important; margin: -10px 0px !important 20px !important 0px !important;\">They also include location information with a link to a map.</p>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 21px; line-height: 1.5em; color: rgba(0, 0, 0, 0.75); letter-spacing: -0.01em; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; padding-left: 0px !important; margin: -10px 0px !important 20px !important 0px !important;\"><strong style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility;\">Bottomline:</strong>&nbsp;Simplicity goes a long way. Make it clear for the user in which direction they should follow if they are looking for help on something specific.</p>\r\n<h3 style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 28px; line-height: 1.25em; color: #2e2e2e; margin-bottom: 10px; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; margin-top: 30px !important;\">4.&nbsp;<a style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; transition: all 0.25s ease 0s; color: #1082c1 !important; font: inherit !important; text-transform: inherit !important; word-spacing: inherit !important; letter-spacing: inherit !important;\" href=\"https://www.berryinsurance.com/contact\" target=\"_blank\" rel=\"noopener\"><span style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility;\">Berry Insurance</span></a><span style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility;\">*</span></h3>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 21px; line-height: 1.5em; color: rgba(0, 0, 0, 0.75); letter-spacing: -0.01em; margin: 0px 0px 20px !important; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; padding-left: 0px !important;\"><strong style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility;\"><em style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility;\">*Editor&rsquo;s Note: Berry Insurance is an IMPACT client.</em></strong></p>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 21px; line-height: 1.5em; color: rgba(0, 0, 0, 0.75); letter-spacing: -0.01em; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; padding-left: 0px !important; margin: -10px 0px !important 20px !important 0px !important;\"><img class=\"lazy entered loaded\" style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; outline: 0px; border: 0px; max-width: 100%; width: 3580px;\" src=\"https://www.impactplus.com/hubfs/berry-insurance-contact-us--2021.jpeg\" alt=\"berry-insurance-contact-us--2021\" width=\"3580\" loading=\"lazy\" data-src=\"https://www.impactplus.com/hubfs/berry-insurance-contact-us--2021.jpeg\" data-ll-status=\"loaded\" /></p>'),
(2, '<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 21px; line-height: 1.5em; color: rgba(0, 0, 0, 0.75); letter-spacing: -0.01em; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; padding-left: 0px !important; margin: -10px 0px !important 20px !important 0px !important;\"><strong style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility;\">Bottomline:</strong>&nbsp;Go for it, don&rsquo;t hesitate to include a next step on your contact us page. You have their attention, use it to guide them further down your funnel!</p>\r\n<h3 style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 28px; line-height: 1.25em; color: #2e2e2e; margin-bottom: 10px; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; margin-top: 30px !important;\">3.&nbsp;<a style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; transition: all 0.25s ease 0s; color: #1082c1 !important; font: inherit !important; text-transform: inherit !important; word-spacing: inherit !important; letter-spacing: inherit !important;\" href=\"https://www.zendesk.com/contact/\" target=\"_blank\" rel=\"noopener\">Zendesk</a></h3>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 21px; line-height: 1.5em; color: rgba(0, 0, 0, 0.75); letter-spacing: -0.01em; margin: 0px 0px 20px !important; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; padding-left: 0px !important;\"><img class=\"lazy entered loaded\" style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; outline: 0px; border: 0px; max-width: 100%; width: 1924px;\" src=\"https://www.impactplus.com/hubfs/zendesk-contact-us--2021.jpg\" alt=\"zendesk-contact-us--2021\" width=\"1924\" loading=\"lazy\" data-src=\"https://www.impactplus.com/hubfs/zendesk-contact-us--2021.jpg\" data-ll-status=\"loaded\" /></p>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 21px; line-height: 1.5em; color: rgba(0, 0, 0, 0.75); letter-spacing: -0.01em; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; padding-left: 0px !important; margin: -10px 0px !important 20px !important 0px !important;\"><a style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; color: #1082c1; transition: all 0.25s ease 0s;\" href=\"https://www.zendesk.com/\"><span style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility;\">Zendesk</span></a>&nbsp;hit all the major needs with its contact us page while maintaining a clean design and even including touches of&nbsp;<a style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; color: #1082c1; transition: all 0.25s ease 0s;\" href=\"https://www.impactplus.com/blog/what-are-self-configuration-tools-why-do-you-need-them-on-your-website\"><span style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility;\">self-selection</span></a>. On the page, they have two directions for a user to follow: either talking to a member of their sales team or going to the help center for product and account support.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 21px; line-height: 1.5em; color: rgba(0, 0, 0, 0.75); letter-spacing: -0.01em; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; padding-left: 0px !important; margin: -10px 0px !important 20px !important 0px !important;\">By choosing a path upfront, the website can show the user the content that is most relevant to them and, in turn, makes it easier for users to find what they&rsquo;re looking for. There&rsquo;s something more frustrating than not being able to find what you need on a website.</p>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 21px; line-height: 1.5em; color: rgba(0, 0, 0, 0.75); letter-spacing: -0.01em; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; padding-left: 0px !important; margin: -10px 0px !important 20px !important 0px !important;\">They also include location information with a link to a map.</p>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 21px; line-height: 1.5em; color: rgba(0, 0, 0, 0.75); letter-spacing: -0.01em; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; padding-left: 0px !important; margin: -10px 0px !important 20px !important 0px !important;\"><strong style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility;\">Bottomline:</strong>&nbsp;Simplicity goes a long way. Make it clear for the user in which direction they should follow if they are looking for help on something specific.</p>\r\n<h3 style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 28px; line-height: 1.25em; color: #2e2e2e; margin-bottom: 10px; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; margin-top: 30px !important;\">4.&nbsp;<a style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; transition: all 0.25s ease 0s; color: #1082c1 !important; font: inherit !important; text-transform: inherit !important; word-spacing: inherit !important; letter-spacing: inherit !important;\" href=\"https://www.berryinsurance.com/contact\" target=\"_blank\" rel=\"noopener\"><span style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility;\">Berry Insurance</span></a><span style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility;\">*</span></h3>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 21px; line-height: 1.5em; color: rgba(0, 0, 0, 0.75); letter-spacing: -0.01em; margin: 0px 0px 20px !important; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; padding-left: 0px !important;\"><strong style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility;\"><em style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility;\">*Editor&rsquo;s Note: Berry Insurance is an IMPACT client.</em></strong></p>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: 21px; line-height: 1.5em; color: rgba(0, 0, 0, 0.75); letter-spacing: -0.01em; font-family: proxima-nova, \'Helvetica Neue\', Arial, sans-serif !important; padding-left: 0px !important; margin: -10px 0px !important 20px !important 0px !important;\"><img class=\"lazy entered loaded\" style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; outline: 0px; border: 0px; max-width: 100%; width: 3580px;\" src=\"https://www.impactplus.com/hubfs/berry-insurance-contact-us--2021.jpeg\" alt=\"berry-insurance-contact-us--2021\" width=\"3580\" loading=\"lazy\" data-src=\"https://www.impactplus.com/hubfs/berry-insurance-contact-us--2021.jpeg\" data-ll-status=\"loaded\" /></p>');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`) VALUES
(1, 'india');

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

DROP TABLE IF EXISTS `election`;
CREATE TABLE IF NOT EXISTS `election` (
  `electionId` int(11) NOT NULL,
  `stateId` int(11) NOT NULL,
  `electionSdate` varchar(255) NOT NULL,
  `electionEdate` varchar(255) NOT NULL,
  PRIMARY KEY (`electionId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `politicalp`
--

DROP TABLE IF EXISTS `politicalp`;
CREATE TABLE IF NOT EXISTS `politicalp` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `symbol` varchar(60000) NOT NULL,
  `partyname` longtext NOT NULL,
  `abr` longtext NOT NULL,
  `about` longtext NOT NULL,
  `ess` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `politicalp`
--

INSERT INTO `politicalp` (`id`, `symbol`, `partyname`, `abr`, `about`, `ess`) VALUES
(19, 'https://static.javatpoint.com/gk/images/national-parties-in-india1.jpg', 'Bharatiya Janata Party', 'BJP', 'Bharatiya Janata Party (BJP) is a national political party founded in 1980. It originated from Bharatiya Jana Sangh that was formed in 1951 by Syama Prasad Mookerjee. After the emergency of I977, the Bharatiya Jana Sangh was merged with other parties to form the Janata Party. It remained in power for three years thereafter the Janata Party was dissolved in 1980 to create the BJP with the members of the erstwhile Jana Sangh party.', 'The election symbol of BJP is the Lotus that is approved by the Election Commission of India. It has many representations such as it indicates a national identity uphold by the BJP, cultural unity of India, etc. BJP\'s political ideology is defined as cultural nationalism which means it is adherent to the cultural values of India.'),
(20, 'data:image/png;base64,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', 'Indian National Congress', 'INC', 'Indian National Congress was founded in 1885 with the support and guidance of Allan Octavian Hume, a British civil servant. It is the oldest and first national party in India that was formed even before India got independence. After India became a free country in 1947, the British Govt. handed over the administration of India to Indian National Congress\'s leaders. Its first session was held in Bombay in 1885 with 72 delegates.', 'The election symbol of INC as approved by the Election Commission of India is the \'Right Hand\' with the palm facing front. The fingers in the Hand are joined or touch each other without leaving any gap in between. This symbol was selected by the Indira Gandhi-led Congress. The previous symbol of the Congress when it was founded in 1885 was \'two bullocks with plow\'. The hand symbol was selected when Indira Gandhi split from the old group to create New Congress. The symbol of Congress represents strength, unity, and energy.'),
(21, 'data:image/jpeg;base64,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', 'Aam Aadmi Party', 'AAP', 'In November 2012, they formally launched the Aam Aadmi Party; Kejriwal was elected as the party\'s National Convener. The party name reflects the phrase Aam Aadmi, or \"common man\", whose interests Kejriwal proposed to represent.', 'The broom is not merely an election symbol for party volunteers and supporters but has become a symbol of the partyâ€™s core promise of cleaning up the system â€“ be it from corruption, communalism, criminalization, and other evils of our politics. The broom has found its place in the public imagination and is considered to be one of the most widely recognized symbols of any party across the country.');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `electionId` int(11) NOT NULL,
  `candidateId` int(11) NOT NULL,
  `partyId` int(11) NOT NULL,
  `candidatevotecount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`) VALUES
(1, 'Gujarat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gedner` varchar(10) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `tele` varchar(10) NOT NULL,
  `politicalparty` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(55) NOT NULL,
  `ward` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `firstname`, `lastname`, `gedner`, `DOB`, `tele`, `politicalparty`, `area`, `state`, `city`, `ward`) VALUES
(11, 'riteek', 'goswami', 'male', '2000-11-15', '9876543210', 'AAP', '456,luharsheri', 'Gujarat', 'Ahmedabad', 'Saraspur'),
(10, 'rahul', 'tripati', 'male', '2021-04-09', '9876543210', 'BJP', '26,vanli,saraspur', 'Gujarat', 'Ahmedabad', 'Saraspur'),
(8, 'jayklp', 'ranu', 'male', '1999-06-09', '9898989898', 'INC', '26,vanli,saraspur', 'Gujarat', 'Ahmedabad', 'Saraspur'),
(9, 'Deep', 'Y', 'male', '2021-04-08', '9999999999', 'BJP', '26,vanli,saraspur', 'Gujarat', 'Ahmedabad', 'Paldi'),
(12, 'shrey', 'ranu', 'male', '1994-01-11', '9898454565', 'INC', '12,laklipol', 'Gujarat', 'Ahmedabad', 'Saraspur');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

DROP TABLE IF EXISTS `voter`;
CREATE TABLE IF NOT EXISTS `voter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `gedner` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`id`, `firstname`, `lastname`, `DOB`, `gedner`, `email`) VALUES
(2, 'Deepwetwt', 'Y', '2008-07-09', 'female', 'Deep@gmail.com'),
(3, 'Deep', 'Y', '2021-04-15', 'male', 'Deep@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

DROP TABLE IF EXISTS `voting`;
CREATE TABLE IF NOT EXISTS `voting` (
  `voteId` int(11) NOT NULL,
  `electionId` int(11) NOT NULL,
  `candidateId` int(11) NOT NULL,
  `voterId` int(11) NOT NULL,
  `partyId` int(11) NOT NULL,
  PRIMARY KEY (`voteId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

DROP TABLE IF EXISTS `ward`;
CREATE TABLE IF NOT EXISTS `ward` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`id`, `name`, `city_id`) VALUES
(1, 'Saraspur', 1),
(2, 'Paldi', 1),
(3, 'Bapunagar', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
