<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'database_name_here');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'username_here');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'password_here');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J.fI (jU~=@U=*ow&Yt|5Ny_u>Jj}x^tc4EZeDH _Eip;{?7*X+pJiIYko[4b>-6');
define('SECURE_AUTH_KEY',  'Ik)zdRx23B:^u5:78-#1y IXQCqwryb?Nr]X/hqy^Xwa,f&tn?1JR]Y7NU> 5v|s');
define('LOGGED_IN_KEY',    '-sVM8+!-t:w]1|lC+&t{67Kf5BGEEPkcAVdj_e[cM-b;9lR@YgEqeMNQn,vP2}7+');
define('NONCE_KEY',        '[zQ`:|1oGe,~!T/^tIjrlsOIwA{X,v3<1I`7g-6cK_oSx/%2Z@d/YpDGYt&Itt<N');
define('AUTH_SALT',        'uv,YO9&b<d:GinZzDY^U>zvsN+Asd;c]@x66 D/JA!!nOFw_H1E0UvsZo#},u~KZ');
define('SECURE_AUTH_SALT', '4!)S?vF1h=VR=Jm?5n[|ST[Z2[j+I*0IUCL?+H/f.Sr>&4~1ZJBNoeAvD!FXO:r!');
define('LOGGED_IN_SALT',   'Ae)U3Z763V+z`Fx0^Wy|FMh+P7Gs|zReAC<k=KYWxn)27b+m(1JY6K~,n6|RGi1<');
define('NONCE_SALT',       'sL [e!SPg?pe?r=DM4JPMfc7+0KBSxX{JS+:q6@q~2yI[PxQD#i+eKJ1J/gE^a[j');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST']);
