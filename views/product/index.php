
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

    #details {
        max-width: 1150px;
        margin: auto;
        background-color: #fff;
        border-radius: 0 0 5px 5px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .2);
        padding: 25px;
    }

    #details .right {
        width: 450px;
        float: right;
    }

    #details .right .first {
        padding: 10px 5px;
    }

    #details .right .first::after {
        content: '';
        clear: both;
        display: table;
    }

    #details .right .social {
        display: block;
        width: 20px;
        height: 19px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -211px -188px;
        float: left;
        cursor: pointer;
    }

    #details .right .favorite {
        display: block;
        width: 20px;
        height: 20px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -161px -188px;
        float: left;
        margin-left: 8px;
        cursor: pointer;
    }

    #details .right .image {
        width: 100%;
        padding: 20px 0;
        text-align: center;
    }

    #details .right .image img {
        max-width: 350px;
        max-height: 350px;
    }

    #details .right .gallery {
        float: right;
        width: 100%;
    }

    #details .right .gallery ul {
        padding: 0;
        margin: 0;
        float: right;
        width: 100%;
    }

    #details .right .gallery ul li {
        list-style: none;
        width: 80px;
        height: 90px;
        float: left;
        border: 1px solid #ddd;
        margin-right: 8px;
        box-shadow: 0 0 2px rgba(0, 0, 0, .19);
        text-align: center;
        cursor: pointer;
    }

    #details .right .gallery ul li img {
        margin-top: 14px;
        width: 64px;
        height: 64px;
    }

    #details .right .gallery ul li.point span {
        display: block;
        width: 30px;
        height: 20px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -564px -34px;
        margin-top: 40px;
        margin-right: 26px;
    }

    #details .left {
        width: 670px;
        padding-right: 30px;
        float: left;
    }

    #details .left .title {
        height: 30px;
        background-color: #bcf2c2;;
        padding: 10px 20px;
        border-radius: 4px;
        box-shadow: 0 0 3px rgba(0, 0, 0, .2);
        overflow: auto;
    }

    #details .left .title h4 {
        padding: 0;
        margin: 0;
        float: right;
    }

    #details .left .stars {
        width: 67px;
        height: 18px;
        float: left;;
        margin-top: -7px;
    }

    #details .left .stars .stars-gray {
        display: inline-block;
        width: 67px;
        height: 9px;
        background: url("<?= URL ?>image/search-page/stars.png") repeat;
        background-position: 0 -9px;
        position: relative;
    }

    #details .left .stars .stars-red {
        display: inline-block;
        width: 51px;
        height: 9px;
        background: url("<?= URL ?>image/search-page/stars.png") repeat;
        background-position: 0 0;
        position: absolute;
        left: 0;
        top: 0;
    }

    #details .left .title > p {
        float: left;
        padding: 0;
        font-size: 9pt;
        margin: 0;
        position: relative;
        top: 11px;
        left: -65px;
    }

    #details .left .tow-col {
        width: 100%;
        margin: 5px 0 30px 0;
    }

    #details .left .tow-col::after {
        content: "";
        clear: both;
        display: table;
    }

    #details .left .tow-col .right1 {
        width: 470px;
        float: right;
    }

    #details .left .tow-col .right1 h4 {
        font-size: 10pt;
        margin: 0;
        padding: 15px 0;
    }

    #details .left .tow-col .right1 ul.colors {
        margin: 0 0 20px 0;
        padding: 0;
        overflow: auto;
    }

    #details .left .tow-col .right1 ul.colors li {
        list-style: none;
        width: 60px;
        height: 27px;
        border: 1px solid #ccc;
        border-radius: 3px;
        text-align: left;
        padding-left: 10px;
        font-size: 9pt;
        background-color: #e8e8e8;
        position: relative;
        float: right;
        margin-left: 5px;
    }

    #details .left .tow-col .right1 ul.colors li span {
        display: inline-block;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        vertical-align: middle;
        margin-left: 5px;
        cursor: pointer;
    }

    #details .left .tow-col .right1 ul.colors li:first-child span {
        background: #000000 url("<?= URL ?>image/slices.png") no-repeat;
    }

    #details .left .tow-col .right1 ul.colors li:last-child span {
        background: #FFFFFF url("<?= URL ?>image/slices.png") no-repeat;
    }

    #details .left .tow-col .right1 ul.colors li:first-child.active span {
        background-position: -192px -81px;
    }

    #details .left .tow-col .right1 ul.colors li:last-child.active span {
        background-position: -167px -81px;
    }

    #details .left .tow-col .right1 .selectList {
        width: 330px;
        height: 30px;
        border: 1px solid #dddddd;
        background-color: #f6f6f6;
        border-radius: 4px;
        text-align: center;
        cursor: pointer;
        position: relative;
    }

    #details .left .tow-col .right1 .selectList span {
        font-size: 9.3pt;
        line-height: 32px;
    }

    #details .left .tow-col .right1 .selectList::before {
        content: "";
        display: block;
        width: 19px;
        height: 18px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -140px -79px;
        position: absolute;
        top: 5px;
        right: 5px;
    }

    #details .left .tow-col .right1 .selectList::after {
        content: '';
        display: block;
        width: 16px;
        height: 10px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -34px -462px;
        position: absolute;
        top: 10px;
        left: 5px;
    }

    #details .left .tow-col .right1 .selectList ul {
        padding: 0;
        margin: 0;
        background-color: #fff;
        box-shadow: 0 0 3px rgba(0, 0, 0, .2);
        display: none;
        z-index: 3;
    }

    #details .left .tow-col .right1 .selectList ul li {
        list-style: none;
        padding: 5px 10px;
        font-size: 9.3pt;
        border-bottom: 1px solid #eee;
        cursor: pointer;
    }

    #details .left .tow-col .right1 .selectList ul li:hover {
        background-color: #b8f0b0;
    }

    #details .left .tow-col .right1 .price {
        margin-top: 40px;
    }

    #details .left .tow-col .right1 .price > span {
        margin-left: 3px;
    }

    #details .left .tow-col .right1 .price > span.one {
        text-decoration: line-through;
    }

    #details .left .tow-col .right1 .price .discount {
        display: inline-block;
        width: 140px;
        height: 20px;
        border: 1px solid #eee;
        margin-right: 25px;
        vertical-align: middle;
    }

    #details .left .tow-col .right1 .price .discount .one {
        display: block;
        width: 50px;
        height: 100%;
        float: right;
        text-align: center;
        color: #fff;
        font-size: 9pt;
        background-color: #e70000;
    }

    #details .left .tow-col .right1 .price .discount .one::before {

    }

    #details .left .tow-col .right1 .priceForYou {
        margin-top: 30px;
    }

    #details .left .tow-col .right1 .priceForYou > span {
        margin-left: 3px;
    }

    #details .left .tow-col .right1 .priceForYou .one {
        font-size: 13pt;
    }

    #details .left .tow-col .right1 .priceForYou .tow {
        font-size: 11pt;
        color: #0ddd0c;
    }

    #details .left .tow-col .right1 .priceForYou .three {
        font-size: 8pt;
    }

    #details .left .tow-col .right1 .price .discount .tow {
        display: block;
        width: 90px;
        height: 100%;
        float: right;
        text-align: center;
        color: #fff;
        font-size: 9pt;
        background-color: #e66363;
    }

    #details .left .tow-col .right1 .compare {
        margin-top: 30px;
    }

    #details .left .tow-col .right1 .compare .compare-btn {
        display: inline-block;
        width: 150px;
        height: 35px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 2px 2px rgba(0, 0, 0, .15);
        margin-left: 20px;
    }

    #details .left .tow-col .right1 .compare .compare-btn .compare-btn-text {
        display: block;
        width: 100px;
        height: 100%;
        float: right;
        background-color: #5f5f5f;
        color: #FFFFFF;
        font-size: 9pt;
        text-align: center;
        line-height: 35px;
    }

    #details .left .tow-col .right1 .compare .compare-btn .compare-btn-icon {
        display: block;
        width: 50px;
        height: 100%;
        float: right;
        background-color: #adadad;
        cursor: pointer;
        position: relative;
    }

    #details .left .tow-col .right1 .compare .compare-btn .compare-btn-icon i {
        display: block;
        width: 15px;
        height: 15px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -442px -423px;
        position: absolute;
        right: 17px;
        top: 11px
    }

    #details .left .tow-col .right1 .compare .addtoCard {
        display: inline-block;
        width: 200px;
        height: 35px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 2px 2px rgba(0, 0, 0, .15);
        margin-left: 20px;
    }

    #details .left .tow-col .right1 .compare .addtoCard .addtoCard-icon {
        display: block;
        width: 40px;
        height: 100%;
        float: right;
        background-color: #0dfb0c;
        position: relative;
    }

    #details .left .tow-col .right1 .compare .addtoCard .addtoCard-icon i {
        display: block;
        width: 30px;
        height: 25px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -157px -419px;
        position: absolute;
        right: 3px;
        top: 5px;
    }

    #details .left .tow-col .right1 .compare .addtoCard .addtoCard-text {
        display: block;
        width: 160px;
        height: 100%;
        float: right;
        background-color: #07bc31;
        color: #FFFFFF;
        font-size: 10pt;
        text-align: center;
        line-height: 35px;
    }


    #details .left .tow-col .left1 {
        width: 200px !important;
        float: right;
    }

    #details .left .tow-col .left1 ul {
        padding: 0;
        margin: 20px 0 0 0;
    }

    #details .left .tow-col .left1 ul li {
        list-style-type: disc;
        padding: 2px 0;
    }

    #details .left .tow-col .left1 ul li .one {
        font-size: 9.5pt;
        margin-right: 5px;
        position: relative;
        top: -2px;
    }

    #details .left .tow-col .left1 ul li .tow {
        font-size: 9.5pt;
        color: #656565;
        margin-right: 5px;
        position: relative;
        top: -2px;
    }

    #details .left .tow-col .left1 ul li.without {
        list-style-type: none;
        position: relative;
    }

    #details .left .tow-col .left1 ul li.without::before {
        content: "";
        display: block;
        width: 15px;
        height: 15px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -166px -130px;
        position: absolute;
        right: -14px;
        top: 5px;
        cursor: pointer;
    }

    #details .left .tow-col .left1 ul li .three {
        font-size: 9pt;
        color: #aaa9a9;
        margin-right: 5px;
        cursor: pointer;
        position: relative;
        top: -4px;
        border-bottom: 1px dotted #aaa9a9;
    }

    #details .left .horizontal-row {
        height: 1px;
        background: #aaaaaa;
        margin: 15px;
    }

    #details .left #services-feather2 {
        width: 670px;
        height: 40px;
        background-color: #fff;
    }

    #details .left #services-feather2 ul {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    #details .left #services-feather2 ul li {
        list-style: none;
        height: 100%;
        width: 134px;
        float: right;
    }

    #details .left #services-feather2 ul li a {
        display: block;
        font-size: 8pt;
        cursor: pointer;
    }

    #details .left #services-feather2 ul li a i {
        display: block;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        float: right;
        margin-left: 5px;
        margin-right: 15px;
    }

    #details .left #services-feather2 i.item1 {
        width: 24px;
        height: 24px;
        background-position: -210px -473px;
    }

    #details .left #services-feather2 i.item2 {
        width: 24px;
        height: 24px;
        background-position: -263px -473px;
    }

    #details .left #services-feather2 i.item3 {
        width: 24px;
        height: 24px;
        background-position: -158px -473px;
    }

    #details .left #services-feather2 i.item4 {
        width: 34px;
        height: 24px;
        background-position: -316px -473px;
    }

    #details .left #services-feather2 i.item5 {
        width: 24px;
        height: 24px;
        background-position: -102px -473px;
    }

    #main #introduction {
        max-width: 1150px;
        height: 300px;
        margin: 10px auto;
        background-color: #fff;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .2);
        padding: 25px;
        position: relative;

    }

    #main #introduction.active {
        height: auto;
    }

    #main #introduction p.title {
        padding: 0;
        margin: 0;
        font-size: 15pt;
    }

    #main #introduction p.title2 {
        margin: 10px 0;
        font-size: 12pt;
        color: #777676;
    }

    #main #introduction p {
        font-family: yekan;
        font-size: 10pt;
        margin: 5px 0;
    }

    #main #introduction a.more {
        display: block;
        cursor: pointer;
        text-align: center;
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
        bottom: 6px;
        color: #c80808;
    }

    #main #introduction .more .icon {
        display: inline-block;
        width: 11px;
        height: 12px;
        margin-left: 4px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -34px -727px;
        vertical-align: middle;
    }

    #main #introduction.active .more .icon {
        background-position: -34px -703px;
    }

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

    /*-----------tab-------------*/

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

    #main > .tab-child > section:first-child {
        display: block;
    }

    #main .tab-child .section-naghd .itemContainer {
        border-right: 3px solid #f0f1f2;
        margin-right: 10px;
    }

    #main .tab-child .section-naghd .item {
        margin: 20px 0;
    }

    #main .tab-child section.section-naghd .item h4 {
        padding: 0 30px 0 0;
        margin: 0;
        font-size: 12pt;
        color: #575759;
        position: relative;
    }

    #main .tab-child .section-naghd .itemContainer .item h4::after {
        content: "";
        display: block;
        height: 1px;
        width: 80%;
        background-color: #ccc;
        position: absolute;
        top: 18px;
        left: 0;
    }

    #main .tab-child .section-naghd .item:first-child h4 i {
        display: block;
        width: 30px;
        height: 40px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -157px -617px;
        position: absolute;
        right: -19px;
        top: -2px;
        cursor: pointer;
    }

    #main .tab-child .section-naghd .item:first-child.active h4 i {
        display: block;
        width: 30px;
        height: 40px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -102px -617px;
        position: absolute;
        right: -19px;
        top: -2px;
        cursor: pointer;
    }

    #main .tab-child .section-naghd .item i {
        display: block;
        width: 30px;
        height: 40px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -262px -617px;
        position: absolute;
        right: -19px;
        top: -2px;
        cursor: pointer;
    }

    #main .tab-child .section-naghd .item.active i {
        display: block;
        width: 30px;
        height: 40px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -210px -617px;
        position: absolute;
        right: -19px;
        top: -2px;
        cursor: pointer;
    }

    #main .tab-child .section-naghd .item:last-child h4 i {
        display: block;
        width: 30px;
        height: 40px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -316px -617px;
        position: absolute;
        right: -19px;
        top: -2px;
        cursor: pointer;
    }

    #main .tab-child .section-naghd .item:last-child.active h4 i {
        display: block;
        width: 30px;
        height: 40px;
        background: url("<?= URL ?>image/slices.png") no-repeat;
        background-position: -210px -617px;
        position: absolute;
        right: -19px;
        top: -2px;
        cursor: pointer;
    }

    #main .tab-child .section-naghd .item .discription {
        padding: 10px 20px;
        display: none;
    }

    #main .tab-child .section-fani .title {
        margin-bottom: 30px;
    }

    #main .tab-child .section-fani .title h4 {
        margin: 15px 0 5px 0;
        font-size: 13pt;
        color: #4f4f4f;
    }

    #main .tab-child .section-fani .title p {
        padding: 0;
        margin: 0;
        color: #4a494a;
        font-size: 12pt;
    }

    #main .tab-child .section-fani .item {
        margin-bottom: 25px;
    }

    #main .tab-child .section-fani .item h4 {
        margin: 0 20px 0 0;
        font-size: 13pt;
        color: #4f4f4f;
        position: relative;
    }

    #main .tab-child .section-fani .item h4::before {
        content: "";
        display: block;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 5px 10px 5px 0;
        border-color: transparent #000000 transparent transparent;
        position: absolute;
        top: 5px;
        right: -20px;
    }

    #main .tab-child .section-fani .item .row {
        margin-top: 15px;
    }

    #main .tab-child .section-fani .item .row::after {
        content: '';
        clear: both;
        display: table;
    }

    #main .tab-child .section-fani .item .row .right {
        width: 250px;
        padding: 2px 10px 2px 2px;
        float: right;
        background-color: #eceaea;
        border-radius: 4px;
        font-size: 10pt;
        color: #625f5f;
    }

    #main .tab-child .section-fani .item .row .left {
        width: 870px;
        padding: 2px 10px 2px 2px;
        float: left;
        background-color: #f4f4f4;
        border-radius: 4px;
        font-size: 10pt;
        color: #625f5f;
    }



