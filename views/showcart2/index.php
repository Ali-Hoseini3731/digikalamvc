
<link rel="stylesheet" href="<?= URL ?>css/bootstrap.css"/>
<link rel="stylesheet" href="<?= URL ?>css/bootstrap-select.css"/>
<style>

    #main .main-showCard2 {
        background-color: #fff;
        margin-top: 10px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 1px 3px 4px rgba(0, 0, 0, .19);
    }

    #main .main-showCard2 .header {
        padding: 5px;
        background-color: #f2f9f3;
    }

    #main .main-showCard2 .header .order-steps {
        padding-right: 150px;
        height: 80px;
    }

    #main .main-showCard2 .header .order-steps::after {
        content: '';
        clear: both;
        display: table;
    }

    #main .main-showCard2 .header .order-steps .dash {
        float: right;
    }

    #main .main-showCard2 .header .order-steps .dash span {
        display: inline-block;
        width: 11px;
        height: 3px;
        background-color: #0000b6;
        margin-right: 1px;
        vertical-align: 1px;
    }

    #main .main-showCard2 .header .subTable .order-steps ul {
        padding: 0;
        margin: 0;
        float: right;
    }

    #main .main-showCard2 .header .order-steps ul li {
        list-style-type: none;
        float: right;
        position: relative;
    }

    #main .main-showCard2 .header .order-steps ul li .circle {
        display: block;
        width: 18px;
        height: 18px;
        float: right;
        border: 3px solid #ccc;
        border-radius: 100%;
        margin: 0 10px;
        cursor: pointer;
    }

    #main .main-showCard2 .header .order-steps ul li.active .circle {
        border-color: #2e2bff;
        background: #2e2bff url("<?= URL ?>/image/slices.png") no-repeat -809px -476px;
    }

    #main .main-showCard2 .header .order-steps ul li .line {
        display: block;
        width: 180px;
        height: 3px;
        background-color: #ccc;
        float: right;
        margin-top: 11px;
    }

    #main .main-showCard2 .header .order-steps ul li.active .line {
        background-color: #2e2bff;
    }

    #main .main-showCard2 .header .order-steps ul li .text {
        display: block;
        width: 128px;
        font-size: 11pt;
        color: #9f9f9f;
        position: absolute;
        right: -28px;
        top: 29px;
    }

    #main .main-showCard2 .header .order-steps ul li.active .text {
        color: #2e2bff;
    }

    #main .main-showCard2 .content {
        background-color: #fff;
        padding: 30px 15px;
    }

    #main .main-showCard2 .content .choice-address {
        margin-bottom: 30px;
    }

    #main .main-showCard2 .content .choice-address .title::after {
        content: "";
        clear: both;
        display: table;
    }

    #main .main-showCard2 .content .choice-address .title h4 {
        margin: 0;
        font-size: 11pt;
        padding-right: 20px;
        color: #4f4f51;
        float: right;
        position: relative;
    }

    #main .main-showCard2 .content .choice-address .title h4::before {
        display: block;
        content: "";
        position: absolute;
        right: 0;
        top: 10px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 5px 5px 5px 0;
        border-color: transparent #000000 transparent transparent;

    }

    #main .main-showCard2 .content .choice-address .title .btn-gray {
        width: 140px;
        float: left;
    }

    #main .main-showCard2 .content .choice-address table {
        border: 1px solid #eeeeee;
        width: 100%;
        margin-top: 20px;
    }

    #main .main-showCard2 .content .choice-address table tr td {
        border-left: 1px solid #eee;
        border-bottom: 1px solid #eee;
        text-align: center;
    }

    #main .main-showCard2 .content .choice-address table tr td.first {
        width: 60px;
        position: relative;
    }

    #main .main-showCard2 .content .choice-address table.active tr td.first {
        background-color: #11f90a0a;
    }

    #main .main-showCard2 .content .choice-address table.active tr td.first::before {
        content: "";
        display: block;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 40px 40px 0;
        border-color: transparent #25fa2c transparent transparent;
        position: absolute;
        top: 0;
        right: 0;

    }

    #main .main-showCard2 .content .choice-address table.active tr td.first::after {
        content: "";
        display: block;
        width: 20px;
        height: 20px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position: -670px -121px;
        position: absolute;
        right: 2px;
        top: 2px;


    }

    #main .main-showCard2 .content .choice-address table tr td.first span {
        display: block;
        width: 16px;
        height: 16px;
        border: 1px solid #cccccc;
        border-radius: 100%;
        margin: auto;
        cursor: pointer;
    }

    #main .main-showCard2 .content .choice-address table.active tr td.first span {
        border: none;
        background-color: #2e2bff;
    }

    #main .main-showCard2 .content .choice-address table.active tr td.first span::before {
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

    #main .main-showCard2 .content .choice-address table tr td.name {
        text-align: right;
        padding: 5px 20px 5px 0;
        font-size: 12.4pt;
        color: #6c6c6c;
    }

    #main .main-showCard2 .content .choice-address table tr td.ostan {
        text-align: right;
        padding: 10px 20px 10px 0;
        font-size: 11pt;
        width: 200px;
        color: #6a6969;
    }

    #main .main-showCard2 .content .choice-address table tr td.city {
        text-align: right;
        padding: 10px 20px 10px 0;
        font-size: 12pt;
        width: 200px;
        color: #6a6969;
    }

    #main .main-showCard2 .content .choice-address table tr td.address {
        width: 560px;
        font-size: 10pt;
        color: #4a4a4a;
        padding-right: 20px;
    }

    #main .main-showCard2 .content .choice-address table tr td.selphon {
        width: 270px;
        font-size: 10pt;
        color: #6f6c6c;
    }

    #main .main-showCard2 .content .choice-address table tr td.phone {
        width: 270px;
        font-size: 10pt;
        color: #6f6c6c;
    }

    #main .main-showCard2 .content .choice-address table tr td.last {
        width: 30px;
    }

    #main .main-showCard2 .content .choice-address table tr td.last span {
        display: block;
        width: 30px;
        height: 72px;
    }

    #main .main-showCard2 .content .choice-address table tr td.last .edit {
        background-color: #28e4f447;
    }

    #main .main-showCard2 .content .choice-address table tr td.last .edit i {
        display: block;
        width: 17px;
        height: 20px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position: -810px -443px;
        margin: auto;
        position: relative;
        top: 30px;
        cursor: pointer;
    }

    #main .main-showCard2 .content .choice-address table tr td.last .remove {
        background-color: rgba(255, 159, 84, 0.48);
    }

    #main .main-showCard2 .content .choice-address table tr td.last .remove i {
        display: block;
        width: 17px;
        height: 20px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position: -810px -503px;
        margin: auto;
        position: relative;
        top: 25px;
        cursor: pointer;
    }

    #main .main-showCard2 .content .choice-send .title h4 {
        margin: 0;
        font-size: 11pt;
        padding-right: 20px;
        color: #4f4f51;
        position: relative;
    }

    #main .main-showCard2 .content .choice-send .title h4::before {
        display: block;
        content: "";
        position: absolute;
        right: 0;
        top: 10px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 5px 5px 5px 0;
        border-color: transparent #000000 transparent transparent;

    }

    #main .main-showCard2 .content .choice-send table {
        width: 100%;
        border: 1px solid #eee;
        margin-top: 10px;
    }

    #main .main-showCard2 .content .choice-send table tr td {
        border-right: 1px solid #eee;
        padding: 10px;
    }

    #main .main-showCard2 .content .choice-send table tr td:first-child {
        width: 60px;
        text-align: center;
        border-right: none;
    }

    #main .main-showCard2 .content .choice-send table tr td:first-child span {
        display: block;
        width: 16px;
        height: 16px;
        border: 1px solid #cccccc;
        border-radius: 100%;
        margin: auto;
        cursor: pointer;
    }

    #main .main-showCard2 .content .choice-send table.active {
        border: 1px solid #81fb8a;
    }

    #main .main-showCard2 .content .choice-send table.active tr td {
        border-right: 1px solid #81fb8a;
    }

    #main .main-showCard2 .content .choice-send table.active tr td:first-child {
        background-color: #68f4191f;
        border-right: none;
    }

    #main .main-showCard2 .content .choice-send table.active tr td:first-child span {
        border: none;
        background-color: #2e2bff;
    }

    #main .main-showCard2 .content .choice-send table.active tr td:first-child span::before {
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

    #main .main-showCard2 .content .choice-send table tr td.tow {
        width: 900px;
    }

    #main .main-showCard2 .content .choice-send table tr td.tow img {
        float: right;
        margin-top: 5px;
    }

    #main .main-showCard2 .content .choice-send table tr td.tow p {
        margin: 1px 90px 1px 0;
        font-size: 11pt;
    }

    #main .main-showCard2 .content .choice-send table tr td.tow p:last-child {
        color: #767676;
    }

    #main .main-showCard2 .content .choice-send table.active tr td:last-child {
        background-color: #68f4191f;
    }

    #main .main-showCard2 .content .choice-send table tr td:last-child span {
        display: block;
        text-align: center;
        padding: 5px 0;
    }

    #main .main-showCard2 .content .choice-send table tr td:last-child span:first-child {
        font-size: 11pt;
        color: #787878;
    }

    #main .main-showCard2 .content .choice-send table tr td:last-child span:last-child {
        font-size: 13.5pt;
        color: #1fc526;
    }

    .add-newaddres {
        width: 750px;
        height: 600px;
        background-color: #fff;
        position: fixed;
        top: 20px;
        right: 0;
        left: 0;
        margin: auto;
        z-index: 5;
        display: none;
    }

    .add-newaddres .header {
        height: 50px;
        background-color: #ececec;
        position: relative;
    }

    .add-newaddres .header p {
        margin: 0;
        padding-right: 15px;
        padding-top: 9px;
        font-size: 12.4pt;
        color: #0b2d4a;
    }

    .add-newaddres .header i {
        display: block;
        width: 25px;
        height: 25px;
        border: 1px solid #ccc;
        border-radius: 100%;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position: -136px -124px;
        position: absolute;
        left: 10px;
        top: 12px;
        cursor: pointer;
    }

    .add-newaddres .content {
        height: 520px;
        padding: 15px;
    }

    .add-newaddres .content .row {
        margin: 5px 0;
    }

    .add-newaddres .content .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .add-newaddres .content .row .right {
        width: 220px;
        float: right;
        padding: 5px;
    }

    .add-newaddres .content .row .right span {
        font-size: 11pt;
        color: #464545;
    }

    .add-newaddres .content .row .left {
        width: 470px;
        float: left;
        padding: 5px;
    }

    .add-newaddres .content .row .left input {
        width: 250px;
        height: 30px;
        border: 1px solid #cccaca;
        font-size: 8pt;
        padding-right: 5px;
        border-radius: 5px;
    }

    .add-newaddres .content .row .left input.phone {
        width: 250px;
        height: 30px;
        border: 1px solid #cccaca;
        font-size: 8pt;
        padding-left: 5px;
        padding-right: 0;
        border-radius: 5px;
        text-align: left;
    }

    .add-newaddres .content .row .left textarea {
        width: 400px;
        height: 70px;
        font-size: 10pt;
    }

    .add-newaddres .content .row:last-child {
        margin-top: 40px;
    }

    .add-newaddres .content .row .btn-gray {
        width: 100px;
        float: right;
    }

    .add-newaddres .content .row .btn-green {
        float: left;
    }


    .dark-page {
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .5);
        z-index: 4;
        position: fixed;
        left: 0;
        top: 0;
        display: none;
    }

