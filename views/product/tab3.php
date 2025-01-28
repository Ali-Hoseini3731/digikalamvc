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
