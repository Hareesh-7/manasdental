-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2023 at 12:29 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manas_dental_care`
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
(1, '43.243.118.33'),
(2, '148.66.138.167');

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
(1, 'Welcome To', 'Manas Dental Care', '1612353791_about.jpg', '<p>Located right in the center of the city, our clinic has the pleasure of treating patients from all the areas of Vishakhapatnam. &#39;Team MaNaS&#39; is very passionate about dentistry and we are committed to provide best quality treatment. Our aim is to see you walk out of the door with a beautiful smile. Patient is our first priority in each and every circumstance. We give preference to long term benefits in treatment plannning.</p>\r\n\r\n<p>We assure you 100% patient &nbsp;satisfaction and confident enough to charge only if you are completely satisfied with our services*.</p>\r\n'),
(2, 'Mission', '', 'N/A', '<p>Provide the best quality dental services to our patients at an affordable cost</p>\r\n'),
(3, 'Vision', '', 'N/A', '<p>Emerge as a leader in innovative dentistry over the next 5 years</p>\r\n'),
(4, 'Values', '', 'N/A', '<p>Quality, Affordability and Ethics</p>\r\n');
INSERT INTO `cms` (`id`, `title`, `sub_title`, `image`, `description`) VALUES
(5, 'Patient Education', '', '1612355097_patient-edu.png', '<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><font color=\"#000000\" face=\"Calibri, sans-serif\" size=\"3\"><span style=\"caret-color: rgb(0, 0, 0);\">We believe that it is important for a dentist to educate patient about dental health and different dental procedures. Below covers most of the dental procedures and we welcome our patients to ask any questions that they may have on any aspect of dentistry.</span></font></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><b><u>Dental Bridges</u></b>:</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\">When teeth are missing a series of changes that can impact your overall dental health and jaw function may be initiated. The adjacent teeth may start to drift or tilt into the space, and teeth in the opposing jaw may start to shift toward the area of the missing tooth. It is therefore important to replace the single tooth or multiple teeth that have been lost. One of the best options to prevent the consequences of shifting teeth and to restore full function to a small edentulous section in the mouth is a dental bridge.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\">A dental bridge fills in the space of missing teeth with&nbsp;<a href=\"https://drandrewrossdds.com/dental-crowns/\" style=\"color:#954f72; text-decoration:underline\"><span style=\"text-decoration:none\">crowns</span></a>&nbsp;and uses the neighboring teeth next to the space for support, hence the name, bridge.&nbsp; The dental bridge is anchored in place through the use of two dental crowns, which are custom made to fit your smile and are placed on the teeth or dental implants next to the space left by the missing tooth. These crowns hold the artificial tooth in place to restore your smile, ensuring that your restoration will not easily shift or come loose.&nbsp;</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\">It typically requires only two visits to our practice to complete the dental bridge. Dental bridges are designed to last for many years and to restore the function, beauty, and health of your smile.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\">Our dentists may recommend a dental bridge to improve your smile by:<br />\r\n&bull; Restoring your ability to speak, eat, and chew as normal<br />\r\n&bull; Alleviating excess stress on the bite<br />\r\n&bull; Improving the shape and volume of your face<br />\r\n&bull; Replacing an unwanted removable partial denture<br />\r\n&bull; Preventing the remaining natural teeth from moving out of position<br />\r\n&bull; Enhancing the appearance of your smile</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\">The success of this bridge depends in large part on its foundation, the supporting teeth, and the gums and bone to which they are attached. Therefore, it is very important to keep it clean (as well as the other teeth) by daily brushing and flossing. When flossing the bridge, an aid called a floss threader, is used to help guild the floss underneath it to clean this area.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><u>Video for bridges</u></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><a href=\"https://vimeo.com/109456959\" style=\"color:#954f72; text-decoration:underline\">https://vimeo.com/109456959</a></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><b><u>Crowns:&nbsp;</u></b></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\">A&nbsp;<a href=\"https://bestdentistinhouston.com/dental-crowns-houston/\" style=\"color:#954f72; text-decoration:underline\"><span style=\"text-decoration:none\">crown or &ldquo;dental cap&rdquo;</span></a>&nbsp;is a material that wraps around your own tooth to protect it from wearing down any further. The&nbsp;<a href=\"https://www.mouthhealthy.org/en/az-topics/c/crowns\" style=\"color:#954f72; text-decoration:underline\"><span style=\"text-decoration:none\">cap</span></a>&nbsp;restores the natural anatomy of the tooth to its normal shape, and size so that you can once again function with that tooth. A crown can make the tooth stronger, and at the same time improve the cosmetic appearance of that tooth.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><u><span style=\"color:#00b050\">REASONS WHY YOU MAY NEED A DENTAL CROWN</span></u><span style=\"color:#00b050\">:</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<ul>\r\n	<li style=\"margin-left:8px\"><samp><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\">Your tooth may have a cavity that is very large</span></span></samp></li>\r\n	<li style=\"margin-left:8px\"><samp><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\">A tooth that is cracked or is wearing down</span></span></samp></li>\r\n	<li style=\"margin-left:8px\"><samp><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\">You have had root canal treatment (these teeth become very fragile and have a high chance of fracturing). The crown will protect these teeth. This is why you see a lot dentists recommending to place a dental cap after root canal treatment.</span></span></samp></li>\r\n	<li style=\"margin-left:8px\"><samp><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\">You want to cosmetically cover a tooth that is fractured or stained.</span></span></samp></li>\r\n	<li style=\"margin-left:8px\"><samp><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\">Teeth with very large fillings are susceptible to fracture and are recommended to be crowned.</span></span></samp></li>\r\n</ul>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><u><span style=\"color:#00b050\">Procedure:</span></u></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\">A typical dental crown procedure begins with the dentist applying a local anesthesia to the area of focus. If the tooth is in poor condition, a filling may need to be inserted so that the crown has something on which to attach. The next step is for the tooth to be shaved down, after which the dentist makes an impression of the tooth to ensure the crown is the right shape and size. Also, the dentist will take pictures or use a shade guide to confirm that the crown closely matches the color of the surrounding teeth. This information is sent to a lab technician, and then a temporary crown is placed on the tooth.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\">After a few weeks have passed, the temporary crown is replaced with a permanent one. The dentist will check to see that the permanent crown is a good fit, after which the crown is attached to the tooth via dental glue or permanent cement. All in all, a pretty simple procedure with a big upside.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><u>Video for crowns:</u></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><a href=\"https://vimeo.com/109456962\" style=\"color:#954f72; text-decoration:underline\">https://vimeo.com/109456962</a></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><b><u>Dental Fillings:</u></b></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\">For hundreds of years, dental fillings have been used to restore teeth. Dental fillings are placed in teeth where a dentist has had to remove tooth structure due to decay or fracture. In recent years filling materials have been substantially improved by many technological advancements. Although silver amalgam was the dominant choice years ago, today we have several other preferred options for tooth restoration including tooth colored composite fillings materials and cementable resins and porcelains.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><u>Video for dental fillings</u>:</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><a href=\"https://vimeo.com/109456967\" style=\"color:#954f72; text-decoration:underline\">https://vimeo.com/109456967</a></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><b><u>Dentures:</u></b></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><b><u>Partial Dentures:</u></b></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\">Partial dentures are perfect to replace anywhere from one to several teeth. These appliances are made with a metal base that attaches to your existing teeth. Just like traditional full dentures, a partial denture is removable and can be taken out and cleaned each time you brush your teeth.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<h4 style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"break-after:avoid\"><span calibri=\"\" light=\"\" style=\"font-family:\"><span style=\"color:#2f5496\"><span style=\"font-weight:normal\"><span style=\"font-style:italic\"><span style=\"font-variant-caps:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><u><span style=\"font-family:Calibri, sans-serif\"><span style=\"color:#00b050\"><span style=\"font-style:normal\">REASONS TO HAVE PARTIAL DENTURES MADE INCLUDE:</span></span></span></u></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></h4>\r\n\r\n<ul>\r\n	<li style=\"margin-left:10px\"><samp><span style=\"font-size:12pt\"><span style=\"line-height:21.0pt\"><span style=\"tab-stops:list .5in\"><span style=\"font-family:Calibri,sans-serif\">Replace missing teeth</span></span></span></span></samp></li>\r\n	<li style=\"margin-left:10px\"><samp><span style=\"font-size:12pt\"><span style=\"line-height:21.0pt\"><span style=\"tab-stops:list .5in\"><span style=\"font-family:Calibri,sans-serif\">Improve the ability to chew more naturally</span></span></span></span></samp></li>\r\n	<li style=\"margin-left:10px\"><samp><span style=\"font-size:12pt\"><span style=\"line-height:21.0pt\"><span style=\"tab-stops:list .5in\"><span style=\"font-family:Calibri,sans-serif\">Aid in the preservation of remaining natural teeth</span></span></span></span></samp></li>\r\n	<li style=\"margin-left:10px\"><samp><span style=\"font-size:12pt\"><span style=\"line-height:21.0pt\"><span style=\"tab-stops:list .5in\"><span style=\"font-family:Calibri,sans-serif\">Improve speech</span></span></span></span></samp></li>\r\n	<li style=\"margin-left:10px\"><samp><span style=\"font-size:12pt\"><span style=\"line-height:21.0pt\"><span style=\"tab-stops:list .5in\"><span style=\"font-family:Calibri,sans-serif\">Enhance self-esteem and confidence</span></span></span></span></samp></li>\r\n</ul>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\">Partial dentures are a wonderful option for people who want an alternative to a bridge or implant. They&rsquo;re also a low-cost solution for anyone who has lost just a few teeth and wants a more immediate solution.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-indent:0px; -webkit-text-stroke-width:0px; text-align:justify; margin-bottom:26px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"vertical-align:baseline\">Partial Dentures typically need to be replaced every seven to 10 years. During your routine dental examinations, we will assess your appliance to ensure it&rsquo;s still in good condition.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-indent:0px; -webkit-text-stroke-width:0px; text-align:justify; margin-bottom:26px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"vertical-align:baseline\"><b><u>Complete Dentures:</u></b></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\">Full dentures are used to replace a full arch of missing teeth. Patients may need an upper denture, a lower denture, or both. These appliances consist of a gum-colored base with artificial teeth. Resting on the gums for support, full dentures restore appearance and significant function.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-indent:0px; -webkit-text-stroke-width:0px; text-align:justify; margin-bottom:26px\">&nbsp;</p>\r\n\r\n<h4 style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"break-after:avoid\"><span calibri=\"\" light=\"\" style=\"font-family:\"><span style=\"color:#2f5496\"><span style=\"font-weight:normal\"><span style=\"font-style:italic\"><span style=\"font-variant-caps:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><u><span style=\"font-family:Calibri, sans-serif\"><span style=\"color:#00b050\"><span style=\"font-style:normal\">REASONS TO HAVE COMPLETE DENTURES MADE INCLUDE:</span></span></span></u></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></h4>\r\n\r\n<ul>\r\n	<li style=\"margin-left:10px\"><samp><span style=\"font-size:12pt\"><span style=\"line-height:21.0pt\"><span style=\"tab-stops:list .5in\"><span style=\"font-family:Calibri,sans-serif\">Replace all missing teeth</span></span></span></span></samp></li>\r\n	<li style=\"margin-left:10px\"><samp><span style=\"font-size:12pt\"><span style=\"line-height:21.0pt\"><span style=\"tab-stops:list .5in\"><span style=\"font-family:Calibri,sans-serif\">Improve the ability to chew more naturally</span></span></span></span></samp></li>\r\n	<li style=\"margin-left:10px\"><samp><span style=\"font-size:12pt\"><span style=\"line-height:21.0pt\"><span style=\"tab-stops:list .5in\"><span style=\"font-family:Calibri,sans-serif\">Maintain a healthier mouth</span></span></span></span></samp></li>\r\n	<li style=\"margin-left:10px\"><samp><span style=\"font-size:12pt\"><span style=\"line-height:21.0pt\"><span style=\"tab-stops:list .5in\"><span style=\"font-family:Calibri,sans-serif\">Help to prevent/treat problems related to&nbsp;<a href=\"https://www.tcdmadison.com/dentalhealth/TMJTherapyWI\" style=\"color:#954f72; text-decoration:underline\" title=\"We offer TMJ therapy for our Madison patients\"><span style=\"text-decoration:none\">TMJ disorder</span></a></span></span></span></span></samp></li>\r\n	<li style=\"margin-left:10px\"><samp><span style=\"font-size:12pt\"><span style=\"line-height:21.0pt\"><span style=\"tab-stops:list .5in\"><span style=\"font-family:Calibri,sans-serif\">Improve speech function</span></span></span></span></samp></li>\r\n	<li style=\"margin-left:10px\"><samp><span style=\"font-size:12pt\"><span style=\"line-height:21.0pt\"><span style=\"tab-stops:list .5in\"><span style=\"font-family:Calibri,sans-serif\">Support facial structure</span></span></span></span></samp></li>\r\n	<li style=\"margin-left:10px\"><samp><span style=\"font-size:12pt\"><span style=\"line-height:21.0pt\"><span style=\"tab-stops:list .5in\"><span style=\"font-family:Calibri,sans-serif\">Develop a more pleasing smile</span></span></span></span></samp></li>\r\n</ul>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\">Today&rsquo;s dentures are strong and durable, but they won&rsquo;t last forever. In most cases, patients need to have their dentures replaced every seven to 10 years. We recommend relining your appliance every two years as well.&nbsp;</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><b><u>Dental Radiography:</u></b></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"line-height:19.2pt\">Digital radiography utilizes computer technology and digital sensors for the acquisition, viewing, storage, and sharing of radiographic images. It offers several advantages over the older traditional film-based methods of taking x-rays. The most significant of these advantages is that digital radiography reduces a patient&rsquo;s exposure to radiation. Other benefits are that images can be viewed instantly after being taken, can be seen simultaneously as needed by multiple practitioners, and can be easily shared with other offices. Digital x-rays are also safer for the environment as they do not require any chemicals or paper to develop.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px; margin-bottom:10px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"line-height:19.2pt\">An electronic pad, known as a sensor, is used instead of film to acquire a digital image. After the image is taken, it goes directly into the patient&rsquo;s file on the computer. Once it is stored on the computer, it can be easily viewed on a screen, shared, or printed out.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px; margin-bottom:10px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"line-height:19.2pt\"><b><u>Dental Emergency:</u></b></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px; margin-bottom:10px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"line-height:19.2pt\">Dental emergencies can come about in any number of ways. Your discomfort may be due to an injury to the oral facial area, the acute flare up of a longstanding problem, or the result of the sudden onset of seemingly inexplicable pain. Whatever the case may be, urgent dental care is needed to provide you with relief and to avoid any further consequences to your oral health or function, as well as your overall well-being.&nbsp;</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px; margin-bottom:10px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"line-height:19.2pt\">There are many reasons to seek Dr. Manoj for emergency dental care, including severe toothaches, chipped or fractured teeth, a dental abscess, impacted teeth, loose or broken fillings, lost or dislodged crowns, broken dentures and more. While the pain of a toothache is one of the more common reasons that patients come to our dental office for emergency dental care, we also promptly treat emergencies that are not necessarily painful like crowns that have been dislodged and broken dentures that leave embarrassing gaps in one&rsquo;s smile.&nbsp;</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px; margin-bottom:10px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"line-height:19.2pt\">Whether your dental emergency is painful, if it affects the appearance of your smile, or if you suspect that an infection is present, contact Dr. Manoj immediately for care. We will make every effort to see you as promptly as possible.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px; margin-bottom:10px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><b><u><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Dental Extractions:</span></u></b></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">A dental extraction is the procedure to remove a tooth from your mouth. A dental extraction is most commonly required if one of your teeth is damaged beyond practical repair.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">The most common reasons for tooth extractions include:</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<ul>\r\n	<li style=\"margin-left:8px\"><samp><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Severe tooth decay or infection may make it impossible or too costly to repair a tooth&nbsp;</span></span></span></samp></li>\r\n	<li style=\"margin-left:8px\"><samp><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Advanced gum disease may require a tooth to be pulled so it doesn&rsquo;t affect the supporting tissues and bone structures of your mouth&nbsp;</span></span></span></samp></li>\r\n	<li style=\"margin-left:8px\"><samp><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">A tooth may be extracted if it is blocking other teeth from coming in&nbsp;</span></span></span></samp></li>\r\n	<li style=\"margin-left:8px\"><samp><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">During orthodontic work, teeth may need to be extracted to create room for the teeth that are being moved into place&nbsp;</span></span></span></samp></li>\r\n	<li style=\"margin-left:8px\"><samp><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">Wisdom teeth are often extracted when impacted (stuck and unable to grow normally into the mouth) and may cause recurrent infections of the gum.</span></span></span></samp></li>\r\n</ul>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><u><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\"><span style=\"color:#00b050\">What to Expect?</span></span></u></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><samp><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span new=\"\" roman=\"\" style=\"font-family:\" times=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your dentist will first administer anesthetic to numb the area and reduce discomfort. During the extraction, you will feel the pressure of the tooth being removed but will not feel any pain. Typically, the dentist is able to remove your tooth within a matter of minutes.&nbsp;</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></samp></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px; margin-top:12px\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"font-family:&quot;Times New Roman&quot;, serif\">Immediately after the tooth extraction, a small amount of bleeding is normal, and patch of gauze will be placed in the affected area. The area may bleed minimally for the next 24 hours or so and taper off after that.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><u><span style=\"font-family:&quot;Times New Roman&quot;, serif\"><span style=\"color:#00b050\">What will happen after the extraction?</span></span></u></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"font-family:&quot;Times New Roman&quot;, serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Immediately after the tooth is removed, a bite pack is used to apply pressure to the tooth socket and stop the bleeding. After a tooth extraction, dentists usually give advice which revolves around not disturbing the blood clot in the socket by not touching the area with a finger or the tongue, by avoiding vigorous rinsing of the mouth and avoiding strenuous activity. Sucking, such as through a straw, is to be avoided. If the blood clot is dislodged, bleeding can restart, or alveolar osteitis (&ldquo;dry socket&rdquo;) can develop, which can be very painful and lead to delayed healing of the socket. Smoking is avoided for at least 24 hours as it impairs wound healing and makes dry socket significantly more likely. Most advise hot salt water mouth baths which start 24 hours after the extraction.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><u><span style=\"font-family:&quot;Times New Roman&quot;, serif\">Video for Extractions:</span></u></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><a href=\"https://vimeo.com/109456964\" style=\"color:#954f72; text-decoration:underline\"><span style=\"font-family:&quot;Times New Roman&quot;, serif\">https://vimeo.com/109456964</span></a></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><b><u><span style=\"font-family:&quot;Times New Roman&quot;, serif\">Orthodontics:</span></u></b></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><b><u><span style=\"font-family:&quot;Times New Roman&quot;, serif\"><img alt=\"A close up of a person\r\n\r\nDescription automatically generated\" src=\"blob:http://manasdentalcare.com/740bed6d-3e1b-498a-b7b0-1cca86a631ef\" style=\"width:262px; height:222px\" /></span></u></b></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px; margin-bottom:10px\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"font-family:&quot;Times New Roman&quot;, serif\">Only a few people are lucky enough to be born with perfect teeth and a beautiful smile, but thanks to orthodontic treatments that can make a huge difference to you or your child. At Manas Dental Care, our expert orthodontist will recommend different types of braces or dental appliances to help correct your particular problem.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"font-family:&quot;Times New Roman&quot;, serif\">When it comes to wearing braces, patients have the opportunity to choose from different&nbsp;</span><a href=\"https://www.orthodonticexprts.com/types-of-braces\" style=\"color:#954f72; text-decoration:underline\"><span style=\"font-family:&quot;Times New Roman&quot;, serif\"><span style=\"text-decoration:none\">types of braces</span></span></a><span style=\"font-family:&quot;Times New Roman&quot;, serif\">. When regular metal braces remain to be a popular choice, clear braces are becoming increasingly favored along with removable appliances like Invisalign<b>.</b></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px; margin-bottom:10px\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"font-family:&quot;Times New Roman&quot;, serif\">When your braces are on, you will need to visit your orthodontist every few weeks for adjustments and progress observation. The required time duration for braces treatment is completely contingent on what problems your orthodontist is attempting to correct and types of braces you choose, usually patients wear braces for about two years on average. After braces, patients usually need to wear a retainer to prevent their teeth from shifting back to their original incorrect positions.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px; margin-bottom:10px\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"font-family:&quot;Times New Roman&quot;, serif\">Ultimately, you must decide, with the help and recommendation of our trusted orthodontist what kind of treatment plan is best for you or your child. Different types of braces that may be options for you or your child&rsquo;s orthodontic treatment include:</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><b><u><span style=\"font-family:&quot;Times New Roman&quot;, serif\">1.Traditional Metal Braces</span></u></b></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"font-family:&quot;Times New Roman&quot;, serif\">Traditional metal braces are the most popular types of braces and usually are the most affordable. Metal braces are made of high-grade stainless steel or gold, and straighten your teeth using metal brackets and archwires. Our little patients love their metal braces and often ask to add&nbsp;</span><a href=\"https://www.orthodonticexprts.com/types-of-braces\" style=\"color:#954f72; text-decoration:underline\"><span style=\"font-family:&quot;Times New Roman&quot;, serif\"><span style=\"text-decoration:none\">different types of braces</span></span></a><span style=\"font-family:&quot;Times New Roman&quot;, serif\">&nbsp;bands for a more fun and colorful smile.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"font-family:&quot;Times New Roman&quot;, serif\"><img alt=\"A close up of food\r\n\r\nDescription automatically generated\" src=\"blob:http://manasdentalcare.com/5f53cbe1-ef05-4fc8-8069-bd750ccded16\" style=\"width:170px; height:115px\" /></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><b><u><span style=\"font-family:&quot;Times New Roman&quot;, serif\">2.</span></u></b><u><span style=\"font-family:&quot;Times New Roman&quot;, serif\">&nbsp;<b>Clear Braces</b></span></u></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start; text-indent:0px; -webkit-text-stroke-width:0px; margin-bottom:10px\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri, sans-serif\"><span style=\"caret-color:#000000\"><span style=\"color:#000000\"><span style=\"font-style:normal\"><span style=\"font-variant-caps:normal\"><span style=\"font-weight:normal\"><span style=\"letter-spacing:normal\"><span style=\"orphans:auto\"><span style=\"text-transform:none\"><span style=\"white-space:normal\"><span style=\"widows:auto\"><span style=\"word-spacing:0px\"><span style=\"-webkit-text-size-adjust:auto\"><span style=\"text-decoration:none\"><span style=\"font-family:&quot;Times New Roman&quot;, serif\">Usually clear braces are made of ceramic material, which is less visible on your teeth than metal braces. Consequently, clear ceramic braces are more common on young people and adult patients. For instance, 3M&trade; Clarity&trade; ADVANCED Clear Braces are a popular choice at among those for whom aesthetics is very important. Even though, ceramic braces are visually less notable, they require more oral care. It&rsquo;s important to note that they are more fragile, and if you smoke or drink too much coffee, these type');
INSERT INTO `cms` (`id`, `title`, `sub_title`, `image`, `description`) VALUES
(6, 'Why Choose This Service', '', 'N/A', '<p>Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.</p>\r\n'),
(7, 'Action', '', 'N/A', '<p>We Ensure Safe Dental Sergery</p>\r\n'),
(8, 'Quick Contact', '', 'N/A', '<p>GET IN TOUCH FOR EXPERT CARE</p>\r\n');

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
(2, 'In House Doctors', '3'),
(3, 'Dental Specialities', '7'),
(4, 'Beautiful Smiles', '4000');

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
(1, 'Manas Dental Care', '+91 9652550762', 'manasdentalcare@gmail.com', 'manasdentalcare@gmail.com', 'manasdentalcare@gmail.com', 'Screenshot_20210219-020023_Chrome.jpg', 'favicon.png', '7.jpg', 'Do you have a Question?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.', 'D.No: 50-81-21B, 1st Floor, Above Iyengar Bakery, Main Road, Seethammapeta,\r\nVisakhapatnam - 530016', 'manasdentalcare@gmail.com', '+91 9010922384', 'Mon - Sat 10.00am - 9.00pm', 'Mon - Sat 10.00am - 9.00pm', 'Sunday CLOSED');

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
(6, 'Contact Us', '1617936017_Contact Us.jpg', 'Contact Us', 'Contact Us', 'Contact Us'),
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
(2, 'Manas Dental Care', '1612336158_slider2.jpg', '<p style=\\\"\\\\&quot;\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;font-style:italic;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\\\\\\\\\\\\\\\&quot;\\\\\\\\&quot;\\\\&quot;\\\"><strong><big><samp>Creating Beautiful Smiles :)</samp></big></strong></p>\r\n'),
(3, 'Manas Dental Care', '1612336179_slider3.jpg', '<p><strong>Quality, Affordability and Ethics</strong></p>\r\n'),
(4, 'Manas Dental Care', '1617940124_Slider 4.png', '<p><strong>Patient Is Our FIrst Priority</strong></p>\r\n'),
(5, 'WELCOME BACK TO A SAFE PLACE', '1613714792_Screenshot_20210219-003830_Google My Business.jpg', '<p>As we make our ways back into the world, and our new normal, we understand that cleanliness and sanitation is on everyone&rsquo;s minds. As your dental clinic, our top priority is to ensure the health, safety, and comfort of each patient and team member who walks through our doors. We&rsquo;ve always adhered to the sanitation and infection prevention standards set forth by govt. of India. Our practice is also taking extra steps to ensure that social distancing regulations are respected within our office.</p>\r\n');

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
(1, 'admin', '9829fba1ec6d84095759c423be1f207b895c1a9d');

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
(22, 'admin', '43.243.118.33', '17-02-2021 10:52:19 AM'),
(23, 'admin', '148.66.138.167', '18-02-2021 10:38:14 AM'),
(24, 'admin', '148.66.138.167', '18-02-2021 11:36:20 AM'),
(25, 'admin', '148.66.138.167', '18-02-2021 11:40:43 AM'),
(26, 'admin', '148.66.138.167', '18-02-2021 12:05:13 PM'),
(27, 'admin', '148.66.138.167', '19-02-2021 08:48:11 AM'),
(28, 'admin', '148.66.138.167', '19-02-2021 08:53:14 AM'),
(29, 'admin', '148.66.138.167', '19-02-2021 09:03:08 AM'),
(30, 'admin', '148.66.138.167', '19-02-2021 09:33:36 AM'),
(31, 'admin', '148.66.138.167', '09-04-2021 06:45:41 AM'),
(32, 'admin', '148.66.138.167', '09-04-2021 09:27:52 AM'),
(33, 'admin', '148.66.138.167', '25-12-2021 08:40:56 AM'),
(34, 'admin', '148.66.138.167', '11-09-2023 06:19:40 PM'),
(35, 'admin', '148.66.138.167', '11-09-2023 06:28:03 PM'),
(36, 'admin', '148.66.138.167', '11-09-2023 06:36:14 PM'),
(37, 'admin', '148.66.138.167', '20-09-2023 12:24:09 PM');

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
(1, 'Dental Exam', '30 minutes or less', '1617932105_Oral-Exams-XRays.jpg', '<p>A complete dental wellness check up with teeth cleaning, x-rays (if required), thorough diagnosis and treatment planning. It is recommended to visit your dentist at least once in six months to maintain proper dental health.</p>\r\n'),
(2, 'Dental Bridges', '60 minutes or less', '1617932820_Bridges.png', '<p>Have a missing tooth? Our expert dentist can fix it with dental bridges. A dental bridge is a false tooth and will restore your beautiful smile.</p>\r\n'),
(3, 'Dental Crown', '90 minutes or less', '1617933194_Crown.jpg', '<p>If your tooth is damaged/discolored, we can restore its structure with a dental crown. A&nbsp;crown&nbsp;will resemble your natural tooth in its look and strength.</p>\r\n'),
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
(1, 'https://www.facebook.com/Manasdentalcare/', 'https://youtube.com/channel/UCoTbL1CD2Lb0FzrP_6GrK2A', 'https://www.twitter.com/', 'https://www.linkedin.com', 'https://g.page/manas-dental-care/review?gm', 'https://www.skype.com/', 'https://wa.me/message/LOB4EZVPF2JNP1', 'Manas Dental Care', 'Manas Dental Care', 'Manas Dental Care');

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
(1, 'Dr. Manoj Kumar Bobbili', '1617938648_IMG-20210408-WA0019.jpg', 'MDS', 'Chief Dentist'),
(2, 'Dr. Neelima Chelliboina', '1617939262_Neelu Web.png', 'BDS, MS (US)', 'Managing Director'),
(3, 'Dr. Siva Potla', '1617937876_IMG-20210408-WA0008.jpg', 'BDS, MHA (US)', 'Managing Director'),
(4, 'Dr. Divya Vaddi', '1617938904_Divya Web.png', 'MDS', 'Periodontist');

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
(1, 'swathi srv', '1617943173_online-reviews.jpg', '<blockquote>\r\n<p>&ldquo;Recently I had underwent root canal treatment. Doctors did it very patiently and there was no pain. Whole treatment was really good especially I liked the ambience of the hospital which is very spacious.&rdquo;</p>\r\n</blockquote>\r\n'),
(2, 'Vaishnavi Reddy', '1617943214_Reviews.jpg', '<blockquote>\r\n<p>&ldquo;Very hygiene and took all measures against covid. They received well and they care about the patient treatment was excellent. I wish best of luck to manas dental care for more success ahead. Thank you so much&rdquo;</p>\r\n</blockquote>\r\n'),
(3, 'Sanmukha Pavan', '1617943292_Reviews 2.jpg', '<blockquote>\r\n<p>&ldquo;i am really very thankfull to manas dental clinic they made my life brighter with their treatment.i suffered with the gap between my front teeth from last 18 years and i am also very fear to take treatment but when i consulted manas dental clinic they trated me as a friend they created confidence in me and they started the treatment on march 9 within seven months they changed my face from previous look.<br />\r\nthe best dental treatment in vizag by manas dental clinic.<br />\r\nthis is not my words even my family my friends all are saying these words.&rdquo;</p>\r\n</blockquote>\r\n');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
