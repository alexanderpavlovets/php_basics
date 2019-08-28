<?php

// If else example
  $d = date("D");
  echo $d . '<br>';
  
  if ($d == "Fri")
    echo "Have a nice weekend!"; 

  elseif ($d == "Sun")
    echo "Have a nice Sunday!";

  else
    echo "Have a nice day!"; 


// For example
$a = 0;
$b = 0;

for( $i = 0; $i<5; $i++ ) {
  $a += 10;
  $b += 5;
}

echo ("<br> At the end of the loop a = $a and b = $b <br>" );


// While example
$i = 0;
$num = 50;

while( $i < 10) {
  $num--;
  $i++;
}

echo ("<br> Loop stopped at i = $i and num = $num <br>" );


// Foreach example
$array = array( 1, 2, 3, 4, 5);
         
foreach( $array as $value ) {
   echo "Value is $value <br />";
}



// Do while also available :)


// Break: 
$i = 0;
         
while( $i < 10) {
  $i++;
  if( $i == 3 )break;
}
echo ("Loop stopped at i = $i" );


// Continue: 
$array = array( 1, 2, 3, 4, 5);
         
foreach( $array as $value ) {
  if( $value == 3 )continue;
  echo "<br>Value is $value <br />";
}