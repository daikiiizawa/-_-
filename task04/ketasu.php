<!-- task04完成版 -->
<?php

$n = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  // var_dump($_POST);
  $n = $_POST['n'];
}


?>

<!DOCTYPE html>
<html>
<head>
  <title>数字の桁数</title>
</head>
<body>
  <h1>数字の桁数</h1>
  <form action="" method="post">
    n:正の整数(n)を入力してね<input type="number" name="n"><br>
    <input type="submit" value="nの桁数を計算するよ"><br>
    <?php echo 'n = ' . $n . ' のとき'; ?><br>
    <?php echo '桁数は' . strlen($n); ?>

  </form>

</body>
</html>