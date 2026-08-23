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
function myTest() {
    global $name; // To access global variable, assign the var by global flag. Otherwise the global var can't be accessible from function scope.
    echo "My name is $name";
}

myTest();