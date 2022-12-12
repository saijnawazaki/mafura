<?php
$mod_arr_bp = array();
$mod_arr_bp_no_0 = array();

foreach($app_theme_breakpoint as $bp => $value)
{
    $mod_arr_bp[$value['id']]['$1'] = $value['id'];

}

$mod_arr_bp['fluid']['$1'] = '-fluid';

echo generate_css(array('method'=>'header_stack_parse','placeholder' => '.container$1','data' => $mod_arr_bp));
?>
{
    width: 100%;
    padding-right: calc(1.5rem * 0.5);
    padding-left: calc(0 * 0.5);
    margin-right: auto;
    margin-left: auto;
}
<?php

$mod_arr_bp_no_0['576px']['header']['.container'] = 1;
$mod_arr_bp_no_0['576px']['header']['.container-sm'] = 1;
$mod_arr_bp_no_0['768px']['header']['.container'] = 1;
$mod_arr_bp_no_0['768px']['header']['.container-sm'] = 1;
$mod_arr_bp_no_0['768px']['header']['.container-md'] = 1;
$mod_arr_bp_no_0['992px']['header']['.container'] = 1;
$mod_arr_bp_no_0['992px']['header']['.container-sm'] = 1;
$mod_arr_bp_no_0['992px']['header']['.container-md'] = 1;
$mod_arr_bp_no_0['992px']['header']['.container-lg'] = 1;
$mod_arr_bp_no_0['1200px']['header']['.container'] = 1;
$mod_arr_bp_no_0['1200px']['header']['.container-sm'] = 1;
$mod_arr_bp_no_0['1200px']['header']['.container-md'] = 1;
$mod_arr_bp_no_0['1200px']['header']['.container-lg'] = 1;
$mod_arr_bp_no_0['1200px']['header']['.container-xl'] = 1;
$mod_arr_bp_no_0['1400px']['header']['.container'] = 1;
$mod_arr_bp_no_0['1400px']['header']['.container-sm'] = 1;
$mod_arr_bp_no_0['1400px']['header']['.container-md'] = 1;
$mod_arr_bp_no_0['1400px']['header']['.container-lg'] = 1;
$mod_arr_bp_no_0['1400px']['header']['.container-xl'] = 1;
$mod_arr_bp_no_0['1400px']['header']['.container-xxl'] = 1;

$mod_arr_bp_no_0['576px']['content'] = array('max-width'=>'540px');
$mod_arr_bp_no_0['768px']['content'] = array('max-width'=>'720px');
$mod_arr_bp_no_0['992px']['content'] = array('max-width'=>'960px');
$mod_arr_bp_no_0['1200px']['content'] = array('max-width'=>'1140px');
$mod_arr_bp_no_0['1400px']['content'] = array('max-width'=>'1320px');

echo generate_css(array('method'=>'parse_map','data' => $mod_arr_bp_no_0));

?>
.row {
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(-1 * 0);
  margin-right: calc(-0.5 * 1.5rem);
  margin-left: calc(-0.5 * 1.5rem);
}
.row > * {
  box-sizing: border-box;
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(1.5rem * 0.5);
  padding-left: calc(1.5rem * 0.5);
  margin-top: 0;
}

.col {
  flex: 1 0 0%;
}

<?php
$mod_arr_mod = array();

foreach($app_theme_breakpoint as $index => $value) {
    $mod_arr_mod[$index] = array(
        array(
            'list_class' => array(
                'place_holder' => '.row-cols$2$1 > *',
                'list' => array(
                    array('$1' => '-auto'),
                    array('$2' => $value['id']),
                )
            ),
            'list_attribute' => array(
                'flex' => '0 0 auto',
                'width' => 'auto',
            ),
        ),
        array(
            'list_class' => array(
                'place_holder' => '.row-cols$2$1 > *',
                'list' => array(
                    array('$1' => '-1'),
                    array('$2' => $value['id']),
                )
            ),
            'list_attribute' => array(
                'flex' => '0 0 auto',
                'width' => '100%',
            ),
        ),
        array(
            'list_class' => array(
                'place_holder' => '.row-cols$2$1 > *',
                'list' => array(
                    array('$1' => '-2'),
                    array('$2' => $value['id']),
                )
            ),
            'list_attribute' => array(
                'flex' => '0 0 auto',
                'width' => '50%',
            ),
        ),
        array(
            'list_class' => array(
                'place_holder' => '.row-cols$2$1 > *',
                'list' => array(
                    array('$1' => '-3'),
                    array('$2' => $value['id']),
                )
            ),
            'list_attribute' => array(
                'flex' => '0 0 auto',
                'width' => '33.3333333333%',
            ),
        ),
        array(
            'list_class' => array(
                'place_holder' => '.row-cols$2$1 > *',
                'list' => array(
                    array('$1' => '-4'),
                    array('$2' => $value['id']),
                )
            ),
            'list_attribute' => array(
                'flex' => '0 0 auto',
                'width' => '25%',
            ),
        ),
        array(
            'list_class' => array(
                'place_holder' => '.row-cols$2$1 > *',
                'list' => array(
                    array('$1' => '-5'),
                    array('$2' => $value['id']),
                )
            ),
            'list_attribute' => array(
                'flex' => '0 0 auto',
                'width' => '20%',
            ),
        ),
        array(
            'list_class' => array(
                'place_holder' => '.row-cols$2$1 > *',
                'list' => array(
                    array('$1' => '-6'),
                    array('$2' => $value['id']),
                )
            ),
            'list_attribute' => array(
                'flex' => '0 0 auto',
                'width' => '16.6666666667%',
            ),
        ),    
    );
}

