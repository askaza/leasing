<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="catalog-section2">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?if($_REQUEST['title'])
{?>
<table width="100%"><tr>
<td><h3 style="text-transform:uppercase;font-size:12px; padding-left:2px;"><?=$_REQUEST['title'];?></h3></td><td width="150"><a href="/en/clients/">Назад к списку клиентов</a></td>
</tr></table>
<?}?>
<?if($arResult["ITEMS"] && !$_REQUEST["rod"] && !$_REQUEST["project"]){?>
	<div id="otzivi">
	<noindex>
	<strong>Interested in certain type of company?</strong>
	<table>
	<?$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>10, "CODE"=>"rod"));
	while($enum_fields = $property_enums->GetNext())
	{
		$page = $APPLICATION->GetCurPageParam("rod=".$enum_fields["ID"]."&title=".$enum_fields["VALUE"], array("rod","project")); 
		?><tr><td>-</td><td><a href='<?=$page?>'><?=$enum_fields["VALUE"]?></a></td></tr><?
	}?>
	</table>
	<strong>Interested in certain type of automation?</strong>
	<table>
	<?$property_enums = CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC", "DEF"=>"DESC"), Array("IBLOCK_ID"=>10, "CODE"=>"project"));
	while($enum_fields = $property_enums->GetNext())
	{
		$page = $APPLICATION->GetCurPageParam("project=".$enum_fields["ID"]."&title=".$enum_fields["VALUE"], array("project","rod"));
		?><tr><td>-</td><td><a href='<?=$page?>'><?=$enum_fields["VALUE"]?></a></td></tr><?
	}?>
	</table>
	</noindex>
	</div>
<?}?>

<div style="padding-left:5px;">

		<?foreach($arResult["ITEMS"] as $cell=>$arElement):?>



					<?if(is_array($arElement["PREVIEW_PICTURE"])):?>
						<div style="height: 6px;"></div> <a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><img style="vertical-align:bottom;margin-right:25px;" border="0" src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arElement["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arElement["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" /></a>
					<?elseif(is_array($arElement["DETAIL_PICTURE"])):?>
						<a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><img style="vertical-align:bottom;margin-right:25px;" border="0" src="<?=$arElement["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arElement["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arElement["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" /></a>
					<?endif?>


						<?=$arElement["PREVIEW_TEXT"]?>
					<a href="<?=$arElement["DETAIL_PAGE_URL"]?>">Project Description</a>

<div style="height:10px"></div>
						<?foreach($arElement["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
							<?=$arProperty["NAME"]?>:&nbsp;<?
								if(is_array($arProperty["DISPLAY_VALUE"]))
									echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
								else
									echo $arProperty["DISPLAY_VALUE"];?><br />
						<?endforeach?>
			<hr>




		<?$cell++;
		if($cell%$arParams["LINE_ELEMENT_COUNT"] == 0):?>

		<?endif?>

		<?endforeach; // foreach($arResult["ITEMS"] as $arElement):?>


</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
