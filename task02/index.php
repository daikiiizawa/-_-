<?php

$n = '';
$s = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  // var_dump($_POST);
  $n = $_POST['n'];
  $s = $_POST['s'];
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>文字列の連結</title>
</head>
<body>
  <h1>文字列の連結</h1>
  <form action="" method="post">
    n:正の整数(n)を入力してね <input type="number" name="n"><br>
    s:長さ1の文字列(s)を入力してね <input type="text" name="s"><br>
    <input type="submit" value="sをn個表示させるよ"><br>
    <?php echo 'n = '.$n.', s = '.$s.'のとき'; ?><br>
    <?php for ($i = 0; $i < $n; $i++) {echo $s;} ?>

  </form>

</body>
</html>