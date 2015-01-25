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

-- --------------------------------------------------------

--
-- Structure de la table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'aaa', 'aa@sdfsdf.fr', 'aaa', 'aaa'),
(2, 'aaa', 'aa@sdfsdf.fr', 'aaa', 'aaa'),
(3, 'aaa', 'aa@sdfsdf.fr', 'aaa', 'aaa');

-- --------------------------------------------------------

--
-- Structure de la table `instagram`
--

CREATE TABLE `instagram` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_insta` char(35) NOT NULL,
  `standard_resolution` text NOT NULL,
  `low_resolution` text NOT NULL,
  `caption_text` text NOT NULL,
  `username` text NOT NULL,
  `type` tinytext NOT NULL,
  `link` tinytext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_insta` (`id_insta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Contenu de la table `instagram`
--

INSERT INTO `instagram` (`id`, `id_insta`, `standard_resolution`, `low_resolution`, `caption_text`, `username`, `type`, `link`) VALUES
(44, '895844693755995214_622324008', 'http://scontent-b.cdninstagram.com/hphotos-xpa1/t51.2885-15/10533008_521853614622920_1843644577_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xpa1/t51.2885-15/10533008_521853614622920_1843644577_a.jpg', 'A#one eyes#fucklove#sheguey''zer', 'raoufi12', 'image', 'http://instagram.com/p/xurgCpPqRO/'),
(45, '895841968069034068_1302887319', 'http://scontent-a.cdninstagram.com/hphotos-xfp1/t51.2885-15/10547031_1581698412045650_557640118_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xfp1/t51.2885-15/10547031_1581698412045650_557640118_a.jpg', 'Ce genre de message que tu reÃ§ois comme Ã§a ðŸ˜ðŸ‘ŒðŸ‘Š #sheguey#mon#mon#gars#sur je n''est que des frere pas d''amies âœ‹', 'brazaa_unique', 'image', 'http://instagram.com/p/xuq4YJpEBU/'),
(46, '895841784986051532_1609995743', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10890902_743142375770166_1990028177_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10890902_743142375770166_1990028177_a.jpg', '"Sale fils, de pute, je t''aime bien oui mais j''me prÃ©fÃ¨re !" ðŸŽµðŸŽ§ðŸ”ðŸ’¯ðŸ‘Š#lecoupdupatron#punchline#rapfrancais#rapgame#joke#jokeezy#gradur#dosseh#sheguey#lourd#Toulon#teammetisse#like4like#likes4likes#likesforlikes#l4l#r4r#recent4recent#tags4tags#tagsfortags#picoftheday#follow#followme', '_mioamor', 'image', 'http://instagram.com/p/xuq1tpC6PM/'),
(47, '895840565410745912_290028154', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10881935_423265457833780_954722801_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10881935_423265457833780_954722801_a.jpg', 'BREAKING NEW!! C''est en Studio que 2 pilier de la MUSIC HIP HOP HARDCORE & REGGEATON nous font patienter d''un Featuring. @farrukoofficial & @boobaofficial Le TURFU en personne au lieu de faire des vieux son de Voyous qui valent pas un Sous lol #Oklm #Izi #Duczer #Farrukzer #93 #92 #92i #Yoda #Sheguey #Best #DeuxMilleQuinze #Paris #AmericaLatina #HoyHoyHoy', 'djjeezyboii', 'image', 'http://instagram.com/p/xuqj90sU44/'),
(48, '895840414995694449_306314207', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10890882_395008647333900_599393142_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10890882_395008647333900_599393142_a.jpg', '#ah#c''est#comme#Ã§a#Defends#Paris#Sheguey #4', 'lebasque3364', 'image', 'http://instagram.com/p/xuqhxvQcNx/'),
(49, '895835209803597456_1442477144', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10895428_1588988071336628_175623669_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10895428_1588988071336628_175623669_a.jpg', 'Chips sheguey \n#good #day #new #friend #sheguey #congolais #zdou #chips #two #hours #hard #working #french #dissert #gros #tas  #instamoment #instafriend', 'clem_frchd', 'image', 'http://instagram.com/p/xupWCBoYaQ/'),
(50, '895834650198370473_1509290985', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10919154_1530545790547061_736894746_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10919154_1530545790547061_736894746_a.jpg', '@cokeboyswear_cams\nThis Coke Boys shit, is really a lifestyle ... www.cokeboyswear.com #otf #cokeboy #sheguey #oklm #ratpi', '1nev', 'image', 'http://instagram.com/p/xupN42j2ip/'),
(51, '895830809414807183_1500105330', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10919376_863527410364859_649058248_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10919376_863527410364859_649058248_a.jpg', 'Qui veux des t-shirts , pulls , bonnets , bob''s , jogging sheguey squaad ??? #ShegueySquaad #Sheguey #LeGrandGradur #LhommeAuBobDÃ©but2015 #OnEstEnsembleMesSheguey #PreparezVousLalbumVaEtreLourd #enlÃ©ger #cpasmechant #ShegueyVara #Gradur #Grady #Gradidur #LhommeAuBob', 'team_gradur', 'image', 'http://instagram.com/p/xuoV_2BS6P/'),
(52, '895829675058473254_289061865', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10914166_639806232794390_2081658040_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10914166_639806232794390_2081658040_a.jpg', '#instalike #instagood #instamoment #instag_app #instadaily #picoftheday #picture #pic #french #girl #tagsforlikes #like4like #follow4follow #followme #followback #high #dope #asap #enleger #cbondeja #grady #gradur #TeamLacrim #TeamNiro #sheguey #hairstyle >> Starfallah, ils parlent tous de moi, ils me connaissent pas, c''est que des mythomanes, quoique je fasse je sais qu''tu va parler ! ðŸ’ŽðŸ”«', 'anissaa54', 'image', 'http://instagram.com/p/xuoFfZHSkm/'),
(53, '895794030109982078_1458311982', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10919620_376533262527214_1401087882_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10919620_376533262527214_1401087882_a.jpg', '#l''homme#au#bob#sheguey#squaad#59', 'jimmymorandin', 'image', 'http://instagram.com/p/xuf-ycnv1-/'),
(54, '895846562990345655_341854818', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10890817_768035506621989_672954120_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10890817_768035506621989_672954120_a.jpg', '#Oklm #sheguey  boy', 'mollaroumar', 'image', 'http://instagram.com/p/xur7PgS023/'),
(55, '895844693755995214_622324008', 'http://scontent-b.cdninstagram.com/hphotos-xpa1/t51.2885-15/10533008_521853614622920_1843644577_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xpa1/t51.2885-15/10533008_521853614622920_1843644577_a.jpg', 'A#one eyes#fucklove#sheguey''zer', 'raoufi12', 'image', 'http://instagram.com/p/xurgCpPqRO/'),
(56, '895841968069034068_1302887319', 'http://scontent-a.cdninstagram.com/hphotos-xfp1/t51.2885-15/10547031_1581698412045650_557640118_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xfp1/t51.2885-15/10547031_1581698412045650_557640118_a.jpg', 'Ce genre de message que tu reÃ§ois comme Ã§a ðŸ˜ðŸ‘ŒðŸ‘Š #sheguey#mon#mon#gars#sur je n''est que des frere pas d''amies âœ‹', 'brazaa_unique', 'image', 'http://instagram.com/p/xuq4YJpEBU/'),
(57, '895841784986051532_1609995743', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10890902_743142375770166_1990028177_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10890902_743142375770166_1990028177_a.jpg', '"Sale fils, de pute, je t''aime bien oui mais j''me prÃ©fÃ¨re !" ðŸŽµðŸŽ§ðŸ”ðŸ’¯ðŸ‘Š#lecoupdupatron#punchline#rapfrancais#rapgame#joke#jokeezy#gradur#dosseh#sheguey#lourd#Toulon#teammetisse#like4like#likes4likes#likesforlikes#l4l#r4r#recent4recent#tags4tags#tagsfortags#picoftheday#follow#followme', '_mioamor', 'image', 'http://instagram.com/p/xuq1tpC6PM/'),
(58, '895840565410745912_290028154', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10881935_423265457833780_954722801_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10881935_423265457833780_954722801_a.jpg', 'BREAKING NEW!! C''est en Studio que 2 pilier de la MUSIC HIP HOP HARDCORE & REGGEATON nous font patienter d''un Featuring. @farrukoofficial & @boobaofficial Le TURFU en personne au lieu de faire des vieux son de Voyous qui valent pas un Sous lol #Oklm #Izi #Duczer #Farrukzer #93 #92 #92i #Yoda #Sheguey #Best #DeuxMilleQuinze #Paris #AmericaLatina #HoyHoyHoy', 'djjeezyboii', 'image', 'http://instagram.com/p/xuqj90sU44/'),
(59, '895840414995694449_306314207', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10890882_395008647333900_599393142_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10890882_395008647333900_599393142_a.jpg', '#ah#c''est#comme#Ã§a#Defends#Paris#Sheguey #4', 'lebasque3364', 'image', 'http://instagram.com/p/xuqhxvQcNx/'),
(60, '895835209803597456_1442477144', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10895428_1588988071336628_175623669_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10895428_1588988071336628_175623669_a.jpg', 'Chips sheguey \n#good #day #new #friend #sheguey #congolais #zdou #chips #two #hours #hard #working #french #dissert #gros #tas  #instamoment #instafriend', 'clem_frchd', 'image', 'http://instagram.com/p/xupWCBoYaQ/'),
(61, '895834650198370473_1509290985', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10919154_1530545790547061_736894746_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10919154_1530545790547061_736894746_a.jpg', '@cokeboyswear_cams\nThis Coke Boys shit, is really a lifestyle ... www.cokeboyswear.com #otf #cokeboy #sheguey #oklm #ratpi', '1nev', 'image', 'http://instagram.com/p/xupN42j2ip/'),
(62, '895830809414807183_1500105330', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10919376_863527410364859_649058248_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10919376_863527410364859_649058248_a.jpg', 'Qui veux des t-shirts , pulls , bonnets , bob''s , jogging sheguey squaad ??? #ShegueySquaad #Sheguey #LeGrandGradur #LhommeAuBobDÃ©but2015 #OnEstEnsembleMesSheguey #PreparezVousLalbumVaEtreLourd #enlÃ©ger #cpasmechant #ShegueyVara #Gradur #Grady #Gradidur #LhommeAuBob', 'team_gradur', 'image', 'http://instagram.com/p/xuoV_2BS6P/'),
(63, '895829675058473254_289061865', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10914166_639806232794390_2081658040_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10914166_639806232794390_2081658040_a.jpg', '#instalike #instagood #instamoment #instag_app #instadaily #picoftheday #picture #pic #french #girl #tagsforlikes #like4like #follow4follow #followme #followback #high #dope #asap #enleger #cbondeja #grady #gradur #TeamLacrim #TeamNiro #sheguey #hairstyle >> Starfallah, ils parlent tous de moi, ils me connaissent pas, c''est que des mythomanes, quoique je fasse je sais qu''tu va parler ! ðŸ’ŽðŸ”«', 'anissaa54', 'image', 'http://instagram.com/p/xuoFfZHSkm/'),
(64, '895846562990345655_341854818', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10890817_768035506621989_672954120_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10890817_768035506621989_672954120_a.jpg', '#Oklm #sheguey  boy', 'mollaroumar', 'image', 'http://instagram.com/p/xur7PgS023/'),
(65, '895844693755995214_622324008', 'http://scontent-b.cdninstagram.com/hphotos-xpa1/t51.2885-15/10533008_521853614622920_1843644577_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xpa1/t51.2885-15/10533008_521853614622920_1843644577_a.jpg', 'A#one eyes#fucklove#sheguey''zer', 'raoufi12', 'image', 'http://instagram.com/p/xurgCpPqRO/'),
(66, '895841968069034068_1302887319', 'http://scontent-a.cdninstagram.com/hphotos-xfp1/t51.2885-15/10547031_1581698412045650_557640118_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xfp1/t51.2885-15/10547031_1581698412045650_557640118_a.jpg', 'Ce genre de message que tu reÃ§ois comme Ã§a ðŸ˜ðŸ‘ŒðŸ‘Š #sheguey#mon#mon#gars#sur je n''est que des frere pas d''amies âœ‹', 'brazaa_unique', 'image', 'http://instagram.com/p/xuq4YJpEBU/'),
(67, '895841784986051532_1609995743', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10890902_743142375770166_1990028177_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10890902_743142375770166_1990028177_a.jpg', '"Sale fils, de pute, je t''aime bien oui mais j''me prÃ©fÃ¨re !" ðŸŽµðŸŽ§ðŸ”ðŸ’¯ðŸ‘Š#lecoupdupatron#punchline#rapfrancais#rapgame#joke#jokeezy#gradur#dosseh#sheguey#lourd#Toulon', '_mioamor', 'image', 'http://instagram.com/p/xuq1tpC6PM/'),
(68, '895840565410745912_290028154', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10881935_423265457833780_954722801_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10881935_423265457833780_954722801_a.jpg', 'BREAKING NEW!! C''est en Studio que 2 pilier de la MUSIC HIP HOP HARDCORE & REGGEATON nous font patienter d''un Featuring. @farrukoofficial & @boobaofficial Le TURFU en personne au lieu de faire des vieux son de Voyous qui valent pas un Sous lol #Oklm #Izi #Duczer #Farrukzer #93 #92 #92i #Yoda #Sheguey #Best #DeuxMilleQuinze #Paris #AmericaLatina #HoyHoyHoy', 'djjeezyboii', 'image', 'http://instagram.com/p/xuqj90sU44/'),
(69, '895840414995694449_306314207', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10890882_395008647333900_599393142_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10890882_395008647333900_599393142_a.jpg', '#ah#c''est#comme#Ã§a#Defends#Paris#Sheguey #4', 'lebasque3364', 'image', 'http://instagram.com/p/xuqhxvQcNx/'),
(70, '895835209803597456_1442477144', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10895428_1588988071336628_175623669_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10895428_1588988071336628_175623669_a.jpg', 'Chips sheguey \n#good #day #new #friend #sheguey #congolais #zdou #chips #two #hours #hard #working #french #dissert #gros #tas  #instamoment #instafriend', 'clem_frchd', 'image', 'http://instagram.com/p/xupWCBoYaQ/'),
(71, '895834650198370473_1509290985', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10919154_1530545790547061_736894746_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10919154_1530545790547061_736894746_a.jpg', '@cokeboyswear_cams\nThis Coke Boys shit, is really a lifestyle ... www.cokeboyswear.com #otf #cokeboy #sheguey #oklm #ratpi', '1nev', 'image', 'http://instagram.com/p/xupN42j2ip/'),
(72, '895830809414807183_1500105330', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10919376_863527410364859_649058248_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10919376_863527410364859_649058248_a.jpg', 'Qui veux des t-shirts , pulls , bonnets , bob''s , jogging sheguey squaad ??? #ShegueySquaad #Sheguey #LeGrandGradur #LhommeAuBobDÃ©but2015 #OnEstEnsembleMesSheguey #PreparezVousLalbumVaEtreLourd #enlÃ©ger #cpasmechant #ShegueyVara #Gradur #Grady #Gradidur #LhommeAuBob', 'team_gradur', 'image', 'http://instagram.com/p/xuoV_2BS6P/'),
(73, '895829675058473254_289061865', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10914166_639806232794390_2081658040_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10914166_639806232794390_2081658040_a.jpg', '#instalike #instagood #instamoment #instag_app #instadaily #picoftheday #picture #pic #french #girl #tagsforlikes #like4like #follow4follow #followme #followback #high #dope #asap #enleger #cbondeja #grady #gradur #TeamLacrim #TeamNiro #sheguey #hairstyle >> Starfallah, ils parlent tous de moi, ils me connaissent pas, c''est que des mythomanes, quoique je fasse je sais qu''tu va parler ! ðŸ’ŽðŸ”«', 'anissaa54', 'image', 'http://instagram.com/p/xuoFfZHSkm/'),
(74, '895872310327468235_361492903', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10932229_513570815450440_976196712_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10932229_513570815450440_976196712_a.jpg', 'sheguey squaaad ðŸ”¥#sheguey #bobzer #bro', 'tovma_374', 'image', 'http://instagram.com/p/xuxx6lLWDL/'),
(75, '895872116826096052_1623546583', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10919565_758524810900705_687117963_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10919565_758524810900705_687117963_a.jpg', 'Love#boks#good#live#sheguey', 'bikevalentinboks', 'image', 'http://instagram.com/p/xuxvGXmMG0/'),
(76, '895869002235340937_978055345', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/10903370_313958092138273_854444546_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/10903370_313958092138273_854444546_a.jpg', '#PhotoGrid #sans #drefrisage #avec #defrisage #sheguey', 'patrick_sheguey2015', 'image', 'http://instagram.com/p/xuxBxrhWiJ/'),
(77, '895866299789735200_847338452', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10899429_825655554160454_925158574_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xaf1/t51.2885-15/10899429_825655554160454_925158574_a.jpg', 'Si il t''arrive quelque chose,sois pas Ã©tonnÃ©, c''est que tu l''as provoquÃ©. #top #izi #squaready #acmilan  #celibataire #amour #likeforlike #followforfollow #instamoment #instalike #photooftheday #selfie #followme #snapme #gradur #sheguey #booba #perfect #instalove #me #moi #cute #snapme #love #bored #hair #cut #likeme', 'luca_meo92', 'image', 'http://instagram.com/p/xuwac1NfUg/'),
(78, '895862952886811244_1137109109', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10914420_934139069960070_1602398447_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10914420_934139069960070_1602398447_a.jpg', '#estcequiladessous ? #combieniladanssoncompte #empÃ©gaiement #soirÃ©ecarrÃ© #comprendra #diÃ©touuu #chicha #sheguey #ðŸ‘¹ #foumbouni #@ah_bon_et_toi', 'cohibaaa', 'image', 'http://instagram.com/p/xuvpvyQDps/'),
(79, '895860595995143163_1509290985', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10895279_1528288444100879_828577323_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10895279_1528288444100879_828577323_a.jpg', '#afternextfriday @icecube #desbarres ðŸ˜‚ðŸ˜† #oklm #sheguey #ratpi #mdr #lol #baleze', '1nev', 'image', 'http://instagram.com/p/xuvHcwj2v7/'),
(80, '894105364070014918_890252694', 'http://scontent-a.cdninstagram.com/hphotos-xap1/t51.2885-15/924426_700761016709278_1970808713_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xap1/t51.2885-15/924426_700761016709278_1970808713_a.jpg', '#charlie #ma #sheguey matine #aubry #stage', 'queenrebb', 'video', 'http://instagram.com/p/xogBdpKh_G/'),
(81, '895859020002192333_1509290985', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10852583_885853438114613_396948741_n.jpg', 'http://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10852583_885853438114613_396948741_a.jpg', '#pinky #mdr #nextfriday #desbarres ðŸ˜‚ #oklm #sheguey #ratpi #pink #lol', '1nev', 'image', 'http://instagram.com/p/xuuwhAD2vN/'),
(82, '895858710609236246_271859963', 'http://scontent-a.cdninstagram.com/hphotos-xpa1/t51.2885-15/10424518_1400293893600203_1995417295_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xpa1/t51.2885-15/10424518_1400293893600203_1995417295_a.jpg', 'Je suis amoureuse de cette musique ðŸ’Žâœ¨ðŸ‘â¤ï¸ @gradurofficiel #sheguey #meilleur #rappeur #gradur', 'faitdespompesdestractions', 'image', 'http://instagram.com/p/xuusA2zZEW/'),
(83, '895858442029136987_1463502974', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10932351_822262111166838_823976741_n.jpg', 'http://scontent-a.cdninstagram.com/hphotos-xaf1/t51.2885-15/10932351_822262111166838_823976741_a.jpg', 'DÃ©solÃ© ma lau ste photo te mets pas trop en valeur.... #mes #sheguey #cest #les #meilleurs â¤ï¸', 'itsdelb', 'image', 'http://instagram.com/p/xuuoGuLnxb/');

-- --------------------------------------------------------

--
-- Structure de la table `punchline`
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
