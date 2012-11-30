<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "автоматизация лизинга");
$APPLICATION->SetPageProperty("description", "Компания «Хомнет Лизинг» — основной поставщик решений и услуг для автоматизации лизинговой деятельности в России.");
$APPLICATION->SetPageProperty("title", "Хомнет Лизинг | Автоматизация лизинга на базе 1С:Предприятие");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("ХОМНЕТ ЛИЗИНГ");
?>
<div class="maindiv">
  <p style="color:#2f6cab; font-weight:bold;">
  Компания &laquo;Хомнет Лизинг&raquo; &mdash; основной поставщик решений и услуг для автоматизации лизинговой деятельности в России.
  </p>
<p style="COLOR: rgb(0,74,128)"><font color="#7d7d7d">
  Компания внедряет комплексные информационные системы (ERP), а также решает такие отдельно взятые задачи, как автоматизация фронт-офиса, лизинговых операций, финансового планирования, бюджетирования, бухгалтерского и налогового учета, МСФО.</font> </p>

  <p>Клиенты «Хомнет Лизинг» — государственные и частные, как российские, так и иностранные компании, работающие в сфере розничного и корпоративного лизинга и осуществляющие сделки любого уровня сложности. <a id="bxid_432443" href="http://www.1c-leasing.ru/company/homnet/" >Далее</a> </p>

  <br />
</div>

<h2><a href="/clients/" style="color:#3E3E40;" >КЛИЕНТЫ</a></h2>
<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/otzivi.php"),Array(),Array("MODE"=>"php"));?> 
<div style="HEIGHT: 22px"> </div>
<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/lising.php"),Array(),Array("MODE"=>"html"));?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>