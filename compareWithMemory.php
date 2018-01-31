<?php
$star_time = microtime(true);
$arr = [];
$res = "";
for ($count=100000;$count--;){
	$arr[] = $count/2;
}
foreach ($arr as $value) {
	$value += 145;
	$res .=$value;
}
$end_time = microtime(true);
echo "time",bcsub($end_time,$star_time,4).PHP_EOL;
echo "memory_get_usage".memory_get_peak_usage(true).PHP_EOL;

// with yield
// time0.0685
// memory_get_usage15990784

// with yield
// time0.1206
// memory_get_usage1048576

?>