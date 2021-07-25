<?php
/*!
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

        preg_match_all('/@@[a-zA-Z0-9\_\-\s]+\(+[a-zA-Z0-9\(\)\'\"\_\-\=\>\.\*\,\%\$\[\]\s]+\)\;/', $content[$exp_filename[0]], $matches);

        //print('<pre>'.print_r($matches,true).'</pre>');

        foreach($matches[0] as $var)
        {
            $function_final = str_replace('@@', '', $var);

            //echo $function_final.'<hr>';
            eval("\$result = ".$function_final);
            //echo $result;

            $content[$exp_filename[0]] = str_replace($var, $result, $content[$exp_filename[0]]);
        }

        preg_match_all('/(\$[a-zA-Z0-9-_]+)/', $content[$exp_filename[0]], $matches);

        //print('<pre>'.print_r($matches,true).'</pre>');

        foreach($matches[0] as $var)
        {
          //$content[$exp_filename[0]] = preg_replace("/\\" .$var. "(?=\s|$|,|\.|\;)/", $format[$var], $content[$exp_filename[0]]);
          $content[$exp_filename[0]] = str_replace($var, $format[$var], $content[$exp_filename[0]]);

          /*foreach($format as $target_format => $replace_with_value) {
              //$content[$exp_filename[0]] = str_replace($target_format, $replace_with_value, $content[$exp_filename[0]]);
          }*/
        }



        if($filename == '03@flexboxgrid.css' && FALSE)
        {

          //print('<pre>'.print_r($matches,true).'</pre>');
          echo $content[$exp_filename[0]];
        }
        //print('<pre>'.print_r($format,true).'</pre>');

        
    }
}

