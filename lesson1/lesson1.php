<?php
//in data

$name = readline("как вас зовут? ");
$age = (int)readline("сколько вам лет? ");

// out data
echo("Вас зовут {$name}, вам {$age} лет ");

?>

<?php

// in data
$task1 = (string)readline("Какая задача №1? ");
$taskTime1 = (int)readline("Сколько времени займет задача в часах? "); 
$task2 = (string)readline("Какая задача №2? ");
$taskTime2 = (int)readline("Сколько времени займет задача в часах? "); 
$task3 = (string)readline("Какая задача №3? ");
$taskTime3 = (int)readline("Сколько времени займет задача в часах? ");
 //logic
$sumTaskTime = $taskTime1 + $taskTime2 + $taskTime3;

// out data
echo( <<< HTML_TXT
{$name}, сегодня у вас запланировано 3 приоритетных задачи на день:
- {$task1} ({$taskTime1}ч)
- {$task2} ({$taskTime2}ч)
- {$task3} ({$taskTime3}ч)
Примерное время выполнения плана = {$sumTaskTime}ч
HTML_TXT);
?>

<?php
   

?>