window.addEventListener('load', function(){
  document.getElementById('btn-goToTop').addEventListener('click', function(){
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });


  let mainNav = document.getElementById('nav-top-menu');
  let navBarToggle = document.getElementById('nav-top-toggle');

  navBarToggle.addEventListener('click', function () {
    mainNav.classList.toggle('nav-top-active');
  });

});
