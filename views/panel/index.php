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



</style>

<div id="main">
    <div class="main-panel">

        <?php
        require "user_profile.php";
        require "gozaresh.php";
        require "tab.php";
        ?>

    </div>
</div>


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