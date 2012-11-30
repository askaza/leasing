<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?><?$APPLICATION->IncludeComponent("bitrix:news.detail", "client1", Array(
	"IBLOCK_TYPE" => "en_content",	// Type of information block (used for verification only)
	"IBLOCK_ID" => "10",	// Information block code
	"ELEMENT_ID" => $_REQUEST["id"],	// News ID
	"ELEMENT_CODE" => "",	// News code
	"CHECK_DATES" => "Y",	// Show only currently active elements
	"FIELD_CODE" => array(	// Fields
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(	// Properties
		0 => "",
		1 => "1",
		2 => "",
	),
	"IBLOCK_URL" => "",	// List page URL (from information block settings by default)
	"AJAX_MODE" => "N",	// Enable AJAX mode
	"AJAX_OPTION_SHADOW" => "Y",	// Enable shadowing
	"AJAX_OPTION_JUMP" => "N",	// Enable scrolling to component's top
	"AJAX_OPTION_STYLE" => "Y",	// Enable styles loading
	"AJAX_OPTION_HISTORY" => "N",	// Emulate browser navigation
	"CACHE_TYPE" => "A",	// Cache type
	"CACHE_TIME" => "3600",	// Cache time (sec.)
	"CACHE_GROUPS" => "Y",	// Respect Access Permissions
	"META_KEYWORDS" => "-",	// Set page keywords from property
	"META_DESCRIPTION" => "-",	// Set page description from property
	"BROWSER_TITLE" => "-",	// Set browser window title from property value
	"DISPLAY_PANEL" => "N",	// Display panel buttons for this component
	"SET_TITLE" => "Y",	// Set page title
	"SET_STATUS_404" => "N",	// Set 404 status if no element or section was found
	"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Include information block into navigation chain
	"ADD_SECTIONS_CHAIN" => "Y",	// Add Section name to breadcrumb navigation
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Date display format
	"USE_PERMISSIONS" => "N",	// Use additional access restriction
	"DISPLAY_TOP_PAGER" => "N",	// Display at the top of the list
	"DISPLAY_BOTTOM_PAGER" => "Y",	// Display at the bottom of the list
	"PAGER_TITLE" => "Страница",	// Category name
	"PAGER_TEMPLATE" => "",	// Name of the pager template
	"PAGER_SHOW_ALL" => "Y",	// Show the ALL link
	"DISPLAY_DATE" => "Y",	// Display element date
	"DISPLAY_NAME" => "N",	// Display element title
	"DISPLAY_PICTURE" => "Y",	// Display element detail image
	"DISPLAY_PREVIEW_TEXT" => "Y",	// Display element preview text
	"AJAX_OPTION_ADDITIONAL" => "",	// Additional ID
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>