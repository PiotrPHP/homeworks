<?php

$age = 64;
if ($age <= 0 || $age > 120) {
    echo "Неизвестный возраст.";
} elseif ($age < 18) {
    echo "Вам ещё рано работать.";
} elseif ($age >= 65) {
    echo "Вам пора на пенсию.";
} else {
    echo "Вам еще работать и работать!";
}
