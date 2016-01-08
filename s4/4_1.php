<?php
    # if语句
    $a = rand(1, 100);
    if ($a % 2 == 0){
        echo "$a is even number.<br />";
    }

    # if..else..语句
    $a = rand(1, 100);
    if ($a % 2 == 0){
        echo "$a is even number.<br />";
    }else{
        echo "$a is odd number.<br />";
    }

    # if..elseif..语句
    $day = date('j');
    if ($day >= 1 && $day <= 10){
        echo "the first ten-day period of a month<br />";
    }elseif ($day > 10 && $day <= 20){
        echo "the middle ten-day period of a month<br />";
    }else{
        echo "the last ten-day period of a month<br />";
    }

    # switch语句
    $choice = rand(1,3);
    switch($choice){
        case 1:
            echo 'Your choice is 1.<br />';
            break;
        case 2:
            echo 'Your choice is 2.<br />';
            break;
        case 3:
            echo 'Your choice is 3.<br />';
            break;
        default:
            print "Error happens!<br />";
            break;
    }
