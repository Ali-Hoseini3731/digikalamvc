<style>

    #sidebar-right {
        width: 290px;
        float: right;
    }

    #sidebar-right > #top-img {
        border-radius: 3px;
        box-shadow: 0 2px 3px #aaa;
    }

    #sidebar-right > ul.first-ul {
        margin: 0;
        padding: 0;
    }

    #sidebar-right > ul.first-ul > li {
        list-style: none;
        margin-top: 12px;
    }

    #sidebar-right > ul.first-ul > li > a {
        display: block;
        width: 100%;
        height: 160px;
        position: relative;
    }

    #sidebar-right > ul.first-ul > li > a::before {
        content: '';
        display: block;
        width: 100%;
        height: 160px;
        background-color: rgba(0, 0, 0, .3);
        position: absolute;
        border-radius: 4px;
    }

    #sidebar-right > ul.first-ul > li > a > img {
        display: block;
        width: 100%;
        height: 160px;
        border-radius: 4px;
        box-shadow: 0 4px 5px #aaa;;
    }

    #sidebar-right > ul.first-ul > li > a > span {
        display: block;
        width: 70px;
        height: 70px;
        background-color: rgba(0, 0, 0, .3);
        border-radius: 50%;
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
        top: 50px;
        text-align: center;
        transition: all 1s ease;
    }

    #sidebar-right > ul.first-ul > li:hover > a > span {
        background-color: rgba(255, 255, 255, 0.3);
    }

    #sidebar-right > ul.first-ul > li > a > span > img {
        margin-top: 25px;
    }

    #sidebar-right > ul.second-ul {
        padding: 0;
        margin: 0;
    }

    #sidebar-right > ul.second-ul > li {
        list-style: none;
        margin-top: 10px;
        width: 290px;
        height: 260px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
    }

    #sidebar-right > ul.second-ul > li > a {
        display: block;
        width: 100%;
        height: 100%;
    }

    #sidebar-right > ul.second-ul > li > a > img {
        display: block;
        width: 290px;
        height: 260px;
    }

    #sidebar-right-lastNews {
        margin-top: 10px;
        background-color: #fff;
        border-radius: 4px;
        overflow: hidden;
    }

    #sidebar-right-lastNews > h3 {
        margin: 0;
        background-color: #d3d4d7;
        height: 40px;
        padding-right: 10px;
        line-height: 40px;
        color: #3B75BF;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
    }

    #sidebar-right-lastNews .three-ul {
        margin: 10px 0;
        padding: 0;
        overflow: auto;
    }

    #sidebar-right-lastNews > .three-ul > li {
        width: 100%;
        list-style: none;
        margin-top: 10px;
        overflow: auto;
    }

    #sidebar-right-lastNews > .three-ul > li > a {
        display: block;
        width: 100%;
        height: 100%;
        overflow: auto;
    }

    #sidebar-right-lastNews .right-col {
        width: 70px;
        float: right;
        text-align: center;
        margin: 5px 10px 0 0;
        border-radius: 50%;
        overflow: hidden;
    }

    #sidebar-right-lastNews .right-col > img {
        display: block;
        width: 70px;
        height: 70px;
    }

    #sidebar-right-lastNews .left-col {
        width: 190px;
        float: left;
        padding: 0 5px;
    }

    #sidebar-right-lastNews .left-col > p {
        margin: 0;
        color: #0f220c;;
    }

    #sidebar-right-lastNews .left-col > p.second {
        font-size: 9.1pt;
        color: #b0b1b3;
    }

    #sidebar-right-brands {
        margin: 10px 0;
        overflow: auto;
    }

    #sidebar-right-brands a {
        display: block;
        width: 135px;
        height: 90px;
        margin-bottom: 5px;
        background-color: #fff;
        overflow: hidden;
        border-radius: 4px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .4);
        float: right;
    }

    #sidebar-right-brands a:nth-child(even) {
        float: left;
    }

    #sidebar-right-brands a > img {
        display: block;
        width: 100%;
        height: 100%;
    }

</style>

<div id="sidebar-right">
    <img id="top-img" src="<?= URL ?>image/main/sidebar/Euro2016-290.52.jpg" alt="no picture"/>
    <ul class="first-ul">
        <li>
            <a href="">
                <img src="<?= URL ?>image/main/sidebar/TV_100_Innovative_Products.jpg" alt="no picture"/>
                <span><img src="<?= URL ?>image/main/sidebar/play.png" alt="no picture"/></span>
            </a>
        </li>
        <li>
            <a href="">
                <img src="<?= URL ?>image/main/sidebar/Motorola_Moto_360_1_Min_Intro.jpg" alt="no picture"/>
                <span><img src="<?= URL ?>image/main/sidebar/play.png" alt="no picture"/></span>
            </a>
        </li>
    </ul>
    <ul class="second-ul">
        <li>
            <a href="">
                <img src="<?= URL ?>image/main/sidebar/li1.jpg" alt="no picture"/>
            </a>
        </li>
        <li>
            <a href="">
                <img src="<?= URL ?>image/main/sidebar/li2.jpg" alt="no picture"/>
            </a>
        </li>
        <li>
            <a href="">
                <img src="<?= URL ?>image/main/sidebar/li3.jpg" alt="no picture"/>
            </a>
        </li>
    </ul>
    <div id="sidebar-right-lastNews">
        <h3 class="yekan fontSm">تازه ترین خبرها</h3>
        <ul class="three-ul">
            <li>
                <a href="">
                    <div class="right-col">
                        <img src="<?= URL ?>image/main/sidebar/SanDisk_Headquarters_Milpitas-60x60.jpg"
                             alt="no picture"/>
                    </div>
                    <div class="left-col">
                        <p class="yekan fontSm">کارت حافظه های 256 گیگابایتی سن دیسک معرفی شدند.</p>
                        <p class="yekan second">چهارشنبه 19 مرداد 1400</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="right-col">
                        <img src="<?= URL ?>image/main/sidebar/iPhone7-headphone-3-60x60.jpg" alt="no picture"/>
                    </div>
                    <div class="left-col">
                        <p class="yekan fontSm">اولین تصاویر از ایفون 7 لو رفت.</p>
                        <p class="yekan second">چهارشنبه 19 مرداد 1400</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div id="sidebar-right-brands">
        <a href=""> <img src="<?= URL ?>image/main/sidebar/adata.png" alt="no picture"/></a>
        <a href=""><img src="<?= URL ?>image/main/sidebar/asus.png" alt="no picture"/></a>
        <a href=""><img src="<?= URL ?>image/main/sidebar/d-link.png" alt="no picture"/></a>
        <a href=""><img src="<?= URL ?>image/main/sidebar/lenovo.png" alt="no picture"/></a>
        <a href=""><img src="<?= URL ?>image/main/sidebar/nivea.png" alt="no picture"/></a>
        <a href=""><img src="<?= URL ?>image/main/sidebar/oral-b.png" alt="no picture"/></a>
        <a href=""><img src="<?= URL ?>image/main/sidebar/samsung-brand.jpg" alt="no picture"/></a>
        <a href=""><img src="<?= URL ?>image/main/sidebar/x.vision.png" alt="no picture"/></a>
    </div>
</div>
