<?php

/* Consegna:
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/

$db = [

  'teachers' => [
      [
          'name' => 'Michele',
          'lastname' => 'Papagni'
      ],
      [
          'name' => 'Fabio',
          'lastname' => 'Forghieri'
      ]
  ],

  'pm' => [
      [
          'name' => 'Roberto',
          'lastname' => 'Marazzini'
      ],
      [
          'name' => 'Federico',
          'lastname' => 'Pellegrini'
      ]
  ]

];

$class= "";




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 6</title>

  <style>
    body{
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    div{
      display: flex;
      justify-content: center;
      align-items: center;
      border: 1px solid black;
      margin-right: 20px;
    }

    .green{
      background-color: green;
    }

    .grey{
      background-color: grey;
    }

  </style>
</head>
<body>



<?php

foreach($db as $role => $value):

      if ($role === "teachers") {
        $class = "green";
      } else if($role === "pm") {
        $class = "grey";
      }

  foreach($value as $item):
  
  ?> 

    <div style="width: 300px; height:200px;" class="<?php echo $class ?>">

        <?php echo $item["name"] ?>
        <?php echo $item["lastname"] ?>

    </div>

  <?php endforeach ?> 

<?php endforeach ?> 


</body>
</html>