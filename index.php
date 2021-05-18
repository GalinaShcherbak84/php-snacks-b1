<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- snack 1 -->
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
  <!-- snack 2 -->
  <h1>Snack 2</h1>
  <?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];
        if(empty($email)||empty($name)||empty($age)||strpos($email, '@') === false||strpos($email, '.') === false|| 
        strlen($name) < 3||is_numeric($age) === false){
            echo 'Accesso negato';
        }else{
            echo 'Accesso riuscito';
        };

  ?>
   <!-- sneck 3 -->
    <h1>Snack 3</h1>
    <?php
    $myArray = [];
    while (count($myArray) <= 15) { 
        $number = rand(1, 100);
        if (!in_array($number, $myArray)) {
             $myArray[] = $number;
        }
    };
    var_dump($myArray);
    ?>

</body>
</html>