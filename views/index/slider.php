<style>


    #slider {
        height: 310px;
        background-color: #fff;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
    }

    #slider-img {
        height: 260px;
        overflow: hidden;
        position: relative;
    }

    #slider-img #prev {
        display: block;
        width: 19px;
        height: 33px;
        background: url("<?= URL ?>/image/main/slider/arrow_slider.png") no-repeat;
        background-position: 0 -33px;
        position: absolute;
        right: 12px;
        top: 125px;
        z-index: 2;
        cursor: pointer;
    }

    #slider-img #next {
        display: block;
        width: 19px;
        height: 33px;
        background: url("<?= URL ?>/image/main/slider/arrow_slider.png") no-repeat;
        position: absolute;
        left: 12px;
        top: 125px;
        z-index: 2;
        cursor: pointer;
    }

    #slider-img a.item {
        display: none;
    }

    #slider-img img {
        display: block;
        height: 100%;
        width: 100%;
    }

    #slider-navigator {
        height: 50px;
        background-color: rgba(0, 0, 0, .8);
    }

    #slider-navigator ul {
        margin: 0;
        padding: 0;
        float: right;
    }

    #slider-navigator ul li {
        list-style: none;
        width: 178px;
        height: 50px;
        float: right;
    }

    #slider-navigator ul li a {
        display: block;
        width: 100%;
        height: 100%;
        text-align: center;
        line-height: 49px;
        color: #fff;
        cursor: pointer;
        position: relative;
    }

    #slider #slider-navigator ul .active a {
        color: #000;
        background-color: #fff;
    }

    #slider #slider-navigator ul .active a::after {
        content: "";
        position: absolute;
        top: -13px;
        left: 0;
        right: 0;
        margin: auto;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 12.5px 13px 12.5px;
        border-color: transparent transparent #ffffff;
    }

</style>

<div id="slider">
    <div id="slider-img">
        <span id="prev"></span>
        <span id="next"></span>
        <a href="" class="item">
            <img src="<?= URL ?>image/main/slider/slider1.jpg" alt="no picture"/>
        </a>
        <a href="" class="item">
            <img src="<?= URL ?>image/main/slider/slider2.jpg" alt="no picture"/>
        </a>
        <a href="" class="item">
            <img src="<?= URL ?>image/main/slider/slider3.jpg" alt="no picture"/>
        </a>
        <a href="" class="item">
            <img src="<?= URL ?>image/main/slider/slider4.jpg" alt="no picture"/>
        </a>
        <a href="" class="item">
            <img src="<?= URL ?>image/main/slider/slider5.jpg" alt="no picture"/>
        </a>
    </div>

    <div id="slider-navigator">
        <ul>
            <li>
                <a class="yekan fontSm">محصولات کالای خواب</a>
            </li>
            <li>
                <a class="yekan fontSm">لوازم جانبی دوربین</a>
            </li>
            <li>
                <a class="yekan fontSm">سری جدید vio</a>
            </li>
            <li>
                <a class="yekan fontSm">کتب معنوی</a>
            </li>
            <li>
                <a class="yekan fontSm">لوازم خانگی</a>
            </li>
        </ul>
    </div>
</div>s