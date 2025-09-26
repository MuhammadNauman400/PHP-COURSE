<?php
$str = "programming";
$vowels = 0;
$consonants = 0;
$str = strtolower($str);

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] >= 'a' && $str[$i] <= 'z') {
        if ($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u') {
            $vowels++;
        } else {
            $consonants++;
        }
    }
}

echo "Vowels: $vowels, Consonants: $consonants";
?>
