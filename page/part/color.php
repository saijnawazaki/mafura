<section id="color">
  <h1>Color</h1>
  <hr>

<h5>Basic Colors</h5>
<?php
$code = '
<h1>Primary</h1>
<div class="bg-primary-lighten d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Lighten</div>
    <div class="color-muted">Lighten</div>
    <div class="color-white">Lighten</div>
  </h4>
</div>
<div class="bg-primary d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Normal</div>
    <div class="color-muted">Normal</div>
    <div class="color-white">Normal</div>
  </h4>
</div>
<div class="bg-primary-darken d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Darken</div>
    <div class="color-muted">Darken</div>
    <div class="color-white">Darken</div>
  </h4>
</div>

<h1>Secondary</h1>
<div class="bg-secondary-lighten d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Lighten</div>
    <div class="color-muted">Lighten</div>
    <div class="color-white">Lighten</div>
  </h4>
</div>
<div class="bg-secondary d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Normal</div>
    <div class="color-muted">Normal</div>
    <div class="color-white">Normal</div>
  </h4>
</div>
<div class="bg-secondary-darken d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Darken</div>
    <div class="color-muted">Darken</div>
    <div class="color-white">Darken</div>
  </h4>
</div>

<h1>Success</h1>
<div class="bg-success-lighten d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Lighten</div>
    <div class="color-muted">Lighten</div>
    <div class="color-white">Lighten</div>
  </h4>
</div>
<div class="bg-success d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Normal</div>
    <div class="color-muted">Normal</div>
    <div class="color-white">Normal</div>
  </h4>
</div>
<div class="bg-success-darken d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Darken</div>
    <div class="color-muted">Darken</div>
    <div class="color-white">Darken</div>
  </h4>
</div>

<h1>Danger</h1>
<div class="bg-danger-lighten d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Lighten</div>
    <div class="color-muted">Lighten</div>
    <div class="color-white">Lighten</div>
  </h4>
</div>
<div class="bg-danger d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Normal</div>
    <div class="color-muted">Normal</div>
    <div class="color-white">Normal</div>
  </h4>
</div>
<div class="bg-danger-darken d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Darken</div>
    <div class="color-muted">Darken</div>
    <div class="color-white">Darken</div>
  </h4>
</div>

<h1>Warning</h1>
<div class="bg-warning-lighten d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Lighten</div>
    <div class="color-muted">Lighten</div>
    <div class="color-white">Lighten</div>
  </h4>
</div>
<div class="bg-warning d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Normal</div>
    <div class="color-muted">Normal</div>
    <div class="color-white">Normal</div>
  </h4>
</div>
<div class="bg-warning-darken d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Darken</div>
    <div class="color-muted">Darken</div>
    <div class="color-white">Darken</div>
  </h4>
</div>

<h1>Info</h1>
<div class="bg-info-lighten d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Lighten</div>
    <div class="color-muted">Lighten</div>
    <div class="color-white">Lighten</div>
  </h4>
</div>
<div class="bg-info d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Normal</div>
    <div class="color-muted">Normal</div>
    <div class="color-white">Normal</div>
  </h4>
</div>
<div class="bg-info-darken d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Darken</div>
    <div class="color-muted">Darken</div>
    <div class="color-white">Darken</div>
  </h4>
</div>

<h1>Light</h1>
<div class="bg-light-lighten d-inline-block position-relative border-1" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Lighten</div>
    <div class="color-muted">Lighten</div>
    <div class="color-white">Lighten</div>
  </h4>
</div>
<div class="bg-light d-inline-block position-relative border-1" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Normal</div>
    <div class="color-muted">Normal</div>
    <div class="color-white">Normal</div>
  </h4>
</div>
<div class="bg-light-darken d-inline-block position-relative border-1" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Darken</div>
    <div class="color-muted">Darken</div>
    <div class="color-white">Darken</div>
  </h4>
</div>

<h1>Dark</h1>
<div class="bg-dark-lighten d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Lighten</div>
    <div class="color-muted">Lighten</div>
    <div class="color-white">Lighten</div>
  </h4>
</div>
<div class="bg-dark d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Normal</div>
    <div class="color-muted">Normal</div>
    <div class="color-white">Normal</div>
  </h4>
</div>
<div class="bg-dark-darken d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Darken</div>
    <div class="color-muted">Darken</div>
    <div class="color-white">Darken</div>
  </h4>
</div>

<h1>Solo</h1>
<div class="bg-muted d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Muted</div>
    <div class="color-muted">Muted</div>
    <div class="color-white">Muted</div>
  </h4>
</div>
<div class="bg-black d-inline-block position-relative" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">Black</div>
    <div class="color-muted">Black</div>
    <div class="color-white">Black</div>
  </h4>
</div>
<div class="bg-white d-inline-block position-relative border-1" style="width: 120px; height: 120px;">
  <h4 class="position-absolute bottom-0 right-0 mr-2">
    <div class="color-black">White</div>
    <div class="color-muted">White</div>
    <div class="color-white">White</div>
  </h4>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Color Text</h5>
<?php
$code = '';
foreach(DEFAULT_COLOR_PATTERN as $color => $value)
{
  $code .= '<div class="color-'.$color.'">Color '.$color.'</div>'."\n";
}
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Backround Color</h5>
<?php
$code = '';
foreach(DEFAULT_COLOR_PATTERN as $color => $value)
{
  $code .= '<div class="bg-'.$color.'">Background Color '.$color.'</div>'."\n";
}
echo codeBlock($code);
echo codePreview($code);
?>


<h5>Border Color</h5>
<?php
$code = '';
foreach(DEFAULT_COLOR_PATTERN as $color => $value)
{
  $code .= '<div class="border-1 bc-'.$color.'">Border Color '.$color.'</div>'."\n";
}
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Border Radius</h5>
<?php
$code = '
<span class="border-1 bc-primary br-round">R!</span><br>
<div class="border-1 bc-primary br-0">.br-0</div>
<div class="border-1 bc-primary br-1">.br-1</div>
<div class="border-1 bc-primary br-2">.br-2</div>
<div class="border-1 bc-primary br-3">.br-3</div>
<div class="border-1 bc-primary br-4">.br-4</div>
<div class="border-1 bc-primary br-5">.br-5</div>
<div class="border-1 bc-primary br-t-l-0 br-t-r-0 br-b-l-0 br-b-r-0">Border Radius</div>
<div class="border-1 bc-primary br-t-l-3 br-t-r-0 br-b-l-0 br-b-r-3">Border Radius</div>
';
echo codeBlock($code);
echo codePreview($code);
?>
</section>
