<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nuu
 * Date: 24.08.12
 * Time: 10:13
 * To change this template use File | Settings | File Templates.
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$countItems = count($arResult['ITEMS']);
$lang = LANG == 'en' ? '/en' : '';
if($countItems > 0):
?>
<table width="100%" style="BORDER-COLLAPSE: collapse" cellspacing="0" cellpadding="0">
	<tbody>
	<?foreach($arResult['ITEMS'] as $aItem):?>
	<tr>
		<td style="border-image: initial">
		<p><b><?=$aItem['NAME']?></b></p>
		<p><?=$aItem["PROPERTIES"]['POSITION']['VALUE']?></p>
		<p><?=GetMessage('YEAR_OF_BIRTH') . $aItem["PROPERTIES"]['YEAR_OF_BIRTH']['VALUE']?>.
			<br />
			<?=$aItem["PROPERTIES"]['EDUCATION']['VALUE']?>
			<br />
			<?=GetMessage('STARTED_IN_COMPANY_PREFIX') . $aItem["PROPERTIES"]['STARTED_IN_COMPANY']['VALUE'] . GetMessage('STARTED_IN_COMPANY_POSTFIX')?>
		</p>
		<div class="grayback1" style="padding:10px;">
			<div style="PADDING-BOTTOM: 5px">
				<a class="feedb" href="<?=$lang?>/contacts/feedback/?recipient=<?=$aItem['CODE']?>"><?=$aItem["PROPERTIES"]['FEEDBACK']['VALUE']?></a>
			</div>
			<?if(!empty($arResult['PUBLICATIONS'][$aItem['ID']])):?>
			<div style="PADDING-BOTTOM: 5px">
				<a class="pub" href="<?=$lang?>/press/public/?author=<?=$aItem['ID']?>"><?=GetMessage('PUBLICATIONS')?></a>
			</div>
			<?endif;?>
		</div>
		</td>
		<td width="15" style="border-image: initial">&nbsp;</td>
		<td width="170" align="center" class="grayback" valign="middle" style="border-image: initial">
			<img src="<?=$aItem['PREVIEW_PICTURE']['SRC']?>" complete="complete"  />
		</td>
	</tr>
	<?if(--$countItems>0):?>
	<tr><td height="40" style="border-image: initial" colspan="2">&nbsp;</td></tr>
	<?endif;?>
	<?endforeach;?>
	</tbody>
</table>
<?
endif;