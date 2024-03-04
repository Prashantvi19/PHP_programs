<?php

function arraymin($array){
    $n=count($array);
    $min=$array[0];
    for($i=1;$i<$n;$i++){
        if($min>$array[$i])
        $min=$array[$i];
   
    }
    return $min;
}
$array=[1,2,50,180,0];
print_r($array);
 echo ("Minimum Value is = ".arraymin($array));
?>