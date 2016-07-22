
<?php

require_once('functions.php');

if (empty($_POST['name']) || empty($_POST['impression']))
{
  echo '名前か感想が未入力です';
  echo '<a href="index.php">戻る</a>';
  exit;
}


$name = $_POST['name'];
$impression = $_POST['impression'];
$file = $_FILES['upload_file'];
$filename = $file['name'];
// $image = file_get_contents($file["tmp_name"]);
// $result = move_uploaded_file($file['tmp_name'], "uploads/".$file['name']);

// バイナリデータ
$fp = fopen($file["tmp_name"], "rb");
$imgdat = fread($fp, filesize($file["tmp_name"]));
fclose($fp);
$imgdat = addslashes($imgdat);

// 拡張子
$dat = pathinfo($file["name"]);
$extension = $dat['extension'];

// var_dump($image);
// var_dump($file);
// exit;

// MIMEタイプ
if($extension == "jpg" || $extension == "jpeg" ) {
  $mime = "image/jpeg";
}
else if($extension == "gif" ){
  $mime = "image/gif";
}
else if($extension == "png" ){
  $mime = "image/png";
}


$dbh = connectDb();

$sql = "insert into posts (name, impression, imgdat, mime) values
        (:name, :impression, :imgdat, :mime)";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(":name", $name);
$stmt->bindParam(":impression", $impression);
$stmt->bindParam(":imgdat", $imgdat);
$stmt->bindParam(":mime", $mime);

$stmt->execute();

// echo $sql;
// echo '成功しました';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
    <title>投稿確認画面</title>
  </head>
  <body>
  <h1>下記の内容が投稿されました</h1>
  <p>名前: <?php echo h($name) ?></p>
  <p>感想: <?php echo h($impression) ?></p>
  <p>画像: </p>
<!-- <img src=logo.png?id=1> -->
  <!-- <p><a href="index.php">戻る</a></p> -->
  <p><a href="result.php">投稿内容を見る</a></p>

  </body>
</html>

