<?php

$s = '';
$n = '';
// パターン1(substr)
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $s = $_POST['s'];
  $n = $_POST['n'];
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>文字列からN番目</title>
</head>
<body>
  <h1>文字列からN番目</h1>
  <form action="" method="post">
    s:半角アルファベット文字列(s)を入力してね <input type="text" name="s"><br>
    n:正の整数(n)を入力してね <input type="number" name="n"><br>

    <input type="submit" value="n文字目のアルファベットを出力するよ"><br>
    <?php echo 's = '.$s.', n = '.$n.'のとき'; ?><br>
    <?php if ($n <= strlen($s)) : ?>
    <?php echo substr($s, $n-1, 1); ?>
    <?php else : ?>
    <?php echo strlen($s) . '以下の正の整数を入力してください'; ?>
    <?php endif ; ?>
  </form>
</body>
</html>





<?php
// パターン2_数字が大きいとエラーになる理由がわからない
echo '<hr>'. 'パターン2(string[n])' . '<br>';

$string = 'abcdefg';
$n = 3;
$strlen = strlen($string);
$answer = $string[$n-1];

if ($n <= $strlen) {
  echo $answer;
}
else{
  echo $strlen . '以下の正の整数を入力してください';
}
?>