<?php

// полностью скатано с разбора д/з

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
 ];


$text = (string)readline('Введите предмет ');

function search(string $seachThing, array $searchArray): bool
{
    foreach($searchArray as $value){
            var_dump(is_array($value));
        if(is_array($value)){
            if(search($seachThing, $value)){ // у меня вопрос почему срабатывает так =>
                return true;                 // Хоть я и понимаю  что она как пропсами прокидывает к ночалу
            }
            // search($seachThing, $value); // и не работает вот так?
        }else{
            if($seachThing === $value){
                return true;                 // но разве на этой строчке не должен быть полный выход из функции?
            }
        }
    }
    return false;
}

echo search($text, $box) ? 'true' : 'false';