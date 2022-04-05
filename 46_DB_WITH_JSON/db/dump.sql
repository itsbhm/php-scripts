-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2022 at 11:26 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(4) NOT NULL,
  `book_name` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`) VALUES
(5, '[\"JavaScript\", \"ES2015\", \"JSON\"]');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` varchar(50) NOT NULL,
  `item_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`) VALUES
('1234', 'KS Spark'),
('4321', 'Electral');

-- --------------------------------------------------------

--
-- Table structure for table `item_codes`
--

CREATE TABLE `item_codes` (
  `item_cid` varchar(255) NOT NULL,
  `item_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_codes`
--

INSERT INTO `item_codes` (`item_cid`, `item_id`) VALUES
('8080', '[\"1234\",\"4321\"]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item_codes`
--
ALTER TABLE `item_codes`
  ADD PRIMARY KEY (`item_cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
