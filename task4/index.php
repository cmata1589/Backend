<?php
///task 4
// $a = readline('Enter a number: ');
// $i = 1;
// $sum = 0;
// while ($i <= $a) {
//   $sum = $i + $sum;
//   $i = $i + 1;
//
// }
// echo $sum


//task 5
$a = readline('Enter a number: ');
$i = 1;
$sum = 0;
while ($i <= $a) {
  if ($i % 3 == 0 || $i % 5 == 0) {
    $sum = $i + $sum;
  }
  $i++;
}
echo $sum


 ?>
