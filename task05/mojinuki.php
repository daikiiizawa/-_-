<?php

echo 'パターン1(substr)' . '<br>';
$s = 'abcdefg';
$n = 10;
$strlen = strlen($s);
$answer = substr($s, $n-1, 1);

if ($n <= $strlen) {
  echo $answer;
}
else{
  echo $strlen . '以下の正の整数を入力してください';
}


// パターン2
echo '<hr>'. 'パターン2(string[n])' . '<br>';

$string = 'abcdefg';
$n = 4;
$strlen = strlen($string);
$answer = $string[$n-1];

if ($n <= $strlen) {
  echo $answer;
}
else{
  echo $strlen . '以下の正の整数を入力してください';
}

?>