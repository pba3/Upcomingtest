<?php
echo 'Design patterns</br>Factory,Decorator&Observer'.'</br>';

 	class Animals{
		private $AnimalName;
		private $AnimalSpecies;
		public $AnimalColor;

		public function __construct($name, $species)
		{
		 $this->AnimalName =$name;
		 $this ->AnimalSpecies=$species;
		}

		public function getNameAndSpecies()
		{
		   return $this->AnimalName.''.$this->AnimalSpecies;
		}
	}

	class AnimalFactory
	{
	 public static function create($name, $species)
	 {
	    return new Animals($name, $species);
	 }
	}
	//have factory create the Animals object
	$persian =AnimalFactory::create('Persian'.' '.'Cat'.'</br>');
	print_r($persian->getNameAndSpecies());//outputs will be Persian Cat

	//decorator
	class animalDecorator {
		private $animal;

		public function __construct($animal) {
		  $this->animal = $animal;  
		}

		public function changeColor($color) {
		  $this->animal->AnimalColor = $color;
		  echo 'The animal color is set to ' .
		  $this->animal->AnimalColor;
		}
	}
	
	
	
	$animalDecorator = new animalDecorator($persian);
	$animalDecorator->changeColor('white');
	$AddAnimals =new AddAnimals();
	


        //observer pattern
	interface Observer{
		public function addColor(Color $color);

	}
	 class Animals implements Observer{
	 	private $colors;

		public function __construct(){
			$tis->colors=array();
		}
		public function addColor(Color $color){
			array_push($this->colors, $color);
		}
		public function updateAnimals(){
			foreach ($this->colors as $color){
				$color->update();
			}
		}
	}




?>
