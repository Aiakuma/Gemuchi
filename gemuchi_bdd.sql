-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 28 jan. 2022 à 12:11
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gemuchi_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(16, 'Plateforme'),
(17, 'Stratégie'),
(18, 'Puzzle'),
(19, 'Combat'),
(20, 'Beat them up'),
(21, 'Shoot them up'),
(22, 'FPS'),
(23, 'Jeu De Role'),
(24, 'JRPG'),
(25, 'Aventure'),
(26, 'Visual Novel'),
(27, 'Gestion'),
(28, 'Voxel'),
(29, 'Infiltration'),
(30, 'Bac à Sable');

-- --------------------------------------------------------

--
-- Structure de la table `console`
--

DROP TABLE IF EXISTS `console`;
CREATE TABLE IF NOT EXISTS `console` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `console`
--

INSERT INTO `console` (`id`, `name`) VALUES
(7, 'Playstation'),
(8, 'Xbox'),
(9, 'Switch'),
(10, 'PC'),
(11, 'DS'),
(12, '3DS');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220123150747', '2022-01-23 15:10:19', 517),
('DoctrineMigrations\\Version20220126104755', '2022-01-26 10:49:05', 382);

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `year` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_232B318C26ED0855` (`note_id`),
  UNIQUE KEY `UNIQ_232B318C1E5D0459` (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`id`, `note_id`, `test_id`, `name`, `price`, `year`, `author`, `resume`, `content`, `picture`) VALUES
(7, 7, 7, 'Ace Attorney Trilogy', '2000', 2018, 'Capcom', 'Le célèbre avocat du barreau est de retour ! Phoenix Wright : Ace Attorney Trilogy est un jeu d\'aventure sur 3DS.', 'Le célèbre avocat du barreau est de retour ! Disponible sur l\'eShop depuis 2014 sur Nintendo 3DS, la trilogie originale de Phoenix Wright : Ace Attorney Trilogy, réunissant pas moins de 14 affaires, débarque sur les consoles actuelles pour un maximum de confort. S’appuyant sur les trois premiers volets, cette itération HD reprend tous les poncifs de la série tout en intégrant quelques éléments inédits. Unique en son genre, la saga de Capcom s’offre une adaptation de qualité avec cette édition.', 'https://s3.gaming-cdn.com/images/products/4331/orig/jeu-steam-phoenix-wright-ace-attorney-trilogy-cover.jpg'),
(8, 8, 8, 'Batman Arkham Asylum', '2000', 2009, 'Rocksteady Studio', 'Quelque chose se prépare dans l\'Asile d\'Arkham. Arrêtez le Joker avant qu\'il soit trop tard.', 'Batman : Arkham Asylum sur PS3 est un jeu d\'action sombre, très sombre, mettant en scène le justicier issu de DC Comics. Le titre place le chevalier noir face au Joker, aidé d\'autres méchants, dans les couloirs sombres de l\'asile d\'Arkham. Mettez fin à leurs agissements en combattant comme un diable et en vous servant de votre équipement.', 'https://s1.gaming-cdn.com/images/products/159/orig/jeu-steam-batman-arkham-asylum-goty-cover.jpg'),
(9, 9, 9, 'Battletech', '4000', 2018, 'Harebrained Schemes', 'Menez votre lance de mecha géant mercenaire et faites chutez l\'usurpateur.', 'Battletech est un tactical RPG dans lequel le joueur prend part à des combats de mechas. Le jeu se déroule en l\'an 3025 et l\'humanité se retrouve piégée dans un cycle de perpétuelle guerre. Les soldats humains ont quitté le champ de bataille, remplacés par des robots géants appelés BattleMechs.', 'https://image.jeuxvideo.com/medias/152337/1523372075-6243-jaquette-avant.jpg'),
(10, 10, 10, 'Doom 2016', '2000', 2016, 'Id Software', 'Shooter nerveux à l\'Esthétique Métal. Vous serez seul et ils seront Légions.', 'Doom est un reboot de la licence culte d\'id Software allant puiser dans le style des deux premiers opus. Vous y incarnez ainsi un Marine obligé de repousser une invasion de démons sur Mars, à l\'aide d\'un arsenal allant du fusil à pompe au lance-roquette.', 'https://image.jeuxvideo.com/medias-sm/157684/1576837691-387-jaquette-avant.jpg'),
(11, 11, 11, 'Fallout 4', '4000', 2015, 'Bethesda Softwork', 'Explorer un Boston ravagé par la guerre nucléaire à la recherche de votre fils.', 'Fallout 4 est un RPG à la première personne se déroulant dans un univers post-apocalyptique. Dans un monde dévasté par les bombes, vous incarnez un personnage solitaire sortant d\'un abri anti-atomique qui doit se faire sa place dans la ville de Boston et de ses environs.', 'https://image.jeuxvideo.com/medias-sm/143533/1435331352-4036-jaquette-avant.jpg'),
(12, 12, 12, 'Metal Gear Rising : Revengeance', '2000', 2013, 'Platinum Game', 'Venez à bout de cyborgs terroriste dans un beat them all cyberpunk exigeant.', 'Metal Gear Rising : Revengeance sur Playstation 3 se présente comme une nouvelle expérience de jeu pour la série Metal Gear Solid. Vous incarnez Raiden, le héros du deuxième opus, dans une nouvelle histoire tournant autour de sa personne.', 'https://image.jeuxvideo.com/images-sm/jaquettes/00031928/jaquette-metal-gear-rising-revengeance-playstation-3-ps3-cover-avant-g-1357224486.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `game_category`
--

DROP TABLE IF EXISTS `game_category`;
CREATE TABLE IF NOT EXISTS `game_category` (
  `game_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`game_id`,`category_id`),
  KEY `IDX_AD08E6E7E48FD905` (`game_id`),
  KEY `IDX_AD08E6E712469DE2` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `game_category`
