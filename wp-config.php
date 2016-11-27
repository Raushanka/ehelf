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
define('DB_NAME', 'ehelf');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '`3-~UT-O,4l^~po]V>;L)|gsj]%a+Eu?+:lA+Q:+;pTUc!lZ(,lHJKxS:G4GeN{&');
define('SECURE_AUTH_KEY',  ' wY?z0UxN^+c_*MqEsc.-#EjZH)1oBk:f}-:NlqLGUAX7|8peTR 0OD3X:DoL:x-');
define('LOGGED_IN_KEY',    'Oe{uO`J]PvdQHQ`}7Al4x5m,yMU4@$Y.8I,K[+#to*sA(7C8VTQuK0WD<(F-D+fU');
define('NONCE_KEY',        '3D)r<m&,.GM_o^!(GS?0|gF(+#:[_D6Zz>#3cKh}7euy=a#{lZicogoYsU.B$5b#');
define('AUTH_SALT',        '$=5aO-Cn;Lt;3s`7 bs]x}sbDXxa6o-WZ+1X>S|lWpguV(,p93Zg+hlQDlnP*FLo');
define('SECURE_AUTH_SALT', 'h{;2+LQ fSTE)ClUYYnLm|b#OD}#vNM4xKH}M4.hz]_8SbzO)E^^xT7UyXHK(N4F');
define('LOGGED_IN_SALT',   '12H}ze]t^s&nfoQnDwLYp_l2YSj8=ivX$I$c=?]+`.1I.o]lA63h3 d9e;AvFzRd');
define('NONCE_SALT',       'Mr[PxuEfGVa<m#utld]>vML+;W-BA?)UdMnjxuKZDMI&7F;DNFI|lBa;18_iDVZa');

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
