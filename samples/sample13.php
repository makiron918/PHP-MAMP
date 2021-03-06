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
    $zip = '９８７-６５４７';

    $zip = mb_convert_kana($zip, 'a', 'UTF-8');
    if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)) {
      print('郵便番号：〒' . $zip);
    } else {
      print('※ 郵便番号を 123-4567の形式でご記入ください');
    }
    ?>
    </pre>
  </main>
</body>
</html>