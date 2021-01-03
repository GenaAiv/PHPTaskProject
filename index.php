<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  // $num1 = 1;
  // $num2 = 2;

  //arithmic operators
  // $sum = $num + $num2;

  //assignment operators
  // $num1 += $num2;

  // //comparison operators
  // $num1 = 1;

  // $num2 = "2";

  // $num1 != $num2;

  // $num1 === $num2;

  // $num1 < $num2;


  // //Spaceship
  // 1;
  // 2;
  // -1;
  // $num1 <=> $num2;
  // 2;
  // 1;
  // 1;
  // $num1 <=> $num2;
  // 1;
  // 1;
  // 0;
  // $num1 <=> $num2;

  // //Logical Operators

  // $num1 = 5;
  // $num2 = 10;
  // $num1 === 5 xor $num2 === 6;  // Only 1 can be true


  // // Increment/Decrement

  // $num1 = 5;
  // ++$num1; // first its 6 later 6 
  // $num1++; // first its 5 later 6


  // //String Operator

  // $a = 'My Name ';
  // $b = "is Daniel!";

  // $c = $a . $b;  // Punctuation == add them together


  // // String
  // $name = 'Coding is fun';

  // // Integer
  // $name = 12;

  // // Float
  // $name = 12.2123;

  // // Boolean
  // $true = 1;
  // $false = 0;

  // Array 
  $names = array("Daniel", "Dennis", "Michael");
  echo $names['0']; // Daniel
  echo $names['1']; // Dennis
  echo $names['2']; // Michael

  $a = 1;
  $b = 2;

  if ($a === $b) {
    echo "They are the same";
  } else if ($b === 5) {
    echo "Var 'b' is equal to 5";
  } else {
    echo "They are NOT the same";
  }

  switch ($a) {
    case 25:
      echo "Var is rqual to 25";
      break;

    case 50:
      echo "Var is equal to 50";
      break;
    default:
      echo "None were true";
      break;
  }

  ?>
</body>

</html>