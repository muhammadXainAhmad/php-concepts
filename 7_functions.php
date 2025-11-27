<?php

// Simple Function
function sayHello()
{
    echo "Hello Coders<br>";
}
sayHello();


// With Parameters
function greet($name)
{
    echo "Hello, " . $name . "!<br>";
}
greet("Alice");
greet("Bob");


// Default Parameter
function greeting($name = "Charlie")
{
    echo "Hey, " . $name . "!<br>";
}
greeting();
greeting("Alex");


// Return from Function
function multiply($a, $b)
{
    $result = $a * $b;
    echo $result;
}
multiply(3, 6);