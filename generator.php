<?php

//一般的逐行读取文件的方式，当读取大文件的时候，这种方式会导致内存溢出，很快会达到内存的峰值
  function getLinesFromFile($fileName){
  	//检查对应的文件是否能进行打开
     if(!$fileHandle = fopen($fileName,'r')){
     	return ;
     }
     $lines = [];
     //进行逐行读取数据
     while(false !== $line = fgets($fileHandle)){
     	$lines[] = $line;
     }
     //关闭对应的文件
     fclose($fileHandle);
     return $lines;
  }

  $lines = getLinesFromFile("./test.txt");
   
   foreach ($lines as $value) {
   	   echo $value;
   }


   


?>