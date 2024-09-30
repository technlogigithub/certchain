-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2024 at 10:55 AM
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
-- Database: `certchain`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `descrption` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `image`, `descrption`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Strengthening UAE-Africa Trade Relations: Navigating the Investment Boom with Strategic Financial Solutions', '1727636713.webp', '<h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(20, 33, 43); font-size: 28px; font-family: &quot;Polestar Unica77 TT&quot;;\">Strengthening UAE-Africa Trade Relations: Navigating the Investment Boom with Strategic Financial Solutions</h3><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">The United Arab Emirates (UAE) has emerged as a pivotal player in Africa’s economic landscape, with investments soaring to nearly $60 billion over the decade from 2012 to 2022. This remarkable trajectory has positioned the UAE as the fourth-largest investor on the continent, underpinning the growing significance of the UAE-Africa trade corridor in the global economy. This burgeoning relationship was further cemented in 2023 when Abu Dhabi announced a landmark commitment of $4.5 billion towards clean energy initiatives in Africa, marking a significant leap towards sustainable development.</p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">The focus of these investments on critical sectors such as infrastructure, energy, transport, and logistics underscores the strategic importance of this partnership. These sectors are crucial for the economic development of both regions and offer substantial opportunities for businesses engaged in trade. However, navigating the complexities of international trade requires robust financial support and expertise, especially in the dynamic and evolving markets of Africa.</p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">At Synergy Consulting, we understand the intricacies of these trade relations and are poised to support businesses with a comprehensive suite of financial solutions tailored for trade with Africa. Our services are designed to bridge the financial gaps and provide the necessary scaffolding for businesses to thrive in this exciting era of UAE-Africa economic partnership.</p><h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(20, 33, 43); font-size: 28px; font-family: &quot;Polestar Unica77 TT&quot;;\">Our Financial Solutions for UAE-Africa Trade:</h3><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">As consultants, we specialize in advising businesses on a range of crucial trade finance services essential for those engaged in UAE-Africa trade. Our expertise includes:</p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\"></p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">Tailored Trade Finance Solutions:&nbsp;We offer expert advice on personalized trade finance options designed to meet the specific requirements of businesses operating in the UAE-Africa trade corridor. Our recommendations aim to mitigate the inherent risks of international trade, empowering businesses to navigate transactions with confidence.</p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">Working Capital Finance:&nbsp;We provide strategic guidance on securing working capital finance, recognizing its vital importance for the smooth functioning of trading enterprises. Our advice aims to optimize liquidity, supporting timely procurement of goods and fulfillment of orders.</p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">Back-to-Back Letter of Credit (LC):&nbsp;Our consultancy services include expert insights into back-to-back LC arrangements, offering a secure framework for transactions to safeguard the interests of all parties involved. We assist businesses in efficiently managing their trade commitments.</p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">LC Discounting and Confirmation:&nbsp;We advise businesses on optimizing cash flow and minimizing transaction risks through LC discounting and confirmation services. Our recommendations enable businesses to access funds swiftly and reliably, gaining a competitive edge in dynamic markets.</p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\"></p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">Connect with us to receive expert guidance on streamlining your trade finance strategies and unlocking growth opportunities in the UAE-Africa trade landscape</p>', 1, '2024-09-29 13:35:13', '2024-09-30 02:52:54'),
(2, 'According to the Ministerial Decision No. 139 of 2023, The following business activities are considered to be Qualifying Activities doing...', '1727684418.webp', '<h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(20, 33, 43); font-size: 28px; font-family: &quot;Polestar Unica77 TT&quot;;\">Strengthening UAE-Africa Trade Relations: Navigating the Investment Boom with Strategic Financial Solutions</h3><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">The United Arab Emirates (UAE) has emerged as a pivotal player in Africa’s economic landscape, with investments soaring to nearly $60 billion over the decade from 2012 to 2022. This remarkable trajectory has positioned the UAE as the fourth-largest investor on the continent, underpinning the growing significance of the UAE-Africa trade corridor in the global economy. This burgeoning relationship was further cemented in 2023 when Abu Dhabi announced a landmark commitment of $4.5 billion towards clean energy initiatives in Africa, marking a significant leap towards sustainable development.</p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">The focus of these investments on critical sectors such as infrastructure, energy, transport, and logistics underscores the strategic importance of this partnership. These sectors are crucial for the economic development of both regions and offer substantial opportunities for businesses engaged in trade. However, navigating the complexities of international trade requires robust financial support and expertise, especially in the dynamic and evolving markets of Africa.</p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">At Synergy Consulting, we understand the intricacies of these trade relations and are poised to support businesses with a comprehensive suite of financial solutions tailored for trade with Africa. Our services are designed to bridge the financial gaps and provide the necessary scaffolding for businesses to thrive in this exciting era of UAE-Africa economic partnership.</p><h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(20, 33, 43); font-size: 28px; font-family: &quot;Polestar Unica77 TT&quot;;\">Our Financial Solutions for UAE-Africa Trade:</h3><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">As consultants, we specialize in advising businesses on a range of crucial trade finance services essential for those engaged in UAE-Africa trade. Our expertise includes:</p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\"></p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">Tailored Trade Finance Solutions:&nbsp;We offer expert advice on personalized trade finance options designed to meet the specific requirements of businesses operating in the UAE-Africa trade corridor. Our recommendations aim to mitigate the inherent risks of international trade, empowering businesses to navigate transactions with confidence.</p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">Working Capital Finance:&nbsp;We provide strategic guidance on securing working capital finance, recognizing its vital importance for the smooth functioning of trading enterprises. Our advice aims to optimize liquidity, supporting timely procurement of goods and fulfillment of orders.</p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">Back-to-Back Letter of Credit (LC):&nbsp;Our consultancy services include expert insights into back-to-back LC arrangements, offering a secure framework for transactions to safeguard the interests of all parties involved. We assist businesses in efficiently managing their trade commitments.</p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">LC Discounting and Confirmation:&nbsp;We advise businesses on optimizing cash flow and minimizing transaction risks through LC discounting and confirmation services. Our recommendations enable businesses to access funds swiftly and reliably, gaining a competitive edge in dynamic markets.</p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\"></p><p style=\"margin: 20px 0px; padding: 0px; font-family: &quot;Polestar Unica77 TT Light&quot;; font-size: 15px; line-height: 22px; color: rgb(97, 97, 97);\">Connect with us to receive expert guidance on streamlining your trade finance strategies and unlocking growth opportunities in the UAE-Africa trade landscape</p>', 1, '2024-09-30 02:50:18', '2024-09-30 02:52:45');

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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `Subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'tetin', 'test@gmail.com', 'test', 'test', '2024-09-30 03:04:31', '2024-09-30 03:04:31'),
(2, 'name', 'email@gmail.com', 'subject', 'message \r\n\r\nabc', '2024-09-30 03:06:02', '2024-09-30 03:06:02');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'What is Certchain?', ' Certchain is a managed SaaS platform that enables you to verify and monitor your workforce and subcontractors from a single place. Connect your subcontractors and supply chain to your projects in a few clicks and ensure everyone is competent to carry out the role you have allocated them.', 1, '2024-09-29 13:33:41', '2024-09-29 13:33:41'),
(2, 'What is Certchain?', ' Certchain is a managed SaaS platform that enables you to verify and monitor your workforce and subcontractors from a single place. Connect your subcontractors and supply chain to your projects in a few clicks and ensure everyone is competent to carry out the role you have allocated them.', 1, '2024-09-29 13:33:41', '2024-09-29 13:33:41'),
(3, 'What is Certchain?', ' Certchain is a managed SaaS platform that enables you to verify and monitor your workforce and subcontractors from a single place. Connect your subcontractors and supply chain to your projects in a few clicks and ensure everyone is competent to carry out the role you have allocated them.', 1, '2024-09-29 13:33:41', '2024-09-29 13:33:41'),
(4, 'What is Certchain?', ' Certchain is a managed SaaS platform that enables you to verify and monitor your workforce and subcontractors from a single place. Connect your subcontractors and supply chain to your projects in a few clicks and ensure everyone is competent to carry out the role you have allocated them.', 1, '2024-09-29 13:33:41', '2024-09-29 13:33:41'),
(5, 'What is Certchain?', ' Certchain is a managed SaaS platform that enables you to verify and monitor your workforce and subcontractors from a single place. Connect your subcontractors and supply chain to your projects in a few clicks and ensure everyone is competent to carry out the role you have allocated them.', 1, '2024-09-29 13:33:41', '2024-09-29 13:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `gelleries`
--

CREATE TABLE `gelleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gelleries`
--

INSERT INTO `gelleries` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'I Spy With My Little Eye, Something Beginning With A.I.', '1727636428.webp', 1, '2024-09-29 13:30:28', '2024-09-29 13:32:02'),
(2, 'Transforming Construction With Artificial Intelligence', '1727637728.webp', 1, '2024-09-29 13:52:08', '2024-09-29 13:52:08');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_29_135433_create_blogs_table', 1),
(5, '2024_09_29_162941_create_pages_table', 1),
(6, '2024_09_29_165942_create_faqs_table', 2),
(8, '2024_09_29_181702_create_gelleries_table', 3),
(9, '2024_09_30_061236_create_solutions_table', 4),
(10, '2024_09_29_181702_create_gellries_table', 5),
(11, '2024_09_30_050326_create_contacts_table', 5),
(12, '2024_09_30_062842_create_testimonials_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `media` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `type`, `page`, `title`, `media`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'home', 'Banner', 'CERTCHAIN AI', '17276318810.mp4', 'Changing compliance across the built environment, forever', 1, '2024-09-29 11:56:42', '2024-09-29 12:55:25'),
(2, 'home', 'Section', 'Workforce Excellence', '17276326791.webp', '<p> Certchain AI ensures that the people working on your projects are at the highest levels of competency. </p>\r\n<p> Certchain AI is certainty that your built assets are safe from design to operation. </p>', 1, '2024-09-29 11:56:42', '2024-09-29 12:55:25'),
(3, 'home', 'Section2', 'Simplified Risk', '17276327582.webp', '<p>Certchain delivers instant compliance at lower cost over its lifetime than anything available today. With constant training and updates Certchain AI keeps you ahead of regulatory change.</p>', 1, '2024-09-29 11:56:42', '2024-09-29 12:55:25'),
(4, 'home', 'Section3', 'Total Visibility', '17276330493.mp4', '<p>Managing large subcontractor communities and supply chain’s no longer needs to the be complex.</p><p>Certchain links your subcontractors to your projects in seconds, and automatically ensures they meet their contract KPIs.</p>', 1, '2024-09-29 11:56:42', '2024-09-29 12:55:25'),
(5, 'home', 'Section4', 'Verify your workforce in seconds', '17276334474.webp', '<p>Whether you are a client or a contractor, you can onboard and monitor your workforce from anywhere. Audit regulatory actions in real time and report on risks and issues across your portfolio.</p>', 1, '2024-09-29 11:56:42', '2024-09-29 12:55:25'),
(6, 'home', 'Section5', 'Instant Value', '17276343255.webp', '<p>Order now or schedule a call with a Certchain Advisor to learn more.</p>', 1, '2024-09-29 11:56:42', '2024-09-29 12:55:25'),
(7, 'home', 'Section6', 'How it works', '17276337346.webp', '<div class=\"tab-content\" id=\"myTabContent\">\r\n                            <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">\r\n                                <div class=\"tab-content-img\"> <img src=\"assets/img/assign.webp\"> </div>\r\n                            </div>\r\n                            <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">\r\n                                <div class=\"tab-content-img\"> <img src=\"assets/img/Verify.png\"> </div>\r\n                            </div>\r\n                            <div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">\r\n                                <div class=\"tab-content-img\"> <img src=\"assets/img/Monitor.webp\"> </div>\r\n                            </div>\r\n                        </div>\r\n\r\n                        <ul class=\"nav nav-tabs nav-tabs-bottom\" id=\"myTab\" role=\"tablist\">\r\n                            <li class=\"nav-item\" role=\"presentation\">\r\n                                <button class=\"nav-link active\" id=\"home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#home\" type=\"button\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">\r\n                                    <h5> Assign </h5>\r\n                                    <p> Assign workers to projects, link your subcontractors and clients for full visibility\r\n                                        of compliance activities </p>\r\n                                </button>\r\n                            </li>\r\n                            <li class=\"nav-item\" role=\"presentation\">\r\n                                <button class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#profile\" type=\"button\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">\r\n                                    <h5> Verify </h5>\r\n                                    <p> Verify your workforce and supply chain against over 150 digital competency\r\n                                        standards, and custom policies </p>\r\n\r\n                                </button>\r\n                            </li>\r\n                            <li class=\"nav-item\" role=\"presentation\">\r\n                                <button class=\"nav-link\" id=\"contact-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#contact\" type=\"button\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">\r\n                                    <h5> Monitor </h5>\r\n                                    <p> AI continuously monitors, forecasts, alerts, and deals with emerging risks and\r\n                                        issues across all your projects in real-time </p>\r\n                                </button>\r\n                            </li>\r\n                        </ul>', 1, '2024-09-29 11:56:42', '2024-09-29 12:55:25'),
(8, 'home', 'Section7', 'THE CERTCHAIN GUARANTEE', '17276337347.webp', '<h5> Compliance no longer needs to be complex </h5>\r\n							<p> Cost savings of up to 70% on your current practises. </p>\r\n							<p> Complete compliance transparency across your operations. </p>\r\n							<p> Increased productivity with decreased risk. </p>', 1, '2024-09-29 11:56:42', '2024-09-29 12:55:25'),
(17, 'about', 'Banner', 'THE FUTURE OF COMPLIANCE IN THE BUILT ENVIRONMENT', '17276678460.webp', 'Certchain AI is designed to constantly simplify the compliance burden, enabling the industry to maintain the highest standards, no matter the scale.', 1, '2024-09-29 22:14:06', '2024-09-29 22:15:03'),
(18, 'about', 'Section', 'Who we are', '17276678461.webp', '<p>Certchain is a leading applied AI company which focusses on providing specialised AI models to regulated industry.</p><p>The models are designed to simplify the regulatory landscape, manage risk, workforces, and complex supply chains.</p>', 1, '2024-09-29 22:14:06', '2024-09-29 22:15:03'),
(19, 'about', 'Section2', 'What makes us different', '17276678462.webp', '<p>Certchain uses advanced AI to streamline real-time regulatory data verification and certification.</p><p>Our ‘data passports’ ensure constant accuracy, enhancing transparency and trust.</p><p>This supports faster decision-making, improves safety, reduces regulatory risks, and helps achieve carbon net-zero targets by 2050, securing a safer future for all.</p>', 1, '2024-09-29 22:14:06', '2024-09-29 22:15:03'),
(20, 'about', 'Section3', 'Our partners & clients', '17276678463.webp', 'AI is trusted by some of the worlds largest companies to provide accurate, compliance results on complex regulatory projects.', 1, '2024-09-29 22:14:06', '2024-09-29 22:15:03'),
(21, 'about', 'Section4', 'Ethical AI that helps build a better world for future generations', '17276678474.webp', '<p>Certchain’s applied AI solves todays critical challenges so that the built environment is safe for future generations.</p><p>We make sure AI enhances our daily lives whilst ensuring humans remain central to its positive outcomes.</p>', 1, '2024-09-29 22:14:07', '2024-09-29 22:15:04'),
(22, 'about', 'Section5', 'JOIN THE BUILT ENVIRONMENT REVOLUTION', NULL, 'Connect every worker across, every project. Total visibility, guaranteed competency.', 1, '2024-09-29 22:14:07', '2024-09-29 22:15:04'),
(23, 'Clients', 'Banner', 'FOR CLIENTS', '17276791580.webp', 'Real-time execution of duty holder compliance', 1, '2024-09-30 01:22:38', '2024-09-30 01:40:06'),
(24, 'Clients', 'Section', 'Ensure all dutyholder appointments are competent', '17276791581.webp', '<p> Certchain AI guarantees that your regulatory appointments maintain the SKE(B) requirements\r\n                            mandated by CDM2015 and BSA2022. </p>\r\n                        <p> Certchain supports all stages of dutyholder compliance in real-time, giving you instant results.\r\n                        </p>', 1, '2024-09-30 01:22:38', '2024-09-30 01:40:07'),
(25, 'Clients', 'Section2', 'ACCELERATE COMPLIANCE', NULL, 'Remove the pain from competency regulations', 1, '2024-09-30 01:22:38', '2024-09-30 01:40:07'),
(26, 'Clients', 'Section3', 'REDUCE RISK', NULL, 'Know that everyone you have appointed is compliant', 1, '2024-09-30 01:22:38', '2024-09-30 01:40:07'),
(27, 'Clients', 'Section4', 'INCREASE EFFICIENCY', NULL, 'Maintain the highest standards with instant information', 1, '2024-09-30 01:22:38', '2024-09-30 01:40:07'),
(28, 'Clients', 'Section5', 'Manage all your dutyholder compliance from a single place', '17276791585.webp', 'Be fully compliant through all stages of RIBA 2020, CDM2015 and the new Building Safety Act 2022 gateways.', 1, '2024-09-30 01:22:38', '2024-09-30 01:40:07'),
(29, 'Clients', 'Section6', 'Over 150 digitised competency passports', '17276791586.webp', 'Certchain uses advanced AI to streamline real-time regulatory data verification and\r\n                            certification.', 1, '2024-09-30 01:22:38', '2024-09-30 01:40:07'),
(30, 'Clients', 'Section7', 'Get instant performance data across all your projects', '17276791587.webp', '<p> Certchain uses advanced AI to streamline real-time regulatory data verification and\r\n                            certification. </p>\r\n                        <p> Understand where performance and compliance hotspots are, manage risks before they become issues\r\n                        </p>', 1, '2024-09-30 01:22:38', '2024-09-30 01:40:07'),
(31, 'Clients', 'Section8', 'REGULATORY RESILIENCE', '17276791588.webp', 'Certchain is designed to constantly simplify the compliance burden,\r\n                            keeping you ahead of an ever changing landscape', 1, '2024-09-30 01:22:38', '2024-09-30 01:40:07'),
(32, 'Clients', 'Section9', NULL, NULL, NULL, 1, '2024-09-30 01:22:38', '2024-09-30 01:22:38'),
(33, NULL, 'Banner', 'FOR CLIENTS', NULL, 'Real-time execution of duty holder compliance', 1, '2024-09-30 01:38:20', '2024-09-30 01:38:32'),
(34, NULL, 'Section', 'Ensure all dutyholder appointments are competent', NULL, '<p> Certchain AI guarantees that your regulatory appointments maintain the SKE(B) requirements\r\n                            mandated by CDM2015 and BSA2022. </p>\r\n                        <p> Certchain supports all stages of dutyholder compliance in real-time, giving you instant results.\r\n                        </p>', 1, '2024-09-30 01:38:21', '2024-09-30 01:38:32'),
(35, NULL, 'Section2', 'ACCELERATE COMPLIANCE', NULL, 'Remove the pain from competency regulations', 1, '2024-09-30 01:38:21', '2024-09-30 01:38:32'),
(36, NULL, 'Section3', 'REDUCE RISK', NULL, 'Know that everyone you have appointed is compliant', 1, '2024-09-30 01:38:21', '2024-09-30 01:38:32'),
(37, NULL, 'Section4', 'INCREASE EFFICIENCY', NULL, 'Maintain the highest standards with instant information', 1, '2024-09-30 01:38:21', '2024-09-30 01:38:32'),
(38, NULL, 'Section5', 'Manage all your dutyholder compliance from a single place', NULL, 'Be fully compliant through all stages of RIBA 2020, CDM2015 and the new Building Safety Act 2022 gateways.', 1, '2024-09-30 01:38:21', '2024-09-30 01:38:32'),
(39, NULL, 'Section6', 'Over 150 digitised competency passports', NULL, 'Certchain uses advanced AI to streamline real-time regulatory data verification and\r\n                            certification.', 1, '2024-09-30 01:38:21', '2024-09-30 01:38:32'),
(40, NULL, 'Section7', 'Get instant performance data across all your projects', NULL, '<p> Certchain uses advanced AI to streamline real-time regulatory data verification and\r\n                            certification. </p>\r\n                        <p> Understand where performance and compliance hotspots are, manage risks before they become issues\r\n                        </p>', 1, '2024-09-30 01:38:21', '2024-09-30 01:38:32'),
(41, NULL, 'Section8', 'REGULATORY RESILIENCE 2', NULL, 'Certchain is designed to constantly simplify the compliance burden,\r\n                            keeping you ahead of an ever changing landscape', 1, '2024-09-30 01:38:21', '2024-09-30 01:38:32');

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
('RaQJuSVPShwJqx2kxSsoMFkSy8uy9frmJSC77jmE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibm5BR2pwZXlyRkx3OW95UkJGUmIzdUY3UVFaandZTVU2WklEaVVaRyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zb2x1dGlvbi9DbGllbnRzIjt9fQ==', 1727682068),
('U3a59X9K6qGJBtQfa1RYvaFY6cmgXsbOL6ybYGiI', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWWpnTFpuSms5R2RIcHZzejdaS0hyaGVQSVdzbXpiOVRqWW55YlNUVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9hZGQtc29sdXRpb24iO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1727683468);

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Clients', 'Clients', '2024-09-30 01:21:40', '2024-09-30 01:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descrption` varchar(255) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `descrption`, `post`, `name`, `company_name`, `created_at`, `updated_at`) VALUES
(1, '“Certchain AI represents a giant leap forward in the ability to ensure that people working on High-Risk Buildings are competent.', 'CEO', 'Damini Sharma', 'OM Group', '2024-09-30 02:44:37', '2024-09-30 02:44:37'),
(2, '“It is a game changer! For the first time we know that our workers and supply chain are always compliant.', 'CIO', 'Nick Elms,', 'Volker Wessels', '2024-09-30 02:45:24', '2024-09-30 02:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cool Admin', 'admin@gmail.com', NULL, '$2y$12$B5m7JIBIr4iImQkiDTaSi.ZdAwrdxAgQJ5VI..ayG6CBrj1QVkNze', 'user.png', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gelleries`
--
ALTER TABLE `gelleries`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gelleries`
--
ALTER TABLE `gelleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
