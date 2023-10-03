<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'jornadaviagens' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/W{S7:L 8PAT%;/Tfm!ZT+skNcgj$dJ:i#%<hU:(Rd*-K9qsyr*6GQIPj4L>@)k~' );
define( 'SECURE_AUTH_KEY',  '2gJ&39qs9e(|V+g<>^h6q`fWC_%451{!E!dIp1v!D:06+?eiFyP?.n}H!~trR6sj' );
define( 'LOGGED_IN_KEY',    ',G.W=Jif ov#5ENW.lbdaw7&O38`s;(QaBfrO]hKZF/s[X++URgIv09+2cEb0L5F' );
define( 'NONCE_KEY',        'QXX|?DMQxxJJ5OQmJk4fLY9-u~%{Kjx]_=ZdWkSEgTNwZ2vN |lbPQ2]Qx}1N]8v' );
define( 'AUTH_SALT',        'yer/>N}]ol7ZR*A0$ayGM=QtCF`)Y?hC5i(L{13xVUhcnUyE@z0;V<WrZm2CdWQ}' );
define( 'SECURE_AUTH_SALT', 'o1Dv7S#5l_Zmp[UUL_Dh?|yS9slC%m7,H=|fyQmT,%oX|cIu+?f!z[GqB+c@wYBn' );
define( 'LOGGED_IN_SALT',   'h(}#AcX{4EjR|Vcfon9]zF[5FON@&%ZIvX[!<!|HreA>/V@7~=T%1Qi OM`.:L+o' );
define( 'NONCE_SALT',       '~]hc+;r24HXM]avH_G-Kv.p*aLZCGl/*+zIUm2n8u{KeF_2neKfAym</Fk.GS>qX' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'jvwp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
