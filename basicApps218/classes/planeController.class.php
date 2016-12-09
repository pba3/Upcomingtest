<?php

class planeController extends controller{

 public function get(){
  $form=new planeformview;
  $form_html=$form->getHTML();
  $this->html.=$form_html;

  }
  public function post(){
   print_r($_POST);
   $plane=new planeModel;
   $plane->setMake($_POST['make']);
   $plane->setModel($_POST['model']);
   $plane->save();

   }
   public  function put(){}
   public function delete(){}

   }
