-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2012 at 06:21 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `freixenet_extranet`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_assets`
--

CREATE TABLE IF NOT EXISTS `cms_assets` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `wine_id` int(11) NOT NULL DEFAULT '0',
  `vintage_id` int(11) NOT NULL DEFAULT '0',
  `program_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filetype_jpg` tinyint(1) NOT NULL DEFAULT '0',
  `filetype_tif` tinyint(1) NOT NULL DEFAULT '0',
  `filetype_pdf` tinyint(1) NOT NULL DEFAULT '0',
  `filetype_eps` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `brand_id` (`brand_id`),
  KEY `wine_id` (`wine_id`),
  KEY `vintage_id` (`vintage_id`),
  KEY `program_id` (`program_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cms_asset_permissions`
--

CREATE TABLE IF NOT EXISTS `cms_asset_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asset_id` int(11) NOT NULL,
  `sort_number` int(11) NOT NULL,
  `display` enum('current','archived','hidden') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cms_pages`
--

CREATE TABLE IF NOT EXISTS `cms_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL DEFAULT '0',
  `wine_id` int(11) NOT NULL DEFAULT '0',
  `vintage_id` int(11) NOT NULL DEFAULT '0',
  `program_id` int(11) NOT NULL,
  `subpage` tinyint(1) NOT NULL,
  `url_index` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `brand_id` (`brand_id`),
  KEY `wine_id` (`wine_id`),
  KEY `vintage_id` (`vintage_id`),
  KEY `url_index` (`url_index`),
  KEY `program_id` (`program_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cms_page_sections`
--

CREATE TABLE IF NOT EXISTS `cms_page_sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `sort_number` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `image_alt` varchar(255) NOT NULL,
  `image_align` enum('left','right') NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `image_border` tinyint(1) NOT NULL,
  `pdf_url` varchar(255) NOT NULL,
  `hidden` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `page_id` (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cms_program_permissions`
--

CREATE TABLE IF NOT EXISTS `cms_program_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `program_id` int(11) NOT NULL,
  `sort_number` int(11) NOT NULL,
  `display` enum('current','archived','hidden') NOT NULL DEFAULT 'current',
  PRIMARY KEY (`id`),
  KEY `wine_id` (`program_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cms_review_permissions`
--

CREATE TABLE IF NOT EXISTS `cms_review_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_id` int(11) NOT NULL,
  `sort_number` int(11) NOT NULL,
  `display` enum('current','archived','hidden') NOT NULL,
  `medal` tinyint(1) NOT NULL,
  `wine_necker` tinyint(1) NOT NULL,
  `shelf_talker` tinyint(1) NOT NULL,
  `review_sheet` tinyint(1) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `stg` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cms_seo`
--

CREATE TABLE IF NOT EXISTS `cms_seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `wine_id` int(11) NOT NULL DEFAULT '0',
  `vintage_id` int(11) NOT NULL DEFAULT '0',
  `program_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `brand_id` (`brand_id`),
  KEY `wine_id` (`wine_id`),
  KEY `vintage_id` (`vintage_id`),
  KEY `program_id` (`program_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cms_vintage_permissions`
--

CREATE TABLE IF NOT EXISTS `cms_vintage_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vintage_id` int(11) NOT NULL,
  `sort_number` int(11) NOT NULL,
  `display` enum('current','archived','hidden') NOT NULL DEFAULT 'current',
  `stg` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `wine_id` (`vintage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cms_wine_permissions`
--

CREATE TABLE IF NOT EXISTS `cms_wine_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wine_id` int(11) NOT NULL,
  `sort_number` int(11) NOT NULL,
  `display` enum('current','archived','hidden') NOT NULL DEFAULT 'current',
  `stg` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `wine_id` (`wine_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `core_brands`
--

CREATE TABLE IF NOT EXISTS `core_brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `core_brand_urls`
--

CREATE TABLE IF NOT EXISTS `core_brand_urls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `mobile_url` varchar(255) NOT NULL,
  `facebook_url` varchar(255) NOT NULL,
  `twitter_url` varchar(255) NOT NULL,
  `youtube_url` varchar(255) NOT NULL,
  `other1_url` varchar(255) NOT NULL,
  `other2_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `brand_id` (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `core_programs`
--

CREATE TABLE IF NOT EXISTS `core_programs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `core_reviews`
--

CREATE TABLE IF NOT EXISTS `core_reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `wine_id` int(11) NOT NULL DEFAULT '0',
  `vintage_id` int(11) NOT NULL DEFAULT '0',
  `rating` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `source` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `brand_id` (`brand_id`),
  KEY `wine_id` (`wine_id`),
  KEY `vintage_id` (`vintage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `core_users`
--

CREATE TABLE IF NOT EXISTS `core_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `core_user_permissions`
--

CREATE TABLE IF NOT EXISTS `core_user_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `permission_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `permission_type` (`permission_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `core_vintages`
--

CREATE TABLE IF NOT EXISTS `core_vintages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `wine_id` int(11) NOT NULL,
  `vintage` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `tasting_notes` text NOT NULL,
  `winemaking` text NOT NULL,
  `region_vineyards` text NOT NULL,
  `food_pairings` text NOT NULL,
  `analysis` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `wine_id` (`wine_id`),
  KEY `brand_id` (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `core_wines`
--

CREATE TABLE IF NOT EXISTS `core_wines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `brand_id` (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
