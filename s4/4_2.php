<?php
    $num = 1;
    $str = '';

    # while循环
    while($num <= 10){
        if ($num % 2 == 0){
            $str .= (string)$num;
        }
        $num += 1;
    }
    echo $str . "<br />";

    # do..while循环
    $num = 1;
    $str = '';
    do{
        if ($num % 2 == 0){
            $str .= (string)$num;
        }
        $num += 1;
    }while($num <= 10);
    echo $str . "<br />";

    # for循环
    $factorial = 1;
    for ($num = 1; $num <= 10; $num++){
        $factorial *= $num;
    }
    print $factorial . "<br />";

    # foreach循环
    $arr = Array('a' => 'one', 'b' => 'two', 'c' => 'three');
    foreach($arr as $key=>$val){
        echo "key:" . $key . " value:" . $val . "<br />";
    }
    foreach($arr as $val){
        echo " value:" . $val . "<br />";
    }

    # endif\endfor\endswitch\endwhile\endforeach形式
    if (True):
        echo 'Just for test.' . '<br />';
    endif;

    # break
    for(;;){
        $a = rand(1,10);
        if ($a == 5){
            break;
        }
        echo "Got $a<br />";
    }

    echo "Task begin.<br />";
    for($i = 0; $i < 10; $i++){
        echo "\$i = $i<br />";
        for ($j = 0; $j < 5; $j++){
            if ($j == 2){
                break 2; # break 1相当于break
            }
        }
    }

    # continue
    for($i = 0; $i < 10; $i++){
        if ($i == 5){
            continue;
        }
        echo "\$i = $i<br />";
    }

    for ($k = 0; $k < 3; $k++){
        echo "\$k = $k<br />";
        for ($i = 0; $i < 10; $i++){
            echo "\$i = $i<br />";
            for ($j = 0; $j < 5; $j++){
                if ($j == 2){
                    continue 2;
                }
                echo "\$j = $j<br />";
            }
        }
    }
