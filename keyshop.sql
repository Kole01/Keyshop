-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 11:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keyshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `prodName` varchar(50) NOT NULL,
  `prodImg` varchar(500) NOT NULL,
  `prodDesc` varchar(500) NOT NULL,
  `prodPrice` decimal(10,0) NOT NULL,
  `prodGenre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prodName`, `prodImg`, `prodDesc`, `prodPrice`, `prodGenre`) VALUES
(1, 'asdasdasdadasd', 'https://gaming-cdn.com/images/products/9665/380x218/ratchet-and-clank-rift-apart-pc-game-steam-europe-cover.jpg?v=1686423600', 'asd', 0, ''),
(2, 'ASdasdasd', 'https://gaming-cdn.com/images/products/14246/380x218/f1-23-champions-edition-champions-edition-pc-game-ea-app-cover.jpg?v=1686423600', 'asdasdasd', 123123, ''),
(3, 'Game', 'https://gaming-cdn.com/images/products/9654/380x218/jagged-alliance-3-pc-game-steam-cover.jpg?v=1686423600', 'asdasdasd', 123, ''),
(4, 'Gane2', 'https://gaming-cdn.com/images/products/13838/380x218/aliens-dark-descent-pc-game-steam-cover.jpg?v=1686423600', 'asdasfas', 1231, ''),
(5, 'Cybernetic Assault', 'https://gaming-cdn.com/images/products/13392/380x218/diablo-iv-xbox-one-xbox-series-x-s-xbox-one-xbox-series-x-s-game-microsoft-store-europe-cover.jpg?v=1686423600', 'Engage in high-octane, futuristic combat as a cybernetically enhanced soldier in this action-packed first-person shooter.', 60, 'Action'),
(6, 'Ninja Fury', 'https://gaming-cdn.com/images/products/13826/380x218/pro-cycling-manager-2023-pc-game-steam-europe-cover.jpg?v=1686423600', 'Unleash your inner ninja and navigate treacherous environments, defeat enemies, and master deadly martial arts techniques in this thrilling action game.', 50, 'Action'),
(7, 'Superhero Showdown', 'https://gaming-cdn.com/images/products/13416/380x218/motogp-23-pc-game-steam-cover.jpg?v=1686423600', 'Assemble your team of superheroes and battle against supervillains in this action-packed game filled with explosive combat and special abilities.', 40, 'Action'),
(8, 'Apocalypse Now', 'https://gaming-cdn.com/images/products/13535/380x218/the-sims-4-growing-together-pc-mac-game-origin-cover.jpg?v=1686423600', 'Survive in a post-apocalyptic world filled with danger and chaos, scavenge for resources, and battle against hostile factions in this action RPG.', 50, 'Action'),
(9, 'Street Brawler', 'https://gaming-cdn.com/images/products/9143/380x218/star-wars-jedi-survivor-pc-game-origin-cover.jpg?v=1686423600', 'Step into the gritty underworld of street fighting, learn powerful combat moves, and rise through the ranks to become the ultimate brawler.', 30, 'Action'),
(10, 'Shadow Assassin', 'https://gaming-cdn.com/images/products/14052/380x218/crusader-kings-iii-tours-and-tournaments-pc-mac-game-steam-cover.jpg?v=1686423600', 'Become a stealthy assassin and take on dangerous missions in the shadows, using your agility and cunning to eliminate targets silently.', 40, 'Action'),
(11, 'Space Odyssey', 'https://gaming-cdn.com/images/products/2876/380x218/flashing-lights-police-fire-ems-pc-mac-game-steam-cover.jpg?v=1651675410', 'Embark on an epic space adventure and explore distant galaxies in this thrilling action-packed game.', 50, 'Adventure'),
(12, 'Fantasy Quest', 'https://gaming-cdn.com/images/products/14049/380x218/above-snakes-pc-game-steam-cover.jpg?v=1685027053', 'Enter a magical world filled with mythical creatures and embark on a quest to save the kingdom from an ancient evil.', 40, 'Adventure'),
(13, 'Mystic Dungeon', 'https://gaming-cdn.com/images/products/13847/380x218/cities-skylines-content-creator-pack-shopping-malls-mac-pc-game-steam-cover.jpg?v=1679501724', 'Delve into the depths of a mysterious dungeon, solve challenging puzzles, and uncover ancient secrets in this captivating RPG.', 50, 'Adventure'),
(14, 'Jungle Explorer', 'https://gaming-cdn.com/images/products/6745/380x218/boundary-pc-game-steam-cover.jpg?v=1681826585', 'Embark on a thrilling expedition through dense jungles, encounter wild animals, and discover hidden treasures in this exciting adventure game.', 30, 'Adventure'),
(15, 'Lost World', 'https://gaming-cdn.com/images/products/13613/380x218/the-last-of-us-part-i-digital-deluxe-edition-digital-deluxe-edition-pc-game-steam-cover.jpg?v=1683292275', 'Find yourself stranded on a forgotten island, survive against the elements, and unravel the secrets of the ancient civilization that once thrived there.', 60, 'Adventure'),
(16, 'Pirates Legacy', 'https://gaming-cdn.com/images/products/14284/380x218/f1-manager-2023-deluxe-edition-deluxe-edition-pc-game-steam-europe-cover.jpg?v=1686326036', 'Sail the high seas, engage in naval battles, and search for buried treasure as you embrace the life of a pirate in this swashbuckling adventure.', 40, 'Adventure'),
(17, 'Empire Builder', 'https://gaming-cdn.com/images/products/13386/380x218/hogwarts-legacy-deluxe-edition-xbox-one-xbox-series-x-s-deluxe-edition-xbox-series-x-s-xbox-one-game-microsoft-store-cover.jpg?v=1683624318', 'Build and expand your empire, manage resources, and conquer new territories in this immersive strategy game.', 50, 'Strategy'),
(18, 'Civilization Revolution', 'https://gaming-cdn.com/images/products/13421/380x218/undisputed-pc-game-steam-cover.jpg?v=1684164691', 'Lead your civilization from ancient times to the modern era, make critical decisions, and outmaneuver rival nations in this epic strategy game.', 40, 'Strategy'),
(19, 'Tactical Warfare', 'https://gaming-cdn.com/images/products/14269/380x218/the-elder-scrolls-online-upgrade-necrom-pc-mac-game-steam-cover.jpg?v=1686041326', 'Take command of an elite squad, plan tactical maneuvers, and engage in intense battles against enemy forces in this realistic strategy game.', 60, 'Strategy'),
(20, 'Kingdom Management', 'https://gaming-cdn.com/images/products/13896/380x218/europa-universalis-iv-domination-pc-game-steam-europe-cover.jpg?v=1684153851', 'Rule and govern a thriving kingdom, make political alliances, and defend against external threats in this intricate strategy simulation.', 30, 'Strategy'),
(21, 'Space Colonization', 'https://gaming-cdn.com/images/products/13303/380x218/cities-skylines-content-creator-pack-map-pack-2-pc-mac-game-steam-cover.jpg?v=1671471873', 'Embark on a mission to colonize new planets, manage resources, and make strategic decisions to ensure the survival and prosperity of your space colony.', 50, 'Strategy'),
(22, 'War Tactics', 'https://gaming-cdn.com/images/products/9235/380x218/one-piece-odyssey-pc-game-steam-cover.jpg?v=1673515902', 'Command an army, devise war strategies, and lead your troops to victory in a series of tactical battles in this challenging strategy game.', 40, 'Strategy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userFName` varchar(50) NOT NULL,
  `userLName` varchar(50) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPassword` varchar(50) NOT NULL,
  `userRole` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `userFName`, `userLName`, `userEmail`, `userPassword`, `userRole`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin'),
(3, 'user', 'user', 'user', 'user.user@user.user', 'user123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
