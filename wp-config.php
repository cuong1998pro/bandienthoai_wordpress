<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BR3z6XI~Ff|cM]n_?M5LSXDs#[u6,,q|DYIVUG^R15#_2OLTOVv6OQ!=o;$.4._m' );
define( 'SECURE_AUTH_KEY',  '/gckeD6h- *qUIkr<5oSXC5wCV8e2*{o%bCbG0f]{J>qz;E9*$I4p)28#.eLQ97]' );
define( 'LOGGED_IN_KEY',    '-iq4vC]b(]uvXbDt6IaOV%Zz?-~^O=Q<gI{/j9z Qh$jZh;]GqQHcmY^Mp#SnbHR' );
define( 'NONCE_KEY',        '&{<7lV~@b0^}t6q32{nDz Ozzc1 JiVv`2d2h)I@yD),fktO9;/|eQqj&7}sOq:)' );
define( 'AUTH_SALT',        'zY~r6;G7+j)-uaTi;YSQ]~;,;`F]]]BJ.yr%YL4_v6.D:]KQcb]k{,Ab6@C9Tl[:' );
define( 'SECURE_AUTH_SALT', 'tY(K^A1o9QfV3vAMbk^1C}#V61 XYHloy;3>v;u Yp]lgJ+p2T|z?2G3FNd^`Oco' );
define( 'LOGGED_IN_SALT',   'SLZ]RYFGP*tc?}5K:1R&nQb1^1(?j+X?O0yJz0b,~IDv5S0fn3<+xz~3&jH&?_2u' );
define( 'NONCE_SALT',       'bBk{c*>I-7[Aihs*f0gYSH|fR|]0F`AP;uC x{Uu5Km`X/<rp?8g~t3$Ifn6.xC<' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
