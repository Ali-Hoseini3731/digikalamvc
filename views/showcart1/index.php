<style>

    #main .main-showCard1 {
        background-color: #fff;
        margin-top: 10px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 1px 3px 4px rgba(0, 0, 0, .19);
    }

    #main .main-showCard1 .header {
        padding: 5px;
        background-color: #f2f9f3;
    }

    #main .main-showCard1 .header .order-steps {
        padding-right: 150px;
        height: 80px;
    }

    #main .main-showCard1 .header .order-steps::after {
        content: '';
        clear: both;
        display: table;
    }

    #main .main-showCard1 .header .order-steps .dash {
        float: right;
    }

    #main .main-showCard1 .header .order-steps .dash span {
        display: inline-block;
        width: 11px;
        height: 3px;
        background-color: #0000b6;
        margin-right: 1px;
        vertical-align: 1px;
    }

    #main .main-showCard1 .header .subTable .order-steps ul {
        padding: 0;
        margin: 0;
        float: right;
    }

    #main .main-showCard1 .header .order-steps ul li {
        list-style-type: none;
        float: right;
        position: relative;
    }

    #main .main-showCard1 .header .order-steps ul li .circle {
        display: block;
        width: 18px;
        height: 18px;
        float: right;
        border: 3px solid #ccc;
        border-radius: 100%;
        margin: 0 10px;
        cursor: pointer;
    }

    #main .main-showCard1 .header .order-steps ul li.active .circle {
        border-color: #2e2bff;
        background: #2e2bff url("<?= URL ?>/image/slices.png") no-repeat -809px -476px;
    }

    #main .main-showCard1 .header .order-steps ul li .line {
        display: block;
        width: 180px;
        height: 3px;
        background-color: #ccc;
        float: right;
        margin-top: 11px;
    }

    #main .main-showCard1 .header .order-steps ul li.active .line {
        background-color: #2e2bff;
    }

    #main .main-showCard1 .header .order-steps ul li .text {
        display: block;
        width: 128px;
        font-size: 11pt;
        color: #9f9f9f;
        position: absolute;
        right: -28px;
        top: 29px;
    }

    #main .main-showCard1 .header .order-steps ul li.active .text {
        color: #2e2bff;
    }

    #main .main-showCard1 .content {
        background-color: #FFFFFF;
        padding: 40px 15px;
    }

    #main .main-showCard1 .content::after {
        content: "";
        clear: both;
        display: table;
    }

    #main .main-showCard1 .content .right {
        width: 550px;
        float: right;
        border-left: 1px solid #e4e4e4;
        text-align: center;
        padding: 10px;
    }

    #main .main-showCard1 .content .right i {
        display: block;
        width: 45px;
        height: 55px;
        margin: auto;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position: -796px -19px;
    }

    #main .main-showCard1 .content .right .one {
        text-align: center;
        margin: 10px 0 0 0;
        font-size: 11pt;
        font-weight: bold;
        color: #3c3c3c;
    }

    #main .main-showCard1 .content .right .tow {
        text-align: center;
        font-size: 10pt;
        margin: 0;
        color: #797979;
    }

    #main .main-showCard1 .content .right .btn-blue {
        width: 150px;
        margin: 10px auto;
    }


    #main .main-showCard1 .content .left {
        width: 550px;
        float: right;
        margin-right: 25px;
        padding: 10px;
    }

    #main .main-showCard1 .content .left i {
        display: block;
        width: 50px;
        height: 55px;
        margin: auto;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position: -796px -90px;
    }

    #main .main-showCard1 .content .left .one {
        text-align: center;
        margin: 10px 0 0 0;
        font-size: 11pt;
        font-weight: bold;
        color: #3c3c3c;
    }

    #main .main-showCard1 .content .left .tow {
        text-align: center;
        font-size: 10pt;
        margin: 0;
        color: #797979;
    }

    #main .main-showCard1 .content .left .btn-green {
        width: 150px;
        margin: 15px auto;
    }

    #main .main-showCard1 .content .left .three {
        font-size: 11pt;
        color: #626161;
        text-align: center;
    }

</style>

<div id="main">
    <div class="main-showCard1">
        <div class="header">
            <div class="order-steps">
                <div class="dash">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul>
                    <li >
                        <span class="circle"></span>
                        <span class="line"></span>
                        <span class="yekan text">ورود به دیجی کالا</span>
                    </li>
                    <li>
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
            <div class="right">
                <i></i>
                <p class="yekan one">عضو دیجی کالا هستید ؟</p>
                <p class="yekan tow">برای تکمیل فرایند خرید خود وارد شوید</p>
                <span class="yekan btn-blue">ورود به دیجی کالا</span>
            </div>
            <div class="left">
                <i></i>
                <p class="yekan one">تازه وارد هستید</p>
                <p class="yekan tow">برای تکمیل فرایند خرید خود ثبت نام کنید</p>
                <span class="yekan btn-green">ثبت نام در دیجی کالا</span>
                <p class="yekan three">
                    با عضویت در دیجی کالا تجربه متفاوتی از خرید داشته باشید.وضعیت سفارش خود را پیگیری نماید
                    و سوابق خریدتان را مشاهده کنید.
                </p>
            </div>
        </div>
    </div>
</div>


<script language="JavaScript" src="<?= URL ?>js/jquery-3.0.0.min.js"></script>

<script>
    $("#main .main-showCard1 .header .order-steps ul li").click(function () {
        $(this).toggleClass("active");
    });
</script>