$mod_arr = array(
    'mode' => 'bp_gen_gen',
    'list' => $mod_arr_mod,
);

//print_r($mod_arr);

$mod_arr_bp_no_0 = array();
foreach($app_theme_breakpoint as $index => $value) {
    $mod_arr_bp_no_0[$index]['auto']['header']['.row-cols'.$value['id'].'-auto > *'] = 1;  
    $mod_arr_bp_no_0[$index]['1']['header']['.row-cols'.$value['id'].'-1 > *'] = 1;  
    $mod_arr_bp_no_0[$index]['2']['header']['.row-cols'.$value['id'].'-2 > *'] = 1;  
    $mod_arr_bp_no_0[$index]['3']['header']['.row-cols'.$value['id'].'-3 > *'] = 1;  
    $mod_arr_bp_no_0[$index]['4']['header']['.row-cols'.$value['id'].'-4 > *'] = 1;  
    $mod_arr_bp_no_0[$index]['5']['header']['.row-cols'.$value['id'].'-5 > *'] = 1;  
    $mod_arr_bp_no_0[$index]['6']['header']['.row-cols'.$value['id'].'-6 > *'] = 1;  
    $mod_arr_bp_no_0[$index]['auto']['content'] = array('flex' => '0 0 auto', 'width' => 'auto');
    $mod_arr_bp_no_0[$index]['1']['content'] = array('flex' => '0 0 auto', 'width' => '100%');
    $mod_arr_bp_no_0[$index]['2']['content'] = array('flex' => '0 0 auto', 'width' => '50%');
    $mod_arr_bp_no_0[$index]['3']['content'] = array('flex' => '0 0 auto', 'width' => '33.3333333333%');
    $mod_arr_bp_no_0[$index]['4']['content'] = array('flex' => '0 0 auto', 'width' => '25%');
    $mod_arr_bp_no_0[$index]['5']['content'] = array('flex' => '0 0 auto', 'width' => '20%');
    $mod_arr_bp_no_0[$index]['6']['content'] = array('flex' => '0 0 auto', 'width' => '16.6666666667%');
}

echo generate_css(array('method'=>'parse_map_multiple','data' => $mod_arr_bp_no_0));

function generate_css($payload)
{
    $res = '';
    if($payload['method'] == 'header_stack_parse')
    {
        foreach($payload['data'] as $data_index => $value)
        {
            $final = $payload['placeholder'];
            foreach($payload['data'][$data_index] as $var => $print)
            {
                $final = str_replace($var,$print,$final);
            }

            if($res != '')
            {
                $res .= ",\n";
            }
            $res .= $final;
        }
    }
    elseif($payload['method'] == 'header_stack')
    {
        foreach($payload['data'] as $class_name => $value)
        {
            if($res != '')
            {
                $res .= ",\n";
            }

            $res .= $class_name;
        }
    }
    elseif($payload['method'] == 'body_stack')
    {
        foreach($payload['data'] as $attribute => $value)
        {
            $res .= $attribute.': '.$value.";\n";
        }
    }
    elseif($payload['method'] == 'parse_map_multiple')
    {
        foreach($payload['data'] as $breakpoint => $value)
        {
            if($breakpoint != '0')
            {
                $res .= "@media (min-width: $breakpoint) {\n";
            }
            
            foreach($payload['data'][$breakpoint] as $index_content => $val)
            {
                $res .= generate_css(array('method'=>'header_stack','data' => $payload['data'][$breakpoint][$index_content]['header']));
                $res .= "{\n";
                $res .= generate_css(array('method'=>'body_stack','data' => $payload['data'][$breakpoint][$index_content]['content']));
                $res .= "}\n";
            }
            
            if($breakpoint != '0')
            {
                $res .= "}\n";
            }
                 
        }
    }
    elseif($payload['method'] == 'parse_map')
    {
        foreach($payload['data'] as $breakpoint => $value)
        {
            if($breakpoint != '0')
            {
                $res .= "@media (min-width: $breakpoint) {\n";
            }
            
            $res .= generate_css(array('method'=>'header_stack','data' => $payload['data'][$breakpoint]['header']));
            $res .= "{\n";
            $res .= generate_css(array('method'=>'body_stack','data' => $payload['data'][$breakpoint]['content']));
            $res .= "}\n";

            if($breakpoint != '0')
            {
                $res .= "}\n";
            }    
        }
    }
    

    return $res;
}

$mod_arr_mod = array();
foreach($app_theme_breakpoint as $index_bp => $value)
{
    foreach($app_theme_size_scale_grid as $index => $val)
    {
        $mod_arr_mod[$index_bp][$index] = array(
            'header' => array(
                'place_holder' => '.col$2$1',
                'variable' => array(
                    array('$1' => $index),
                    array('$2' => $value['id']),
                )
            ),
            'body' => array(
                'flex' => '0 0 auto',
                'width' => $val,
            ),
        );
    }
}


$mod_arr = array(
    'mode' => 'bp_head_body',
    'list' => $mod_arr_mod,
);

echo gen_css($mod_arr);

$mod_arr_mod = array();

foreach($app_theme_size_scale_grid as $index => $value)
{
    if($index == '-auto')
    {
        continue;
    }
    $mod_arr_mod[$index] = array(
        'list_class' => array(
            'place_holder' => '.offset$1',
            'list' => array(
                array('$1' => $index),
            )
        ),
        'list_attribute' => array(
            'margin-left' => $value,
        ),
    );
}

$mod_arr = array(
    'mode' => 'gen_gen',
    'list' => $mod_arr_mod,
);

echo gen_css($mod_arr);
?>
