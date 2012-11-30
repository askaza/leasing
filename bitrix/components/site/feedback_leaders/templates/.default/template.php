<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nuu
 * Date: 09.10.12
 * Time: 19:35
 * To change this template use File | Settings | File Templates.
 */
?>
<?if(!empty($arResult['ERRORS'])):?>
<div style="color:#aa0000;">
	<ul>
	<?
		foreach($arResult['ERRORS'] as $sField=>$sError){
			if(empty($sError)){
				print('<li class="errortext">'.GetMessage('SFB_PREFIX_REQUIRED').GetMessage('SFB_'.$sField).GetMessage('SFB_POSTFIX_REQUIRED').'</li>');
			}
			else{
				print('<li class="errortext">'.$sError.'</li>');
			}
		}
	?>
	</ul>
</div>
<?endif;?>
<?if(!empty($arResult['SUCCESS'])):?>
<div class="notetext" style="padding: 10px 0px 15px 0px;">
	<?=GetMessage('SFB_SUCCESS')?>
</div>
<?endif;?>

<form action="<?=$APPLICATION->GetCurPage()?>" method="POST">
	<div style="padding: 0px 16px;" class="graybacktable">
		<table width="634" cellspacing="0" cellpadding="0" border="0">
			<tbody>
			<tr>
				<td style="padding-top: 5px;">
					<?if($arResult['RECIPIENT']):?>
						<?=GetMessage('SFB_EXPERT')?><span class="req">*</span><br>
						<input type="text" size="45" value="<?=$arResult['RECIPIENT']['NAME']?>" class="inputtext" readonly="readonly">
						<input type="hidden" name="recipient" value="<?=$arResult['RECIPIENT']['ID']?>">
					<?else:?>
						<?=GetMessage('SFB_EXPERT')?><span class="req">*</span><br>
						<select size="1" name="recipient" class="inputselect" style="width: 295px; color: rgb(128, 128, 128);">
							<?foreach($arResult['LEADERS'] as $code => $aLeader):?>
							<option value="<?=$code?>"<?=$code==$arParams['RECIPIENT']?' selected':''?>><?=$aLeader['NAME']?></option>
							<?endforeach;?>
						</select>
					<?endif;?>
				</td>
				<td valign="top" style="padding-top: 10px;" rowspan="7">
					<?=GetMessage('SFB_MESSAGE')?><span class="req">*</span><br>
					<textarea class="inputtextarea" rows="15" cols="33" name="AUTHOR[MESSAGE]"><?=$arResult['AUTHOR']['MESSAGE']?></textarea>
				</td>
			</tr>

			<tr>
				<td style="padding-top: 10px;">
					<?=GetMessage('SFB_NAME')?><span class="req">*</span><br>
					<input type="text" name="AUTHOR[NAME]" size="45" value="<?=$arResult['AUTHOR']['NAME']?>" class="inputtext"><br>
				</td>
			</tr>

			<tr>
				<td style="padding-top: 10px;">
					<?=GetMessage('SFB_POSITION')?><span class="req">*</span><br>
					<input type="text" name="AUTHOR[POSITION]" size="45" value="<?=$arResult['AUTHOR']['POSITION']?>" class="inputtext"><br>
				</td>
			</tr>

			<tr>
				<td style="padding-top: 10px;">
					<?=GetMessage('SFB_COMPANY')?><span class="req">*</span><br>
					<input type="text" size="45" value="<?=$arResult['AUTHOR']['COMPANY']?>" name="AUTHOR[COMPANY]" class="inputtext">
				</td>
			</tr>

			<tr>
				<td style="padding-top: 7px;">
					<?=GetMessage('SFB_PHONE')?><span class="req">*</span><br>
					<input type="text" size="45" value="<?=$arResult['AUTHOR']['PHONE']?>" name="AUTHOR[PHONE]" class="inputtext">
				</td>
			</tr>

			<tr>
				<td style="padding-top: 5px;">
					<?=GetMessage('SFB_EMAIL')?><span class="req">*</span><br>
					<input type="text" size="45" name="AUTHOR[EMAIL]" value="<?=$arResult['AUTHOR']['EMAIL']?>" class="inputtext">
				</td>
			</tr>
			<tr>
				<td style="padding-top: 5px;">
					<?=GetMessage("SFB_CAPTCHA_CODE")?><span class="req">*</span>
					<table cellspacing="0" cellpadding="0" border="0">
						<tbody>
						<tr>
							<td>
								<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
								<input type="text" name="CAPTCHA_CODE" size="15" maxlength="15" value="" class="inputtext">
							</td>
							<td>
								<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
							</td>
						</tr>
						</tbody>
					</table>
				</td>
			</tr>

			<tr>
				<td>* &mdash; <?=GetMessage('SFB_REQUIRED')?></td>
				<td valign="middle" style="padding-top: 10px;">
					<table cellspacing="0" cellpadding="0">
						<tbody>
						<tr>
							<td valign="middle"><input type="submit" class="submitfb" name="submit" value=" "></td>
							<td width="12"></td>
							<td valign="middle"><input type="reset" class="resetfb" value=" "></td>
						</tr>
						</tbody>
					</table>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
</form>