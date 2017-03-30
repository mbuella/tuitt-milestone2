-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 04:56 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kwntu`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `chapter_id` int(10) UNSIGNED NOT NULL,
  `story_id` int(8) UNSIGNED NOT NULL,
  `chapter_idx` float(3,2) UNSIGNED NOT NULL,
  `chapter_title` tinytext NOT NULL,
  `chapter_text` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`chapter_id`, `story_id`, `chapter_idx`, `chapter_title`, `chapter_text`) VALUES
(1, 9, 1.00, 'Chapter 1', 'Negat esse eam, inquit, propter se expetendam. Istic sum, inquit. Cur igitur, inquam, res tam dissimiles eodem nomine appellas? Nam memini etiam quae nolo, oblivisci non possum quae volo.\r\n\r\nQuorum sine causa fieri nihil putandum est. Nec tamen ullo modo summum pecudis bonum et hominis idem mihi videri potest. Suo enim quisque studio maxime ducitur. Quae contraria sunt his, malane? Ex ea difficultate illae fallaciloquae, ut ait Accius, malitiae natae sunt. Hoc est non dividere, sed frangere.\r\n\r\nId Sextilius factum negabat. Neminem videbis ita laudatum, ut artifex callidus comparandarum voluptatum diceretur. Etsi ea quidem, quae adhuc dixisti, quamvis ad aetatem recte isto modo dicerentur. Vide igitur ne non debeas verbis nostris uti, sententiis tuis. Vitiosum est enim in dividendo partem in genere numerare. Atqui haec patefactio quasi rerum opertarum, cum quid quidque sit aperitur, definitio est. Quamquam haec quidem praeposita recte et reiecta dicere licebit. Quare ad ea primum, si videtur; In qua quid est boni praeter summam voluptatem, et eam sempiternam? Nam, ut sint illa vendibiliora, haec uberiora certe sunt.\r\n\r\nVidesne quam sit magna dissensio? Beatus sibi videtur esse moriens. Sed tamen est aliquid, quod nobis non liceat, liceat illis. Quid iudicant sensus? Quid loquor de nobis, qui ad laudem et ad decus nati, suscepti, instituti sumus? Nunc omni virtuti vitium contrario nomine opponitur. Rationis enim perfectio est virtus; Sed ad haec, nisi molestum est, habeo quae velim. Etsi qui potest intellegi aut cogitari esse aliquod animal, quod se oderit? Tenent mordicus. Neque enim disputari sine reprehensione nec cum iracundia aut pertinacia recte disputari potest.\r\n\r\nNulla profecto est, quin suam vim retineat a primo ad extremum. Invidiosum nomen est, infame, suspectum. Si enim ad populum me vocas, eum. Scientiam pollicentur, quam non erat mirum sapientiae cupido patria esse cariorem.'),
(1, 10, 1.00, 'Chapter 1: Wansapanataym', 'Hoc loco tenere se Triarius non potuit. Haec igitur Epicuri non probo, inquam. Quid ei reliquisti, nisi te, quoquo modo loqueretur, intellegere, quid diceret? Ita redarguitur ipse a sese, convincunturque scripta eius probitate ipsius ac moribus. Eorum enim omnium multa praetermittentium, dum eligant aliquid, quod sequantur, quasi curta sententia; An dolor longissimus quisque miserrimus, voluptatem non optabiliorem diuturnitas facit? Hoc non est positum in nostra actione. Sed in rebus apertissimis nimium longi sumus.\nAt miser, si in flagitiosa et vitiosa vita afflueret voluptatibus. Quae quidem sapientes sequuntur duce natura tamquam videntes; Utrum igitur tibi litteram videor an totas paginas commovere? Non quaeritur autem quid naturae tuae consentaneum sit, sed quid disciplinae. Quando enim Socrates, qui parens philosophiae iure dici potest, quicquam tale fecit? Eadem nunc mea adversum te oratio est. Mihi enim satis est, ipsis non satis. Scaevola tribunus plebis ferret ad plebem vellentne de ea re quaeri. Comprehensum, quod cognitum non habet? Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum.\nTe enim iudicem aequum puto, modo quae dicat ille bene noris. Huius ego nunc auctoritatem sequens idem faciam. Sit sane ista voluptas. Simus igitur contenti his. Et non ex maxima parte de tota iudicabis? Quorum sine causa fieri nihil putandum est. Nam de isto magna dissensio est.\nIs ita vivebat, ut nulla tam exquisita posset inveniri voluptas, qua non abundaret. Ita relinquet duas, de quibus etiam atque etiam consideret. Totum autem id externum est, et quod externum, id in casu est. Quod cum accidisset ut alter alterum necopinato videremus, surrexit statim. Summus dolor plures dies manere non potest? Eam tum adesse, cum dolor omnis absit; Iubet igitur nos Pythius Apollo noscere nosmet ipsos. Invidiosum nomen est, infame, suspectum.\nNam ante Aristippus, et ille melius. Quae cum dixisset paulumque institisset, Quid est? Incommoda autem et commoda-ita enim estmata et dustmata appello-communia esse voluerunt, paria noluerunt. Illa tamen simplicia, vestra versuta. Bona autem corporis huic sunt, quod posterius posui, similiora. Uterque enim summo bono fruitur, id est voluptate. Istam voluptatem, inquit, Epicurus ignorat? Pauca mutat vel plura sane; Duo enim genera quae erant, fecit tria. At iam decimum annum in spelunca iacet.\n'),
(1, 12, 1.00, 'Chapter 1', 'Nam pretium leo purus, sed pharetra lectus bibendum non. Nullam sed justo nec ex mollis facilisis. Nunc et lacus id dolor interdum vulputate. Integer sit amet facilisis enim, nec pellentesque tellus. Aenean est odio, consectetur non vehicula ac, rutrum sit amet ligula. Integer hendrerit tempus lorem. Donec at purus at velit fermentum dapibus sed id velit. Etiam sit amet tincidunt est, ut maximus neque. Aliquam velit ligula, varius ac porttitor non, posuere ac risus. Mauris sit amet nulla vel mauris porta congue. Suspendisse et suscipit ante, quis vulputate sapien. Praesent nec erat consectetur, congue ex vitae, condimentum magna. Phasellus ultrices cursus ullamcorper. Duis pretium libero sed sem aliquam commodo. Phasellus ac semper risus.\r\n\r\nNunc rutrum, erat nec sollicitudin tristique, orci lorem viverra massa, vitae varius ante nibh at tellus. Nam nec magna felis. Nam ac tincidunt ex, sit amet hendrerit turpis. Aenean iaculis nibh quis sagittis lobortis. Maecenas molestie lacinia turpis, at pellentesque quam aliquam sed. Etiam non lorem nibh. Quisque non nisi pellentesque, vehicula risus ac, sagittis lacus. Aliquam hendrerit augue id nibh fringilla efficitur. Mauris mollis ullamcorper nisl a tincidunt. Suspendisse potenti. Mauris maximus enim vitae magna feugiat euismod. Suspendisse potenti.\r\n\r\nProin laoreet nibh sit amet aliquet molestie. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed consequat aliquam metus eu convallis. In interdum nisl a sapien placerat, eu bibendum magna tempus. Sed ut convallis nulla. Aenean augue ipsum, hendrerit eget elementum et, egestas ac felis. In mollis quis leo a pretium. Nunc interdum nulla quis commodo pharetra. In hac habitasse platea dictumst. Suspendisse efficitur dignissim lacus vel laoreet. Duis nec sollicitudin ligula, et molestie tellus. Morbi ac rhoncus metus.\r\n\r\nFusce lacinia dui placerat, tempus nisl iaculis, auctor velit. Sed eleifend ante et ante imperdiet consequat. Pellentesque dictum nibh nec varius aliquet. Etiam et nibh purus. Duis diam neque, ullamcorper nec sodales quis, semper eu tellus. Fusce ullamcorper tellus eget metus egestas finibus. Suspendisse interdum maximus bibendum. Ut luctus sed turpis sed posuere. Aliquam aliquam, diam non ullamcorper pretium, elit mi dignissim ligula, vitae dignissim massa purus quis nulla. Phasellus sed euismod eros. Donec vitae vehicula sem, sit amet vulputate dui. Nulla ut erat porta urna porttitor scelerisque sit amet id augue. Praesent sed dolor id mauris mollis sodales id a nibh. Phasellus eget fermentum mi, viverra auctor risus. Curabitur ut sapien nibh. Nulla molestie tortor id sem suscipit consectetur.\r\n\r\nVivamus et semper diam. Etiam tincidunt diam a dui egestas, ut congue risus luctus. Quisque suscipit enim vehicula est dapibus pretium. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec lobortis bibendum odio at vehicula. Fusce vitae dui at metus lobortis fermentum. Suspendisse vel leo sed felis dapibus imperdiet sed in sapien. Pellentesque imperdiet lorem eget nisl ornare aliquet. Duis vitae lectus commodo, rhoncus lacus quis, ullamcorper felis. Etiam eget maximus quam, non ornare mi. Duis turpis est, laoreet a mauris non, pharetra placerat risus.\r\n\r\nIn sit amet congue ligula. Pellentesque varius semper dolor at consequat. Nunc semper justo eget semper vehicula. In rutrum est sed velit tempor mollis. Sed vitae ipsum eu ex lobortis elementum. In maximus rhoncus convallis. Nam quis sapien lectus. Cras dictum sem vel libero venenatis, a mattis arcu semper. Nulla pretium, felis eget luctus mollis, arcu nisi viverra mi, ac venenatis dui nisi in dui. Cras eu consequat libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus vitae quam elit. Interdum et malesuada fames ac ante ipsum primis in faucibus.'),
(2, 9, 2.00, 'Chapter 2', 'Sed fortuna fortis; Nec vero alia sunt quaerenda contra Carneadeam illam sententiam. Quis est tam dissimile homini. Sic enim censent, oportunitatis esse beate vivere. Ergo adhuc, quantum equidem intellego, causa non videtur fuisse mutandi nominis. Unum est sine dolore esse, alterum cum voluptate. Ita relinquet duas, de quibus etiam atque etiam consideret. Eaedem res maneant alio modo.\r\n\r\nCommoda autem et incommoda in eo genere sunt, quae praeposita et reiecta diximus; Quid turpius quam sapientis vitam ex insipientium sermone pendere? Sed ad haec, nisi molestum est, habeo quae velim. Tria genera bonorum; Hoc est dicere: Non reprehenderem asotos, si non essent asoti. Quam ob rem tandem, inquit, non satisfacit? Habent enim et bene longam et satis litigiosam disputationem. Vitae autem degendae ratio maxime quidem illis placuit quieta. Qui ita affectus, beatum esse numquam probabis;\r\n\r\nUt aliquid scire se gaudeant? Quamquam non negatis nos intellegere quid sit voluptas, sed quid ille dicat. In qua quid est boni praeter summam voluptatem, et eam sempiternam? Sed vos squalidius, illorum vides quam niteat oratio. Quoniam, si dis placet, ab Epicuro loqui discimus. Et quod est munus, quod opus sapientiae? Hos contra singulos dici est melius. Odium autem et invidiam facile vitabis. Nonne videmus quanta perturbatio rerum omnium consequatur, quanta confusio? Cur igitur easdem res, inquam, Peripateticis dicentibus verbum nullum est, quod non intellegatur?\r\n\r\nId enim volumus, id contendimus, ut officii fructus sit ipsum officium. At hoc in eo M. Huius, Lyco, oratione locuples, rebus ipsis ielunior. Sin laboramus, quis est, qui alienae modum statuat industriae? Quamvis enim depravatae non sint, pravae tamen esse possunt. Hanc ergo intuens debet institutum illud quasi signum absolvere. Si qua in iis corrigere voluit, deteriora fecit. Primum in nostrane potestate est, quid meminerimus? Ut nemo dubitet, eorum omnia officia quo spectare, quid sequi, quid fugere debeant?\r\n\r\nEaedem enim utilitates poterunt eas labefactare atque pervertere. Summum a vobis bonum voluptas dicitur. Qui-vere falsone, quaerere mittimus-dicitur oculis se privasse; Haec quo modo conveniant, non sane intellego. Refert tamen, quo modo. Negat esse eam, inquit, propter se expetendam. Itaque rursus eadem ratione, qua sum paulo ante usus, haerebitis. Quam illa ardentis amores excitaret sui! Cur tandem? Recte, inquit, intellegis.'),
(2, 12, 2.00, 'Chapter 2', 'Negat esse eam, inquit, propter se expetendam. Istic sum, inquit. Cur igitur, inquam, res tam dissimiles eodem nomine appellas? Nam memini etiam quae nolo, oblivisci non possum quae volo.\r\n\r\nQuorum sine causa fieri nihil putandum est. Nec tamen ullo modo summum pecudis bonum et hominis idem mihi videri potest. Suo enim quisque studio maxime ducitur. Quae contraria sunt his, malane? Ex ea difficultate illae fallaciloquae, ut ait Accius, malitiae natae sunt. Hoc est non dividere, sed frangere.\r\n\r\nId Sextilius factum negabat. Neminem videbis ita laudatum, ut artifex callidus comparandarum voluptatum diceretur. Etsi ea quidem, quae adhuc dixisti, quamvis ad aetatem recte isto modo dicerentur. Vide igitur ne non debeas verbis nostris uti, sententiis tuis. Vitiosum est enim in dividendo partem in genere numerare. Atqui haec patefactio quasi rerum opertarum, cum quid quidque sit aperitur, definitio est. Quamquam haec quidem praeposita recte et reiecta dicere licebit. Quare ad ea primum, si videtur; In qua quid est boni praeter summam voluptatem, et eam sempiternam? Nam, ut sint illa vendibiliora, haec uberiora certe sunt.\r\n\r\nVidesne quam sit magna dissensio? Beatus sibi videtur esse moriens. Sed tamen est aliquid, quod nobis non liceat, liceat illis. Quid iudicant sensus? Quid loquor de nobis, qui ad laudem et ad decus nati, suscepti, instituti sumus? Nunc omni virtuti vitium contrario nomine opponitur. Rationis enim perfectio est virtus; Sed ad haec, nisi molestum est, habeo quae velim. Etsi qui potest intellegi aut cogitari esse aliquod animal, quod se oderit? Tenent mordicus. Neque enim disputari sine reprehensione nec cum iracundia aut pertinacia recte disputari potest.\r\n\r\nNulla profecto est, quin suam vim retineat a primo ad extremum. Invidiosum nomen est, infame, suspectum. Si enim ad populum me vocas, eum. Scientiam pollicentur, quam non erat mirum sapientiae cupido patria esse cariorem.'),
(3, 12, 3.00, 'Chapter 3', 'Sed fortuna fortis; Nec vero alia sunt quaerenda contra Carneadeam illam sententiam. Quis est tam dissimile homini. Sic enim censent, oportunitatis esse beate vivere. Ergo adhuc, quantum equidem intellego, causa non videtur fuisse mutandi nominis. Unum est sine dolore esse, alterum cum voluptate. Ita relinquet duas, de quibus etiam atque etiam consideret. Eaedem res maneant alio modo.\r\n\r\nCommoda autem et incommoda in eo genere sunt, quae praeposita et reiecta diximus; Quid turpius quam sapientis vitam ex insipientium sermone pendere? Sed ad haec, nisi molestum est, habeo quae velim. Tria genera bonorum; Hoc est dicere: Non reprehenderem asotos, si non essent asoti. Quam ob rem tandem, inquit, non satisfacit? Habent enim et bene longam et satis litigiosam disputationem. Vitae autem degendae ratio maxime quidem illis placuit quieta. Qui ita affectus, beatum esse numquam probabis;\r\n\r\nUt aliquid scire se gaudeant? Quamquam non negatis nos intellegere quid sit voluptas, sed quid ille dicat. In qua quid est boni praeter summam voluptatem, et eam sempiternam? Sed vos squalidius, illorum vides quam niteat oratio. Quoniam, si dis placet, ab Epicuro loqui discimus. Et quod est munus, quod opus sapientiae? Hos contra singulos dici est melius. Odium autem et invidiam facile vitabis. Nonne videmus quanta perturbatio rerum omnium consequatur, quanta confusio? Cur igitur easdem res, inquam, Peripateticis dicentibus verbum nullum est, quod non intellegatur?\r\n\r\nId enim volumus, id contendimus, ut officii fructus sit ipsum officium. At hoc in eo M. Huius, Lyco, oratione locuples, rebus ipsis ielunior. Sin laboramus, quis est, qui alienae modum statuat industriae? Quamvis enim depravatae non sint, pravae tamen esse possunt. Hanc ergo intuens debet institutum illud quasi signum absolvere. Si qua in iis corrigere voluit, deteriora fecit. Primum in nostrane potestate est, quid meminerimus? Ut nemo dubitet, eorum omnia officia quo spectare, quid sequi, quid fugere debeant?\r\n\r\nEaedem enim utilitates poterunt eas labefactare atque pervertere. Summum a vobis bonum voluptas dicitur. Qui-vere falsone, quaerere mittimus-dicitur oculis se privasse; Haec quo modo conveniant, non sane intellego. Refert tamen, quo modo. Negat esse eam, inquit, propter se expetendam. Itaque rursus eadem ratione, qua sum paulo ante usus, haerebitis. Quam illa ardentis amores excitaret sui! Cur tandem? Recte, inquit, intellegis.');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(4) UNSIGNED NOT NULL,
  `genre_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
