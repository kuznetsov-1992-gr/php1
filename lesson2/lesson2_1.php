<?php
$option1 = (int)1941;
$option2 = (int)1812;
$option3 = (int)1914;

do{
    $answer = (int)readline("Год начала первой мировой войны? \n 
        Варианты ответов: \n 
        1) {$option1} \n
        2) {$option2} \n
        3) {$option3} \n
    ");
}while (!($answer === $option1 || $answer === $option2 || $answer === $option3));

if($answer === $option3){
    echo("Поздравляю, это правильный ответ!");
}else{
    echo("Жаль, но вы ответили не ветно.");
}
