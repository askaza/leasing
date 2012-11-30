<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Direct connection with Top-management and Experts');
$APPLICATION->IncludeComponent(
	'site:feedback_leaders',
	'',
	array(
		'LEADERS_IBLOCK_ID' => $IBLOCKS_ID['LEADERS_EN'],
	),
	false
);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
