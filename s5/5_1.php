<?php
    header('content-type:text/html;charset=utf-8');

    # 字符串保存SQL命令时,必须使用单引号形式防止SQL注入
    # trim\ltrim\rtrim
    echo "0" . trim(" *#test*# ", " *#") . "0<br />";
    echo "0" . ltrim(" *#test*# ", " *#") . "0<br />";
    echo "0" . rtrim(" *#test*# ", " *#") . "0<br />";

    # 字符串转义分为手动转义和自动转义
    # addslashes\stripslashes
    $str = "select * from user where username='test';";
    echo $str . "<br />";
    $str = addslashes($str);
    echo $str . "<br />";
    echo stripslashes($str) . "<br />";

    # addcslashes\stripcslashes
    $str = "abcABC";
    echo $str . "<br />";
    $str = addcslashes($str, 'abc');
    echo $str . "<br />";
    echo stripcslashes($str) . "<br />";
    # Output is:
    # \a\b\cABC
    # cABC

    # strlen
    echo strlen('Function strlen.') . "<br />";

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
    echo substr($test,0, 32) . "...<br />";

    # mb_strlen\mb_substr
    #
    $str = "每个中文的utf-8编码占3个字节，处理中文时需要使用mb_strlen和mb_substr";
    echo mb_strlen($str) . "<br />";
    echo mb_substr($str, 0, 20) . "<br />";
