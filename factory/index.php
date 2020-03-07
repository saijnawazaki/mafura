<?php
/*
* Mafura-Red Factory
* saijnawazaki
* Simple PHP for merge all css file to one "One For All"
*/

require 'config.php';
require 'format.php';

//https://stackoverflow.com/a/15774702
$path    = 'css';
$files = scandir($path);

$files = array_diff(scandir($path), array('.', '..'));
$content = array();
foreach($files as $index => $filename) {
    $exp_filename = explode('.', $filename);
    $filename_ext = end($exp_filename);

    if($filename_ext == 'css')
    {
        $exp_filename = explode('@', $filename);
        $content[$exp_filename[0]] = file_get_contents($path.'/'.$filename);

        //format
        foreach($format as $target_format => $replace_with_value) {
          $content[$exp_filename[0]] = str_replace($target_format, $replace_with_value, $content[$exp_filename[0]]);
        }
    }
}

ksort($content);

if(file_put_contents(OUTPUT_FILE_NAME.'.css', implode("\n", $content)))
{
  echo 'Generated<hr>'.date('r');
}
else
{
  echo 'Error<hr>'.date('r');
}
?>
