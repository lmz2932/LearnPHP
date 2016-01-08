<?php
    $a = 1;
    
    # 传值
    function multiply($param){
        $param *= 2;
        return $param;
    }

    echo 'Before function: a = '. $a . "<br />";
    echo multiply($a) . "<br />";
    echo 'After function: a = '. $a . "<br />";

    # 传引用
    function multiply2(&$param){
        $param *= 2;
        return $param;
    }

    echo 'Before function: a = '. $a . "<br />";
    echo multiply2($a) . "<br />";
    echo 'After function: a = '. $a . "<br />";

    # 默认参数
    function multiply3($param, $factor = 2){
        $param *= $factor;
        return($param);
    }

    $a = 1;
    echo 'Before function: a = '. $a . "<br />";
    echo multiply3($a) . "<br />";
    echo 'After function: a = '. $a . "<br />";
    echo 'Before function: a = '. $a . "<br />";
    echo multiply3($a, 3) . "<br />";
    echo 'After function: a = '. $a . "<br />";

    # 变量函数
    $a = 'func1';
    function func1(){
        echo "This is function 1<br />";
    }
    function func2(){
        echo "This is function 2<br />";
    }
    $a();
    $a = 'func2';
    $a();

    # 对函数的引用，即为对函数返回值的引用
    function &func3($param){
        return $param;
    }
    $test = &func3('Reference');
    echo $test;

    # unset清楚变量名字和变量内存空间的联系，并不是销毁变量内存
    $a = 1;
    $b = &$a;
    echo "\$b = $b<br />";
    unset($b);
    echo @"\$b = $b<br />";
    echo "\$a = $a<br />";
