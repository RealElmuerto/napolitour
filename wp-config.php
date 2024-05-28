<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'napolitour' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Kx-Zq[dl.?&Jj~n.y(@LN$9E+MI_?Aza8wP@;5r?HU`^tid!rw*k`Rh^TuVNi-7m' );
define( 'SECURE_AUTH_KEY',  '%JPRK;[u_;1Joe=fa}(1`xE|,^Zp[6!M67i{As8RT ]{bPZEc^P{WW>jU&n%@z|]' );
define( 'LOGGED_IN_KEY',    'GO.Vmt^z2&O/=D9vg4m/*A/~VzS,%2(_({lf@5{_>;Tyd>ZG{Krcs5Ex^H4!Zqd[' );
define( 'NONCE_KEY',        'bs?Y8l]QIlWoTW6w+;@-P}UzY^Lx$%,d4hD`3z1u!)@q:3<8a/HyVz J3*Gof^/n' );
define( 'AUTH_SALT',        '6y8q%!ZChj?~XL@XY-m.~/EY4-`1DXmUxlq0~jyLU cZw>)5muP%1BV}CQP%pi /' );
define( 'SECURE_AUTH_SALT', '^nLpNVa-}FE7[{-9nHpGR(r<;,I`MD3q0vWD@|dL2B~8a?QV;5a/<6z4uOE2HeUG' );
define( 'LOGGED_IN_SALT',   'nnkn11!HL^- > !(C1>)LsW3VvspxsAS!$$PlKPM?gt?/h3@NBi c@p(&Y];PN0>' );
define( 'NONCE_SALT',       '[|s!oGDX(ci-2Bg0F3k1Rr-ImI>+@X{>=ar ;z$#Z48!nLuQF6q^?z:H`^9l@<|*' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli sviluppatori di temi e plugin di utilizzare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungi qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
