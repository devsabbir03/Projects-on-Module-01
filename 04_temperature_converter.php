<?php


define("FACTOR", 9/5);
define("OFFSET", 32);

echo "Enter temperature: ";
$temp = (float) readline();

echo "Convert to (1: Fahrenheit, 2: Celsius): ";
$choice = (int) readline();


switch ($choice) {
    case 1:
        $result = $temp * FACTOR + OFFSET;
        echo "Temperature in Fahrenheit: $result";
        break;
    case 2:
        $result = ($temp - OFFSET) / FACTOR;
        echo "Temperature in Celsius: $result";
        break;
    default:
        echo "Invalid choice!. ";
        break;
}