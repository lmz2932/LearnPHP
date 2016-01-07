<?php
    echo "PHP_INT_SIZE = " . PHP_INT_SIZE . "<br />";
    echo "PHP_INT_MAX = " . PHP_INT_MAX . "<br />";

    echo 11 . "<br />";
    echo 011 . "<br />";
    echo 0x11 . "<br />";

    echo 3.14 . "<br />";
    echo .314E1 . "<br />";
    echo pi() . "<br />";

    $arr1 = Array('a', 'b', 'c');
    var_dump($arr1);
    echo "<br />";

    $arr2[0] = 'd';
    $arr2[1] = 'e';
    $arr2[2] = 'f';
    var_dump($arr2);
    echo "<br />";

    $arr3 = Array('one' => 1, 'two' => 2);
    var_dump($arr3);
    echo "<br />";

    $n = NuLL;
    var_dump($n);
    var_dump($m);
    if (is_null($m)){
        echo "m is NULL.<br />";
    }
    $m = 0;
    unset($m);
    var_dump($m);
