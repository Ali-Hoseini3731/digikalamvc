
<style>

    #login-main {
        max-width: 1200px;
        margin: auto;
        border-radius: 5px;
        overflow: hidden;
        background-color: #FFFFFF;
        box-shadow: 0 0 3px rgba(0, 0, 0, .2);
        margin-top: 20px;
        padding-bottom: 80px;
    }

    #login-main .header {
        width: 100%;
        height: 150px;
        background-color: #d1eecf;
        text-align: center;
    }

    #login-main .header i {
        display: inline-block;
        width: 45px;
        height: 55px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position: -796px -20px;
        margin-top: 35px;
    }

    #login-main .header h3 {
        text-align: center;
        margin: 0;
        color: #556656;
    }

    #login-main .content {
        padding-top: 50px;
        overflow: auto;
    }

    #login-main .content .right {
        width: 50%;
        float: right;
    }

    #login-main .content .right > div {
        padding: 10px 0;
    }

    #login-main .content .right .password {
        position: relative;
        padding-top: 40px;
    }

    #login-main .content .right .password > a {
        position: absolute;
        top: 14px;
        left: 151px;
        color: #e11111;
        font-size: 9pt;
        text-decoration: none;
        cursor: pointer;
    }

    #login-main .content .right div.div-check {
        position: relative;
        text-align: center;
    }

    #login-main div > label {
        display: inline-block;
        width: 100px;
        font-size: 12pt;
        margin-right: 100px;
    }

    #login-main div > input[type="text"], input[type="password"] {
        width: 220px;
        height: 30px;
        border: 1px solid #a0a7c1;
        border-radius: 5px;
        margin-right: 20px;
        box-shadow: 0 0 3px rgba(0, 0, 0, .1);
        text-align: left;
    }

    #login-main div > input.input-check {
        width: 17px;
        height: 17px;
        position: relative;
        top: 2px;
        right: 0;
        opacity: 0;
        background-color: red;
        cursor: pointer;
    }

    #login-main .right .div-check span {
        display: inline-block;
        width: 17px;
        height: 17px;
        background-color: #fff;
        border: 1px solid #eceaea;
        border-radius: 4px;
        overflow: hidden;
        position: absolute;
        right: 245px;
        top: 14px;
        cursor: pointer;
    }

    .check {
        background: #2d2df7 url("<?= URL ?>/image/slices.png") no-repeat -191px -80px !important;
        border: 1px solid #2d2df7 !important;
    }

    #login-main div .btn {
        display: inline-block;
        width: 133px;
        height: 35px;
        background-color: #4a14e1;
        vertical-align: middle;
        border-radius: 5px;
        text-align: center;
        line-height: 35px;
        color: #fff;
        font-size: 11pt;
        cursor: pointer;
        margin: 20px 300px 0 0;

    }

    #login-main .content .left {
        width: 50%;
        float: right;
        position: relative;
    }

    #login-main .left:before {
        position: absolute;
        content: "";
        width: 0;
        height: 225px;
        border-right: 1px solid #eee;
    }

    #login-main .left > div {
        padding: 10px 0;
    }

    #login-main .left div a {
        margin-right: 25px;
        cursor: pointer;
    }

    #login-main .left div a i {
        display: inline-block;
        width: 25px;
        height: 25px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        margin-left: 30px;
        vertical-align: middle;
    }

    #login-main .left div a i.one {
        background-position: -983px -331px;
    }

    #login-main .left div a i.tow {
        background-position: -983px -288px;
    }

    #login-main .left div a i.three {
        background-position: -983px -246px;
    }

    #login-main .left div a i.four {
        background-position: -983px -203px;
    }

    #login-main .left div a i.five {
        background-position: -983px -167px;
    }

    .login-footer {
        width: 1200px;
        height: 70px;
        margin: 10px auto 100px;
        background-color: #d7ecd9;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .19);
        text-align: center;
    }

    .login-footer p {
        display: inline-block;
        margin: 0;
        line-height: 70px;
    }

    .login-footer a {
        text-decoration: none;
        color: #128c08;
        font-weight: bold;
        margin-right: 10px;
        font-size: 11pt;
        border-bottom: dotted 2px #898c99;
    }


</style>

<div id="login-main">
    <div class="header">
        <i></i>
        <h3 class="yekan">ورود به دیجی کالا</h3>
    </div>
    <div class="content">
        <div class="right">
            <div>
                <label class="yekan">پست الکترونیک</label>
                <input type="text" placeholder="Email"/>
            </div>
            <div class="password">
                <a class="yekan">رمز عبورم را فراموش کرده ام</a>
                <label class="yekan">کلمه عبور</label>
                <input type="password" placeholder="Password"/>
            </div>
            <div class="yekan fontSm div-check">
                <span></span>
                <input type="checkbox" class="input-check">
                مرا به خاطر بسپار
            </div>
            <div>
                <span class="btn yekan">ورود به دیجی کالا</span>
            </div>
        </div>
        <div class="left">
            <div>
                <a class="yekan fontSm">
                    <i class="one"></i>
                    سریع تر و سادتر خرید کنید
                </a>
            </div>
            <div>
                <a class="yekan fontSm">
                    <i class="tow"></i>
                    به سادگی سوابق خرید و فعالیت های خود را مدیریت کنید
                </a>
            </div>
            <div>
                <a class="yekan fontSm">
                    <i class="three"></i>
                    لیست علاقه مندی های خود را بسازید و تعقیرات آنها را دنبال کنید
                </a>
            </div>
            <div>
                <a class="yekan fontSm">
                    <i class="four"></i>
                    نقد ، بررسی و نظرات خود را با دیگران به اشتراک بگذارید
                </a>
            </div>
            <div>
                <a class="yekan fontSm">
                    <i class="five"></i>
                    در جریان فروشهای ویژه و قیمت روز محصولات قرار بگیرید
                </a>
            </div>
        </div>
    </div>

</div>
<div class="login-footer">
    <p class="yekan fontSm">قبلا در دیجی کالا ثبت نام کرده اید ؟</p>
    <a href="#" class="yekan">ورود به دیجی کالا</a>

</div>
