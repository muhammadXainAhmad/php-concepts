<?php
// for loop
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";

}
echo "<br>";

// while loop
$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;

}
echo "<br>";

// foreach loop
$fruits = ["Apple", "Banana", "Cherry"];
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}