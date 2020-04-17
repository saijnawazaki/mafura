<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../dist/mafura.css">

    <title>Mafura Mix</title>
  </head>
  <body>
    <?php include('path/header.php') ?>
    <div class="container">
      <h1>Hello, world!</h1>
      <hr>
      <?php
        for($x = 0; $x < 100; $x++)
        {
          echo $x.'<br>';

        }

        echo 'INI BOT';
      ?>
    </div>

  </body>

  <script src="../dist/mafura.js"></script>
</html>
