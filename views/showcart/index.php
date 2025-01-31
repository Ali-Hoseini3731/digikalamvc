<style>

    #main .main-showCard {
        background-color: #fff;
        padding: 15px;
        margin-top: 10px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 1px 3px 4px rgba(0, 0, 0, .19);
    }

    #main .main-showCard .header::after {
        content: "";
        clear: both;
        display: table;
    }

    #main .main-showCard .header p {
        margin: 15px 0 0 0;
        font-size: 12.4pt;
        color: #515050;
        padding-right: 20px;
        float: right;
        position: relative;
    }

    #main .main-showCard .header p::before {
        content: "";
        display: block;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 4.5px 5px 4.5px 0;
        border-color: transparent #121314 transparent transparent;
        position: absolute;
        right: 0;
        top: 12px;
    }

    .btn-green {
        display: block;
        width: 160px;
        height: 35px;
        background-color: #20a70a;
        border-radius: 5px;
        text-align: center;
        line-height: 35px;
        color: #fff;
        font-size: 11pt;
        cursor: pointer;
    }

    .btn-blue {
        display: block;
        width: 160px;
        height: 35px;
        background-color: #2f2cf5;
        border-radius: 5px;
        text-align: center;
        line-height: 35px;
        color: #fff;
        font-size: 11pt;
        cursor: pointer;
    }

    #main .main-showCard .header .btn-green {
        float: left;
        margin-top: 8px;
    }

    #main .main-showCard .content {
        margin-top: 20px;
    }

    #main .main-showCard .content table {
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    #main .main-showCard .content table tr:first-child {
        background-color: #f9f9f9;
    }

    #main .main-showCard .content table tr td {
        text-align: center;
        font-size: 10pt;
        color: #5f5f5f;
        padding: 5px;
        border-right: 1px solid #cccccc;
        border-bottom: 1px solid #cccccc;

    }

    #main .main-showCard .content table tr td:first-child {
        border-right: none;
    }

    #main .main-showCard .content table tr:last-child td {
        border-bottom: none;
    }

    #main .main-showCard .content table tr:not(:first-child) td:first-child {
        text-align: right;
    }

    #main .main-showCard .content table tr td.first {
        width: 45%;
    }

    #main .main-showCard .content table tr td .right {
        width: 150px;
        height: 100%;
        float: right;
        text-align: center;
    }

    #main .main-showCard .content table tr td .right img {
        max-width: 130px;
        max-height: 130px;
        vertical-align: middle;
        border-radius: 4px;
        box-shadow: 0 0 3px rgba(0, 0, 0, .19);
    }

    #main .main-showCard .content table tr td .left {
        height: 100%;
        float: right;
    }

    #main .main-showCard .content table tr td .left p {
        margin: 5px 0;
        font-size: 11pt;
        color: #000;
    }

    #main .main-showCard .content table tr td .left .color span:first-child {
        color: #000;
    }

    #main .main-showCard .content table tr td .left .color .circle {
        display: inline-block;
        width: 15px;
        height: 15px;
        border-radius: 100%;
        background-color: #ff0000;
        margin-right: 10px;
        vertical-align: middle;
    }

    #main .main-showCard .content table tr td .left .color span:last-child {
        margin-right: 10px;
    }

    #main .main-showCard .content table tr td .left p:last-child {
        color: #5f5f5f;
        font-size: 10pt;
    }

    #main .main-showCard .content table tr td .select {
        display: block;
        width: 40px;
        height: 25px;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding-right: 10px;
        margin: auto;
        position: relative;
        cursor: pointer;
    }

    #main .main-showCard .content table tr td .select.active {
        border-radius: 4px 4px 0 0;
    }

    #main .main-showCard .content table tr td .select::before {
        content: '';
        display: block;
        width: 10px;
        height: 10px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position: -36px -462px;
        position: absolute;
        left: 7px;
        top: 5px;
    }

    #main .main-showCard .content table tr td .select.active::before {
        background-position: -36px -750px;
        top: 7px;
    }

    #main .main-showCard .content table tr td .options {
        display: none;
        width: 50px;
        background-color: #c6f2b9;
        border-width: 0 1px 1px 1px;
        border-style: solid;
        border-color: #ccc;
        border-radius: 0 0 4px 4px;
        overflow: hidden;
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
        z-index: 5;
    }

    #main .main-showCard .content table tr td .options .option {
        display: block;
        width: 100%;
        height: 20px;
        text-align: center;
        cursor: pointer;
    }

    #main .main-showCard .content table tr td .options .option:hover {
        background-color: #000000;
        color: #fff;
    }

    #main .main-showCard .content table tr td .remove {
        display: block;
        width: 40px;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        background-color: #ffbeb291;
    }

    #main .main-showCard .content table tr td .remove i {
        display: block;
        width: 20px;
        height: 20px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position: -108px -127px;
        cursor: pointer;
        margin: 50px auto 0 auto;
    }

    #main .main-showCard .price {
        width: 600px;
        border: 1px solid #22dd28;
        float: left;
        margin-top: 40px;
    }

    #main .main-showCard .price .total-price {
        border-bottom: 1px solid #0ddd0c;
        padding: 5px 0;
    }

    #main .main-showCard .price .total-price1 {
        font-size: 10pt;
        margin-right: 10px;
        color: #403d3d;
    }

    #main .main-showCard .price .total-price2 {
        font-size: 13.4pt;
        margin-right: 330px;
        color: #403d3d;
    }

    #main .main-showCard .price .total-price3 {
        font-size: 8.5pt;
        margin-right: 5px;
        color: #403d3d;
    }

    #main .main-showCard .price .pay {
        padding: 5px 0;
        background-color: #0f0f0f1a;
    }

    #main .main-showCard .price .pay1 {
        font-size: 10pt;
        margin-right: 10px;
        color: #11c71b;
    }

    #main .main-showCard .price .pay2 {
        font-size: 13.4pt;
        margin-right: 330px;
        color: #11c71b;
    }

    #main .main-showCard .price .pay3 {
        font-size: 8.5pt;
        margin-right: 5px;
        color: #11c71b;
    }

    #main .main-showCard .next-prev {
        width: 100%;
        float: right;
        margin-top: 30px;
    }

    .btn-gray {
        display: block;
        width: 160px;
        height: 35px;
        background-color: #a2a2a2;
        border-radius: 5px;
        text-align: center;
        line-height: 35px;
        color: #fff;
        font-size: 11pt;
        cursor: pointer;
    }

    #main .main-showCard .next-prev .btn-gray {
        float: right;
    }

    #main .main-showCard .next-prev .btn-green {
        float: left;
    }

    #main .main-showCard .next-prev .text {
        display: block;
        width: 420px;
        font-size: 10pt;
        float: left;
        margin-left: 20px;
    }
