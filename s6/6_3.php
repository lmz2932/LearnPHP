<?php
    header('content-type:text/html; charset=utf-8;');

    echo "您提交的信息如下：<br />";
    echo "邮政编码：" . $_POST['postalcode'] . "<br />";
    echo "邮箱：" . $_POST['email'] . "<br />";
    echo "固定电话：" . $_POST['gtel'] . "<br />";
    echo "移动电话：" . $_POST['mtel'] . "<br />";
    echo "感谢您提交信息！";
