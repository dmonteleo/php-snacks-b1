<?php

/* ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

$random_number = rand(1,100);
echo "il numero estratto è: $random_number";
for($i = 0; $i < 10; $i++){
  echo "<br>$i";
}

die;

function getUniqueRandom($min, $max, $nItems){
  $new_array = [];
  if($max < $min){
    $tmp = $max;
    $max = $min;
    $min = $tmp;
  }
  if($nItems > ($max - $min)){
    $nItems = $max - $min + 1;
  }

  // creo il ciclo per la creazione dei numeri random
  // finché non ho raggiunto il numero di items li escraggo e li pusho nell'array da restituire
  // con count() ottendo la lunghezza dell'array
  while(count($new_array) < $nItems ){
    // genero un numero random
    $number = rand($min, $max);
    // verifico che non sia presente. In questo caso lo pusho nell'array
    if(!in_array($number, $new_array)){
      // in JS sarebbe new_array.push(number)
      $new_array[] = $number;
    }
  }

  // restituisco l'array creato
  return $new_array;

}

$randArr = getUniqueRandom(5,1,10);

var_dump($randArr);
?>