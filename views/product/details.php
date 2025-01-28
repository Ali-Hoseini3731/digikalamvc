<style>

    #details {
        max-width: 1150px;
        margin: auto;
        background-color: #fff;
        border-radius: 0 0 5px 5px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .2);
        padding: 25px;
    }

    #details .right {
        width: 450px;
        float: right;
    }

    #details .right .first {
        padding: 10px 5px;
    }

    #details .right .first::after {
        content: '';
        clear: both;
        display: table;
    }

    #details .right .social {
        display: block;
        width: 20px;
        height: 19px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -211px -188px;
        float: left;
        cursor: pointer;
    }

    #details .right .favorite {
        display: block;
        width: 20px;
        height: 20px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -161px -188px;
        float: left;
        margin-left: 8px;
        cursor: pointer;
    }

    #details .right .image {
        width: 100%;
        padding: 20px 0;
        text-align: center;
    }

    #details .right .image img {
        max-width: 350px;
        max-height: 350px;
    }

    #details .right .gallery {
        float: right;
        width: 100%;
    }

    #details .right .gallery ul {
        padding: 0;
        margin: 0;
        float: right;
        width: 100%;
    }

    #details .right .gallery ul li {
        list-style: none;
        width: 80px;
        height: 90px;
        float: left;
        border: 1px solid #ddd;
        margin-right: 8px;
        box-shadow: 0 0 2px rgba(0, 0, 0, .19);
        text-align: center;
        cursor: pointer;
    }

    #details .right .gallery ul li img {
        margin-top: 14px;
        width: 64px;
        height: 64px;
    }

    #details .right .gallery ul li.point span {
        display: block;
        width: 30px;
        height: 20px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -564px -34px;
        margin-top: 40px;
        margin-right: 26px;
    }

    #details .left {
        width: 670px;
        padding-right: 30px;
        float: left;
    }

    #details .left .title {
        height: 30px;
        background-color: #bcf2c2;;
        padding: 10px 20px;
        border-radius: 4px;
        box-shadow: 0 0 3px rgba(0, 0, 0, .2);
        overflow: auto;
    }

    #details .left .title h4 {
        padding: 0;
        margin: 0;
        float: right;
    }

    #details .left .stars {
        width: 67px;
        height: 18px;
        float: left;;
        margin-top: -7px;
    }

    #details .left .stars .stars-gray {
        display: inline-block;
        width: 67px;
        height: 9px;
        background: url("<?= URL ?>image/search-page/stars.png") repeat;
        background-position: 0 -9px;
        position: relative;
    }

    #details .left .stars .stars-red {
        display: inline-block;
        width: 51px;
        height: 9px;
        background: url("<?= URL ?>image/search-page/stars.png") repeat;
        background-position: 0 0;
        position: absolute;
        left: 0;
        top: 0;
    }

    #details .left .title > p {
        float: left;
        padding: 0;
        font-size: 9pt;
        margin: 0;
        position: relative;
        top: 11px;
        left: -65px;
    }

    #details .left .tow-col {
        width: 100%;
        margin: 5px 0 30px 0;
    }

    #details .left .tow-col::after {
        content: "";
        clear: both;
        display: table;
    }

    #details .left .tow-col .right1 {
        width: 470px;
        float: right;
    }

    #details .left .tow-col .right1 h4 {
        font-size: 10pt;
        margin: 0;
        padding: 15px 0;
    }

    #details .left .tow-col .right1 ul.colors {
        margin: 0 0 20px 0;
        padding: 0;
        overflow: auto;
    }

    #details .left .tow-col .right1 ul.colors li {
        list-style: none;
        width: 60px;
        height: 27px;
        border: 1px solid #ccc;
        border-radius: 3px;
        text-align: left;
        padding-left: 10px;
        font-size: 9pt;
        background-color: #e8e8e8;
        position: relative;
        float: right;
        margin-left: 5px;
    }

    #details .left .tow-col .right1 ul.colors li span {
        display: inline-block;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        vertical-align: middle;
        margin-left: 5px;
        cursor: pointer;
    }

    #details .left .tow-col .right1 ul.colors li:first-child span {
        background: #000000 url("<?= URL ?>image/slices.png") no-repeat;
    }

    #details .left .tow-col .right1 ul.colors li:last-child span {
        background: #FFFFFF url("<?= URL ?>image/slices.png") no-repeat;
    }

    #details .left .tow-col .right1 ul.colors li:first-child.active span {
        background-position: -192px -81px;
    }

    #details .left .tow-col .right1 ul.colors li:last-child.active span {
        background-position: -167px -81px;
    }

    #details .left .tow-col .right1 .selectList {
        width: 330px;
        height: 30px;
        border: 1px solid #dddddd;
        background-color: #f6f6f6;
        border-radius: 4px;
        text-align: center;
        cursor: pointer;
        position: relative;
    }

    #details .left .tow-col .right1 .selectList span {
        font-size: 9.3pt;
        line-height: 32px;
    }

    #details .left .tow-col .right1 .selectList::before {
        content: "";
        display: block;
        width: 19px;
        height: 18px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -140px -79px;
        position: absolute;
        top: 5px;
        right: 5px;
    }

    #details .left .tow-col .right1 .selectList::after {
        content: '';
        display: block;
        width: 16px;
        height: 10px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -34px -462px;
        position: absolute;
        top: 10px;
        left: 5px;
    }

    #details .left .tow-col .right1 .selectList ul {
        padding: 0;
        margin: 0;
        background-color: #fff;
        box-shadow: 0 0 3px rgba(0, 0, 0, .2);
        display: none;
        z-index: 3;
    }

    #details .left .tow-col .right1 .selectList ul li {
        list-style: none;
        padding: 5px 10px;
        font-size: 9.3pt;
        border-bottom: 1px solid #eee;
        cursor: pointer;
    }

    #details .left .tow-col .right1 .selectList ul li:hover {
        background-color: #b8f0b0;
    }

    #details .left .tow-col .right1 .price {
        margin-top: 40px;
    }

    #details .left .tow-col .right1 .price > span {
        margin-left: 3px;
    }

    #details .left .tow-col .right1 .price > span.one {
        text-decoration: line-through;
    }

    #details .left .tow-col .right1 .price .discount {
        display: inline-block;
        width: 140px;
        height: 20px;
        border: 1px solid #eee;
        margin-right: 25px;
        vertical-align: middle;
    }

    #details .left .tow-col .right1 .price .discount .one {
        display: block;
        width: 50px;
        height: 100%;
        float: right;
        text-align: center;
        color: #fff;
        font-size: 9pt;
        background-color: #e70000;
    }

    #details .left .tow-col .right1 .price .discount .one::before {

    }

    #details .left .tow-col .right1 .priceForYou {
        margin-top: 30px;
    }

    #details .left .tow-col .right1 .priceForYou > span {
        margin-left: 3px;
    }

    #details .left .tow-col .right1 .priceForYou .one {
        font-size: 13pt;
    }

    #details .left .tow-col .right1 .priceForYou .tow {
        font-size: 11pt;
        color: #0ddd0c;
    }

    #details .left .tow-col .right1 .priceForYou .three {
        font-size: 8pt;
    }

    #details .left .tow-col .right1 .price .discount .tow {
        display: block;
        width: 90px;
        height: 100%;
        float: right;
        text-align: center;
        color: #fff;
        font-size: 9pt;
        background-color: #e66363;
    }

    #details .left .tow-col .right1 .compare {
        margin-top: 30px;
    }

    #details .left .tow-col .right1 .compare .compare-btn {
        display: inline-block;
        width: 150px;
        height: 35px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 2px 2px rgba(0, 0, 0, .15);
        margin-left: 20px;
    }

    #details .left .tow-col .right1 .compare .compare-btn .compare-btn-text {
        display: block;
        width: 100px;
        height: 100%;
        float: right;
        background-color: #5f5f5f;
        color: #FFFFFF;
        font-size: 9pt;
        text-align: center;
        line-height: 35px;
    }

    #details .left .tow-col .right1 .compare .compare-btn .compare-btn-icon {
        display: block;
        width: 50px;
        height: 100%;
        float: right;
        background-color: #adadad;
        cursor: pointer;
        position: relative;
    }

    #details .left .tow-col .right1 .compare .compare-btn .compare-btn-icon i {
        display: block;
        width: 15px;
        height: 15px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -442px -423px;
        position: absolute;
        right: 17px;
        top: 11px
    }

    #details .left .tow-col .right1 .compare .addtoCard {
        display: inline-block;
        width: 200px;
        height: 35px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 2px 2px rgba(0, 0, 0, .15);
        margin-left: 20px;
    }

    #details .left .tow-col .right1 .compare .addtoCard .addtoCard-icon {
        display: block;
        width: 40px;
        height: 100%;
        float: right;
        background-color: #0dfb0c;
        position: relative;
    }

    #details .left .tow-col .right1 .compare .addtoCard .addtoCard-icon i {
        display: block;
        width: 30px;
        height: 25px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -157px -419px;
        position: absolute;
        right: 3px;
        top: 5px;
    }

    #details .left .tow-col .right1 .compare .addtoCard .addtoCard-text {
        display: block;
        width: 160px;
        height: 100%;
        float: right;
        background-color: #07bc31;
        color: #FFFFFF;
        font-size: 10pt;
        text-align: center;
        line-height: 35px;
    }


    #details .left .tow-col .left1 {
        width: 200px !important;
        float: right;
    }

    #details .left .tow-col .left1 ul {
        padding: 0;
        margin: 20px 0 0 0;
    }

    #details .left .tow-col .left1 ul li {
        list-style-type: disc;
        padding: 2px 0;
    }

    #details .left .tow-col .left1 ul li .one {
        font-size: 9.5pt;
        margin-right: 5px;
        position: relative;
        top: -2px;
    }

    #details .left .tow-col .left1 ul li .tow {
        font-size: 9.5pt;
        color: #656565;
        margin-right: 5px;
        position: relative;
        top: -2px;
    }

    #details .left .tow-col .left1 ul li.without {
        list-style-type: none;
        position: relative;
    }

    #details .left .tow-col .left1 ul li.without::before {
        content: "";
        display: block;
        width: 15px;
        height: 15px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -166px -130px;
        position: absolute;
        right: -14px;
        top: 5px;
        cursor: pointer;
    }

    #details .left .tow-col .left1 ul li .three {
        font-size: 9pt;
        color: #aaa9a9;
        margin-right: 5px;
        cursor: pointer;
        position: relative;
        top: -4px;
        border-bottom: 1px dotted #aaa9a9;
    }

    #details .left .horizontal-row {
        height: 1px;
        background: #aaaaaa;
        margin: 15px;
    }

    #details .left #services-feather2 {
        width: 670px;
        height: 40px;
        background-color: #fff;
    }

    #details .left #services-feather2 ul {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    #details .left #services-feather2 ul li {
        list-style: none;
        height: 100%;
        width: 134px;
        float: right;
    }

    #details .left #services-feather2 ul li a {
        display: block;
        font-size: 8pt;
        cursor: pointer;
    }

    #details .left #services-feather2 ul li a i {
        display: block;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        float: right;
        margin-left: 5px;
        margin-right: 15px;
    }

    #details .left #services-feather2 i.item1 {
        width: 24px;
        height: 24px;
        background-position: -210px -473px;
    }

    #details .left #services-feather2 i.item2 {
        width: 24px;
        height: 24px;
        background-position: -263px -473px;
    }

    #details .left #services-feather2 i.item3 {
        width: 24px;
        height: 24px;
        background-position: -158px -473px;
    }

    #details .left #services-feather2 i.item4 {
        width: 34px;
        height: 24px;
        background-position: -316px -473px;
    }

    #details .left #services-feather2 i.item5 {
        width: 24px;
        height: 24px;
        background-position: -102px -473px;
    }

