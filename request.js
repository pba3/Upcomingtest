
var req = new XMLHttpRequest();//creating req object or the request

req.open("GET", "https://web.njit.edu/~pba3/ezzbooksearch1/reg.php", true); //asynchronous mode //req.open  - Initializes a request
   
req.onreadystatechange = function(){ // specifies a function to be executed every time the status of the XMLHttpRequest object changes
    if (req.readyState === 4){
      var status = req.status;
    
      if((status >= 200 && status < 300)||
        status === 304){
          console.log(req.response);
          sessionStorage.setItem('req', JSON.stringify(req));// //just helps keeps track of data
          //sets the storage for req and stores request in there
          var obj = JSON.parse(sessionStorage.req);
          //alert(req);
       } else{
           console.log(req.respone);
           sessionStorage.setItem('req', JSON.stringify(req));// sets the storage for req and stores request in there
           var obj = JSON.parse(sessionStorage.req);
           }
      }
    };
    

req.send(null); //Sends the request

//alert(xhr.responseText + "This is outside of evenhandler");