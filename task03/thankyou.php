<!-- task03完成版 -->
<?php

session_start();

//文字コードをUTF-8からShiftJISに変更
mb_convert_variables('Shift_JIS', 'UTF-8', $_SESSION);
//csvファイルと書き込みモードを指定
$csv = fopen('contact.csv', 'a');
//変換した配列をcsvファイルに書き込み実行
fputcsv($csv, $_SESSION);
//csvファイルを閉じる
fclose($csv);

$_SESSION = array();
session_destroy();

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>完了画面</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>お問い合わせ</h1>
  <p>お問い合わせありがとうございました。</p>
</body>
</html>