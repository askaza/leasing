<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<table width="486" cellpadding="0" cellspacing="0" border="0" align="center">

<?foreach($arResult["ITEMS"] as $arItem):?>
<tr><td width="158" valign="top">


<?$arDATE = ParseDateTime($arItem["DISPLAY_ACTIVE_FROM"], FORMAT_DATETIME);
echo $arDATE["DD"]." ".ToLower(GetMessage("MONTH_".intval($arDATE["MM"])."_S"));?>
<br>


<?if ($arItem["DISPLAY_PROPERTIES"][JOUR]) {?>
<?=$arItem["DISPLAY_PROPERTIES"][JOUR]["VALUE"];?><br />
<?}?>
</td>
<td style="padding-bottom:15px; padding-left:10px;" valign="top">


<?if ($arItem["DISPLAY_PROPERTIES"][Author]) {?>
<?=$arItem["DISPLAY_PROPERTIES"][Author]["VALUE"];?><br />
<?}?>

		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>

		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?><br>
		<?endif;?>

		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>

</td></tr>
<?endforeach;?>
</table>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div><br>
