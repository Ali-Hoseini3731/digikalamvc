<style>

    #main .main-showCard4 {
        background-color: #fff;
        margin-top: 10px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 1px 3px 4px rgba(0, 0, 0, .19);
        padding-bottom: 20px;
    }

    #main .main-showCard4 .header {
        padding: 5px;
        background-color: #f2f9f3;
    }

    #main .main-showCard4 .header .order-steps {
        padding-right: 150px;
        height: 80px;
    }

    #main .main-showCard4 .header .order-steps::after {
        content: '';
        clear: both;
        display: table;
    }

    #main .main-showCard4 .header .order-steps .dash {
        float: right;
    }

    #main .main-showCard4 .header .order-steps .dash span {
        display: inline-block;
        width: 11px;
        height: 3px;
        background-color: #0000b6;
        margin-right: 1px;
        vertical-align: 1px;
    }

    #main .main-showCard4 .header .subTable .order-steps ul {
        padding: 0;
        margin: 0;
        float: right;
    }

    #main .main-showCard4 .header .order-steps ul li {
        list-style-type: none;
        float: right;
        position: relative;
    }

    #main .main-showCard4 .header .order-steps ul li .circle {
        display: block;
        width: 18px;
        height: 18px;
        float: right;
        border: 3px solid #ccc;
        border-radius: 100%;
        margin: 0 10px;
        cursor: pointer;
    }

    #main .main-showCard4 .header .order-steps ul li.active .circle {
        border-color: #2e2bff;
        background: #2e2bff url("<?= URL ?>/image/slices.png") no-repeat -809px -476px;
    }

    #main .main-showCard4 .header .order-steps ul li .line {
        display: block;
        width: 180px;
        height: 3px;
        background-color: #ccc;
        float: right;
        margin-top: 11px;
    }

    #main .main-showCard4 .header .order-steps ul li.active .line {
        background-color: #2e2bff;
    }

    #main .main-showCard4 .header .order-steps ul li .text {
        display: block;
        width: 128px;
        font-size: 11pt;
        color: #9f9f9f;
        position: absolute;
        right: -28px;
        top: 29px;
    }

    #main .main-showCard4 .header .order-steps ul li.active .text {
        color: #2e2bff;
    }

    #main .main-showCard4 .content {
        padding: 0 15px;
    }

    #main .main-showCard4 .content .head {
        margin: 30px 0;
        float: right;
        width: 100%;
    }

    #main .main-showCard4 .content .head p {
        margin: 0;
        padding-right: 20px;
        position: relative;
        color: #2f2f2f;
        font-size: 12.4pt;
    }

    #main .main-showCard4 .content .head p::before {
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

    #main .main-showCard4 .content table {
        border: 1px solid #eee;
        width: 100%;
    }

    #main .main-showCard4 .content table tr td {
        padding: 5px 10px;
    }

    #main .main-showCard4 .content table tr td:first-child span:first-child {
        font-size: 11pt;
    }

    #main .main-showCard4 .content table tr td:first-child span:last-child {
        font-size: 10pt;
        color: #515151;
    }

    #main .main-showCard4 .content table tr td input {
        width: 200px;
        height: 30px;
        border-radius: 5px;
        font-size: 9pt;
        border: 1px solid #aaa;
        margin-top: 8px;
    }

    #main .main-showCard4 .content table tr td:last-child .btn-blue, .btn-green {
        width: 130px;
        margin-top: 8px;
    }

    #main .main-showCard4 .content .gift {
        margin: 30px 0;
        float: right;
        width: 100%;
    }

    #main .main-showCard4 .content .gift p {
        margin: 0;
        padding-right: 30px;
        position: relative;
        color: #2f2f2f;
        font-size: 12.4pt;
    }

    #main .main-showCard4 .content .gift p::before {
        content: "";
        display: block;
        width: 45px;
        height: 45px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position: -798px -540px;
        position: absolute;
        right: -13px;
        top: -8px;
        transform: rotate(20deg) scale(0.5);
    }

    #main .main-showCard4 .content .pay-cost {
        border: 1px solid #eee;
        margin-top: 30px;
        border-radius: 4px;
        padding: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .19);
        background-color: #96f09630;
    }

    #main .main-showCard4 .content .pay-cost .text {
        font-size: 12.4pt;
    }

    #main .main-showCard4 .content .pay-cost .tumon {
        float: left;
        font-size: 10pt;
        color: #017901;
        margin-left: 5px;
        margin-top: 4px;
    }

    #main .main-showCard4 .content .pay-cost .num {
        float: left;
        margin-left: 10px;
        font-size: 13.4pt;
        color: #017901;
    }

    #main .main-showCard4 .content table.pay {
        width: 100%;
        border: 1px solid #eee;
        margin-top: 10px;
    }

    #main .main-showCard4 .content table.pay tr td {
        padding: 10px;
    }

    #main .main-showCard4 .content table.pay tr td:first-child {
        border-left: 1px solid #eee;
        width: 60px;
        text-align: center;
    }

    span.circle {
        display: block;
        width: 16px;
        height: 16px;
        border: 1px solid #cccccc;
        border-radius: 100%;
        margin: auto;
        cursor: pointer;
    }

    #main .main-showCard4 .content table.pay.active {
        border: 1px solid rgba(129, 251, 138, 0.29);
    }

    #main .main-showCard4 .content table.pay.active tr td:first-child {
        border: 1px solid rgba(129, 251, 138, 0.29);
    }

    #main .main-showCard4 .content table.pay.active tr td:first-child {
        background-color: #68f4191f;
    }

    #main .main-showCard4 .content table.pay.active tr td:first-child span.circle {
        border: none;
        background-color: #2e2bff;
    }

    #main .main-showCard4 .content table.pay.active tr td:first-child span.circle::before {
        content: '';
        display: block;
        width: 4px;
        height: 4px;
        border-radius: 100%;
        background-color: #fff;
        margin: 0 auto;
        position: relative;
        top: 6px;
    }

    #main .main-showCard4 .content table.pay tr td.tow {
        width: 700px;
    }

    #main .main-showCard4 .content table.pay tr td.tow .title {
        font-size: 11pt;
        color: #646262;
        padding: 10px;
    }

    #main .main-showCard4 .content table.pay tr td.tow .row {
        padding: 10px;
    }

    #main .main-showCard4 .content table.pay tr td.tow .row .circle {
        display: inline-block;
        margin-left: 10px;
        vertical-align: middle;
    }

    #main .main-showCard4 .content table.pay.active tr td.tow .row span.circle.active {
        border: none;
        background-color: #2e2bff;
    }

    #main .main-showCard4 .content table.pay.active tr td.tow .row span.circle.active::before {
        content: '';
        display: block;
        width: 4px;
        height: 4px;
        border-radius: 100%;
        background-color: #fff;
        margin: 0 auto;
        position: relative;
        top: 6px;
    }

    #main .main-showCard4 .content table.pay tr td.tow .row .text {
        font-size: 10pt;
        margin-left: 50px;
    }

    #main .main-showCard4 .content table.pay tr td:last-child img {
        display: block;
        margin: auto;
        width: 300px;
        height: 130px;
    }

    #main .main-showCard4 .content table.pay tr td:last-child .text {
        font-size: 10pt;
        padding-bottom: 1px;
        border-bottom: 1px dotted;
        display: block;
        width: 310px;
        margin: auto;
        color: #6f6f6f;
    }

    #main .main-showCard4 .content table.type-pay {
        margin-top: 20px;
    }

    #main .main-showCard4 .content table.type-pay tr td:last-child span:first-child {
        font-size: 11pt;
        padding-right: 10px;
    }

    #main .main-showCard4 .content table.type-pay tr td:last-child span:last-child {
        font-size: 10pt;
        color: #505051;
    }

    #main .main-showCard4 .content .content-bottom {
        margin-top: 35px;
        width: 100%;
        float: right;
    }

    #main .main-showCard4 .content .content-bottom .btn-green {
        float: left;
        width: 160px;
        margin-top: -35px;
    }

    #main .main-showCard4 .content .content-bottom .btn-gray {
        width: 80px;
    }


