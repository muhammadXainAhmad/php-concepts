<?php
$str = "Hello from PHP";
echo $str."<br>";
$str = strtolower($str);
echo $str."<br>";
$str = strtoupper($str);
echo $str."<br>";
$str = str_replace("PHP","Earth", $str);
echo $str."<br>";
echo str_word_count($str)."<br>";