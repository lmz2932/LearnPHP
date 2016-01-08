<?php
    $a = 1;
    $b = 2;

    $a += 2;
    echo $a . "<br />";
    $a -= 1;
    echo $a . "<br />";
    $a *= 2;
    echo $a . "<br />";
    $a /= 2;
    echo $a . "<br />";
    $a %= 3;
    echo $a . "<br />";

    $c = 'a';
    $d = 'b';
    echo $c.$d. '<br />';
    echo $a . $d. '<br />';

    $a = 3;
    $b = 5;

    echo ($a | $b) . "<br />";
    echo ($a & $b) . "<br />";
    echo ($a ^ $b) . "<br />";
    echo (~$a) . "<br />";
    echo ($a << 2) . "<br />";
    echo ($a >> 2) . "<br />";

    # 逻辑运算符：or、xor、and、||、&&、!（优先级从低到高）
    $i = true;
    $j = true;
    $k = false;
    if ($i or $j and $k){
        echo 'true';
    }else{
        echo 'false';
    }
    echo "<br />";
    if ($i || $j and $k){
        echo 'true';
    }else{
        echo 'false';
    }
    echo "<br />";

    # 比较运算符：<、>、<=、>=、==、！=、===、！==（或者类型不同，或者值不同）
    
    # 错误控制
    $a = @(5 / 0);

    # 三目运算符
    $go = True;
    $s = $go ? 'go' : 'don\'t go';
    echo $s . "<br />";
