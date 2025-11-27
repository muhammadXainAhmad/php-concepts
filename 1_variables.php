<?php
/*
Types of  Variables
string
integer
boolean
float or double
null
array
Object
Resource*/


$name = "Xain";
$age = 99;
$isFather = false;
$money = 10.00;
$salary = null;

// Printing variables
echo "Hello " . $name . "!<br>";
echo "Hello {$name}!<br>";
echo "Age: {$age}!<br>";
echo "isFather: {$isFather}<br>";
echo "Salary: {$salary}!<br>";
echo "<br><br>";

// Printing variable types
echo gettype($name) . "<br>";
echo gettype($age) . "<br>";
echo gettype($isFather) . "<br>";
echo gettype($money) . "<br>";
echo gettype($salary) . "<br>";
echo "<br><br>";

// Printing the entire variable
print_r($name);
echo "<br>";

var_dump($name);
echo "<br><br><br>";

// Changing value & printing type
$name=32;
echo gettype($name);
echo "<br><br><br>";

// Variable checking function
var_dump(is_string($name));
echo "<br>";
var_dump(is_string($age));
echo "<br>";
var_dump(is_integer(value: $age));
echo "<br>";
var_dump(is_float(value: $money));
echo "<br><br><br>";

// Check if variable is defined
var_dump(isset($name));
echo "<br>";
var_dump(isset($country));
echo "<br>";
var_dump(isset($salary));
echo "<br><br><br>";
