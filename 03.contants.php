<?php
// Valid constant names
define("ONE",     "first thing");
define("TWO2",    "second thing");
define("THREE_3", "third thing");

// Invalid constant names
define("2TWO",    "second thing");
define("__THREE__", "third value"); 

echo ONE;

echo __FILE__ . "<br>";
echo __LINE__ . "<br>";
echo __CLASS__ . "<br>";
echo __METHOD__ . "<br>";
echo __FUNCTION__ . "<br>";