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
    $file = file_get_contents('https://h2o-space.com/feed/json/');
    $json = json_decode($file);

    foreach ($json->items as $item):
    ?>
    <a href="<?php print($item->url); ?>"><?php print($item->title); ?></a>
    </pre>
  </main>
</body>
</html>