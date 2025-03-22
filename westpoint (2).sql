-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2025 at 08:39 AM
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
-- Database: `westpoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `house_number` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `address`, `street`, `house_number`, `barangay`, `city`, `province`, `postal_code`, `country`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'R. enerio', '0544', 'Dampas', 'TAGBILARAN CITY', 'BOHOL', '6300', 'Philippines', '2025-02-23 18:18:14', '2025-02-23 18:18:14'),
(2, 2, NULL, 'PUROK', '3', 'Dampas', 'TAGBILARAN CITY', 'BOHOL', '6300', 'Philippines', '2025-03-21 22:08:21', '2025-03-21 22:08:21');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@wespoint.wpi', '$2y$12$MxORv6k0wUQfIIGvCUgTp.jt3rvSeXoJFaMR.msv4bKT8Napy/IHa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `adones`
--

CREATE TABLE `adones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adones`
--

INSERT INTO `adones` (`id`, `image`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'post/l6cE6LzBRlmfY2BeU07gcTzaTBV80bZzEm3yKohI.png', 'why us', '2025-02-23 18:24:32', '2025-02-23 18:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `adthrees`
--

CREATE TABLE `adthrees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adtwos`
--

CREATE TABLE `adtwos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adtwos`
--

INSERT INTO `adtwos` (`id`, `image`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'post/7GldYDC8fPrJSUbWc4Igc5jQu4k2V2yoWdZr4zOx.jpg', 'about', '2025-02-23 18:26:52', '2025-02-23 18:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `created_at`, `updated_at`) VALUES
(7, 'Generic', '2025-02-18 16:48:42', '2025-02-18 16:48:42'),
(8, 'Wespoint', '2025-02-19 21:24:41', '2025-02-19 21:24:41'),
(9, 'Xentra', '2025-02-19 22:37:38', '2025-02-19 22:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Pain Reliever', '2025-02-23 18:29:46', '2025-02-23 18:29:46'),
(2, 'Analegic', '2025-02-23 18:29:49', '2025-02-23 18:29:49'),
(3, 'Alerest', '2025-02-23 18:29:52', '2025-02-23 18:29:52'),
(4, 'Antihistamine', '2025-02-23 18:29:55', '2025-02-23 18:29:55'),
(5, 'Antibacterial', '2025-02-23 18:30:01', '2025-02-23 18:30:01'),
(6, 'Angiotensin', '2025-02-23 18:30:05', '2025-02-23 18:30:05'),
(8, 'Adrenoceptor Agonist', '2025-02-23 18:35:02', '2025-02-23 18:35:02'),
(9, 'Nasal Spray', '2025-02-23 18:38:03', '2025-02-23 18:38:03');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `image`, `name`, `position`, `created_at`, `updated_at`) VALUES
(1, 'members/QEBstUmU9ZcFke57rCf9Q8rlMGp58CMXTvvn8r0E.jpg', 'Peter', 'IT Staff', '2025-02-23 18:23:38', '2025-02-23 18:23:38'),
(2, 'members/AvEIz3YpizhhZIU2athwXx1nUWy3SkCwBrTm5yQs.jpg', 'Jieryl', 'HR Representative', '2025-02-23 18:23:49', '2025-02-23 18:23:49'),
(3, 'members/702BXcg66JZqyDHN82nX1pnaSGtkd3t3E3NePlmw.png', 'Mike', 'IT Staff', '2025-02-23 18:23:56', '2025-02-23 18:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Earl Mike Hilot Sarabia', 'sarabiaearlmike14@gmail.com', '09925318606', 'Na reset and database', '2025-02-23 18:27:17', '2025-02-23 18:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(73, '0001_01_01_000000_create_users_table', 1),
(74, '0001_01_01_000001_create_cache_table', 1),
(75, '0001_01_01_000002_create_jobs_table', 1),
(76, '2025_02_05_024029_create_products_table', 1),
(77, '2025_02_13_054629_create_admins_table', 1),
(78, '2025_02_17_002901_create_category_table', 1),
(79, '2025_02_17_002913_create_brand_table', 1),
(80, '2025_02_17_002928_create_unit_table', 1),
(81, '2025_02_17_034614_create_categories_table', 1),
(82, '2025_02_18_013118_create_adones_table', 1),
(83, '2025_02_18_013140_create_adtwos_table', 1),
(84, '2025_02_18_013147_create_adthrees_table', 1),
(85, '2025_02_18_014007_create_members_table', 1),
(86, '2025_02_20_015713_create_carts_table', 1),
(87, '2025_02_21_003159_create_orders_table', 1),
(88, '2025_02_21_081533_create_addresses_table', 1),
(89, '2025_02_24_000529_create_messages_table', 1),
(90, '2025_02_24_014651_create_visits_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 2, 'pending', '2025-02-23 18:58:18', '2025-03-21 23:04:54'),
(3, 1, 4, 1, 'approved', '2025-03-21 22:06:42', '2025-03-21 22:53:49'),
(4, 1, 5, 1, 'approved', '2025-03-21 22:06:42', '2025-03-21 22:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `brand`, `price`, `image`, `unit`, `details`, `created_at`, `updated_at`) VALUES
(2, 'SALBUTAMOL 60mL', 'Adrenoceptor Agonist', 'Xentra', NULL, 'product_images/GdtJXDPGXpJdwN4iczO7TEjUNBJcDNZAY8m1vCT0.png', 'ml', 'Salbutamol (also known as albuterol) is a bronchodilator used to treat and prevent conditions that cause airway narrowing (bronchospasm), such as asthma, chronic bronchitis, and chronic obstructive pulmonary disease (COPD).', '2025-02-23 18:36:10', '2025-02-26 21:59:53'),
(3, 'MEFINAMIC ACID 500mg CAPSULE', 'Pain Reliever', 'Xentra', NULL, 'product_images/Q8fovW13FdLGwy0tPaTPmrdSY058VlHoUHAK9WM2.png', 'box', 'Mefenamic acid is a nonsteroidal anti-inflammatory drug (NSAID) used to relieve mild to moderate pain, including menstrual cramps (dysmenorrhea), headaches, muscle pain, dental pain, and arthritis-related pain.', '2025-02-23 18:36:51', '2025-02-23 18:36:51'),
(4, 'GUAIFENESIN+SALBUTAMOL 60mL', 'Adrenoceptor Agonist', 'Xentra', NULL, 'product_images/p2i2eyBd2fouDv4nuHDmO9HMjCOdJ4XCeAtVr2H6.png', 'ml', 'This syrup is a combination medicine used to treat cough with mucus, bronchitis, asthma, and other respiratory conditions where both bronchodilation and mucus clearance are needed.', '2025-02-23 18:37:41', '2025-02-23 18:37:41'),
(5, 'SODIUM CHLORIDE 30mL', 'Nasal Spray', 'Wespoint', NULL, 'product_images/ykbXkE0VQKCUyVPFjLCleIIKjTaDGTStuMKF90wy.png', 'ml', 'Sodium chloride nasal spray is a sterile saline solution used to moisturize, cleanse, and relieve nasal congestion caused by colds, allergies, or dry air. It helps loosen thick mucus and clear nasal passages, making breathing easier.', '2025-02-23 18:38:44', '2025-02-23 18:38:44'),
(6, 'CO-AMOXICLAV 70mL', 'Antibacterial', 'Wespoint', NULL, 'product_images/0VsGHtQO3Vx3M6jXNHoLmCXjSK4c1qg38FBeHmoR.png', 'ml', 'Co-Amoxiclav 70mL Suspension is an antibiotic combining amoxicillin and clavulanic acid to treat bacterial infections like respiratory, urinary, skin, and dental infections. It works by killing bacteria and preventing resistance. Common side effects include diarrhea, nausea, and mild rash. Take with food, shake well before use, and complete the full course for effectiveness.', '2025-02-23 18:39:56', '2025-02-23 18:39:56'),
(7, 'CEFUROXIME 50mL', 'Antibacterial', 'Wespoint', NULL, 'product_images/Ng0K8n6lbo3w6pubt5m2CgIAlqxRmLdjQxpFddjS.png', 'ml', 'Cefuroxime 50mL Suspension is a cephalosporin antibiotic used to treat bacterial infections such as respiratory tract infections, ear infections, urinary tract infections, and skin infections. It works by inhibiting bacterial cell wall formation, effectively stopping bacterial growth. Common side effects include diarrhea, nausea, and mild stomach discomfort. Shake well before use, take with or after food, and complete the full course as prescribed to ensure effectiveness.', '2025-02-23 18:40:47', '2025-02-23 18:40:47'),
(8, 'CETIRIZINE DEHYDROCHLORIDE 10mg TABLET', 'Antihistamine', 'Wespoint', NULL, 'product_images/Cr0GVH6fUKNK6uURMO5r5gzIO4QaLhIkyqTffAZ3.png', 'box', 'Cetirizine Dihydrochloride 10mg Tablet is a **non-drowsy antihistamine** used to relieve **allergy symptoms** such as sneezing, runny nose, itchy or watery eyes, and skin rashes caused by hay fever, urticaria, and other allergic conditions. It works by **blocking histamine**, a substance in the body that triggers allergic reactions. Common side effects include mild drowsiness, dry mouth, and dizziness. It is usually taken once daily, with or without food, as directed by a doctor.', '2025-02-23 18:41:54', '2025-02-23 18:41:54'),
(9, 'LOSARTAN POTASSIUM 50mg TABLET', 'Angiotensin', 'Wespoint', NULL, 'product_images/Z7yDS5e07crUFaZY9mmAmGfuF5LdjvRt1LXcd1Sf.png', 'box', 'Losartan Potassium 50mg Tablet is an **angiotensin II receptor blocker (ARB)** used to treat **high blood pressure (hypertension)** and protect the kidneys in patients with diabetes. It works by **relaxing blood vessels**, improving blood flow, and reducing strain on the heart. This helps lower blood pressure and reduces the risk of stroke and heart-related complications. Common side effects may include dizziness, fatigue, and low blood pressure. It is usually taken once daily, with or without food, as prescribed by a doctor.', '2025-02-23 18:42:30', '2025-02-23 18:42:30'),
(10, 'CETIRIZINE DEHYDROCHLORIDE 60mL', 'Alerest', 'Wespoint', NULL, 'product_images/VNj3k8azS3Qm1fIjwNHxxeMvgHrCjqiaiKAaAoUV.png', 'ml', 'Cetirizine Dihydrochloride 60mL Syrup is an **antihistamine** used to relieve **allergy symptoms** such as sneezing, runny nose, itchy or watery eyes, and skin rashes caused by allergic rhinitis, hay fever, and urticaria. It works by **blocking histamine**, a substance responsible for allergic reactions. This syrup is commonly used in children and adults for fast and long-lasting relief. Possible side effects include mild drowsiness, dry mouth, and dizziness. It is usually taken once daily, with or without food, as directed by a doctor.', '2025-02-23 18:43:21', '2025-02-23 18:43:21'),
(11, 'CETIRIZINE DEHYDROCHLORIDE 15mL', 'Alerest', 'Wespoint', NULL, 'product_images/DojMG5zcJETdxZqNangiypIQiAaWL4drDL1P6yTa.png', 'ml', 'Cetirizine Dihydrochloride 15mL Syrup is an **antihistamine** used to relieve **allergy symptoms** such as sneezing, runny nose, itchy or watery eyes, and skin rashes caused by allergic rhinitis, hay fever, and urticaria. It works by **blocking histamine**, the chemical responsible for allergic reactions. Common side effects include mild drowsiness, dry mouth, and dizziness. It is usually taken once daily, with or without food, as directed by a doctor.', '2025-02-23 18:44:08', '2025-02-23 18:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('a6lHKHl0Ym2FenGQwpvPzpv4MDAoBQaGWOaqQWLR', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiVjB1WFFsZ2xRUkpIaU9YSmFKbFJHNURKbGdDMnJLNlNNbzFNSmZpOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly93ZXNwb2ludC5waGFybWEudGVzdCI7fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1742629115);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit_type`, `created_at`, `updated_at`) VALUES
(3, 'pc', '2025-02-16 23:18:52', '2025-02-16 23:18:52'),
(4, 'box', '2025-02-17 17:13:11', '2025-02-17 17:13:11'),
(5, 'ml', '2025-02-19 21:27:19', '2025-02-19 21:27:19'),
(6, 'mg', '2025-02-19 21:54:51', '2025-02-19 21:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `profile_picture`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Earl Mike', 'Sarabia', '09925318606', 'profile_pictures/tDrpLMCgeqLnyqfvm9kLliciGO3C2GMP9MhY4Sdj.png', 'sarabiaearlmike14@gmail.com', NULL, '$2y$12$jiLcrrzk0Oc7skbc4As9yOj.Pk1J66UgMRhFn2zpp2dXTn401KB/6', NULL, '2025-02-23 18:16:35', '2025-02-26 22:12:44'),
(2, 'Ira Jane', 'Renoblas', '09458129391', NULL, 'irajanerenoblas067@gmail.com', NULL, '$2y$12$K8vgNyJxqLPRxAtDs0E2zO/AE5dV1D7S8bP9Xkvf17Y66nvLLYCMO', NULL, '2025-03-21 22:07:53', '2025-03-21 22:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `visited_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_name_unique` (`name`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `adones`
--
ALTER TABLE `adones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adthrees`
--
ALTER TABLE `adthrees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adtwos`
--
ALTER TABLE `adtwos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brand_brand_name_unique` (`brand_name`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brand_brand_name_unique` (`brand_name`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_name_unique` (`category_name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_category_name_unique` (`category_name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unit_unit_type_unique` (`unit_type`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unit_unit_type_unique` (`unit_type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adones`
--
ALTER TABLE `adones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `adthrees`
--
ALTER TABLE `adthrees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adtwos`
--
ALTER TABLE `adtwos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
