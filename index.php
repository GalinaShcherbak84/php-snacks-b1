<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>Snack 1</h1>
 <?php
    $teams = [
        [
            'ospite' => 'Milan',
            'casa' => 'Roma',
            'puntiOspite' => 23,
            'puntiCasa' => 28
        ],
        [
            'ospite' => 'Napoli',
            'casa' => 'Lazio',
            'puntiOspite' => 33,
            'puntiCasa' => 43
        ],
        [
            'ospite' => 'Lecce',
            'casa' => 'Fiorentina',
            'puntiOspite' => 28,
            'puntiCasa' => 35
        ]
    ];
    
  ?>
  <ul>
    <?php for($i = 0; $i < count($teams); $i++){?>
        <li> <?php echo $teams[$i]['casa'] .'-' .$teams[$i]['ospite'] .' '.'|'.' '.$teams[$i]['puntiCasa'] .'-' .$teams[$i]['puntiOspite']; ?></li>
    <?php } ?>
  </ul>
</body>
</html>