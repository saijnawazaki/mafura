/*
* Mafura - JS
*/

window.onload = function(){

  var navbarMenuButton = document.getElementsByClassName('navbar-menu-button');

  function toggleNavbarMenuButton(there)
  {
      var navbarMenuContent = document.getElementById(there.dataset.target);

      if(there.className == 'navbar-menu-button')
      {
        there.className = there.className.replace(/\bnavbar-menu-button\b/g, "navbar-menu-button-x");
        navbarMenuContent.className = navbarMenuContent.className.replace(/\bnavbar-sm-hide\b/g, "navbar-sm-show");
      }
      else
      {
        there.className = there.className.replace(/\bnavbar-menu-button-x\b/g, "navbar-menu-button");
        navbarMenuContent.className = navbarMenuContent.className.replace(/\bnavbar-sm-show\b/g, "navbar-sm-hide");
      }
  }

  for (var i = navbarMenuButton.length; i--;) {
    navbarMenuButton[i].addEventListener('click', function(){toggleNavbarMenuButton(this)}, false);
  }

  let intervalId = 0;
  let scrollButton = document.getElementById('button_back_to_top');

  function scrollStep() {
      // Check if we're at the top already. If so, stop scrolling by clearing the interval
      if (window.pageYOffset === 0) {
          clearInterval(intervalId);
      }
      window.scroll(0, window.pageYOffset - 50);
  }

  function scrollToTop() {
      // Call the function scrollStep() every 16.66 millisecons
      intervalId = setInterval(scrollStep, 16.66);
  }

  // When the DOM is loaded, this click handler is added to our scroll button
  scrollButton.addEventListener('click', scrollToTop);

  var prevScrollpos = window.pageYOffset;

  window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;

    if (prevScrollpos > currentScrollPos) {
      document.getElementById("button_back_to_top").style.bottom = "-100px";

    } else {
      document.getElementById("button_back_to_top").style.bottom = "100px";
    }
    prevScrollpos = currentScrollPos;
  }

}
