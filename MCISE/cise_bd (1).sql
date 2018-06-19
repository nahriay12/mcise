-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 31 Juillet 2017 à 15:20
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cise_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `organisme`
--

CREATE TABLE `organisme` (
  `id_O` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Tel` text NOT NULL,
  `Adresse` text NOT NULL,
  `Site_Web` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Sec_Org` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `organisme`
--

INSERT INTO `organisme` (`id_O`, `Nom`, `Description`, `Email`, `Tel`, `Adresse`, `Site_Web`, `Image`, `Sec_Org`) VALUES
(1, '7AY Coworking', '7AY Coworking est un espace de bureaux partagés, dédié à l&#39;entrepreneuriat et \r\n\r\nà l&#39;initiative individuelle créative.', '', '(212) 537-65-06-31 / (212) 610-98-86-92 / (212) 661-47-00-14', 'No 15 et 16 Zone Industrielle Takadoum,Rabat, Maroc', 'www.7ay.ma', 'logo_7ay.png', '@3@5@34'),
(2, 'SECTEUR21', 'Secteur 21 est une communauté dédiée à l’univers des startups', 'contact@secteur21.com', '+212537571155', 'Villa N°3 TP, Avenue Annakhil, Hay Riad, Rabat, Maroc', 'www.secteur21.com', 'portfolio9.jpg', '@5'),
(39, 'Technopark', 'Le technopark est le fruit d’un partenariat public-privé qui apour mission d’aider à la création et au développement d’entreprises dans les domaines des TIC, des Green Tech st de l’industrie culturelle au Maroc. Le Technopark, à travers la société gestionnaire MITC , a accompagné plus de 800 entreprises innovantes sur Casablanca, plus de 80 sur Rabat et plus de 20 sociétés sur Tanger .', 'contact@technopark.ma', '+212 537 70 16 88 10', 'Rue Ghandi, Hassan Rabat-Maroc', 'www.technopark.ma', 'technopark.jpg', '@5'),
(40, 'Jokkolabs', 'Jokkolabs est un coworking  space favorisant le travail collaboratif et la résolution de problématiques locales à travers l’innovation. Le concept est né à dakar, et s’est propagé vers plusieurs villes africaines comme Bamako, Cotonou, Abidjan, Banjul , Ouagadougou, et plus récemment Casablanca . Deux centres jokkolabs également éte ouverts en France.', 'contact@jokkolabs.net', '+221 33 827 38 31', 'Route de Nouaceur, angle Rs 114 et CT 1029 Casablanca–Maroc', 'www.jokkolabs.net', 'Jokkolabs.jpg', '@5'),
(36, 'Tech Verse', 'Tech Verse est in espace de bureaux à Rabat équipé d&#39;ordinateurs, logiciels et technologies qui a pour objectif de stimuler l&#39;innovation ou Maroc.', 'hello@techverse.xyz', '+212 650 95 44 21', 'Appartment 9 5th floor Building 9 Rue Ksar Souk Hassan Rabat 10000 Maroc', 'www.techverse.xyz', 'mainorigin.png', '@5'),
(41, 'Espace bidaya', 'Incubateur social & green tech qui finance, accompagne et promeut l’entrepreneuriat , Les entrepreneurs bénéficient d’un suivi stratégique,de formations et ateliers d’intelligence, de mentorat, demise en relation et d’espace de coworking.', 'espace-bidaya@inco.co.com', '+212 5222-51361', '33 Bis, Rue Le Titien,  Casablanca 20100, Maroc', 'www.espace-bidaya.co', 'portfolio6.jpg', '@2@3'),
(42, 'MCISE-Moroccan', 'Fondé en 2012, MCISE-Moroccan Centrer for Innovation and Social Entrepreneurship-est une organisation à but non lucratif qui vise à trouver des solutions innovantes à chaque défi social au Maroc.', 'contact@mcise.og', '+212 5377-34295', 'Derb Guessous, Residence Aziza 5, Bab El Had, Rabat, Maroc', 'www.mcise.org', 'cise.jpg', '@2@3'),
(43, 'afem', 'Maroc Pionnières est un programme d’accompagnement des entrepreneurs femmes, proposant un suivi personnalisé, un accès à un réseau professionnel et à des opportunités d’affaires, ainsi qu’à des espaces de travail offerts pendant 18 mois.', 'infos.afem@gmail.com', '+212 522 50 10 61', 'Technopark, route de Nouaceur N°132, Casablanca - Maroc', 'http://www.afem.ma', 'MarocP.png', '@2'),
(44, 'New Work Lab', 'La mission de New Work Lab est de rassembler les entrepreneurs pour leur apporter les outils, la formation, le réseau et l’accompagnement  dont ils ont besoin pour construire leurs startups. NWL propose un programme d’accompagnement intensif pendant 4 mois en entrepreunariat avec OCP qu’ils puissent suivre gratuitement ce programme. Le réseu organise des rencontres et ateliers, des compititions « Pitch Lab », des ateliers entrepreneurs et des ateliers Tech et Digital.', 'hello@newworklab.com', '+212 5222-73274', '17, rue najib Mahfoud, quartier Gauthier, Casablanca, Maroc', 'www.newworklab.com', 'portfolio8.jpg', '@2'),
(45, 'Endeavor', 'Lancé en partenariat avec USAID pour promouvoir l’entrepreneuriat des jeunes, Endeavor a sélectionné 131 entrepreneurs représentants 73 entreprises dans la région MENA et leur offre du mentorat, l’accés aux réseaux et les initie aux sources de financement. Plusieurs entrepreneurs marocains ont été sélectionnés dans le cadre de ce programme, et ont bénéficié du réseau international qu’offre Endeavor.', '', '+212 5223-68282', 'Rue bab al irfane  résidence okad 12, Apt No 6 Casablanca 20050, Maroc', 'ww.endeavor.org/location/morocco', 'portfolio3.jpg', '@2'),
(46, 'Eiréné4Impact', 'C’est une organisation de Venture Philanthropy qui propose des services aussi bien pour les entrepreneurs à fort impact (formation, incubation,amorçage avec 500 KMAD à 1500KMAD d’investissement ) que pour les entreprises & ONG (workshops) et pour les écosystèmes (sensibilisation, recherche & analyses).', 'mouna.b@eirene.ma', '+212 522 52 60 18', 'Bureau N° 400, Technopark, Casablanca', 'www.impact-lab.co', 'eirene4impact.jpg', '@2'),
(47, 'CEED Morocco', 'Membre du réseau international CEED,CEED Morocco a été lancé en 2013 en tant que premier centre CEED en Afrique. il accompagne les entreprises en phase de croissance sur le volet commercial, le développement d’un réseau d’affaires et l’amélioration du positionnement des entreprises sur le marché. Le centre propose aux entrepreneurs des programmes  de formation, de networking et de mentorat.', '', '+212 522 22 06 45', '49 Avenue 2 Mars, 3ème étage Bureau No 14 Casablanca', 'www.ceed-morocco.org', 'portfolio10.jpg', '@2'),
(48, 'Startup Your Life', 'Organisation à but non lucratif qui met en relation les entrepreneurs innovants leur permettant de créer des synergies entre leurs activités. Startup Your Life propose du mentorat, des formations et de la facilitation de l’accès au financement aussi bien au Maroc qu’à l’international.', 'team@startupyourlife.org', '', '', 'www.startupyourlife.org', 'Startup-Your-Life.png', '@2'),
(49, 'StartUp Maroc', 'Cette organisation à but non lucratif s’engage à promouvoir la culture entrepreneuriale marocaine. Ses principales missions consistent en l’éducation de la nouvelle génération des jeunes entrepreneurs, le solution de la croissance des startups et la diffusion de la culture de l’innovation au niveau national et ce, via l’organisation de différentes compétitions et programmes tels que startUp Maroc Roadshow , starUp Maroc Championship et StarUp Africa Summit.', '', '+212 537 20 53 07', '7 Rue Jabal Toubkal, 3 éme étage, Appt No 8, Agdal 10000 Rabat', 'www.startupmaroc.org', 'logo-startup-maroc.png', '@2'),
(50, 'enactus', 'Créées en 2013, Enactus Maroc est membre d’une ONG internationale qui œuvre dans le domaine de l’entrepreneuriat social estudiantin.  C’est  une communauté d’étudiants et leaders du monde académique qui s’engage à utiliser l’entrepreneuriat pour un développement durable. Plus de 200 projets ont été menés à travers cette organisation avec la participation de plus 4000 étudiants.', 'morocco@enactus.org', '+ 212 537 76 09 82', 'N R701, Technopark -10.Rue Ghandi, Hassan Rabat – Maroc', 'www.enactus-morocco.org', 'portfolio5.jpg', '@2'),
(51, 'INJAZ Al-Maghrib', 'Créée en 2007, l’association INJAZ Al-Maghrib mobilise le secteur privé auprès de la jeunesse pour contribuer à l’émergence d’une nouvelle génération d’entrepreneurs, et ce, à travers des programmes de création de juniors entreprises. L’objectif est de consolider les liens entre l’enseignement et  le monde de l’entreprise, susciter auprès des jeunes l’esprit d’initiative et d’entreprise tout en stimulant leur création.', 'injaz@injaz-morocco.org', '+212 529 01 15 15/14', '52 avenue hassan II - 4ème étage Casablanca, 20 000 - Maroc', 'www.injaz-morocco.org', 'AssociationInjaz.jpg', '@2'),
(52, 'INNOVATION', 'Lancée en 2009, cette initiative avait pour objet de faire de l’innovation un levier clé de la compétitivité des dépôts de propriété industrielle et intellectuelle à travers la promotion des projets innovants. Le centre proposait deux programmes selon les besoins de chaque projet : Intilak qui couvre jusqu’à 90% des dépenses liées au développement du projet (dans la limite de 1 million de dirhams) et Tatwir qui s’adresse à des projets d’entreprises qui ont plus de 2 ans d’existence, et couvre 50% des dépenses R&D (dans la limite de 4 millions de dirhams). A l’heure actuelle le Centre n’existe plus. Il a été intégré au sein de l’ANPME.', '', '+212 522 21 96 23', 'Technopark Casablanca 20000 Casablanca', 'www.cmi.net.ma', 'Innovation_logo.jpg', '@1'),
(53, 'Réseau Entreprendre', 'Le Réseau Entreprendre Maroc  est un réseau de chefs ‘entreprises qui accompagnent les nouveaux entrepreneurs afin de faire de leur entreprise une PME apte à se développer. L’accompagnement comprend une aide financière délivrée à titre personnel allant de 50000 à100000 MAD. Le réseau compte 154 chefs d’entreprises membres et apu accompagner 52 lauréats avec plus de 4 MDH de prêts d’honneur octroyés et plus de 200 emplois créés.', 'ebroumm@reseau-entreprendre.org', '+212 522 87 11 17', 'Bureau 133, Technopark, Route de Nouaceur, Casablanca – Maroc', 'www.reseau-entreprendre-maroc.org', 'R_E_logo.jpg', '@1'),
(54, 'Maroc Numeric Fund', 'Maroc Numeric Fund est un fonds. D’investissement doté de 100 millions de DH et dédié aux startups technologiques. Il est détenu à parts égales par l’Etat marocain (via MITC, la société gestionnaire des technoparks), CDG Développement, Attijariwafa Bank, BMCE et BCP. Le fonds a déjà investi en ligne,et de médias digitaux et les greentechs.', 'contact@mitccapital.ma', '+212 522 50 30 33', 'Maroc Numeric Fund S.A.S , Technopark, Casablanca, 20153', 'www.mnf.ma', 'Maroc_Numeric_Fund.png', '@1'),
(55, 'MNF Angels', 'Fruit d’un partenariat entre MITC Capital et OCPEN,MNF Angels est un club de business angels, lancé en juillet 2016,qui a pour vocation désélectionner des projets à forts potentiel de croissance et d’accompagner leurs porteurs dans la levée de fonds auprès d’une douzaine de business angels, membres du club à date d’aujourd’hui. En plus de l’accès au financement, les entrepreneurs bénéficient également des compétences, de l’expérience  et du réseau des membres.', 'mnfangels@mitccapital.ma', '+212 522 50 30 33', 'Maroc Numeric Fund S.A.S , Technopark, Casablanca, 20153', 'www.mnf.ma', 'MNF.png', '@1'),
(56, 'Outlierz', 'Outlierz est un fonds d’investissement de capital amorçage basé à Casablanca et visant des entreprises  africaines, au stade pre-seed et  seed . Il investit des tickets de 500 KDH à 2 MDH.', 'info@outlierz.co', '', '20 Avenue Ahmed Charci, Casablanca 20250, Maroc', 'www.outlierz.co', 'outlierz.png', '@1');

-- --------------------------------------------------------

--
-- Structure de la table `org_secteur`
--

CREATE TABLE `org_secteur` (
  `Id_S` int(11) NOT NULL,
  `id_O` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `org_secteur`
--

INSERT INTO `org_secteur` (`Id_S`, `id_O`) VALUES
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 62),
(2, 35),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(2, 48),
(2, 49),
(2, 50),
(2, 51),
(2, 57),
(2, 58),
(2, 62),
(3, 1),
(3, 41),
(3, 42),
(3, 57),
(3, 58),
(3, 59),
(3, 60),
(3, 61),
(3, 62),
(4, 35),
(4, 59),
(4, 60),
(4, 61),
(5, 1),
(5, 2),
(5, 36),
(5, 39),
(5, 40),
(5, 59),
(34, 1);

-- --------------------------------------------------------

--
-- Structure de la table `secteur`
--

CREATE TABLE `secteur` (
  `Id_S` int(11) NOT NULL,
  `Nom` varchar(200) NOT NULL,
  `filter` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `secteur`
--

INSERT INTO `secteur` (`Id_S`, `Nom`, `filter`) VALUES
(1, 'Financement', 'financement'),
(2, 'Accompagnement & Incubation', 'ccompagnement_incubation'),
(3, 'coworking space', 'coworkingspace'),
(4, 'Média & Presse', 'media_presse'),
(5, 'Hébergement', 'hebergement');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_U` int(11) NOT NULL,
  `Login` varchar(100) NOT NULL,
  `Passe` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_U`, `Login`, `Passe`) VALUES
(1, 'M_Cise', 'M_Cise@2017');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `organisme`
--
ALTER TABLE `organisme`
  ADD PRIMARY KEY (`id_O`);

--
-- Index pour la table `org_secteur`
--
ALTER TABLE `org_secteur`
  ADD PRIMARY KEY (`Id_S`,`id_O`);

--
-- Index pour la table `secteur`
--
ALTER TABLE `secteur`
  ADD PRIMARY KEY (`Id_S`),
  ADD UNIQUE KEY `Nom` (`Nom`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_U`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `organisme`
--
ALTER TABLE `organisme`
  MODIFY `id_O` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT pour la table `secteur`
--
ALTER TABLE `secteur`
  MODIFY `Id_S` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_U` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
