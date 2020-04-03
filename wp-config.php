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
define( 'DB_NAME', 'wp_cssl' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'margot' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'x28w@@:c-N~^,4lF+|y2+7Du=}$e%>;Z?Xe@eBgSuVV1Y?wM~ZH qsK8h$jhRCac' );
define( 'SECURE_AUTH_KEY',  ' :ZX)E2,zr6P*h]H1ze)d[ DViQL/!]Z7Qbrl.Ukrjan6mNnmo.O|U&D7M<,2av)' );
define( 'LOGGED_IN_KEY',    'Uke #??hkU-g7Tu$i<8eB3!z^EL8`K`A#N~s0J}ye!HM1UbS?Y%DN~~Pmyee`s6V' );
define( 'NONCE_KEY',        'G-8lf@%$s8Hd%@q52U_0,Na!PXNmS3/HQ9!fW/uDPF$C7<qmpsu2qlgLGz!fPHZ7' );
define( 'AUTH_SALT',        'G.x8Hc?0gEHWa%.z8p#-kVDfkI^Nkkd3<!qibbVA->o|M6-,;J8;k}L3>!bLlj!y' );
define( 'SECURE_AUTH_SALT', 'zI}ZvG0R!ym0_g@I-wXBaNC~UV/Q$B+(`g2#ov-VBT~[A=3Pt9Xk)~u-}Rh.SD@}' );
define( 'LOGGED_IN_SALT',   'yDjU_k@IG2r RuiG/*5LXQr2^US+R3;-GMEg-x*d(TI9%O}8BewC`At_s}:e^](|' );
define( 'NONCE_SALT',       'IKo]@*/9QyMOMW}]rgE=1D]g;)VN@!oCcq*~Y<]J<5+9L]pS6Et:skvZ*0v1Q&Tx' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
