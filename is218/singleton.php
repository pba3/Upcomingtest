<?php
//Singleton

 class getDeals{
   public static $instance;

   public static function getInstance(){
   	getDeals::$instance = new getDeals();
	return getDeals::$instance;

   }

   private function __construct (){
   //Private
   }

   public function getQuery(){
   	return "Great Deals"."</br>";
    }

 }

 $d = getDeals::getInstance();
 echo $d->getQuery();

  //strategy
  function getDeals($jacket)
  {
  	$discount =0;
	$winterSeason=false;
	$bigSale=true;

	if($jacket=="Nike")
	{
	  if (!$winterSeason) {$discount +=5;}

	 
	  if ($bigSale) {$discount+=7;}
	 }
	 else if ($jacket=="Puma")
	 {
	   if(!$winterSeason) {$discount+=4;}

	   if($bigSale) {$discount+=10;}
	  }
	  return $coupon="Get{$discount}% off the price of your new jacket.";
    }
  echo getDeals('leather');

?>
