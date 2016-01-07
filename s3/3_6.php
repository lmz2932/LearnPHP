<?php
    $s = 0;
    echo 'Single quotes-no substitution:$s <br />';
    echo "Double quotes-substitution:$s <br />";
    echo "Octal 141 = \141<br />";
    echo "Hexadecimal 0x61 = \x61<br />";
    $a = <<<str
This is a string using delimeter.<br />
The value of \$s is $s.
str;
    echo $a;
