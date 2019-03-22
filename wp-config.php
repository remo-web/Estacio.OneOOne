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
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`NY&@`k!CI![6df|*k%(D =~QYG/;^Yp{U5Q,&4q~0O7XXyNoZA-O kL8v#vK4?w');
define('SECURE_AUTH_KEY',  'o,SoL!wXwU0QLa9Chj@isBFqb+?e;y+a[~QygYTz([h{ELIY;.o41>nr>>-jXTAK');
define('LOGGED_IN_KEY',    'p>QP0,SL7X8s};TOdlz!V*mD)59AF*P3+3wn$}g?|!3yF<KKYfLF!=iOu2Eont<S');
define('NONCE_KEY',        'aOFm|Q:3|2Qx}&>[ANhZio*J/z_a5nSJhr*g75a-~4&l%vRvs5+9>WfSoe~oc_S{');
define('AUTH_SALT',        'xUvrcD|s|eJ$wgSM4|yWn,`7mq3=[-B3Wivfm=<@Y`+5B%+$K&4eUY~q,5Ivt%fq');
define('SECURE_AUTH_SALT', '1tZI|!#rU`cL?dY+}b|RW.@<`U&Xk&_5.d8Q6#=[Yj[E%(n9cq*E#F <pN^W< =I');
define('LOGGED_IN_SALT',   '0u9d0[%U$:x0dkMEpu%v=StG)2e+.uHF=9Ll[xo@ex*h53-y{drE($HE>N_ITpJg');
define('NONCE_SALT',       'pBhug;]uw$e.wTq4]n?;1|[29sXRj/Vn$a*})XDTFj_/@+tlcPA@K;|P!MY^Pz<:');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
