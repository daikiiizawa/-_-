<?php
function h($s)
{
  return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if(isset($_SESSION['name'])){
  $name = $_SESSION['name'];
}
if(isset($_SESSION['email'])){
  $email = $_SESSION['email'];
}
if(isset($_SESSION['title'])){
  $title = $_SESSION['title'];
}
if(isset($_SESSION['message'])){
  $message = $_SESSION['message'];
}
if(isset($_SESSION['name_error'])){
  $name_error = $_SESSION['name_error'];
}
if(isset($_SESSION['email_error'])){
  $email_error = $_SESSION['email_error'];
}
if(isset($_SESSION['title_error'])){
  $title_error = $_SESSION['title_error'];
}
if(isset($_SESSION['message_error'])){
  $message_error = $_SESSION['message_error'];
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>お問い合わせフォーム</title>
  <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
  <form action="inquiry.php" method="post">
    <div class="inquiry">
    <table summary="お問い合わせに関する入力項目名とその入力欄">

    <h1>お問い合わせ</h1>
    <tr><th>お名前<span> (必須)</span></th> <td><input type="text" name="name"
    value="<?php echo h($name); ?>" size="60">
    <?php if (!empty($name_error)){echo "<span>{$name_error}</span>";}?>
    </td></tr>

    <tr><th>メールアドレス<span> (必須)</span></th> <td><input type="text" name="email"
    value="<?php echo h($email); ?>" size="60"><br>
    <?php if(!empty($email_error)){echo "<span>{$email_error}</span>";}?>
    </td></tr>

    <tr><th>件名<span> (必須)</span></th> <td><input type="text" name="title"
    value="<?php echo h($title); ?>" size="60"><br>
    <?php if(!empty($title_error)){echo "<span>{$title_error}</span>";}?>
    </td></tr>


    <tr><th>お問い合わせ内容<span> (必須)</span></th>
    <td><textarea class="message" type="text" name="message" cols="45" rows="10" wrap="off"><?php echo h($message); ?></textarea><br>
    <?php if(!empty($message_error)){echo "<span>{$message_error}</span>";}?>
    </td></tr>
    </table>
  </div>
  <div class="check">
    <input type="submit" value="確認画面へ">
  </div>
  </form>

</body>
</html>