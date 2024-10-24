-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 11:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dummy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `like_list`
--

CREATE TABLE `like_list` (
  `id` int(30) NOT NULL,
  `session_name` text NOT NULL,
  `post_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `like_list`
--

INSERT INTO `like_list` (`id`, `session_name`, `post_id`) VALUES
(2, 'jsmith', 2),
(3, 'mcooper', 2),
(6, 'mcooper', 3),
(8, 'jsmith', 3);

-- --------------------------------------------------------

--
-- Table structure for table `post_list`
--

CREATE TABLE `post_list` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `content` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_list`
--

INSERT INTO `post_list` (`id`, `title`, `author`, `content`, `date_created`, `date_updated`) VALUES
(2, 'Post 101', 'jsmith', 'This is a sample post only', '2022-05-09 16:48:37', '2022-05-09 16:48:37'),
(3, 'Post 102', 'mcooper', 'This is a simple content of a post.', '2022-05-09 16:58:07', '2022-05-09 16:58:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `like_list`
--
ALTER TABLE `like_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `post_list`
--
ALTER TABLE `post_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `like_list`
--
ALTER TABLE `like_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post_list`
--
ALTER TABLE `post_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `like_list`
--
ALTER TABLE `like_list`
  ADD CONSTRAINT `post_id_fk_ll` FOREIGN KEY (`post_id`) REFERENCES `post_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
