<?php
    if (strlen($_POST['name']) == 0 ||
        strlen($_POST['name']) > 25 ||
        !is_numeric($_POST['name'])){
        echo "<script>alert('Illegal input!');hitory.back();</script>";
        return false;
    }
