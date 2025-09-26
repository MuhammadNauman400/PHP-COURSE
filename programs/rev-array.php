<?php
$arr = [2,4,5,6,1,5,7];
$reversed = [];

for($i = count($arr)-1; $i >= 0; $i--){
    $reversed[] = $arr[$i];
}

print_r($reversed);
