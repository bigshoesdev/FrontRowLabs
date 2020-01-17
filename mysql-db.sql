-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 07:53 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

/* SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; */
AUTOCOMMIT := 0;
START TRANSACTION;
time_zone := "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE comments (
  id int NOT NULL,
  user_id int NOT NULL,
  comment longtext NOT NULL,
  date timestamp(0) NOT NULL DEFAULT current_timestamp()
) ;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE migration (
  version varchar(180) NOT NULL,
  apply_time int DEFAULT NULL
) ;

--
-- Dumping data for table `migration`
--

INSERT INTO migration (version, apply_time) VALUES
('m000000_000000_base', 1569994097),
('m191002_052929_create_users_table', 1569995061);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE users (
  id int NOT NULL,
  name varchar(255) DEFAULT NULL,
  username varchar(255) DEFAULT NULL,
  email varchar(255) DEFAULT NULL,
  phone varchar(255) DEFAULT NULL,
  subject varchar(255) DEFAULT NULL,
  password varchar(255) DEFAULT NULL,
  authKey varchar(255) DEFAULT NULL,
  accessToken varchar(255) DEFAULT NULL,
  rememberMe int DEFAULT NULL,
  message text DEFAULT NULL,
  image_src_filename longtext CHARACTER SET utf8mb4 DEFAULT NULL
) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE comments
  ADD PRIMARY KEY (id);

--
-- Indexes for table `migration`
--
ALTER TABLE migration
  ADD PRIMARY KEY (version);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE comments
  MODIFY id cast(11 as int) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE users
  MODIFY id cast(11 as int) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;