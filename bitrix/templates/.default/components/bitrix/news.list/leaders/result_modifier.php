<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arResult['PUBLICATIONS'] = array();
if(count($arResult['ELEMENTS'])>0){
	$res = CIBlockElement::GetList(
		array(),
		array(
			'IBLOCK_ID' => $GLOBALS['IBLOCKS_ID']['PUBLICATIONS_'.LANG_UPPER],
			'PROPERTY_Author' => $arResult['ELEMENTS']
		),
		array('PROPERTY_Author'),
		false,
		array('ID', 'PROPERTY_Author')
	);
	while($aPubItem = $res->GetNext()){
		$arResult['PUBLICATIONS'][$aPubItem['PROPERTY_AUTHOR_VALUE']] = true;
	};
}