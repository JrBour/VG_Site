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
define('DB_NAME', 'wordp4');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         'F5 Q=;Ad-Mno,F>w2H#FXYlp|_zp3{7pt.OCh1&@9/`=mzfSAuh>0!6Q7$ Q!z.v');
define('SECURE_AUTH_KEY',  'T,gQMIu>t5P!82h-]Z67{8Ha2f.V*KcK <)ig!MTYD*)C&:y1dSoF7,cUYKp)#r9');
define('LOGGED_IN_KEY',    'Q[<i;LV_[omb#9H)%>*2q3=DhL)w,-nYz3%]YMW .L7hh8q:}g& J w4;(O; $qU');
define('NONCE_KEY',        '4sUM[nZriw8We=JtfW8@lh6iTs;sW7d2jIo|,vP:%szwhG7Vs?`kYf1YT(dzL1 z');
define('AUTH_SALT',        'SLeSdX7Br,S`=5+XlgH!mUymKf5b+}N j&D+bO%GG?l]zsf@U s=Klp,|f>7vkH;');
define('SECURE_AUTH_SALT', 'kz,~y12@~$&PVFtz(T%&!8r0dnr,xMW3_[?W=yb/V_$ahphiV-=WPp7,f0-P8 /}');
define('LOGGED_IN_SALT',   '8M,V;5Z=p[SR2rgBz>r8/%dozhKZk18@^ckg]m0Sa_pE;y69,&QU_(GHjbr8MY3>');
define('NONCE_SALT',       '?Xnxl6:c#@&v$$>}KWzd=4TmFE^e4aRM@Z&Gaf_RP+lCjw]fFF`QKzDZ0Ntt-E[=');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_45';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');