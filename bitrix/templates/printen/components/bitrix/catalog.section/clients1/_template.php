<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="catalog-section2">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?if($_REQUEST['title'])
{?>
<table width="100%"><tr>
<td><h3 style="text-transform:capitalize;"><?=$_REQUEST['title'];?></h3></td><td width="150"><a href="/clients/">Назад к списку клиентов</a></td>
</tr></table>
<?}?>
<?if($arResult["ITEMS"] && !$_REQUEST["rod"] && !$_REQUEST["project"]){?>
	<div id="otzivi">
	<noindex>
	<strong>Интересны определенные компании?</strong>
	<table>
	<?$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>6, "CODE"=>"rod"));
	while($enum_fields = $property_enums->GetNext())
	{
		$page = $APPLICATION->GetCurPageParam("rod=".$enum_fields["ID"]."&title=".$enum_fields["VALUE"], array("rod","project")); 
		?><tr><td>-</td><td><a href='<?=$page?>'><?=$enum_fields["VALUE"]?></a></td></tr><?
	}?>
	</table>
	<strong>Интересен определённый тип автоматизации?</strong>
	<table>
	<?$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>6, "CODE"=>"project"));
	while($enum_fields = $property_enums->GetNext())
	{
		$page = $APPLICATION->GetCurPageParam("project=".$enum_fields["ID"]."&title=".$enum_fields["VALUE"], array("project","rod"));
		?><tr><td>-</td><td><a href='<?=$page?>'><?=$enum_fields["VALUE"]?></a></td></tr><?
	}?>
	</table>
	</noindex>
	</div>
<?}?>
<table cellpadding="0" cellspacing="0" border="0">
		<?foreach($arResult["ITEMS"] as $cell=>$arElement):?>

		<?if($cell%$arParams["LINE_ELEMENT_COUNT"] == 0):?>
		<tr>
		<?endif;?>

		<td valign="top" width="<?=round(100/$arParams["LINE_ELEMENT_COUNT"])?>%">

			<table cellpadding="0" cellspacing="2" border="0" style="padding:0 0 10px 10px">
				<tr>
					<td valign="bottom">
					<?if(is_array($arElement["PREVIEW_PICTURE"])):?>
						<a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><img style="vertical-align:bottom;margin-right:25px;" border="0" src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arElement["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arElement["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" /></a>
					<?elseif(is_array($arElement["DETAIL_PICTURE"])):?>
						<a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><img style="vertical-align:bottom;margin-right:25px;" border="0" src="<?=$arElement["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arElement["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arElement["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" /></a>
					<?endif?>
					</td>
				</tr>
				<tr>
					<td valign="top">
						<?=$arElement["PREVIEW_TEXT"]?>
					<a href="<?=$arElement["DETAIL_PAGE_URL"]?>">описание проекта</a>

<div style="height:10px"></div>
						<?foreach($arElement["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
							<?=$arProperty["NAME"]?>:&nbsp;<?
								if(is_array($arProperty["DISPLAY_VALUE"]))
									echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
								else
									echo $arProperty["DISPLAY_VALUE"];?><br />
						<?endforeach?>
			<hr>
					</td>
				</tr>
			</table>

		</td>

		<?$cell++;
		if($cell%$arParams["LINE_ELEMENT_COUNT"] == 0):?>
			</tr>
		<?endif?>

		<?endforeach; // foreach($arResult["ITEMS"] as $arElement):?>

		<?if($cell%$arParams["LINE_ELEMENT_COUNT"] != 0):?>
			<?while(($cell++)%$arParams["LINE_ELEMENT_COUNT"] != 0):?>
				<td>&nbsp;</td>
			<?endwhile;?>
			</tr>
		<?endif?>

</table>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
