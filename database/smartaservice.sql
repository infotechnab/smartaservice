-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2014 at 08:10 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smartaservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(100) NOT NULL DEFAULT 'Required',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `album_name`) VALUES
(16, 'ljsldjlfsdljf '),
(20, 'asdf'),
(21, 'dfdf');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL DEFAULT 'Required',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(10, 'File'),
(12, 'Nepali'),
(13, 'Featured Item'),
(14, 'Product');

-- --------------------------------------------------------

--
-- Table structure for table `comment_store`
--

CREATE TABLE IF NOT EXISTS `comment_store` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(200) CHARACTER SET utf8 NOT NULL,
  `comment_association_id` varchar(64) NOT NULL,
  `comment_user_name` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `comment_store`
--

INSERT INTO `comment_store` (`Id`, `comment`, `comment_association_id`, `comment_user_name`) VALUES
(9, 'djasKSJHJDIHIUDSA', 'post/3', '');

-- --------------------------------------------------------

--
-- Table structure for table `design_setup`
--

CREATE TABLE IF NOT EXISTS `design_setup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `design_setup`
--

INSERT INTO `design_setup` (`id`, `name`, `description`) VALUES
(0, 'header_title', 'Chitwan Gaida Lodge'),
(1, 'header_logo', 'logofinal1.png'),
(2, 'header_description', 'Simplifying your tour'),
(3, 'header_bgcolor', 'FFFFFF'),
(4, 'sidebar_title', 'Quick navigation'),
(5, 'sidebar_description', 'changed by ramu'),
(6, 'sidebar_bgcolor', 'FFFFFF');

-- --------------------------------------------------------

--
-- Table structure for table `gadgets`
--

CREATE TABLE IF NOT EXISTS `gadgets` (
  `gadget_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `textBox` varchar(100) NOT NULL,
  `defaultGadget` text NOT NULL,
  `type` text NOT NULL,
  `display` varchar(200) NOT NULL,
  `setting` text NOT NULL,
  PRIMARY KEY (`gadget_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=231 ;

--
-- Dumping data for table `gadgets`
--

INSERT INTO `gadgets` (`gadget_id`, `name`, `textBox`, `defaultGadget`, `type`, `display`, `setting`) VALUES
(226, 'Social Network', 'textBox', '', 'Facebook<br>\r\nTwitter<br>\r\nLinkid<br>\r\nFacebook<br>\r\nFacebook<br>\r\nFacebook<br>', 'Footer', ''),
(225, 'Recent Post', '', 'recent post', '', 'Sidebar', 'post=3&titleBold=&titleUnderline=&titleColor='),
(224, '<b>Tihar Offer!!!</b>', 'textBox', '', '10% Discount in all the product you buy. Hurry your shopping.', 'Header', ''),
(229, 'sdlfhkahadslf', 'textBox', '', 'sdf', 'Choose', ''),
(228, 'sdhfsdfhsdfh', 'textBox', '', 'sd', 'Choose', '');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `media_name` varchar(100) NOT NULL DEFAULT 'Required',
  `media_type` varchar(64) DEFAULT 'Required',
  `media_association_id` int(11) DEFAULT NULL,
  `media_link` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_media` (`media_association_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `media_name`, `media_type`, `media_association_id`, `media_link`) VALUES
(20, 'sandjkaskl', 'monkey.jpg', NULL, 'http://localhost/bnw/content/images/monkey.jpg'),
(23, 'sdfdsf', 'logofinal_for_ico_19.png', 20, '0'),
(24, 'sdfdsf', 'tickets-185x1857.jpg', 21, '0');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(100) NOT NULL DEFAULT 'Required',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_name`) VALUES
(4, 'Home Menu'),
(5, 'Sidebar Menu'),
(6, 'Footer Menu');

-- --------------------------------------------------------

--
-- Table structure for table `meta_data`
--

CREATE TABLE IF NOT EXISTS `meta_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `meta_data`
--

INSERT INTO `meta_data` (`id`, `name`, `value`) VALUES
(1, 'siteurl', 'www.BnW.com'),
(2, 'title', 'B&W Dashboard'),
(3, 'keywords', 'cms'),
(4, 'description', 'cloud system'),
(5, 'favicon_icon', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `misc_setting`
--

CREATE TABLE IF NOT EXISTS `misc_setting` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 NOT NULL,
  `description` varchar(64) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `misc_setting`
--

INSERT INTO `misc_setting` (`Id`, `name`, `description`) VALUES
(0, 'show_comment', '0'),
(1, 'show_like', '0'),
(2, 'show_share', '0'),
(3, 'max_post_to_show', '10'),
(4, 'max_page_to_show', '5'),
(5, 'slide_height', '500'),
(6, 'slide_width', '500');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE IF NOT EXISTS `navigation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `navigation_name` varchar(100) NOT NULL DEFAULT 'Required',
  `navigation_link` mediumtext,
  `parent_id` int(11) DEFAULT NULL,
  `navigation_type` varchar(64) DEFAULT NULL,
  `navigation_slug` varchar(64) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_navigation` (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `navigation_name`, `navigation_link`, `parent_id`, `navigation_type`, `navigation_slug`, `menu_id`) VALUES
(93, 'Home', 'index', 0, ' ', 'Home', 4),
(94, 'File', 'category/10', 0, 'category', 'file', 4),
(95, ' Nepali', 'category/12', 0, 'category', 'nepali', 4),
(96, 'Featured Item', 'category/13', 0, 'category', 'FeaturedItem', 4),
(102, 'Product', 'category/14', 95, 'category', 'Product', 4),
(103, 'Contact Us', 'page/10', 0, 'page', 'ContactUs', 4);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(100) NOT NULL DEFAULT 'Required',
  `page_content` text NOT NULL,
  `page_author_id` int(11) NOT NULL,
  `page_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `page_summary` mediumtext,
  `page_status` varchar(100) NOT NULL,
  `page_modifed_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `page_parent` int(11) NOT NULL,
  `page_order` int(11) DEFAULT NULL,
  `page_type` varchar(100) DEFAULT NULL,
  `page_tags` mediumtext,
  `allow_comment` tinyint(1) NOT NULL,
  `allow_like` tinyint(1) NOT NULL,
  `allow_share` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `page_name`, `page_content`, `page_author_id`, `page_date`, `page_summary`, `page_status`, `page_modifed_date`, `page_parent`, `page_order`, `page_type`, `page_tags`, `allow_comment`, `allow_like`, `allow_share`) VALUES
(10, 'Contact Us', '<b>&nbsp;Salyani Organization </b><br>Lions Chowk, Narayanghad<br>Chitwan<br>', 11, '2014-05-20 05:20:17', '<b>&nbsp;Salyani Organization </b><br>Lions Chowk, Narayanghad<br>Chitwan<br>', '1', '0000-00-00 00:00:00', 0, 0, '0', '0', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` mediumtext NOT NULL,
  `post_author_id` int(11) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_summary` mediumtext,
  `post_status` mediumtext NOT NULL,
  `comment_status` tinyint(1) DEFAULT NULL,
  `post_modified_date` date DEFAULT NULL,
  `post_tags` mediumtext,
  `post_content` text NOT NULL,
  `post_category` int(11) NOT NULL,
  `allow_comment` tinyint(1) NOT NULL,
  `allow_like` tinyint(1) NOT NULL,
  `allow_share` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_post` (`post_category`),
  KEY `idx_post_0` (`post_author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_title`, `post_author_id`, `post_date`, `post_summary`, `post_status`, `comment_status`, `post_modified_date`, `post_tags`, `post_content`, `post_category`, `allow_comment`, `allow_like`, `allow_share`) VALUES
(1, 'Earn $100 in one day', 10, '2014-03-20 06:05:22', '                              Entrepreneurs are a different kind of people. They are never \r\ncomplet', '0', 2, NULL, '', '                              Entrepreneurs are a different kind of people. They are never \r\ncompletely satisfied with the normal, acceptable lifestyle commonly \r\ncalled “successful” by the rest of society. This traditional “success” \r\noften includes a good job, a nice house with a 30-year mortgage, a \r\ncouple of nice cars (on which it’s considered OK to owe a lot of money),\r\n a few weeks of vacation every year from the job you don’t really enjoy,\r\n etc.<br>If you’re reading this blog, you’re probably not content with that kind of success.', 7, 0, 1, 0),
(2, 'how can you freelance', 10, '2014-03-20 06:07:11', '                              I’ve been getting a lot of emails lately from people who are looking', '0', 2, NULL, '', '                              I’ve been getting a lot of emails lately from people who are looking \r\nto start working for themselves. &nbsp;Whether it’s a small business on \r\nthe side, or they’re looking to create a full time location independent \r\nbusiness, it’s obvious there’s a lot of entrepreneurial spirit out \r\nthere.<div absolute;="" top:="" -1999px;="" left:="" -1988px;"="" id="stcpDiv">\r\n<p>Along with questions about building a business, I’m asked frequently what business <em>I </em>run.</p>\r\n<p>If we’re going to start getting real about creating a location \r\nindependent income, I’m going to have to build a little bit of \r\ncredibilty.</p>\r\n<p>So here’s what I do:</p>\r\n<h3><em><strong>I’m an SEO Freelancer (for lack of a better term).</strong></em></h3>\r\n<p>For those of you who don’t know what SEO means, it stands for Search \r\nEngine Optimization. Essentially it’s my job to make sure my clients \r\nrank as highly as possible in Google (or other search engines) for the \r\nkey terms that we’ve decided are most important to their success.</p> - \r\nSee more at: \r\nfile:///G:/websites/How to Become an SEO Freelancer in 48 Hours — Location 180 _ Build a Business, Live Anywhere, Achieve Free.</div><div absolute;="" top:="" -1999px;="" left:="" -1988px;"="" id="stcpDiv"><p><br></p><p><br></p><br></div>', 7, 0, 1, 1),
(3, 'Post allowing comment', 10, '2014-03-26 06:35:17', '                                          duifhioakfkdopfuijcnydsbc wdjiofj whoidjc jwpos ciwqsf oiw', '0', 2, NULL, '', '                                          duifhioakfkdopfuijcnydsbc wdjiofj whoidjc jwpos ciwqsf oiwnsdc iwn cdoiqwos hsfoiwejsf coiwbfu d qwhoifbv eifwed wd woijdoqwf vi2whdiwe qwdb weso9jmqw<br>', 7, 1, 0, 1),
(4, 'ijaIKJSMa changed', 10, '2014-04-04 09:32:03', '      sdajsdksal<br>', '0', 2, NULL, '', '      sdajsdksal<br>', 7, 0, 0, 0),
(5, 'dsadasdsa', 10, '2014-04-04 09:32:12', 'dsadasdass<br>', '1', 1, NULL, '', 'dsadasdass<br>', 1, 0, 0, 0),
(6, 'asdasdsa', 10, '2014-04-04 09:32:20', 'sadasdsadasdsa<br>', '1', 1, NULL, '', 'sadasdsadasdsa<br>', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `summary` varchar(200) NOT NULL,
  `category` int(11) NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `shiping` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `qty`, `price`, `name`, `description`, `summary`, `category`, `image1`, `image2`, `image3`, `shiping`) VALUES
(26, 1, 100, 'ramayan', '      nepali movie<br>', '      nepali movie<br>', 12, 'tickets-185x185.jpg', 'tickets-185x1851.jpg', 'tickets-185x1852.jpg', ''),
(27, 1, 500, 'hood', '            hood<br>', '            hood<br>', 10, 'tickets-185x1854.jpg', NULL, NULL, ''),
(29, 1, 11, 'sdfdsf', '                  sdfdsf<br>', '                  sdfdsf<br>', 10, 'Forest-Animals-Deer-Leonid-Afremov-Antelope.jpg', NULL, NULL, ''),
(33, 1, 5000, 'Jacket', '      This jacket is made up of the leather and regzin. Its a high quality jacket made in indonesia. Its of YCKMD.', '      This jacket is made up of the leather and regzin. Its a high quality jacket made in indonesia.', 13, 'emerochino-tickets1.jpg', NULL, NULL, ''),
(34, 1, 2000, 'Paint', '      This paint is of pure jeans . made in nepal. sakjdfhas', '      This paint is of pure jeans . made in nepal. sakjdfhas', 13, 'tickets-185x1853.jpg', NULL, NULL, ''),
(38, 1, 12, 'Product', 'sdfsdf<br>', 'sdfsdf<br>', 14, NULL, NULL, NULL, ''),
(39, 1, 787, 'aaaaa', 'dsfsadf<br>', 'dsfsadf<br>', 12, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE IF NOT EXISTS `product_image` (
  `pimg_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`pimg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_oder`
--

CREATE TABLE IF NOT EXISTS `product_oder` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_name` varchar(255) NOT NULL,
  `deliver_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(200) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  PRIMARY KEY (`o_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `product_oder`
--

INSERT INTO `product_oder` (`o_id`, `u_id`, `date`, `user_name`, `deliver_address`, `city`, `state`, `zip`, `country`, `email`, `contact`) VALUES
(1, 11, '2014-05-14 18:15:00', 'hello', 'naranghat', 'chitwan', 'chitwan', '12345', 'nepal', 'rsubedi@salyani.com.np', '123456'),
(4, 11, '0000-00-00 00:00:00', 'sfdf', 'lsdkjf', 'dlksfj', 'sdlkfj', 'sadlkjf', 'ldkjsf', 'ddfbefbf801adf18df823c64a4ae173d', 'sdlfkj'),
(11, 22, '2014-05-21 10:44:06', 'sdf sdf', 'sdf', '0', 'dasf', 'sadf', '0', 'hello@cc.bb', '543545'),
(12, 23, '2014-05-21 10:44:22', 'sdf sdf', 'sdf', '0', 'dasf', 'sadf', '0', 'hello@cc.bb', '543545'),
(13, 24, '2014-05-21 11:49:29', 'ramji', 'sadfsdfdsfdsf', 'sdf', 'sdf', 'sdf', '', 'ramji@salyani.com.np', 'sdfsdfsdfd'),
(14, 12, '2014-05-21 11:51:49', 'ramji', 'sadfsdfdsfdsf', 'sdf', 'sdf', 'sdf', '', 'ramji@salyani.com.np', 'sdfsdfsdfd'),
(15, 12, '2014-05-21 11:52:12', 'ramji', 'sadfsdfdsfdsf', 'sdf', 'sdf', 'sdf', '', 'ramji@salyani.com.np', 'sdfsdfsdfd');

-- --------------------------------------------------------

--
-- Table structure for table `product_oder_detail`
--

CREATE TABLE IF NOT EXISTS `product_oder_detail` (
  `od_id` int(11) NOT NULL AUTO_INCREMENT,
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `trans_id` varchar(11) NOT NULL,
  `trans_num` int(10) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`od_id`),
  KEY `p_id` (`p_id`),
  KEY `o_id` (`o_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `product_oder_detail`
--

INSERT INTO `product_oder_detail` (`od_id`, `o_id`, `p_id`, `qty`, `price`, `trans_id`, `trans_num`, `status`) VALUES
(92, 12, 38, '38', 0, 'TRD5', 5, ''),
(93, 13, 38, '38', 0, 'TRD5', 5, ''),
(94, 14, 38, '38', 0, 'TRD5', 5, ''),
(95, 15, 38, '38', 0, 'TRD5', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `shiping_cost`
--

CREATE TABLE IF NOT EXISTS `shiping_cost` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `price` double NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(100) NOT NULL DEFAULT 'Required',
  `slide_image` varchar(100) NOT NULL DEFAULT 'Required',
  `slide_content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `slide_name`, `slide_image`, `slide_content`) VALUES
(1, 'tes', 'logofinal_for_ico_20.png', 'dfdf'),
(2, 'dsf', 'logofinal_for_ico_21.png', 'dsf'),
(3, 'sdf', 'logofinal_for_ico_22.png', 'asdfffffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL DEFAULT 'Required',
  `user_fname` varchar(100) DEFAULT NULL,
  `user_lname` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_pass` varchar(64) NOT NULL DEFAULT 'Required',
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_url` mediumtext,
  `user_registered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_auth_key` varchar(64) DEFAULT NULL,
  `user_status` varchar(64) DEFAULT NULL,
  `user_type` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_fname`, `user_lname`, `user_email`, `user_pass`, `city`, `state`, `zip`, `country`, `contact`, `address`, `user_url`, `user_registered_date`, `user_auth_key`, `user_status`, `user_type`) VALUES
(11, 'admin', 'ramji', 'subedi', 'admin@ad.min', '21232f297a57a5a743894a0e4a801fc3', '', '', '', '', '', '', NULL, '2014-05-11 11:27:48', ' ', '1', '0'),
(12, 'ramji', 'ram', 'ram', 'ramji@salyani.com.np', 'ae3274d5bfa170ca69bb534be5a22467', '', '', '', '', '', 'sadfsdfdsfdsf', NULL, '2014-05-13 06:56:32', NULL, '1', '1'),
(22, 'hello', 'ram', 'shyam', 'admin@ab.cd', '4124bc0a9335c27f086f24ba207a4912', 'lasdfj', 'sladkf', 'lsdaf', 'sdf', '98987', 'sdlfj', NULL, '2014-05-21 10:44:06', NULL, NULL, '1'),
(23, 'hello', 'ram', 'shyam', 'admin@ab.cd', '74b87337454200d4d33f80c4663dc5e5', 'lasdfj', 'sladkf', 'lsdaf', 'sdf', '98987', 'sdlfj', NULL, '2014-05-21 10:44:22', NULL, NULL, '1'),
(24, 'ramji', 'ram', 'ram', 'ramji@salyani.com.np', '0', 'sdf', 'sdf', 'sdf', '', 'sdfsdfsdfd', 'sadfsdfdsfdsf', NULL, '2014-05-21 11:49:29', NULL, NULL, '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `fk_media` FOREIGN KEY (`media_association_id`) REFERENCES `album` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `navigation`
--
ALTER TABLE `navigation`
  ADD CONSTRAINT `fk_navigation_menu` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`);

--
-- Constraints for table `product_oder`
--
ALTER TABLE `product_oder`
  ADD CONSTRAINT `product_oder_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `product_oder_detail`
--
ALTER TABLE `product_oder_detail`
  ADD CONSTRAINT `product_oder_detail_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `product_oder_detail_ibfk_2` FOREIGN KEY (`o_id`) REFERENCES `product_oder` (`o_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
