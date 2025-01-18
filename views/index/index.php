<style>
    #main {
        max-width: 1200px;
        margin: auto;
        overflow: auto;
    }

    #banner-top {
        width: 100%;
        height: 140px;
        margin: 10px 0;
    }

    #banner-top > img {
        width: 100%;
        height: 100%;
        border-radius: 5px;
        box-shadow: 0 4px 5px #aaa;
        -webkit-box-shadow: 0 4px 5px #aaa;
        -moz-box-shadow: 0 4px 5px #aaa;
    }

    #sidebar-right {
        width: 290px;
        float: right;
    }

    #sidebar-right > #top-img {
        border-radius: 3px;
        box-shadow: 0 2px 3px #aaa;
    }

    #sidebar-right > ul.first-ul {
        margin: 0;
        padding: 0;
    }

    #sidebar-right > ul.first-ul > li {
        list-style: none;
        margin-top: 12px;
    }

    #sidebar-right > ul.first-ul > li > a {
        display: block;
        width: 100%;
        height: 160px;
        position: relative;
    }

    #sidebar-right > ul.first-ul > li > a::before {
        content: '';
        display: block;
        width: 100%;
        height: 160px;
        background-color: rgba(0, 0, 0, .3);
        position: absolute;
        border-radius: 4px;
    }

    #sidebar-right > ul.first-ul > li > a > img {
        display: block;
        width: 100%;
        height: 160px;
        border-radius: 4px;
        box-shadow: 0 4px 5px #aaa;;
    }

    #sidebar-right > ul.first-ul > li > a > span {
        display: block;
        width: 70px;
        height: 70px;
        background-color: rgba(0, 0, 0, .3);
        border-radius: 50%;
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
        top: 50px;
        text-align: center;
        transition: all 1s ease;
    }

    #sidebar-right > ul.first-ul > li:hover > a > span {
        background-color: rgba(255, 255, 255, 0.3);
    }

    #sidebar-right > ul.first-ul > li > a > span > img {
        margin-top: 25px;
    }

    #sidebar-right > ul.second-ul {
        padding: 0;
        margin: 0;
    }

    #sidebar-right > ul.second-ul > li {
        list-style: none;
        margin-top: 10px;
        width: 290px;
        height: 260px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
    }

    #sidebar-right > ul.second-ul > li > a {
        display: block;
        width: 100%;
        height: 100%;
    }

    #sidebar-right > ul.second-ul > li > a > img {
        display: block;
        width: 290px;
        height: 260px;
    }

    #sidebar-right-lastNews {
        margin-top: 10px;
        background-color: #fff;
        border-radius: 4px;
        overflow: hidden;
    }

    #sidebar-right-lastNews > h3 {
        margin: 0;
        background-color: #d3d4d7;
        height: 40px;
        padding-right: 10px;
        line-height: 40px;
        color: #3B75BF;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
    }

    #sidebar-right-lastNews .three-ul {
        margin: 10px 0;
        padding: 0;
        overflow: auto;
    }

    #sidebar-right-lastNews > .three-ul > li {
        width: 100%;
        list-style: none;
        margin-top: 10px;
        overflow: auto;
    }

    #sidebar-right-lastNews > .three-ul > li > a {
        display: block;
        width: 100%;
        height: 100%;
        overflow: auto;
    }

    #sidebar-right-lastNews .right-col {
        width: 70px;
        float: right;
        text-align: center;
        margin: 5px 10px 0 0;
        border-radius: 50%;
        overflow: hidden;
    }

    #sidebar-right-lastNews .right-col > img {
        display: block;
        width: 70px;
        height: 70px;
    }

    #sidebar-right-lastNews .left-col {
        width: 190px;
        float: left;
        padding: 0 5px;
    }

    #sidebar-right-lastNews .left-col > p {
        margin: 0;
        color: #0f220c;;
    }

    #sidebar-right-lastNews .left-col > p.second {
        font-size: 9.1pt;
        color: #b0b1b3;
    }

    #sidebar-right-brands {
        margin: 10px 0;
        overflow: auto;
    }

    #sidebar-right-brands a {
        display: block;
        width: 135px;
        height: 90px;
        margin-bottom: 5px;
        background-color: #fff;
        overflow: hidden;
        border-radius: 4px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .4);
        float: right;
    }

    #sidebar-right-brands a:nth-child(even) {
        float: left;
    }

    #sidebar-right-brands a > img {
        display: block;
        width: 100%;
        height: 100%;
    }

    /*--------------------------content-----------------*/
    #content {
        width: 890px;
        float: left;
    }

    #slider {
        height: 310px;
        background-color: #fff;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
    }

    #slider-img {
        height: 260px;
        overflow: hidden;
        position: relative;
    }

    #slider-img #prev {
        display: block;
        width: 19px;
        height: 33px;
        background: url("<?= URL ?>/image/main/slider/arrow_slider.png") no-repeat;
        background-position: 0 -33px;
        position: absolute;
        right: 12px;
        top: 125px;
        z-index: 2;
        cursor: pointer;
    }

    #slider-img #next {
        display: block;
        width: 19px;
        height: 33px;
        background: url("<?= URL ?>/image/main/slider/arrow_slider.png") no-repeat;
        position: absolute;
        left: 12px;
        top: 125px;
        z-index: 2;
        cursor: pointer;
    }

    #slider-img a.item {
        display: none;
    }

    #slider-img img {
        display: block;
        height: 100%;
        width: 100%;
    }

    #slider-navigator {
        height: 50px;
        background-color: rgba(0, 0, 0, .8);
    }

    #slider-navigator ul {
        margin: 0;
        padding: 0;
        float: right;
    }

    #slider-navigator ul li {
        list-style: none;
        width: 178px;
        height: 50px;
        float: right;
    }

    #slider-navigator ul li a {
        display: block;
        width: 100%;
        height: 100%;
        text-align: center;
        line-height: 49px;
        color: #fff;
        cursor: pointer;
        position: relative;
    }

    #slider #slider-navigator ul .active a {
        color: #000;
        background-color: #fff;
    }

    #slider #slider-navigator ul .active a::after {
        content: "";
        position: absolute;
        top: -13px;
        left: 0;
        right: 0;
        margin: auto;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 12.5px 13px 12.5px;
        border-color: transparent transparent #ffffff;
    }

    /*--------------------------services-feather ---------------------*/
    #services-feather {
        height: 76px;
        background-color: #fff;
        margin: 7px 0;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 1px 3px 4px rgba(0, 0, 0, .19);
    }

    #services-feather ul {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    #services-feather ul li {
        list-style: none;
        height: 100%;
        width: 178px;
        float: right;
    }

    #services-feather ul li a {
        display: block;
        font-size: 10pt;
        margin-top: 25px;
        cursor: pointer;
    }

    #services-feather ul li a i {
        display: block;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        float: right;
        margin-left: 5px;
        margin-right: 15px;
    }

    #services-feather i.item1 {
        width: 24px;
        height: 24px;
        background-position: -210px -473px;
    }

    #services-feather i.item2 {
        width: 24px;
        height: 24px;
        background-position: -263px -473px;
    }

    #services-feather i.item3 {
        width: 24px;
        height: 24px;
        background-position: -158px -473px;
    }

    #services-feather i.item4 {
        width: 34px;
        height: 24px;
        background-position: -316px -473px;
    }

    #services-feather i.item5 {
        width: 24px;
        height: 24px;
        background-position: -102px -473px;
    }

    /*----------------------------slider2-----------------*/
    #slider2 {
        height: 304px;
        background-color: #fff;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 1px 3px 4px rgba(0, 0, 0, .19);
        position: relative;
    }

    #content #slider2 .flipTimer, .flipTimer div {
        direction: ltr !important;
    }

    #content #slider2 .flipTimer {
        position: absolute;
        transform: scale(.3);
        top: 200px;
        right: -145px;

    }

    #slider2 #slider2-finish {
        display: none;
        width: 705px;
        height: 304px;
        position: absolute;
        top: 0;
        right: 0;
        background-color: rgba(0, 0, 0, .05);
        text-align: center;
        color: #ff0000;
        font-size: 35pt;
        line-height: 280px;
        z-index: 3;
    }

    #slider2-content {
        width: 705px;
        height: 100%;
        float: right;
        background: url("<?= URL ?>/image/main/slider2/slider2_bg.jpg") no-repeat;
    }

    #slider2-content a {
        display: none;
        width: 100%;
        height: 100%;
        cursor: pointer;
    }

    .slider2-content-right {
        width: 400px;
        height: 100%;
        float: right;
    }

    .slider2-content-right .title {
        color: #f00;
        margin-top: 45px;
        margin-right: 30px;
        font-size: 16pt;
    }

    .slider2-content-right .price {
        width: 230px;
        height: 35px;
        margin-right: 30px;
    }

    .slider2-content-right .price-old {
        position: relative;
        width: 75px;
        height: 100%;
        background-color: #bbb;
        float: right;
        text-align: center;
        color: #fff;
        font-size: 16pt;
    }

    .slider2-content-right .price-old::before {
        position: absolute;
        right: 0;
        top: 18px;
        transform: rotate(-25deg);
        content: '';
        width: 73px;
        height: 0;
        border-top: 2px solid #222;
    }

    .slider2-content-right .price-old::after {
        content: "";
        width: 0;
        height: 0;
        position: absolute;
        top: 10px;
        left: -12px;
        border-style: solid;
        border-width: 8px 12px 8px 0;
        border-color: transparent #bbb transparent;
        z-index: 2;
    }

    .slider2-content-right .price-new {
        position: relative;
        width: 153px;
        height: 100%;
        background-color: #ff0000;
        float: right;
        border-right: 2px solid #fff;
        text-align: center;
        color: #fff;
        font-size: 14pt;
    }

    .slider2-content-right .price-new::before {
        content: "";
        width: 0;
        height: 0;
        position: absolute;
        top: 8px;
        right: -1px;
        border-style: solid;
        border-width: 10px 15px 10px 0;
        border-color: transparent #fff transparent;
    }

    .slider2-content-right .title2 {
        float: right;
        width: 100%;
        margin: 7px 0 0 0;
    }

    .slider2-content-left {
        width: 305px;
        height: 100%;
        float: left;
    }

    .slider2-content-left p {
        text-align: center;
        font-size: 15pt;
    }

    .slider2-content-left img {
        width: 225px;
        height: 225px;
        margin-right: 55px;
    }

    #slider2-navigator {
        width: 184px;
        height: 100%;
        border-right: 1px solid #ddd;
        float: left;
        background-color: #ccc;
    }

    #slider2-navigator ul {
        margin: 0;
        padding: 0;
    }

    #slider2-navigator ul li {
        list-style: none;
        height: 38px;
        width: 100%;
        position: relative;
    }

    #slider2-navigator ul li a {
        display: block;
        height: 100%;
        width: 100%;
        text-align: center;
        font-size: 10pt;
        line-height: 35px;
        cursor: pointer;
    }

    #slider2-navigator ul li.active2 a {
        background-color: #ed0e1b;
        color: #fff;
    }

    #slider2-navigator ul li.active2 a::before {
        content: "";
        position: absolute;
        top: 0;
        right: -17px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 19px 0 19px 17px;
        border-color: transparent transparent transparent #ed0e19;
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

    /*--------------------------direct-access-----------*/

    #direct-access {
        width: 890px;
        margin-top: 15px;
        overflow: auto;
    }

    #direct-access a {
        display: block;
        width: 290px;
        height: 190px;
        background-color: #FFFFFF;
        box-shadow: 1px 3px 4px rgba(0, 0, 0, .19);
        border-radius: 4px;
        overflow: hidden;
        margin-top: 10px;
        float: right;
        margin-left: 10px;
    }

    #direct-access .direct2 {
        width: 590px;
        margin-left: 0;
    }

    #direct-access .direct4 {
        margin-left: 0;
    }

    #direct-access .direc6 {
        width: 590px;
    }

    #direct-access .direct7 {
        margin-left: 0;
    }

