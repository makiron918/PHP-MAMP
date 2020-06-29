<?php
session_start();
$_SESSION['session_message'] = '値をセッションに保存しました';
?>
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
      <p>セッションに値を保存しました。次のページに移動してみましょう</p>
      &raquo; <a href="page02.php">Page02</a>
    </pre>
  </main>
</body>
</html>