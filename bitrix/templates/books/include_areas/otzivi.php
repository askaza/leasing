<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CModule::IncludeModule("iblock");
$res = CIBlockElement::GetList(Array(), Array('IBLOCK_ID'=>$GLOBALS['IBLOCKS_ID']['CLIENTS_REVIEWS_RU'], 'ACTIVE_DATE'=>'Y', 'ACTIVE'=>'Y', '!PROPERTY_link'=>false), false, false, array('ID', 'PROPERTY_link.NAME', 'PREVIEW_PICTURE','DETAIL_PICTURE' , 'PROPERTY_link'));
while($aClient = $res->GetNext()){
	$aClients[] = array(
		'name'=>iconv('windows-1251', 'UTF-8', $aClient['PROPERTY_LINK_NAME']),
		'small_img'=>cfile::getpath($aClient['PREVIEW_PICTURE']),
		'big_img'=>cfile::getpath($aClient['DETAIL_PICTURE']),
		'href'=> '/clients/'.$aClient['PROPERTY_LINK_VALUE'].'/'
	);
}
?>
<div class="mainGallery">
	<table cellspacing="0" cellpadding="0" style="margin-left:-16px; margin-right:-10px;">
	<tr>
		<td><a class="nextPrevious previous moving" id="imgLeftThumb" href="javascript:void(0)">Previous</a></td>
		<td>
			<table cellspacing="0" cellpadding="0" id="thumb">
			<tr>
			<td><a href="#"><img id="pic1" src="" width="51" height="47" class="moving logos"></a></td>
			<td><a href="#"><img id="pic2" src="" width="51" height="47" class="moving logos"></a></td>
			<td><a href="#"><img id="pic3" src="" width="51" height="47" class="moving logos"></a></td>
			<td><a href="#"><img id="pic4" src="" width="87" height="47" class="moving logos"></a></td>
			<td><a href="#"><img id="pic5" src="" width="51" height="47" class="moving logos"></a></td>
			<td><a href="#"><img id="pic6" src="" width="51" height="47" class="moving logos"></a></td>
			<td><a href="#"><img id="pic7" src="" width="51" height="47" class="moving logos"></a></td>
			</tr>
			</table>
		</td>
		<td><a class="nextPrevious next moving" id="imgRightThumb" href="javascript:void(0)">Next</a></td>
	</tr>
	</table>
</div>

<script type="text/javascript">
	var aData = <?=json_encode($aClients)?>;
	var countData = aData.length; currentData = 0;
	function showImages(){
		var counter = currentData;
		for(var i=0; i<8;i++){
			if(counter == countData) counter = 0;
			var imageProp = i==4 ? 'big_img' : 'small_img';
			var oImg = $('#pic'+i);
			oImg.attr('src', aData[counter][imageProp]);
			oImg.attr('title', aData[counter]['name']);
			oImg.parent().attr('href', aData[counter]['href']);
			counter++;
		}
	}
	showImages();
	$('#imgLeftThumb').click(function(){
		currentData--;
		if(currentData < 0) currentData = countData;
		showImages();
	});
	$('#imgRightThumb').click(function(){
		currentData++;
		if(currentData == countData) currentData = 0;
		showImages();
	});
	setInterval(function(){$("#imgRightThumb").click();}, 7000);
</script>