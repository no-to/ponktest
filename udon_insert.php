<?php
  $pdo = new PDO("mysql:dbname=", "","");
  $st = $pdo->prepare("INSERT INTO udon VALUES(?,?)");
  $st->execute(array($_POST['name'], $_POST['price']));
?>
レコードを追加しました。
aaaaa
master push
