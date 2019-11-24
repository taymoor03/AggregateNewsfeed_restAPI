-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 04:32 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feeds`
--

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `id` int(11) NOT NULL,
  `feed_id` int(11) NOT NULL,
  `source` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `pubDate` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `guid` text NOT NULL,
  `log_date` datetime NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`id`, `feed_id`, `source`, `title`, `description`, `pubDate`, `author`, `link`, `guid`, `log_date`, `days`) VALUES
(1, 1, 'flight global', '\nTAP plans further US expansion in coming years     ', '\n     ', '2019-06-17', '', '\nhttp://www.flightglobal.com/news/articles/tap-plans-further-us-expansion-in-coming-years-459059/     ', '\\nhttp://www.flightglobal.com/news/articles/tap-plans-further-us-expansion-in-coming-years-459059/     ', '2019-06-18 05:26:46', 0),
(2, 1, 'flight global', '\nTAP to order A321XLR: Neeleman     ', '\n     ', '2019-06-17', '', '\nhttp://www.flightglobal.com/news/articles/tap-to-order-a321xlr-neeleman-459058/     ', '\\nhttp://www.flightglobal.com/news/articles/tap-to-order-a321xlr-neeleman-459058/     ', '2019-06-18 05:26:46', 0),
(3, 1, 'flight global', '\nâ€‹PARIS: Boeing low-key on NMA but more details emerge     ', '\n     ', '2019-06-17', '', '\nhttp://www.flightglobal.com/news/articles/paris-boeing-low-key-on-nma-but-more-details-emerg-459055/     ', '\\nhttp://www.flightglobal.com/news/articles/paris-boeing-low-key-on-nma-but-more-details-emerg-459055/     ', '2019-06-18 05:26:46', 0),
(4, 2, 'the wizard site', 'What Happens If My Web Host Goes Out of Business? Or If They Shut Down My Website?', '<p>One of my visitors wondered what would happen if his\n<a href=\"https://www.thesitewizard.com/webhosting/what-if-web-host-closes.shtml\" target=\"_top\">web host\nwent out of business. Or if they decided to shut down his website</a>\nfor some reason or other. This article addresses that question.</p>\n', '2019-06-13', '', 'https://www.thesitewizard.com/webhosting/what-if-web-host-closes.shtml', 'https://www.thesitewizard.com/webhosting/what-if-web-host-closes.shtml', '2019-06-18 05:26:58', 0),
(5, 2, 'the wizard site', 'How to Add a Tooltip in HTML/CSS (No JavaScript Needed)', '<p>I was asked by a visitor how he could\n<a href=\"https://www.thesitewizard.com/html-tutorial/how-to-insert-tooltips.shtml\" target=\"_top\">add tooltips\nto his web page</a>. This article describes 2 ways to do this; the standard method using simple HTML, and\na more customizable one with CSS. No JavaScript is needed.</p>', '2019-05-30', '', 'https://www.thesitewizard.com/html-tutorial/how-to-insert-tooltips.shtml', 'https://www.thesitewizard.com/html-tutorial/how-to-insert-tooltips.shtml', '2019-06-18 05:26:58', 0),
(6, 2, 'the wizard site', 'How To Make Links to PDF Files Open in a PDF Viewer', '<p>This article answers a couple of questions from a visitor on how he could\n<a href=\"https://www.thesitewizard.com/html-tutorial/make-links-open-pdf-files-in-pdf-viewer.shtml\" target=\"_top\">link to\na PDF file and make it open in a PDF viewer</a>.</p>', '2019-05-16', '', 'https://www.thesitewizard.com/html-tutorial/make-links-open-pdf-files-in-pdf-viewer.shtml', 'https://www.thesitewizard.com/html-tutorial/make-links-open-pdf-files-in-pdf-viewer.shtml', '2019-06-18 05:26:58', 0),
(7, 3, 'free country', 'New Open Source Optimizing Fortran Compiler', '<p>An optimizing Fortran compiler has been added to the\n<a href=\"https://www.thefreecountry.com/compilers/fortran.shtml\" target=\"_top\">Free Fortran Compilers and Interpreters</a> page.</p>', '2019-06-07', '', 'https://www.thefreecountry.com/compilers/fortran.shtml', 'https://www.thefreecountry.com/compilers/fortran.shtml', '2019-06-18 05:27:10', 0),
(8, 3, 'free country', 'Another Free Microsoft-compatible Office Suite: Word Processor, Spreadsheet and Presentation Programs', '<p>Another free office suite, comprising a word processor, a spreadsheet program and a presentation program, has been added to the\n<a href=\"https://www.thefreecountry.com/utilities/wordprocessors.shtml\" target=\"_top\">Free Word Processors and Office Suites</a>\npage. This one handles modern Microsoft Office formats out-of-the-box as well as PDF files. The word processor\ncan also create EPUB files (used in ebooks).</p>', '2019-06-04', '', 'https://www.thefreecountry.com/utilities/wordprocessors.shtml', 'https://www.thefreecountry.com/utilities/wordprocessors.shtml', '2019-06-18 05:27:11', 0),
(9, 3, 'free country', 'Free / Open Source CAD Software', '<p>If you are looking for software to create (and test) technical designs and drawings (eg, plans and schematics for buildings,\nthe interior or buildings, machine parts, etc), take a look at the\n<a href=\"https://www.thefreecountry.com/utilities/cad.shtml\" target=\"_top\">Free Computer-aided Design (CAD) Software</a> page. It already\nlists 6 free (and open source) applications for Windows, Mac OS X and Linux.</p>', '2019-05-24', '', 'https://www.thefreecountry.com/utilities/cad.shtml', 'https://www.thefreecountry.com/utilities/cad.shtml', '2019-06-18 05:27:11', 0),
(10, 4, 'feed all', 'What Can be Published Using RSS Feeds?', 'With all the vast amounts of information available on the web, it is becoming more and more difficult to sort through and find what you are looking for. RSS significantly lowers the signal-to-noise ratio. RSS has the unique ability to compile information and filter it, so you only see unique and relevant content. The information superhighway has become packed with content, and those familiar with technology are using RSS to filter the content, allowing them to drill down and access only the content they want, without having to wade through all the noise. <br />\n<br />\nThere are very few subjects or topics that do not currently have an RSS feed available. Perhaps it might be easier to ask what can not be published using RSS?<br />\n<br />\n<a href=\"https://feedforall.com/what-can-be-published-using-rss.htm\" target=\"_blank\" >What Can be Published Using RSS Feeds?</a>', '2019-06-24', '', 'http://www.feedforall.com/blog.htm#642', 'http://www.feedforall.com/blog.htm#642', '2019-06-18 05:27:25', 0),
(11, 4, 'feed all', 'Blog Tips for SEO', 'Blogs are the current rage, and many webmasters have blogs but fail to use their blog to it\'s full potential. Blogs provide a steady stream of fresh content, and if this content is written and managed properly, blogs have the ability to increase a website\'s ranking in the search engines. <br />\n<br />\n<b>1. Host Your Own Blog </b><br />\nIn order to prosper from a blog, be sure to host it on your own domain. Hosting the blog on your own server will maximize the links to your website. Link popularity is one of the factors search engines use to rank websites. Resist the urge to use free hosting services, do not give away your link popularity!<br />\n<br />\n<a href=\"https://feedforall.com/blog-tips-for-seo.htm\" target=\"_blank\" >Blog Tips for SEO</a>', '2019-06-21', '', 'http://www.feedforall.com/blog.htm#641', 'http://www.feedforall.com/blog.htm#641', '2019-06-18 05:27:25', 0),
(12, 4, 'feed all', 'Quiz: Test Your RSS Smarts', 'You think that you have mastered the art of RSS, but how much do you really know? Take the RSS quiz to test your knowledge of RSS.<br />\nQuestion: If something is in an RSS feed, it is perfectly fine to reproduce the contents of the feed. I mean after all RSS means really simple syndication, right?<br />\n<br />\nAnswer: No, that is not true. Regardless of whether content is in a feed or not, the original creator of the content has the right to restrict its use. While most people do feel that if content is in an RSS feed, it is available for syndication--that is not always the case. Various groups have made efforts to add namespaces which expand the tags used in RSS, to define whether the content is available for syndication. The two most notable namespaces that detail permissions are the Creative Commons extension and the Bloglines\' Access extension. These two extensions are not yet widely supported so it is always best to check the terms of service associated with the feed or website to determine if the feed is available for syndication.<br />\n<br />\n<a href=\"https://feedforall.com/rss-quiz.htm\" target=\"_blank\" >A Quiz: Test Your RSS Smarts</a>', '2019-06-19', '', 'http://www.feedforall.com/blog.htm#640', 'http://www.feedforall.com/blog.htm#640', '2019-06-18 05:27:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feed_list`
--

