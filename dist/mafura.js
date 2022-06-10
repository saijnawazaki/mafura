window.addEventListener('load', function(){
  let navbar_bar = document.querySelectorAll('[data-toggle="collapse_slide"]');
  let navbar_side_bar = document.getElementsByClassName("navbar-side-bar");
  let fun_scroll = document.getElementsByClassName("fun-scroll");

  let fun_show = document.querySelectorAll('[data-toggle="show"]');
  let fun_hide = document.querySelectorAll('[data-toggle="hide"]');

  let fun_accordion = document.querySelectorAll('[data-toggle="accordion"]');
  let fun_toggledata = document.querySelectorAll('[data-toggle="toggledata"]');

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

  if(fun_hide.length > 0)
  {
    addEventListerByElement(fun_hide);

  }

  if(fun_show.length > 0)
  {
    addEventListerByElement(fun_show);
  }

  if(fun_accordion.length > 0)
  {
    addEventListerByElement(fun_accordion);
  }

  if(fun_toggledata.length > 0)
  {
    addEventListerByElement(fun_toggledata);
  }

});

function getXHttp() {
  if (window.XMLHttpRequest) {
     // code for modern browsers
     return new XMLHttpRequest();
   } else {
     // code for old IE browsers
     return new ActiveXObject("Microsoft.XMLHTTP");
  }
}

function getAjaxDataFetch(setting) {
  var xhttp = getXHttp();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if(setting.fetch == 'console')
      {
          console.log(this.responseText);
      }
      else
      {
          let element = document.querySelector(setting.fetch);

          if(setting.fetchAtt == 'value')
          {
              element.value = this.responseText;
          }
          else if(setting.fetchAtt == 'innerHTML')
          {
              element.innerHTML = this.responseText;
          }
      }

    }
  };
  xhttp.open(setting.type, setting.url, true);
  xhttp.send();
}


var collapse_slide = function() {
    let targetId = this.getAttribute('aria-controls');
    let elem_targetId = document.getElementById(targetId);
    let buttonState = this.getAttribute('aria-pressed');
    let icon = false;
    let iconClass = false;
    let detail_menu = document.getElementsByClassName('navbar-menu-expand');
    let detail_initiator = document.getElementsByClassName('navbar-menu-initiator');

    for(let x = 0; x < detail_menu.length; x++)
    {
        detail_menu[x].classList.remove('collapse_slide_in');
        detail_menu[x].classList.add('collapse_slide_out');
    }

    for(let x = 0; x < detail_initiator.length; x++)
    {
        detail_initiator[x].setAttribute('aria-pressed', 'false');
    }

    if(this.getAttribute('data-icon'))
    {
      icon = document.querySelector(this.getAttribute('data-icon'));
    }

    if(this.getAttribute('data-iconclass'))
    {
      iconClass = document.querySelector(this.getAttribute('data-iconclass'));
    }

    let iconTrue = this.getAttribute('data-icontrue');
    let iconFalse = this.getAttribute('data-iconfalse');

    let iconClassTrue = this.getAttribute('data-iconclasstrue');
    let iconClassFalse = this.getAttribute('data-iconclassfalse');


    if(buttonState == 'true')
    {
        this.setAttribute('aria-pressed', 'false');
        elem_targetId.classList.remove('collapse_slide_in');
        elem_targetId.classList.add('collapse_slide_out');

        if(icon)
        {
          icon.setAttribute('d', iconFalse);
        }

        if(iconClass)
        {
          iconClass.classList.remove(iconClassTrue);
          iconClass.classList.add(iconClassFalse);
        }
    }
    else
    {
        this.setAttribute('aria-pressed', 'true');
        elem_targetId.classList.add('collapse_slide_in');
        elem_targetId.classList.remove('collapse_slide_out');
        elem_targetId.classList.add('show');

        if(icon)
        {
          icon.setAttribute('d', iconTrue);
        }

        if(iconClass)
        {
          iconClass.classList.remove(iconClassFalse);
          iconClass.classList.add(iconClassTrue);
        }

    }


};

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

