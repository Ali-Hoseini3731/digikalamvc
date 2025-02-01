
<style>

    /*-----------show type 1----------*/
    #search-content #products {
        float: right;
        width: 100%;
        margin-top: 40px;
    }

    #products ul {
        padding: 0;
        margin: 0;
        width: 100%;
        float: right;
    }

    #products ul li {
        width: 200px;
        height: 330px;
        border: 1px solid #aaa;
        list-style: none;
        float: right;
        margin-left: 8px;
        margin-bottom: 10px;
        padding: 5px;
        box-shadow: 1px 3px 3px rgba(0, 0, 0, .2);
        border-radius: 4px;
    }

    #products ul li a {
        display: block;
        height: 100%;
        cursor: pointer;
    }

    #products ul li a .image {
        height: 180px;
        text-align: center;
    }

    #products ul li a .image img {
        width: 180px;
        height: 180px;
        margin: 0 auto;
    }

    #products ul li a .colors {
        text-align: center;
        margin-top: 11px;
    }

    #products ul li a .colors .color {
        display: inline-block;
        width: 15px;
        height: 15px;
        border: 1px solid #cccccc;
        cursor: pointer;
    }

    #products ul li a .colors .color:nth-child(1) {
        background-color: gold;
    }

    #products ul li a .colors .color:nth-child(2) {
        background-color: silver;
    }

    #products ul li a .title {
        width: 100%;
        text-align: left;
        font-size: 12pt;
    }

    #products ul li a .discription {
        display: none;
        width: 100%;
        height: 290px;
        overflow-y: auto;
    }

    #products ul li a .stars {
        width: 100%;
        margin-top: 5px;
        text-align: center;
    }

    #products ul li a .stars .stars-gray {
        display: inline-block;
        width: 67px;
        height: 9px;
        background: url("<?= URL ?>/image/search-page/stars.png") repeat;
        background-position: 0 -9px;
        position: relative;
    }

    #products ul li a .stars-gray .stars-red {
        display: inline-block;
        width: 51px;
        height: 9px;
        background: url("<?= URL ?>/image/search-page/stars.png") repeat;
        background-position: 0 0;
        position: absolute;
        left: 0;
        top: 0;
    }

    #products ul li a .prices {
        width: 100%;
        margin-top: 10px;
        position: relative;
    }

    #products ul li a .prices .price1 {
        color: red;
        text-decoration: line-through;
        margin: 0;
        font-size: 10pt;
        height: 20px;
    }

    #products ul li a .prices .price2 {
        margin: 0;
        font-size: 13pt;
        color: #177317;
    }

    #products ul li a i {
        display: block;
        width: 30px;
        height: 30px;
        float: left;
        background: url("<?= URL ?>/image/search-page/addtocart-min.png") no-repeat;
        position: absolute;
        left: 5px;
        top: 18px;
    }

    /*--------show type2------*/
    #products.display ul li {
        width: 878px !important;
        height: 400px;
        margin-left: 0;
        margin-bottom: 10px;
        padding: 0;
    }

    #products.display ul li .display-right {
        float: right;
        width: 200px;
        height: 100%;
        padding: 10px 0;
    }

    #products.display ul li .display-left {
        float: right;
        width: 660px;
        height: 100%;
        padding: 9px;
        position: relative;
    }

    #products.display ul li .display-left::before {
        display: block;
        content: '';
        width: 1px;
        height: 290px;
        background-color: #f7f3f3;
        position: absolute;
        top: 48px;
        right: -2px;
    }

    #products.display ul li .display-left .title {
        text-align: right;
    }

    #products.display ul li .display-left .discription {
        display: block;
    }

</style>

