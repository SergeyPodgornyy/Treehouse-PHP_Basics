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

	public function getPrice(){
		return $this->price;
	}
}

//method_exists(object, method_name);

echo method_exists("Product", "getPrice");

$p = new Product("Name",20,"Description");
echo method_exists($p, "getPrice");

class Soda extends Product {
	//child of Product
}

$s = new Soda();

//is_subclass_of(object, class_name);

echo is_subclass_of($s, "Product");


?>