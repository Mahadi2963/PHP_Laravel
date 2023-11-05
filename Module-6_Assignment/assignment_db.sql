-- phpMyAdmin SQL Dump

-- version 5.2.1

-- https://www.phpmyadmin.net/

--

-- Host: 127.0.0.1

-- Generation Time: Nov 05, 2023 at 06:33 PM

-- Server version: 10.4.28-MariaDB

-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

--

-- Database: `assignment_db`

--

-- --------------------------------------------------------

--

-- Table structure for table `categories`

--

CREATE TABLE
    `categories` (
        `category_id` int(11) NOT NULL,
        `name` varchar(255) NOT NULL,
        `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
        `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `categories`

--

INSERT INTO
    `categories` (
        `category_id`,
        `name`,
        `create_time`,
        `update_time`
    )
VALUES (
        1,
        'Fashion',
        '2023-11-05 16:25:08',
        '2023-11-05 16:25:08'
    ), (
        2,
        'Electronics',
        '2023-11-05 16:25:08',
        '2023-11-05 16:25:08'
    ), (
        3,
        'Furniture',
        '2023-11-05 16:25:38',
        '2023-11-05 16:25:38'
    ), (
        4,
        'Cosmetics',
        '2023-11-05 16:25:38',
        '2023-11-05 16:25:38'
    );

-- --------------------------------------------------------

--

-- Table structure for table `customers`

--

CREATE TABLE
    `customers` (
        `customer_id` int(11) NOT NULL,
        `name` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL,
        `location` varchar(255) DEFAULT NULL,
        `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
        `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `customers`

--

INSERT INTO
    `customers` (
        `customer_id`,
        `name`,
        `email`,
        `location`,
        `create_time`,
        `update_time`
    )
VALUES (
        1,
        'Mahadi',
        'mahadi@gmail.com',
        'Cumilla',
        '2023-11-05 16:22:56',
        '2023-11-05 16:22:56'
    ), (
        2,
        'Robin',
        'robin@gmail.com',
        'Feni',
        '2023-11-05 16:22:56',
        '2023-11-05 16:22:56'
    ), (
        3,
        'Raju',
        'raju@gmail.com',
        'Dhaka',
        '2023-11-05 16:24:11',
        '2023-11-05 16:24:11'
    ), (
        4,
        'Injamam',
        'injamam@gmail.com',
        'Meghna',
        '2023-11-05 16:24:11',
        '2023-11-05 16:24:11'
    );

-- --------------------------------------------------------

--

-- Table structure for table `orders`

--

CREATE TABLE
    `orders` (
        `order_id` int(11) NOT NULL,
        `customer_id` int(11) NOT NULL,
        `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
        `total_amount` decimal(10, 2) DEFAULT NULL,
        `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `orders`

--

INSERT INTO
    `orders` (
        `order_id`,
        `customer_id`,
        `order_date`,
        `total_amount`,
        `update_time`
    )
VALUES (
        1,
        1,
        '2023-11-05 17:26:11',
        2000.00,
        '2023-11-05 17:26:11'
    ), (
        2,
        3,
        '2023-11-05 17:26:41',
        300.00,
        '2023-11-05 17:26:41'
    ), (
        3,
        2,
        '2023-11-05 17:28:22',
        150000.00,
        '2023-11-05 17:28:22'
    ), (
        4,
        3,
        '2023-11-05 17:30:09',
        1800.00,
        '2023-11-05 17:30:09'
    );

-- --------------------------------------------------------

--

-- Table structure for table `order_items`

--

CREATE TABLE
    `order_items` (
        `order_item_id` int(11) NOT NULL,
        `order_id` int(11) NOT NULL,
        `product_id` int(11) NOT NULL,
        `quantity` int(11) NOT NULL,
        `unit_price` decimal(10, 2) NOT NULL,
        `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
        `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `order_items`

--

INSERT INTO
    `order_items` (
        `order_item_id`,
        `order_id`,
        `product_id`,
        `quantity`,
        `unit_price`,
        `create_time`,
        `update_time`
    )
VALUES (
        1,
        1,
        1,
        1,
        2000.00,
        '2023-11-05 17:27:33',
        '2023-11-05 17:27:33'
    ), (
        2,
        2,
        6,
        1,
        300.00,
        '2023-11-05 17:27:48',
        '2023-11-05 17:27:48'
    ), (
        3,
        3,
        5,
        1,
        150000.00,
        '2023-11-05 17:28:45',
        '2023-11-05 17:28:45'
    ), (
        4,
        4,
        7,
        1,
        1800.00,
        '2023-11-05 17:30:32',
        '2023-11-05 17:30:32'
    );

-- --------------------------------------------------------

--

-- Table structure for table `products`

--

CREATE TABLE
    `products` (
        `product_id` int(11) NOT NULL,
        `name` varchar(255) NOT NULL,
        `description` text DEFAULT NULL,
        `price` decimal(10, 2) NOT NULL,
        `category_id` int(11) NOT NULL,
        `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
        `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `products`

--

INSERT INTO
    `products` (
        `product_id`,
        `name`,
        `description`,
        `price`,
        `category_id`,
        `create_time`,
        `update_time`
    )
VALUES (
        1,
        'Shirt',
        'Formal Men\'s Shirt',
        2000.00,
        1,
        '2023-11-05 16:28:35',
        '2023-11-05 16:28:35'
    ), (
        2,
        'Pant',
        'Formal Men\'s pant',
        1800.00,
        1,
        '2023-11-05 16:28:35',
        '2023-11-05 16:28:35'
    ), (
        3,
        'Bed',
        'Double Bed',
        30000.00,
        3,
        '2023-11-05 16:30:52',
        '2023-11-05 16:30:52'
    ), (
        4,
        'Almirah',
        'Three door Almirah',
        40000.00,
        3,
        '2023-11-05 16:30:52',
        '2023-11-05 16:30:52'
    ), (
        5,
        'Smart Phone',
        'iPhone 15 Pro Max',
        150000.00,
        2,
        '2023-11-05 16:33:11',
        '2023-11-05 16:33:11'
    ), (
        6,
        'Headphone',
        'DM-10 Gaming',
        300.00,
        2,
        '2023-11-05 16:33:11',
        '2023-11-05 16:33:11'
    ), (
        7,
        'Shampoo',
        'Dove Shampoo Large',
        1800.00,
        4,
        '2023-11-05 16:33:53',
        '2023-11-05 16:33:53'
    );

--

-- Indexes for dumped tables

--

--

-- Indexes for table `categories`

--

ALTER TABLE `categories` ADD PRIMARY KEY (`category_id`);

--

-- Indexes for table `customers`

--

ALTER TABLE `customers` ADD PRIMARY KEY (`customer_id`);

--

-- Indexes for table `orders`

--

ALTER TABLE `orders`
ADD
    PRIMARY KEY (`order_id`),
ADD
    KEY `customer_id` (`customer_id`);

--

-- Indexes for table `order_items`

--

ALTER TABLE `order_items`
ADD
    PRIMARY KEY (`order_item_id`),
ADD
    KEY `order_id` (`order_id`),
ADD
    KEY `product_id` (`product_id`);

--

-- Indexes for table `products`

--

ALTER TABLE `products`
ADD
    PRIMARY KEY (`product_id`),
ADD
    KEY `category_id` (`category_id`);

--

-- AUTO_INCREMENT for dumped tables

--

--

-- AUTO_INCREMENT for table `categories`

--

ALTER TABLE
    `categories` MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 5;

--

-- AUTO_INCREMENT for table `customers`

--

ALTER TABLE
    `customers` MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 5;

--

-- AUTO_INCREMENT for table `orders`

--

ALTER TABLE
    `orders` MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 5;

--

-- AUTO_INCREMENT for table `order_items`

--

ALTER TABLE
    `order_items` MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 5;

--

-- AUTO_INCREMENT for table `products`

--

ALTER TABLE
    `products` MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 8;

--

-- Constraints for dumped tables

--

--

-- Constraints for table `orders`

--

ALTER TABLE `orders`
ADD
    CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--

-- Constraints for table `order_items`

--

ALTER TABLE `order_items`
ADD
    CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
ADD
    CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--

-- Constraints for table `products`

--

ALTER TABLE `products`
ADD
    CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;