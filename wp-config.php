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
define('DB_NAME', 'testDemo');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'boly');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'passer');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

define('FS_METHOD','direct');

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
define('AUTH_KEY',         'c}$f~gW&CuVyj}=aX_FwF!;?G#77h<lLH3y|Wwa=ZeWF5gwmgM:-8]{3^w;|w)n<');
define('SECURE_AUTH_KEY',  'SY? oK&SM&Ivx[/sf,;1E,|MibU%H{*)1#<8bF_1==dB28Y8J5IH^.Oz.(ks_y@E');
define('LOGGED_IN_KEY',    'F&/ec#)k:7>$@Lu#l@W%R/xN}xHj#t8(++q.U?Ap326@PWPVrIfbSQEQR^(2>76s');
define('NONCE_KEY',        'Y*]~CNWZNa{j@V`*_YYH9<PkT28Bil%<o,@CAU`V9sIZIZK3ND$3L.S(}n=}plbJ');
define('AUTH_SALT',        'K+z3,W bExLruu5I[ ,cFFg/l6V>Al5Zap>($,BR])on|1LH4z<:}$BjDGO<x(c9');
define('SECURE_AUTH_SALT', 'Z/Ps_52Q7C(A`39W2~au^?o4iLD}.gEo?cfEF,;Uv[:!p]ATrI[|r*.=#u9kc:f(');
define('LOGGED_IN_SALT',   '-6JIo8obIzEwu@oUXqRkdpTC&(=vHds;K/Z]gnz[T=B+W=?+WgG,~b|p=nT<K|,(');
define('NONCE_SALT',       '0cQ1z/35/J.IIw+}KaCx?Szr4Zt0QX.|eT(;rE<SkiQIvA/5a8[m8_jc$RI+dlVO');
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