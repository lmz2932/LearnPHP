<?php
    header('content-type:text/html;charset=utf-8');

    # 字符串保存SQL命令时,必须使用单引号形式防止SQL注入
    # trim\ltrim\rtrim
    echo "0" . trim(" *#test*# ", " *#") . "0<br />"; #0test0
    echo "0" . ltrim(" *#test*# ", " *#") . "0<br />"; #0test*# 0
    echo "0" . rtrim(" *#test*# ", " *#") . "0<br />"; #0 *#test0

    # 字符串转义分为手动转义和自动转义
    # addslashes\stripslashes
    $str = "select * from user where username='test';";
    echo $str . "<br />"; #select * from user where username='test';
    $str = addslashes($str);
    echo $str . "<br />"; #select * from user where username=\'test\';
    echo stripslashes($str) . "<br />"; #select * from user where username='test';

    # addcslashes\stripcslashes
    $str = "abcABC";
    $str = addcslashes($str, 'abc');
    echo $str . "<br />"; #\a\b\cABC
    echo stripcslashes($str) . "<br />"; # cABC

    # strlen
    echo strlen('Function strlen.') . "<br />"; #16

    # substr
    $test = 'This is a test.';
    echo '0' . substr($test, 0) . '0<br />'; #0This is a test.0
    echo '0' . substr($test, 5, 2) . '0<br />'; #0is0
    echo '0' . substr($test, 5, -1) . '0<br />'; #0is a test0
    echo '0' . substr($test, -5, -1) . '0<br />'; #0test0
    echo '0' . substr($test, -5, 4) . '0<br />'; #0test0
    
    $test = 'Test.com is a software solution for you to easily create,
             administer and manage training courses and certification tests,
             in up to 22 languages';
    echo substr($test,0, 32) . "...<br />"; #Test.com is a software solution ...

    # mb_strlen\mb_substr
    $str = "每个中文的utf-8编码占3个字节，处理中文时需要使用mb_strlen和mb_substr";
    echo mb_strlen($str) . "<br />"; #90
    echo mb_substr($str, 0, 20) . "<br />"; #每个中文的utf-8

    # strcmp\strcasecmp\strnatcmp\strnatcasecmp
    $a = 'abc';
    $b = 'ABc';
    echo strcmp($a, $b) . "<br />"; #32
    echo strcasecmp($a, $b) . "<br />"; #0，不区分大小写

    $c = '2';
    $d = '10';
    echo strnatcmp($c, $d) . "<br />"; #-1，自然排序，数字字符串按照数字大小排序
    $e = '2f';
    $f = '2F';
    echo strnatcasecmp($e, $f) . "<br />"; #0

    # strncmp
    $a = 'abc123';
    $b = 'abc234';
    echo strncmp($a, $b, 4) . "<br />"; #-256

    # strstr\strstr_count\strchr
    $a = 'This is a test.';
    $b = 'i';
    echo strstr($a, $b) . "<br />"; #is is a test.
    echo strchr($a, $b) . "<br />"; #is is a test.，strchr函数的别名是strstr
    echo substr_count($a, $b) . "<br />"; #2

    # str_ireplace\str_replace
    $a = 'You SOSo.';
    $b = 'o';
    $c = 'i';
    $d = 0;
    echo str_ireplace($b, $c, $a) . '<br />'; #Yiu SiSi. 
    echo str_ireplace($b, $c, $a, $d) . '<br />'; #Yiu SiSi.
    echo "替换了" . $d . "次<br />"; #替换了3次
    echo str_replace($b, $c, $a) . '<br />'; #Yiu SOSi.
    echo str_replace($b, $c, $a, $d) . '<br />'; #Yiu SOSi.
    echo "替换了" . $d . "次<br />"; #替换了2次

    # substr_replace
    $a = 'This is a test.';
    echo substr_replace($a, 'new test.', 10) . "<br />"; #This is a new test.
    echo substr_replace($a, 'haha', 10, 3) . "<br />"; #This is a hahat.

    # number_format
    $a = 1234.567;
    echo number_format($a) . "<br />"; #1,235
    echo number_format($a, 2) . "<br />"; #1,234.57
    echo number_format($a, 2, '*', '#'). "<br />"; #1#234*57

    # explode/implode
    $a = 'This@is@a@test.';
    print_r(explode('@', $a)); #Array ( [0] => This [1] => is [2] => a [3] => test. )
    echo "<br />";
    print_r(explode('@', $a, 2)); #Array ( [0] => This [1] => is@a@test. )
    echo "<br />";

    $a = Array('This', 'is', 'a', 'test.');
    print implode(' ', $a); #This is a test.
