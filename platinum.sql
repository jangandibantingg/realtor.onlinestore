-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2015 at 07:33 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `platinum`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=43 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `kategori_seo`) VALUES
(2, 'STORE', 'store'),
(6, 'KONTEN', 'konten');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1222) NOT NULL,
  `email` varchar(122) NOT NULL,
  `telpon` varchar(122) NOT NULL,
  `komentar` varchar(122) NOT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `name`, `email`, `telpon`, `komentar`) VALUES
(13, 'travaweb', 'aangnaja77@gmail.com', '089634203745', 'saya mau beli satu'),
(14, 'aang', 'aangnaja77@gmail.com', '089634203745', 'saya mau beli satu dus');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(1222) NOT NULL,
  `password` varchar(122) NOT NULL,
  `alamat` varchar(122) NOT NULL,
  `deskripsi` varchar(122) NOT NULL,
  `username` varchar(122) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `email`, `password`, `alamat`, `deskripsi`, `username`) VALUES
(46, 'admin', 'admin', '', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE IF NOT EXISTS `posting` (
  `id_posting` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(122) NOT NULL,
  `judul` varchar(122) NOT NULL,
  `judul_seo` varchar(122) NOT NULL,
  `isi_posting` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `lihat` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(1222) NOT NULL,
  `alamat` varchar(122) NOT NULL,
  `luas` varchar(1222) NOT NULL,
  `harga` varchar(122) NOT NULL,
  `tahun` varchar(122) NOT NULL,
  PRIMARY KEY (`id_posting`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id_posting`, `email`, `judul`, `judul_seo`, `isi_posting`, `id_kategori`, `lihat`, `tanggal`, `gambar`, `alamat`, `luas`, `harga`, `tahun`) VALUES
(56, 'aangnaja77@gmail.com', 'k90', 'k90', '<div class="copy-paste-block">\r\n<div id="indesc" class="indesc">\r\n<p>The Abbey at Kemang adalah private residence yang dibangun di atas lahan seluas 8500 m2 dengan total 19 rumah yang di design mewah dan finishing touch berkualitas.</p>\r\n<p>Kavling 18 ini adalah rumah terbesar di Abbey dilengkapi dengan lift didalam unit memudahkan tenant untuk naik turun tanpa harus melalui tangga.</p>\r\n<p>Taman dan kolam renang yang lebih besar dari unit lain membuat kavling 18 paling nyaman untuk tinggal.</p>\r\nDibangun dengan konsep terbuka hijau dan lingkungan yang asri dilengkapi dengan kids playground, taman air, fithes center dan meeting room. Setiap rumah memiliki luas bangunan 400 m2 sampai 500 m2 terdiri dari 3 lantai dilengkapi dengan lemari dan peralatan dapur yang lengkap disetiap rumah juga tersedia&nbsp;kolam renang pribadi, garasi dan carport yang besar juga lay out yang dinamis membuat penghuni akan merasa nyaman tinggal di Abbey. Berlokasi di Bangka Kemang salah satu lokasi strategis di Jakarta yang dilengkapi dengan banyak hiburan, cafe, restaurant, boutique dan shopping mall. Akses yang mudah ke CBD area seperti SCBD dan TB Simatupang. Untuk melengkapi keamanan penghuni kami juga menyediakan Security yang berjaga 24 jam di area masuk.</div>\r\n<span><br /><br /></span></div>', 2, 5, '2015-12-06', '66g3.png', 'PR BLOK 1 No 7 (Nganjuk)', '7x7', '750000000', '2015'),
(57, 'aangnaja77@gmail.com', 'L01', 'l01', '<div class="copy-paste-block">\r\n<div id="indesc" class="indesc">\r\n<p>The Abbey at Kemang adalah private residence yang dibangun di atas lahan seluas 8500 m2 dengan total 19 rumah yang di design mewah dan finishing touch berkualitas.</p>\r\n<p>Kavling 18 ini adalah rumah terbesar di Abbey dilengkapi dengan lift didalam unit memudahkan tenant untuk naik turun tanpa harus melalui tangga.</p>\r\n<p>Taman dan kolam renang yang lebih besar dari unit lain membuat kavling 18 paling nyaman untuk tinggal.</p>\r\nDibangun dengan konsep terbuka hijau dan lingkungan yang asri dilengkapi dengan kids playground, taman air, fithes center dan meeting room. Setiap rumah memiliki luas bangunan 400 m2 sampai 500 m2 terdiri dari 3 lantai dilengkapi dengan lemari dan peralatan dapur yang lengkap disetiap rumah juga tersedia&nbsp;kolam renang pribadi, garasi dan carport yang besar juga lay out yang dinamis membuat penghuni akan merasa nyaman tinggal di Abbey. Berlokasi di Bangka Kemang salah satu lokasi strategis di Jakarta yang dilengkapi dengan banyak hiburan, cafe, restaurant, boutique dan shopping mall. Akses yang mudah ke CBD area seperti SCBD dan TB Simatupang. Untuk melengkapi keamanan penghuni kami juga menyediakan Security yang berjaga 24 jam di area masuk.</div>\r\n<span><br /><br /></span></div>', 2, 1, '2015-12-06', '33g6.png', 'PR BLOK 1 No 6 (Nganjuk)', '7x7', '650000000', '2016'),
(59, 'aangnaja77@gmail.com', 'k56', 'k56', '<div class="copy-paste-block">\r\n<div id="indesc" class="indesc">\r\n<p>The Abbey at Kemang adalah private residence yang dibangun di atas lahan seluas 8500 m2 dengan total 19 rumah yang di design mewah dan finishing touch berkualitas.</p>\r\n<p>Kavling 18 ini adalah rumah terbesar di Abbey dilengkapi dengan lift didalam unit memudahkan tenant untuk naik turun tanpa harus melalui tangga.</p>\r\n<p>Taman dan kolam renang yang lebih besar dari unit lain membuat kavling 18 paling nyaman untuk tinggal.</p>\r\nDibangun dengan konsep terbuka hijau dan lingkungan yang asri dilengkapi dengan kids playground, taman air, fithes center dan meeting room. Setiap rumah memiliki luas bangunan 400 m2 sampai 500 m2 terdiri dari 3 lantai dilengkapi dengan lemari dan peralatan dapur yang lengkap disetiap rumah juga tersedia&nbsp;kolam renang pribadi, garasi dan carport yang besar juga lay out yang dinamis membuat penghuni akan merasa nyaman tinggal di Abbey. Berlokasi di Bangka Kemang salah satu lokasi strategis di Jakarta yang dilengkapi dengan banyak hiburan, cafe, restaurant, boutique dan shopping mall. Akses yang mudah ke CBD area seperti SCBD dan TB Simatupang. Untuk melengkapi keamanan penghuni kami juga menyediakan Security yang berjaga 24 jam di area masuk.</div>\r\n<span><br /><br /></span></div>', 2, 2, '2015-12-06', '38g8.png', 'PR BLOK 1 No 3 (Nganjuk)', '7x7', '560000000', '2016'),
(60, 'aangnaja77@gmail.com', 'k89', 'k89', '<div class="copy-paste-block">\r\n<div id="indesc" class="indesc">\r\n<p>The Abbey at Kemang adalah private residence yang dibangun di atas lahan seluas 8500 m2 dengan total 19 rumah yang di design mewah dan finishing touch berkualitas.</p>\r\n<p>Kavling 18 ini adalah rumah terbesar di Abbey dilengkapi dengan lift didalam unit memudahkan tenant untuk naik turun tanpa harus melalui tangga.</p>\r\n<p>Taman dan kolam renang yang lebih besar dari unit lain membuat kavling 18 paling nyaman untuk tinggal.</p>\r\nDibangun dengan konsep terbuka hijau dan lingkungan yang asri dilengkapi dengan kids playground, taman air, fithes center dan meeting room. Setiap rumah memiliki luas bangunan 400 m2 sampai 500 m2 terdiri dari 3 lantai dilengkapi dengan lemari dan peralatan dapur yang lengkap disetiap rumah juga tersedia&nbsp;kolam renang pribadi, garasi dan carport yang besar juga lay out yang dinamis membuat penghuni akan merasa nyaman tinggal di Abbey. Berlokasi di Bangka Kemang salah satu lokasi strategis di Jakarta yang dilengkapi dengan banyak hiburan, cafe, restaurant, boutique dan shopping mall. Akses yang mudah ke CBD area seperti SCBD dan TB Simatupang. Untuk melengkapi keamanan penghuni kami juga menyediakan Security yang berjaga 24 jam di area masuk.</div>\r\n</div>', 2, 3, '2015-12-06', '11g1.png', 'PR BLOK 1 No 2 (Nganjuk)', '7x7', '250000000', '2016'),
(61, 'aangnaja77@gmail.com', 'k78', 'k78', '<div class="copy-paste-block">\r\n<div id="indesc" class="indesc">\r\n<blockquote>\r\n<p><span style="color: #000000; font-family: georgia,palatino; font-size: small;">The Abbey at Kemang adalah private residence yang dibangun di atas lahan seluas 8500 m2 dengan total 19 rumah yang di design mewah dan finishing touch berkualitas.</span></p>\r\n<p><span style="color: #000000; font-family: georgia,palatino; font-size: small;">Kavling 18 ini adalah rumah terbesar di Abbey dilengkapi dengan lift didalam unit memudahkan tenant untuk naik turun tanpa harus melalui tangga.</span></p>\r\n<p><span style="color: #000000; font-family: georgia,palatino; font-size: small;">Taman dan kolam renang yang lebih besar dari unit lain membuat kavling 18 paling nyaman untuk tinggal.</span></p>\r\n<span style="color: #000000; font-family: georgia,palatino; font-size: small;">Dibangun dengan konsep terbuka hijau dan lingkungan yang asri dilengkapi dengan kids playground, taman air, fithes center dan meeting room. Setiap rumah memiliki luas bangunan 400 m2 sampai 500 m2 terdiri dari 3 lantai dilengkapi dengan lemari dan peralatan dapur yang lengkap disetiap rumah juga tersedia&nbsp;kolam renang pribadi, garasi dan carport yang besar juga lay out yang dinamis membuat penghuni akan merasa nyaman tinggal di Abbey. Berlokasi di Bangka Kemang salah satu lokasi strategis di Jakarta yang dilengkapi dengan banyak hiburan, cafe, restaurant, boutique dan shopping mall. Akses yang mudah ke CBD area seperti SCBD dan TB Simatupang. Untuk melengkapi keamanan penghuni kami juga menyediakan Security yang berjaga 24 jam di area masuk.</span></blockquote>\r\n</div>\r\n</div>', 2, 0, '2015-12-06', '80g9.png', 'PR BLOK 1 No 1 (Nganjuk)', '7x7', '500000000', '2016'),
(62, 'aangnaja77@gmail.com', 'About Us', 'about-us', '<p>The Abbey at Kemang adalah private residence yang dibangun di atas lahan seluas 8500 m2 dengan total 19 rumah yang di design mewah dan finishing touch berkualitas.</p>\r\n<p>Kavling 18 ini adalah rumah terbesar di Abbey dilengkapi dengan lift didalam unit memudahkan tenant untuk naik turun tanpa harus melalui tangga.</p>\r\n<p>Taman dan kolam renang yang lebih besar dari unit lain membuat kavling 18 paling nyaman untuk tinggal.</p>\r\n<p><span>Dibangun dengan konsep terbuka hijau dan lingkungan yang asri dilengkapi dengan kids playground, taman air, fithes center dan meeting room. Setiap rumah memiliki luas bangunan 400 m2 sampai 500 m2 terdiri dari 3 lantai dilengkapi dengan lemari dan peralatan dapur yang lengkap disetiap rumah juga tersedia&nbsp;kolam renang pribadi, garasi dan carport yang besar juga lay out yang dinamis membuat penghuni akan merasa nyaman tinggal di Abbey. Berlokasi di Bangka Kemang salah satu lokasi strategis di Jakarta yang dilengkapi dengan banyak hiburan, cafe, restaurant, boutique dan shopping mall. Akses yang mudah ke CBD area seperti SCBD dan TB Simatupang. Untuk melengkapi keamanan penghuni kami juga menyediakan Security yang berjaga 24 jam di area masuk.</span></p>', 6, 0, '2015-12-07', 'logo.png', '', '', '', ''),
(63, 'aangnaja77@gmail.com', 'Services', 'services', '<p>The Abbey at Kemang adalah private residence yang dibangun di atas lahan seluas 8500 m2 dengan total 19 rumah yang di design mewah dan finishing touch berkualitas.</p>\r\n<p>Kavling 18 ini adalah rumah terbesar di Abbey dilengkapi dengan lift didalam unit memudahkan tenant untuk naik turun tanpa harus melalui tangga.</p>\r\n<p>Taman dan kolam renang yang lebih besar dari unit lain membuat kavling 18 paling nyaman untuk tinggal.</p>\r\n<p><span>Dibangun dengan konsep terbuka hijau dan lingkungan yang asri dilengkapi dengan kids playground, taman air, fithes center dan meeting room. Setiap rumah memiliki luas bangunan 400 m2 sampai 500 m2 terdiri dari 3 lantai dilengkapi dengan lemari dan peralatan dapur yang lengkap disetiap rumah juga tersedia&nbsp;kolam renang pribadi, garasi dan carport yang besar juga lay out yang dinamis membuat penghuni akan merasa nyaman tinggal di Abbey. Berlokasi di Bangka Kemang salah satu lokasi strategis di Jakarta yang dilengkapi dengan banyak hiburan, cafe, restaurant, boutique dan shopping mall. Akses yang mudah ke CBD area seperti SCBD dan TB Simatupang. Untuk melengkapi keamanan penghuni kami juga menyediakan Security yang berjaga 24 jam di area masuk.</span></p>', 6, 0, '2015-12-07', 'logo.png', '', '', '', ''),
(64, 'aangnaja77@gmail.com', 'Presentation', 'presentation', '<p>The Abbey at Kemang adalah private residence yang dibangun di atas lahan seluas 8500 m2 dengan total 19 rumah yang di design mewah dan finishing touch berkualitas.</p>\r\n<p>Kavling 18 ini adalah rumah terbesar di Abbey dilengkapi dengan lift didalam unit memudahkan tenant untuk naik turun tanpa harus melalui tangga.</p>\r\n<p>Taman dan kolam renang yang lebih besar dari unit lain membuat kavling 18 paling nyaman untuk tinggal.</p>\r\n<p><span>Dibangun dengan konsep terbuka hijau dan lingkungan yang asri dilengkapi dengan kids playground, taman air, fithes center dan meeting room. Setiap rumah memiliki luas bangunan 400 m2 sampai 500 m2 terdiri dari 3 lantai dilengkapi dengan lemari dan peralatan dapur yang lengkap disetiap rumah juga tersedia&nbsp;kolam renang pribadi, garasi dan carport yang besar juga lay out yang dinamis membuat penghuni akan merasa nyaman tinggal di Abbey. Berlokasi di Bangka Kemang salah satu lokasi strategis di Jakarta yang dilengkapi dengan banyak hiburan, cafe, restaurant, boutique dan shopping mall. Akses yang mudah ke CBD area seperti SCBD dan TB Simatupang. Untuk melengkapi keamanan penghuni kami juga menyediakan Security yang berjaga 24 jam di area masuk.</span></p>', 6, 0, '2015-12-07', 'logo.png', '', '', '', ''),
(65, 'aangnaja77@gmail.com', 'Client', 'client', '', 6, 0, '2015-12-07', 'logo.png', '', '', '', ''),
(66, 'aangnaja77@gmail.com', 'Commercial', 'commercial', '<p>The Abbey at Kemang adalah private residence yang dibangun di atas lahan seluas 8500 m2 dengan total 19 rumah yang di design mewah dan finishing touch berkualitas.</p>\r\n<p>Kavling 18 ini adalah rumah terbesar di Abbey dilengkapi dengan lift didalam unit memudahkan tenant untuk naik turun tanpa harus melalui tangga.</p>\r\n<p>Taman dan kolam renang yang lebih besar dari unit lain membuat kavling 18 paling nyaman untuk tinggal.</p>\r\n<p><span>Dibangun dengan konsep terbuka hijau dan lingkungan yang asri dilengkapi dengan kids playground, taman air, fithes center dan meeting room. Setiap rumah memiliki luas bangunan 400 m2 sampai 500 m2 terdiri dari 3 lantai dilengkapi dengan lemari dan peralatan dapur yang lengkap disetiap rumah juga tersedia&nbsp;kolam renang pribadi, garasi dan carport yang besar juga lay out yang dinamis membuat penghuni akan merasa nyaman tinggal di Abbey. Berlokasi di Bangka Kemang salah satu lokasi strategis di Jakarta yang dilengkapi dengan banyak hiburan, cafe, restaurant, boutique dan shopping mall. Akses yang mudah ke CBD area seperti SCBD dan TB Simatupang. Untuk melengkapi keamanan penghuni kami juga menyediakan Security yang berjaga 24 jam di area masuk.</span></p>', 6, 0, '2015-12-07', 'logo.png', '', '', '', ''),
(67, 'aangnaja77@gmail.com', 'Residential', 'residential', '', 6, 0, '2015-12-07', 'logo.png', '', '', '', ''),
(68, 'aangnaja77@gmail.com', 'Presentation', 'presentation', '<p>The Abbey at Kemang adalah private residence yang dibangun di atas lahan seluas 8500 m2 dengan total 19 rumah yang di design mewah dan finishing touch berkualitas.</p>\r\n<p>Kavling 18 ini adalah rumah terbesar di Abbey dilengkapi dengan lift didalam unit memudahkan tenant untuk naik turun tanpa harus melalui tangga.</p>\r\n<p>Taman dan kolam renang yang lebih besar dari unit lain membuat kavling 18 paling nyaman untuk tinggal.</p>\r\n<p><span>Dibangun dengan konsep terbuka hijau dan lingkungan yang asri dilengkapi dengan kids playground, taman air, fithes center dan meeting room. Setiap rumah memiliki luas bangunan 400 m2 sampai 500 m2 terdiri dari 3 lantai dilengkapi dengan lemari dan peralatan dapur yang lengkap disetiap rumah juga tersedia&nbsp;kolam renang pribadi, garasi dan carport yang besar juga lay out yang dinamis membuat penghuni akan merasa nyaman tinggal di Abbey. Berlokasi di Bangka Kemang salah satu lokasi strategis di Jakarta yang dilengkapi dengan banyak hiburan, cafe, restaurant, boutique dan shopping mall. Akses yang mudah ke CBD area seperti SCBD dan TB Simatupang. Untuk melengkapi keamanan penghuni kami juga menyediakan Security yang berjaga 24 jam di area masuk.</span></p>', 6, 0, '2015-12-07', 'logo.png', '', '', '', ''),
(69, 'aangnaja77@gmail.com', 'Luxury', 'luxury', '', 6, 0, '2015-12-07', 'logo.png', '', '', '', ''),
(70, 'aangnaja77@gmail.com', 'building', 'building', '<p>The Abbey at Kemang adalah private residence yang dibangun di atas lahan seluas 8500 m2 dengan total 19 rumah yang di design mewah dan finishing touch berkualitas.</p>\r\n<p>Kavling 18 ini adalah rumah terbesar di Abbey dilengkapi dengan lift didalam unit memudahkan tenant untuk naik turun tanpa harus melalui tangga.</p>\r\n<p>Taman dan kolam renang yang lebih besar dari unit lain membuat kavling 18 paling nyaman untuk tinggal.</p>\r\n<p><span>Dibangun dengan konsep terbuka hijau dan lingkungan yang asri dilengkapi dengan kids playground, taman air, fithes center dan meeting room. Setiap rumah memiliki luas bangunan 400 m2 sampai 500 m2 terdiri dari 3 lantai dilengkapi dengan lemari dan peralatan dapur yang lengkap disetiap rumah juga tersedia&nbsp;kolam renang pribadi, garasi dan carport yang besar juga lay out yang dinamis membuat penghuni akan merasa nyaman tinggal di Abbey. Berlokasi di Bangka Kemang salah satu lokasi strategis di Jakarta yang dilengkapi dengan banyak hiburan, cafe, restaurant, boutique dan shopping mall. Akses yang mudah ke CBD area seperti SCBD dan TB Simatupang. Untuk melengkapi keamanan penghuni kami juga menyediakan Security yang berjaga 24 jam di area masuk.</span></p>', 6, 0, '2015-12-07', 'logo.png', '', '', '', ''),
(71, 'aangnaja77@gmail.com', 'FAQs', 'faqs', '<p>The Abbey at Kemang adalah private residence yang dibangun di atas lahan seluas 8500 m2 dengan total 19 rumah yang di design mewah dan finishing touch berkualitas.</p>\r\n<p>Kavling 18 ini adalah rumah terbesar di Abbey dilengkapi dengan lift didalam unit memudahkan tenant untuk naik turun tanpa harus melalui tangga.</p>\r\n<p>Taman dan kolam renang yang lebih besar dari unit lain membuat kavling 18 paling nyaman untuk tinggal.</p>\r\n<p><span>Dibangun dengan konsep terbuka hijau dan lingkungan yang asri dilengkapi dengan kids playground, taman air, fithes center dan meeting room. Setiap rumah memiliki luas bangunan 400 m2 sampai 500 m2 terdiri dari 3 lantai dilengkapi dengan lemari dan peralatan dapur yang lengkap disetiap rumah juga tersedia&nbsp;kolam renang pribadi, garasi dan carport yang besar juga lay out yang dinamis membuat penghuni akan merasa nyaman tinggal di Abbey. Berlokasi di Bangka Kemang salah satu lokasi strategis di Jakarta yang dilengkapi dengan banyak hiburan, cafe, restaurant, boutique dan shopping mall. Akses yang mudah ke CBD area seperti SCBD dan TB Simatupang. Untuk melengkapi keamanan penghuni kami juga menyediakan Security yang berjaga 24 jam di area masuk.</span></p>', 6, 0, '2015-12-07', 'logo.png', '', '', '', ''),
(72, 'aangnaja77@gmail.com', 'Support', 'support', '<p>The Abbey at Kemang adalah private residence yang dibangun di atas lahan seluas 8500 m2 dengan total 19 rumah yang di design mewah dan finishing touch berkualitas.</p>\r\n<p>Kavling 18 ini adalah rumah terbesar di Abbey dilengkapi dengan lift didalam unit memudahkan tenant untuk naik turun tanpa harus melalui tangga.</p>\r\n<p>Taman dan kolam renang yang lebih besar dari unit lain membuat kavling 18 paling nyaman untuk tinggal.</p>\r\n<p><span>Dibangun dengan konsep terbuka hijau dan lingkungan yang asri dilengkapi dengan kids playground, taman air, fithes center dan meeting room. Setiap rumah memiliki luas bangunan 400 m2 sampai 500 m2 terdiri dari 3 lantai dilengkapi dengan lemari dan peralatan dapur yang lengkap disetiap rumah juga tersedia&nbsp;kolam renang pribadi, garasi dan carport yang besar juga lay out yang dinamis membuat penghuni akan merasa nyaman tinggal di Abbey. Berlokasi di Bangka Kemang salah satu lokasi strategis di Jakarta yang dilengkapi dengan banyak hiburan, cafe, restaurant, boutique dan shopping mall. Akses yang mudah ke CBD area seperti SCBD dan TB Simatupang. Untuk melengkapi keamanan penghuni kami juga menyediakan Security yang berjaga 24 jam di area masuk.</span></p>', 6, 0, '2015-12-07', 'logo.png', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
