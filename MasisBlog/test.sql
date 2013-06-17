-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 15 Haz 2013, 18:18:16
-- Sunucu sürümü: 5.5.24-log
-- PHP Sürümü: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `test`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `blog` varchar(200) NOT NULL,
  `author` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`id`, `title`, `blog`, `author`) VALUES
(1, 'asdas', 'asdasdasd', 'admin'),
(2, 'asdas', 'asdasdasd', 'admin'),
(3, 'werwerwerwerwe', 'werwerwe', 'admin'),
(4, 'hgjkhkjhk', 'jkhjkhj', 'admin'),
(5, 'asdas', 'asdasdasdasdadasasdasdasdasdadasasdasdasdasdadasasdasdasdasdadasasdasdasdasdadas', 'admin'),
(6, 'asdasd', 'asdasdasdasdadasasdasdasdasdadasasdasdasdasdadasasdasdasdasdadasasdasdasdasdadas', 'admin'),
(7, 'asdas', 'asdasdasd', 'admin'),
(8, 'baslik', 'blog', 'admin'),
(9, 'title', 'blog', 'admin'),
(10, 'mehmet yapalim dedi yapiyoruz o zaman', 'oldu snairim', 'admin'),
(11, 'create blog', 'create blog', 'admin'),
(12, 'create blog', 'create blog', 'admin'),
(13, 'mehmet bi blog daha istiyor', 'o zaman yaptik gitti', 'admin'),
(14, 'asdasda', 'asdasda', 'admin'),
(15, 'dogru mu ypatik?', 'bi bakalim', 'admin'),
(16, 'sdfsd', 'sdfsd', 'admin'),
(17, 'IT management Systems', 'You could share your ideas about IT maangement systems.', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `comment` varchar(100) NOT NULL,
  `blog` int(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Tablo döküm verisi `comment`
--

INSERT INTO `comment` (`id`, `comment`, `blog`, `user`) VALUES
(1, '0', 1, 'asdasd'),
(2, '0', 1, 'user'),
(3, '0', 1, 'asdasd'),
(4, '0', 1, 'asdasd'),
(5, 'asdasd', 1, 'asdas'),
(6, 'asdasd', 1, 'asdas'),
(7, 'asdasd', 1, 'asdas'),
(8, 'asdasd', 1, 'asdas'),
(9, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 9, 'asdas'),
(10, 'rememberme:D', 1, 'asdas'),
(11, 'remmeber me 2 :D', 1, 'admin'),
(12, 'qwad', 1, 'admin'),
(13, 'asdasd', 1, 'alelelel'),
(14, 'asdasdasdasd', 1, 'alelelel'),
(15, 'asdas', 1, 'admin'),
(16, 'asdasd', 1, 'masis'),
(17, 'asdasdas', 3, 'masis'),
(18, 'asdasd', 13, 'masis'),
(19, 'asdasda', 1, 'masis'),
(20, 'arslan', 3, 'arslan');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` varchar(100) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`username`, `email`, `subject`, `body`, `id`) VALUES
('admin', 'sahin.tasin@boun.edu.tr', 'Fwd: proje upload', 'asd', 1),
('asd', 'sahin.tasin@boun.edu.tr', 'Fwd: proje upload', 'asd', 2),
('admin', 'sahin.tasin@boun.edu.tr', 'Fwd: proje upload', 'asd', 3),
('asdasd', 'asd', 'asd', 'asd', 4),
('arslan', 'arslanmehmet@hotmail.com', 'IT management systems?', 'Could open a topic for IT management systems?', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `first_name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`first_name`, `user_name`, `password`, `id`) VALUES
('alelelel', 'alelelel', 'alelelel', 1),
('aliali', 'alialiali', 'aliali', 2),
('asdasd', 'asdasd', 'asdasd', 6),
('masis', 'masis', 'masis', 7),
('adadadada', 'adadadada', 'adadadada', 8),
('asda', 'adasd', 'asdasda', 9),
('sa', 'asdasda', 'asdasda', 10),
('alivelideli', 'alivelideli', 'alivelideli', 11),
('adadaasdasdada', 'asdasda', '', 13),
('adadaasdasdada', 'asdasda', '', 14),
('admin', 'admin', 'admin', 15),
('mehmet', 'arslan', '12345', 16);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
