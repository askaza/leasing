<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<div class="menu-sitemap-tree">
<ul>
<?$previousLevel = 0;foreach($arResult as $arItem):?>
<?$i++;?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
			<li class="close <?if($arItem["DEPTH_LEVEL"]==1){?>float<?}?><?if($z!=true) echo" first";?>" <?if($z!=true) echo"style='border:0;'";?>>
				
				<div class="item-text">
				<?if($arItem["DEPTH_LEVEL"]>1){?><div class="folder" onClick="$('.subm').hide();$('#<?=$i?>').toggle();$('.folder2').attr('class','folder');$(this).attr('class','folder2');"></div><?}?>
				<a href="#"><?=$arItem["TEXT"]?></a></div>
				<ul id="<?=$i?>" <?if($arItem["DEPTH_LEVEL"]==1){?>style="display:block;"<?}else{?>class="subm foot"<?}?>>

	<?else:?>
		<?if ($arItem["PERMISSION"] > "D"):?>
				<li <?if($arItem["DEPTH_LEVEL"]==1){?>class="float"<?}?>>
					<div class="item-text"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>
				</li>
		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
<?$z=true;?>
<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
</div>
<?endif?>