foreach($content as $index => $value)
{
  //parse css 
  //https://stackoverflow.com/questions/39881319/php-to-get-all-class-names-in-css-file
  if($content[$index])
  {
    $content_css = $content[$index];

    preg_match_all("/(\@[a-zA-Z0-9\_\-]+\(+[a-zA-Z0-9\_\-\']+\)+\;)/", $content_css, $matches);

    foreach($matches[0] as $var)
    {
      $exp_var = explode('(', $var);
      $function_name = $exp_var[0];
      $function_param = $exp_var[1];
      $exp_fp = explode(')', $function_param);
      $function_param = $exp_fp[0];
      $function_param = str_replace("'", "", $function_param);

      if($function_name == '@replace_ref')
      {
        $content_css = preg_replace("/(\@[a-zA-Z0-9\_\-]+\(+[a-zA-Z0-9\_\-\']+\)+\;)/", "", $content_css);
        $content[$index] = $content_css;
        //echo $function_name.'--'.$function_param.'<hr>';
        //read origin

        //https://stackoverflow.com/questions/1581049/preg-replace-out-css-comments
        $regex = array(
        "`^([\t\s]+)`ism"=>'',
        "/\/\*+[a-zA-Z0-9 ]+\*\//"=>"",
        "`^\/\*(.+?)\*\/`ism"=>"",
        "`(\A|[\n;]+)/\*.+?\*/`s"=>"$1", 
        "`(\A|[;\s]+)//.+\R`"=>"$1\n",
        "`(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+`ism"=>"\n"
        );
        $content_css = preg_replace(array_keys($regex),$regex,$content_css);

        $content_css = str_replace("\r", "", $content_css); // get rid of new lines
        $content_css = str_replace("\n", "", $content_css); // get rid of new lines
        $rules = [];
        

        $first = explode('}', $content_css);
        if($first)
        {
            // Loop each item
            foreach($first as $v)
            {
                // explode() on the opening curly brace and the ZERO index should be the class declaration or w/e
                $second = explode('{', $v);

                // The final item in $first is going to be empty so we should ignore it
                if(isset($second[0]) && $second[0] !== '')
                {
                    //https://stackoverflow.com/questions/1581049/preg-replace-out-css-comments
                    $regex = array(
                    "`^([\t\s]+)`ism"=>'',
                    "/\/\*+[a-zA-Z0-9 ]+\*\//"=>"",
                    "`^\/\*(.+?)\*\/`ism"=>"",
                    "`(\A|[\n;]+)/\*.+?\*/`s"=>"$1", 
                    "`(\A|[;\s]+)//.+\R`"=>"$1\n",
                    "`(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+`ism"=>"\n"
                    );
                    $second[1] = preg_replace(array_keys($regex),$regex,$second[1]);
                    //echo $second[1].'<hr>';
                    $second[1] = str_replace("\r", "", $second[1]); // get rid of new lines
                    $second[1] = str_replace("\n", "", $second[1]); // get rid of new lines
                    $rules[trim($second[0])] = array(
                      'class_name' => trim($second[0]),
                      'class_content' => trim($second[1])
                    );
                }
            }
        }

        $origin_rules = $rules;

        //echo $index.'<hr>';
        //print('<pre>'.print_r($rules,true).'</pre>');
        $content_css_2 = $content[$function_param];
        $content_css_2 = preg_replace("/(\@[a-zA-Z0-9\_\-]+\(+[a-zA-Z0-9\_\-\']+\)+\;)/", "", $content_css_2);
        //echo $function_name.'--'.$function_param.'<hr>';
        //read origin

        //https://stackoverflow.com/questions/1581049/preg-replace-out-css-comments
        $regex = array(
        "`^([\t\s]+)`ism"=>'',
        "/\/\*+[a-zA-Z0-9 ]+\*\//"=>"",
        "`^\/\*(.+?)\*\/`ism"=>"",
        "`(\A|[\n;]+)/\*.+?\*/`s"=>"$1", 
        "`(\A|[;\s]+)//.+\R`"=>"$1\n",
        "`(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+`ism"=>"\n"
        );
        $content_css_2 = preg_replace(array_keys($regex),$regex,$content_css_2);

        $content_css_2 = str_replace("\r", "", $content_css_2); // get rid of new lines
        $content_css_2 = str_replace("\n", "", $content_css_2); // get rid of new lines
        $rules = [];
        

        $first = explode('}', $content_css_2);
        if($first)
        {
            // Loop each item
            foreach($first as $v)
            {
                // explode() on the opening curly brace and the ZERO index should be the class declaration or w/e
                $second = explode('{', $v);

                // The final item in $first is going to be empty so we should ignore it
                if(isset($second[0]) && $second[0] !== '')
                {
                    //https://stackoverflow.com/questions/1581049/preg-replace-out-css-comments
                    $regex = array(
                    "`^([\t\s]+)`ism"=>'',
                    "/\/\*+[a-zA-Z0-9 ]+\*\//"=>"",
                    "`^\/\*(.+?)\*\/`ism"=>"",
                    "`(\A|[\n;]+)/\*.+?\*/`s"=>"$1", 
                    "`(\A|[;\s]+)//.+\R`"=>"$1\n",
                    "`(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+`ism"=>"\n"
                    );
                    $second[1] = preg_replace(array_keys($regex),$regex,$second[1]);
                    //echo $second[1].'<hr>';
                    $second[1] = str_replace("\r", "", $second[1]); // get rid of new lines
                    $second[1] = str_replace("\n", "", $second[1]); // get rid of new lines
                    $rules[trim($second[0])] = array(
                      'class_name' => trim($second[0]),
                      'class_content' => trim($second[1])
                    );
                }
            }
        }

        $target_rules = $rules;
        //echo $index.'<hr>';
        //print('<pre>'.print_r($rules,true).'</pre>');

        //build target rule again.
        foreach($target_rules as $classname => $value)
        {
          if(isset($origin_rules[$classname]))
          {
            $target_rules[$classname] = $origin_rules[$classname];
            unset($origin_rules[$classname]);
          }
        }

        $content[$function_param] = '';
        //build
        foreach($target_rules as $classname => $value)
        {
          $content[$function_param] .= $classname." ";
          $content[$function_param] .= "{\r\n";

          $ctn_class = trim($value['class_content']);
          $exp_cc = explode(';', $ctn_class);
          //print('<pre>'.print_r($exp_cc,true).'</pre>');
          foreach($exp_cc as $val)
          {
            if(trim($val))
            {
              $content[$function_param] .= trim($val).";\r\n";  
            }
            
          }

          $content[$function_param] .= "}\r\n";
        }

        //org
        $content[$index] = '';
        //build
        foreach($origin_rules as $classname => $value)
        {
          $content[$index] .= $classname." ";
          $content[$index] .= "{\r\n";

          $ctn_class = trim($value['class_content']);
          $exp_cc = explode(';', $ctn_class);
          //print('<pre>'.print_r($exp_cc,true).'</pre>');
          foreach($exp_cc as $val)
          {
            if(trim($val))
            {
              $content[$index] .= trim($val).";\r\n";  
            }
            
          }

          $content[$index] .= "}\r\n";
        }

      }
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
