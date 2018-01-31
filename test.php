<?php
 
 function getKey($i){
 	while ($i<1000) {

 		yield $i++;
 		
 		# code...
 	}
 	
 }

//$data = [];
 foreach ( getKey(100) as $value) {
 	file_put_contents("./log.txt",json_encode([$value=>"test"])."\r\n",FILE_APPEND);
 	//array_push($data,[$value => "test" ]);
 }
 // $str = json_encode($data);
 // file_put_contents("./log.txt",$str);

?>