<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>PHP</title>
</head>
<body>
  <header>
    <h1 class="font-weight-normal">PHP</h1>
  </header>
  <main>
    <h2>Practice</h2>
    <pre>
      <?php
      try {
        $db = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'root');
      } catch(PDOException $e) {
        echo 'DB接続エラー: ' . $e->getMessage();
      }

      $memos = $db->query('SELECT * FROM memos ORDER BY id DESC');
      ?>

      <article>
        <?php while($memo = $memos->fetch()): ?>
        <p><a href="#"><?php print($memo['memo']); ?></a></p>
        <time><?php print($memo['created_at']); ?></time>
        <hr>
        <?php endwhile; ?>
      </article>
    </pre>
  </main>
</body>
</html>