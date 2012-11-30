<?
define('LANG_UPPER', strtoupper($lang));
// ID IBLOCKS **********************************************************************************************************
if($_SERVER['HTTP_HOST'] == 'test.1c-leasing.ru'){
	$GLOBALS['IBLOCKS_ID'] = array(
		'CLIENTS_REVIEWS_RU' => 2,
		'CLIENTS_REVIEWS_EN' => 11,
		'PUBLICATIONS_RU' => 3,
		'PUBLICATIONS_EN' => 14,

	    'LEADERS_RU' => 15,
		'LEADERS_EN' => 18,
		'HISTORY_RU' => 17,
		'HISTORY_EN' => 19,
		'SETTINGS' => 20,
	);
}
else{
	$GLOBALS['IBLOCKS_ID'] = array(
		'CLIENTS_REVIEWS_RU' => 2,
		'CLIENTS_REVIEWS_EN' => 11,
		'PUBLICATIONS_RU' => 3,
		'PUBLICATIONS_EN' => 14,

	    'LEADERS_RU' => 16,
		'LEADERS_EN' => 17,
		'HISTORY_RU' => 15,
		'HISTORY_EN' => 18,
		'SETTINGS' => 19,
	);
};
// Возвращает параметры для сайта **************************************************************************************
function getUserSetting(){
	if(empty($GLOBALS['aUserSettingExt'])){
		$res = CIBlockElement::GetList(
			array('NAME'=>'asc'),
			array(
				'IBLOCK_ID' => $GLOBALS['IBLOCKS_ID']['SETTINGS']
			),
			false,
			false,
			array('ID', 'NAME', 'PROPERTY_VALUE')
		);
		while($aItem = $res->Fetch()){
			$GLOBALS['aUserSettingExt'][$aItem['NAME']] = $aItem['PROPERTY_VALUE_VALUE'];
		}
	}
	return $GLOBALS['aUserSettingExt'];
}
// Проверка формата EMAIL **********************************************************************************************
function slIsValidEmail($email, $isEmpty = true){
	$email = trim($email);
	if(empty($email) && $isEmpty) return true;
	$result = (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
	if(!$result) return false;
	if (preg_match('/[а-яё!#$%^&*~`]/i', $email) ) return false;
	return $result;
}
// Переход на другой язык **********************************************************************************************
function getLanguageHref(){
	global $languageHref, $_SERVER;
	if(empty($languageHref)){
		if(empty($_SERVER['REQUEST_URI'])){
			$languageHref = '/en' . $languageHref;
		}
		else{
			if(!empty($_SERVER['REQUEST_URI'])){
				$languageHref = explode('?', $_SERVER['REQUEST_URI']);
				$languageHref = $languageHref[0];
			}
			if(LANG == 'en'){
				$languageHref = explode('/en/', $languageHref);
				$languageHref = '/' . $languageHref[1];
			}
			else{
				$languageHref = '/en' . $languageHref;
			}
		}
	}
	return $languageHref;
}
AddEventHandler('main', 'OnBeforeEventSend', Array("MyForm", "my_OnBeforeEventSend"));


class MyForm
{
	function my_OnBeforeEventSend($arFields)
	{
		if ($arFields['RS_FORM_ID']==1)
		{
			if($arFields["SIMPLE_QUESTION_896_RAW"]=="Дмитрий Курдомонов")
				$arFields["DEFAULT_EMAIL_FROM"]="kurdomonov@1c-leasing.ru";
			elseif($arFields["SIMPLE_QUESTION_896_RAW"]=="Алексей Гулевский")
				$arFields["DEFAULT_EMAIL_FROM"]="gulevsky@1c-leasing.ru";
			elseif($arFields["SIMPLE_QUESTION_896_RAW"]=="Семён Штейнман")
				$arFields["DEFAULT_EMAIL_FROM"]="shteinman@1c-leasing.ru";
			elseif($arFields["SIMPLE_QUESTION_896_RAW"]=="Александр Петин")
				$arFields["DEFAULT_EMAIL_FROM"]="petin@1c-leasing.ru";
		}
		if ($arFields['RS_FORM_ID']==2)
		{
			if($arFields["SIMPLE_QUESTION_896_RAW"]=="Dmitry Kurdomonov")
				$arFields["DEFAULT_EMAIL_FROM"]="kurdomonov@1c-leasing.ru";
			elseif($arFields["SIMPLE_QUESTION_896_RAW"]=="Aleksey Gulevsky")
				$arFields["DEFAULT_EMAIL_FROM"]="gulevsky@1c-leasing.ru";
			elseif($arFields["SIMPLE_QUESTION_896_RAW"]=="Semyon Shteinman")
				$arFields["DEFAULT_EMAIL_FROM"]="shteinman@1c-leasing.ru";
			elseif($arFields["SIMPLE_QUESTION_896_RAW"]=="Alexandr Petin")
				$arFields["DEFAULT_EMAIL_FROM"]="petin@1c-leasing.ru";
		}
		//echo"<pre>"; print_r($arFields);echo"</pre>";
		//die();
		return $arFields;
	}
}?>