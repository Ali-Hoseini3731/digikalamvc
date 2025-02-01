<style>

    #main .main-panel .box .digiBon {
        border-width: 0 1px 1px 1px;
        border-style: solid;
        border-color: #ccc;
        margin-top: 10px;
    }

    #main .main-panel .box .digiBon .title {
        border: 1px dotted #afafaf;
        background-color: #f7f4f4;
        padding: 25px 15px;
        border-radius: 4px;
        box-shadow: 0 0 4px rgba(0, 0, 0, .39);
    }

    #main .main-panel .box .digiBon .title span {
        font-size: 11pt;
        color: #737373;
    }

    #main .main-panel .box .digiBon .title input {
        width: 300px;
        height: 27px;
        border-radius: 4px;
        overflow: hidden;
        border: 1px solid #ccc;
        margin-right: 8px;
    }

    #main .main-panel .box .digiBon .title img {
        vertical-align: middle;
        margin-right: 15px;
        cursor: pointer;
    }

    #main .main-panel .box .digiBon > table {
        width: 100%;
        margin-top: 20px;
    }

    #main .main-panel .box .digiBon table tr {
        font-size: 9.5pt;
    }

    #main .main-panel .box .digiBon table tr:first-child {
        background-color: #000;
        color: #fff;
        font-size: 10pt;
    }

    #main .main-panel .box .digiBon table tr td {
        text-align: center;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #000;
        padding: 10px 0;
    }

    #main .main-panel .box .digiBon table tr:first-child td {
        text-align: center;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #000;
        padding: 0;
    }

    #main .main-panel .box .digiBon table tr td:first-child {
        border-right: none;
    }

    #main .main-panel .box .digiBon table .details .subTable2 {
        padding: 10px;
        background-color: #fff;
        margin: 5px;
        box-shadow: 0 0 6px #000000;
        border-radius: 4px;
    }

    #main .main-panel .box .digiBon table .details .subTable2 table {
        width: 100%;
    }

    #main .main-panel .box .digiBon table .details .subTable2 table tr:first-child {
        background-color: #0000e8;
    }


</style>

<section class="digiBon">
    <div class="title">
        <span class="yekan">کد دریافتی دیجی بن :</span>
        <input type="text" placeholder="کد دیجی بن خود را وارد کنید......"/>
        <img src="<?= URL ?>image/panel-page/SaveVoucher.gif" alt="no-picture"/>
    </div>

    <table cellpadding="0" cellspacing="0">
        <tr>
            <td class="yekan">ردیف</td>
            <td class="yekan">کد</td>
            <td class="yekan">سفارش</td>
            <td class="yekan">شرح</td>
            <td class="yekan">تاریخ ثبت</td>
            <td class="yekan">تاریخ انقضاء</td>
            <td class="yekan">اعتبار اولیه</td>
            <td class="yekan">اعتبار مصرفی</td>
            <td class="yekan">مانده</td>
            <td class="yekan">وضعیت</td>
            <td class="yekan">جزئیات</td>
        </tr>
        <tr>
            <td class="yekan">1</td>
            <td class="yekan">12345</td>
            <td class="yekan">DJK-ali123</td>
            <td class="yekan">دیجی بن دریافتی از کد DJK-ali123</td>
            <td class="yekan">تیرماه 1400</td>
            <td class="yekan">تیرماه 1401</td>
            <td class="yekan">500.000</td>
            <td class="yekan">250.000</td>
            <td class="yekan">250.0000</td>
            <td class="yekan">باطل شده</td>
            <td class="yekan">
                <i onclick="showDetailsTr(this)"></i>
            </td>
        </tr>
        <tr class="details">
            <td colspan="11">
                <div class="subTable2">
                    <table cellspacing="0" cellpadding="0">
                        <tr>
                            <td class="yekan">سفارش</td>
                            <td class="yekan">نوع</td>
                            <td class="yekan">تاریخ</td>
                            <td class="yekan">اعتبار مصرفی</td>
                        </tr>
                        <tr>
                            <td class="yekan">DJK-ali123</td>
                            <td class="yekan">خرید</td>
                            <td class="yekan">تیرماه 1400</td>
                            <td class="yekan">250.000</td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</section>
