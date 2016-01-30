<?php
    $arr = Array(1 => 'a', 1 => 'b');
    var_dump($arr); #array(1) { [1]=> string(1) "b" }
    echo "<br />";

    $arr = Array('one', 'two', 1 => 'three');
    var_dump($arr); #array(2) { [0]=> string(3) "one" [1]=> string(5) "three" }
    echo "<br />";

    $arr2[0] = '1';
    $arr2[1] = '2';
    print_r($arr2);