</style>

<div id="main">
    <div id="banner-top">
        <img alt="no picture" src="<?= URL ?>image/main/banner.jpg"/>
    </div>

    <div id="sidebar-right">
        <img id="top-img" src="<?= URL ?>image/main/sidebar/Euro2016-290.52.jpg" alt="no picture"/>
        <ul class="first-ul">
            <li>
                <a href="">
                    <img src="<?= URL ?>image/main/sidebar/TV_100_Innovative_Products.jpg" alt="no picture"/>
                    <span><img src="<?= URL ?>image/main/sidebar/play.png" alt="no picture"/></span>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="<?= URL ?>image/main/sidebar/Motorola_Moto_360_1_Min_Intro.jpg" alt="no picture"/>
                    <span><img src="<?= URL ?>image/main/sidebar/play.png" alt="no picture"/></span>
                </a>
            </li>
        </ul>
        <ul class="second-ul">
            <li>
                <a href="">
                    <img src="<?= URL ?>image/main/sidebar/li1.jpg" alt="no picture"/>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="<?= URL ?>image/main/sidebar/li2.jpg" alt="no picture"/>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="<?= URL ?>image/main/sidebar/li3.jpg" alt="no picture"/>
                </a>
            </li>
        </ul>
        <div id="sidebar-right-lastNews">
            <h3 class="yekan fontSm">تازه ترین خبرها</h3>
            <ul class="three-ul">
                <li>
                    <a href="">
                        <div class="right-col">
                            <img src="<?= URL ?>image/main/sidebar/SanDisk_Headquarters_Milpitas-60x60.jpg"
                                 alt="no picture"/>
                        </div>
                        <div class="left-col">
                            <p class="yekan fontSm">کارت حافظه های 256 گیگابایتی سن دیسک معرفی شدند.</p>
                            <p class="yekan second">چهارشنبه 19 مرداد 1400</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="right-col">
                            <img src="<?= URL ?>image/main/sidebar/iPhone7-headphone-3-60x60.jpg" alt="no picture"/>
                        </div>
                        <div class="left-col">
                            <p class="yekan fontSm">اولین تصاویر از ایفون 7 لو رفت.</p>
                            <p class="yekan second">چهارشنبه 19 مرداد 1400</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div id="sidebar-right-brands">
            <a href=""> <img src="<?= URL ?>image/main/sidebar/adata.png" alt="no picture"/></a>
            <a href=""><img src="<?= URL ?>image/main/sidebar/asus.png" alt="no picture"/></a>
            <a href=""><img src="<?= URL ?>image/main/sidebar/d-link.png" alt="no picture"/></a>
            <a href=""><img src="<?= URL ?>image/main/sidebar/lenovo.png" alt="no picture"/></a>
            <a href=""><img src="<?= URL ?>image/main/sidebar/nivea.png" alt="no picture"/></a>
            <a href=""><img src="<?= URL ?>image/main/sidebar/oral-b.png" alt="no picture"/></a>
            <a href=""><img src="<?= URL ?>image/main/sidebar/samsung-brand.jpg" alt="no picture"/></a>
            <a href=""><img src="<?= URL ?>image/main/sidebar/x.vision.png" alt="no picture"/></a>
        </div>
    </div>

    <div id="content">

        <div id="slider">
            <div id="slider-img">
                <span id="prev"></span>
                <span id="next"></span>
                <a href="" class="item">
                    <img src="<?= URL ?>image/main/slider/slider1.jpg" alt="no picture"/>
                </a>
                <a href="" class="item">
                    <img src="<?= URL ?>image/main/slider/slider2.jpg" alt="no picture"/>
                </a>
                <a href="" class="item">
                    <img src="<?= URL ?>image/main/slider/slider3.jpg" alt="no picture"/>
                </a>
                <a href="" class="item">
                    <img src="<?= URL ?>image/main/slider/slider4.jpg" alt="no picture"/>
                </a>
                <a href="" class="item">
                    <img src="<?= URL ?>image/main/slider/slider5.jpg" alt="no picture"/>
                </a>
            </div>

            <div id="slider-navigator">
                <ul>
                    <li>
                        <a class="yekan fontSm">محصولات کالای خواب</a>
                    </li>
                    <li>
                        <a class="yekan fontSm">لوازم جانبی دوربین</a>
                    </li>
                    <li>
                        <a class="yekan fontSm">سری جدید vio</a>
                    </li>
                    <li>
                        <a class="yekan fontSm">کتب معنوی</a>
                    </li>
                    <li>
                        <a class="yekan fontSm">لوازم خانگی</a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="services-feather">
            <ul>
                <li>
                    <a class="yekan">
                        <i class="item1"></i>
                        7 روز ضمانت بازگشت
                    </a>
                </li>
                <li>
                    <a class="yekan">
                        <i class="item2"></i>
                        پرداخت در محل
                    </a>
                </li>
                <li>
                    <a class="yekan">
                        <i class="item3"></i>
                        ضمانت اصل بودن کالا
                    </a>
                </li>
                <li>
                    <a class="yekan">
                        <i class="item4"></i>
                        تحویل اکسپرس
                    </a>
                </li>
                <li>
                    <a class="yekan">
                        <i class="item5"></i>
                        تضمین بهترین قیمت
                    </a>
                </li>
            </ul>
        </div>

        <div id="slider2">
            <div id="slider2-finish">
                تمام شد!
            </div>
            <div class="flipTimer">
                <div class="hours"></div>
                <div class="minutes"></div>
                <div class="seconds"></div>
            </div>
            <div id="slider2-content">
                <a>
                    <div class="slider2-content-right">
                        <p class="title">جشنواره ماه نو</p>
                        <div class="price">
                            <div class="price-old yekan">25</div>
                            <div class="price-new yekan">18.5 هزارتومان</div>
                            <p class="yekan fontSm title2">توان : 2 و نیم وات</p>
                            <p class="yekan fontSm title2">مقاوم در برابر زلزله</p>
                        </div>
                    </div>
                    <div class="slider2-content-left">
                        <p>بخارپز فلر</p>
                        <img src="<?= URL ?>image/main/slider2/slider2_1.jpg" alt="no picture"/>
                    </div>
                </a>
                <a>
                    <div class="slider2-content-right">
                        <p class="title">جشنواره ماه نو</p>
                        <div class="price">
                            <div class="price-old yekan">25</div>
                            <div class="price-new yekan">18.5 هزارتومان</div>
                            <p class="yekan fontSm title2">توان : 2 و نیم وات</p>
                            <p class="yekan fontSm title2">مقاوم در برابر زلزله</p>
                        </div>
                    </div>
                    <div class="slider2-content-left">
                        <p>دسته بازی</p>
                        <img src="<?= URL ?>image/main/slider2/slider2_2.jpg" alt="no picture"/>
                    </div>
                </a>
                <a>
                    <div class="slider2-content-right">
                        <p class="title">جشنواره ماه نو</p>
                        <div class="price">
                            <div class="price-old yekan">25</div>
                            <div class="price-new yekan">18.5 هزارتومان</div>
                            <p class="yekan fontSm title2">توان : 2 و نیم وات</p>
                            <p class="yekan fontSm title2">مقاوم در برابر زلزله</p>
                        </div>
                    </div>
                    <div class="slider2-content-left">
                        <p>گیتار</p>
                        <img src="<?= URL ?>image/main/slider2/slider2_3.jpg" alt="no picture"/>
                    </div>
                </a>
                <a>
                    <div class="slider2-content-right">
                        <p class="title">جشنواره ماه نو</p>
                        <div class="price">
                            <div class="price-old yekan">25</div>
                            <div class="price-new yekan">18.5 هزارتومان</div>
                            <p class="yekan fontSm title2">توان : 2 و نیم وات</p>
                            <p class="yekan fontSm title2">مقاوم در برابر زلزله</p>
                        </div>
                    </div>
                    <div class="slider2-content-left">
                        <p>لب تاپ</p>
                        <img src="<?= URL ?>image/main/slider2/slider2_4.jpg" alt="no picture"/>
                    </div>
                </a>
                <a>
                    <div class="slider2-content-right">
                        <p class="title">جشنواره ماه نو</p>
                        <div class="price">
                            <div class="price-old yekan">25</div>
                            <div class="price-new yekan">18.5 هزارتومان</div>
                            <p class="yekan fontSm title2">توان : 2 و نیم وات</p>
                            <p class="yekan fontSm title2">مقاوم در برابر زلزله</p>
                        </div>
                    </div>
                    <div class="slider2-content-left">
                        <p>کیف دستی</p>
                        <img src="<?= URL ?>image/main/slider2/slider2_5.jpg" alt="no picture"/>
                    </div>
                </a>
                <a>
                    <div class="slider2-content-right">
                        <p class="title">جشنواره ماه نو</p>
                        <div class="price">
                            <div class="price-old yekan">25</div>
                            <div class="price-new yekan">18.5 هزارتومان</div>
                            <p class="yekan fontSm title2">توان : 2 و نیم وات</p>
                            <p class="yekan fontSm title2">مقاوم در برابر زلزله</p>
                        </div>
                    </div>
                    <div class="slider2-content-left">
                        <p>مبلمان</p>
                        <img src="<?= URL ?>image/main/slider2/slider2_6.jpg" alt="no picture"/>
                    </div>
                </a>
                <a>
                    <div class="slider2-content-right">
                        <p class="title">جشنواره ماه نو</p>
                        <div class="price">
                            <div class="price-old yekan">25</div>
                            <div class="price-new yekan">18.5 هزارتومان</div>
                            <p class="yekan fontSm title2">توان : 2 و نیم وات</p>
                            <p class="yekan fontSm title2">مقاوم در برابر زلزله</p>
                        </div>
                    </div>
                    <div class="slider2-content-left">
                        <p>لوازم گرمایشی</p>
                        <img src="<?= URL ?>image/main/slider2/slider2_7.jpg" alt="no picture"/>
                    </div>
                </a>
                <a>
                    <div class="slider2-content-right">
                        <p class="title">جشنواره ماه نو</p>
                        <div class="price">
                            <div class="price-old yekan">25</div>
                            <div class="price-new yekan">18.5 هزارتومان</div>
                            <p class="yekan fontSm title2">توان : 2 و نیم وات</p>
                            <p class="yekan fontSm title2">مقاوم در برابر زلزله</p>
                        </div>
                    </div>
                    <div class="slider2-content-left">
                        <p>لوازم سرمایشی</p>
                        <img src="<?= URL ?>image/main/slider2/slider2_8.jpg" alt="no picture"/>
                    </div>
                </a>
            </div>
            <div id="slider2-navigator">
                <ul>
                    <li>
                        <a class="yekan">بخارپز فلر</a>
                    </li>
                    <li>
                        <a class="yekan">دسته بازی</a>
                    </li>
                    <li>
                        <a class="yekan">گیتار</a>
                    </li>
                    <li>
                        <a class="yekan">لب تاپ</a>
                    </li>
                    <li>
                        <a class="yekan">کیف دستی</a>
                    </li>
                    <li>
                        <a class="yekan">مبلمان</a>
                    </li>
                    <li>
                        <a class="yekan">لوازم گرمایشی</a>
                    </li>
                    <li>
                        <a class="yekan">لوازم سرمایشی</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sliderScroll">
            <h3 class="yekan fontSm first">
                فقط در دیجی کالا
            </h3>
            <div class="sliderScroll-content">
                <div class="sliderScroll-prev">
                    <span onclick="sliderScroll('prev' , this)"></span>
                </div>
                <div class="sliderScroll-main">
                    <ul>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">10,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_2.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">گوشی سامسونگ</p>
                                <p class="yekan pPrice">2,900,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_3.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسر</p>
                                <p class="yekan pPrice">4,500,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_4.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ دل</p>
                                <p class="yekan pPrice">4,000,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_5.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">گوشی شیامی</p>
                                <p class="yekan pPrice">5,200,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sliderScroll-next">
                    <span onclick="sliderScroll('next',this)"></span>
                </div>
            </div>
        </div>

        <div id="direct-access">
            <a>
                <img src="<?= URL ?>image/main/direct-access1.jpg" alt="no-picture"/>
            </a>
            <a class="direct2">
                <img src="<?= URL ?>image/main/direct-access2.jpg" alt="no-picture"/>
            </a>
            <a>
                <img src="<?= URL ?>image/main/direct-access3.jpg" alt="no-picture"/>
            </a>
            <a>
                <img src="<?= URL ?>image/main/direct-access4.jpg" alt="no-picture"/>
            </a>
            <a class="direct4">
                <img src="<?= URL ?>image/main/direct-access5.jpg" alt="no-picture"/>
            </a>
            <a class="direc6">
                <img src="<?= URL ?>image/main/direct-access6.jpg" alt="no-picture"/>
            </a>
            <a class="direct7">
                <img src="<?= URL ?>image/main/direct-access7.jpg" alt="no-picture"/>
            </a>
        </div>

        <div class="sliderScroll">
            <h3 class="yekan fontSm tow">
                پر بازدیدترین ها
            </h3>
            <div class="sliderScroll-content">
                <div class="sliderScroll-prev">
                    <span onclick="sliderScroll('prev' , this)"></span>
                </div>
                <div class="sliderScroll-main">
                    <ul>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll2/sliderscroll2_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">گوشی نوکیا</p>
                                <p class="yekan pPrice">1,750,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll2/sliderscroll2_2.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">گوشی سامسونگ</p>
                                <p class="yekan pPrice">2,500,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll2/sliderscroll2_3.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">گوشی الجی</p>
                                <p class="yekan pPrice">5,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll2/sliderscroll2_4.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">گوشی ایفون</p>
                                <p class="yekan pPrice">8,000,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sliderScroll-next">
                    <span onclick="sliderScroll('next',this)"></span>
                </div>
            </div>
        </div>

        <div class="sliderScroll">
            <h3 class="yekan fontSm three">
                پرفروش ترین ها کالاها
            </h3>
            <div class="sliderScroll-content">
                <div class="sliderScroll-prev">
                    <span onclick="sliderScroll('prev' , this)"></span>
                </div>
                <div class="sliderScroll-main">
                    <ul>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll2/sliderscroll2_2.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">گوشی سامسونگ</p>
                                <p class="yekan pPrice">2,500,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll2/sliderscroll2_3.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">گوشی الجی</p>
                                <p class="yekan pPrice">5,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll2/sliderscroll2_2.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">گوشی سامسونگ</p>
                                <p class="yekan pPrice">2,500,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll2/sliderscroll2_3.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">گوشی الجی</p>
                                <p class="yekan pPrice">5,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sliderScroll-next">
                    <span onclick="sliderScroll('next',this)"></span>
                </div>
            </div>
        </div>

        <div class="sliderScroll">
            <h3 class="yekan fontSm four">
                جدیدترین کالاها
            </h3>
            <div class="sliderScroll-content">
                <div class="sliderScroll-prev">
                    <span onclick="sliderScroll('prev' , this)"></span>
                </div>
                <div class="sliderScroll-main">
                    <ul>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                                <img src="<?= URL ?>image/main/sliderScroll1/exclusive-blue.png" alt="no-picture"/>
                                <p class="yekan pName">لب تاپ ایسوس</p>
                                <p class="yekan pPrice">1,800,000</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sliderScroll-next">
                    <span onclick="sliderScroll('next',this)"></span>
                </div>
            </div>
        </div>
    </div>

</div>

