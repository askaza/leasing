<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<div class="leftmenu" style="background:#fff;">
<ul>
<?$previousLevel = 0;
foreach($arResult as $arItem):
$i++;?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
		<?if($arItem["SELECTED"]) $z="barrow"; 
		else $z="white";?>
			
			<li class="close <?if($arItem["SELECTED"]):?>csele<?endif;?>" id="l<?=$i?>">

				<div id="d<?=$i?>" class="<?if($arItem["SELECTED"]):?>item sel inside<?else:?>item<?endif;?>" style="width:173px;//width:253px;">
					<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				</div>
				<ul id="<?=$i?>" class="subm" <?if($arItem["SELECTED"] || ($i==1)):?>style="display:block; width:253px;"<?endif;?>>
	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>
			<li>
				<?if($arItem["DEPTH_LEVEL"]<2){?>

				<?}?>
					<div class="<?if($arItem["SELECTED"]):?>item sel<?else:?>item<?endif;?>">
						<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
					</div>
				<?if($arItem["DEPTH_LEVEL"]<2){?>
				<?}?>
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
	//$(this).css("height", $("#l"+$(this).attr("cid")).height());
});
</script>