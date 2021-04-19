-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 17, 2021 at 03:24 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madrasat_muslima`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `Description` longtext NOT NULL,
  `page_id` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `Description`, `page_id`) VALUES
(1, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<h1 style=\"text-align: center;\"><strong><span style=\"color: #ff0000;\">ABOUT</span> US</strong></h1>\r\n<hr />\r\n<p><span style=\"font-size: large;\">Madrasatul Mislima, is a highly successful independent Islamic school.</span></p>\r\n<p><br /><span style=\"font-size: large;\"> Our academic results are consistently outstanding whilst our pupils excel in the comprehensive Islamic studies programmes. Founded in 2001, the Academy continues to embody intellectual and spiritual development.</span></p>\r\n<p><br /><span style=\"font-size: large;\"> With the grace of the Almighty, we moved to our newly refurbished spacious premises in 2015. We now offer enhanced and modern facilities where pupils learn in a creative and safe environment. At Jameah Girls Academy we are passionate about educating young British Muslims and enabling their contribution to the wider community.</span></p>\r\n<p><br /><span style=\"font-size: large;\"> If you would like to arrange a tour of the School and meet the Headteacher, </span></p>\r\n<p><span style=\"font-size: large;\">Â </span></p>\r\n<p><span style=\"font-size: large;\">her colleagues and the girls themselves, simply get in touch with the Registrar using the details on the Contact page.</span></p>\r\n</body>\r\n</html>', '1'),
(2, '<h3>Â <span style=\"font-size: medium;\"><img src=\"https://www.irishtimes.com/polopoly_fs/1.3158018.1500311533!/image/image.jpg_gen/derivatives/box_620_330/image.jpg\" alt=\"\" width=\"346\" height=\"124\" /></span></h3>\r\n<h4><strong>Assalamu alaykum and a very warm welcome to you!</strong></h4>\r\n<p><span style=\"font-size: medium;\">It is a pleasure and an honour for me to introduce myself as the Head Teacher at Jameah Girls Academy. I have been fortunate to have been a member of Jameahs dedicated team almost since its inception in 2001. </span><br /><br /><span style=\"font-size: medium;\"> We have come such a long way since we started with a handful of pupils who followed the hifz programme, all being nurtured and cared for by a team of committed and caring teachers, leaders and governors. </span><br /><br /><span style=\"font-size: medium;\"> Our ethos then, and now, is that each pupil in our care is an amaanah (trust), and deserves the best opportunities for realising her potential as a well-rounded British Muslim who is able to go on to achieve great things both within and beyond the classroom. </span><br /><br /><span style=\"font-size: medium;\"> We offer a rich, creative and stimulating curriculum to our pupils, and our excellent GCSE results, year after year are a testament to this. By the end of their time with us, all our pupils have been given the opportunity to achieve their English Baccalaureate, and a great many complete either the Aalimiyyah Foundation programme or our renowned Tahfizul Quran programme in addition to this. Jameah Girls is so much more than a place where girls can achieve well academically; we embed comprehensive Islamic studies and tarbiyah programmes into our school day, helping our girls develop excellence in character and hold sound Islamic and British Values. </span></p>\r\n<p><br /><span style=\"font-size: medium;\"> We are a small school with a single-form entry, providing each class with a family atmosphere. Pupils are able to form strong bonds of friendship with their peers and we have an emphasis on pupil welfare and wellbeing. Pupils are encouraged to contribute to the life of the school through the Student Council, by taking part in assemblies and have opportunities for volunteering and leadership within school. Our pupils are from a diverse range of backgrounds and we strongly promote compassion towards others, tolerance and mutual respect among all our pupils and the wider world that we live in. </span></p>\r\n<p><br /><span style=\"font-size: medium;\"> Our pupils are consistently encouraged to contribute significantly to the wider community. We are proud of the work our pupils do to support community and charity projects, at local, national and international levels. We also instil in our pupils a sense of pride in their lslamic and British values, as it is through these values that they can truly know who they are and be confident of their place in society. We strongly encourage our pupils to take part in activities which widen their horizons, and frequently ask guest speakers from diverse backgrounds and skills to work with them. This, coupled with an annual complement of trips outside of school, helps our pupils to know they can achieve anything once they leave us. Please refer to our careers section to learn more about how our girls are supported towards making informed choices about what path to take once they leave us. </span></p>\r\n<p><br /><br /><span style=\"font-size: medium;\"> Our mainstay of support as a school comes from our fantastic parents. We welcome parents in during end of year assemblies and sports days, for workshops and as volunteers. We also welcome suggestions and feedback from parents. If you are considering sending your daughter to our school, please do pay us a visit, as meeting our pupils and staff is the best way of understanding what makes JGA the exceptional place it is. We also have an annual Open Day, and it would be great to see you there. </span></p>\r\n<p><br /><br /><span style=\"font-size: medium;\"> Should you have any queries, please do contact our school office, and we will be happy to help you.</span><br /><br /><span style=\"font-size: medium;\"> Wassalam,</span></p>', '2');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE IF NOT EXISTS `admin_user` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `status`, `photo`) VALUES
(1, 'Admin', 'Account', 'admin@madrasatulmuslima.com', 'madrasatul_muslima', '960e039ce04406f7586799704e334fe9', 'admin', 'img/6bd66a7ac9.png'),
(2, 'Moderator', 'Account', 'moderator@madrasatulmuslimatokyo.com', 'moderator', '960e039ce04406f7586799704e334fe9', 'moderator', 'img/6bd66a7ac9.png');

-- --------------------------------------------------------

--
-- Table structure for table `admission_apply_page_one_defult_info`
--

DROP TABLE IF EXISTS `admission_apply_page_one_defult_info`;
CREATE TABLE IF NOT EXISTS `admission_apply_page_one_defult_info` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `Description` longtext NOT NULL,
  `application_form` longtext NOT NULL,
  `righ_bar_image` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_apply_page_one_defult_info`
