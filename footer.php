<style>
    #footer {
        width: 100%;
        height: 300px;
        margin-top: 40px;
    }

    #footer-top {
        height: 50px;
        width: 100%;
        background-color: #777676;
    }

    #footer-top .main {
        width: 1200px;
        height: 100%;
        margin: auto;
    }

    #footer-top .main > span {
        color: #fff;
        font-size: 12pt;;
        float: right;
        margin-top: 7px;
    }

    #footer-top ul {
        width: 500px;
        height: 100%;
        float: left;
        margin: 0;
        padding: 0;
    }

    #footer-top ul li {
        list-style: none;
        height: 100%;
        float: left;
        margin-right: 20px;
    }

    #footer-top ul li a {
        display: block;
        height: 100%;
        color: #fff;
        line-height: 50px;
        cursor: pointer;
        text-align: left;
    }

    #footer-top ul li a i {
        display: inline-block;
        width: 17px;
        height: 19px;
        margin-right: 2px;
        vertical-align: middle;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
    }

    #footer-top ul li a i.phone {
        background-position: -398px -421px;
    }

    #footer-top ul li a i.qustion {
        background-position: -359px -421px;
    }

    #footer-top ul li a i.email {
        background-position: -321px -421px;
    }

    #footer-bottom {
        height: 250px;
        width: 100%;
        background-color: #eefff3;
    }

    #footer-bottom .main {
        width: 1200px;
        height: 100%;
        margin: auto;
    }

    #footer-bottom .footer-bottom-right {
        width: 460px;
        height: 100%;
        float: right;
    }

    #footer-bottom ul {
        width: 200px;
        height: 100%;
        margin: 0;
        padding: 0;
        float: right;
    }

    #footer-bottom ul:first-child {
        margin-left: 60px;
    }

    #footer-bottom ul li {
        list-style: none;
        height: 50px;
    }

    #footer-bottom ul li a {
        display: block;
        width: 100%;
        height: 100%;
        line-height: 50px;
        cursor: pointer;
    }

    #footer-bottom ul li a.title {
        font-size: 14pt;
        cursor: initial;
    }

    .footer-bottom-left {
        width: 550px;
        height: 100%;
        float: left;
    }

    .footer-bottom-left p {
        font-size: 14pt;
    }

    .footer-bottom-left .yourEmail input {
        width: 441px;
        height: 30px;
        border: 1px solid #ccc;
        border-radius: 5px;
        color: #2f622f;
        box-shadow: 0 0 3px rgba(0, 0, 0, .3);
    }

    .footer-bottom-left .yourEmail span {
        display: inline-block;
        width: 90px;
        height: 35px;
        background-color: #4a14e1;
        vertical-align: middle;
        border-radius: 5px;
        text-align: center;
        line-height: 35px;
        margin-right: 9px;
        color: #fff;
        font-size: 11pt;
        cursor: pointer;
    }

    .footer-bottom-left .icon {
        width: 100%;
        overflow: auto;
        margin-top: 50px;

    }

    .footer-bottom-left .icon .first {
        float: left;
        margin-right: 5px;
        cursor: pointer;
    }

    .footer-bottom-left .icon .second {
        cursor: pointer;
    }

    .footer-bottom-left .icon i {
        display: inline-block;
        width: 30px;
        height: 30px;
        margin-top: 15px;
        margin-left: 2px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
    }

    .footer-bottom-left .icon i.one {
        background-position: -576px -621px;
    }

    .footer-bottom-left .icon i.tow {
        background-position: -453px -621px;
    }

    .footer-bottom-left .icon i.three {
        background-position: -492px -621px;
    }

    .footer-bottom-left .icon i.four {
        background-position: -534px -621px;
    }

    .footer-bottom-left .icon i.five {
        background-position: -369px -621px;
    }

    .footer-bottom-left .icon i.six {
        background-position: -617px -621px;
    }

</style>

<footer id="footer">
    <div id="footer-top">
        <div class="main">
            <span class="yekan">هفت روز هفته، 24 ساعته در خدمت  شما هستیم</span>
            <ul>
                <li>
                    <a class="yekan">
                        a.h.computer73@gmail.com
                        <i class="email"></i>
                    </a>
                </li>
                <li>
                    <a class="yekan">
                        سوالات متداول
                        <i class="qustion"></i>
                    </a>
                </li>
                <li>
                    <a class="yekan">
                        09105572418
                        <i class="phone"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="footer-bottom">
        <div class="main">
            <div class="footer-bottom-right">
                <ul>
                    <li>
                        <a class="yekan title">راهنمای خرید از دیجی کالا</a>
                    </li>
                    <li>
                        <a class="yekan">ثبت سفارش</a>
                    </li>
                    <li>
                        <a class="yekan">رویه های ارسال سفارش</a>
                    </li>
                    <li>
                        <a class="yekan">روش های پرداخت</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a class="yekan title">راهنمای خرید از دیجی کالا</a>
                    </li>
                    <li>
                        <a class="yekan">ثبت سفارش</a>
                    </li>
                    <li>
                        <a class="yekan">رویه های ارسال سفارش</a>
                    </li>
                    <li>
                        <a class="yekan">روش های پرداخت</a>
                    </li>
                </ul>
            </div>
            <div class="footer-bottom-left">
                <p>اولین شخصی که مطلع می شود . باشید!</p>
                <div class="yourEmail">
                    <input class="yekan" type="text" placeholder="آدرس ایمیل خود را وارد کنید">
                    <span class="yekan">تایید ایمیل</span>
                </div>
                <div class="icon">
                    <a class="first">
                        <img src="<?= URL ?>image/footer/ios_app_bg.png" alt="no-picture"/>
                    </a>
                    <a class="first">
                        <img src="<?= URL ?>image/footer/android_app_bg.png" alt="no-picture"/>
                    </a>
                    <a class="second">
                        <i class="one"></i>
                    </a>
                    <a class="second">
                        <i class="tow"></i>
                    </a>
                    <a class="second">
                        <i class="three"></i>
                    </a>
                    <a class="second">
                        <i class="four"></i>
                    </a>
                    <a class="second">
                        <i class="five"></i>
                    </a>
                    <a class="second">
                        <i class="six"></i>
                    </a>
                </div>
            </div>


        </div>
    </div>
</footer>

<script language="JavaScript" src="<?= URL ?>js/jquery-3.0.0.min.js"></script>
<script language="JavaScript" src="<?= URL ?>js/jquery.elevatezoom.js"></script>
<script language="JavaScript" src="<?= URL ?>js/jquery.flipTimer.js"></script>
<script language="JavaScript" src="<?= URL ?>js/scroll/jquery.mCustomScrollbar.js"></script>
<script language="JavaScript" src="<?= URL ?>js/scroll/jquery.mousewheel.js"></script>
<script language="JavaScript" src="<?= URL ?>3d/jsc3d.js"></script>
<script language="JavaScript" src="<?= URL ?>3d/jsc3d.webgl.js"></script>
<script language="JavaScript" src="<?= URL ?>3d/jsc3d.touch.js"></script>
<script language="JavaScript" src="<?= URL ?>js/digikala.js"></script>

</body>
</html>
