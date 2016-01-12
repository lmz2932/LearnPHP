<?php
    header('content-type:text/html; charset=utf-8;');
    # PCRE函数比POSIX函数执行效率快一些
    # PCRE正则表达式要用//括起来

    # preg_grep
    $a = Array('1234567', '123-2345', '1234-234213');
    $b = '/^\d{3,4}-?\d{4}$/';
    var_dump(preg_grep($b, $a)); #array(2) { [0]=> string(7) "1234567" [1]=> string(8) "123-2345" }
    echo "<br />";

    # preg_match\preg_match_all
    $pattern = '/is/';
    $original = 'This is a test.';
    $arr = Array();
    var_dump(preg_match($pattern, $original, $arr)); #int(1)
    echo "<br />";
    print_r($arr); #Array ( [0] => is )
    echo "<br />";
    $arr = Array();
    var_dump(preg_match_all($pattern, $original, $arr)); #int(2)
    echo "<br />";
    print_r($arr); #Array ( [0] => Array ( [0] => is [1] => is ) ) 
    echo "<br />";

    # preg_quote
    $test = '$.[]\sd';
    echo preg_quote($test) . "<br />"; #\$\.\[\]\\sd
    echo preg_quote($test, 's') . "<br />"; #\$\.\[\]\\\sd

    # preg_replace
    $pattern = '/sd/';
    $original = 'This sd is realy a sd.';
    var_dump(preg_replace($pattern, 'sdt', $original)); #string(24) "This sdt is realy a sdt."
    echo "<br />";
    # 指定替换次数
    var_dump(preg_replace($pattern, 'sdt', $original, 1)); #string(24) "This sdt is realy a sd."
    echo "<br />";

    # preg_replace_callback
    function f($str){
        $str = "<font color=$str[1]>$str[2]</font>";
        return $str;
    }
    $string = '[color=blue]蓝色[/color]';
    echo preg_replace_callback('/\[color=(.*)\](.*)\[\/color\]/U', "f", $string) . "<br />";

    # preg_split
    $pattern = '/is/';
    $original = 'This is a test.';
    var_dump(preg_split($pattern, $original)); #array(3) { [0]=> string(2) "Th" [1]=> string(1) " " [2]=> string(8) " a test." } 
    echo "<br />";
    var_dump(preg_split($pattern, $original, 2)); #array(2) { [0]=> string(2) "Th" [1]=> string(11) " is a test." } 
    echo "<br />";
