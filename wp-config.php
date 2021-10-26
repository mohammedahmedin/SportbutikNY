<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'sportbutik1' );

/** MySQL-databasens användarnamn */
define( 'DB_USER', 'root' );

/** MySQL-databasens lösenord */
define( 'DB_PASSWORD', '' );

/** MySQL-server */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ajw <cbrXxy(3*,/(4V&O/D:tEy>*JX_c^nu<?Yc9ptjlW4#S/AcTw4Dup9r-lA&' );
define( 'SECURE_AUTH_KEY',  's>#QZ;^E}`*A.>64,c!MmI3c;A^/)&|.2nT:Ka_4e3G.DvngG5A,&n2gc6,G;AZ2' );
define( 'LOGGED_IN_KEY',    'C)#HpHmdFYY`&L!~m3Y<%U-c3}Ru8U;KPa,FJl2cUC{5!([O6|#/okLe;ICS}QFB' );
define( 'NONCE_KEY',        '9<M`8{94?*rEfJtf%N=0?>]:;uzA#Nj${?=fY}6*+A}VUEl|>6 u1)^;QswE2pBU' );
define( 'AUTH_SALT',        '+6j[DJ#e#c{w3n=15:mrI6N.<8y$>}Li{aS%uSb7]x<f0Bv$:}0 )+>x2[,YD$t~' );
define( 'SECURE_AUTH_SALT', 'cdQkL1VwGTdIqq#gF$xsfjwslO7AvwONhxGl?|H A#dPCLjBO}Cm,Wf`>I&P?2r(' );
define( 'LOGGED_IN_SALT',   'Nq&:<O&T$7W,,Y#$Fo@|$~9!wUSi@Y[ X,I6XBD$ieOBC_@Wqi|,tcbF^N=LH!CI' );
define( 'NONCE_SALT',       'fq{Anh C^~ZN9_$]2E+!uhY%ufKbry{C!5%kg~wi*qd?1}cN&>5SKb<|nM`!s>tg' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');