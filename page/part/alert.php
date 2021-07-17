<section id="alert">
  <h1>Alert</h1>
  <hr>
<h5>Basic</h5>
<?php
$code = '
<div class="bg-primary color-white p-3" role="alert">Alert</div>
<div class="bg-secondary color-white p-3" role="alert">Alert</div>
<div class="bg-success color-white p-3" role="alert">Alert</div>
<div class="bg-warning color-white p-3" role="alert">Alert</div>
<div class="bg-danger color-white p-3" role="alert">Alert</div>
<div class="bg-info color-white p-3" role="alert">Alert</div>
<div class="bg-muted color-white p-3" role="alert">Alert</div>
<div class="bg-dark color-danger p-3" role="alert">Alert</div>
<div class="bg-light border-1 bc-primary color-black p-3" role="alert">Alert</div>
<div class="bg-white border-1 bc-primary color-black p-3" role="alert">Alert</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Dismiss</h5>
<?php
$code = '
<div class="bg-primary color-white p-3" role="alert" id="alert_dismiss">
  Alert
  <button type="button" class="button-close float-right" data-toggle="hide" aria-controls="alert_dismiss"></button>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Dialog</h5>
<?php
$code = '
<button type="button" id="alert_open" data-toggle="show" aria-controls="alert_open_dismiss">Open Dialog</button>
<div role="alert" id="alert_open_dismiss" class="position-fixed top-0 left-0 width-fluid height-vh hide">
  <div class="position-relative width-fluid height-vh">
    <div class="bg-dark position-absolute width-fluid height-vh top-0 left-0 opacity-3"></div>
    <div class="bg-light bc-muted color-dark br-2 p-3 position-absolute top-p-2 left-p-3 transform-translate-n6-n4 animated animated-faster animated-zoom-in">
      <h4>Alert Title</h4>
      <p>Alert Content</p>
      <div class="text-right">
        <a href="javascript:void(0)" class="mr-2 link-no-underline" data-toggle="hide" aria-controls="alert_open_dismiss">
          OK
        </a>
        <button type="button" data-toggle="hide" aria-controls="alert_open_dismiss">OK</button>
      </div>
    </div>
  </div>
</div>

';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Toast</h5>
<?php
$code = '
<button type="button" id="alert_open_toast" data-toggle="show" aria-controls="alert_open_toast_dismiss">Open Dialog</button>
<div role="alert" id="alert_open_toast_dismiss" class="position-fixed bottom-0 left-0 width-fluid hide">
  <div class="bg-dark color-white ml-3 mr-3 mb-3 pt-2 pb-2 pl-3 pr-3">
      <button type="button" class="button-close-white float-right" data-toggle="hide" aria-controls="alert_open_toast_dismiss"></button>
    Toast
  </div>
</div>

';
echo codeBlock($code);
echo codePreview($code);
?>
</section>
