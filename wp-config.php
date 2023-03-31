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
define('DB_NAME', 'planty');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'I<uar-)d+;O.{g]ZN%b +*9>aS$c8.~5Dtv!TA<j@K<t7D(@/lxRUF3ntmj*k=T!');
define('SECURE_AUTH_KEY',  'qJRGCv>MgRkMS<=vC>m=Afhs~95f>hVKEStND75lylYw8N^67HJX-Q.cSRUD<UL ');
define('LOGGED_IN_KEY',    'D+-6k+6a>auxgZ^wG.uUzSy]1@6HAw74UKgepP~Y&bVGrh=eem#?N}7]m4AX[3gN');
define('NONCE_KEY',        '-I3O,zI16#39s5*^tzE6fr={m}u4p/93>6)aSl`-,`>QSrjx&35`fOqrASFw3V?q');
define('AUTH_SALT',        ',~yv&G-RX>_,EHCBM=j5cvO:3%6IFI[Pd3{et[0NX]Fz1B1$s2mKR9mHx*=dNjA+');
define('SECURE_AUTH_SALT', 'g^2uZ/36L !yDIeOy41kU<}apHx>>=+%Mp#2v(%I8XN]--mgs.h?aL<zN{*}d0fA');
define('LOGGED_IN_SALT',   '^4EAo+W`u(1]trvH9~uRtI<.eRN|X# !>?Im787;`HRy!Nt6!DQ<:k^KJ#ojDf)%');
define('NONCE_SALT',       '3UD(E-Itx;,* x:K>|Xrfv1or-Dq(h`3vGqml{#Fdo_{noesL. qTRuw@r{z~PnG');
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
define('WP_DEBUG', false);
set_time_limit(300);
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
