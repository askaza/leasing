<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
$page = $APPLICATION->GetCurPageParam("print=Y", array("print")); 
$aMenuLinks = Array(
	Array(
		"Search", 
		"/en/search/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Print", 
		$page, 
		Array(), 
		Array(), 
		"" 
	)
);
?>