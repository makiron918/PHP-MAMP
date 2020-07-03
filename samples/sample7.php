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
      if (date('G') < 9) {
        print('※ 現在は受付時間外です');
      } else {
        print('ようこそ');
      }
      ?>
    </pre>
  </main>
</body>
</html>