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
define( 'DB_NAME', 'wp-01-210005' );

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
define( 'AUTH_KEY',         '#5jb(|BRr6Qu[kIBBy$6tQe)5&N&#kz7Ge6kdV`*v6e7,qn<#Fmq-$P1kXR1H:pX' );
define( 'SECURE_AUTH_KEY',  '=9ff6_I)GMTii$88H|5ee}lm*9uloO^fs9/z_k>a>WSZksCgoR*91$mPiE,;QrtF' );
define( 'LOGGED_IN_KEY',    '! Ay;iq$=2@Iaahh2Vk7?RI=#+*=V`pT +v<sH]P6?kEKx:L?K.0vB0bI<~~oq2|' );
define( 'NONCE_KEY',        '>$yy.zAF~2IG~ShbyRnPk^u(YT[7|&U2Iw_+2p]ES3YFU#>61{k0AL&B2/v)e2>a' );
define( 'AUTH_SALT',        'k2`_kg7!~0my^XO=|L|Wc*4B$`mYWEq!8fxe:fCid4WI6]1#bAsahy]R~Y_KLkHT' );
define( 'SECURE_AUTH_SALT', 'H=QnSp|MG_~hi)wv=Xo]gfnuEgLe?u9ua!JOa*yGvt@AnkBDQ:MV_|cHftWP1NMt' );
define( 'LOGGED_IN_SALT',   'RkKb7)ioE@-YZYb/`(1SQpApf:@N=Q?.`Mdc-fjsLV6_B$P_?pD-CG@4MCT0Y:nT' );
define( 'NONCE_SALT',       '08Rp|AGQ9b8m>E0wlo20G0)*E`Wy93S~#R/x?I0mKRCF*BV(s&HClGNE2)) C07K' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_01_210005_';

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
