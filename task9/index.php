<?php
$dt = new DateTime();
$year = $dt->format('Y');
$i = 0;

$a = date('L');
if ($a == 1) {
  echo $year;
  while ($i <= 20) {
    $year = $year + 4;
    echo $year;
    $i++;
  }
}
// falta programar el caso que el ano presente no sea Leap

 ?>
