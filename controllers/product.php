<?php

class Product extends Controller
{

    function __construct()
    {

    }

    function index()
    {
        $this->view("product/index");
    }

}

?>
