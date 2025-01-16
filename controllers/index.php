<?php

class Index
{
    function __construct()
    {
        echo "we are in index controller<br>";
    }

    function sayhello($name = "", $family = "", $age="")
    {
        echo "Hello Mr. " . $name . " " . $family . " ". $age . "<br>";
    }

    function go()
    {
        echo "hi ali";
    }
}

?>
