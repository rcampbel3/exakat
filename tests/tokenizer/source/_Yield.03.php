<?php
function a() {
    foreach (range(1, 3) as $i) {
        yield;
    }
}

var_dump(iterator_to_array(a()));
?>