--

INSERT INTO `game_category` (`game_id`, `category_id`) VALUES
(7, 26),
(8, 20),
(9, 17),
(10, 22),
(11, 23),
(12, 20);

-- --------------------------------------------------------

--
-- Structure de la table `game_console`
--

DROP TABLE IF EXISTS `game_console`;
CREATE TABLE IF NOT EXISTS `game_console` (
  `game_id` int(11) NOT NULL,
  `console_id` int(11) NOT NULL,
  PRIMARY KEY (`game_id`,`console_id`),
  KEY `IDX_A3C1B099E48FD905` (`game_id`),
  KEY `IDX_A3C1B09972F9DD9F` (`console_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `game_console`
--

INSERT INTO `game_console` (`game_id`, `console_id`) VALUES
(7, 7),
(7, 8),
(7, 9),
(7, 10),
(8, 7),
(8, 8),
(8, 10),
(9, 8),
(9, 10),
(10, 7),
(10, 8),
(10, 9),
(10, 10),
(11, 7),
(11, 8),
(11, 10),
(12, 7),
(12, 8),
(12, 10);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `musique` double NOT NULL,
  `absencebug` double NOT NULL,
  `tempschargement` double NOT NULL,
  `bruitage` double NOT NULL,
  `originalite` double NOT NULL,
  `rendementhoraire` double NOT NULL,
  `phasejeu` double NOT NULL,
  `chargeemotionnelle` double NOT NULL,
  `narration` double NOT NULL,
  `pertinencepartipris` double NOT NULL,
  `diversitenuance` double NOT NULL,
  `gestiondifficulte` double NOT NULL,
  `efficaciteinterface` double NOT NULL,
  `disponibilite` double NOT NULL,
  `messageautocritique` double NOT NULL,
  `integrationmessage` double NOT NULL,
  `coupdecoeur` double NOT NULL,
  `synergie` double NOT NULL,
  `ressourcemateriel` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `musique`, `absencebug`, `tempschargement`, `bruitage`, `originalite`, `rendementhoraire`, `phasejeu`, `chargeemotionnelle`, `narration`, `pertinencepartipris`, `diversitenuance`, `gestiondifficulte`, `efficaciteinterface`, `disponibilite`, `messageautocritique`, `integrationmessage`, `coupdecoeur`, `synergie`, `ressourcemateriel`) VALUES
(7, 1, 1, 1, 0.5, 0.5, 1, 0.5, 1, 1, 1, 1, 0.5, 1, 1, 1, 1, 2, 1, 1),
(8, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1),
(9, 1, 0, 0, 0.5, 0, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 0, 0, 0, 0),
(10, 0.5, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1),
(11, 1, 0, 0.5, 1, 0, 1, 1, 1, 1, 0.5, 0.5, 0.5, 1, 1, 1, 1, 1, 1, 0.5),
(12, 1, 1, 1, 0.5, 1, 1, 0.5, 0, 1, 0.5, 0.5, 0, 0, 1, 1, 1, 2, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `son` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gameplay` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rythme` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `scenario` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `graphisme` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `accessibilite` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponibilite` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ouverturereflexion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id`, `son`, `code`, `gameplay`, `rythme`, `scenario`, `graphisme`, `accessibilite`, `disponibilite`, `ouverturereflexion`) VALUES
(7, 'La musique de la saga ACE ATTORNEY est reconnue comme un classique du jeu vidéo, notamment par l’exploit de créer des mélodies complexe avec les limitations des consoles portables de l’époque. Sa réédition sur consoles moderne à fait le choix de garder cette sonorité volontairement électro-synthétique, parfaitement cohérente avec l’ambiance des années 80-90 où se déroule l’évènement des films.\r\n                Chaque personnage possède un thème marquant définissant parfaitement bien son persona. \r\n                Les bruitages n’ont pas beaucoup d’importance dans le jeu et se fond discrets… Sauf pour un effet qui est devenu mythique dans la culture populaire : l’Objection ! En effet les duels verbaux lors des procès sont ponctués de ses attaques criées entre l’Avocat de la Défense et le Procureur. Rien de révolutionnaire mais terriblement efficace.', 'AA : Trilogy ne souffre d’aucun bug majeur, pas même un bug visuel. C’est un jeu solide. Aucun temps de chargement n’est ressenti sinon une petite seconde lors d’une sauvegarde ou du chargement d’une sauvegarde.', 'AA : Trilogy est un Visual Novel, à comprendre un jeu où l’attention a été porté majoritaitement sur les graphismes et les textes, omniprésent comme un Manga ou une Bande-dessinée interactive. Sur cette « planche de pain » vidéoludique, ont été ajouté la gestion d’un inventaire sous la forme du dossier de l’enquête où vous recueillerez preuves et profils des suspects. Le cœur du gameplay se passe pendant les procès, où pendant l’écoute des différends témoins ammené par l’accusation, il vous faudra trouver une contradiction entre vos preuves accumulées et la déclaration sous serment du témoin.', 'Le jeu est une compilation des trois premiers épisodes de la saga, contenant en totalité une douzaine d’enquête. Si le premier procès se termine en 45min si l’on prête peu attention à chaque dialogue, les autres affaires prendront plusieurs heures (et plusieurs jours intra-diégétiques) pour être terminée. Le seul bémol étant que comme pour chaque jeu d’enquête, la rejouabilité est limité, puisque chaque affaire est mémorable et donc la découverte n’est plus possible passée le premier jeu. On est en cela proche d’une expérience vidéoludique qui est difficilement répétable.\r\n                En plus des phases d’enquête et de procès, une mécaniques lié au surnaturel, via le magatama ou l’utilisation de techniques de la police scientifique diversifieront le pannel d’option. Cependant les enquêtes dans cette triologie sont difficiles à conclure et vous risquer assez vite de tourner en rond sans savoir quoi faire.', 'Vous suivez l’histoire de Phoenix Wright, avocat de la défense ayant fraîchement acquis son diplôme et travaillant dans l’agence « Fey & Co. ». A peine après avoir fait vos preuves, votre patron a été assassiné et sa petite sœur accusée à tort. Voici le début d’une longue aventure pleine de rebondissement où le pinnacle s’atteindra lors d’une confrontation autour du clan Fey, ancien clan de mediums capable de communiquer avec l’au-delà.\r\n                Chaque enquête à la prémisse littéralement incroyable devra être dénouée dans un contexte comique avant d’en trouver une cause tragique. Autant dire que le spectre émotionnel est très large et l’on rit d’autant plus pour oublier les larmes. Tout cela porté par la musique, les personnages et même les lieux.', 'Dans un esthétique manga propre au Visual Novel, les lieux sont bardés de détails agréables à découvrir et les personnages bariolés ont suffisamment d’animation pour rendre leurs discours dynamique et véhiculer leur état d’esprit. Prérequis très important lors d’un jeu à base d’enquête policière.', 'La difficulté n’est pas réglable, cependant la courbe de progression de la difficulté est parfaitement maitrisé, on déplorera cependant que sur l’épisode Justice for All, et sur certaines affaires de Trials & Tribulations, l’écart de compréhension de l’affaire entre le joueur et ce qu’anticipe le jeu peut être tel que le Joueur peut se retrouver bloquer à ne pas comprendre ce qu’il doit faire, pensant certains éléments de l’affaire en cours comme acquis. Un problème récurrent plus ou moins bien compensé au fil des jeux. Pour y remédier, il n’est alors pas inhabituel d’utiliser la technique de sauvegarder au moment d’un point tournant où le joueur peut se mettre à douter de ce que le jeu peut faire paraitre comme évident.', 'Le jeu fait 2 Giga-octets pour 20€, Donc en terme de prix et d’installation le jeu être acquis sans débauche de moyens et de matériel. Le Jeu ne nécessite aucune connexion internet et ne possède aucune DRM, de quoi facilement lancer son jeu le temps d’une pause-café.', 'Ace Attorney est une réflexion sur la justice, balance entre Conviction et Fait. Vous avez besoin de fait pour étayer vos convictions, mais votre conviction ne doit pas nier les faits. Un équilibre qui représente bien l’exercice de la loi et dont vous êtes partie prenante. La seule chose qui doit compter dans un tribunal est la poursuite de la vérité, au-delà de toute autre considération humaine.\r\n                Chaque enquête, sans parler de l’intrigue de fond autour de Phoenix Wright, vous rappellera ce mantra. Car Ace Attorney a mis le doigt sur quelque chose de fondamental. Tout le jeu vous demande de dénouer les mensonges de bonne foi ou éhonté. De croire en l’innocence de ceux que tout accuse pour ne pas fermer la porte de la réflexion trop vite, pour que l’évidence supposée ne supplante pas la réalité des faits.'),
(8, 'L’univers musical de Batman est proche de celle de la série animée, un parti pris bien trouvé car les bruitages volontairement amplifiés pour être gratifiant deviennent cohérent. Un mot également sur le doublage avec les voix officielles du dessin animé. Le silence également est mis en valeur, discret, il permet de souligner les moments de tension.', 'Batman – Arkham Asylum fonctionne très bien, aucun problème. Les temps de chargement sont invisibles, utilisant le principe efficace du couloir à deux portes pour charger sans briser l’immersion. Au pire, au changement intérieur-extérieur, un fondu au noir de quelque seconde vous attend.', 'Le gameplay des jeux de la série Arkham est très simple, c’est un Beat Them Up 3D, avec un bouton pour frapper, un bouton pour parer. Le jeu est avant tout un jeu d’infiltration et de puzzle, vous frayant un chemin dans l’asile à l’aide de gadget. Et évidemment, il y aura.', 'Le jeu se termine en une vingtaine d’heure. Fait d’exploration, de combat, de puzzle et d’infiltration. C’est un couloir qui maitrise sa narration, et le seul bémol vient que le boss optionnel, l’Homme-Mystère, ne peut être combattu que si l’ensemble de ses trophées disséminé partout dans le jeu et son obtenu. Un processus lent et rébarbatif dont peu de joueur sauf les complétionnistes s’acquitteront entièrement', 'Le scénario du jeu est une aventure classique de Batman. Le Joker, méchant principal, utilise des méchants secondaires comme Killer Croc, Harley Quinn ou l’Epouvantail pour accomplir un acte malveillant, ici créer un sérum de super-soldat à partir du VENOM de Bane.\r\n                Toute la durée du jeu, les motivations, le contexte et les conséquences de ce plan sont distillé zone par zone, offrant une enquête policière digne du héros chauve-souris. Cependant si l’esprit est appâté le cœur ne l’est pas, et seule la tension de certaine phase de gameplay provoque des réactions émotionnelles.', 'Arkham est un asile ou les vestiges gothiques se sont vus greffée des laboratoires et installation médicale vieilli par le temps et le désintérêt. Cette île de fous exerce une pression sur les gens et parfois on sent presque une inspiration horrifique.', 'La difficulté n’est pas modulable et elle est parfaitement maitrisée, chaque situation n’est pas difficile à résoudre techniquement, mais demandera de la réflexion, et même les combat demanderont de choisir l’ordre dans lequel vos cibles doivent être vaincu pour le rendre plus facile.', 'Le jeu fait 70 Giga-octets pour un prix dérisoire de 20€, il est donc facilement accessible à toutes les bourses. Cependant il faudra un ordinateur possédant à minima une carte graphique dédiée aux jeux et un bon processeur. Le jeu vieillissant, peu d’ordinateur n’auront pas les composants requis pour faire tourner le jeu en configuration minimale. Le seul bémol est le fait qu’une bonne connexion internet sera nécessaire pour installer le jeu… où quelques nuits de disponibles. Le cœur du jeu, à savoir son mode campagne, est disponible sans connexion internet, de même que sa DRM est totalement invisible et n’empêche pas le bon fonctionnement du jeu ainsi que de son support en général. De plus les mises à jour son peu fréquente ce qui évite les téléchargements intempestifs en début de jeu.', 'Il est impossible d’identifier clairement une réflexion artistique sur le jeu.'),
(9, 'La Musique de Battletech est signée Jhon Everist, et son travail est à féliciter. En effet c’est son orchestre qui donne la puissance de l’épopée mythique qu’est l’histoire de Dame Arano. Entre Electro et Symphonique, la musique de Battletech accompagne avec brio le combat de titans de métal que constitue le jeu. D’ailleurs, même si ce n’est pas toujours le cas, il est à noté que les humains ont droit à un orchestre classique et les machines des musiques avec une forte tendance Electronique.\r\n                Les bruitages sont ceux d’un jeux de stratégie, ils sont clair et identifiable mais manque d’impact. Ils sont peu marquant et n’ont donc que peu d’intérêt.\r\n                ', 'Battletech fait parti de ces jeux qui vivent sans vous. Il vous est impossible de savoir lorsque le jeu charge ou lorsque le jeu plante, et ce peu importe la qualité de votre matériel. Vous allez donc régulièrement souffrir d’artefacts visuels, de temps de chargement très long à chaque début de mission (et pire si vous sauvegarder pendant une mission et voulez la charger après). En bref, il faudra vous armer de patience pour jouer. Et je ne parle pas des problèmes régulier de Multijoueur.', 'Ce que tout le monde a pris pour l’adaptation vidéoludique du jeu de stratégie sur table est une belle déception. Pourquoi ? Le jeu de plateau décrit des batailles à grandes échelles ou lances de Battlemechs, infanterie et véhicules se combinent et s’affronte sur de longue batailles. Niveau personnalisation, il possible de créer ex-nihilo ses propres unités. Etc…\r\n                Evidemment il est injuste de considérer une franchise qui possède 4 livres de règles face à un jeune jeu-vidéo d’un studio secondaire de Paradox. Cependant sans parler du contenu finalement limité, le fait de ne pouvoir aligner que 4 Mechs contre des dizaines d’ennemi va balayer toute forme de stratégie. La meilleur stratégie c’est d’avoir les plus lourd mechs possible et de ne jamais changer de pilotes pour avoir une lance d’élite, et deux trois remplaçant en cas de blessures graves. En somme, toute les mécaniques de gestion du jeu s’effondrent dès le premier tiers de la campagne solo.\r\n                En ce qui concerne les combats, c’est du XCOM simplifié, proche du jeu de plateau. Pas grand-chose à en dire si ce n’est que vous ne ferez pas de longues sessions de jeu, les temps de chargement et la répétition des combats vous ennuieront très vite.\r\n                ', 'Il n’y a que deux phases de gameplay dans Battletech, la gestion de votre vaisseau, son équipage et son matériel, et les combat à la surface des planètes. Votre principale préoccupation c’est de vous éloigner de la banqueroute le plus longtemps possible tout en allant de mission en mission.\r\n                La petite campagne solo est rallongé par les longues périodes où vous devrez aligner contrat sur contrat pour améliorer votre Lance, car les missions de campagnes si elles payent bien sont très exigeantes. Point positif, avec tous les Battlemechs à tester et comparer, si vous voulez tous les essayer, vous en aurez pour un moment.\r\n                ', 'Le scénario de Battletech est un de ses plus grand point fort. C’est une histoire simple d’une princesse cherchant à reprendre son trône usurpé par son oncle. Une histoire d’autant plus appréciable qu’elle sert à faire une parabole sur la chute de la Star League (évennement le plus important de l’histoire de Battletech, avant l’arrivée des Clans). Mais surtout l’empathie pour cette jeune régente découvrant la vérité sur le poids du pouvoir est immédiat et nous voyons l’histoire à travers ses réflexions et ses questionnement. Simple mais terriblement efficace.', 'Le jeu est constitué de modèle 3D tournant sur Unity lors des combats, et des illustrations lors des cinématiques. Les environnements sont variés, mais à part leur intérêt stratégique, on ressent peu de chose, notamment parce que la caméra est loin des évennements. Les Battlemechs sont proche de ceux de la saga Mechwarrior, et en font de véritables machines véhiculaire que des goldorak des illustrations officielles du jeu de plateau. Ce qui est appréciable. ', 'Le jeu, même en difficulté simplifié, est punitif. Le problème que personne n’as l’air d’avoir relevé lors du développement c’est que vous vous battez avec les mêmes armes que votre adversaire. Sauf que vous êtes 4 maximum et que eux c’est plusieurs lances de mechs avec parfois renfort de tourelles et de véhicules. Donc vous devez avoir une longueur d’avance sur votre adversaire en vous dotant des mechs les plus lourd disponible afin d’encaisser les coups suffisamment longtemps. A titre de comparaison du même style de jeu, un seul soldat XCOM vaut plusieurs aliens.', 'Le jeu fait une trentaine de Giga-octet pour 40€, en configuration minimum il faudra un bon processeur et une bonne carte graphique. Le cœur du jeu, à savoir son mode campagne, est disponible sans connexion internet, de même que sa DRM est totalement invisible et n’empêche pas le bon fonctionnement du jeu ainsi que de son support en général. De plus les mises à jour son peu fréquente ce qui évite les téléchargements intempestif en début de jeu.', 'Le jeu est porté par l’histoire de Dame Arano, une reine bercée par les histoires chevaleresque de pilote de Battlemech que lui ont raconté son père. Alors qu’elle affronte les réalités de la guerre pour reprendre son trône, elle vous engage, vous, mercenaire pour accomplir les missions les plus difficiles de sa campagne. Votre histoire deviendra un mythe, votre mythe deviendra une légende. Au final peu importe qui vous étiez, ce que vous avez fait et pourquoi vous l’avez fait. Le temps effacera le moindre détail de votre vie et deviendra une histoire chevaleresque d’une bande mercenaire, pilote de Battlemech. Car l’important n’est pas la vérité qui se cache derrière vos actions, mais les histoires qu’on en tire. Les histoires qui inspirent les peuples.'),
(10, 'DOOM est à l’univers Metal ce que Rockman (Megaman en occident) est au Rock. Donc, le choix de la musique est pertinent. Le style du jeu demandant un haut niveau de concentration, la musique est fatalement un simple arrière-plan, une musique d’ambiance. Cependant, en termes de gradation dans la violence, c’est un pari réussi et votre soif de sang n’en sera que décuplé par la puissance d’un orchestre impie. Dans un jeu mettant la violence et le gore en avant, il se doit d’avoir des bruitages de tripes convaincant. Et c’est réussi. Le bruit des armes est un peu léger mais peut s’expliquer par le manque de recul visuel. L’impact a été sacrifié pour le Gamefeel. Côté diversifié, chaque objet, chaque ennemi, chaque compétence possède une gamme de son pour que vous puissiez identifier et comprendre les actions sans voir.', 'Doom 2016 ne souffre d’aucun bug majeur, pas même un bug visuel. C’est un jeu solide. Il n’y a qu’un seul temps de chargement lors du lancement d’un niveau entier et un autre lors du démarrage d’un défi de rune. Ils sont relativement cours et en général vous rappel des éléments du scénario.', 'Le gameplay de Doom, qui a été amplifié dans sa suite Doom Eternal, c’est un FPS d’arcade basé sur la mobilité et les réflexes du joueur avec une gestion des trois ressources que sont la vie, l’armure et les munitions. Des pouvoirs temporaires permettent de générer encore plus de carnage et le seul moyen de rester en vie est de tuer ses adversaires. En bref, Doom est le FPS des FPS, poussant sa logique jusqu’au bout.', 'Le jeu possède une douzaine de niveau, chaque niveaux se fini en une demi-heure à une heure de jeu est autant fait de combat que d’exploration et les épreuves runiques pimentent un peu le tout en permettant de couper un niveau pour quelques minute. Une dizaine d’armes différente avec pour la plupart deux spécialisations Les pouvoirs permettent d’altérer légèrement le gameplay mais c’est anecdotique. Si théoriquement en une grosse quinzaine d’heure vous terminez le jeu, pour obtenir tous les collectibles, réussir chaque défi, maitriser chaque module d’arme, vous pouvez multiplier par deux voirs trois ce temps, qui fait qu’il vous faudra bien 50h pour espérer terminer le mode histoire… et ce en difficulté normale.', 'Le scénario du jeu est bien présent mais volontairement effacé et la narration est simple. Vous êtes une machine de guerre implacable et muette. Aucun attermoiement n’est possible. Cependant ce reboot de la série à l’un des univers de SF les mieux travaillé avec une vrai cohérrence et une histoire originale pour peu que l’on lise les entrée du codex glanée au fil des missions.', 'Tout DOOM est inspiré de l’esthétique de la musique Metal : des mondes désolés des démons, de la technologie malveillante, des sociétés qui crachent leur message sans se rendre compte de l’odeur nauséabonde de leurs idées. L’enfer est d’un côté du portail mais lequel ?', 'La difficulté de « Bleusaille » à « Ultracauchemar » avec en bonus un mode « une vie seulement » va largement permettre au meilleur comme au plus mauvais de profiter de l’ensemble du jeu tout en promettant un défi de taille pour les joueurs qui aime souffrir. En ce qui concerne l’interface, tout est absolument limpide, la prise d’information est intuitive.', 'Le jeu fait 70 Giga-octets pour un prix dérisoire de 20€, il est donc facilement accessible à toute les bourses. Cependant il faudra un ordinateur possédant à minima une carte graphique dédiée aux jeux et un bon processeur. Le jeu vieillissant, peu d’ordinateur n’auront pas les composants requis pour faire tourner le jeu en configuration minimale. Le seul bémole est le fait qu’une bonne connexion internet sera nécessaire pour installer le jeu… où quelques nuit de disponibles. Le cœur du jeu, à savoir son mode campagne, est disponible sans connexion internet, de même que sa DRM est totalement invisible et n’empêche pas le bon fonctionnement du jeu ainsi que de son support en général. De plus les mises à jour son peu fréquente ce qui évite les téléchargements intempestif en début de jeu.', 'Ce que dit et ce qu’est DOOM est une leçon vidéoludique. En se défaisant des artifices qui ont cumulé sur le genre qu’il a créé, ce jeu est le plus pur des FPS dans le corps et l’esprit. Jusqu’au choix de rendre votre personnage muet et son visage toujours caché vous incite à vous désintéressez de votre personnage, de l’enjeu de votre quête, de la raison qui ont poussé les hommes à commettre l’irréparable. \r\n                Les démons ont envahi la base martienne, vous seul êtes capable de les en chasser. Vous les massacrerez jusqu’au dernier. Ce que dit DOOM, c’est que seul le jeu compte, tout le reste dans cet art est décoratif… Tout en soignant ces dites décorations pour offrir une expérience vraiment unique !\r\n                '),
(11, 'La musique de Fallout 4 est chargée de nostalgie et de mélancolie avec des thèmes musicaux invitant d’autant plus à l’exploration de ce Boston ravagé par les bombes et les retombées radioactive. L’orchestration à également des accents marins avec des pointes de cornemuse, faisant ressortir l’Histoire à travers l’histoire. L’importance des bruitages dans ce jeu orienté action est tout ce qui approche des armes, mention spéciale pour les armes à énergie au bruit retravaillé, notamment les armes laser dont le tir à la gravité d’un cor de guerre.', 'L’affichage des éléments dans Fallout 4 est double, pour les éléments au loin une texture « de couverture » est affichée pour économiser des ressources, et les éléments gagnent le véritable volume une fois arrivé raisonnablement proche d’eux. Seulement il existe plusieurs endroit dans le jeu où les textures lointaine ne disparaissent pas et peuvent camoufler un vide, un niveau, votre personnage est des objets. Non seulement le gameplay en souffre, avec des niveaux plus désagréable que ce qu’ils devraient, mais surtout cela vous sort immédiatement de l’immersion du jeu. Les temps de chargement n’ont pas de barre de progression, donc impossible de savoir si le jeu charge bien ou s’il tourne dans le vide. Cependant pour nous faire attendre, un effet « banque de donnée Pip-boy » avec des modèles 3D et des conseils permet de faire attendre, vous pourrez ainsi admirez dans le détail les créatures, les objets et les lieux du jeu prenant la pose.', 'Le système de jeu de Fallout 4 n’a aucune nouveauté. Au programme, réunir de la bricole pour améliorer ses armes, armures et ses campements. Le système SPECIAL de voter personnage toujours aussi solide. Un bon point étant la clarté et la facilité de choisir ses compétences. En termes de jeu de rôle, on est réduit à une peau de chagrin et l’histoire est clairement au second plan. Même si rien de tout ça n’est impressionnant, il faut reconnaître à ce jeu qu’il maitrise très bien chacune de ses phases et que vous aurez toujours quelque chose à faire sans avoir à rechigner.', 'Entre les phases d’exploration, de combat, de récupération et de construction de campement, si vous vous montrez « sérieux », vous aurez largement de quoi vous amuser pendant des mois. Le contraire aurait été une honte concernant la franchise Fallout, mais le niveau a été maintenu. Ce jeu de rôle n’est pas un jeu de rôle, mais plus un jeu d’exploration et de combat. Soit, pourquoi pas. Et en plus il le fait bien, les phases sont diversifiées et souvent vous aurez à vous battre pour récupérer les plus beaux lots bien gardés. La différence du combat à pieds et celui en Armure Assisté sont aussi appréciable. En bref, vous ne vous ennuierez jamais', 'Comme tout jeu de Post-Apocalyptique, on s’attend à avoir un effet de « quotidien transformé » ou le jeu instinctif et de comparer ce que le joueur sait de ce que le personnage découvre en termes d’environnement. Les circonstances tragiques et les squelettes omniprésents renforcent parfaitement le pincement au cœur qu’on éprouve. Le scénario quant à lui est simple. Votre fils a disparu et vous devez le retrouver, et comme à son habitude, la Confrérie de l’Acier vient apporter la démocratie sur un Boston défendu par des miliciens et terrifié par l’inquiétant Institut dont les synthétiques viennent désosser tout ce qui bouge. Mais, simple ne veut pas dire basique, et c’est bien le fait d’aller chercher la vérité derrière chaque faction qui fera que vous prendrez parti.', 'C’est moins les graphismes que le moteur graphique de Bethesda qui commence à fatiguer, les environnements sont varié comme les ambiances. Mais les ragdoll, les interactions physique et le reste donne à ce jeux un sentiment d’entre-deux âges.', 'La difficulté est réglable, même si elle ne change pas grand-chose sinon le nombre de tir qu’il faudra pour tuer un ennemi. Et le nombre d’ennemis légendaire rencontrés. C’est franchement artificiel et mieux vaut si on veut du défi se lancer dans le mode Survie. Les interfaces sont simple et même la couleur est customisable (ça sert à rien mais ça fait plaisir).', 'Le jeu est d’un poids relativement lourd, plus de 60Go, mais pour un terrain plus vaste que ce que peuvent offrir certains jeu encore actuel. Il faudra par contre un bon équipement pour profiter du peu de graphisme qu’offre le jeu.', 'Je vois Fallout 4 comme l’illustration d’un monde qui a sombré dans la théorie du complot, et pour cela, je suis obligé de divulgacher le principal élément du scénario. Alors que vous cherchez votre fils, vous découvrez qu’il a vieilli bien plus vite que vous et se trouve être le directeur de l’Institut que tout le monde craint.\r\n                L’institut est composé de scientifique, de professeur et d’étudiant de l’ancien CIT de Boston. Les miliciens sont des gens du peuple, qui se regroupent en une armée de volontaire et répondent aux appels à l’aide.\r\n                La Confrérie de l’Acie, force militaire professionnelle, et ce qui s’approche le plus d’une approche politique et gouvernementale.\r\n                Enfin, le Réseau du Rail, force occulte sabotant les efforts de l’Institut, veille à ce que ses synthétique puisse avoir une vie normale.\r\n                Pour moi, nous avons affaire ici aux 4 groupes majeurs concernant l’approche des complots et contre-vérité.\r\n                Tout d’abord l’institut est évidement le parti des hommes de savoir et de rationalité, qui s’attendent naïvement à ce que tous acceptent la science comme vérité absolue. Cela les rend antipathique et comme ils daignent à peine répondre aux accusations de leurs adversaires et se remettre en question d’un point de vue organisationnel, il deviennent rapidement l’ennemi à abattre. Même s’ils ont peut-être raison.\r\n                La Confrérie de l’Acier impose sa vision du monde sur Boston. Ils prétendent agir pour la population locale tout en la dénigrant constamment, les considérants à peine civilisé et les plaignants de vivre une vie de quasi-sauvage sans rien faire pour les aider dans leur quotidien. Et surtout aucun dialogue n’est ouvert, la Confrérie arriviste impose ses règles et tous devrait s’y plier. Fatalement, ils sont perçus par la population comme les envahisseurs qu’ils sont de fait, et leur voix n’est pas plus écoutée.\r\n                Les Miliciens sont des volontaires, sans éducation ni formation. Avec si peu de structuration, elle est bien proche du peuple et ont leur confiance, mais ne sont pas plus éclairer qu’eux. Incapable de centraliser leurs commandements, ils ne font que traiter les symptômes d’un mal dont ils ne connaissent pas les causes. Leurs actions sont vaines parce qu’ils sont ignorant.\r\n                Enfin le Réseau du Rail est un sous-produit de l’Institut. Comme l’Institut, ils savent, mais comme les miliciens, ils font partie des gens du peuple. Donc comme l’institut ils méprisent ce qui ne savent pas et comme les miliciens, leurs actions sont ineptes parce qu’ils ne traitent que les symptômes.\r\n                Cependant c’est bien l’interaction de ses 4 groupes qui permet d’entrevoir une solution, peu importe la nature des synthétique, oui ce sont des êtres artificielles, dangereux, impossible à reconnaître et tant mieux, quel différence avec un humain finalement ?\r\n                '),
(12, 'Hard-Rock pour un univers uchronique posant la question du transhumanisme et du déraillement du train du progrès. Dans ce jeu à l’ambiance mélant film de western et samouraï, les niveaux remplis de machines ont une musique de fond invitant à se concentrer sur les combat. Mais la force de ce jeu arrive lorsque viennent les boss. Chacun a le droit à une chanson liée à leur histoire et leur personnalité. Et c’est bien de celle-ci que l’on se remémorrera, car elle sont primordiale pour comprendre la véritable signification du jeu. Dans un jeu de type Beat’ Them Up la forces des impacte est importante au même titre qu’un jeu de combat. Vous n’avez que rarement l’impression de ressentir les coups que vous portez, et cela est normal car vous tranchez littéralement vos ennemis comme du vulgaire papier avec votre katana. Cependant l’enchainement des coups et les projections bien plus percutante, et les coups que vous recevez seront terribles autant visuellement qu’auditivement. En bref, les bruitages habillent de manière juste ce qu’il se passe à l’écran.', 'Aucun bug relevé. Il n’y a qu’un seul temps de chargement lors du lancement d’un niveau entier et un autre lors du démarrage d’un défi de rune. Ils sont relativement cours et en général vous rappel des éléments du scénario.', 'Le combat est l’entièreté de ce Metal Gear, tellement que les rares phases d’infiltration et de subtilité sont tourné en dérision. Vous êtes un supersoldat cybernétique cherchant à neutraliser des terroristes, vous n’avez pas le luxe d’être patient. Vos implant cybernétique vous aideront à venir à bout de toute les armes qu’on pourraient vous envoyer pour vous ralentir, et votre katana, gorgé d’éléctrolyte, peu littéralement tailler en pièces vos ennemis. Une mécanique de jeu originale mais balbutiante, vous empêchant de vous déplacer en même temps. De plus, la gestion de la parade, basée sur le fait d’attaquer avec un bon timing n’est absolument pas intuitive dans un genre qui pousse autant au martèlement frénétique des touches. Les armes secondaires sont quasi-inutiles sauf pour une phase implicant des hélicoptères. En bref le gameplay de ce jeu est comme son personnage, un prototype intéressant mais peu fonctionnel.', 'Très peu de phase de jeu.', 'Comme dit précédemment, le jeu est inspiré des western et des histoires de samuraï. Vous êtes Ryden, un mercenaire oeuvrant pour une organisation visant à mettre fin aux conflits dans le monde entier. Une mission de protection rapprochée dégénère lorsque des terroristes du nom de Desperado provoque la mort de votre VIP. Vous partez alors avec pour mission de traquer les membres de Desperado portant des noms de vents destructeurs et découvrez leur plans pour apporter la guerre au monde entier.\r\n                Sur ce schema fort simple et efficace de narration se cache dans l’execution un second voir un troisième degré de lecture, poussant à la reflexion sur la nature du combat de notre protagoniste autant que sur celle des membres de Desperado. Un degré de lecture que seul les non-dits pourront révélés\r\n                ', 'MGR : Revengeance souffre d’un moteur graphique vieillissant. Avec une apparence très « animation japonaise » en 3D et des personnages portant des très physique extrèmement reconnaissables, les textures, les modèles 3D et la gestion de la lumière font que ce jeu va peu à peu dater esthétiquement. D’un autre coté, tout est symboliquement signifiant, et de la tenue de samuraï des adversaires au décombre d’un obscur pays de l’europe de l’est, tout vous transporte dans un récit ou la pression des politiciens n’est jamais bien loin.', 'Ce jeux est extrêmement exigeant, si vous ne maitrisez pas la mécanique de la parade et ne savez pas comment esquiver les coups, vous ne passerez pas le deuxième niveau. Il vous faudra alors recommencer une partie en mode « assisté » pour profiter de ce que le jeu peut vous offrir. Les contrôles et les interfaces de plus sont très difficilement lisibles, ce qui ne rend pas les phases de gameplay agréable si on est un néophyte.', 'Le jeu fait 24 Giga-octets pour un prix de 20€. Honnête. \r\n                Le jeu n’étant plus tout jeune, pas besoin d’avoir un matériel de pointe pour le faire tourner non plus. L’entièreté du jeu est hors-ligne, aucune DRM ne vient alourdir le jeu.', 'Ce qui sauve MGR : Revengeance c’est paradoxalement bien son histoire unique qu’un joueur peu attentif ne pourra pas comprendre. En effet ce jeu est au Jeu-Vidéo est ce que The Devil’s Reject est au cinéma. Profondément subversif. Non sur ce qu’il est mais sur ce qu’il dit.\r\n                Depuis leur première itération, les œuvres Metal Gear sont pacifiste, et souligne toute l’absurdité de la guerre. MGR nous parle de sa cruelle nécessité au sens spinosiste du terme. En effet, ce qui fait souffrir le plus dans ce jeu n’est pas la guerre mais bien la paix. Paix qui n’est qu’un mirage des puissants, utilisé comme ultime argument pour justifier leur main mise sur la société. Tout le pamphlet de MGR tient dans le discours de Sundowner au moment de tuer le président dont vous aviez la garde : « Donnez une chance à la guerre ». Une provocation qui exprime la volonté de chaos des Desperado, refusant une paix tyranique.\r\n                Et un troisième degré de lecture s’offre au joueur, lorsque le héros découvre que la paix comme la guerre sont des services qu’offre le politique pour faire diversion face à la masse qui souhaite se couvrir les yeux face à la réalité. Tout cela transmis dans les différentes chansons que portent les personnages brillament écrit que vous devrez affronter :\r\n                Mistral, Monsoon, Sundowner, Jetstream… Ces 4 vents de la destruction ont l’ironie de croiser la route de Raiden, le Dieu des Tempêtes…');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pseudo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `FK_232B318C1E5D0459` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`),
  ADD CONSTRAINT `FK_232B318C26ED0855` FOREIGN KEY (`note_id`) REFERENCES `note` (`id`);

--
-- Contraintes pour la table `game_category`
--
ALTER TABLE `game_category`
  ADD CONSTRAINT `FK_AD08E6E712469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_AD08E6E7E48FD905` FOREIGN KEY (`game_id`) REFERENCES `game` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `game_console`
--
ALTER TABLE `game_console`
  ADD CONSTRAINT `FK_A3C1B09972F9DD9F` FOREIGN KEY (`console_id`) REFERENCES `console` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A3C1B099E48FD905` FOREIGN KEY (`game_id`) REFERENCES `game` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
