-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2015 at 09:58 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `kuningan`
--

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `id_award` int(11) NOT NULL auto_increment,
  `id_jenis_award` int(1) NOT NULL,
  `nama_award` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_award`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`id_award`, `id_jenis_award`, `nama_award`) VALUES
(1, 0, 'Okelah'),
(2, 0, 'Piagam Presiden 2013');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gellery` int(11) NOT NULL auto_increment,
  `judul_gallery` varchar(100) collate latin1_general_ci NOT NULL,
  `date_gallery` date NOT NULL,
  `image_gallery` varchar(100) collate latin1_general_ci NOT NULL,
  `desk_gallery` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_gellery`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gellery`, `judul_gallery`, `date_gallery`, `image_gallery`, `desk_gallery`) VALUES
(5, 'Gallery pertama', '2015-02-05', 'gallery_747LKdf7T2.jpg', 'wswsw'),
(4, 'Gallery pertama', '2015-02-05', 'gallery_NRPXNRtWfu.png', 'wswsw'),
(6, 'mbuh', '2015-02-05', 'gallery_2FiIrY1Wse.jpg', 'wswsw'),
(7, 'Gambar Pertama', '2015-02-08', 'gallery_R5fNJf1xVy.', '<p>\r\n	Ini adalah gambar pertama di aplikasi pertama saya ini</p>\r\n'),
(8, 'Gambar Pertama', '2015-02-08', 'gallery_RevF1rwZiy.jpg', '<p>\r\n	Ini adalah gambar pertama pada aplikasi ini</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL auto_increment,
  `nama_kontak` varchar(100) collate latin1_general_ci NOT NULL,
  `email_kontak` varchar(100) collate latin1_general_ci NOT NULL,
  `phone_kontak` varchar(100) collate latin1_general_ci NOT NULL,
  `subyek_kontak` varchar(100) collate latin1_general_ci NOT NULL,
  `komen_kontak` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_kontak`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama_kontak`, `email_kontak`, `phone_kontak`, `subyek_kontak`, `komen_kontak`) VALUES
(1, '', '', '', '', ''),
(2, 'Cakra Aminuddin', 'cakra.amin@yahoo.com', '085640791440', 'caaaa', 'cacaca');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id_partner` int(11) NOT NULL auto_increment,
  `nama_partner` varchar(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_partner`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id_partner`, `nama_partner`) VALUES
(1, 'SMK BTB Juwana Pati');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL auto_increment,
  `user_name` varchar(200) collate latin1_general_ci NOT NULL,
  `pass_word` varchar(10) collate latin1_general_ci NOT NULL,
  `salt_password` varchar(10) collate latin1_general_ci NOT NULL,
  `date` date NOT NULL,
  `email` varchar(200) collate latin1_general_ci NOT NULL,
  `level_id` int(1) NOT NULL,
  PRIMARY KEY  (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=104 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `pass_word`, `salt_password`, `date`, `email`, `level_id`) VALUES
(1, 'admineweb', '7cc02699a3', 'xI876Fphfe', '2015-02-02', 'cakra.amin@yahoo.com', 1),
(13, 'adminewae', 'fc00c4c80b', 'MDS7gQL9U5', '2015-02-03', 'cakra.amin@yahoo.com', 0),
(15, 'operator', 'c2a09d5516', '3ttl9YtX6w', '2015-02-03', 'cakra.amin@yahoo.com', 1),
(100, 'ok', 'c914f05a2d', 'xhBeeawlkU', '2015-02-03', 'cakra.amin@yahoo.com', 0),
(101, 'bambang', '08683bd08b', 'vPf7zFaFA3', '2015-02-03', 'cakra.amin@yahoo.com', 1),
(103, 'admin', '741ae899aa', 'DzVt9kt5CE', '2015-02-08', 'cakra.amin@yahoo.com', 1);
