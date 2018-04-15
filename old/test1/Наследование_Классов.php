<?php 




class Vehical {

	public $color;
	public $speed = 110;
	public $brand;

	const const_PEREMEN = 50;

	public function tripTime($distance){
		$time = $distance / $this->speed;
		return $time;
	}
}

class Bicycle extends Vehical{
	public $type;
	const CALORIES_PER_HOER = 500;

	public function calloriasBurn($distance){
		$time=$this->tripTime($distance);
		$callorias = $time * self::CALORIES_PER_HOER;
		return $callorias;
	}

	public function tripTime($distance){
		$time = parent::tripTime($distance) * 1.5;  // так мы обратились к методу родительского класа и переопределили его
		// $time = ($distance / $this->speed) * 1.2; // а так мы просто переопределили метод 
		// $const = parent::$const_PEREMEN; // а так можно обратиться к константе из родительского класса
		return $time;
	}
}

class Car extends Vehical{
	public $fuel;

	public function fuelConsumption($distance){
		$result = ($this->fuel * $distance) / 100;
		return $result;
	}
}

$car1 = new Car;
$car1->speed = 100;
$car1->fuel = 12;

$car2 = new Car;
$car2->speed = 130;
$car2->fuel = 14;

$bicycle = new Bicycle;
$bicycle->speed = 20;

$distance = 1200;

echo '<br> Car1 time:' . $car1 -> tripTime($distance);
echo '<br> Car2 time:' . $car2 -> tripTime($distance);
echo '<br> Bycicle time:' . $bicycle -> tripTime($distance); 

echo '<br>';

echo '<br> Car1 fuelCons ' . $car1 -> fuelConsumption($distance);
echo '<br> Car2 fuelCons ' . $car2 -> fuelConsumption($distance);
echo '<br> bicycle fuelCons ' . $bicycle -> calloriasBurn($distance);

