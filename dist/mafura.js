window.addEventListener('load', function(){
  //go to top
  /*
    document.getElementById('btn-goToTop').addEventListener('click', function(){
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  */
  //navbar

  let navbar_bar = document.getElementsByClassName("navbar-bar");
  let navbar_side_bar = document.getElementsByClassName("navbar-side-bar");
  let fun_scroll = document.getElementsByClassName("fun-scroll");

  if(navbar_bar.length > 0)
  {
    addEventListerByElement(navbar_bar);
  }

  if(navbar_side_bar.length > 0)
  {
    addEventListerByElement(navbar_side_bar);

  }

  if(fun_scroll.length > 0)
  {
    addEventListerByElement(fun_scroll);

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

var scroll = function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};

function addEventListerByElement(elements) {
  for (var i = 0; i < elements.length; i++) {
      //elements[i].addEventListener('click', myFunction, false);
      console.log(elements[i]);
      let there = elements[i];
      let data_toggle = there.getAttribute('data-toggle');

      console.log('dddd->'+data_toggle);

      var function_target = window[data_toggle];
      elements[i].addEventListener('click', function_target, false);
  }
}
