<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('����� ��������');
$aCallbackparams = array();
$author = intval($_REQUEST['author']);
if($author>0){
	$aCallbackparams['author'] = $author;
}
$tab = trim(strip_tags($_REQUEST['tab']));
if(!empty($tab)){
	$aCallbackparams['tab'] = $tab;
}
$APPLICATION->IncludeComponent(
	'bitrix:news.detail',
	'pub_detail',
	Array(
	'CALBACKPARAMS' => $aCallbackparams,
	'IBLOCK_TYPE' => 'content',	// ��� ��������������� ����� (������������ ������ ��� ��������)
	'IBLOCK_ID' => $GLOBALS['IBLOCKS_ID']['PUBLICATIONS_RU'],	// ��� ��������������� �����
	'ELEMENT_ID' => $_REQUEST['ID'],	// ID �������
	'ELEMENT_CODE' => '',	// ��� �������
	'CHECK_DATES' => 'Y',	// ���������� ������ �������� �� ������ ������ ��������
	'FIELD_CODE' => array(	// ����
		0 => '',
		1 => '',
	),
	'PROPERTY_CODE' => array(	// ��������
		0 => '',
		1 => '',
	),
	'IBLOCK_URL' => '',	// URL �������� ��������� ������ ��������� (�� ��������� - �� �������� ���������)
	'AJAX_MODE' => 'N',	// �������� ����� AJAX
	'AJAX_OPTION_SHADOW' => 'Y',	// �������� ���������
	'AJAX_OPTION_JUMP' => 'N',	// �������� ��������� � ������ ����������
	'AJAX_OPTION_STYLE' => 'Y',	// �������� ��������� ������
	'AJAX_OPTION_HISTORY' => 'N',	// �������� �������� ��������� ��������
	'CACHE_TYPE' => 'A',	// ��� �����������
	'CACHE_TIME' => '3600',	// ����� ����������� (���.)
	'CACHE_GROUPS' => 'Y',	// ��������� ����� �������
	'META_KEYWORDS' => '-',	// ���������� �������� ����� �������� �� ��������
	'META_DESCRIPTION' => '-',	// ���������� �������� �������� �� ��������
	'BROWSER_TITLE' => '-',	// ���������� ��������� ���� �������� �� ��������
	'DISPLAY_PANEL' => 'N',	// ��������� � �����. ������ ������ ��� ������� ����������
	'SET_TITLE' => 'Y',	// ������������� ��������� ��������
	'SET_STATUS_404' => 'N',	// ������������� ������ 404, ���� �� ������� ������� ��� ������
	'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',	// �������� �������� � ������� ���������
	'ADD_SECTIONS_CHAIN' => 'Y',	// �������� ������ � ������� ���������
	'ACTIVE_DATE_FORMAT' => 'd.m.Y',	// ������ ������ ����
	'USE_PERMISSIONS' => 'N',	// ������������ �������������� ����������� �������
	'DISPLAY_TOP_PAGER' => 'N',	// �������� ��� �������
	'DISPLAY_BOTTOM_PAGER' => 'Y',	// �������� ��� �������
	'PAGER_TITLE' => '��������',	// �������� ���������
	'PAGER_TEMPLATE' => '',	// �������� �������
	'PAGER_SHOW_ALL' => 'Y',	// ���������� ������ '���'
	'DISPLAY_DATE' => 'Y',	// �������� ���� ��������
	'DISPLAY_NAME' => 'N',	// �������� �������� ��������
	'DISPLAY_PICTURE' => 'Y',	// �������� ��������� �����������
	'DISPLAY_PREVIEW_TEXT' => 'Y',	// �������� ����� ������
	'AJAX_OPTION_ADDITIONAL' => '',	// �������������� �������������
	),
	false
);
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>