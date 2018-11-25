<?php
const AGE_WORK = 18;
const AGE_PENS = 65;
$age = 45;

if ($age >= AGE_WORK and $age <= AGE_PENS) {
    echo "Вам еще работать и работать";
} elseif ($age > AGE_PENS) {
    echo "Вам пора на пенсию";
} elseif ($age >= 1 and $age < AGE_WORK) {
    echo "Вам еще рано работать";
} else {
    echo "Неизвестный возраст";
}