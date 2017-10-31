<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$rsSites = CSite::GetByID("s1");
$arSite = $rsSites->Fetch();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><?=$arSite["NAME"]?></title>
<style type="text/css">
	* { font-family: verdana; font-size: 10pt; COLOR: gray; }
	html, body { background: #3D4752; padding: 0px; margin: 0px; }
	.cont {
		background: #f7f9ff;
		background: -moz-linear-gradient(top,  #f7f9ff 0%, #ced7db 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f7f9ff), color-stop(100%,#ced7db));
		background: -webkit-linear-gradient(top,  #f7f9ff 0%,#ced7db 100%);
		background: -o-linear-gradient(top,  #f7f9ff 0%,#ced7db 100%);
		background: -ms-linear-gradient(top,  #f7f9ff 0%,#ced7db 100%);
		background: linear-gradient(to bottom,  #f7f9ff 0%,#ced7db 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7f9ff', endColorstr='#ced7db',GradientType=0 );
		border: 1px solid #C9D6DD;
		border-radius: 10px 10px 10px 10px;
		box-shadow: 5px 4px 10px -4px #1C1B1B;
		display: block;
		margin: 150px auto 0;
		width: 440px;
	}
	.header {
		border-bottom: 1px solid #C9D6DD;
		font-weight: bold;
		padding: 10px 0;
		text-align: center;
	}
	.content {
		border-top: 1px solid #FFFFFF;
		padding: 10px 20px 20px;
		text-align: justify;
	}
</style></head>
<body>
	<div class="cont">
		<div class="header">	
			<?=$arSite["NAME"]?>
		</div>
		<div class="content">
			Уважаемые посетители сайта,<br />
			в настоящее время сайт находится в стадии разработки.<br /><br />
			Приносим свои извинения.
		</div>
	</div>
</body>
</html>