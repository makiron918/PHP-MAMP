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
      for ($i=1; $i<=7; $i++){
        if ($i % 2) {
          print('<tr style="background-color: #ccc">');
        } else {
          print('<tr>');
        }
        print('<td>' . $i . '行目</td>');
        print('</tr>');
      }
      <tr>
        <td>1行目</td>
      </tr>
      <tr style="background-color: #ccc">
        <td>1行目</td>
      </tr>
    </table>
  </main>
</body>
</html>