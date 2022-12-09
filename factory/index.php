<?php
require 'config.php';
require 'function.php';

//https://stackoverflow.com/a/15774702
$files = array_diff(scandir(APP_CSS_INPUT), array('.', '..'));
$content = array();

foreach($files as $index => $filename)
{
    $exp_filename = explode('@', $filename);
    
    ob_start();
    include APP_CSS_INPUT.'/'.$filename;
    $content[$exp_filename[0]] = ob_get_clean();
}

//print_r($content);
ksort($content);

if(file_put_contents(APP_CSS_OUTPUT, implode("\n", $content)))
{
  echo 'Generated<hr>'.date('r');
}
else
{
  echo 'Error<hr>'.date('r');
}