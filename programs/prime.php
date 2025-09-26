<?php

$num = 19;
$isPrime = true;

if ($num < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
        }
    }
}

if ($isPrime) {
    echo "$num is Prime";
} else {
    echo "$num is not Prime";
}