CREATE TABLE `feed_list` (
  `feed_id` int(11) NOT NULL,
  `feed_name` varchar(255) NOT NULL,
  `feed_title` varchar(255) NOT NULL,
  `feed_url` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `cron_file` enum('1','2','3','4','5') NOT NULL DEFAULT '1',
  `cron_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_list`
--

INSERT INTO `feed_list` (`feed_id`, `feed_name`, `feed_title`, `feed_url`, `location`, `cron_file`, `cron_date`) VALUES
(1, 'flight global', 'https://www.flightglobal.com/rss/news/', 'https://www.flightglobal.com/rss/news/', 'gloab', '1', '2019-06-18 05:32:26'),
(2, 'the wizard site', 'the wizard site', 'https://www.thesitewizard.com/thesitewizard.xml', 'the wizard site', '1', '2019-06-18 05:32:38'),
(3, 'free country', 'free country', 'https://www.thefreecountry.com/thefreecountry.xml', 'gloab', '1', '2019-06-18 05:31:57'),
(4, 'feed all', 'feed all', 'https://www.feedforall.com/blog-feed.xml', 'europe', '1', '2019-06-18 05:32:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `feed_list`
--
ALTER TABLE `feed_list`
  ADD PRIMARY KEY (`feed_id`),
  ADD UNIQUE KEY `feed_url` (`feed_url`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `feed_list`
--
ALTER TABLE `feed_list`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
