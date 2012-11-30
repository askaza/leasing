<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nuu
 * Date: 09.10.12
 * Time: 19:31
 * To change this template use File | Settings | File Templates.
 */
$arResult['LEADERS_IBLOCK_ID'] = intval($arParams['LEADERS_IBLOCK_ID']);
$arResult['LEADER_ID'] = trim(strip_tags($_REQUEST['recipient']));
$arResult["USE_CAPTCHA"] = $arParams["USE_CAPTCHA"] != "N";
$arResult['ERRORSS'] = array();

$arResult['LEADERS'] = array();
if($arResult['LEADERS_IBLOCK_ID']>0){
	$res = CIBlockElement::GetList(
		array(),
		array(
			'IBLOCK_ID' => $arResult['LEADERS_IBLOCK_ID'],
			'ACTIVE' => 'Y'
		),
		false,
		false,
		array('ID', 'NAME', 'CODE', 'PROPERTY_EMAIL')
	);
	while($aLeader = $res->GetNext()){
		$arResult['LEADERS'][$aLeader['ID']] = array(
			'ID' => $aLeader['ID'],
			'NAME' => $aLeader['NAME'],
			'CODE' => $aLeader['CODE'],
			'EMAIL' => $aLeader['PROPERTY_EMAIL_VALUE'],
		);
	};
}
$arResult['RECIPIENT'] = $arResult['LEADERS'][$arResult['LEADER_ID']];
if($_SERVER["REQUEST_METHOD"] == "POST" && strlen($_POST["submit"]) > 0){
	if(empty($arResult['RECIPIENT'])){
		$arResult['ERRORS']['EXPERT'] = '';
	}
	$aRequaredFields = array('NAME', 'POSITION', 'COMPANY', 'PHONE', 'EMAIL', 'MESSAGE');
	$arResult['AUTHOR'] = array();
	foreach($aRequaredFields as $field){
		$arResult['AUTHOR'][$field] = trim(strip_tags($_POST['AUTHOR'][$field]));
		if(empty($arResult['AUTHOR'][$field])){
			$arResult['ERRORS'][$field] = '';
		}
		elseif($field == 'EMAIL'){
			if(!slIsValidEmail($arResult['AUTHOR'][$field], false)){
				$arResult['ERRORS'][$field] = GetMessage('SFB_ERROR EMAIL');
			}
		}
	}

	include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/classes/general/captcha.php');
	$captcha_code = $_POST['captcha_sid'];
	$captcha_word = $_POST['CAPTCHA_CODE'];
	$cpt = new CCaptcha();
	$captchaPass = COption::GetOptionString('main', 'captcha_password', '');
	if ((strlen($captcha_word)>0) && (strlen($captcha_code)>0)){
		if (!$cpt->CheckCodeCrypt($captcha_word, $captcha_code, $captchaPass)){
			$arResult['ERRORS'][] = GetMessage('SFB_CAPTCHA_WRONG');
		}
	}
	else{
		$arResult['ERRORS']['CAPTCHA_CODE'] = '';
	}
	if(empty($arResult['ERRORS'])){
		$arResult['AUTHOR']['EMAIL_TO'] = $arResult['RECIPIENT']['EMAIL'];
		$aUserSetting = getUserSetting();
		$arResult['AUTHOR']['EMAIL_COPY'] = $aUserSetting['EMAIL_COPIES_FEED_BACK'];
		$arResult['AUTHOR']['EMAIL_HIDDEN_COPY'] = $aUserSetting['EMAIL_HIDDEN_COPIES_FEED_BACK'];
		$arResult['AUTHOR']['DATE_CREATE'] = date('d.m.Y H:i:s');
		$arResult['AUTHOR']['EXPERT_NAME'] = $arResult['RECIPIENT']['NAME'];
		try{
			CEvent::SendImmediate('LEADERS_FEEDBACK', SITE_ID, $arResult['AUTHOR']);
			$arResult['AUTHOR']['MESSAGE'] = '';
			$arResult['SUCCESS'] = true;
		}
		catch(Exception $e){
			$arResult['ERRORS'][] = GetMessage('SFB_ERROR SENDING');
		}
	}
}
else{
	if($USER->IsAuthorized()){
		$arResult['AUTHOR'] = array(
			'NAME' => htmlspecialcharsEx($USER->GetFullName()),
			'EMAIL' => htmlspecialcharsEx($USER->GetEmail()),
			'PHONE' => htmlspecialcharsEx($USER->PERSONAL_PHONE),
			'COMPANY' => htmlspecialcharsEx($USER->WORK_COMPANY),
			'POSITION' => htmlspecialcharsEx($USER->WORK_POSITION),
		);
	}
}
$arResult["capCode"] =  htmlspecialchars($APPLICATION->CaptchaGetCode());
$this->IncludeComponentTemplate();
