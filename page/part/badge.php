<section id="badge">
  <h1>Badge</h1>
  <hr>
<h5>Basic</h5>
<?php
$code = '
<h1>Heading 1 <span class="bg-primary color-white p-2 br-2">New</span></h1>
<button class="bg-primary color-white">Updates <span class="bg-white br-2 color-black p-1">99</span></button>
<span class="bg-primary color-white br-2 p-1">Primary</span>
<span class="bg-success color-white br-2 p-1">Success</span>
<span class="bg-white border-1 bc-danger color-black br-2 p-1">Danger</span>
<span class="bg-warning br-pill color-white pl-2 pr-2 pt-1 pb-1">Warning</span>
<a href="#" class="bg-info br-pill color-white pl-2 pr-2 pt-1 pb-1 link-no-underline hover">Info</a>
';
echo codeBlock($code);
echo codePreview($code);
?>
</section>
