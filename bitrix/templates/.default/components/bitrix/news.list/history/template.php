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
if($countItems > 0):
?>
	<ul class="tabs" id="historyHeaders">
		<li>
			<a class="current" id="historyAll" style="COLOR: rgb(128,128,128);cursor: pointer;"><?=GetMessage('ALL')?></a>
		</li>
		<?foreach($arResult['ITEMS'] as $aItem):?>
			<li>
				<a id="history<?=$aItem['NAME']?>" style="COLOR: rgb(128,128,128);cursor: pointer;"><?=$aItem['NAME']?></a>
			</li>
		<?endforeach;?>
	</ul>

	<div id="historyContent" class="panes">
		<?foreach($arResult['ITEMS'] as $aItem):?>
		<div class="history<?=$aItem['NAME']?>" style="display: none;">
			<table class="bluelist">
				<tbody>
				<tr>
					<td>
						<?=(empty($aItem['DETAIL_TEXT']) ? $aItem['PREVIEW_TEXT'] : $aItem['DETAIL_TEXT'])?>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
		<?endforeach;?>
		<?$arResult['ITEMS'] = array_reverse($arResult['ITEMS'])?>
		<div class="historyAll">
			<table class="bluelist">
				<tbody>
				<tr>
					<td>
					<?foreach($arResult['ITEMS'] as $aItem):?>
						<p><strong><?=$aItem['NAME']?></strong></p>
						<?=$aItem['PREVIEW_TEXT']?>
					<?endforeach;?>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
	<script language="JavaScript" type="text/javascript">
		(function() {
			$('#historyHeaders a').click(function(){
				var id = $(this).attr('id');
				$('#historyHeaders a.current').removeClass('current');
				$(this).addClass('current');
				$('#historyContent div').hide();
				$('#historyContent div.' + id).show();
			});
		})();
	</script>
<?
else:
	print(GetMessage(''));
endif;