
var req = new XMLHttpRequest();//creating req object
req.open("POST", "request.js", true); //asynchronous mode
  
  req.setRequestHeader("Content-Type","application/x.www.form.urlencoded");//setting header so they are sent along with request
  
  req.onreadystatechange = function(){
    if (req.readyState === 4){
      var status = req.status;
    
      if((status >= 200 && status < 300)||
        status === 304){
          alert(req.responseText);
       } else{
          alert(status);
          }
          alert(req};
          '<?php include "request.php";>';
      }
    };
  
  req.send('request.js');