<?php
function string_reverse($s)
{
  $i = 0;
  $j = strlen($s) - 1;

  for (; $i < $j; $i++, $j--) {
    $temp = $s[$i];
    $s[$i] = $s[$j];
    $s[$j] = $temp;
  }
  return $s;
}

print "Hello, world\n";
print string_reverse('Hello world');
print "\n";
