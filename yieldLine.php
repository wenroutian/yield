<?php
  function getLinesFromFile($file,$callback){
  	 if(!$fileHandle = fopen($file,'r')){
  	 	return ;
  	 }

  	 while (false !== $line = fgets($fileHandle)) {
  	 	# code...
  	 	yield $callback($line);
  	 }

  	 fclose($fileHandle);
  }
 $lines = getLinesFromFile("./log.txt","manage");

  function manage($line){
  	echo $line;
  }
 

 foreach ($lines as $value) {
 	
 	}

?>