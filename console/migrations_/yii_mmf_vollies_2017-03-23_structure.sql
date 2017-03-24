-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2017 at 10:00 AM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii_mmf_vollies`
--

-- --------------------------------------------------------

--
-- Table structure for table `Application`
--

CREATE TABLE `Application` (
			'id' => 'int(11) UNSIGNED NOT NULL',
			'profileId' => 'int(11) UNSIGNED NOT NULL DEFAULT '0'',
			'preferredJobId1' => 'int(11) UNSIGNED DEFAULT '0'',
			'preferredJobId2' => 'int(11) UNSIGNED DEFAULT '0'',
			'preferredJobId3' => 'int(11) UNSIGNED DEFAULT '0'',
			'availableFromDate' => 'date NOT NULL',
			'availableFromTime' => 'tinyint(3) UNSIGNED NOT NULL',
			'availableToDate' => 'date NOT NULL',
			'availableToTime' => 'tinyint(3) UNSIGNED NOT NULL',
			'availabilityNotes' => 'text CHARACTER SET utf8',
			'otherNotes' => 'text CHARACTER SET utf8',
			'created' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'createdBy' => 'int(11) UNSIGNED NOT NULL DEFAULT '0'',
			'updated' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'updatedBy' => 'int(11) UNSIGNED NOT NULL DEFAULT '0'',
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Commitment`
--

