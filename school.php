<?php

$class = rand(1, 13);

switch ($class) {
    case 1: 
        echo "$class Вчимо літери";
        break;
    case 2: 
        echo "$class Вчимо таблицю множення";
        break;
    case 3: 
        echo "$class Вчимо задачі";
        break;
    case 4: 
        echo "$class Вчимо рівняння";
        break;
    case 5: 
        echo "$class Вчимо Дроби";
        break;
    case 6: 
        echo "$class Вчимо програмування";
        break;
    case 7: 
        echo "$class Вчимо вірші";
        break;
    case 8: 
        echo "$class Вчимо трикутники";
        break;
    case 9: 
        echo "$class Вчимо тригонометрію";
        break;
    case 10: 
        echo "$class Вчимо стериометрію";
        break;
    case 11: 
        echo "$class Готуємось до ЗНО";
        break;
    case 12:
        echo "$class Майже всі вивчили!";
        break;
    default: 
        echo "$class Такого класу ми не маємо!";
}
