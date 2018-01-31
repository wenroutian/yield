<?php
$star_time = microtime(true);
$res = "";
function it(){
	for ($count=100000;$count--;){
	yield $count/2;
}
}

foreach (it() as $value) {
	$value += 145;
	$res .=$value;
}
$end_time = microtime(true);
echo "time",bcsub($end_time,$star_time,4).PHP_EOL;
echo "memory_get_usage".memory_get_peak_usage(true).PHP_EOL;




?>