<?php
$matrix = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9],
];

$sum = 0;

for ($i = 0; $i < count($matrix); $i++) {
  for ($j = 0; $j < count($matrix[$i]); $j++) {
    if ($i == $j) {
      $sum += $matrix[$i][$j];
    }
  }
}

print 'Diagonal sum of matrix is: ' . $sum . "\n";
