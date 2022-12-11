<?php

$arrBace = [
    'здоровья',
    'счастья',
    'богатства',
    'воображения',
    'терпения',
    'внимания',
];
$arrExtension = [
    'крепкого',
    'безудержного',
    'большого',
    'безграничного',
    'ангельского',
    'всеобщего',
];
$arrSum =[];
$r1 = null;
$r2 = null;

$whomName = readline("Имя человека, которого хотите поздравить ");
$fromWhomName = readline("Имя отправителя ");

for($i = 1; $i <= 3; $i++){
 $r1 = array_rand($arrExtension);
 $r2 = array_rand($arrBace);
 $arrSum [] = $arrExtension[$r1] . ' ' . $arrBace[$r2];
 unset($arrExtension[$r1]);
 unset($arrBace[$r2]);

}

echo( <<< HTML_TXT
    "Дорогой {$whomName}, от всего сердца поздравляю тебя с днем рождения, желаю {$arrSum[0]}, {$arrSum[1]} и {$arrSum[2]}!" \n  {$fromWhomName}
HTML_TXT);