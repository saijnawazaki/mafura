window.addEventListener('load', function(){
  //go to top
  /*
    document.getElementById('btn-goToTop').addEventListener('click', function(){
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  */
  //navbar


  let elements = document.getElementsByClassName("navbar-bar");

  for (var i = 0; i < elements.length; i++) {
      //elements[i].addEventListener('click', myFunction, false);
      let there = elements[i];
      let data_toggle = there.getAttribute('data-toggle');
      let aria_controls = there.getAttribute('aria-controls');
      let aria_pressed = there.getAttribute('aria-pressed');

      var function_target = window[data_toggle];
      elements[i].addEventListener('click', function_target, false);
  }

});


var collapse = function() {
    let targetId = this.getAttribute('aria-controls');
    let elem_targetId = document.getElementById(targetId);
    let buttonState = this.getAttribute('aria-pressed');

    if(buttonState == 'true')
    {
        this.setAttribute('aria-pressed', 'false');
        elem_targetId.classList.remove('show');
    }
    else
    {
        this.setAttribute('aria-pressed', 'true');
        elem_targetId.classList.add('show');
    }


};
