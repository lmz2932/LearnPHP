<?php
    $lines = (int)$_GET['lines'];
    if ($lines <= 0){
        echo "<script>alert('Illegal input! Please try again!');history.back();</script>";
    }

    $a = Array(1);
    for ($i = 0; $i < $lines; $i++){
        # print one line
        for ($j = 0; $j <= $i; $j++){
            print $a[$j] . ' ';
        }
        echo "<br />";
        # generate next line
        $b = Array();
        $b[0] = 1;
        $len = count($a);
        $b[$len] = 1;
        for ($j = 0; $j < $i ; $j++){
            $b[$j+1] = $a[$j] + $a[$j+1];
        }
        $a = $b;
    }
