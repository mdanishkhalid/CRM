-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 11:54 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scarletcrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id`                INT(10) UNSIGNED           NOT NULL,
  `name`              VARCHAR(191)
                      COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation`       INT(11)                         DEFAULT NULL,
  `usid`              VARCHAR(100)
                      COLLATE utf8mb4_unicode_ci      DEFAULT NULL,
  `email`             VARCHAR(191)
                      COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` TIMESTAMP                  NULL DEFAULT NULL,
  `password`          VARCHAR(191)
                      COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token`    VARCHAR(100)
                      COLLATE utf8mb4_unicode_ci      DEFAULT NULL,
  `created_at`        TIMESTAMP                  NULL DEFAULT NULL,
  `updated_at`        TIMESTAMP                  NULL DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `admins`:
--

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `designation`, `usid`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
  (1, 'admin', 6, 'admin-01', 'admin@gmail.com', NULL, '$2y$10$YMN7F/2BWXWrnGHuZhu02eiFZjyAKS./uZ7w1TjoXJoWtCb6HbAE6',
   'GOYQdGoLBnKJymwDA23tujc3GoTC2wdhroOkQXPRuNf0x7U0ktK7FLfw08Ak', '2018-11-02 06:50:24', '2018-11-02 06:51:30'),
  (2, 'Amjad Hussain', 2, 'amjad-02', 'amjad@gmail.com', NULL,
   '$2y$10$YMN7F/2BWXWrnGHuZhu02eiFZjyAKS./uZ7w1TjoXJoWtCb6HbAE6',
   '5vM5FAqpChsgAXWKEogO2TS4Ted3GungEAa1IQo8ioH7IKSJ0q9F5NGH4vR5', '2018-11-02 06:52:52', '2018-11-02 06:52:52'),
  (3, 'Shahzad', 4, 'shah-03', 'shahzad@gmail.com', NULL,
   '$2y$10$vgezarcE5UDuUVhd6sEbNe.6vivH.JCZ8q5fJ.2k5SDxVyYUq/HDW',
   'cw239DKLBUivuJvvbQcfIJIKUfP9Ag7m3taTIgnBFJo8Sin1bj4xX53GgX8a', '2018-11-02 08:12:39', '2018-11-02 08:12:39'),
  (4, 'Arsalan', 4, 'arsal-04', 'arsalan@gmail.com', NULL,
   '$2y$10$0V8MquYSVHvyfu2uioUaj.jS1qV9EuuimdQOyIQRud9AGAzygvevS',
   'FwkZUj58oKW9oehdmkcoH8dSqstvYy9NwcjmP4dQDsThcF23JtSG1opjPuhn', '2018-11-05 06:56:09', '2018-11-05 06:56:09'),
  (5, 'Miss Anila', 3, 'anila-05', 'anila@gmail.com', NULL,
   '$2y$10$O5.90/BB8usLQFLfK4bOkOyhfYd0fusfMwaUR3.w0X1J/HrvcDSua',
   'oieWLU57WrjHDyrzP5yp68RnsZWYLxBZwJroirfAR8XqBEC5JtxKGVlGILc4', '2018-11-06 01:52:43', '2018-11-06 01:52:43'),
  (6, 'Mateen', 5, 'mateen-06', 'mateen@gmail.com', NULL,
   '$2y$10$ngwZJgjS6Efc8mzn/fgWHe/5uDjhezLkuBvWfFH0Ikw6GgcD/TKUW',
   '1VUUUwFi5BMeMozJl5OIOD7RmVDOYW5OMlfEZlTdIU6sb7gr9nIBOE52NQjU', '2018-11-06 03:17:21', '2018-11-06 03:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id`         INT(11)   NOT NULL,
  `attachment` VARCHAR(191)       DEFAULT NULL,
  `fkreq`      INT(11)            DEFAULT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00'
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- RELATIONSHIPS FOR TABLE `attachments`:
--   `fkreq`
--       `crequests` -> `id`
--

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `attachment`, `fkreq`, `created_at`, `updated_at`) VALUES
  (18, 'xVAVdBjG9gjpg', 53, '2018-11-20 03:29:16', '2018-11-20 03:29:16'),
  (19, 'pAoNPZCHlfjpg', 53, '2018-11-20 03:29:16', '2018-11-20 03:29:16'),
  (20, '30hssWajmIjpg', 53, '2018-11-20 03:29:16', '2018-11-20 03:29:16'),
  (21, '62tUrUGDJ5jpg', 53, '2018-11-20 03:29:16', '2018-11-20 03:29:16'),
  (22, '5Wa7UusYYKjpg', 54, '2018-11-20 03:37:58', '2018-11-20 03:37:58'),
  (23, 'VZmHYGT3Qejpg', 54, '2018-11-20 03:37:58', '2018-11-20 03:37:58'),
  (24, 'rRKhilHNjijpg', 54, '2018-11-20 03:37:58', '2018-11-20 03:37:58'),
  (25, 'P1JC2wFaAqjpg', 54, '2018-11-20 03:37:58', '2018-11-20 03:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id`                INT(10) UNSIGNED           NOT NULL,
  `userid`            VARCHAR(50)
                      COLLATE utf8mb4_unicode_ci      DEFAULT NULL,
  `name`              VARCHAR(191)
                      COLLATE utf8mb4_unicode_ci NOT NULL,
  `email`             VARCHAR(191)
                      COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar_url`        VARCHAR(191)
                      COLLATE utf8mb4_unicode_ci      DEFAULT NULL,
  `email_verified_at` TIMESTAMP                  NULL DEFAULT NULL,
  `password`          VARCHAR(191)
                      COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token`    VARCHAR(100)
                      COLLATE utf8mb4_unicode_ci      DEFAULT NULL,
  `created_at`        TIMESTAMP                  NULL DEFAULT NULL,
  `updated_at`        TIMESTAMP                  NULL DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `clients`:
--

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `userid`, `name`, `email`, `avatar_url`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
  (1, 'galleria-01', 'Galleria', 'galleria1@gmail.com', 'img/user\\ulOCDNWpsLSM5Qj.jpg', NULL,
   '$2y$10$cDa7LwGsLnkfeBql8ewK/OrvFR1c.II4TOPdFsxTWJvXYUb.0UFOK',
   'SpqTM6gyHY0cnjz55NIeMMnLV63MGI1FXnOtLlIxfNqGtTf7wV9m0adDeeyF', '2018-10-30 05:22:55', '2018-11-17 00:11:23'),
  (2, 'ebl-02', 'EBL', 'ebl@gmail.com', 'img/user\\zMgaFRNKcUkQAsB.jpg', NULL,
   '$2y$10$cDa7LwGsLnkfeBql8ewK/OrvFR1c.II4TOPdFsxTWJvXYUb.0UFOK',
   'mDcsT3qhavLDhkiDVyMebZlgx09aVcAGsJOSDywGi8r65KmPJ3qNtjW2SkmF', '2018-10-30 05:24:08', '2018-11-16 04:51:38'),
  (3, 'nca-03', 'NCA', 'nca@gmail.com', 'img/user\\Ove9zs0wnvcvoKy.jpg', NULL,
   '$2y$10$/zBd3AfVaDc1SuS9UOK5H.QraeXHqhcEwnjQFbMx062Lrpndgkvmq',
   'lzoYTss15fxivwH3zJdGxwQIK4yzE3wpS5rYYCK1QJmQbd0LKqUZ7tTEFeqD', '2018-11-06 04:18:48', '2018-11-17 01:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `crequests`
--

CREATE TABLE `crequests` (
  `id`          INT(11)   NOT NULL,
  `REQ_DATE`    DATETIME       DEFAULT CURRENT_TIMESTAMP,
  `REQ_STATUS`  INT(11)        DEFAULT '1',
  `FKCUST`      INT(11)        DEFAULT NULL,
  `MNAME`       VARCHAR(100)   DEFAULT NULL,
  `FORM_REPORT` VARCHAR(100)   DEFAULT NULL,
  `RMKS`        VARCHAR(1000)  DEFAULT NULL,
  `ASSGN_TO`    INT(11)        DEFAULT NULL,
  `ASSGN_DATE`  DATE           DEFAULT NULL,
  `START_DATE`  DATE           DEFAULT NULL,
  `END_DATE`    DATE           DEFAULT NULL,
  `DAYS`        INT(50)        DEFAULT NULL,
  `COMP_BY`     INT(11)        DEFAULT NULL,
  `COMP_DATE`   DATE           DEFAULT NULL,
  `CHK_BY`      INT(11)        DEFAULT NULL,
  `CHK_DATE`    DATE           DEFAULT NULL,
  `UPDT_BY`     INT(11)        DEFAULT NULL,
  `UPDT_DATE`   DATE           DEFAULT NULL,
  `CONF_DATE`   DATE           DEFAULT NULL,
  `created_at`  TIMESTAMP NULL DEFAULT NULL,
  `updated_at`  TIMESTAMP NULL DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- RELATIONSHIPS FOR TABLE `crequests`:
--   `FKCUST`
--       `customers` -> `id`
--   `CHK_BY`
--       `employees` -> `id`
--   `COMP_BY`
--       `employees` -> `id`
--   `ASSGN_TO`
--       `employees` -> `id`
--   `UPDT_BY`
--       `employees` -> `id`
--   `REQ_STATUS`
--       `reqstatuses` -> `id`
--

--
-- Dumping data for table `crequests`
--

INSERT INTO `crequests` (`id`, `REQ_DATE`, `REQ_STATUS`, `FKCUST`, `MNAME`, `FORM_REPORT`, `RMKS`, `ASSGN_TO`, `ASSGN_DATE`, `START_DATE`, `END_DATE`, `DAYS`, `COMP_BY`, `COMP_DATE`, `CHK_BY`, `CHK_DATE`, `UPDT_BY`, `UPDT_DATE`, `CONF_DATE`, `created_at`, `updated_at`)
VALUES
  (16, '2018-11-06 00:00:00', 8, 1, 'Procurment', 'Reports', 'problem in ICTDTL', 3, '2018-11-06', '2018-11-06',
       '2018-11-10', 4, 3, '2018-11-06', 5, '2018-11-06', 6, '2018-11-06', '2018-11-06', '2018-11-06 04:34:38',
                     '2018-11-06 04:49:42'),
  (17, '2018-11-06 00:00:00', 8, 2, 'Sales', 'Reports', 'problem in ictdtl', 3, '2018-11-06', '2018-11-06',
       '2018-11-10', 4, 3, '2018-11-06', 5, '2018-11-06', 6, '2018-11-06', '2018-11-06', '2018-11-06 04:52:53',
                     '2018-11-06 04:55:33'),
  (18, '2018-11-06 00:00:00', 8, 2, 'finance', 'forms', 'problem in finance form', 3, '2018-11-06', '2018-11-06',
       '2018-11-08', 2, 3, '2018-11-06', 5, '2018-11-06', 6, '2018-11-08', '2018-11-08', '2018-11-06 05:16:51',
                     '2018-11-07 23:58:12'),
  (19, '2018-11-07 00:00:00', 8, 2, 'test', 'reports', 'adsfka', 3, '2018-11-07', '2018-11-07', '2018-11-10', 3, 3,
                                                                                                              '2018-11-08',
                                                                                                              5,
                                                                                                              '2018-11-08',
                                                                                                              6,
                                                                                                              '2018-11-08',
                                                                                                              '2018-11-08',
                                                                                                              '2018-11-07 01:26:19',
                                                                                                              '2018-11-08 01:42:06'),
  (21, '2018-11-07 00:00:00', 2, 2, 'asdf', 'asdfg', 'asdfg', 3, '2018-11-08', '2018-11-08', '2018-11-14', 6, NULL,
                                                                                                           NULL, NULL,
                                                                                                           NULL, NULL,
                                                                                                           NULL, NULL,
                                                                                                           '2018-11-07 04:27:51',
                                                                                                           '2018-11-08 00:34:13'),
  (26, '2018-11-08 00:00:00', 8, 1, 'finance', 'reports', 'ICTDTL', 3, '2018-11-08', '2018-11-08', '2018-11-09', 1, 3,
                                                                                                                 '2018-11-08',
                                                                                                                 5,
                                                                                                                 '2018-11-08',
                                                                                                                 NULL,
                                                                                                                 NULL,
                                                                                                                 NULL,
                                                                                                                 '2018-11-08 01:44:38',
                                                                                                                 '2018-11-08 01:48:58'),
  (27, '2018-11-08 00:00:00', 8, 1, 'Procurment', 'Reports', 'problem hi problem', 3, '2018-11-13', '2018-11-13',
       '2018-11-14', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-08 01:51:00', '2018-11-13 00:40:35'),
  (28, '2018-11-13 00:00:00', 8, 1, 'Finance Module', 'Reports', 'problem in ICTDTL', 3, '2018-11-13', '2018-11-13',
       '2018-11-13', 0, 3, '2018-11-13', 5, '2018-11-13', 6, '2018-11-13', '2018-11-13', '2018-11-13 00:32:50',
                     '2018-11-13 00:38:28'),
  (53, '2018-11-20 13:29:16', 8, 1, 'Finance Module', 'Reports', 'problem in ICTDTL', 3, '2018-11-20', '2018-11-20',
       '2018-11-21', 1, 3, '2018-11-20', 5, '2018-11-20', 6, '2018-11-20', '2018-11-20', '2018-11-20 03:29:16',
                     '2018-11-20 03:35:35'),
  (54, '2018-11-20 13:37:58', 1, 1, 'jkjk', 'tgrrgt', 'fgetrt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
                                                                                        NULL, NULL, NULL,
                                                                                        '2018-11-20 03:37:58',
                                                                                        '2018-11-20 03:37:58');

-- --------------------------------------------------------

--
-- Stand-in structure for view `crequest_views`
-- (See below for the actual view)
--
CREATE TABLE `crequest_views` (
  `id`             INT(11)
  ,
  `REQ_DATE`       DATETIME
  ,
  `REQ_STATUS`     INT(11)
  ,
  `REQSTATUS_NAME` VARCHAR(100)
  ,
  `FKCUST`         INT(11)
  ,
  `CUST_NAME`      VARCHAR(200)
  ,
  `MNAME`          VARCHAR(100)
  ,
  `FORM_REPORT`    VARCHAR(100)
  ,
  `RMKS`           VARCHAR(1000)
  ,
  `ASSGN_TO`       INT(11)
  ,
  `ASSGN_TO_EMP`   VARCHAR(100)
  ,
  `ASSGN_DATE`     DATE
  ,
  `START_DATE`     DATE
  ,
  `END_DATE`       DATE
  ,
  `DAYS`           INT(50)
  ,
  `COMP_BY`        INT(11)
  ,
  `COMP_BY_EMP`    VARCHAR(100)
  ,
  `COMP_DATE`      DATE
  ,
  `CHK_BY`         INT(11)
  ,
  `CHK_BY_EMP`     VARCHAR(100)
  ,
  `CHK_DATE`       DATE
  ,
  `UPDT_BY`        INT(11)
  ,
  `UPDT_BY_EMP`    VARCHAR(100)
  ,
  `UPDT_DATE`      DATE
  ,
  `CONF_DATE`      DATE
  ,
  `created_at`     TIMESTAMP
  ,
  `updated_at`     TIMESTAMP
);

-- --------------------------------------------------------

--
-- Table structure for table `custcatgs`
--

CREATE TABLE `custcatgs` (
  `id`         INT(11)   NOT NULL,
  `CATG_NAME`  VARCHAR(100)   DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- RELATIONSHIPS FOR TABLE `custcatgs`:
--

--
-- Dumping data for table `custcatgs`
--

INSERT INTO `custcatgs` (`id`, `CATG_NAME`, `created_at`, `updated_at`) VALUES
  (1, 'Cement', NULL, NULL),
  (2, 'Engineering', '2018-10-27 02:28:30', '2018-10-27 02:28:30'),
  (3, 'Distribution Houses', '2018-10-27 02:29:08', '2018-10-27 02:29:21'),
  (4, 'Textile', '2018-10-27 02:33:58', '2018-10-27 02:33:58'),
  (6, 'Implementation', '2018-10-27 02:38:05', '2018-10-27 02:38:05'),
  (8, 'Testing 2', '2018-10-27 02:40:52', '2018-10-27 02:40:52'),
  (9, 'Texting 3', '2018-10-27 02:41:12', '2018-10-27 02:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id`         INT(11)   NOT NULL,
  `CUST_NAME`  VARCHAR(200)   DEFAULT NULL,
  `FKSTATUS`   INT(11)        DEFAULT NULL,
  `FKCATG`     INT(11)        DEFAULT NULL,
  `FKTYPE`     INT(11)        DEFAULT NULL,
  `CPERSON`    VARCHAR(100)   DEFAULT NULL,
  `ADRS`       VARCHAR(500)   DEFAULT NULL,
  `TEL`        VARCHAR(100)   DEFAULT NULL,
  `email`      VARCHAR(100)   DEFAULT NULL,
  `avatar_url` VARCHAR(191)   DEFAULT NULL,
  `URL`        VARCHAR(100)   DEFAULT NULL,
  `RMKS`       VARCHAR(500)   DEFAULT NULL,
  `USID`       VARCHAR(100)   DEFAULT NULL,
  `password`   VARCHAR(100)   DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- RELATIONSHIPS FOR TABLE `customers`:
--   `FKCATG`
--       `custcatgs` -> `id`
--   `FKSTATUS`
--       `custstatuses` -> `id`
--   `FKTYPE`
--       `custtypes` -> `id`
--

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `CUST_NAME`, `FKSTATUS`, `FKCATG`, `FKTYPE`, `CPERSON`, `ADRS`, `TEL`, `email`, `avatar_url`, `URL`, `RMKS`, `USID`, `password`, `created_at`, `updated_at`)
VALUES
  (1, 'Galleria', 1, 1, 1, 'Amjad', 'lahore', '123456789', 'galleria1@gmail.com', 'img/user\\ulOCDNWpsLSM5Qj.jpg',
      'yes', 'good', 'galleria-01', '$2y$10$Nxxa0zZj3.52G7YJB1L0YO/xKWJWe6Csw2S1A8E9P9o6gOgmcDy6y',
   '2018-10-30 05:22:55', '2018-11-17 00:11:23'),
  (2, 'EBL', 1, 3, 3, 'Sameer', 'lahore, pakistan', '123456789', 'ebl@gmail.com', 'img/user\\zMgaFRNKcUkQAsB.jpg', 'no',
   'nice', 'ebl-02', 'secret', '2018-10-30 05:24:08', '2018-11-16 04:51:37'),
  (3, 'NCA', 1, 2, 1, 'MASOOD', 'anarkali', '123456789', 'nca@gmail.com', 'img/user\\Ove9zs0wnvcvoKy.jpg', 'no', 'good',
   'nca-03', '$2y$10$dmTupmRPBLdY43HOMdYpduzDtX3LEVrBYyBHnTOQJs10RYQZWozI2', '2018-11-06 04:18:47',
   '2018-11-17 01:30:17');

-- --------------------------------------------------------

--
-- Stand-in structure for view `customer_views`
-- (See below for the actual view)
--
CREATE TABLE `customer_views` (
  `ID`          INT(11)
  ,
  `CUST_NAME`   VARCHAR(200)
  ,
  `FKSTATUS`    INT(11)
  ,
  `STATUS_NAME` VARCHAR(100)
  ,
  `FKCATG`      INT(11)
  ,
  `CATG_NAME`   VARCHAR(100)
  ,
  `FKTYPE`      INT(11)
  ,
  `TYPE_NAME`   VARCHAR(100)
  ,
  `CPERSON`     VARCHAR(100)
  ,
  `ADRS`        VARCHAR(500)
  ,
  `TEL`         VARCHAR(100)
  ,
  `EMAIL`       VARCHAR(100)
  ,
  `AVATAR_URL`  VARCHAR(191)
  ,
  `URL`         VARCHAR(100)
  ,
  `RMKS`        VARCHAR(500)
  ,
  `USID`        VARCHAR(100)
  ,
  `PASSWORD`    VARCHAR(100)
  ,
  `CREATED_AT`  TIMESTAMP
  ,
  `UPDATED_AT`  TIMESTAMP
);

-- --------------------------------------------------------

--
-- Table structure for table `custstatuses`
--

CREATE TABLE `custstatuses` (
  `id`          INT(11)   NOT NULL,
  `STATUS_NAME` VARCHAR(100)   DEFAULT NULL,
  `created_at`  TIMESTAMP NULL DEFAULT NULL,
  `updated_at`  TIMESTAMP NULL DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- RELATIONSHIPS FOR TABLE `custstatuses`:
--

--
-- Dumping data for table `custstatuses`
--

INSERT INTO `custstatuses` (`id`, `STATUS_NAME`, `created_at`, `updated_at`) VALUES
  (1, 'Active', '2018-10-27 03:39:09', '2018-10-27 04:49:31'),
  (2, 'In Active', '2018-10-27 04:49:42', '2018-10-27 04:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `custtypes`
--

CREATE TABLE `custtypes` (
  `id`         INT(11)   NOT NULL,
  `TYPE_NAME`  VARCHAR(100)   DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- RELATIONSHIPS FOR TABLE `custtypes`:
--

--
-- Dumping data for table `custtypes`
--

INSERT INTO `custtypes` (`id`, `TYPE_NAME`, `created_at`, `updated_at`) VALUES
  (1, 'Public Limited', NULL, '2018-10-28 06:52:24'),
  (3, 'Private Limited', '2018-10-27 04:50:04', '2018-10-28 10:11:06'),
  (4, 'Partnership', '2018-10-27 04:50:15', '2018-10-27 04:50:15'),
  (5, 'Sole Properitor', '2018-10-27 04:50:32', '2018-10-27 04:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id`         INT(11)   NOT NULL,
  `DEPT_NAME`  VARCHAR(100)   DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- RELATIONSHIPS FOR TABLE `departments`:
--

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `DEPT_NAME`, `created_at`, `updated_at`) VALUES
  (1, 'Software Development', NULL, '2018-10-27 04:51:35'),
  (2, 'Web Development', '2018-10-27 04:19:29', '2018-10-27 04:51:15'),
  (3, 'Quality Assurance', '2018-10-27 04:50:54', '2018-10-27 04:50:54'),
  (4, 'Client Support', '2018-10-27 04:51:02', '2018-10-27 04:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id`         INT(11)   NOT NULL,
  `DESG_NAME`  VARCHAR(100)   DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- RELATIONSHIPS FOR TABLE `designations`:
--

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `DESG_NAME`, `created_at`, `updated_at`) VALUES
  (1, 'CEO', NULL, '2018-10-27 04:51:54'),
  (2, 'Project Manager', '2018-10-27 04:28:58', '2018-10-27 04:52:04'),
  (3, 'QA', '2018-10-27 04:52:12', '2018-10-27 04:52:12'),
  (4, 'Developer', '2018-10-27 04:52:21', '2018-10-27 04:52:21'),
  (5, 'Client Support', '2018-10-27 04:52:30', '2018-10-27 04:52:30'),
  (6, 'Admin', '2018-11-02 06:17:47', '2018-11-02 06:17:47'),
  (7, 'Designer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id`          INT(11)   NOT NULL,
  `EMP_NAME`    VARCHAR(100)   DEFAULT NULL,
  `EMP_FNAME`   VARCHAR(100)   DEFAULT NULL,
  `FKEMPSTATUS` INT(11)        DEFAULT NULL,
  `FKDEPT`      INT(11)        DEFAULT NULL,
  `FKDSG`       INT(11)        DEFAULT NULL,
  `ADRS`        VARCHAR(200)   DEFAULT NULL,
  `MOB`         VARCHAR(100)   DEFAULT NULL,
  `email`       VARCHAR(100)   DEFAULT NULL,
  `USID`        VARCHAR(100)   DEFAULT NULL,
  `password`    VARCHAR(100)   DEFAULT NULL,
  `created_at`  TIMESTAMP NULL DEFAULT NULL,
  `updated_at`  TIMESTAMP NULL DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- RELATIONSHIPS FOR TABLE `employees`:
--   `FKDEPT`
--       `departments` -> `id`
--   `FKDSG`
--       `designations` -> `id`
--   `FKEMPSTATUS`
--       `empstatuses` -> `id`
--

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `EMP_NAME`, `EMP_FNAME`, `FKEMPSTATUS`, `FKDEPT`, `FKDSG`, `ADRS`, `MOB`, `email`, `USID`, `password`, `created_at`, `updated_at`)
VALUES
  (1, 'admin', NULL, 1, 2, 6, 'islampura', '123456', 'admin@gmail.com', 'admin-01',
      '$2y$10$a2nyYipPgb..54XI2BbIWOxWC2xT73bNuTsZAYJ514CqTz9waJ.Ym', '2018-11-02 06:50:24', '2018-11-02 06:51:30'),
  (2, 'Amjad Hussain', 'M.Tufail', 1, 1, 2, 'bund road', '123456', 'amjad@gmail.com', 'amjad-02',
      '$2y$10$M3sr4Zs/NKtodQzADozDneRFSX7Jfo2D6ar3TRUR04JjSR034co2m', '2018-11-02 06:52:53', '2018-11-02 06:52:53'),
  (3, 'Shahzad', 'M.Shahzad', 1, 4, 4, 'Ferozpur road', '123456', 'shahzad@gmail.com', 'shah-03',
      '$2y$10$M8zA1WzypH704BjJrm4EH.l0omAaKNr/CFQYlN7nI.GsE72BHXs5y', '2018-11-02 08:12:39', '2018-11-02 08:12:39'),
  (4, 'Arsalan', 'M.Arsalan', 1, 4, 4, 'guwalmandi', '123456789', 'arsalan@gmail.com', 'arsal-04',
      '$2y$10$IvLk4wwFth96HOtZsdi31eib7.jojwHGvRdsx34fkgPMb8WrpckRi', '2018-11-05 06:56:09', '2018-11-05 06:56:09'),
  (5, 'Miss Anila', NULL, 1, 3, 3, 'ferozpur road', '123456789', 'anila@gmail.com', 'anila-05',
      '$2y$10$5OkRidyQs0Pe0VU4J9q0RuZO9k.omz1vp0ZH0RYgRIPHVX4w7l.O.', '2018-11-06 01:52:43', '2018-11-06 01:52:43'),
  (6, 'Mateen', NULL, 1, 4, 5, 'garden town', '123456789', 'mateen@gmail.com', 'mateen-06',
      '$2y$10$4xJHox3vPc4u3NGy.fWy0OWPjSa/YO7HaTHlysWECA2Z1a4Xe8pXG', '2018-11-06 03:17:21', '2018-11-06 03:17:21');

-- --------------------------------------------------------

--
-- Stand-in structure for view `employee_views`
-- (See below for the actual view)
--
CREATE TABLE `employee_views` (
  `ID`           INT(11)
  ,
  `EMP_NAME`     VARCHAR(100)
  ,
  `EMP_FNAME`    VARCHAR(100)
  ,
  `FKEMPSTATUS`  INT(11)
  ,
  `ESTATUS_NAME` VARCHAR(100)
  ,
  `FKDEPT`       INT(11)
  ,
  `DEPT_NAME`    VARCHAR(100)
  ,
  `FKDSG`        INT(11)
  ,
  `DESG_NAME`    VARCHAR(100)
  ,
  `ADRS`         VARCHAR(200)
  ,
  `MOB`          VARCHAR(100)
  ,
  `EMAIL`        VARCHAR(100)
  ,
  `USID`         VARCHAR(100)
  ,
  `PASSWORD`     VARCHAR(100)
  ,
  `CREATED_AT`   TIMESTAMP
  ,
  `UPDATED_AT`   TIMESTAMP
);

-- --------------------------------------------------------

--
-- Table structure for table `empstatuses`
--

CREATE TABLE `empstatuses` (
  `id`           INT(11)   NOT NULL,
  `ESTATUS_NAME` VARCHAR(100)   DEFAULT NULL,
  `created_at`   TIMESTAMP NULL DEFAULT NULL,
  `updated_at`   TIMESTAMP NULL DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- RELATIONSHIPS FOR TABLE `empstatuses`:
--

--
-- Dumping data for table `empstatuses`
--

INSERT INTO `empstatuses` (`id`, `ESTATUS_NAME`, `created_at`, `updated_at`) VALUES
  (1, 'Regular', NULL, '2018-10-28 06:47:33'),
  (2, 'Contract', '2018-10-27 04:39:25', '2018-10-27 04:52:55'),
  (3, 'Project Based', '2018-10-27 04:53:07', '2018-10-27 04:53:07'),
  (4, 'Probation', '2018-10-27 04:53:16', '2018-10-27 04:53:16'),
  (5, 'Internee', '2018-10-27 04:53:22', '2018-10-27 04:53:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id`        INT(10) UNSIGNED           NOT NULL,
  `migration` VARCHAR(191)
              COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch`     INT(11)                    NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `migrations`:
--

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
  (1, '2014_10_12_000000_create_users_table', 1),
  (2, '2014_10_12_100000_create_password_resets_table', 1),
  (4, '2018_10_25_064704_create_admins_table', 2),
  (5, '2018_10_30_075534_create_custs_table', 3),
  (6, '2018_10_30_082449_create_clients_table', 4),
  (7, '2018_11_01_060533_create_pmanagers_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email`      VARCHAR(191)
               COLLATE utf8mb4_unicode_ci NOT NULL,
  `token`      VARCHAR(191)
               COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` TIMESTAMP                  NULL DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `password_resets`:
--

-- --------------------------------------------------------

--
-- Table structure for table `reqstatuses`
--

CREATE TABLE `reqstatuses` (
  `id`             INT(11)   NOT NULL,
  `REQSTATUS_NAME` VARCHAR(100)   DEFAULT NULL,
  `created_at`     TIMESTAMP NULL DEFAULT NULL,
  `updated_at`     TIMESTAMP NULL DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- RELATIONSHIPS FOR TABLE `reqstatuses`:
--

--
-- Dumping data for table `reqstatuses`
--

INSERT INTO `reqstatuses` (`id`, `REQSTATUS_NAME`, `created_at`, `updated_at`) VALUES
  (1, 'Pending', NULL, '2018-10-27 04:53:40'),
  (2, 'In Process', '2018-10-27 04:53:49', '2018-10-27 04:53:49'),
  (3, 'On Hold', '2018-10-27 04:53:58', '2018-10-27 04:53:58'),
  (4, 'In Development', '2018-10-27 04:54:12', '2018-10-27 04:54:12'),
  (5, 'In QA', '2018-10-27 04:54:21', '2018-10-27 04:54:21'),
  (6, 'Deployed', '2018-10-27 04:54:29', '2018-10-27 04:54:29'),
  (7, 'Implemented', '2018-10-27 04:54:38', '2018-10-27 04:54:38'),
  (8, 'Completed', '2018-10-27 04:54:47', '2018-10-27 04:54:47'),
  (9, 'Rejected', '2018-10-27 04:54:54', '2018-10-27 04:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id`                INT(10) UNSIGNED           NOT NULL,
  `name`              VARCHAR(191)
                      COLLATE utf8mb4_unicode_ci NOT NULL,
  `email`             VARCHAR(191)
                      COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` TIMESTAMP                  NULL DEFAULT NULL,
  `password`          VARCHAR(191)
                      COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token`    VARCHAR(100)
                      COLLATE utf8mb4_unicode_ci      DEFAULT NULL,
  `created_at`        TIMESTAMP                  NULL DEFAULT NULL,
  `updated_at`        TIMESTAMP                  NULL DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
  (1, 'salman', 'salman@gmail.com', NULL, '$2y$10$qZ67ECQAVFo9y/mr3hbQWeN.df9kbqIZ66LqJUVS/P40nQWs2rKpm',
   'J2xBVuE4tt8i2mgQHfUYxZtwVPrjaXAHWExrYOV42w5usfljt5sSbMZhhnTH', '2018-10-25 01:52:44', '2018-10-25 01:52:44');

-- --------------------------------------------------------

--
-- Structure for view `crequest_views`
--
DROP TABLE IF EXISTS `crequest_views`;

CREATE ALGORITHM = UNDEFINED
  DEFINER =`root`@`localhost`
  SQL SECURITY DEFINER VIEW `crequest_views`  AS
  SELECT
    `cr`.`id`             AS `id`,
    `cr`.`REQ_DATE`       AS `REQ_DATE`,
    `cr`.`REQ_STATUS`     AS `REQ_STATUS`,
    `rs`.`REQSTATUS_NAME` AS `REQSTATUS_NAME`,
    `cr`.`FKCUST`         AS `FKCUST`,
    `cs`.`CUST_NAME`      AS `CUST_NAME`,
    `cr`.`MNAME`          AS `MNAME`,
    `cr`.`FORM_REPORT`    AS `FORM_REPORT`,
    `cr`.`RMKS`           AS `RMKS`,
    `cr`.`ASSGN_TO`       AS `ASSGN_TO`,
    `em`.`EMP_NAME`       AS `ASSGN_TO_EMP`,
    `cr`.`ASSGN_DATE`     AS `ASSGN_DATE`,
    `cr`.`START_DATE`     AS `START_DATE`,
    `cr`.`END_DATE`       AS `END_DATE`,
    `cr`.`DAYS`           AS `DAYS`,
    `cr`.`COMP_BY`        AS `COMP_BY`,
    `ec`.`EMP_NAME`       AS `COMP_BY_EMP`,
    `cr`.`COMP_DATE`      AS `COMP_DATE`,
    `cr`.`CHK_BY`         AS `CHK_BY`,
    `ch`.`EMP_NAME`       AS `CHK_BY_EMP`,
    `cr`.`CHK_DATE`       AS `CHK_DATE`,
    `cr`.`UPDT_BY`        AS `UPDT_BY`,
    `eu`.`EMP_NAME`       AS `UPDT_BY_EMP`,
    `cr`.`UPDT_DATE`      AS `UPDT_DATE`,
    `cr`.`CONF_DATE`      AS `CONF_DATE`,
    `cr`.`created_at`     AS `created_at`,
    `cr`.`updated_at`     AS `updated_at`
  FROM ((((((`crequests` `cr` LEFT JOIN `employees` `em` ON ((`cr`.`ASSGN_TO` = `em`.`id`))) LEFT JOIN `employees` `ec`
      ON ((`cr`.`COMP_BY` = `ec`.`id`))) LEFT JOIN `employees` `ch` ON ((`cr`.`CHK_BY` = `ch`.`id`))) LEFT JOIN
    `employees` `eu` ON ((`cr`.`UPDT_BY` = `eu`.`id`))) JOIN `customers` `cs` ON ((`cr`.`FKCUST` = `cs`.`id`))) JOIN
    `reqstatuses` `rs` ON ((`cr`.`REQ_STATUS` = `rs`.`id`)))
  ORDER BY `cr`.`id`;

-- --------------------------------------------------------

--
-- Structure for view `customer_views`
--
DROP TABLE IF EXISTS `customer_views`;

CREATE ALGORITHM = UNDEFINED
  DEFINER =`root`@`localhost`
  SQL SECURITY DEFINER VIEW `customer_views`  AS
  SELECT
    `cm`.`id`          AS `ID`,
    `cm`.`CUST_NAME`   AS `CUST_NAME`,
    `cm`.`FKSTATUS`    AS `FKSTATUS`,
    `cs`.`STATUS_NAME` AS `STATUS_NAME`,
    `cm`.`FKCATG`      AS `FKCATG`,
    `cg`.`CATG_NAME`   AS `CATG_NAME`,
    `cm`.`FKTYPE`      AS `FKTYPE`,
    `ct`.`TYPE_NAME`   AS `TYPE_NAME`,
    `cm`.`CPERSON`     AS `CPERSON`,
    `cm`.`ADRS`        AS `ADRS`,
    `cm`.`TEL`         AS `TEL`,
    `cm`.`email`       AS `EMAIL`,
    `cm`.`avatar_url`  AS `AVATAR_URL`,
    `cm`.`URL`         AS `URL`,
    `cm`.`RMKS`        AS `RMKS`,
    `cm`.`USID`        AS `USID`,
    `cm`.`password`    AS `PASSWORD`,
    `cm`.`created_at`  AS `CREATED_AT`,
    `cm`.`updated_at`  AS `UPDATED_AT`
  FROM (((`customers` `cm`
    JOIN `custstatuses` `cs`) JOIN `custcatgs` `cg`) JOIN `custtypes` `ct`)
  WHERE ((`cm`.`FKSTATUS` = `cs`.`id`) AND (`cm`.`FKCATG` = `cg`.`id`) AND (`cm`.`FKTYPE` = `ct`.`id`))
  ORDER BY `cm`.`id`;

-- --------------------------------------------------------

--
-- Structure for view `employee_views`
--
DROP TABLE IF EXISTS `employee_views`;

CREATE ALGORITHM = UNDEFINED
  DEFINER =`root`@`localhost`
  SQL SECURITY DEFINER VIEW `employee_views`  AS
  SELECT
    `em`.`id`           AS `ID`,
    `em`.`EMP_NAME`     AS `EMP_NAME`,
    `em`.`EMP_FNAME`    AS `EMP_FNAME`,
    `em`.`FKEMPSTATUS`  AS `FKEMPSTATUS`,
    `es`.`ESTATUS_NAME` AS `ESTATUS_NAME`,
    `em`.`FKDEPT`       AS `FKDEPT`,
    `dp`.`DEPT_NAME`    AS `DEPT_NAME`,
    `em`.`FKDSG`        AS `FKDSG`,
    `ds`.`DESG_NAME`    AS `DESG_NAME`,
    `em`.`ADRS`         AS `ADRS`,
    `em`.`MOB`          AS `MOB`,
    `em`.`email`        AS `EMAIL`,
    `em`.`USID`         AS `USID`,
    `em`.`password`     AS `PASSWORD`,
    `em`.`created_at`   AS `CREATED_AT`,
    `em`.`updated_at`   AS `UPDATED_AT`
  FROM (((`employees` `em`
    JOIN `empstatuses` `es`) JOIN `departments` `dp`) JOIN `designations` `ds`)
  WHERE ((`em`.`FKEMPSTATUS` = `es`.`id`) AND (`em`.`FKDEPT` = `dp`.`id`) AND (`em`.`FKDSG` = `ds`.`id`))
  ORDER BY `em`.`id`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attachments_fkreq_FK` (`fkreq`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Indexes for table `crequests`
--
ALTER TABLE `crequests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CREQUESTS_REQSTATUSES_FK` (`REQ_STATUS`),
  ADD KEY `CREQUESTS_CUSTOMERS_FK` (`FKCUST`),
  ADD KEY `CREQUESTS_EMPLOYEES_FK` (`ASSGN_TO`),
  ADD KEY `CREQUESTS_EMPLOYEES_COMP_FK` (`COMP_BY`),
  ADD KEY `CREQUESTS_EMPLOYEES_CHK_FK` (`CHK_BY`),
  ADD KEY `CREQUESTS_EMPLOYEES_UPDT_FK` (`UPDT_BY`);

--
-- Indexes for table `custcatgs`
--
ALTER TABLE `custcatgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `CUSTOMERS_CUSTSTATUSES_FK` (`FKSTATUS`),
  ADD KEY `CUSTOMERS_CUSTCATGS_FK` (`FKCATG`),
  ADD KEY `CUSTOMERS_CUSTTYPES_FK` (`FKTYPE`);

--
-- Indexes for table `custstatuses`
--
ALTER TABLE `custstatuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custtypes`
--
ALTER TABLE `custtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EMPLOYEES_EMPSTATUSES_FK` (`FKEMPSTATUS`),
  ADD KEY `EMPLOYEES_DESIGNATIONS_FK` (`FKDSG`),
  ADD KEY `EMPLOYEES_DEPARTMENTS_FK` (`FKDEPT`);

--
-- Indexes for table `empstatuses`
--
ALTER TABLE `empstatuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reqstatuses`
--
ALTER TABLE `reqstatuses`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 7;

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 26;

--
-- AUTO_INCREMENT for table `crequests`
--
ALTER TABLE `crequests`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 55;

--
-- AUTO_INCREMENT for table `custcatgs`
--
ALTER TABLE `custcatgs`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 10;

--
-- AUTO_INCREMENT for table `custstatuses`
--
ALTER TABLE `custstatuses`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT for table `custtypes`
--
ALTER TABLE `custtypes`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 5;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 8;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 7;

--
-- AUTO_INCREMENT for table `empstatuses`
--
ALTER TABLE `empstatuses`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 8;

--
-- AUTO_INCREMENT for table `reqstatuses`
--
ALTER TABLE `reqstatuses`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attachments`
--
ALTER TABLE `attachments`
  ADD CONSTRAINT `attachments_fkreq_FK` FOREIGN KEY (`fkreq`) REFERENCES `crequests` (`id`);

--
-- Constraints for table `crequests`
--
ALTER TABLE `crequests`
  ADD CONSTRAINT `CREQUESTS_CUSTOMERS_FK` FOREIGN KEY (`FKCUST`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `CREQUESTS_EMPLOYEES_CHK_FK` FOREIGN KEY (`CHK_BY`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `CREQUESTS_EMPLOYEES_COMP_FK` FOREIGN KEY (`COMP_BY`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `CREQUESTS_EMPLOYEES_FK` FOREIGN KEY (`ASSGN_TO`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `CREQUESTS_EMPLOYEES_UPDT_FK` FOREIGN KEY (`UPDT_BY`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `CREQUESTS_REQSTATUSES_FK` FOREIGN KEY (`REQ_STATUS`) REFERENCES `reqstatuses` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `CUSTOMERS_CUSTCATGS_FK` FOREIGN KEY (`FKCATG`) REFERENCES `custcatgs` (`id`),
  ADD CONSTRAINT `CUSTOMERS_CUSTSTATUSES_FK` FOREIGN KEY (`FKSTATUS`) REFERENCES `custstatuses` (`id`),
  ADD CONSTRAINT `CUSTOMERS_CUSTTYPES_FK` FOREIGN KEY (`FKTYPE`) REFERENCES `custtypes` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `EMPLOYEES_DEPARTMENTS_FK` FOREIGN KEY (`FKDEPT`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `EMPLOYEES_DESIGNATIONS_FK` FOREIGN KEY (`FKDSG`) REFERENCES `designations` (`id`),
  ADD CONSTRAINT `EMPLOYEES_EMPSTATUSES_FK` FOREIGN KEY (`FKEMPSTATUS`) REFERENCES `empstatuses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
