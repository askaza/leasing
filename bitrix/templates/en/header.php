<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/css/components.css">
	<?$APPLICATION->ShowHead()?>
	<script type="text/javascript" src="/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="/js/jquery.tools.min.js"></script>
	<link type="text/css" href="/js/mscarousel.css" rel="stylesheet" />
</head>
<body>
<!--LiveInternet counter--><script type="text/javascript"><!--
new Image().src = "//counter.yadro.ru/hit?r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,80))+
";"+Math.random();//--></script><!--/LiveInternet-->
<!-- Yandex.Metrika counter -->
<div style="display:none;"><script type="text/javascript">
(function(w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter2929384 = new Ya.Metrika(2929384);
             yaCounter2929384.clickmap(true);
             yaCounter2929384.trackLinks(true);
        
        } catch(e) {}
    });
})(window, 'yandex_metrika_callbacks');
</script></div>
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
<noscript><div style="position:absolute"><img src="//mc.yandex.ru/watch/2929384" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<?global $APPLICATION;$dir = $APPLICATION->GetCurDir();?>


<?
$i='';
$dr = substr($dir,4);
$dr = substr($dr,0,strpos($dr,'/'));
if($dr=="company" || $dr=="career") $i='1';
if($dr=="solutions") $i='2';
if($dr=="services") $i='3';
if($dr=="press") $i='4';
if($dr=="clients") $i='5';
if($dr=="contacts") $i='6';
if($dr=="career") $i='10';
?>
<div class="header_wrapper header<?=$i;?>" style="margin-top:28px">
<table cellspacing="0" cellpadding="0" align="center" width="960" height="1">
<tr height="1">
<!-- <td align="right"><img src="<?=SITE_TEMPLATE_PATH?>/images/header_left<?=$i;?>.jpg"></td> -->
<td height="1">
	<table width="100%" height="100%" cellspacing="0" cellpadding="0" id="header">
	<tr><td><a href="/en/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo_top.jpg" title="" alt=""></a></td><td class="bg" align="right"><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/header_icons.php"),Array(),Array("MODE"=>"php"));?></td></tr>
	<tr><td><a href="/en/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo_middle<?=$i;?>.jpg" title="" alt=""></a></td><td valign="top"><img src="<?=SITE_TEMPLATE_PATH?>/images/header<?=$i;?>.jpg" title="" alt=""></td></tr>
	<tr><td><a href="/en/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo_bottom.jpg" title="" alt=""></a></td><td class="bg" align="right">
		<?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel", array(
	"ROOT_MENU_TYPE" => "top",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "2",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "Y",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?> 
	</td></tr>
	</table>
</td>
<!-- <td align="left"><img src="<?=SITE_TEMPLATE_PATH?>/images/header_right<?=$i;?>.jpg"></td> -->
</tr>
</table>
</div>

<div class="content_wrapper">
<table cellspacing="0" cellpadding="0" align="center" width="992">
<tr valign="top">
<!-- <td align="right"><img src="<?=SITE_TEMPLATE_PATH?>/images/shade_left.jpg" alt=""></td> -->
<td id="content">

