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
    $age = '２０';

    $age = mb_convert_kana($age, 'n', 'UTF-8');
    if (is_numeric($age)) {
      print($age . '歳');
    } else {
      print('※ 年齢が数字ではありません');
    }
    ?>
    </pre>
  </main>
</body>
</html>