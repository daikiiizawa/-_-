<?php

session_start();

mb_language("ja");
mb_internal_encoding("UTF-8");

$to = "daiki.813.gon@gmail.com";
$subject = $_SESSION['title'];

// $body = "■お名前：" . $_SESSION["name"] ."\n";
$body = "■内容：" . $_SESSION["message"] ."\n";

$fromEmail = $_SESSION['email'];
$header = "From: " . $fromEmail;

mb_send_mail($to,$subject,$body,$header);

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
  <p>お問い合わせありがとうございます。</p>
</body>
</html>