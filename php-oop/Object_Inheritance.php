<?php

class Product{
	public $common_name = "default_name";
	public $price = 0;
	public $common_desc = "default description";

	function __construct($name, $price, $desc){
		$this->common_name = $name;
		$this->price = $price;
		$this->common_desc = $desc;
	}

	public function getInfo(){
		return "Product Name: ".$this->common_name;
	}
}

class Soda extends Product
{
	public $flavor;

	function __construct($name, $price, $desc, $flavor){
		parent::__construct($name, $price, $desc);
		$this->flavor = $flavor;
	}

	public function getInfo(){
		return "Product Name: ".$this->common_name.", Flavor: ".$this->flavor;
	}
}

$shirt = new Product("Space Juice T-Shirt", 20, "Awesome Grey T-Shirt");
$soda = new Soda("Space Juice Soda", 2, "Thirst Mutilator", Grape);

echo $soda->getInfo();

?>