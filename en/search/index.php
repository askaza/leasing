<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�����");?>

<?$APPLICATION->IncludeComponent("bitrix:search.page", "tags", array(
	"RESTART" => "N",
	"CHECK_DATES" => "Y",
	"USE_TITLE_RANK" => "N",
	"DEFAULT_SORT" => "rank",
	"arrFILTER" => array(
		0 => "no",
	),
	"SHOW_WHERE" => "N",
	"SHOW_WHEN" => "N",
	"PAGE_RESULT_COUNT" => "10",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_SHADOW" => "Y",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"DISPLAY_TOP_PAGER" => "Y",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "���������� ������",
	"PAGER_SHOW_ALWAYS" => "Y",
	"PAGER_TEMPLATE" => "",
	"TAGS_SORT" => "NAME",
	"TAGS_PAGE_ELEMENTS" => "20",
	"TAGS_PERIOD" => "",
	"TAGS_URL_SEARCH" => "",
	"TAGS_INHERIT" => "Y",
	"FONT_MAX" => "50",
	"FONT_MIN" => "10",
	"COLOR_NEW" => "000000",
	"COLOR_OLD" => "C8C8C8",
	"PERIOD_NEW_TAGS" => "",
	"SHOW_CHAIN" => "Y",
	"COLOR_TYPE" => "Y",
	"WIDTH" => "100%",
	"USE_SUGGEST" => "N",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>