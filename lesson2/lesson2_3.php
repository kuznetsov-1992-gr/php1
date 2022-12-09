<?php
do{
    $number = (int)readline("Введите положительное число ");
}while($number <= 0);


$fingerNumber = (int)$number % 8;

switch($fingerNumber){
    case (1):
        echo("Большой");
        break;
    case ($fingerNumber === 2 || $fingerNumber === 0):
        echo("Указательный");
        break;
    case ($fingerNumber === 3 || $fingerNumber === 7):
        echo("Средний");
        break;
    case ($fingerNumber === 4 || $fingerNumber === 6):
        echo("Безымянный");
        break;
    case (5):
        echo("Мезинец");
        break;
    default:
        echo("Не соблюдены условия");                  
}
?>