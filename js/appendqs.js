var index = window.location.href.indexOf('?')
  if(index != -1){
      var querystring = window.location.href.slice(index + 1)
      var tag = document.getElementsByTagName('a');

      for(var i = 0; i < tag.length; i++){
          var href = tag[i].getAttribute('href');

          if(href.indexOf('?') == -1) {
            href += '?';
            href += querystring;

            tag[i].setAttribute('href', href);
          }
      }
      var formtag = document.getElementsByTagName('form');
      for(var i = 0; i < formtag.length; i++){
          var action = formtag[i].getAttribute("action");
          if(action.indexOf('?') == -1) {
            action += '?';
            action += querystring;

            formtag[i].setAttribute('action', action);

          }
      }
  }