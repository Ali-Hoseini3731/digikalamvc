
<style>
    #search-main {
        max-width: 1150px;
        margin: 10px auto;
        background-color: #fff;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .2);
        padding: 25px;
    }

    #search-sidebar {
        width: 248px;
        border: 1px solid #aaa;
        float: right;
    }

    #search-sidebar h3 {
        margin: 0;
        padding-top: 5px;
        padding-right: 5px;
        font-size: 10pt;
        background-color: #666666;
        color: #fff;
    }

    #search-sidebar h3 > i.arrow {
        display: block;
        float: left;
        width: 16px;
        height: 9px;
        background: url("<?= URL ?>/image/subcatarrow.gif") no-repeat;
        margin-left: 5px;
        margin-top: 9px;
    }

    #search-sidebar ul {
        padding-right: 20px;
        margin: 5px 0;
    }

    #search-sidebar ul li {
        list-style: none;
        font-size: 9pt;
    }

    #search-sidebar ul li i {
        display: inline-block;
        width: 4px;
        height: 13px;
        background: url("<?= URL ?>/image/sideArrow.gif") no-repeat;
        margin-left: 3px;
        vertical-align: -2px;

    }

    .horizontal-row {
        height: 1px;
        background: #aaaaaa;
        margin: 15px;
    }

    #search-sidebar .filter-ul li {
        font-size: 9pt;
        padding: 5px 10px 5px 0;
        position: relative;
    }

    #search-sidebar .filter-ul li.title {
        font-size: 10pt;
        padding-right: 5px;
    }

    #search-sidebar .filter-ul li input[type="checkbox"] {
        width: 17px;
        height: 17px;
        position: relative;
        opacity: 0;
        z-index: 2;
        vertical-align: middle;
    }

    #search-sidebar .filter-ul li span:first-child {
        display: inline-block;
        width: 17px;
        height: 17px;
        position: absolute;
        top: 9px;
        right: 14px;
        background: url("<?= URL ?>/image/a-checkbox-medium-sprite.png") no-repeat;
        background-position: -2px -2px;
    }

    .check1 {
        background: url("<?= URL ?>/image/a-checkbox-medium-sprite.png") no-repeat !important;
        background-position: -2px -152px !important;
    }

    #search-sidebar .filter-ul li .color-product {
        display: inline-block;
        width: 5px;
        height: 15px;
        margin-left: 5px;
        vertical-align: middle;
    }

    #search-sidebar .filter-ul li .one {
        background-color: #000;
    }

    #search-sidebar .filter-ul li .tow {
        background-color: #ff0000;
    }

    #search-sidebar .filter-ul li .three {
        background-color: #00ff00;
    }

    /*-------------------------search-content--------------*/
    #search-content {
        width: 880px;
        height: 100%;
        padding-right: 20px;
        float: right;
    }

    #search-content .page-navigator {
        width: 100%;
        padding: 0;
        margin: 0;
    }

    #search-content .page-navigator::after {
        content: '';
        clear: both;
        display: table;
    }

    #search-content .page-navigator li {
        font-size: 9pt;
        list-style: none;
        float: right;
        margin-left: 20px;
    }

    #search-content .page-navigator li img {
        margin-right: 5px;
    }

    #search-content .filter-top {
        padding: 0;
        width: 100%;
        float: right;
        margin: 10px 0;
    }

    #search-content .filter-top > li {
        width: 140px;
        height: 25px;
        list-style: none;
        float: right;
        font-size: 9.5pt;
        background-color: #f2eeee;
        border: 1px solid #c4c4c4;
        border-radius: 4px;
        padding-right: 5px;
        margin-left: 10px;
        position: relative;
        cursor: pointer;
    }

    #search-content .filter-top > li img {
        float: left;
        margin-left: 5px;
        margin-top: 7px;
        cursor: pointer;

    }

    #search-content .filter-top > li .options {
        width: 160px;
        height: 205px;
        position: absolute;
        top: 26px;
        right: -1px;
        background-color: #fff;
        border-right: 1px solid #ccc;
        box-shadow: -3px 3px 3px rgba(0, 0, 0, .2);
        border-radius: 0 0 5px 5px;
        overflow-y: auto;
        padding: 10px;
        display: none;
        z-index: 2;

    }

    #search-content .filter-top li .options ul {
        margin: 0;
        padding: 0;
    }

    #search-content .options ul li {
        list-style: none;
    }

    #search-content .options ul li .square {
        display: inline-block;
        width: 10px;
        height: 10px;
        background-color: red;
        background: url("<?= URL ?>/image/spritefiltercontrols.png") no-repeat;
        background-position: -59px -154px;
        vertical-align: middle;
        margin-left: 10px;
        cursor: pointer;
    }

    .square-hover {
        background-position: -59px -205px !important;
    }

    .square-selected {
        background-position: -59px -255px !important;
    }

    #search-content .options ul .horizontal-row {
        margin: 10px 0 !important;
    }

    #filter-selected {
        width: 100%;
        margin-top: 10px;
    }

    #filter-selected span.filter-selected-span {
        display: inline-block;
        background-color: #dcdbe1;
        border: 1px solid #c4c4c4;
        border-radius: 4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .19);
        padding: 0 3px;
        font-size: 9pt;
        margin-top: 5px;
        margin-left: 5px;
    }

    #filter-selected span.filter-selected-span i {
        display: inline-block;
        width: 5px;
        height: 5px;
        margin-right: 5px;
        background: url("<?= URL ?>/image/spritefiltercontrols.png") no-repeat;
        background-position: -59px -386px;
        cursor: pointer;
        vertical-align: 6px;
    }

    #search-content .horizontal-row2 {
        height: 1px;
        background: #aaaaaa;
        width: 100%;
        float: right;

    }

    /*---------------------------search-----------*/
    #search-content #search {
        width: 100%;
        margin: 10px 0;
        float: right;
        position: relative;
    }

    #search-content #search input {
        width: 330px;
        height: 17px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: 1px 2px 3px rgba(0, 0, 0, .1);
    }

    #search .search-icon {
        display: inline-block;
        width: 17px;
        height: 17px;
        position: absolute;
        right: 316px;
        top: 9px;
        background: url("<?= URL ?>/image/search-page/search2.png") no-repeat;
        cursor: pointer;
    }

    #search .exist {
        display: inline-block;
        width: 40px;
        height: 22px;
        position: relative;
        right: 15px;
        top: 8px;
    }

    #search .exist .btn-checked {
        display: inline-block;
        width: 40px;
        height: 22px;
        background: url("<?= URL ?>/image/search-page/btnchecked.png") no-repeat;
        background-position: 0 0;
        position: absolute;
        left: 0;
        top: 0;
    }

    #search .active .btn-checked {
        background-position: -40px 0 !important;
    }

    #search .exist .yesno {
        display: inline-block;
        width: 29px;
        height: 20px;
        background: url("<?= URL ?>/image/search-page/yesno.png") no-repeat;
        background-position: 1px -21px;
        position: absolute;
        left: -1px;
        top: 0;
        cursor: pointer;
    }

    #search .active .yesno {
        background-position: 0 0 !important;
    }

    #search .just-show {
        font-size: 10pt;
        margin-right: 15px;
    }

    #search .display-type {
        float: left;
        margin-top: 5px;
    }

    #search .display-type .text {
        font-size: 10pt;
        margin-left: 3px;
    }

    #search .display-type .type1, .type2 {
        display: block;
        width: 24px;
        height: 24px;
        float: left;
        background: url("<?= URL ?>/image/search-page/displaytype.png") no-repeat;
        cursor: pointer;
    }

    #search .display-type .type1 {
        background-position: 0 0;
    }

    #search .display-type .type2 {
        background-position: -24px 0;
    }

    #search-content .active .type1 {
        background-position: 0 -24px !important;
    }

    #search-content .display-type.active .type2 {
        background-position: -24px -24px !important;
    }

    /*-------------------------sort----------------*/
    #search-content #sort {
        float: right;
        width: 100%;
    }

    #sort span.second {
        margin-right: 20px;
    }

    /*--------------pagination------*/
    #search-content #pagination {
        float: right;
        width: 100%;
        margin-top: 15px;
    }

    #pagination .next, .prev {
        display: block;
        height: 20px;
        width: 55px;
        float: left;
        font-size: 9pt;
        border: 1px solid #ccc;
        border-radius: 4px;
        text-align: center;
        margin: 0 2px;
        background: linear-gradient(top, #fff 0%, #efefef 100%) repeat scroll 0 0;
        background: -moz-linear-gradient(top, #fff 0%, #efefef 100%) repeat scroll 0 0;
        background: -webkit-linear-gradient(top, #fff 0%, #efefef 100%) repeat scroll 0 0;
        cursor: pointer;

    }

    #pagination ul {
        float: left;
        padding: 0;
        margin: 0;
    }

    #pagination ul li {
        list-style: none;
        float: left;
        width: 20px;
        height: 20px;
        text-align: center;
        font-size: 9pt;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin: 0 2px;
        cursor: pointer;
    }

    /*-------------------products------------*/
    /*-----------show type 1----------*/
    #search-content #products {
        float: right;
        width: 100%;
        margin-top: 40px;
    }

    #products ul {
        padding: 0;
        margin: 0;
        width: 100%;
        float: right;
    }

    #products ul li {
        width: 200px;
        height: 330px;
        border: 1px solid #aaa;
        list-style: none;
        float: right;
        margin-left: 8px;
        margin-bottom: 10px;
        padding: 5px;
        box-shadow: 1px 3px 3px rgba(0, 0, 0, .2);
        border-radius: 4px;
    }

    #products ul li a {
        display: block;
        height: 100%;
        cursor: pointer;
    }

    #products ul li a .image {
        height: 180px;
        text-align: center;
    }

    #products ul li a .image img {
        width: 180px;
        height: 180px;
        margin: 0 auto;
    }

    #products ul li a .colors {
        text-align: center;
        margin-top: 11px;
    }

    #products ul li a .colors .color {
        display: inline-block;
        width: 15px;
        height: 15px;
        border: 1px solid #cccccc;
        cursor: pointer;
    }

    #products ul li a .colors .color:nth-child(1) {
        background-color: gold;
    }

    #products ul li a .colors .color:nth-child(2) {
        background-color: silver;
    }

    #products ul li a .title {
        width: 100%;
        text-align: left;
        font-size: 12pt;
    }

    #products ul li a .discription {
        display: none;
        width: 100%;
        height: 290px;
        overflow-y: auto;
    }

    #products ul li a .stars {
        width: 100%;
        margin-top: 5px;
        text-align: center;
    }

    #products ul li a .stars .stars-gray {
        display: inline-block;
        width: 67px;
        height: 9px;
        background: url("<?= URL ?>/image/search-page/stars.png") repeat;
        background-position: 0 -9px;
        position: relative;
    }

    #products ul li a .stars-gray .stars-red {
        display: inline-block;
        width: 51px;
        height: 9px;
        background: url("<?= URL ?>/image/search-page/stars.png") repeat;
        background-position: 0 0;
        position: absolute;
        left: 0;
        top: 0;
    }

    #products ul li a .prices {
        width: 100%;
        margin-top: 10px;
        position: relative;
    }

    #products ul li a .prices .price1 {
        color: red;
        text-decoration: line-through;
        margin: 0;
        font-size: 10pt;
        height: 20px;
    }

    #products ul li a .prices .price2 {
        margin: 0;
        font-size: 13pt;
        color: #177317;
    }

    #products ul li a i {
        display: block;
        width: 30px;
        height: 30px;
        float: left;
        background: url("<?= URL ?>/image/search-page/addtocart-min.png") no-repeat;
        position: absolute;
        left: 5px;
        top: 18px;
    }

    /*--------show type2------*/
    #products.display ul li {
        width: 878px !important;
        height: 400px;
        margin-left: 0;
        margin-bottom: 10px;
        padding: 0;
    }

    #products.display ul li .display-right {
        float: right;
        width: 200px;
        height: 100%;
        padding: 10px 0;
    }

    #products.display ul li .display-left {
        float: right;
        width: 660px;
        height: 100%;
        padding: 9px;
        position: relative;
    }

    #products.display ul li .display-left::before {
        display: block;
        content: '';
        width: 1px;
        height: 290px;
        background-color: #f7f3f3;
        position: absolute;
        top: 48px;
        right: -2px;
    }

    #products.display ul li .display-left .title {
        text-align: right;
    }

    #products.display ul li .display-left .discription {
        display: block;
    }r
