-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2019 at 04:26 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blok54`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `timestamp`, `title`, `content`) VALUES
(1, '2019-06-14 14:32:02', 'Post n1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sollicitudin faucibus arcu, ac condimentum tortor auctor facilisis. Sed in iaculis justo. Vivamus consequat eu orci non fermentum. Duis dapibus eros enim, id aliquet justo consectetur et. Phasellus fringilla ut velit id aliquam. Etiam sit amet tempor lectus. Phasellus ac orci eu diam egestas pulvinar ut quis risus. Aenean fringilla nibh arcu, ac mollis quam pharetra sed.'),
(2, '2019-06-14 14:32:22', 'Post n2', 'Vivamus malesuada orci ac fringilla suscipit. In a nibh interdum, mollis ante et, commodo lectus. Curabitur finibus nisi a urna volutpat viverra. Donec fermentum quam nisi, sit amet ullamcorper risus rutrum ut. Aliquam et lobortis purus, at egestas justo. Vestibulum consequat libero vitae nibh fringilla viverra ut non nulla. Morbi condimentum dui sed vehicula accumsan. Vestibulum eu ex suscipit, consectetur turpis vitae, gravida tellus. Morbi ut felis libero. Sed nibh sem, sollicitudin sit amet euismod sit amet, pharetra a nisl. Aliquam auctor neque eget nisi fringilla, quis fermentum ante aliquet. Phasellus vitae egestas dui, feugiat ultricies dui. Integer et purus blandit, feugiat quam eget, imperdiet orci. Proin condimentum massa risus, quis condimentum justo ultricies in. Donec sapien enim, eleifend quis blandit porta, ultrices quis nulla. Aenean diam nulla, cursus cursus suscipit ac, porta eu massa.'),
(3, '2019-06-14 14:32:22', 'Post n3', 'Cras erat augue, tincidunt ut euismod at, tincidunt sit amet lectus. Sed tempus est ut mi convallis, vel accumsan quam dignissim. Fusce eu eros sem. Curabitur tempus, mi auctor dictum vestibulum, magna lectus efficitur turpis, eget porttitor libero lectus pretium libero. Aliquam euismod velit nec mi suscipit, nec posuere ante venenatis. Aenean ut scelerisque augue, eget consequat ante. Suspendisse tincidunt porttitor risus consequat tincidunt. Etiam iaculis aliquet orci, ac efficitur sem volutpat quis. Ut quis ipsum quis arcu suscipit convallis sed at neque. Donec mollis consequat tortor ut scelerisque. Quisque rutrum orci sed erat gravida pellentesque. Sed vel sagittis eros. Sed nec mi non urna blandit fermentum.'),
(4, '2019-06-14 14:32:28', 'Post n4', 'Vestibulum arcu sapien, ultricies fringilla tortor quis, tristique vulputate justo. Phasellus velit nisi, tincidunt quis rhoncus nec, blandit in leo. Donec in dui eu turpis pellentesque commodo et a ante. Praesent gravida commodo nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus eget sapien egestas, porta leo in, porttitor velit. Curabitur a magna pulvinar, posuere lorem non, feugiat leo. Donec egestas interdum porttitor. Sed ullamcorper finibus erat, vitae iaculis arcu.'),
(12, '2019-06-14 16:18:37', 'Novi title', 'Novi content');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
