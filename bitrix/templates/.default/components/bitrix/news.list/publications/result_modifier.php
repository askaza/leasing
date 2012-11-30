<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
$arResult['PUBLICATIONS'] = array();
$arResult['COUNT_ITEMS'] = count($arResult['ITEMS']);
$arResult['PUBLICATION_YEARS'] = array();
$arParams['LAST_YEAR'] = intval($arResult['PUBLICATION_YEARS']);
if($arParams['LAST_YEAR'] < 1) $arParams['LAST_YEAR'] = 2007;
foreach($arResult['ITEMS'] as $c => $aItem){
	$arr = ParseDateTime($aItem['ACTIVE_FROM'], FORMAT_DATETIME);
	$arr['YYYY'] = intval($arr['YYYY']);
	$arResult['ITEMS'][$c]['DISPLAY_ACTIVE_FROM']=$arr['DD'].' '.ToLower(GetMessage('MONTH_'.intval($arr['MM']).'_S')).' '.$arr['YYYY'];
	if($arr['YYYY'] <= $arParams['LAST_YEAR']) $arr['YYYY'] = $arParams['LAST_YEAR'];
	$arResult['PUBLICATION_YEARS'][$arr['YYYY']] = $arr['YYYY'];
	$arResult['ITEMS'][$c]['YEAR_ACTIVE_FROM'] = $arr['YYYY'];
}