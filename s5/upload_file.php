<?php
    header('content-type:text/html; charset=utf-8');

    foreach($_FILES as $filename => $arr){
        if ($arr['error'] == 0){
            # 保存上传文件的路径(及其上级目录)应该有可写权限
            if ($arr['size'] > 0){
                $res = move_uploaded_file($arr['tmp_name'], './uploaded/'.$arr['name']);
                if ($res){
                    echo "<script>alert('文件上传成功！');window.location.href='./upload_file.html';</script>"; 
                }else{
                    echo "<script>alert('文件上传失败！');history.back();</script>"; 
                }
            }
        }else{
            echo "<script>alert('文件上传失败！');history.back();</script>"; 
        }
    }
