<section id="flexbox">
  <h1>Flexbox</h1>
  <hr>
<h5>Basic</h5>
<?php
$code = '
<div class="row">
  <div class="col-1 bg-primary">col-1</div>
  <div class="col-11 bg-info">col-11</div>
  <div class="col-6 bg-primary">col-6</div>
  <div class="col-6 bg-info">col-6</div>
  <div class="col-4 bg-primary">col-4</div>
  <div class="col-4 bg-info">col-4</div>
  <div class="col-4 bg-warning">col-4</div>
  <div class="col-11 bg-primary">col-11</div>
  <div class="col-1 bg-info">col-1</div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>
<h5>Responsive</h5>
<?php
$code = '
<div class="row">
  <div class="col-12 col-xs-11 col-sm-7 col-md-9 col-lg-6 col-xl-4 bg-primary">col-12 col-xs-11 col-sm-10 col-md-6 col-lg-6 col-xl-4</div>
  <div class="col-12 col-xs-1 col-sm-5 col-md-3 col-lg-6 col-xl-8 bg-info">col-12 col-xs-1 col-sm-2 col-md-6 col-lg-6 col-xl-8</div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Basic 2</h5>
<?php
$code = '
<div class="row">
  <div class="col-sm bg-primary">
    One of three columns
  </div>
  <div class="col-sm bg-warning">
    One of three columns
  </div>
  <div class="col-sm bg-danger">
    One of three columns
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Auto-Layout Columns</h5>
<?php
$code = '
<div class="row">
  <div class="col bg-primary">
    1 of 2
  </div>
  <div class="col bg-warning">
    2 of 2
  </div>
</div>
<div class="row">
  <div class="col bg-info">
    1 of 3
  </div>
  <div class="col bg-danger">
    2 of 3
  </div>
  <div class="col bg-success">
    3 of 3
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Equal-width multi-line</h5>
<?php
$code = '
<div class="row">
  <div class="col bg-primary">col</div>
  <div class="col bg-danger">col</div>
  <div class="w-100"></div>
  <div class="col bg-success">col</div>
  <div class="col bg-info">col</div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Setting one column width</h5>
<?php
$code = '
<div class="row">
  <div class="col bg-primary">
    1 of 3
  </div>
  <div class="col-6 bg-success">
    2 of 3 (wider)
  </div>
  <div class="col bg-danger">
    3 of 3
  </div>
</div>
<div class="row">
  <div class="col bg-success">
    1 of 3
  </div>
  <div class="col-5 bg-warning">
    2 of 3 (wider)
  </div>
  <div class="col bg-primary">
    3 of 3
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Variable width content</h5>
<?php
$code = '
<div class="row justify-content-md-center">
  <div class="col col-lg-2 bg-primary">
    1 of 3
  </div>
  <div class="col-md-auto bg-warning">
    Variable width content
  </div>
  <div class="col col-lg-2 bg-danger">
    3 of 3
  </div>
</div>
<div class="row">
  <div class="col bg-success">
    1 of 3
  </div>
  <div class="col-md-auto bg-danger">
    Variable width content
  </div>
  <div class="col col-lg-2 bg-primary">
    3 of 3
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>All breakpoints</h5>
<?php
$code = '
<div class="row">
    <div class="col bg-primary">col</div>
    <div class="col bg-success">col</div>
    <div class="col bg-danger">col</div>
    <div class="col bg-warning">col</div>
  </div>
  <div class="row">
    <div class="col-8 bg-danger">col-8</div>
    <div class="col-4 bg-warning">col-4</div>
  </div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Gutters</h5>
<?php
$code = '
<div class="container px-lg-5">
  <div class="row mx-lg-n5">
    <div class="col py-3 px-lg-5 border bg-primary">Custom column padding</div>
    <div class="col py-3 px-lg-5 border bg-danger">Custom column padding</div>
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Row columns</h5>
<?php
$code = '
<div class="row row-cols-2">
  <div class="col bg-primary">Column</div>
  <div class="col bg-warning">Column</div>
  <div class="col bg-danger">Column</div>
  <div class="col bg-success">Column</div>
</div>

<div class="row row-cols-4">
  <div class="col bg-success">Column</div>
  <div class="col bg-danger">Column</div>
  <div class="col-6 bg-info">Column</div>
  <div class="col bg-warning">Column</div>
</div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
  <div class="col bg-warning">Column</div>
  <div class="col bg-primary">Column</div>
  <div class="col bg-success">Column</div>
  <div class="col bg-danger">Column</div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Vertical alignment</h5>
