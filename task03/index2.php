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
if(isset($_SESSION['type'])){
  $type = $_SESSION['type'];
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
  <form action="inquiry2.php" method="post">


    <div class="inquiry">
    <table summary="お問い合わせに関する入力項目名とその入力欄">
    <h1>お問い合わせ</h1>
    <tr><th>お名前<span> (必須)</span></th> <td><input type="text" name="name"
    value="<?php echo h($name); ?>" size="60">
    <?php if (!empty($name_error)){echo "<span class='red'>{$name_error}</span>";}?>
    </td></tr>

    <tr><th>メールアドレス<span> (必須)</span></th> <td><input type="text" name="email"
    value="<?php echo h($email); ?>" size="60"><br>
    <?php if(!empty($email_error)){echo "<span class='red'>{$email_error}</span>";}?>
    </td></tr>

    <tr><th>種類<span> (必須)</span></th>
    <td><select name="type">
      <option value="商品について"
      <?php if ($_SESSION['type'] == "商品について"): ?>
      <?php echo 'selected'; ?>
      <?php endif; ?>
      >
      商品について</option>
      <option value="お支払いについて"
      <?php if ($_SESSION['type'] == "お支払いについて"): ?>
      <?php echo 'selected'; ?>
      <?php endif; ?>
      >
      お支払いについて</option>
      <option value="当サイトについて"
      <?php if ($_SESSION['type'] == "当サイトについて"): ?>
      <?php echo 'selected'; ?>
      <?php endif; ?>
      >
      当サイトについて</option>
      <option value="その他"
      <?php if ($_SESSION['type'] == "その他"): ?>
      <?php echo 'selected'; ?>
      <?php endif; ?>
      >
      その他</option>
    </select></td><br>
    </tr>

    <tr><th>お問い合わせ内容<span> (必須)</span></th>
    <td><textarea class="message" type="text" name="message" cols="45" rows="10" wrap="off"><?php echo h($message); ?></textarea><br>
    <?php if(!empty($message_error)){echo "<span class='red'>{$message_error}</span>";}?>
    </td></tr>
    </table>
  </div>
  <div class="check">
    <input type="submit" value="確認画面へ">
  </div>
  </form>

</body>
</html>