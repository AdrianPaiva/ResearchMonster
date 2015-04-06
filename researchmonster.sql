-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2015 at 03:14 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `researchmonster`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_01_30_172846_drop_tables', 1),
('2015_01_30_173242_create_user_table', 1),
('2015_01_30_174615_create_user_profiles', 1),
('2015_01_30_175421_add_userprofile_foreignkey', 1),
('2015_02_12_084922_create_password_reminders_table', 1),
('2015_03_07_232831_create_project_table', 1),
('2015_03_07_234203_create_project_users', 1),
('2015_03_09_232858_create_notifications_table', 1),
('2015_03_13_222434_create_recommended_table', 1),
('2015_03_15_154922_create_skills_table', 1),
('2015_03_15_155107_create_project_skills', 1),
('2015_03_15_155227_create_user_skills', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
`id` int(10) unsigned NOT NULL,
  `project_id` int(10) unsigned DEFAULT NULL,
  `userId` int(10) unsigned NOT NULL,
  `applicantId` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_application` tinyint(1) DEFAULT NULL,
  `accepted_to_project` tinyint(1) DEFAULT NULL,
  `denied_from_project` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `project_id`, `userId`, `applicantId`, `title`, `message`, `project_application`, `accepted_to_project`, `denied_from_project`, `created_at`, `updated_at`) VALUES
(1, 2, 123456789, 12345644, 'User Recommendation', ' Laurence elbo has been recommended by Adrian Researcher for Radio ', NULL, NULL, NULL, '2015-03-28 03:52:46', '2015-03-28 03:52:46'),
(2, 2, 12345644, 12345644, 'Project Recommendation', ' You have been recommended by Adrian Researcher for Radio ', NULL, NULL, NULL, '2015-03-28 03:52:46', '2015-03-28 03:52:46'),
(3, 2, 123456789, 12345645, 'User Recommendation', ' Jimi Hendrix has been recommended by Adrian Researcher for Radio ', NULL, NULL, NULL, '2015-03-28 03:52:46', '2015-03-28 03:52:46'),
(4, 2, 12345645, 12345645, 'Project Recommendation', ' You have been recommended by Adrian Researcher for Radio ', NULL, NULL, NULL, '2015-03-28 03:52:46', '2015-03-28 03:52:46'),
(5, 2, 123456789, 12345644, 'Project Application', 'Laurence elbo has applied to Radio', 1, NULL, NULL, '2015-03-28 03:54:55', '2015-03-28 03:54:55'),
(7, 10, 12345678, 12345645, 'Project Application', 'Jimi Hendrix has applied to XNA Game', 1, NULL, NULL, '2015-04-06 04:48:02', '2015-04-06 04:48:02'),
(8, 10, 12345643, 0, 'Accepted', 'You have been accepted to XNA Game', NULL, 1, NULL, '2015-04-06 04:48:53', '2015-04-06 04:48:53'),
(9, 10, 12345678, 12345642, 'User Recommendation', ' Duane Allman has been recommended by Adrian Researcher for XNA Game ', NULL, NULL, NULL, '2015-04-06 04:49:39', '2015-04-06 04:49:39'),
(10, 10, 12345642, 12345642, 'Project Recommendation', ' You have been recommended by Adrian Researcher for XNA Game ', NULL, NULL, NULL, '2015-04-06 04:49:39', '2015-04-06 04:49:39'),
(11, 10, 12345678, 12345666, 'User Recommendation', ' Patrick student has been recommended by Adrian Researcher for XNA Game ', NULL, NULL, NULL, '2015-04-06 04:49:39', '2015-04-06 04:49:39'),
(12, 10, 12345666, 12345666, 'Project Recommendation', ' You have been recommended by Adrian Researcher for XNA Game ', NULL, NULL, NULL, '2015-04-06 04:49:39', '2015-04-06 04:49:39'),
(13, 10, 12345678, 12345677, 'User Recommendation', ' Adrian Student has been recommended by Adrian Researcher for XNA Game ', NULL, NULL, NULL, '2015-04-06 04:49:39', '2015-04-06 04:49:39'),
(14, 10, 12345677, 12345677, 'Project Recommendation', ' You have been recommended by Adrian Researcher for XNA Game ', NULL, NULL, NULL, '2015-04-06 04:49:39', '2015-04-06 04:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userId` int(10) unsigned NOT NULL,
  `summary` longtext COLLATE utf8_unicode_ci,
  `experience` longtext COLLATE utf8_unicode_ci,
  `attachment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attachmentName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postedBy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `projectPartner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `centre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `userId`, `summary`, `experience`, `attachment`, `attachmentName`, `postedBy`, `projectPartner`, `centre`, `created_at`, `updated_at`) VALUES
(2, 'Radio', 123456789, '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n', NULL, NULL, 'Adrian Paiva', 'Telnet', 'Construction and Engineering Technologies', '2015-03-27 23:17:29', '2015-03-27 23:17:29'),
(3, 'Medical Project', 123456789, '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', NULL, NULL, 'Adrian Paiva', 'Health Canada', 'Health Sciences', '2015-03-28 05:14:35', '2015-03-28 05:14:35'),
(4, 'Photography', 123456789, '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', NULL, NULL, 'Adrian Paiva', 'Nikon', 'Arts and Design', '2015-03-28 05:22:50', '2015-03-28 05:22:50'),
(5, 'Art Project', 123456789, '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', NULL, NULL, 'Adrian Paiva', 'Artists INC', 'Arts and Design', '2015-03-28 05:26:40', '2015-03-28 05:26:40'),
(6, 'Java Website', 12345678, '<p>&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '/uploads/favicon.ico', 'favicon.ico', 'Adrian Researcher', 'IBM', 'Construction and Engineering Technologies', '2015-03-28 05:34:49', '2015-03-28 18:42:46'),
(7, 'Android App', 12345678, '<p><strong>em Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>em Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>em Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '<p><strong>em Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '/uploads/favicon.ico', 'favicon.ico', 'Adrian Researcher', 'Google', 'Construction and Engineering Technologies', '2015-03-28 05:37:11', '2015-03-28 05:37:11'),
(8, 'IOS Game', 12345678, '<p><strong>em Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>em Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '<p><strong>em Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '/uploads/apache_pb.gif', 'apache_pb.gif', 'Adrian Researcher', 'Apple', 'Construction and Engineering Technologies', '2015-03-28 05:39:47', '2015-03-28 05:39:47'),
(9, 'Report Design', 12345678, '<p>Lorem ipsum dolor sit amet, meliore petentium ex quo, verear principes persecuti te pri, mel at erant convenire. Te omnium vidisse aperiri sit, nominati inimicus quo ut. In platonem dignissim sed, soleat apeirian eu vis, ne percipit signiferumque usu. Dolor corpora cum cu, ea saperet oportere quo, mel viris aeterno sensibus no. Graeci doctus nec ea. Epicuri invidunt cu has, solet argumentum in sed. Oratio postulant sea no.</p>\r\n\r\n<p>Sea omnium iracundia ei. Cu usu etiam numquam commune, ut duo amet fugit. No eos dicam ceteros delicata. Per ei legere ridens. Qui te labitur voluptua, ei eos novum persecuti.</p>\r\n\r\n<p>Sit scripta tamquam et. Probo iuvaret maluisset et his. At mel iusto aliquid quaestio, modo noster detraxit vel ut. Ad integre vulputate pro, ei graecis legendos duo. Ne vim unum tempor, at nostrum intellegat vis. Vitae graeco mediocrem eos at, vix an copiosae repudiare definiebas, ea duis oporteat ullamcorper pro. Ullum graece fuisset pro an.</p>\r\n\r\n<p>Cum malorum quaerendum ut, probo inani ei quo. Quo recusabo praesent periculis cu. Ei stet quaeque intellegat sea, et usu alia assueverit dissentiunt. Illum mollis impedit ut eum, nostrum scriptorem cu nec. Mei choro singulis ei, an officiis consequuntur mei. Splendide interpretaris nec eu.</p>\r\n\r\n<p>Cu nec ceteros docendi, amet tation praesent vix in, facer minimum in sea. Nec suas eius persequeris ne, vix id paulo timeam, vis suscipit facilisi ea. Ancillae epicurei iudicabit has ea, an has denique repudiare comprehensam, exerci salutandi sed in. No duo lorem habemus mandamus, at solum fugit concludaturque vel, nec eu natum solum fabulas. Eam tamquam ceteros suavitate ut, ut copiosae praesent vis. Illud accusata intellegebat est et, mea habeo invidunt ullamcorper ex, rebum sonet mediocritatem pri et.</p>\r\n', '<p>Lorem ipsum dolor sit amet, meliore petentium ex quo, verear principes persecuti te pri, mel at erant convenire. Te omnium vidisse aperiri sit, nominati inimicus quo ut. In platonem dignissim sed, soleat apeirian eu vis, ne percipit signiferumque usu. Dolor corpora cum cu, ea saperet oportere quo, mel viris aeterno sensibus no. Graeci doctus nec ea. Epicuri invidunt cu has, solet argumentum in sed. Oratio postulant sea no.</p>\r\n\r\n<p>Sea omnium iracundia ei. Cu usu etiam numquam commune, ut duo amet fugit. No eos dicam ceteros delicata. Per ei legere ridens. Qui te labitur voluptua, ei eos novum persecuti.</p>\r\n\r\n<p>Sit scripta tamquam et. Probo iuvaret maluisset et his. At mel iusto aliquid quaestio, modo noster detraxit vel ut. Ad integre vulputate pro, ei graecis legendos duo. Ne vim unum tempor, at nostrum intellegat vis. Vitae graeco mediocrem eos at, vix an copiosae repudiare definiebas, ea duis oporteat ullamcorper pro. Ullum graece fuisset pro an.</p>\r\n\r\n<p>Cum malorum quaerendum ut, probo inani ei quo. Quo recusabo praesent periculis cu. Ei stet quaeque intellegat sea, et usu alia assueverit dissentiunt. Illum mollis impedit ut eum, nostrum scriptorem cu nec. Mei choro singulis ei, an officiis consequuntur mei. Splendide interpretaris nec eu.</p>\r\n\r\n<p>Cu nec ceteros docendi, amet tation praesent vix in, facer minimum in sea. Nec suas eius persequeris ne, vix id paulo timeam, vis suscipit facilisi ea. Ancillae epicurei iudicabit has ea, an has denique repudiare comprehensam, exerci salutandi sed in. No duo lorem habemus mandamus, at solum fugit concludaturque vel, nec eu natum solum fabulas. Eam tamquam ceteros suavitate ut, ut copiosae praesent vis. Illud accusata intellegebat est et, mea habeo invidunt ullamcorper ex, rebum sonet mediocritatem pri et.</p>\r\n', NULL, NULL, 'Adrian Researcher', 'Microsoft', 'Business', '2015-03-28 18:47:38', '2015-03-28 18:47:38'),
(10, 'XNA Game', 12345678, '<p>Lorem ipsum dolor sit amet, meliore petentium ex quo, verear principes persecuti te pri, mel at erant convenire. Te omnium vidisse aperiri sit, nominati inimicus quo ut. In platonem dignissim sed, soleat apeirian eu vis, ne percipit signiferumque usu. Dolor corpora cum cu, ea saperet oportere quo, mel viris aeterno sensibus no. Graeci doctus nec ea. Epicuri invidunt cu has, solet argumentum in sed. Oratio postulant sea no.</p>\r\n\r\n<p>Sea omnium iracundia ei. Cu usu etiam numquam commune, ut duo amet fugit. No eos dicam ceteros delicata. Per ei legere ridens. Qui te labitur voluptua, ei eos novum persecuti.</p>\r\n\r\n<p>Sit scripta tamquam et. Probo iuvaret maluisset et his. At mel iusto aliquid quaestio, modo noster detraxit vel ut. Ad integre vulputate pro, ei graecis legendos duo. Ne vim unum tempor, at nostrum intellegat vis. Vitae graeco mediocrem eos at, vix an copiosae repudiare definiebas, ea duis oporteat ullamcorper pro. Ullum graece fuisset pro an.</p>\r\n\r\n<p>Cum malorum quaerendum ut, probo inani ei quo. Quo recusabo praesent periculis cu. Ei stet quaeque intellegat sea, et usu alia assueverit dissentiunt. Illum mollis impedit ut eum, nostrum scriptorem cu nec. Mei choro singulis ei, an officiis consequuntur mei. Splendide interpretaris nec eu.</p>\r\n\r\n<p>Cu nec ceteros docendi, amet tation praesent vix in, facer minimum in sea. Nec suas eius persequeris ne, vix id paulo timeam, vis suscipit facilisi ea. Ancillae epicurei iudicabit has ea, an has denique repudiare comprehensam, exerci salutandi sed in. No duo lorem habemus mandamus, at solum fugit concludaturque vel, nec eu natum solum fabulas. Eam tamquam ceteros suavitate ut, ut copiosae praesent vis. Illud accusata intellegebat est et, mea habeo invidunt ullamcorper ex, rebum sonet mediocritatem pri et.</p>\r\n', '<p>Lorem ipsum dolor sit amet, meliore petentium ex quo, verear principes persecuti te pri, mel at erant convenire. Te omnium vidisse aperiri sit, nominati inimicus quo ut. In platonem dignissim sed, soleat apeirian eu vis, ne percipit signiferumque usu. Dolor corpora cum cu, ea saperet oportere quo, mel viris aeterno sensibus no. Graeci doctus nec ea. Epicuri invidunt cu has, solet argumentum in sed. Oratio postulant sea no.</p>\r\n\r\n<p>Sea omnium iracundia ei. Cu usu etiam numquam commune, ut duo amet fugit. No eos dicam ceteros delicata. Per ei legere ridens. Qui te labitur voluptua, ei eos novum persecuti.</p>\r\n\r\n<p>Sit scripta tamquam et. Probo iuvaret maluisset et his. At mel iusto aliquid quaestio, modo noster detraxit vel ut. Ad integre vulputate pro, ei graecis legendos duo. Ne vim unum tempor, at nostrum intellegat vis. Vitae graeco mediocrem eos at, vix an copiosae repudiare definiebas, ea duis oporteat ullamcorper pro. Ullum graece fuisset pro an.</p>\r\n\r\n<p>Cum malorum quaerendum ut, probo inani ei quo. Quo recusabo praesent periculis cu. Ei stet quaeque intellegat sea, et usu alia assueverit dissentiunt. Illum mollis impedit ut eum, nostrum scriptorem cu nec. Mei choro singulis ei, an officiis consequuntur mei. Splendide interpretaris nec eu.</p>\r\n\r\n<p>Cu nec ceteros docendi, amet tation praesent vix in, facer minimum in sea. Nec suas eius persequeris ne, vix id paulo timeam, vis suscipit facilisi ea. Ancillae epicurei iudicabit has ea, an has denique repudiare comprehensam, exerci salutandi sed in. No duo lorem habemus mandamus, at solum fugit concludaturque vel, nec eu natum solum fabulas. Eam tamquam ceteros suavitate ut, ut copiosae praesent vis. Illud accusata intellegebat est et, mea habeo invidunt ullamcorper ex, rebum sonet mediocritatem pri et.</p>\r\n', NULL, NULL, 'Adrian Researcher', 'Microsoft', 'Construction and Engineering Technologies', '2015-03-28 18:50:17', '2015-03-28 18:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `project_recommended_users`
--

CREATE TABLE IF NOT EXISTS `project_recommended_users` (
`id` int(10) unsigned NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `project_recommended_users`
--

INSERT INTO `project_recommended_users` (`id`, `project_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 12345644, '2015-03-28 03:52:46', '2015-03-28 03:52:46'),
(2, 2, 12345645, '2015-03-28 03:52:46', '2015-03-28 03:52:46'),
(3, 10, 12345642, '2015-04-06 04:49:39', '2015-04-06 04:49:39'),
(4, 10, 12345666, '2015-04-06 04:49:39', '2015-04-06 04:49:39'),
(5, 10, 12345677, '2015-04-06 04:49:39', '2015-04-06 04:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `project_skills`
--

CREATE TABLE IF NOT EXISTS `project_skills` (
`id` int(10) unsigned NOT NULL,
  `project_id` int(10) unsigned NOT NULL,
  `skill_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=61 ;

--
-- Dumping data for table `project_skills`
--

INSERT INTO `project_skills` (`id`, `project_id`, `skill_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2015-03-27 22:54:17', '2015-03-27 22:54:17'),
(2, 1, 2, '2015-03-27 22:54:17', '2015-03-27 22:54:17'),
(3, 1, 3, '2015-03-27 22:54:17', '2015-03-27 22:54:17'),
(4, 1, 4, '2015-03-27 22:54:17', '2015-03-27 22:54:17'),
(5, 1, 5, '2015-03-27 22:54:17', '2015-03-27 22:54:17'),
(6, 2, 6, '2015-03-27 23:17:29', '2015-03-27 23:17:29'),
(7, 2, 7, '2015-03-27 23:17:29', '2015-03-27 23:17:29'),
(8, 2, 8, '2015-03-27 23:17:29', '2015-03-27 23:17:29'),
(9, 2, 9, '2015-03-27 23:17:29', '2015-03-27 23:17:29'),
(10, 3, 10, '2015-03-28 05:14:35', '2015-03-28 05:14:35'),
(11, 3, 11, '2015-03-28 05:14:35', '2015-03-28 05:14:35'),
(12, 3, 12, '2015-03-28 05:14:35', '2015-03-28 05:14:35'),
(13, 3, 13, '2015-03-28 05:14:35', '2015-03-28 05:14:35'),
(14, 3, 14, '2015-03-28 05:14:35', '2015-03-28 05:14:35'),
(15, 3, 15, '2015-03-28 05:14:35', '2015-03-28 05:14:35'),
(16, 4, 16, '2015-03-28 05:22:50', '2015-03-28 05:22:50'),
(17, 4, 17, '2015-03-28 05:22:50', '2015-03-28 05:22:50'),
(18, 4, 18, '2015-03-28 05:22:50', '2015-03-28 05:22:50'),
(19, 4, 19, '2015-03-28 05:22:50', '2015-03-28 05:22:50'),
(20, 4, 20, '2015-03-28 05:22:50', '2015-03-28 05:22:50'),
(21, 5, 21, '2015-03-28 05:26:40', '2015-03-28 05:26:40'),
(22, 5, 22, '2015-03-28 05:26:40', '2015-03-28 05:26:40'),
(23, 5, 23, '2015-03-28 05:26:40', '2015-03-28 05:26:40'),
(24, 5, 24, '2015-03-28 05:26:40', '2015-03-28 05:26:40'),
(25, 5, 25, '2015-03-28 05:26:40', '2015-03-28 05:26:40'),
(32, 7, 32, '2015-03-28 05:37:11', '2015-03-28 05:37:11'),
(33, 7, 33, '2015-03-28 05:37:11', '2015-03-28 05:37:11'),
(34, 7, 34, '2015-03-28 05:37:11', '2015-03-28 05:37:11'),
(35, 7, 35, '2015-03-28 05:37:11', '2015-03-28 05:37:11'),
(36, 7, 36, '2015-03-28 05:37:11', '2015-03-28 05:37:11'),
(37, 8, 37, '2015-03-28 05:39:47', '2015-03-28 05:39:47'),
(38, 8, 38, '2015-03-28 05:39:47', '2015-03-28 05:39:47'),
(39, 8, 39, '2015-03-28 05:39:47', '2015-03-28 05:39:47'),
(40, 8, 40, '2015-03-28 05:39:47', '2015-03-28 05:39:47'),
(47, 6, 51, '2015-03-28 18:42:46', '2015-03-28 18:42:46'),
(48, 6, 52, '2015-03-28 18:42:46', '2015-03-28 18:42:46'),
(49, 6, 53, '2015-03-28 18:42:46', '2015-03-28 18:42:46'),
(50, 6, 54, '2015-03-28 18:42:46', '2015-03-28 18:42:46'),
(51, 6, 55, '2015-03-28 18:42:46', '2015-03-28 18:42:46'),
(52, 6, 56, '2015-03-28 18:42:46', '2015-03-28 18:42:46'),
(53, 9, 57, '2015-03-28 18:47:38', '2015-03-28 18:47:38'),
(54, 9, 58, '2015-03-28 18:47:38', '2015-03-28 18:47:38'),
(55, 9, 59, '2015-03-28 18:47:38', '2015-03-28 18:47:38'),
(56, 10, 60, '2015-03-28 18:50:17', '2015-03-28 18:50:17'),
(57, 10, 61, '2015-03-28 18:50:17', '2015-03-28 18:50:17'),
(58, 10, 62, '2015-03-28 18:50:17', '2015-03-28 18:50:17'),
(59, 10, 63, '2015-03-28 18:50:17', '2015-03-28 18:50:17'),
(60, 10, 64, '2015-03-28 18:50:17', '2015-03-28 18:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `project_users`
--

CREATE TABLE IF NOT EXISTS `project_users` (
`id` int(10) unsigned NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `accepted` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `project_users`
--

INSERT INTO `project_users` (`id`, `project_id`, `user_id`, `accepted`, `created_at`, `updated_at`) VALUES
(1, 2, 12345644, 0, '2015-03-28 03:54:55', '2015-03-28 03:54:55'),
(2, 10, 12345643, 1, '2015-04-06 04:46:39', '2015-04-06 04:48:53'),
(3, 10, 12345645, 0, '2015-04-06 04:48:02', '2015-04-06 04:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=88 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'php', '2015-03-27 22:54:17', '2015-03-27 22:54:17'),
(2, 'laravel', '2015-03-27 22:54:17', '2015-03-27 22:54:17'),
(3, 'java', '2015-03-27 22:54:17', '2015-03-27 22:54:17'),
(4, 'mysql', '2015-03-27 22:54:17', '2015-03-27 22:54:17'),
(5, 'oracle db', '2015-03-27 22:54:17', '2015-03-27 22:54:17'),
(6, 'php', '2015-03-27 23:17:29', '2015-03-27 23:17:29'),
(7, 'java', '2015-03-27 23:17:29', '2015-03-27 23:17:29'),
(8, 'mysql', '2015-03-27 23:17:29', '2015-03-27 23:17:29'),
(9, 'c#', '2015-03-27 23:17:29', '2015-03-27 23:17:29'),
(10, 'c#', '2015-03-28 05:14:35', '2015-03-28 05:14:35'),
(11, 'php', '2015-03-28 05:14:35', '2015-03-28 05:14:35'),
(12, 'zend', '2015-03-28 05:14:35', '2015-03-28 05:14:35'),
(13, 'cake php', '2015-03-28 05:14:35', '2015-03-28 05:14:35'),
(14, 'mysql', '2015-03-28 05:14:35', '2015-03-28 05:14:35'),
(15, 'java', '2015-03-28 05:14:35', '2015-03-28 05:14:35'),
(16, 'dslr', '2015-03-28 05:22:50', '2015-03-28 05:22:50'),
(17, 'photoshop', '2015-03-28 05:22:50', '2015-03-28 05:22:50'),
(18, 'illustrator', '2015-03-28 05:22:50', '2015-03-28 05:22:50'),
(19, 'css', '2015-03-28 05:22:50', '2015-03-28 05:22:50'),
(20, 'camera repair', '2015-03-28 05:22:50', '2015-03-28 05:22:50'),
(21, 'css', '2015-03-28 05:26:40', '2015-03-28 05:26:40'),
(22, 'photoshop', '2015-03-28 05:26:40', '2015-03-28 05:26:40'),
(23, 'illustrator', '2015-03-28 05:26:40', '2015-03-28 05:26:40'),
(24, 'drawing', '2015-03-28 05:26:40', '2015-03-28 05:26:40'),
(25, 'painting', '2015-03-28 05:26:40', '2015-03-28 05:26:40'),
(26, 'java', '2015-03-28 05:34:49', '2015-03-28 05:34:49'),
(27, 'css', '2015-03-28 05:34:49', '2015-03-28 05:34:49'),
(28, 'html', '2015-03-28 05:34:49', '2015-03-28 05:34:49'),
(29, 'oracle', '2015-03-28 05:34:49', '2015-03-28 05:34:49'),
(30, 'oop', '2015-03-28 05:34:49', '2015-03-28 05:34:49'),
(31, 'xml', '2015-03-28 05:34:49', '2015-03-28 05:34:49'),
(32, 'android', '2015-03-28 05:37:11', '2015-03-28 05:37:11'),
(33, 'xml', '2015-03-28 05:37:11', '2015-03-28 05:37:11'),
(34, 'java', '2015-03-28 05:37:11', '2015-03-28 05:37:11'),
(35, 'css', '2015-03-28 05:37:11', '2015-03-28 05:37:11'),
(36, 'oop', '2015-03-28 05:37:11', '2015-03-28 05:37:11'),
(37, 'xcode', '2015-03-28 05:39:47', '2015-03-28 05:39:47'),
(38, 'swift', '2015-03-28 05:39:47', '2015-03-28 05:39:47'),
(39, 'objective-c', '2015-03-28 05:39:47', '2015-03-28 05:39:47'),
(40, 'c', '2015-03-28 05:39:47', '2015-03-28 05:39:47'),
(41, 'css', '2015-03-28 05:52:20', '2015-03-28 05:52:20'),
(42, 'php', '2015-03-28 05:52:20', '2015-03-28 05:52:20'),
(43, 'mysql', '2015-03-28 05:52:20', '2015-03-28 05:52:20'),
(44, 'photoshop', '2015-03-28 05:52:20', '2015-03-28 05:52:20'),
(45, 'java', '2015-03-28 18:41:40', '2015-03-28 18:41:40'),
(46, 'css', '2015-03-28 18:41:40', '2015-03-28 18:41:40'),
(47, 'html', '2015-03-28 18:41:40', '2015-03-28 18:41:40'),
(48, 'oracle', '2015-03-28 18:41:40', '2015-03-28 18:41:40'),
(49, 'oop', '2015-03-28 18:41:40', '2015-03-28 18:41:40'),
(50, 'xml', '2015-03-28 18:41:40', '2015-03-28 18:41:40'),
(51, 'java', '2015-03-28 18:42:46', '2015-03-28 18:42:46'),
(52, 'css', '2015-03-28 18:42:46', '2015-03-28 18:42:46'),
(53, 'html', '2015-03-28 18:42:46', '2015-03-28 18:42:46'),
(54, 'oracle', '2015-03-28 18:42:46', '2015-03-28 18:42:46'),
(55, 'oop', '2015-03-28 18:42:46', '2015-03-28 18:42:46'),
(56, 'xml', '2015-03-28 18:42:46', '2015-03-28 18:42:46'),
(57, 'report design', '2015-03-28 18:47:38', '2015-03-28 18:47:38'),
(58, 'writing', '2015-03-28 18:47:38', '2015-03-28 18:47:38'),
(59, 'sql server', '2015-03-28 18:47:38', '2015-03-28 18:47:38'),
(60, 'c#', '2015-03-28 18:50:17', '2015-03-28 18:50:17'),
(61, 'xna', '2015-03-28 18:50:17', '2015-03-28 18:50:17'),
(62, '3d design', '2015-03-28 18:50:17', '2015-03-28 18:50:17'),
(63, 'xml', '2015-03-28 18:50:17', '2015-03-28 18:50:17'),
(64, 'oop', '2015-03-28 18:50:17', '2015-03-28 18:50:17'),
(65, 'photoshop', '2015-04-06 04:59:26', '2015-04-06 04:59:26'),
(66, 'illustrator', '2015-04-06 04:59:26', '2015-04-06 04:59:26'),
(67, 'drawing', '2015-04-06 04:59:26', '2015-04-06 04:59:26'),
(68, 'photoshop', '2015-04-06 04:59:45', '2015-04-06 04:59:45'),
(69, 'illustrator', '2015-04-06 04:59:45', '2015-04-06 04:59:45'),
(70, 'drawing', '2015-04-06 04:59:45', '2015-04-06 04:59:45'),
(71, 'laravel', '2015-04-06 05:02:07', '2015-04-06 05:02:07'),
(72, 'zend', '2015-04-06 05:02:07', '2015-04-06 05:02:07'),
(73, 'php', '2015-04-06 05:02:07', '2015-04-06 05:02:07'),
(74, 'mysql', '2015-04-06 05:02:07', '2015-04-06 05:02:07'),
(75, 'java', '2015-04-06 05:02:07', '2015-04-06 05:02:07'),
(76, 'design', '2015-04-06 05:03:28', '2015-04-06 05:03:28'),
(77, 'art', '2015-04-06 05:03:28', '2015-04-06 05:03:28'),
(78, 'drawing', '2015-04-06 05:03:28', '2015-04-06 05:03:28'),
(79, 'makeup', '2015-04-06 05:03:28', '2015-04-06 05:03:28'),
(80, 'design', '2015-04-06 05:04:01', '2015-04-06 05:04:01'),
(81, 'art', '2015-04-06 05:04:01', '2015-04-06 05:04:01'),
(82, 'drawing', '2015-04-06 05:04:01', '2015-04-06 05:04:01'),
(83, 'makeup', '2015-04-06 05:04:01', '2015-04-06 05:04:01'),
(84, 'design', '2015-04-06 05:04:18', '2015-04-06 05:04:18'),
(85, 'art', '2015-04-06 05:04:18', '2015-04-06 05:04:18'),
(86, 'drawing', '2015-04-06 05:04:18', '2015-04-06 05:04:18'),
(87, 'makeup', '2015-04-06 05:04:18', '2015-04-06 05:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`userId` int(10) unsigned NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=123456790 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `password`, `email`, `confirmed`, `confirmation_code`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(12345642, '$2y$10$/NiWgD4SDMJ3N3AzcmcCuuwul27P7p1ZiMt9vf4OmBzMl9uaRJPea', 'aaaabbad@gmail.com', 1, NULL, 'student', 'EMkFZGnTz8wFpqnzyE1HoD2qVTgu4We8xTuMJGzSmawFta1tfSqhZcAII7eh', '2015-03-27 23:01:44', '2015-03-28 05:56:32'),
(12345643, '$2y$10$Vz0H4zxdyLMxiFvQ5xjsDunByDDqUHSEtfzfp6N9f4wG20cj5E9zi', 'aaaaabbbd@gmail.com', 1, NULL, 'student', 'haWXRXsNXYKFG3I4xFUmFD3fNbKxfdQPBCiKSkZjntKgDFtJ8xxv3HP1Df2X', '2015-03-27 23:01:44', '2015-04-06 04:47:48'),
(12345644, '$2y$10$4UW5D/ohHm.3mOiO2L7x7.prKVyq8NaVUbPs8FDsNrDP8Hz2Mkf.e', 'ad@gmail.com', 1, NULL, 'student', '2h2degej0qjSDEBUXjeNJgp4w9gdqIPUvUJwgWV8xDbMrW5jnWUvqbT58z9U', '2015-03-27 23:01:44', '2015-03-28 03:56:01'),
(12345645, '$2y$10$7L00GxLJpo/o5N6qpd3TFOnYziNAWxbcgL1J6PbRZW4Lj1eWN73Ge', 'aaaaad@gmail.com', 1, NULL, 'student', 'VJXsHs44AB9WdPdBFr5A69Uab9ccxE3S7VKN0xrdgGeh0QQQCHcHExOIRyEc', '2015-03-27 23:01:44', '2015-04-06 05:00:17'),
(12345666, '$2y$10$d2xNnsWwPlNoiQ.mD1SIRue2.j2U1o8v7ehcN6rxIljSORegzc33.', 'adria1@gmail.com', 1, NULL, 'student', 'CPcBFaHEOjVujtwydFGILCp0bdgggEtidGtAGWJ0JYc3W0pFLVXadake0tcS', '2015-03-27 23:01:44', '2015-04-06 05:02:22'),
(12345677, '$2y$10$6aStKcQnZIcd3seJ0ZI80Ovq8Jpj/d4gRZu0Y6yfV4AWotUmjYp6i', 'adriaa1@gmail.com', 1, NULL, 'student', NULL, '2015-03-27 23:01:44', '2015-03-27 23:01:44'),
(12345678, '$2y$10$ObKdPVaPhHp/orwM7EvCpesksm64tK6QKEUqXjWLdfjXW7X2wxbbq', 'adra1@gmail.com', 1, NULL, 'researcher', '9kIIXGwW21i08NPMCFaKAdjU9zi2bMJDhkH2F6n7JZpSoexO2jSiNHIWjJZh', '2015-03-27 23:01:43', '2015-03-28 05:50:41'),
(123456788, '$2y$10$4c9e3zvNnaAwHeLkl.0Yn.udJv545S.xGrFiO0yFKXSkptPki7iiK', 'adria@gmail.com', 1, NULL, 'professor', NULL, '2015-03-27 23:01:44', '2015-03-27 23:01:44'),
(123456789, '$2y$10$GU8Otz5vPD0AKipya0RvuOa.EXczeq5vO.bfnDKvzBnBU7v8OOBVi', 'adrianpaiva1@gmail.com', 1, NULL, 'admin', 'gUYzxrg80S7XDxeTTHjGbjXLgEv4s6i6ldABOa7i7XK35akMPDnswoGWbw99', '2015-03-27 23:01:43', '2015-04-06 04:46:47');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
  `userId` int(10) unsigned NOT NULL,
  `program` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` longtext COLLATE utf8_unicode_ci,
  `experience` longtext COLLATE utf8_unicode_ci,
  `attachment1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attachment2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`userId`, `program`, `firstName`, `lastName`, `picture`, `summary`, `experience`, `attachment1`, `attachment2`) VALUES
(123456789, NULL, 'Adrian', 'Paiva', NULL, NULL, NULL, NULL, NULL),
(12345678, NULL, 'Adrian', 'Researcher', NULL, NULL, NULL, NULL, NULL),
(123456788, NULL, 'Adrian', 'Professor', NULL, NULL, NULL, NULL, NULL),
(12345677, NULL, 'Adrian', 'Student', NULL, NULL, NULL, NULL, NULL),
(12345666, 'T122 Systems Analyst', 'Patrick', 'student', '/img/paintings_clouds_nature_sun_trees_fields_1680x1050_wallpaper_Wallpaper_2560x1600_www.wallpaperhi.com.jpg', '<p>Lorem ipsum dolor sit amet, nec ea congue liberavisse, in option discere alterum per. Cibo voluptaria ut vix, pri te lorem corrumpit deseruisse, per augue putent no. Qui mazim partem integre at, an tation vulputate neglegentur est. Eius graecis ut pro, his magna ullamcorper delicatissimi te. Habemus appareat mea in, qui eu elit debitis necessitatibus.</p>\r\n\r\n<p>Mei ea mundi aliquip dissentias. Aeque probatus omittantur eu cum, mel temporibus dissentiet id, eu mea alia propriae contentiones. Errem sanctus meliore mea et. An definiebas philosophia nam.</p>\r\n\r\n<p>Usu eirmod aeterno omittantur an, ut mei etiam eligendi electram. Consul epicuri no vim, eum no utroque indoctum. No quis facilisis signiferumque vix, in nec scripta omittam blandit. Quot affert incorrupte usu et. Ea pri hinc homero urbanitas, nibh detraxit ut eam.</p>\r\n\r\n<p>Quas propriae molestiae has at, iisque singulis te vim. An nam tantas recusabo temporibus. Commodo copiosae te cum, vis alia epicurei in. At est omnis iisque dolores, mea no nostro timeam deserunt.</p>\r\n\r\n<p>Nisl munere partiendo pro ne. Est dolor intellegam eu, ullum novum ad his, illud saepe te mea. Vis omnesque deleniti consulatu ei. At dico percipit nec, nam munere consulatu urbanitas no. Sed et virtute euismod maiorum, wisi integre pertinax no pro. Pro summo meliore menandri eu, tota quas ferri et sit.</p>\r\n', '<p>Lorem ipsum dolor sit amet, nec ea congue liberavisse, in option discere alterum per. Cibo voluptaria ut vix, pri te lorem corrumpit deseruisse, per augue putent no. Qui mazim partem integre at, an tation vulputate neglegentur est. Eius graecis ut pro, his magna ullamcorper delicatissimi te. Habemus appareat mea in, qui eu elit debitis necessitatibus.</p>\r\n\r\n<p>Mei ea mundi aliquip dissentias. Aeque probatus omittantur eu cum, mel temporibus dissentiet id, eu mea alia propriae contentiones. Errem sanctus meliore mea et. An definiebas philosophia nam.</p>\r\n\r\n<p>Usu eirmod aeterno omittantur an, ut mei etiam eligendi electram. Consul epicuri no vim, eum no utroque indoctum. No quis facilisis signiferumque vix, in nec scripta omittam blandit. Quot affert incorrupte usu et. Ea pri hinc homero urbanitas, nibh detraxit ut eam.</p>\r\n\r\n<p>Quas propriae molestiae has at, iisque singulis te vim. An nam tantas recusabo temporibus. Commodo copiosae te cum, vis alia epicurei in. At est omnis iisque dolores, mea no nostro timeam deserunt.</p>\r\n\r\n<p>Nisl munere partiendo pro ne. Est dolor intellegam eu, ullum novum ad his, illud saepe te mea. Vis omnesque deleniti consulatu ei. At dico percipit nec, nam munere consulatu urbanitas no. Sed et virtute euismod maiorum, wisi integre pertinax no pro. Pro summo meliore menandri eu, tota quas ferri et sit.</p>\r\n', '/uploads/amd.jpg', 'amd.jpg'),
(12345644, 'T122 Fashion Design', 'Laurence', 'elbo', '/img/2144_AF-S-DX-Zoom-NIKKOR-12-24mm-f-4G-IF-ED.png', '<p>Lorem ipsum dolor sit amet, nec ea congue liberavisse, in option discere alterum per. Cibo voluptaria ut vix, pri te lorem corrumpit deseruisse, per augue putent no. Qui mazim partem integre at, an tation vulputate neglegentur est. Eius graecis ut pro, his magna ullamcorper delicatissimi te. Habemus appareat mea in, qui eu elit debitis necessitatibus.</p>\r\n\r\n<p>Mei ea mundi aliquip dissentias. Aeque probatus omittantur eu cum, mel temporibus dissentiet id, eu mea alia propriae contentiones. Errem sanctus meliore mea et. An definiebas philosophia nam.</p>\r\n\r\n<p>Usu eirmod aeterno omittantur an, ut mei etiam eligendi electram. Consul epicuri no vim, eum no utroque indoctum. No quis facilisis signiferumque vix, in nec scripta omittam blandit. Quot affert incorrupte usu et. Ea pri hinc homero urbanitas, nibh detraxit ut eam.</p>\r\n\r\n<p>Quas propriae molestiae has at, iisque singulis te vim. An nam tantas recusabo temporibus. Commodo copiosae te cum, vis alia epicurei in. At est omnis iisque dolores, mea no nostro timeam deserunt.</p>\r\n\r\n<p>Nisl munere partiendo pro ne. Est dolor intellegam eu, ullum novum ad his, illud saepe te mea. Vis omnesque deleniti consulatu ei. At dico percipit nec, nam munere consulatu urbanitas no. Sed et virtute euismod maiorum, wisi integre pertinax no pro. Pro summo meliore menandri eu, tota quas ferri et sit.</p>\r\n', '<p>Lorem ipsum dolor sit amet, nec ea congue liberavisse, in option discere alterum per. Cibo voluptaria ut vix, pri te lorem corrumpit deseruisse, per augue putent no. Qui mazim partem integre at, an tation vulputate neglegentur est. Eius graecis ut pro, his magna ullamcorper delicatissimi te. Habemus appareat mea in, qui eu elit debitis necessitatibus.</p>\r\n\r\n<p>Mei ea mundi aliquip dissentias. Aeque probatus omittantur eu cum, mel temporibus dissentiet id, eu mea alia propriae contentiones. Errem sanctus meliore mea et. An definiebas philosophia nam.</p>\r\n\r\n<p>Usu eirmod aeterno omittantur an, ut mei etiam eligendi electram. Consul epicuri no vim, eum no utroque indoctum. No quis facilisis signiferumque vix, in nec scripta omittam blandit. Quot affert incorrupte usu et. Ea pri hinc homero urbanitas, nibh detraxit ut eam.</p>\r\n\r\n<p>Quas propriae molestiae has at, iisque singulis te vim. An nam tantas recusabo temporibus. Commodo copiosae te cum, vis alia epicurei in. At est omnis iisque dolores, mea no nostro timeam deserunt.</p>\r\n\r\n<p>Nisl munere partiendo pro ne. Est dolor intellegam eu, ullum novum ad his, illud saepe te mea. Vis omnesque deleniti consulatu ei. At dico percipit nec, nam munere consulatu urbanitas no. Sed et virtute euismod maiorum, wisi integre pertinax no pro. Pro summo meliore menandri eu, tota quas ferri et sit.</p>\r\n', NULL, NULL),
(12345645, 'T147 Systems Repair', 'Jimi', 'Hendrix', '/img/4-big-blue-lg.jpg', '<p>Lorem ipsum dolor sit amet, nec ea congue liberavisse, in option discere alterum per. Cibo voluptaria ut vix, pri te lorem corrumpit deseruisse, per augue putent no. Qui mazim partem integre at, an tation vulputate neglegentur est. Eius graecis ut pro, his magna ullamcorper delicatissimi te. Habemus appareat mea in, qui eu elit debitis necessitatibus.</p>\r\n\r\n<p>Mei ea mundi aliquip dissentias. Aeque probatus omittantur eu cum, mel temporibus dissentiet id, eu mea alia propriae contentiones. Errem sanctus meliore mea et. An definiebas philosophia nam.</p>\r\n\r\n<p>Usu eirmod aeterno omittantur an, ut mei etiam eligendi electram. Consul epicuri no vim, eum no utroque indoctum. No quis facilisis signiferumque vix, in nec scripta omittam blandit. Quot affert incorrupte usu et. Ea pri hinc homero urbanitas, nibh detraxit ut eam.</p>\r\n\r\n<p>Quas propriae molestiae has at, iisque singulis te vim. An nam tantas recusabo temporibus. Commodo copiosae te cum, vis alia epicurei in. At est omnis iisque dolores, mea no nostro timeam deserunt.</p>\r\n\r\n<p>Nisl munere partiendo pro ne. Est dolor intellegam eu, ullum novum ad his, illud saepe te mea. Vis omnesque deleniti consulatu ei. At dico percipit nec, nam munere consulatu urbanitas no. Sed et virtute euismod maiorum, wisi integre pertinax no pro. Pro summo meliore menandri eu, tota quas ferri et sit.</p>\r\n', '<p>Lorem ipsum dolor sit amet, nec ea congue liberavisse, in option discere alterum per. Cibo voluptaria ut vix, pri te lorem corrumpit deseruisse, per augue putent no. Qui mazim partem integre at, an tation vulputate neglegentur est. Eius graecis ut pro, his magna ullamcorper delicatissimi te. Habemus appareat mea in, qui eu elit debitis necessitatibus.</p>\r\n\r\n<p>Mei ea mundi aliquip dissentias. Aeque probatus omittantur eu cum, mel temporibus dissentiet id, eu mea alia propriae contentiones. Errem sanctus meliore mea et. An definiebas philosophia nam.</p>\r\n\r\n<p>Usu eirmod aeterno omittantur an, ut mei etiam eligendi electram. Consul epicuri no vim, eum no utroque indoctum. No quis facilisis signiferumque vix, in nec scripta omittam blandit. Quot affert incorrupte usu et. Ea pri hinc homero urbanitas, nibh detraxit ut eam.</p>\r\n\r\n<p>Quas propriae molestiae has at, iisque singulis te vim. An nam tantas recusabo temporibus. Commodo copiosae te cum, vis alia epicurei in. At est omnis iisque dolores, mea no nostro timeam deserunt.</p>\r\n\r\n<p>Nisl munere partiendo pro ne. Est dolor intellegam eu, ullum novum ad his, illud saepe te mea. Vis omnesque deleniti consulatu ei. At dico percipit nec, nam munere consulatu urbanitas no. Sed et virtute euismod maiorum, wisi integre pertinax no pro. Pro summo meliore menandri eu, tota quas ferri et sit.</p>\r\n', '/uploads/3.2 - Simplified Nature.jpg', '3.2 - Simplified Nature.jpg'),
(12345643, NULL, 'Jimmy', 'Page', NULL, NULL, NULL, NULL, NULL),
(12345642, 'T127 Programmer Analyst', 'Duane', 'Allman', '/img/3.2 - Simplified Nature.jpg', '<p><strong>em Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>em Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>em Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '<p><strong>em Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '/uploads/Bob Dylan-VSuploaded-2012-04-07 15-34-19.jpg', 'Bob Dylan-VSuploaded-2012-04-07 15-34-19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_skills`
--

CREATE TABLE IF NOT EXISTS `user_skills` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `skill_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `user_skills`
--

INSERT INTO `user_skills` (`id`, `user_id`, `skill_id`, `created_at`, `updated_at`) VALUES
(1, 12345642, 41, '2015-03-28 05:52:20', '2015-03-28 05:52:20'),
(2, 12345642, 42, '2015-03-28 05:52:20', '2015-03-28 05:52:20'),
(3, 12345642, 43, '2015-03-28 05:52:20', '2015-03-28 05:52:20'),
(4, 12345642, 44, '2015-03-28 05:52:20', '2015-03-28 05:52:20'),
(8, 12345645, 68, '2015-04-06 04:59:45', '2015-04-06 04:59:45'),
(9, 12345645, 69, '2015-04-06 04:59:45', '2015-04-06 04:59:45'),
(10, 12345645, 70, '2015-04-06 04:59:45', '2015-04-06 04:59:45'),
(11, 12345666, 71, '2015-04-06 05:02:07', '2015-04-06 05:02:07'),
(12, 12345666, 72, '2015-04-06 05:02:07', '2015-04-06 05:02:07'),
(13, 12345666, 73, '2015-04-06 05:02:07', '2015-04-06 05:02:07'),
(14, 12345666, 74, '2015-04-06 05:02:07', '2015-04-06 05:02:07'),
(15, 12345666, 75, '2015-04-06 05:02:07', '2015-04-06 05:02:07'),
(24, 12345644, 84, '2015-04-06 05:04:18', '2015-04-06 05:04:18'),
(25, 12345644, 85, '2015-04-06 05:04:18', '2015-04-06 05:04:18'),
(26, 12345644, 86, '2015-04-06 05:04:18', '2015-04-06 05:04:18'),
(27, 12345644, 87, '2015-04-06 05:04:18', '2015-04-06 05:04:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
 ADD PRIMARY KEY (`id`), ADD KEY `notifications_userid_foreign` (`userId`), ADD KEY `notifications_project_id_foreign` (`project_id`);

--
-- Indexes for table `password_reminders`
--
ALTER TABLE `password_reminders`
 ADD KEY `password_reminders_email_index` (`email`), ADD KEY `password_reminders_token_index` (`token`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `projects_id_unique` (`id`), ADD UNIQUE KEY `projects_name_unique` (`name`), ADD KEY `projects_userid_foreign` (`userId`);

--
-- Indexes for table `project_recommended_users`
--
ALTER TABLE `project_recommended_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_skills`
--
ALTER TABLE `project_skills`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_users`
--
ALTER TABLE `project_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userId`), ADD UNIQUE KEY `users_userid_unique` (`userId`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
 ADD KEY `user_profiles_userid_foreign` (`userId`);

--
-- Indexes for table `user_skills`
--
ALTER TABLE `user_skills`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `project_recommended_users`
--
ALTER TABLE `project_recommended_users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `project_skills`
--
ALTER TABLE `project_skills`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `project_users`
--
ALTER TABLE `project_users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userId` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=123456790;
--
-- AUTO_INCREMENT for table `user_skills`
--
ALTER TABLE `user_skills`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
ADD CONSTRAINT `notifications_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `notifications_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
ADD CONSTRAINT `projects_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE;

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
ADD CONSTRAINT `user_profiles_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
