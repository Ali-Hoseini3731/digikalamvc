<style>

    #main .main-panel .box .favorite ul {
        margin: 0;
        padding: 15px;
        background-color: #eeedf08f;
        border: 1px dotted #cccccc;
        border-radius: 4px;
        box-shadow: 1px 2px 3px rgba(0, 0, 0, .19);
    }

    #main .main-panel .box .favorite ul::after {
        content: '';
        clear: both;
        display: table;
    }

    #main .main-panel .box .favorite ul li {
        list-style-type: none;
        width: 220px;
        height: 55px;
        border-radius: 4px;
        border: 1px solid #f3f1f7;
        overflow: hidden;
        float: right;
        margin-right: 5px;
        position: relative;
    }

    #main .main-panel .box .favorite ul li:hover {
        background-color: #fff;
        border: 1px solid #535353;
    }

    #main .main-panel .box .favorite ul li a {
        display: block;
        height: 100%;
        padding: 5px;
        cursor: pointer;
        position: relative;
    }

    #main .main-panel .box .favorite ul li a .folder {
        margin-top: 7px;
    }

    #main .main-panel .box .favorite ul li a .text {
        font-size: 10pt;
        color: #ff0000;
        vertical-align: 11px;
        margin-right: 5px;
    }

    #main .main-panel .box .favorite ul li:hover a .text {
        color: #000000;
    }

    #main .main-panel .box .favorite ul li a .edit {
        position: absolute;
        left: 5px;
        top: 5px;
        display: none;
    }

    #main .main-panel .box .favorite .item {
        border-width: 0 1px 1px 1px;
        border-style: solid;
        border-color: #ccc;
        border-radius: 0 0 4px 4px;
        box-shadow: 1px 3px 4px rgba(0, 0, 0, .2);
        margin-top: 10px;
    }

    #main .main-panel .box .favorite .item::after {
        content: '';
        clear: both;
        display: table;
    }

    #main .main-panel .box .favorite .item .right {
        float: right;
        width: 150px;
        padding: 5px;
    }


    #main .main-panel .box .favorite .item .right img {
        width: 130px;
        height: 130px;
        border: 1px solid #ccc;
        padding: 5px;
        background-color: #cccc;
        border-radius: 4px;
    }

    #main .main-panel .box .favorite .item .left {
        float: left;
        width: 950px;
        padding: 5px;
    }

    #main .main-panel .box .favorite .item .left p.title {
        margin: 4px 10px;
        font-size: 12.4pt;
        color: #2d2d76;
        border-width: 1px 0 1px 0;
        border-style: solid;
        border-color: #cccc;
        padding: 5px 0;
    }

    #main .main-panel .box .favorite .item .left p.title img {
        float: left;
        margin-top: 8px;
        margin-left: 10px;
        cursor: pointer;
    }

    #main .main-panel .box .favorite .item .left p.text {
        font-size: 10pt;
        padding: 0 10px;
        margin: 10px;
    }


</style>

<section class="favorite">
    <ul>
        <li>
            <a>
                <img class="folder" src="<?= URL ?>image/panel-page/folder_documents_all.png"/>
                <span class="yekan text">همه پوشه ها</span>
            </a>
        </li>
        <li>
            <a>
                <img class="folder" src="<?= URL ?>image/panel-page/folder_documents_all.png" alt="no-picture"/>
                <span class="yekan text">گوشی</span>
                <img class="edit" src="<?= URL ?>image/panel-page/icon_edit_16.png" alt="no-picture"/>
            </a>
        </li>
    </ul>
    <div class="item">
        <div class="right">
            <img src="<?= URL ?>image/panel-page/1.jpg" alt="no-picture"/>
        </div>
        <div class="left">
            <p class="yekan title">
                گوشی Apple مدل xyz
                <img src="<?= URL ?>image/panel-page/Delete.gif" alt="no-picture"/>
                <img src="<?= URL ?>image/panel-page/Edit.gif" alt="no-picture"/>
            </p>
            <p class="yekan text">
                توضیحات در باره ای این محصول توسط کاربر .................
            </p>

        </div>
    </div>
    <div class="item">
        <div class="right">
            <img src="<?= URL ?>image/panel-page/1.jpg" alt="no-picture"/>
        </div>
        <div class="left">
            <p class="yekan title">
                گوشی Apple مدل xyz
                <img src="<?= URL ?>image/panel-page/Delete.gif" alt="no-picture"/>
                <img src="<?= URL ?>image/panel-page/Edit.gif" alt="no-picture"/>
            </p>
            <p class="yekan text">
                توضیحات در باره ای این محصول توسط کاربر .................
            </p>

        </div>
    </div>
</section>
