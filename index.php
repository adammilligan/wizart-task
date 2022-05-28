<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Форма обратной связи");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");
?>

    <div class="form-wrapper">
        <h1>Форма обратной связи</h1>
        <div class="form-field">
            <span class="form-field-title">Имя</span>
            <div class="ui-ctl ui-ctl-textbox ui-ctl-w100">
                <input type="text" class="ui-ctl-element" placeholder="">
            </div>
        </div>
        <div class="form-field"><span class="form-field-title">Фамилия</span>
            <div class="ui-ctl ui-ctl-textbox ui-ctl-w100">
                <input type="text" class="ui-ctl-element" placeholder="">
            </div>
        </div>
        <div class="form-field"><span class="form-field-title">Email</span>
            <div class="ui-ctl ui-ctl-textbox ui-ctl-w100">
                <input type="email" class="ui-ctl-element" placeholder="">
            </div>
        </div>
        <div class="form-field"><span class="form-field-title">Дата рождения</span>
            <div class="ui-ctl ui-ctl-textbox ui-ctl-w100">
                <input type="date" class="ui-ctl-element" value="">
            </div>
        </div>
        <div class="form-field"><span class="form-field-title">Номер телефона</span>
            <div class="ui-ctl ui-ctl-textbox ui-ctl-w100">
                <input type="tel" class="ui-ctl-element" value="">
            </div>
        </div>
        <div class="form-field"><span class="form-field-title">Город</span>
            <div class="ui-ctl ui-ctl-textbox ui-ctl-w100">
                <input type="text" class="ui-ctl-element" placeholder="">
            </div>
        </div>


        <button class="ui-btn ui-ctl-w100">Кнопка</button>
    </div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>