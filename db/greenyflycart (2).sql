-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2025 at 02:50 PM
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
-- Database: `greenyflycart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `addr` text DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `destination` varchar(5000) DEFAULT NULL,
  `img` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `password`, `created_at`, `addr`, `latitude`, `longitude`, `company`, `phone`, `destination`, `img`) VALUES
(1, 'sushant kumar', 'sk3986599@gmail.com', '$2y$10$oXWJLp0MWULgBA.uHQsWmunWvtbujKgQDOufhdjDxcX2crCyvfjlq', '2025-04-20 19:25:02', '324 shibbanpura ghaziabad', '0', '0', NULL, '7827307281', 'Project manager', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'sushant kumar', 'sk3986599@gmail.com', 'plant', 'huhiu'),
(2, 'sushant kumar', 'sk3986599@gmail.com', 'plant', 'huhiu'),
(3, 'sushant kumar', 'sk3986599@gmail.com', 'plant', 'huxhsaudas'),
(4, 'sushant kumar', 'sk3986599@gmail.com', 'plant', 'huxhsaudas'),
(5, 'sushant kumar', 'sk3986599@gmail.com', 'plant', 'hxusah'),
(6, 'sushant kumar', 'sk3986599@gmail.com', 'plant', 'huihuh'),
(7, 'parveen', 'pr3986599@gmail.com', 'plantjcijis', 'cicjijciid'),
(8, 'parveen', 'pr3986599@gmail.com', 'plantjcijis', 'cicjijciid'),
(9, 'parveen', 'pr3986599@gmail.com', 'plantjcijis', 'cicjijciid'),
(10, 'parveen', 'pr3986599@gmail.com', 'plantjcijis', 'cicjijciid'),
(11, 'sushant kumar', 'sk3986599@gmail.com', 'plant', 'xahsdha'),
(12, 'sushant kumar', 'sk3986599@gmail.com', 'plant', 'xahsdha'),
(13, 'sushant kumar', 'sk3986599@gmail.com', 'plant', 'xahsdha'),
(14, 'sushant kumar', 'sk3986599@gmail.com', 'plant', 'ftftftyftfyt'),
(15, 'golu', 'nagixjisa@gmail.com', 'plant', 'jcijdiojidjiv'),
(16, 'DEVSHIVAM07@EMAIL.COM', 'DEVSHIVAM07@EMAIL.COM', 'testing', 'HUDHSIUHCUS');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(20) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `open_hours` varchar(200) NOT NULL,
  `happy_hours` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `address`, `phone`, `email`, `open_hours`, `happy_hours`) VALUES
(1, 'dilshad garden', '7827307281', 'sk@gmail.com', 'Mon - Sun: 8 AM to 9 PM', ' Sat: 2 PM to 4 PM'),
(2, 'dilshad garden', '7827307281', 'sk@gmail.com', 'Mon - Sun: 8 AM to 9 PM', ' Sat: 2 PM to 4 PM'),
(3, '679, Vaishali Extension, Sector 16, Vasundhara, Ghaziabad, Uttar Pradesh 201012', ' 9310705662', 'greenyflycart@gmail.com', 'Mon - Fri: 8 AM to 9 PM', 'Sat - Sun: 9 AM to 5 PM');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `delivery_charge` decimal(10,2) NOT NULL,
  `order_notes` varchar(5000) NOT NULL,
  `sub_total` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_date`, `total_amount`, `delivery_charge`, `order_notes`, `sub_total`) VALUES
