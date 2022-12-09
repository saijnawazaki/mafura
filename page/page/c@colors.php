<h1>Colors</h1>
<hr>
<h3>Background</h3>
<hr>
<?php
    $code = '';
    foreach($app_theme_color as $index => $value)
    {
        $code .= '<div class="bg-'.$index.'">.'.$index.'</div>'."\n";
    }

    echo $code;
?>
<code><pre class="bg-white-dark p-3"><?=htmlentities($code)?></pre></code>
<h3>Color</h3>
<hr>
<?php
    $code = '';
    foreach($app_theme_color as $index => $value)
    {
        $code .= '<div class="color-'.$index.'">.color-'.$index.'</div>'."\n";
    }

    echo $code;
?>
<code><pre class="bg-white-dark p-3"><?=htmlentities($code)?></pre></code>
<h3>Border Color</h3>
<hr>
<?php
    $code = '';
    foreach($app_theme_color as $index => $value)
    {
        $code .= '<div class="border-5 border-color-'.$index.'">.border-color-'.$index.'</div>'."\n";
    }

    echo $code;
?>
<code><pre class="bg-white-dark p-3"><?=htmlentities($code)?></pre></code>