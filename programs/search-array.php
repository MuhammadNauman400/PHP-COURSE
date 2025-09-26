<?php 
$arr = [2,5,6,8,4,9];
$search = 6;
$found = -1;

for ($i = 0; $i <count($arr); $i++){
    if ($arr[$i] == $search) {
        $found = $i;
        break;
    }
}

if ($found != -1) {
    echo "Element found at index $found";
} else {
    echo "Element not found";
}