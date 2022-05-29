<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Форма обратной связи");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");
?>

    <form id="form" action="#" class="form-wrapper">
        <h1>Форма обратной связи</h1>
        <div class="form-field">
            <label for="name" class="form-field-title">Имя</label>
            <input id="name" type="text" class="ui-ctl-element ui-ctl ui-ctl-textbox ui-ctl-w100"
                   placeholder="">
        </div>
        <div class="form-field">
            <label for="surname" class="form-field-title">Фамилия</label>
            <input id="surname" type="text" class="ui-ctl-element ui-ctl ui-ctl-textbox ui-ctl-w100"
                   placeholder="">
        </div>
        <div class="form-field">
            <label for="email" class="form-field-title">Email</label>
            <input id="email" type="email" class="ui-ctl-element ui-ctl ui-ctl-textbox ui-ctl-w100" placeholder="">
        </div>
        <div class="form-field">
            <label for="birthday" class="form-field-title">Дата рождения</label>
            <input id="birthday" type="date" class="ui-ctl-element ui-ctl ui-ctl-textbox ui-ctl-w100" value="">
        </div>
        <div class="form-field">
            <label for="phone" class="form-field-title">Номер телефона</label>
            <input id="phone" type="tel" class="ui-ctl-element ui-ctl ui-ctl-textbox ui-ctl-w100" value="">
        </div>
        <div class="form-field">
            <lable for="city" class="form-field-title">Город</lable>

            <input id="city" type="text" class="ui-ctl-element ui-ctl ui-ctl-textbox ui-ctl-w100" placeholder="">
        </div>
        <button tyipe="submit" class="ui-btn ui-ctl-w100">Кнопка</button>
    </form>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>