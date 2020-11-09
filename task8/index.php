<?php
$num = rand(1,10);
$i = 0;
$a = 0;

while ($a != $num) {
  $a = readline('Gues a number between 1 and 10: ');

  if ($a < $num) {
    echo "too low, try again. ";
    $i++;
  } elseif ($a > $num) {
    echo "too high, try again.  ";
    $i++;
  }
}

echo "You Won.  Iterations: " .$i;

 ?>
