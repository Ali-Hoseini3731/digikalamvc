<!DOCTYPE html>
<html lang="en">
<head>
    <title>فروشگاه اینترنتی دیجی کالا</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="<?= URL ?>css/digikala.css" />
    <link rel="stylesheet" href="<?= URL ?>css/flipTimer.css"/>

</head>

<body>

<style>
    @font-face {
        font-family: 'yekan';
        src: url('<?= URL ?>/fonts/yekan.ttf') format('truetype'),
        url('<?= URL ?>/fonts/yekan.eot?#iefix') format('embedded-opentype');
    }

    .yekan {
        font-family: yekan;
    }

    .fontSm {
        font-size: 10.3pt;
    }

    .fontMd {
        font-size: 11.3pt;
    }

    .fontLg {
        font-size: 12.3pt;
    }

    * {
        text-align: right;
        direction: rtl;
    }

    body {
        margin: 0;
        background-color: #ebeff9;
    }

    /*-----------------header-------*/
    #header {
        width: 1200px;
        height: 100px;
        margin: auto;
        padding-top: 10px;
    }

    #header-left {
        float: left;
    }

    #header-left img {
        max-width: 178px;
        height: 100%;
    }

    #header-right {
        float: right;
        width: 720px;
    }

    #header-right-top {
        height: 40px;
    }

    #header-right-top > a {
        color: #787878;
    }

    #header-right-top-lock {
        width: 20px;
        height: 20px;
        background: url("<?= URL ?>/image/header/lock.png") no-repeat center;
        display: inline-block;
        position: relative;
        top: 5px;
    }

    #header-right-top-login {
        width: 20px;
        height: 20px;
        background: url("<?= URL ?>/image/header/login.png") no-repeat center;
        display: inline-block;
        margin-right: 40px;
        position: relative;
        top: 5px;
    }

    #basket {
        width: 190px;
        height: 40px;
        float: right;
    }

    #basket-left {
        display: inline-block;
        width: 50px;
        height: 100%;
        background: #19b52e url("<?= URL ?>/image/header/shopping.png") no-repeat center;

    }

    #basket-right {
        width: 120px;
        height: 40px;
        background-color: #0e9044;
        float: left;
        padding-right: 20px;
    }

    #basket-right-circle {
        display: block;
        float: left;
        width: 25px;
        height: 25px;
        background-color: #0ff218;
        text-align: center;
        margin-left: 28px;
        margin-top: 7px;
        border-radius: 100%;
        line-height: 25px;
        overflow: auto;
        color: #fff;
    }

    #search-header {
        width: 530px;
        height: 40px;
        float: left;
        position: relative;
    }

    #search-header input {
        width: 450px;
        height: 27px;
        float: left;
        padding-right: 10px;
        margin-top: 5px;
        border: 1px solid #787878;
        color: #999;
    }

    #search-header input:focus {
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
        border: 1px solid #ddd;
        border-radius: 0 5px 5px 0;
        background-color: #fefefe;
        outline: none;
    }

    #search-header-button {
        position: absolute;
        left: 0;
        top: 6px;
        display: block;
        background: #787878 url("<?= URL ?>/image/header/search.png") no-repeat center;
        width: 38px;
        height: 30px;
        cursor: pointer;
    }

    /*---------------------------nav-----------------*/
    #nav-top {
        height: 40px;
        background-color: #f6faff;
        box-shadow: 1px 3px 4px #ccc;
        border-top: 1px solid #cbdcec;
    }

    #menu-top {
        width: 1200px;
        height: 100%;
        margin: auto;
    }

    #menu-top > ul {
        margin: 0;
        padding: 0;
        position: relative;
    }

    #menu-top > ul > li {
        list-style: none;
        float: right;
        height: 40px;
        padding: 0 20px;
    }

    #menu-top > ul > li > a {
        display: block;
        height: 100%;
        line-height: 35px;
        font-size: 11pt;
        cursor: pointer;
    }

    #menu-top > ul > li > a > span {
        width: 7px;
        height: 4px;
        display: block;
        float: left;
        background: url("<?= URL ?>/image/nav/down.png") no-repeat;
        margin-right: 10px;
        margin-top: 19px;
    }

    #menu-top > ul > li > ul {
        margin: 0;
        padding: 0;
        position: absolute;
        left: 0;
        background-color: #fff;
        width: 1200px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5);
        z-index: 2;
        display: none;
    }

    #menu-top > ul > li > ul > li {
        list-style: none;
        float: right;
        height: 40px;
        padding: 0 20px;
    }

    #menu-top > ul > li > ul > li > a {
        height: 100%;
        display: block;
        cursor: pointer;
        line-height: 35px;
    }

    .top-menu-3 {
        position: absolute;
        right: 0;
        width: 1200px;
        height: 300px;
        background-color: #fff;
        border-top: 1px solid #eee;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5);
        display: none;
        z-index: 1;
    }

    .top-menu-3-col {
        width: 299px;
        height: 100%;
        border-left: 1px solid #eee;
        float: right;
    }

    .top-menu-3-col ul {
        padding: 0;
        margin: 0;
    }

    .top-menu-3-col ul > li {
        list-style: none;
    }

    .top-menu-3-col ul > li:first-child {
        color: #4d55dd;
        font-size: 11.5pt;
        font-weight: bold;
        padding: 10px 10px;

    }

    .top-menu-3-col ul > li > a {
        cursor: pointer;
        display: block;
        padding: 7px 15px
    }

    .top-menu-3-col-img {
        width: 250px;
        height: 250px;
        position: absolute;
        left: 10px;
        bottom: 10px;
    }

    .active-menu {
        background-color: #ffffff;
        box-shadow: 0px 2px 3px #aaa;
    }

    .active-menu > a {
        color: #f00;
    }
