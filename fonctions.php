<?php
/* declare(strict_types = 1); */
function sayHello($name) {
    /* echo 'hello '.$name; */
    echo "hello $name";
}

sayHello('Nawel');

function somme() {
    $som = 0;
    for ($i=0; $i < func_num_args(); $i++) {
        $som += func_get_arg($i);
    }
    echo "<br>la somme des paramètres est $som";
}
function somme2(...$mesParams) {
    $som = 0;
    for ($i=0; $i < count($mesParams); $i++) {
        $som += $mesParams[$i];
    }
    echo "<br>la somme des paramètres est $som";
}

somme(1,2,3,4,5);
somme2(1,2,3);

function changeValue(int &$x = 5) {
    $x = $x*3;
    echo "<br> $x";
}

$number = '10';
changeValue($number);
changeValue();