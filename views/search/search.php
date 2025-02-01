<style>
    #search-content #search {
        width: 100%;
        margin: 10px 0;
        float: right;
        position: relative;
    }

    #search-content #search input {
        width: 330px;
        height: 17px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: 1px 2px 3px rgba(0, 0, 0, .1);
    }

    #search .search-icon {
        display: inline-block;
        width: 17px;
        height: 17px;
        position: absolute;
        right: 316px;
        top: 9px;
        background: url("<?= URL ?>/image/search-page/search2.png") no-repeat;
        cursor: pointer;
    }

    #search .exist {
        display: inline-block;
        width: 40px;
        height: 22px;
        position: relative;
        right: 15px;
        top: 8px;
    }

    #search .exist .btn-checked {
        display: inline-block;
        width: 40px;
        height: 22px;
        background: url("<?= URL ?>/image/search-page/btnchecked.png") no-repeat;
        background-position: 0 0;
        position: absolute;
        left: 0;
        top: 0;
    }

    #search .active .btn-checked {
        background-position: -40px 0 !important;
    }

    #search .exist .yesno {
        display: inline-block;
        width: 29px;
        height: 20px;
        background: url("<?= URL ?>/image/search-page/yesno.png") no-repeat;
        background-position: 1px -21px;
        position: absolute;
        left: -1px;
        top: 0;
        cursor: pointer;
    }

    #search .active .yesno {
        background-position: 0 0 !important;
    }

    #search .just-show {
        font-size: 10pt;
        margin-right: 15px;
    }

    #search .display-type {
        float: left;
        margin-top: 5px;
    }

    #search .display-type .text {
        font-size: 10pt;
        margin-left: 3px;
    }

    #search .display-type .type1, .type2 {
        display: block;
        width: 24px;
        height: 24px;
        float: left;
        background: url("<?= URL ?>/image/search-page/displaytype.png") no-repeat;
        cursor: pointer;
    }

    #search .display-type .type1 {
        background-position: 0 0;
    }

    #search .display-type .type2 {
        background-position: -24px 0;
    }

    #search-content .active .type1 {
        background-position: 0 -24px !important;
    }

    #search-content .display-type.active .type2 {
        background-position: -24px -24px !important;
    }
</style>

<div id="search">
    <input type="text" placeholder="جستجو..."/>
    <i class="search-icon"></i>
    <span class="exist">
                <span class="btn-checked"></span>
                <span class="yesno"></span>
            </span>
    <span class="just-show yekan">
                فقط نمایش کالاهای موجود
            </span>

    <span class="display-type">
              <span class="yekan text">حالت نمایش</span>
              <span class="type1"></span>
              <span class="type2"></span>
            </span>
</div>