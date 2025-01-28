<style>

    #main .sliderProduct {
        width: 1200px;
        height: 300px;
        background-color: #fff;
        border-radius: 4px;
        overflow: hidden;
        margin: 10px 0;
        box-shadow: 1px 2px 3px rgba(0, 0, 0, .19);
    }

    #main .sliderProduct .sliderProduct-top {
        height: 40px;
        padding: 0 25px;
        background-color: #d6d1ee;
        line-height: 40px;
    }

    #main .sliderProduct .sliderProduct-top p {
        margin: 0;
        padding: 0;
        font-size: 11pt;
        color: #565656;
    }

    #main .sliderProduct .sliderProduct-content {
        padding: 15px 25px;
        height: 230px;
    }

    #main .sliderProduct .sliderProduct-content .sliderProduct-prev, .sliderProduct-next {
        display: block;
        width: 50px;
        height: 100%;
        position: relative;
        float: right;
    }

    #main .sliderProduct .sliderProduct-content .sliderProduct-next i {
        display: block;
        width: 25px;
        height: 40px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -27px -24px;
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
        top: 95px;
        cursor: pointer;
    }

    #main .sliderProduct .sliderProduct-content .sliderProduct-prev i {
        display: block;
        width: 25px;
        height: 40px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -27px -68px;
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
        top: 95px;
        cursor: pointer;
    }

    #main .sliderProduct .sliderProduct-content .sliderProduct-main {
        width: 1050px;
        height: 100%;
        float: right;
        overflow: hidden;
    }

    #main .sliderProduct .sliderProduct-content .sliderProduct-main ul {
        padding: 0;
        margin: 0;
        height: 100%;
    }

    #main .sliderProduct .sliderProduct-content .sliderProduct-main ul li {
        list-style: none;
        width: 180px;
        height: 224px;
        padding-top: 4px;
        border: 1px solid #ccc;
        margin: 0 13px;
        float: right;
    }

    #main .sliderProduct .sliderProduct-content .sliderProduct-main ul li a {
        display: block;
        width: 100%;
        height: 100%;
        text-align: center;
        cursor: pointer;
    }

    #main .sliderProduct .sliderProduct-content .sliderProduct-main ul li image {
        width: 150px;
        height: 150px;
    }

    #main .sliderProduct .sliderProduct-content .sliderProduct-main ul li .title {
        text-align: center;
        font-size: 11pt;
        overflow: hidden;
    }

    #main .sliderProduct .sliderProduct-content .sliderProduct-main ul li .price {
        text-align: center;
        margin-top: 15px;
    }

    #main .sliderProduct .sliderProduct-content .sliderProduct-main ul li .price .one {
        font-size: 12pt;
        color: #0f8a0f;
        padding-right: 11px;
        margin-left: 12px;
    }

    #main .sliderProduct .sliderProduct-content .sliderProduct-main ul li .price .tow {
        font-size: 10pt;
    }

</style>

<div class="sliderProduct">

    <div class="sliderProduct-top">
        <p class="yekan">خریداران این محصول . محصولات زیر را هم خریده اند.</p>
    </div>
    <div class="sliderProduct-content">
        <span class="sliderProduct-prev" onclick="sliderProduct('prev')"><i></i></span>
        <div class="sliderProduct-main">
            <ul>
                <li>
                    <a>
                        <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                        <div class="yekan title">Asuse coreI5</div>
                        <div class="price">
                            <span class="yekan one">8,000,000</span>
                            <span class="yekan tow">تومان</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_2.jpg" alt="no-picture"/>
                        <div class="yekan title">Asuse coreI5</div>
                        <div class="price">
                            <span class="yekan one">8,000,000</span>
                            <span class="yekan tow">تومان</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_3.jpg" alt="no-picture"/>
                        <div class="yekan title">Asuse coreI5</div>
                        <div class="price">
                            <span class="yekan one">8,000,000</span>
                            <span class="yekan tow">تومان</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_4.jpg" alt="no-picture"/>
                        <div class="yekan title">Asuse coreI5</div>
                        <div class="price">
                            <span class="yekan one">8,000,000</span>
                            <span class="yekan tow">تومان</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_5.jpg" alt="no-picture"/>
                        <div class="yekan title">Asuse coreI5</div>
                        <div class="price">
                            <span class="yekan one">8,000,000</span>
                            <span class="yekan tow">تومان</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_1.jpg" alt="no-picture"/>
                        <div class="yekan title">Asuse coreI5</div>
                        <div class="price">
                            <span class="yekan one">8,000,000</span>
                            <span class="yekan tow">تومان</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_2.jpg" alt="no-picture"/>
                        <div class="yekan title">Asuse coreI5</div>
                        <div class="price">
                            <span class="yekan one">8,000,000</span>
                            <span class="yekan tow">تومان</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_3.jpg" alt="no-picture"/>
                        <div class="yekan title">Asuse coreI5</div>
                        <div class="price">
                            <span class="yekan one">8,000,000</span>
                            <span class="yekan tow">تومان</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_4.jpg" alt="no-picture"/>
                        <div class="yekan title">Asuse coreI5</div>
                        <div class="price">
                            <span class="yekan one">8,000,000</span>
                            <span class="yekan tow">تومان</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_5.jpg" alt="no-picture"/>
                        <div class="yekan title">Asuse coreI5</div>
                        <div class="price">
                            <span class="yekan one">8,000,000</span>
                            <span class="yekan tow">تومان</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="<?= URL ?>image/main/sliderScroll1/scrollslider_5.jpg" alt="no-picture"/>
                        <div class="yekan title">Asuse coreI5</div>
                        <div class="price">
                            <span class="yekan one">8,000,000</span>
                            <span class="yekan tow">تومان</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <span class="sliderProduct-next" onclick="sliderProduct('next')"><i></i></span>
    </div>
</div>
