<?php

function genArr()
{
   for($i = 0; $i < 11; $i++) {
    $ar[] = rand(1, 100);
   }
   return $ar;
}

function distributionBitArr(array $numbers):array
{
    foreach($numbers as $num => $number){
        if(!($number & 1)){
            $ar[$num] = 'четное';
        } else {
            $ar[$num] = 'нечетное';
        }
    }
    return $ar;
}

$evenNumFun = function (int $num) {
    if($num % 2 === 0) {
        return 'четное';
    } else {
        return 'нечетное';
    }
};

$evenArrowFun = fn($number) =>($number & 1) ? 'нечетное' : 'четное' ; // списано

$numbers = genArr();

$evenArrow = array_map($evenArrowFun, $numbers);

$evenNum = array_map($evenNumFun, $numbers);

$evenBitNum = distributionBitArr($numbers);

print_r($numbers);
print_r($evenArrow);
print_r($evenNum);
print_r($evenBitNum);
