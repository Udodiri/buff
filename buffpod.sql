-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2016 at 05:24 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buffpod`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `id` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `day_id` int(11) NOT NULL,
  `time_ids` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `availability`
--

TRUNCATE TABLE `availability`;
--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `email`, `day_id`, `time_ids`) VALUES
(15, 'siliyat@yahoo.com', 1, '1,2'),
(16, 'siliyat@yahoo.com', 2, '3,4'),
(17, 'siliyat@yahoo.com', 3, '5,6'),
(18, 'siliyat@yahoo.com', 4, '7,8'),
(19, 'siliyat@yahoo.com', 5, '9,10'),
(20, 'siliyat@yahoo.com', 6, '11,12'),
(21, 'siliyat@yahoo.com', 7, '13,14'),
(22, 'walee@yahoo.com', 1, '1,2'),
(23, 'walee@yahoo.com', 4, '4,5'),
(24, 'walee@yahoo.com', 6, '8,9'),
(25, 'koe@yahoo.com', 1, '1,2'),
(26, 'koe@yahoo.com', 5, '4,5');

-- --------------------------------------------------------

--
-- Table structure for table `bank_account_info`
--

CREATE TABLE `bank_account_info` (
  `id` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_no` varchar(255) NOT NULL,
  `bank_country_id` int(15) NOT NULL,
  `bank_branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `bank_account_info`
--

TRUNCATE TABLE `bank_account_info`;
--
-- Dumping data for table `bank_account_info`
--

INSERT INTO `bank_account_info` (`id`, `email`, `bank_name`, `account_name`, `account_no`, `bank_country_id`, `bank_branch`) VALUES
(2, 'siliyat@yahoo.com', 'OluBank', 'Oluyemi Siliyat', '0222011', 12, 'Ikeni north'),
(3, 'walee@yahoo.com', 'OluBank', 'Oluyemi Siliyat', '0222011', 12, 'Ikeni north'),
(4, 'koe@yahoo.com', 'KolaBank', 'Koleowo Davis', '02222011', 12, 'Ikeni north');

-- --------------------------------------------------------

--
-- Table structure for table `bp_users`
--

CREATE TABLE `bp_users` (
  `ID` int(11) NOT NULL,
  `Category` varchar(200) NOT NULL,
  `utype` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `location` varchar(250) NOT NULL,
  `emailId` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `usercreateDate` varchar(250) NOT NULL,
  `userupDate` varchar(250) NOT NULL,
  `userdeleteDate` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `bp_users`
--

TRUNCATE TABLE `bp_users`;
--
-- Dumping data for table `bp_users`
--

INSERT INTO `bp_users` (`ID`, `Category`, `utype`, `fname`, `lname`, `location`, `emailId`, `pass`, `usercreateDate`, `userupDate`, `userdeleteDate`, `status`) VALUES
(1, 'Advertising law', 3, 'AnkitSaxena', 'testdgdg', 'Indore', 'ankitfriend07@gmailcom', '827ccb0eea8a706c4c34a16891f84e7b', '2016-07-28 08:00:21pm', '', '', 1),
(2, 'Advertising law', 3, 'Ankit', 'Saxena', 'tesfdd', 'ankitfriend07@gmailcom', '827ccb0eea8a706c4c34a16891f84e7b', '2016-07-28 08:02:15pm', '', '', 1),
(3, 'Agency law', 2, 'Ankit', 'Saxena', 'indore', 'ankitfriend07@gmailcom', '827ccb0eea8a706c4c34a16891f84e7b', '2016-07-28 08:27:02pm', '', '', 1),
(4, 'Advertising law', 2, 'A&lt;n;ki,t', 'Saxena', 'Indore', 'ankit.friend07@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2016-07-28 08:36:28pm', '', '', 1),
(5, 'Administrative law', 0, '', '', '''&quot;hghdd', 'ankit.friend07@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2016-07-28 08:37:20pm', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `categories`
--

TRUNCATE TABLE `categories`;
--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Advice Seeker'),
(2, 'Consultant');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `countries`
--

TRUNCATE TABLE `countries`;
--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'US', 'United States'),
(2, 'CA', 'Canada'),
(3, 'AF', 'Afghanistan'),
(4, 'AL', 'Albania'),
(5, 'DZ', 'Algeria'),
(6, 'DS', 'American Samoa'),
(7, 'AD', 'Andorra'),
(8, 'AO', 'Angola'),
(9, 'AI', 'Anguilla'),
(10, 'AQ', 'Antarctica'),
(11, 'AG', 'Antigua and/or Barbuda'),
(12, 'AR', 'Argentina'),
(13, 'AM', 'Armenia'),
(14, 'AW', 'Aruba'),
(15, 'AU', 'Australia'),
(16, 'AT', 'Austria'),
(17, 'AZ', 'Azerbaijan'),
(18, 'BS', 'Bahamas'),
(19, 'BH', 'Bahrain'),
(20, 'BD', 'Bangladesh'),
(21, 'BB', 'Barbados'),
(22, 'BY', 'Belarus'),
(23, 'BE', 'Belgium'),
(24, 'BZ', 'Belize'),
(25, 'BJ', 'Benin'),
(26, 'BM', 'Bermuda'),
(27, 'BT', 'Bhutan'),
(28, 'BO', 'Bolivia'),
(29, 'BA', 'Bosnia and Herzegovina'),
(30, 'BW', 'Botswana'),
(31, 'BV', 'Bouvet Island'),
(32, 'BR', 'Brazil'),
(33, 'IO', 'British lndian Ocean Territory'),
(34, 'BN', 'Brunei Darussalam'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'KH', 'Cambodia'),
(39, 'CM', 'Cameroon'),
(40, 'CV', 'Cape Verde'),
(41, 'KY', 'Cayman Islands'),
(42, 'CF', 'Central African Republic'),
(43, 'TD', 'Chad'),
(44, 'CL', 'Chile'),
(45, 'CN', 'China'),
(46, 'CX', 'Christmas Island'),
(47, 'CC', 'Cocos (Keeling) Islands'),
(48, 'CO', 'Colombia'),
(49, 'KM', 'Comoros'),
(50, 'CG', 'Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'ID', 'Indonesia'),
(101, 'IR', 'Iran (Islamic Republic of)'),
(102, 'IQ', 'Iraq'),
(103, 'IE', 'Ireland'),
(104, 'IL', 'Israel'),
(105, 'IT', 'Italy'),
(106, 'CI', 'Ivory Coast'),
(107, 'JM', 'Jamaica'),
(108, 'JP', 'Japan'),
(109, 'JO', 'Jordan'),
(110, 'KZ', 'Kazakhstan'),
(111, 'KE', 'Kenya'),
(112, 'KI', 'Kiribati'),
(113, 'KP', 'Korea, Democratic People''s Republic of'),
(114, 'KR', 'Korea, Republic of'),
(115, 'XK', 'Kosovo'),
(116, 'KW', 'Kuwait'),
(117, 'KG', 'Kyrgyzstan'),
(118, 'LA', 'Lao People''s Democratic Republic'),
(119, 'LV', 'Latvia'),
(120, 'LB', 'Lebanon'),
(121, 'LS', 'Lesotho'),
(122, 'LR', 'Liberia'),
(123, 'LY', 'Libyan Arab Jamahiriya'),
(124, 'LI', 'Liechtenstein'),
(125, 'LT', 'Lithuania'),
(126, 'LU', 'Luxembourg'),
(127, 'MO', 'Macau'),
(128, 'MK', 'Macedonia'),
(129, 'MG', 'Madagascar'),
(130, 'MW', 'Malawi'),
(131, 'MY', 'Malaysia'),
(132, 'MV', 'Maldives'),
(133, 'ML', 'Mali'),
(134, 'MT', 'Malta'),
(135, 'MH', 'Marshall Islands'),
(136, 'MQ', 'Martinique'),
(137, 'MR', 'Mauritania'),
(138, 'MU', 'Mauritius'),
(139, 'TY', 'Mayotte'),
(140, 'MX', 'Mexico'),
(141, 'FM', 'Micronesia, Federated States of'),
(142, 'MD', 'Moldova, Republic of'),
(143, 'MC', 'Monaco'),
(144, 'MN', 'Mongolia'),
(145, 'ME', 'Montenegro'),
(146, 'MS', 'Montserrat'),
(147, 'MA', 'Morocco'),
(148, 'MZ', 'Mozambique'),
(149, 'MM', 'Myanmar'),
(150, 'NA', 'Namibia'),
(151, 'NR', 'Nauru'),
(152, 'NP', 'Nepal'),
(153, 'NL', 'Netherlands'),
(154, 'AN', 'Netherlands Antilles'),
(155, 'NC', 'New Caledonia'),
(156, 'NZ', 'New Zealand'),
(157, 'NI', 'Nicaragua'),
(158, 'NE', 'Niger'),
(159, 'NG', 'Nigeria'),
(160, 'NU', 'Niue'),
(161, 'NF', 'Norfork Island'),
(162, 'MP', 'Northern Mariana Islands'),
(163, 'NO', 'Norway'),
(164, 'OM', 'Oman'),
(165, 'PK', 'Pakistan'),
(166, 'PW', 'Palau'),
(167, 'PA', 'Panama'),
(168, 'PG', 'Papua New Guinea'),
(169, 'PY', 'Paraguay'),
(170, 'PE', 'Peru'),
(171, 'PH', 'Philippines'),
(172, 'PN', 'Pitcairn'),
(173, 'PL', 'Poland'),
(174, 'PT', 'Portugal'),
(175, 'PR', 'Puerto Rico'),
(176, 'QA', 'Qatar'),
(177, 'RE', 'Reunion'),
(178, 'RO', 'Romania'),
(179, 'RU', 'Russian Federation'),
(180, 'RW', 'Rwanda'),
(181, 'KN', 'Saint Kitts and Nevis'),
(182, 'LC', 'Saint Lucia'),
(183, 'VC', 'Saint Vincent and the Grenadines'),
(184, 'WS', 'Samoa'),
(185, 'SM', 'San Marino'),
(186, 'ST', 'Sao Tome and Principe'),
(187, 'SA', 'Saudi Arabia'),
(188, 'SN', 'Senegal'),
(189, 'RS', 'Serbia'),
(190, 'SC', 'Seychelles'),
(191, 'SL', 'Sierra Leone'),
(192, 'SG', 'Singapore'),
(193, 'SK', 'Slovakia'),
(194, 'SI', 'Slovenia'),
(195, 'SB', 'Solomon Islands'),
(196, 'SO', 'Somalia'),
(197, 'ZA', 'South Africa'),
(198, 'GS', 'South Georgia South Sandwich Islands'),
(199, 'ES', 'Spain'),
(200, 'LK', 'Sri Lanka'),
(201, 'SH', 'St. Helena'),
(202, 'PM', 'St. Pierre and Miquelon'),
(203, 'SD', 'Sudan'),
(204, 'SR', 'Suriname'),
(205, 'SJ', 'Svalbarn and Jan Mayen Islands'),
(206, 'SZ', 'Swaziland'),
(207, 'SE', 'Sweden'),
(208, 'CH', 'Switzerland'),
(209, 'SY', 'Syrian Arab Republic'),
(210, 'TW', 'Taiwan'),
(211, 'TJ', 'Tajikistan'),
(212, 'TZ', 'Tanzania, United Republic of'),
(213, 'TH', 'Thailand'),
(214, 'TG', 'Togo'),
(215, 'TK', 'Tokelau'),
(216, 'TO', 'Tonga'),
(217, 'TT', 'Trinidad and Tobago'),
(218, 'TN', 'Tunisia'),
(219, 'TR', 'Turkey'),
(220, 'TM', 'Turkmenistan'),
(221, 'TC', 'Turks and Caicos Islands'),
(222, 'TV', 'Tuvalu'),
(223, 'UG', 'Uganda'),
(224, 'UA', 'Ukraine'),
(225, 'AE', 'United Arab Emirates'),
(226, 'GB', 'United Kingdom'),
(227, 'UM', 'United States minor outlying islands'),
(228, 'UY', 'Uruguay'),
(229, 'UZ', 'Uzbekistan'),
(230, 'VU', 'Vanuatu'),
(231, 'VA', 'Vatican City State'),
(232, 'VE', 'Venezuela'),
(233, 'VN', 'Vietnam'),
(234, 'VG', 'Virgin Islands (British)'),
(235, 'VI', 'Virgin Islands (U.S.)'),
(236, 'WF', 'Wallis and Futuna Islands'),
(237, 'EH', 'Western Sahara'),
(238, 'YE', 'Yemen'),
(239, 'YU', 'Yugoslavia'),
(240, 'ZR', 'Zaire'),
(241, 'ZM', 'Zambia'),
(242, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `days`
--

TRUNCATE TABLE `days`;
--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `day`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday'),
(7, 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `financial_info`
--

CREATE TABLE `financial_info` (
  `id` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hourly_rate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `financial_info`
--

TRUNCATE TABLE `financial_info`;
--
-- Dumping data for table `financial_info`
--

INSERT INTO `financial_info` (`id`, `email`, `hourly_rate`) VALUES
(3, 'siliyat@yahoo.com', '900'),
(4, 'walee@yahoo.com', '900'),
(5, 'koe@yahoo.com', '1200');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `groups`
--

TRUNCATE TABLE `groups`;
--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group`) VALUES
(1, 'Legal Consulting'),
(2, 'Programming and Tech'),
(3, 'Graphics and Design'),
(4, 'Marketing & Sales'),
(5, 'Business Funding'),
(6, 'Advertisement'),
(7, 'Financial Management'),
(8, 'Property and Space Leasing');

