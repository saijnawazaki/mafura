<nav class="navbar-side" role="navigation">
  <a href="#" class="navbar-side-brand">
    <img src="https://repo.manastudio.id/manastudio/20200418/manastudio_logo_93x50.png">
  </a>
  <div class="navbar-side-menu-wrap">
    <ul class="navbar-side-nav">
      <li class="navbar-side-item">
        <a href="#">
          <svg id="i-work" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path d="m 20.002835,4.7208986 -16.8720238,0 -0.01766,24.3321704 24.3734908,0.03 v -17.09037"></path>
            <circle cx="27.516829" cy="4.552114" r="2.6371813" fill="currentcolor"></circle>
          </svg>
          <span class="navbar-side-item-text">Works</span>
        </a>
      </li>
      <li class="navbar-side-item">
        <a href="javascript:void(0)" class="navbar-side-bar" data-toggle="collapse_slide" aria-controls="navbar-menu-expand" aria-pressed="false">
          <svg id="i-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
              <path d="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24" />
          </svg>
          <span class="navbar-side-item-text">Menu</span>
        </a>
      </li>

      <li class="navbar-side-item">
        <a href="javascript:void(0)" class="fun-scroll" data-toggle="scroll" aria-controls="window">
          <svg id="i-arrow-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
              <path d="M6 10 L16 2 26 10 M16 2 L16 30" />
          </svg>
          <span class="navbar-side-item-text">Top</span>
        </a>
      </li>
    </ul>
  </div>


</nav>
<div class="navbar-side-menu-expand animated faster collapse_slide_in" id="navbar-menu-expand">
  <div class="container">
    <div class="row">
      <?php
      for($x = 0; $x < 20; $x++)
      {
      ?>
      <div class="col-4 col-sm-2">
          <div class="icon-app">
            <a href="javascript:void(0)">
            <div class="icon-app-img-wrap">
              <div class="icon-app-img">
                <svg id="i-star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
                </svg>
              </div>
            </div>
            <div class="icon-app-caption">
              App Name
            </div>
              </a>
          </div>
      </div>
      <?php
      }
      ?>
    </div>
  </div>

</div>
