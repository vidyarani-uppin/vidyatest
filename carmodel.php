
<?php

class Car{
	public $model;
	public $color;
	public $year;
	public $speed;

	
	function __construct($m, $c, $y, $s){
		
		$this->model = $m;
		$this->color = $c;
		$this->year = $y;
		$this->speed = $s;
	}
	
	function increase(){
		return $this->speed++;
	}
	function decrese(){
		return $this->speed--;
	}
}
$car_obj = new Car('BMW', 'white', 1990, 200);
$car_obj1 = new Car('Nissan Versa', 'black', 1992, 400);

echo $car_obj->model."<br>";
echo $car_obj->color."<br>";
echo $car_obj->year."<br>";

echo "Before Incresing the speed of".$car_obj->model."<br>";
echo $car_obj->speed."<br>";

echo "After Incresing the speed";
$car_obj->increase();
echo $car_obj->speed."<br><br><br><br>";


echo $car_obj1->model."<br>";
echo $car_obj1->color."<br>";
echo $car_obj1->year."<br>";

echo "Befor decresing th Speed".$car_obj1->model."<br>";
echo $car_obj1->speed."<br>";

echo "After Decresing the speed";
$car_obj->decrese();
echo $car_obj->speed."<br><br><br><br>";

//INHERITENCE CONCEPTS


class Bicycle extends Car {
	
    public  $gear=2;


    function __construct(){
		$this->model = "LadyBird";
        $this->color = "blue";
        $this->speed = 600;
	}

	function increase(){
		return $this->speed=$this->speed+500;
	}
}
$bicycle_obj = new Bicycle();

echo "GEARE :".$bicycle_obj->gear."<br>";
echo "Bicycle Model".$bicycle_obj->model."<br>";
echo "Color of bicycle".$bicycle_obj->color."<br>";


$bicycle_obj->increase();
echo " After incresing speed of bicyle".$bicycle_obj->model."<br>";
echo $bicycle_obj->speed;


?>



