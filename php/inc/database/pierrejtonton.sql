-- Adminer 4.8.1 MySQL 5.7.39 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `pierrejtonton`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_present` varchar(5) NOT NULL,
  `nb_adult` int(10) DEFAULT NULL,
  `nb_kid` int(10) DEFAULT NULL,
  `created_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


CREATE TABLE `user_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO `user_list` (`id`, `name`) VALUES
(1,	'Adrien Meyssonnier'),
(2,	'Anaïs Bougardier & Miguel Pires'),
(3,	'Anne-Caroline & Julien Petit'),
(4,	'Béatrice & Thierry Trehoux'),
(5,	'Cathy & Hervé Roudaut'),
(6,	'Céline & Ghislain Lepoutre'),
(7,	'Cindy Roussel & Filipe Pires'),
(8,	'Elisabeth & Julien Kocan'),
(9,	'Emeline & Rudy Lameyre'),
(10,	'Emilie & Frédéric Mercier'),
(11,	'Fanny Kocan & Arnaud Diné'),
(12,	'Fatou Diakite & Théo Franceskini'),
(13,	'Florence & Simon Franceskini'),
(14,	'Jane Griffin & Adrien Franceskini'),
(15,	'Natalina & José Pires'),
(16,	'Nathalie & Fabian Jourdan'),
(17,	'Sofia Pires & Jonathan Grimal'),
(18,	'Sonia & Bruno Oliveira Perreira'),
(19,	'Sophie Lainé Martins'),
(20,	'Stéfanie & Pierre-Henri Kocan'),
(21,	'Stéphanie & Brice Lory'),
(22,	'Susana Pires'),
(23,	'Sylvie & Jean-Claude Grimal'),
(24,	'Vanessa Pires & Valentin Demoraich'),
(25,	'Véronique & Michel Nachin'),
(26,	'Virginie & Benoit Malet'),
(27,	'Virginie Vezin & Luis Reis');

-- 2023-04-04 14:21:19
