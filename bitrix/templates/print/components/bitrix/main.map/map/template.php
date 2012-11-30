<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$allNum = count($arResult["arMap"]);
$colNum = ceil($allNum / $arParams["COL_NUM"]);

if (is_array($arResult["arMap"]))
{
?>
<h2 class="map">Карта сайта</h2>
<table class="map-columns">
<tr>
	<td>
<?
	$level = -1;
	$counter = 0;
	foreach ($arResult["arMap"] as $arItem)
	{
		if ($arItem["LEVEL"] < $level)
		{
			for ($i = $arItem["LEVEL"]; $i<$level; $i++)
			{
				?></ul><?
			}
		}
	
		if ($counter >= $colNum)
		{
			if ($arItem["LEVEL"] == 0)
			{
				$counter = 0;
				?></ul></td><td><ul class="map-level-0"><?
			}
		}
		if ($arItem["LEVEL"] == 0)
		{
			?><ul class="map-level-0"><?
		}

	
		$level = $arItem["LEVEL"];
		?><li>
			<?=$arItem["LEVEL"]?> = 
			<?=$lastlevel?> ||||
			<a href="<?=$arItem["FULL_PATH"]?>"><?=$arItem["NAME"]?></a><?if ($arParams["SHOW_DESCRIPTION"] == "Y" && strlen($arItem["DESCRIPTION"]) > 0) {?><div><?=$arItem["DESCRIPTION"]?></div><?}?>
		
			<?if ($arItem["LEVEL"] > $lastlevel)
			{
				?><ul class="map-level-<?=($arItem["LEVEL"]+1)?>"><?
			}?>
		
		</li><?
		$counter++;
		if($arItem["LEVEL"] < $lastlevel)
		{
			?></ul><?
		}
		$lastlevel=$arItem["LEVEL"];
	}
	
	for ($i = $level; $i>=0; $i--)
	{
		/*?></ul><?*/
	}

?>
	</td>
</tr>
</table>
<?
	
}
?>