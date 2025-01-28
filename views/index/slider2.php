<style>

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

</style>

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