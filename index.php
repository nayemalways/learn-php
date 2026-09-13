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
function myTest()
{
    global $name; // To access global variable, assign the var by global flag. Otherwise the global var can't be accessible from function scope.
    echo "My name is $name";

    $weather = 'Today is a Sunny Day'; // Local Scope: A local scope variables belongs inside a function. This variable not accessible from global scope.
    echo $weather;

}

// myTest();


# Variables Static Scope
function testStatic()
{
    static $x = 0;
    echo $x;
    $x++;
}
;

// testStatic();
// testStatic();
// testStatic();

# Super Global $GLOBAL
$x = 10;
$y = 5;
function testGlobalOne()
{
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
;

// testGlobalOne();
// echo $y;

function testGlobalTwo()
{
    global $x, $y;
    $x = $x + $y;
}
;

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
class User
{
    public $name;
    public $age;
}

$user = new User();
$user->name = 'Nayem';
$user->age = 23;

// echo $user->name;


// PHP IF-ELSE CONDITION
// if ($age > 18) {
//     echo "The man is adult";
// }else {
//     echo "He is a child";
// }

// PHP Object Data Type
class Car
{
    public $color;
    public $model;

    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    function carDetails()
    {
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

# PHP Class Object with Static
class Carr
{
    public static $wheels = 4;
}

// echo Carr::$wheels;


# PHP Loops

// $age = 0;

// while ($age <= 15 ) {
//     echo "$age, ";
//     $age++;
// }



# Loop Problem Solving

// for ($i = 0; $i <= 10; $i ++) {
//     echo "$i, ";
// }

// $i = 10;

// do {
//     echo "$i, ";
//     $i++;
// } while ($i < 20);


// $i = 1;

// while ($i <=10) {
//     echo "$i, ";
//     $i++;
// }


// for ($i = 10; $i >= 1; $i--) {
//     echo "$i, ";
// }

// for ($i = 1; $i <= 20; $i++) {
//     $r = $i / 2;
//     if (is_float($r)) {
//         continue;
//     };

//     echo "$i, ";
// }

// for ($i = 1; $i <= 20; $i++) {
//     $r = $i / 2;
//     if (!is_float($r)) {
//         continue;
//     };

//     echo "$i, ";
// }


// $sum = 0;
// $i = 1;

// while ($i <= 100) {
//     $sum += $i;
//     $i++;
// }

// echo $sum;


// for ($i = 0; $i <=30; $i = $i + 5) {
//     if ($i === 0) {
//         continue;
//     }
//     echo "$i, ";
// }

// $numbers = [10, 20, 30, 40, 50];
// foreach ($numbers as $number) {
//     echo "$number, ";
// }


// $numbers = [10, 25, 30, 45, 50, 75];
// foreach ($numbers as $number) {
//     if ($number >= 50) {
//         echo "$number ";
//     }
// }

// $numbers = [10, 5, 20, 8, 30];
// $result = 0;
// foreach ($numbers as $number) {
//     if ($number > $result) {
//         $result = $number;
//     }
// }

// echo $result;

// $num = 7;
// for ($i = 1; $i <=10; $i++) {
//     $mul = $i * $num;
//     echo "$num * $i = $mul, ";
// }


// for ($i = 1; $i <= 100; $i++) {
//     if (!is_float($i / 3)) {
//         echo "Fizz ";
//     } elseif (!is_float($i / 5)) {
//         echo "Buzz ";
//     } elseif (!is_float($i / 3) && !is_float($i / 5)) {
//         echo "FizzBuzz ";
//     } else {
//         echo "$i ";
//     }

// }



# Index Array
$cars = array("Volvo", "BMW", "Toyota");

// print_r($cars);
// var_dump(($cars));
// $cars[0] = "Auto Rickshaw";
// echo $cars[0];

// foreach ($cars as $car) {
//     echo "$car, ";
// }



# Associative Array
$books = ["A" => "Onuvutir Obhidhan", "B" => "Growing Through Struggle", "C" => "Birsty Bilas"];

// print_r($books);
// echo $books['A']; // Access array items of associative array

// $books['C'] = "Dark Secret";
// echo $books["C"]; // Dark Secret

function myFunc()
{
    global $books;
    return $books;
}

// print_r (myFunc());


# Loop through an Associative Array
// foreach ($books as $key => $book) {
//     echo "$key: $book, ";  // A: Onuvutir Obhidhan, B: Growing Through Struggle, C: Birsty Bilas,
// }

// # Add Array Items
$fruits = ["Apple", "Banana", "Mango"];

// Add Single item end of an array
// $fruits[] = "Jackfruit";
// $fruits[] = "Orange";

// Add multiple items end of an array
array_push($fruits, "Jackfruit", "Orange");
array_push($fruits, "Lemon", "Coconut");


// Add array items on the beginning of an array
array_unshift($fruits, 'Pineapple', 'Grapes');

// Remove and add specific array items
array_splice($fruits, 7, 2);
array_splice($fruits, 5, 2, "Watermelon");


// Remove last item of array
array_pop($fruits);

// Remove first item of array
array_shift($fruits);

// print_r($fruits);


// PHP- Object Oriented Programming
class Calculation
{
    public $a, $b, $c;

    function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }
}

$c1 = new Calculation();

$c1->a = 20;
$c1->b = 20;

// echo $c1->sum();



class Employee
{
    private $name;
    public $age;
    public $role;
    public $salary;

    function __construct($name, $age, $role, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->role = $role;
        $this->salary = $salary;
    }


    public function info () {
        return "$this->name, $this->age, $this->role, $this->salary";
    }

}



// inheritance
class Manager extends Employee {
    public $ta_da = 1000;
    
    function __construct ($name, $age, $role, $salary, $ta_da) {
        parent::__construct($name, $age, $role, $salary);
        $this->ta_da = $ta_da;
        $this->salary += $this->ta_da;
    }
}

$e1 = new Employee("Nayem", 24, 'Software Developer', 50000);
$e2 = new Manager("Rana", 17, 'Ship Builder', 100000, 3000);

// echo $e1->info();
// echo $e2->info();
// echo $e2->name;


class Phone {
    public $model;
    public $type;
    public $price;

    function __construct($model, $type, $price) {
        $this->model = $model;
        $this->type = $type;
        $this->price = $price;
    }


    function __destruct() {
        echo "$this->model, $this->type, $this->price";
    }
}

// $realme = new Phone("Realme C85 Pro", "Smartphone", 26000);



// Method and Property Overriding
class ParentCalc {
    public $name = 'Mohsin';

    function calc ($a, $b) {
        echo $a+$b;
    }
}

class ChildCalc extends  ParentCalc {
    public $name = 'Nayem';

    function calc ($a, $b) {
        echo $a * $b;
    }
}


$parentCalc = new ParentCalc();

// echo $childCalc->name;
// echo $parentCalc->calc(10, 20);


// Final keyword
// final class Fruit {

// }

// class Strawberry extends Fruit {

// }


abstract class ParentClass {
    public $name = 'Programming';

    abstract protected function calculation($a, $b);
}


class ChildClass extends ParentClass{
    public function calculation($a, $b) {
        echo $a + $b;
    }
}


$test = new ChildClass();

// $test->calculation(34,56);

# OOP Interface

interface A {
    function sum($a, $b);
}

interface B {
    function sub($a, $b);
}

class C implements A, B {
    function sum($a, $b) {
        echo $a + $b;
    }

    function sub($a, $b) {
        echo $a - $b;
    }
}


$c = new C();

// echo $c->sum(4,5);
echo $c->sub(4,5);