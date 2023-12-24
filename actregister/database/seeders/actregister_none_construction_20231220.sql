-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： db
-- 產生時間： 2023 年 12 月 20 日 15:15
-- 伺服器版本： 10.6.16-MariaDB-1:10.6.16+maria~ubu2004
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ee`
--

--
-- 傾印資料表的資料 `Member`
--

INSERT INTO `Member` (`id`, `UserName`, `Gender`, `email`, `password`, `Mobile`, `Address`, `Birthdate`, `updated_at`, `created_at`) VALUES
(3, 'jiunfeng', 'female', 'marcusbicycle01@gmail.com', '123456789', '0952639963', '台中市南屯區河南路八段', '2015-03-14', '2023-12-14 00:36:28', '2023-12-14 00:36:28'),
(4, 'jiunfeng', 'female', 'marcusbicycle03@gmail.com', '123456789', '0952639963', '台中市南屯區河南路八段', '2015-03-14', '2023-12-14 00:37:10', '2023-12-14 00:37:10'),
(5, 'jiunfeng', 'female', 'marcusbicycle04@gmail.com', '123456789', '0952639963', '台中市南屯區河南路八段', '2015-03-14', '2023-12-14 00:39:09', '2023-12-14 00:39:09'),
(6, 'jiunfeng', 'female', 'marcusbicycle05@gmail.com', '123456789', '0952639963', '台中市南屯區河南路八段', '2015-03-14', '2023-12-14 01:00:33', '2023-12-14 01:00:33'),
(7, 'jiunfeng', 'male', 'marcusbicycl06e@gmail.com', '123456789', '0964854777', '408 rod', '2023-12-05', '2023-12-14 01:02:21', '2023-12-14 01:02:21'),
(8, 'fefef', 'male', 'marcusbicycle@gmail.com', '$2y$12$AAaqkeIOgXU8AGjTgXcEg.TKfmFCqFgB25mfCgaHwX1tw9Iba/aJO', '0987987456', 'ffefevr', '2023-12-15', '2023-12-18 01:19:11', '2023-12-18 01:19:11'),
(9, 'fefef', 'male', '123456@gmail.com', '$2y$12$MDp4VNlrlmp44T1xANJvleR54kKrK6Ko6xqo/XEaOuTLK36yRSpaC', '0963125555', '123456456', '2023-12-07', '2023-12-18 03:35:29', '2023-12-18 03:35:29'),
(10, 'fefef', 'male', 'marcusbicycl123@gmail.com', '$2y$12$qHUkGdyXIM5eIodrTjbW7OAz1qg.KTY6qp/HEbmg1.Gh.n7SmNsvq', '0963125111', '123fe', '2023-11-30', '2023-12-18 03:38:05', '2023-12-18 03:38:05'),
(11, 'fefef', 'male', 'marcusbicycle321@gmail.com', '$2y$12$zR7DWjQyZGkiFN.zR7As7.1fMjTXOoVZa9NXI9p2NqJya3Cv4/hKW', '0963125478', '123156', '2023-12-02', '2023-12-18 03:41:02', '2023-12-18 03:41:02'),
(12, 'fefef', 'male', 'marcusbicycl7777@gmail.com', '$2y$12$anzhtXGJuYf4kYmTI7hsfuCbR3gSEp90uZFT/CNMmgL/ZqpxL2nKK', '0965485477', 'ffefevr', '2023-12-22', '2023-12-18 03:45:31', '2023-12-18 03:45:31'),
(13, 'fefef', 'male', 'marcusbicycle01444@gmail.com', '$2y$12$I5s/u2/RkQ1CxXJ8Jm.6ou.YXIjFTSLvJO2fM1pOZOWsd9oY5.gmO', '0987987456', 'ffefevr', '2023-11-30', '2023-12-18 03:46:48', '2023-12-18 03:46:48'),
(14, '曾子言', 'female', 'bububu@gmail.com', '$2y$12$EjhfAnJnc1IDc4csjY1dG.T6gStXuwQC9qjRQi/yKxLHEx1eM5I4C', '0921754878', '台中市', '2010-06-18', '2023-12-18 03:52:05', '2023-12-18 03:52:05'),
(15, 'marcus', 'male', 'marcusbicycle07e@gmail.com', '$2y$12$CEx/EGaQAvTCxD5bqa2iguEo/H6ndfDl.30iGO2Xif6sssPUvfbni', '0952639963', '408 rod', '2023-12-21', '2023-12-18 04:48:28', '2023-12-18 04:48:28'),
(16, '痞痞蝦', 'male', 'pipi01@gmail.com', '$2y$12$WdsJwtDuWVO8hqCfZmFDUu/g06sTYNXfuPT56ka.o7mJLwBLJ36k2', '0912345678', '台中市南屯區河南路八段', '1987-01-17', '2023-12-20 02:45:57', '2023-12-20 02:45:57');

--
-- 傾印資料表的資料 `News`
--

INSERT INTO `News` (`id`, `title`, `text`, `weights`, `releaseDate`, `created_at`, `updated_at`) VALUES
(1, 'Sample Title 1', 'Sample Content 1', 61, '2023-05-04', '2023-12-20 02:32:01', '2023-12-20 02:32:01'),
(2, 'Sample Title 2', 'Sample Content 2', 82, '2023-08-24', '2023-12-20 02:32:01', '2023-12-20 02:32:01'),
(3, 'Sample Title 3', 'Sample Content 3', 84, '2023-04-05', '2023-12-20 02:32:01', '2023-12-20 02:32:01'),
(4, 'Sample Title 4', 'Sample Content 4', 89, '2023-08-13', '2023-12-20 02:32:01', '2023-12-20 02:32:01'),
(5, 'Sample Title 5', 'Sample Content 5', 32, '2023-03-07', '2023-12-20 02:32:01', '2023-12-20 02:32:01'),
(6, 'Sample Title 6', 'Sample Content 6', 54, '2023-12-20', '2023-12-20 02:32:01', '2023-12-20 02:32:01'),
(7, 'Sample Title 7', 'Sample Content 7', 32, '2023-11-02', '2023-12-20 02:32:01', '2023-12-20 02:32:01'),
(8, 'Sample Title 8', 'Sample Content 8', 41, '2023-04-05', '2023-12-20 02:32:01', '2023-12-20 02:32:01'),
(9, 'Sample Title 9', 'Sample Content 9', 36, '2023-01-24', '2023-12-20 02:32:01', '2023-12-20 02:32:01'),
(10, 'Sample Title 10', 'Sample Content 10', 53, '2023-06-13', '2023-12-20 02:32:01', '2023-12-20 02:32:01');

--
-- 傾印資料表的資料 `orderItems`
--

INSERT INTO `orderItems` (`id`, `ordername`, `price`, `startTime`, `endTime`, `created_at`, `updated_at`) VALUES
(1, '雙塔520', '3600', '2023-12-01 10:40:00', '2024-01-01 10:40:00', NULL, NULL),
(2, '北高360', '2400', '2023-12-20 10:40:00', '2023-12-30 18:00:00', NULL, NULL),
(3, '巔峰武嶺', '800', '2024-01-01 10:00:00', '2024-01-31 18:00:00', NULL, NULL),
(4, '台中騎輪節', '1400', '2023-12-01 10:00:00', '2023-12-09 18:00:00', NULL, NULL);

--
-- 傾印資料表的資料 `QuestionsAnswers`
--

INSERT INTO `QuestionsAnswers` (`id`, `title`, `text`, `creator`, `created_at`, `updated_at`) VALUES
(1, '(1)..HJBJu', 'mNWjsAXF6l5lfzCug81NWL3ENpN7sYGmp1MBraOhWxIbJdXOWO', 'zynnNRVGaW@gmail.com', NULL, NULL),
(2, '(2)..wceKm', 'DgTj64pOtBAMMi5X6owVGZVV8ISnjvp2daofanHc4T6TVPzhsc', 'rUCpvZnTGD@gmail.com', NULL, NULL),
(3, '(3)..wEdYd', 'wtqDaycDzPXCT4isAQcgaxKNjlYdNHrgBpkFJdJmZPUEnnmikK', 'S3jIyKTTbs@gmail.com', NULL, NULL),
(4, '(4)..rCTSL', 'ZpUJXZ2ofa5nUDp8jwrdR74NqQ03cfmeXfvL7MPpy4LBYHzclT', '6WZIp8fROz@gmail.com', NULL, NULL),
(5, '(5)..yU72R', 'HfJCO0H21337BPiufeqoQNw70ecFWyIBBTVzTtUb5LpAcyCLbr', 'GeuUkdva73@gmail.com', NULL, NULL);

--
-- 傾印資料表的資料 `userOrder`
--

INSERT INTO `userOrder` (`id`, `user_id`, `order_id`, `created_at`, `updated_at`) VALUES
(2, 16, 1, NULL, NULL),
(3, 16, 1, NULL, NULL),
(4, 16, 2, NULL, NULL),
(5, 16, 3, NULL, NULL),
(6, 14, 3, NULL, NULL),
(7, 14, 3, NULL, NULL),
(8, 14, 3, NULL, NULL),
(9, 14, 2, NULL, NULL),
(10, 14, 1, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
