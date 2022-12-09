<?php
require '../factory/config.php';
$files = array_diff(scandir('page'), array('.', '..'));
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mafura</title>
    <link href="../dist/mafura.css" rel="stylesheet">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <?php
        foreach($files as $index => $filename) {
            $exp_filename = explode('.', $filename);
            $filename_ext = end($exp_filename);

            if($filename_ext == 'php')
            {
                include ('page/'.$filename);
            }
        }
    ?>
  </body>
</html>