</style>

<div id="details">
    <div class="right">
        <div class="first">
            <span class="social"></span>
            <span class="favorite"></span>
        </div>
        <div class="image">
            <img src="<?= URL ?>image/product-page/details/small/2-1.jpg" alt="no-picture"
                 data-zoom-image="<?= URL ?>image/product-page/details/large/2.jpg"/>
        </div>
        <div class="gallery">
            <ul>
                <li data-main-image="<?= URL ?>image/product-page/gallery/large/1472662586.jpg">
                    <img src="<?= URL ?>image/product-page/gallery/small/1472662586.jpg" alt="no-picture">
                </li>
                <li data-main-image="<?= URL ?>image/product-page/gallery/large/1472662593.jpg">
                    <img src="<?= URL ?>image/product-page/gallery/small/1472662593.jpg" alt="no-picture">
                </li>
                <li data-main-image="<?= URL ?>image/product-page/gallery/large/1472662590.jpg">
                    <img src="<?= URL ?>image/product-page/gallery/small/1472662590.jpg" alt="no-picture">
                </li>
                <li data-main-image="<?= URL ?>image/product-page/gallery/large/1472662586.jpg">
                    <img src="<?= URL ?>image/product-page/gallery/small/1472662586.jpg" alt="no-picture">
                </li>
                <li class="point" data-main-image="">
                    <span></span>
                </li>

            </ul>
        </div>
    </div>
    <div class="left">
        <div class="title">
            <h4 class="yekan">گوشی سامسونگ مدل Galexy</h4>
            <div class="stars">
                    <span class="stars-gray">
                         <span class="stars-red"></span>
                    </span>
            </div>
            <p class="yekan">4 رای از 85 رای</p>
        </div>
        <div class="tow-col">
            <div class="right1">
                <h4 class="yekan">انتخاب رنگ</h4>
                <ul class="colors">
                    <li class="yekan">
                        <span></span>
                        مشکی
                    </li>
                    <li class="yekan">
                        <span></span>
                        سفید
                    </li>
                </ul>
                <h4 class="yekan">انتخاب گارانتی</h4>
                <div class="selectList">
                    <span class="yekan fontSm">18 ماه گارانتی هما تلگام</span>
                    <ul>
                        <li class="yekan">گارانتی شماره یک</li>
                        <li class="yekan">گارانتی شماره دو</li>
                        <li class="yekan">گارانتی شماره سه</li>
                    </ul>
                </div>
                <div class="price">
                    <span class="yekan fontSm">قیمت :</span>
                    <span class="one yekan fontLg">100.000</span>
                    <span class="yekan fontSm">تومان</span>
                    <span class="discount">
                        <span class="yekan one">تخفیف</span>
                        <span class="yekan tow">300 هزار تومان</span>
                    </span>

                </div>
                <div class="priceForYou">
                    <span class="yekan one">قیمت برای شما :</span>
                    <span class="yekan tow">90.000</span>
                    <span class="yekan three">تومان</span>
                </div>
                <div class="compare">
                    <span class="compare-btn">
                        <span class="compare-btn-text yekan">مقایسه کن </span>
                        <span class="compare-btn-icon"><i></i></span>
                    </span>
                    <span class="addtoCard">
                        <span class="addtoCard-icon"><i></i></span>
                        <span class="addtoCard-text yekan">افزودن به سبد خرید</span>
                    </span>
                </div>
            </div>
            <div class="left1">
                <ul>
                    <li>
                        <span class="yekan one">تعداد سیم کارت :</span>
                        <span class="yekan tow">دو سیم کارته</span>
                    </li>
                    <li>
                        <span class="yekan one">حافظه داخلی :</span>
                        <span class="yekan tow">32 گیگابایت</span>
                    </li>
                    <li class="without">
                        <span class="yekan three">موارد بیشتر</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="horizontal-row"></div>
        <div id="services-feather2">
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
    </div>
</div>
