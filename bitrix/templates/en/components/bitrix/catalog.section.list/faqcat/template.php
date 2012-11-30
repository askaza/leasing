<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="catalog-section-list">

<?
foreach($arResult["SECTIONS"] as $arSection):
?>
<a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?></a><br />
<?endforeach?>

</div>