</style>


<div id="main">
    <div class="main-showCard">
        <div class="header">
            <p class="yekan">سبد خرید شما در دیچی کالا</p>
            <span class="yekan btn-green">خرید خود را نهایی کنید</span>
        </div>
        <div class="content">
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td class="yekan">شرح محصول</td>
                    <td class="yekan">تعداد</td>
                    <td class="yekan">قیمت واحد</td>
                    <td class="yekan">قیمت کل</td>
                </tr>
                <tr>
                    <td class="yekan first">
                        <div class="right">
                            <img alt="no-picture" src="<?= URL ?>image/showCard-page/schwan-903-steering-wheel-lock.jpg"/>
                        </div>
                        <div class="left">
                            <p class="yekan">قفل فرمان خودرو مدل شان 890</p>
                            <div class="color">
                                <span class="yekan">زنگ :</span>
                                <span class="circle"></span>
                                <span class="yekan">قرمز</span>
                            </div>
                            <p class="yekan">گارانتی : گارانی اصالت و سلامت فیزیکی</p>
                        </div>
                    </td>
                    <td class="yekan" style="position: relative">
                         <span class="yekan select">
                             0
                         </span>
                        <span class="options">
                               <span class="option">1</span>
                               <span class="option">2</span>
                               <span class="option">3</span>
                        </span>
                    </td>
                    <td class="yekan">
                        <strong>60,000</strong>
                        تومان
                    </td>
                    <td class="yekan" style="position: relative">
                        <strong>69,000</strong>
                        تومان
                        <span class="remove">
                            <i></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="yekan first">
                        <div class="right">
                            <img alt="no-picture" src="<?= URL ?>image/showCard-page/schwan-903-steering-wheel-lock.jpg"/>
                        </div>
                        <div class="left">
                            <p class="yekan">قفل فرمان خودرو مدل شان 890</p>
                            <div class="color">
                                <span class="yekan">زنگ :</span>
                                <span class="circle"></span>
                                <span class="yekan">قرمز</span>
                            </div>
                            <p class="yekan">گارانتی : گارانی اصالت و سلامت فیزیکی</p>
                        </div>
                    </td>
                    <td class="yekan" style="position: relative">
                         <span class="yekan select">
                             0
                         </span>
                        <span class="options">
                               <span class="option">1</span>
                               <span class="option">2</span>
                               <span class="option">3</span>
                        </span>
                    </td>
                    <td class="yekan">
                        <strong>60,000</strong>
                        تومان
                    </td>
                    <td class="yekan" style="position: relative">
                        <strong>69,000</strong>
                        تومان
                        <span class="remove">
                            <i></i>
                        </span>
                    </td>
                </tr>
            </table>
        </div>
        <div class="price">
            <div class="total-price">
                <span class="yekan total-price1">جمع کل خرید شما :</span>
                <span class="yekan total-price2">140,000</span>
                <span class="yekan total-price3">تومان</span>
            </div>
            <div class="pay">
                <span class="yekan pay1 ">مبلغ قابل پرداخت :</span>
                <span class="yekan pay2 ">140,000</span>
                <span class="yekan pay3 ">تومان</span>
            </div>
        </div>
        <div class="next-prev">
            <span class="yekan btn-gray">بازگشت به صفحه اصلی</span>
            <span class="yekan btn-green">انتخاب شیوه ارسال کالاها ></span>
            <span  class="yekan text">براساس مکان تحویل سفارش . امکان افزوده شدن هزینه ارسال به این مبلغ وجود دارد</span>
        </div>
    </div>
</div>

<script language="JavaScript" src="<?= URL ?>js/jquery-3.0.0.min.js"></script>
<script>
    $("#main .main-showCard .content table tr td > .select").click(function () {
        $(this).toggleClass("active");
        $(this).parents("td").find(".options").slideToggle();
    });
    $("#main .main-showCard .content table tr td > .options .option").click(function () {
            getText = $(this).text();
            $(this).parents("td").find(">.select").text(getText);
            $(this).parents(".options").slideUp();
            $(this).parents("td").find("> .select").removeClass("active");
        }
    );
</script>

