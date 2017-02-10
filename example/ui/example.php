<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../assets/font/open-sans/index.css" />
    <link rel="stylesheet" type="text/css" href="../assets/font/icon.css" />
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="assets/css/ie.css" />
    <![endif]-->
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.unand.js"></script>
	<script type="text/javascript">
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('*');
		var _url = document.location+'';
		if(_url.indexOf('file://') > -1)
		{
			$('#content').before('<div data-role="warning" style="max-width:80%; margin:10px auto;"><span class="icon warning"></span> You must  using the real web server to run this example.</div>');

		}
    }
	function copyCode(obj, sel)
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
	<style type="text/css">
    .box1{
    white-space:nowrap;
    width:250px;
    margin-bottom:4px;
    display:inline-block;
    }
    .box1 .icon{
    font-size:24px;
    }
    </style>   
    <title>jQuery Unand</title>
</head>
<body>
<aside data-transition="left" data-role="aside" data-section="aside1" data-aside-float="false" data-active="true" data-resize="true" style="width:180px;">
	<header data-title="Main Menu"><h3>Main Menu</h3></header>
    <article>
    <div data-role="accordion" data-collapsed="yes" data-navigation="true">
      <div data-role="accordion-section">
        <h3><a href="#" >User Interface</a></h3>
        <div data-role="accordion-content" >

    	<ul>
            <li><a href="index.html"><span class="icon icon-24 home"></span> Home</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/page.html" data-location-async="html/page.html"><span class="icon icon-24 file"></span> Standard Page</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/sidebar.html" data-location-async="html/sidebar.html"><span class="icon icon-24 column"></span> Sidebar</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/menu.html" data-location-async="html/menu.html"><span class="icon icon-24 menu"></span> Menu</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/dropdown-menu.html" data-location-async="html/dropdown-menu.html"><span class="icon icon-24 popup-menu"></span> Dropdown Menu</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/popup-menu.html" data-location-async="html/popup-menu.html"><span class="icon icon-24 popup-menu"></span> Popup Menu</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/popup.html" data-location-async="html/popup.html"><span class="icon icon-24 popup"></span> Popup Dialog</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/aside.html" data-location-async="html/aside.html"><span class="icon icon-24 aside"></span> Aside</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/swipe-page.html" data-location-async="html/swipe-page.html"><span class="icon icon-24 aside"></span> Swipe Page</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/swipe-list.html" data-location-async="html/swipe-list.html"><span class="icon icon-24 aside"></span> Swipe List</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/accordion.html" data-location-async="html/accordion.html"><span class="icon icon-24 accordion"></span> Accordion</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/autocomplete.html" data-location-async="html/autocomplete.html"><span class="icon icon-24 text"></span> Autocomplete</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/dynamic-select.html" data-location-async="html/dynamic-select.html"><span class="icon icon-24 form"></span> Dynamic Select</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/tab.html" data-location-async="html/tab.html"><span class="icon icon-24 tab"></span> Tab</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/form.html" data-location-async="html/form.html"><span class="icon icon-24 form"></span> Form</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/image.html" data-location-async="html/image.html"><span class="icon icon-24 picture"></span> Image</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/table.html" data-location-async="html/table.html"><span class="icon icon-24 table"></span> Table</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/listview.html" data-location-async="html/listview.html"><span class="icon icon-24 listview"></span> List View</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/slideshow.html" data-location-async="html/slideshow.html"><span class="icon icon-24 image"></span> Slideshow</a></li>
            <li><a data-rel="ajax-get" data-target-container="#content" href="example.php?file=html/icon.html" data-location-async="html/icon.html"><span class="icon icon-24 picture"></span> Icon</a></li>
        </ul>
        
        </div>
       </div>
      <div data-role="accordion-section">
        <h3><a href="#">Role</a></h3>
        <div data-role="accordion-content">
            <ul>
            	<li><a href="../role.html">Element Role</a></li>
            </ul>
          </div>
      </div>

      <div data-role="accordion-section">
        <h3><a href="#">Relationship</a></h3>
        <div data-role="accordion-content">
            <ul>
            	<li><a href="../rel.html">Element Relationship</a></li>
            </ul>
        </div>
      </div>
      
      <div data-role="accordion-section">
        <h3><a href="#">Attributes</a></h3>
        <div data-role="accordion-content">
            <ul>
            	<li><a href="../attribute.html">Element Attributes</a></li>
            </ul>
        </div>
      </div>
      
      <div data-role="accordion-section">
        <h3><a href="#">API</a></h3>
        <div data-role="accordion-content">
            <ul>
            	<li><a href="../api.html">API Functions</a></li>
            </ul>
        </div>
      </div>
      
      
     </div>   
	</article>
</aside>

    <div data-role="header" data-theme="a" data-gradien="true"> 
    <a href="#aside1" data-role="toolbar-icon" data-position="float-left" data-rel="aside" data-behavior="alternate"><span class="icon icon-24 aside"></span></a>
    <a href="#right-menu" data-role="toolbar-icon" data-position="float-right" data-rel="menu"><span class="icon icon-24 menu"></span></a>
      <h1>jQuery Unand</h1>
    </div>
    
<ul data-role="menu" data-section="right-menu">
	<li><a href="../"><span class="icon icon-24 home"></span> Home</a></li>
	<li><a href="index.html"><span class="icon icon-24 refresh"></span> Reload</a></li>
	<li><a href="http://www.kamshory.com/projects/jquery-unand/jquery-unand.zip"><span class="icon icon-24 download"></span> Download</a></li>
</ul>    
    
<div id="content" data-role="content" style="max-width:1000px; margin:0 auto;">
<?php
$file = @$_GET['file'];
$file = substr(str_replace(array("../", "./"), array("",""), $file), 5);
echo file_get_contents(dirname(__FILE__)."/html/".$file);

?>    
</div>

<div data-role="footer" data-align="center">Copyright jQuery Unand 2014. All rights reserved.</div>
    
</body>
</html>