<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<table cellspacing="0" cellpadding="0" class="icons" height="28">
<tr>
<td><a href="<?=getLanguageHref()?>" style="color:#FFF;">Русский</a></td>
<td><a href="/en/rss/" title="RSS feed"><img src="<?=SITE_TEMPLATE_PATH?>/images/icon_rss.jpg"></a></td>
<td><a href="<?=htmlspecialchars($APPLICATION->GetCurUri("print=Y"));?>" title="Print mode"><img src="<?=SITE_TEMPLATE_PATH?>/images/icon_print.jpg"></a></td>
<td style="border-right:none;"><?$APPLICATION->IncludeComponent("bitrix:search.form", "search_header", array(
	"PAGE" => "/en/search/",
	"USE_SUGGEST" => "N"
	),
	false
);?></td>
</tr>
</table>
