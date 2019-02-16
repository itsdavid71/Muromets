<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'shop2208');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w[TTB+<rwvBxRLGHE0He@ADD7w#emvr)q}=&5UF%R--81j2-H1Oc,? }{UM:rQC=');
define('SECURE_AUTH_KEY',  'pq=pkn,`{;E~XaZde^SPTT8`8p+E>baaAB*-.+&|?Z*YM]iP^ p6p]K<TV,qZO!g');
define('LOGGED_IN_KEY',    'g0=fTB8ClLS&4FI5C1 `|mU,ojWbm=:,1XN@dM,s$Fn!d]zcmcvyG(;y#PIgI[Tj');
define('NONCE_KEY',        '*0$zr)qoi2KKbiz&A%6Sq6)[HLsD$EXoox-]kB>k^@1:.%$2`kS8 6>A#UUYp>JJ');
define('AUTH_SALT',        'Garj_FTNvec^lTGslM6l*e0*kFu U/9LbkV:qqqj_T.<:Zwls:I[b(RvN*nx!U27');
define('SECURE_AUTH_SALT', '])ie{;CmO<K -L}t.)@^%9D|`^&7C E?fPNb`2&06,[MZx9k+C[8,iS!HZkx%4<(');
define('LOGGED_IN_SALT',   'qZ]$$gaVM%M2wl|2JVDq&&V5{:>nZ0xNG?B_1&=BAov.2r)7|Ze$DS<+r3sG<L[J');
define('NONCE_SALT',       'U_yv{=:mgT;lRtHe}SHf|C+.;e,jr9)f7G%92L0ZF.`($P}}r.jC6qbp=twe^VK9');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
