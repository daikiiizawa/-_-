<?php

session_start();
error_reporting(E_ALL & ~E_NOTICE);
function h($s)
{
  return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

$name = '';
$email = '';
$message = '';
$name_error = '';
$email_error = '';
$message_error = '';

$name = @$_SESSION['name'];
$email = @$_SESSION['email'];
$message = @$_SESSION['message'];
$name_error = @$_SESSION['name'];
$email_error = @$_SESSION['email'];
$message_error = @$_SESSION['message'];


var_dump($_SESSION);
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>お問い合わせフォーム</title>
  <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="post">
    <div class="inquiry">
    <table summary="お問い合わせに関する入力項目名とその入力欄">
    <h1>お問い合わせ</h1>

    <tr>
    <th>お名前<span> (必須)</span></th>
    <td><input type="text" name="name" value="<?php echo h($name); ?>" size="60"><?php if(!empty($name_error)): ?><?php echo $name_error; ?><?php endif; ?></td><br>
    </tr>

    <tr><th>メールアドレス<span> (必須)</span></th>
    <td><input type="text" name="email" value="<?php echo h($email); ?>" size="60"><?php if(!empty($email_error)): ?><?php echo $email_error; ?><?php endif; ?></td><br>
    </tr>

    <tr><th>種類<span> (必須)</span></th>
    <td><select name="type">
      <option value="商品について">商品について</option>
      <option value="お支払いについて">お支払いについて</option>
      <option value="当サイトについて">当サイトについて</option>
      <option value="その他">その他</option>
    </select></td><br>
    </tr>

    <tr><th>お問い合わせ内容<span> (必須)</span></th>
    <td><textarea class="message" type="text" name="message" cols="45" rows="10" wrap="off"><?php echo h($message); ?><?php if(!empty($email_error)): ?><?php echo $email_error; ?><?php endif;?></textarea></td><br>
    </tr>
    </table>
  </div>
  <div class="check">
    <input type="submit" value="確認画面へ">
  </div>
  </form>

</body>
</html>