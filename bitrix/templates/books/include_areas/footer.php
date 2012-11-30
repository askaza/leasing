<h2 class="footer">Карта сайта</h2>

<div class="menu-sitemap-tree-wrapper">
<div class="menu-sitemap-tree">
<ul>

<?$APPLICATION->IncludeComponent("bitrix:menu", "footer", array(
	"ROOT_MENU_TYPE" => "top",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "3",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "Y",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>

<?$APPLICATION->IncludeComponent("bitrix:menu", "footer_add", array(
	"ROOT_MENU_TYPE" => "add",
	"MENU_CACHE_TYPE" => "N",
	"MENU_CACHE_TIME" => "0",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "3",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "Y",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
<?/*$APPLICATION->IncludeComponent("bitrix:main.map", "map", array(
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"SET_TITLE" => "Y",
	"LEVEL" => "3",
	"COL_NUM" => "1",
	"SHOW_DESCRIPTION" => "N"
	),
	false
);*/?>

</ul>
</div>
</div>