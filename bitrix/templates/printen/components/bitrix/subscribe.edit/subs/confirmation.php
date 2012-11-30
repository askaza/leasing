<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
//*************************************
//show confirmation form
//*************************************
?>
<form action="<?=$arResult["FORM_ACTION"]?>" method="get">
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="data-table">
<tr valign="top">
	<td width="40%">
		<p><?echo GetMessage("subscr_conf_code")?> <span class="req">*</span><br />
		<input type="text" name="CONFIRM_CODE" value="<?echo $arResult["REQUEST"]["CONFIRM_CODE"];?>" size="30" class="inputtext" /></p>
	</td>

	<td width="60%">
		<?echo GetMessage("subscr_conf_note1")?> <a title="<?echo GetMessage("adm_send_code")?>" href="<?echo $arResult["FORM_ACTION"]?>?ID=<?echo $arResult["ID"]?>&amp;action=sendcode&amp;<?echo bitrix_sessid_get()?>"><?echo GetMessage("subscr_conf_note2")?></a>.
	</td>
</tr>
<tr><td><br /><?echo GetMessage("subscr_conf_date")?></td><td>
		<br /><?echo $arResult["SUBSCRIPTION"]["DATE_CONFIRM"];?></td></tr>

<tfoot><tr><td></td><td>
<br />
<input type="submit" name="confirm" value=" " class="confirfb">

</td></tr></tfoot>
</table>
<input type="hidden" name="ID" value="<?echo $arResult["ID"];?>" />
<?echo bitrix_sessid_post();?>
</form>
<br />
