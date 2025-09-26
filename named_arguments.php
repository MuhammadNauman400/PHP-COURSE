<?php
function  print_5x($str = 'Hello World', $times = 5){
    for ($x=0; $x < $times; $x++){
        var_dump($str);
    }
}

// print_5x('hello world again', 3);
// print_5x('hello world again !!!', 7);
// What if we want only str not times and if we want to change the order of arguments. Here comes the concept of Named Arguments.

print_5x(times: 3, str: 'Hello Mars');