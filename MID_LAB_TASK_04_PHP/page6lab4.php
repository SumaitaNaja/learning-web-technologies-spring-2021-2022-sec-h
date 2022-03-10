<?php
  $test = [ 'SUMAITA', 22, '8th'];
  $searchElement = 'NAJA';
  $flag = 0 ;
  
  print_r($test);
  echo "</br>";
  echo "Search = " .$searchElement."<br>";
  
  
  for ($i=0 ; $i<1 ; $i++)
  {
	 if( $searchElement == $test[$i]) 
	 {
		 echo "Element is Found" ;
		 $flag = 1;
	 }
	 if($flag == 0)
	 {
		echo "Element is not Found" ;
	 }
  }
  
 ?>



