<?php

// :: used for access of static, constant and overridden properties of a class


// Outside class
class MyClass {
  const CONST_VALUE = 'A constant value';
  const DI4 = 1;
}
$classname = 'MyClass';
echo $classname::CONST_VALUE; // As of PHP 5.3.0

echo MyClass::CONST_VALUE;


// Inside class: 
class OtherClass extends MyClass
{
    public static $my_static = 'static var';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }
}

$classname = 'OtherClass';
$classname::doubleColon(); // As of PHP 5.3.0

OtherClass::doubleColon();



// Override: 
class MyClass1
{
    protected function myFunc() {
        echo "MyClass::myFunc()\n";
    }
}

class OtherClass1 extends MyClass1
{
    // Override parent's definition
    public function myFunc()
    {
        // But still call the parent function
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
    }
}

$class = new OtherClass1();
$class->myFunc();