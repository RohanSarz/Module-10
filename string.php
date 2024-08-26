<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function reverse($string) {
  return strrev($string);
}

function vowelCount($string) {
  
  $string = strtolower($string);
  $count = 0;
  $vowels = ["a", "e", "i", "o", "u"];
  for ($i = 0; $i < strlen($string); $i++) {
    
    if (in_array($string[$i], $vowels)) {
      $count ++;
    }
  }
  return $count;
}

foreach ($strings as $string) {
  $reversed = reverse($string);
  $vowel = vowelCount($string);
  echo "Original String: {$string}, Vowel Count: {$vowel}, Reversed String: {$reversed}" .  "<br>";
}