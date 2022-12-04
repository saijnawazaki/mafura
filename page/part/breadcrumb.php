<section id="breadcrumb">
  <h1>Breadcrumb</h1>
  <hr>
<h5>Basic</h5>
<?php
$code = '
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Work</a></li>
    <li class="breadcrumb-item"><a href="#">Comic</a></li>
    <li class="breadcrumb-item"><a href="#">Webtoon</a></li>
    <li class="breadcrumb-item"><a href="#">Work Title</a></li>
  </ol>
</nav>
';
echo codeBlock($code);
echo codePreview($code);
?>
</section>
