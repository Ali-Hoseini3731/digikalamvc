<style>

    #main .main-showCard3 {
        background-color: #fff;
        margin-top: 10px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 1px 3px 4px rgba(0, 0, 0, .19);
        padding-bottom: 20px;
    }

    #main .main-showCard3 .header {
        padding: 5px;
        background-color: #f2f9f3;
    }

    #main .main-showCard3 .header .order-steps {
        padding-right: 150px;
        height: 80px;
    }

    #main .main-showCard3 .header .order-steps::after {
        content: '';
        clear: both;
        display: table;
    }

    #main .main-showCard3 .header .order-steps .dash {
        float: right;
    }

    #main .main-showCard3 .header .order-steps .dash span {
        display: inline-block;
        width: 11px;
        height: 3px;
        background-color: #0000b6;
        margin-right: 1px;
        vertical-align: 1px;
    }

    #main .main-showCard3 .header .subTable .order-steps ul {
        padding: 0;
        margin: 0;
        float: right;
    }

    #main .main-showCard3 .header .order-steps ul li {
        list-style-type: none;
        float: right;
        position: relative;
    }

    #main .main-showCard3 .header .order-steps ul li .circle {
        display: block;
        width: 18px;
        height: 18px;
        float: right;
        border: 3px solid #ccc;
        border-radius: 100%;
        margin: 0 10px;
        cursor: pointer;
    }

    #main .main-showCard3 .header .order-steps ul li.active .circle {
        border-color: #2e2bff;
        background: #2e2bff url("<?= URL ?>/image/slices.png") no-repeat -809px -476px;
    }

    #main .main-showCard3 .header .order-steps ul li .line {
        display: block;
        width: 180px;
        height: 3px;
        background-color: #ccc;
        float: right;
        margin-top: 11px;
    }

    #main .main-showCard3 .header .order-steps ul li.active .line {
        background-color: #2e2bff;
    }

    #main .main-showCard3 .header .order-steps ul li .text {
        display: block;
        width: 128px;
        font-size: 11pt;
        color: #9f9f9f;
        position: absolute;
        right: -28px;
        top: 29px;
    }

    #main .main-showCard3 .header .order-steps ul li.active .text {
        color: #2e2bff;
    }


    #main .main-showCard3 .header .btn-green {
        float: left;
        margin-top: 8px;
    }

    #main .main-showCard3 .content {
        margin-top: 60px;
        padding: 0 15px;
    }

    #main .main-showCard3 .content::after {
        content: '';
        clear: both;
        display: table;
    }

    #main .main-showCard3 .content .content-top {
        float: left;
        margin-bottom: 20px;
    }

    #main .main-showCard3 .content .content-top .btn-blue {
        width: 200px;
        position: relative;
    }

    #main .main-showCard3 .content .content-top .btn-blue i {
        display: block;
        width: 20px;
        height: 16px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position: -32px -564px;
        position: absolute;
        left: 8px;
        top: 12px;
    }

    #main .main-showCard3 .content .content-top p {
        margin: 0;
        font-size: 10pt;
        text-align: center;
    }

    #main .main-showCard3 .content table {
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    #main .main-showCard3 .content table tr:first-child {
        background-color: #f9f9f9;
    }

    #main .main-showCard3 .content table tr td {
        text-align: center;
        font-size: 10pt;
        color: #5f5f5f;
        padding: 5px;
        border-right: 1px solid #cccccc;
        border-bottom: 1px solid #cccccc;

    }

    #main .main-showCard3 .content table tr td:first-child {
        border-right: none;
    }

    #main .main-showCard3 .content table tr:last-child td {
        border-bottom: none;
    }

    #main .main-showCard3 .content table tr:not(:first-child) td:first-child {
        text-align: right;
    }

    #main .main-showCard3 .content table tr td.first {
        width: 45%;
    }

    #main .main-showCard3 .content table tr td .right {
        width: 150px;
        height: 100%;
        float: right;
        text-align: center;
    }

    #main .main-showCard3 .content table tr td .right img {
        max-width: 130px;
        max-height: 130px;
        vertical-align: middle;
        border-radius: 4px;
        box-shadow: 0 0 3px rgba(0, 0, 0, .19);
    }

    #main .main-showCard3 .content table tr td .left {
        height: 100%;
        float: right;
    }

    #main .main-showCard3 .content table tr td .left p {
        margin: 5px 0;
        font-size: 11pt;
        color: #000;
    }

    #main .main-showCard3 .content table tr td .left .color span:first-child {
        color: #000;
    }

    #main .main-showCard3 .content table tr td .left .color .circle {
        display: inline-block;
        width: 15px;
        height: 15px;
        border-radius: 100%;
        background-color: #ff0000;
        margin-right: 10px;
        vertical-align: middle;
    }

    #main .main-showCard3 .content table tr td .left .color span:last-child {
        margin-right: 10px;
    }

    #main .main-showCard3 .content table tr td .left p:last-child {
        color: #5f5f5f;
        font-size: 10pt;
    }

    #main .main-showCard3 .content table tr td .remove {
        display: block;
        width: 40px;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        background-color: #b2f8ff91;
    }

    #main .main-showCard3 .content table tr td .remove i {
        display: block;
        width: 20px;
        height: 20px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position: -810px -410px;
        cursor: pointer;
        margin: 50px auto 0 auto;
    }

    #main .main-showCard3 .content .head {
        margin: 30px 0;
        float: right;
        width: 100%;
    }

    #main .main-showCard3 .content .head p {
        margin: 0;
        padding-right: 20px;
        position: relative;
        color: #2f2f2f;
        font-size: 12.4pt;
    }

    #main .main-showCard3 .content .head p::before {
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

    #main .main-showCard3 .content .price {
        width: 1168px;
        border: 1px solid #22dd28;
        float: left;
    }

    #main .main-showCard3 .content .price .total-price {
        border-bottom: 1px solid #0ddd0c;
        padding: 15px 0;
    }

    #main .main-showCard3 .content .price .total-price1 {
        font-size: 10pt;
        margin-right: 10px;
        color: #5a5757;
    }

    #main .main-showCard3 .content .price .total-price2 {
        font-size: 8.5pt;
        float: left;
        color: #403d3d;
        margin-left: 10px;
        margin-top: 5px;
    }

    #main .main-showCard3 .content .price .total-price3 {
        font-size: 13.4pt;
        float: left;
        color: #403d3d;
        margin-left: 10px;
    }

    #main .main-showCard3 .content .price .pay {
        border-bottom: 1px solid #0ddd0c;
        padding: 15px 0;
    }

    #main .main-showCard3 .content .price .pay1 {
        font-size: 10pt;
        margin-right: 10px;
        color: #11c71b;
    }

    #main .main-showCard3 .content .price .pay2 {
        font-size: 8.5pt;
        float: left;
        margin-left: 10px;
        margin-top: 5px;
        color: #11c71b;
    }

    #main .main-showCard3 .content .price .pay3 {
        font-size: 13.4pt;
        float: left;
        margin-left: 10px;
        color: #11c71b;
    }

    #main .main-showCard3 .content .price .discount {
        border-bottom: 1px solid #0ddd0c;
        padding: 15px 0;
        background-color: #e8bfbf3d;
    }

    #main .main-showCard3 .content .price .discount1 {
        font-size: 10pt;
        margin-right: 10px;
        color: #c74a31;
    }

    #main .main-showCard3 .content .price .discount2 {
        font-size: 8.5pt;
        float: left;
        margin-left: 10px;
        margin-top: 5px;
        color: #c74a31;
    }

    #main .main-showCard3 .content .price .discount3 {
        font-size: 13.4pt;
        float: left;
        margin-left: 10px;
        color: #c74a31;
    }


    #main .main-showCard3 .content .price .total-pay {
        padding: 15px 0;
        background-color: #c4f7a170;
    }

    #main .main-showCard3 .content .price .total-pay1 {
        font-size: 13.4pt;
        margin-right: 10px;
        color: #000;
    }

    #main .main-showCard3 .content .price .total-pay2 {
        font-size: 8.5pt;
        float: left;
        margin-left: 10px;
        margin-top: 8px;
        color: #000;
    }

    #main .main-showCard3 .content .price .total-pay3 {
        font-size: 16pt;
        float: left;
        margin-left: 10px;
        color: #000;
    }

    #main .main-showCard3 .content table.send-information {
        width: 100%;
        border: 1px solid #eee;
        padding: 0;
    }

    #main .main-showCard3 .content table.send-information tr {
        background-color: #fff;
    }

    #main .main-showCard3 .content table.send-information tr td {
        border-bottom: 1px solid #eee;
        padding: 10px;
    }

    #main .main-showCard3 .content table.send-information tr td:first-child {
        width: 30px;
    }

    #main .main-showCard3 .content table.send-information tr td:first-child i {
        display: block;
        width: 30px;
        height: 30px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
    }

    #main .main-showCard3 .content table.send-information tr td:first-child i.place {
        background-position: -804px -202px;
    }

    #main .main-showCard3 .content table.send-information tr td:first-child i.bus {
        background-position: -804px -242px;
    }

    #main .main-showCard3 .content table.send-information tr td:last-child {
        text-align: right;
    }

    #main .main-showCard3 .content table.send-information tr td:last-child span {
        color: #333333;
        font-size: 10.5pt;
    }

    #main .main-showCard3 .content table.send-information tr td:last-child strong {
        color: #1e9e25;
        font-size: 11pt;
        margin: 0 5px;
        border-bottom: 1px dotted #129e25;
    }

    #main .main-showCard3 .content .edit {
        width: 100%;
        float: right;
        margin-top: 20px;
    }

    #main .main-showCard3 .content .edit .btn-green {
        float: left;
        width: 100px;
    }

    #main .main-showCard3 .content .content-bottom {
        float: right;
        width: 100%;
        margin-top: 50px;
        position: relative;
        padding-bottom: 20px;
    }

    #main .main-showCard3 .content .content-bottom .btn-gray {
        float: right;
        width: 100px;
    }

    #main .main-showCard3 .content .content-bottom .btn-blue {
        width: 200px;
        position: relative;
        float: left;
    }

    #main .main-showCard3 .content .content-bottom .btn-blue i {
        display: block;
        width: 20px;
        height: 16px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position-x: 0%;
        background-position-y: 0%;
        background-position: -32px -564px;
        position: absolute;
        left: 8px;
        top: 10px;
    }

    #main .main-showCard3 .content .content-bottom .text {
        font-size: 10pt;
        float: left;
        position: absolute;
        left: 10px;
        top: 35px;
    }


