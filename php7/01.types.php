<?php


// Coercive mode
function sumCoersive(int ...$ints) {
  return array_sum($ints);
}
print(sumCoersive(2, '3', 4.1) . '<br>');


// Strict mode
// declare(strict_types=1); // Uncomment to see type error
function sum(int ...$ints) {
  return array_sum($ints);
}
print(sum(2, '3', 4.1) . '<br>');


// Return type: 
/* 
  Possible types: 
  - int
  - float
  - bool
  - string
  - interfaces
  - array
  - callable
*/
// declare(strict_types = 1); Uncomment to see type error
function returnIntValue(int $value): int {
  return $value;
}
print(returnIntValue(5));