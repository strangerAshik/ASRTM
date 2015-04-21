-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2015 at 10:14 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_trackings`
--

CREATE TABLE IF NOT EXISTS `admin_trackings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `admin_track` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `initial_risk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completion_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assigned_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complete_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complete_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complete_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pel_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aircraft_registration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other_entry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tracking_for` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `action_taken` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `record_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_trackings`
--

INSERT INTO `admin_trackings` (`id`, `user_id`, `admin_track`, `initial_risk`, `completion_status`, `assigned_to`, `start_date`, `start_month`, `start_year`, `target_date`, `target_month`, `target_year`, `complete_date`, `complete_month`, `complete_year`, `organization`, `pel_number`, `aircraft_registration`, `other_entry`, `tracking_for`, `action_taken`, `record_id`, `created_at`, `updated_at`) VALUES
(1, 1, '123434', 'H-High Risk', 'R-Resolved', 'Mr.X', '2', 'January', '2016', '16', 'February', '2015', '2', 'February', '2015', '', '03928409', '50946769', 'nill', 'efew', 'rew', '3344', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `aircrafts_primary`
--

CREATE TABLE IF NOT EXISTS `aircrafts_primary` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `serial_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registration_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aircraft_MM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aircraft_MSN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aircraft_operator` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cofa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stcs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current_exemptions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `currently_leased` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `memo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `aircrafts_primary`
--

INSERT INTO `aircrafts_primary` (`id`, `serial_number`, `registration_no`, `aircraft_MM`, `aircraft_MSN`, `aircraft_operator`, `active`, `registration`, `cofa`, `stcs`, `current_exemptions`, `insurance`, `currently_leased`, `memo`, `created_at`, `updated_at`) VALUES
(17, '3455', '12345', 'Boing', '2456', 'dsfdsf', 'Yes', '0', '0', '0', '0', '0', '0', '', '2015-03-24 23:01:41', '2015-03-24 23:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `document_controllers`
--

CREATE TABLE IF NOT EXISTS `document_controllers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `record_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `control_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `safety_issue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `document_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `document_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `document_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `document_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `technical_area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `signed_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inspector` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aircraft_registration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pel_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `employee_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `investigation_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary_or_keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pdf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `document_controllers`
--

INSERT INTO `document_controllers` (`id`, `user_id`, `active`, `record_id`, `control_number`, `safety_issue`, `document_date`, `document_month`, `document_year`, `document_type`, `technical_area`, `signed_by`, `inspector`, `organization`, `project_number`, `aircraft_registration`, `pel_number`, `employee_id`, `investigation_number`, `subject`, `summary_or_keyword`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 1, 'Yes', '', '', '', '30', 'March', '2015', 'Authorization', 'Aerodromes', 'Mr.X', 'Mr.X', '', '', '', '', '', '', 'zdfdsf', '', '1427711521_1.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `level` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `levels_id_unique` (`id`),
  UNIQUE KEY `levels_level_unique` (`level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
('2014_10_12_000000_create_users_table', 1),
('2015_02_09_203648_create_session_table', 1),
('2015_02_11_184728_qualification_personal', 1),
('2015_02_11_190943_qualification_edu_accademic', 1),
('2015_02_11_191522_qualification_edu_thesis', 1),
('2015_02_11_192053_qualification_employment', 1),
('2015_02_11_192854_qualification_pro_degree', 1),
('2015_02_11_193321_qualification_training_ojt', 1),
('2015_02_11_193916_qualification_language', 1),
('2015_02_11_194256_qualification_technical_licence', 1),
('2015_02_11_194924_qualification_aircraft', 1),
('2015_02_11_195754_qualification_reference', 1),
('2015_02_11_200701_qualification_employee_verification', 1),
('2015_02_11_201531_qualification_others_publication', 1),
('2015_02_11_202110_qualification_others_membership', 1),
('2015_02_19_085606_safeties', 1),
('2015_02_23_113430_adminTracking', 1),
('2015_02_24_072213_document_controllers', 1),
('2015_03_01_052404_user_level', 1),
('2015_03_03_050936_entrust_setup_tables', 1),
('2015_03_24_061035_airtcrafts_primary', 2);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'can_read', 'Can Read ', '2015-03-18 15:31:46', '2015-03-18 15:31:46'),
(2, 'can_write', 'Can write', '2015-03-18 15:31:46', '2015-03-18 15:31:46'),
(3, 'can_edit', 'Can Update', '2015-03-18 15:31:46', '2015-03-18 15:31:46'),
(4, 'can_soft_delete', 'Can Soft Delete', '2015-03-18 15:31:46', '2015-03-18 15:31:46'),
(5, 'can_delete', 'Can Delete', '2015-03-18 15:31:46', '2015-03-18 15:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_foreign` (`permission_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qualification_aircraft`
--

CREATE TABLE IF NOT EXISTS `qualification_aircraft` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qualification_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_hours` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aircraft_mm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aircraft_msm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completion_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completion_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completion_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instructor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proof` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pdf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `certification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verify` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `qualification_aircraft`
--

INSERT INTO `qualification_aircraft` (`id`, `emp_id`, `active`, `qualification_type`, `total_hours`, `aircraft_mm`, `aircraft_msm`, `completion_date`, `completion_month`, `completion_year`, `status`, `institute`, `instructor`, `proof`, `pdf`, `certification`, `verify`, `created_at`, `updated_at`) VALUES
(1, 111, 'Yes', 'Aircraft Recurrent', '344', 'sds', 'sads', '19', 'February', '1997', 'OJT', 'dsfds', '5efrdsf', 'Yes', 'Null', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 13, 'Yes', 'Aircraft Initial', '344', 'sds', 'sads', '17', 'April', '1999', 'OJT', 'dsfds', '5efrdsf', 'Yes', '1427710761_13.pdf', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'Yes', 'Aircraft Recurrent', '23', 'Boing', '13245', '13', 'September', '2006', 'Training', 'Independent University, Bangladesh ( IUB )', 'hghj', 'Yes', '1427776390_1.pdf', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_edu_accademic`
--

CREATE TABLE IF NOT EXISTS `qualification_edu_accademic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_of_degree` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discipline` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `specialization` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pussing_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `standard` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grade_division` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `out_of` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verify` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `qualification_edu_accademic`
--

INSERT INTO `qualification_edu_accademic` (`id`, `emp_id`, `level`, `name_of_degree`, `discipline`, `specialization`, `institute`, `pussing_year`, `standard`, `grade_division`, `out_of`, `verify`, `created_at`, `updated_at`) VALUES
(3, 1, 'Post Doctorate or Equivalent', 'B.S.C', 'Arts', 'Software', 'Independent University, Bangladesh ( IUB )', '2001', 'Division', '1st', '0', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 13, 'Post Doctorate or Equivalent', 'H.S.C', 'Commerce', '', 'Independent University, Bangladesh ( IUB )', '2014', 'Division', '4', '0', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_edu_thesis`
--

CREATE TABLE IF NOT EXISTS `qualification_edu_thesis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verify` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `qualification_edu_thesis`
--

INSERT INTO `qualification_edu_thesis` (`id`, `emp_id`, `level`, `type`, `title`, `institute`, `duration`, `verify`, `created_at`, `updated_at`) VALUES
(2, 1, 'Masters or Equivalent', 'Thesis', 'Camel revenge on the butcher', 'Independent University, Bangladesh ( IUB )', '4', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 13, 'Doctorate', 'Project', 'English', 'Independent University, Bangladesh ( IUB )', '4', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_employee_verification`
--

CREATE TABLE IF NOT EXISTS `qualification_employee_verification` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entry_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entry_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entry_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `termination_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `termination_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `termination_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assigned_task` varchar(260) COLLATE utf8_unicode_ci NOT NULL,
  `assigned_by` varchar(260) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verify` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `qualification_employee_verification`
--

INSERT INTO `qualification_employee_verification` (`id`, `emp_id`, `name`, `entry_date`, `entry_month`, `entry_year`, `active`, `termination_date`, `termination_month`, `termination_year`, `position`, `assigned_task`, `assigned_by`, `note`, `verify`, `created_at`, `updated_at`) VALUES
(3, 13, 'Md.Ashikuzzaman', '2', 'January', '2015', '', '', '', '', 'IT Admin', 'ASRTM BD', 'Some One s', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'Md.Ashikuzzamn Ashik', '1', 'January', '2015', '', '2', 'February', '2015', 'rewre', 'erewr', 'rertrtrt', 'Ashik', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_emplyment`
--

CREATE TABLE IF NOT EXISTS `qualification_emplyment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `organisation_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organisation_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organisation_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `responsibility` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supervisor_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supervisor_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verify` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `qualification_emplyment`
--

INSERT INTO `qualification_emplyment` (`id`, `emp_id`, `organisation_name`, `organisation_type`, `organisation_address`, `designation`, `responsibility`, `start_date`, `start_month`, `start_year`, `end_date`, `end_month`, `end_year`, `supervisor_name`, `supervisor_phone`, `verify`, `created_at`, `updated_at`) VALUES
(1, 1, 'Organisation', 'International', '', 'ITAdmin', 'xgvxfg', '16', 'July', '2003', '13', 'January', '2003', 'jgfj', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 13, 'Bangladesh', 'International', '', 'ITAdmin', 'fdsgdfh', '2', 'February', '2015', '13', 'February', '2005', 'Md.Mahadhy Hasan', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_language`
--

CREATE TABLE IF NOT EXISTS `qualification_language` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `mother_tounge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang_speak` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang_understanding` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang_reading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang_writing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verify` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `qualification_language`
--

INSERT INTO `qualification_language` (`id`, `emp_id`, `mother_tounge`, `language`, `lang_speak`, `lang_understanding`, `lang_reading`, `lang_writing`, `verify`, `created_at`, `updated_at`) VALUES
(5, 1, '', 'English', 'Fluent', 'Fluent', 'Fluent', 'Moderate', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, '', 'Bnagla', 'Moderate', 'Fluent', 'Fluent', 'Fluent', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 13, '', 'English', 'Fluent', 'Fluent', 'Fluent', 'Fluent', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_others_membership`
--

CREATE TABLE IF NOT EXISTS `qualification_others_membership` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verify` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `qualification_others_membership`
--

INSERT INTO `qualification_others_membership` (`id`, `emp_id`, `title`, `description`, `verify`, `created_at`, `updated_at`) VALUES
(1, 13, 'Camel revenge on the butcher', 'seft', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_others_publication`
--

CREATE TABLE IF NOT EXISTS `qualification_others_publication` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verify` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `qualification_others_publication`
--

INSERT INTO `qualification_others_publication` (`id`, `emp_id`, `title`, `description`, `verify`, `created_at`, `updated_at`) VALUES
(2, 13, 'H.S.C', 'defgtrgter', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_personal`
--

CREATE TABLE IF NOT EXISTS `qualification_personal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mailing_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parmanent_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone_work` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone_residence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `month_of_birth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year_of_birth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verify` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `qualification_personal`
--

INSERT INTO `qualification_personal` (`id`, `emp_id`, `title`, `first_name`, `middle_name`, `last_name`, `mother_name`, `father_name`, `mailing_address`, `parmanent_address`, `telephone_work`, `telephone_residence`, `mobile_no`, `nationality`, `national_id`, `sex`, `blood_group`, `date_of_birth`, `month_of_birth`, `year_of_birth`, `photo`, `verify`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mr.', 'Ashikuzaaman', '', 'Ashik', '', '', 'Addsf', 'dsafdf', '', '', '9459458490', 'Bangladeshi', '03950357948758947', 'Male', 'O+', '12', 'September', '1991', '1426714161_1.png', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 111, 'Mr.', 'Ashikuzaaman', '', 'Ashik', '', '', 'dsad', 'asda', '', '', '9459458490', 'Bangladeshi', '03950357948758947', 'Male', 'O+', '13', 'August', '1998', '1426715086_111.png', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 11, 'Ms.', 'Akash', 'Hasan', 'Rasel', '', '', 'rfdhjk,hj', 'dfhgfhgf', '', '', '01722240864', 'Bangladeshi', '03950357948758947', 'Male', 'O-', '17', 'October', '1997', '1427625355_11.png', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 13, 'Mr.', 'Ashikuzaaman', '', 'Ashikuzzaman', '', '', 'Address', 'Address', '', '', '013234', 'Bangladeshi', '03950357948758947', 'Male', 'A+', '13', 'October', '2006', '1427780527_13.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_pro_degree`
--

CREATE TABLE IF NOT EXISTS `qualification_pro_degree` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `pro_degree_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_degree_institute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_degree_duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_degree_grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_degree_major_area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_degree_major` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_degree_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verify` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `qualification_pro_degree`
--

INSERT INTO `qualification_pro_degree` (`id`, `emp_id`, `pro_degree_name`, `pro_degree_institute`, `pro_degree_duration`, `pro_degree_grade`, `pro_degree_major_area`, `pro_degree_major`, `pro_degree_year`, `verify`, `created_at`, `updated_at`) VALUES
(3, 13, 'IUB', '', '', '', 'IT', '', '2004', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 13, 'Roman', '', '', '', 'IT', '', '2001', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_reference`
--

CREATE TABLE IF NOT EXISTS `qualification_reference` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `referee_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `years_acquainted` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `may_we_request` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verify` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `qualification_reference`
--

INSERT INTO `qualification_reference` (`id`, `emp_id`, `referee_type`, `name`, `designation`, `address`, `telephone`, `years_acquainted`, `email_address`, `may_we_request`, `verify`, `created_at`, `updated_at`) VALUES
(2, 1, 'Present supervisor', 'Md.Ashikuzzaman', 'ITAdmin', '', '35345634654', 'Year Acquainted', 'md@gfd.gh', 'Yes', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 13, 'Present supervisor', 'Md.Ashikuzzaman', 'ITAdmin', '', '01677007983', '5', 'ashik@gmail.com', 'Yes', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_technical_licence`
--

CREATE TABLE IF NOT EXISTS `qualification_technical_licence` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `licence_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `licence_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `issue_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `issue_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `issue_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expiration_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expiration_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expiration_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verify` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `qualification_technical_licence`
--

INSERT INTO `qualification_technical_licence` (`id`, `emp_id`, `active`, `licence_no`, `licence_type`, `issue_date`, `issue_month`, `issue_year`, `expiration_date`, `expiration_month`, `expiration_year`, `rating`, `verify`, `created_at`, `updated_at`) VALUES
(1, 1, 'Yes', '024549_li', 'Firing', '1', 'January', '2015', '13', 'February', '2016', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 13, 'Yes', '024549_li', 'Firing', '2', 'January', '2014', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_training_ojt`
--

CREATE TABLE IF NOT EXISTS `qualification_training_ojt` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_of_training` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `training_course` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `training_task` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `major_area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instructor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proof` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pdf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `certification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verify` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `qualification_training_ojt`
--

INSERT INTO `qualification_training_ojt` (`id`, `emp_id`, `category`, `type_of_training`, `training_course`, `subject`, `training_task`, `topic`, `major_area`, `instructor`, `institute`, `location`, `proof`, `pdf`, `certification`, `duration`, `verify`, `created_at`, `updated_at`) VALUES
(2, 1, 'Training', 'CBT', 'hfg', 'ghjg', '', '', 'jhhg', 'hghj', 'Independent University, Bangladesh ( IUB )', '', 'No', '1427712110_1.pdf', 'Verified', '4', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 13, 'Training', 'Class Room', 'hfg', 'ghjg', '', '', 'jhhg', 'hghj', 'Independent University, Bangladesh ( IUB )', 'rdyutryt', 'Yes', '1427781953_13.pdf', 'Verified', '4', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_role_name_unique` (`role_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, '--Selece--', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Chief Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Employee', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `safeties`
--

CREATE TABLE IF NOT EXISTS `safeties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `assigned_inspector` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `corrective_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `initial_risk_analysis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_of_issue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published_practice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `regulation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_aid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `questions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aircraft_registration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pel_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provided_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `receipt_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `curative_priority` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `final_res_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `final_res_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `final_res_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `final_res_inspector` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `final_res_method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `residual_risk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `safety_concern` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `safeties`
--

INSERT INTO `safeties` (`id`, `user_id`, `assigned_inspector`, `corrective_status`, `initial_risk_analysis`, `type_of_issue`, `published_practice`, `regulation`, `job_aid`, `questions`, `organization`, `aircraft_registration`, `pel_number`, `provided_to`, `receipt_date`, `curative_priority`, `target_date`, `target_month`, `target_year`, `eir`, `final_res_date`, `final_res_month`, `final_res_year`, `final_res_inspector`, `final_res_method`, `residual_risk`, `safety_concern`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mr.X', 'R-Open', 'H-High Risk', 'B=Non-Conformance: State Regulations', '', '', '', '', '', '', '', '', '25 March 2015', '1=Needs Priority Correction', '18', 'October', '2015', 'Not Applicable', '', '', '', '', '', '', 'kjhk', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `pass_change` int(10) NOT NULL,
  `role` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_id_unique` (`id`),
  UNIQUE KEY `users_emp_id_unique` (`emp_id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emp_id`, `name`, `email`, `password`, `pass_change`, `role`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Md.Ashikuzzaman', 'a@g.c', '$2y$10$K9jJyihcNmWtuutSk19J3eWzQDgUlYROvRzqbDF1TZRDv1/2iTZyC', 0, 'Chief Admin', NULL, 'eWJGkAN8DMZtXlpGjVT8cuCNaD9bG5gFifMlr2eMDiVWOpOzNppjZcq0xbEF', '0000-00-00 00:00:00', '2015-03-30 22:52:06'),
(2, 11, 'employee', 'emp@caab.com', '$2y$10$0dUeq1eL8oYqkqvh4o4bXeqrw28KcC6qoybJC24LO6KcSQV7CODT6', 0, 'Employee', NULL, '8HQ4cEdywj7oyrvGuXidkj50K0APZu1rOG13ccnt2f8fnXR7yoeULIp9dAtT', '2015-03-29 03:55:14', '2015-03-30 22:52:55'),
(3, 12, 'Lutu Putu', 'lutu@caab.com', '$2y$10$tFMNesNXb4mfyaxCuzkRiu2ftok3BoxKvdz0GxUwi5NUPA.YaU5iS', 0, 'Employee', NULL, NULL, '2015-03-29 05:22:01', '2015-03-29 05:22:01'),
(4, 13, 'Mr.Test', 'test@caab.com', '$2y$10$jV8t97w0iCu1TtQFQPUW4OYzoSGsG8G3qQ3raE5.0suwGhfePRTHu', 0, 'Employee', NULL, 'xDue4RSRi3IuFeUMkJMZpvpFVqfQv54iJpsp2MXcdKL6chmnEbKKBoJ4Bu4I', '2015-03-30 00:46:13', '2015-03-30 23:45:25');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
