<?php
 function parse_ini($file_path){
       if(!file_exists($file_path)){
       	throw new Exception("file not exist{$file_path}");
       }
       $text = fopen($file_path, 'r');
       while ($line=fgets($text)){
       	list($key,$param) = explode("=",$line);
       	yield $key => $param;
       }
 }

// iterator_to_array 进行获取相应的数组
print_r(iterator_to_array(parse_ini("./test.ini")));



?>