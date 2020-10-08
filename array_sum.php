<?php
$arrow = [1, 2, 3, 4, 5];
$sum = 0;

for($i=0; $i<count($arrow); $i++) {
  $sum += $arrow[$i];
}

print "Sum of array is: ".$sum."\n";