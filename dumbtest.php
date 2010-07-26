<?php

function fun($i) {
    if ($i<0)
    {
        return;
    }
    else
    {
        echo 'Hello world!';
        fun($i-1);
    }
}

fun(4);

?>
