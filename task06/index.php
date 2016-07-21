<?php
$filename = "sales.csv";
$fp = fopen($filename,'r');
$title = fgetcsv($fp);

while($line = fgetcsv($fp)){
  $res[] = array_combine($title,$line);
}

fclose($fp);

$sales = 0;
for ($i=0; $i < count($res); $i++) {
  $sales += $res[$i]['売上'];
}

$average = $sales / count($res);

echo '社員数: ' .count($res);
echo ' 売上合計: ' .$sales;
echo ' 売上平均: ' .$average;

$header_sjis = array('社員数','売上合計','売上平均');
$summary = array(count($res),$sales,$average);
$result = array($header_sjis,$summary);

// var_dump($result);

mb_convert_variables('Shift_JIS', 'UTF-8', $header_sjis); //文字コードをUTF-8からShiftJISに変更
$csv = fopen('report.csv', 'a'); //csvファイルと書き込みモードを指定
fputcsv($csv, $header_sjis); //変換した配列をcsvファイルに書き込み実行
fputcsv($csv, $summary); //変換した配列をcsvファイルに書き込み実行
fclose($csv); //csvファイルを閉じる

?>
