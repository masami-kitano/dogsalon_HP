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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
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
define('DB_NAME', 'LAA1115524-cct90n');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA1115524');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'bs6CIgaV');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql138.phy.lolipop.lan');

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
define('AUTH_KEY', '4GpQHI>Q|@Jl:<hXC>Foba3>qi+/<7xeFCv80#i7%_H=fpJgtUZUR]-nk,X82*Pu');
define('SECURE_AUTH_KEY', '*Yg7y-Z`!(N-(};j#d&8F^F(l#o3]]Zwkhn`pE=bdrUrrOqNsg!#v%EVEG"1{87L');
define('LOGGED_IN_KEY', 'giV!x5@-^Vf|4omM~!#-Uj>2SYl}Wx2V<?En3DQe4Ym8p%%R=;OaMQa)$}bMECiY');
define('NONCE_KEY', 'K?`BjaNbpx<?;PjVtviI""<FDFi>P;|w"d%o,L""yRVW4U$xuxeiTBvTY%A@s6Sg');
define('AUTH_SALT', 'W%D:bVq8CTsCOKGT1f$<A0e!uPP4j%WEFOjikb|[[.<Htcuzki#RE7p*i7d:Eab:');
define('SECURE_AUTH_SALT', 'jB*hqFu"X^7"w~aL5*}q7QCMqU]C`NZ5N3}g<8WNIO8i%lU7XXRTJ{e<@;QI4O@R');
define('LOGGED_IN_SALT', '5VWI"r!IRF+^>DK72EyS,rzb=OZY]P~5GA_E,($Ls4%t7EEnfrW0?z1~W!lzU=0c');
define('NONCE_SALT', '"%0.NQ}^ES]QMG=}1^UTmu6JQ*5OcO[?D:B~U/DqOo9qbux*[;Z;4`J6!Mj>40%v');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp2_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
