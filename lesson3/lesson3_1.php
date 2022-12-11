<?php

$arr1 = [];
$arr2 = [];
$multiArr1 = [];
$multuArr2 = [];

for ($i = 1; $i <= 30; $i++){
    if($i % 2 !== 0){
        $arr1[] =$i;
    }else{
        $arr2[] =$i;
    }
}

foreach($arr1 as $index => $number ){
    $multiArr1[] = $number * $arr2[$index];
}

for($i = 0; $i < count($arr1); $i++){
    $multuArr2[] = $arr1[$i] * $arr2[$i];
}

print_r($multiArr1);
print_r($multuArr2);