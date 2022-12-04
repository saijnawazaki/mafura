<section id="spinner">
  <h1>Spinner</h1>
  <hr>
<h5>Basic</h5>
<?php
$code = '
<div class="animated animated-infinite animated-fast animated-timing-function-liner vertical-align-text-bottom d-inline-block animated-spin border-2 width-1 height-1 br-round bc-r-transparent bc-l-transparent" role="status">&nbsp;</div>
<div class="animated animated-infinite animated-fast animated-timing-function-liner vertical-align-text-bottom d-inline-block animated-spin border-2 width-1 height-1 br-round bc-r-transparent" role="status">&nbsp;</div>
<div class="animated animated-infinite animated-fast animated-timing-function-liner vertical-align-text-bottom d-inline-block animated-spin border-2 width-1 height-1 br-round bc-l-transparent" role="status">&nbsp;</div>
<div class="animated animated-infinite animated-fast animated-timing-function-liner vertical-align-text-bottom d-inline-block animated-spin border-1 width-1 height-1 br-round bc-r-transparent" role="status">&nbsp;</div>
<div class="animated animated-infinite animated-fast animated-timing-function-liner vertical-align-text-bottom d-inline-block animated-spin border-3 width-1 height-1 br-round bc-r-transparent" role="status">&nbsp;</div>
<div class="animated animated-infinite animated-fast animated-timing-function-liner vertical-align-text-bottom d-inline-block animated-spin border-3 width-1 height-1 br-round bc-r-primary" role="status">&nbsp;</div>
<div class="animated animated-infinite animated-fast animated-timing-function-liner vertical-align-text-bottom d-inline-block animated-spin border-3 width-1 height-1 br-round bc-transparent bc-r-primary" role="status">&nbsp;</div>
<div class="animated animated-infinite animated-fast animated-timing-function-liner vertical-align-text-bottom d-inline-block animated-spin border-3 width-1 height-1 br-round bc-transparent bc-r-primary bc-l-primary" role="status">&nbsp;</div>
<div class="animated animated-infinite animated-fast animated-timing-function-liner vertical-align-text-bottom d-inline-block animated-spin border-3 width-1 height-1 br-round bc-r-primary bc-l-primary" role="status">&nbsp;</div>
<div class="animated animated-infinite animated-faster animated-timing-function-liner vertical-align-text-bottom d-inline-block animated-spin border-3 width-1 height-1 br-round bc-transparent bc-r-primary" role="status">&nbsp;</div>
<div class="animated animated-infinite animated-slow animated-timing-function-liner vertical-align-text-bottom d-inline-block animated-spin border-3 width-1 height-1 br-round bc-transparent bc-r-primary" role="status">&nbsp;</div>
<div class="animated animated-infinite animated-slower animated-timing-function-liner vertical-align-text-bottom d-inline-block animated-spin border-3 width-1 height-1 br-round bc-transparent bc-r-primary" role="status">&nbsp;</div>
';
echo codeBlock($code);
echo codePreview($code);
?>
</section>
