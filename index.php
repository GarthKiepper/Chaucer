<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--
<link rel="icon" 
	type="image/png" 
	href="images/showcase.png">
-->
<title>Chaucer</title>
<link href="chaucer_styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
//Toggle Witnesses//
$(document).ready(function(){
	$("#toggle-hg").click(function(){
		$(".toggle").css("color", "#999");
		$("#toggle-hg").css("color", "#06F");
		$("#el").hide();
		$("#dd").hide();
		$("#gg").hide();
		$("#hg").show();
	});
});
$(document).ready(function(){
	$("#toggle-el").click(function(){
		$(".toggle").css("color", "#999");
		$("#toggle-el").css("color", "#06F");
		$("#hg").hide();
		$("#dd").hide();
		$("#gg").hide();
		$("#el").show();
	});
});
$(document).ready(function(){
	$("#toggle-dd").click(function(){
		$(".toggle").css("color", "#999");
		$("#toggle-dd").css("color", "#06F");
		$("#hg").hide();
		$("#el").hide();
		$("#gg").hide();
		$("#dd").show();
	});
});
$(document).ready(function(){
	$("#toggle-gg").click(function(){
		$(".toggle").css("color", "#999");
		$("#toggle-gg").css("color", "#06F");
		$("#hg").hide();
		$("#ek").hide();
		$("#dd").hide();
		$("#gg").show();
	});
});
$(document).ready(function(){
	$(".note").click(function(){
		$("#n1").toggle();
		$("#n2").toggle();
	});
});
</script>
</head>
<body>
<div id="main">
    <br/>
    <br/>
    <div class="heading_1">Chaucer's Canterbury Tales</div>
    <br/>
	<div id="toolbar">
    	<hr/>
    	<span class="toggle" id="toggle-hg" style="color: rgb(0, 102, 255);">Hg ProWBT 603‒626</span>
        <span class="toggle" id="toggle-el">El ProWBT 603&#x2012;626</span>
        <span class="toggle" id="toggle-dd">Dd ProWBT 603&#x2012;626</span>
        <span class="toggle" id="toggle-gg">Gg ProWBT 603&#x2012;626</span>
        <hr/>
    </div>
    <br/>
  	<div id="content" class="medieval">
		<?php include("603-626/hg.inc.php"); ?>
		<?php include("603-626/el.inc.php"); ?>
		<?php include("603-626/dd.inc.php"); ?>
		<?php include("603-626/gg.inc.php"); ?>
	</div>
</div>
</body>
</html>