</style>

<div id="main">
    <div class="main-showCard4">
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
                    <li class="active">
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
            <div class="head">
                <p class="yekan">کد تخفیف</p>
            </div>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td class="yekan">
                        <span class="yekan">کد تخفیف دیجی کالا دارم</span><br>
                        <span class="yekan">
                        اگر مایل هستید از کد تخفیف دیجی کالا استفاده کنید ، کافی است کد را وارد کنید و انتخاب دکمه ثبت مبلغ آن از هزینه قابل پرداخت کسر می شود.
                        </span>
                    </td>
                    <td class="yekan">
                        <input placeholder="کد تخفیف را وارد کنید ..." type="text">
                    </td>
                    <td class="yekan">
                        <span class="btn-blue">ثبت کد تخفیف</span>
                    </td>
                </tr>
            </table>
            <div class="gift">
                <p class="yekan">کارت هدیه</p>
            </div>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td class="yekan">
                        <span class="yekan">کد هدیه دیجی کالا دارم</span><br>
                        <span class="yekan">
                        اگر مایل هستید از کارت هدیه دیجی کالا استفاده کنید ، کافی است کد را وارد کنید و انتخاب دکمه ثبت مبلغ آن از هزینه قابل پرداخت کسر می شود.
                        </span>
                    </td>
                    <td class="yekan">
                        <input placeholder="کد هدیه را وارد کنید ..." type="text">
                    </td>
                    <td class="yekan">
                        <span class="btn-green">ثبت کارت هدیه</span>
                    </td>
                </tr>
            </table>
            <div class="pay-cost">
                <span class="yekan text">مبلغ قابل پرداخت</span>
                <span class="yekan tumon">تومان</span>
                <span class="yekan num">178,0000</span>
            </div>
            <div class="head">
                <p class="yekan">شیوه پرداخت</p>
            </div>
            <table cellpadding="0" cellspacing="0" class="pay">
                <tr>
                    <td><span class="circle"></span></td>
                    <td class="tow">
                        <span class="yekan title">پرداخت اینترنیت</span><br>
                        <div class="row">
                            <span class="circle"></span>
                            <span class="yekan text">درگاه پرداخت اینترنتی بانک سامان</span>
                            <span class="circle"></span>
                            <span class="yekan text">درگاه پرداخت اینترنتی بانک پارسیان</span>
                        </div>

                    </td>
                    <td class="yekak">
                        <img alt="nopictur" src="<?= URL ?>image/showCard-page/pay.jpg"/>
                        <span class="yekan text">با پرداخت از درگاه بانک  پارسیان برنده جوایز ارزنده آن باشید</span>
                    </td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" class="pay type-pay">
                <tr>
                    <td><span class="circle"></span></td>
                    <td>
                        <span class="yekan">کارت به کارت</span><br>
                        <span class="yekan">شما میتوانید وجه سفارش خود را بصورت انتقال وجه  کارت به کارت پرداخت نموده و حداکثر تا24 ساعت پس از سفارش اطلاعات آن را ثبت نمایید </span>
                    </td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" class="pay type-pay">
                <tr>
                    <td><span class="circle"></span></td>
                    <td>
                        <span class="yekan">واریز به حساب</span><br>
                        <span class="yekan">شما میتوانید وجه سفارش خود را از طریقه مراجعه به شعب بانک به حساب شرکت مورد نظر بریزید و حدکثر تا 24 ساعت پس از سفارش اطلاعات آن را ثبت کنید</span>
                    </td>
                </tr>
            </table>
            <div class="content-bottom">
                <span class="yekan btn-gray">بازگشت</span>
                <span class="yekan btn-green">پرداخت و تکمیل  خرید</span>
            </div>
        </div>
    </div>
</div>


<script>

    $("#main .main-showCard4 .header .order-steps ul li").click(function () {
        $(this).toggleClass("active");
    });
    $("#main .main-showCard4 .content table.pay tr td.tow .row span.circle").click(function () {
        $(this).parents("table").toggleClass("active");
        $(this).toggleClass("active");
    });
    $("#main .main-showCard4 .content table.type-pay tr td span.circle").click(function () {
        $(this).parents("table").toggleClass("active");
        $(this).toggleClass("active");
    });


</script>

