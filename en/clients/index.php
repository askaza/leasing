<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Clients");
?><?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "clients", array(
	"IBLOCK_TYPE" => "en_content",
	"IBLOCK_ID" => "10",
	"SECTION_ID" => $_REQUEST["sid"],
	"SECTION_CODE" => "",
	"COUNT_ELEMENTS" => "Y",
	"TOP_DEPTH" => "2",
	"SECTION_URL" => "",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CACHE_GROUPS" => "Y",
	"DISPLAY_PANEL" => "N",
	"ADD_SECTIONS_CHAIN" => "Y"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?>
<br />
<?
GLOBAL $arrFilter;
if($_REQUEST["rod"])
	$arrFilter["PROPERTY_rod"] = $_REQUEST["rod"];
if($_REQUEST["project"])
	$arrFilter["PROPERTY_project"] = $_REQUEST["project"];
?>
<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "clients1", Array(
	"IBLOCK_TYPE" => "en_content",	// Info-block type
	"IBLOCK_ID" => "10",	// Info-block
	"SECTION_ID" => $_REQUEST["sid"],	// Section ID
	"SECTION_CODE" => "",	// Section code
	"ELEMENT_SORT_FIELD" => "sort",	// Field to sort elements
	"ELEMENT_SORT_ORDER" => "asc",	// Sort order for elements
	"FILTER_NAME" => "arrFilter",	// Name of the array with values used to filter elements
	"INCLUDE_SUBSECTIONS" => "Y",	// Show elements from subsections
	"SHOW_ALL_WO_SECTION" => "Y",	// Show all elements if no section is specified
	"PAGE_ELEMENT_COUNT" => "10",	// Number of elements per page
	"LINE_ELEMENT_COUNT" => "1",	// Number of elements to display in a table row
	"PROPERTY_CODE" => array(	// Properties
		0 => "",
		1 => "1",
		2 => "",
	),
	"SECTION_URL" => "",	// URL of the page with the section contents
	"DETAIL_URL" => "",	// URL of the page with the detail contents
	"BASKET_URL" => "/personal/basket.php",	// URL of the page with the customer cart
	"ACTION_VARIABLE" => "action",	// "Actions" parameter name
	"PRODUCT_ID_VARIABLE" => "id",	// "Product code" parameter name
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Product Quantity Parameter Name
	"PRODUCT_PROPS_VARIABLE" => "prop",	// Product Properties Parameter Name
	"SECTION_ID_VARIABLE" => "SECTION_ID",	// "Section code" parameter name
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
	"ADD_SECTIONS_CHAIN" => "N",	// Add Section name to breadcrumb navigation
	"DISPLAY_COMPARE" => "N",	// Show Compare button
	"SET_TITLE" => "N",	// Set page title
	"SET_STATUS_404" => "N",	// Set 404 status if no element or section was found
	"CACHE_FILTER" => "N",	// Cache if the filter is active
	"PRICE_CODE" => "",	// Price type
	"USE_PRICE_COUNT" => "N",	// Show quantity range prices
	"SHOW_PRICE_COUNT" => "1",	// Show price for quantity
	"PRICE_VAT_INCLUDE" => "Y",	// Include tax rate in price
	"PRODUCT_PROPERTIES" => "",	// Product Properties
	"USE_PRODUCT_QUANTITY" => "N",	// Enable Product Quantity Field
	"DISPLAY_TOP_PAGER" => "N",	// Display at the top of the list
	"DISPLAY_BOTTOM_PAGER" => "Y",	// Display at the bottom of the list
	"PAGER_TITLE" => "Clients",	// Category name
	"PAGER_SHOW_ALWAYS" => "N",	// Always show the pager
	"PAGER_TEMPLATE" => "",	// Name of the pager template
	"PAGER_DESC_NUMBERING" => "N",	// Use reverse page navigation
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Cache time for pages with reverse page navigation
	"PAGER_SHOW_ALL" => "Y",	// Show the ALL link
	"AJAX_OPTION_ADDITIONAL" => "",	// Additional ID
	),
	false
);?>
<br />
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>