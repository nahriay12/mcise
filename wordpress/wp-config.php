<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp_database');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4M2PpoxuW|wsaBu|jDY{]n~;dO4j5O$xu6S04,B*`Jjd<1|l.zny~(Zuq>;)N%Q:');
define('SECURE_AUTH_KEY',  '#S.H|jP1eu=cm{u7OR9UF>Nc+4N+fHn-Kb(L+/1k)C(0P`sjP!.Y<!_sfm4^J1Jz');
define('LOGGED_IN_KEY',    '#uBsAsl vTKFn0nU($c@T%MTh.A*t7Tu)LNgfFTi{.$Gm16jd$?[r?[(9j}78<D>');
define('NONCE_KEY',        'QgT4Y@Qp%T?<-EVeT_.<^1 BGGR`s]5.*IzLYzM/W=$qV9ini/6dSa},F]Plm|(f');
define('AUTH_SALT',        '-mum(l^>W~ZH;wDPwV;+4t;lNH%yXmE(L:m:Y VRtWCWP>(g,bB0qRx24XkL5Vv3');
define('SECURE_AUTH_SALT', '&p2xp(b<-t?+p/ZJf[dNf$I;YVj_|PW|V9!FNNlAIa;[pP6p*JsVR1fCE>DO}5QG');
define('LOGGED_IN_SALT',   '6[<?3@1#6|o OJB0Xwg*Lh{K[i*_|Y;Vc$N*j]68,+d`-*Q>gJf;yDdpV)!utds$');
define('NONCE_SALT',       '`Xb <G^r#AD>X6azZOw*MnFG=gJ}u:masGwj?YXafgR/M|&*@-.E#s@{I)TXN2jc');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');