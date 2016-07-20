<?php

session_start();

function h($s)
{
  return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

error_reporting(E_ALL & ~E_NOTICE);

$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['type'] = $_POST['type'];
$_SESSION['message'] = $_POST['message'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>確認画面</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="inquiry">
  <table summary="お問い合わせに関する入力項目名とその入力欄" id="inquiry">
  <h1>お問い合わせ</h1>
  <tr><th>お名前         </th><td><?php echo h($_SESSION['name']) ?></td></tr><br>
  <tr><th>メールアドレス </th><td><?php echo h($_SESSION['email'])?></td></tr><br>
  <tr><th>種類           </th><td><?php echo h($_SESSION['type']) ?></td></tr><br>
  <tr><th>お問い合わせ内容</th><td><?php echo nl2br(h($_SESSION['message'])) ?></td></tr><br>
  </table>
  </div>

  <form action="index.php" method="post" >
    <input type="hidden" name="name" value="<?php echo h($name) ?>">
    <input type="hidden" name="email" value="<?php echo h($email) ?>">
    <input type="hidden" name="type" value="<?php echo h($type) ?>">
    <input type="hidden" name="message" value="<?php echo h($message) ?>">
    <input type="submit" value="戻る" class="back">
  </form>

  <form action="thankyou.php" method="post">
    <input type="hidden" name="name" value="<?php echo h($name) ?>">
    <input type="hidden" name="email" value="<?php echo h($email) ?>">
    <input type="hidden" name="type" value="<?php echo h($type) ?>">
    <input type="hidden" name="message" value="<?php echo h($message) ?>">
    <input type="submit" value="送信する">
  </form>

</body>
</html>


