-- phpMyAdmin SQL Dump
-- version 5.2.2-dev+20250110.5a10863529
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 12 Jan 2025 pada 04.32
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `civilearn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `courses`
--

CREATE TABLE `courses` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `id_instructor` int NOT NULL,
  `lessons_count` int DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `students_count` int DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL,
  `reviews_count` int DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `original_price` decimal(10,2) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `is_free` tinyint(1) DEFAULT '0',
  `description_short` varchar(255) DEFAULT NULL,
  `description_long` text,
  `description_point1` varchar(255) DEFAULT NULL,
  `description_point2` varchar(255) DEFAULT NULL,
  `description_point3` varchar(255) DEFAULT NULL,
  `description_point4` varchar(255) DEFAULT NULL,
  `description_point5` varchar(255) DEFAULT NULL,
  `description_point6` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `courses`
--

INSERT INTO `courses` (`id`, `title`, `id_instructor`, `lessons_count`, `duration`, `students_count`, `rating`, `reviews_count`, `level`, `price`, `original_price`, `image_url`, `is_free`, `description_short`, `description_long`, `description_point1`, `description_point2`, `description_point3`, `description_point4`, `description_point5`, `description_point6`) VALUES
(1, 'Web Designer', 2, 47, '30h 30m', 40, 4.50, 19, 'All Levels', 0.00, NULL, 'course-img-05.jpg', 1, 'ayam', 'Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam Ayam ', 'poin_1', 'poin_2', 'poin_3', NULL, NULL, NULL),
(2, 'Developer', 2, 47, '30h 30m', 40, 4.50, 19, 'All Levels', 15.00, 20.00, 'course-img-02.jpg', 0, 'bebek', 'bebekbebekbebekbebekbebekbebekbebekbebekbebekbebekbebekbebekbebekbebekbebek', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Cooking', 1, 47, '30h 30m', 40, 4.50, 19, 'All Levels', 15.00, 20.00, 'course-img-03.jpg', 0, 'cacing', 'cacingcacingcacingcacingcacingcacingcacingcacingcacingcacingcacingcacingcacingcacingcacingcacingcacingcacingcacingcacing', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `instructorprofile`
--

CREATE TABLE `instructorprofile` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `students_count` int DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `about` text,
  `courses_available` int DEFAULT NULL,
  `courses_completed` int DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `fb_link` varchar(255) NOT NULL,
  `ig_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `instructorprofile`
--

INSERT INTO `instructorprofile` (`id`, `name`, `role`, `rating`, `students_count`, `email`, `phone`, `about`, `courses_available`, `courses_completed`, `profile_picture`, `fb_link`, `ig_link`, `twitter_link`) VALUES
(1, 'A\'a Farhan', 'StarBoy', 4.5, 200, 'info@website.com', '(123) 23-882-1452', 'Aing Keren', 20, 100, 'aa_farhan.png', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://x.com/'),
(2, 'Sony Aditama', 'Main Developer', 4.5, 200, 'info@website.com', '(123) 23-882-1452', 'Aing Developer', 20, 100, 'mas_soni.jpg', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://x.com/'),
(3, 'Mas Ramadan', 'Pet Master', 4.5, 200, 'info@website.com', '(123) 23-882-1452', 'Aing Pet Mastetr', 20, 100, 'mas_ramadan.jpg', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://x.com/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instructorskills`
--

CREATE TABLE `instructorskills` (
  `id` int NOT NULL,
  `instructor_id` int NOT NULL,
  `skill_id` int NOT NULL,
  `proficiency` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `instructorskills`
--

INSERT INTO `instructorskills` (`id`, `instructor_id`, `skill_id`, `proficiency`) VALUES
(1, 1, 1, 25),
(2, 1, 2, 75),
(3, 1, 3, 50),
(4, 1, 4, 100),
(5, 2, 1, 100),
(6, 2, 2, 100),
(7, 2, 3, 100),
(8, 2, 4, 100),
(9, 3, 1, 50),
(10, 3, 2, 50),
(11, 3, 3, 50),
(12, 3, 4, 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `skills`
--

INSERT INTO `skills` (`id`, `name`) VALUES
(2, 'CSS'),
(1, 'HTML5'),
(3, 'JavaScript'),
(4, 'PHP');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `instructorprofile`
--
ALTER TABLE `instructorprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `instructorskills`
--
ALTER TABLE `instructorskills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructor_id` (`instructor_id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- Indeks untuk tabel `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `instructorprofile`
--
ALTER TABLE `instructorprofile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `instructorskills`
--
ALTER TABLE `instructorskills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `instructorskills`
--
ALTER TABLE `instructorskills`
  ADD CONSTRAINT `instructorskills_ibfk_1` FOREIGN KEY (`instructor_id`) REFERENCES `instructorprofile` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `instructorskills_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
