<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty('description', 'Хомнет Лизинг - публикации в журналах.');
$APPLICATION->SetPageProperty('title', 'Публикации | Хомнет Лизинг');
$APPLICATION->SetTitle('Публикации');
$author = intval($_REQUEST['author']);
$tab = strip_tags($_REQUEST['tab']);
$aExtFilterName = '';
if($author > 0){
	CModule::IncludeModule("iblock");
	$aAuthor = CIBlockElement::GetList(
		array(),
		array(
			'IBLOCK_ID' => $GLOBALS['IBLOCKS_ID']['PUBLICATIONS_RU'],
			'PROPERTY_AUTHOR' => $author
		),
		false,
		array('nTopCount' => 1),
		array('ID')
	)->GetNext();
	if(!empty($aAuthor)){
		$aExtFilterName = 'PUBLICATIONS_AUTHOR_FILTER';
		$GLOBALS['PUBLICATIONS_AUTHOR_FILTER'] = array(
			'PROPERTY_Author' => $author
		);
	}
}
$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'publications',
	array(
		'AUTHOR' => $author,
		'TAB' => $tab,
		'IBLOCK_TYPE' => 'content',
		'IBLOCK_ID' => $GLOBALS['IBLOCKS_ID']['PUBLICATIONS_RU'],
		'NEWS_COUNT' => 1000,
		'SORT_BY1' => 'ACTIVE_FROM',
		'SORT_ORDER1' => 'DESC',
		'SORT_BY2' => 'SORT',
		'SORT_ORDER2' => 'ASC',
		'FILTER_NAME' => $aExtFilterName,
		'FIELD_CODE' => array(
			0 => '',
			1 => '',
		),
		'PROPERTY_CODE' => array(
			0 => 'JOUR',
			1 => 'Author',
			2 => '',
		),
		'CHECK_DATES' => 'Y',
		'DETAIL_URL' => '',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_SHADOW' => 'Y',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'Y',
		'AJAX_OPTION_HISTORY' => 'N',
		'CACHE_TYPE' => 'A',
		'CACHE_TIME' => '3600',
		'CACHE_FILTER' => 'N',
		'CACHE_GROUPS' => 'Y',
		'PREVIEW_TRUNCATE_LEN' => '',
		'ACTIVE_DATE_FORMAT' => 'd.m.Y',
		'DISPLAY_PANEL' => 'N',
		'SET_TITLE' => 'Y',
		'SET_STATUS_404' => 'N',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',
		'ADD_SECTIONS_CHAIN' => 'Y',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'PARENT_SECTION' => '',
		'PARENT_SECTION_CODE' => '',
		'DISPLAY_TOP_PAGER' => 'N',
		'DISPLAY_BOTTOM_PAGER' => 'Y',
		'PAGER_TITLE' => 'Публикации',
		'PAGER_SHOW_ALWAYS' => 'N',
		'PAGER_TEMPLATE' => '',
		'PAGER_DESC_NUMBERING' => 'N',
		'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
		'PAGER_SHOW_ALL' => 'Y',
		'DISPLAY_DATE' => 'Y',
		'DISPLAY_NAME' => 'Y',
		'DISPLAY_PICTURE' => 'Y',
		'DISPLAY_PREVIEW_TEXT' => 'Y',
		'AJAX_OPTION_ADDITIONAL' => ''
	),
	false
);?>