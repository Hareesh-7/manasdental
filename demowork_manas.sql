-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2021 at 12:44 PM
-- Server version: 10.3.25-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demowork_manas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_ips`
--

CREATE TABLE `admin_ips` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_ips`
--

INSERT INTO `admin_ips` (`id`, `ip_address`) VALUES
(1, '43.243.118.33');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `sub_title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `title`, `sub_title`, `image`, `description`) VALUES
(1, 'Welcome To', 'MaNaS Dental Care', '1612353791_about.jpg', '<p>Located right in the center of the city, our clinic has the pleasure of treating patients from all the areas of Vishakhapatnam. &#39;Team MaNaS&#39; is very passionate about dentistry and we are committed to provide best quality treatment. Our aim is to see you walk out of the door with a beautiful smile. Patient is our first priority in each and every circumstance. We give preference to long term benefits in treatment plannning.</p>\r\n\r\n<p>We assure you 100% patient &nbsp;satisfaction and confident enough to charge only if you are completely satisfied with our services*.</p>\r\n'),
(2, 'Mission', '', 'N/A', '<p>Provide the best quality dental services to our patients at an affordable cost</p>\r\n'),
(3, 'Vision', '', 'N/A', '<p>Emerge as a leader in innovative dentistry over the next 5 years</p>\r\n'),
(4, 'Values', 'N/A', 'N/A', 'Quality, affordability and Ethics'),
(5, 'Patient Education', 'N/A', '1612355097_patient-edu.png', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Elementum sagittis vitae et leo duis ut diam quam. Facilisis magna etiam tempor orci eu lobortis. Blandit libero volutpat sed cras. Et netus et malesuada fames ac turpis. Placerat duis ultricies lacus sed turpis tincidunt id. Tristique senectus et netus et malesuada fames. Praesent semper feugiat nibh sed pulvinar proin. Est ullamcorper eget nulla facilisi etiam dignissim diam quis. Eu ultrices vitae auctor eu augue. Tortor dignissim convallis aenean et tortor at risus viverra adipiscing. Ac orci phasellus egestas tellus rutrum. Eget mauris pharetra et ultrices neque ornare aenean. Diam sollicitudin tempor id eu nisl nunc mi ipsum. Nunc consequat interdum varius sit.</p>\r\n'),
(6, 'Why Choose This Service', '', 'N/A', '<p>Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.</p>\r\n'),
(7, 'Action', '', 'N/A', '<p>We Ensure Safe Dental Sergery</p>\r\n'),
(8, 'Quick Contact', 'Get Solution', 'N/A', '<p>Contact us at the Medicoz office nearest to you or submit a business inquiry online.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `count` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `title`, `count`) VALUES
(1, 'Years Of Experience', '6'),
(2, 'Medical Specialities', '3'),
(3, 'Dental Facilities', '11'),
(4, 'Smiles and growing', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `site_name` varchar(250) NOT NULL,
  `site_number` varchar(250) NOT NULL,
  `site_email` varchar(250) NOT NULL,
  `from_email` varchar(250) NOT NULL,
  `forgot_email` varchar(250) NOT NULL,
  `site_logo` varchar(250) NOT NULL,
  `site_favicon` varchar(250) NOT NULL,
  `footer_logo` varchar(250) NOT NULL,
  `footer_name` varchar(250) NOT NULL,
  `footer_context` text NOT NULL,
  `address` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_number1` varchar(250) NOT NULL,
  `office_timings` varchar(250) NOT NULL,
  `call_timings` varchar(250) NOT NULL,
  `close_timings` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `site_name`, `site_number`, `site_email`, `from_email`, `forgot_email`, `site_logo`, `site_favicon`, `footer_logo`, `footer_name`, `footer_context`, `address`, `email`, `phone_number1`, `office_timings`, `call_timings`, `close_timings`) VALUES