CREATE TABLE `Commitment` (
			'id' => 'int(11) UNSIGNED NOT NULL',
			'profileId' => 'int(11) UNSIGNED NOT NULL DEFAULT '0'',
			'deptId' => 'int(11) UNSIGNED NOT NULL DEFAULT '0'',
			'year' => 'year(4) NOT NULL',
			'job' => 'varchar(32) CHARACTER SET utf8 NOT NULL',
			'hours' => 'tinyint(3) UNSIGNED NOT NULL DEFAULT '0'',
			'report' => 'text CHARACTER SET utf8 NOT NULL',
			'reinvite' => 'tinyint(3) UNSIGNED NOT NULL',
			'created' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'createdBy' => 'int(11) UNSIGNED NOT NULL DEFAULT '0'',
			'updated' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'updatedBy' => 'int(11) UNSIGNED NOT NULL DEFAULT '0'',
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Department`
--

CREATE TABLE `Department` (
			'id' => 'int(11) UNSIGNED NOT NULL',
			'sequence' => 'int(6) UNSIGNED NOT NULL',
			'name' => 'varchar(24) CHARACTER SET utf8 NOT NULL',
			'description' => 'text CHARACTER SET utf8',
			'created' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'createdBy' => 'int(11) UNSIGNED NOT NULL DEFAULT '0'',
			'updated' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'updatedBy' => 'int(11) UNSIGNED NOT NULL DEFAULT '0'',
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `HistoryItem`
--

CREATE TABLE `HistoryItem` (
			'id' => 'int(11) UNSIGNED NOT NULL',
			'profileId' => 'int(11) UNSIGNED NOT NULL DEFAULT '0'',
			'givenName' => 'varchar(32) CHARACTER SET utf8 NOT NULL',
			'familyName' => 'varchar(32) CHARACTER SET utf8 NOT NULL',
			'preferredName' => 'varchar(32) CHARACTER SET utf8 DEFAULT NULL',
			'email' => 'varchar(64) CHARACTER SET utf8 NOT NULL',
			'phone1' => 'varchar(24) CHARACTER SET utf8 DEFAULT NULL',
			'phone2' => 'varchar(24) CHARACTER SET utf8 DEFAULT NULL',
			'address1' => 'varchar(255) CHARACTER SET utf8 DEFAULT NULL',
			'address2' => 'varchar(255) CHARACTER SET utf8 DEFAULT NULL',
			'locality' => 'varchar(64) CHARACTER SET utf8 NOT NULL',
			'state' => 'varchar(16) CHARACTER SET utf8 DEFAULT 'Qld'',
			'postcode' => 'varchar(12) CHARACTER SET utf8 DEFAULT NULL',
			'country' => 'varchar(32) CHARACTER SET utf8 DEFAULT 'Australia'',
			'emergencyContact' => 'varchar(64) CHARACTER SET utf8 NOT NULL',
			'emergencyPhone1' => 'varchar(24) CHARACTER SET utf8 NOT NULL',
			'emergencyPhone2' => 'varchar(24) CHARACTER SET utf8 DEFAULT NULL',
			'rsa' => 'tinyint(1) NOT NULL DEFAULT '0'',
			'dl_c' => 'tinyint(1) NOT NULL DEFAULT '0'',
			'dl_h' => 'tinyint(1) NOT NULL DEFAULT '0'',
			'cse' => 'tinyint(1) NOT NULL DEFAULT '0'',
			'ohs' => 'tinyint(1) NOT NULL DEFAULT '0'',
			'vol' => 'tinyint(1) NOT NULL DEFAULT '0'',
			'mmfVol' => 'tinyint(1) NOT NULL DEFAULT '0'',
			'mmfAtt' => 'tinyint(1) NOT NULL DEFAULT '0'',
			'returned' => 'tinyint(1) NOT NULL DEFAULT '0'',
			'preferredJobs' => 'text CHARACTER SET utf8 NOT NULL',
			'availability' => 'text CHARACTER SET utf8 NOT NULL',
			'commentsInformation' => 'text CHARACTER SET utf8 NOT NULL',
			'discovery' => 'text CHARACTER SET utf8 NOT NULL',
			'createdOrig' => 'timestamp NULL DEFAULT NULL',
			'updatedOrig' => 'timestamp NULL DEFAULT NULL',
			'ip' => 'varchar(16) CHARACTER SET utf8 DEFAULT NULL',
			'keyOrig' => 'varchar(8) CHARACTER SET utf8 DEFAULT NULL',
			'created' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'createdBy' => 'int(11) UNSIGNED NOT NULL DEFAULT '0'',
			'updated' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'updatedBy' => 'int(11) UNSIGNED NOT NULL DEFAULT '0'',
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Job`
--

CREATE TABLE `Job` (
			'id' => 'int(11) UNSIGNED NOT NULL',
			'deptId' => 'int(11) UNSIGNED NOT NULL DEFAULT '0'',
			'sequence' => 'int(8) UNSIGNED NOT NULL',
			'name' => 'varchar(24) CHARACTER SET utf8 NOT NULL',
			'menuGroup' => 'varchar(24) CHARACTER SET utf8 NOT NULL',
			'description' => 'text CHARACTER SET utf8',
			'created' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'createdBy' => 'int(11) UNSIGNED NOT NULL DEFAULT '0'',
			'updated' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'updatedBy' => 'int(11) UNSIGNED NOT NULL DEFAULT '0'',
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Application`
--
ALTER TABLE `Application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Commitment`
--
ALTER TABLE `Commitment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `name_2` (`name`);

--
-- Indexes for table `HistoryItem`
--
ALTER TABLE `HistoryItem`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `profileId_idxfk_2` (`profileId`);

--
-- Indexes for table `Job`
--
ALTER TABLE `Job`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `deptId_idxfk` (`deptId`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_user_id` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`email`),
  ADD UNIQUE KEY `user_username` (`username`),
  ADD KEY `user_role_id` (`role_id`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_auth_provider_id` (`provider_id`),
  ADD KEY `user_auth_user_id` (`user_id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_token_token` (`token`),
  ADD KEY `user_token_user_id` (`user_id`);

--
-- Indexes for table `Volunteer`
--
ALTER TABLE `Volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Application`
--
ALTER TABLE `Application`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Commitment`
--
ALTER TABLE `Commitment`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=406;
--
-- AUTO_INCREMENT for table `Department`
--
ALTER TABLE `Department`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `HistoryItem`
--
ALTER TABLE `HistoryItem`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=407;
--
-- AUTO_INCREMENT for table `Job`
--
ALTER TABLE `Job`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;
--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Volunteer`
--
ALTER TABLE `Volunteer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=384;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Constraints for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD CONSTRAINT `user_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_token`
--
ALTER TABLE `user_token`
  ADD CONSTRAINT `user_token_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
