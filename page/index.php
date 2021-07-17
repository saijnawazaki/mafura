<?php
require 'init.php';

$path    = 'part';
$files = scandir($path);

$files = array_diff(scandir($path), array('.', '..'));

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../dist/mafura.css" rel="stylesheet" crossorigin="anonymous">
    <title>Mafura</title>
  </head>
  <body>
    <div class="navbar-container">
      <nav class="navbar bg-danger" role="navigation">
        <div class="container">
            <img class="navbar-brand navbar-brand-image" src="assets/mafura_40x40px.png">
        </div>
      </nav>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-2">
          <div class="position-sticky top-0">
            <div style="overflow:auto; height: 100vh;">
              <?php
              foreach($files as $index => $filename) {
                  echo '<a class="nav-bar" href="#'.str_replace('.php','',$filename).'">'.ucfirst(str_replace('.php', '', $filename)).'</a>';
              }
              ?>
              <hr>
              <small class="color-muted">
                  Mafura Code licensed MIT. This website contents licensed <a rel="nofollow" href="https://creativecommons.org/licenses/by/3.0/">CC-BY 3.0</a>.
                  Mafura Logo is property of <a rel="nofollow" href="https://manastudio.id/">Mana Studio</a>.
              </small>
            </div>

          </div>

        </div>
        <div class="col-12 col-md-10">
          <?php
          foreach($files as $index => $filename) {
              $exp_filename = explode('.', $filename);
              $filename_ext = end($exp_filename);

              if($filename_ext == 'php')
              {
                  include ($path.'/'.$filename);
              }
          }
          ?>
        </div>
      </div>

    </div>
    <script src="../dist/mafura.js" crossorigin="anonymous"></script>
  </body>
</html>
