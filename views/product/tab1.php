<style>

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

</style>

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
