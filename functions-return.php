<?php

function addFive($number){
    return $number + 5;
}

$result = addFive(5) + 2;
var_dump($result);

var_dump(addFive(addFive(5)));


