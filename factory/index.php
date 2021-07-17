<?php
/*
* Mafura-Red Factory
* saijnawazaki
* Simple PHP for merge all css file to one "One For All"
*/

date_default_timezone_set('Asia/Jakarta');

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

        preg_match_all('/(\^[a-zA-Z0-9_]+\([a-zA-Z0-9_ \%\$\!\*\.\,\-\'\"\=\>\(\)]+\)\;)/', $content[$exp_filename[0]], $matches);


        if($filename == '6@common.css' && FALSE)
        {

          print('<pre>'.print_r($matches,true).'</pre>');
          //echo $content[$exp_filename[0]];
        }

        foreach($matches[0] as $var)
        {
            $function_final = str_replace('^', '', $var);

            eval("\$result = ".$function_final);

            $content[$exp_filename[0]] = str_replace($var, $result, $content[$exp_filename[0]]);
        }

        preg_match_all('/(\$[a-zA-Z0-9-_]+)/', $content[$exp_filename[0]], $matches);

        foreach($matches[0] as $var)
        {
          $content[$exp_filename[0]] = preg_replace("/\\" .$var. "(?=\s|$|,|\.|\;)/", $format[$var], $content[$exp_filename[0]]);

          /*foreach($format as $target_format => $replace_with_value) {
              //$content[$exp_filename[0]] = str_replace($target_format, $replace_with_value, $content[$exp_filename[0]]);
          }*/
        }



        if($filename == '6@common.css' && FALSE)
        {

          //print('<pre>'.print_r($matches,true).'</pre>');
          echo $content[$exp_filename[0]];
        }
        //print('<pre>'.print_r($format,true).'</pre>');
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
