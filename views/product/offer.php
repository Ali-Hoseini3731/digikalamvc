<style>

    #main #offer {
        width: 100%;
        height: 60px;
        margin-top: 10px;
        border-radius: 5px 5px 0 0;
        background: #ffedef url("<?= URL ?>image/product-page/amazing-offer.png") no-repeat;
        background-position: 950px center;
        position: relative;
    }

    #offer .flipTimer, .flipTimer div {
        direction: ltr !important;
    }

    #offer .flipTimer {
        position: absolute;
        transform: scale(.3);
        left: -151px;
        top: -20px;
    }

    #offer .discount {
        display: block;
        width: 180px;
        height: 30px;
        position: relative;
        float: left;
        margin-left: 200px;
        margin-top: 17px;
        border-radius: 4px;
        overflow: hidden;
    }

    #offer .discount .right {
        display: block;;
        width: 110px;
        height: 100%;
        background-color: #ff0000;
        float: right;
    }

    #offer .discount .right .number {
        display: block;
        width: 35px;
        height: 100%;
        text-align: center;
        float: right;
        color: #fff;
        font-size: 15pt;
        line-height: 30px;
    }

    #offer .discount .right .tumon {
        display: block;
        width: 75px;
        height: 100%;
        text-align: center;
        float: right;
        color: #fff;
        font-size: 10pt;
        line-height: 30px;
    }

    #offer .discount .left {
        display: block;
        width: 70px;
        height: 100%;
        background-color: #e00a13;
        float: left;
        text-align: center;
        color: #fff;
        font-size: 13pt;
        line-height: 30px;
    }


</style>


<div id="offer">
        <span class="discount">
            <span class="right">
                <span class="number yekan">25</span>
                <span class="tumon yekan">هزار تومان</span>
            </span>
            <span class="left yekan">تخفیف</span>
        </span>
    <div class="flipTimer">
        <div class="hours"></div>
        <div class="minutes"></div>
        <div class="seconds"></div>
    </div>
</div>
