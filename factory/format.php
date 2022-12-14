<?php
define('DEFAULT_COLOR_PATTERN', array(
  'primary-lighter' => 'primary-lighter',
  'primary-light' => 'primary-light',
  'primary' => 'primary',
  'primary-dark' => 'primary-dark',
  'primary-darker' => 'primary-darker',

  'success-lighter' => 'success-lighter',
  'success-light' => 'success-light',
  'success' => 'success',
  'success-dark' => 'success-dark',
  'success-darker' => 'success-darker',

  'danger-lighter' => 'danger-lighter',
  'danger-light' => 'danger-light',
  'danger' => 'danger',
  'danger-dark' => 'danger-dark',
  'danger-darker' => 'danger-darker',

  'warning-lighter' => 'warning-lighter',
  'warning-light' => 'warning-light',
  'warning' => 'warning',
  'warning-dark' => 'warning-dark',
  'warning-darker' => 'warning-darker',

  'info-lighter' => 'info-lighter',
  'info-light' => 'info-light',
  'info' => 'info',
  'info-dark' => 'info-dark',
  'info-darker' => 'info-darker',

  'white' => 'white',
  'white-dark' => 'white-dark',
  'white-darker' => 'white-darker',

  'black-lighter' => 'black-lighter',
  'black-light' => 'black-light',
  'black' => 'black',
  
  'transparent' => 'transparent',
));

$format = array(
  '$generated_at' => date('r'),

  '$zindex-dropdown' => 1000,
  '$zindex-sticky' => 1020,
  '$zindex-fixed-menu' => 1025,
  '$zindex-fixed' => 1030,
  '$zindex-offcanvas-backdrop' => 1040,
  '$zindex-offcanvas' => 1045,
  '$zindex-modal-backdrop' => 1050,
  '$zindex-modal' => 1055,
  '$zindex-popover' => 1070,
  '$zindex-tooltip' => 1080,

  /*Colors*/
    '$color-primary-lighter' => '#AECEFE',
    '$color-primary-light' => '#5D9DFD',
    '$color-primary' => '#0d6efd',
    '$color-primary-dark' => '#024AB6',
    '$color-primary-darker' => '#012965',

    '$color-success-lighter' => '#BAF2D8',
    '$color-success-light' => '#75E6B1',
    '$color-success' => '#30D98A',
    '$color-success-dark' => '#1D9A60',
    '$color-success-darker' => '#105635',

    '$color-warning-lighter' => '#FFEBAD',
    '$color-warning-light' => '#FFD65C',
    '$color-warning' => '#ffc107',
    '$color-warning-dark' => '#B88A00',
    '$color-warning-darker' => '#664D00',

    '$color-danger-lighter' => '#F6CBCF',
    '$color-danger-light' => '#EA8690',
    '$color-danger' => '#dc3545',
    '$color-danger-dark' => '#AD1F2D',
    '$color-danger-darker' => '#68121B',

    '$color-info-lighter' => '#B1EFFB',
    '$color-info-light' => '#64DEF7',
    '$color-info' => '#0dcaf0',
    '$color-info-dark' => '#0993AE',
    '$color-info-darker' => '#055261',

    '$color-white' => '#ffffff',
    '$color-white-dark' => '#D6D6D6',
    '$color-white-darker' => '#ADADAD',

    '$color-black-lighter' => '#525252',
    '$color-black-light' => '#292929',
    '$color-black' => '#000000',

  '$color-transparent' => 'transparent',

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
