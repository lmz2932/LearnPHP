<?php
    $length = (int)$_GET['length'];
    $width = (int)$_GET['width'];

    if ($length <= 0 || $width <= 0){
        echo "<script>alert('Illegal length/width. Please try again.');history.back();</script>";
    }
    
    $arr = Array();
    for ($i = 0; $i < $width; $i++){
        $arr[$i] = Array();
        for ($j = 0; $j < $length; $j++){
            $arr[$i][$j] = $i* $length + $j + 1;
        }
    }
    echo "<table border=\"1\" cellspacing=\"0px\" style=\"border-collapse:collapse\">";
    for ($i = 0; $i < $width; $i++){
        echo "<tr>";
        for ($j = 0; $j < $length; $j++){
            echo "<td>" . $arr[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
