<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nuu
 * Date: 24.08.12
 * Time: 18:16
 * To change this template use File | Settings | File Templates.
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arParams['AUTHOR'] = intval($arParams['AUTHOR']);

if($arResult['COUNT_ITEMS'] > 0):?>
	<ul class="tabs3">
		<li><a id="pubAll" class="current" style="COLOR: #808080;cursor: pointer;"><?=GetMessage('PUBLICATIONS_ALL_YEAR_TAB')?></a></li>
		<?foreach($arResult['PUBLICATION_YEARS'] as $year):?>
		<li><a id="pub<?=$year?>" style="COLOR: #808080;cursor: pointer;"><?=($arParams['LAST_YEAR'] == $year ? '<&nbsp;' : '') . $year?></a> </li>
		<?endforeach;?>
	</ul>
	<div class="panes3">
		<table width="486" cellpadding="0" cellspacing="0" border="0" align="center">
		<?foreach($arResult['ITEMS'] as $aPublication):?>
			<tr class="pub<?=$aPublication['YEAR_ACTIVE_FROM']?>">
				<td width="158" valign="top">
					<?=$aPublication['DISPLAY_ACTIVE_FROM']?>
					<br>
					<?if(!empty($aPublication['PROPERTIES']['JOUR']['VALUE'])):?>
					<?=$aPublication['PROPERTIES']['JOUR']['VALUE']?><br />
					<?endif;?>
				</td>
				<td style="padding-bottom:15px; padding-left:10px;" valign="top">
					<?if($arParams['DISPLAY_NAME']!='N' && $aPublication['NAME']):?>
					<?if(!$arParams['HIDE_LINK_WHEN_NO_DETAIL'] || ($aPublication['DETAIL_TEXT'] && $arResult['USER_HAVE_ACCESS'])):?>
						<a href="<?=$aPublication['DETAIL_PAGE_URL']?>"><?=$aPublication['NAME']?></a><br />
						<?else:?>
						<b><?=$aPublication['NAME']?></b><br />
						<?endif;?>
					<?endif;?>

					<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $aPublication["PREVIEW_TEXT"]):?>
					<?echo $aPublication["PREVIEW_TEXT"];?><br>
					<?endif;?>

					<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($aPublication["PREVIEW_PICTURE"])):?>
					<div style="clear:both"></div>
					<?endif?>
				</td>
			</tr>
			<?endforeach;?>
		</table>
	</div>
	<script language="JavaScript" type="text/javascript">
		(function() {
			$('ul.tabs3 a').click(function(){
				var id = $(this).attr('id');
				$('ul.tabs3 a.current').removeClass('current');
				$(this).addClass('current');
				if(id == 'pubAll'){
					$('div.panes3 table tr').show();
				}
				else{
					$('div.panes3 table tr').hide();
					$('tr.' + id).show();
				}
			});
			$('div.panes3 a').click(function(){
				var href = $(this).attr('href');
				var callbackparams = '';
				<?if($arParams['AUTHOR'] > 0 ):?>
					callbackparams += 'author=<?=$arParams['AUTHOR']?>';
				<?endif;?>
				$('ul.tabs3 a.current').each(function(){
					if($(this).attr('id') != 'pubAll'){
						if(callbackparams.length > 0) callbackparams += '&';
						callbackparams += 'tab=' + $(this).attr('id');
					}
				});
				if(callbackparams.length > 0){
					href += '?' + callbackparams;
				}
				window.location.href = href;
				return false;
			});
			<?if(!empty($arParams['TAB'])){
				print("$('#" . $arParams['TAB'] . "').click();");
			};
			?>
		})();
	</script>
<?
else:
	print(GetMessage(''));
endif;
?>