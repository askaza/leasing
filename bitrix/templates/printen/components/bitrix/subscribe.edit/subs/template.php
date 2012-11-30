<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<table width="590" cellspacing="0" cellpadding="0" border="0" class="graybacktable"> 
  <tbody> 
    <tr>
<td width="20">&nbsp;</td>
<td>

<div class="subscribe-edit">
<?

foreach($arResult["MESSAGE"] as $itemID=>$itemValue)
	echo ShowMessage(array("MESSAGE"=>$itemValue, "TYPE"=>"OK"));
foreach($arResult["ERROR"] as $itemID=>$itemValue)
	echo ShowMessage(array("MESSAGE"=>$itemValue, "TYPE"=>"ERROR"));

//whether to show the forms
if($arResult["ID"] == 0 && empty($_REQUEST["action"]) || CSubscription::IsAuthorized($arResult["ID"]))
{
	//show confirmation form
	if($arResult["ID"]>0 && $arResult["SUBSCRIPTION"]["CONFIRMED"] <> "Y")
	{
		include("confirmation.php");
	}
	//show current authorization section
	if($USER->IsAuthorized() && ($arResult["ID"] == 0 || $arResult["SUBSCRIPTION"]["USER_ID"] == 0))
	{
		include("authorization.php");
	}
	//show authorization section for new subscription
	if($arResult["ID"]==0 && !$USER->IsAuthorized())
	{
		if($arResult["ALLOW_ANONYMOUS"]=="N" || ($arResult["ALLOW_ANONYMOUS"]=="Y" && $arResult["SHOW_AUTH_LINKS"]=="Y"))
		{
			include("authorization_new.php");
		}
	}
	//setting section
	include("setting.php");
	//status and unsubscription/activation section
	if($arResult["ID"]>0)
	{
		include("status.php");
	}
	?>
	<p><span class="req">*</span> &mdash; <?echo GetMessage("subscr_req")?></p>
	<?
}
else
{
	 //subscription authorization form
	include("authorization_full.php");
}
?>
</div>

</td><td width="20">&nbsp;</td></tr></table>