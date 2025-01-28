<style>

    #content {
        width: 890px;
        float: left;
    }

    /*-------------------------slider-scroll-------------------*/
    .sliderScroll {
        width: 890px;
        height: 310px;
        background-color: #fff;
        box-shadow: 1px 3px 4px rgba(0, 0, 0, .19);
        border-radius: 4px;
        overflow: hidden;
        margin-top: 15px;
    }

    .sliderScroll h3.first {
        background-color: #cfd0f7;
        margin: 0;
        height: 35px;
        font-weight: normal;
        padding-top: 5px;
        padding-right: 10px;
    }

    .sliderScroll h3.tow {
        background-color: #2397b4;
        margin: 0;
        height: 35px;
        font-weight: normal;
        padding-top: 5px;
        padding-right: 10px;
    }

    .sliderScroll h3.three {
        background-color: #ab49b4;
        margin: 0;
        height: 35px;
        font-weight: normal;
        padding-top: 5px;
        padding-right: 10px;
    }

    .sliderScroll h3.four {
        background-color: #b49b9a;
        margin: 0;
        height: 35px;
        font-weight: normal;
        padding-top: 5px;
        padding-right: 10px;
    }

    .sliderScroll .sliderScroll-content {
        width: 100%;
        height: 270px;
    }

    .sliderScroll-prev, .sliderScroll-next {
        width: 55px;
        height: 100%;
        float: right;
    }

    .sliderScroll-prev span {
        display: block;
        width: 15px;
        height: 25px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position: -852px -687px;
        position: relative;
        top: 120px;
        right: 15px;
        cursor: pointer;
    }

    .sliderScroll-next span {
        display: block;
        width: 15px;
        height: 25px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position: -813px -687px;
        position: relative;
        top: 120px;
        right: 15px;
        cursor: pointer;
    }

    .sliderScroll-main {
        width: 780px;
        height: 100%;
        float: right;
        overflow: hidden;
    }

    .sliderScroll-main ul {
        margin: 0;
        padding: 0;
        width: 780px;
        height: 100%;
    }

    .sliderScroll-main ul li {
        list-style: none;
        width: 195px;
        height: 100%;
        float: right;
        transition: all 100ms linear;
    }

    .sliderScroll-main ul li:hover {
        box-shadow: 0 0 5px rgba(0, 0, 0, .19);

    }

    .sliderScroll-main ul li a {
        display: block;
        width: 100%;
        height: 100%;
        text-align: center;
        cursor: pointer;
    }

    .sliderScroll-main ul li a img:first-child {
        width: 150px;
        height: 150px;
    }

    .sliderScroll-main ul li a p {
        text-align: center;
        margin: 1px;
    }

    .sliderScroll-main ul li a .pName {
        font-size: 10pt;
        color: #a10000;
    }

    .sliderScroll-main ul li a .pPrice {
        color: #0db40c;
        font-size: 13pt;
    }


</style>

<div id="main">

    <?php
    require 'banner_top.php';
    require 'sidebar_right.php';
    ?>

    <div id="content">

        <?php
        require 'slider.php';
        require 'services_feacher.php';
        require 'slider2.php';
        require 'only_in_digikala.php';
        require 'direct_access.php';
        require 'most_viewed.php';
        require "most_saled.php";
        require 'last_products.php';
        ?>

    </div>

</div>

