<?php
$arr = [5,67,99,101,2];
$max = $arr[0];
$min = $arr[0];

for ($i=0; $i < count($arr); $i++){
    if ($arr[$i] > $max) {
        $max = $arr[$i];
    }
    if ($arr[$i] < $min) {
        $min = $arr[$i];
    }
}

echo "Max is $max and Min is $min";
