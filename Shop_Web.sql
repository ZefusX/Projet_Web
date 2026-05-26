-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2026 at 01:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Shop_Web`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `description`, `image`, `price`) VALUES
(1, 'Asahi Super Dry', 'asahi-super-dry', 'Bière japonaise légère avec une finition sèche et fruité. Parfaite en plein été pour profiter de la chaleur et du beau temps.', '../assets/asahi.webp', 12),
(2, 'Budweiser', 'budweiser', 'Bière américaine emblématique au goût doux et très facile à boire. Simple, légère et très populaire pour les soirées entre amis.', '../assets/bud.png', 23),
(3, 'Amsterdam Navigator', 'amsterdam-navigator', 'Bière blonde forte avec un goût plus marqué et une bonne intensité en bouche. Très appréciée pour son côté puissant tout en restant relativement facile à boire.', '../assets/amsterdam.webp', 15),
(4, 'Heineken', 'heineken', 'Bière blonde néerlandaise mondialement connue, au goût léger, équilibré et légèrement amer. Très rafraîchissante, elle est brassée avec des ingrédients simples et naturels, et se consomme facilement en toutes occasions sociales ou festives.', '../assets/heineken.webp', 10),
(5, '8.6', '86', 'Bière blonde forte populaire en Europe, reconnue pour son taux d’alcool élevé et son goût malté plus intense. Accessible et puissante, elle est souvent choisie pour son rapport qualité-prix et son caractère bien marqué.', '../assets/86.png', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'test', '12'),
(2, 'ettt', '12'),
(3, '12', '12'),
(4, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `SLUG` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
