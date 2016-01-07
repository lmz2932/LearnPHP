<?php
    # Case sensitive
    define('CONSTANT', 0);
    echo constant('CONSTANT') . "<br />";

    # Case insensitiv
    define('constant2', 1, true);
    echo CONSTANT2 . "<br />";
    echo constanT2 . "<br />";

    # Predefined constants
    echo __FILE__ . "<br />";
    echo basename(__FILE__) . "<br />";
    echo dirname(__FILE__) . "<br />";
    echo __LINE__ . "<br />";
    echo PHP_VERSION . "<br />";
    echo PHP_OS . "<br />";
    echo TRUE . "<br />";
    echo FALSE . "<br />";
    var_dump($_SERVER) . "<br />";
