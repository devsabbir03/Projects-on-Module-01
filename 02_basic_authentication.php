<?php

define("USERNAME", "sabbir");
define("PASSWORD", "764568");

echo "Enter Username: ";
$Username = readline();
echo "Enter Password: ";
$Password = readline();

if($Username === USERNAME && $Password === PASSWORD){
    echo "Log in Succesfull!. ";
}else{
    echo "Invalid Input. ";
}