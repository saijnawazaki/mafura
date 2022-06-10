<section id="offcanvas">
  <h1>Off Canvas</h1>
  <hr>
<h5>Basic</h5>
<?php
$code = '
<button type="button" id="offcanvas_open" data-toggle="show" aria-controls="offcanvas_open_panel">Open Dialog</button>
<div role="alert" id="offcanvas_open_panel" class="position-fixed top-0 left-0 width-fluid height-vh hide">
  <div class="position-relative width-fluid height-vh">
    <div class="bg-dark position-absolute width-fluid height-vh top-0 left-0 opacity-3" data-toggle="hide" aria-controls="offcanvas_open_panel"></div>
    <div class="bg-light bc-muted color-dark br-t-r-2 br-b-r-2 p-3 position-absolute left-0 top-0 height-vh" style="width: 400px;">
      <div class="d-flex justify-content-between">
        <h1>Header</h1>
        <button type="button" class="button-close" data-toggle="hide" aria-controls="offcanvas_open_panel"></button>
      </div>
      <p>Content Here</p>
      <div class="text-right">
        <a href="javascript:void(0)" class="me-2" data-toggle="hide" aria-controls="offcanvas_open_panel">
          OK
        </a>
        <button type="button" data-toggle="hide" aria-controls="offcanvas_open_panel">OK</button>
      </div>
    </div>
  </div>
</div>

';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Basic - Right Panel</h5>
<?php
$code = '
<button type="button" id="offcanvas_right_open" data-toggle="show" aria-controls="offcanvas_right_open_panel">Open Dialog</button>
<div role="alert" id="offcanvas_right_open_panel" class="position-fixed top-0 left-0 width-fluid height-vh hide">
  <div class="position-relative width-fluid height-vh">
    <div class="bg-dark position-absolute width-fluid height-vh top-0 right-0 opacity-3" data-toggle="hide" aria-controls="offcanvas_right_open_panel"></div>
    <div class="bg-light bc-muted color-dark br-t-l-2 br-b-l-2 p-3 position-absolute right-0 top-0 height-vh" style="width: 400px;">
      <div class="d-flex justify-content-between">
        <h1>Header</h1>
        <button type="button" class="button-close" data-toggle="hide" aria-controls="offcanvas_right_open_panel"></button>
      </div>
      <p>Content Here</p>
      <div class="text-right">
        <a href="javascript:void(0)" class="me-2" data-toggle="hide" aria-controls="offcanvas_right_open_panel">
          OK
        </a>
        <button type="button" data-toggle="hide" aria-controls="offcanvas_right_open_panel">OK</button>
      </div>
    </div>
  </div>
</div>

';
echo codeBlock($code);
echo codePreview($code);
?>
</section>
