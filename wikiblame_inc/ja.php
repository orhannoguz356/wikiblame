<?php
/** WikiBlame
 *
 */
/** Japanese (日本語)
 * 
 * See the qqq 'language' for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Aotake
 * @author Flominator
 * @author Fryed-peach
 * @author Whym
 */

$messages['January'] = '1月';
$messages['February'] = '2月';
$messages['March'] = '3月';
$messages['April'] = '4月';
$messages['May'] = '5月';
$messages['June'] = '6月';
$messages['July'] = '7月';
$messages['August'] = '8月';
$messages['September'] = '9月';
$messages['October'] = '10月';
$messages['November'] = '11月';
$messages['December'] = '12月';
$messages['ui_lang'] = '表示言語';
$messages['lang'] = '言語';
$messages['project'] = 'プロジェクト';
$messages['article'] = 'ページ';
$messages['needle'] = '検索語';
$messages['skipversions'] = '間隔の何版かの検査をとばす';
$messages['ignorefirst'] = '初めの何版かの検査をとばす';
$messages['limit'] = '検査する版数';
$messages['start_date'] = '開始日';
$messages['date_format'] = 'YYYY年MM月DD日';
$messages['order'] = '順序';
$messages['newest_first'] = '新しいものを初めに';
$messages['oldest_first'] = '古いものを初めに';
$messages['binary_search_inverse'] = 'テキストの除去を探す（二分探索）';
$messages['search_method'] = '探索方法';
$messages['binary'] = '二分探索';
$messages['binary_in_wp'] = 'http://ja.wikipedia.org/wiki/%E4%BA%8C%E5%88%86%E6%8E%A2%E7%B4%A2';
$messages['linear'] = '線型';
$messages['interpolated'] = '二分探索 (版が多い場合に速い)';
$messages['ignore_minors'] = '細部の編集は無視する (実験的)';
$messages['force_wikitags'] = 'ウィキテキストとして検索する';
$messages['start'] = '開始';
$messages['reset'] = 'リセット';
$messages['manual'] = '使用説明';
$messages['manual_link'] = 'http://ja.wikipedia.org/wiki/Wikipedia:%E3%83%84%E3%83%BC%E3%83%AB/WikiBlame';
$messages['contact'] = '連絡先';
$messages['get_less_versions'] = 'あなたの検索クエリは__NUMREVISIONS__件の版を一度に検査する可能性があります。サーバーを保護するため、一度の呼び出しでは__ALLOWEDREVISIONS__件までしか許可されていません。設定を変更するか、検索方法をバイナリにしてください！';
$messages['wrong_skips'] = '設定の不備: 初めの__VERSIONSTOSKIP__版をとばしてしまうと、検査すべき__VERSIONSTOSEARCH__版のどれも処理されないことになります。';
$messages['search_in_progress_text'] = '「_ARTICLELINK_」の版履歴を、「<b>_NEEDLE_</b>」をプレインテキストとして検索しています';
$messages['search_in_progress_wikitags'] = '「_ARTICLELINK_」の版履歴を、「<b>_NEEDLE_</b>」をウィキテキストして検索しています';
$messages['no_differences'] = '検索された範囲の版で差分はみつかりませんでした。';
$messages['first_version'] = '変更は最初か最新の版で起きている必要がありますか？';
$messages['first_version_present'] = '__NEEDLE__は__REVISIONLINK__に作られた最初の版にすでに存在していました。';
$messages['earlier_versions_available'] = 'おそらく以前の版が存在します。';
$messages['execution_time'] = '実行時間: _EXECUTIONTIME_秒';
$messages['versions_found'] = '_NUMBEROFVERSIONS_版が見つかりました';
$messages['please_wait'] = 'お待ちください…';
$messages['binary_test'] = '_SOURCENUMBER_番の次に、_FIRSTDATEVERSION_における_FIRSTNUMBER_番と_SECONDNUMBER_番の違いを比較しています:';
$messages['dead_end'] = '行き止まりに入ってしまいました（理由はおそらくリバートか編集合戦です）';
$messages['once_more'] = 'もう一度、心を込めて:';
$messages['binary_enough'] = '何度か再試行してみましたが、記事の履歴が非常に込み入っているため、設定を変えて試行してください。';
$messages['insertion_found'] = 'LEFT_VERSION と RIGHT_VERSION の間で挿入されました';
$messages['deletion_found'] = 'LEFT_VERSION と RIGHT_VERSION の間で削除されました';
$messages['help_translating'] = 'translatewiki.net での翻訳作業を手伝う';
$messages['start_here'] = 'ここから検索';
$messages['too_much_versions'] = '検索の上限である__VERSIONLIMIT__版に達しました。__WAITMINUTES__分待ってから再試行するか、二分探索に切り替えてください。ご迷惑をおかけしてしまい申し訳ありません。';
$messages['not_found_at_all'] = '検索語がまったく見つかりませんでした。設定を間違ってはいませんか？';
