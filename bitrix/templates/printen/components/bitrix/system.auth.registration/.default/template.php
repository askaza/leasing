<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

ShowMessage($arParams["~AUTH_RESULT"]);
?>
<?if($arResult["USE_EMAIL_CONFIRMATION"] === "Y" && is_array($arParams["AUTH_RESULT"]) &&  $arParams["AUTH_RESULT"]["TYPE"] === "OK"):?>
<p><?echo GetMessage("AUTH_EMAIL_SENT")?></p>
<?else:?>

<?if($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):?>
	<p><?echo GetMessage("AUTH_EMAIL_WILL_BE_SENT")?></p>
<?endif?>
<noindex>
<form method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform">
<?
if (strlen($arResult["BACKURL"]) > 0)
{
?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?
}
?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="REGISTRATION" />

<table width="469" cellspacing="0" cellpadding="0" border="0" class="graybacktable"> 
  <tbody> 
    <tr>
<td width="20">&nbsp;</td>
<td>

<br />
<table class="data-table bx-registration-table" border="0" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td valign="top">

<?=GetMessage("AUTH_NAME")?><br />
<input type="text" name="USER_NAME" maxlength="50" value="<?=$arResult["USER_NAME"]?>" size="30" class="inputtext" />
<br /><br />
<?=GetMessage("AUTH_LAST_NAME")?><br />
<input type="text" name="USER_LAST_NAME" maxlength="50" value="<?=$arResult["USER_LAST_NAME"]?>" size="30" class="inputtext"/>
<br /><br />
<?=GetMessage("AUTH_LOGIN_MIN")?> <span class="req">*</span><br />
<input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["USER_LOGIN"]?>" size="30" class="inputtext"/>
<br /><br />
<?=GetMessage("AUTH_PASSWORD_REQ")?> <span class="req">*</span><br />
<input type="password" name="USER_PASSWORD" maxlength="50" value="<?=$arResult["USER_PASSWORD"]?>" size="30" class="inputtext"/>
<br /><br />
<?=GetMessage("AUTH_CONFIRM")?> <span class="req">*</span><br />
<input type="password" name="USER_CONFIRM_PASSWORD" maxlength="50" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>" size="30" class="inputtext"/>
</td>
<td width="20">&nbsp;</td>
<td valign="top">
E-Mail: <span class="req">*</span><br />
<input type="text" name="USER_EMAIL" maxlength="255" value="<?=$arResult["USER_EMAIL"]?>" size="30" class="inputtext"/>
<br /><br />
<?// ********************* User properties ***************************************************?>
<?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
	<?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
		<?=$arUserField["EDIT_FORM_LABEL"]?>: <?if ($arUserField["MANDATORY"]=="Y"):?> <span class="req">*</span><?endif;?> <br />
			<?$APPLICATION->IncludeComponent(
				"bitrix:system.field.edit",
				$arUserField["USER_TYPE"]["USER_TYPE_ID"],
				array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField, "form_name" => "bform"), null, array("HIDE_ICONS"=>"Y"));?><br />
	<?endforeach;?>
<?endif;?>



<?// ******************** /User properties ***************************************************
	/* CAPTCHA */
	if ($arResult["USE_CAPTCHA"] == "Y")
	{
		?>



<?=GetMessage("CAPTCHA_REGF_PROMT")?>: <span class="req">*</span><br />
<input type="text" name="captcha_word" maxlength="50" value="" size="30" class="inputtext" /><br />
<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" /><br />
<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /> <br /><br />
		<?
	}
	/* CAPTCHA */
	?>
<br />
<div align="right"
<input type="submit" name="Register" value=" " class="regfb">
</div>








</td>
</tr>

</table>

</td><td width="20">&nbsp;</td></tr></table>


<p><?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></p>
<p><span class="req">*</span><?=GetMessage("AUTH_REQ")?></p>

<p>
<a href="<?=$arResult["AUTH_AUTH_URL"]?>" rel="nofollow"><b><?=GetMessage("AUTH_AUTH")?></b></a>
</p>

</form>
</noindex>
<script type="text/javascript">
document.bform.USER_NAME.focus();
</script>

<?endif?>