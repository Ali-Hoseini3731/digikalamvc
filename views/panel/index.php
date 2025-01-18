<style>

    #main .main-panel {
        background-color: #fff;
        border-radius: 4px;
        overflow: hidden;
        padding: 10px 15px;
        margin: 10px 0;
        box-shadow: 1px 2px 3px rgba(0, 0, 0, .19);
    }

    #main .main-panel .box {
        margin-top: 20px;
        box-shadow: 0 4px 5px rgba(0, 0, 0, .19);
    }

    #main .main-panel .box .box-header {
        height: 35px;
    }

    #main .main-panel .box .box-header .information {
        display: inline-block;
        width: 45px;
        height: 100%;
        background: #5858e8;
        border-radius: 4px;
        position: relative;
    }

    #main .main-panel .box .box-header .information::before {
        content: '';
        display: block;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 5px 6px 0 6px;
        border-color: #5858e8 transparent transparent transparent;
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
        bottom: -5px;

    }

    #main .main-panel .box .box-header .information i {
        display: block;
        width: 25px;
        height: 25px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position: -271px -30px;
        margin-top: 5px;
        margin-right: 10px;
    }

    #main .main-panel .box .box-header .title {
        width: 1120px;
        height: 100%;
        background: #000009;
        border-radius: 4px;
        float: left;
    }

    #main .main-panel .box .box-header .title span {
        color: #fff;
        font-size: 10pt;
        padding-right: 9px;
        line-height: 35px;
    }

    #main .main-panel .box .box-content {
        margin-top: 10px;
        border-width: 0 1px 1px 1px;
        border-style: solid;
        border-color: #ccc;
        padding: 15px;
    }

    #main .main-panel .box .box-content .title .text {
        font-size: 10pt;
        margin-right: 47px;
        color: #676975;
    }

    #main .main-panel .box .box-content .title .dot {
        display: inline-block;
        width: 77%;
        border-bottom: 1px dotted #262626;
        margin-right: 30px;
        vertical-align: middle;
    }

    #main .main-panel .box .box-content table {
        width: 100%;
    }

    #main .main-panel .box .box-content table tr td {
        text-align: center;
    }

    #main .main-panel .box .box-content table tr td .title {
        font-size: 9pt;
        color: #404082;

    }

    #main .main-panel .box .box-content table tr td .value {
        font-size: 10pt;
        margin-right: 5px;
        color: #312e2e;
    }

    #main .main-panel .box:first-child .box-content table tr:last-child td {
        text-align: left;
    }

    #main .main-panel .box .box-content table tr:last-child td .change {
        display: inline-block;
        width: 120px;
        height: 31px;
        background: url("<?= URL ?>/image/panel-page/ChangePassword.png") no-repeat;
        margin-left: 10px;
        cursor: pointer;
    }

    #main .main-panel .box .box-content table tr:last-child td .update {
        display: inline-block;
        width: 120px;
        height: 31px;
        background: url("<?= URL ?>/image/panel-page/Edit.png") no-repeat;
        margin-left: 10px;
        cursor: pointer;
    }

    #main .main-panel .box .box-header .report {
        display: inline-block;
        width: 45px;
        height: 100%;
        background: #c6091c;
        border-radius: 4px;
        position: relative;
    }

    #main .main-panel .box .box-header .report::before {
        content: '';
        display: block;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 5px 6px 0 6px;
        border-color: #c6091c transparent transparent transparent;
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
        bottom: -5px;

    }

    #main .main-panel .box .box-header .report i {
        display: block;
        width: 25px;
        height: 25px;
        background: url("<?= URL ?>/image/slices.png") no-repeat;
        background-position: -406px -30px;
        margin-top: 5px;
        margin-right: 10px;
    }

    #main .main-panel .box ul.tab {
        width: 1168px;
        height: 30px;
        border: 1px solid #7b7a7a;
        background-color: #eeeeee;
        box-shadow: 0 -2px 0 #000;
        padding: 0;
        margin: 0;
    }

    #main .main-panel .box ul.tab li {
        list-style: none;
        float: right;
        height: 100%;
        font-size: 10pt;
        padding: 0 20px;
        cursor: pointer;
        border-right: 1px solid #7b7a7a;
        border-left: none;
    }

    #main .main-panel .box ul.tab li.active1 {
        background-color: #494949;
        color: #fff;
    }

    #main .main-panel .box ul.tab li:first-child {
        border-right: none;
    }

    #main .main-panel .box .tab-child {
        width: 1170px
    }

    #main .main-panel .box .tab-child section {
        padding: 20px;
        display: none;
    }

    #main .main-panel .box .tab-child section > table {
        width: 100%;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr {
        background-color: #eeeeee;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr:first-child {
        background-color: #000000;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr > td {
        text-align: center;
        border-right: 1px solid #cccccc;
        border-bottom: 2px solid #000;
        font-size: 9.5pt;
        padding: 5px;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr > td .date, .time {
        text-align: center;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr:first-child td {
        border-right: none;
        color: #fff;
        font-size: 10pt;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr > td:first-child {
        border-right: none;
    }

    #main .main-panel .box .tab-child section table > tbody > tr > td i {
        display: block;
        width: 29px;
        height: 28px;
        background: url("<?= URL ?>/image/panel-page/orderdetailsopen.png");
        position: relative;
        left: 0;
        right: 0;
        margin: auto;
        cursor: pointer;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr > td i.active {
        background: url("<?= URL ?>/image/panel-page/orderdetailsclose.png");
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details {
        display: none;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable {
        padding: 10px;
        background-color: #fff;
        margin: 5px;
        box-shadow: 0 0 6px #000000;
        border-radius: 4px;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable table {
        width: 100%;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable table tr:first-child {
        background-color: #2fba0d;
        font-size: 10pt;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable table tr td {
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #000;
        text-align: center;
        font-size: 9pt;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable table tr:first-child td {
        color: #fff;
        font-size: 10pt;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable table tr td:first-child {
        border-right: none;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable table tr td .kala {
        padding-right: 10px;
        color: #14149f;
        font-size: 9.5pt;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable table tr td .guaranty {
        color: #6f6e6e;
        padding-right: 10px;
        font-size: 9pt;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable > p {
        margin: 10px 0 0 0;
        font-size: 11pt;
        background-color: #b5b5b5;
        padding-right: 15px;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable .order-steps {
        padding: 45px 110px 0 0;
        height: 80px;
        background-color: #b5b5b512;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable .order-steps::after {
        content: '';
        clear: both;
        display: table;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable .order-steps .dash {
        float: right;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable .order-steps .dash span {
        display: inline-block;
        width: 11px;
        height: 3px;
        background-color: #0000b6;
        margin-right: 1px;
        vertical-align: -2px;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable .order-steps ul {
        padding: 0;
        margin: 0;
        float: right;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable .order-steps ul li {
        list-style-type: none;
        float: right;
        position: relative;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable .order-steps ul li .circle {
        display: block;
        width: 18px;
        height: 18px;
        float: right;
        border: 3px solid #ccc;
        border-radius: 100%;
        margin: 0 10px;
        cursor: pointer;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable .order-steps ul li.active .circle {
        border-color: #2e2bff;
        background: #2e2bff url("<?= URL ?>/image/slices.png") no-repeat -809px -476px;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable .order-steps ul li .line {
        display: block;
        width: 130px;
        height: 3px;
        background-color: #ccc;
        float: right;
        margin-top: 11px;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable .order-steps ul li.active .line {
        background-color: #2e2bff;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable .order-steps ul li .text {
        display: block;
        width: 100px;
        font-size: 11pt;
        color: #9f9f9f;
        position: absolute;
        right: -4px;
        top: 40px;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable .order-steps ul li.active .text {
        color: #2e2bff;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable .moreDetails {
        background-color: #fff;
        padding: 10px 0;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable .moreDetails table tr {
        background-color: #fff;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable .moreDetails table tr td {
        color: #000;
        width: 33%;
        padding: 15px 0;
    }

    #main .main-panel .box .tab-child section > table > tbody > tr.details td .subTable .moreDetails table tr:last-child td {
        border-bottom: none;
    }

    #main .main-panel .box .favorite ul {
        margin: 0;
        padding: 15px;
        background-color: #eeedf08f;
        border: 1px dotted #cccccc;
        border-radius: 4px;
        box-shadow: 1px 2px 3px rgba(0, 0, 0, .19);
    }

    #main .main-panel .box .favorite ul::after {
        content: '';
        clear: both;
        display: table;
    }

    #main .main-panel .box .favorite ul li {
        list-style-type: none;
        width: 220px;
        height: 55px;
        border-radius: 4px;
        border: 1px solid #f3f1f7;
        overflow: hidden;
        float: right;
        margin-right: 5px;
        position: relative;
    }

    #main .main-panel .box .favorite ul li:hover {
        background-color: #fff;
        border: 1px solid #535353;
    }

    #main .main-panel .box .favorite ul li a {
        display: block;
        height: 100%;
        padding: 5px;
        cursor: pointer;
        position: relative;
    }

    #main .main-panel .box .favorite ul li a .folder {
        margin-top: 7px;
    }

    #main .main-panel .box .favorite ul li a .text {
        font-size: 10pt;
        color: #ff0000;
        vertical-align: 11px;
        margin-right: 5px;
    }

    #main .main-panel .box .favorite ul li:hover a .text {
        color: #000000;
    }

    #main .main-panel .box .favorite ul li a .edit {
        position: absolute;
        left: 5px;
        top: 5px;
        display: none;
    }

    #main .main-panel .box .favorite .item {
        border-width: 0 1px 1px 1px;
        border-style: solid;
        border-color: #ccc;
        border-radius: 0 0 4px 4px;
        box-shadow: 1px 3px 4px rgba(0, 0, 0, .2);
        margin-top: 10px;
    }

    #main .main-panel .box .favorite .item::after {
        content: '';
        clear: both;
        display: table;
    }

    #main .main-panel .box .favorite .item .right {
        float: right;
        width: 150px;
        padding: 5px;
    }

    #main .main-panel .box .nazarat table tr td img {
        vertical-align: middle;
        cursor: pointer;
    }

    #main .main-panel .box .favorite .item .right img {
        width: 130px;
        height: 130px;
        border: 1px solid #ccc;
        padding: 5px;
        background-color: #cccc;
        border-radius: 4px;
    }

    #main .main-panel .box .favorite .item .left {
        float: left;
        width: 950px;
        padding: 5px;
    }

    #main .main-panel .box .favorite .item .left p.title {
        margin: 4px 10px;
        font-size: 12.4pt;
        color: #2d2d76;
        border-width: 1px 0 1px 0;
        border-style: solid;
        border-color: #cccc;
        padding: 5px 0;
    }

    #main .main-panel .box .favorite .item .left p.title img {
        float: left;
        margin-top: 8px;
        margin-left: 10px;
        cursor: pointer;
    }

    #main .main-panel .box .favorite .item .left p.text {
        font-size: 10pt;
        padding: 0 10px;
        margin: 10px;
    }

    #main .main-panel .box .digiBon {
        border-width: 0 1px 1px 1px;
        border-style: solid;
        border-color: #ccc;
        margin-top: 10px;
    }

    #main .main-panel .box .digiBon .title {
        border: 1px dotted #afafaf;
        background-color: #f7f4f4;
        padding: 25px 15px;
        border-radius: 4px;
        box-shadow: 0 0 4px rgba(0, 0, 0, .39);
    }

    #main .main-panel .box .digiBon .title span {
        font-size: 11pt;
        color: #737373;
    }

    #main .main-panel .box .digiBon .title input {
        width: 300px;
        height: 27px;
        border-radius: 4px;
        overflow: hidden;
        border: 1px solid #ccc;
        margin-right: 8px;
    }

    #main .main-panel .box .digiBon .title img {
        vertical-align: middle;
        margin-right: 15px;
        cursor: pointer;
    }

    #main .main-panel .box .digiBon > table {
        width: 100%;
        margin-top: 20px;
    }

    #main .main-panel .box .digiBon table tr {
        font-size: 9.5pt;
    }

    #main .main-panel .box .digiBon table tr:first-child {
        background-color: #000;
        color: #fff;
        font-size: 10pt;
    }

    #main .main-panel .box .digiBon table tr td {
        text-align: center;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #000;
        padding: 10px 0;
    }

    #main .main-panel .box .digiBon table tr:first-child td {
        text-align: center;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #000;
        padding: 0;
    }

    #main .main-panel .box .digiBon table tr td:first-child {
        border-right: none;
    }

    #main .main-panel .box .digiBon table .details .subTable2 {
        padding: 10px;
        background-color: #fff;
        margin: 5px;
        box-shadow: 0 0 6px #000000;
        border-radius: 4px;
    }

    #main .main-panel .box .digiBon table .details .subTable2 table {
        width: 100%;
    }

    #main .main-panel .box .digiBon table .details .subTable2 table tr:first-child {
        background-color: #0000e8;
    }


