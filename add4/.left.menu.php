<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
$page = $APPLICATION->GetCurPageParam("print=Y", array("print")); 
$page2 = htmlspecialchars($APPLICATION->GetCurUri("print=Y"));



$aMenuLinks = Array(
	Array(
		"Поиск", 
		"/search/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Распечатать", 
		$page2, 
		Array(), 
		Array(), 
		"" 
	)
);
?>