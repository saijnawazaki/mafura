<section id="nav">
  <h1>Nav</h1>
  <hr>

<h5>Bar</h5>
<?php
$code = '
<a href="#" class="nav-bar">Bar 1</a>
<a href="#" class="nav-bar">Bar 2</a>
<a href="#" class="nav-bar">Bar 3</a>
<a href="#" class="nav-bar">Bar 4</a>
<a href="#" class="nav-bar">Bar 5</a>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>List</h5>
<?php
$code = '
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link muted" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>

<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link muted" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>

<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link muted" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>

<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link muted" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Tabs</h5>
<?php
$code = '
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link muted" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Pills</h5>
<?php
$code = '
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link muted" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>

<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link muted" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>

<ul class="nav nav-pills nav-justified">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link muted" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
';
echo codeBlock($code);
echo codePreview($code);
?>
</section>
