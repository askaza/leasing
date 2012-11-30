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
				<div class="item">
				<div class="folder" onClick="$('.subm').hide();$('#<?=$i?>').toggle();$('.folder2').attr('class','folder');$(this).attr('class','folder2');"></div>
				<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>
				<ul id="<?=$i?>" class="subm">

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>
				<li>
					<div class="item">
					
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