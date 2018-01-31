<?php
  function echoLog(){
  	while(true){
  		echo "Log:".yield.PHP_EOL;
  	}
  }

  function fileLog($fileName){
  	$fileHandle = fopen($fileName,'a');
  	while(true){
  		fwrite($fileHandle, yield);
  	}
  }

  $echoLog = echoLog();
  $fileLog = fileLog(__DIR__.'/LOG');

  $echoLog->send("a");
  $echoLog->send("b");
  $fileLog->send("b");
?>