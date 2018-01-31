<?php

//聚合式迭代器接口
class myData implements IteratorAggregate{
	public $property1 = "public property1";
	public $property2 = "public property2";
	public $property3 = "public property3";

	public function __construct(){
		$this->property4 = "last property";
	}
	// must exits;
	public function getIterator(){
	    return new ArrayIterator($this);
	} 
}

$obj = new myData();
foreach ($obj as $key => $value) {
	var_dump($key,$value);
	echo PHP_EOL;
}



//yield 去使用对应的聚合迭代器
class yieldAggregate implements IteratorAggregate{

	protected $data;

	public function __construct($data){
		$this->data = $data;
	}
	public function getIterator(){
		foreach ($this->data as $key => $value) {
			yield $key => $value;
		}
	}
}
 $yieldAggregate = new yieldAggregate(["date"=>"date","time" => "time"]);
 foreach ($yieldAggregate as $key => $value) {
 	echo $key,"=>",$value,PHP_EOL;
 }

class DataContainer implements IteratorAggregate{
	public  $data;
	public function __construct($data){
		$this->data = $data;
	}

	public function &getIterator(){
		foreach ($this->data as $key => &$value) {
			yield $key=>$value;
		}
	}
}
$DataContainer = new DataContainer([1,2,4]);
foreach ($DataContainer as &$value) {
	$value *=-1;
}

var_dump($DataContainer->data);



?>