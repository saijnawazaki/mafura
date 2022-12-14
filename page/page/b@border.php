<h1>Border</h1>
<hr>
<h3>Border Radius</h3>
<hr>
<?php
    $code = '';
    for($x = 1; $x <= 5; $x++)
    {
        $code .= '<div class="border-3 border-color-primary border-radius-'.$x.' mb-3">.border-3 .border-color-primary .border-radius-'.$x.' .mb-3</div>'."\n";    
    }
    

    echo $code;
?>
<code><pre class="bg-white-dark p-3"><?=htmlentities($code)?></pre></code>
<h5>Border Radius - Top Left</h5>
<hr>
<?php
    $code = '';
    for($x = 1; $x <= 5; $x++)
    {
        $code .= '<div class="border-3 border-color-primary border-radius-tl-'.$x.' mb-3">.border-3 .border-color-primary .border-radius-tl-'.$x.' .mb-3</div>'."\n";    
    }
    

    echo $code;
?>
<code><pre class="bg-white-dark p-3"><?=htmlentities($code)?></pre></code>
<h5>Border Radius - Bottom Left</h5>
<hr>
<?php
    $code = '';
    for($x = 1; $x <= 5; $x++)
    {
        $code .= '<div class="border-3 border-color-primary border-radius-bl-'.$x.' mb-3">.border-3 .border-color-primary .border-radius-bl-'.$x.' .mb-3</div>'."\n";    
    }
    

    echo $code;
?>
<code><pre class="bg-white-dark p-3"><?=htmlentities($code)?></pre></code>
<h5>Border Radius - Top Right</h5>
<hr>
<?php
    $code = '';
    for($x = 1; $x <= 5; $x++)
    {
        $code .= '<div class="border-3 border-color-primary border-radius-tr-'.$x.' mb-3">.border-3 .border-color-primary .border-radius-tr-'.$x.' .mb-3</div>'."\n";    
    }
    

    echo $code;
?>
<code><pre class="bg-white-dark p-3"><?=htmlentities($code)?></pre></code>
<h5>Border Radius - Bottom Right</h5>
<hr>
<?php
    $code = '';
    for($x = 1; $x <= 5; $x++)
    {
        $code .= '<div class="border-3 border-color-primary border-radius-br-'.$x.' mb-3">.border-3 .border-color-primary .border-radius-br-'.$x.' .mb-3</div>'."\n";    
    }
    

    echo $code;
?>
<code><pre class="bg-white-dark p-3"><?=htmlentities($code)?></pre></code>