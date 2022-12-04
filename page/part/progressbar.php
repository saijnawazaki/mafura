<section id="progressbar">
  <h1>Progress Bar</h1>
  <hr>
<h5>Basic</h5>
<?php
$code = '
<div class="bg-light-darken p-1 mb-1">
  <span class="bg-primary d-inline-block text-center color-white" style="width: 8%;">8%</span>
</div>
<div class="bg-light-darken p-1 mb-1">
  <span class="bg-primary d-inline-block width-p-2 text-center color-white">10%</span>
</div>
<div class="bg-light-darken p-1 mb-1">
  <span class="bg-primary d-inline-block width-p-3 text-center color-white">20%</span>
</div>
<div class="bg-light-darken p-1 mb-1">
  <span class="bg-primary d-inline-block width-p-4 text-center color-white">30%</span>
</div>
<div class="bg-light-darken p-1 mb-1">
  <span class="bg-primary d-inline-block width-p-5 text-center color-white">40%</span>
</div>
<div class="bg-light-darken p-1 mb-1">
  <span class="bg-primary d-inline-block width-p-6 text-center color-white">50%</span>
</div>
<div class="bg-light-darken p-1 mb-1">
  <span class="bg-primary d-inline-block width-fluid text-center color-white">100%</span>
</div>
<div class="bg-light-darken p-1 mb-1">
  <span class="bg-primary d-inline-block width-fluid text-center color-white">&nbsp;</span>
</div>
<div class="bg-light-darken p-1 mb-1">
  <span class="bg-primary d-inline-block width-p-2 text-center color-white">10%</span><span class="bg-danger d-inline-block width-p-6 text-center color-white m-0">50%</span>
</div>
<div class="bg-light-darken p-1 mb-1 br-3">
  <span class="bg-primary d-inline-block width-p-6 text-center color-white br-3">50%</span>
</div>
<div class="bg-light-darken p-1 mb-1 br-3">
  <span class="bg-warning d-inline-block width-p-6 text-center color-white br-3">50%</span>
</div>
<div class="bg-light-darken p-1 mb-1 br-3">
  <span class="bg-info d-inline-block width-p-6 text-center color-white br-3">50%</span>
</div>
<div class="bg-light-darken p-1 mb-1 br-3">
  <span class="bg-dark d-inline-block width-p-6 text-center color-white br-3">50%</span>
</div>
<div class="bg-light-darken mb-1 br-3" style="height: 6px;">
  <span class="bg-dark d-inline-block width-p-6 text-center color-white br-3" style="height: 6px;">&nbsp;</span>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>
</section>
