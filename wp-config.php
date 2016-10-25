<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'ciadonatal');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'gilberto');

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
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':f51mnb/ZCIR-rK2C&<0eH;xv=CJTw9{0cOYAItsu(B3wG@A1,O_o}6:q<Dh=6aT');
define('SECURE_AUTH_KEY',  ']<n]nR4cN RH[oyo-)P|/TR&0UvY/}o]E=cgJ+d0A5tXjFHv@B&@II 7JQ,Ju5yl');
define('LOGGED_IN_KEY',    'g!eemOC?}&61/o6$$E9R@8x<kUjeRL!38M},|sh%CLCurg#7~p7B0KRbLh_TzFmV');
define('NONCE_KEY',        'T{?)Mmpvnt-CUlurOT^VRZTw,DWb3m>73c2DC0qoq&f^o6G;e>Eh5$L_VXFwSG;D');
define('AUTH_SALT',        '2[^4#t|pYQoo:H9y$}jje+JY1[Tm<Y}Vg_aq>~,WG9`m%4|(->B5@-3-(|Ud3;2Z');
define('SECURE_AUTH_SALT', 'd;+adalJ*6uyce!/u+<&k.#vuAMxD&c-g=LEP&fyDH)G`UWzl%0EYXk3C W<llfu');
define('LOGGED_IN_SALT',   'je_UZ#*_ir_[&Uekl!Tk,mMTN@8bz_7NA2d.DB3f#,} [E@eknkZGSWY6F@{5/( ');
define('NONCE_SALT',       '@lPodP}U-V_E31QQ{VCOM^SfZ<ui7^_1R~,cA#tMocR}=h{z,(yh(Js:Gtb0}ENg');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_ciadonatal';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
