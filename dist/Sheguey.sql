-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2015 at 05:52 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sheguey`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE IF NOT EXISTS `contactform` (
`id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instagram`
--

CREATE TABLE IF NOT EXISTS `instagram` (
`id` int(11) NOT NULL,
  `id_insta` char(35) NOT NULL,
  `standard_resolution` text NOT NULL,
  `low_resolution` text NOT NULL,
  `tags` text NOT NULL,
  `caption_text` text NOT NULL,
  `username` text NOT NULL,
  `type` tinytext NOT NULL,
  `link` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instagram`
--

INSERT INTO `instagram` (`id`, `id_insta`, `standard_resolution`, `low_resolution`, `tags`, `caption_text`, `username`, `type`, `link`) VALUES
(1, '905109029705673748_308056722', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/e15/10895253_1550089931898290_356305438_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/s306x306/e15/10895253_1550089931898290_356305438_n.jpg', 'sheguey', '@ginocsnt #citadium#dlafrappe#sheguey#lhommeaubobfin#gradurzer', 'lucasfshr', 'image', 'http://instagram.com/p/yPl932muwU/'),
(2, '905093143596478478_29598435', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/e15/10948537_1530257363905175_1029385144_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/s306x306/e15/10948537_1530257363905175_1029385144_n.jpg', 'sheguey', 'Shisha oklm a montreux #neige #montreux #switzerland #shisha #sheguey #cafÃ© #chocolat #bob #bobet #boke #leman #lac @favreromur @leabagnoud #bb', 'seb396', 'image', 'http://instagram.com/p/yPiWswtbAO/'),
(3, '905089798060042538_1205018257', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/e15/10914459_509809149158187_572390973_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/s306x306/e15/10914459_509809149158187_572390973_n.jpg', 'sheguey', 'Les gens oublient vite qui Ã©tait lÃ  pour eux quand il le fallait.ðŸ’® #KJ#CrÃ©meDeLaCrÃ©me#Sheguey#Gradidur#Youri#JokeMtp#TeamAntille#TeamItalie#Gwada#Turin#971.', '_lxsx', 'image', 'http://instagram.com/p/yPhmA_Mukq/'),
(4, '905086332707875829_289061865', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/e15/10950439_401345366696535_829088700_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/s306x306/e15/10950439_401345366696535_829088700_n.jpg', 'sheguey', '#instalike #instag_app #instasize #instadaily #instamoment #instagood #tagsforlikes #followme #followback #follow4follow #f4f #like4like #l4l #asap #dope #high #oklm #picoftheday #pic #selfie #french #girl #hairstyle #amoureuse #grady #gradur #sheguey #enleger #cbondeja >> Chaque jour qui passe, tu me donne une raison de plus de sourire et d''exister ðŸ’žâœ¨. ~ III.IX.MMXIV ~ #V ðŸ’‘ðŸ’', 'anissaa54', 'image', 'http://instagram.com/p/yPgzloHSv1/'),
(5, '905070754735075751_278651291', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/e15/10952558_655923027868935_226708853_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/s306x306/e15/10952558_655923027868935_226708853_n.jpg', 'sheguey', 'ðŸ‘ŠðŸ‘ŠðŸ‘ŠðŸ‘Š#paris#instagood#instamoment#followme#followback#follow4follow#likeme#izi#92#brune#lhommeaubob##sheguey#gradur#blonde#marseille#sud#nord#miami#boston#snapback#Ã¼#unkut#booba#izi#french#arabe#swagg#fashion#instagramers#snap', 'keyser013', 'image', 'http://instagram.com/p/yPdQ5glDGn/'),
(6, '905067713009766755_1550287003', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/e15/10914437_526483174161640_1373696182_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/s306x306/e15/10914437_526483174161640_1373696182_n.jpg', 'sheguey', '#Sheguey\n#sur du gradur fait des pompe et traction', 'couple_alyson.benji_', 'image', 'http://instagram.com/p/yPckorn1Fj/'),
(7, '905067604586262681_310846275', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/e15/10948372_870059426370567_1887030383_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/s306x306/e15/10948372_870059426370567_1887030383_n.jpg', 'sheguey', 'H24 avec mes gars jamais d''galere. "Mes vrais potes dans ce monde d''hypocrite" mddddddr bande de con ceux qui disent h24 monde d''hypocrite c''est vous les plus cons et les plus hypocrites sans vrais potes ! #Soiree #Fifa #Pizza #Sheguey #Sosa #Real #Barca #Hamza #SansMaillot #VoleEnUn ! #Robin #Freros #RichardMeDoitDesThunesIlEstPasLa #IlAJamaisRepondu !', 'anthony_marquesf', 'image', 'http://instagram.com/p/yPcjDtE_CZ/'),
(8, '905065405109981735_367781235', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/e15/10895470_849475521757914_425147660_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/s306x306/e15/10895470_849475521757914_425147660_n.jpg', 'sheguey', 'âœ–ï¸Fuck lifeâœ–ï¸ #mon #amÂ´s #lathug #margauw #fifolle#friendship #friend #friendschool #fucklife #fuckrageux #motherfucker #yenaassezfratÃ© #sheguey #school #lourd #souslespalmiersolÃ©olÃ© ðŸ’ž @margaux0699', 'nawelle.lhrche', 'image', 'http://instagram.com/p/yPcDDSE1In/'),
(9, '905057411364465844_1350723498', 'http://scontent-a.cdninstagram.com/hphotos-xpa1/t51.2885-15/e15/924625_920064014680207_815705101_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xpa1/t51.2885-15/s306x306/e15/924625_920064014680207_815705101_n.jpg', 'sheguey', 'Repas de roi #sheguey â¤ï¸', 'alexandre_duclaux', 'image', 'http://instagram.com/p/yPaOuhtqy0/'),
(10, '905054194887309875_1234868853', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/e15/1168576_488343017971453_241704647_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/s306x306/e15/1168576_488343017971453_241704647_n.jpg', 'sheguey', '#Friend #JeanPerrin #Thomas #Othmane #Moamed #Ayoub #Sheguey #Saturday #School #Frere #FrenchBoy #Rebeu', 'navetalex98', 'image', 'http://instagram.com/p/yPZf68vDoz/'),
(11, '905051977089239231_1421482769', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/e15/10946499_605348089566512_2107147503_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/s306x306/e15/10946499_605348089566512_2107147503_n.jpg', 'sheguey', 'On change pas une Ã©quipe qui gagne #sheguey #swagg', 'badroubdr', 'image', 'http://instagram.com/p/yPY_pdq0i_/'),
(12, '905048813645340565_502498590', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/e15/10919479_409612789209690_1449360826_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/s306x306/e15/10919479_409612789209690_1449360826_n.jpg', 'sheguey', 'Direction panam ! Reprise boulot ! ðŸ’ª #TGV #Marseille #Paris #Taff #Sncf #Sheguey #Eclater #Reprise', 'gonzo_muppet', 'image', 'http://instagram.com/p/yPYRnRuB-V/'),
(13, '905047597889643435_269020535', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/e15/10903284_377382355776283_1720835105_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/s306x306/e15/10903284_377382355776283_1720835105_n.jpg', 'sheguey', 'Muscu.ðŸ‘ŒðŸ’ª\n#Gradur #sheguey #tractions.', 'kimiiberley', 'image', 'http://instagram.com/p/yPX_7BCGOr/'),
(14, '905044645640907446_241994841', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/e15/10949034_1595095650720670_1538919692_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/s306x306/e15/10949034_1595095650720670_1538919692_n.jpg', 'sheguey', '#FrenchBoy #CÃ©libataire #Sheguey #19years #Gendarme', 'alexlny', 'image', 'http://instagram.com/p/yPXU9hS6q2/'),
(15, '905033425297213284_594418200', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/e15/10948700_776932072374599_1440689964_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/s306x306/e15/10948700_776932072374599_1440689964_n.jpg', 'sheguey', 'Jamais... ðŸ‘Œ\n#jamais #SHEGUEY #gradur  #messhegueys #negros #mancity #renois #lhommeaubob #lhommeauBobzer #shneck #pussyeater #Nike #gants #Unkut', 'souhail_eddahani', 'image', 'http://instagram.com/p/yPUxrwsgdk/'),
(16, '905032965793617824_1655737404', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/e15/10946576_782003568546269_172970515_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/s306x306/e15/10946576_782003568546269_172970515_n.jpg', 'sheguey', '#Les#etalons#st#des#sheguey', 'jossbmbr', 'image', 'http://instagram.com/p/yPUq_0JZeg/'),
(17, '905031671078330476_312706671', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t50.2886-16/10944091_645022358958132_1051260945_n.mp4', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t50.2886-16/10949429_1540609262883106_1309025722_s.mp4', 'sheguey', '"Une carriÃ¨re de footeux ouais ouais je rÃªvais de percer, depuis la bedave m''a eu, m''a abimÃ© les lÃ¨vres gercÃ©es\nGet money fuck bitch tu connais le dicton !"\n#gradur #sheguey #negro #rap #black #guy #boy #instamoment #enattendantlematch', 'alex_shgy', 'video', 'http://instagram.com/p/yPUYKBGiBs/'),
(18, '905028321279385480_1419785422', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/e15/10919640_576494572486803_1595897121_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/s306x306/e15/10919640_576494572486803_1595897121_n.jpg', 'sheguey', 'Retour dans le nord âœŒï¸ðŸ‘Œ#frenchboy #french #boy #iphone6 #gucci #diesel #snapchat #angouleme #arras #portugais #sheguey #shegueysquad #bientot #brother ðŸ‘', 'teddyfranciscob', 'image', 'http://instagram.com/p/yPTnaRhp-I/'),
(19, '905026249486201689_303135475', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/e15/10919693_330363533821601_395456652_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/s306x306/e15/10919693_330363533821601_395456652_n.jpg', 'sheguey', '#bob #militaire #sheguey', 'djohncafee', 'image', 'http://instagram.com/p/yPTJQxB3NZ/'),
(20, '905025398142694325_996715027', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t50.2886-16/10946902_899336440086214_832240532_n.mp4', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t50.2886-16/10949660_1582183505328297_816918380_s.mp4', 'sheguey', '#papÃ©#sheguey#brinks#2015#tusaispourquoiontveuxdessous#extrait#59#13#lhommeaubob#RDC\n@alonzopsy4 feat @gradurofficiel', 'dln_official', 'video', 'http://instagram.com/p/yPS835AHO1/'),
(21, '905018333594346435_308021751', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/e15/10932299_1025320527483328_998380156_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/s306x306/e15/10932299_1025320527483328_998380156_n.jpg', 'sheguey', 'L''homme au Bob le 23 fÃ©vrier @gradurofficiel ðŸ’ªðŸ’ªðŸ”žðŸ”žðŸ”ž #gradur #lhommeaubob #sheguey #enleger #onestensemblesheguey #postiche #jamais #23fevrier', 'oualide_boukhs', 'image', 'http://instagram.com/p/yPRWEhG2PD/'),
(22, '905009800755246990_247274316', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/e15/10665534_1386367745003398_1687584535_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/s306x306/e15/10665534_1386367745003398_1687584535_n.jpg', 'sheguey', 'ðŸ’µ Sous ma semelle ðŸ’µ #EnlÃ©ger #Sheguey #TeamG #YouryLeGamin #skuurt #PostBadBebar #SourirEclatant Anniversaire de ma cousine @_mariongarcia_ ðŸŽ‰', 'yannis_30', 'image', 'http://instagram.com/p/yPPZ5sQ3eO/'),
(23, '905008790932527827_1570632277', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/e15/10948754_808435709203528_85997353_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/s306x306/e15/10948754_808435709203528_85997353_n.jpg', 'sheguey', 'Je ferai des effort qu''a ceux qui le mÃ©ritent SWEG  #instamoment #sheguey  #ThugLife #bonnejournÃ©e #b2oba  #92i #primetimefut', 'rubzer7o', 'image', 'http://instagram.com/p/yPPLNOI5rT/'),
(24, '902107343561372936_45954044', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/e15/10919718_778857208851589_1954427766_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/s306x306/e15/10919718_778857208851589_1954427766_n.jpg', 'sheguey', '#snapchat #bob #selfie', 'matthfly', 'image', 'http://instagram.com/p/yE7dlyPzUI/'),
(25, '905004727171271308_1013681521', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/e15/10949063_705559139563526_1975294129_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/s306x306/e15/10949063_705559139563526_1975294129_n.jpg', 'sheguey', '90 valider ! #sheguey#squaad#sa#soulÃ¨ve#90#litron ðŸ’ªðŸ’‰ðŸ’¯', 'rockett_biird', 'image', 'http://instagram.com/p/yPOQEjF8qM/'),
(26, '905000654134302153_1006797804', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/e15/10895308_1603851699846440_2046611471_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/s306x306/e15/10895308_1603851699846440_2046611471_n.jpg', 'sheguey', '#negro#black#niggas#renoi#camerounais#senegalais#French#italien#marseillais#happy#LV#LouisVuitton#bonnet#sheguey#Enleger#izi#redskins#marseille#NoPainNoGain#NegroFacher#blackpower#weekend#winter#hiver#froids', 'landryblackos', 'image', 'http://instagram.com/p/yPNUzPK9XJ/'),
(27, '905000269358607370_224799138', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/e15/10919534_775926179165212_882047087_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/s306x306/e15/10919534_775926179165212_882047087_n.jpg', 'sheguey', '#alonzo #RDC #gradur #sheguey', 'redha92360', 'image', 'http://instagram.com/p/yPNPM4wKwK/'),
(28, '904999852813293323_315688556', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t50.2886-16/10947140_346478442211211_1725026722_n.mp4', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t50.2886-16/10911102_1542219349396285_900411067_s.mp4', 'sheguey', '#sheguey !!!', 'phebo_thalahassa', 'video', 'http://instagram.com/p/yPNJI8t5cL/'),
(29, '904998529741996087_450710367', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/e15/10932125_329276907281880_519797297_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/s306x306/e15/10932125_329276907281880_519797297_n.jpg', 'sheguey', 'Le travail paye mes shegueyyys ðŸ˜˜ #ASA #asaulnoye #ASAvsStAmand #workhard #playhard #FootBall #soccer #Sheguey #Enforce', 'emilegnt_', 'image', 'http://instagram.com/p/yPM14vhcA3/'),
(30, '904996950796641556_212670744', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/e15/10949000_506035322870912_645044581_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/s306x306/e15/10949000_506035322870912_645044581_n.jpg', 'sheguey', 'Je suis le seul Ã  faire des millions de vue et Ã  Ãªtre encore au taf Ba ouai qu''est ce ta crus petit fils de pure moi j''ai jamais rien attendus du rap ðŸ‘ŠðŸ’ª\n#Sheguey #Gradur #etaler \nAlgÃ©rie ma patrie ðŸ’šðŸ”´âšªï¸\n#AlgÃ©rie #sur #ma #main ðŸ’ª', 'beliebers69360', 'image', 'http://instagram.com/p/yPMe6PC6UU/'),
(31, '904987899500117871_1346913790', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/e15/10948865_1406451689651926_198013553_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/s306x306/e15/10948865_1406451689651926_198013553_n.jpg', 'sheguey', 'Avec #sheguey ðŸ•ðŸ˜ŽâœŒï¸ðŸ’¯ðŸ’™â¤ï¸', 'elmamso', 'image', 'http://instagram.com/p/yPKbMjuz9v/'),
(32, '905115809915963073_1662817144', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/e15/10953743_375025942676657_249927030_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/s306x306/e15/10953743_375025942676657_249927030_n.jpg', 'sheguey', '#sheguey', 'aaxell_mf91', 'image', 'http://instagram.com/p/yPngiaoYbB/'),
(33, '786835729849761623_574884590', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/e15/10616286_1467380306844664_1443106053_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/s306x306/e15/10616286_1467380306844664_1443106053_n.jpg', '', 'ðŸ‘ŒâœŒï¸', 'nassim.itto', 'image', 'http://instagram.com/p/rrZu1uR79X/');

-- --------------------------------------------------------

--
-- Table structure for table `punchline`
--

CREATE TABLE IF NOT EXISTS `punchline` (
`id` int(11) NOT NULL,
  `name` tinyint(15) NOT NULL,
  `punch` mediumtext NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instagram`
--
ALTER TABLE `instagram`
 ADD PRIMARY KEY (`id`), ADD KEY `id_insta` (`id_insta`);

--
-- Indexes for table `punchline`
--
ALTER TABLE `punchline`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `instagram`
--
ALTER TABLE `instagram`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `punchline`
--
ALTER TABLE `punchline`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
