-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2025 at 02:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `image`, `title`, `author`, `price`, `category_id`) VALUES
(1, 'https://m.media-amazon.com/images/I/81F90H7hnML._UF894,1000_QL80_.jpg', 'Atomic Habits', 'James Clear', 359, 1),
(2, 'https://m.media-amazon.com/images/I/61Ij8nLooNL._UF1000,1000_QL80_.jpg', 'The Power of Now\r\n', 'Eckhart Tolle\r\n', 399, 1),
(3, 'https://m.media-amazon.com/images/I/81YJFNc54lL._UF1000,1000_QL80_.jpg', 'Can\'t Hurt Me', 'David Goggins', 399, 1),
(4, 'https://m.media-amazon.com/images/I/71z70m5r7OL.jpg', 'Ego Is the Enemy', 'Ryan Holiday', 449, 1),
(5, 'https://m.media-amazon.com/images/I/71aMS2VSfeL._UF1000,1000_QL80_.jpg', 'The Power of Habit', 'Charles Duhigg', 499, 1),
(6, 'https://m.media-amazon.com/images/I/913A1+rl-gL._UF1000,1000_QL80_.jpg', 'The Four Agreements', 'Miguel Ruiz', 539, 1),
(7, 'https://m.media-amazon.com/images/I/61FXPFVKD6L.jpg', 'Mindset', 'Carol Dweck', 549, 1),
(8, 'https://m.media-amazon.com/images/I/71OVB8HknWL.jpg', '12 Rules for Life', 'Jordan B. Peterson', 599, 1),
(9, 'https://m.media-amazon.com/images/I/61QfKSGnwEL.jpg', 'Essentialism', 'Greg McKeown\r\n', 699, 1),
(10, 'https://m.media-amazon.com/images/I/81YMMMFZkmL._UF1000,1000_QL80_.jpg', 'Getting things Done', 'David Allen', 799, 1),
(11, 'https://m.media-amazon.com/images/I/71XEsXS5RlL._UF894,1000_QL80_.jpg', 'The Psychology of Money', 'Morgan Housel', 399, 2),
(12, 'https://cdn.penguin.co.in/wp-content/uploads/2023/12/9781612681139-1-scaled.jpg', 'Rich Dad Poor Dad', 'Robert T. Kiyosaki', 499, 2),
(13, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7fYfMXpZucMizQYrWgsZb8icfuYOdN8rO1A&s', 'The Intelligent Investor', 'Benjamin Graham', 499, 2),
(14, 'https://m.media-amazon.com/images/I/71nAPgrH3aL._UF894,1000_QL80_.jpg', 'The Compound Effect', 'Darren Hardy', 499, 2),
(15, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWE66q4UDB7tfn_ZaRRTQ1gAy-jRsx6Wi_KA&s', 'Just Keep Buying ', 'Nick Maggiulli', 599, 2),
(16, 'https://m.media-amazon.com/images/I/81H6upa387L.jpg', 'The Unusual Billionaires', 'Saurabh Mukherjea', 799, 2),
(17, 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1733380797i/220458657.jpg', 'The Bewitching', 'Silvia Moreno-Garcia\r\n', 399, 3),
(18, 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1715284121i/211004203.jpg', 'Girl in the Creek\r\n', 'Wendy N. Wagner\r\n', 599, 3),
(19, 'https://m.media-amazon.com/images/I/61EbzHSQ2nL._UF1000,1000_QL80_.jpg', 'The Locked Door', 'Freida McFadden\r\n', 699, 3),
(20, 'https://m.media-amazon.com/images/I/91CzvJEI0RL.jpg', 'One By One', 'Freida McFadden\r\n', 749, 3),
(21, 'https://m.media-amazon.com/images/I/61AOXej00vL._UF1000,1000_QL80_.jpg', 'It', 'Stephen King\r\n', 799, 3),
(22, 'https://m.media-amazon.com/images/I/81g79TTwklL._UF1000,1000_QL80_.jpg', 'Such Quiet Girls\r\n', 'Noelle Ihli\r\n', 899, 3),
(23, 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1747208119i/234025369.jpg', 'Roots & Rubble', 'Kalleigh Royn\r\n', 399, 4),
(24, 'https://m.media-amazon.com/images/I/81Jbny0mANL._UF1000,1000_QL80_.jpg', 'Damsels and Dinosaurs', 'Wren Jones\r\n', 449, 4),
(25, 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1739423545i/219522057.jpg', 'Ten Sleep', 'Belardes Nicholas\r\n', 599, 4),
(26, 'https://cdn.sanity.io/images/3siusw36/production/636c895c3ffe8978c7414bcdd92290a8df97073d-600x912.jpg?auto=format&w=400&fit=scale', 'The Wager', 'David Grann\r\n', 699, 4),
(27, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYypKZigqQlm9PAo5RAOnCbD35wewpmRhBjw&s', 'Soul Machine', 'Jordona Globerman', 899, 4),
(28, 'https://contentcafecloud.baker-taylor.com/Jacket.svc/D65D0665-050A-487B-9908-16E6D8FF5C3E/0064400557/Medium/Empty', 'Charlottes Web', 'E.B. White', 199, 5),
(29, 'https://contentcafecloud.baker-taylor.com/Jacket.svc/D65D0665-050A-487B-9908-16E6D8FF5C3E/0689832133/Medium/Empty', 'Click, Clack, Moo', 'Doreen Cronin', 199, 5),
(30, 'https://contentcafecloud.baker-taylor.com/Jacket.svc/D65D0665-050A-487B-9908-16E6D8FF5C3E/067122350X/Medium/Empty', 'Eloise', 'Kay Thompson', 299, 5),
(31, 'https://contentcafecloud.baker-taylor.com/Jacket.svc/D65D0665-050A-487B-9908-16E6D8FF5C3E/0140564098/Medium/Empty', 'The First Strawberries', 'Joseph Bruchac', 399, 5),
(32, 'https://contentcafecloud.baker-taylor.com/Jacket.svc/D65D0665-050A-487B-9908-16E6D8FF5C3E/0394820371/Medium/Empty', 'The Phantom Tollbooth', 'Norton Juster', 499, 5),
(33, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSGEHx81U5JagGKkr1Z8b_TUdIvV7RLSjSAw&s', 'The Pragmatic Programmer', 'Andy Hunt and Dave Thomas', 999, 6),
(34, 'https://m.media-amazon.com/images/I/91AOF8enwNL.jpg', 'Let Us C', 'Yashavant Kanetkar', 1099, 6),
(35, 'https://m.media-amazon.com/images/I/71iagi1dv-L._UF1000,1000_QL80_.jpg', 'Let Us Python', 'Yashavant Kanetkar', 1599, 6),
(36, 'https://m.media-amazon.com/images/I/61cJkoPvtyL._UF1000,1000_QL80_.jpg', 'Let Us Java', 'Yashavant Kanetkar', 1699, 6),
(37, 'https://m.media-amazon.com/images/I/71T7aD3EOTL._UF350,350_QL50_.jpg', 'The Clean Code', 'Robert Cecil Martin', 1999, 6);

-- --------------------------------------------------------

--
-- Table structure for table `book_categories`
--

CREATE TABLE `book_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_categories`
--

INSERT INTO `book_categories` (`category_id`, `category_name`) VALUES
(1, 'Self Development'),
(2, 'Finance'),
(3, 'Horror Fiction'),
(4, 'Adventure Fiction'),
(5, 'Kid\'s Stories'),
(6, 'Programming');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `transaction_id` varchar(200) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `order_date` date DEFAULT current_date,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `full_name`, `email`, `address`, `book_title`, `quantity`, `transaction_id`, `payment_status`, `order_date`, `amount`) VALUES
(3, 'Shivam Gupta', 'sanjaysanjuguptasj1980@gmail.com', 'shiv sena office , oppsite vijay sales , suman nagar', 'The Power of Now\r\n', 4, 'T2508212218374761735106', 'PAYMENT_SUCCESS', '2025-08-21', 1696),
(5, 'Shivam Gupta', 'sanjaysanjuguptasj1980@gmail.com', 'shiv sena office , oppsite vijay sales , suman nagar', 'Mindset', 3, 'T2508212220454971735071', 'PAYMENT_SUCCESS', '2025-08-21', 1747),
(7, 'rahul', 'rahulgupta@gmail.com', 'Lal Dongar Streets\r\nSuman Nagar', 'Atomic Habits', 3, 'T2508212229008441735105', 'PAYMENT_SUCCESS', '2025-08-21', 1177),
(10, 'Shivam Gupta', 'sanjaysanjuguptasj1980@gmail.com', 'shiv sena office , oppsite vijay sales , suman nagar', 'Atomic Habits', 1, 'T2508220932517951735114', 'PAYMENT_SUCCESS', '2025-08-22', 459),
(13, 'Shivam Gupta', 'sanjaysanjuguptasj1980@gmail.com', 'shiv sena office , oppsite vijay sales , suman nagar', 'The Psychology of Money', 1, 'T2508221126390621735484', 'PAYMENT_SUCCESS', '2025-08-22', 499),
(14, 'Shivam Gupta', 'sanjaysanjuguptasj1980@gmail.com', 'shiv sena office , oppsite vijay sales , suman nagar', 'Such Quiet Girls\r\n', 1, 'T2508221127020761735163', 'PAYMENT_SUCCESS', '2025-08-22', 999),
(15, 'Shivam Gupta', 'sanjaysanjuguptasj1980@gmail.com', 'shiv sena office , oppsite vijay sales , suman nagar', 'The Power of Now\r\n', 1, 'T2508221129511481735365', 'PAYMENT_SUCCESS', '2025-08-22', 499),
(16, 'Shivam Gupta', 'sanjaysanjuguptasj1980@gmail.com', 'shiv sena office , oppsite vijay sales , suman nagar', 'The Power of Now\r\n', 1, 'T2508221144224011735610', 'PAYMENT_SUCCESS', '2025-08-22', 499),
(17, 'Shivam Gupta', 'sanjaysanjuguptasj1980@gmail.com', 'shiv sena office , oppsite vijay sales , suman nagar', 'Atomic Habits', 3, 'T2508221149074631735320', 'PAYMENT_SUCCESS', '2025-08-22', 1177),
(18, 'Shivam Gupta', 'sanjaysanjuguptasj1980@gmail.com', 'shiv sena office , oppsite vijay sales , suman nagar', 'The Power of Now\r\n', 1, 'T2508221646220101735168', 'PAYMENT_SUCCESS', '2025-08-22', 499),
(19, 'Shivam Gupta', 'sanjaysanjuguptasj1980@gmail.com', 'shiv sena office , oppsite vijay sales , suman nagar', 'The Power of Now\r\n', 1, 'T2508221719100201735426', 'PAYMENT_SUCCESS', '2025-08-22', 499);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`full_name`, `email`, `address`, `password`) VALUES
('rahul', 'rahulgupta@gmail.com', 'Lal Dongar Streets\r\nSuman Nagar', '34567'),
('Shivam Gupta', 'sanjaysanjuguptasj1980@gmail.com', 'shiv sena office , oppsite vijay sales , suman nagar', '131105');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `book_categories`
--
ALTER TABLE `book_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `book_categories`
--
ALTER TABLE `book_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `book_categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