<div id="products">
    <ul>
        <li>
            <a>
                <div class="display-right">
                    <div class="image">
                        <img src="<?= URL ?>image/search-page/product1.jpg" alt="no-picture"/>
                    </div>
                    <div class="colors">
                        <span class="color" title="طلایی"></span>
                        <span class="color" title="نقره ای"></span>
                        <span class="color" title="سفید"></span>
                    </div>
                    <div class="stars">
                            <span class="stars-gray">
                                <span class="stars-red"></span>
                            </span>
                    </div>
                </div>
                <div class="display-left">
                    <div class="title yekan">
                        Apple iPhone 5s
                    </div>
                    <div class="discription">
                        <h5 class="yekan">توضیحات : </h5>
                        <p class="yekan fontSm">این گوشی خیلی خوبی هست دوستان بخریدش</p>
                    </div>
                    <div class="prices">
                        <p class="yekan price1">1,350,000 هزار تومان</p>
                        <p class="yekan price2">1,295,000 تومان</p>
                        <i></i>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="display-right">
                    <div class="image">
                        <img src="<?= URL ?>image/search-page/product2.jpg" alt="no-picture"/>
                    </div>
                    <div class="colors">
                        <span class="color" title="طلایی"></span>
                        <span class="color" title="نقره ای"></span>
                        <span class="color" title="سفید"></span>
                    </div>
                    <div class="stars">
                            <span class="stars-gray">
                                <span class="stars-red"></span>
                            </span>
                    </div>
                </div>
                <div class="display-left">
                    <div class="title yekan">
                        Apple iPhone 5s
                    </div>
                    <div class="discription">
                        <h5 class="yekan">توضیحات : </h5>
                        <p class="yekan fontSm">این گوشی خیلی خوبی هست دوستان بخریدش</p>
                    </div>
                    <div class="prices">
                        <p class="yekan price1">1,350,000 هزار تومان</p>
                        <p class="yekan price2">1,295,000 تومان</p>
                        <i></i>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="display-right">
                    <div class="image">
                        <img src="<?= URL ?>image/search-page/product3.jpg" alt="no-picture"/>
                    </div>
                    <div class="colors">
                        <span class="color" title="طلایی"></span>
                        <span class="color" title="نقره ای"></span>
                        <span class="color" title="سفید"></span>
                    </div>
                    <div class="stars">
                            <span class="stars-gray">
                                <span class="stars-red"></span>
                            </span>
                    </div>
                </div>
                <div class="display-left">
                    <div class="title yekan">
                        Apple iPhone 5s
                    </div>
                    <div class="discription">
                        <h5 class="yekan">توضیحات : </h5>
                        <p class="yekan fontSm">این گوشی خیلی خوبی هست دوستان بخریدش</p>
                    </div>
                    <div class="prices">
                        <p class="yekan price1">1,350,000 هزار تومان</p>
                        <p class="yekan price2">1,295,000 تومان</p>
                        <i></i>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="display-right">
                    <div class="image">
                        <img src="<?= URL ?>image/search-page/product4.jpg" alt="no-picture"/>
                    </div>
                    <div class="colors">
                        <span class="color" title="طلایی"></span>
                        <span class="color" title="نقره ای"></span>
                        <span class="color" title="سفید"></span>
                    </div>
                    <div class="stars">
                            <span class="stars-gray">
                                <span class="stars-red"></span>
                            </span>
                    </div>
                </div>
                <div class="display-left">
                    <div class="title yekan">
                        Apple iPhone 5s
                    </div>
                    <div class="discription">
                        <h5 class="yekan">توضیحات : </h5>
                        <p class="yekan fontSm">این گوشی خیلی خوبی هست دوستان بخریدش</p>
                    </div>
                    <div class="prices">
                        <p class="yekan price1">1,350,000 هزار تومان</p>
                        <p class="yekan price2">1,295,000 تومان</p>
                        <i></i>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="display-right">
                    <div class="image">
                        <img src="<?= URL ?>image/search-page/product3.jpg" alt="no-picture"/>
                    </div>
                    <div class="colors">
                        <span class="color" title="طلایی"></span>
                        <span class="color" title="نقره ای"></span>
                        <span class="color" title="سفید"></span>
                    </div>
                    <div class="stars">
                            <span class="stars-gray">
                                <span class="stars-red"></span>
                            </span>
                    </div>
                </div>
                <div class="display-left">
                    <div class="title yekan">
                        Apple iPhone 5s
                    </div>
                    <div class="discription">
                        <h5 class="yekan">توضیحات : </h5>
                        <p class="yekan fontSm">این گوشی خیلی خوبی هست دوستان بخریدش</p>
                    </div>
                    <div class="prices">
                        <p class="yekan price1">1,350,000 هزار تومان</p>
                        <p class="yekan price2">1,295,000 تومان</p>
                        <i></i>
                    </div>
                </div>
            </a>
        </li>
    </ul>
</div>