<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Homnet Leasing");
?>
<div class="maindiv">
  <p style="color:#2f6cab; font-weight:bold;"> Homnet Leasing is a main supplier of the informational systems for leasing business automation in Russia.</p>
 <p style="COLOR: rgb(0,74,128)"><font color="#7d7d7d">
 The company implements ERP, solves the following particular problems as automation of front-office, leasing operations, 
 financial planning, budgeting, local accounting, tax accounting and also IFRS.</font></p>

  <p style="COLOR: rgb(0,74,128)"><font color="#7d7d7d">Homnet Leasing customers are public,
  private, both foreign and russian companies working in the field of retail and corporate leasing and 
  carrying out transactions of different complexity level. <a href="/en/company/homnet/" >Read more</a> 
      <div style="HEIGHT: 10px"></div>
    
      <br />
    
      <h2><a href="/en/clients/" style="color:#3E3E40;">Clients</a></h2>
    <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/otzivi.php"),Array(),Array("MODE"=>"php"));?> 
      <div style="HEIGHT: 22px"> </div>
    <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/lising.php"),Array(),Array("MODE"=>"php"));?> </font></p>
  
  <p></p>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>