<table cellspacing="0" cellpadding="0" align="center" width="100%" height="100%">
<tr valign="top">
<td id="leftcol" class="<?if($dir!="/en/") echo"inside";?>">
<table cellspacing="0" cellpadding="0" align="center" width="1" height="100%">
<tr valign="top"><td height="1">
<?$APPLICATION->IncludeComponent("bitrix:menu", "left", array(
	"ROOT_MENU_TYPE" => "left",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "3",
	"CHILD_MENU_TYPE" => "inside",
	"USE_EXT" => "Y",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?> 
</td></tr>
<tr valign="top"><td style="padding:28px;<?if($dir=="/en/")echo"padding-right:25px;";?>">



<?if ($dir=="/en/solutions/homnet/") {?>
<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/mfso1.php"),Array(),Array("MODE"=>"php"));?>
<br />
<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/mfso2.php"),Array(),Array("MODE"=>"php"));?>
<?} elseif (($dir=="/en/solutions/homnet8/")||($dir=="/en/solutions/homnet7/")||($dir=="/en/solutions/1cplatform/")||(($dir=="/en/solutions/"))) {?>

<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/solban1.php"),Array(),Array("MODE"=>"php"));?>
<br />
<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/solban2.php"),Array(),Array("MODE"=>"php"));?>
<br />
<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/solban3.php"),Array(),Array("MODE"=>"php"));?>

<?//} elseif (($dr=="press")||($dr=="company")) {
} elseif (($dr=="press")) {
//<div class="facts">
//<h3>FACTS</h3>
//<div class="plashka">2009</div>
//<div>
//«Leasing Review» - Diploma:<br />
//«For significant contribution to analytical researches about Leasing»</div>
//<div class="plashka">2008</div>
//<div>
//«Expert RA» - Diploma: <br />
//«Homnet Leasing» is a leader in leasing automation
//</div>
//<div class="plashka">2008</div>
//<div>
//«Rosleasing» - results of research:<br />
//The share of «Homnet Leasing» - 69,2% of automation projects in leasing companies in Russia
//</div>
//<div class="plashka">2007</div>
//<div>
//«Expert RA» - Diploma:<br />
//«Homnet Leasing» is the most popular IT-consultant of leasing companies
//</div>
//<div class="plashka">2006</div>
//<div>«Expert RA» - results of research:<br />
//«Homnet Leasing» is a leader in number of completed automation projects in leasing companies
//</div>
//<div class="plashka">2004</div>
//<div>«1C» company and «Rosleasing» considered «Homnet Leasing» to be the most qualified leasing solutions developer on «1Ñ:Enterprise» platform
//</div>
//<br />
//</div>
} else {?>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "leftcol", array(
	"IBLOCK_TYPE" => "en_content",
	"IBLOCK_ID" => "9",
	"NEWS_COUNT" => "3",
	"SORT_BY1" => "ACTIVE_FROM",
	"SORT_ORDER1" => "DESC",
	"SORT_BY2" => "SORT",
	"SORT_ORDER2" => "ASC",
	"FILTER_NAME" => "",
	"FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "Author",
		1 => "",
	),
	"CHECK_DATES" => "Y",
	"DETAIL_URL" => "",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_SHADOW" => "Y",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"PREVIEW_TRUNCATE_LEN" => "",
	"ACTIVE_DATE_FORMAT" => "d.m.Y",
	"DISPLAY_PANEL" => "N",
	"SET_TITLE" => "N",
	"SET_STATUS_404" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"ADD_SECTIONS_CHAIN" => "N",
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",
	"PARENT_SECTION" => "",
	"PARENT_SECTION_CODE" => "",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_TITLE" => "Íîâîñòè",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_TEMPLATE" => "",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"DISPLAY_DATE" => "Y",
	"DISPLAY_NAME" => "Y",
	"DISPLAY_PICTURE" => "Y",
	"DISPLAY_PREVIEW_TEXT" => "Y",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
<?}?>

<?if($dir=='/en/'){?>
<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/digest.php"),Array(),Array("MODE"=>"php"));?>
<?}?>
</td></tr>
</table>
</td>
<td style="<?if(($dir=='/en/')||($dir=='/en/contacts/feedback/')) { echo ('padding:25px 25px 28px 28px;');} elseif(($dir=='/en/contacts/')||($dir=='/en/career/')) {echo ('padding:25px 25px 28px 23px;');} else {echo ('padding:25px 55px 41px 36px;');} ?>" width="100%">
<div id="navigation"><?//$APPLICATION->IncludeComponent("bitrix:breadcrumb",".default",Array("START_FROM" => "0", "PATH" => "", "SITE_ID" => "" ));?></div>

<h1 id="pagetitle" <?if (($dir=='/en/career/')||($dir=='/en/contacts/')) { echo ('style="padding-left:16px;"');} elseif($dir=='/en/clients/'){echo ('style="padding-left:5px;"');}?>>

<?if($dir=='/en/') {?><a href="/en/company/" style="color:#3e3e40; text-decoration:none;"><?}?>
<?$APPLICATION->ShowTitle(false)?><?if($dir=='/en/') {?></a><?}?>


</h1>