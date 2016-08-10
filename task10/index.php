
<?php
require_once('functions.php');

error_reporting(E_ALL & ~E_NOTICE);

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $name = $_POST['name'];
  $title = $_POST['title'];
  $file = $_FILES['file'];

  $success = true;
  $name_error= '';
  $title_error= '';
  $file_error= '';
 var_dump($file);

// バリデーション
  if($name == ''){
    $name_error = 'お名前を入力して下さい';
    $success = false;
  }
  if($title == ''){
    $title_error = '画像タイトルを入力して下さい';
    $success = false;
  }
  // if(isset($file['error']) || is_int($file['error'])){
  //   $file_error = '画像ファイルを選択して下さい';
  //   $success = false;
  // }
// バリデーション突破後
  if ($name != '' && $title != '' && isset($file))
  {
    $createdAt = date('Y-m-d');
    // $imgdat = file_get_contents($file['tmp_name']);
    $result = move_uploaded_file($file['tmp_name'], "/var/www/html/task10/uploads/".$file['name']);
    // 拡張子
    $dat = pathinfo($file["name"]);
    $extension = $dat['extension'];

    // MIMEタイプ
    if($extension == "jpg" || $extension == "jpeg") {
      $mime = "image/jpeg";
    }
    else if($extension == "png" ){
      $mime = "image/png";
    }

    var_dump($mime);
    var_dump($file);
    $dbh = connectDb();

    $sql = "insert into posts (name, title, imgdat, mime, created_at) values
            (:name, :title, :imgdat, :mime, :createdAt)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":imgdat", $imgdat);
    $stmt->bindParam(":mime", $mime);
    $stmt->bindParam(":createdAt", $createdAt);

    $stmt->execute();
    // echo '成功';
  }

}

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
          画像ファイル: <input type="file" name="file">
          <?php if (!empty($file_error)){echo "<span>{$file_error}</span>";}?><br>
          <input type="submit" value="投稿する">
      </form>
      <p><a href="view.php">投稿内容を見る</a></p>
  </body>
</html>