</style>

<header style="background-color: #fff;">
    <div id="header">
        <div id="header-left">
            <img src="<?= URL ?>image/header/logo.png" alt="عکسی وجود  ندارد"/>
        </div>
        <div id="header-right">
            <div id="header-right-top">
                <span id="header-right-top-lock"></span>
                <a href="#" style="text-decoration: none; margin-right: 7px" class="yekan fontSm">فروشگاه اینترنتی دیجی
                    کالا وارد شوید.</a>
                <span id="header-right-top-login"></span>
                <a href="#" style="text-decoration:none; margin-right: 7px;" class="yekan fontSm">ثبت نام کنید</a>
            </div>
            <div id="header-right-bottom">
                <div id="basket">
                    <div id="basket-left"></div>
                    <div id="basket-right">
                        <span class="yekan fontSm" style="color: #fff;line-height: 35px"> سبد خرید</span>
                        <span id="basket-right-circle">0</span>
                    </div>
                </div>
                <div id="search-header">
                    <input type="text" placeholder="محصول  ِدسته یا برند مورد نظرتان را سرچ کنید..."
                           class="yekan fontSm"/>
                    <a href="#" id="search-header-button"></a>
                </div>
            </div>
        </div>
    </div>
</header>

<nav id="nav-top">
    <div id="menu-top">
        <ul>
            <li data-time="1"><a class="yekan">کالای دیجیتال<span></span></a>
                <ul>
                    <li data-time="11"><a class="yekan fontSm ">موبایل</a>
                        <div class="top-menu-3">
                            <div class="top-menu-3-col">
                                <ul>
                                    <li>گوشی موبایل</li>
                                    <li><a>apple</a></li>
                                    <li><a>nokia</a></li>
                                    <li><a>samsung</a></li>
                                    <li><a>lenovo</a></li>
                                </ul>
                            </div>
                            <div class="top-menu-3-col"></div>
                            <div class="top-menu-3-col"></div>
                            <div class="top-menu-3-col">
                                <img class="top-menu-3-col-img" src="<?= URL ?>image/nav/mobile.png" alt="no picture"/>
                            </div>
                        </div>
                    </li>
                    <li data-time="12"><a class="yekan fontSm ">تبلت و کتابخوان</a>
                        <div class="top-menu-3">
                            <div class="top-menu-3-col">
                                <ul>
                                    <li>تبلت</li>
                                    <li><a>apple</a></li>
                                    <li><a>nokia</a></li>
                                    <li><a>samsung</a></li>
                                    <li><a>lenovo</a></li>
                                </ul>
                            </div>
                            <div class="top-menu-3-col"></div>
                            <div class="top-menu-3-col"></div>
                            <div class="top-menu-3-col">
                                <img class="top-menu-3-col-img" src="<?= URL ?>image/nav/tablet.png" alt="no picture"/>
                            </div>
                        </div>
                    </li>
                    <li data-time="13"><a class="yekan fontSm ">لب تا‍پ</a>
                        <div class="top-menu-3">
                            <div class="top-menu-3-col">
                                <ul>
                                    <li>لب تاب</li>
                                    <li><a>apple</a></li>
                                    <li><a>nokia</a></li>
                                    <li><a>samsung</a></li>
                                    <li><a>lenovo</a></li>
                                </ul>
                            </div>
                            <div class="top-menu-3-col"></div>
                            <div class="top-menu-3-col"></div>
                            <div class="top-menu-3-col">
                                <img class="top-menu-3-col-img" src="<?= URL ?>image/nav/laptab.jpg" alt="no picture"/>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li data-time="2"><a class="yekan">لوازم خانگی<span></span></a>
                <ul>
                    <li data-time="21"><a class="yekan fontSm ">صوتی تصویری</a>
                        <div class="top-menu-3">
                            <div class="top-menu-3-col">
                                <ul>
                                    <li>تلویزیون</li>
                                    <li><a>کمتر از 32 اینچ</a></li>
                                    <li><a>41 اینچ</a></li>
                                    <li><a>54 اینچ</a></li>
                                    <li><a>از 54 به بالا </a></li>
                                </ul>
                            </div>
                            <div class="top-menu-3-col"></div>
                            <div class="top-menu-3-col"></div>
                            <div class="top-menu-3-col">
                                <img class="top-menu-3-col-img" src="<?= URL ?>image/nav/tv.png" alt="no picture"/>
                            </div>
                        </div>
                    </li>
                    <li data-time="22"><a class="yekan fontSm ">لوازم خانگی برفی</a>
                        <div class="top-menu-3">
                            <div class="top-menu-3-col">
                                <ul>
                                    <li>یخچال</li>
                                    <li><a>sony</a></li>
                                    <li><a>elctro-still</a></li>
                                    <li><a>snova</a></li>
                                    <li><a>samsung</a></li>
                                </ul>
                            </div>
                            <div class="top-menu-3-col"></div>
                            <div class="top-menu-3-col"></div>
                            <div class="top-menu-3-col">
                                <img class="top-menu-3-col-img" src="<?= URL ?>" alt="no picture"/>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li data-time="3"><a class="yekan">وزش و سلامتی<span></span></a>
                <ul>
                    <li data-time="31"><a class="yekan fontSm ">ورزشی</a>
                        <div class="top-menu-3">
                            <div class="top-menu-3-col">
                                <ul>
                                    <li>فوتبال</li>
                                    <li><a>لباس ورزشی</a></li>
                                    <li><a>لوازم ورزشی</a></li>
                                    <li><a>اطاعات ورزشی</a></li>
                                </ul>
                            </div>
                            <div class="top-menu-3-col"></div>
                            <div class="top-menu-3-col"></div>
                            <div class="top-menu-3-col">
                                <img class="top-menu-3-col-img" src="<?= URL ?>image/nav/sport.jpg" alt="no picture"/>
                            </div>
                        </div>
                    </li>
                    <li data-time="32"><a class="yekan fontSm ">زیبایی</a>
                        <div class="top-menu-3">
                            <div class="top-menu-3-col">
                                <ul>
                                    <li>لوازم ارایشی</li>
                                    <li><a>عطر اتکن</a></li>
                                    <li><a>کرم</a></li>
                                    <li><a>رژلب</a></li>
                                    <li><a>موتیک</a></li>
                                </ul>
                            </div>
                            <div class="top-menu-3-col"></div>
                            <div class="top-menu-3-col"></div>
                            <div class="top-menu-3-col">
                                <img class="top-menu-3-col-img" src="<?= URL ?>image/nav/beauty.jpg" alt="no picture"/>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li data-time="4"><a class="yekan">فرهنگ و هنر<span></span></a></li>


        </ul>
    </div>
</nav>