(1, 'classics'),
(5, 'fantasy'),
(7, 'history'),
(4, 'horror'),
(2, 'humor'),
(6, 'poetry'),
(9, 'romance'),
(3, 'science fiction'),
(8, 'short story');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `user_id` int(7) UNSIGNED NOT NULL,
  `member_fname` varchar(30) DEFAULT NULL,
  `member_lname` varchar(30) DEFAULT NULL,
  `member_addr` tinytext,
  `member_dbirth` date DEFAULT NULL,
  `member_gender` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`user_id`, `member_fname`, `member_lname`, `member_addr`, `member_dbirth`, `member_gender`) VALUES
(3, 'Maria', 'Santos', 'Brgy. 453 Caloocan City', '1994-06-21', 'f'),
(4, 'Pedro', 'Penduko', 'Tanauan, Batangas', '1986-04-19', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `members_chapters`
--

CREATE TABLE `members_chapters` (
  `user_id` int(7) UNSIGNED NOT NULL DEFAULT '0',
  `chapter_id` int(8) UNSIGNED NOT NULL DEFAULT '0',
  `story_read` bit(1) DEFAULT b'0',
  `hearted` bit(1) DEFAULT b'0',
  `bookmarked` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members_chapters`
--

INSERT INTO `members_chapters` (`user_id`, `chapter_id`, `story_read`, `hearted`, `bookmarked`) VALUES
(3, 1, b'1', b'0', b'0'),
(3, 2, b'0', b'0', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `story_id` int(8) UNSIGNED NOT NULL,
  `story_title` tinytext NOT NULL,
  `story_author` varchar(50) DEFAULT 'anonymous',
  `story_short_desc` text,
  `story_pub_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `story_cover_filename` varchar(100) DEFAULT NULL,
  `genre_id` int(4) UNSIGNED NOT NULL,
  `user_id` int(7) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`story_id`, `story_title`, `story_author`, `story_short_desc`, `story_pub_date`, `story_cover_filename`, `genre_id`, `user_id`) VALUES
(1, 'Stupid is Forever', 'Miriam Defensor Santiago', 'Sense of humor is almost absent among politicians, but Senator Miriam Defensor Santiago is a truly talented exception. People are puzzled how she can spontaneously make them laugh in the midst of national policy crises, and of real danger to her life as a corruption fighter.', '2017-03-30 19:02:57', 'stupid-is-forever.jpg', 2, 1),
(2, 'ABNKKBSNPLAKo?! (Mga Kwentong Chalk ni Bob Ong)', 'Bob Ong', 'Bakit namamalo si Miss Uyehara?\r\nMay mga notebook bang lumilipad?\r\nBakit masakit sa ulo ang Mafhemafics?\r\nAno ang sikreto sa pagkakaibigan nila Pepe at Tagpi?\r\nBakit may mga taong nakapikit sa litrato?\r\nMasarap ba ang Africhado?\r\nSino si Tigang?\r\nBakit may mga classroom na kulang ang upuan?\r\nMasama bang mag-isip nang malalim habang naglalakad?\r\nSaan ang Ganges River sa Pilipinas?', '2001-02-01 08:00:00', 'abnkkbsnplako.jpg', 2, 6),
(3, 'Everything I Need to Know About Love I Learned From Papa Jack', 'Papa Jack', '"Love is unpredictable."\r\n\r\nEven if you''ve fallen in love a million times, you can''t claim, "Alam ko na ''yan!" And that''s because "Ang pag-ibig kapag sineryoso, nakakabobo."\r\n\r\nIt''s really complicated, but you have to remember, "Sa isang relasyon dapat masaya ka, hindi ka stressed, hindi ka pressured."\r\n\r\nBecause "Love is such a wonderful feeling!"', '2010-05-21 07:00:00', 'everything-i-need-to-know-about-love.jpg', 2, 1),
(4, 'Parang Kayo Pero Hindi', 'Noringai', 'The “parang kayo, pero hindi” stage. Others call it MU or mutual understanding. Pseudo relationships. Pseudo boyfriends. Flings. Almost like a relationship, but not quite. It is a phase where the persons involved are more than friends, but not quite lovers.', '2013-06-15 07:00:00', 'parang-kayo-pero-hindi.jpg', 2, 1),
(5, 'Ang Paboritong Libro ni Hudas', 'Bob Ong', '-Marami ka ngang alam, pero tila yata hindi mo alam ang pinaka importanteng bagay tungkol sa libro. \r\n-Ano? \r\n-Pagkatapos mong basahin ito, mamamatay ka. \r\n-HA?!?! \r\n-Surprise! \r\n-Sandali... alam ko biro lang ‘yon, diba? \r\n-Depende. \r\n-Hiram lang ba ang kopya mo ng libro tapos hindi mo na ibinalik sa may-ari? \r\n-Hindi ah! \r\n-Shoplifter ka? \r\n-Lalong hindi! ', '2003-05-09 07:00:00', 'paboritong-libro-ni-hudas.jpg', 2, 6),
(6, 'Bakit Hindi Ka Crush ng Crush Mo?', 'Ramon Bautista', 'Bakit hindi ka crush ng crush mo? Ang aklat na ito ay kailangan mo sa buhay pagkatapos mong matugunan ang food, clothing, security at iba pang nasa pinaka-ibaba ng Maslow''s Hierarchy of Needs. Bago ka umibig, at para maabot ang self-actualization, magbasa-basa ka muna. Thank you.\r\n\r\n"Walang gamot sa katangahan. Prevention lang -- wag umibig <3" -Ramon Bautista', '2012-09-03 07:00:00', 'bakit-di-ka-crush-ng-crush-mo.jpg', 2, 6),
(7, 'Akin Ka Noon, Ngayon At Kailanman (Precious Hearts Romances, #101)', 'Martha Cecilia', 'Hindi makapaniwala si Jesicca na itinali ng papa niya ang kanyang mamanahin sa taong minsan ay nanloko sa kanya. \r\n\r\n“Hindi ko alam kung paano mo nakuha ang tiwala ng papa, Nick! Buong pait niyang sinabi. “ I cannot imagine that he trusted you that much!” nanunuyang dugtong niya. ', '2003-08-19 07:00:00', 'akin-ka-noon-ngayon-at-kailanman.jpg', 9, 6),
(9, 'Sweetheart I (Sweetheart #1)', 'Martha Cecilia', 'Ikaw ang aking panaginip... ang aking magandang pag-ibig. \r\n\r\nIsang matinding crush ang umusbong sa batang puso ni Kimberly para kay Renz noong sixteen siya. Love letters and gift, waltz and song, promises and the very first kiss. All grow into a beautiful love noong eighteen siya under the stars and the moonlight. ', '2005-10-21 07:00:00', 'sweetheart-i.jpg', 9, 6),
(10, 'Diary ng Panget 2 (Diary ng Panget #2)', 'HaveYouSeenThisGirl', 'Praesent tincidunt diam lorem, eget tristique diam pretium nec. Ut porta urna magna. Duis bibendum pharetra lectus, a elementum tortor commodo id. Mauris et pretium ipsum. Praesent pellentesque nunc eu eros consequat, sit amet accumsan arcu fringilla. Mauris gravida ipsum et leo sagittis varius. Quisque eu augue metus.', '2017-04-02 00:25:17', 'diary-ng-panget-2.jpg', 9, 1),
(11, 'My Heart''s Perfect Match (Precious Hearts Romances, #3863)', 'Mariane Reign', 'She wanted to be that person who would make him smile again, sweep him off his feet and make him head over heels in love with her.\r\n\r\nMarione was searching for her Romeo. Nakita niya kay DJ Dee, a love doctor who answered all the women’s love problems, ang lahat ng qualities ng man of her dreams. He was perfect. He cured broken hearts.', '2011-06-08 07:00:00', 'my-heart-s-perfect-match.jpg', 9, 6),
(12, 'Panaginip at Bangungot: Anak ng Diyablo (Volume 1) (Tagalog Edition)', 'Serenity Belle', 'Isang ordinaryong mag-aaral si Lara na di inaasahang may natatanging kapangyarihan upang mailigtas ang mundo ng mga tao. Makikilala nya ang kanyang tanging alipin, tagapangalaga at tagapagtanggol sa katauhan ni Alexander. Subalit paano kung ang taong ito na kanyang natutunang mahalin ay minamahal din pala ng kanyang matalik na kaibigan? Nanaisin pa ba nyang maging tagapagtanggol ng mga tao o siya mismo ang sisira sa mundo ng mga ito?', '2016-06-06 07:00:00', 'panaginip-at-bangungot-anak-ng-diyablo.jpg', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(7) UNSIGNED NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_pword` varchar(40) NOT NULL,
  `user_role` varchar(10) NOT NULL DEFAULT 'regular'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pword`, `user_role`) VALUES
(1, 'mbuella', 'marlon.b.buella@gmail.com', '3f153d2c51a60c7260dd274bd6b16862b1de70e9', 'admin'),
(3, 'msantos18', 'maria.santos@pinas.ph', 'cc03b420beb76bcb29644ed8582040d87e80c543', 'regular'),
(4, 'pedro.penduko23', 'pedro.penduko@aswang.org', '8195764409baaeee203c917e3aa6c01d91c0fa2b', 'regular'),
(6, 'bahay.ni.kuya', 'bigbrother@pbb.ph', '99634d4659a2273535ed077b7bca916c8ee018c9', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`chapter_id`,`story_id`,`chapter_idx`),
  ADD KEY `story_id` (`story_id`) USING BTREE,
  ADD KEY `chapter_idx` (`chapter_idx`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`),
  ADD UNIQUE KEY `genre_name` (`genre_name`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `members_chapters`
--
ALTER TABLE `members_chapters`
  ADD PRIMARY KEY (`user_id`,`chapter_id`),
  ADD KEY `chapter_id` (`chapter_id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`story_id`),
  ADD KEY `stories_genres_pk` (`genre_id`),
  ADD KEY `stories_members_pk` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `chapter_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `story_id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_ibfk_1` FOREIGN KEY (`story_id`) REFERENCES `stories` (`story_id`) ON UPDATE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `user_pk` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `members_chapters`
--
ALTER TABLE `members_chapters`
  ADD CONSTRAINT `members_chapters_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `members` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `members_chapters_ibfk_2` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`chapter_id`) ON UPDATE CASCADE;

--
-- Constraints for table `stories`
--
ALTER TABLE `stories`
  ADD CONSTRAINT `stories_genres_pk` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `stories_members_pk` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
