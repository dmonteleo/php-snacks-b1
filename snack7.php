<?php

//Consegna:
//Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

$alunni = [
  [
    'nome' => 'Davide',
    'cognome' => 'Pizzola',
    'voti' => [
      'matematica' => 9,
      'italiano' => 7,
      'fisica' => 9.5,
      'storia' => 7
    ]
  ],
  [
    'nome' => 'Ugo',
    'cognome' => 'de Ughi',
    'voti' => [
      'matematica' => 6.25,
      'italiano' => 8,
      'fisica' => 5.5,
      'storia' => 8.5
    ]
  ],
  [
    'nome' => 'Lello',
    'cognome' => 'de Lellis',
    'voti' => [
      'matematica' => 8.25,
      'italiano' => 7,
      'fisica' => 8,
      'storia' => 7.5
    ]
  ],
];

function mediaVoti($array){

  $somma = 0;

  foreach ($array as $value) {
    $somma += $value;
  };

  $media = $somma / count($array);

  return $media;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7</title>
</head>
<body>

<ul>
  <?php foreach($alunni as $value): ?>

    <li>
      <?php echo $value["nome"] ?>
      <?php echo $value["cognome"] ?>
      <?php echo "Media: " . mediaVoti($value['voti']) ?>
    </li>

  <?php endforeach ?>
</ul>


</body>
</html>