-- --------------------------------------------------------

--
-- Table structure for table `meeting_modes`
--

CREATE TABLE `meeting_modes` (
  `id` int(11) NOT NULL,
  `meeting_mode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `meeting_modes`
--

TRUNCATE TABLE `meeting_modes`;
--
-- Dumping data for table `meeting_modes`
--

INSERT INTO `meeting_modes` (`id`, `meeting_mode`) VALUES
(1, 'Video'),
(2, 'Face-To-Face'),
(3, 'Both');

-- --------------------------------------------------------

--
-- Table structure for table `preferred_meeting_mode`
--

CREATE TABLE `preferred_meeting_mode` (
  `id` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `meeting_mode_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `preferred_meeting_mode`
--

TRUNCATE TABLE `preferred_meeting_mode`;
--
-- Dumping data for table `preferred_meeting_mode`
--

INSERT INTO `preferred_meeting_mode` (`id`, `email`, `meeting_mode_id`) VALUES
(1, 'siliyat@yahoo.com', 1),
(2, 'walee@yahoo.com', 1),
(3, 'koe@yahoo.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `biodata` text NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `profile`
--

TRUNCATE TABLE `profile`;
--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `category_id`, `fname`, `lname`, `email`, `password`, `location`, `avatar`, `biodata`, `status`, `date_added`) VALUES
(9, 1, 'Joseph', 'Okeke', 'yesm400@gmail.com', '$2y$09$NtO7Ueu0vxKzvm0JUz86HOQ93IgxEmqhF4JGLzjb7rjpC9CFS7WW6', 'Poriri', '', '', 1, '1468616704');

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `id` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `honors_awards` text NOT NULL,
  `specialty_ids` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `specialization`
--

TRUNCATE TABLE `specialization`;
--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`id`, `email`, `honors_awards`, `specialty_ids`) VALUES
(7, 'siliyat@yahoo.com', 'Nice one!', '49,50,51,49,50,51'),
(8, 'walee@yahoo.com', 'Nice one!', '60,61,62'),
(9, 'koe@yahoo.com', 'Nice one!', '54,55,56');

