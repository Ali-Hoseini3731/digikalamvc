
<style>

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


    #main .main-panel .box .nazarat table tr td img {
        vertical-align: middle;
        cursor: pointer;
    }




</style>

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

        <?php

        require "tab1.php";
        require "tab2.php";
        require "tab3.php";
        require "tab4.php";
        require "tab5.php";
        require "tab6.php";

        ?>

    </div>
</div>
