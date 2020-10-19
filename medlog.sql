-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2020 at 09:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medlog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accountant_models`
--

CREATE TABLE `admin_accountant_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'accountant',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_accountant_models`
--

INSERT INTO `admin_accountant_models` (`id`, `name`, `email`, `password`, `address`, `contact_no`, `avatar`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'Accountant1', 'accountant1@gmail.com', '$2y$10$OMZvdkEtWVsnmWNy.poIs.nQbFAlb12gKnTk913E9m2mLsDISprHW', 'Township, Lahore', '+923000005134', '1593019728.jpg', 'accountant', '2020-06-24 01:13:05', '2020-06-24 01:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `admin_appointment_models`
--

CREATE TABLE `admin_appointment_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_appointment_models`
--

INSERT INTO `admin_appointment_models` (`id`, `patient_name`, `doctor_name`, `date`, `created_at`, `updated_at`) VALUES
(3, 'Patient1 (patient1@gmail.com)', 'Eva Green (doctor2@gmail.com)', '2020-06-26', '2020-06-24 00:13:52', '2020-06-24 00:13:52'),
(4, 'Patient2 (patient2@gmail.com)', 'Asif Ghafoor (doctor3@gmail.com)', '2020-06-26', '2020-06-24 02:14:23', '2020-06-24 02:14:23'),
(6, 'Severine (patient2@gmail.com)', 'Arooba Butt (doctor4@gmail.com)', '2020-06-25', '2020-06-24 05:45:18', '2020-06-24 05:45:18'),
(7, 'Severine (patient2@gmail.com)', 'Eva Green (doctor2@gmail.com)', '2020-06-25', '2020-06-24 06:12:05', '2020-06-24 06:12:05'),
(10, 'Ayesha (patient7@hotmail.com)', 'Fawad Hasan (doctor3@gmail.com)', '2020-06-27', '2020-06-24 06:15:46', '2020-06-24 06:15:46'),
(11, 'Patient20 (patient20@gmail.com)', 'Fawad Hasan (doctor3@gmail.com)', '2020-06-26', '2020-06-25 04:12:21', '2020-06-25 04:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `admin_bedward_models`
--

CREATE TABLE `admin_bedward_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nurse_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_bedward_models`
--

INSERT INTO `admin_bedward_models` (`id`, `patient_name`, `doctor_name`, `nurse_name`, `ward_no`, `bed_no`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(2, '(1) Ernst Stavro Blofeld', '(1) Daniel Craig', '(1) Nurse1', '3', '1', '2020-06-23', '2020-06-25', '2020-06-23 14:57:53', '2020-06-23 14:57:53'),
(3, '(9) Shk Sayyam', '(3) Asif Ghafoor', '(5) Nurse5', '2', '7', '2020-06-27', '2020-06-29', '2020-06-23 15:08:44', '2020-06-23 15:08:44'),
(4, '(2) Severine', '(5) Arooba Butt', '(7) Nurse7', '1', '4', '2020-06-24', '2020-06-25', '2020-06-23 15:51:56', '2020-06-23 15:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `admin_doctor_models`
--

CREATE TABLE `admin_doctor_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'doctor',
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specilization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `servicecharge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_doctor_models`
--

