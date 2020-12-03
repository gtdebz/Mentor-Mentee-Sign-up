-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2019 at 11:08 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'mike', 'noble'),
(2, 'Mark', '56ab24c15b72a457069c5ea42fcfc640'),
(3, 'sgt', '36f3af6226e0b5303e19b824e7442272'),
(4, 'ft', '82a9e4d26595c87ab6e442391d8c5bba'),
(5, 'agt', 'f8013d22cc0ebffec2676c634ddeb4b7'),
(6, 'Vivian', '564f60a2dd82ea24bfa3f2f615348f7c'),
(7, 'chris', '2ab4f27ab1ffdcdad8ed21a965ca62ad'),
(8, 'adebz@aol.com', 'a7975b1aa67ac00aba15725a99ee06f0'),
(9, 'hj', '5e36941b3d856737e81516acd45edc50'),
(10, 'User Tee', 'b5c0b187fe309af0f4d35982fd961d7e'),
(11, 'i', '865c0c0b4ab0e063e5caa3387c1a8741'),
(12, 'John', 'bc52a12b76949c90c464336a264cc5da'),
(13, 'afr@aol.com', '1f28e49f34e2406fdb6d6158eebd793b'),
(14, 'john', '4e58188ff528dea1eec738fffc0e118d'),
(15, 'john', '4e58188ff528dea1eec738fffc0e118d'),
(16, 'efe', 'e6d96502596d7e7887b76646c5f615d9'),
(17, 'age', '1f28e49f34e2406fdb6d6158eebd793b'),
(18, 'economy', '363b122c528f54df4a0446b6bab05515'),
(19, 'ft', 'a9c3a357b81dcb7e93844108cd7b6608'),
(20, 'eh', '139d4e5831aee2562075a24a97fc1711'),
(21, 'gu', '473ec6322959e0b4466e40ddd8f2beb1'),
(22, 'su', '77fd7d3af917dff1e51bc5eee966ff52'),
(23, 'ngffg', '88b5c67220dcf8626f2798d33ea48f3a'),
(24, 'efjbeo', 'f9070295f3955ee5ab39fa577e1554c9'),
(25, 'eyrery', 'b48aee14c1955e7601d619243b583f45'),
(26, 'hr', '13640ca60749b54f101649c10460beec'),
(27, 'srsrs', '958961aa451644cba9fe1d3f7106695a'),
(28, 'sdjds', 'c3a474debbf49cf8f4031a899efb18cb'),
(29, 'sghas', 'edbe2172b7f2289d31bbbf6245f56f60'),
(30, 'alejhe', '6d9c4e52f18f604187a77eac8944d909'),
(31, 'bf', '4c449a2bdbc0f879109fe23d1afe11ff'),
(32, 'gt', '1bfad22f0925978f310a37440bfdff43'),
(33, 'uktty', '15222541d3de384a7e52a3feb5c82243'),
(34, 'rjyj', '9257ee00f77a44076082c2aa35662433'),
(35, 'ufu', '1427e904d3da3b984e2cd6e82d97d631'),
(36, 'uru', 'bd5ff46a6bfb621bee056f146e428ed8'),
(37, 'jerry', '373633ec8af28e5afaf6e5f4fd87469b'),
(38, 'Chris', 'dc1d71bbb5c4d2a5e936db79ef10c19f'),
(39, 'Chris', '99dea78007133396a7b8ed70578ac6ae');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `post_category_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `post_category_id`) VALUES
(8, 'Programming', 5),
(9, 'Web', 7),
(10, 'Commerce', 4),
(11, 'Social Sciences', 8),
(12, 'Science', 9),
(13, 'Chemical Engineering', 0),
(19, 'Architectural Club', 0),
(20, 'Music and Entertainment', 0),
(21, 'Chris and Gbohuns', 0),
(22, 'Chemistry and Chemical Processes', 0),
(23, 'Education and Humanities', 0),
(24, 'Metallurgical Engineering Club', 0),
(25, ' Food and Nutrition Group', 0),
(26, 'Agriculture Group', 0),
(27, 'Fashion Club', 0),
(28, 'Anthropology and Ancient Arts', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(2, 11, 'Sola Ajayi', 'jolly@yahoo.com', 'The Science team would lunch the space energizer again', 'Approved', '2019-09-18'),
(3, 6, 'Elo Ogbolu', 'zeety@yahoo.com', 'Please put ten mikes at the studio apartment', 'published', '2019-07-03'),
(4, 8, 'Van Vik', 'van@aol.com', 'There are no places for the training of new mascots.', 'draft', '2019-07-09'),
(5, 2, 'Benny Anderson', 'benny@hotmail.com', 'There are twenty British restaurants on the way to Port Lome.', 'approve', '2019-06-12'),
(6, 7, 'Mary Akpabio', 'mary@hotmail.com', 'Mary when will you get to the airport as there are news of increased cheap tickets', 'Draft', '2019-06-03'),
(9, 5, 'Dr. Keepson', 'kep@aol.com', 'The tallies will be used', 'Published', '2019-08-18'),
(10, 1, 'Bally', 'sp@yahoo.com', 'The space program is unique', 'unapproved', '2019-08-04'),
(11, 14, 'Willy B', 'wllB@aol.com', 'The maps talked about may not be sequential', 'unapproved', '2019-08-06'),
(12, 13, 'Mary Maria', 'mma@gmail.com', 'When the rains drop at degrees unexpected what scientific facts are in place to back that up?', 'Draft', '2019-08-06'),
(13, 15, 'David Gerali', 'greil@hotmail.com', 'We need more proof of it Collins...', 'approved', '2019-08-06'),
(14, 16, 'Dr.Freslene Geramillo', 'fre17$@hotmail.com', 'The deep steeps also add to the rapid wears and tears of the rocks all along the mountain cliffs', 'unapproved', '2019-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_content` varchar(255) NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(1, 3, 'Python Programming Ist Edition', 'Daniel Amokachi', '2019-08-11', 'b5.jpg', 'The programming series should have Python as a leading requirement for th kids...', 'Php, Programming, Python', '4', 'approved'),
(2, 4, 'Pascal', 'Timothy Dannet', '2019-08-11', '6.jpg', 'Pascal is a very unique programming course for starters', 'Valuable, anthropology, ancient', '4', 'Unapproved'),
(3, 7, 'Author\'s Web', 'Collin Onyebuchi', '2019-07-20', '12.jpg', 'We have a lot of sources to put web pages for authors but the exact figure can also be verified according to unilateral views', 'web, pages, authors', '4', 'draft'),
(5, 1, 'Data Analysis and Web Development', 'Tobechukwu Martins', '2019-08-10', 'b1.png', 'Data mining requires a high level of data analysis and reporting for good analytical content to be generated', 'Data, Web', '4', 'Published'),
(6, 14, 'Space Science', 'Kola', '2019-08-08', 'b3.png', 'The children did very great on the project', 'Space Science', '4', 'Published'),
(7, 8, 'Typewriting Standards', 'Ikechukwu Campbell', '2019-08-08', '2061.JPG', 'Secondary Schools now have Typewriting as a major program for its usefullness in helping students type fast an d effectively.', 'Typewriting Standards', '4', 'Draft'),
(8, 9, 'Titration, lab', 'Jordan Scopes', '2019-08-08', '4.jpg', 'The future of science also is very bright', 'Titration', '4', 'Draft'),
(11, 15, 'Money and Finance Pruning', 'Prof. Adebz Platnum', '2019-08-08', 'customer-paying-with-credit-card-free-photo-DSC00514-1570x1047.jpg', 'Cashless monetization and monetizing methods provide viable means of regulating inflation', 'Money and Finance Pruning', '4', 'Draft'),
(12, 2, 'Microbiology', 'Samantha Philips', '2019-08-08', 'alge.jpg', 'We are expecting twenty articles', 'Miucrobiology', '4', 'Approved'),
(13, 11, 'Money and Finance Pruning', 'Prof. Adebz Platnum', '2019-08-08', 'customer-paying-with-credit-card-free-photo-DSC00514-1570x1047.jpg', 'Cashless monetization and monetizing methods provide viable means of regulating inflation', 'Money and Finance Pruning', '4', 'Draft'),
(14, 5, 'Macroeconomic Structures', 'Abraham Davies', '2019-08-08', '5.jpg', 'The very contribution of macro part of the economy macroeconomics saved a lot of 21st century industries and industrialization attempts.', 'Macroeconomic Structures', '4', 'Draft'),
(15, 6, 'Monetary Policies and Commerce', 'Prof. Sharon Stone', '2019-08-08', 'contactless-credit-card-payment-free-photo-DSC00518-1570x1047.jpg', 'Money inflation can be killed if it really is the problem', 'Monetary Policies and Commerce', '4', 'Published'),
(16, 13, 'Monetary Policies and Commerce a', 'Prof. Sharon Stone', '2019-08-10', 'contactless-credit-card-payment-free-photo-DSC00518-1570x1047.jpg', 'Money and Finance in the 21st century world is a necessary discussion of every AGM...', 'money, century, finance', '4', 'unapproved'),
(17, 12, 'Monetary Policies and Commerce', 'Prof. Sharon Stone', '2019-08-08', 'contactless-credit-card-payment-free-photo-DSC00518-1570x1047.jpg', 'Money inflation can be killed if it really is the problem', 'Monetary Policies and Commerce', '4', 'Published'),
(19, 10, 'Guerrila Science', 'Jerry Eze', '2019-08-10', 'c1.jpg', 'Guerrila warfare can be thought of as a science', 'Science, Military, Geography', '4', 'Unaproved');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `user_role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL,
  `post_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`, `post_content`) VALUES
(1, 'mikolo', '', '123', 'Michael', 'John', 'tab@aol.com', 'p5.png', 'user', '', ''),
(2, 'bisihat77', '', 'etts', 'Bisola', 'Adebola', 'bis@aol.com', 'b5.jpg', 'user', '', ''),
(3, 'jk', '', '7gg', 'Jekemi', 'Philips', 'abe54@yahoo.com', '404.png', 'user', '', ''),
(4, 'jerearmy', '', 'arr', 'David', 'Bellspot', 'hatty@gmail.com', 'b4.jpg', 'admin', '', ''),
(6, 'jetbag', '', 'jjn', 'Eze ', 'Obiora', 'ezestic@$yahoo.com', '12.jpg', 'admin', '', ''),
(7, 'tobs', '', '', 'Toba', 'Ibijobi', 'tob@aol.com', 'teams2.jpg', 'admin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`) VALUES
(1, 'mikolo', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 'mikolo', '202cb962ac59075b964b07152d234b70'),
(6, 'mikolo', '202cb962ac59075b964b07152d234b70'),
(7, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(9, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(10, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(11, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(12, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, 'mikolo', '202cb962ac59075b964b07152d234b70'),
(14, 'mikolo', '202cb962ac59075b964b07152d234b70'),
(15, 'mikolo', '202cb962ac59075b964b07152d234b70'),
(16, 'mikolo', '202cb962ac59075b964b07152d234b70'),
(17, 'mikolo', '202cb962ac59075b964b07152d234b70'),
(18, 'mikolo', '202cb962ac59075b964b07152d234b70'),
(19, 'mikolo', '202cb962ac59075b964b07152d234b70'),
(20, 'mikolo', '202cb962ac59075b964b07152d234b70'),
(21, 'mikolo', '202cb962ac59075b964b07152d234b70'),
(22, 'bisihat77', '4f53d74caece16d2d6e625a88c1c6e53'),
(23, 'bisihat77', '4f53d74caece16d2d6e625a88c1c6e53'),
(24, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(25, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(26, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(27, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(28, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(29, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(30, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(31, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(32, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(33, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(34, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(35, 'mikolo', '202cb962ac59075b964b07152d234b70'),
(36, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(37, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(38, 'mikolo', '202cb962ac59075b964b07152d234b70'),
(39, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(40, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(41, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(42, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(43, '', '1679091c5a880faf6fb5e6087eb1b2dc'),
(44, '', '1679091c5a880faf6fb5e6087eb1b2dc'),
(45, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(46, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(47, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(48, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(49, '', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
