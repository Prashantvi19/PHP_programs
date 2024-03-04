<?php

function arraymax($array){
    $n=count($array);
    $max=$array[0];
    for($i=1;$i<$n;$i++){
        if($max<$array[$i])
        $max=$array[$i];
   
    }
    return $max;
}
$array=[1,2,50,180,0];
print_r($array);
 echo ("Maximum Value is = ".arraymax($array));
?>