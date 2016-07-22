<?php
require_once('functions.php');

$id = $_GET['id'];

$dbh = connectDb();

$sql = "select imgdat from posts where id = ".$id;
$stmt = $dbh->prepare($sql);
$stmt->execute();

$row = $stmt->fetch();

// var_dump($row);
header( 'Content-Type: image/png' );
// header( 'Content-Type: '.$row['mime'] );
echo ($row['imgdat']);

?>