var hide = function() {
  let targetId = this.getAttribute('aria-controls');
  let elem_targetId = document.getElementById(targetId);

  elem_targetId.classList.remove('show');
  elem_targetId.classList.add('hide');
};

var show = function() {
  let targetId = this.getAttribute('aria-controls');
  let elem_targetId = document.getElementById(targetId);

  elem_targetId.classList.add('show');
  elem_targetId.classList.remove('hide');
};

var toggledata = function() {
  let contentID = this.getAttribute('data-content');
  let controlStatus = this.getAttribute('data-status');
  let controlClassTrue = this.getAttribute('data-controlclasstrue');
  let controlClassFalse = this.getAttribute('data-controlclassfalse');
  let contentTrue = this.getAttribute('data-contenttrue');
  let contentFalse = this.getAttribute('data-contentfalse');

  let content = document.querySelector(contentID);

  if(controlStatus == 0)
  {
      this.classList.remove(controlClassFalse);
      this.classList.add(controlClassTrue);

      content.innerHTML = contentTrue;

      this.setAttribute('data-status', 1);
  }
  else
  {
      this.classList.add(controlClassFalse);
      this.classList.remove(controlClassTrue);

      content.innerHTML = contentFalse;

      this.setAttribute('data-status', 0);
  }
};

var accordion = function() {
  let targetControl = this.getAttribute('data-control');
  let targetStatus = this.getAttribute('data-status');
  let targetGroup = this.getAttribute('data-group');

  let elementControl = document.getElementById(targetControl);
  let targetIcon = '';
  let elementIcon = null;
  let iconTrue = null;
  let iconFalse = null;

  if(this.getAttribute('data-icon'))
  {
    targetIcon = this.getAttribute('data-icon');
    elementIcon = document.getElementById(targetIcon);
    iconTrue = this.getAttribute('data-icon-true');
    iconFalse = this.getAttribute('data-icon-false');
  }

  if(targetGroup)
  {
    let elementGroup = document.querySelectorAll('[data-group="'+targetGroup+'"]');

    for(let x = 0; x < elementGroup.length; x++)
    {
      let targetControlGroup = elementGroup[x].getAttribute('data-control');
      let elementControlGroup = document.getElementById(targetControlGroup);
      elementControlGroup.classList.remove('show');
      elementControlGroup.classList.add('hide');
      elementGroup[x].setAttribute('data-status', 'false');

      if(this.getAttribute('data-icon'))
      {
        let targetIconGroup = elementGroup[x].getAttribute('data-icon');
        let elementIconGroup = document.getElementById(targetIconGroup);
        let iconTrueGroup = this.getAttribute('data-icon-true');
        let iconFalseGroup = this.getAttribute('data-icon-false');
        elementIconGroup.setAttribute('d', iconFalseGroup);
      }
    }
  }


  if(targetStatus == 'false')
  {
    elementControl.classList.add('show');
    elementControl.classList.remove('hide');
    this.setAttribute('data-status', 'true');

    if(targetIcon)
    {
      elementIcon.setAttribute('d', iconTrue);
    }

  }
  else
  {
    elementControl.classList.add('hide');
    elementControl.classList.remove('show');
    this.setAttribute('data-status', 'false');

    if(targetIcon)
    {
      elementIcon.setAttribute('d', iconFalse);
    }


  }

};

function addEventListerByElement(elements) {
  for (var i = 0; i < elements.length; i++) {
      //elements[i].addEventListener('click', myFunction, false);
      //console.log(elements[i]);
      let there = elements[i];
      let data_toggle = there.getAttribute('data-toggle');

      //console.log('dddd->'+data_toggle);

      var function_target = window[data_toggle];
      elements[i].addEventListener('click', function_target, false);
  }
}
