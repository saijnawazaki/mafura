<?php
foreach($app_theme_breakpoint as $breakpoint => $value)
{
    if($breakpoint != '0')
    {
        echo "@media (min-width: $breakpoint) {\n";
    }
    $add_bp = $value['id'] ? '-'.$value['id'] : '';
    
    echo func_loop('border'.$add_bp.'-*',array('border'=>'* solid #000000'),$app_theme_size);
    echo func_loop('border-r'.$add_bp.'-*',array('border-right'=>'* solid #000000'),$app_theme_size);
    echo func_loop('border-b'.$add_bp.'-*',array('border-bottom'=>'* solid #000000'),$app_theme_size);
    echo func_loop('border-l'.$add_bp.'-*',array('border-left'=>'* solid #000000'),$app_theme_size);
    echo func_loop('border-t'.$add_bp.'-*',array('border-top'=>'* solid #000000'),$app_theme_size);

    $theme_size_mod = $app_theme_size;
    $theme_size_mod['pill'] = '10rem';
    $theme_size_mod['round'] = '50%';

    echo func_loop('border-radius'.$add_bp.'-*',array('border-radius'=>'*'),$app_theme_size);
    echo func_loop('border-radius-tl'.$add_bp.'-*',array('border-top-left-radius'=>'*'),$app_theme_size);
    echo func_loop('border-radius-bl'.$add_bp.'-*',array('border-bottom-left-radius'=>'*'),$app_theme_size);
    echo func_loop('border-radius-tr'.$add_bp.'-*',array('border-top-right-radius'=>'*'),$app_theme_size);
    echo func_loop('border-radius-br'.$add_bp.'-*',array('border-bottom-right-radius'=>'*'),$app_theme_size);

    echo func_loop('border-style'.$add_bp.'-*',array('border-style'=>'* !important'),array('solid'=>'solid','dashed'=>'dashed','dotted'=>'dotted','double'=>'double','groove'=>'groove','ridge'=>'ridge'));

    echo func_loop('p'.$add_bp.'-*',array('padding'=>'*'),$app_theme_size);
    echo func_loop('pr'.$add_bp.'-*',array('padding-right'=>'*'),$app_theme_size);
    echo func_loop('pb'.$add_bp.'-*',array('padding-bottom'=>'*'),$app_theme_size);
    echo func_loop('pl'.$add_bp.'-*',array('padding-left'=>'*'),$app_theme_size);
    echo func_loop('pt'.$add_bp.'-*',array('padding-top'=>'*'),$app_theme_size);

    echo func_loop('m'.$add_bp.'-*',array('margin'=>'*'),$app_theme_size);
    echo func_loop('mr'.$add_bp.'-*',array('margin-right'=>'*'),$app_theme_size);
    echo func_loop('mb'.$add_bp.'-*',array('margin-bottom'=>'*'),$app_theme_size);
    echo func_loop('ml'.$add_bp.'-*',array('margin-left'=>'*'),$app_theme_size);
    echo func_loop('mt'.$add_bp.'-*',array('margin-top'=>'*'),$app_theme_size);

    echo func_loop('left'.$add_bp.'-*',array('left'=>'*'),$app_theme_size);
    echo func_loop('bottom'.$add_bp.'-*',array('bottom'=>'*'),$app_theme_size);
    echo func_loop('right'.$add_bp.'-*',array('right'=>'*'),$app_theme_size);
    echo func_loop('top'.$add_bp.'-*',array('top'=>'*'),$app_theme_size);

    echo func_loop('w'.$add_bp.'-*',array('weight'=>'*'),$app_theme_size_percent);
    echo func_loop('h'.$add_bp.'-*',array('height'=>'*'),$app_theme_size_percent);

    echo func_loop('opacity'.$add_bp.'-*',array('opacity'=>'*'),$app_theme_size_percent_dec);
    
    foreach(array('fixed','absolute','relative','sticky') as $index => $val)
    {
        ?>
        .position<?=$add_bp?>-<?=$val?> {
            position: <?=$val?>;
            <?=isset($app_theme_z_index[$val]) ? 'z-index:'.$app_theme_z_index[$val].';' : ''?>
        }
        <?php
    }
    

    if($breakpoint != '0')
    {
        echo "}\n";
    }
}