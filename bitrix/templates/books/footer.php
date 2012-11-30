<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
</td>
<?global $APPLICATION;$dir = $APPLICATION->GetCurDir();?>
<td id="rightcol" width="<?if($dir=="/") echo"235"; else echo"1";?>">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page", 
		"AREA_FILE_SUFFIX" => "inc", 
		"AREA_FILE_RECURSIVE" => "N", 
		"EDIT_MODE" => "html", 
		"EDIT_TEMPLATE" => "page_inc.php" 
	)
);?></td>
</tr>
<tr valign="top"><td colspan="3" id="footer">
	<?if($dir=="/"){?>
	<div style="position:relative;">
		<div class="dbanb">
			<img class="banb" src="/images/banner_bottom.jpg" alt="" title="">
		</div>
	</div>
	<?}?>
	<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/footer.php"),Array(),Array("MODE"=>"html"));?>
</td></tr>
</table>
</div><!-- content_wrapper -->

<table cellspacing="0" cellpadding="0" align="center" width="992">
<tr valign="top"><td colspan="3" id="under-footer" align="right">
	<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/copyright.php"),Array(),Array("MODE"=>"html"));?>

</td></tr>
</table>



</td>
<!-- <td><img src="<?=SITE_TEMPLATE_PATH?>/images/shade_right.jpg" alt=""></td> -->
</tr>
</table>
</body>
</html>


<?/*
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "sect", 
		"AREA_FILE_SUFFIX" => "inc", 
		"AREA_FILE_RECURSIVE" => "N", 
		"EDIT_MODE" => "html", 
		"EDIT_TEMPLATE" => "sect_inc.php" 
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page", 
		"AREA_FILE_SUFFIX" => "inc", 
		"AREA_FILE_RECURSIVE" => "N", 
		"EDIT_MODE" => "html", 
		"EDIT_TEMPLATE" => "page_inc.php" 
	)
);?>
*/?>