</style>

<div id="main">
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
    <div id="details">
        <div class="right">
            <div class="first">
                <span class="social"></span>
                <span class="favorite"></span>
            </div>
            <div class="image">
                <img src="<?= URL ?>image/product-page/details/small/2-1.jpg" alt="no-picture"
                     data-zoom-image="<?= URL ?>image/product-page/details/large/2.jpg"/>
            </div>
            <div class="gallery">
                <ul>
                    <li data-main-image="<?= URL ?>image/product-page/gallery/large/1472662586.jpg">
                        <img src="<?= URL ?>image/product-page/gallery/small/1472662586.jpg" alt="no-picture">
                    </li>
                    <li data-main-image="<?= URL ?>image/product-page/gallery/large/1472662593.jpg">
                        <img src="<?= URL ?>image/product-page/gallery/small/1472662593.jpg" alt="no-picture">
                    </li>
                    <li data-main-image="<?= URL ?>image/product-page/gallery/large/1472662590.jpg">
                        <img src="<?= URL ?>image/product-page/gallery/small/1472662590.jpg" alt="no-picture">
                    </li>
                    <li data-main-image="<?= URL ?>image/product-page/gallery/large/1472662586.jpg">
                        <img src="<?= URL ?>image/product-page/gallery/small/1472662586.jpg" alt="no-picture">
                    </li>
                    <li class="point" data-main-image="">
                        <span></span>
                    </li>

                </ul>
            </div>
        </div>
        <div class="left">
            <div class="title">
                <h4 class="yekan">گوشی سامسونگ مدل Galexy</h4>
                <div class="stars">
                    <span class="stars-gray">
                         <span class="stars-red"></span>
                    </span>
                </div>
                <p class="yekan">4 رای از 85 رای</p>
            </div>
            <div class="tow-col">
                <div class="right1">
                    <h4 class="yekan">انتخاب رنگ</h4>
                    <ul class="colors">
                        <li class="yekan">
                            <span></span>
                            مشکی
                        </li>
                        <li class="yekan">
                            <span></span>
                            سفید
                        </li>
                    </ul>
                    <h4 class="yekan">انتخاب گارانتی</h4>
                    <div class="selectList">
                        <span class="yekan fontSm">18 ماه گارانتی هما تلگام</span>
                        <ul>
                            <li class="yekan">گارانتی شماره یک</li>
                            <li class="yekan">گارانتی شماره دو</li>
                            <li class="yekan">گارانتی شماره سه</li>
                        </ul>
                    </div>
                    <div class="price">
                        <span class="yekan fontSm">قیمت :</span>
                        <span class="one yekan fontLg">100.000</span>
                        <span class="yekan fontSm">تومان</span>
                        <span class="discount">
                        <span class="yekan one">تخفیف</span>
                        <span class="yekan tow">300 هزار تومان</span>
                    </span>

                    </div>
                    <div class="priceForYou">
                        <span class="yekan one">قیمت برای شما :</span>
                        <span class="yekan tow">90.000</span>
                        <span class="yekan three">تومان</span>
                    </div>
                    <div class="compare">
                    <span class="compare-btn">
                        <span class="compare-btn-text yekan">مقایسه کن </span>
                        <span class="compare-btn-icon"><i></i></span>
                    </span>
                        <span class="addtoCard">
                        <span class="addtoCard-icon"><i></i></span>
                        <span class="addtoCard-text yekan">افزودن به سبد خرید</span>
                    </span>
                    </div>
                </div>
                <div class="left1">
                    <ul>
                        <li>
                            <span class="yekan one">تعداد سیم کارت :</span>
                            <span class="yekan tow">دو سیم کارته</span>
                        </li>
                        <li>
                            <span class="yekan one">حافظه داخلی :</span>
                            <span class="yekan tow">32 گیگابایت</span>
                        </li>
                        <li class="without">
                            <span class="yekan three">موارد بیشتر</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="horizontal-row"></div>
            <div id="services-feather2">
                <ul>
                    <li>
                        <a class="yekan">
                            <i class="item1"></i>
                            7 روز ضمانت بازگشت
                        </a>
                    </li>
                    <li>
                        <a class="yekan">
                            <i class="item2"></i>
                            پرداخت در محل
                        </a>
                    </li>
                    <li>
                        <a class="yekan">
                            <i class="item3"></i>
                            ضمانت اصل بودن کالا
                        </a>
                    </li>
                    <li>
                        <a class="yekan">
                            <i class="item4"></i>
                            تحویل اکسپرس
                        </a>
                    </li>
                    <li>
                        <a class="yekan">
                            <i class="item5"></i>
                            تضمین بهترین قیمت
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="introduction">
        <a class="more">
            <span class="icon"></span>
            <span class="text">بیشتر</span>
        </a>
        <p class="yekan title">معرفی اجمالی محصول</p>
        <p class="yekan title2">Samsung Glaxy Prime 2 Core</p>
        <p>این محصول خوبی هست . در سال 2012 تولید شده است. ای مسلمانان بشتابید که تمام شد. ای انسان های خوب</p>
        <p>توضیحات بیشتر بعدا</p>
        <p>این محصول خوبی هست . در سال 2012 تولید شده است. ای مسلمانان بشتابید که تمام شد. ای انسان های خوب</p>
        <p>توضیحات بیشتر بعدا</p>
        <p>این محصول خوبی هست . در سال 2012 تولید شده است. ای مسلمانان بشتابید که تمام شد. ای انسان های خوب</p>
        <p>توضیحات بیشتر بعدا</p>
        <p>این محصول خوبی هست . در سال 2012 تولید شده است. ای مسلمانان بشتابید که تمام شد. ای انسان های خوب</p>
        <p>توضیحات بیشتر بعدا</p>
        <p>این محصول خوبی هست . در سال 2012 تولید شده است. ای مسلمانان بشتابید که تمام شد. ای انسان های خوب</p>
        <p>توضیحات بیشتر بعدا</p>
        <p>این محصول خوبی هست . در سال 2012 تولید شده است. ای مسلمانان بشتابید که تمام شد. ای انسان های خوب</p>
        <p>توضیحات بیشتر بعدا</p>
        <p>این محصول خوبی هست . در سال 2012 تولید شده است. ای مسلمانان بشتابید که تمام شد. ای انسان های خوب</p>
        <p>توضیحات بیشتر بعدا</p>
    </div>
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
    <ul class="tab">
        <li class="yekan one active">نقد و بررسی تخصصی</li>
        <li class="yekan tow">مشخصات فنی</li>
        <li class="yekan three">نظرات کاربران</li>
        <li class="yekan four">پرسش و پاسخ</li>
    </ul>
    <div class="tab-child">
        <section class="section-naghd" style="display: none">
            <div class="itemContainer">
                <div class="item">
                    <h4 class="yekan">
                        <i></i>
                        طراحی ساخت
                    </h4>
                    <div class="discription">
                        <p>طراحی و ساخت</p>
                        <p>طراحی و ساخت</p>
                        <p>طراحی و ساخت</p>
                        <p>طراحی و ساخت</p>
                        <p>طراحی و ساخت</p>
                        <p>طراحی و ساخت</p>
                        <p>طراحی و ساخت</p>
                    </div>

                </div>
                <div class="item">
                    <h4 class="yekan">
                        <i></i>
                        صفحه نمایش
                    </h4>
                    <div class="discription">
                        <p>صفحه نمایش</p>
                        <p>صفحه نمایش</p>
                        <p>صفحه نمایش</p>
                        <p>صفحه نمایش</p>
                    </div>
                </div>
                <div class="item">
                    <h4 class="yekan">
                        <i></i>
                        سیستم عامل و دوربین
                    </h4>
                    <div class="discription">
                        <p>سیستم عامل </p>
                        <p>سیستم عامل </p>
                        <p>سیستم عامل </p>
                        <p>سیستم عامل </p>
                        <p>سیستم عامل </p>
                    </div>
                </div>
                <div class="item">
                    <h4 class="yekan">
                        <i></i>
                        سخت افزار
                    </h4>
                    <div class="discription">
                        <p>سخت افزار</p>
                        <p>سخت افزار</p>
                        <p>سخت افزار</p>
                        <p>سخت افزار</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-fani">
            <div class="title">
                <h4 class="yekan">مشخصات فنی</h4>
                <p class="yekan">samsung grand prim ++</p>
            </div>
            <div class="item">
                <h4>مشخصات فیزیکی</h4>
                <div class="row">
                    <div class="right yekan">ابعاد</div>
                    <div class="left yekan">2.34 * 345 میلی متر</div>
                </div>
                <div class="row">
                    <div class="right yekan">وزن</div>
                    <div class="left yekan">250 گرم</div>
                </div>
                <div class="row">
                    <div class="right yekan">قابلیت پشتیبانی از سیم کارت</div>
                    <div class="left yekan">ندارد</div>
                </div>
            </div>
            <div class="item">
                <h4>قابلیت ها</h4>
                <div class="row">
                    <div class="right yekan">ابعاد</div>
                    <div class="left yekan">2.34 * 345 میلی متر</div>
                </div>
                <div class="row">
                    <div class="right yekan">وزن</div>
                    <div class="left yekan">250 گرم</div>
                </div>
                <div class="row">
                    <div class="right yekan">قابلیت پشتیبانی از سیم کارت</div>
                    <div class="left yekan">ندارد</div>
                </div>
            </div>
        </section>

        <style>
            .section-comment::after{
                content: '';
                clear: both;
                display: table;
            }
            .section-comment .comment-result{
                background-color: red;
                width: 500px;
                float: right;
            }
            .section-comment .comment-result p .title{
                display: inline-block;
                background: blue;
                padding: 5px 20px 5px 5px;
                font-size: 13pt;
            }
            .section-comment .comment-result p .title::before{
                content: "";
                display: block;
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 5px 10px 5px 0;
                border-color: transparent #000000 transparent transparent;
                position: absolute;
                top: 5px;
                right: -20px;
            }



            .section-comment .comment-send{
                background-color: blue;
                width: 650px;
                float:left;
            }
        </style>
        <section class="section-comment"  >
            <div class="comment-result">
                <p>
                    <span class="yekan title">امتیاز کاربران به :</span>
                    <span class="yekan">samsung galexy</span>
                </p>
            </div>
            <div class="comment-send">send</div>
        </section>

        <section>
            تب 4
        </section>
    </div>

</div>

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
<div id="page-dark"></div>


</body>
</html>
