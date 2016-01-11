<?php
    header("content-type:text/html; charset=utf-8;");

    if(strlen(trim($_POST['idcard_number'])) != 18){
        echo "<script>alert('身份证号输入错误！');</script>";
    }else{
        echo "<script>alert('身份证号输入正确！');</script>";
    }
    echo "<script>history.back();</script>";
