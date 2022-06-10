<section id="navbar">
  <h1>Navbar</h1>
  <hr>
<h5>Basic</h5>
<?php
$code = '
<div class="navbar-container">
  <div class="bg-dark color-light">
    <div class="container-fluid">
      <a href="#" class="color-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" height="24" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path d="M10 6 L2 16 10 26 M2 16 L30 16" />
        </svg>
        Mafura
      </a>
    </div>
  </div>
  <nav class="navbar" role="navigation">
    <div class="navbar-menu-wrap width-unset ms-2">
      <ul class="navbar-nav">
        <li class="navbar-item">
          <a href="javascript:void(0)" class="navbar-side-bar" data-icon="#navbar-item-icon-menu-basic" data-icontrue="M2 30 L30 2 M30 30 L2 2" data-iconfalse="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24" data-toggle="collapse_slide" aria-controls="navbar-menu-expand-basic" aria-pressed="false">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <path id="navbar-item-icon-menu-basic" d="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24" />
            </svg>
          </a>
        </li>
      </ul>
    </div>

    <a href="#" class="navbar-brand link-no-underline">
      <span class="navbar-brand-title">
        Mafura
      </span>
    </a>

  </nav>
  <div class="navbar-menu-expand animated faster collapse_slide_in" id="navbar-menu-expand-basic">
    Expanded-Info
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Basic 2</h5>
<?php
$code = '
<div class="navbar-container">
  <div class="bg-dark color-light">
    <div class="container-fluid">
      <a href="#" class="color-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" height="24" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path d="M10 6 L2 16 10 26 M2 16 L30 16" />
        </svg>
        Mafura
      </a>
    </div>
  </div>
  <nav class="navbar" role="navigation">
    <div class="navbar-menu-wrap width-unset ms-2">
      <ul class="navbar-nav">
        <li class="navbar-item me-0">
          <button class="navbar-side-bar navbar-menu-initiator animated-humburger-menu-icon" id="navbar-item-icon-menu" data-iconclass="#navbar-item-icon-menu" data-iconclasstrue="animated-humburger-menu-icon-x" data-iconclassfalse="animated-humburger-menu-icon" data-toggle="collapse_slide" aria-controls="navbar-menu-expand-basic-2" aria-pressed="false">
              <span class="top-bar"></span>
              <span class="middle-bar"></span>
              <span class="bottom-bar"></span>
          </button>
        </li>
        <li class="navbar-item ms-0">
          <a href="#" class="navbar-brand link-no-underline">
            <span class="navbar-brand-title">
              Mafura
            </span>
          </a>
        </li>
      </ul>
    </div>

    

  </nav>
  <div class="navbar-menu-expand animated faster collapse_slide_in" id="navbar-menu-expand-basic-2">
    Expanded-Info
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Basic Drop Down</h5>
<?php
$code = '
<div class="navbar-container">
  <div class="bg-dark color-light">
    <div class="container-fluid">
      <a href="#" class="color-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" height="24" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path d="M10 6 L2 16 10 26 M2 16 L30 16" />
        </svg>
        Mafura
      </a>
    </div>
  </div>
  <nav class="navbar" role="navigation">
    
    <a href="#" class="navbar-brand link-no-underline">
      <span class="navbar-brand-title">
        Mafura
      </span>
    </a>
    <ul class="navbar-nav">
      <li class="navbar-item">
        <a href="javascript:void(0)" class="navbar-side-bar navbar-menu-initiator" data-toggle="collapse" aria-controls="navbar-menu-expand-basic-drop-down" aria-pressed="false">
          Mafura <span class="icon-drop-down"></span>
        </a>
        <span class="navbar-menu-expand position-absolute" id="navbar-menu-expand-basic-drop-down">
            Expanded-Info
          </span>
      </li>
    </ul>
  </nav>
  
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Right Menu</h5>
<?php
$code = '
<div class="navbar-container">
  <div class="bg-dark color-light">
    <div class="container-fluid">
      <a href="#" class="color-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" height="24" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path d="M10 6 L2 16 10 26 M2 16 L30 16" />
        </svg>
        
      </a>
    </div>
  </div>
  <nav class="navbar" role="navigation">
    <a href="#" class="navbar-brand link-no-underline">
      <span class="navbar-brand-title">
        Mafura
      </span>
    </a>
    <ul class="navbar-nav">
      <li class="navbar-item">
        Menu 1
      </li>
      <li class="navbar-item">
        Menu 2
      </li>
      <li class="navbar-item">
        Menu 2
      </li>
    </ul>
  </nav>
  
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Sub-Title</h5>
<?php
$code = '
<div class="navbar-container">
  <div class="bg-dark color-light">
    <div class="container-fluid">
      <a href="#" class="color-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" height="24" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path d="M10 6 L2 16 10 26 M2 16 L30 16" />
        </svg>
        Mafura
      </a>
    </div>
  </div>
  <nav class="navbar" role="navigation">
    <div class="navbar-menu-wrap width-unset ms-2">
      <ul class="navbar-nav">
        <li class="navbar-item">
          <a href="javascript:void(0)" class="navbar-side-bar" data-icon="#navbar-item-icon-menu-st" data-icontrue="M2 30 L30 2 M30 30 L2 2" data-iconfalse="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24" data-toggle="collapse_slide" aria-controls="navbar-menu-expand-st" aria-pressed="false">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <path id="navbar-item-icon-menu-st" d="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24" />
            </svg>
          </a>
        </li>
      </ul>
    </div>

    <a href="#" class="navbar-brand link-no-underline">
      <span class="navbar-brand-title me-0">
        Mafura
      </span>
      <span class="navbar-brand-title">
        Blog
      </span>
    </a>

  </nav>
  <div class="navbar-menu-expand animated faster collapse_slide_in" id="navbar-menu-expand-st">
    Expanded-Info
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Image Brand Title</h5>
<?php
$code = '
<div class="navbar-container">
  <div class="bg-dark color-light">
    <div class="container-fluid">
      <a href="#" class="color-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" height="24" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path d="M10 6 L2 16 10 26 M2 16 L30 16" />
        </svg>
        Mafura
      </a>
    </div>
  </div>
  <nav class="navbar" role="navigation">
    <div class="navbar-menu-wrap width-unset ms-2">
      <ul class="navbar-nav">
        <li class="navbar-item">
          <a href="javascript:void(0)" class="navbar-side-bar" data-icon="#navbar-item-icon-menu-ibt" data-icontrue="M2 30 L30 2 M30 30 L2 2" data-iconfalse="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24" data-toggle="collapse_slide" aria-controls="navbar-menu-expand-ibt" aria-pressed="false">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <path id="navbar-item-icon-menu-ibt" d="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24" />
            </svg>
          </a>
        </li>
      </ul>
    </div>

    <a href="#" class="navbar-brand link-no-underline">
      <img class="navbar-brand-image" src="assets/mafura_40x40px.png">
    </a>

  </nav>
  <div class="navbar-menu-expand animated faster collapse_slide_in" id="navbar-menu-expand-ibt">
    Expanded-Info
  </div>
</div>
';
echo codeBlock($code);
echo codePreview($code);
?>
</section>
