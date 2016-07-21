<?php
function h($s)
{
  return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}
error_reporting(E_ALL & ~E_NOTICE);

$name = $_POST['name'];
$email = $_POST['email'];
$type = $_POST['type'];
$message = $_POST['message'];

$success = true;
// $name_error= '';
// $email_error= '';
// $message_error= '';

if(strpos($email,'@')===false){
  $email_error = '@マークがありません';
  $success = false;
}
if(strlen($email)!=mb_strlen($email,'utf-8')){
  $email_error = 'メールアドレスに全角文字が含まれています';
  $success = false;
}
if(empty($name)){
  $name_error = 'お名前を入力して下さい';
  $success = false;
}
if(empty($email)){
  $email_error = 'メールアドレスを入力して下さい';
  $success = false;
}
if(empty($message)){
  $message_error = 'お問い合わせ内容を入力して下さい';
  $success = false;
}

session_start();

$_SESSION['name']= $_POST['name'];
$_SESSION['email']= $_POST['email'];
$_SESSION['type']= $_POST['type'];
$_SESSION['message']= $_POST['message'];

$_SESSION['name_error'] = $name_error;
$_SESSION['email_error'] = $email_error;
$_SESSION['message_error'] = $message_error;

if($_POST['name'] == '' || $_POST['email'] == '' || $_POST['message'] == ''){
  header('Location:index2.php');
  exit;
}
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
  <tr><th>お名前         </th><td><?php echo h($name) ?></td></tr><br>
  <tr><th>メールアドレス </th><td><?php echo h($email)?></td></tr><br>
  <tr><th>種類           </th><td><?php echo h($type) ?></td></tr><br>
  <tr><th>お問い合わせ内容</th><td><?php echo nl2br(h($message)) ?></td></tr><br>
  </table>
  </div>

  <form action="index2.php" method="post" >
    <input type="submit" value="戻る" class="back">
  </form>

  <form action="thankyou.php" method="post">
    <input type="submit" value="送信する">
  </form>

</body>
</html>

