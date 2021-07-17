<section id="content">
  <h1>Content</h1>
  <hr>
<h5>Show Hide</h5>
<?php
$code = '
Email: <span id="content_email">sat********@manastudio.id</span> <button class="button-show" type="button" data-toggle="toggledata" data-controlclasstrue="button-hide" data-controlclassfalse="button-show" data-content="#content_email" data-contenttrue="satoukazuma@manastudio.id" data-contentfalse="sat********@manastudio.id" data-status="0"></button>
';
echo codeBlock($code);
echo codePreview($code);
?>
</section>
