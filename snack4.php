<?php

/* ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

// $random_number = rand(1,100);
// echo "il numero estratto è: $random_number";
// for($i = 0; $i < 10; $i++){
//   echo "<br>$i";
// }

function getUniqueRandom($min, $max, $nItems) {
  $new_array = [];
  if($max < $min) {
    $tmp = $max;
    $max = $min;
    $min = $tmp;
  }
  if($nItems > ($max - $min)) {
    $nItems = $max - $min + 1;
  }
  while(count($new_array) < $nItems) {
    $number = rand($min, $max);
    if(!in_array($number, $new_array)){
      $new_array[] = $number;
    }
  }
  return $new_array;
}

// echo "<pre>";
$randArr = getUniqueRandom(1, 100, 15);
// echo "</pre>";

var_dump($randArr);
?>