<section id="list">
  <h1>List</h1>
  <hr>
<h5>Accordion</h5>
<?php
$code = '
<div class="border-1 bc-muted br-3">
  <button id="accordion_1" data-toggle="accordion" data-control="accordion_1_content" data-status="false" data-group="accordion" data-icon="accordion_1_icon" data-icon-true="M30 20 L16 8 2 20" data-icon-false="M30 12 L16 24 2 12" type="button" class="br-t-l-3 br-t-r-3 br-b-l-0 br-b-r-0 d-block m-0 width-fluid text-left">
    <h1 class="float-left">Header 1</h1>
    <svg class="float-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <path id="accordion_1_icon"  d="M30 12 L16 24 2 12" />
    </svg>
  </button>
  <div id="accordion_1_content" class="hide">
    <p class="p-3">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper dui quis sodales interdum. Vestibulum urna arcu, ultrices sed hendrerit non, vehicula a diam. Suspendisse rutrum posuere lobortis. Aliquam erat volutpat. In blandit tincidunt ex, non laoreet eros tempus et. Proin id pellentesque sem, sed congue nisi. Vestibulum cursus lorem consequat finibus pharetra. Nullam gravida at augue id molestie. Proin fermentum mi odio, a placerat risus placerat eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    </p>
  </div>
  <button id="accordion_2" data-toggle="accordion" data-control="accordion_2_content" data-status="false" data-group="accordion" data-icon="accordion_2_icon" data-icon-true="M30 20 L16 8 2 20" data-icon-false="M30 12 L16 24 2 12" type="button" class="d-block br-0 m-0 width-fluid text-left">
    <h1 class="float-left">Header 2</h1>
    <svg class="float-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <path id="accordion_2_icon" d="M30 12 L16 24 2 12" />
    </svg>
  </button>
  <div id="accordion_2_content" class="hide">
    <p class="p-3">
      Duis rhoncus ac est quis rhoncus. Cras nisl lorem, malesuada vitae nulla ut, mollis ullamcorper magna. Integer id fringilla nibh. Nam id commodo felis. Maecenas aliquam lacus quis bibendum venenatis. Morbi sollicitudin elementum tortor eget pretium. Etiam ac nisl pulvinar tortor mattis pellentesque eget quis ex. Ut vitae purus fringilla, sodales sem quis, tempus neque. Pellentesque in augue in nulla consequat aliquam. Mauris lacinia suscipit cursus. Ut porttitor, ante nec porta accumsan, metus ligula viverra dolor, nec hendrerit dui enim in libero. Duis pretium leo eleifend massa faucibus, elementum dapibus erat tincidunt. Nulla metus nisi, malesuada vel pharetra nec, dictum vel mi. Vivamus vulputate nulla at magna commodo, in tempus neque efficitur. Maecenas tempor eros et velit auctor auctor. Vivamus vestibulum placerat dolor, vel blandit nunc feugiat nec.
    </p>
  </div>
  <button id="accordion_3" data-toggle="accordion" data-control="accordion_3_content" data-status="false" data-group="accordion" data-icon="accordion_3_icon" data-icon-true="M30 20 L16 8 2 20" data-icon-false="M30 12 L16 24 2 12" type="button" class="br-t-l-0 br-t-r-0 br-b-l-3 br-b-r-3 d-block m-0 width-fluid text-left">
    <h1 class="float-left">Header 3</h1>
    <svg class="float-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <path id="accordion_3_icon" d="M30 12 L16 24 2 12" />
    </svg>
  </button>
  <div id="accordion_3_content" class="hide">
    <p class="p-3">
      Maecenas at pellentesque nulla, eget finibus justo. Proin pulvinar, elit ac faucibus euismod, diam nisl viverra tellus, in tempus turpis quam quis augue. Cras sem diam, mattis sit amet tellus at, ultricies vehicula elit. Mauris ut tellus lacus. Vivamus porta cursus vulputate. Sed sit amet mauris lorem. Nulla pharetra, nibh quis dapibus condimentum, odio lectus venenatis leo, eget vestibulum nunc justo non lectus. Phasellus ultrices felis magna, non vestibulum magna condimentum efficitur. Suspendisse eu erat consectetur, tempus mi et, pellentesque nisl. Integer vestibulum nisi sit amet porttitor scelerisque.
    </p>
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Accordion Open Multiple</h5>
<?php
$code = '
<div class="border-1 bc-muted br-3">
  <button id="accordion2_1" data-toggle="accordion" data-control="accordion2_1_content" data-status="false" data-icon="accordion2_1_icon" data-icon-true="M30 20 L16 8 2 20" data-icon-false="M30 12 L16 24 2 12" type="button" class="br-t-l-3 br-t-r-3 br-b-l-0 br-b-r-0 d-block m-0 width-fluid text-left">
    <h1 class="float-left">Header 1</h1>
    <svg class="float-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <path id="accordion2_1_icon"  d="M30 12 L16 24 2 12" />
    </svg>
  </button>
  <div id="accordion2_1_content" class="hide">
    <p class="p-3">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper dui quis sodales interdum. Vestibulum urna arcu, ultrices sed hendrerit non, vehicula a diam. Suspendisse rutrum posuere lobortis. Aliquam erat volutpat. In blandit tincidunt ex, non laoreet eros tempus et. Proin id pellentesque sem, sed congue nisi. Vestibulum cursus lorem consequat finibus pharetra. Nullam gravida at augue id molestie. Proin fermentum mi odio, a placerat risus placerat eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    </p>
  </div>
  <button id="accordion2_2" data-toggle="accordion" data-control="accordion2_2_content" data-status="false" data-icon="accordion2_2_icon" data-icon-true="M30 20 L16 8 2 20" data-icon-false="M30 12 L16 24 2 12" type="button" class="d-block br-0 m-0 width-fluid text-left">
    <h1 class="float-left">Header 2</h1>
    <svg class="float-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <path id="accordion2_2_icon" d="M30 12 L16 24 2 12" />
    </svg>
  </button>
  <div id="accordion2_2_content" class="hide">
    <p class="p-3">
      Duis rhoncus ac est quis rhoncus. Cras nisl lorem, malesuada vitae nulla ut, mollis ullamcorper magna. Integer id fringilla nibh. Nam id commodo felis. Maecenas aliquam lacus quis bibendum venenatis. Morbi sollicitudin elementum tortor eget pretium. Etiam ac nisl pulvinar tortor mattis pellentesque eget quis ex. Ut vitae purus fringilla, sodales sem quis, tempus neque. Pellentesque in augue in nulla consequat aliquam. Mauris lacinia suscipit cursus. Ut porttitor, ante nec porta accumsan, metus ligula viverra dolor, nec hendrerit dui enim in libero. Duis pretium leo eleifend massa faucibus, elementum dapibus erat tincidunt. Nulla metus nisi, malesuada vel pharetra nec, dictum vel mi. Vivamus vulputate nulla at magna commodo, in tempus neque efficitur. Maecenas tempor eros et velit auctor auctor. Vivamus vestibulum placerat dolor, vel blandit nunc feugiat nec.
    </p>
  </div>
  <button id="accordion2_3" data-toggle="accordion" data-control="accordion2_3_content" data-status="false" data-icon="accordion2_3_icon" data-icon-true="M30 20 L16 8 2 20" data-icon-false="M30 12 L16 24 2 12" type="button" class="br-t-l-0 br-t-r-0 br-b-l-3 br-b-r-3 d-block m-0 width-fluid text-left">
    <h1 class="float-left">Header 3</h1>
    <svg class="float-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <path id="accordion2_3_icon" d="M30 12 L16 24 2 12" />
    </svg>
  </button>
  <div id="accordion2_3_content" class="hide">
    <p class="p-3">
      Maecenas at pellentesque nulla, eget finibus justo. Proin pulvinar, elit ac faucibus euismod, diam nisl viverra tellus, in tempus turpis quam quis augue. Cras sem diam, mattis sit amet tellus at, ultricies vehicula elit. Mauris ut tellus lacus. Vivamus porta cursus vulputate. Sed sit amet mauris lorem. Nulla pharetra, nibh quis dapibus condimentum, odio lectus venenatis leo, eget vestibulum nunc justo non lectus. Phasellus ultrices felis magna, non vestibulum magna condimentum efficitur. Suspendisse eu erat consectetur, tempus mi et, pellentesque nisl. Integer vestibulum nisi sit amet porttitor scelerisque.
    </p>
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Pagination</h5>
<?php
$code = '
<button type="button">Prev</button>
<button type="button" class="bg-primary color-white">1</button>
<button type="button">2</button>
<button type="button">3</button>
<button type="button">4</button>
<button type="button">5</button>
<button type="button">Next</button>
';
echo codeBlock($code);
echo codePreview($code);
?>
</section>
