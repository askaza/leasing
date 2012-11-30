<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<div class="leftmenu" style="background:#fff;">
<ul>
<?$previousLevel = 0;foreach($arResult as $arItem):?>
<?$i++;?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
			<li class="close <?if($arItem["SELECTED"]):?>csele<?endif;?>" id="l<?=$i?>">
			<div style="position:relative; width:1px; height:1px;float:left;font-size:1px;line-height:1px;"><div class="aro" id="a<?=$i?>" cid="<?=$i?>"></div></div>
				<div id="d<?=$i?>" class="<?if($arItem["SELECTED"]):?>item sel inside<?else:?>item<?endif;?>" style="width:187px;//width:268px;">
				<? /*<div class="folder" onClick="$('.item').removeClass('inside');$('#d<?=$i?>').addClass('inside');$('.subm').hide();$('#<?=$i?>').toggle();$('.folder2').attr('class','folder');$(this).attr('class','folder2');"></div> */?>
				<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>
				<ul id="<?=$i?>" class="subm" <?if($arItem["SELECTED"]):?>style="display:block; width:268px;"<?endif;?>>
			
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
<script>
$(".aro").each(function(){
	//alert($(this).attr("cid"))
	//alert($("#l"+$(this).attr("cid")).height());
	$(this).css("height", $("#l"+$(this).attr("cid")).height());
});
</script>