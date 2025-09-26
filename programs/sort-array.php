<!-- BUBBLE SORT ASC -->
<?php
$arr = [5,1,2,5,7,9,11];
$n = count($arr);

for($i = 0; $i < $n - 1; $i++){
    for($j = 0; $j < $n - $i -1; $j++){
        if ($arr[$j] > $arr[$j+1]){
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j + 1] = $temp;
        } 
    }
}

echo print_r($arr);
