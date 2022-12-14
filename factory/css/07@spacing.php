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

    echo func_loop('border-radius'.$add_bp.'-*',array('border-radius'=>'*'),array('0'=>'0','1'=>'0.2rem','2'=>'0.4rem','3'=>'0.8rem','4'=>'1.6rem','5'=>'3.2rem'));
    echo func_loop('border-radius-tl'.$add_bp.'-*',array('border-top-left-radius'=>'*'),array('0'=>'0','1'=>'0.2rem','2'=>'0.4rem','3'=>'0.8rem','4'=>'1.6rem','5'=>'3.2rem'));
    echo func_loop('border-radius-bl'.$add_bp.'-*',array('border-bottom-left-radius'=>'*'),array('0'=>'0','1'=>'0.2rem','2'=>'0.4rem','3'=>'0.8rem','4'=>'1.6rem','5'=>'3.2rem'));
    echo func_loop('border-radius-tr'.$add_bp.'-*',array('border-top-right-radius'=>'*'),array('0'=>'0','1'=>'0.2rem','2'=>'0.4rem','3'=>'0.8rem','4'=>'1.6rem','5'=>'3.2rem'));
    echo func_loop('border-radius-br'.$add_bp.'-*',array('border-bottom-right-radius'=>'*'),array('0'=>'0','1'=>'0.2rem','2'=>'0.4rem','3'=>'0.8rem','4'=>'1.6rem','5'=>'3.2rem'));

    echo func_loop('border-style'.$add_bp.'-*',array('border-style'=>'* !important'),array('solid'=>'solid','dashed'=>'dashed','dotted'=>'dotted','double'=>'double','groove'=>'groove','ridge'=>'ridge'));

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