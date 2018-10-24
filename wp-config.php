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
define('DB_NAME', 'iut_info_website');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'CfUledc&^kcH4Y6Ph1wIgxU4_{Sy|CD;JLzvc.6#;D1a+ZD[qMCuJ.qX=]%Fh=^M');
define('SECURE_AUTH_KEY',  '~Zal|ytW;Pk47p1$$+W^[0@#ohrM@xuFpb|5:qkg9[C,yOai1s9!}Q[ew4onnb>o');
define('LOGGED_IN_KEY',    'o>ie:(pCA6t$ |~t`iv|;+=6SFt5L[F6Y~eo{*bA,;!&Txc^x} p!R=Y~7p:fhNP');
define('NONCE_KEY',        'gpE:IZX}^i(5;0wo5_a)kN&r%w(82 ]!3Tn<{q7J#f%;f$gW&p<>/MqmeTtj?o4@');
define('AUTH_SALT',        'H$;h9@F{yF/9N)&_-31O:_>RrrRDe:@Q^qI?|,`iTpu@c3gvK_iXsmB)6<x;A94;');
define('SECURE_AUTH_SALT', '.06l2}:M,3[0mQ~AZ1Dt](ZC`}m]gfW!LigZMk);Y`oIEw?hOBxQ=#<I7Qvk@;Bc');
define('LOGGED_IN_SALT',   'Ed*cPxOHhi.f u|LoI`~rE/RE]+BwRi5~sPSRCm:06b`xi=xGIi[@2?2a@{&6 Cx');
define('NONCE_SALT',       'Y=<|qFWca=(_Ee!U$R;=L}wcbNbLx8wBt7&eueF7R|2*(R^6K`Irv@e9{#Y$somN');
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