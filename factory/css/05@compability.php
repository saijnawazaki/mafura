<?php
foreach($app_theme_breakpoint as $breakpoint => $value)
{
    if($breakpoint != '0')
    {
        echo "@media (min-width: $breakpoint) {\n";
    }
    $add_bp = $value['id'] ? '-'.$value['id'] : '';
    
    echo func_loop('pr'.$add_bp.'-*',array('padding-right'=>'*'),array('0'=>'0','1'=>'0.25rem','2'=>'0.5rem','3'=>'1rem','4'=>'1.5rem','5'=>'3rem'));
    echo func_loop('pl'.$add_bp.'-*',array('padding-left'=>'*'),array('0'=>'0','1'=>'0.25rem','2'=>'0.5rem','3'=>'1rem','4'=>'1.5rem','5'=>'3rem'));
    
    echo func_loop('mr'.$add_bp.'-*',array('margin-right'=>'*'),array('0'=>'0','1'=>'0.25rem','2'=>'0.5rem','3'=>'1rem','4'=>'1.5rem','5'=>'3rem'));
    echo func_loop('ml'.$add_bp.'-*',array('margin-left'=>'*'),array('0'=>'0','1'=>'0.25rem','2'=>'0.5rem','3'=>'1rem','4'=>'1.5rem','5'=>'3rem'));
    
    if($breakpoint != '0')
    {
        echo "}\n";
    }
}