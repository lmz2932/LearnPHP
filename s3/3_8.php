<?php
    var_dump((boolean)'0');
    echo "<br />";

    var_dump((bool)'0');
    echo "<br />";

    var_dump((string)0);
    echo "<br />";

    var_dump((integer)'1');
    echo "<br />";

    var_dump((int)'2');
    echo "<br />";

    var_dump((float)'0.1');
    echo "<br />";

    var_dump((array)3);
    echo "<br />";

    var_dump((object)4);
    echo "<br />";
    
    $a = '3.14r';
    if (settype($a, 'float')){
        echo "Convert succeeded!<br />";
        echo "\$a = $a<br />";
    }else{
        echo "Convert failed!<br />";
    }

    # is_bool\is_int\is_integer\is_string\is_float\is_double\is_null\is_array\is_object\is_numeric
    var_dump(is_numeric(3.4));
    echo "<br />";
    var_dump(is_numeric('3.4'));
