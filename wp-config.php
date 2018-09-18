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
define('AUTH_KEY',         '(0s+Ie+kdidPZ+k-&Z[}iv8~?Pg$)cFMZ_+LV%U7N(+x:|EJ#p&O<zi?$HA<*MHE');
define('SECURE_AUTH_KEY',  '1nc2*-o7A/?@M>Z%,Ie:}]v8RVH+X*$--qW1(E.mu2vz+D=Fk&1lpPx v,2|_jtC');
define('LOGGED_IN_KEY',    '-[ vh3HL<orQj:><n5&5nP(o2_:W@^jLN4Xz{EAfJIdDPq,&d0-10^Zu!i$zJIOf');
define('NONCE_KEY',        'Rxu!t(~RdC%:}A]9F%@A_5bN3vu8ebQ|d4$Vk#-RxKr8t<Qn^|+i1n0z-iroKk1b');
define('AUTH_SALT',        'Z![MN}  ]>m@d(eOrJeZ}#0Y:3J^0|Lqn=L;p/^]Q8bbHRFKA+s*i[T0Xt7OiqjT');
define('SECURE_AUTH_SALT', 'rQ7#5]F?4/OetybMA(o3g)2B$E-Mq(H)wOZ](#%NRx,[%:8Su*tlFEi~ZD2#i]Xo');
define('LOGGED_IN_SALT',   '+Gb)= Pi4(0DXePNtXyyY?nshhyGeE[H?U|or++WX2K-=?.K=4`DKl83`=^t8SK[');
define('NONCE_SALT',       'S+JixaN>t$86995u74?|kG+lb8+u?0uIz/B|Wm7&[GQnfbZxcgB<L)?3y=rXC?<!');
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
