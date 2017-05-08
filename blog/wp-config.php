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
define('DB_NAME', 'startuph_wp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'startuph_wp');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'feijao123');

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
define('AUTH_KEY',         'wnzF?.$hfJL`8IRw$}HvD*sP+rXfL!b4w`Su$![FFgwBgA{KT#LXG<?XGx5mJj#B');
define('SECURE_AUTH_KEY',  'JLq~W$(JE5KMQotHtLyjiUAkg])x^>,p_.X?#7[TjXC>*wDAX5~Lc0v)p0s]UzDM');
define('LOGGED_IN_KEY',    'JPNV]0t|[1>8ZltvPK.[$[mpx/ejVb<0Lw:i(b^U4f}Jp.)U5$ #YzeP[pI+RE5*');
define('NONCE_KEY',        '9,TWD,a)nib[Y+d:yWFn1ExajBe&TbS915w J3)|cQOyS>U+;=%ip(1rAvr%k&:*');
define('AUTH_SALT',        'z#=snAZyng?*]>x15~>P@(M@m59c;CJfRBF1:-K<-fd*d2TFo?3dGsL9U1eH^z23');
define('SECURE_AUTH_SALT', '~-%=m[=VV,$3>-2esLZ?C2|:}2?(?BV~wkF,eh`YU}&!eIFdvSSgBo8KLW^0-(6Y');
define('LOGGED_IN_SALT',   'Ap)<:z?Bc8HmAjf%q0GZ*w3T4I5y~6Hbs2}<j:.8@J^+QGk!loc{urNo%Um87$)l');
define('NONCE_SALT',       'DlH+$jp5^`F)|90dm|>Ub;iY:o Z1m7+hl(qRyf:yG2(U4a#87s`q-c2F(yCF{5k');

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
