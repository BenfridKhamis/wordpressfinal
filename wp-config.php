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
define( 'WP_HOME', 'http://localhost/wordpress' );
define( 'WP_SITEURL', 'http://localhost/wordpress' );
// ** Réglages MySQL - Votre hébergeur doit vous fourn
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'khamisbenfrid' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@`wRTOQUT%>Jxj$9{sH(:7Vji^!;$5!~S3BF?{tWeL>`ap+?Xg7#ad$q=C_]C1{e' );
define( 'SECURE_AUTH_KEY',  'Pn2ik/e6,?aj&*{LoenA4_Px;P<ql1i_VFOBmkyOC?BVhA)cNlmh/Hq23u|pVUEX' );
define( 'LOGGED_IN_KEY',    'ad*j*JMU(8U& 9qpoBEN}M{!bq;%WaY/L ap9_.|+G`8<CzeS7 {},hL pJ-/.J[' );
define( 'NONCE_KEY',        'm`s(m}|8<}Tp}u}f?G=M9 jT[0#quOm9(|s6=5VMVl?O)756{RU:n!uqp%r3e!)_' );
define( 'AUTH_SALT',        '<[on/&R(45~kL/{eutLf;Y$%],g-6w?9D^S&;ac*1yL2L=V@ru/aY=5H={A!AmcH' );
define( 'SECURE_AUTH_SALT', '*x+oSC yC_Jj]TxS2`:]>S?.pfg7qq_EEPJ)UX-pn#Z@i9u!?aK 5K;S<hDe$X?=' );
define( 'LOGGED_IN_SALT',   '(L(-h8-%UDRlWthrWJ1|Z $PKO=rC-rB)em-fc%Pt}56R=> 8g@*S@F+~WCx;4_&' );
define( 'NONCE_SALT',       '(5^:>oi^4[p.^r~s?Vb.)8TQTrbJ;cJ<06TVSu`k0c~Z[(,bnrWkETFb;a%9,I7e' );
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
