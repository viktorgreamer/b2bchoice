<?php

    function my_autoload ($pClassName) {
        $path = str_replace("\\",'/',__DIR__ . "/" . $pClassName ). ".php";


        require($path);
     }
    spl_autoload_register("my_autoload");
?>
