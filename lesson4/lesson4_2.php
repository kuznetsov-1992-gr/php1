<?php

function createArr($count)
{
    for($i = 0; $i <= $count; $i++){
        $ar[] = rand(1, 100); 
    }
    
    return $ar;
}

function resultArr(array $numbers):array 
{
    $resultArray = [];
    $resultArray['max'] = max($numbers);
    $resultArray['min'] = min($numbers);
    $avgNum = array_sum($numbers) / count($numbers);
    $resultArray['avg'] = number_format($avgNum, 2, '.','');
    return $resultArray;

}

$numbers = createArr(10);

print_r($numbers);

$resArrNum = resultArr($numbers);

print_r($resArrNum);

