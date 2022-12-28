<?php

function drawNumbers($min, $max, $count)
{
    $numbers = array();
    while (count($numbers) < $count) {
        $numbers[] = rand($min, $max);
        $numbers = array_unique($numbers);
    }
    return $numbers;
    echo 'ok';
}

$drawnNumbers[] = drawNumbers(3, 9, 7);

print_r($drawnNumbers);