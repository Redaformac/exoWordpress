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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'admin');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'H2bTGZ<YGS!jz4_x#YLyV 3owXO6/) ^*[rhi^<nUp)3>6I}(8C&=8G*iZ4qCMv&');
define('SECURE_AUTH_KEY',  'uRhGHw#6$:67~86Jec(3vPdAONX%?Ak[},Mi8><E%j)=@z$!D/hz]U_-H{xf]Rci');
define('LOGGED_IN_KEY',    '`i4(G-GEap.~t$:$UPxbG>w9RjM=S7$;q`,lv8v`KN +x2jGfQZ ~`ai-rFg5g~<');
define('NONCE_KEY',        ',K%^hbuc*~5YNqy;wpdCA;4)5s2gsxE>:)`xKN@z:IU;vS*IROwkTA@t:*Kq]zbi');
define('AUTH_SALT',        '*xv%n?:2Sgy*G8E_44nKfH;H1ICuPBe7I1JqsBrh`~9@NSuD#!Fkh%jH]Pd>AZBF');
define('SECURE_AUTH_SALT', '-s[dy,nD^ncI_^Pg+ ]g~sjuZ~W+ugN}Oe5yV)Pulb}n,AKYL*KFi>4c|cF:(EPd');
define('LOGGED_IN_SALT',   ')Ezlt2lytFVKY]}{0Lmj(qWp!,Om&f|Iet8@.Y*p[<W[e1V-TS?)PHlVYkP<}y,z');
define('NONCE_SALT',       'd8.&vUl^!E#cB@e%~enz=SGj%JA8=BdvH<#f3:-q8#T7|JG`=j3[`8U,KM`T`.YD');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
