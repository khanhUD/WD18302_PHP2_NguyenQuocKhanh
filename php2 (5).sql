-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 06, 2024 at 07:24 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php2`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role_id` int DEFAULT NULL,
  `status` enum('0','1','-1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `full_name`, `phone_number`, `email`, `password`, `image`, `role_id`, `status`) VALUES
(1, 'Người Dùng 1', '123456789', 'user1@example.com', 'password1', 'khanh.jpg', 1, '1'),
(2, 'Người Dùng 2', '987654321', 'user2@example.com', 'password2', 'user2.jpg', 1, '1'),
(3, 'Người Dùng 3', '555555555', 'user3@example.com', 'password3', 'user3.jpg', 2, '1'),
(4, 'Khanh', '0342585307', 'khanh@gmail.com', 'Khanhonha123', 'khanh.jpg', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `projectparticipation`
--

CREATE TABLE `projectparticipation` (
  `participation_id` int NOT NULL,
  `account_id` int DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projectparticipation`
--

INSERT INTO `projectparticipation` (`participation_id`, `account_id`, `project_id`, `position`) VALUES
(1, 1, 1, 'Quản lý'),
(2, 2, 1, 'Nhân viên giám sát');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('0','1','-1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '0',
  `project_cost` decimal(20,0) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `description`, `start_date`, `end_date`, `status`, `project_cost`, `create_at`) VALUES
(1, 'khanh1', '<p>dsfgdfs</p>', '2024-01-16', '2024-01-10', '1', 34564, '2024-01-31 15:08:19'),
(2, 'khanh2', '<p>dàbzgdf</p>', '2024-01-16', '2024-01-10', '-1', 34564, '2024-01-31 15:43:25'),
(3, 'huhu', '<p>dàbzgdf</p>', '2024-01-16', '2024-01-10', '1', 34564, '2024-01-31 16:35:37'),
(4, 'Dự án xây dựng sân bay FPT', '<p><strong>Mô Tả Dự Án Xây Dựng Sân Bay FPT</strong></p><p>Dự án xây dựng sân bay FPT là một sáng kiến lớn của FPT Corporation, đưa ra nhằm đáp ứng nhu cầu ngày càng tăng về giao thông hàng không và hỗ trợ cho sự phát triển mạnh mẽ của các hoạt động kinh doanh và giáo dục của FPT.</p><p><strong>Mục Tiêu Dự Án:</strong></p><p><strong>Cơ Sở Hạ Tầng Hiện Đại:</strong> Xây dựng một sân bay với cơ sở hạ tầng hiện đại, đảm bảo sự thuận tiện và an toàn cho người đi lại cũng như hàng hóa.</p><p><strong>Hỗ Trợ Hoạt Động Kinh Doanh:</strong> Tạo điều kiện thuận lợi cho các hoạt động kinh doanh của FPT và các đối tác, bao gồm việc hỗ trợ đàm phán kinh doanh, sự kiện quốc tế, và các chuyến công tác của nhân viên.</p><p><strong>Trung Tâm Đào Tạo Hàng Không:</strong> Phát triển một trung tâm đào tạo hàng không chất lượng cao, nhằm đào tạo và nâng cao năng lực của nhân sự hàng không, từ phi công đến các chuyên gia kỹ thuật và quản lý.</p><p><strong>Đặc Điểm Nổi Bật:</strong></p><p><strong>Vị Trí Chiến Lược:</strong> Sân bay được xây dựng tại một vị trí chiến lược, gần các trung tâm kinh tế và công nghiệp, giúp kết nối mạng lưới giao thông và thuận lợi cho việc phục vụ khách hàng.</p><p><strong>Tiêu Chuẩn An Toàn Cao:</strong> Áp dụng các tiêu chuẩn an toàn hàng không cao nhất, bảo đảm an toàn cho hành khách và hàng hóa.</p><p><strong>Tiện Nghi Hiện Đại:</strong> Sân bay FPT được trang bị các tiện nghi hiện đại như khu vực chờ đợi thoải mái, nhà hàng và cửa hàng, cung cấp trải nghiệm tốt nhất cho hành khách.</p><p><strong>Khả Năng Mở Rộng:</strong> Thiết kế với khả năng mở rộng để đáp ứng sự tăng trưởng trong tương lai, đảm bảo sự linh hoạt và bền vững của sân bay.</p><p><strong>Ý Nghĩa và Tầm Nhìn:</strong> Dự án xây dựng sân bay FPT không chỉ là một cơ sở hạ tầng quan trọng mà còn là biểu tượng cho sự đổi mới và phát triển bền vững trong lĩnh vực hàng không. Nó không chỉ tăng cường quyền lực kinh tế mà còn là nền tảng để FPT trở thành một trung tâm hàng không và đào tạo hàng không hàng đầu tại khu vực và trên thế giới.</p>', '2023-12-31', '2024-01-02', '1', 1000000000, '2024-01-31 16:56:00'),
(5, 'Dự án xây biệt thự tesst', '<p>xzcvzxdfvsdf</p>', '2024-02-13', '2024-02-01', '1', 2345646, '2024-02-01 09:58:32'),
(6, '1344', '<p>zfgvzdfgv</p>', '2024-02-16', '2024-02-09', '-1', 2345234, '2024-02-01 10:52:10'),
(7, 'zsdg', '<p>sdfhsdf</p>', '2024-02-13', '2024-02-09', '1', 2456245, '2024-02-01 10:53:04'),
(8, 'zvXDV', '<p>zxfv</p>', '2024-02-05', '2024-02-16', '1', 12345, '2024-02-01 10:56:12'),
(9, 'Dự án xây biệt thự 12', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;DỰ án này khó lắm</p>', '2024-02-08', '2024-02-10', '1', 2345234, '2024-02-02 08:23:12'),
(10, 'dự án test 233', '<p>xfbzdfg</p>', '2024-02-22', '2024-02-08', '-1', 456345, '2024-02-02 08:24:34'),
(11, 'Dự án xây biệt thự 1111', '<p>hihihi</p>', '2024-02-21', '2024-02-21', '1', 12343, '2024-02-02 09:42:33'),
(12, 'Dự án xây biệt thự 1sfgs', '<p>ádfgvzdf</p>', '2024-02-07', '2024-02-08', '0', 1345234, '2024-02-06 18:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int NOT NULL,
  `role_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Giám đốc'),
(3, 'Trường phòng kế hoạch');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int NOT NULL,
  `task_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('0','1','-1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '1',
  `project_id` int DEFAULT NULL,
  `task_content` text COLLATE utf8mb4_general_ci NOT NULL,
  `account_id` int DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `task_name`, `start_date`, `end_date`, `status`, `project_id`, `task_content`, `account_id`, `create_at`) VALUES
(1, 'Giải phóng mặt bằng', '2024-01-31', '2024-02-15', '1', 1, 'Đề nghị 500 anh em đi giải phóng mặt bằng ở khu aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, '2024-02-02 10:15:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `projectparticipation`
--
ALTER TABLE `projectparticipation`
  ADD PRIMARY KEY (`participation_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `tasks_ibfk_1` (`project_id`),
  ADD KEY `tasks_ibfk_3` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `projectparticipation`
--
ALTER TABLE `projectparticipation`
  MODIFY `participation_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

--
-- Constraints for table `projectparticipation`
--
ALTER TABLE `projectparticipation`
  ADD CONSTRAINT `projectparticipation_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `projectparticipation_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`),
  ADD CONSTRAINT `tasks_ibfk_3` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