-- --------------------------------------------------------

--
-- Table structure for table `specialties`
--

CREATE TABLE `specialties` (
  `id` int(11) NOT NULL,
  `specialty` varchar(255) NOT NULL,
  `group_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `specialties`
--

TRUNCATE TABLE `specialties`;
--
-- Dumping data for table `specialties`
--

INSERT INTO `specialties` (`id`, `specialty`, `group_id`) VALUES
(1, ' Administrative law', '1'),
(2, ' Advertising law', '1'),
(3, 'Agency law', '1'),
(4, 'Alternative dispute resolution', '1'),
(5, 'Banking law', '1'),
(6, 'Bankruptcy law', '1'),
(7, 'Business law', '1'),
(8, 'Consumer law', '1'),
(9, 'Contract law', '1'),
(10, 'Copyright law', '1'),
(11, 'Corporate law', '1'),
(12, 'Cyber law', '1'),
(13, 'Employment law', '1'),
(14, 'Entertainment law', '1'),
(15, 'FDA law', '1'),
(16, 'Financial services regulation law', '1'),
(17, 'Gaming law', '1'),
(18, 'Health and safety law', '1'),
(19, 'Health law', '1'),
(20, 'Immigration law', '1'),
(21, 'Insurance law', '1'),
(22, 'Intellectual property law', '1'),
(23, 'International law', '1'),
(24, 'Mergers & acquisitions law', '1'),
(25, 'Patent law', '1'),
(26, 'Privacy law', '1'),
(27, 'Private equity law', '1'),
(28, 'Real estate law', '1'),
(29, 'Tax law', '1'),
(30, 'Technology law', '1'),
(31, 'Trademark law', '1'),
(32, 'Mobile Apps & Web', '2'),
(33, 'WordPress', '2'),
(34, 'Web Programming', '2'),
(35, 'Desktop applications', '2'),
(36, 'Ecommerce', '2'),
(37, 'Website Building & CMS', '2'),
(38, 'Quality Assurance', '2'),
(39, 'IT Support', '2'),
(40, 'Data Analysis & Reports', '2'),
(41, 'Databases', '2'),
(42, 'Videos and Animation', '2'),
(43, 'Market Research', '4'),
(44, 'Digital Marketing', '4'),
(45, 'Product Sales', '4'),
(46, 'Customer Service', '4'),
(47, 'Exporting', '4'),
(48, 'Importing', '4'),
(49, 'Equity Funding', '5'),
(50, 'Debt Funding', '5'),
(51, 'Angel investors', '5'),
(52, 'Crowdfunding', '5'),
(53, 'Grants', '5'),
(54, 'Website/App Promotion', '6'),
(55, 'Banner Advertising', '6'),
(56, 'Outdoor Advertising/ Billboards', '6'),
(57, 'Flyers & Handouts', '6'),
(58, 'Radio/TV', '6'),
(59, 'Business/Corporate Planning', '7'),
(60, 'Equity Release', '7'),
(61, 'Insurance & Protection', '7'),
(62, 'Investment', '7'),
(63, 'Mortgages', '7'),
(64, 'Offshore Investing', '7'),
(65, 'Corporate Financial Planning', '7'),
(66, 'Stock broking', '7'),
(67, 'Taxation', '7'),
(68, 'Risk Management', '7');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `times`
--

TRUNCATE TABLE `times`;
--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `time`) VALUES
(1, '12:00am - 01:00am'),
(2, '01:00am - 02:00am'),
(3, '02:00am - 03:00am'),
(4, '03:00am - 04:00am'),
(5, '04:00am - 05:00am'),
(6, '05:00am - 06:00am'),
(7, '06:00am - 07:00am'),
(8, '07:00am - 08:00am'),
(9, '08:00am - 09:00am'),
(10, '09:00am - 10:00am'),
(11, '10:00am - 11:00am'),
(12, '11:00am - 12:00pm'),
(13, '12:00pm - 01:00pm'),
(14, '01:00pm - 02:00pm'),
(15, '02:00pm - 03:00pm'),
(16, '03:00pm - 04:00pm'),
(17, '04:00pm - 05:00pm'),
(18, '05:00pm - 06:00pm'),
(19, '06:00pm - 07:00pm'),
(20, '07:00pm - 0:00pm'),
(21, '08:00pm - 09:00pm'),
(22, '09:00pm - 10:00pm'),
(23, '10:00pm - 11:00pm'),
(24, '11:00pm - 12:00am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_account_info`
--
ALTER TABLE `bank_account_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bp_users`
--
ALTER TABLE `bp_users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial_info`
--
ALTER TABLE `financial_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting_modes`
--
ALTER TABLE `meeting_modes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preferred_meeting_mode`
--
ALTER TABLE `preferred_meeting_mode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialties`
--
ALTER TABLE `specialties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `bank_account_info`
--
ALTER TABLE `bank_account_info`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bp_users`
--
ALTER TABLE `bp_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;
--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `financial_info`
--
ALTER TABLE `financial_info`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `meeting_modes`
--
ALTER TABLE `meeting_modes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `preferred_meeting_mode`
--
ALTER TABLE `preferred_meeting_mode`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `specialties`
--
ALTER TABLE `specialties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
