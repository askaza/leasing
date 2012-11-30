<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="news-list" style="padding-left:12px; padding-right:15px;">
<h2><a href="/en/press/news/" style="color:#3E3E40;">NEWS</a></h2>
<div class="maindiv">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<p class="news-item">
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span><br>
		<?endif?>
<?if ($arItem["DISPLAY_PROPERTIES"][Author]) {?>
<?=$arItem["DISPLAY_PROPERTIES"][Author]["VALUE"];?>:<br />
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
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>





	</p>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>


</div>

<?if($dir=='/en/'){?>
<!--<div style="height:6px;">&nbsp;</div>
<a href="/subscribe/"><img src="/en/images/banner_subscr.jpg" alt="" title=""></a>-->
<?}else{?><div style="height:5px;">&nbsp;</div>
<a href="/subscribe/"><img src="/en/images/banner_subscr_inside.jpg" alt="" title=""></a>
<?}?>
<div style="height:22px;">&nbsp;</div>
