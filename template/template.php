<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if ($arResult["isFormNote"] != "Y") { ?>

<div class="contact-form">
    <?php if ($arResult["isFormDescription"] == "Y" || $arResult["isFormTitle"] == "Y"): ?>
        <div class="contact-form__head">
            <div class="contact-form__head-title"><?= $arResult["FORM_TITLE"] ?></div>
            <div class="contact-form__head-text"><?= $arResult["FORM_DESCRIPTION"] ?></div>
        </div>
    <? endif; ?>

    <form name="<?= $arResult["WEB_FORM_NAME"] ?>" method="POST"
          class="contact-form__form" enctype="multipart/form-data">
        <input type="hidden" name="WEB_FORM_ID" value="<?= $arParams["WEB_FORM_ID"] ?>"/>
        <?= bitrix_sessid_post() ?>
        <div class="contact-form__form-inputs">
            <div class="input contact-form__input">
                <label class="input__label"
                       for="form_text_1">
                    <div class="input__label-text">
						<?=$arResult["QUESTIONS"]['NAME']['CAPTION']?>
						<?=($arResult["QUESTIONS"]['NAME']['REQUIRED'] === 'Y' ? $arResult["REQUIRED_SIGN"] : '')?>
                    </div>
                    <input class="input__input" type="text"
                    	id="form_text_1"
                        name="form_text_1"
                        value="<?= $arResult['arrVALUES']['form_text_1'] ?>"
					>
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label"
                       for="form_text_2">
                    <div class="input__label-text">
						<?=$arResult["QUESTIONS"]['COMPANY']['CAPTION']?>
						<?=($arResult["QUESTIONS"]['COMPANY']['REQUIRED'] === 'Y' ? $arResult["REQUIRED_SIGN"] : '')?>
                    </div>
                    <input class="input__input" type="text"
                    	id="form_text_2"
                        name="form_text_2"
                        value="<?= $arResult['arrVALUES']['form_text_2'] ?>"
					>
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label"
                       for="form_text_3">
                    <div class="input__label-text">
						<?=$arResult["QUESTIONS"]['PHONE']['CAPTION']?>
						<?=($arResult["QUESTIONS"]['PHONE']['REQUIRED'] === 'Y' ? $arResult["REQUIRED_SIGN"] : '')?>
                    </div>
                    <input class="input__input" type="text"
                    	id="form_text_3"
                        name="form_text_3"
                        value="<?= $arResult['arrVALUES']['form_text_3'] ?>"
					>
                </label>
            </div>
			<div class="input contact-form__input">
                <label class="input__label"
                       for="form_email_4">
                    <div class="input__label-text">
						<?=$arResult["QUESTIONS"]['EMAIL']['CAPTION']?>
						<?=($arResult["QUESTIONS"]['EMAIL']['REQUIRED'] === 'Y' ? $arResult["REQUIRED_SIGN"] : '')?>
                    </div>
                    <input class="input__input" type="text"
                    	id="form_email_4"
                        name="form_email_4"
                        value="<?= $arResult['arrVALUES']['form_email_4'] ?>"
					>
                </label>
            </div>
        </div>
        <div class="contact-form__form-message">
            <div class="input"><label class="input__label" for="form_text_5">
                    <div class="input__label-text">
						<?=$arResult["QUESTIONS"]['MESSAGE']['CAPTION']?>
						<?=($arResult["QUESTIONS"]['MESSAGE']['REQUIRED'] === 'Y' ? $arResult["REQUIRED_SIGN"] : '')?>
					</div>
                    <textarea class="input__input" type="text"
                        id="form_text_5"
                        name="form_text_5"
					>
                    	<?= $arResult['arrVALUES'][$name] ?>
                    </textarea>
                </label>
            </div>
        </div>
        <div class="contact-form__bottom">
            <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку
                персональных
                данных&raquo;.
            </div>
            <button class="form-button contact-form__bottom-button"
                    name="web_form_submit"
                    value="<?= $arResult["arForm"]["BUTTON"] ?>"
                    data-success="Отправлено"
                    data-error="Ошибка отправки">
                <div class="form-button__title"><?= $arResult["arForm"]["BUTTON"] ?></div>
            </button>
        </div>
    </form>
</div>

<? } ?>