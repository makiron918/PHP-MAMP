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
      $week_name = ['日', '月', '火', '水', '木', '金', '土'];
      print($week_name[date('w')]);
      $date =sprintf('%04d年 %02d月 %02d日', 2018, 1, 5);
      print($date);
      ?>
    </pre>
  </main>
</body>
</html>