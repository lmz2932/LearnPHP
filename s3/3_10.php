<?php
    $a = 1.234;
    $b = &$a;
    echo "\$a = $a, \$b = $b<br />";

    $b = 3;
    echo "\$a = $a, \$b = $b<br />";

    $c = 'a';
    echo $$c . "<br />";

    function f(){
        $a = 4.321;
        echo "local a: $a<br />";
        global $a;
        echo "global a: $a<br />";
    }
    f();

    function f2(){
        $d = 0;
        $d++;
        echo "\$d = $d<br />";
    }
    f2();
    f2();

    function f3(){
        static $d = 0;
        $d++;
        echo "\$d = $d<br />";
    }
    f3();
    f3();
