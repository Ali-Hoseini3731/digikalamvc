<style>

    #main .tab {
        width: 1200px;
        padding: 0;
        margin: 0;
        background-color: #dfe3ed;
        border-radius: 4px;
        overflow: hidden;
    }

    #main .tab li {
        list-style-type: none;
        padding: 15px 20px;
        font-size: 11.5pt;
        border-left: 1px solid #c3c2c2;
        float: right;
        cursor: pointer;
        padding-right: 35px;
        position: relative;
    }

    #main .tab li::before {
        content: "";
        display: block;
        width: 25px;
        height: 25px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        position: absolute;
        right: 3px;
        top: 20px;
    }

    #main .tab li.one::before {
        background-position: -105px -268px;
    }

    #main .tab li.tow::before {
        background-position: -316px -268px;
    }

    #main .tab li.three::before {
        background-position: -261px -268px;
    }

    #main .tab li.four::before {
        background-position: -210px -268px;
    }

    #main .tab li.active {
        background-color: #fff;
        color: #0000cf;
        border-top: 2px solid #0000ff;
        box-shadow: 0 0 2px rgba(0, 0, 0, .2);
    }

    #main .tab li.active.one::before {
        background-position: -105px -309px;
    }

    #main .tab li.active.tow::before {
        background-position: -316px -309px;
    }

    #main .tab li.active.three::before {
        background-position: -261px -309px;
    }

    #main .tab li.active.four::before {
        background-position: -210px -309px;
    }

    #main .tab-child {
        width: 1200px;
        background-color: #FFFFFF;
    }

    #main > .tab-child > section {
        padding: 15px;
        display: none;
    }

</style>

<ul class="tab">
    <li class="yekan one active">نقد و بررسی تخصصی</li>
    <li class="yekan tow">مشخصات فنی</li>
    <li class="yekan three">نظرات کاربران</li>
    <li class="yekan four">پرسش و پاسخ</li>
</ul>
<div class="tab-child">
    <?php
    require "tab1.php";
    require "tab2.php";
    require "tab3.php";
    require "tab4.php";
    ?>
</div>
