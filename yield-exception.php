<?php

     function gen(){
       echo "FOO".PHP_EOL;
       try {
       	  yield;
       } catch (Exception $e) {
       	 echo "Exception:{$e->getMessage()}".PHP_EOL;
       }
       echo "BAR".PHP_EOL;
     }
     $gen = gen();
     $gen->rewind(); // echo 'FOOL'
     $gen->throw(new Exception('Test')); //echo "Exception:Test"  echo "BAR"

?>