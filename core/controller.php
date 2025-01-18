<?php

class Controller
{
    function __construct(){

    }

    function view($urlView){

        require "header.php";
        require "views/" . $urlView . ".php";
        require "footer.php";
    }
}

?>
