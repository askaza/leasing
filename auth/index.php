<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0) 
	LocalRedirect($backurl);

$APPLICATION->SetTitle("����� ����������");
?> 
<p>����� �� ������ ������� ���������� ��� ������� &laquo;������ ������&raquo;. 
  <br />
 �������� ���������� �������� ������ ����� �����������, ������� ��� ���������� ����� ������ ����� � ������, ��������������� ������� ���������. </p>
 
<p>��������� ���������� ��������, ����: </p>
 
<ul class="bluebullit"> 
  <li>�� ��������� ������� �� �������������-��������������� ���������;</li>
 
  <li>� ��� ��� ������������� �� ������ ����� �������������-��������������� ���������.</li>
 </ul>
 
<p></p>
 
<p>���� ��� ������� ������� ���������� � ��� ��������� ���������, ���������� � ����� ������������ �� �������� +7 (495) 781-77-79 ��� �� ����������� ����� <a href="mailto:hotline@1c-leasing.ru">hotline@1c-leasing.ru</a></p>


 <?
if ($GLOBALS["USER"]->IsAuthorized()) {
$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/hide.php"),Array(),Array("MODE"=>"html"));
}
else 
{
echo ('<br />');
$APPLICATION->IncludeComponent(
	"bitrix:system.auth.authorize",
	"",
	Array(
		"NOT_SHOW_LINKS" => "Y",
	),
false
);
?>
<noindex>
	<p>
<a href="/auth/authtxt.php?register=yes" rel="nofollow"><b>�����������</b></a><br />
���� �� ������� �� �����, ��������� ����������  <a href="/auth/authtxt.php?register=yes" rel="nofollow">��������������� �����.</a>
</p>
	<p>
<a href="/auth/authtxt.php?forgot_password=yes" rel="nofollow"><b>������ ���� ������?</b></a><br />
��������  <a href="/auth/authtxt.php?forgot_password=yes" rel="nofollow">�� ����� ��� ������� ������.</a><br />
����� ��������� ����������� ������ �������� ��  <a href="/auth/authtxt.php?change_password=yes" rel="nofollow">����� ��� ����� ������.</a>
</p>
</noindex>
<?

}
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>