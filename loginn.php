<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ezzbooksearch</title>
    <link rel="stylesheet" href="style4.css">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

<body background="images/orange-white.jpg">

<script>
var req = new XMLHttpRequest();//creating req object or the request

req.open("GET", "loginn.php", true); //asynchronous mode //req.open  - Initializes a request
   
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
</script>

<div class="p-3 mb-2 bg-success text-white">ezzBooks</div>

<!--<div class="container">-->
<!--<div class="jumbotron">-->
  <!--<h3>Login</h3>-->
</div>

<div class="container" class="container-fluid">
<form id="login" class="form-horizontal" action ="loginn.php" method="post" enctype="multipart/form-data" autocomplete="on">

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html"><strong>Home</strong></a>

<?php include 'errors.php'; ?>
<div class="form-group" class="row">
      <label class="control-label col-sm-4" class="control-label col-xs-2"for="username">Username:</label>
      <div class="col-sm-10">
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
        </div>
      </div>

	<div class="form-group">
      <label class="control-label col-sm-4" for="password">Password:</label>
      <div class="col-sm-10">          
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
      </div>
    </div>
	<br>
	<div class="form-group"> 
       <div class="btn-group">   
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="login">Login</button>
      </div>
  </div>
	</div>
 
	<p>
		Not yet a member? <a href="reg.php">Sign up</a>
	</p>
</form>
</div>
</body>
</html> 