</style>

<div id="main">
    <div class="main-panel">

        <div class="box">
            <div class="box-header">
                <div class="title">
                    <span class="yekan">اطلاعات کاربر</span>
                </div>
                <div class="information">
                    <i></i>
                </div>
            </div>
            <div class="box-content">
                <div class="title">
                    <span class="text">اطلاعات مشتری حقیقی</span>
                    <span class="dot"></span>
                </div>
                <table>
                    <tr>
                        <td>
                            <span class="yekan title">نام و نام خانوادگی :</span>
                            <span class="yekan value">علی حسینی</span>
                        </td>
                        <td>
                            <span class="yekan title">آدرس الکترونیک :</span>
                            <span class="yekan value">a.h.computer73@gmail.com</span>
                        </td>
                        <td>
                            <span class="yekan title">کدملی :</span>
                            <span class="yekan value">06432515488</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="yekan title">شماره تلفن ثابت :</span>
                            <span class="yekan value">24546815218</span>
                        </td>
                        <td>
                            <span class="yekan title">شماره تلفن همراه</span>
                            <span class="yekan value">09105572418</span>
                        </td>
                        <td>
                            <span class="yekan title">تاریخ تولد :</span>
                            <span class="yekan value">1372/9/1</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="yekan title">جنسیت :</span>
                            <span class="yekan value">مرد</span>
                        </td>
                        <td>
                            <span class="yekan title">محل سکونت :</span>
                            <span class="yekan value">سربیشه - بیرجند</span>
                        </td>
                        <td>
                            <span class="yekan title">دریافت خبرنامه :</span>
                            <span class="yekan value">بله</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="yekan title">شماره کارت :</span>
                            <span class="yekan value">xxxx-xxxx-xxxx-xxxx</span>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <a class="update" href=""></a>
                            <a class="change" href=""></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="box">
            <div class="box-header">
                <div class="title">
                    <span class="yekan">گزارش عملکرد</span>
                </div>
                <div class="report">
                    <i></i>
                </div>
            </div>
            <div class="box-content">
                <table>
                    <tr>
                        <td>
                            <span class="yekan title">تعداد کل سفارشات :</span>
                            <span class="yekan value">2</span>
                        </td>
                        <td>
                            <span class="yekan title">کل دیجی بن دریافتی :</span>
                            <span class="yekan value">1</span>
                        </td>
                        <td>
                            <span class="yekan title">تعداد نظرات ارسال شده :</span>
                            <span class="yekan value">0</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="yekan title">سفارشات درانتظار تایید :</span>
                            <span class="yekan value">0</span>
                        </td>
                        <td>
                            <span class="yekan title">کل دیجی بن مصرفی :</span>
                            <span class="yekan value">0</span>
                        </td>
                        <td>
                            <span class="yekan title">تعداد نقدهای ارسال شده :</span>
                            <span class="yekan value">0</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="yekan title">سفارشات در حال پردازش :</span>
                            <span class="yekan value">0</span>
                        </td>
                        <td>
                            <span class="yekan title">کل دیجی بن باطل شده :</span>
                            <span class="yekan value">1</span>
                        </td>
                        <td>
                            <span class="yekan title">تعداد پیغام های خوانده شده :</span>
                            <span class="yekan value">0</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="yekan title">سفارشات انصراف داده شده :</span>
                            <span class="yekan value">0</span>
                        </td>
                        <td>
                            <span class="yekan title">دیجی بن مانده قابل مصرف :</span>
                            <span class="yekan value">0</span>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="yekan title">سفارشات ارسال شده :</span>
                            <span class="yekan value">2</span>
                        </td>
                        <td>
                            <span class="yekan title">دیجی بن مصرف شده در سفارشات در حال پردازش :</span>
                            <span class="yekan value">0</span>
                        </td>
                        <td></td>
                    </tr>

                </table>
            </div>
        </div>
        <div class="box">
            <ul class="tab">
                <li class="yekan">پیغام های من</li>
                <li class="yekan">سفارشات من</li>
                <li class="yekan">لیست مورد علاقه</li>
                <li class="yekan">نقد های من</li>
                <li class="yekan"> نظرات من</li>
                <li class="yekan">دیجی بن های من</li>
                <li class="yekan">کارت های هدیه من</li>
                <li class="yekan">اطلاع رسانی ها</li>
            </ul>
            <div class="tab-child">
                <section>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="yekan">ردیف</td>
                            <td class="yekan">کدرهگیری</td>
                            <td class="yekan">تاریخ</td>
                            <td class="yekan">عنوان</td>
                            <td class="yekan">متن</td>
                            <td class="yekan">وضعیت</td>
                        </tr>
                        <tr>
                            <td class="yekan">1</td>
                            <td class="yekan">555</td>
                            <td class="yekan">1400/6/20</td>
                            <td class="yekan">خرید گوشی</td>
                            <td class="yekan">این گوشی خوبی بود</td>
                            <td class="yekan">وضعیت</td>
                        </tr>
                    </table>
                </section>
                <section>
                    <table cellspacing="0" cellpadding="0">
                        <tr>
                            <td class="yekan">ردیف</td>
                            <td class="yekan">کد</td>
                            <td class="yekan">تاریخ</td>
                            <td class="yekan">مبلغ کل</td>
                            <td class="yekan">وضعیت</td>
                            <td class="yekan">عملیات پرداخت</td>
                            <td class="yekan">نوع</td>
                            <td class="yekan">جزئیات</td>
                        </tr>
                        <tr>
                            <td class="yekan">1</td>
                            <td class="yekan">yourcollege</td>
                            <td class="yekan">
                                <div class="date">1400/6.18</div>
                                <div class="time">10:30</div>
                            </td>
                            <td class="yekan">42,500</td>
                            <td class="yekan">تحویل داده شد</td>
                            <td class="yekan">عملیات پرداخت</td>
                            <td class="yekan">سفارش</td>
                            <td class="yekan">
                                <i onclick="showDetailsTr(this)"></i>
                            </td>
                        </tr>
                        <tr class="details">
                            <td colspan="8">
                                <div class="subTable">
                                    <table cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td class="yekan">کالا</td>
                                            <td class="yekan">تعداد</td>
                                            <td class="yekan">قیمت واحد</td>
                                            <td class="yekan">قیمت کل</td>
                                            <td class="yekan">تخفیف کل</td>
                                            <td class="yekan">مبلغ کل</td>
                                        </tr>
                                        <tr>
                                            <td class="yekan">
                                                <div class="yekan kala">
                                                    ماشین سرتراشی مدل موزرabcddkdid
                                                </div>
                                                <div class="yekan guaranty">
                                                    گارانتی اصالت و سلامت فیزیکی
                                                </div>
                                            </td>
                                            <td class="yekan">2</td>
                                            <td class="yekan">5,000</td>
                                            <td class="yekan">55,000</td>
                                            <td class="yekan">2,000</td>
                                            <td class="yekan">57,000</td>
                                        </tr>
                                        <tr>
                                            <td class="yekan">
                                                <div class="yekan kala">
                                                    ماشین سرتراشی مدل موزرabcddkdid
                                                </div>
                                                <div class="yekan guaranty">
                                                    گارانتی اصالت و سلامت فیزیکی
                                                </div>
                                            </td>
                                            <td class="yekan">2</td>
                                            <td class="yekan">5,000</td>
                                            <td class="yekan">55,000</td>
                                            <td class="yekan">2,000</td>
                                            <td class="yekan">57,000</td>
                                        </tr>
                                    </table>
                                    <p class="yekan">رهگیری سفارش</p>
                                    <div class="order-steps">
                                        <div class="dash">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <ul>
                                            <li>
                                                <span class="circle"></span>
                                                <span class="line"></span>
                                                <span class="yekan text">تایید سفارش</span>
                                            </li>
                                            <li>
                                                <span class="circle"></span>
                                                <span class="line"></span>
                                                <span class="yekan text">پرداخت</span>
                                            </li>
                                            <li>
                                                <span class="circle"></span>
                                                <span class="line"></span>
                                                <span class="yekan text">پردازش انبار</span>
                                            </li>
                                            <li>
                                                <span class="circle"></span>
                                                <span class="line"></span>
                                                <span class="yekan text">آماده ارسال</span>
                                            </li>
                                            <li>
                                                <span class="circle"></span>
                                                <span class="yekan text">تحویل داده شد</span>
                                            </li>
                                        </ul>
                                        <div class="dash">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="moreDetails">
                                        <table cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td class="yekan">روش ارسال : تحویل اکسپرس با بیشترین سرعت</td>
                                                <td class="yekan">زمان ارسال : بازه 12-15 تاریخ 1/1/1</td>
                                                <td class="yekan">کدمرسوله : نامشخص</td>
                                            </tr>
                                            <tr>
                                                <td class="yekan">روش ارسال : تحویل اکسپرس با بیشترین سرعت</td>
                                                <td class="yekan">زمان ارسال : بازه 12-15 تاریخ 1/1/1</td>
                                                <td class="yekan">کدمرسوله : نامشخص</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="yekan">1</td>
                            <td class="yekan">yourcollege</td>
                            <td class="yekan">
                                <div class="date">1400/6.18</div>
                                <div class="time">10:30</div>
                            </td>
                            <td class="yekan">42,500</td>
                            <td class="yekan">تحویل داده شد</td>
                            <td class="yekan">عملیات پرداخت</td>
                            <td class="yekan">سفارش</td>
                            <td class="yekan">
                                <i onclick="showDetailsTr(this)"></i>
                            </td>
                        </tr>
                        <tr class="details">
                            <td colspan="8">
                                <div class="subTable">
                                    <table cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td class="yekan">کالا</td>
                                            <td class="yekan">تعداد</td>
                                            <td class="yekan">قیمت واحد</td>
                                            <td class="yekan">قیمت کل</td>
                                            <td class="yekan">تخفیف کل</td>
                                            <td class="yekan">مبلغ کل</td>
                                        </tr>
                                        <tr>
                                            <td class="yekan">
                                                <div class="yekan kala">
                                                    ماشین سرتراشی مدل موزرabcddkdid
                                                </div>
                                                <div class="yekan guaranty">
                                                    گارانتی اصالت و سلامت فیزیکی
                                                </div>
                                            </td>
                                            <td class="yekan">2</td>
                                            <td class="yekan">5,000</td>
                                            <td class="yekan">55,000</td>
                                            <td class="yekan">2,000</td>
                                            <td class="yekan">57,000</td>
                                        </tr>
                                        <tr>
                                            <td class="yekan">
                                                <div class="yekan kala">
                                                    ماشین سرتراشی مدل موزرabcddkdid
                                                </div>
                                                <div class="yekan guaranty">
                                                    گارانتی اصالت و سلامت فیزیکی
                                                </div>
                                            </td>
                                            <td class="yekan">2</td>
                                            <td class="yekan">5,000</td>
                                            <td class="yekan">55,000</td>
                                            <td class="yekan">2,000</td>
                                            <td class="yekan">57,000</td>
                                        </tr>
                                    </table>
                                    <p class="yekan">رهگیری سفارش</p>
                                    <div class="order-steps">
                                        <div class="dash">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <ul>
                                            <li>
                                                <span class="circle"></span>
                                                <span class="line"></span>
                                                <span class="yekan text">تایید سفارش</span>
                                            </li>
                                            <li>
                                                <span class="circle"></span>
                                                <span class="line"></span>
                                                <span class="yekan text">پرداخت</span>
                                            </li>
                                            <li>
                                                <span class="circle"></span>
                                                <span class="line"></span>
                                                <span class="yekan text">پردازش انبار</span>
                                            </li>
                                            <li>
                                                <span class="circle"></span>
                                                <span class="line"></span>
                                                <span class="yekan text">آماده ارسال</span>
                                            </li>
                                            <li>
                                                <span class="circle"></span>
                                                <span class="yekan text">تحویل داده شد</span>
                                            </li>
                                        </ul>
                                        <div class="dash">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="moreDetails">
                                        <table cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td class="yekan">روش ارسال : تحویل اکسپرس با بیشترین سرعت</td>
                                                <td class="yekan">زمان ارسال : بازه 12-15 تاریخ 1/1/1</td>
                                                <td class="yekan">کدمرسوله : نامشخص</td>
                                            </tr>
                                            <tr>
                                                <td class="yekan">روش ارسال : تحویل اکسپرس با بیشترین سرعت</td>
                                                <td class="yekan">زمان ارسال : بازه 12-15 تاریخ 1/1/1</td>
                                                <td class="yekan">کدمرسوله : نامشخص</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </section>
                <section class="favorite">
                    <ul>
                        <li>
                            <a>
                                <img class="folder" src="<?= URL ?>image/panel-page/folder_documents_all.png"/>
                                <span class="yekan text">همه پوشه ها</span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <img class="folder" src="<?= URL ?>image/panel-page/folder_documents_all.png" alt="no-picture"/>
                                <span class="yekan text">گوشی</span>
                                <img class="edit" src="<?= URL ?>image/panel-page/icon_edit_16.png" alt="no-picture"/>
                            </a>
                        </li>
                    </ul>
                    <div class="item">
                        <div class="right">
                            <img src="<?= URL ?>image/panel-page/1.jpg" alt="no-picture"/>
                        </div>
                        <div class="left">
                            <p class="yekan title">
                                گوشی Apple مدل xyz
                                <img src="<?= URL ?>image/panel-page/Delete.gif" alt="no-picture"/>
                                <img src="<?= URL ?>image/panel-page/Edit.gif" alt="no-picture"/>
                            </p>
                            <p class="yekan text">
                                توضیحات در باره ای این محصول توسط کاربر .................
                            </p>

                        </div>
                    </div>
                    <div class="item">
                        <div class="right">
                            <img src="<?= URL ?>image/panel-page/1.jpg" alt="no-picture"/>
                        </div>
                        <div class="left">
                            <p class="yekan title">
                                گوشی Apple مدل xyz
                                <img src="<?= URL ?>image/panel-page/Delete.gif" alt="no-picture"/>
                                <img src="<?= URL ?>image/panel-page/Edit.gif" alt="no-picture"/>
                            </p>
                            <p class="yekan text">
                                توضیحات در باره ای این محصول توسط کاربر .................
                            </p>

                        </div>
                    </div>
                </section>
                <section>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="yekan">ردیف</td>
                            <td class="yekan">محصول</td>
                            <td class="yekan">می پسندم</td>
                            <td class="yekan">وضعیت</td>
                        </tr>
                        <tr>
                            <td class="yekan">1</td>
                            <td class="yekan">گوشی سامسونگ مدل گلکسی پرایم .</td>
                            <td class="yekan"> می پسندم</td>
                            <td class="yekan">در حال بررسی</td>
                        </tr>
                    </table>
                </section>
                <section class="nazarat">
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="yekan">ردیف</td>
                            <td class="yekan">تاریخ</td>
                            <td class="yekan">کالا</td>
                            <td class="yekan">می پسندم</td>
                            <td class="yekan">مشاهده</td>
                            <td class="yekan">ویرایش</td>
                            <td class="yekan">حذف</td>
                        </tr>
                        <tr>
                            <td class="yekan">1</td>
                            <td class="yekan">شهریور1400</td>
                            <td class="yekan">گوشی</td>
                            <td class="yekan">می پسندم</td>
                            <td class="yekan">
                                <img src="<?= URL ?>image/panel-page/View.gif" alt="no-picture"/>
                            </td>
                            <td class="yekan">
                                <img src="<?= URL ?>image/panel-page/Edit.gif" alt="no-picture"/>
                            </td>
                            <td class="yekan">
                                <img src="<?= URL ?>image/panel-page/Delete.gif" alt="no-picture"/>
                            </td>
                        </tr>

                    </table>
                </section>
                <section class="digiBon">
                    <div class="title">
                        <span class="yekan">کد دریافتی دیجی بن :</span>
                        <input type="text" placeholder="کد دیجی بن خود را وارد کنید......"/>
                        <img src="<?= URL ?>image/panel-page/SaveVoucher.gif" alt="no-picture"/>
                    </div>

                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="yekan">ردیف</td>
                            <td class="yekan">کد</td>
                            <td class="yekan">سفارش</td>
                            <td class="yekan">شرح</td>
                            <td class="yekan">تاریخ ثبت</td>
                            <td class="yekan">تاریخ انقضاء</td>
                            <td class="yekan">اعتبار اولیه</td>
                            <td class="yekan">اعتبار مصرفی</td>
                            <td class="yekan">مانده</td>
                            <td class="yekan">وضعیت</td>
                            <td class="yekan">جزئیات</td>
                        </tr>
                        <tr>
                            <td class="yekan">1</td>
                            <td class="yekan">12345</td>
                            <td class="yekan">DJK-ali123</td>
                            <td class="yekan">دیجی بن دریافتی از کد DJK-ali123</td>
                            <td class="yekan">تیرماه 1400</td>
                            <td class="yekan">تیرماه 1401</td>
                            <td class="yekan">500.000</td>
                            <td class="yekan">250.000</td>
                            <td class="yekan">250.0000</td>
                            <td class="yekan">باطل شده</td>
                            <td class="yekan">
                                <i onclick="showDetailsTr(this)"></i>
                            </td>
                        </tr>
                        <tr class="details">
                            <td colspan="11">
                                <div class="subTable2">
                                    <table cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td class="yekan">سفارش</td>
                                            <td class="yekan">نوع</td>
                                            <td class="yekan">تاریخ</td>
                                            <td class="yekan">اعتبار مصرفی</td>
                                        </tr>
                                        <tr>
                                            <td class="yekan">DJK-ali123</td>
                                            <td class="yekan">خرید</td>
                                            <td class="yekan">تیرماه 1400</td>
                                            <td class="yekan">250.000</td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </table>
                </section>
            </div>
        </div>

    </div>
</div>

<script language="JavaScript" src="<?= URL ?>js/jquery-3.0.0.min.js"></script>
<script language="JavaScript" src="<?= URL ?>js/digikala.js"></script>

<script>
    var tagLi = $("#main .main-panel .box ul.tab li");
    tagLi.click(function () {
        tagLi.removeClass("active1");
        $(this).addClass("active1");

        var getSection = $("#main > .main-panel > .box > .tab-child > section");
        var index = $(this).index();
        getSection.fadeOut(0);
        getSection.eq(index).fadeIn(0);
    });

    $("#main .main-panel .box .tab-child section .details .subTable .order-steps ul li").click(function () {
        $(this).toggleClass("active");
    });

    function showDetailsTr(tagI) {
        var getI = $(tagI);
        getI.toggleClass("active");
        var getTr = getI.parents("tr");
        getTr.next().fadeToggle(100);
    }

    $("#main .main-panel .box .favorite ul li").hover(function () {
        $(".edit", this).fadeIn(200);
    }, function () {
        $(".edit", this).fadeOut(0);
    });
</script>

</body>
</html>