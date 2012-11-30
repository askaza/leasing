<?
/**
 * Created by JetBrains PhpStorm.
 * User: nuu
 * Date: 25.09.12
 * Time: 22:40
 * To change this template use File | Settings | File Templates.
 */
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Homnet Leasing Ч History and Company Milestones.");
$APPLICATION->SetPageProperty("title", "History| Homnet Leasing");
$APPLICATION->SetTitle("History");
$APPLICATION->IncludeComponent(
	'bitrix:news.list',
	'history',
	array(
		'IBLOCK_TYPE' => 'content',
		'IBLOCK_ID' => $GLOBALS['IBLOCKS_ID']['HISTORY_EN'],
		'NEWS_COUNT' => '1000',
		'SORT_BY1' => 'NAME',
		'SORT_ORDER1' => 'DESC',
		'SORT_BY2' => '',
		'SORT_ORDER2' => '',
		'FILTER_NAME' => '',
		'FIELD_CODE' => array(
		),
		'PROPERTY_CODE' => array(
			'POSITION',
		),
		'CHECK_DATES' => 'N',
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
		'SET_TITLE' => 'N',
		'SET_STATUS_404' => 'N',
		'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',
		'ADD_SECTIONS_CHAIN' => 'Y',
		'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
		'PARENT_SECTION' => '',
		'PARENT_SECTION_CODE' => '',
		'DISPLAY_TOP_PAGER' => 'N',
		'DISPLAY_BOTTOM_PAGER' => 'Y',
		'PAGER_TITLE' => 'ѕубликации',
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
);