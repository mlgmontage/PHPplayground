<?php
function print_array($arrow)
{
  for ($i = 0; $i < count($arrow); $i++) {
    print $arrow[$i] . ", ";
  }
}

function reverse($arrow)
{
  $i = 0;
  $j = count($arrow) - 1;

  for ($i = 0; $i < $j; $i++, $j--) {
    $temp = $arrow[$i];
    $arrow[$i] = $arrow[$j];
    $arrow[$j] = $temp;
  }
  return $arrow;
}


$arrow = array(1, 2, 3, 4, 5);

print "Normal\n";

print_array($arrow);
print "\n";

print "Reversed\n";
print_array(reverse($arrow));
print "\n";

print "Using native funtion\n";
print_array(array_reverse($arrow));
print "\n";
