<!-- Functions with Parameters -->
 <?php

//  function f($str){
//     echo "{$str}<br>";
//     echo "{$str}<br>";
//     echo "{$str}<br>";
//  }

//  f('HELLO FROM PHP');


//  echo "-----------<br>";
//  f('HELLO FROM MARS');

//  echo "-----------<br>";
//  f('HELLO FROM PHP AGAIN');

//  Functions with Multiple Parameters and default values

function f($str, $count = 9){
    for ($x=0; $x < $count; $x++) { 
        echo "{$str}<br>";
    }
 }


 f('HELLO FROM PHP', 3);


 echo "-----------<br>";
 f('HELLO FROM MARS', 5);

 echo "-----------<br>";
 f('HELLO FROM PHP AGAIN');
