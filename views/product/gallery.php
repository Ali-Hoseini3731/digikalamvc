<style>

    #product-gallery {
        width: 900px;
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

    #product-gallery .product-gallery-header {
        height: 50px;
        background-color: #ececec;
        position: relative;
    }

    #product-gallery .product-gallery-header p {
        margin: 0;
        padding-right: 15px;
        padding-top: 9px;
        font-size: 12.4pt;
        color: #0b2d4a;
    }

    #product-gallery .product-gallery-header i {
        display: block;
        width: 25px;
        height: 25px;
        border: 1px solid #ccc;
        border-radius: 100%;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -136px -124px;
        position: absolute;
        left: 10px;
        top: 12px;
        cursor: pointer;

    }

    #product-gallery .product-gallery-content {
        height: 550px;
    }

    #product-gallery .product-gallery-content .right {
        width: 700px;
        height: 100%;
        float: right;
        text-align: center;
        position: relative;
    }

    #product-gallery .product-gallery-content .right .mainImage {
        max-width: 500px;
        max-height: 500px;
        margin-top: 10px;
        display: none;
    }

    #product-gallery .product-gallery-content .right #canvas {
        width: 450px;
        height: 350px;
        position: absolute;
        left: 100px;
        display: none;
    }

    #product-gallery .product-gallery-content .left {
        width: 199px;
        height: 100%;
        float: right;
        overflow-y: auto;
    }

    #product-gallery .product-gallery-content .left ul {
        margin: 0;
        padding: 0;
    }

    #product-gallery .product-gallery-content .left ul li {
        list-style-type: none;
        height: 150px;
        border-bottom: 1px dotted #ccc;
        text-align: center;
        opacity: 0.19;
        cursor: pointer;
    }

    #product-gallery .product-gallery-content .left ul li:first-child {
        position: relative;
    }

    #product-gallery .product-gallery-content .left ul li:first-child i {
        display: block;
        width: 50px;
        height: 50px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -357px -115px;
        position: absolute;
        left: -5px;
        bottom: 0;
    }

    #product-gallery .product-gallery-content .left ul li.active {
        list-style-type: none;
        height: 150px;
        border-bottom: 1px dotted #ccc;
        text-align: center;
        opacity: 1;
        cursor: pointer;
    }

    #product-gallery .product-gallery-content .left ul li img {
        max-width: 140px;
        max-height: 140px;
        margin-top: 5px;
    }

    #page-dark {
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

<div id="product-gallery">
    <div class="product-gallery-header">
        <p class="yekan">گوشی سامسونگ مدل Glexy Grand Prime</p>
        <i class="close"></i>
    </div>
    <div class="product-gallery-content">
        <div class="right">
            <img class="mainImage" src="<?= URL ?>" alt="no-picture"/>
            <canvas id="canvas"></canvas>
        </div>
        <div class="left">
            <ul>
                <li data-main-image="">
                    <img  src="<?= URL ?>image/product-page/gallery/3d/bmw1.jpg" alt="no-picture"/>
                    <i class="3d"></i>
                </li>
                <li data-main-image="<?= URL ?>image/product-page/gallery/large/1472662586.jpg">
                    <img src="<?= URL ?>image/product-page/gallery/meduim/1472662586.jpg" alt="no-picture"/>
                </li>
                <li data-main-image="<?= URL ?>image/product-page/gallery/large/1472662593.jpg">
                    <img src="<?= URL ?>image/product-page/gallery/meduim/1472662593.jpg" alt="no-picture"/>
                </li>
                <li data-main-image="<?= URL ?>image/product-page/gallery/large/1472662590.jpg">
                    <img src="<?= URL ?>image/product-page/gallery/meduim/1472662590.jpg" alt="no-picture"/>
                </li>
                <li data-main-image="<?= URL ?>image/product-page/gallery/large/1472662586.jpg">
                    <img src="<?= URL ?>image/product-page/gallery/meduim/1472662586.jpg" alt="no-picture"/>
                </li>
                <li data-main-image="<?= URL ?>image/product-page/gallery/large/1472662586.jpg">
                    <img src="<?= URL ?>image/product-page/gallery/meduim/1472662586.jpg" alt="no-picture"/>
                </li>
                <li data-main-image="<?= URL ?>image/product-page/gallery/large/1472662593.jpg">
                    <img src="<?= URL ?>image/product-page/gallery/meduim/1472662593.jpg" alt="no-picture"/>
                </li>
                <li data-main-image="<?= URL ?>image/product-page/gallery/large/1472662590.jpg">
                    <img src="<?= URL ?>image/product-page/gallery/meduim/1472662590.jpg" alt="no-picture"/>
                </li>
                <li data-main-image="<?= URL ?>image/product-page/gallery/large/1472662586.jpg">
                    <img src="<?= URL ?>image/product-page/gallery/meduim/1472662586.jpg" alt="no-picture"/>
                </li>
            </ul>
        </div>
    </div>
</div>
