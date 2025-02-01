
<style>
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

</style>

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
