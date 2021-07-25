<?php
$format = array(
  '$generated_at' => date('r'),

);

function func_loop($class_pattern,$attributes, $color_pattern)
{
    //echo 'OK';
    $payload = '';
    $payload_arr = array();
    foreach($color_pattern as $index => $value)
    {
        $id = str_replace('*', $index, $class_pattern);

        foreach($attributes as $index2 => $value2)
        {
            $final_val = $value2;
            if(strpos($value2, '*') !== false)
            {
                $final_val = str_replace('*', $value, $value2);
            }

            $payload_arr[$id][$index2] = $final_val;
        }

    }

    //print('<pre>'.print_r($payload_arr,true).'</pre>');

    foreach($payload_arr as $class_name => $value)
    {
        $payload .= '.'.$class_name.' ';
        $payload .= '{'."\n";
        foreach($payload_arr[$class_name] as $att_id => $value)
        {
            $payload .= $att_id.': '.$value.";\n";
        }
        $payload .= '}'."\n";
    }

    return $payload;
}
?>
