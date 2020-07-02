<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
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
      require('dbconnect.php');
      $statement = $db->prepare('UPDATE memos SET memo=? WHERE id=?');
      $statement->execute(array($_POST['memo'], $_POST['id']));
      ?>
    </pre>
    <p>メモの内容を変更しました</p>
    <p><a href="index.php">戻る</a></p>
  </main>
</body>
</html>