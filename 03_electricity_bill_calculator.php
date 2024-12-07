<?php

echo "Enter the units consumed: ";
$Unit = (int) readline();

if($Unit <= 100){
    $Bill = $Unit*5;  //1st 100 units cost $5 per unit.
}elseif($Unit <= 200){
    $Bill = 100*5 + ($Unit - 100)*10;   //101-200 units cost $10 per unit.
}elseif($Unit <=300){
    $Bill = 100*5 + 100*10 + ($Unit - 200)*15;   //201-300 units cost $15 per unit.
}else{
    $Bill = 100*5 + 100*10 + 100*15 + ($Unit - 300)*20;  //300=< units cost $20 per unit.
}


echo "Total Units: $$Bill";