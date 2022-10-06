<section id="typography">
  <h1>Typography</h1>
  <hr>
<h5>Heading</h5>
<?php
$code = '
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Paragraph</h5>
<?php
$code = '
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquam suscipit pulvinar. Donec lobortis, arcu sit amet elementum laoreet, risus nulla suscipit dui, volutpat vehicula tellus orci id tellus. Ut non blandit velit, a bibendum est. Cras sodales felis velit, sed placerat leo consectetur vel. Proin hendrerit et risus vitae iaculis. Vivamus placerat lectus venenatis sem sodales posuere. In eu nisi mattis, vehicula purus malesuada, sollicitudin massa. Aenean sit amet pulvinar sem, eget blandit est. Ut mattis rutrum massa, ut ultricies dui semper sit amet. Fusce posuere mi tellus, nec accumsan metus iaculis at. Nullam volutpat pharetra placerat. Phasellus ac sagittis augue. Proin scelerisque, nisi sit amet pretium bibendum, nisi enim venenatis augue, a laoreet odio arcu id odio. Nullam vitae molestie ipsum, sed mollis est. Ut auctor vulputate magna pretium fringilla.</p>
<p>Donec malesuada, tellus sit amet aliquam pharetra, turpis eros auctor nisl, eget semper dui ante et est. Sed rhoncus sed augue et ullamcorper. Integer sed accumsan augue, nec laoreet nisi. Vestibulum et libero eget augue maximus faucibus vitae in eros. Nulla placerat mi sed nisi dapibus, quis bibendum leo efficitur. Quisque condimentum purus non tellus fringilla, a convallis augue tincidunt. Donec elit ipsum, imperdiet ut lacus eget, vehicula venenatis diam. Sed a ipsum tincidunt, lacinia purus in, bibendum neque. Nunc interdum imperdiet dictum.</p>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Font Size</h5>
<?php
$code = '
<h1 class="font-size-1">Font Size 1</h1>
<h1 class="font-size-2">Font Size 2</h1>
<h1 class="font-size-3">Font Size 3</h1>
<h1 class="font-size-4">Font Size 4</h1>
<h1 class="font-size-5">Font Size 5</h1>
<h1 class="font-size-6">Font Size 6</h1>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Font Weight</h5>
<?php
$code = '
<h1 class="font-size-1 font-weight-1">Font Size 1 + Font Weight 1</h1>
<h1 class="font-size-1 font-weight-2">Font Size 1 + Font Weight 2</h1>
<h1 class="font-size-1 font-weight-3">Font Size 1 + Font Weight 3</h1>
<h1 class="font-size-1 font-weight-4">Font Size 1 + Font Weight 4</h1>
<h1 class="font-size-1 font-weight-5">Font Size 1 + Font Weight 5</h1>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Typography</h5>
<?php
$code = '
<p>You can use the mark tag to <mark>highlight</mark> text.</p>
<p><del>This line of text is meant to be treated as deleted text.</del></p>
<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
<p><u>This line of text will render as underlined.</u></p>
<p><small>This line of text is meant to be treated as fine print.</small></p>
<p><strong>This line rendered as bold text.</strong></p>
<p><em>This line rendered as italicized text.</em></p>
<p><abbr title="attribute">attr</abbr></p>
<p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
<blockquote>
  <p>A well-known quote, contained in a blockquote element.</p>
</blockquote>
<figure>
  <blockquote>
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption>
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Text Align</h5>
<?php
$code = '
<div class="text-left">Left</div>
<div class="text-center">Center</div>
<div class="text-right">Right</div>
';
echo codeBlock($code);
echo codePreview($code);
?>
</section>
