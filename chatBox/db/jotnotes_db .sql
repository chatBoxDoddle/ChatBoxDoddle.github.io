-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 03:26 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jotnotes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `ID` int(11) NOT NULL,
  `Sender` varchar(20) NOT NULL,
  `Message` text NOT NULL,
  `GroupID` varchar(11) NOT NULL,
  `SenderID` int(11) NOT NULL,
  `TagID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`ID`, `Sender`, `Message`, `GroupID`, `SenderID`, `TagID`) VALUES
(33, 'tmcelrat', 'hello', 'Onyx', 1, ''),
(34, 'tmcelrat', 'hey!', 'Sunfire', 1, ''),
(35, 'Diana', 'Hello', 'Onyx', 2, ''),
(36, 'Diana', 'How are you doing today?', 'Onyx', 2, ''),
(37, 'Kevin', 'Hey guys!', 'Public', 6, ''),
(38, 'Kevin', 'dude...tmcelrat sucks', 'Zues', 6, ''),
(39, 'Kevin', 'I mean dude is such a loser', 'Zues', 6, ''),
(40, 'Kevin', 'Ugh', 'Zues', 6, ''),
(41, 'Anne', 'ikr? ugh!!! ', 'Zues', 7, ''),
(42, 'tmcelrat', 'fr doe?', 'Zues', 1, ''),
(43, 'tmcelrat', 'How is it that you have all dis time for bs?', 'Zues', 1, ''),
(44, 'tmcelrat', 'ja', 'Public', 1, ''),
(45, 'tmcelrat', 'hey', 'Zues', 1, ''),
(48, 'Diana', 'Hey', 'Public', 2, ''),
(49, 'tmcelrat', 'hello', 'Onyx', 1, 'tmcelrat'),
(50, 'tmcelrat', 'Hey', 'Onyx', 1, 'Diana'),
(51, 'Diana', 'Chill brah', 'Zues', 2, 'Kevin'),
(52, 'Kevin', 'Hell nah', 'Horrius', 6, 'Diana'),
(53, 'Diana', 'woah woah lets hold on for a sec', 'Zues', 2, ''),
(54, 'Sean', 'Whats up?', 'Public', 43, ''),
(55, 'tmcelrat', 'Hello Fam! Im back', 'Zues', 1, ''),
(56, 'Tony', 'Hello Wonderful People!', 'Public', 61, ''),
(57, 'Tony', 'Hows everyone doin today?', 'Public', 61, ''),
(58, 'mikey', 'Hello people!', 'Public', 62, ''),
(59, 'mikey', 'How are you all doing today?', 'Public', 62, ''),
(60, 'mikey', 'Hey,Come to Sunfire', 'Sunfire', 62, 'Diana'),
(61, 'Diana', 'hey...', 'Sunfire', 2, ''),
(62, 'tmcelrat', 'woah whats goin on?', 'Public', 1, ''),
(63, 'tmcelrat', 'I feel it!', 'Public', 1, ''),
(64, 'Sean', 'Hello wonderful people!', 'Public', 12, ''),
(65, 'Rose', 'Hey hey Hey', 'Public', 35, ''),
(66, 'Rose', 'Hello ! how you doin', 'Public', 35, 'tmcelrat'),
(67, 'tmcelrat', 'Hello!', 'Private', 1, 'Rose'),
(68, 'Kevin', 'Hey bro!', 'Private', 6, 'tmcelrat'),
(69, 'Datboi', 'Same', 'Public', 64, ''),
(70, 'tmcelrat', 'I got you Bro!', 'Horrius', 1, ''),
(71, 'tmcelrat', 'hey!', 'Private', 1, 'Rose'),
(72, 'Thomas', 'Hey!', 'Private', 67, 'Kevin'),
(73, 'Kevin', 'Wassup man!', 'Private', 6, 'Thomas'),
(74, 'Rose', 'open the door!', 'Public', 35, ''),
(75, 'Anne', 'Hold on A sec!', 'Private', 7, 'Rose'),
(76, 'Christine', 'Hello guys!', 'Public', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `Email`) VALUES
(1, 'tmcelrat', 'password', 'chcho234@yahoo,com'),
(2, 'Diana', 'password', 'ddunn1@clickbank.net'),
(3, 'Christine', 'password', 'cgonzalez2@arizona.e'),
(4, 'Helen', 'password', 'hrichards3@npr.org'),
(5, 'William', 'password', 'whughes4@domainmarke'),
(6, 'Kevin', 'password', 'khall5@fastcompany.c'),
(7, 'Anne', 'password', 'alawrence6@mediafire'),
(8, 'Joseph', 'password', 'jwatkins7@xrea.com'),
(9, 'Maria', 'password', 'mburton8@chicagotrib'),
(10, 'Denise', 'password', 'dhart9@army.mil'),
(11, 'Sharon', 'password', 'sboyda@slideshare.ne'),
(12, 'Sean', 'password', 'srossb@sciencedirect'),
(13, 'Kathleen', 'password', 'kthompsonc@utexas.ed'),
(14, 'Amanda', 'password', 'aedwardsd@dailymail.'),
(15, 'Jesse', 'password', 'jharte@moonfruit.com'),
(16, 'Donald', 'password', 'dwatkinsf@biblegatew'),
(18, 'Susan', 'password', 'sbaileyh@umich.edu'),
(19, 'Laura', 'password', 'lstanleyi@nhs.uk'),
(20, 'Benjamin', 'password', 'blarsonj@desdev.cn'),
(21, 'Nicholas', 'password', 'nbakerk@wordpress.or'),
(22, 'Barbara', 'password', 'bhilll@123-reg.co.uk'),
(23, 'Jose', 'password', 'jburnsm@cam.ac.uk'),
(24, 'Matthew', 'password', 'mellisn@pen.io'),
(25, 'Andrea', 'password', 'alarsono@prlog.org'),
(26, 'Andrew', 'password', 'asnyderp@whitehouse.'),
(27, 'Norma', 'password', 'nduncanq@vistaprint.'),
(28, 'Russell', 'password', 'rortizr@storify.com'),
(29, 'Larry', 'password', 'lwalkers@vimeo.com'),
(31, 'Julie', 'password', 'jbrownu@state.gov'),
(32, 'Howard', 'password', 'hryanv@seattletimes.'),
(33, 'Carolyn', 'password', 'cfoxw@yolasite.com'),
(35, 'Rose', 'password', 'rmurrayy@comsenz.com'),
(37, 'Jennifer', 'password', 'jknight10@bandcamp.c'),
(38, 'Cynthia', 'password', 'cporter11@msn.com'),
(39, 'Irene', 'password', 'ilawrence12@china.co'),
(40, 'Beverly', 'password', 'boliver13@over-blog.'),
(41, 'Henry', 'password', 'hlee14@google.com.au'),
(42, 'Harold', 'password', 'hkelley15@miibeian.g'),
(44, 'Roger', 'password', 'rhernandez17@hao123.'),
(45, 'Dorothy', 'password', 'dhughes18@ihg.com'),
(46, 'Janice', 'password', 'jgilbert19@wikia.com'),
(47, 'Samuel', 'password', 'sbennett1a@flavors.m'),
(48, 'Bruce', 'password', 'bburke1b@purevolume.'),
(49, 'Amy', 'password', 'ajordan1c@springer.c'),
(50, 'Cheryl', 'password', 'cking1d@nbcnews.com'),
(61, 'Tony', 'batman', 'batman@loc.edu'),
(62, 'mikey', 'freedom', 'freedom@kent.edu'),
(64, 'Datboi', 'ye', 'lol@fgit.com'),
(67, 'Thomas', 'password', 'thos@yahoo.com'),
(68, 'Jack', 'password', 'local');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
