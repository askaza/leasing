<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
//***********************************
//setting section
//***********************************
?>
<form action="<?=$arResult["FORM_ACTION"]?>" method="post">
<?echo bitrix_sessid_post();?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="data-table">
<tr valign="top">
	<td width="40%">
		<p><?echo GetMessage("subscr_email")?> <span class="req">*</span><br />
		<input type="text" name="EMAIL" value="<?=$arResult["SUBSCRIPTION"]["EMAIL"]!=""?$arResult["SUBSCRIPTION"]["EMAIL"]:$arResult["REQUEST"]["EMAIL"];?>" size="30" maxlength="255" class="inputtext"/></p>

<?//ныкаем рубрики?>
<div style="display:none;">



		<p><?echo GetMessage("subscr_rub")?> <span class="req">*</span><br />

		<table cellspacing=0 cellpadding=0> 
		<?foreach($arResult["RUBRICS"] as $itemID => $itemValue):?>
			<tr><td><input type="checkbox" name="RUB_ID[]" value="<?=$itemValue["ID"]?>"<?if($itemValue["CHECKED"]) echo " checked"?> /></td><td><?=$itemValue["NAME"]?></label></td></tr>
		<?endforeach;?></table></p>

<?//ныкаем рубрики?> 
</div>

<div style="display:none">
		<p><?echo GetMessage("subscr_fmt")?><br />
		<label><input type="radio" name="FORMAT" value="text"<?if($arResult["SUBSCRIPTION"]["FORMAT"] == "text") echo " checked"?> /><?echo GetMessage("subscr_text")?></label>&nbsp;/&nbsp;<label><input type="radio" name="FORMAT" value="html"<?if($arResult["SUBSCRIPTION"]["FORMAT"] == "html") echo " checked"?> />HTML</label></p>
</div>
	</td>
	<td width="60%">
		<p><?echo GetMessage("subscr_settings_note1")?></p>
		<p><?echo GetMessage("subscr_settings_note2")?></p>
	</td>
</tr>
<tfoot><tr><td></td><td>
<input type="submit" name="Save" value=" " class="submitfb">

<input type="reset" name="Reset" value=" " class="resetfb">
</td></tr></tfoot>
</table>

<input type="hidden" name="PostAction" value="<?echo ($arResult["ID"]>0? "Update":"Add")?>" />
<input type="hidden" name="ID" value="<?echo $arResult["SUBSCRIPTION"]["ID"];?>" />
<?if($_REQUEST["register"] == "YES"):?>
	<input type="hidden" name="register" value="YES" />
<?endif;?>
<?if($_REQUEST["authorize"]=="YES"):?>
	<input type="hidden" name="authorize" value="YES" />
<?endif;?>
</form>
<br />
