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

      $records = $db->query('SELECT * FROM my_items');
      while ($record = $records->fetch()) {
        print($record['item_name'] . "\n");
      }
      ?>
    </pre>
  </main>
</body>
</html>