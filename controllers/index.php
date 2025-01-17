<?php

class Index extends Controller
{
    function __construct()
    {
    }

    function index(){
        $this->view("index/index");
    }
}

?>
