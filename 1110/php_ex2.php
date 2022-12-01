<?php

$score = [[101, 102, 104, 105, 106], [200, 201, 203, 205, 300], [0, 0]];
for ($i = 0; $i < count($score) - 1; $i++) {
    for ($j = 0; $j < count($score[$i]); $j++) {
        $score[2][$i] = $score[2][$i] + $score[$i][$j];

    }
    echo '小計=' . $score[2][$i] . "<br>";
}
echo '總計=' . $score[2][0] + $score[2][1];