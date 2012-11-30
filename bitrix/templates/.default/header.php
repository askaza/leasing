<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=SITE_CHARSET?>" />
<?=$APPLICATION->ShowMeta("keywords")?>
<?=$APPLICATION->ShowMeta("description")?>
<?=$APPLICATION->ShowCSS()?>
<title><?=$APPLICATION->ShowTitle()?></title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF">
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

<?=$APPLICATION->ShowPanel()?>

<?if($USER->IsAdmin()):?>

<div style="border:red solid 1px">
	<form action="/bitrix/admin/site_edit.php" method="GET">
		<input type="hidden" name="LID" value="<?=SITE_ID?>" />
		<p><font style="color:red"><?echo GetMessage("DEF_TEMPLATE_NF")?> </font></p>
		<input type="submit" name="set_template" value="<?echo GetMessage("DEF_TEMPLATE_NF_SET")?>" />
	</form>
</div>

<?endif?>