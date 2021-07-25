<?php
$format = array(
  '$generated_at' => date('r'),

  '$breakpoint-sm' => '576px',
  '$breakpoint-md' => '768px',
  '$breakpoint-lg' => '992px',
  '$breakpoint-xl' => '1200px',
  '$breakpoint-xxl' => '1400px',
);

$list_col = array(
    'xs' => array(
        'auto' => array(
            'flex' => '0 0 auto',
            'width' => 'auto'
        ),
        1 => array(
            'flex' => '0 0 auto',
            'width' => '8.33333333%'
        ),
        2 => array(
            'flex' => '0 0 auto',
            'width' => '16.66666667%'
        ),
        3 => array(
            'flex' => '0 0 auto',
            'width' => '25%'
        ),
        4 => array(
            'flex' => '0 0 auto',
            'width' => '33.33333333%'
        ),
        5 => array(
            'flex' => '0 0 auto',
            'width' => '41.66666667%'
        ),
        6 => array(
            'flex' => '0 0 auto',
            'width' => '50%'
        ),
        7 => array(
            'flex' => '0 0 auto',
            'width' => '58.33333333%'
        ),
        8 => array(
            'flex' => '0 0 auto',
            'width' => '66.66666667%'
        ),
        9 => array(
            'flex' => '0 0 auto',
            'width' => '75%'
        ),
        10 => array(
            'flex' => '0 0 auto',
            'width' => '83.33333333%'
        ),
        11 => array(
            'flex' => '0 0 auto',
            'width' => '91.66666667%'
        ),
        12 => array(
            'flex' => '0 0 auto',
            'width' => '100%'
        ),
    )
        
);

function create_loop($settings)
{
    $class_pattern = $settings['class_name'];
    $class_name_stack = isset($settings['class_name_stack']) ? true : false;
    $attributes = $settings['class_content'];
    $color_pattern = $settings['class_loop'];
    
    //echo 'OK';
    $payload = '';
    $payload_arr = array();
    foreach($color_pattern as $index => $value)
    {
        $id = str_replace('**', $index, $class_pattern);

        foreach($attributes as $index2 => $value2)
        {
            $final_val = $value2;
            if(strpos($value2, '**') !== false)
            {
                $final_val = str_replace('**', '', $value2);
                $final_val = $color_pattern[$index][$final_val]; 
            }

            $payload_arr[$id][$index2] = $final_val;
        }

    }

    //print('<pre>'.print_r($payload_arr,true).'</pre>');

    if($class_name_stack)
    {
        $class_name_list = '';
        $count = 0;
        $total_count = count($payload_arr);
        foreach($payload_arr as $class_name => $value)
        {
            $count++;

            if($count >= $total_count)
            {
                $class_name_list .= $class_name."\n";
            }
            else
            {
                $class_name_list .= $class_name.",\n";
            }
        }
        $payload .= $class_name_list;
        $payload .= '{'."\n";
        foreach($attributes as $index2 => $value2)
        {
            $final_val = $value2;
            if(strpos($value2, '**') !== false)
            {
                $final_val = str_replace('**', '', $value2);
                $final_val = $color_pattern[$index][$final_val]; 
            }

            $payload .= $index2.': '.$final_val.";\n";
        }
        $payload .= '}'."\n";
    }
    else
    {
        foreach($payload_arr as $class_name => $value)
        {
            $payload .= $class_name.' ';
            $payload .= '{'."\n";
            foreach($payload_arr[$class_name] as $att_id => $value)
            {
                $payload .= $att_id.': '.$value.";\n";
            }
            $payload .= '}'."\n";
        }
    }

        

    return $payload;
}
?>
