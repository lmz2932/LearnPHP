<?php
    header('content-type:text/html; charset=utf-8;');
    #POSIX规则的PHP正则表达式函数

    #ereg/eregi
    #$a = '$_name 2test name $test';
    $a = '$test';
    $arr = Array();
    $res = ereg('^\$?[[:alpha:]_][[:alnum:]_]*', $a, $arr);
    echo "比对结果：" . $res . "<br />";
    print_r($arr);
    echo "<br />";

    $a = 'THIS IS A TEST.';
    $arr = Array();
    $res = eregi('is', $a, $arr);
    echo "比对结果：" . $res . "<br />";
    print_r($arr);
    echo "<br />";

    # ereg_replace/eregi_replace
    $pattern = 'is';
    $replacement = 'isn\'t';
    echo ereg_replace($pattern, $replacement, 'This IS a test.') . "<br />"; #Thisn't IS a test.
    echo eregi_replace($pattern, $replacement, 'This IS a test.') . "<br />"; #Thisn't isn't a test.

    # split/spliti
    $pattern = 'is';
    $original = 'This IS a test.';
    var_dump(split($pattern, $original)); #array(2) { [0]=> string(2) "Th" [1]=> string(11) " IS a test." } 
    echo "<br />";
    var_dump(spliti($pattern, $original)); #array(3) { [0]=> string(2) "Th" [1]=> string(1) " " [2]=> string(8) " a test." }
    echo "<br />";