</style>

<div id="main">
    <div class="main-showCard3">
        <div class="header">
            <div class="order-steps">
                <div class="dash">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul>
                    <li class="active">
                        <span class="circle"></span>
                        <span class="line"></span>
                        <span class="yekan text">ورود به دیجی کالا</span>
                    </li>
                    <li class="active">
                        <span class="circle"></span>
                        <span class="line"></span>
                        <span class="yekan text">اطلاعات ارسال سفارش</span>
                    </li>
                    <li>
                        <span class="circle"></span>
                        <span class="line"></span>
                        <span class="yekan text">بازبینی سفارش</span>
                    </li>
                    <li>
                        <span class="circle"></span>
                        <span class="yekan text">اطلاعات پرداخت</span>
                    </li>
                </ul>
                <div class="dash">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-top">
                <span class="yekan btn-blue"><i></i>ثبت اطلاعات و ادامه خرید</span>
                <p class="yekan">مرحله بعد: تکمیل اطلاعات خرید</p>
            </div>
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
                        <strong class="yekan fontLg">3</strong>
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
            <div class="head">
                <p class="yekan">خلاصه صورت حساب</p>
            </div>
            <div class="price">
                <div class="total-price">
                    <span class="yekan total-price1">جمع کل خرید شما :</span>
                    <span class="yekan total-price2">تومان</span>
                    <span class="yekan total-price3">140,000</span>
                </div>
                <div class="pay">
                    <span class="yekan pay1 ">هزینه ارسال ، بیمه و بسته بندی سفارش :</span>
                    <span class="yekan pay2 ">تومان</span>
                    <span class="yekan pay3 ">55,000</span>
                </div>
                <div class="discount">
                    <span class="yekan discount1 ">جمع کل تخفیف :</span>
                    <span class="yekan discount2 ">تومان</span>
                    <span class="yekan discount3 ">0</span>
                </div>
                <div class="total-pay">
                    <span class="yekan total-pay1 ">جمع کل قابل پرداخت :</span>
                    <span class="yekan total-pay2 ">تومان</span>
                    <span class="yekan total-pay3 ">69,000</span>
                </div>
            </div>
            <div class="head">
                <p class="yekan">اطلاعات ارسال سفارش </p>
            </div>
            <table class="send-information" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="yekan">
                        <i class="place"></i>
                    </td>
                    <td class="yekan">
                        <span class="yekan">این سفارش به</span>
                        <strong class="yekan">علی حسینی</strong>
                        <span class="yekan">به ادرس</span>
                        <strong class="yekan">خراسان جنوبی ، سربیشه ، خیابان ابوطالب ، کوچه 17</strong>
                        <span class="yekan">شماره تماس</span>
                        <strong class="yekan">09105572418</strong>
                        <span class="yekan">ارسال می شود</span>
                    </td>
                </tr>
                <tr>
                    <td class="yekan"><i class="bus"></i></td>
                    <td class="yekan">
                        <span class="yekan">این سفارش از طریق پست پیشتاز (هزینه ارسال : طبق تعرفه پست)با هزنیه</span>
                        <strong class="yekan">46,000 تومان</strong>
                        <span class="yekan">به شما تحویل داده خواهد شد</span>
                    </td>
                </tr>
            </table>
            <div class="edit">
                <span class="btn-green">ویرایش</span>
            </div>
            <div class="content-bottom">
                <span class="btn-gray">بازگشت</span>
                <span class="btn-blue"><i></i>ثبت اطلاعات و ادامه خرید</span>
                <span class="yekan text">مرحله بعد تکمیل اطلاعات پرداخت</span>
            </div>
        </div>
    </div>
</div>

<script>

    $("#main .main-showCard3 .header .order-steps ul li").click(function () {
        $(this).toggleClass("active");
    });

    $("#main .main-showCard3 .content table tr td > .select").click(function () {
        $(this).toggleClass("active");
        $(this).parents("td").find(".options").slideToggle();
    });
    $("#main .main-showCard3 .content table tr td > .options .option").click(function () {
            getText = $(this).text();
            $(this).parents("td").find(">.select").text(getText);
            $(this).parents(".options").slideUp();
            $(this).parents("td").find("> .select").removeClass("active");
        }
    );
</script>

