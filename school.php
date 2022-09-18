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
    case 5: 
        echo "$class Вчимо таблицю множення";
        break;
    case 12:
        echo "$class Майже всі вивчили!";
        break;
    default: 
        echo "$class Такого класу ми не маємо!";
}
