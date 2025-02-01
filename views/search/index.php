<style>
    #search-main {
        max-width: 1150px;
        margin: 10px auto;
        background-color: #fff;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .2);
        padding: 25px;
    }

    #search-content {
        width: 880px;
        height: 100%;
        padding-right: 20px;
        float: right;
    }

    #search-content .horizontal-row2 {
        height: 1px;
        background: #aaaaaa;
        width: 100%;
        float: right;

    }

</style>

<div id="search-main">
    <?php
    require "sidebar.php";
    ?>
    <div id="search-content">

        <?php
        require "navigator.php";
        require "filter_selected.php";
        require "filter_top.php";
        ?>

        <div class="horizontal-row2"></div>

        <?php
        require "search.php";
        require "sort.php";
        require "pagination.php";
        require "products.php";
        ?>

    </div>

</div>

