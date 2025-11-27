<?php
// Comparision Operators
// ==, ===, != or <>, !==, <, <=, >, >=
$age = "10";

if ($age <= 12) {
    echo "Too young to watch Harry Porter<br>";
} else if ($age < 15) {
    echo "You may watch Harry Porter<br>";
} else {
    echo "You should watch Harry Porter<br>";
}

// Logical Operators
// && - and
// || - or
// ! - not

$age = 15;
$watched = true;

if ($age >= 15 && !$watched) {
    echo "You mucst watcch Harry Porter<br>";
}

if ($age >= 15 || !$watched) {
    echo "You should watch Harry Porter<br>";
}

// Switch

$day = 3;
switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
}