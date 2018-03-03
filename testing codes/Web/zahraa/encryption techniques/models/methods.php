<?php

function get_indexs($val, $matrix)
{
    $valx = str_split($val);
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($valx[0] == $matrix[$i][$j]) {
                $indexs[0][0] = $i;
                $indexs[0][1] = $j;

            } elseif ($valx[1] == $matrix[$i][$j]) {
                $indexs[1][0] = $i;
                $indexs[1][1] = $j;

            }

        }

    }
    return $indexs;
}
?>