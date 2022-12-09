<?php

$name = readline("как вас зовут? ");
restartTask:
$numberOfTask = (int)readline("Количество задач заплонированных на сегодня? ");
$sumTime = (int)0;
$str = (string)'';
$sumStr = (string)'';
$answer = (string)'';
$remains = (int) 0;


for($i = 1; $i<= $numberOfTask; $i++){
    $str = (string)readline("Задача №{$i} на сегодня? ");
    $time = (int)readline("Сколько времени займет данная задача (в часах)? ");
    $sumStr .= (string)("- {$str} ({$time}ч) \n");
    $sumTime += $time; 
}

echo(<<< HTML_TXT
{$name}, сегодня у вас запланировано {$numberOfTask} приоритетных задачи на день:
{$sumStr}
Примерное время выполнения плана = {$sumTime}ч \n
HTML_TXT);

if($sumTime >= 17 && $sumTime <= 24){
    $answer = readline("Не достаточно времени для сна, желаете изменить список дел? \n
        если да нажмите \"Y\" или \"YES \"");
    $answer = strtolower($answer);

    if($answer === "yes" ||  $answer === "y" ){
        goto restartTask;
    }else{
        $remains = 24 - $sumTime;
        echo("На сон осталось: {$remains}ч");
    }

}elseif ($sumTime > 24) {
    echo(" А вы вообще в курсе, что в сутках 24ч. Требуется пересмотреть расписание!!! \n");
    goto restartTask;
}
?>