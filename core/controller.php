<?php

class Controller
{
    function __construct(){

    }

    function view($urlView){
        require "views/" . $urlView . ".php";
    }
}

?>
