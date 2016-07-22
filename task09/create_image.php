<?php

require_once('functions.php');

$id = $_GET['id'];

$dbh = connectDb();

$sql = "select * from posts where id = '".$id."' ";
$stmt = $dbh->prepare($sql);
$stmt->execute();

$row = $stmt->fetchAll(PDO::FETCH_ASSOC);


header( 'Content-Type: '.$row['mime'] );
echo $row['imgdat'];


?>