</style>


<div id="main">
    <div class="main-showCard2">
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
            <div class="choice-address">
                <div class="title">
                    <h4 class="yekan">انتخاب آدرس</h4>
                    <span class="yekan btn-gray">افزودن آدرس جدید</span>
                </div>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="yekan first" rowspan="3"><span></span></td>
                        <td class="yekan name" colspan="3">علی حسینی</td>
                        <td class="yekan last" rowspan="3">
                            <span class="edit"><i></i></span>
                            <span class="remove"><i></i></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="yekan ostan">استان : تهران</td>
                        <td class="yekan address" rowspan="2">
                            <div class="one">محله : تهرانپارس</div>
                            <div class="tow">
                                <span class="mohale">منطقه :</span>
                                <span class="mohale1">-----</span>
                                <span class="plak">پلاک :</span>
                                <span class="plak1">-----</span>
                                <span class="tabaghe">طبقه :</span>
                                <span class="tabaghe1">-----</span>
                            </div>
                            <div class="three">کدپستی :2546985</div>
                        </td>
                        <td class="yekan selphon">شماره تماس اضطراری : 09105572418</td>
                    </tr>
                    <tr>
                        <td class="yekan city">شهر : تهران</td>
                        <td class="yekan phone">شماره تماس ثابت : 05632662505</td>
                    </tr>

                </table>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="yekan first" rowspan="3"><span></span></td>
                        <td class="yekan name" colspan="3">علی حسینی</td>
                        <td class="yekan last" rowspan="3">
                            <span class="edit"><i></i></span>
                            <span class="remove"><i></i></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="yekan ostan">استان : تهران</td>
                        <td class="yekan address" rowspan="2">
                            <div class="one">محله : تهرانپارس</div>
                            <div class="tow">
                                <span class="mohale">منطقه :</span>
                                <span class="mohale1">-----</span>
                                <span class="plak">پلاک :</span>
                                <span class="plak1">-----</span>
                                <span class="tabaghe">طبقه :</span>
                                <span class="tabaghe1">-----</span>
                            </div>
                            <div class="three">کدپستی :2546985</div>
                        </td>
                        <td class="yekan selphon">شماره تماس اضطراری : 09105572418</td>
                    </tr>
                    <tr>
                        <td class="yekan city">شهر : تهران</td>
                        <td class="yekan phone">شماره تماس ثابت : 05632662505</td>
                    </tr>

                </table>
            </div>
            <div class="choice-send">
                <div class="title">
                    <h4 class="yekan">شیوه ارسال</h4>
                </div>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td><span></span></td>
                        <td class="tow">
                            <img alt="no-picture" src="<?= URL ?>image/showCard-page/post_48_icon.png"/>
                            <p class="yekan">پست پیشتاز (هزینه ارسال : طبق تعرفه پست)</p>
                            <p class="yekan">زمان تقریبی تحویل سفارش براساس محدوده جغرافیایی : 48-72 ساعت</p>
                        </td>
                        <td class="yekak">
                            <span>هزینه ارسال</span>
                            <span>50,500 تومان</span>
                        </td>
                    </tr>
                </table>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td><span></span></td>
                        <td class="tow">
                            <img alt="no-picture" src="<?= URL ?>image/showCard-page/post_48_icon.png"/>
                            <p class="yekan">باربری(کرایه طبق تعرفه باربری | ویژه لوازم خانگی سنگین)</p>
                            <p class="yekan">زمان تقریبی تحویل سفارش براساس محدوده جغرافیایی : 48-72 ساعت</p>
                        </td>
                        <td class="yekak">
                            <span>هزینه ارسال</span>
                            <span>پس از کرایه</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="add-newaddres">
    <div class="header">
        <p class="yekan">افزودن آدرس جدید</p>
        <i></i>
    </div>
    <div class="content">
        <div class="row">
            <div class="right">
                <span class="yekan">نام و نام خانوادگی تحویل گیرنده </span>
            </div>
            <div class="left">
                <input placeholder="نام ونام خانوادگی خود را وارد کنید...." type="text"/>
            </div>
        </div>

        <div class="row">
            <div class="right">
                <span class="yekan">شماره تماس ضروری (تلفن همراه)</span>
            </div>
            <div class="left">
                <input class="phone" placeholder="....091" type="text"/>
            </div>
        </div>

        <div class="row">
            <div class="right">
                <span class="yekan">شماره تلفن ثابت تحویل گیرنده</span>
            </div>
            <div class="left">
                <input class="phone" type="text"/>
            </div>
        </div>

        <div class="row">
            <div class="right">
                <span class="yekan">استان / شهر تحویل گیرنده</span>
            </div>
            <div class="left">
                <select class="ostan selectpicker" data-live-search="true" onchange="ostan(this);">
                    <option value="">انتخاب استان</option>
                    <optgroup label="آذربایجان ها">
                        <option data-val="1" value="آذربایجان شرقی">آذربایجان شرقی</option>
                        <option data-val="2" value="آذربایجان غربی">آذربایجان غربی</option>
                    </optgroup>

                    <option data-val="3" value="اردبیل">اردبیل</option>
                    <option data-val="4" value="اسفهان">اصفهان</option>
                    <option data-val="5" value="البرز">البرز</option>
                    <option data-val="6" value="ایلام">ایلام</option>
                    <option data-val="7" value="بوشهر">بوشهر</option>
                    <option data-val="8" value="تهران">تهران</option>
                    <option data-val="9" value="چهارمحال بختیاری">چهارمحال بختیاری</option>

                    <optgroup label="خراسان ها">
                        <option data-val="10" value="خراسان جنوبی">خراسان جنوبی</option>
                        <option data-val="11" value="خراسان رضوی">خراسان رضوی</option>
                        <option data-val="12" value="خراسان شمالی">خراسان شمالی</option>
                    </optgroup>

                    <option data-val="13" value="خوزستان">خوزستان</option>
                    <option data-val="14" value="زنجان">زنجان</option>
                    <option data-val="15" value="سمنان">سمنان</option>
                    <option data-val="16" value="سیستان و بلوچستان">سیستان و بلوچستان</option>
                    <option data-val="17" value="فارس">فارس</option>
                    <option data-val="18" value="قزوین">قزوین</option>
                    <option data-val="19" value="قم">قم</option>
                    <option data-val="20" value="کردستان">کردستان</option>

                    <option data-val="21" value="کرمان">کرمان</option>
                    <option data-val="22" value="کرمانشاه">کرمانشاه</option>
                    <option data-val="23" value="کهگیلویه و بویراحمد">کهگیلویه و بویراحمد</option>
                    <option data-val="24" value="گلستان">گلستان</option>
                    <option data-val="25" value="گیلان">گیلان</option>
                    <option data-val="26" value="لرستان">لرستان</option>
                    <option data-val="27" value="مازندران">مازندران</option>
                    <option data-val="28" value="مرکزی">مرکزی</option>
                    <option data-val="29" value="هرمزگان">هرمزگان</option>
                    <option data-val="30" value="همدان">همدان</option>
                    <option data-val="31" value="یزد">یزد</option>
                </select>
                <span class="shahr">
                    <select class="selectpicker" data-live-search="true" onchange="mohale(this)" title=""></select>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="right">
                <span class="yekan">محله</span>
            </div>
            <div class="left">
                <select class="mohale" title=""></select>
            </div>
        </div>

        <div class="row">
            <div class="right">
                <span class="yekan">آدرس پستی</span>
            </div>
            <div class="left">
                <textarea class="yekan" placeholder="آدرس پستی خود را وارد کنید...."></textarea>
            </div>
        </div>

        <div class="row">
            <div class="right">
                <span class="yekan">کد پستی</span>
            </div>
            <div class="left">
                <input class="phone" type="text"/>
            </div>
        </div>

        <div class="row">
            <span class="btn-gray">انصراف</span>
            <span class="btn-green">ثبت اطلاعات و بازگشت</span>
        </div>

    </div>
</div>

<div class="dark-page">
</div>




<script>
    $("#main .main-showCard2 .header .order-steps ul li").click(function () {
        $(this).toggleClass('active');
    });

    $("#main .main-showCard2 .content table").click(function () {
        $(this).toggleClass("active");
    });

    $("#main .main-showCard2 .content .choice-address .title .btn-gray").click(function () {
        $(".add-newaddres").fadeIn();
        $(".dark-page").fadeIn();
    });

    $(".add-newaddres .header i").click(function () {
        $(this).parents(".add-newaddres").fadeOut();
        $(".dark-page").fadeOut();
    });

    $(".selectpicker").selectpicker();
</script>





