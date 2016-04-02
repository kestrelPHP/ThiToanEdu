-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2015 at 04:20 PM
-- Server version: 5.5.31
-- PHP Version: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xhong5678_thi`
--

-- --------------------------------------------------------

--
-- Table structure for table `xephang`
--

CREATE TABLE IF NOT EXISTS `xephang` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sl` int(10) NOT NULL,
  `kq` int(5) NOT NULL,
  `xh` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `xephang`
--

INSERT INTO `xephang` (`id`, `sl`, `kq`, `xh`) VALUES
(1, 1, 3, 7),
(2, 2, 1, 5),
(3, 9, 2, 1),
(4, 4, 5, 3),
(5, 4, 5, 3),
(6, 2, 4, 6),
(7, 9, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `xh_capthi`
--

CREATE TABLE IF NOT EXISTS `xh_capthi` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `macap` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `capthi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `xh_capthi`
--

INSERT INTO `xh_capthi` (`id`, `macap`, `capthi`) VALUES
(1, 'quocgia', 'Quốc gia'),
(2, 'tinh', 'Tỉnh (TP)'),
(3, 'huyen', 'Huyện (quận)'),
(4, 'truong', 'Trường');

-- --------------------------------------------------------

--
-- Table structure for table `xh_cauhoi`
--

CREATE TABLE IF NOT EXISTS `xh_cauhoi` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `made` int(100) NOT NULL,
  `loaide` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `khoi` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `huongdan` text COLLATE utf8_unicode_ci NOT NULL,
  `dapan` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `diem` int(100) NOT NULL,
  `duyetde` int(2) NOT NULL,
  `mucdo` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

--
-- Dumping data for table `xh_cauhoi`
--

INSERT INTO `xh_cauhoi` (`id`, `made`, `loaide`, `mon`, `khoi`, `noidung`, `huongdan`, `dapan`, `diem`, `duyetde`, `mucdo`) VALUES
(48, 5, 'hsg', 'casio', 'k9', '<p>T&iacute;nh gi&aacute; trị của biểu thức:</p>\r\n<p><img class="Wirisformula" src="../tiny_mce/plugins/tiny_mce_wiris/integration/showimage.php?formula=b5c07b38c830a3adc6ebf6bdbe9ed3a8.png" alt="ra&iacute;z c&uacute;bica de 3 m&aacute;s ra&iacute;z cuarta de 4 menos ra&iacute;z quinta de 5 m&aacute;s ra&iacute;z con &iacute;ndice 6 y radical 6 menos ra&iacute;z con &iacute;ndice 7 y radical 7 m&aacute;s ra&iacute;z con &iacute;ndice 8 y radical 8 menos ra&iacute;z con &iacute;ndice 9 y radical 9 m&aacute;s ra&iacute;z con &iacute;ndice 10 y radical 10 menos ra&iacute;z con &iacute;ndice 11 y radical 11 m&aacute;s ra&iacute;z con &iacute;ndice 12 y radical 12 fin ra&iacute;z fin ra&iacute;z fin ra&iacute;z fin ra&iacute;z fin ra&iacute;z fin ra&iacute;z fin ra&iacute;z fin ra&iacute;z fin ra&iacute;z" align="middle" data-mathml="&laquo;math xmlns=&uml;http://www.w3.org/1998/Math/MathML&uml;&raquo;&laquo;mroot&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;3&laquo;/mn&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mroot&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;4&laquo;/mn&raquo;&laquo;mo&raquo;-&laquo;/mo&raquo;&laquo;mroot&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;5&laquo;/mn&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mroot&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;6&laquo;/mn&raquo;&laquo;mo&raquo;-&laquo;/mo&raquo;&laquo;mroot&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;7&laquo;/mn&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mroot&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;8&laquo;/mn&raquo;&laquo;mo&raquo;-&laquo;/mo&raquo;&laquo;mroot&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;9&laquo;/mn&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mroot&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;10&laquo;/mn&raquo;&laquo;mo&raquo;-&laquo;/mo&raquo;&laquo;mroot&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;11&laquo;/mn&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mroot&raquo;&laquo;mn&raquo;12&laquo;/mn&raquo;&laquo;mn&raquo;12&laquo;/mn&raquo;&laquo;/mroot&raquo;&laquo;/mrow&raquo;&laquo;mn&raquo;11&laquo;/mn&raquo;&laquo;/mroot&raquo;&laquo;/mrow&raquo;&laquo;mn&raquo;10&laquo;/mn&raquo;&laquo;/mroot&raquo;&laquo;/mrow&raquo;&laquo;mn&raquo;9&laquo;/mn&raquo;&laquo;/mroot&raquo;&laquo;/mrow&raquo;&laquo;mn&raquo;8&laquo;/mn&raquo;&laquo;/mroot&raquo;&laquo;/mrow&raquo;&laquo;mn&raquo;7&laquo;/mn&raquo;&laquo;/mroot&raquo;&laquo;/mrow&raquo;&laquo;mn&raquo;6&laquo;/mn&raquo;&laquo;/mroot&raquo;&laquo;/mrow&raquo;&laquo;mn&raquo;5&laquo;/mn&raquo;&laquo;/mroot&raquo;&laquo;/mrow&raquo;&laquo;mn&raquo;4&laquo;/mn&raquo;&laquo;/mroot&raquo;&laquo;/mrow&raquo;&laquo;mn&raquo;3&laquo;/mn&raquo;&laquo;/mroot&raquo;&laquo;/math&raquo;" /></p>', '<p>(Kết quả l&agrave;m tr&ograve;n tới 4 chữ số thập ph&acirc;n)</p>', '1,6216', 1, 1, 0),
(49, 5, 'hsg', 'casio', 'k9', '<p>T&iacute;nh gi&aacute; trị của biểu thức sau:</p>\r\n<p><img class="Wirisformula" src="../tiny_mce/plugins/tiny_mce_wiris/integration/showimage.php?formula=8ca311ea088cdaaadaf5295335177ff1.png" alt="fracci&oacute;n numerador 1 m&aacute;s x m&aacute;s x al cuadrado m&aacute;s x al cubo m&aacute;s espacio... espacio m&aacute;s espacio x elevado a 20 entre denominador 1 menos y al cuadrado m&aacute;s y elevado a 4 menos y elevado a 6 m&aacute;s espacio... espacio m&aacute;s y elevado a 20 fin fracci&oacute;n espacio v ớ i espacio x igual 2 punto y coma espacio y igual 3" align="middle" data-mathml="&laquo;math xmlns=&uml;http://www.w3.org/1998/Math/MathML&uml;&raquo;&laquo;mfrac&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;1&laquo;/mn&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mi&raquo;x&laquo;/mi&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;msup&raquo;&laquo;mi&raquo;x&laquo;/mi&raquo;&laquo;mn&raquo;2&laquo;/mn&raquo;&laquo;/msup&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;msup&raquo;&laquo;mi&raquo;x&laquo;/mi&raquo;&laquo;mn&raquo;3&laquo;/mn&raquo;&laquo;/msup&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mo&raquo;.&laquo;/mo&raquo;&laquo;mo&raquo;.&laquo;/mo&raquo;&laquo;mo&raquo;.&laquo;/mo&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;msup&raquo;&laquo;mi&raquo;x&laquo;/mi&raquo;&laquo;mn&raquo;20&laquo;/mn&raquo;&laquo;/msup&raquo;&laquo;/mrow&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;1&laquo;/mn&raquo;&laquo;mo&raquo;-&laquo;/mo&raquo;&laquo;msup&raquo;&laquo;mi&raquo;y&laquo;/mi&raquo;&laquo;mn&raquo;2&laquo;/mn&raquo;&laquo;/msup&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;msup&raquo;&laquo;mi&raquo;y&laquo;/mi&raquo;&laquo;mn&raquo;4&laquo;/mn&raquo;&laquo;/msup&raquo;&laquo;mo&raquo;-&laquo;/mo&raquo;&laquo;msup&raquo;&laquo;mi&raquo;y&laquo;/mi&raquo;&laquo;mn&raquo;6&laquo;/mn&raquo;&laquo;/msup&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mo&raquo;.&laquo;/mo&raquo;&laquo;mo&raquo;.&laquo;/mo&raquo;&laquo;mo&raquo;.&laquo;/mo&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;msup&raquo;&laquo;mi&raquo;y&laquo;/mi&raquo;&laquo;mn&raquo;20&laquo;/mn&raquo;&laquo;/msup&raquo;&laquo;/mrow&raquo;&laquo;/mfrac&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mi&raquo;v&laquo;/mi&raquo;&laquo;mi&raquo;&sect;#7899;&laquo;/mi&raquo;&laquo;mi&raquo;i&laquo;/mi&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mi&raquo;x&laquo;/mi&raquo;&laquo;mo&raquo;=&laquo;/mo&raquo;&laquo;mn&raquo;2&laquo;/mn&raquo;&laquo;mo&raquo;;&laquo;/mo&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mi&raquo;y&laquo;/mi&raquo;&laquo;mo&raquo;=&laquo;/mo&raquo;&laquo;mn&raquo;3&laquo;/mn&raquo;&laquo;/math&raquo;" /></p>', '<p>(Kết quả l&agrave;m tr&ograve;n tới 3 chữ số thập ph&acirc;n)</p>', '0,009', 1, 1, 0),
(50, 5, 'hsg', 'casio', 'k9', '<p>T&iacute;nh gi&aacute; trị của biểu thức:</p>\r\n<p>&nbsp;</p>\r\n<p><img class="Wirisformula" src="../tiny_mce/plugins/tiny_mce_wiris/integration/showimage.php?formula=e60ffe7f4dc87eeb26281fc699d170ac.png" alt="fracci&oacute;n numerador 1 m&aacute;s sin alfa m&aacute;s cos alfa menos ra&iacute;z cuadrada de 1 menos sin al cuadrado alfa fin ra&iacute;z menos ra&iacute;z cuadrada de 1 menos cos al cuadrado alfa fin ra&iacute;z entre denominador tan alfa m&aacute;s c o t alfa fin fracci&oacute;n. ra&iacute;z cuadrada de 1 m&aacute;s tan al cuadrado alfa fin ra&iacute;z. ra&iacute;z cuadrada de 1 m&aacute;s c o t al cuadrado alfa fin ra&iacute;z.2 sin alfa. cos alfa\r\nB i ế t espacio alfa espacio l &agrave; espacio g &oacute; c espacio n h ọ n espacio v &agrave; espacio c o t alfa igual fracci&oacute;n 1 entre 2011" align="middle" data-mathml="&laquo;math xmlns=&uml;http://www.w3.org/1998/Math/MathML&uml;&raquo;&laquo;mfrac&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;1&laquo;/mn&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mi&raquo;sin&laquo;/mi&raquo;&laquo;mi&raquo;&sect;#945;&laquo;/mi&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mi&raquo;cos&laquo;/mi&raquo;&laquo;mi&raquo;&sect;#945;&laquo;/mi&raquo;&laquo;mo&raquo;-&laquo;/mo&raquo;&laquo;msqrt&raquo;&laquo;mn&raquo;1&laquo;/mn&raquo;&laquo;mo&raquo;-&laquo;/mo&raquo;&laquo;msup&raquo;&laquo;mi&raquo;sin&laquo;/mi&raquo;&laquo;mn&raquo;2&laquo;/mn&raquo;&laquo;/msup&raquo;&laquo;mi&raquo;&sect;#945;&laquo;/mi&raquo;&laquo;/msqrt&raquo;&laquo;mo&raquo;-&laquo;/mo&raquo;&laquo;msqrt&raquo;&laquo;mn&raquo;1&laquo;/mn&raquo;&laquo;mo&raquo;-&laquo;/mo&raquo;&laquo;msup&raquo;&laquo;mi&raquo;cos&laquo;/mi&raquo;&laquo;mn&raquo;2&laquo;/mn&raquo;&laquo;/msup&raquo;&laquo;mi&raquo;&sect;#945;&laquo;/mi&raquo;&laquo;/msqrt&raquo;&laquo;/mrow&raquo;&laquo;mrow&raquo;&laquo;mi&raquo;tan&laquo;/mi&raquo;&laquo;mi&raquo;&sect;#945;&laquo;/mi&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mi&raquo;c&laquo;/mi&raquo;&laquo;mi&raquo;o&laquo;/mi&raquo;&laquo;mi&raquo;t&laquo;/mi&raquo;&laquo;mi&raquo;&sect;#945;&laquo;/mi&raquo;&laquo;/mrow&raquo;&laquo;/mfrac&raquo;&laquo;mo&raquo;.&laquo;/mo&raquo;&laquo;msqrt&raquo;&laquo;mn&raquo;1&laquo;/mn&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;msup&raquo;&laquo;mi&raquo;tan&laquo;/mi&raquo;&laquo;mn&raquo;2&laquo;/mn&raquo;&laquo;/msup&raquo;&laquo;mi&raquo;&sect;#945;&laquo;/mi&raquo;&laquo;/msqrt&raquo;&laquo;mo&raquo;.&laquo;/mo&raquo;&laquo;msqrt&raquo;&laquo;mn&raquo;1&laquo;/mn&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mi&raquo;c&laquo;/mi&raquo;&laquo;mi&raquo;o&laquo;/mi&raquo;&laquo;msup&raquo;&laquo;mi&raquo;t&laquo;/mi&raquo;&laquo;mn&raquo;2&laquo;/mn&raquo;&laquo;/msup&raquo;&laquo;mi&raquo;&sect;#945;&laquo;/mi&raquo;&laquo;/msqrt&raquo;&laquo;mo&raquo;.&laquo;/mo&raquo;&laquo;mn&raquo;2&laquo;/mn&raquo;&laquo;mi&raquo;sin&laquo;/mi&raquo;&laquo;mi&raquo;&sect;#945;&laquo;/mi&raquo;&laquo;mo&raquo;.&laquo;/mo&raquo;&laquo;mi&raquo;cos&laquo;/mi&raquo;&laquo;mi&raquo;&sect;#945;&laquo;/mi&raquo;&laquo;mspace linebreak=&uml;newline&uml;/&raquo;&laquo;mi&raquo;B&laquo;/mi&raquo;&laquo;mi&raquo;i&laquo;/mi&raquo;&laquo;mi&raquo;&sect;#7871;&laquo;/mi&raquo;&laquo;mi&raquo;t&laquo;/mi&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mi&raquo;&sect;#945;&laquo;/mi&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mi&raquo;l&laquo;/mi&raquo;&laquo;mi&raquo;&sect;#224;&laquo;/mi&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mi&raquo;g&laquo;/mi&raquo;&laquo;mi&raquo;&sect;#243;&laquo;/mi&raquo;&laquo;mi&raquo;c&laquo;/mi&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mi&raquo;n&laquo;/mi&raquo;&laquo;mi&raquo;h&laquo;/mi&raquo;&laquo;mi&raquo;&sect;#7885;&laquo;/mi&raquo;&laquo;mi&raquo;n&laquo;/mi&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mi&raquo;v&laquo;/mi&raquo;&laquo;mi&raquo;&sect;#224;&laquo;/mi&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mi&raquo;c&laquo;/mi&raquo;&laquo;mi&raquo;o&laquo;/mi&raquo;&laquo;mi&raquo;t&laquo;/mi&raquo;&laquo;mi&raquo;&sect;#945;&laquo;/mi&raquo;&laquo;mo&raquo;=&laquo;/mo&raquo;&laquo;mfrac&raquo;&laquo;mn&raquo;1&laquo;/mn&raquo;&laquo;mn&raquo;2011&laquo;/mn&raquo;&laquo;/mfrac&raquo;&laquo;/math&raquo;" /></p>\r\n<p>&nbsp;</p>', '<p>(kết quả lấy với 8 chữ số phần thập ph&acirc;n)</p>', '0,00099453', 1, 1, 0),
(51, 5, 'hsg', 'casio', 'k9', '<p>Cho a=296541; b=13299552; c=560138733. T&igrave;m ƯCLN(a, b, c)</p>', '', '567', 1, 1, 3),
(52, 5, 'hsg', 'casio', 'k9', '<p>T&igrave;m x biết:</p>\r\n<p><img class="Wirisformula" src="../tiny_mce/plugins/tiny_mce_wiris/integration/showimage.php?formula=0b37c108e67e25baf93d0625fe4d6b34.png" alt="4 m&aacute;s fracci&oacute;n numerador x entre denominador 1 m&aacute;s estilo mostrar fracci&oacute;n numerador 1 entre denominador 2 m&aacute;s estilo mostrar fracci&oacute;n numerador 1 entre denominador 3 m&aacute;s estilo mostrar 1 cuarto fin estilo fin fracci&oacute;n fin estilo fin fracci&oacute;n fin estilo fin fracci&oacute;n igual fracci&oacute;n numerador x entre denominador 4 m&aacute;s estilo mostrar fracci&oacute;n numerador 1 entre denominador 3 m&aacute;s estilo mostrar fracci&oacute;n numerador 1 entre denominador 2 m&aacute;s estilo mostrar 1 medio fin estilo fin fracci&oacute;n fin estilo fin fracci&oacute;n fin estilo fin fracci&oacute;n" align="middle" data-mathml="&laquo;math xmlns=&uml;http://www.w3.org/1998/Math/MathML&uml;&raquo;&laquo;mn&raquo;4&laquo;/mn&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mfrac&raquo;&laquo;mi&raquo;x&laquo;/mi&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;1&laquo;/mn&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mstyle displaystyle=&uml;true&uml;&raquo;&laquo;mfrac&raquo;&laquo;mn&raquo;1&laquo;/mn&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;2&laquo;/mn&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mstyle displaystyle=&uml;true&uml;&raquo;&laquo;mfrac&raquo;&laquo;mn&raquo;1&laquo;/mn&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;3&laquo;/mn&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mstyle displaystyle=&uml;true&uml;&raquo;&laquo;mfrac&raquo;&laquo;mn&raquo;1&laquo;/mn&raquo;&laquo;mn&raquo;4&laquo;/mn&raquo;&laquo;/mfrac&raquo;&laquo;/mstyle&raquo;&laquo;/mrow&raquo;&laquo;/mfrac&raquo;&laquo;/mstyle&raquo;&laquo;/mrow&raquo;&laquo;/mfrac&raquo;&laquo;/mstyle&raquo;&laquo;/mrow&raquo;&laquo;/mfrac&raquo;&laquo;mo&raquo;=&laquo;/mo&raquo;&laquo;mfrac&raquo;&laquo;mi&raquo;x&laquo;/mi&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;4&laquo;/mn&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mstyle displaystyle=&uml;true&uml;&raquo;&laquo;mfrac&raquo;&laquo;mn&raquo;1&laquo;/mn&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;3&laquo;/mn&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mstyle displaystyle=&uml;true&uml;&raquo;&laquo;mfrac&raquo;&laquo;mn&raquo;1&laquo;/mn&raquo;&laquo;mrow&raquo;&laquo;mn&raquo;2&laquo;/mn&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mstyle displaystyle=&uml;true&uml;&raquo;&laquo;mfrac&raquo;&laquo;mn&raquo;1&laquo;/mn&raquo;&laquo;mn&raquo;2&laquo;/mn&raquo;&laquo;/mfrac&raquo;&laquo;/mstyle&raquo;&laquo;/mrow&raquo;&laquo;/mfrac&raquo;&laquo;/mstyle&raquo;&laquo;/mrow&raquo;&laquo;/mfrac&raquo;&laquo;/mstyle&raquo;&laquo;/mrow&raquo;&laquo;/mfrac&raquo;&laquo;/math&raquo;" /></p>', '<p>(Kết quả lấy với 4 chữ số thập ph&acirc;n)</p>', '-8,6059', 1, 1, 0),
(53, 5, 'hsg', 'casio', 'k9', '<p>T&iacute;nh số đo g&oacute;c tạo bởi 2 đồ thị h&agrave;m số sau:</p>\r\n<p><img class="Wirisformula" src="../tiny_mce/plugins/tiny_mce_wiris/integration/showimage.php?formula=94c1db7216d84b6625240c3d7f50106d.png" alt="y igual 2010 x espacio m&aacute;s espacio 2009 espacio v &agrave; espacio y igual fracci&oacute;n 1 entre 2011 x menos 2012" align="middle" data-mathml="&laquo;math xmlns=&uml;http://www.w3.org/1998/Math/MathML&uml;&raquo;&laquo;mi&raquo;y&laquo;/mi&raquo;&laquo;mo&raquo;=&laquo;/mo&raquo;&laquo;mn&raquo;2010&laquo;/mn&raquo;&laquo;mi&raquo;x&laquo;/mi&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mo&raquo;+&laquo;/mo&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mn&raquo;2009&laquo;/mn&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mi&raquo;v&laquo;/mi&raquo;&laquo;mi&raquo;&sect;#224;&laquo;/mi&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mi&raquo;y&laquo;/mi&raquo;&laquo;mo&raquo;=&laquo;/mo&raquo;&laquo;mfrac&raquo;&laquo;mn&raquo;1&laquo;/mn&raquo;&laquo;mn&raquo;2011&laquo;/mn&raquo;&laquo;/mfrac&raquo;&laquo;mi&raquo;x&laquo;/mi&raquo;&laquo;mo&raquo;-&laquo;/mo&raquo;&laquo;mn&raquo;2012&laquo;/mn&raquo;&laquo;/math&raquo;" /></p>', '<p>(Kết quả t&iacute;nh bằng độ, ph&uacute;t; nếu l&agrave; 30 độ, 30 ph&uacute;t th&igrave; ghi: 30d30p)</p>', '89d54p', 1, 1, 0),
(54, 5, 'hsg', 'casio', 'k9', '<p>T&igrave;m nghiệm của đa thức: g(x) = 8x<sup>3</sup> &ndash; 18x<sup>2 </sup>&nbsp;+ x + 6</p>', '<p>(Nghiệm viết dưới dạng số thập ph&acirc;n, ghi theo thứ tự tăng dần từ b&eacute; đến lớn, c&aacute;c nghiệm c&aacute;ch nhau bởi dấu chấm phẩy ";")</p>', '-0,5;0,75;2', 1, 1, 0),
(55, 5, 'hsg', 'casio', 'k9', '<p>Cho 2 đa thức bậc ba: f(x) = x<sup>3</sup> + ax<sup>2</sup> + bx + c v&agrave;&nbsp;g(x) = 8x<sup>3</sup> &ndash; 18x<sup>2 </sup>&nbsp;+ x + 6 biết rằng khi chia đa thức f(x) cho đa thức g(x) th&igrave; được đa thức dư l&agrave; r(x) = 8x<sup>2</sup> + 4x + 5. T&igrave;m a, b, c</p>', '<p><em>(Kết quả t&igrave;m được viết dưới dạng số thập ph&acirc;n v&agrave; ghi theo thứ tự a;b;c. C&aacute;c số c&aacute;ch nhau bởi dấu chấm phẩy ";")</em></p>', '5,75;2,875;5,75', 1, 1, 0),
(56, 5, 'hsg', 'casio', 'k9', '<p>Một người gửi&nbsp; tiết kiệm 500 000 000 đồng (tiền Việt Nam) v&agrave;o một ng&acirc;n h&agrave;ng theo mức kỳ hạn 6 th&aacute;ng với l&atilde;i suất 14,5% một năm. Hỏi sau 8 năm 2 th&aacute;ng người n&agrave;y nhận được bao nhi&ecirc;u tiền cả vốn lẫn l&atilde;i ở ng&acirc;n h&agrave;ng (kết quả l&agrave;m tr&ograve;n đến đơn vị đồng). Biết rằng người đ&oacute; kh&ocirc;ng r&uacute;t l&atilde;i ở tất cả c&aacute;c định kỳ trước đ&oacute; v&agrave; nếu r&uacute;t tiền trước thời hạn th&igrave; ng&acirc;n h&agrave;ng trả l&atilde;i suất loại <em>kh&ocirc;ng kỳ hạn</em> l&agrave; <em>0,016%</em> một ng&agrave;y <em>(1 th&aacute;ng t&iacute;nh bằng 30 ng&agrave;y)</em>.</p>\r\n<p>&nbsp;</p>', '', '1546949584', 1, 1, 3),
(57, 5, 'hsg', 'casio', 'k9', '<p>Cho số A =3<sup>9999</sup> . T&igrave;m hai chữ số cuối của A</p>', '', '67', 1, 1, 3),
(58, 5, 'hsg', 'casio', 'k9', '<p>Theo di ch&uacute;c, bốn người con được hưởng số tiền l&agrave; 9 902 490 255 đồng chia theo tỉ lệ như sau:</p>\r\n<p>- Người con thứ nhất v&agrave; người con thứ hai l&agrave; 2:3</p>\r\n<p>- Người con thứ hai v&agrave; người con thứ ba l&agrave; 4:5</p>\r\n<p>- Người con thứ ba v&agrave; người con thứ tư l&agrave; 6:7</p>\r\n<p>Hỏi mỗi người con nhận được số tiền l&agrave; bao nhi&ecirc;u (đơn vị t&iacute;nh đến đồng)?</p>', '<p>(Đ&aacute;p số ghi theo thứ tự của c&aacute;c con: thứ nhất;thứ hai;thứ ba;thứ tư - Số tiền mỗi người số c&aacute;ch nhau bởi dấu chấm phẩy)</p>', '1508950896;2263426344;2829282930;3300830085', 1, 1, 0),
(59, 5, 'hsg', 'casio', 'k9', '<p>Cho h&igrave;nh vu&ocirc;ng ABCD cạnh bằng 12 cm. Vẽ đoạn AE với E l&agrave; điểm tr&ecirc;n cạnh CD sao cho DE = 5 cm. Đường trung trực của đoạn AE cắt AE, AD v&agrave; BC theo thứ tự tại M, P v&agrave; Q. T&iacute;nh tỉ số độ d&agrave;i giữa PM v&agrave; MQ.&nbsp;</p>', '<p><em>(Đ&aacute;p số lấy với 4 chữ số thập ph&acirc;n)</em></p>', '0,2632', 1, 1, 0),
(60, 5, 'hsg', 'casio', 'k9', '<p>Cho hai đường tr&ograve;n (O) v&agrave; (O&rsquo;) cắt nhau tại A v&agrave; B (O v&agrave; O&rsquo; nằm kh&aacute;c ph&iacute;a đối với AB). Một đường thẳng đi qua điểm A cắt (O) v&agrave; (O&rsquo;) lần lượt tại hai điểm M v&agrave; N. T&iacute;nh độ d&agrave;i lớn nhất của đoạn thẳng MN (đơn vị cm) nếu cho biết AB = 16 cm, b&aacute;n k&iacute;nh của đường tr&ograve;n t&acirc;m O v&agrave; O&rsquo; lần lượt l&agrave;:</p>\r\n<p><img class="Wirisformula" src="../tiny_mce/plugins/tiny_mce_wiris/integration/showimage.php?formula=ef45934ee48b69804d4789bbd29a99e0.png" alt="15 ra&iacute;z cuadrada de 2 espacio c m espacio v &agrave; espacio 10 ra&iacute;z cuadrada de 2 espacio fin ra&iacute;z c m" align="middle" data-mathml="&laquo;math xmlns=&uml;http://www.w3.org/1998/Math/MathML&uml;&raquo;&laquo;mn&raquo;15&laquo;/mn&raquo;&laquo;msqrt&raquo;&laquo;mn&raquo;2&laquo;/mn&raquo;&laquo;/msqrt&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mi&raquo;c&laquo;/mi&raquo;&laquo;mi&raquo;m&laquo;/mi&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mi&raquo;v&laquo;/mi&raquo;&laquo;mi&raquo;&sect;#224;&laquo;/mi&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;mn&raquo;10&laquo;/mn&raquo;&laquo;msqrt&raquo;&laquo;mn&raquo;2&laquo;/mn&raquo;&laquo;mo&raquo;&sect;#160;&laquo;/mo&raquo;&laquo;/msqrt&raquo;&laquo;mi&raquo;c&laquo;/mi&raquo;&laquo;mi&raquo;m&laquo;/mi&raquo;&laquo;/math&raquo;" /></p>\r\n<p>&nbsp;</p>', '<p><em>(Đ&aacute;p số lấy với 4 chữ số thập ph&acirc;n)</em></p>', '62,6176', 1, 1, 0),
(61, 5, 'hsg', 'casio', 'k9', '<p>Một miếng b&igrave;a h&igrave;nh tam gi&aacute;c đều ABC, cạnh a=30,1234<em>cm</em>. Em h&atilde;y t&igrave;m c&aacute;ch cắt một h&igrave;nh chữ nhật MNPQ từ miếng b&igrave;a tr&ecirc;n (với M, N thuộc cạnh BC, P v&agrave; Q tương ứng thuộc cạnh AC v&agrave; AB) sao cho S<sub>MNPQ</sub> lớn nhất. H&atilde;y t&iacute;nh diện t&iacute;ch của h&igrave;nh chữ nhật MNPQ khi đ&oacute;?</p>', '<p><em>(Đ&aacute;p số lấy với 4 chữ số thập ph&acirc;n - đơn vị t&iacute;nh bằng cm<sup>2</sup>)</em></p>', '196,4620', 1, 1, 0),
(62, 5, 'hsg', 'casio', 'k9', '<p>Một h&igrave;nh chữ nhật c&oacute; c&aacute;c k&iacute;ch thước đo bằng số nguy&ecirc;n. Nếu số chỉ chu vi bằng số chỉ diện t&iacute;ch <em><sub>&nbsp;</sub></em>th&igrave; k&iacute;ch thước của h&igrave;nh chữ nhật đ&oacute; phải như thế n&agrave;o?</p>', '<p>Đ&aacute;p số được ghi dưới dạng: (d&agrave;i;rộng) nếu c&oacute; nhiều hơn 1 cặp th&igrave; m&ocirc;i cặp c&aacute;ch nhau bởi dấu chấm phẩy ";"</p>', '(4;4);(6;3)', 1, 1, 0),
(63, 5, 'hsg', 'casio', 'k9', '<p>Một h&igrave;nh <strong><em>H</em></strong> được tạo bởi c&aacute;c lục gi&aacute;c đều xếp li&ecirc;n tiếp như h&igrave;nh vẽ dưới đ&acirc;y. Biết cạnh của h&igrave;nh lục gi&aacute;c đều bằng 15,01 <em>cm</em> v&agrave; chu vi của h&igrave;nh <strong><em>H</em></strong> (chu vi <strong><em>H</em></strong> l&agrave; tổng độ d&agrave;i c&aacute;c cạnh bao quanh kh&ocirc;ng kể c&aacute;c cạnh chung giữa hai lục gi&aacute;c liền kề) l&agrave; 1208,305 <em>m</em>. Hỏi c&oacute; tất cả bao nhi&ecirc;u h&igrave;nh lục gi&aacute;c đều tạo n&ecirc;n h&igrave;nh <strong><em>H</em></strong> ?</p>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="../upload/images/cauhoi/1.png" alt="" width="280" height="101" /></p>\r\n<p>&nbsp;</p>', '', '2012', 1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `xh_dethi`
--

CREATE TABLE IF NOT EXISTS `xh_dethi` (
  `made` int(11) NOT NULL AUTO_INCREMENT,
  `tende` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `loaide` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `capthi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `socau` int(100) NOT NULL,
  `thoigian` int(200) NOT NULL,
  `tacgia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `khoi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay` date NOT NULL,
  `hinhthuc` int(5) NOT NULL,
  PRIMARY KEY (`made`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `xh_dethi`
--

INSERT INTO `xh_dethi` (`made`, `tende`, `loaide`, `capthi`, `noidung`, `socau`, `thoigian`, `tacgia`, `khoi`, `mon`, `hinhanh`, `ngay`, `hinhthuc`) VALUES
(5, 'Đề casio 1', 'hsg', 'tinh', '<p>Đề thi chọn HSG giải to&aacute;n bằng m&aacute;y t&iacute;nh Casio tỉnh Tuy&ecirc;n Quang năm học 2011 - 2012</p>', 16, 150, 'xuân hồng', 'k9', 'casio', 'may tinh casio FX570VN-PLUS.png', '2014-08-14', 2);

-- --------------------------------------------------------

--
-- Table structure for table `xh_dokhocauhoi`
--

CREATE TABLE IF NOT EXISTS `xh_dokhocauhoi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mucdo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `xh_dokhocauhoi`
--

INSERT INTO `xh_dokhocauhoi` (`id`, `mucdo`) VALUES
(1, 'Trung bình'),
(2, 'Khá'),
(3, 'Giỏi');

-- --------------------------------------------------------

--
-- Table structure for table `xh_hinhthucdethi`
--

CREATE TABLE IF NOT EXISTS `xh_hinhthucdethi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hinhthuc` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `xh_hinhthucdethi`
--

INSERT INTO `xh_hinhthucdethi` (`id`, `hinhthuc`) VALUES
(1, 'Thi chính thức'),
(2, 'Tự luyện'),
(3, 'Chưa đăng');

-- --------------------------------------------------------

--
-- Table structure for table `xh_hocsinh`
--

CREATE TABLE IF NOT EXISTS `xh_hocsinh` (
  `idhs` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `ngaysinh` varchar(100) NOT NULL,
  `gioitinh` varchar(100) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `sodt` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `khoi` varchar(50) NOT NULL,
  `lop` varchar(50) NOT NULL,
  `truong` varchar(100) NOT NULL,
  `hoatdong` int(1) NOT NULL,
  `hinhanh` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idhs`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `xh_hocsinh`
--

INSERT INTO `xh_hocsinh` (`idhs`, `username`, `hoten`, `pass`, `ngaysinh`, `gioitinh`, `diachi`, `sodt`, `email`, `khoi`, `lop`, `truong`, `hoatdong`, `hinhanh`) VALUES
(1, 'hong12', 'Lê Xuân Hồng', '827ccb0eea8a706c4c34a16891f84e7b', '12/8/1990', 'Nam', 'thử địa chỉ', 2147483647, '12/8/1990', 'k6', '12', 'Nguyễn Văn Nghi', 1, ''),
(2, 'hong1', 'Hồng 1', '7b406a4211c6494da6712db549e8c2ab', '1996-2-3', 'Nam', 'Đồng Hới - Quảng Bình', 0, '', 'K6', '6A', 'Nguyễn Văn Nghi', 1, ''),
(3, 'hong2', 'Lê Thị Hồng Nhung', '7b406a4211c6494da6712db549e8c2ab', '1997-9-12', 'Nữ', 'Ba Đồn - Quảng Bình', 0, '', 'K9', '6B', '', 1, ''),
(4, 'hong3', 'Hồng 2', '7b406a4211c6494da6712db549e8c2ab', '2000-5-25', 'Nữ', 'Hoàn Lão - Bố Trạch - Quảng Bình', 0, '', 'K7', '7A', '', 1, ''),
(38, '12321', 'nguyễn văn 12345', '202cb962ac59075b964b07152d234b70', '12/8/1990', 'Nam', 'thử địa chỉ', 2147483647, 'xhong5678@gmail.com', 'k6', '12', 'Nguyễn Văn Nghi', 1, 'website thi toan.png'),
(39, 'kutyrock', 'Anh Hào ', '17fe6a43ea53407dcc1fa41c3c7d33b2', '12/6/87', 'Nam', '49 Trương Định, P. bến nghé, Quận 1, TP.HCM', 933888867, 'des.anhhao@gmail.com', 'k9', '12a6', 'PHTH Thanh Hòa', 1, '2014-12-13_14-19-14-as.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `xh_khoihoc`
--

CREATE TABLE IF NOT EXISTS `xh_khoihoc` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `makhoi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenkhoi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `xh_khoihoc`
--

INSERT INTO `xh_khoihoc` (`id`, `makhoi`, `tenkhoi`) VALUES
(1, 'k6', 'Khối 6'),
(2, 'k7', 'Khối 7'),
(3, 'k8', 'Khối 8'),
(4, 'k9', 'Khối 9');

-- --------------------------------------------------------

--
-- Table structure for table `xh_kqbailam`
--

CREATE TABLE IF NOT EXISTS `xh_kqbailam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idhs` int(11) NOT NULL,
  `made` int(11) NOT NULL,
  `macau` int(11) NOT NULL,
  `kqchon` mediumtext COLLATE utf8_unicode_ci,
  `chamdiem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=58 ;

--
-- Dumping data for table `xh_kqbailam`
--

INSERT INTO `xh_kqbailam` (`id`, `idhs`, `made`, `macau`, `kqchon`, `chamdiem`) VALUES
(36, 2, 1, 40, '4', 1),
(37, 2, 1, 41, '1', 1),
(38, 2, 1, 42, '5', 1),
(39, 2, 1, 43, '4', 1),
(40, 2, 1, 44, '-3', 1),
(41, 2, 1, 45, '1', 0),
(42, 39, 5, 48, '', 0),
(43, 39, 5, 49, '', 0),
(44, 39, 5, 50, '', 0),
(45, 39, 5, 51, '', 0),
(46, 39, 5, 52, '', 0),
(47, 39, 5, 53, '', 0),
(48, 39, 5, 54, '', 0),
(49, 39, 5, 55, '', 0),
(50, 39, 5, 56, '', 0),
(51, 39, 5, 57, '', 0),
(52, 39, 5, 58, '', 0),
(53, 39, 5, 59, '', 0),
(54, 39, 5, 60, '', 0),
(55, 39, 5, 61, '', 0),
(56, 39, 5, 62, '', 0),
(57, 39, 5, 63, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `xh_kqbailam_tl`
--

CREATE TABLE IF NOT EXISTS `xh_kqbailam_tl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idhs` int(11) NOT NULL,
  `made` int(11) NOT NULL,
  `macau` int(11) NOT NULL,
  `kqchon` mediumtext COLLATE utf8_unicode_ci,
  `chamdiem` int(11) NOT NULL,
  `loigiai` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `lanthi` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=78 ;

--
-- Dumping data for table `xh_kqbailam_tl`
--

INSERT INTO `xh_kqbailam_tl` (`id`, `idhs`, `made`, `macau`, `kqchon`, `chamdiem`, `loigiai`, `lanthi`) VALUES
(30, 3, 5, 48, '1,6216', 1, '', 1),
(31, 3, 5, 49, '0,009', 1, '', 1),
(32, 3, 5, 50, '1', 0, '', 1),
(33, 3, 5, 51, '2', 0, '', 1),
(34, 3, 5, 52, '2', 0, '', 1),
(35, 3, 5, 53, '2', 0, '', 1),
(36, 3, 5, 54, '2', 0, '', 1),
(37, 3, 5, 55, '2', 0, '', 1),
(38, 3, 5, 56, '2', 0, '', 1),
(39, 3, 5, 57, '2', 0, '', 1),
(40, 3, 5, 58, '2', 0, '', 1),
(41, 3, 5, 59, '2', 0, '', 1),
(42, 3, 5, 60, '2', 0, '', 1),
(43, 3, 5, 61, '2', 0, '', 1),
(44, 3, 5, 62, '', 0, '', 1),
(45, 3, 5, 63, '2', 0, '', 1),
(46, 3, 5, 48, '1', 0, '', 2),
(47, 3, 5, 49, '1', 0, '', 2),
(48, 3, 5, 50, '1', 0, '', 2),
(49, 3, 5, 51, '1', 0, '', 2),
(50, 3, 5, 52, '1', 0, '', 2),
(51, 3, 5, 53, '1', 0, '', 2),
(52, 3, 5, 54, '1', 0, '', 2),
(53, 3, 5, 55, '1', 0, '', 2),
(54, 3, 5, 56, '1', 0, '', 2),
(55, 3, 5, 57, '', 0, '', 2),
(56, 3, 5, 58, '', 0, '', 2),
(57, 3, 5, 59, '', 0, '', 2),
(58, 3, 5, 60, '', 0, '', 2),
(59, 3, 5, 61, '', 0, '', 2),
(60, 3, 5, 62, '', 0, '', 2),
(61, 3, 5, 63, '', 0, '', 2),
(62, 3, 5, 48, '', 0, '', 3),
(63, 3, 5, 49, '123', 0, '', 3),
(64, 3, 5, 50, '5', 0, '', 3),
(65, 3, 5, 51, '', 0, '', 3),
(66, 3, 5, 52, '', 0, '', 3),
(67, 3, 5, 53, '', 0, '', 3),
(68, 3, 5, 54, '', 0, '', 3),
(69, 3, 5, 55, '', 0, '', 3),
(70, 3, 5, 56, '', 0, '', 3),
(71, 3, 5, 57, '', 0, '', 3),
(72, 3, 5, 58, '', 0, '', 3),
(73, 3, 5, 59, '', 0, '', 3),
(74, 3, 5, 60, '', 0, '', 3),
(75, 3, 5, 61, '', 0, '', 3),
(76, 3, 5, 62, '', 0, '', 3),
(77, 3, 5, 63, '2', 0, '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `xh_ktbailam`
--

CREATE TABLE IF NOT EXISTS `xh_ktbailam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `made` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idhs` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tgbatdau` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `xh_ktbailam`
--

INSERT INTO `xh_ktbailam` (`id`, `made`, `idhs`, `tgbatdau`) VALUES
(33, '3', '2', '2014-08-14 18:37:51'),
(35, '1', '2', '2014-08-15 16:08:17'),
(36, '5', '39', '2014-12-13 14:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `xh_ktbailam_tl`
--

CREATE TABLE IF NOT EXISTS `xh_ktbailam_tl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `made` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idhs` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tgbatdau` datetime NOT NULL,
  `lanthi` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=74 ;

--
-- Dumping data for table `xh_ktbailam_tl`
--

INSERT INTO `xh_ktbailam_tl` (`id`, `made`, `idhs`, `tgbatdau`, `lanthi`) VALUES
(70, '5', '3', '2014-08-24 15:34:14', 1),
(71, '5', '3', '1970-01-01 00:00:00', 2),
(72, '5', '3', '1970-01-01 00:00:00', 3),
(73, '5', '39', '1970-01-01 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `xh_loaide`
--

CREATE TABLE IF NOT EXISTS `xh_loaide` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `maloai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `loaide` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `xh_loaide`
--

INSERT INTO `xh_loaide` (`id`, `maloai`, `loaide`) VALUES
(1, 'hsg', 'Học sinh giỏi'),
(2, 'ontap', 'Ôn tập'),
(3, 'tuyensinh10', 'Tuyển sinh 10');

-- --------------------------------------------------------

--
-- Table structure for table `xh_monthi`
--

CREATE TABLE IF NOT EXISTS `xh_monthi` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `mamon` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `monthi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `xh_monthi`
--

INSERT INTO `xh_monthi` (`id`, `mamon`, `monthi`) VALUES
(1, 'toan', 'Toán'),
(2, 'ty', 'Vật lý'),
(3, 'hoa', 'Hóa học'),
(4, 'anh', 'Anh văn'),
(5, 'casio', 'casio');

-- --------------------------------------------------------

--
-- Table structure for table `xh_tintuc`
--

CREATE TABLE IF NOT EXISTS `xh_tintuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tomtat` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chitiet` text COLLATE utf8_unicode_ci,
  `hinhanh` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `linhvuc` int(10) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `ngaydang` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=102 ;

--
-- Dumping data for table `xh_tintuc`
--

INSERT INTO `xh_tintuc` (`id`, `tieude`, `tomtat`, `chitiet`, `hinhanh`, `linhvuc`, `trangthai`, `ngaydang`) VALUES
(91, 'Cho rằng kết quả kỳ thi tốt nghiệp THPT quốc gia chưa đủ tin cậy và chưa thể chọn lựa thí sinh ưu tú nhất, nhiều trường muốn giữ lại kỳ thi ĐH, CĐ.', '<p>Dự thảo phương &aacute;n tổ chức kỳ thi THPT quốc gia (gồm 3 phương &aacute;n) c&oacute; điểm mới l&agrave; kỳ thi c&oacute; thể thi theo m&ocirc;n hoặc theo b&agrave;i dưới dạng tổng hợp, t&iacute;ch hợp c&aacute;c m&ocirc;n học. Đặc biệt, kết quả của kỳ thi sẽ l&agrave; căn cứ quan trọng để c&aacute;c trường đại học, cao đẳng (ĐH, CĐ) thực hiện tuyển sinh. Nhiều &yacute; kiến cho rằng, kỳ thi', '<div class="content_font_class" align="center">&nbsp;</div>\r\n<div class="content_font_class" align="center">&nbsp;</div>\r\n<div class="content_font_class" align="center">&nbsp;</div>\r\n<div class="content_font_class" align="center"><span class="content_font_class"><img style="height: auto;" title="L&atilde;nh đạo nhiều trường tốp tr&ecirc;n muốn giữ lại kỳ thi đại học" src="http://farm10.gox.vn/tinmoi/store/images/thumb/17082014/1/1857773/lanh_dao_nhieu_truong_top_tren_muon_giu_lai_ky_thi_dai_hoc_0.jpg" alt="Th&iacute; sinh dự thi tốt nghiệp THPT năm 2014" width="455" height="0" align="middle" /></span></div>\r\n<div class="content_font_class" align="center"><span class="content_font_class">Th&iacute; sinh dự thi tốt nghiệp THPT năm 2014</span>.</div>\r\n<p class="content_font_class"><strong class="content_font_class">Kết quả chưa đủ tin cậy, nhiều trường vẫn phải thi th&ecirc;m</strong></p>\r\n<p class="content_font_class">Kỳ thi THPT quốc gia c&oacute; đề cập đến đề thi tổng hợp, t&iacute;ch hợp c&aacute;c m&ocirc;n học trong một b&agrave;i thi. Đ&acirc;y l&agrave; một sự đổi mới rất quan trọng n&ecirc;n cần được b&agrave;n luận một c&aacute;ch kỹ lưỡng để c&oacute; c&aacute;ch l&agrave;m ph&ugrave; hợp v&agrave; hiệu quả.</p>\r\n<p><img style="height: auto;" title="L&atilde;nh đạo nhiều trường tốp tr&ecirc;n muốn giữ lại kỳ thi đại học" src="http://farm10.gox.vn/tinmoi/store/images/thumb/17082014/1/1857773/lanh_dao_nhieu_truong_top_tren_muon_giu_lai_ky_thi_dai_hoc_1.jpg" alt="L&atilde;nh đạo nhiều trường tốp tr&ecirc;n muốn giữ lại kỳ thi đại học" width="150" height="0" align="left" /></p>\r\n<p>Theo &ocirc;ng Nguyễn Kim Sơn, Ph&oacute; gi&aacute;m đốc ĐH Quốc gia H&agrave; Nội, đề thi của kỳ thi tốt nghiệp THPT theo phương &aacute;n mới n&ecirc;n tổ chức thi theo 2 khối To&aacute;n v&agrave; Ngữ văn. Ri&ecirc;ng m&ocirc;n Ngoại ngữ c&oacute; thể đa dạng h&oacute;a h&igrave;nh thức thực hiện, c&oacute; t&iacute;nh đến yếu tố, điều kiện học tập, giảng dạy m&ocirc;n học n&agrave;y ở từng v&ugrave;ng, miền.</p>\r\n<p class="content_font_class">Phương &aacute;n n&agrave;y vừa thuận tiện cho việc x&eacute;t tốt nghiệp THPT, vừa thuận lợi cho c&aacute;c trường ĐH, CĐ x&eacute;t tuyển đầu v&agrave;o. Trong tương lai, đề thi sẽ dần được định hướng theo dạng b&agrave;i thi đ&aacute;nh gi&aacute; năng lực tổng hợp của học sinh.</p>\r\n<p class="content_font_class">Dự thảo phương &aacute;n thi tốt nghiệp THPT c&oacute; đề cập đến việc lấy kết quả của kỳ thi n&agrave;y để x&eacute;t tuyển v&agrave;o ĐH, CĐ. Tuy nhi&ecirc;n, đ&acirc;y l&agrave; vấn đề đ&ograve;i hỏi c&aacute;c trường ĐH, CĐ phải c&acirc;n nhắc v&agrave; b&agrave;n thảo kỹ v&igrave; độ tin cậy của kết quả của kỳ thi n&agrave;y n&ecirc;n sẽ vẫn c&oacute; những trường phải tổ chức th&ecirc;m một kỳ thi nữa để tuyển lựa th&iacute; sinh xuất sắc v&agrave;o trường.</p>\r\n<p>&nbsp;</p>\r\n<p>L&agrave; một trường đ&agrave;o tạo đội ngũ y, b&aacute;c sĩ nổi tiếng của cả nước, năm n&agrave;o đến m&ugrave;a tuyển sinh l&agrave; ĐH Y H&agrave; Nội cũng phải khắt khe trong việc chọn lọc th&iacute; sinh ưu t&uacute; nhất v&agrave;o trường.</p>\r\n<p class="content_font_class">Tuy nhi&ecirc;n, theo quy định tuyển thẳng, x&eacute;t tuyển ưu ti&ecirc;n của Bộ GD-ĐT, năm nay, ĐH Y vẫn phải nhận 127 học sinh tuyển thẳng v&agrave; ưu ti&ecirc;n x&eacute;t tuyển. Con số n&agrave;y chiếm 23,1%&nbsp;chỉ ti&ecirc;u của ng&agrave;nh B&aacute;c sĩ đa khoa. V&igrave; vậy, những th&iacute; sinh thi ĐH, CĐ đạt tới 26, 27 điểm vẫn c&oacute; nguy cơ &ldquo;rớt&rdquo; khi đăng k&yacute; v&agrave;o ĐH Y H&agrave; Nội. Thế nhưng, những th&iacute; sinh được tuyển thẳng chưa phải l&agrave; th&iacute; sinh ưu t&uacute; nhất.</p>\r\n<p class="content_font_class">&Ocirc;ng Nguyễn Hữu T&uacute;, Ph&oacute; Hiệu trưởng ĐH Y H&agrave; Nội cho biết, để đảm bảo chất lượng th&iacute; sinh &ldquo;đầu v&agrave;o&rdquo;, nh&agrave; trường vẫn phải tổ chức một kỳ thi ri&ecirc;ng chứ kh&ocirc;ng phải phụ thuộc v&agrave;o kết quả của kỳ thi &nbsp;THPT quốc gia.</p>\r\n<p class="content_font_class">Cũng giống như ĐH Y H&agrave; Nội, ĐH Sư phạm H&agrave; Nội c&oacute; nhiệm vụ đ&agrave;o tạo đội ngũ gi&aacute;o vi&ecirc;n đạt chất lượng cao cho đất nước v&agrave; cung cấp nh&acirc;n lực cho ng&agrave;nh gi&aacute;o dục n&ecirc;n việc tuyển chọn th&iacute; sinh v&agrave;o trường cũng phải đảm bảo theo như Đề &aacute;n Đổi mới căn bản v&agrave; to&agrave;n diện nền gi&aacute;o dục.</p>\r\n<p class="content_font_class">Trăn trở về kết quả kỳ thi THPT quốc gia được d&ugrave;ng để x&eacute;t tuyển v&agrave;o ĐH, CĐ, &ocirc;ng Nguyễn Văn Tr&agrave;o, Hiệu ph&oacute; ĐH Sư phạm H&agrave; Nội đề xuất cần c&oacute; sự gi&aacute;m s&aacute;t của c&aacute;c cơ quan chức ngăng trong kỳ thi quốc gia chung để c&aacute;c trường đại học c&oacute; thể y&ecirc;n t&acirc;m v&agrave;o kết quả của kỳ thi n&agrave;y để lựa chọn nguồn th&iacute; sinh chất lượng cao.</p>\r\n<p class="content_font_class"><strong class="content_font_class">N&ecirc;n giữ lại kỳ thi ĐH, CĐ</strong></p>\r\n<p class="content_font_class">D&ugrave; Bộ GD-ĐT c&oacute; đưa ra những giải ph&aacute;p để đảm bảo an to&agrave;n, nghi&ecirc;m t&uacute;c cho kỳ thi THPT quốc gia nhưng nhiều l&atilde;nh đạo c&aacute;c trường ĐH &ldquo;tốp&rdquo; tr&ecirc;n chưa thực sự tin tưởng v&agrave;o kết quả của kỳ thi n&agrave;y. Một số &yacute; kiến cho rằng, n&ecirc;n giữ lại kỳ thi ĐH, CĐ.</p>\r\n<p class="content_font_class">&Ocirc;ng Trần Văn Nam, Gi&aacute;m đốc ĐH Đ&agrave; Nẵng cho rằng, kỳ thi tốt nghiệp THPT l&agrave; để kiểm tra kiến thức đạt được v&agrave; mặt bằng tr&igrave;nh độ chung của th&iacute; sinh để c&oacute; thể x&eacute;t tốt nghiệp. C&ograve;n kỳ thi ĐH, CĐ l&agrave; c&oacute; yếu tố s&agrave;ng lọc, chọn lựa th&iacute; sinh tr&ecirc;n cơ sở cạnh tranh để tuyển những người giỏi nhất v&agrave;o một trường n&agrave;o đ&oacute;. Do đ&oacute;, kh&oacute; c&oacute; thể lấy mỗi kết quả của kỳ thi tốt nghiệp THPT để x&eacute;t th&iacute; sinh v&agrave;o trường ĐH, CĐ bởi mỗi nơi y&ecirc;u cầu nguồn tuyển kh&aacute;c nhau, t&ugrave;y theo đặc th&ugrave; ri&ecirc;ng. V&igrave; vậy, Bộ GD-ĐT vẫn n&ecirc;n giữ lại kỳ thi ĐH, CĐ.</p>\r\n<p class="content_font_class">Đồng &yacute; với quan điểm tr&ecirc;n, &ocirc;ng&nbsp;Nguyễn Duy Kho&aacute;t, Ph&oacute; Gi&aacute;m đốc Học viện An ninh cho rằng, việc tuyển chọn th&iacute; sinh v&agrave;o ĐH, CĐ n&ecirc;n để c&aacute;c trường tổ chức thi v&agrave; tự quyết v&igrave; tr&ecirc;n thực tế tại Học viện c&oacute; học sinh đạt giải trong kỳ thi học sinh giỏi quốc gia nhưng 3 m&ocirc;n thi ĐH chỉ đạt 9 điểm. V&igrave; vậy, giữ lại kỳ thi ĐH, CĐ l&agrave; yếu tố cần thiết để s&agrave;ng lọc th&iacute; sinh v&agrave; để c&aacute;c trường đảm bảo được nguồn tuyển sinh &ldquo;đầu v&agrave;o&rdquo;.</p>\r\n<p><img style="height: auto;" title="L&atilde;nh đạo nhiều trường tốp tr&ecirc;n muốn giữ lại kỳ thi đại học" src="http://farm10.gox.vn/tinmoi/store/images/thumb/17082014/1/1857773/lanh_dao_nhieu_truong_top_tren_muon_giu_lai_ky_thi_dai_hoc_2.jpg" alt="L&atilde;nh đạo nhiều trường tốp tr&ecirc;n muốn giữ lại kỳ thi đại học" width="150" height="0" align="right" /></p>\r\n<p>&Ocirc;ng Phan Huy Ph&uacute;, Hiệu trưởng trường ĐH Thăng Long cho rằng, hiện nay v&agrave; trong v&agrave;i năm tới, c&aacute;c trường ĐH, CĐ chưa thực sự tin tưởng v&agrave;o kết quả của kỳ thi THPT tổ chức tại c&aacute;c địa phương cho d&ugrave; Bộ GD-ĐT c&oacute; huy động lực lượng từ c&aacute;c trường ĐH tham gia tr&ocirc;ng thi. V&igrave; vậy, nếu tổ chức kỳ thi THPT quốc gia ở địa phương th&igrave; nhiều trường sẽ phải tổ chức thi bổ sung, g&acirc;y kh&oacute; khăn cho th&iacute; sinh v&agrave; tốn k&eacute;m c&ocirc;ng sức, tiền bạc của x&atilde; hội.</p>\r\n<p class="content_font_class">Việc sử dụng chung kết quả của kỳ thi để x&eacute;t tuyển v&agrave;o c&aacute;c trường sẽ nảy sinh nhiều vấn đề phức tạp.&nbsp;Nếu xử l&yacute; kh&ocirc;ng tốt sẽ l&agrave;m tốn k&eacute;m rất nhiều thời gian, c&ocirc;ng sức v&agrave; tiền bạc của c&aacute;c gia đ&igrave;nh v&agrave; c&aacute;c trường, đồng thời dễ dẫn đến nhữmg bất hợp l&yacute;. Bởi c&oacute; trường hợp những th&iacute; sinh xứng đ&aacute;ng hơn lại kh&ocirc;ng tr&uacute;ng tuyển.</p>\r\n<p class="content_font_class">G&oacute;p &yacute; về việc tổ chức x&eacute;t tuyển sau khi c&oacute; kết quả thi, &ocirc;ng Phan Huy Ph&uacute; đề xuất một phương &aacute;n tổ chức x&eacute;t tuyển dựa ho&agrave;n to&agrave;n v&agrave;o c&ocirc;ng nghệ th&ocirc;ng tin. Cụ thể l&agrave; theo &ldquo;Chương tr&igrave;nh x&eacute;t tuyển&rdquo; với nền tảng l&agrave; thuật to&aacute;n &ldquo;Chấp nhận tr&igrave; ho&atilde;n&rdquo; (Deferred - Acceptance) đ&atilde; gi&uacute;p A. Roth được nhận giải Nobel về Kinh tế năm 2012 c&ugrave;ng với Shapley.</p>\r\n<p class="content_font_class">Theo &ocirc;ng Phan Huy Ph&uacute;, để tiến h&agrave;nh x&eacute;t tuyển, Bộ GD-ĐT sẽ l&agrave;m đầu mối th&agrave;nh lập v&agrave; chỉ đạo một ban tuyển sinh gồm c&aacute;c th&agrave;nh vi&ecirc;n đại diện của c&aacute;c trường, sử dụng một phần kết quả kỳ thi để x&eacute;t tuyển.&nbsp;</p>\r\n<p class="content_font_class">Sau đ&oacute;, ban tuyển sinh sẽ chạy "chương tr&igrave;nh x&eacute;t tuyển&rdquo; theo dữ liệu l&agrave; chỉ ti&ecirc;u của c&aacute;c trường, nguyện vọng v&agrave; kết quả học tập cũng như kết quả thi của th&iacute; sinh. Chỉ trong v&agrave;i giờ sẽ c&oacute; ngay kết quả ph&acirc;n bố th&iacute; sinh về c&aacute;c trường.</p>\r\n<p class="content_font_class">C&aacute;c trường c&oacute; những y&ecirc;u cầu ri&ecirc;ng sẽ tự tổ chức đ&aacute;nh gi&aacute; trước kỳ thi quốc gia v&agrave; chuyển kết quả về Ban Tuyển sinh để chạy &ldquo;chương tr&igrave;nh x&eacute;t tuyển&rdquo;.</p>\r\n<p class="content_font_class">&Ocirc;ng Huy Ph&uacute; cho rằng, việc x&eacute;t tuyển theo &ldquo;chương tr&igrave;nh x&eacute;t tuyển&rdquo; n&ecirc;u tr&ecirc;n ưu việt hơn nhiều so với c&aacute;ch x&eacute;t tuyển nguyện vọng bổ sung trong những năm qua.&nbsp;Th&iacute; sinh sẽ được v&agrave;o học trường cao nhất c&oacute; thể theo thứ tự ưu ti&ecirc;n của họ, tương quan với số điểm m&agrave; họ c&oacute;. Song song với đ&oacute;, c&aacute;c trường lại được danh s&aacute;ch tr&uacute;ng tuyển tốt nhất trong khu&ocirc;n khổ c&aacute;c nguyện vọng của th&iacute; sinh v&agrave; loại bỏ triệt để c&aacute;c trường hợp &ldquo;ảo&rdquo; (mỗi th&iacute; sinh chỉ tr&uacute;ng tuyển ch&iacute;nh thức tối đa 1 nguyện vọng). Thời gian th&igrave; được r&uacute;t ngắn đi rất nhiều, từ 1 th&aacute;ng xuống chỉ c&ograve;n 1 ng&agrave;y.</p>\r\n<p class="content_font_class">Cơ sở để ĐH Thăng Long đề xuất thuật to&aacute;n n&agrave;y l&agrave; đ&atilde; từng thử nghiệm với h&agrave;ng triệu dữ liệu v&agrave; qua kiểm tra kết quả nhận được độ ch&iacute;nh x&aacute;c cao. Nếu Bộ GD-ĐT x&eacute;t thấy c&oacute; thể khả thi, &ocirc;ng Huy Ph&uacute; khẳng định sẽ sẵn s&agrave;ng phối hợp để triển khai trong thời gian tới.</p>\r\n<div class="content_font_class" align="right">Theo <strong class="content_font_class">B&iacute;ch Lan</strong></div>\r\n<div class="content_font_class" align="right"><em class="content_font_class">VOV.VN</em></div>\r\n<p>&nbsp;</p>', 'hocsinh.jpg', 3, 1, '2013/06/16'),
(92, 'Kinh nghiệm làm bài thi trắc nghiệm', '<p>Chia sẻ kinh nghiệm l&agrave;m b&agrave;i thi trắc nghiệm</p>', '<p>Để tạo điều kiện cho th&iacute; sinh c&oacute; thể l&agrave;m b&agrave;i thi trắc nghiệm hiệu quả, Cục khảo th&iacute; v&agrave; kiểm định chất lượng gi&aacute;o dục thuộc Bộ GD-ĐT đ&atilde; đưa ra 11 lưu &yacute; với th&iacute; sinh khi thi trắc nghiệm.<br /> <br /> B&agrave;i thi trắc nghiệm ngo&agrave;i y&ecirc;u cầu về kỹ năng kiến thức c&ograve;n đ&ograve;i hỏi c&oacute; những phương ph&aacute;p v&agrave; c&aacute;ch thức l&agrave;m b&agrave;i (Ảnh minh họa)<br /> <br /> <strong>1</strong>. Đối với thi trắc nghiệm, đề thi gồm nhiều c&acirc;u, rải khắp chương tr&igrave;nh, kh&ocirc;ng c&oacute; trọng t&acirc;m cho mỗi m&ocirc;n thi, do đ&oacute; cần phải học to&agrave;n bộ nội dung m&ocirc;n học, tr&aacute;nh đo&aacute;n &ldquo;tủ&rdquo;, học &ldquo;tủ&rdquo;.<br /> <br /> <strong>2</strong>. Gần s&aacute;t ng&agrave;y thi, n&ecirc;n r&agrave; so&aacute;t lại chương tr&igrave;nh m&ocirc;n học đ&atilde; &ocirc;n tập; xem kỹ hơn đối với những nội dung kh&oacute;; nhớ lại những chi tiết cốt l&otilde;i. Kh&ocirc;ng n&ecirc;n l&agrave;m th&ecirc;m những c&acirc;u trắc nghiệm mới v&igrave; dễ hoang mang nếu gặp những c&acirc;u trắc nghiệm qu&aacute; kh&oacute;.<br /> <br /> <strong>3</strong>. Đừng bao giờ nghĩ đến việc mang &ldquo;t&agrave;i liệu trợ gi&uacute;p&rdquo; v&agrave;o ph&ograve;ng thi hoặc tr&ocirc;ng chờ sự gi&uacute;p đỡ của th&iacute; sinh kh&aacute;c trong ph&ograve;ng thi, v&igrave; c&aacute;c th&iacute; sinh c&oacute; đề thi với h&igrave;nh thức ho&agrave;n to&agrave;n kh&aacute;c nhau. B&ecirc;n cạnh đ&oacute; do t&iacute;nh chất cạnh tranh của k&igrave; thi v&agrave; thời gian l&agrave;m b&agrave;i hạn chế n&ecirc;n nếu c&oacute; tư tưởng &ldquo;gian lận&rdquo; chắc chắc l&agrave;m b&agrave;i sẽ kh&ocirc;ng được hiệu quả.<br /> <br /> <strong>4</strong>. Trước giờ thi, n&ecirc;n &ldquo;&ocirc;n&rdquo; lại to&agrave;n bộ quy tr&igrave;nh thi trắc nghiệm để h&agrave;nh động ch&iacute;nh x&aacute;c v&agrave; nhanh nhất, v&igrave; c&oacute; thể n&oacute;i, thi trắc nghiệm l&agrave; một... cuộc chạy &ldquo;marathon&rdquo;.<br /> <br /> <strong>5</strong>. Kh&ocirc;ng phải loại b&uacute;t ch&igrave; n&agrave;o cũng th&iacute;ch hợp khi l&agrave;m b&agrave;i trắc nghiệm. N&ecirc;n chọn loại b&uacute;t ch&igrave; mềm (như 2B...) để dễ t&ocirc;, kh&ocirc;ng n&ecirc;n d&ugrave;ng b&uacute;t ch&igrave; cứng v&igrave; t&ocirc; dễ bị g&atilde;y ch&igrave;. Kh&ocirc;ng n&ecirc;n gọt đầu b&uacute;t ch&igrave; qu&aacute; nhọn; đầu b&uacute;t ch&igrave; n&ecirc;n dẹt, phẳng để nhanh ch&oacute;ng t&ocirc; đen &ocirc; trả lời. Khi t&ocirc; đen &ocirc; đ&atilde; lựa chọn, cần cầm b&uacute;t ch&igrave; thẳng đứng để t&ocirc; được nhanh. N&ecirc;n c&oacute; v&agrave;i b&uacute;t ch&igrave; đ&atilde; gọt sẵn để dự trữ khi l&agrave;m b&agrave;i.<br /> <br /> <strong>6</strong>. Theo đ&uacute;ng hướng dẫn của gi&aacute;m thị, thực hiện tốt v&agrave; tạo t&acirc;m trạng thoải m&aacute;i trong phần khai b&aacute;o tr&ecirc;n phiếu trả lời trắc nghiệm (TLTN). Bằng c&aacute;ch đ&oacute;, th&iacute; sinh c&oacute; thể củng cố sự tự tin khi l&agrave;m b&agrave;i trắc nghiệm.<br /> <br /> <strong>7</strong>. Thời gian l&agrave; một thử th&aacute;ch khi l&agrave;m b&agrave;i trắc nghiệm; th&iacute; sinh phải hết sức khẩn trương, tiết kiệm thời gian; phải vận dụng kiến thức, kỹ năng để nhanh ch&oacute;ng quyết định chọn c&acirc;u trả lời đ&uacute;ng.<br /> <br /> <strong>8</strong>. N&ecirc;n để phiếu TLTN ph&iacute;a tay cầm b&uacute;t (thường l&agrave; b&ecirc;n phải), đề thi trắc nghiệm ph&iacute;a kia (b&ecirc;n tr&aacute;i): tay tr&aacute;i giữ ở vị tr&iacute; c&acirc;u trắc nghiệm đang l&agrave;m, tay phải d&ograve; t&igrave;m số c&acirc;u trả lời tương ứng tr&ecirc;n phiếu TLTN v&agrave; t&ocirc; v&agrave;o &ocirc; trả lời được lựa chọn (tr&aacute;nh t&ocirc; nhầm sang d&ograve;ng của c&acirc;u kh&aacute;c).<br /> <br /> <strong>9</strong>. N&ecirc;n bắt đầu l&agrave;m b&agrave;i từ c&acirc;u trắc nghiệm số 1; lần lượt &ldquo;lướt qua&rdquo; kh&aacute; nhanh, quyết định l&agrave;m những c&acirc;u cảm thấy dễ v&agrave; chắc chắn, đồng thời đ&aacute;nh dấu trong đề thi những c&acirc;u chưa l&agrave;m được; lần lượt thực hiện đến c&acirc;u trắc nghiệm cuối c&ugrave;ng trong đề. Sau đ&oacute; quay trở lại &ldquo;giải quyết&rdquo; những c&acirc;u đ&atilde; tạm thời bỏ qua.<br /> <br /> Lưu &yacute;, trong khi thực hiện v&ograve;ng hai cũng cần hết sức khẩn trương; n&ecirc;n l&agrave;m những c&acirc;u tương đối dễ hơn, một lần nữa bỏ lại những c&acirc;u qu&aacute; kh&oacute; để giải quyết trong lượt thứ ba, nếu c&ograve;n thời gian.<br /> <br /> <strong>10</strong>. Khi l&agrave;m một c&acirc;u trắc nghiệm, phải đ&aacute;nh gi&aacute; để loại bỏ ngay những phương &aacute;n sai v&agrave; tập trung c&acirc;n nhắc trong c&aacute;c phương &aacute;n c&ograve;n lại phương &aacute;n n&agrave;o l&agrave; đ&uacute;ng.<br /> <br /> <strong>11</strong>. Cố gắng trả lời tất cả c&aacute;c c&acirc;u trắc nghiệm của đề thi để c&oacute; cơ hội gi&agrave;nh điểm cao nhất. Do thi trắc nghiệm vẫn chưa c&oacute; h&igrave;nh thức trừ điểm ngược khi l&agrave;m sai n&ecirc;n th&iacute; sinh kh&ocirc;ng n&ecirc;n để trống một c&acirc;u n&agrave;o (kh&ocirc;ng trả lời).</p>', 'trac nghiem.jpg', 3, 1, '2013/06/16'),
(93, 'Tiêu cực trong thi cử của học sinh và hậu quả xã hội từ góc độ tâm lý', '<p><strong>&hellip;Ch&uacute;ng ta thử nghĩ về một học sinh từ khi bước ch&acirc;n v&agrave;o trường tiểu học đến khi ra trường ở bậc đại học, suốt 16 năm kh&ocirc;ng hề c&oacute; gian lận trong thi cử th&igrave; khi ra đời sẽ thế n&agrave;o? Sẽ trở th&agrave;nh người c&ocirc;ng d&acirc;n tốt! Đ&oacute; l&agrave; c&acirc;u trả lời.</strong></p>', '<p>Với học sinh, h&igrave;nh thức ti&ecirc;u cực trong thi cử thường thấy hiện nay l&agrave; &ldquo;quay c&oacute;p&rdquo;.</p>\r\n<p>Nguy&ecirc;n thủy của cụm từ &ldquo;quay c&oacute;p&rdquo; l&agrave; copier- tiếng Ph&aacute;p c&oacute; nghĩa l&agrave; sao ch&eacute;p. Từ copier được Việt h&oacute;a l&agrave; c&oacute;p-pi hay l&agrave; cọp d&ecirc;.</p>\r\n<p>Từ ngữ n&agrave;y được du nhập v&agrave; sử dụng rộng r&atilde;i tại Việt Nam c&oacute; lẽ l&agrave; từ nửa sau thế kỷ XIX khi người Ph&aacute;p đặt nền cai trị ở nước ta v&agrave; chuyển nền học vấn theo Nho học th&agrave;nh T&acirc;y học.</p>\r\n<div id="attachment_523731" class="wp-caption aligncenter" style="width: 510px;"><img class="size-full wp-image-523731" style="display: block; margin-left: auto; margin-right: auto;" src="http://static9.nguyentandung.org/files/2014/08/gianlan2.jpg" alt="" width="500" height="349" />\r\n<p class="wp-caption-text">Ti&ecirc;u cực trong thi cử của học sinh v&agrave; hậu quả x&atilde; hội từ g&oacute;c độ t&acirc;m l&yacute;</p>\r\n</div>\r\n<p>Trong h&agrave;nh ch&aacute;nh từ copier kh&ocirc;ng c&oacute; nghĩa xấu v&igrave; n&oacute; l&agrave; sao ch&eacute;p l&agrave; bản sao&hellip; Trong gi&aacute;o dục, từ copier, cọp d&ecirc; &aacute;m chỉ điều xấu đ&oacute; l&agrave; h&agrave;nh vi ch&eacute;p b&agrave;i của người kh&aacute;c, ch&eacute;p t&agrave;i liệu, gian lận trong học v&agrave; thi.<br /> V&igrave; vậy, đối với học tr&ograve; ng&agrave;y xưa nếu bị g&aacute;n gh&eacute;p l&agrave; tr&ograve; cọp d&ecirc;, thằng cọp d&ecirc; th&igrave; l&agrave; một điều xấu, một sự ch&ecirc; tr&aacute;ch, sỉ nhục. Học tr&ograve; tự trọng lu&ocirc;n sỉ diện tr&aacute;nh xa điều n&agrave;y.</p>\r\n<p>Dần dần từ copier đ&atilde; c&oacute; những c&aacute;ch gọi kh&aacute;c như: cọp d&ecirc;, m&aacute;nh, b&ugrave;a ch&uacute;, quay c&oacute;p v&agrave; hiện nay l&agrave; phao.</p>\r\n<p>Từ &ldquo;quay c&oacute;p&rdquo; chuyển sang &ldquo;phao&rdquo; l&agrave; một bước chuyển biến t&acirc;m l&yacute; đ&aacute;ng lưu &yacute;. C&aacute;c từ ngữ như cọp d&ecirc;, m&aacute;nh, b&ugrave;a ch&uacute;, quay c&oacute;p đều c&oacute; &yacute; nghĩa đ&oacute; l&agrave; điều xấu l&agrave; gian lận, m&aacute;nh kh&oacute;e, bất minh trong thi cử th&igrave; từ &ldquo;phao&rdquo; lại c&oacute; ẩn &yacute; kh&aacute;c hẳn, ngược lại.</p>\r\n<p>Phao l&agrave; vật cứu hộ d&agrave;nh cho người bị rơi xuống nước, sắp chết đuối&hellip; V&igrave; vậy, việc một người sắp chết đuối m&agrave; chụp lấy phao, &ocirc;m phao l&agrave; điều tự nhi&ecirc;n n&ecirc;n l&agrave;m, phải l&agrave;m kh&ocirc;ng c&oacute; g&igrave; l&agrave; xấu xa, gian lận. Việc đưa phao, quăng phao cho người bị rớt xuống nước l&agrave; điều phải l&agrave;m, l&agrave; điều tốt.</p>\r\n<p>Như vậy, từ một việc l&agrave;m được coi l&agrave; xấu, l&agrave; gian lận đ&atilde; chuyển th&agrave;nh l&agrave; một việc được coi l&agrave; tốt. Phải chăng đ&oacute; l&agrave; sự chuyển biến về t&acirc;m l&yacute;, t&igrave;nh cảm v&agrave; nhận thức của một bộ phận học sinh v&agrave; phụ huynh?</p>\r\n<p>Nh&igrave;n lại lịch sử khoa cử Việt Nam ch&uacute;ng ta cũng dễ d&agrave;ng thấy rằng trong thi cử thời n&agrave;o cũng c&oacute; những ti&ecirc;u cực lu&ocirc;n ẩn hiện b&ecirc;n cạnh những mặt t&iacute;ch cực.</p>\r\n<p>V&igrave; vậy m&agrave; ng&agrave;y xưa c&aacute;c thầy đồ khi dạy cho c&aacute;c m&ocirc;n sinh của m&igrave;nh lu&ocirc;n răn đe cấm kỵ về những th&oacute;i gian lận trong thi cử. C&aacute;c sĩ tử c&oacute; l&ograve;ng tự trọng cũng kh&ocirc;ng để m&igrave;nh vi phạm điều n&agrave;y.</p>\r\n<p>Luật lệ khoa cử thời xưa cũng xử l&yacute; rất nặng những gian lận trong thi cử. Sĩ tử khi thi m&agrave; ch&eacute;p b&agrave;i người kh&aacute;c, đem theo s&aacute;ch vở l&eacute;n l&uacute;t ghi ch&eacute;p bị ph&aacute;t hiện th&igrave; vi phạm trường qui bị gh&eacute;p tội l&agrave; &ldquo;huề hiệp văn tự&rdquo; v&agrave; bị xử l&yacute; rất nặng &ldquo;chung th&acirc;n bất khả ứng th&iacute;&rdquo; tức l&agrave; một đời kh&ocirc;ng được đi thi nữa.</p>\r\n<p>Một số quan lại coi thi nếu c&oacute; th&ocirc;ng đồng, gian lận hoặc thiếu tr&aacute;ch nhiệm trong thi cử cũng bị xử l&yacute; rất nặng : gi&aacute;ng chức, lưu đ&agrave;y&hellip;như dưới triều L&ecirc;, triều Nguyễn.<br /> L&ecirc; Th&aacute;nh T&ocirc;ng, một vị vua anh minh rất quan t&acirc;m tới khoa cử. Nh&agrave; vua thường tự m&igrave;nh hoặc cử ra những vị quan cao cấp, li&ecirc;m khiết l&agrave;m chủ khảo c&aacute;c kỳ thi tổ chức tại kinh đ&ocirc;. C&aacute;c kỳ thi đ&oacute; thật sự l&agrave; phương thức lựa chọn hiền t&agrave;i cho đất nước.</p>\r\n<p>Ngược lại, nhiều kỳ thi dưới thời Trịnh Nguyễn ph&acirc;n tranh tổ chức lỏng lẻo đầy rẫy gian lận đ&atilde; biến tướng th&agrave;nh nơi mua quan b&aacute;n chức &ldquo;sinh đồ ba quan&rdquo;. Hậu quả l&agrave; tạo ra nhiều quan lại s&acirc;u d&acirc;n mọt nước.</p>\r\n<p><strong>Ng&agrave;nh Gi&aacute;o dục cần phải l&agrave;m g&igrave;?</strong></p>\r\n<p>Hiện nay ng&agrave;nh Gi&aacute;o dục đang cải tiến việc học, việc thi &ldquo;học thực chất, thi thực chất&rdquo;.</p>\r\n<p>Ch&uacute;ng ta cũng đang trải qua nhiều năm thực hiện cuộc vận động &ldquo; hai kh&ocirc;ng&rdquo; trong đ&oacute; c&oacute; nội dung &ldquo; n&oacute;i kh&ocirc;ng với ti&ecirc;u cực trong thi cử&rdquo; .</p>\r\n<p>Những kết quả bước đầu trong thực hiện cuộc vận động n&agrave;y l&agrave; đ&aacute;ng phấn khởi, những biện ph&aacute;p song h&agrave;nh với cuộc vận động cũng đ&atilde; chỉ ra những triển vọng thi cử l&agrave;nh mạnh trong tương lai.</p>\r\n<p>Tuy vậy, ch&uacute;ng ta cũng phải thừa nhận rằng những kết quả đạt được chưa thật chắc chắn, bền vững.</p>\r\n<p>Ch&uacute;ng ta cần phải c&oacute; thời gian, phải l&agrave;m nhiều việc để thay đổi t&acirc;m l&yacute;, t&igrave;nh cảm, th&aacute;i độ của người học, người thi từ chỗ coi gian lận trong thi cử l&agrave; &ldquo;phao&rdquo; chuyển đổi th&agrave;nh coi &ldquo;phao&rdquo; l&agrave; gian lận, l&agrave; xấu v&agrave; &ldquo;phao&rdquo; kh&ocirc;ng c&ograve;n được d&ugrave;ng để chỉ gian lận trong thi cử nữa th&igrave; vấn đề mới được giải quyết căn cơ .</p>\r\n<p>C&oacute; thể việc đ&oacute; phải l&agrave;m trong ba năm, năm năm tới hoặc l&acirc;u hơn nữa ch&uacute;ng ta cũng phải l&agrave;m.</p>\r\n<p>Thật vậy, ch&uacute;ng ta thử nghĩ về một học sinh từ khi bước ch&acirc;n v&agrave;o trường tiểu học đến khi ra trường ở bậc đại học, suốt 16 năm kh&ocirc;ng hề c&oacute; gian lận trong thi cử th&igrave; khi ra đời sẽ thế n&agrave;o? Sẽ trở th&agrave;nh người c&ocirc;ng d&acirc;n tốt! Đ&oacute; l&agrave; c&acirc;u trả lời.</p>\r\n<p>Ngược lại, nếu c&oacute; một học sinh tương tự nhưng đ&atilde; trải qua nh&igrave;ều gian lận trong thi cử để &ldquo;đỗ đạt th&agrave;nh t&agrave;i&rdquo; th&igrave; ra đời sẽ thế n&agrave;o? C&acirc;u trả lời c&oacute; thể l&agrave;:</p>\r\n<p>Nếu người đ&oacute; hoạt động ở chốn thương trường th&igrave; ắt g&igrave; c&oacute; cạnh tranh l&agrave;nh mạnh, tu&acirc;n thủ ph&aacute;p luật, nếu ở ch&iacute;nh trường chắc g&igrave; c&oacute; văn ho&aacute; từ chức, nếu ở quan trường chắc g&igrave; kh&ocirc;ng chạy quyền, chạy chức.</p>\r\n<p>Đ&oacute; l&agrave; hậu quả c&oacute; thể nh&igrave;n thấy của gian lận trong thi cử. Hậu quả n&agrave;y vừa g&acirc;y t&aacute;c hại cho nh&acirc;n c&aacute;ch của chủ thể gian lận vừa ảnh hưởng xấu cho x&atilde; hội.</p>\r\n<p>Để g&oacute;p phần khắc phục được điều đ&oacute;, c&oacute; lẽ ng&agrave;nh gi&aacute;o dục cần phải c&oacute; quyết t&acirc;m cao trong việc tổ chức thi cử l&agrave;nh mạnh, x&acirc;y dựng &yacute; thức tự gi&aacute;c, l&ograve;ng tự trọng đối với việc thi cử của học sinh ngay từ lớp một, cấp một v&agrave; duy tr&igrave; thường xuy&ecirc;n.</p>\r\n<p>Trong qu&aacute; tr&igrave;nh thực hiện cuộc vận động &ldquo;Hai kh&ocirc;ng&rdquo; trong ng&agrave;nh Gi&aacute;o dục, mong c&aacute;c cấp quản l&yacute; gi&aacute;o dục v&agrave; thầy, c&ocirc; gi&aacute;o, c&aacute;c bậc phụ huynh, học sinh, sinh vi&ecirc;n c&ugrave;ng tham khảo v&agrave; vận dụng.</p>', 'http://static9.nguyentandung.org/files/2014/08/gianlan2.jpg', 3, 1, '2013/06/16'),
(94, 'Thông báo về tổ chức thi Online cấp trường', '<p>Hiện chưa c&oacute; kế hoạch thi, c&aacute;c em học sinh thường xuy&ecirc;n theo d&otilde;i để biết cụ thể về thời gian thi, thể lệ thi v&agrave; c&aacute;c th&ocirc;ng tin quan trọng kh&aacute;c</p>', '', 'gccom_Toanhoc.jpg', 2, 1, '2014/08/03'),
(95, 'Giới thiệu website', '<p>Nội dung giới thiệu chưa cập nhật</p>', '<p>Nội dung tin Nội dung tinNội dung tin</p>', 'logo Anh ngu.png', 1, 1, '2014/08/03'),
(99, 'Phát động cuộc thi “Giải toán qua Internet – Violympic” và ra mắt chương trình “Toán Tiếng anh” năm học 2013 – 2014', '<p>Cuộc thi &ldquo;Giải to&aacute;n qua internet &ndash; violympic&rdquo; l&agrave; cuộc thi được tổ chức tr&ecirc;n website: http//:www.violympic.vn d&agrave;nh cho học sinh Phổ th&ocirc;ng tr&ecirc;n cả nước do Bộ GD&amp;ĐT phối hợp với Đại học FPT tổ chức. Sau 09 v&ograve;ng thi tự do, v&ograve;ng thi cấp trường, cấp quận (huyện), những học sinh xuất sắc nhất sẽ được tham gia kỳ thi cấp tỉnh v&', '<div class="pview">\r\n<div class="cview">\r\n<p align="JUSTIFY">Cuộc thi &ldquo;Giải to&aacute;n qua internet &ndash; violympic&rdquo; l&agrave; cuộc thi được tổ chức tr&ecirc;n website: http//:www.violympic.vn d&agrave;nh cho học sinh Phổ th&ocirc;ng tr&ecirc;n cả nước do Bộ GD&amp;ĐT phối hợp với Đại học FPT tổ chức. Sau 09 v&ograve;ng thi tự do, v&ograve;ng thi cấp trường, cấp quận (huyện), những học sinh xuất sắc nhất sẽ được tham gia kỳ thi cấp tỉnh v&agrave; cấp quốc gia.</p>\r\n<p align="JUSTIFY">Năm học 2012 - 2013 vừa qua l&agrave; năm thứ 5 Bộ GDĐT phối hợp với Tập đo&agrave;n FPT tiếp tục triển khai cuộc thi giải to&aacute;n qua Internet d&agrave;nh cho học sinh phổ th&ocirc;ng. Năm học n&agrave;y đ&atilde; thu h&uacute;t 974. 964 học sinh dự thi bằng m&atilde; thi cấp trường. Học sinh của 56/63 tỉnh/th&agrave;nh tr&ecirc;n cả nước tham gia thi cấp Tỉnh. Kết quả c&oacute; 1.152 c&aacute; nh&acirc;n đạt giải; Gồm: 226 Huy chương v&agrave;ng, 327 Huy chương bạc, 388 Huy chương đồng v&agrave; 211 giải Khuyến kh&iacute;ch. C&oacute; 2 học sinh lớp 9 đạt điểm tối đa 300/300 v&agrave; 1 học sinh lớp 5 đạt 300/300.</p>\r\n<p align="JUSTIFY">Để tuy&ecirc;n truyền cho cuộc thi, ng&agrave;y 27/09/2013, Ban Tổ Chức ph&aacute;t động &ldquo;Giải to&aacute;n qua internet &ndash; violympic&rdquo; tại trường PHTH FPT - Huyện Thạch Thất &ndash; Th&agrave;nh Phố H&agrave; Nội. Về dự lễ Ph&aacute;t động cuộc thi c&oacute; Thứ trưởng Bộ Gi&aacute;o dục v&agrave; đạo tạo Nguyễn Vinh Hiển, Vụ trưởng Vụ gi&aacute;o dục Trung học, Tiểu học v&agrave; c&aacute;c Sở Gi&aacute;o dục v&agrave; Đ&agrave;o tạo ph&iacute;a Bắc.</p>\r\n<p align="JUSTIFY">Năm học 2013 &ndash; 2014 n&agrave;y, Ban Tổ Chức đưa ra chương tr&igrave;nh To&aacute;n tiếng Anh với 10 v&ograve;ng thi. Nội dung đề thi To&aacute;n Tiếng Anh được bi&ecirc;n soạn theo gi&aacute;o tr&igrave;nh nước ngo&agrave;i nhưng ph&ugrave; hợp với lượng kiến thức của học sinh tiểu học v&agrave; trung học Việt Nam. Giống như h&igrave;nh thức thi của Violympic trước đ&acirc;y, c&aacute;c b&agrave;i thi To&aacute;n tiếng Anh cũng được thể hiện qua 8 game flash đầy s&aacute;ng tạo v&agrave; b&agrave;i thi website kịch t&iacute;nh. C&aacute;c dạng b&agrave;i thi với nội dung phong ph&uacute; gi&uacute;p học sinh &ocirc;n luyện được kiến thức tr&ecirc;n lớp v&agrave; tạo hứng th&uacute; khi giải to&aacute;n.</p>\r\n<p align="JUSTIFY"><a href="http://www.moet.gov.vn/?page=1.1&amp;type=news&amp;opt=brpage&amp;type=news&amp;view=5333" target="_blank">Xem th&ecirc;m</a></p>\r\n<p align="JUSTIFY">&nbsp;</p>\r\n</div>\r\n</div>', 'http://image.violympic.vn/Images/Anhupcanthiet/1077243_532008456854429_1692178667_o.jpg', 3, 1, '2014/08/17'),
(100, 'Tình hình biển Đông 17/8: Học giả Trung Quốc bác bỏ quan điểm sai trái của chính quyền', '<p><strong>Học giả L&ecirc; Oa Đằng, chủ trang Blog c&oacute; tới hơn 4.039.130 người đọc tr&ecirc;n diễn đ&agrave;n mạng Sina.com h&agrave;ng đầu TQ, đăng b&agrave;i &ldquo;Nam Hải từ xưa đến nay l&agrave; của Trung Quốc ư?&rdquo;</strong></p>', '<p>Đầu th&aacute;ng 8 vừa qua, Trung Quốc lại cho ph&aacute;t h&agrave;nh cuốn s&aacute;ch &ldquo;B&agrave;n về lịch sử, địa vị v&agrave; t&aacute;c dụng của<strong> Đường 9 đoạn</strong>&rdquo; do một số học giả, quan chức viết. Cao Ch&iacute; Quốc, Viện trưởng nghi&ecirc;n cứu chiến lược ph&aacute;t triển Cục Hải dương Trung Quốc &ndash; chủ b&uacute;t cuốn s&aacute;ch n&agrave;y r&ecirc;u rao sản phẩm của &ocirc;ng ta v&agrave; 2 đồng nghiệp &ldquo;cung cấp chỗ dựa ph&aacute;p l&yacute; quan trọng để Trung Quốc bảo vệ quyền lợi biển ở Nam Hải (tức biển Đ&ocirc;ng)&rdquo; (!?).</p>\r\n<p>Tuy nhi&ecirc;n, chỉ cần đọc qua những lời giới thiệu, người ta thấy ngay n&oacute; chả c&oacute; g&igrave; mới mẻ hơn những điều m&agrave; vi&ecirc;n tướng Vương Qu&aacute;n Trung, Ph&oacute; Tổng tham mưu trưởng qu&acirc;n đội Trung Quốc đ&atilde; đưa ra tại Diễn đ&agrave;n Shangri La hồi th&aacute;ng 6/2014 v&agrave; đ&atilde; bị dư luận quốc tế kịch liệt ph&ecirc; ph&aacute;n v&agrave; b&aacute;c bỏ&hellip;</p>\r\n<p>Những luận điệu xằng bậy của Vương Qu&aacute;n Trung: &ldquo;Trung Quốc c&oacute; chủ quyền, quyền chủ quyền, chủ trương quyền quản hạt ở Nam Hải được h&igrave;nh th&agrave;nh trong qu&aacute; tr&igrave;nh ph&aacute;t triển l&acirc;u d&agrave;i; từ triều H&aacute;n hơn 2000 năm trước đ&atilde; bắt đầu ph&aacute;t hiện v&agrave; từng bước ho&agrave;n thiện việc quản l&yacute; đối với Nam Hải, đặc biệt l&agrave; c&aacute;c đảo b&atilde;i Nam Sa (Trường Sa) v&agrave; v&ugrave;ng biển li&ecirc;n quan&rdquo;, đ&atilde; bị ch&iacute;nh c&aacute;c học giả Trung Quốc hiểu biết v&agrave; t&ocirc;n trọng lẽ phải nghi&ecirc;m khắc l&ecirc;n &aacute;n, b&aacute;c bỏ.</p>\r\n<p><strong>Người Chi&ecirc;m Th&agrave;nh ph&aacute;t hiện ra Ho&agrave;ng Sa đầu ti&ecirc;n</strong></p>\r\n<p>Học giả L&ecirc; Oa Đằng ph&acirc;n t&iacute;ch, Vương Qu&aacute;n Trung đ&atilde; kh&ocirc;n kh&eacute;o trộn lẫn hai kh&aacute;i niệm &ldquo;ph&aacute;t hiện&rdquo; v&agrave; &ldquo;quản l&yacute;&rdquo; để cố t&igrave;nh dẫn dắt khiến người ta lầm tưởng Trung Quốc &ldquo;từ xưa đến nay đ&atilde; c&oacute; chủ quyền&rdquo; đối với Trường Sa. &Ocirc;ng cho rằng &ldquo;ph&aacute;t hiện&rdquo; v&agrave; &ldquo;quản l&yacute;&rdquo; l&agrave; hai kh&aacute;i niệm kh&aacute;c hẳn nhau về mặt &yacute; nghĩa ph&aacute;p luật; &ldquo;ph&aacute;t hiện&rdquo; kh&ocirc;ng mang lại chủ quyền, chỉ c&oacute; &ldquo;quản l&yacute;&rdquo; mới c&oacute;; c&agrave;ng kh&ocirc;ng thể gắn 3 vấn đề &ldquo;Nam Hải&rdquo; (Biển Đ&ocirc;ng), &ldquo;Nam Sa&rdquo; (Trường Sa) v&agrave; &ldquo;v&ugrave;ng biển li&ecirc;n quan&rdquo; l&agrave;m một.</p>\r\n<p>Học giả L&ecirc; Oa Đằng viết: Trung Quốc c&oacute; thực sự c&oacute; chủ quyền &ldquo;kh&ocirc;ng thể tranh c&atilde;i&rdquo; đối với Nam Hải hay kh&ocirc;ng? H&atilde;y để sự thật l&ecirc;n tiếng. Trung Quốc thực tế đ&atilde; &ldquo;ph&aacute;t hiện&rdquo; Nam Hải từ triều H&aacute;n; nhưng Nam Hải kh&ocirc;ng phải do người Trung Quốc ph&aacute;t hiện sớm nhất, m&atilde;i đến đời Tần Trung Quốc mới đến Nam Hải; c&ograve;n trước đ&oacute; từ rất l&acirc;u, tộc người B&aacute;ch Việt sinh sống ở v&ugrave;ng Quảng Đ&ocirc;ng v&agrave; b&aacute;n đảo Đ&ocirc;ng Dương đ&atilde; sinh sống ven Nam Hải.</p>\r\n<p>Nếu n&oacute;i ai &ldquo;ph&aacute;t hiện&rdquo; ra Nam Hải th&igrave; người Việt Nam c&oacute; tư c&aacute;ch hơn ch&uacute;ng ta, v&igrave; họ l&agrave; hậu duệ trực hệ của người B&aacute;ch Việt, v&agrave; cũng l&agrave; quốc gia duy nhất được x&acirc;y dựng bởi chủ thể l&agrave; c&aacute;c hậu duệ của tộc người B&aacute;ch Việt.</p>\r\n<p>Học giả L&ecirc; Oa Đằng khẳng định: C&aacute;c s&aacute;ch, sử liệu của Trung Quốc từ đời Tống trở về trước đều &ldquo;rất kh&oacute; x&aacute;c định người Trung Quốc đ&atilde; biết đến T&acirc;y Sa (Ho&agrave;ng Sa) hay chưa, chứ đừng n&oacute;i tới Nam Sa (Trường Sa).&nbsp;V&iacute; dụ s&aacute;ch &ldquo;Dị vật ch&iacute;&rdquo; đời Đ&ocirc;ng H&aacute;n m&agrave; Trung Quốc hay nhắc tới ni&ecirc;n đại c&oacute; &yacute; kiến cho rằng thực ra n&oacute; được viết v&agrave;o đời nh&agrave; Ng&ocirc; sau n&agrave;y, viết: &ldquo;Trướng Hải Kỳ Đầu, nước n&ocirc;ng c&oacute; nhiều đ&aacute; c&oacute; từ t&iacute;nh, từ thạch&rdquo;.</p>\r\n<p>Ch&iacute;nh phủ Trung Quốc cho rằng: Trướng Hải ch&iacute;nh l&agrave; Nam Hải, Kỳ Đầu ch&iacute;nh l&agrave; c&aacute;c quần đảo Ho&agrave;ng Sa v&agrave; Trường Sa. Ph&aacute;n đo&aacute;n đ&oacute; đ&atilde; phạm sai lầm tối thiểu về mặt l&ocirc;-gic &ldquo;lấy c&aacute; thể thay cho tổng thể&rdquo;. Mấy chữ đ&oacute; kh&ocirc;ng thể chứng minh được những địa danh đ&oacute; ở nơi n&agrave;o, cũng chẳng c&oacute; b&agrave;i viết n&agrave;o của Trung Quốc chỉ ra rằng ch&uacute;ng ở đ&acirc;u.</p>\r\n<p>Sự thật l&agrave;, những ghi ch&eacute;p đầu ti&ecirc;n gi&uacute;p x&aacute;c định T&acirc;y Sa (Ho&agrave;ng Sa) lại do người Chi&ecirc;m Th&agrave;nh cung cấp. Theo ghi ch&eacute;p trong s&aacute;ch &ldquo;Tống hội yếu&rdquo;, năm 1018, sứ giả Champa đi sứ Trung Quốc c&oacute; n&oacute;i (dịch nghĩa): &ldquo;Ch&uacute;ng t&ocirc;i đến Quảng Ch&acirc;u, thuyền bị gi&oacute; thổi tr&ocirc;i đến Thạch Đường, đi m&atilde;i mới đến được đ&acirc;y. Thạch Đường tr&ecirc;n biển c&aacute;ch Nhai Ch&acirc;u 700 dặm, ch&igrave;m dưới nước 8-9 thước&rdquo;.</p>\r\n<p>Qua mi&ecirc;u tả cho thấy, Thạch Đường ch&iacute;nh l&agrave; quần đảo Ho&agrave;ng Sa. Do đoạn văn tự n&agrave;y do người Trung Quốc ghi lại, n&ecirc;n c&aacute;c chuy&ecirc;n gia Trung Quốc liền cho rằng đ&oacute; l&agrave; một chứng cứ lịch sử cho thấy Ho&agrave;ng Sa l&agrave; của Trung Quốc, nhưng họ cố t&igrave;nh kh&ocirc;ng chịu hiểu l&agrave;: ph&iacute;a Trung Quốc chỉ l&agrave; người ghi ch&eacute;p lại, c&ograve;n người Chi&ecirc;m Th&agrave;nh mới l&agrave; b&ecirc;n cung cấp th&ocirc;ng tin, sự việc được ghi lại ch&iacute;nh l&agrave;: người Chi&ecirc;m Th&agrave;nh đ&atilde; đến quần đảo Ho&agrave;ng Sa.</p>\r\n<p>Ch&iacute;nh v&igrave; vậy, nếu lấy ghi ch&eacute;p trong sử liệu l&agrave;m chuẩn, người Chi&ecirc;m Th&agrave;nh ph&aacute;t hiện ra Ho&agrave;ng Sa sớm nhất, Vương quốc Champa l&agrave; một bộ phận của Việt Nam ng&agrave;y nay. X&eacute;t về quan hệ kế thừa chủ quyền, ch&iacute;nh người Việt Nam chứ kh&ocirc;ng phải Trung Quốc đ&atilde; ph&aacute;t hiện ra quần đảo Ho&agrave;ng Sa đầu ti&ecirc;n.</p>\r\n<p><strong>Trung Quốc biết tới Trường Sa c&ograve;n muộn hơn</strong></p>\r\n<p>L&ecirc; Oa Đằng khẳng định, theo sử s&aacute;ch của ch&iacute;nh Trung Quốc, họ biết đến Trường Sa c&ograve;n muộn hơn nhiều. &Ocirc;ng dẫn lại những ghi ch&eacute;p trong Quyển 197, s&aacute;ch &ldquo;Tống hội yếu&rdquo;, c&oacute; ch&eacute;p lại sự kiện ng&agrave;y 20 th&aacute;ng 7 năm Gia Định thứ 9 (1209), c&oacute; sứ giả nước Chanlifu (Chanthaburi ở Đ&ocirc;ng Nam Th&aacute;i Lan ng&agrave;y nay) đến thăm.</p>\r\n<p>&Ocirc;ng ta kể lại với c&aacute;c quan chức nh&agrave; Tống việc từ nước m&igrave;nh sang tới đ&acirc;y phải qua Chi&ecirc;m Th&agrave;nh, sắp đến Giao Chỉ th&igrave; bị gi&oacute; lớn thổi dạt đến &ldquo;Vạn L&yacute; Thạch Đường&rdquo; nước chỗ n&ocirc;ng chỗ s&acirc;u, nhiều đảo b&atilde;i, thuyền lật chết đuối mười mấy người; may c&oacute; gi&oacute; Đ&ocirc;ng Nam vượt qua được Giao Chỉ, đi 4-5 ng&agrave;y nữa mới đến được Kh&acirc;m Ch&acirc;u, Li&ecirc;m Ch&acirc;u. Đoạn văn n&agrave;y chỉ ghi lại sự việc, chẳng n&oacute;i ai ph&aacute;t hiện ra &ldquo;Vạn L&yacute; Thạch Đường&rdquo; theo phỏng đo&aacute;n l&agrave; quần đảo Trường Sa.</p>\r\n<p>L&ecirc; Oa Đằng cho rằng, Trung Quốc lu&ocirc;n nhấn mạnh bắt đầu từ đời nh&agrave; Tống đ&atilde; quy Ho&agrave;ng Sa v&agrave; Trường Sa v&agrave;o Vạn Ch&acirc;u. Chứng cứ l&agrave; c&aacute;c địa phương ch&iacute; c&oacute; ghi &ldquo;Vạn Ch&acirc;u c&oacute; biển Trường Sa v&agrave; biển Thạch Đường&rdquo;, nhưng chỉ cần đọc ho&agrave;n chỉnh cả c&acirc;u th&igrave; thấy ngay c&aacute;ch n&oacute;i đ&oacute; kh&ocirc;ng đ&aacute;ng tin cậy.</p>\r\n<p>&ldquo;Thực ra, hoạt động của c&aacute;c quốc gia kh&aacute;c ven Nam Hải c&oacute; lịch sử rất l&acirc;u đời. Người Chi&ecirc;m Th&agrave;nh, nay thuộc Việt Nam biết đến T&acirc;y Sa (Ho&agrave;ng Sa) v&agrave; Nam Sa (Trường Sa) rất sớm, thậm ch&iacute; c&oacute; thể l&agrave; những người ph&aacute;t hiện ra ch&uacute;ng. Việt Nam c&oacute; chứng cứ đ&atilde; quản trị T&acirc;y Sa (Ho&agrave;ng Sa) từ đầu thế kỷ 18, thậm ch&iacute; đ&atilde; được quốc tế thừa nhận. Tr&aacute;i lại, Trung Quốc chả c&oacute; chứng cứ g&igrave; về mặt n&agrave;y&rdquo;.</p>\r\n<p>(Theo http://nguyentandung.org)</p>', 'http://static9.nguyentandung.org/files/2014/08/hoc-gia-trung-quoc-bac-bo-quan-diem-ve-bien-dong.jpg', 4, 1, '2014/08/17');
INSERT INTO `xh_tintuc` (`id`, `tieude`, `tomtat`, `chitiet`, `hinhanh`, `linhvuc`, `trangthai`, `ngaydang`) VALUES
(101, 'Kế hoạch “đóng băng” nguội lạnh, Trung Quốc rảnh tay ở Biển Đông', '<p><strong>Đề xuất đ&oacute;ng băng c&aacute;c hoạt động khi&ecirc;u kh&iacute;ch do Mỹ v&agrave; Philippines đưa ra chỉ được c&aacute;c nước ASEAN &ldquo;ghi nhận&rdquo;, điều n&agrave;y c&oacute; nguy cơ tạo cho Trung Quốc th&ecirc;m thời gian tiến h&agrave;nh những bước đi l&agrave;m thay đổi hiện trạng Biển Đ&ocirc;ng.</strong></p>', '<p>&ldquo;Hiệp hội c&aacute;c quốc gia Đ&ocirc;ng Nam &Aacute; ASEAN về cơ bản nhất tr&iacute; nhiều vấn đề li&ecirc;n quan đến c&aacute;c chủ trương lớn của hiệp hội, nhưng trong vấn đề Biển Đ&ocirc;ng th&igrave; r&otilde; r&agrave;ng ASEAN bị chia rẽ&rdquo;, Tiến sĩ Nguyễn Ngọc Trường, Chủ tịch Trung t&acirc;m Nghi&ecirc;n cứu chiến lược v&agrave; Ph&aacute;t triển quan hệ quốc tế, trao đổi với PV.</p>\r\n<p>H&ocirc;m 10/8, sau c&aacute;c hội nghị của ngoại trưởng ASEAN với nhau v&agrave; với c&aacute;c đối t&aacute;c lớn như Mỹ, Trung Quốc, Nhật Bản (ARF), ASEAN đ&atilde; ra bản Tuy&ecirc;n bố chung, trong đ&oacute; nhấn mạnh sự quan ngại s&acirc;u sắc về những diễn biến gần đ&acirc;y l&agrave;m gia tăng căng thẳng ở Biển Đ&ocirc;ng. C&aacute;c nước Đ&ocirc;ng Nam &Aacute; cũng khẳng định tầm quan trọng của việc duy tr&igrave; h&ograve;a b&igrave;nh, ổn định, an ninh cũng như tự do h&agrave;ng hải v&agrave; h&agrave;ng kh&ocirc;ng ở khu vực n&agrave;y.</p>\r\n<p>Tuy nhi&ecirc;n, đối với kế hoạch ba bước trong đ&oacute; bước đầu ti&ecirc;n l&agrave; đ&oacute;ng băng c&aacute;c hoạt động g&acirc;y căng thẳng v&agrave; thay đổi nguy&ecirc;n trạng ở Biển Đ&ocirc;ng m&agrave; Philippines đưa ra, tuy&ecirc;n bố của ASEAN chỉ dừng ở mức &ldquo;ghi nhận&rdquo;.</p>\r\n<p>Ph&aacute;i đo&agrave;n Mỹ cũng đưa ra một đề xuất c&oacute; nội dung tương tự &yacute; kiến của Philippines.</p>\r\n<p>Ngoại trưởng Trung Quốc Vương Nghị khi trao đổi với đại diện của Mỹ v&agrave; Philippines đều thẳng thừng b&aacute;c bỏ kế hoạch n&oacute;i tr&ecirc;n, khẳng định Trung Quốc sẽ ki&ecirc;n quyết bảo vệ chủ quyền v&agrave; c&aacute;c lợi &iacute;ch tr&ecirc;n biển. &Ocirc;ng Vương c&ograve;n y&ecirc;u cầu Washington đứng ngo&agrave;i c&aacute;c tranh chấp ở khu vực.</p>\r\n<p>Theo c&aacute;c nh&agrave; ph&acirc;n t&iacute;ch, th&aacute;i độ rất cứng rắn của Trung Quốc ở hội nghị n&agrave;y cho thấy họ đang n&oacute;ng l&ograve;ng v&agrave; nhất quyết theo đuổi y&ecirc;u s&aacute;ch tr&ecirc;n biển.</p>\r\n<p>&ldquo;Trung Quốc đang n&ocirc;n n&oacute;ng hiện thực h&oacute;a tham vọng nắm trọn Biển Đ&ocirc;ng, tr&igrave; ho&atilde;n bất cứ s&aacute;ng kiến n&agrave;o, kiếm th&ecirc;m thời gian để đẩy mạnh kiểm so&aacute;t tr&ecirc;n thực tế v&agrave; khai th&aacute;c tr&ecirc;n thực địa&rdquo;, &ocirc;ng Trần Ngọc Trường n&oacute;i.</p>\r\n<p>Trung Quốc từng g&acirc;y sức &eacute;p v&agrave; l&ocirc;i k&eacute;o một số nước trong ASEAN nhằm l&agrave;m suy yếu lập trường của khối về Biển Đ&ocirc;ng. Hồi năm 2012, khi Campuchia giữ cương vị Chủ tịch ASEAN, lần đầu ti&ecirc;n trong lịch sử của hiệp hội, hội nghị c&aacute;c ngoại trưởng lần thứ 45 đ&atilde; kh&ocirc;ng thể ra tuy&ecirc;n bố chung do bất đồng về vấn đề Biển Đ&ocirc;ng.</p>\r\n<p>&ldquo;Họ sẽ tiếp tục l&ocirc;i k&eacute;o v&agrave; chia rẽ&rdquo;, &ocirc;ng Trường nhận định.</p>\r\n<p>C&ugrave;ng quan điểm n&agrave;y, Tiến sĩ Dennis McCornac, Đại học Loyola Maryland, Mỹ, một chuy&ecirc;n gia nghi&ecirc;n cứu về Trung Quốc, cho rằng c&aacute;c nước ASEAN chưa đi đến nhất tr&iacute; về c&aacute;ch thức phản ứng trước những h&agrave;nh động g&acirc;y hấn của Trung Quốc ở Biển Đ&ocirc;ng.</p>\r\n<p>&ldquo;Tuy&ecirc;n bố chung của c&aacute;c ngoại trưởng ASEAN mang đặc trưng cuộc họp của một nh&oacute;m nước, n&ecirc;u l&ecirc;n cam kết về h&ograve;a b&igrave;nh v&agrave; ổn định, nhưng lại kh&ocirc;ng đưa ra c&aacute;ch l&agrave;m sao đạt được những mục ti&ecirc;u đ&oacute;&rdquo;, McCornac đ&aacute;nh gi&aacute;. &ldquo;Mặc d&ugrave; c&aacute;c nước cho rằng tự do h&agrave;ng hải l&agrave; mối quan t&acirc;m h&agrave;ng đầu, mối quan hệ với Trung Quốc lại c&oacute; tầm quan trọng cao, đặc biệt l&agrave; về kinh tế&rdquo;.</p>\r\n<p>&ldquo;V&igrave; thế c&aacute;c nước kh&ocirc;ng nước n&agrave;o sẵn s&agrave;ng đương đầu với Trung Quốc một c&aacute;ch ki&ecirc;n quyết&rdquo;, &ocirc;ng McCornac nhận x&eacute;t trong email gửi VnExpress.</p>\r\n<p>Tr&ecirc;n&nbsp;The Epoch Times, t&aacute;c giả Bertil Lintner ph&acirc;n t&iacute;ch rằng trong ASEAN, Philippines v&agrave; Việt Nam nhiệt t&igrave;nh với đề xuất &ldquo;đ&oacute;ng băng&rdquo;. Tuy nhi&ecirc;n, Malaysia v&agrave; Brunei, hai nước c&ugrave;ng c&oacute; y&ecirc;u s&aacute;ch ở Biển Đ&ocirc;ng, c&oacute; vẻ miễn cưỡng trong đối kh&aacute;ng với Trung Quốc.&nbsp;Th&aacute;i Lan, Campuchia, L&agrave;o, c&oacute; mối quan hệ gần gũi hơn với Bắc Kinh, Indonesia c&oacute; quan điểm trung lập, Singapore c&oacute; c&aacute;ch nh&igrave;n ri&ecirc;ng v&agrave; Myanmar đang c&oacute; mối quan hệ kh&aacute; nhạy cảm với Trung Quốc.</p>\r\n<p>&Ocirc;ng&nbsp;Lintner&nbsp;cho rằng trước khi đến dự diễn đ&agrave;n ARF với c&aacute;c nước ASEAN, Ngoại trưởng Mỹ John Kerry tr&ocirc;ng đợi nhiều hơn ở hiệp hội n&agrave;y. Tuy nhi&ecirc;n &ocirc;ng Kerry cũng kh&ocirc;ng n&ecirc;n ngạc nhi&ecirc;n khi đề xuất ngừng g&acirc;y căng thẳng của Mỹ bị phớt lờ, bởi ASEAN c&oacute; hai nguy&ecirc;n tắc l&agrave; đồng thuận v&agrave; kh&ocirc;ng can thiệp v&agrave;o c&aacute;c c&ocirc;ng việc nội bộ của c&aacute;c nước th&agrave;nh vi&ecirc;n.</p>\r\n<p>Lintner cảnh b&aacute;o rằng kết quả n&agrave;y của hội nghị Đ&ocirc;ng Nam &Aacute; sẽ khiến Trung Quốc &ldquo;rảnh tay&rdquo; hơn trong việc xử l&yacute; tranh chấp Biển Đ&ocirc;ng với từng nước li&ecirc;n quan.</p>\r\n<p>&ldquo;Kế hoạch của Trung Quốc l&agrave; cản trở về mặt ngoại giao v&agrave; khiến ASEAN mắc kẹt trong những cuộc thảo luận v&ocirc; tận&rdquo;, Gi&aacute;o sư Carl Thayer, chuy&ecirc;n gia h&agrave;ng đầu về Biển Đ&ocirc;ng, nhận định tr&ecirc;n Wall Street Journal.</p>\r\n<p>Thời gian tới, theo &ocirc;ng Trường, Bắc Kinh sẽ tiếp tục việc x&acirc;y dựng ở Trường Sa v&agrave; Ho&agrave;ng Sa, thậm ch&iacute; kh&ocirc;ng loại trừ khả năng thiết lập v&ugrave;ng Nhận dạng ph&ograve;ng kh&ocirc;ng (ADIZ) ở Biển Đ&ocirc;ng. Trung Quốc sẽ lấy đường băng ở đảo Gạc Ma l&agrave;m trung t&acirc;m nối với c&aacute;c điểm kh&aacute;c ở khu vực, đ&oacute; l&agrave; bước leo thang nghi&ecirc;m trọng v&agrave; mục ti&ecirc;u l&agrave; thiết lập trật tự của Bắc Kinh ở Biển Đ&ocirc;ng.&nbsp;Hơn thế nữa, nhiều nguồn tin cho biết Trung Quốc khả năng sẽ triển khai th&ecirc;m c&aacute;c gi&agrave;n khoan dầu nhằm khai th&aacute;c ở Biển Đ&ocirc;ng.</p>\r\n<p>Tuy nhi&ecirc;n Trung Quốc cũng chưa thể vội mừng. Chưa đầy một tuần sau khi rời Myanmar,&nbsp;h&ocirc;m qua tại Hawaii,&nbsp;Ngoại trưởng Mỹ Kerry khi n&oacute;i về tầm nh&igrave;n của Mỹ tại khu vực ch&acirc;u &Aacute; &ndash; Th&aacute;i B&igrave;nh Dương tiếp tục khẳng&nbsp;định Mỹ phản đối những h&agrave;nh động&nbsp;hăm dọa, &eacute;p buộc v&agrave; sử dụng vũ lực để đạt được y&ecirc;u s&aacute;ch ở Biển Đ&ocirc;ng. Một quan chức ngoại giao của Mỹ tiết lộ rằng Washington sẽ &ldquo;gi&aacute;m s&aacute;t&rdquo; c&aacute;c h&agrave;nh động nhằm l&agrave;m dịu căng thẳng Biển Đ&ocirc;ng m&agrave; c&aacute;c b&ecirc;n đ&atilde; cam kết. C&aacute;c ph&aacute;t biểu cho thấy Mỹ ki&ecirc;n quyết với chiến lược duy tr&igrave; an ninh biển ở khu vực n&agrave;y.</p>\r\n<p>&ldquo;Với tư c&aacute;ch một nước lớn theo đuổi tự do h&agrave;ng hải, t&ocirc;i tin rằng Mỹ sẽ kh&ocirc;ng cho ph&eacute;p bất kỳ một nước n&agrave;o độc chiếm một v&ugrave;ng biển quốc tế&rdquo;, &ocirc;ng Nguyễn Ngọc Trường ph&acirc;n t&iacute;ch. &ldquo;Washington sẽ kh&ocirc;ng để Trung Quốc dắt con tr&acirc;u qua r&agrave;o&rdquo;.</p>\r\n<p>(Theo VnExpress)</p>', 'http://static9.nguyentandung.org/files/2014/08/taysa-8661-1407923088.jpg', 4, 1, '2014/08/17');

-- --------------------------------------------------------

--
-- Table structure for table `xh_tintuc_list`
--

CREATE TABLE IF NOT EXISTS `xh_tintuc_list` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `loaitin` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `xh_tintuc_list`
--

INSERT INTO `xh_tintuc_list` (`id`, `loaitin`) VALUES
(1, 'Giới thiệu'),
(2, 'Thông báo'),
(3, 'Tin giáo dục'),
(4, 'Tin tức tổng hợp');

-- --------------------------------------------------------

--
-- Table structure for table `xh_tonghopkq`
--

CREATE TABLE IF NOT EXISTS `xh_tonghopkq` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idhs` int(100) NOT NULL,
  `made` int(100) NOT NULL,
  `socau` int(100) NOT NULL,
  `socaudung` int(100) NOT NULL,
  `tongdiem` int(100) NOT NULL,
  `tgbatdau` datetime NOT NULL,
  `tgketthuc` int(200) NOT NULL,
  `tgnopbai` datetime NOT NULL,
  `thoigian` time NOT NULL,
  `kqua` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `xephang` int(50) NOT NULL,
  `luutamgiobatdau` int(200) NOT NULL,
  `tong_tgianlambai` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `xh_tonghopkq`
--

INSERT INTO `xh_tonghopkq` (`id`, `idhs`, `made`, `socau`, `socaudung`, `tongdiem`, `tgbatdau`, `tgketthuc`, `tgnopbai`, `thoigian`, `kqua`, `xephang`, `luutamgiobatdau`, `tong_tgianlambai`) VALUES
(31, 3, 5, 0, 0, 0, '2014-08-24 22:32:37', 1408903357, '0000-00-00 00:00:00', '00:00:00', '', 0, 1408894357, 0),
(32, 39, 5, 16, 0, 0, '2014-12-13 21:25:21', 1418489721, '2014-12-13 21:25:38', '00:00:17', 'Không đạt', 0, 1418480721, 17);

-- --------------------------------------------------------

--
-- Table structure for table `xh_tonghopkq_tl`
--

CREATE TABLE IF NOT EXISTS `xh_tonghopkq_tl` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idhs` int(100) NOT NULL,
  `made` int(100) NOT NULL,
  `socau` int(100) NOT NULL,
  `socaudung` int(100) NOT NULL,
  `tongdiem` int(100) NOT NULL,
  `tgbatdau` datetime NOT NULL,
  `tgketthuc` int(200) NOT NULL,
  `tgnopbai` datetime NOT NULL,
  `thoigian` time NOT NULL,
  `kqua` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `xephang` int(50) NOT NULL,
  `luutamgiobatdau` int(200) NOT NULL,
  `tong_tgianlambai` int(20) NOT NULL,
  `lanthi` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Dumping data for table `xh_tonghopkq_tl`
--

INSERT INTO `xh_tonghopkq_tl` (`id`, `idhs`, `made`, `socau`, `socaudung`, `tongdiem`, `tgbatdau`, `tgketthuc`, `tgnopbai`, `thoigian`, `kqua`, `xephang`, `luutamgiobatdau`, `tong_tgianlambai`, `lanthi`) VALUES
(35, 3, 5, 16, 2, 2, '2014-08-24 22:34:14', 1408999484, '2015-02-03 08:34:16', '00:02:20', 'Không đạt', 0, 1408990484, 140, 1),
(36, 3, 5, 16, 0, 0, '2014-08-27 14:42:42', 1409134652, '2015-02-03 08:20:13', '00:00:06', 'Không đạt', 0, 1409125652, 6, 2),
(37, 3, 5, 16, 0, 0, '2014-08-27 14:47:48', 1423037912, '2015-02-04 12:54:58', '00:01:17', 'Không đạt', 0, 1423028912, 77, 3),
(38, 3, 5, 0, 0, 0, '2015-02-04 12:47:46', 1423037866, '0000-00-00 00:00:00', '00:00:00', '', 0, 1423028866, 0, 4),
(39, 39, 5, 16, 0, 0, '2014-12-13 21:22:09', 1418491081, '2014-12-13 21:48:01', '00:12:46', 'Không đạt', 0, 1418482081, 766, 1),
(40, 39, 5, 0, 0, 0, '2014-12-13 21:47:59', 1418491079, '0000-00-00 00:00:00', '00:00:00', '', 0, 1418482079, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `xh_user`
--

CREATE TABLE IF NOT EXISTS `xh_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gioi` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ns` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sodt` int(20) NOT NULL,
  `level` int(2) NOT NULL,
  `phancap` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `xh_user`
--

INSERT INTO `xh_user` (`id`, `hoten`, `user`, `pass`, `mail`, `gioi`, `ns`, `sodt`, `level`, `phancap`, `image`, `date`) VALUES
(1, 'Lê Xuân Hồng', '@admin', '94dd7f152ed8dbd2cff98ffe1c854f1e', 'xhong5678@gmail.com', 'nam', '5/6/1978', 0, 1, 'administrator', '', '2014-07-15'),
(2, 'le xuan hong', 'xhong5678', '7b406a4211c6494da6712db549e8c2ab', 'abc@hjkh.com', 'nam', '12/3/1978', 0, 1, 'user', '77d4taj1178c0sg.jpg', '2014-07-22'),
(5, 'le xuan hong', 'xhong56789', '7b406a4211c6494da6712db549e8c2ab', 'abc@hjkh.com', 'nam', '12/3/1978', 0, 1, 'user', '77d4taj1178c0sg.jpg', '2014-07-22'),
(6, 'Lê Văn Công', 'cong', '827ccb0eea8a706c4c34a16891f84e7b', 'xhong5678@gmail.com', 'nam', '12/3/1978', 2147483647, 0, 'user', 'HINH HONG100.jpg', '2014-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `xh_ykien`
--

CREATE TABLE IF NOT EXISTS `xh_ykien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sodt` int(30) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `truong` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lop` varchar(10) NOT NULL,
  `noidung` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `xh_ykien`
--

INSERT INTO `xh_ykien` (`id`, `hoten`, `sodt`, `mail`, `truong`, `lop`, `noidung`) VALUES
(7, 'Lê Xuân Hồng', 2147483647, 'xhong5678@gmail.com', 'Nguyễn Văn Nghi', '12', '<p>nội dung &yacute; kiến</p>'),
(8, 'Lê Xuân Hồng 2', 2147483647, 'xhong5678@gmail.com', 'Nguyễn Văn Nghi', '12', '<p>thử nội dung <span class="AM">`root(n)(x)`</span></p>'),
(9, 'Lê Xuân Hồng322', 2147483647, 'xhong5678@gmail.com', 'Nguyễn Văn Nghi', '12', '<p>&yacute; kiến&nbsp;&nbsp;&nbsp;</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
