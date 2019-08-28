<?php

/*
  Arrays are: 
  - Numeric - ususal one
  - Associative - IDs of elements are strings instead of numbers as in ususal one 
  - Multidimensional - nested
*/


// Numeric:
$numbers = array( 1, 2, 3, 4, 5);

$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";


// Associative:
$salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);

$salaries['mohammad'] = "high";
$salaries['qadir'] = "medium";
$salaries['zara'] = "low";


// Multidimensional:
$marks = array( 
  "mohammad" => array (
     "physics" => 35,
     "maths" => 30,	
     "chemistry" => 39
  ),
  
  "qadir" => array (
     "physics" => 30,
     "maths" => 32,
     "chemistry" => 29
  ),
  
  "zara" => array (
     "physics" => 31,
     "maths" => 22,
     "chemistry" => 39
  )
);