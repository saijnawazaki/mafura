<?php
define('DEFAULT_COLOR_PATTERN', array(
  'primary' => 'primary',
  'primary-lighten' => 'primary-lighten',
  'primary-darken' => 'primary-darken',

  'secondary' => 'secondary',
  'secondary-lighten' => 'secondary-lighten',
  'secondary-darken' => 'secondary-darken',

  'success' => 'success',
  'success-lighten' => 'success-lighten',
  'success-darken' => 'success-darken',

  'danger' => 'danger',
  'danger-lighten' => 'danger-lighten',
  'danger-darken' => 'danger-darken',

  'warning' => 'warning',
  'warning-lighten' => 'warning-lighten',
  'warning-darken' => 'warning-darken',

  'info' => 'info',
  'info-lighten' => 'info-lighten',
  'info-darken' => 'info-darken',

  'light' => 'light',
  'light-lighten' => 'light-lighten',
  'light-darken' => 'light-darken',

  'dark' => 'dark',
  'dark-lighten' => 'dark-lighten',
  'dark-darken' => 'dark-darken',

  'muted' => 'muted',
  'black' => 'black',
  'white' => 'white',
  'transparent' => 'transparent',
));

$format = array(
  '$generated_at' => date('r'),
  '$zindex-sticky' => 1020,
  '$zindex-fixed' => 1030,
  '$zindex-fixed-menu' => 1021,
  '$zindex-modal-backdrop' => 1040,
  '$zindex-modal' => 1050,
  '$zindex-popover' => 1060,
  '$zindex-total' => 1070,

  /*Colors*/
  '$color-primary' => '#007bff',
  '$color-primary-lighten' => '#7ebcff',
  '$color-primary-darken' => '#00428a',

  '$color-secondary' => '#d52941',
  '$color-secondary-lighten' => '#f4596e',
  '$color-secondary-darken' => '#9b2837',

  '$color-success' => '#28a745',
  '$color-success-lighten' => '#06fb3e',
  '$color-success-darken' => '#057d20',

  '$color-danger' => '#dc3545',
  '$color-danger-lighten' => '#f40017',
  '$color-danger-darken' => '#ae0918',

  '$color-warning' => '#ffc107',
  '$color-warning-lighten' => '#ffd861',
  '$color-warning-darken' => '#bd8e00',

  '$color-info' => '#17a2b8',
  '$color-info-lighten' => '#00d3f4',
  '$color-info-darken' => '#005562',

  '$color-light' => '#ececec',
  '$color-light-darken' => '#dfdfdf',
  '$color-light-lighten' =>'#f7f7f7',

  '$color-dark' => '#343a40',
  '$color-dark-lighten' => '#767677',
  '$color-dark-darken' => '#141424',

  '$color-muted' => '#6c757d',
  '$color-black' => '#000000',
  '$color-white' => '#ffffff',
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
