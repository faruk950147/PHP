<?php
/* 
    PHP Superglobals
    PHP Superglobals are built-in variables that are always accessible in all scopes!

    Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

    The PHP superglobal variables are:

    $GLOBALS - An array that contains references to all global variables of the script
    $_SERVER - Holds information about the web server including headers, paths, and script locations
    $_REQUEST - An array containing data from $_GET, $_POST, and $_COOKIE superglobals
    $_POST - An array of variables received via the HTTP POST method
    $_GET - An array of variables received via the HTTP GET method
    $_FILES - An array of items uploaded to the current script via the HTTP POST method (filename, type, size)
    $_ENV - Holds environment variables passed to the current script
    $_COOKIE - An array of variables passed to the current script via HTTP Cookies
    $_SESSION - An array of session variables
    The next chapters will explain some of the superglobals, and the rest will be explained in later chapters.
*/
/*     
    $x = 75;

    function main()
    {
        echo $GLOBALS['x'];
    }

    main(); 

    echo $_SERVER['PHP_SELF'];
    echo $_SERVER['SERVER_NAME'];
    echo $_SERVER['HTTP_HOST'];
    echo $_SERVER['HTTP_REFERER'];
    echo $_SERVER['HTTP_USER_AGENT'];
    echo $_SERVER['SCRIPT_NAME'];
*/

    echo"<pre>";
    print_r($_SERVER["PHP_SELF"]);
    echo"</pre>";
    

?>