<?php

// Index Arrays
$fruits = ["Apple", "Banana", "Cherry"];
echo $fruits[0] . "<br><br>";
$fruits[3] = "Peach";

print_r($fruits);
echo "<br><br>";

var_dump($fruits);
echo "<br><br>";

echo "<pre>";
var_dump($fruits);
echo "</pre>";
echo "<br><br>";

// Mixed Type Array
$mixedArray = [15, "Apple", true];
echo "<pre>";
var_dump($mixedArray);
echo "</pre>";
echo "<br><br>";

// Associative Array
$user = [
    "name" => "Xain",
    "age" => 99,
    "hobbies" => ["Coding", "Swimming"]
];
echo $user["name"] . "<br>";
echo $user["age"] . "<br>";
echo "<pre>";
var_dump($user["hobbies"]);
echo "</pre>";
echo "<br><br>";