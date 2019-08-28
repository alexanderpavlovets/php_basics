<?php

$myVar = 'The value';
$stringWithVariable = "Here is the value of myVar = $myVar";


// Length 
echo strlen($myVar) . "<br>";


// Find - position
echo strpos($stringWithVariable, "is"); // index