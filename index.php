<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "������������� �������");
$APPLICATION->SetPageProperty("description", "�������� ������� ������ � �������� ��������� ������� � ����� ��� ������������� ���������� ������������ � ������.");
$APPLICATION->SetPageProperty("title", "������ ������ | ������������� ������� �� ���� 1�:�����������");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("������ ������");
?>
<div class="maindiv">
  <p style="color:#2f6cab; font-weight:bold;">
  �������� &laquo;������ ������&raquo;�&mdash; �������� ��������� ������� � ����� ��� ������������� ���������� ������������ � ������.
  </p>
<p style="COLOR: rgb(0,74,128)"><font color="#7d7d7d">
  �������� �������� ����������� �������������� ������� (ERP), � ����� ������ ����� �������� ������ ������, ��� ������������� �����-�����, ���������� ��������, ����������� ������������, ��������������, �������������� � ���������� �����, ����.</font> </p>

  <p>������� ������� ������ � ��������������� ��������, ��� ����������, ��� � ����������� ��������, ����������� ����� ���������� � �������������� ������� ��������������� ������ ������ ������ ���������. <a id="bxid_432443" href="http://www.1c-leasing.ru/company/homnet/" >�����</a> </p>

  <br />
</div>

<h2><a href="/clients/" style="color:#3E3E40;" >�������</a></h2>
<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/otzivi.php"),Array(),Array("MODE"=>"php"));?> 
<div style="HEIGHT: 22px">�</div>
<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/lising.php"),Array(),Array("MODE"=>"html"));?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>