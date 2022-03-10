<?php
    $X = 1200 ;
    $Y = 2000 ;
    $Z = 1000 ;
 
    echo "X = " .$X. "</br>" ." Y = " .$Y. "</br> ". "Z = " .$Z. "</br>" ;
 
     if($X>$Y && $X>$Z)
        {
	       echo " The largest Number is ".$X ."</br>";
        }
 
    else if($Y>$X && $Y>$Z)
        {
	       echo " The largest Number is ".$Y."</br>" ;
        }
    else
        {
	       echo " The largest Number is ".$Z ;
        }
 
?>