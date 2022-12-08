<?php

function tour()
{
    if (func_num_args() == 0) {
        echo "沒有指定旅遊景點";
    } else {
        echo "旅遊景點：";
        for ($i = 0; $i < func_num_args(); $i++) {
            echo func_get_arg($i) . "、";
        }
    }
}

tour('台南', '高雄', '宜蘭', '花蓮', '台東')

?>