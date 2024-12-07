<?php

echo "Enter a Number: ";
$Input = readline();


$Number = (float)$Input;   //convert input to number
if($Number < 0){
    echo "The number is Negetive. ";
}elseif($Number > 0){
    echo "The number is positive. ";
}elseif(!is_numeric($Input)){
    echo "Invalid input! Please enter valid number. ";
}else{
    echo "The number is Zero. ";
}

