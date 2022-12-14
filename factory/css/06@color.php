<?php
foreach($app_theme_breakpoint as $breakpoint => $value)
{
    if($breakpoint != '0')
    {
        echo "@media (min-width: $breakpoint) {\n";
    }
    $add_bp = $value['id'] ? '-'.$value['id'] : '';
    echo func_loop('bg'.$add_bp.'-*',array('background-color'=>'*'),$app_theme_color);
    echo func_loop('color'.$add_bp.'-*',array('color'=>'*'),$app_theme_color);
    echo func_loop('border-color'.$add_bp.'-*',array('border-color'=>'* !important'),$app_theme_color);
    
    if($breakpoint != '0')
    {
        echo "}\n";
    }
}

