<?php
 class LineIterator implements Iterator{
     protected $fileHandle;
     protected $line;
     protected $i;

     public function __construct($fileName){
        if(!$this->fileHandle =  fopen($fileName, 'r')){
        	throw new Exception("文件打开失败");
        }
     }
     public function rewind(){
     	fseek($this->fileHandle, 0);
     	$this->line = fgets($this->fileHandle);
     	$this->i = 0;
     }

     public function valid(){
     	return false !== $this->line;
     }

     public function current(){
     	return $this->line;
     }

     public function key(){
     	return $this->i;
     }

     public function next(){
     	if($this->valid()){
     		$this->line = fgets($this->fileHandle);
     		$this->i ++ ;
     	}
     }

     public function __destruct(){
     	fclose($this->fileHandle);
     }
 }
 $lines  = new LineIterator("./log.txt");
 //这种迭代器生成出来的迭代只能进行foreach进行迭代
 foreach ($lines as $key => $value) {
 	echo $value.PHP_EOL;
 	echo $key.PHP_EOL;
 }



?>