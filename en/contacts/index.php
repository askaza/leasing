<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Contacts");
?>
<div style="PADDING-LEFT: 15px">
  <table width="190" class="kblock" border="0" cellspacing="1" cellpadding="1">
    <tbody>
      <tr><td><span style="FONT-SIZE: 13px"><b>Nagatinskaya Subway</b></span> 
          <br />
        
          <br />
        First train ftom center. Going out from subway, reach Varshavskoye shosse and move aside suburbs. Passing &laquo;Varshavskie Bani&raquo; and «Rossia» Insurance Company, turn right through barrier to the 7-th access with signs «Homnet Leasing» and «INERA Consalting» </td></tr>
    </tbody>
  </table>
115230, Moscow, Varshavskoye shosse 36, building 7 
  <br />

  <br />
tel. / fax: +7 (495) 781-77-78 
  <br />

  <br />
hotline: +7 (495) 781-77-78 
  <br />

  <br />
<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"KEY" => "ANuzGE0BAAAAOKEUMQIAXmrQydwJUP6U5XSlMgMomaDXm2cAAAAAAAAAAABQuWvitSke-EbdcWDwA2xQyvXBWA==",
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.680376757986636;s:10:\"yandex_lon\";d:37.62087816029656;s:12:\"yandex_scale\";i:16;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.622566993031;s:3:\"LAT\";d:55.679640784321;s:4:\"TEXT\";s:34:\"Varshavskoye shosse 36, building 7\";}}}",
		"MAP_WIDTH" => "350",
		"MAP_HEIGHT" => "390",
		"CONTROLS" => array(0=>"TOOLBAR",),
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",),
		"MAP_ID" => ""
	)
);?> </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>