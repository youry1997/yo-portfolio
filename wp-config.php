<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp2020' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e6I*|r!7X{y{Grvw,D;_B2Y;Q(*+~qcF{XZ)S3h1yqfV)Ko{)[taq^8ZBP[alQrQ' );
define( 'SECURE_AUTH_KEY',  '__rl<t]Apfll=XDA*yu6-ldnY N.bQ0zL]o^BB]}o:3e#fNz+gS69#vJ-%N_yXa0' );
define( 'LOGGED_IN_KEY',    '2;u=EIfC_kE$Hez1HqW1kn:ik4NrI2w+h%V(7g2` upi3-oGr<D=)]B7? m@a9 {' );
define( 'NONCE_KEY',        'P|#;YH*Z+e^*AW.k:o+>g-VZ=>i!RNt<a7!J(.vq.~F8u-d0}s;Zw,|qL(M0gd5z' );
define( 'AUTH_SALT',        'Q$?V*2e@d-Hvqakm7X X.zx.2Q/.56K0>Owo=N=R>vir LJ@Xw}8I@^0Ppbj8s~~' );
define( 'SECURE_AUTH_SALT', '>Z}7[iF-tQ2G=v]i #/}$?[XCGK5&= ~GD,Vg2:##m}b*8meA,^nqiy5.Gf!#<:K' );
define( 'LOGGED_IN_SALT',   'i{FGYa*uuX6HflmO9b{,#(Fyl(9PEZOv#q0t=PwP}c l(W7I7sOMt;BjLoQx9q6Y' );
define( 'NONCE_SALT',       'p&bU*p c&B/pJjwlO${Y$veeo`:Wp-_3R:<fF-F-|qZMx[sy:@jdCsE^a9eFBI,}' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
