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
define( 'DB_NAME', 'maisondufilm' );

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
define( 'AUTH_KEY',         '0C>dJ;[JsL9VI|E(4|%?3Na)h`KJc?MOq!Z%@+sUlN?.vP:>%>ba`|(SrQihe35$' );
define( 'SECURE_AUTH_KEY',  'MoKuD;x-}=36BKC!&j#Tb,*o=Zu&5qnx8Z6 DqXT?E0{RPp-C;uTRSC@<~+BAK`8' );
define( 'LOGGED_IN_KEY',    'bm)&?O.XrXTm(,@wI5-0$<vB.AEjp(}dI~$j8Bt ;eVDZ9&j$}GImi6TR-Q-SELT' );
define( 'NONCE_KEY',        'Etj${zE 6@-*|+yvYgXEc2d!({Q>+Jp!]p$ECMp1b <-_&*xx_G){Q%-$`WLaE,e' );
define( 'AUTH_SALT',        'm]!p[N(3gwM 0LsMOB8MDtq_Cz_AS;/l<H#e2j<?X(Z%3UnaND_H AHK3k,I@Jm ' );
define( 'SECURE_AUTH_SALT', 'B}T38lSziy*XWnD;PaEk82r#.)/gvuw#!F$vARW;OR~;8p]AcAbVJy`FR:^JbsjO' );
define( 'LOGGED_IN_SALT',   'Hd]596P.Zl4<:|gCbKd7kCQx!H~N;>-| %PHiI{X<!vl{M4zG;y^j7q4q#m.15{e' );
define( 'NONCE_SALT',       '?v#q6K>z2_L%5B5L#biH5fC*b`AO8CJS.Za{g I:^GQKgzz[T2,vcv:io2Q>4t9Z' );
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
