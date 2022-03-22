<?php

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
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
define('DB_NAME', 'eovpl_03');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'olga');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'berusu');

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
define('AUTH_KEY',         'fpD?YT+(,<-M;(~-4mvE^_k{L:CuYm2]),@mo1w3C8Yf:-P7mz}xPWk`Q|=/IGZ_');
define('SECURE_AUTH_KEY',  '>qrIf4AK`|R>;[uLgH4.t4,34>yK7-A2)Z=2SdR$99okyNw%xH,6ik?_OJ> uCI$');
define('LOGGED_IN_KEY',    'Xn$-.dUx8-w -)0xZIm;JLnk+^9ja0-mE:;s`Yb$03B0e7:uS&Bx5Eg(Jx[`|}!K');
define('NONCE_KEY',        'IKDr/:.y&f[>Xg]:)25EY;R0En{$$1M{keFognjpii#1K7 dc~O|>*<}-J?M9KFd');
define('AUTH_SALT',        'kXwEUYNKl(P`U*tzcex(Nga@a:`s7_5A`.&uFL4<%n>|>UZF}g+nI*XyRIyU3!ZX');
define('SECURE_AUTH_SALT', 'p_,99Q*5=bk7OXQk87KLzDE!48G~O(>E}gG#AY]bE::<S}Qrj1{K6;69q+,;c>~8');
define('LOGGED_IN_SALT',   'V30!!o#m{SSqugZNVy+&J(HRtU[C5=%opMh%VfJ6f~K^0j#3Z#M&Hy^KZGXXS!dm');
define('NONCE_SALT',       'cdMmJ@zcvJx$U!kyv`@_#fF1!P)r6qxjj&Q:tzNZm|Vg*`:9Kypa3:`I-}_d~&.&');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');
