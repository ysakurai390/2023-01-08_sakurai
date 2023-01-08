<?php

$dsn = 'mysql:dbname=mydb;host=localhost';
$user = 'root';
$password = 'root';

try {
  $dbh = new PDO($dsn, $user, $password);
  echo("接続に成功しました。<br>");
} catch (PDOException $e) {
  echo('Error:'.$e->getMessage());
}

$count = $dbh->exec('INSERT INTO items SET id=1, item_name="peach",price=210, keyword="缶詰,ピンク,甘い"');
echo $count . '件のデータを挿入しました。';

$dbh = null;