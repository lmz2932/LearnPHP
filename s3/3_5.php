<?php
    $a = true;
    $b = TRue;
    if ($a && $b){
        echo "They are all true.<br />";
    }
    
    $a = FAlse;
    $b = 0.0;
    $c = "";
    $d = "0";
    $e = Array();
    if (!($a || $b || $c || $d || $e)){
        echo "They are all false.<br />";
    }
