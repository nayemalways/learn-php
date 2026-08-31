<?php

# PHP Commenting
// This is a single line comment 

# This is also a single line comment

/*
    This is multiline comment
*/

# PHP Variables
 $name = 'Nayem Ahmed';
 $age = 23;
 $profession = 'Software Developer';

//  echo $name . 'and age is ' . $age, ' and my profession is ' . $profession;
 #Note: To concatenate a string in PHP, add . sign. In Javascript we use + to concatenate a string.

 # Variable Interpolation
//  echo "My name is $name. I am $age years old. I am a professional $profession";

# Check Variables Type
// var_dump($name);
// var_dump($age);
// var_dump($profession);
// var_dump($age);

# PHP Variables Scope
# Global Scope and Function Scope
function myTest() {
    global $name; // To access global variable, assign the var by global flag. Otherwise the global var can't be accessible from function scope.
    echo "My name is $name";

    $weather = 'Today is a Sunny Day'; // Local Scope: A local scope variables belongs inside a function. This variable not accessible from global scope.
    echo $weather;
    
}

// myTest();


# Variables Static Scope
function testStatic() {
    static $x = 0;
    echo $x;
    $x++;
};

// testStatic();
// testStatic();
// testStatic();

# Super Global $GLOBAL
$x = 10;
$y = 5;
function testGlobalOne() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
};

// testGlobalOne();
// echo $y;

function testGlobalTwo() {
    global $x, $y;
    $x = $x + $y;
};

// testGlobalTwo();
// echo $x; 

// print 'Hello PHP world, Today I joined with the PHP community';
// echo 'Hello PHP world, Today I joined with the PHP community';

# PHP Data Types
/*
    1. string
    2. int (Numbers)
    3. float (Decimal numbers)
    4. bool (Boolean)
    5. array (Array)
    6. object (Object)
    7. null (Null)
    8. resource (Reference external resources)
*/

# string
$a = 'Apple';
# int
$b = 34;
# float
$c = 45.54;
# bool
$d = true;
# array
$e = ['Hello', 34,];
# object
class User {
    public $name;
    public $age;
}

$user = new User();
$user-> name = 'Nayem';
$user-> age = 23;

// echo $user->name;


// PHP IF-ELSE CONDITION
// if ($age > 18) {
//     echo "The man is adult";
// }else {
//     echo "He is a child";
// }

// PHP Object Data Type
class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    function carDetails() {
        return "My car is a $this->color and model is $this->model";
    }
}

$myCar = new Car("Blue", "B305");
// echo $myCar->carDetails();
// echo $myCar->color;


# -----------------------------PHP String Functions--------------------------------------
$school = 'A Rob School and College';

# Check String length strlen().
// echo strlen($school); 
// echo strlen('My name is nayem ahmed');
// echo strlen('448444');

# String word count
//  echo str_word_count($school);
//  echo str_word_count('Our country name is Bangladesh. Bangladesh is play cricket. Recently Bangladesh won a historic test match in Australia with Australia. That was mind blowing performance from Bangladesh Team. And for a hard pitch and moving pitch of second test. Also lost the toss, we lost the game.');

# String Reverse
// echo strrev($school);
// echo strrev('Nayem Ahmed');

# Search specific substring in a string
// var_dump(str_contains($school, 'and')); // True
// var_dump(str_contains($school, 'andd')); // False

# Search specific text within a  string.
// echo strpos($school, 'and');
// echo strpos($school, 'College');

# String Starts with
// var_dump(str_starts_with($school, 'A Rob')); 

# String Ends with
//  var_dump(str_ends_with($school, 'College')); // true

# String to Uppercase
// echo strtoupper($school);
// echo strtolower($school);
// echo strtoupper($school);
// echo strtolower($school);

# Replace a substring of a String
$college = 'Bhola Govt College';
// echo str_replace('Bhola', 'Noakhali', $college);
// echo str_replace('College', 'School', $college);

# Trim
// echo trim('       Mahin Mohammad');
// echo trim('   Bhola Govt School       ');


# String to Array
$r = explode(" ", $college);
// print_r($r);

// echo substr($college, 6, 4); // Govt
// echo substr($college, 11, 7); // College

# Slice by substr
// echo substr($college, 6); // Govt College
// var_dump(is_int(58.23));
// var_dump(is_float(58.23));
// var_dump(is_infinite(1.9e411));
// var_dump(is_nan('525'));
// var_dump(is_numeric('525'));
// var_dump(intval('452'));

// var_dump((int) "km 25 km");


# PHP Math
// echo(pi());
// echo min(2, 4, 5, -20);
// echo max(2, 4, 5, -20);
// echo abs(-45);
// echo sqrt(69);
// echo round(8.6);
// echo round(8.4);
// echo rand(1, 10);


class Carr {
    public static $wheels = 4;
}

echo Carr::$wheels;
