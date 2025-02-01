<style>
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
</style>

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
