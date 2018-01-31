<?php
set_error_handler('displayErrorHandler');
 function getLines($file){
 	try {
 	   if(!file_exists($file)){
 	   	throw new Exception("Error Processing Request", 1);
 	   } 
 	  $f = fopen($file,"r");
 	} catch (Exception $e) {
 		echo $e->getMessage();
 		return ;
 	}
 		
 	
 	try {
 	
 		while ($line = fgets($f)) {
 			# code...
 			yield $line;
 		}
 	} catch (Exception $e) {
 		echo "打开文件失败";
 		return ;
 	}finally{
        fclose($f);  
 	}
 }
 foreach (getLines("./LOG") as $n => $value) {
 	  if($n>5){
 	  	break;
 	  }
 	  echo $value;
 }

function displayErrorHandler($error, $error_string, $filename, $line, $symbols){
   echo $error_string;
 }

?>