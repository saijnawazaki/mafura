<section id="grid">
  <h1>Grid</h1>
  <hr>
<h5>Auto Fill</h5>
<?php
$code = '
<section class="grid-row">
    <div class="card">1</div>
    <div class="card">2</div>
    <div class="card">3</div>
    <div class="card">4</div>
    <div class="card">5</div>
    <div class="card">6</div>
    <div class="card">7</div>
    <div class="card">8</div>
    <div class="card">9</div>
    <div class="card">10</div>
    <div class="card">11</div>
    <div class="card">12</div>
</section>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Auto Fit</h5>
<?php
$code = '
<section class="grid-row grid-col-auto-fit">
    <div class="card">1</div>
    <div class="card">2</div>
    <div class="card">3</div>
</section>
';
echo codeBlock($code);
echo codePreview($code);
?>
</section>
