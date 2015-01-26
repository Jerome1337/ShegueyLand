-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Dim 25 Janvier 2015 à 23:30
-- Version du serveur :  5.5.34
-- Version de PHP :  5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Sheguey`
--


CREATE TABLE `punchline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `punch` text NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Contenu de la table `punchline`
--

INSERT INTO `punchline` (`id`, `name`, `punch`, `time`) VALUES
(3, 'test', 'aaaaaaaaa', '2015-01-25 16:54:02'),
(4, 'test', 'aaaaaaaaa', '2015-01-25 16:54:31'),
(5, 'test', 'aaaaaaaaa', '2015-01-25 16:54:47'),
(6, 'test', 'aaaaaaaaa', '2015-01-25 16:55:41'),
(7, 'test', 'aaaaaaaaa', '2015-01-25 16:55:45'),
(8, 'bbbaaaa', 'bbbbbbbbbaaaaaaaaa', '2015-01-25 17:41:26'),
(9, 'aaa', 'rrrrraaaaa', '2015-01-25 17:44:38'),
(10, 'test', 'rrrrraaaaatest', '2015-01-25 17:46:44'),
(11, 'aaa', 'aaaaa', '2015-01-25 19:36:14'),
(12, 'aaa', 'aaaaa', '2015-01-25 19:38:34'),
(13, 'aaa', 'aaaaa', '2015-01-25 19:39:19'),
(14, 'aaaaa', 'aaaaa', '2015-01-25 20:00:01'),
(15, 'aaaaa', 'aaaaa', '2015-01-25 20:00:04'),
(16, 'aaaaa', 'aaaaa', '2015-01-25 20:02:17'),
(17, 'aaaaa', 'aaaaa', '2015-01-25 20:02:21'),
(18, 'aaaaa', 'aaaaa', '2015-01-25 20:02:39'),
(19, 'aaaaa', 'aaaaa', '2015-01-25 20:03:38'),
(20, 'Gradur', 'Vas y pÃ©tasse viens mâ€™la sucer jâ€™en ai marre de mâ€™branler. Jâ€™suis avec Felom au quartier rien qu''Ã§a graille du poulet ', '2015-01-25 21:05:35'),
(21, 'Gradur', 'Vas y pÃ©tasse viens mâ€™la sucer jâ€™en ai marre de mâ€™branler. Jâ€™suis avec Felom au quartier rien qu''Ã§a graille du poulet ', '2015-01-25 21:08:51'),
(22, 'Gradur', 'Vas y pÃ©tasse viens mâ€™la sucer jâ€™en ai marre de mâ€™branler. Jâ€™suis avec Felom au quartier rien qu''Ã§a graille du poulet ', '2015-01-25 21:09:39'),
(23, 'Gradur', 'Vas y pÃ©tasse viens mâ€™la sucer jâ€™en ai marre de mâ€™branler. Jâ€™suis avec Felom au quartier rien qu''Ã§a graille du poulet ', '2015-01-25 21:09:44'),
(24, 'Gradur', 'Vas y pÃ©tasse viens mâ€™la sucer jâ€™en ai marre de mâ€™branler. Jâ€™suis avec Felom au quartier rien qu''Ã§a graille du poulet ', '2015-01-25 21:10:03'),
(25, 'ROBERT', 'aaaaezefrgqg fg qg qdfg qdf gqfd gq fg qf gqe fgq efh eqfghq fg qfg erFG r efg erG <re g rG r', '2015-01-25 22:30:58'),
(26, 'ROBERT', 'aaaaezefrgqg fg qg qdfg qdf gqfd gq fg qf gqe fgq efh eqfghq fg qfg erFG r efg erG <re g rG r', '2015-01-25 22:31:29'),
(27, 'ROBERT', 'aaaaezefrgqg fg qg qdfg qdf gqfd gq fg qf gqe fgq efh eqfghq fg qfg erFG r efg erG <re g rG r', '2015-01-25 22:32:18'),
(28, 'ROBERT', 'aaaaezefrgqg fg qg qdfg qdf gqfd gq fg qf gqe fgq efh eqfghq fg qfg erFG r efg erG <re g rG r', '2015-01-25 22:32:24'),
(29, 'ROBERT', 'aaaaezefrgqg fg qg qdfg qdf gqfd gq fg qf gqe fgq efh eqfghq fg qfg erFG r efg erG <re g rG r', '2015-01-25 22:32:32'),
(30, 'ROBERT', 'aaaaezefrgqg fg qg qdfg qdf gqfd gq fg qf gqe fgq efh eqfghq fg qfg erFG r efg erG <re g rG r', '2015-01-25 22:32:37'),
(31, 'ROBERT', 'aaaaezefrgqg fg qg qdfg qdf gqfd gq fg qf gqe fgq efh eqfghq fg qfg erFG r efg erG <re g rG r', '2015-01-25 22:34:54'),
(32, 'ROBERT', 'aaaaezefrgqg fg qg qdfg qdf gqfd gq fg qf gqe fgq efh eqfghq fg qfg erFG r efg erG <re g rG r', '2015-01-25 22:50:48'),
(33, 'ROBERT', 'aaaaezefrgqg fg qg qdfg qdf gqfd gq fg qf gqe fgq efh eqfghq fg qfg erFG r efg erG <re g rG r', '2015-01-25 22:54:09'),
(34, 'ROBERT', 'zaaaaaaaa a a a a a a  a a a a e   f d d  d d df qrg f g h d<h dgh w gh wgh <dg h< dgh <t hd <gh wh w h w hw th wth  wth wt hw th wt hw thw h wt hw th wt hw th wt hw th wt hwt wt w th wt  wth w th wt h', '2015-01-25 23:03:01'),
(35, 'ROBERT', 'zaaaaaaaa a a a a a a  a a a a e   f d d  d d df qrg f g h d<h dgh w gh wgh <dg h< dgh <t hd <gh wh w h w hw th wth  wth wt hw th wt hw thw h wt hw th wt hw th wt hw th wt hwt wt w th wt  wth w th wt h', '2015-01-25 23:04:55'),
(36, 'ROBERT', 'zaaaaaaaa a a a a a a  a a a a e   f d d  d d df qrg f g h d<h dgh w gh wgh <dg h< dgh <t hd <gh wh w h w hw th wth  wth wt hw th wt hw thw h wt hw th wt hw th wt hw th wt hwt wt w th wt  wth w th wt h', '2015-01-25 23:06:42'),
(37, 'ROBERT', 'zaaaaaaaa a a a a a a  a a a a e   f d d  d d df qrg f g h d<h dgh w gh wgh <dg h< dgh <t hd <gh wh w h w hw th wth  wth wt hw th wt hw thw h wt hw th wt hw th wt hw th wt hwt wt w th wt  wth w th wt h', '2015-01-25 23:06:44'),
(38, 'ROBERT', 'zaaaaaaaa a a a a a a  a a a a e   f d d  d d df qrg f g h d<h dgh w gh wgh <dg h< dgh <t hd <gh wh w h w hw th wth  wth wt hw th wt hw thw h wt hw th wt hw th wt hw th wt hwt wt w th wt  wth w th wt h', '2015-01-25 23:06:45'),
(39, 'ROBERT', 'zaaaaaaaa a a a a a a  a a a a e   f d d  d d df qrg f g h d<h dgh w gh wgh <dg h< dgh <t hd <gh wh w h w hw th wth  wth wt hw th wt hw thw h wt hw th wt hw th wt hw th wt hwt wt w th wt  wth w th wt h', '2015-01-25 23:06:45'),
(40, 'ROBERT', 'zaaaaaaaa a a a a a a  a a a a e   f d d  d d df qrg f g h d<h dgh w gh wgh <dg h< dgh <t hd <gh wh w h w hw th wth  wth wt hw th wt hw thw h wt hw th wt hw th wt hw th wt hwt wt w th wt  wth w th wt h', '2015-01-25 23:06:47'),
(41, 'ROBERT', 'zaaaaaaaa a a a a a a  a a a a e   f d d  d d df qrg f g h d<h dgh w gh wgh <dg h< dgh <t hd <gh wh w h w hw th wth  wth wt hw th wt hw thw h wt hw th wt hw th wt hw th wt hwt wt w th wt  wth w th wt h', '2015-01-25 23:07:13'),
(42, 'ROBERT', 'zaaaaaaaa a a a a a a  a a a a e   f d d  d d df qrg f g h d<h dgh w gh wgh <dg h< dgh <t hd <gh wh w h w hw th wth  wth wt hw th wt hw thw h wt hw th wt hw th wt hw th wt hwt wt w th wt  wth w th wt h', '2015-01-25 23:09:11'),
(43, 'ROBERT', 'zaaaaaaaa a a a a a a  a a a a e   f d d  d d df qrg f g h d<h dgh w gh wgh <dg h< dgh <t hd <gh wh w h w hw th wth  wth wt hw th wt hw thw h wt hw th wt hw th wt hw th wt hwt wt w th wt  wth w th wt h', '2015-01-25 23:09:18'),
(44, 'ROBERT', 'zaaaaaaaa a a a a a a  a a a a e   f d d  d d df qrg f g h d<h dgh w gh wgh <dg h< dgh <t hd <gh wh w h w hw th wth  wth wt hw th wt hw thw h wt hw th wt hw th wt hw th wt hwt wt w th wt  wth w th wt h', '2015-01-25 23:14:28');