<?php
$code = '
<div class="row align-items-start">
  <div class="col bg-primary">
    One of three columns
  </div>
  <div class="col bg-success">
    One of three columns
  </div>
  <div class="col bg-danger">
    One of three columns
  </div>
</div>
<div class="row align-items-center">
  <div class="col bg-info">
    One of three columns
  </div>
  <div class="col bg-danger">
    One of three columns
  </div>
  <div class="col bg-warning">
    One of three columns
  </div>
</div>
<div class="row align-items-end">
  <div class="col bg-warning">
    One of three columns
  </div>
  <div class="col bg-info">
    One of three columns
  </div>
  <div class="col bg-danger">
    One of three columns
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Horizontal alignment</h5>
<?php
$code = '
<div class="container">
  <div class="row justify-content-start">
    <div class="col-4 bg-primary">
      One of two columns
    </div>
    <div class="col-4 bg-danger">
      One of two columns
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-4 bg-info">
      One of two columns
    </div>
    <div class="col-4 bg-warning">
      One of two columns
    </div>
  </div>
  <div class="row justify-content-end">
    <div class="col-4 bg-success">
      One of two columns
    </div>
    <div class="col-4 bg-danger">
      One of two columns
    </div>
  </div>
  <div class="row justify-content-around">
    <div class="col-4 bg-danger">
      One of two columns
    </div>
    <div class="col-4 bg-warning">
      One of two columns
    </div>
  </div>
  <div class="row justify-content-between">
    <div class="col-4 bg-success">
      One of two columns
    </div>
    <div class="col-4 bg-danger">
      One of two columns
    </div>
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Ordering</h5>
<?php
$code = '
<div class="row">
  <div class="col bg-primary">
    First in DOM, no order applied
  </div>
  <div class="col order-12 bg-success">
    Second in DOM, with a larger order
  </div>
  <div class="col order-1 bg-danger">
    Third in DOM, with an order of 1
  </div>
</div>

<div class="row">
  <div class="col order-last bg-danger">
    First in DOM, ordered last
  </div>
  <div class="col bg-info">
    Second in DOM, unordered
  </div>
  <div class="col order-first bg-warning">
    Third in DOM, ordered first
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Offset</h5>
<?php
$code = '
<div class="row">
  <div class="col-md-4 bg-primary">.col-md-4</div>
  <div class="col-md-4 offset-md-4 bg-success">.col-md-4 .offset-md-4</div>
</div>
<div class="row">
  <div class="col-md-3 offset-md-3 bg-info">.col-md-3 .offset-md-3</div>
  <div class="col-md-3 offset-md-3 bg-success">.col-md-3 .offset-md-3</div>
</div>
<div class="row">
  <div class="col-md-6 offset-md-3 bg-primary">.col-md-6 .offset-md-3</div>
</div>

<div class="row">
  <div class="col-sm-5 col-md-6 bg-success">.col-sm-5 .col-md-6</div>
  <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 bg-danger">.col-sm-5 .offset-sm-2 .col-md-6 .offset-md-0</div>
</div>
<div class="row">
  <div class="col-sm-6 col-md-5 col-lg-6 bg-warning">.col-sm-6 .col-md-5 .col-lg-6</div>
  <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0 bg-primary">.col-sm-6 .col-md-5 .offset-md-2 .col-lg-6 .offset-lg-0</div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Margin utilities</h5>
<?php
$code = '
<div class="row">
  <div class="col-md-4 bg-primary">.col-md-4</div>
  <div class="col-md-4 ms-auto bg-success">.col-md-4 .ms-auto</div>
</div>
<div class="row">
  <div class="col-md-3 ms-md-auto bg-danger">.col-md-3 .ms-md-auto</div>
  <div class="col-md-3 ms-md-auto bg-warning">.col-md-3 .ms-md-auto</div>
</div>
<div class="row">
  <div class="col-auto me-auto bg-info">.col-auto .me-auto</div>
  <div class="col-auto bg-success">.col-auto</div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Nesting</h5>
<?php
$code = '
<div class="row">
  <div class="col-sm-9 bg-primary">
    Level 1: .col-sm-9
    <div class="row">
      <div class="col-8 col-sm-6 bg-danger">
        Level 2: .col-8 .col-sm-6
      </div>
      <div class="col-4 col-sm-6 bg-warning">
        Level 2: .col-4 .col-sm-6
      </div>
    </div>
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

</section>
