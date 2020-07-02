<?php
try {
  $db = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'root');
} catch(PDOException $e) {
  echo 'DB接続エラー: ' . $e->getMessage();
}
?>