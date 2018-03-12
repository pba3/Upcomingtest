var form = document.getElementById("signup");

eventUtility.addEvent(form, "submit", function(evt){
    var data = getRequestBody();
    
    //alert(data);
    var xhr = new XMLHttpRequest();//creating xhr object

  xhr.open("POST", "text.txt", true); //asynchronous mode
  xhr.setRequestHeader("Content-Type","application/x.www.form.urlencoded")//setting header so they are set along 
  xhr.onreadystatechange = function(){
    if (xhr.readyState === 4){
      var status = xhr.status;
    
      if((status >= 200 && status < 300)||
        status === 304){
          alert(xhr.responseText);
       } else{
          alert(status);
          }
      }
    };
  
  xhr.send(data);
      
  eventUtility.preventDefault(evt);
});
/*var xhr = new XMLHttpRequest();//creating xhr object

xhr.open("POST", "inde.html", true); //asynchronous mode

xhr.onreadystatechange = function(){
  if (xhr.readyState === 4){
    var status = xhr.status;
  
    if((status >= 200 && status < 300)||
      status === 304){
        alert(xhr.responseText);
     } else{
        alert("something bad happend");
        }
    }
  };

xhr.send(null);
*/

var getRequestBody = function() {
  //var form = document.getElementById("forms");
    var values =[];
  
  for (var j = 0, l = form.elements.length; j < l; j=j + 1){
        var el = form.elements[j],
          name = encodeURIComponent(el.name),
          value = encodeURIComponent(el.value),
          complete = name + "=" + value;
          
    values.push(complete);
        }
  
    return values.join("&");
    
    };