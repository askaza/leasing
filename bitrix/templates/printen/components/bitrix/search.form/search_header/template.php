<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<form action="<?=$arResult["FORM_ACTION"]?>" style="margin:0; padding:0;">
	<table border="0" cellspacing="0" cellpadding="2" align="center">
		<tr>
			<td align="center"><?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
				"bitrix:search.suggest.input",
				"",
				array(
					"NAME" => "q",
					"VALUE" => "",
					"INPUT_SIZE" => 15,
					"DROPDOWN_SIZE" => 10,
				),
				$component, array("HIDE_ICONS" => "Y")
			);?><?else:?><input type="text" name="q" value="enter search term..." onclick="this.value=''" size="15" maxlength="50" class="sinput"/><?endif;?></td>
			<td align="right"><input class="searchbutton" name="s" type="submit" value="." /></td>
		</tr>
	</table>
</form>
