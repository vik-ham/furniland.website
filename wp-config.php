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
 * * Настройки MySQL
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
define( 'DB_NAME', 'happyday' );

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
define( 'AUTH_KEY',         'z;i?.4g)>NvS?}/47mg`=f,N~ M v[H.zL@0MW$(AuZnfccE<6R,MeqR/!WVsL(-' );
define( 'SECURE_AUTH_KEY',  'snZC9=YmSyMRP/#_iM19nAG7o2].V~E3Flu0$;Nb_&BvE1O2R|.809)jE:jwpqGz' );
define( 'LOGGED_IN_KEY',    'MN++z)pR3c7BMSq)2*y3rmyKcd=4u}?CFh*3r{W}6.g,)9DJ+<;ne0_m:Q{0,CZw' );
define( 'NONCE_KEY',        ':hzT`,:Sq;R)/xB H=l ctRqb!5nxkrtma;gXL@B:f7Qu zJ>{%xov|Km<G+9uz#' );
define( 'AUTH_SALT',        'Z>ynd]lds#(RV>%Iy_Vta9,p<qZBzr8bi{5:JxwkW64!k_]YO/1(y=NMmCWxJseY' );
define( 'SECURE_AUTH_SALT', 'E[9JXjGeU3HbI5}g6I8?A1,8YPP=$2-A(.^@D{WRCU=,io_*N,2q`aJ Lmp,?DH?' );
define( 'LOGGED_IN_SALT',   'V0s~!n*qlj jcznV2+CWYGN/oU84jg &EW`~F(9N2?PScEA34,I}4;p3jG$ly}K}' );
define( 'NONCE_SALT',       'Ir}8#Z|Ho2sr[?%d@<w,HQ`dE9(7P^;<89}u,q8e4x`OBPCw5[U6JUXxizusf=1Q' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'happyday_';

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
