<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if($arResult["ALLOW_ANONYMOUS"]=="Y" && $_REQUEST["authorize"]<>"YES" && $_REQUEST["register"]<>"YES"):?>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="data-table">
	<thead><tr><td colspan="2"><?echo GetMessage("subscr_title_auth2")?></td></tr></thead>
	<tr valign="top">
		<td width="40%">
			<p><?echo GetMessage("adm_auth1")?> <a href="<?echo $arResult["FORM_ACTION"]?>?authorize=YES&amp;sf_EMAIL=<?echo $arResult["REQUEST"]["EMAIL"]?><?echo $arResult["REQUEST"]["RUBRICS_PARAM"]?>"><?echo GetMessage("adm_auth2")?></a>.</p>
			<?if($arResult["ALLOW_REGISTER"]=="Y"):?>
				<p><?echo GetMessage("adm_reg1")?> <a href="<?echo $arResult["FORM_ACTION"]?>?register=YES&amp;sf_EMAIL=<?echo $arResult["REQUEST"]["EMAIL"]?><?echo $arResult["REQUEST"]["RUBRICS_PARAM"]?>"><?echo GetMessage("adm_reg2")?></a>.</p>
			<?endif;?>
		</td>
		<td width="60%"><?echo GetMessage("adm_reg_text")?></td>
	</tr>
	</table>
	<br />
<?elseif($arResult["ALLOW_ANONYMOUS"]=="N" || $_REQUEST["authorize"]=="YES" || $_REQUEST["register"]=="YES"):?>
	<form action="<?=$arResult["FORM_ACTION"]?>" method="post">
	<?echo bitrix_sessid_post();?>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="data-table">
	<thead><tr><td colspan="2" style="padding-top:20px; padding-bottom:10px;"><b>Уже зарегистрированы?</b></td></tr></thead>
	<tr valign="top">
		<td width="40%">
			<p>Логин <span class="req">*</span><br />
			<input type="text" name="LOGIN" value="<?echo $arResult["REQUEST"]["LOGIN"]?>" size="30" class="inputtext"/></p>
			<p><?echo GetMessage("adm_auth_pass")?> <span class="req">*</span><br />
			<input type="password" name="PASSWORD" size="30" value="<?echo $arResult["REQUEST"]["PASSWORD"]?>" class="inputtext" /></p>
		</td>
		<td width="60%">
			<?if($arResult["ALLOW_ANONYMOUS"]=="Y"):?>
				<?echo GetMessage("subscr_auth_note")?>
			<?else:?>
				<?echo GetMessage("adm_must_auth")?>
			<?endif;?>
<br /><br /><br /><br />
<input type="submit" name="Save" value=" " class="enterfb">
		</td>
	</tr>
	<tfoot><tr><td></td><td>
</td></tr></tfoot>
	</table>

	<?foreach($arResult["RUBRICS"] as $itemID => $itemValue):?>
		<input type="hidden" name="RUB_ID[]" value="<?=$itemValue["ID"]?>">
	<?endforeach;?>

	<input type="hidden" name="PostAction" value="<?echo ($arResult["ID"]>0? "Update":"Add")?>" />
	<input type="hidden" name="ID" value="<?echo $arResult["SUBSCRIPTION"]["ID"];?>" />
	<?if($_REQUEST["register"] == "YES"):?>
		<input type="hidden" name="register" value="YES" />
	<?endif;?>
	<?if($_REQUEST["authorize"]=="YES"):?>
		<input type="hidden" name="authorize" value="YES" />
	<?endif;?>
	</form>
<hr>
	<?if($arResult["ALLOW_REGISTER"]=="Y"):
		?>
		<form action="<?=$arResult["FORM_ACTION"]?>" method="post">
		<?echo bitrix_sessid_post();?>

		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="data-table">
		<thead><tr><td colspan="2" style="padding-bottom:10px;"><b>Впервые на сайте? </b></td></tr></thead>
		<tr valign="top">
			<td width="40%">
			<p>Вам необходимо зарегистрироваться. </p>
			</td>
			<td width="60%">
<div class="regfb" onClick="document.location='/auth/authtxt.php?register=yes';return false"> &nbsp; </div>
			</td>
		</tr>

		</table>
<br /><hr>
		<?foreach($arResult["RUBRICS"] as $itemID => $itemValue):?>
			<input type="hidden" name="RUB_ID[]" value="<?=$itemValue["ID"]?>">
		<?endforeach;?>
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
	<?endif;?>
<?endif; //$arResult["ALLOW_ANONYMOUS"]=="Y" && $authorize<>"YES"?>
