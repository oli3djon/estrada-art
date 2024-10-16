<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '1' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sq!Xw9OLnx=FFSO(cG/PN*IPCqsj)1|m)>Gcpb1F(C`#eZ4tIX<{v%r XDg:hzC5' );
define( 'SECURE_AUTH_KEY',  'Z]B,yG+,<>iAy+!)Aec,k-+i+Jtz9 xVCg_3wja>+Ikukf~@a.38$vJkDqYQHu/e' );
define( 'LOGGED_IN_KEY',    '9RSRrY]gh6u* ZmxmNG%.7;#m]k%=3{]Y>gN65(>!5yAzIPb^jk*vI|%n0jS3]q ' );
define( 'NONCE_KEY',        'hJtJFEK+nG;a~`%XM=QsKptmAV-fm^aBRDN`mFi-!I!`j6&Qye?Di`eJW?|~Tv#H' );
define( 'AUTH_SALT',        '|f{b%rnaBSsiHN&}TezCG59@Y|uDtz5RY1+Eox3 #tYw &NIux]z[|#m})2s5V~g' );
define( 'SECURE_AUTH_SALT', 'p>*!jm?maD8dx~G{P#z&Wf{=W0wPHQk`YA2 pETH0q+7NP/}XY{.3rBR1m= l`+]' );
define( 'LOGGED_IN_SALT',   'e;R*t}Nwod{)]& cx%]x;=KlgJ7~b!Pd{Ge:d{n{|mgh3,RJIr+Du54+0Fvw_`!{' );
define( 'NONCE_SALT',       '!*YuC`rC#qHK/ay>D#Q(^MT=/JK-*>53Og{0d+7&lz$LTbvkA2_99g[3gb,z}m%e' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
