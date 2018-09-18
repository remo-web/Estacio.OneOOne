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
define('DB_NAME', 'estaciooneoonedb');
/** Usuário do banco de dados MySQL */
define('DB_USER', 'remo-estacio-ooo');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'REMO-ESTACIO-ooo#1');
/** Nome do host do MySQL */
define('DB_HOST', 'mysql942.umbler.com');
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
define('AUTH_KEY',         'BA/rObg)pA{e}6</<@i,a:?g+Du8;f:Vbzbx `%gO869@-S.q8mEWx.>3Wi+E)t4');
define('SECURE_AUTH_KEY',  ':@G.ywt:|#?N|pEyzx-QyS[5W]>kxYY~YT*5pA q#5 ia72uiA:SGhXnsQLxoV:~');
define('LOGGED_IN_KEY',    '~0*t|+cwV+#aUr<OUYORJ{e/+M~!lIBc--B^%+} *Cht0U$4<TGXbWG%FK+1]D>+');
define('NONCE_KEY',        'qBO@=m=g!M9&.c<%{B$9vb@Ywhr^$=q7%f`Q-tJwmh%Px h-t<5%M$[.u1w(L]8M');
define('AUTH_SALT',        ' Vn+9pq_pgI|>AC2*}Y{+=|,Y+/l0x1K7Fe_B)rKp@f7.z0W`RYu+oU[~ LBR8.{');
define('SECURE_AUTH_SALT', 'Kj*vQP55=PjlBS~l4uf}qVjM,&=6N_{/9?q<b voc6k|erWI;}Uu#.I-^]G<ud]G');
define('LOGGED_IN_SALT',   'IoAt@|%1X)eNwijsL5PZu!UIcsB-v&;1z=*zehU4BIs@= !0V6+}:=[<w>8L0J V');
define('NONCE_SALT',       '!te[,X|}uc~~=Z_]H/sQL%%J.cR6[agrH]b7+<.VK7*6?%Wpeh@zKbK{{t`181<a');
/**#@-*/
/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';
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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);
/* Isto é tudo, pode parar de editar! :) */
/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
