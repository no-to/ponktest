<?php
  $pdo = new PDO("mysql:dbname=men", "root","vagrant");
  $st = $pdo->prepare("DELETE FROM udon WHERE name=?");
  $st->execute(array($_GET['name']));
?>
レコードを削除しました。