(29, 15, '2025-04-20 10:20:22', 334.00, 100.00, '', '234'),
(30, 16, '2025-04-20 19:40:09', 518.00, 50.00, '', '468'),
(31, 16, '2025-04-20 19:44:56', 518.00, 50.00, '', '468'),
(34, 16, '2025-04-20 22:19:17', 284.00, 50.00, '', '234'),
(35, 16, '2025-04-20 22:41:11', 284.00, 50.00, '', '234'),
(36, 16, '2025-04-21 02:15:12', 284.00, 50.00, '', '234'),
(37, 15, '2025-04-21 02:20:33', 334.00, 100.00, '', '234'),
(38, 16, '2025-04-24 12:29:09', 1284.00, 50.00, '', '1234'),
(39, 16, '2025-04-27 05:02:38', 2050.00, 50.00, '', '2000'),
(41, 18, '2025-04-30 18:30:38', 2100.00, 100.00, '', '2000'),
(42, 19, '2025-05-01 11:40:08', 2150.00, 150.00, '', '2000'),
(43, 20, '2025-05-02 12:13:52', 650.00, 150.00, '', '500'),
(45, 23, '2025-08-03 02:38:48', 1100.00, 100.00, '', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(30, 29, 17, 1, 234.00),
(31, 30, 17, 2, 234.00),
(32, 31, 17, 2, 234.00),
(33, 34, 17, 1, 234.00),
(34, 35, 17, 1, 234.00),
(35, 36, 17, 1, 234.00),
(36, 37, 17, 1, 234.00),
(37, 38, 24, 2, 500.00),
(38, 38, 17, 1, 234.00),
(39, 39, 22, 1, 2000.00),
(41, 41, 22, 1, 2000.00),
(42, 42, 22, 1, 2000.00),
(43, 43, 24, 1, 500.00),
(44, 45, 24, 2, 500.00);

-- --------------------------------------------------------

--
-- Table structure for table `plant_categories`
--

CREATE TABLE `plant_categories` (
  `id` int(11) NOT NULL,
  `p_cat` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_cat` varchar(50) NOT NULL,
  `p_description` varchar(500) NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `p_price` int(11) NOT NULL,
  `action` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_name`, `p_cat`, `p_description`, `p_img`, `p_price`, `action`) VALUES
(1, 'sushant', 'frontend', 'jihichoic', 'uploaded_image/36.jpg', 300, 0),
(2, 'alovera', 'Indoor', 'hichwoic', 'uploaded_image/11.jpg', 200, 0),
(8, 'Aloe Vera', 'plants', 'ncdncndnc', 'uploaded_image/11.jpg', 200, 1),
(16, 'plants', 'Outdoor', 'Plants are crucial to life on Earth because they provide food, medicine, and other material resources. They also produce oxygen and create soils that release nutrients. ', 'uploaded_image/9.jpg', 200, 1),
(17, 'plants', 'Flower', 'Plants are crucial to life on Earth because they provide food, medicine, and other material resources. They also produce oxygen and create soils that release nutrients. ', 'uploaded_image/12.jpg', 234, 0),
(22, 'new ', 'Office', 'office plant', 'uploaded_image/46.png', 2000, 1),
(23, 'taniya', 'Flower', 'this is goog plants', 'uploaded_image/13.jpg', 2000, 0),
(24, 'flower', 'Flower', 'good', 'uploaded_image/WhatsApp Image 2025-04-23 at 01.17.10_1327845d.jpg', 500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `addr` mediumtext NOT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `company` varchar(4000) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `created_at`, `addr`, `latitude`, `longitude`, `company`, `phone`) VALUES
(15, 'taniya', 'tanu@gmail.com', '$2y$10$ofoO17ZKa4lGoPo84L4jCO.CylcTbxlK2.OHst.4V86mCIVH9c8iS', '2025-04-20 08:19:44', '324 shibbanpura ghaziabad', 28.676663, 77.423123, '', ''),
(16, 'golu', 'golu@gmail.com', '$2y$10$MCoSF85W3nQlN6A9m7EMo.meB.2FMc2GUkZYpPA5IhITj9FTFUr2.', '2025-04-20 17:32:31', '324 shibbanpura ghaziabad', 28.657438, 77.351242, '', '7827307281'),
(18, 'amit kumar', 'amit@gmail.com', '$2y$10$7MIWBhkXTadMzg9xSh8RaOsFRbPkuVcPNAy9B7Me5DvnF7s4CIIJG', '2025-04-30 12:59:04', 'shibbanpura gzb', 28.676582, 77.423164, '', '7065983865'),
(19, 'ajay', 'ajay@gmail.com', '$2y$10$5jZ.wXchQH/N41PH9TpAZOr7APkzKLxkyIFbzyTdZK81EwIqIK0Yu', '2025-05-01 06:09:20', 'root', 28.725096, 77.472999, '', '07065983865'),
(20, 'ankush', 'ankush@gmail.com', '$2y$10$ID1Vjf/2YupWJWy02CULte68F3ml6/4y2b.maiMDMezyQQBFxoqby', '2025-05-02 06:42:51', 'Patelnagar gzb', 28.72552, 77.471834, '', '7065983865'),
(23, 'sushant kumar', 'sk3986599@gmail.com', '$2y$10$IiaWd.ea6cs0o1gtRswwAunIqZSI64E27FnqmStmxSfhuLaooDhMC', '2025-08-02 20:31:35', 'Ghaziabad, Uttar Pradesh, 201001, India', 28.676273, 77.4128082, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `plant_categories`
--
ALTER TABLE `plant_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `plant_categories`
--
ALTER TABLE `plant_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
