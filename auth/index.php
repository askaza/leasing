<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0) 
	LocalRedirect($backurl);

$APPLICATION->SetTitle("ДОБРО ПОЖАЛОВАТЬ");
?> 
<p>Здесь Вы можете скачать обновления для решений &laquo;Хомнет Лизинг&raquo;. 
  <br />
 Загрузка обновлений доступна только после авторизации, поэтому Вам необходимо будет ввести логин и пароль, предоставленные службой поддержки. </p>
 
<p>Получение обновлений доступно, если: </p>
 
<ul class="bluebullit"> 
  <li>Вы заключили договор на информационно-технологическую поддержку;</li>
 
  <li>у Вас нет задолженности по оплате услуг информационно-технологической поддержки.</li>
 </ul>
 
<p></p>
 
<p>Если при попытке скачать обновления у Вас возникнут сложности, обратитесь к нашим специалистам по телефону +7 (495) 781-77-79 или по электронной почте <a href="mailto:hotline@1c-leasing.ru">hotline@1c-leasing.ru</a></p>


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
<a href="/auth/authtxt.php?register=yes" rel="nofollow"><b>Регистрация</b></a><br />
Если вы впервые на сайте, заполните пожалуйста  <a href="/auth/authtxt.php?register=yes" rel="nofollow">регистрационную форму.</a>
</p>
	<p>
<a href="/auth/authtxt.php?forgot_password=yes" rel="nofollow"><b>Забыли свой пароль?</b></a><br />
Следуйте  <a href="/auth/authtxt.php?forgot_password=yes" rel="nofollow">на форму для запроса пароля.</a><br />
После получения контрольной строки следуйте на  <a href="/auth/authtxt.php?change_password=yes" rel="nofollow">форму для смены пароля.</a>
</p>
</noindex>
<?

}
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>