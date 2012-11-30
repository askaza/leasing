<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<table cellspacing="0" cellpadding="0" class="icons" height="28">
<tr>
<td><a href="<?=getLanguageHref()?>" style="color:#FFF;">English</a></td>
<td><a href="/auth/" style="color:#FFF;">Вход для клиентов</a></td>
<td><a href="/rss/" title="RSS поток"><img src="<?=SITE_TEMPLATE_PATH?>/images/icon_rss.jpg"></a></td>
<td><a href="<?=htmlspecialchars($APPLICATION->GetCurUri("print=Y"));?>" title="Версия для печати"><img src="<?=SITE_TEMPLATE_PATH?>/images/icon_print.jpg"></a></td>
<td style="border-right:none;"><?$APPLICATION->IncludeComponent("bitrix:search.form","search_header",Array(	"PAGE" => "/search/" ));?></td>
</tr>
</table>
