<?php
setcookie('save_message', 'Cookieに保存した値です', time() + 60 * 60 * 24 * 14);
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
    <table>
      <?php
      for ($i=1; $i<=100; $i++){
        if ($i % 2) {
          print('<tr style="background-color: #ccc">');
        } else {
          print('<tr>');
        }
        print('<td>' . $i . '行目</td>');
        print('</tr>');
      }
      ?>
    </table>
  </main>
</body>
</html>