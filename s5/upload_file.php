<?php
    header('content-type:text/html; charset=utf-8');

    function check_uploaded_file($res){
        if ($res){
            echo "上传文件成功！<br />";
        }else{
            echo "<script>alert('文件上传失败！');history.back();</script>"; 
        }
    }
    var_dump($_FILES);
    foreach($_FILES as $filename => $arr){
        var_dump($arr['error']);
        if ($arr['error'] == 0){
            # 保存上传文件的路径(及其上级目录)应该有可写权限
            $res = move_uploaded_file($arr['tmp_name'], './uploaded/'.$arr['name']);
        }
        check_uploaded_file(!$arr['error'] && $res);
    }
