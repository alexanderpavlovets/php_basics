<?php

/* Scopes: 
  - local variables
  - Functinal parameters
  - global variables
  - static variables
*/


// Local - just inside functions:
$x = 4;
function assignx () { 
   $x = 0;
   print "\$x inside function is $x. <br />";
}

assignx();
print "\$x outside of function is $x. <br />";


// Function's parameters - just parameters:
function multiply ($value) {
  $value = $value * 10;
  return $value;
}
$retval = multiply (10);
Print "Return value is $retval <br />";


 // GLOBAL variables - if want to modify outer var inside function -> use GLOBAL:
$somevar = 15;
function addit() {
  GLOBAL $somevar;
  $somevar++;
  
  print "Somevar is $somevar";
}
addit();


// STATIC variables: - won't be destroyed after functioon is exited. (In contrast - func parameter will be destroyed)
function keep_track() {
  STATIC $count = 0;
  $count++;
  print $count;
  print "<br />";
}

keep_track();
keep_track();
keep_track();