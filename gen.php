<?php

function gen(){
	yield "a";
	yield "b";
	yield "c"=>"value";
	yield "d";
	yield 2 => "e";
	yield "f";
}

foreach (gen() as $key => $value) {
	echo $key.'=>'.$value.PHP_EOL;
}

?>