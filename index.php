<?php
	echo '<b>Reflection class :</b>'.'</br>';

	class Point{
		public $x=5;
		public $y=10;

		public function getX(){
			return $this->x;
		}
		public function getY(){
			return $this->y;
		}
		public function setX($x){
			return $this->x=$x;
		}
		public function setY($y){
			return $this->y=$y;
		}
	}

	$obj = new ReflectionClass('Point');
	echo 'Class name: '.$obj->getName().'</br>';
	
	$property = get_class_vars($obj->getName());
	foreach ($property as $name=>$value) {
		echo $obj->getProperty($name).'</br>';
	}

	$method = get_class_methods($obj->getName());
	foreach ($method as $name) {
		echo $obj->getMethod($name).'</br>';
	}

?>