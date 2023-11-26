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
define( 'DB_NAME', 'wordpress-abc' );

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
define( 'AUTH_KEY',         'lLoEPy8~Lbb_FwSv?f^~^U}iTz-4;3?yMb1?D/6TmHy_~2ActOoXicy{[8u>$QJd' );
define( 'SECURE_AUTH_KEY',  'QBQ&;5TIA[Rhr33m:#Npm`9=w5fUM A{-(#o7[i+ A1Gas uI8|$sWX+/t&r dUg' );
define( 'LOGGED_IN_KEY',    '[pCRG}5Pr@HfZ@e%_fD8?GFVi|l&B2F}i j1l&vq;Gql]m%br1${+gP,-)pu/(UE' );
define( 'NONCE_KEY',        'E4Jk7aQob<$_hiQf^Pb? w7Z_fv9xMvu{:|h4bU,3NepA_[>&7Z}Ut3N>g@<lPq.' );
define( 'AUTH_SALT',        '>~:P)__P_Bi3eWCuv7CIfDYS8D$QQueLd}faDG<nVKN-`_TIND@iOl,H3U^|fAr4' );
define( 'SECURE_AUTH_SALT', 'KG([in>eCtkGr52t^24w?puP8>dvB)aRtJGXPo]/epJ-zgvYj8bXIR/738n#6&_G' );
define( 'LOGGED_IN_SALT',   ' ;S8(m_.Ax+K|QI6{^Zq7w:6O`:zZ#8e_x XD,(Z<^vo6Sl;Kx})$5k| y3)7Ze,' );
define( 'NONCE_SALT',       'E>l@w!t0H8yTUww/PuVUAu$l/5VI*BBU9E`vFKeI<P0 RMFy+Hgh27/;^xki*nY}' );

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
