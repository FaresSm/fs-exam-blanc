<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'exam-blanc-wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jLB$/-nxx@um5P^m2!NiYV7ArKyHNjKb3A{ErN.ki`9yh|_-hu);sZP&EoHj]U+]' );
define( 'SECURE_AUTH_KEY',  'dX=8vg[tQY5q-&OZL3>yx3^ yd><,z gX#n2ZQt[?8Zt`8#?;+XJ_[HGT2xLZnq*' );
define( 'LOGGED_IN_KEY',    'Pr<mZf,Q8%DY3G3wsrA@w/KA,Y08<!0QtXV_}/R?]ESiKP0+q<syQW/%,AFnNE4Y' );
define( 'NONCE_KEY',        'bN[C58Jb(3m6neK`O2c {ECOc,tm;F=cd^;^vt`pT3r3PL~`WVeki5>S0TzlOhrB' );
define( 'AUTH_SALT',        '..UY0>:6+rV9iZL:?a-@pklX-jSiBwby&%{E4t@shqd6C (58M+dKGW~M`awOfG=' );
define( 'SECURE_AUTH_SALT', '(q$U}%whpO[b^V_Toa,<*uAG7i.lB;k[^RJW+UAqh.=P~y,z%jK=}TsR^x$]Vjp+' );
define( 'LOGGED_IN_SALT',   'g%S$yeWa4C[*)$F^KW;sOYo[CBgNzDPTF[<U6<lhK(?7+4jFxk#??U^3oO==K}t%' );
define( 'NONCE_SALT',       'TDX.HFmi]y`IQl3$`lFpW]H!0*5/+BB],v06D|TZfLsm-|y]0$@0_|^JRnKwd,kj' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
