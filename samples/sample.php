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
      $sum = 100+1050+200;
      ?>
      <?php
      $tax = 1.08;
      ?>
      合計金額は<?php
      print($sum);
      ?>円です
      税込価格は<?php
      print($sum*$tax);
      ?>円です
    </pre>
  </main>
</body>
</html>