-- Adminer 4.3.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `user_name`, `address`, `pincode`) VALUES
(1,	'pankaj',	'Mumbai',	'400093'),
(2,	'pankaj',	'Mumbai',	'400093'),
(3,	'piyush',	'Delhi',	'400093'),
(4,	'pankaj',	'Lucknow',	'400093'),
(5,	'Anand',	'Hyderabad',	'400093'),
(21,	'Hitesh',	'Chennai',	'400093'),
(20,	'Sushant',	'Bangluru',	'400093'),
(19,	'Rangan',	'Gurugram',	'400093'),
(18,	'Pankaj',	'Noida',	'400093'),
(17,	'Sonya',	'Mumbai',	'400093'),
(23,	'Sushant',	'Bangluru',	'400093'),
(22,	'Sonya',	'Mumbai',	'400093');

-- 2017-05-08 08:32:23
