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
}
