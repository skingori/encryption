-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2017 at 02:54 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `encrypt`
--

-- --------------------------------------------------------

--
-- Table structure for table `cipher_decrypt_table`
--

CREATE TABLE `cipher_decrypt_table` (
  `cipher_decrypt_id` int(11) NOT NULL,
  `cipher_decrypt_cipher_id` varchar(20) NOT NULL,
  `cipher_decrypt_decrypt_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cipher_table`
--

CREATE TABLE `cipher_table` (
  `cipher_id` int(20) NOT NULL,
  `cipher_description` varchar(30) NOT NULL,
  `cipher_time` varchar(20) NOT NULL,
  `cipher_date` varchar(20) NOT NULL,
  `cipher_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cipher_table`
--

INSERT INTO `cipher_table` (`cipher_id`, `cipher_description`, `cipher_time`, `cipher_date`, `cipher_text`) VALUES
(2323, 'wewe', '2017-07-19 10:52:29', '2017-07-19 10:52:29', 'e3d5708045f93fadd80358fcabf35c9f'),
(23, 'ddsdsd', '2017-07-19 10:55:11', '2017-07-19 10:55:11', 'cd04dc2083926362ff90b51dfe36f30b'),
(23, 'ddsdsd', '2017-07-19 10:57:45', '2017-07-19 10:57:45', '956442d9e30efef65b238f8e0d3f3ca8a9dfa9a65190888c5efc3ac910d834c4'),
(3224, '32434', '2017-07-19 12:34:01', '2017-07-19 12:34:01', 'cf35c5b66ff7608550b2377e9ff245ee70bea88eb8b675011c175eb16a4ce017'),
(657, 'wgewkgke', '2017-07-19 14:03:34', '2017-07-19 14:03:34', 'c2RzdWdkaHNnZGhzZGhzZ2RzIHRlc3Q='),
(7345767, 'test test', '2017-07-19 14:06:24', '2017-07-19 14:06:24', 'bXkgbmFtZSBpcyBrYXJpcw=='),
(2323, 'ewewew', '2017-07-19 15:13:54', '2017-07-19 15:13:54', 'IHdld2V3ZXc='),
(1231, 'this is the encrypted message', '2017-07-19 15:27:24', '2017-07-19 15:27:24', 'IEEgc2hvcnQgc3RvcnkgaXMgYSBwaWVjZSBvZiBwcm9zZSBmaWN0aW9uIHRoYXQgY2FuIGJlIHJlYWQgaW4gb25lIHNpdHRpbmcuIEVtZXJnaW5nIGZyb20gZWFybGllciBvcmFsIHN0b3J5dGVsbGluZyB0cmFkaXRpb25zIGluIHRoZSAxN3RoIGNlbnR1cnksIHRoZSBzaG9ydCBzdG9yeSBoYXMgZ3Jvd24gdG8gZW5jb21wYXNzIGEgYm9keSBvZiB3b3JrIHNvIGRpdmVyc2UgYXMgdG8gZGVmeSBlYXN5IGNoYXJhY3Rlcml6YXRpb24uIEF0IGl0cyBtb3N0IHByb3RvdHlwaWNhbCB0aGUgc2hvcnQgc3RvcnkgZmVhdHVyZXMgYSBzbWFsbCBjYXN0IG9mIG5hbWVkIGNoYXJhY3RlcnMsIGFuZCBmb2N1c2VzIG9uIGEgc2VsZi1jb250YWluZWQgaW5jaWRlbnQgd2l0aCB0aGUgaW50ZW50IG9mIGV2b2tpbmcgYSAic2luZ2xlIGVmZmVjdCIgb3IgbW9vZC5bMV0gSW4gZG9pbmcgc28sIHNob3J0IHN0b3JpZXMgbWFrZSB1c2Ugb2YgcGxvdCwgcmVzb25hbmNlLCBhbmQgb3RoZXIgZHluYW1pYyBjb21wb25lbnRzIHRvIGEgZmFyIGdyZWF0ZXIgZGVncmVlIHRoYW4gaXMgdHlwaWNhbCBvZiBhbiBhbmVjZG90ZSwgeWV0IHRvIGEgZmFyIGxlc3NlciBkZWdyZWUgdGhhbiBhIG5vdmVsLiBXaGlsZSB0aGUgc2hvcnQgc3RvcnkgaXMgbGFyZ2VseSBkaXN0aW5jdCBmcm9tIHRoZSBub3ZlbCwgYXV0aG9ycyBvZiBib3RoIGdlbmVyYWxseSBkcmF3IGZyb20gYSBjb21tb24gcG9vbCBvZiBsaXRlcmFyeSB0ZWNobmlxdWVzLg0KDQo='),
(4566, 'text', '2017-07-19 15:43:26', '2017-07-19 15:43:26', 'IGhlcmUgaSBhbQ=='),
(5000, 'decrypt', '2017-07-19 15:44:54', '2017-07-19 15:44:54', 'IG15IG1lc3NhZ2UgdHlwZSB3aWxsIGJlIGRlY3J5cHRlZCBzaG9ydGx5'),
(2323, 'wewe', '2017-07-19 10:52:29', '2017-07-19 10:52:29', 'e3d5708045f93fadd80358fcabf35c9f');

-- --------------------------------------------------------

--
-- Table structure for table `decrypt_table`
--

CREATE TABLE `decrypt_table` (
  `decrypt_id` int(20) NOT NULL,
  `decrypt_description` varchar(20) NOT NULL,
  `decrypt_time` varchar(20) NOT NULL,
  `decrypt_date` varchar(20) NOT NULL,
  `decrypt_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decrypt_table`
--

INSERT INTO `decrypt_table` (`decrypt_id`, `decrypt_description`, `decrypt_time`, `decrypt_date`, `decrypt_text`) VALUES
(21213, 'This is a test messa', '2017-07-19 15:02:16', '2017-07-19 15:02:16', 'VGlzIGlzIGEgdGVzdCBtZXNzYWdl'),
(7345767, 'this is the decrypte', '2017-07-19 15:26:08', '2017-07-19 15:26:08', 'my name is karis'),
(1231, 'This is my decrypted', '2017-07-19 15:33:23', '2017-07-19 15:33:23', ' A short story is a piece of prose fiction that can be read in one sitting. Emerging from earlier oral storytelling traditions in the 17th century, the short story has grown to encompass a body of work so diverse as to defy easy characterization. At its most prototypical the short story features a small cast of named characters, and focuses on a self-contained incident with the intent of evoking a "single effect" or mood.[1] In doing so, short stories make use of plot, resonance, and other dynamic components to a far greater degree than is typical of an anecdote, yet to a far lesser degree than a novel. While the short story is largely distinct from the novel, authors of both generally draw from a common pool of literary techniques.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `Login_table`
--

CREATE TABLE `Login_table` (
  `Login_Id` int(20) NOT NULL DEFAULT '0',
  `Login_Username` varchar(100) DEFAULT NULL,
  `Login_Password` varchar(100) DEFAULT NULL,
  `Login_Rank` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Login_table`
--

INSERT INTO `Login_table` (`Login_Id`, `Login_Username`, `Login_Password`, `Login_Rank`) VALUES
(21212, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '2'),
(23232, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
(34565, 'user1', '81dc9bdb52d04dc20036dbd8313ed055', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user_cipher_table`
--

CREATE TABLE `user_cipher_table` (
  `user_cipher_id` int(11) NOT NULL,
  `user_cipher_user_id` varchar(20) NOT NULL,
  `user_cipher_cipher_id` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_cipher_table`
--

INSERT INTO `user_cipher_table` (`user_cipher_id`, `user_cipher_user_id`, `user_cipher_cipher_id`) VALUES
(1, '21212', '7345767'),
(2, '21212', '1231'),
(3, '21212', '1231');

-- --------------------------------------------------------

--
-- Table structure for table `user_decrypt_table`
--

CREATE TABLE `user_decrypt_table` (
  `user_decrypt_id` int(11) NOT NULL,
  `user_decrypt_cipher_id` varchar(20) NOT NULL,
  `user_decrypt_decrypt_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_phone` int(10) NOT NULL,
  `user_address` varchar(10) NOT NULL,
  `user_email` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cipher_decrypt_table`
--
ALTER TABLE `cipher_decrypt_table`
  ADD PRIMARY KEY (`cipher_decrypt_id`);

--
-- Indexes for table `Login_table`
--
ALTER TABLE `Login_table`
  ADD PRIMARY KEY (`Login_Id`),
  ADD KEY `Login_Id` (`Login_Id`);

--
-- Indexes for table `user_cipher_table`
--
ALTER TABLE `user_cipher_table`
  ADD PRIMARY KEY (`user_cipher_id`);

--
-- Indexes for table `user_decrypt_table`
--
ALTER TABLE `user_decrypt_table`
  ADD PRIMARY KEY (`user_decrypt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cipher_decrypt_table`
--
ALTER TABLE `cipher_decrypt_table`
  MODIFY `cipher_decrypt_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_cipher_table`
--
ALTER TABLE `user_cipher_table`
  MODIFY `user_cipher_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_decrypt_table`
--
ALTER TABLE `user_decrypt_table`
  MODIFY `user_decrypt_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
