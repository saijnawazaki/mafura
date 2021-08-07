<section id="card">
  <h1>Card</h1>
  <hr>
<h5>Basic</h5>
<?php
$code = '
<div class="border-1 bc-light-darken p-3">
  Card
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>
<h5>Top Image</h5>
<?php
$code = '
<div class="border-1 bc-light-darken p-0 br-2">
  <div class="bg-primary br-t-l-2 br-t-r-2" style="height: 180px;">&nbsp;</div>
  <div class="p-3">
    <h1>Title</h1>
    <p>Content</p>
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Bottom Image</h5>
<?php
$code = '
<div class="border-1 bc-light-darken p-0 br-2">
  <div class="p-3">
    <h1>Title</h1>
    <p>Content</p>
  </div>
  <div class="bg-primary br-b-l-2 br-b-r-2" style="height: 180px;">&nbsp;</div>
  </div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Left Image</h5>
<?php
$code = '
<div class="border-1 bc-light-darken p-0 br-2">
  <div class="row">
      <div class="col-4">
        <div class="bg-primary br-t-l-2 br-b-l-2" style="height: 180px;">&nbsp;</div>
      </div>
      <div class="col-8">
        <div class="p-3">
          <h1>Title</h1>
          <p>Content</p>
        </div>
      </div>
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Right Image</h5>
<?php
$code = '
<div class="border-1 bc-light-darken p-0 br-2">
  <div class="row">
      <div class="col-8">
        <div class="p-3">
          <h1>Title</h1>
          <p>Content</p>
        </div>
      </div>
      <div class="col-4">
        <div class="bg-primary br-t-r-2 br-b-r-2" style="height: 180px;">&nbsp;</div>
      </div>
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Overlay Image With Zoom Animation</h5>
<?php
$code = '
<div class="card bg-dark border-2 bc-muted mt-2">
  <div class="animate-container">
    <div class="bg-primary card-img animate-zoom text-center" style="height: 180px;">Card</div>
  </div>
  <div class="card-img-overlay-bottom">
    <div class="card-text">
      Card Title
    </div>
  </div>

  <div class="card-img-overlay-box-top bg-success">
        <small>
          Sub
        </small>
    </div>

</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Overlay Image Basic</h5>
<?php
$code = '
<div class="card bg-dark border-2 bc-muted mt-2">
  <div class="bg-primary card-img text-center" style="height: 180px;">Card</div>
  <div class="card-img-overlay-bottom">
    <div class="card-text">
      Card Title
    </div>
  </div>

  <div class="card-img-overlay-box-top bg-success">
        <small>
          Sub
        </small>
    </div>

</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Overlay Data With Fade Focus</h5>
<?php
$code = '
<div class="card mt-2 bg-light">
  <div class="row no-gutters">
    <div class="col-md-12">
      <div class="card-body p-3">
        <h5 class="card-title mb-1">Title</h5>
        <p class="card-text lh-1">
          <small>Content</small>
        </p>
      </div>
      <div class="card-img-overlay-box-bottom bg-dark">
          <small>
            Sub
          </small>
      </div>
    </div>
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>
</section>