</style>

<div id="search-main">
    <div id="search-sidebar">
        <h3 class="yekan">
            گوشی موبایل
            <i class="arrow"></i>
        </h3>

        <ul class="yekan">
            <li>
                <i></i>
                کالای دیجیتال
                <ul>
                    <li>
                        <i></i>
                        موبایل
                        <ul>
                            <li>
                                <i></i>
                                گوشی موبایل
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="horizontal-row"></div>

        <ul class="yekan filter-ul">
            <li class="title">براساس نوع</li>
            <li>
                <span></span>
                <input type="checkbox" class="input-check"/>
                سیستم عامل اندروید
            </li>
            <li>
                <span></span>
                <input type="checkbox" class="input-check"/>
                سیستم عامل ios
            </li>
            <li>
                <span></span>
                <input type="checkbox" class="input-check"/>
                سیستم عامل ویندوز فون
            </li>
            <li>
                <span></span>
                <input type="checkbox" class="input-check"/>
                سایرسیستم عامل ها
            </li>
        </ul>

        <div class="horizontal-row"></div>

        <ul class="yekan filter-ul">
            <li class="title">براساس سازنده</li>
            <li>
                <span></span>
                <input type="checkbox" class="input-check"/>
                اپل
            </li>
            <li>
                <span></span>
                <input type="checkbox" class="input-check"/>
                سامسونگ
            </li>
            <li>
                <span></span>
                <input type="checkbox" class="input-check"/>
                اچ تی سی
            </li>
            <li>
                <span></span>
                <input type="checkbox" class="input-check"/>
                شیامی
            </li>
        </ul>

        <div class="horizontal-row"></div>

        <ul class="yekan filter-ul">
            <li class="title">براساس رنگ</li>
            <li>
                <span></span>
                <input type="checkbox" class="input-check"/>
                <span class="color-product one"></span>
                مشگی
            </li>
            <li>
                <span></span>
                <input type="checkbox" class="input-check"/>
                <span class="color-product tow"></span>
                قرمز
            </li>
            <li>
                <span></span>
                <input type="checkbox" class="input-check"/>
                <span class="color-product three"></span>
                سبز
            </li>
        </ul>
    </div>

    <div id="search-content">
        <ul class="page-navigator">
            <li class="yekan">
                جستجوی کالا
                <img src="<?= URL ?>image/patharrow.png" alt="no-picture"/>
            </li>
            <li class="yekan">
                کالای دیجیتال
                <img src="<?= URL ?>image/patharrow.png" alt="no-picture"/>
            </li>
            <li class="yekan">
                موبایل
                <img src="<?= URL ?>image/patharrow.png" alt="no-picture"/>
            </li>
            <li class="yekan">
                گوشی موبایل
                <img src="<?= URL ?>image/patharrow.png" alt="no-picture"/>
            </li>
            <li class="yekan">
                1200 نتیجه
                <img src="<?= URL ?>image/patharrow.png" alt="no-picture"/>
            </li>

        </ul>

        <div id="filter-selected">
        </div>

        <ul class="filter-top">
            <li class="yekan">
                <span class="title">
                    تعداد سیم کارت
                </span>
                <img src="<?= URL ?>image/sideArrow.gif" alt="no-pictire"/>
                <div class="options">
                    <ul>
                        <li class="yekan" data-id="1">
                            <span class="square"></span>
                            نمایش همه
                        </li>
                        <div class="horizontal-row"></div>
                        <li class="yekan" data-id="2">
                            <span class="square"></span>
                            یک
                        </li>
                        <li class="yekan" data-id="3">
                            <span class="square"></span>
                            دو
                        </li>
                        <li class="yekan" data-id="4">
                            <span class="square"></span>
                            سه
                        </li>
                    </ul>
                </div>
            </li>
            <li class="yekan">
                <span class="title">
                    رزلوشن عکس
                </span>
                <img src="<?= URL ?>image/sideArrow.gif" alt="no-pictire"/>
                <div class="options">
                    <ul>
                        <li class="yekan" data-id="21">
                            <span class="square"></span>
                            نمایش همه
                        </li>
                        <div class="horizontal-row"></div>
                        <li class="yekan" data-id="22">
                            <span class="square"></span>
                            1 مگا پیکسل
                        </li>
                        <li class="yekan" data-id="23">
                            <span class="square"></span>
                            2 مگا پیکسل
                        </li>
                        <li class="yekan" data-id="24">
                            <span class="square"></span>
                            3 مگا پیکسل
                        </li>
                    </ul>
                </div>
            </li>
            <li class="yekan">
                <span class="title">
                    حافظه داخلی
                </span>
                <img src="<?= URL ?>image/sideArrow.gif" alt="no-pictire"/>
                <div class="options">
                    <ul>
                        <li class="yekan" data-id="31">
                            <span class="square"></span>
                            نمایش همه
                        </li>
                        <div class="horizontal-row"></div>
                        <li class="yekan" data-id="32">
                            <span class="square"></span>
                            2 گیگا بایت
                        </li>
                        <li class="yekan" data-id="33">
                            <span class="square"></span>
                            4 گیگا بایت
                        </li>
                        <li class="yekan" data-id="34">
                            <span class="square"></span>
                            8 گیگا بایت
                        </li>
                        <li class="yekan" data-id="35">
                            <span class="square"></span>
                            16 گیگابایت بالاتر
                        </li>

                    </ul>
                </div>
            </li>
            <li class="yekan">
                <span class="title">
                    شبکه های ارتباطی
                </span>
                <img src="<?= URL ?>image/sideArrow.gif" alt="no-pictire"/>
                <div class="options">
                    <ul>
                        <li class="yekan" data-id="41">
                            <span class="square"></span>
                            نمایش همه
                        </li>
                        <div class="horizontal-row"></div>
                        <li class="yekan" data-id="42">
                            <span class="square"></span>
                            2G
                        </li>
                        <li class="yekan" data-id="43">
                            <span class="square"></span>
                            3G
                        </li>
                        <li class="yekan" data-id="44">
                            <span class="square"></span>
                            4G / lTG
                        </li>
                        <li class="yekan" data-id=45>
                            <span class="square"></span>
                            Hweb
                        </li>

                    </ul>
                </div>
            </li>
        </ul>

        <div class="horizontal-row2"></div>

        <div id="search">
            <input type="text" placeholder="جستجو..."/>
            <i class="search-icon"></i>
            <span class="exist">
                <span class="btn-checked"></span>
                <span class="yesno"></span>
            </span>
            <span class="just-show yekan">
                فقط نمایش کالاهای موجود
            </span>

            <span class="display-type">
              <span class="yekan text">حالت نمایش</span>
              <span class="type1"></span>
              <span class="type2"></span>
            </span>
        </div>

        <div id="sort">
            <span class="yekan fontSm">مرتب سازی براساس قیمت</span>
            <select>
                <option>قیمت</option>
                <option>پربازدیدترین</option>
                <option>جدیدترین</option>
                <option>پیشنهاد ویژه</option>
                <option>پرفروش ترین</option>
            </select>
            <select>
                <option>صعودی</option>
                <option>نزولی</option>
            </select>
            <span class="yekan fontSm second">
                تعداد نمایش
            </span>
            <select>
                <option>24</option>
                <option>36</option>
                <option>48</option>
            </select>

        </div>

        <div id="pagination">
            <span class="yekan next">صفحه بعد</span>
            <ul>
                <li class="yekan">2</li>
                <li class="yekan">1</li>
            </ul>
            <span class="yekan prev">صفحه قبل</span>
        </div>

        <div id="products">
            <ul>
                <li>
                    <a>
                        <div class="display-right">
                            <div class="image">
                                <img src="<?= URL ?>image/search-page/product1.jpg" alt="no-picture"/>
                            </div>
                            <div class="colors">
                                <span class="color" title="طلایی"></span>
                                <span class="color" title="نقره ای"></span>
                                <span class="color" title="سفید"></span>
                            </div>
                            <div class="stars">
                            <span class="stars-gray">
                                <span class="stars-red"></span>
                            </span>
                            </div>
                        </div>
                        <div class="display-left">
                            <div class="title yekan">
                                Apple iPhone 5s
                            </div>
                            <div class="discription">
                                <h5 class="yekan">توضیحات : </h5>
                                <p class="yekan fontSm">این گوشی خیلی خوبی هست دوستان بخریدش</p>
                            </div>
                            <div class="prices">
                                <p class="yekan price1">1,350,000 هزار تومان</p>
                                <p class="yekan price2">1,295,000 تومان</p>
                                <i></i>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <div class="display-right">
                            <div class="image">
                                <img src="<?= URL ?>image/search-page/product2.jpg" alt="no-picture"/>
                            </div>
                            <div class="colors">
                                <span class="color" title="طلایی"></span>
                                <span class="color" title="نقره ای"></span>
                                <span class="color" title="سفید"></span>
                            </div>
                            <div class="stars">
                            <span class="stars-gray">
                                <span class="stars-red"></span>
                            </span>
                            </div>
                        </div>
                        <div class="display-left">
                            <div class="title yekan">
                                Apple iPhone 5s
                            </div>
                            <div class="discription">
                                <h5 class="yekan">توضیحات : </h5>
                                <p class="yekan fontSm">این گوشی خیلی خوبی هست دوستان بخریدش</p>
                            </div>
                            <div class="prices">
                                <p class="yekan price1">1,350,000 هزار تومان</p>
                                <p class="yekan price2">1,295,000 تومان</p>
                                <i></i>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <div class="display-right">
                            <div class="image">
                                <img src="<?= URL ?>image/search-page/product3.jpg" alt="no-picture"/>
                            </div>
                            <div class="colors">
                                <span class="color" title="طلایی"></span>
                                <span class="color" title="نقره ای"></span>
                                <span class="color" title="سفید"></span>
                            </div>
                            <div class="stars">
                            <span class="stars-gray">
                                <span class="stars-red"></span>
                            </span>
                            </div>
                        </div>
                        <div class="display-left">
                            <div class="title yekan">
                                Apple iPhone 5s
                            </div>
                            <div class="discription">
                                <h5 class="yekan">توضیحات : </h5>
                                <p class="yekan fontSm">این گوشی خیلی خوبی هست دوستان بخریدش</p>
                            </div>
                            <div class="prices">
                                <p class="yekan price1">1,350,000 هزار تومان</p>
                                <p class="yekan price2">1,295,000 تومان</p>
                                <i></i>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <div class="display-right">
                            <div class="image">
                                <img src="<?= URL ?>image/search-page/product4.jpg" alt="no-picture"/>
                            </div>
                            <div class="colors">
                                <span class="color" title="طلایی"></span>
                                <span class="color" title="نقره ای"></span>
                                <span class="color" title="سفید"></span>
                            </div>
                            <div class="stars">
                            <span class="stars-gray">
                                <span class="stars-red"></span>
                            </span>
                            </div>
                        </div>
                        <div class="display-left">
                            <div class="title yekan">
                                Apple iPhone 5s
                            </div>
                            <div class="discription">
                                <h5 class="yekan">توضیحات : </h5>
                                <p class="yekan fontSm">این گوشی خیلی خوبی هست دوستان بخریدش</p>
                            </div>
                            <div class="prices">
                                <p class="yekan price1">1,350,000 هزار تومان</p>
                                <p class="yekan price2">1,295,000 تومان</p>
                                <i></i>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <div class="display-right">
                            <div class="image">
                                <img src="<?= URL ?>image/search-page/product3.jpg" alt="no-picture"/>
                            </div>
                            <div class="colors">
                                <span class="color" title="طلایی"></span>
                                <span class="color" title="نقره ای"></span>
                                <span class="color" title="سفید"></span>
                            </div>
                            <div class="stars">
                            <span class="stars-gray">
                                <span class="stars-red"></span>
                            </span>
                            </div>
                        </div>
                        <div class="display-left">
                            <div class="title yekan">
                                Apple iPhone 5s
                            </div>
                            <div class="discription">
                                <h5 class="yekan">توضیحات : </h5>
                                <p class="yekan fontSm">این گوشی خیلی خوبی هست دوستان بخریدش</p>
                            </div>
                            <div class="prices">
                                <p class="yekan price1">1,350,000 هزار تومان</p>
                                <p class="yekan price2">1,295,000 تومان</p>
                                <i></i>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

    </div>

</div>

