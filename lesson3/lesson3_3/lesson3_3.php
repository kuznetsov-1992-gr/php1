<?php
include 'data_file.php';

$students = [
    'ИТ20' => [],
    'БАП20' => [],
];
$str ='';
$arrGroupEstim = [];
$higherRating = '';
$raiting = 0;
$dismissGroup = [];
// формирую массив с data_file 
foreach($surnames as $index => $surname){
    $str =(string)$surname . ' ' . $name[array_rand($name)];

    if($index % 2 !== 0){
        $students['ИТ20'][$str] = rand(2, 5) ;
    }else{
        $students['БАП20'][$str] = rand(2, 5);
    }
    $setRandom[] = rand(2, 5);
}
// Здание 3_3
foreach($students as $group => $student){
    $sum = 0;
    foreach($student as $nameStudent => $estimation){
        if($estimation === 2){
            $dismissGroup[$group][$nameStudent] = $estimation;
        }
        $sum += $estimation;
        $aveSum = $sum / count($student);  
    }
    
    if($aveSum > $raiting){
        $higherRating  = "{$group}";
        $raiting = $aveSum;
    }elseif($aveSum === $raiting){
        $higherRating  .= " {$group}";
        $raiting = $aveSum;
    }  
}

echo "Самый высокий средний бал у группы \"{$higherRating}\" \n";

print_r($dismissGroup);