INSERT INTO `admin_doctor_models` (`id`, `name`, `email`, `password`, `admin`, `gender`, `department`, `specilization`, `servicecharge`, `permanent_address`, `present_address`, `phone_number`, `dob`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Daniel Craig', 'doctor1@gmail.com', 'Password', 'doctor', 'male', 'Emergency department', 'FCPS', '1500', 'Vauxhall Cross, London', 'Vauxhall Cross, London', '+44340056798', '1990-01-01', '1592993000.jpeg', '2020-06-23 05:16:24', '2020-06-23 15:36:23'),
(2, 'Eva Green', 'doctor2@gmail.com', 'Password', 'doctor', 'female', 'Neurology', 'Neurologist', '300', '110  Crescent Avenue, Manchester', '110  Crescent Avenue, Manchester', '+92322556789', '1988-01-02', '1592993088.jpg', '2020-06-23 05:17:25', '2020-06-24 05:39:14'),
(3, 'Fawad Hasan', 'doctor3@gmail.com', 'Password', 'doctor', 'male', 'Intensive care unit', 'MBBS', '1300', 'Chaklala, Rawalpindi', 'Chaklala, Rawalpindi', '+923024567890', '1993-11-12', 'default.png', '2020-06-23 05:18:47', '2020-06-24 05:38:15'),
(4, 'Doctor5', 'doctor5@gmail.com', '$2y$10$YI0I39.PqykEFzDV7JJOE.9MSDU6Rm6YUXTeoD0fconKHQ8iF50.y', 'doctor', 'female', 'Emergency department', 'Dermatologists', '200', 'Bahria Town, Lahore', 'Bahria Town, Lahore', '12345678900', '1995-11-21', 'default.png', '2020-06-23 05:23:47', '2020-06-23 05:23:47'),
(5, 'Arooba Butt', 'doctor4@gmail.com', 'Password', 'doctor', 'female', 'Intensive care unit', 'Anesthesiologists', '500', 'Nespak Society', 'Nespak Society', '+923335678166', '1995-02-01', 'default.png', '2020-06-23 05:24:59', '2020-06-23 15:49:53'),
(6, 'Doctor6', 'doctor6@gmail.com', '$2y$10$cTxk3I9QzQx8qg3pai4odOUQNQ/XNmN14GhtP9zBcLr7sgU0/P3NG', 'doctor', 'female', 'Cardiology', 'Cardiologist', '1500', 'Near Muslim Town', 'Near Muslim Town', '9262558811', '1996-06-24', 'default.png', '2020-06-23 05:28:07', '2020-06-23 05:28:07'),
(7, 'Doctor7', 'doctor7@gmail.com', '$2y$10$AqzY.TiwQEEkuZvrcrY.v.0Jea2dtkIo060gjrFFZ/00ehIZg50NW', 'doctor', 'female', 'Gynaecology', 'Gynaecologist', '400', 'Bahria Town, Lahore', 'Bahria Town, Lahore', '123123432412', '1998-02-22', 'default.png', '2020-06-23 05:30:33', '2020-06-23 05:30:33'),
(8, 'Doctor8', 'doctor8@gmail.com', '$2y$10$H6Exx52lb9p/n4JDZaLCze5xyPkSq7f2ylgEimW4lNh/zrSIogSbe', 'doctor', 'male', 'Intensive care unit', 'Dermatologists', '600', 'College Road, Lahore', 'College Road, Lahore', '926255885', '1982-09-11', 'default.png', '2020-06-23 05:50:38', '2020-06-23 05:50:38'),
(9, 'Doctor9', 'doctor9@gmail.com', '$2y$10$HL.B0x74.YW4Glo0X.B12OPWltNavF0vTSYh0FnN/U5ior4Il5.8q', 'doctor', 'male', 'Cardiology', 'Cardiologist', '1200', 'Bravo', 'Alpha', '+44345511122', '1990-11-13', 'default.png', '2020-06-23 06:00:04', '2020-06-23 06:00:04'),
(10, 'Doctor10', 'doctor10@gmail.com', '$2y$10$FkYl21ESTh2fZEwVAbAvZOWnGRHj/AspVQxN1llwSl.8FtQDfwteK', 'doctor', 'female', 'Intensive care unit', 'Endocrinologists', '1000', 'Lahore', 'Shadman', '+92345678999', '1989-09-11', 'default.png', '2020-06-23 06:20:50', '2020-06-23 06:20:50'),
(11, 'Doctor11', 'doctor11@gmail.com', '$2y$10$LXlxNF.bUED9gVe0rUYG6.ZQOhidqYRUwQ0i9oGbqaMxuaeIsw2WS', 'doctor', 'male', 'Cardiology', 'Neurologist', '1000', 'Laxmi Chowl, Lahore', 'Laxmi Chowl, Lahore', '926255881', '1989-05-22', 'default.png', '2020-06-23 09:07:11', '2020-06-23 09:07:11'),
(12, 'Doctor12', 'doctor12@gmail.com', '$2y$10$/SG85stLxmgyU9g7Rv9S.O9dbQxx.QxLFHfACedQOnZ7a3chpe6A.', 'doctor', 'male', 'Intensive care unit', 'Dermatologists', '1600', 'College Road, Lahore', 'College Road, Lahore', '+393665556902', '1986-07-17', 'default.png', '2020-06-23 13:44:50', '2020-06-23 13:44:50'),
(13, 'Doctor13', 'doctor13@gmail.com', '$2y$10$PVp/kOhcjdDgVcJ1xngsBOWJ75vJaNSuL6lAi8N/WrRqVSF0.89Ci', 'doctor', 'male', 'Cardiology', 'Cardiologist', '1000', 'Shadbagh, Lahore', 'Shadbagh, Lahore', '03394778899', '1990-06-23', 'default.png', '2020-06-23 13:48:24', '2020-06-23 13:48:24'),
(14, 'Doctor14', 'doctor14@gmail.com', 'Password', 'doctor', 'male', 'Intensive care unit', 'MBBS', '500', 'Karim Park, Lahore', 'Karim Park, Lahore', '+92625588166', '1991-06-18', 'default.png', '2020-06-23 13:49:47', '2020-06-23 13:56:03'),
(15, 'Doctor15', 'doctor15@gmail.com', '$2y$10$.Oody08V2TnKXj9YhthtTOmkrzxwSaJddlyzmVVfHVSwa5OI5mGBe', 'doctor', 'female', 'Emergency department', 'MBBS', '500', 'Mughal Pura, Lahore', 'Mughal Pura, Lahore', '+923225881167', '1987-02-28', 'default.png', '2020-06-23 13:51:30', '2020-06-23 13:51:30'),
(16, 'Doctor16', 'doctor16@gmail.com', '$2y$10$aiq.6SdUdzcgS7bHRZ/e1OCPpDfI81HhTrCzXf7XtX3RfTyTIZ9bO', 'doctor', 'female', 'Emergency department', 'MBBS', '500', 'Mughal Pura, Lahore', 'Mughal Pura, Lahore', '+923225881170', '1988-02-28', 'default.png', '2020-06-23 13:53:03', '2020-06-23 13:53:03'),
(17, 'Doctor17', 'doctor17@gmail.com', '$2y$10$XsiEohm3CaFenySKI0GaveByzUpqKlgHj.bCH35Dm.Llv0J0KfUC.', 'doctor', 'male', 'Emergency department', 'MBBS', '500', 'Ali Park, Lahore', 'Ali Park, Lahore', '92625588166', '1988-06-12', 'default.png', '2020-06-23 13:54:07', '2020-06-23 13:54:07'),
(18, 'Doctor18', 'doctor18@gmail.com', '$2y$10$oHvPYpgzf63Cg3DsETabge091kA7JDihNKUnNT3KT9eD8TmI3wska', 'doctor', 'female', 'Cardiology', 'Cardiologist', '1000', 'Johar Town, Lahore', 'Qilla Gujjar Singh, Lahore', '03394778900', '1989-03-02', 'default.png', '2020-06-23 13:55:07', '2020-06-23 13:55:07'),
(19, 'Doctor19', 'doctor19@gmail.com', '$2y$10$bHSB2oxHIFt7NtYsLsUfreGeqvrmDUiTexI4dHIaeNq34K0TsydB.', 'doctor', 'female', 'Gynaecology', 'Gynaecologist', '2000', 'Cavalary Road, Lahore', 'Cavalary Road, Lahore', '+923225881172', '1986-07-20', 'default.png', '2020-06-23 13:57:56', '2020-06-23 13:57:56'),
(20, 'Doctor20', 'doctor20@gmail.com', '$2y$10$L6OiuRRsHwiPrirDCCY5GeXvMOsF2aQug9aQmOnYn6Y1sQ3MT8q..', 'doctor', 'male', 'Neurology', 'Neurologist', '1000', 'College Road, Lahore', 'College Road, Lahore', '+923225881180', '1985-08-25', 'default.png', '2020-06-23 13:59:14', '2020-06-23 13:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `admin_history_models`
--

CREATE TABLE `admin_history_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_history_models`
--

INSERT INTO `admin_history_models` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'patinet1', 'patient1@gmail.com', NULL, '$2y$10$KjU6Xb5QNNJeIKRBBMFLUOE6jqWmOOv3eKGNO9LASOkMNaAstZFZC', 'patient', NULL, '2020-06-23 05:13:15', '2020-06-23 05:13:15'),
(2, 'patient2', 'patient2@gmail.com', NULL, '$2y$10$1bXttjqwYT4I1bZnPo5PwO4PadObn3Q4opRje/IvSOCJLxVyktRTC', 'patient', NULL, '2020-06-23 05:13:16', '2020-06-23 05:13:16'),
(3, 'patient3', 'patient3@gmail.com', NULL, '$2y$10$5SBOIE8Io.HQQs8oSUmkAOItYbAi8E6yLXn0G8eyKDFAi8IP/zV4m', 'patient', NULL, '2020-06-23 05:13:26', '2020-06-23 05:13:26'),
(4, 'Muhammad Ali Raza', 'mohammadaliraza54@gmail.com', NULL, '$2y$10$BD72pHNQJr/mCrSRvON5MOhlJkjvDoAevxEQvzYAgT6X8WeIh33Zu', 'patient', NULL, '2020-06-23 05:13:28', '2020-06-23 05:13:28'),
(5, 'Doctor', 'doctor@gmail.com', NULL, '$2y$10$zlD98vynEJnnIzm6zl7prOpjciEKU8gnabmNApjx.4eA7aq/UaLCS', 'doctor', NULL, '2020-06-23 05:13:30', '2020-06-23 05:13:30'),
(6, 'nurse', 'nurse@gmail.com', NULL, '$2y$10$WkUlx6T937BYs7BbBV32k.ky3Kl1uHIydDJIVq2bKqrRpNx2QgpaO', 'nurse', NULL, '2020-06-23 05:13:33', '2020-06-23 05:13:33'),
(7, 'nahe hota hash  mein hai', 'accountant@gmail.com', NULL, '$2y$10$Oi0nWEwU4ZpGYB9372czfOLbqPiWZgAsUPsIEuddPc6G016DX3tPS', 'accountant', NULL, '2020-06-23 05:13:34', '2020-06-23 05:13:34'),
(8, 'Muhammad', 'aliblogss@gmail.com', NULL, '$2y$10$hq.G.rWU10z7vQ9mwRnoJuZQniftK4QST5vfLAwmhDPm6bLRRiYd6', 'accountant', NULL, '2020-06-23 05:13:37', '2020-06-23 05:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `admin_invoice_models`
--

CREATE TABLE `admin_invoice_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_charges` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `miscellaneous` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward_charges` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed_charges` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `others_charges` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'UnPaid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_invoice_models`
--

INSERT INTO `admin_invoice_models` (`id`, `patient_name`, `doctor_charges`, `miscellaneous`, `ward_charges`, `bed_charges`, `others_charges`, `grand_total`, `email`, `confirmation`, `created_at`, `updated_at`) VALUES
(5, '(1) Ernst Stavro Blofeld', '1500', '0', '0', '1000', '575', '3075', 'patient20@gmail.com', 'UnPaid', '2020-06-23 14:59:02', '2020-06-23 14:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `admin_nurse_models`
--

CREATE TABLE `admin_nurse_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nurse',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_nurse_models`
--

INSERT INTO `admin_nurse_models` (`id`, `name`, `email`, `password`, `address`, `contact_no`, `avatar`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'Nurse1', 'nurse1@gmail.com', '$2y$10$uFIIh8FxDOceA0ITIS.g6ewq4SXmeRCrz1J.FcOmiqKknN4iKBTQu', 'Qilla Gujjar Singh, Lahore', '+923000004', 'default.png', 'nurse', '2020-06-23 09:01:11', '2020-06-23 09:01:53'),
(2, 'Nurse2', 'nurse2@gmail.com', '$2y$10$L8KV546XXtEQ6pcZjUrzTOu/4Ym/3INy7icT2yX.tIoc1fRu.iIGi', 'Shah Alam, Lahore', '+923000000005', 'default.png', 'nurse', '2020-06-23 09:11:59', '2020-06-23 09:11:59'),
(3, 'Nurse3', 'nurse3@gmail.com', '$2y$10$8vy2Hw3gVQfK5FdJ8zWn4uDyQqtqGmOUJfkmkdw7YaNBZeYApRvDO', 'Lake City, Lahore', '+923232960283', 'default.png', 'nurse', '2020-06-23 15:03:00', '2020-06-23 15:03:00'),
(4, 'Nurse4', 'nurse4@gmail.com', '$2y$10$j2LnPkJjUqIxZsP/CcgoMezk2vDAbRLpi4.cnmklBp6DVxLG911Oa', 'Bahria Orchid, Lahore', '+923232960390', 'default.png', 'nurse', '2020-06-23 15:03:42', '2020-06-23 15:03:42'),
(5, 'Nurse5', 'nurse5@gmail.com', '$2y$10$uh8Pd6JUO1vzvCGQA05HguP5N.g6JSJErIVil/yz9GLDXBO2kSVKK', 'Shimla Round About, Lahore', '+923232960670', 'default.png', 'nurse', '2020-06-23 15:05:00', '2020-06-23 15:05:00'),
(6, 'Nurse6', 'nurse6@gmail.com', '$2y$10$/mZB/HZ49umhFU49.e93WeLBa5sLvRFo4JLRt0oq6dE2FYBYU2AQW', 'Abbort Road, Lahore', '+923232960110', 'default.png', 'nurse', '2020-06-23 15:05:40', '2020-06-23 15:05:40'),
(7, 'Nurse7', 'nurse7@gmail.com', '$2y$10$IsF8guUKF7nU7WIrw53Je.p6it4GsRQnLLc3v6bZTsf0HcVqYhWLO', 'Badami Bagh, Lahore', '+923000005899', 'default.png', 'nurse', '2020-06-23 15:07:05', '2020-06-23 15:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `admin_payment_models`
--

CREATE TABLE `admin_payment_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_payment_models`
--

INSERT INTO `admin_payment_models` (`id`, `patient_name`, `amount`, `invoice`, `created_at`, `updated_at`) VALUES
(1, '(7) Patient1', '1600', '3-2-1', '2020-06-23 06:02:45', '2020-06-23 06:02:45'),
(2, '(10) Patient4', '1050', '3-2-3', '2020-06-23 06:03:58', '2020-06-23 06:03:58'),
(3, '(1) Patient1', '1700', '3-2-4', '2020-06-23 08:58:11', '2020-06-23 08:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_history_models`
--

CREATE TABLE `appointment_history_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_history_models`
--

INSERT INTO `appointment_history_models` (`id`, `patient_name`, `doctor_name`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Patient1 (patient1@gmail.com)', 'Daniel Craig (doctor1@gmail.com)', '2020-06-25', '2020-06-24 00:14:53', '2020-06-24 00:14:53'),
(5, 'Patient2 (patient2@gmail.com)', 'Asif Ghafoor (doctor3@gmail.com)', '2020-06-24', '2020-06-24 02:14:23', '2020-06-24 02:15:28'),
(9, 'Blofeld (patient1@gmail.com)', 'Fawad Hasan (doctor3@gmail.com)', '2020-06-24', '2020-06-24 06:13:53', '2020-06-24 06:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank_models`
--

CREATE TABLE `blood_bank_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_bank_models`
--

INSERT INTO `blood_bank_models` (`id`, `blood_group`, `created_at`, `updated_at`) VALUES
(1, 'A -ve', '2020-06-23 05:32:15', '2020-06-23 05:32:15'),
(2, 'A +ve', '2020-06-23 05:32:24', '2020-06-23 05:32:24'),
(3, 'B -ve', '2020-06-23 05:32:36', '2020-06-23 05:32:36'),
(4, 'B +ve', '2020-06-23 05:32:46', '2020-06-23 05:32:46'),
(5, 'AB +ve', '2020-06-23 05:33:35', '2020-06-23 05:33:35'),
(6, 'AB -ve', '2020-06-23 05:33:43', '2020-06-23 05:33:43'),
(7, 'O -ve', '2020-06-23 05:34:13', '2020-06-23 05:34:13'),
(8, 'O +ve', '2020-06-23 05:34:21', '2020-06-23 05:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `cancel_appointment_models`
--

CREATE TABLE `cancel_appointment_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cancel_appointment_models`
--

INSERT INTO `cancel_appointment_models` (`id`, `patient_name`, `doctor_name`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Patient1 (patient1@gmail.com)', 'Daniel Craig (doctor1@gmail.com)', '2020-06-25', '2020-06-24 00:05:12', '2020-06-24 00:05:12'),
(2, 'Patient1 (patient1@gmail.com)', 'Daniel Craig (doctor1@gmail.com)', '2020-06-25', '2020-06-24 00:14:53', '2020-06-24 00:14:53'),
(3, 'Blofeld (patient1@gmail.com)', 'Daniel Craig (doctor1@gmail.com)', '2020-06-25', '2020-06-24 06:14:44', '2020-06-24 06:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(341, '2014_10_12_000000_create_users_table', 1),
(342, '2014_10_12_100000_create_password_resets_table', 1),
(343, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(344, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(345, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(346, '2016_06_01_000004_create_oauth_clients_table', 1),
(347, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(348, '2019_08_19_000000_create_failed_jobs_table', 1),
(349, '2020_02_17_153754_create_admin_history_models_table', 1),
(350, '2020_02_24_075202_add_avatar_column_on_users', 1),
(351, '2020_02_25_185902_create_patient_profile_models_table', 1),
(352, '2020_02_26_171344_create_blood_bank_models_table', 1),
(353, '2020_03_02_114033_create_admin_doctor_models_table', 1),
(354, '2020_03_02_205957_create_noticeboard_models_table', 1),
(355, '2020_03_04_174224_create_admin_nurse_models_table', 1),
(356, '2020_03_04_183809_create_admin_accountant_models_table', 1),
(358, '2020_03_06_110643_create_admin_appointment_models_table', 1),
(359, '2020_03_06_122405_create_admin_invoice_models_table', 1),
(360, '2020_03_07_173001_create_admin_payment_models_table', 1),
(361, '2020_03_11_133018_create_cancel_appointment_models_table', 1),
(362, '2020_03_11_160952_create_appointment_history_models_table', 1),
(363, '2020_03_06_065734_create_admin_bedward_models_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard_models`
--

CREATE TABLE `noticeboard_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `noticeboard_models`
--

INSERT INTO `noticeboard_models` (`id`, `title`, `notice`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Maintain Social Distancing', 'Instruction of Maintaning Social Distancing with all the Colleague and Patient taken into effect by now.', '2020-04-15', '2020-06-24 05:32:16', '2020-06-24 05:32:16'),
(2, 'Emergency Patient will be taken into Account Immidiately.', 'To ICU & Emergency Wards', '2020-05-07', '2020-06-24 05:32:40', '2020-06-24 05:32:40'),
(3, 'Safety First', 'Use the Sanitizers and health Safety Suits while checking Patients', '2020-06-09', '2020-06-24 05:33:35', '2020-06-24 05:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_profile_models`
--

CREATE TABLE `patient_profile_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'patient',
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `martial_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_husband_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_profile_models`
--

INSERT INTO `patient_profile_models` (`id`, `name`, `email`, `password`, `address`, `admin`, `city`, `contact_no`, `martial_status`, `religion`, `gender`, `father_husband_name`, `birth_year`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Blofeld', 'patient1@gmail.com', '$2y$10$wR85l.KyN30FpAruQpOhJuEm696Aw0MdaKY51NTWGtsdVdpAZzt76', 'Pine Alph', 'patient', 'Switzerland', '+44567899122', 'single', 'Atheist', 'male', 'Zulu', '2011-06-12', 'default.png', '2020-06-23 05:36:37', '2020-06-24 05:25:24'),
(2, 'Severine', 'patient2@gmail.com', '$2y$10$PkoNszwWG.j.r.38PkVW.OgX233NWTUA/Blu1krkCvN4ez25Lj.hi', 'Hysen Green', 'patient', 'Birmingham', '+441632960283', 'single', 'Atheist', 'female', 'Thiago', '2001-12-13', 'default.png', '2020-06-23 05:38:49', '2020-06-24 05:42:45'),
(3, 'Jibran Ashiq', 'patient3@yahoo.com', '$2y$10$7567XaVS7vCs/g4pVv1AbOpdS9ukgwAv2lcjUEyW1aUFlGV7zStNS', 'Qilla Laxman', 'patient', 'Lahore', '+923000000100', 'single', 'Islam', 'male', 'Xen', '2007-01-31', 'default.png', '2020-06-23 05:40:22', '2020-06-23 05:40:22'),
(4, 'Silva', 'patient4@gmail.com', '$2y$10$lfp7yPJZUEsp8AwQgd0C9ejJ4/5IOIAlnG35GJiCx2xFcRiWyvum6', 'French Cross', 'patient', 'Broklyn', '+120255501271', 'married', 'Christian', 'male', 'Henry', '1997-01-22', 'default.png', '2020-06-23 05:42:37', '2020-06-23 05:42:37'),
(5, 'Subhan', 'patient5@bahria.edu.pk', '$2y$10$IYvPAnvxAvXfHllNbX3jmuT.AMmonCrpNhmVV4neXX17imGn.Pm/6', 'Civic Centre', 'patient', 'Lahore', '03074516616', 'single', 'Islam', 'male', 'Liaqat Ali', '1996-11-09', 'default.png', '2020-06-23 05:43:57', '2020-06-23 05:43:57'),
(6, 'Jannat Mujeeb Sufi', 'patient6@gmail.com', '$2y$10$41cbhmXnK8XE6eiavoEkC.IxIKPdBK1kj77w4092FxFR0FgK.12ua', 'Alhamra', 'patient', 'Lahore', '+92300000101', 'single', 'Islam', 'female', 'Zaid', '2013-06-03', 'default.png', '2020-06-23 05:45:22', '2020-06-23 05:45:22'),
(7, 'Ayesha', 'patient7@hotmail.com', '$2y$10$azodtedah7mxABceITVVXOEe6UFslWPU8J8idLhMC.V49PBg4YgHe', 'Iqbal Town', 'patient', 'Lahore', '+92300000213', 'single', 'Muslim', 'female', 'Sajid', '1997-03-02', 'default.png', '2020-06-23 05:47:41', '2020-06-23 05:47:41'),
(8, 'patient8', 'patient8@gmail.com', '$2y$10$t2irn0fbA8b20LJ06f8Y/eTRsw/FHaBuVJvsZpD03gyhcE.rNqAuq', 'Civic Centre', 'patient', 'Lahore', '+92300000315', 'single', 'Islam', 'male', 'Istiaq', '1991-04-23', 'default.png', '2020-06-23 05:53:11', '2020-06-23 05:53:11'),
(9, 'patient9', 'patient9@yahoo.com', '$2y$10$W/P.zgWv06ZQra/A6RrbPeuenHXkJbM25UKZ5bhXJeXxs8O.k.t5e', 'Abdul Aziz Road', 'patient', 'UAE', '+971505557430', 'married', 'Islam', 'male', 'Zahid', '1987-04-20', 'default.png', '2020-06-23 05:57:14', '2020-06-23 06:16:15'),
(10, 'patient10', 'patient10@gmail.com', '$2y$10$mxnegbkJGTVHrV3JpwzTY.VJzjUaL64uDhNC5nxDGC/wzz3Xtkp9K', 'Vauxhall Cross', 'patient', 'London', '+44567891152', 'single', 'Christian', 'female', 'Hunter', '1997-08-12', 'default.png', '2020-06-23 06:18:00', '2020-06-23 06:18:00'),
(11, 'Patient11', 'patient11@gmail.com', '$2y$10$xErWKoWgCXnv7.4OY25hdeBZfZPL1SVsvbdgV0Xh9cXys0W1HzX6K', 'Shadbagh', 'patient', 'Lahore', '+92300000578', 'single', 'Islam', 'male', 'Subhan', '2016-03-31', 'default.png', '2020-06-23 09:08:35', '2020-06-23 09:08:35'),
(12, 'Patient12', 'patient12@gmail.com', '$2y$10$.CyC.IAe3ON7OdquNBp4OuuJ1Rk1tCWsxCMQiK9ghVfD5WT20YyLO', 'Johar Town', 'patient', 'Lahore', '+923005566444', 'single', 'Islam', 'male', 'Ali', '2001-11-30', 'default.png', '2020-06-23 09:10:47', '2020-06-23 09:10:47'),
(13, 'Patient13', 'patient13@gmail.com', '$2y$10$6TAHn06rae8rySHxiihb5ebaLsZMTwOTNOey7UipWwFfEGzEf9Bn6', 'Township', 'patient', 'Lahore', '+923223296028', 'married', 'Islam', 'male', 'Iftikhar', '1991-03-12', 'default.png', '2020-06-23 14:10:27', '2020-06-23 14:10:27'),
(14, 'Patient14', 'patient14@gmail.com', '$2y$10$3EARP/JjeS6BphcBmUOQ.ulDjHQh.MpCDvQt10D8dhNWy2z8u/2IO', 'Johar Town', 'patient', 'Lahore', '+923223296029', 'married', 'Islam', 'female', 'Hassan', '1981-04-18', 'default.png', '2020-06-23 14:11:31', '2020-06-23 14:11:31'),
(15, 'Patient15', 'patient15@gmail.com', '$2y$10$0907oNdl.RnnulqCpdD38Ofj5827Xsp1qcSVmN3QPMxr00ppbpWoS', 'GOR-1, Upper Mall', 'patient', 'Lahore', '+923223296115', 'single', 'Islam', 'female', 'Ashraf', '1997-05-26', 'default.png', '2020-06-23 14:12:50', '2020-06-23 14:12:50'),
(16, 'Patient16', 'patient16@gmail.com', '$2y$10$qyAHAoEBkanXx6iWceqFseuuHh7.LHbCl6GzklJaAkMgDui8JnI.q', 'GOR-2, Shadman', 'patient', 'Lahore', '+923223296116', 'single', 'Islam', 'male', 'Agha', '1997-08-22', 'default.png', '2020-06-23 14:13:38', '2020-06-23 14:13:38'),
(17, 'Patient17', 'patient17@gmail.com', '$2y$10$pIPv8PuKwzyRrmXmP3DBceU45HgutaRN./LJW6xxBg9X4B357CojK', 'Makhan Pura, Shadbagh', 'patient', 'Lahore', '+923223296117', 'single', 'Islam', 'male', 'Imran', '1997-08-22', 'default.png', '2020-06-23 14:14:31', '2020-06-23 14:14:31'),
(18, 'Patient18', 'patient18@gmail.com', '$2y$10$G52w5efglWJHTDCnyBiuueF1vm94WqdW5GsLAr1SRKuxXhDkPSb/m', 'Wapda Town', 'patient', 'Lahore', '+923323295118', 'single', 'Islam', 'male', 'Anwar', '1997-04-16', 'default.png', '2020-06-23 14:15:26', '2020-06-23 14:15:26'),
(19, 'Patient19', 'patient19@gmail.com', '$2y$10$6sNBQ1Fri1oLRpghmSPuGugdrpyqQ0zHBJ5t4wua8uXL/PgcVNZwe', 'Civic Centre', 'patient', 'Lahore', '+923032960219', 'single', 'Muslim', 'male', 'Ishtiaq', '1998-12-25', 'default.png', '2020-06-23 14:19:02', '2020-06-23 14:19:02'),
(20, 'Patient20', 'patient20@gmail.com', '$2y$10$Wv4gG9YNeCNT/5PIiIZCd.zOqQGK2hxKdJYKvX7xypmNmRQjyZA1S', 'Askari X,', 'patient', 'Lahore', '+923032960220', 'married', 'Muslim', 'male', 'Ali', '1991-11-11', 'default.png', '2020-06-23 14:20:04', '2020-06-23 14:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'zero',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jamal Ali', 'admin@gmail.com', '1592992707.jpg', NULL, '$2y$10$y/DR666zWoObHLPt2qonte6TEhB2Uq5AyVX3fmaF7KvOkIL063mDu', 'admin', NULL, '2020-06-23 01:44:43', '2020-06-24 04:58:28'),
(2, 'Daniel Craig', 'doctor1@gmail.com', '1592993000.jpeg', NULL, '$2y$10$fw76RkxrB7c9a7VhmVV/Be7NTa18XNoSqQJeK.BLeSgk3gICn29LK', 'doctor', NULL, '2020-06-23 05:16:24', '2020-06-24 05:03:20'),
(15, 'Eva Green', 'doctor2@gmail.com', '1592993088.jpg', NULL, '$2y$10$ShhkJ6dXnpu9/1.uCPgMKeQ/F6q10N89PAFAusNtd/ZQGby5trlQC', 'doctor', NULL, '2020-06-23 05:17:25', '2020-06-24 05:04:48'),
(16, 'Asif Ghafoor', 'doctor3@gmail.com', '1592992766.jpg', NULL, '$2y$10$Ga8UMTTZnke1W62WmsZRy.V8OWNGFb10PTXyIQ3g7Rpef5B2tMaA6', 'doctor', NULL, '2020-06-23 05:18:47', '2020-06-24 04:59:51'),
(17, 'Doctor5', 'doctor5@gmail.com', 'default.png', NULL, '$2y$10$K7N//8tJTnwPrF7lceMowOQIstp/b.tE9JrSO7QHQdR1lZZrCuruS', 'doctor', NULL, '2020-06-23 05:23:47', '2020-06-23 05:23:47'),
(18, 'Arooba Butt', 'doctor4@gmail.com', '1592945204.jpg', NULL, '$2y$10$MvDAvOlCtIGHAI.WwDXp1eUUh/7fBlWzZNW0dnWQgrEYN5tYqKGLW', 'doctor', NULL, '2020-06-23 05:24:58', '2020-06-23 15:46:44'),
(19, 'Doctor6', 'doctor6@gmail.com', 'default.png', NULL, '$2y$10$/Cc0UXyFAOZEveNUke7cHeCIDrhQIDA5OLxDhahn2E4OWgPwx.Y5.', 'doctor', NULL, '2020-06-23 05:28:07', '2020-06-23 05:28:07'),
(21, 'Doctor7', 'doctor7@gmail.com', 'default.png', NULL, '$2y$10$QRTwvPUPaH53kwM6M4teS.2ROKf.lenGUh4bhbcBl1qFdZEjhVhGC', 'doctor', NULL, '2020-06-23 05:30:33', '2020-06-23 05:30:33'),
(22, 'Blofeld', 'patient1@gmail.com', '1592993166.jpg', NULL, '$2y$10$UApmxCm7iGkEavHD6O.Pb.ZbQw5uVsimuaKNd7iSX44VPnSG.Bfli', 'patient', NULL, '2020-06-23 05:36:37', '2020-06-24 05:25:24'),
(23, 'Severine', 'patient2@gmail.com', '1592995413.jpg', NULL, '$2y$10$woL7iCZrynsmhgkyIwNN6OyFVZob3EoAbkEjsKhDevx2aXTsvuIg.', 'patient', NULL, '2020-06-23 05:38:49', '2020-06-24 05:43:34'),
(24, 'Patient3', 'patient3@yahoo.com', 'default.png', NULL, '$2y$10$DNKgVBMsYFPMarso3cXMRuJSumN3PG/wA6eVz88TxgxbaaD8gsGu2', 'patient', NULL, '2020-06-23 05:40:22', '2020-06-23 05:40:22'),
(25, 'Patient4', 'patient4@gmail.com', 'default.png', NULL, '$2y$10$F3KZqZ8k9EXmhWBiEYRQ0.udT/5GHAQv8GvO6VUkamloEfvJiXIt2', 'patient', NULL, '2020-06-23 05:42:36', '2020-06-23 05:42:36'),
(26, 'Patient5', 'patient5@bahria.edu.pk', 'default.png', NULL, '$2y$10$VuRMGY6kNvV3ZyDMGnYxpOEOc8OR47Rd8.czy1pKy2WIC5eMmqcbC', 'patient', NULL, '2020-06-23 05:43:57', '2020-06-23 05:43:57'),
(27, 'Patient6', 'patient6@gmail.com', 'default.png', NULL, '$2y$10$A1cz8xnnwm.48edkpekv4.2hdK3TEnxGa9JaV0HrRFJx7jgI.wSoS', 'patient', NULL, '2020-06-23 05:45:22', '2020-06-23 05:45:22'),
(28, 'Patient7', 'patient7@hotmail.com', 'default.png', NULL, '$2y$10$LWkK0j3xA7wlTtJAOW1AKOZc4JuC4z84Os9lb.rtE7Le6v1852HtW', 'patient', NULL, '2020-06-23 05:47:41', '2020-06-23 05:47:41'),
(29, 'doctor8', 'doctor8@gmail.com', 'default.png', NULL, '$2y$10$zK5SmFRoZBUjd1r53/jZteM/mUf1OHUopP8MWprmvZVVol4jXZOwi', 'doctor', NULL, '2020-06-23 05:50:38', '2020-06-23 05:50:38'),
(30, 'patient8', 'patient8@gmail.com', 'default.png', NULL, '$2y$10$ZXt6/kmDDF3uY2GmPX.73uW7dgSKVgdH4hOI4e8nYITBcrySlIC8O', 'patient', NULL, '2020-06-23 05:53:11', '2020-06-23 05:53:11'),
(31, 'patient9', 'patient9@yahoo.com', 'default.png', NULL, '$2y$10$TeHCKpqwJc24zE7xi7iYc.4tnJd9CgfjLj8yeDdawyymhcjkaWhbu', 'patient', NULL, '2020-06-23 05:55:57', '2020-06-23 05:57:14'),
(32, 'doctor9', 'doctor9@gmail.com', 'default.png', NULL, '$2y$10$HydrMct4bzLa/cjgMxEgT.qdzbfIlWiDxJeZedfa1F6NMOAdT7W.G', 'doctor', NULL, '2020-06-23 06:00:03', '2020-06-23 06:00:03'),
(34, 'patient10', 'patient10@gmail.com', 'default.png', NULL, '$2y$10$juGSYMVuUjzVQEmvGyUZ4OYteNpd21VQFTAdfJqbKhBdGcSF01m4G', 'patient', NULL, '2020-06-23 06:18:00', '2020-06-23 06:18:00'),
(35, 'doctor10', 'doctor10@gmail.com', 'default.png', NULL, '$2y$10$Rg2W89Fica16dE./t2hyAe9zzTjuvTaLlGeOSnQIxJDDnlzYMMydq', 'doctor', NULL, '2020-06-23 06:20:50', '2020-06-23 06:20:50'),
(36, 'Nurse1', 'nurse1@gmail.com', '1593019785.jpg', NULL, '$2y$10$3XX9lBG/6IkNpwNKwrm9FOSmsx88I1qQZciYaftACcefStx5q67wy', 'nurse', NULL, '2020-06-23 09:01:11', '2020-06-24 12:29:45'),
(37, 'Doctor11', 'doctor11@gmail.com', 'default.png', NULL, '$2y$10$XzIGEGT0UGmlGkrd9os.v.NzCuT.lS1TD7lXIzRqheK.oK6ndFdEO', 'doctor', NULL, '2020-06-23 09:07:11', '2020-06-23 09:07:11'),
(38, 'Patient11', 'patient11@gmail.com', 'default.png', NULL, '$2y$10$UL48upJBG6RF3cc0gexMkeqbJc.TNZaqePINBLy/y4dm0k0JpoBWC', 'patient', 'TTzoF3Mk0XNlCYdDz1fKGGQOL3juxkCRRECJHOv5wpxRrCPdN1D4u2pQPB3X', '2020-06-23 09:08:35', '2020-06-23 10:16:15'),
(39, 'Patient12', 'patient12@gmail.com', 'default.png', NULL, '$2y$10$PuasDG7wJQPpguDjI0C.6ulpkCOPulxUmQ2LEY24aia4fwHouscyK', 'patient', NULL, '2020-06-23 09:10:47', '2020-06-23 09:10:47'),
(10006, 'Nurse2', 'nurse2@gmail.com', 'default.png', NULL, '$2y$10$B0lyG4gKO04bqo81VVQR9uZ6sQyYmKylwg2V9Fvvu09PtTeF.FpQ6', 'nurse', NULL, '2020-06-23 09:11:59', '2020-06-23 09:11:59'),
(10007, 'Doctor12', 'doctor12@gmail.com', 'default.png', NULL, '$2y$10$Y/k79wuoo7JiabYYMkymLOA11FH5TW4v9bh1MChfWntaPgXiiEEHi', 'doctor', NULL, '2020-06-23 13:44:50', '2020-06-23 13:44:50'),
(10008, 'Doctor13', 'doctor13@gmail.com', 'default.png', NULL, '$2y$10$hE3732cLcv5PaUwrQcQJEevaNdCSbnaYnuNQ7vdSy6XoELmqGXFz6', 'doctor', NULL, '2020-06-23 13:48:23', '2020-06-23 13:48:23'),
(10009, 'Doctor14', 'doctor14@gmail.com', 'default.png', NULL, '$2y$10$O6ZieW5BCBYrh5/wvWKaKe2m.Ije20xEXQt/fnjg0pXfXzkpDwqyO', 'doctor', NULL, '2020-06-23 13:49:46', '2020-06-23 13:49:46'),
(10010, 'Doctor15', 'doctor15@gmail.com', 'default.png', NULL, '$2y$10$iD.MqYLaBgojt1.fVEwXgOMcXlNCjSBksYHqS.ps0kFlRLm79dZlu', 'doctor', NULL, '2020-06-23 13:51:30', '2020-06-23 13:51:30'),
(10013, 'Doctor16', 'doctor16@gmail.com', 'default.png', NULL, '$2y$10$xCVAFObtfct/bShfRyEGE.mv.AFqVVCaC/iUPjIbya/yxmqJYWQcy', 'doctor', NULL, '2020-06-23 13:53:03', '2020-06-23 13:53:03'),
(10014, 'Doctor17', 'doctor17@gmail.com', 'default.png', NULL, '$2y$10$DXyrMnl/TVi2Up0qKThwXe8jOBtDuFGo11ZEeulboSv/H7sACexNS', 'doctor', NULL, '2020-06-23 13:54:07', '2020-06-23 13:54:07'),
(10015, 'Doctor18', 'doctor18@gmail.com', 'default.png', NULL, '$2y$10$ee7T4THSQj188oTerQ88xeqh9UT.oktNDBJnGyPXyMMxqkJm61xcy', 'doctor', NULL, '2020-06-23 13:55:07', '2020-06-23 13:55:07'),
(10016, 'Doctor19', 'doctor19@gmail.com', 'default.png', NULL, '$2y$10$6JTCGWdoGF19wwUvifrTH.V.AF8wSDa1rHmetTaIebOo9Cn90mOMO', 'doctor', NULL, '2020-06-23 13:57:55', '2020-06-23 13:57:55'),
(10017, 'Doctor20', 'doctor20@gmail.com', 'default.png', NULL, '$2y$10$2/RJ8RyZG/AETkvkhs5v3uEkMormHk6pHSb8ZSYfXV1aLeUEKHbji', 'doctor', NULL, '2020-06-23 13:59:14', '2020-06-23 13:59:14'),
(10018, 'Patient13', 'patient13@gmail.com', 'default.png', NULL, '$2y$10$8eAxdsKpsQpDlNuP6iLtUOUwTtBKPcl2ErPJO9gXhAkkQ2fjBwXJ.', 'patient', NULL, '2020-06-23 14:10:27', '2020-06-23 14:10:27'),
(10019, 'Patient14', 'patient14@gmail.com', 'default.png', NULL, '$2y$10$McNFBlZVJSNAk8.bnSaY6eh9qx.dJUwOwke82MucXwEnQueQRt206', 'patient', NULL, '2020-06-23 14:11:31', '2020-06-23 14:11:31'),
(10020, 'Patient15', 'patient15@gmail.com', 'default.png', NULL, '$2y$10$Yv4g9AmJpWGtcWZOO3RMR.nnX1zInGNTtUPBHvAzdZg2E7MruTHAa', 'patient', NULL, '2020-06-23 14:12:50', '2020-06-23 14:12:50'),
(10021, 'Patient16', 'patient16@gmail.com', 'default.png', NULL, '$2y$10$NrxK4RdQ02U0ect2FziJeueEtYcd0JTmZMI7KAOCRXXFe0VRXRX7C', 'patient', NULL, '2020-06-23 14:13:37', '2020-06-23 14:13:37'),
(10022, 'Patient17', 'patient17@gmail.com', 'default.png', NULL, '$2y$10$hSfUs966puHgM/5lB7.7eu6muejKkfoaz4T3YzXpXBytNDUBcT3Bq', 'patient', NULL, '2020-06-23 14:14:31', '2020-06-23 14:14:31'),
(10023, 'Patient18', 'patient18@gmail.com', 'default.png', NULL, '$2y$10$sEp8jULugXv/BOZGCyWhNOYemKgHb1JY3YFgEdHrmNagGxs85f6yS', 'patient', NULL, '2020-06-23 14:15:25', '2020-06-23 14:15:25'),
(10025, 'Patient19', 'patient19@gmail.com', 'default.png', NULL, '$2y$10$g95MKZCkA7gxbbzxn73gQOQGgnCwr73iAc1lDNqlHS0mPqFUn5Iai', 'patient', NULL, '2020-06-23 14:19:02', '2020-06-23 14:19:02'),
(10026, 'Patient20', 'patient20@gmail.com', 'default.png', NULL, '$2y$10$WD2G5b1U.iwE6iiDnpZhqeMK1za84avJ.LMgDyp5Enz97a4aItFO6', 'patient', NULL, '2020-06-23 14:20:04', '2020-06-23 14:20:04'),
(10027, 'Nurse3', 'nurse3@gmail.com', 'default.png', NULL, '$2y$10$KnlD2UMAEs4J95vJXhkqZOHsBqTvAIY2B7nEQxeqTgcuY4We0DwSO', 'nurse', NULL, '2020-06-23 15:03:00', '2020-06-23 15:03:00'),
(10028, 'Nurse4', 'nurse4@gmail.com', 'default.png', NULL, '$2y$10$jq1JxwccRhAUSZxQUyBT8u0TSceYfY9b1EXL/C5FpkHZ8axEyW0N.', 'nurse', NULL, '2020-06-23 15:03:41', '2020-06-23 15:03:41'),
(10029, 'Nurse5', 'nurse5@gmail.com', 'default.png', NULL, '$2y$10$k23pL1ICmkcmhMTH58.MiOimlMuuDuji83Kyv0G9emyN5pO7ClK.u', 'nurse', NULL, '2020-06-23 15:05:00', '2020-06-23 15:05:00'),
(10030, 'Nurse6', 'nurse6@gmail.com', 'default.png', NULL, '$2y$10$NI7IMgJOsrcNl6LvhAKsN.MXNuKNhJLEZkV7quCU4l29uCw2xqVwm', 'nurse', NULL, '2020-06-23 15:05:40', '2020-06-23 15:05:40'),
(10031, 'Nurse7', 'nurse7@gmail.com', 'default.png', NULL, '$2y$10$E9djlqViSco61bhQS9VWYu1gOz1rse81Gn4OIDm6Us0pD0Lf83Rii', 'nurse', NULL, '2020-06-23 15:07:05', '2020-06-23 15:07:05'),
(10032, 'Accountant1', 'accountant1@gmail.com', '1593019728.jpg', NULL, '$2y$10$Clyo9NKI7LlcvYLtMYbPFuN4mJOUENUzTiwf.RnqNFy/DPM/861.C', 'accountant', NULL, '2020-06-24 01:13:04', '2020-06-24 12:28:48'),
(10033, 'Ali Raza', 'admin2@gmail.com', '1593019333.PNG', NULL, '$2y$10$NQ0w16D/FA5iLNeCj1QoFOJXEAoXuhH29lWrd1OGegKNFVOsgsfAm', 'admin', NULL, '2020-06-24 12:06:40', '2020-06-24 12:22:13'),
(10034, 'Ali Raza', 'aliadmin@gmail.com', '1593071603.jpg', NULL, '$2y$10$ylatOY5D/8SFin3yf0j/Z.8nbmejv47dmnJ8lS2gEfbzx3/c5WBw.', 'admin', NULL, '2020-06-25 02:48:07', '2020-06-25 02:53:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accountant_models`
--
ALTER TABLE `admin_accountant_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_appointment_models`
--
ALTER TABLE `admin_appointment_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_bedward_models`
--
ALTER TABLE `admin_bedward_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_doctor_models`
--
ALTER TABLE `admin_doctor_models`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_doctor_models_email_unique` (`email`);

--
-- Indexes for table `admin_history_models`
--
ALTER TABLE `admin_history_models`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_history_models_email_unique` (`email`);

--
-- Indexes for table `admin_invoice_models`
--
ALTER TABLE `admin_invoice_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_nurse_models`
--
ALTER TABLE `admin_nurse_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_payment_models`
--
ALTER TABLE `admin_payment_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_history_models`
--
ALTER TABLE `appointment_history_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_bank_models`
--
ALTER TABLE `blood_bank_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancel_appointment_models`
--
ALTER TABLE `cancel_appointment_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticeboard_models`
--
ALTER TABLE `noticeboard_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patient_profile_models`
--
ALTER TABLE `patient_profile_models`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patient_profile_models_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `admin_accountant_models`
--
ALTER TABLE `admin_accountant_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_appointment_models`
--
ALTER TABLE `admin_appointment_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin_bedward_models`
--
ALTER TABLE `admin_bedward_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_doctor_models`
--
ALTER TABLE `admin_doctor_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `admin_history_models`
--
ALTER TABLE `admin_history_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_invoice_models`
--
ALTER TABLE `admin_invoice_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_nurse_models`
--
ALTER TABLE `admin_nurse_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_payment_models`
--
ALTER TABLE `admin_payment_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment_history_models`
--
ALTER TABLE `appointment_history_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blood_bank_models`
--
ALTER TABLE `blood_bank_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cancel_appointment_models`
--
ALTER TABLE `cancel_appointment_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;

--
-- AUTO_INCREMENT for table `noticeboard_models`
--
ALTER TABLE `noticeboard_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_profile_models`
--
ALTER TABLE `patient_profile_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10035;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
