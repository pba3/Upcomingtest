<?php

class planeformview{
 
 public function getHTML(){

  $form='
    <form action="index.php?controller=planeController" method="post">
     <div
      <label for="make">Make:</label>
      <input type ="text" id="make" name="make" />
     </div>
     <div>
       <label for="model">Model:</label>
       <input type="text" id="mail" name="model" />
     </div>
     <div>
       <button type="submit">Save</button>
     </div>
    </form>';
   return $form;

   }

  }

?>
