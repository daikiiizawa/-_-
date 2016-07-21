<?php

session_start();

// $ShiftJIS = $_SESSION; //文字コードを変えるので、専用の配列を作成してコピー
// mb_convert_variables('Shift_JIS', 'UTF-8', $ShiftJIS); //文字コードをUTF-8からShiftJISに変更
// $csv = fopen('contact.csv', 'a'); //csvファイルと書き込みモードを指定
// fputcsv($csv, $ShiftJIS); //変換した配列をcsvファイルに書き込み実行
// fclose($csv); //csvファイルを閉じる

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