<?php
   // Before PHP 7
   use com\tutorialspoint\ClassA;
   use com\tutorialspoint\ClassB;
   use com\tutorialspoint\ClassC as C;

   use function com\tutorialspoint\fn_a;
   use function com\tutorialspoint\fn_b;
   use function com\tutorialspoint\fn_c;

   use const com\tutorialspoint\ConstA;
   use const com\tutorialspoint\ConstB;
   use const com\tutorialspoint\ConstC;

   // PHP 7+ code
   use com\tutorialspoint\{ClassA1, ClassB1, ClassC1 as C1};
   use function com\tutorialspoint\{fn_a1, fn_b1, fn_c1};
   use const com\tutorialspoint\{ConstA1, ConstB1, ConstC1};