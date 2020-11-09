<?php

$a = readline('Enter a number: ');
$i = 1;
$sum = 0;
$prod = 1;

$b = readline('Do you want: "SUM" or "PRODUCT" ');
  if ($b == "SUM") {
    while ($i <= $a) {
      $sum = $i + $sum;
      $i++;
    }
    echo $sum;
  } if ($b == "PRODUCT") {
    while ($i <= $a) {
      $prod = $i * $prod;
      $i++;
    }
    echo $prod;
  } else {
    echo "Enter a Valid option";
  }


 ?>
