<?php
// $dt = new DateTime();
// $year = $dt->format('Y');
$year = "2021";
$i = 0;

$a = date('L',strtotime("$year-01-01"));
echo $a;

if ($a = 0) {
  $b= 0
  while ($b = 0) {
    $year = $year + 1;
    $b= date('L',strtotime("$year-01-01"));
    echo $year;
  }
} if ($a = 1 ) {
    echo $year;
    while ($i <= 20) {
      $year = $year + 4;
      echo $year ;
      $i++;
    }
  }

 ?>
