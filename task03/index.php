<?php

session_start();

function h($s)
{
  return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

if (!empty($_SESSION['id']))
{
    header('Location: index.php');
    exit;
}

error_reporting(E_ALL & ~E_NOTICE);

$name = $_POST['name'];
$email = $_POST['email'];
$type = $_POST['type'];
$message = $_POST['message'];

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $errors = array();

  // if ($name == '')
  // {
  //   $errors['name'] = "お名前を入力してください。";
  // }
  // if ($email == '')
  // {
  //   $errors['email'] = "メールアドレスを入力してください。";
  // }
  // if ($message == '')
  // {
  //   $errors['message'] = "お問い合わせ内容を入力してください。";
  // }

  // if (empty($errors))
  // {
  //   header('Location: inquiry.php');
  //   // exit;
  // }
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
    value="<?php echo h($_SESSION['name']); ?>" size="60"></td><br>
    <?php if ($errors['name']) :?>
      <?php echo h($errors['name']) ,'<br>' ?>
    <?php endif; ?>
    </tr>

    <tr><th>メールアドレス<span> (必須)</span></th> <td><input type="text" name="email"
    value="<?php echo h($_SESSION['email']); ?>" size="60"></td><br>
    <?php if ($errors['email']) :?>
      <?php echo h($errors['email']) ,'<br>' ?>
    <?php endif; ?>
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
    <td><textarea class="message" type="text" name="message" cols="45" rows="10" wrap="off"><?php echo h($_SESSION['message']); ?></textarea></td><br>
    <?php if ($errors['message']) :?>
      <?php echo h($errors['message']) ,'<br>' ?>
    <?php endif; ?>
    </tr>
    </table>
  </div>
  <div class="check">
    <input type="submit" value="確認画面へ">
  </div>
  </form>

</body>
</html>