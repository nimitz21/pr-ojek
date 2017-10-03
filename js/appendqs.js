var index = window.location.href.indexOf('?')
  if(index != -1){
      var querystring = window.location.href.slice(index + 1)
      var tag = document.getElementsByTagName('a');

      for(var i = 0; i < tag.length; i++){
          var href = tag[i].getAttribute('href');

          href += (href.indexOf('?') != -1)? '&' : '?';
          href += querystring;

          tag[i].setAttribute('href', href);
      }
      var formtag = document.getElementsByTagName('form');
      for(var i = 0; i < formtag.length; i++){
          var href = formtag[i].getAttribute("action");
          href += (href.indexOf('?') != -1)? '&' : '?';
          href += querystring;

          formtag[i].setAttribute('action', href);
      }
  }