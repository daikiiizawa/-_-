<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
    <title>感想投稿フォーム</title>
  </head>
  <body>
  <h1>感想投稿フォーム</h1>
  <p>名前と感想を入力してね! 画像も投稿できるよ!</p>
  <form action="inquiry.php" method="post" enctype="multipart/form-data">
    名前: <input type="text" name="name"><br>
    感想: <input type="text" name="impression"><br>

    画像: <input type="file" name="upload_file"><br>
    <input type="submit" value="投稿する">
  </form>
  <p><a href="result.php">投稿内容を見る</a></p>
  </body>
</html>

