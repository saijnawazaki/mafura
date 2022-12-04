<section id="container">
  <h1>Container</h1>
  <hr>
<h5>Container</h5>
<p>Standard Container</p>
<?php
$code = '
<div class="container">
...
</div>';
echo codeBlock($code);
echo codePreview('<div class="container bg-primary color-white">Container</div>');
?>

<h5>Container Fluid</h5>
<p>Full Width Container</p>
<?php
//container-fluid
$code = '
<div class="container-fluid">
...
</div>';
echo codeBlock($code);
echo codePreview('<div class="container-fluid bg-primary color-white">Container Fluid</div>');
?>

<h5>Container Gird System</h5>
<?php
//container-fluid
$code = '
<div class="container-sm">
...
</div>
<div class="container-md">
...
</div>
<div class="container-lg">
...
</div>
<div class="container-xl">
...
</div>
';
echo codeBlock($code);
echo codePreview('
<div class="container-sm bg-primary color-white">Container SM</div>
<div class="container-md bg-primary color-white">Container MD</div>
<div class="container-lg bg-primary color-white">Container LG</div>
<div class="container-xl bg-primary color-white">Container XL</div>
');
?>
</section>
