<?php
    echo "Without quotes.<br />";
    echo("With quotes.<br />");

    $res = print "Without quotes, print has return value(always 1).<br />";
    print($res . "<br />");

    printf("Printf function is like C language, such as:%d<br />", 4);

    # print_r函数打印易于理解的信息
    $arr = array('one', 3, array('x', 'y', 'z'));
    print_r($arr);
    print "<br />";

    # 不打印内容，而是将可理解内容作为返回值返回
    $res = print_r($arr, true);
    print $res;
