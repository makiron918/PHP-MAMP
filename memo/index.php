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

      $count = $db->exec('INSERT INTO my_items SET maker_id=1, item_name="もも", price=210');
      echo $count . '件のデータを挿入しました';
      ?>
    </pre>
  </main>
</body>
</html>