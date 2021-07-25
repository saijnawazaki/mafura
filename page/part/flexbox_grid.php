<section id="Flexbox_grid">
<h1>Flexbox Grid</h1>
<hr>

<h5>Row Cols</h5>
<p>Auto Row Per Cols</p>
<?php
$code = '
<div class="row row-cols-auto">
  <div class="col bg-blue">1</div>
  <div class="col bg-blue">2</div>
</div>
<div class="row row-cols-2">
  <div class="col bg-blue">1</div>
  <div class="col bg-blue">2</div>
</div>
<div class="row row-cols-3">
  <div class="col bg-blue">1</div>
  <div class="col bg-blue">2</div>
</div>
<div class="row row-cols-4">
  <div class="col bg-blue">1</div>
  <div class="col bg-blue">2</div>
</div>
<div class="row row-cols-5">
  <div class="col bg-blue">1</div>
  <div class="col bg-blue">2</div>
</div>
<div class="row row-cols-6">
  <div class="col bg-blue">1</div>
  <div class="col bg-blue">2</div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<p>Breakpoint</p>
<?php
$code = '
<div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-1 row-cols-xl-3 row-cols-xxl-1">
  <div class="col bg-blue">1</div>
  <div class="col bg-blue">2</div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

</section>
