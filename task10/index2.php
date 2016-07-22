
<?php
require_once('functions.php');

error_reporting(E_ALL & ~E_NOTICE);

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $name = $_POST['name'];
  $title = $_POST['title'];
  $image = $_FILES['image'];

  $success = true;
  $name_error= '';
  $title_error= '';
  $image_error= '';

  if($name == ''){
    $name_error = 'お名前を入力して下さい';
    $success = false;
  }
  if($title == ''){
    $title_error = '画像タイトルを入力して下さい';
    $success = false;
  }
  if($image['error'] == ''){
    $image_error = '画像ファイルを選択して下さい';
    $success = false;
  }

  session_start();

  $_SESSION['name']= $_POST['name'];
  $_SESSION['title']= $_POST['title'];
  $_SESSION['image']= $_FILES['image'];


  if ($name != '' && $title != '' && $image['error'] =='')
  {
    $createdAt = date('Y-m-d H:i:s');
    // $data = $title . "\t" . $impression . "\t" . $name . "\t" . $createdAt . "\n";
    echo '入力されている';
    var_dump($createdAt);
    var_dump($_SESSION);
    $_SESSION = array();
    session_destroy();
  }

}
// $posts = array_reverse($posts);
?>

<!DOCTYPE html>
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html">
      <title>画像投稿掲示板</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <h1>画像投稿掲示板</h1>
      <form action="" method="post" enctype="multipart/form-data">
          投稿者: <input type="text" name="name" value="<?php echo h($name); ?>">
          <?php if (!empty($name_error)){echo "<span>{$name_error}</span>";}?><br>
          画像タイトル: <input type="text" name="title" value="<?php echo h($title); ?>">
          <?php if (!empty($title_error)){echo "<span>{$title_error}</span>";}?><br>
          画像ファイル: <input type="file" name="image" value="<?php echo h($image); ?>">
          <?php if (!empty($image_error)){echo "<span>{$image_error}</span>";}?><br>
          <input type="submit" value="投稿する">
      </form>

      <h3>現在の投稿は<?php echo h(count ($posts));?>件</h3>
      <?php if (count($posts)) : ?>
        <?php foreach ($posts as $post) : ?>
          <?php list($title, $impression, $name, $createdAt) = explode("\t", $post); ?>
            <li>
              [<?php echo h($title) ?>] 「<?php echo h($impression) ?>」
              (<?php echo h($name) ?>) - <?php echo $createdAt ?>
            </li>
        <?php endforeach; ?>
      <?php endif; ?>
  </body>
</html>
