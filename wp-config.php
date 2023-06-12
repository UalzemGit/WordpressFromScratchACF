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
define('DB_NAME', 'curso-wordpress-acf-2023');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');




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
define('AUTH_KEY',         'H`#`BKr l:NGzQ/Uy<(dTPs*wZU-$G5qys++UhdKcoDkgup&{%_!Ig]XS1g{ m[S');
define('SECURE_AUTH_KEY',  'ybu8:]x !Jq^f#$-d#!nRt{zZL]{t&XwFxihr@Z$(MTpuXQ]pkhp=rssGkZ&hCWK');
define('LOGGED_IN_KEY',    'L!,EoCWy0.ki%${hhPLs2(lSP+EJ-6;1{L&Ff*>~j[Q+SuG?4cSuu}=]!3S~2/?$');
define('NONCE_KEY',        'wisvzkm:j]&H,{q6!{bYd?#|e0{EkCrzlDJH*T,6G7y+FPAhZoJ(ZOqi- 4QP74V');
define('AUTH_SALT',        'r/g5!V;&`}y-AfEB^[<El51#gT3h+g[NUy y0lx5~Okj5*V(x:1GKYhS~4Tqu[d5');
define('SECURE_AUTH_SALT', 'P:S7HZ}Wprw&7 D:s bb;;(ep,U1hs|s=Q2=e<@[AyfAuh$IYW(BUdWn <RnuO,G');
define('LOGGED_IN_SALT',   'j%P3j7Y Im/S6~cZNbp$x7[%7X&#z,nZ@|De19|c?3ACKH!),quUEGtK_-GYl@2M');
define('NONCE_SALT',       'H,8v/#Xfc) n#hiCrlu2UD4$3qZ?wH6W>k~0fk3Rv#&AN0lq+d!1VWbRRiZszDEa');

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
define('WP_DEBUG', false);

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
