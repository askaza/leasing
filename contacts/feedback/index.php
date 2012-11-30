<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Прямая связь с руководством и экспертами');
$APPLICATION->IncludeComponent(
	'site:feedback_leaders',
	'',
	array(
		'LEADERS_IBLOCK_ID' => $IBLOCKS_ID['LEADERS_RU'],
	),
	false
);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");