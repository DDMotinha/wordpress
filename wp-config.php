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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '?-DC$f(y.hP6Y1R52O:38 L+/gBY)NM7s2K{YA#Y|o3?nculsCE#_m>Jy=uW)i-o' );
define( 'SECURE_AUTH_KEY',  '0qxo#pss#)<4nx ]a:</ e=Y;j#Y2)h)ZTJ@MLS2?h7gHQ@j0.E%!5&;p-t?TQp$' );
define( 'LOGGED_IN_KEY',    'Ib}+V};wd@;Cl3gKR!##o>[Gv)74`ZIB+,rjFbC?ZVt&M0J<Zl~}cT7H({17I,N%' );
define( 'NONCE_KEY',        'duQ`qrbNL;,<%~_CsTF#=+-@*T#4*gB@wHl~BM9xZ%J%}Sk00&Rcf./ixQ?*-T8S' );
define( 'AUTH_SALT',        '(C:f:-*._[s-MJytP:scE!{~=iH|KUJK:_^Sl07Q!RxS&M0eOSl+nS]a`>EkTulg' );
define( 'SECURE_AUTH_SALT', 'c|H5t8L;[h1[d|hA,TQWN!>q80/?XY~Uz3e-H~1Ug,$`y)]933Zk&C~]h+9kc C1' );
define( 'LOGGED_IN_SALT',   '9CEmE6Kg)uh-d]nwvw[`3UD(hfX=hX/bbLI&w|LDHYuh V-VxSgLzK:]g38*y1}N' );
define( 'NONCE_SALT',       ':jfJDk+5U?{SUUa5P.|FLZ-g*}CA*;nxlFdsrO9otzwqj*5Oqw=.&*]]ckY16@^i' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