(1, 'Manas Dental Care', '+91 9652550762', 'manasdentalcare@gmail.com', 'manasdentalcare@gmail.com', 'manasdentalcare@gmail.com', 'logo2.png', 'favicon.png', '7.jpg', 'Do you have a Question?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.', 'Seethammapeta,\r\nVisakhapatnam', 'manasdentalcare@gmail.com', '+91 123 456 7890', 'Mon - Sat 10.00 - 8.00', 'Mon to Fri : 10:00 - 8:00', 'Sunday CLOSED');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `title`, `image`, `description`) VALUES
(1, 'Title comes here', '1612356030_1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n'),
(2, 'Title comes here', '1612356046_1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n'),
(3, 'Title comes here', '1612356064_1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n'),
(4, 'Title come here', '1612356080_1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n'),
(5, 'Title comes here', '1612356094_1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n'),
(6, 'Title comes here', '1612356113_1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`) VALUES
(1, 'Title Comes Here', '1612347687_1-1.jpg'),
(2, 'Title Comes Here', '1612347706_1-2.jpg'),
(3, 'Title Comes Here', '1612347724_1-3.jpg'),
(4, 'Title Comes Here', '1612347736_1-4.jpg'),
(5, 'Title Comes Here', '1612347752_1-5.jpg'),
(6, 'Title Comes Here', '1612347768_1-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `header_images`
--

CREATE TABLE `header_images` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `meta_title` varchar(250) NOT NULL,
  `meta_keywords` varchar(250) NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header_images`
--

INSERT INTO `header_images` (`id`, `title`, `image`, `meta_title`, `meta_keywords`, `meta_description`) VALUES
(1, 'About Us', '1612352468_slider2.jpg', 'About Us', 'About Us', 'About Us'),
(2, 'Facilities', '1612352547_slider2.jpg', 'Facilities', 'Facilities', 'Facilities'),
(3, 'Patient Education', '1612352706_slider2.jpg', 'Patient Education', 'Patient Education', 'Patient Education'),
(4, 'Photos', '1612352726_slider2.jpg', 'Photos', 'Photos', 'Photos'),
(5, 'Videos', '1612352739_slider2.jpg', 'Videos', 'Videos', 'Videos'),
(6, 'Contact Us', '1612352715_slider2.jpg', 'Contact Us', 'Contact Us', 'Contact Us'),
(7, 'Appointment', '1612356823_slider2.jpg', 'Appointment', 'Appointment', 'Appointment');

-- --------------------------------------------------------

--
-- Table structure for table `home_banners`
--

CREATE TABLE `home_banners` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_banners`
--

INSERT INTO `home_banners` (`id`, `title`, `image`, `description`) VALUES
(2, 'MaNaS Dental Care', '1612336158_slider2.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the.&nbsp;</p>\r\n'),
(3, 'MaNaS Dental Care', '1612336179_slider3.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the.&nbsp;</p>\r\n'),
(4, 'MaNaS Dental Care', '1612336204_slider4.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the.&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `password`) VALUES
(1, 'admin', '34b329d9495816e93f9ff420d891b218676e8b60');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `ip_address` varchar(250) NOT NULL,
  `login_time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_name`, `ip_address`, `login_time`) VALUES
(1, 'admin', '::1', '03-02-2021 12:18:07 PM'),
(2, 'admin', '::1', '03-02-2021 02:37:07 PM'),
(3, 'admin', '::1', '04-02-2021 10:16:26 AM'),
(4, 'admin', '::1', '04-02-2021 04:05:51 PM'),
(5, 'admin', '::1', '04-02-2021 04:06:16 PM'),
(6, 'admin', '::1', '04-02-2021 04:07:19 PM'),
(7, 'admin', '::1', '04-02-2021 04:08:42 PM'),
(8, 'admin', '43.243.118.33', '04-02-2021 07:03:31 PM'),
(9, 'admin', '43.243.118.33', '04-02-2021 07:03:51 PM'),
(10, 'admin', '43.243.118.33', '05-02-2021 12:50:11 PM'),
(11, 'admin', '43.243.118.33', '05-02-2021 12:53:55 PM'),
(12, 'admin', '43.243.118.33', '05-02-2021 02:10:07 PM'),
(13, 'admin', '43.243.118.33', '05-02-2021 02:10:07 PM'),
(14, 'admin', '43.243.118.33', '05-02-2021 06:51:43 PM'),
(15, 'admin', '43.243.118.33', '05-02-2021 06:57:54 PM'),
(16, 'admin', '43.243.118.33', '05-02-2021 07:09:53 PM'),
(17, 'admin', '43.243.118.33', '06-02-2021 10:07:10 AM'),
(18, 'admin', '43.243.118.33', '08-02-2021 02:25:13 PM'),
(19, 'admin', '43.243.118.33', '12-02-2021 12:04:41 PM'),
(20, 'admin', '43.243.118.33', '16-02-2021 10:30:09 AM'),
(21, 'admin', '43.243.118.33', '16-02-2021 10:44:13 AM'),
(22, 'admin', '43.243.118.33', '17-02-2021 10:52:19 AM');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `sub_title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `sub_title`, `image`, `description`) VALUES
(1, 'Dental Exam', '90 minutes or less', '1613452660_service1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n'),
(2, 'Breezy Braces', '90 minutes or less', '1613452715_service1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n'),
(3, 'Veneers', '90 minutes or less', '1613452771_service1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n'),
(4, 'Implants', '90 minutes or less', '1613452813_service1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n'),
(5, 'Whitening', '90 minutes or less', '1613452862_service1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `sub_title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `precautions` text NOT NULL,
  `intelligence` text NOT NULL,
  `specializations` text NOT NULL,
  `p_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `sub_title`, `image`, `description1`, `description2`, `precautions`, `intelligence`, `specializations`, `p_link`) VALUES
(1, 'Preventive Dentistry', 'ResoFus Alomar Treatment for Essential Tremor and Parkinson\'s Disease', '1612424041_1-1.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness.</p>\r\n\r\n<p>&nbsp;Enhancing Your Vision sit ametcon sec tetur<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit tread<br />\r\n&nbsp;eiusmod Your Vision sit ametcon sec tetur sec<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit&nbsp;<br />\r\n&nbsp;tread Your Vision sit ametcon sec tetur</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', 'Preventive-Dentistry-1182'),
(2, 'Restorative Dentistry', 'ResoFus Alomar Treatment for Essential Tremor and Parkinson\'s Disease', '1612424117_1-2.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness.</p>\r\n\r\n<p>&nbsp;Enhancing Your Vision sit ametcon sec tetur<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit tread<br />\r\n&nbsp;eiusmod Your Vision sit ametcon sec tetur sec<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit&nbsp;<br />\r\n&nbsp;tread Your Vision sit ametcon sec tetur</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', 'Restorative-Dentistry-8288'),
(3, 'Root Canal Treatments', 'ResoFus Alomar Treatment for Essential Tremor and Parkinson\'s Disease', '1612424187_1-3.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness.</p>\r\n\r\n<p>&nbsp;Enhancing Your Vision sit ametcon sec tetur<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit tread<br />\r\n&nbsp;eiusmod Your Vision sit ametcon sec tetur sec<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit&nbsp;<br />\r\n&nbsp;tread Your Vision sit ametcon sec tetur</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', 'Root-Canal-Treatments-546'),
(4, 'Crowns and Bridges', 'ResoFus Alomar Treatment for Essential Tremor and Parkinson\'s Disease', '1612424218_1-4.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness.</p>\r\n\r\n<p>&nbsp;Enhancing Your Vision sit ametcon sec tetur<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit tread<br />\r\n&nbsp;eiusmod Your Vision sit ametcon sec tetur sec<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit&nbsp;<br />\r\n&nbsp;tread Your Vision sit ametcon sec tetur</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', 'Crowns-and-Bridges-2584'),
(5, 'Orthodontic Treatments', 'ResoFus Alomar Treatment for Essential Tremor and Parkinson\'s Disease', '1612424245_1-5.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness.</p>\r\n\r\n<p>&nbsp;Enhancing Your Vision sit ametcon sec tetur<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit tread<br />\r\n&nbsp;eiusmod Your Vision sit ametcon sec tetur sec<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit&nbsp;<br />\r\n&nbsp;tread Your Vision sit ametcon sec tetur</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', 'Orthodontic-Treatments-7392'),
(6, 'Surgical Dentistry', 'ResoFus Alomar Treatment for Essential Tremor and Parkinson\'s Disease', '1612424277_1-6.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness.</p>\r\n\r\n<p>&nbsp;Enhancing Your Vision sit ametcon sec tetur<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit tread<br />\r\n&nbsp;eiusmod Your Vision sit ametcon sec tetur sec<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit&nbsp;<br />\r\n&nbsp;tread Your Vision sit ametcon sec tetur</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', 'Surgical-Dentistry-311'),
(7, 'Missing Teeth Replacement', 'ResoFus Alomar Treatment for Essential Tremor and Parkinson\'s Disease', '1612424307_2.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness.</p>\r\n\r\n<p>&nbsp;Enhancing Your Vision sit ametcon sec tetur<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit tread<br />\r\n&nbsp;eiusmod Your Vision sit ametcon sec tetur sec<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit&nbsp;<br />\r\n&nbsp;tread Your Vision sit ametcon sec tetur</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', 'Missing-Teeth-Replacement-2680'),
(8, 'Dental Implants', 'ResoFus Alomar Treatment for Essential Tremor and Parkinson\'s Disease', '1612424404_1-3.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness.</p>\r\n\r\n<p>&nbsp;Enhancing Your Vision sit ametcon sec tetur<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit tread<br />\r\n&nbsp;eiusmod Your Vision sit ametcon sec tetur sec<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit&nbsp;<br />\r\n&nbsp;tread Your Vision sit ametcon sec tetur</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', 'Dental-Implants-7086'),
(9, 'Kids Dentistry', 'ResoFus Alomar Treatment for Essential Tremor and Parkinson\'s Disease', '1612424416_1-4.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness.</p>\r\n\r\n<p>&nbsp;Enhancing Your Vision sit ametcon sec tetur<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit tread<br />\r\n&nbsp;eiusmod Your Vision sit ametcon sec tetur sec<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit&nbsp;<br />\r\n&nbsp;tread Your Vision sit ametcon sec tetur</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', 'Kids-Dentistry-8710'),
(10, 'Cosmetic Dentistry', 'ResoFus Alomar Treatment for Essential Tremor and Parkinson\'s Disease', '1612424326_1-1.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness.</p>\r\n\r\n<p>&nbsp;Enhancing Your Vision sit ametcon sec tetur<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit tread<br />\r\n&nbsp;eiusmod Your Vision sit ametcon sec tetur sec<br />\r\n&nbsp;adipisicing eiusmod tempor tread depth sit&nbsp;<br />\r\n&nbsp;tread Your Vision sit ametcon sec tetur</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', '<p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>\r\n', 'Cosmetic-Dentistry-8515');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(11) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `youtube` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  `google` varchar(250) NOT NULL,
  `skype` varchar(250) NOT NULL,
  `whatsapp` varchar(250) NOT NULL,
  `meta_title` varchar(250) NOT NULL,
  `meta_keywords` varchar(250) NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `facebook`, `youtube`, `twitter`, `linkedin`, `google`, `skype`, `whatsapp`, `meta_title`, `meta_keywords`, `meta_description`) VALUES
(1, 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://www.twitter.com/', 'https://www.linkedin.com', 'https://www.google.com/', 'https://www.skype.com/', 'https://www.whatsapp.com/', 'Manas Dental Care', 'Manas Dental Care', 'Manas Dental Care');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `qualification` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `image`, `qualification`, `designation`) VALUES
(1, 'Dr. Manoj Kumar Bobbili', '1613112472_team1.jpg', 'MDS', 'Chief Dentist'),
(2, 'Dr. Neelima Chelliboina', '1612344264_team-6.jpg', 'BDS, MS (US)', 'Managing Director'),
(3, 'Dr. Siva Potla', '1612344330_team-7.jpg', 'BDS, MHA (US)', 'Managing Director');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `description`) VALUES
(1, 'Name Comes Here', '1612349145_testi-thumb-1.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n'),
(2, 'Name Comes Here', '1612349161_testi-thumb-2.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n'),
(3, 'Name Comes Here', '1612349175_testi-thumb-3.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_ips`
--
ALTER TABLE `admin_ips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_images`
--
ALTER TABLE `header_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banners`
--
ALTER TABLE `home_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_ips`
--
ALTER TABLE `admin_ips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `header_images`
--
ALTER TABLE `header_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home_banners`
--
ALTER TABLE `home_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
