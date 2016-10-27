<!DOCTYPE html>
<html lang="en">
    <head>
    <title>PHP $_FILES Superglobal variable</title>
    </head>
<body>
<?php
     if(isset ($_POST['btn'])){
       
       echo '<pre>';
       //get all available value from a particular file
       print_r($_FILES['upload']);
       
       echo '</pre>';

     }


?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="upload"/><br />
    <input type="submit"  name="btn" />

</form>

</body>
</html>
