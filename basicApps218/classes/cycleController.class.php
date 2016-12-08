<?php

	class cycleController extends  controller{

	public function get(){
	 $form=new cycleformview;
	 $form_html=$form->getHTML();
	 $this->html.=$form)html;
	 }
	public function post(){
	 print_r($_POST);
	 $cycle=new cycleModel;
	 $cycle->setMake($_POST['make']);
	 $cycle->setModel($_POST['model']);
	 $cycle->save();
	 header('Location: index.php');
	 }
	public function put{}
	public function delete(){}

	}

