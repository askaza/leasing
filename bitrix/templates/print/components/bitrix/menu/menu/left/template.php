<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<div class="leftmenu">
<ul>
<?$previousLevel = 0;foreach($arResult as $arItem):?>
<?$i++;?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
			<li class="close">
				<div id="d<?=$i?>" class="<?if($arItem["SELECTED"]):?>item sel inside<?else:?>item<?endif;?>">
				<? /*<div class="folder" onClick="$('.item').removeClass('inside');$('#d<?=$i?>').addClass('inside');$('.subm').hide();$('#<?=$i?>').toggle();$('.folder2').attr('class','folder');$(this).attr('class','folder2');"></div> */?>
				<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>
				<ul id="<?=$i?>" class="subm" <?if($arItem["SELECTED"]):?>style="display:block;"<?endif;?>>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>
				<li>
					<div class="<?if($arItem["SELECTED"]):?>item sel<?else:?>item<?endif;?>">
					
					<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>
				</li>
		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
</div>
<?endif?>