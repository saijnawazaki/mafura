<?php
foreach($app_theme_breakpoint as $breakpoint => $value)
{
    if($breakpoint != '0')
    {
        echo "@media (min-width: $breakpoint) {\n";
    }
    $add_bp = $value['id'] ? '-'.$value['id'] : '';
    echo func_loop('text'.$add_bp.'-*',array('text-align'=>'*'),array('left'=>'left','right'=>'right','center'=>'center','justify'=>'justify'));

    echo func_loop('float'.$add_bp.'-*',array('float'=>'*'),array('left'=>'left','right'=>'right'));

    echo func_loop('line-height'.$add_bp.'-*',array('line-height'=>'*'),$app_theme_size_scale);

    if($breakpoint != '0')
    {
        echo "}\n";
    }
}