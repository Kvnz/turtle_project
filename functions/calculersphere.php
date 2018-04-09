<?php
/**
 * Created by PhpStorm.
 * User: KEVIN
 * Date: 09/04/2018
 * Time: 17:11
 */

function aireSphere($rayon) {
    if ($rayon >= 0) {
        return $rayon ** 2 * pi() * 4;
    }

    else {
        return false;
    }
}

function volumeSphere ($rayon) {
    if ($rayon >= 0) {
        return 4/3 * pi() * $rayon ** 3;
    }

    else {
        return false;
    }
}