--

INSERT INTO `admission_apply_page_one_defult_info` (`id`, `Description`, `application_form`, `righ_bar_image`) VALUES
(1, 'The application form is available upon request from the school office. Once you receive it, please return the completed form to the school along with the required documents. Get in touch via the form below. ', 'file/Application Form  2017-03-31.docx', 'generalimage/applicationform.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admission_apply_page_two`
--

DROP TABLE IF EXISTS `admission_apply_page_two`;
CREATE TABLE IF NOT EXISTS `admission_apply_page_two` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `Name` longtext NOT NULL,
  `Email` longtext NOT NULL,
  `Phone` longtext NOT NULL,
  `Subject` longtext NOT NULL,
  `Message` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admission_vacancies`
--

DROP TABLE IF EXISTS `admission_vacancies`;
CREATE TABLE IF NOT EXISTS `admission_vacancies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Description` longtext NOT NULL,
  `page_id` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_vacancies`
--

INSERT INTO `admission_vacancies` (`id`, `Description`, `page_id`) VALUES
(1, '<h1 style=\"text-align: center;\"><span style=\"font-size: large;\"> VACANCIES </span></h1>\r\n<p style=\"text-align: center;\"><strong><span style=\"font-size: large;\">Jameah Girls Academy is seeking to recruit an experienced and highly committed KS3 &amp; 4 history teacher.</span></strong></p>\r\n<p style=\"text-align: center;\"><strong><span style=\"font-size: large;\"><br /></span></strong></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: large;\">The successful candidate will have a sound understanding of effective teaching and learning, have a deep and broad knowledge of the curriculum and be able to consistently improve outcomes for pupils.? The post is a part-time maternity cover for one year.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: large;\"><br /></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: large;\"> Jameah Girls Academy is committed to the protection and safety of its pupils. The successful candidate will be subject to enhanced DBS disclosure procedures and suitable references being provided.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: large;\"><br /></span></p>\r\n<p ></p>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cat_about`
--

DROP TABLE IF EXISTS `cat_about`;
CREATE TABLE IF NOT EXISTS `cat_about` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_about`
--

INSERT INTO `cat_about` (`id`, `name`) VALUES
(1, 'About Us'),
(2, 'Head Teachers Welcome');

-- --------------------------------------------------------

--
-- Table structure for table `cat_gallery`
--

DROP TABLE IF EXISTS `cat_gallery`;
CREATE TABLE IF NOT EXISTS `cat_gallery` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_gallery`
--

INSERT INTO `cat_gallery` (`id`, `name`) VALUES
(1, 'Madrasah Facilites'),
(2, 'Art Exhibition'),
(3, 'Classrooms'),
(4, 'Pet Chicks');

-- --------------------------------------------------------

--
-- Table structure for table `cat_information`
--

DROP TABLE IF EXISTS `cat_information`;
CREATE TABLE IF NOT EXISTS `cat_information` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_information`
--

INSERT INTO `cat_information` (`id`, `name`) VALUES
(1, 'Parent Privacy Notice'),
(2, 'Support Links'),
(3, 'Public Statement'),
(4, 'Term Dates'),
(5, 'Curreculum'),
(6, 'Careers'),
(7, 'Fire Safty Notice'),
(8, 'Policies');

-- --------------------------------------------------------

--
-- Table structure for table `cat_teachers`
--

DROP TABLE IF EXISTS `cat_teachers`;
CREATE TABLE IF NOT EXISTS `cat_teachers` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_teachers`
--

INSERT INTO `cat_teachers` (`id`, `name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_default_content`
--

DROP TABLE IF EXISTS `contact_us_default_content`;
CREATE TABLE IF NOT EXISTS `contact_us_default_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us_default_content`
--

INSERT INTO `contact_us_default_content` (`id`, `header`, `image`) VALUES
(1, 'We can\'t wait to show you around our school! Well introduce you to our teachers, visit your childern classroom, and answer your questions.', 'contact.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `footer_area`
--

DROP TABLE IF EXISTS `footer_area`;
CREATE TABLE IF NOT EXISTS `footer_area` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `Madrasa_hours_title` longtext NOT NULL,
  `Madrasa_hours_time` longtext NOT NULL,
  `Telephone_title` longtext NOT NULL,
  `Telephone_number` longtext NOT NULL,
  `Mobile_number` longtext NOT NULL,
  `Madrasa_address_title` longtext NOT NULL,
  `Madrasa_address` longtext NOT NULL,
  `Madrasa_email_address` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer_area`
--

INSERT INTO `footer_area` (`id`, `Madrasa_hours_title`, `Madrasa_hours_time`, `Telephone_title`, `Telephone_number`, `Mobile_number`, `Madrasa_address_title`, `Madrasa_address`, `Madrasa_email_address`) VALUES
(1, 'à¦¸à¦¾à¦°à§à¦¬à¦•à§à¦·à¦¨à¦¿à¦• à¦¸à§‡à¦¬à¦¾', 'à¦¸à¦•à¦¾à¦² à§§à§¦ à¦Ÿà¦¾ à¦¥à§‡à¦•à§‡ à¦¬à¦¿à¦•à¦¾à¦² à§« à¦Ÿà¦¾ à¦ªà¦°à§à¦¯à¦¨à§à¦¤', 'à¦®à§‹à¦¬à¦¾à¦‡à¦² à¦¨à¦¾à¦®à§à¦¬à¦¾à¦°', 'à§¦à§§à§­à§®à§¯-à§¬à§¬à§©à§®à§­à§­', '81-3-6657-7939 ', 'à¦†à¦¦à¦°à§à¦¶ à¦¨à¦¾à¦—à¦°à¦¿à¦• à¦«à¦¾à¦‰à¦¨à§à¦¡à§‡à¦¶à¦¨', '<p>à¦ªà§à¦°à¦§à¦¾à¦¨ à¦•à¦¾à¦°à§à¦¯à¦¾à¦²à§Ÿà¦ƒ</p>\r\n<p>à§ªà§ª à¦¨à¦‚, à¦à¦¸.à¦à¦®. à¦®à¦¾à¦²à§‡à¦¹ à¦°à§‹à¦¡,Â </p>\r\n<p>à§¨à§Ÿ à¦¤à¦²à¦¾ à¦Ÿà¦¾à¦¨à¦¬à¦¾à¦œà¦¾à¦°, à¦¨à¦¾à¦°à¦¾à§Ÿà¦¨à¦—à¦žà§à¦œà¥¤Â </p>', 'admin@icwfbd.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_menu`
--

DROP TABLE IF EXISTS `gallery_menu`;
CREATE TABLE IF NOT EXISTS `gallery_menu` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `image` longtext NOT NULL,
  `page_id` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_menu`
--

INSERT INTO `gallery_menu` (`id`, `title`, `image`, `page_id`) VALUES
(3, 'Slider One', 'sliderimage/230d519225.jpg', '3');

-- --------------------------------------------------------

--
-- Table structure for table `header_contact_us_page`
--

DROP TABLE IF EXISTS `header_contact_us_page`;
CREATE TABLE IF NOT EXISTS `header_contact_us_page` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `Name` longtext NOT NULL,
  `Email` longtext NOT NULL,
  `Mobile` longtext NOT NULL,
  `Message` longtext NOT NULL,
  `Seen_unseen_id` longtext NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `header_jobs_page`
--

DROP TABLE IF EXISTS `header_jobs_page`;
CREATE TABLE IF NOT EXISTS `header_jobs_page` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `Title` longtext NOT NULL,
  `Tagline` longtext NOT NULL,
  `Description` longtext NOT NULL,
  `Vacancy` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header_jobs_page`
--

INSERT INTO `header_jobs_page` (`id`, `Title`, `Tagline`, `Description`, `Vacancy`) VALUES
(1, 'JOIN OUR TEAM', 'We Are Looking To Recruit Vibrant People To Join Our Growing Team For The New 2019/20 Academic Year', '<h3><span style=\"text-decoration: underline;\"><span style=\"font-size: medium;\"> Objection </span></span></h3>\r\n<p><span style=\"font-size: medium;\">Demo Text you can change your own content. you can change your own content. Demo Text you can change your own content. Demo Text you can change your own content. you can change your own content. Demo Text you can change your own content. Demo Text you can change your own content. you can change your own content. Demo Text you can change your own content. Demo Text you can change your own content. you can change your own content. Demo Text you can change your own content. </span></p>\r\n<h3><span style=\"text-decoration: underline;\"><span style=\"font-size: medium;\">What we are looking for </span></span></h3>\r\n<p><span style=\"font-size: medium;\">Demo Text you can change your own content. you can change your own content. Demo Text you can change your own content. Demo Text you can change your own content. you can change your own content. Demo Text you can change your own content. Demo Text you can change your own content. you can change your own content. Demo Text you can change your own content. Demo Text you can change your own content. you can change your own content. Demo Text you can change your own content.</span></p>', '<h3>Current Vacancy</h3>\r\n<h4><span style=\"font-size: medium;\">Male Assistant</span></h4>\r\n<p><span style=\"font-size: medium;\"> Demo Text you can change your own content. you can change your own content. Demo Text you can change your own content.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `header_lawp_content`
--

DROP TABLE IF EXISTS `header_lawp_content`;
CREATE TABLE IF NOT EXISTS `header_lawp_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `short_intro` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header_lawp_content`
--

INSERT INTO `header_lawp_content` (`id`, `title`, `short_intro`) VALUES
(1, 'AWARDS', 'you can change your own content. Demo Text you can change your own content.');

-- --------------------------------------------------------

--
-- Table structure for table `header_lawp_page`
--

DROP TABLE IF EXISTS `header_lawp_page`;
CREATE TABLE IF NOT EXISTS `header_lawp_page` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `image` longtext NOT NULL,
  `image_title` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `header_teachers_page_info`
--

DROP TABLE IF EXISTS `header_teachers_page_info`;
CREATE TABLE IF NOT EXISTS `header_teachers_page_info` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  `about` longtext NOT NULL,
  `teachers_cat_id` longtext NOT NULL,
  `desigination` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `header_teachers_page_one`
--

DROP TABLE IF EXISTS `header_teachers_page_one`;
CREATE TABLE IF NOT EXISTS `header_teachers_page_one` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `Title` longtext NOT NULL,
  `Tagline` longtext NOT NULL,
  `Tagline2` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header_teachers_page_one`
--

INSERT INTO `header_teachers_page_one` (`id`, `Title`, `Tagline`, `Tagline2`) VALUES
(1, 'à¦¸à§à¦¥à¦¾à§Ÿà§€ à¦•à¦®à¦¿à¦Ÿà¦¿à¦° à¦¤à¦¾à¦²à¦¿à¦•à¦¾', 'à¦¨à¦¾à¦°à¦¾à§Ÿà¦£à¦—à¦žà§à¦œ', '');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider_image`
--

DROP TABLE IF EXISTS `home_slider_image`;
CREATE TABLE IF NOT EXISTS `home_slider_image` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `image` longtext NOT NULL,
  `Title` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_slider_image`
--

INSERT INTO `home_slider_image` (`id`, `image`, `Title`) VALUES
(1, 'sliderimage/c546b547f0.jpg', 'Slider One'),
(4, 'sliderimage/d89ac13a4a.jpg', 'Slider One');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider_video`
--

DROP TABLE IF EXISTS `home_slider_video`;
CREATE TABLE IF NOT EXISTS `home_slider_video` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `video_link` longtext NOT NULL,
  `video_thumnail` longtext NOT NULL,
  `video_title` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_slider_video`
--

INSERT INTO `home_slider_video` (`id`, `video_link`, `video_thumnail`, `video_title`) VALUES
(5, 'https://www.youtube.com/embed/ZCyszfn40AQ', 'sliderimage/d4d636da4b.jpg', 'What Happens To The Muslim Soul After Death'),
(6, 'https://www.youtube.com/embed/v0Zq8ogbpFQ', 'sliderimage/3a2c9ec04e.jpg', 'What Happens');

-- --------------------------------------------------------

--
-- Table structure for table `information_menu`
--

DROP TABLE IF EXISTS `information_menu`;
CREATE TABLE IF NOT EXISTS `information_menu` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `Description` longtext NOT NULL,
  `page_id` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

DROP TABLE IF EXISTS `notice_board`;
CREATE TABLE IF NOT EXISTS `notice_board` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` longtext NOT NULL,
  `image` longtext NOT NULL,
  `description` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`id`, `title`, `image`, `description`, `date`) VALUES
(1, 'Notice one testng', 'generalimage/3d19e17f83.', '<p>Testing content</p>', '2019-11-10 16:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

DROP TABLE IF EXISTS `site_info`;
CREATE TABLE IF NOT EXISTS `site_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` text NOT NULL,
  `site_titile` text NOT NULL,
  `site_slogan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`id`, `logo`, `site_titile`, `site_slogan`) VALUES
(1, 'img/6bd66a7ac9.png', 'à¦†à¦¦à¦°à§à¦¶ à¦¨à¦¾à¦—à¦°à¦¿à¦• à¦«à¦¾à¦‰à¦¨à§à¦¡à§‡à¦¶à¦¨', '(à¦…à¦°à¦¾à¦œà¦¨à§ˆà¦¤à¦¿à¦•, à¦¸à§‡à¦¬à¦¾à¦§à¦°à§à¦®à§€, à¦®à¦¾à¦¦à¦• à¦¬à¦¿à¦°à§‹à¦§à§€ à¦“ à¦—à¦¬à§‡à¦¶à¦¨à¦¾à¦®à§‚à¦²à¦• à¦¸à¦‚à¦¸à§à¦¥à¦¾)');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_table`
--

DROP TABLE IF EXISTS `subscriber_table`;
CREATE TABLE IF NOT EXISTS `subscriber_table` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `subscriber_email` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber_table`
--

INSERT INTO `subscriber_table` (`id`, `subscriber_email`) VALUES
(1, 'hostamar1@gmail.com'),
(2, 'raselnj96@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
