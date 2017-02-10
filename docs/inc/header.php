<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery Unand Documentation</title>
<meta name="description" content="jQuery Unand is a JavaScript and CSS framework designed to make web-based applications on mobile devices. jQuery Unand is designed to simplify source code created by programmers. jQuery Unand aims to minimize the resources used and the size of the file to be loaded by the browser so it can run on devices with lower specs.">

<link rel="stylesheet" type="text/css" href="../style/style.css" />
<script language="javascript" src="../example/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../script/highlight.pack.js"></script>

<link rel="stylesheet" type="text/css" href="../style/default.css" />
<script type="text/javascript">
hljs.configure({tabReplace: '    '});
hljs.initHighlightingOnLoad();
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('pre').each(function(i, block) {
		hljs.highlightBlock(block);
	});					   
	$(document).scroll(function(){
		var st = parseFloat($(document).scrollTop());
		var mt = parseFloat($('.menu').offset().top);
		if(st>mt)
		{
			$('.menu').addClass('menu-fixed').removeClass('menu-rounded');
		}
		else
		{
			$('.menu').removeClass('menu-fixed').addClass('menu-rounded');
		}
		if(st<200)
		{
			$('.scroll-up').css({'display':'none'});
		}
		if(st>=200)
		{
			var op = ((st-200)/200);
			if(op>1) op = 1;
			$('.scroll-up').css({'display':'block', 'opacity':op});
		}
	});
	$(document).on('click', '.scroll-up a', function(event){
			$('html, body').animate({
				scrollTop: 0
			}, 400);
			return false;
    });
});
function copyCode(obj)
{
	var text = $(obj).parent().siblings('pre').text();
	$(obj).siblings('input[type="hidden"]').val(base64Encode(text));
}
var keyStr64="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";

function base64Encode(input){
	var output="",chr1,chr2,chr3="",enc1,enc2,enc3,enc4="",i=0;
	do{
	chr1=input.charCodeAt(i++);
	chr2=input.charCodeAt(i++);
	chr3=input.charCodeAt(i++);
	enc1=chr1>>2;
	enc2=((chr1& 3)<<4)|(chr2>>4);
	enc3=((chr2&15)<<2)|(chr3>>6);
	enc4=chr3&63;
	if(isNaN(chr2)){enc3=enc4=64;}
	else if(isNaN(chr3)){enc4=64;}
	output=output+keyStr64.charAt(enc1)+keyStr64.charAt(enc2)+keyStr64.charAt(enc3)+keyStr64.charAt(enc4);
	chr1=chr2=chr3="";
	enc1=enc2=enc3=enc4="";
	} while(i<input.length);
	return output;
}
</script>
</head>

<body>

<div class="all">
	<div class="wrapper">
    <div class="menu menu-rounded">
    	<div class="menu-inner">
          <ul>
            <li><a href="../">Home</a></li>
            <li><a href="../about.php">About</a></li>
            <li><a href="../system-requirement.php">System Requirement</a></li>
            <li><a href="../browser-support.php">Browser Support</a></li>
            <li><a href="../docs">Documentation</a></li>
            <li><a href="../demo.php" target="_blank">Online Demo</a></li>
            <li><a href="../example">Example</a></li>
            <li><a href="../download.php">Download</a></li>
          </ul>
       </div>
    </div>
    
	<div class="header">
    <h1>jQuery Unand</h1>
    </div>
    
    
    <div class="middle middle-docs">
    	<div class="mainbar">
