<?php

function firstFuncInPHP( ) {
  echo 'Ha! Created <br>';
}

firstFuncInPHP();
function addFive($num) {
  $num += 5;
}
function addSix(&$num) {
  $num += 6;
}

$orignum = 10;
addFive( $orignum );
echo "Original Value is $orignum<br />";
addSix( $orignum );
echo "Original Value is $orignum<br />";


// Default parameters:
function printMe($param = "Default param") {
  print $param . "<br>";
}

printMe("This is test");
printMe();


// Dynamic functions call:
function sayHello() {
  echo "Hello<br />";
}

$function_holder = "sayHello";
$function_holder();