<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Swipe List</h1>
<p>Swipe list is a set of thumbnail images that arranged into a list. The list items are displayed inline. User can swipe the list. List items will move to left or to right according to wipe direction.</p>
<p>This UI require JavaScript and must be initialize.</p>
<p>Example:</p>
<pre>&lt;ul data-role="swipe-list"&gt;
     &lt;li&gt;
        &lt;div&gt;
        &lt;img src="images/f7427a17716e15b0573f73e425ceafac.jpg" style="width:100%"&gt;
        &lt;/div&gt;
     &lt;/li&gt;
        &lt;li&gt;
        &lt;div&gt;
        &lt;img src="images/35d28b598099fe7b663e20e8f44139d7.jpg" style="width:100%"&gt;
        &lt;/div&gt;
     &lt;/li&gt;
        &lt;li&gt;
        &lt;div&gt;
        &lt;img src="images/bf1c3a95534fcc73df95ee7ed20e40a8.jpg" style="width:100%"&gt;
        &lt;/div&gt;
     &lt;/li&gt;
        &lt;li&gt;
        &lt;div&gt;
        &lt;img src="images/3acc0a3fc6d66faf886dc1076a9ca6ec.jpg" style="width:100%"&gt;
        &lt;/div&gt;
     &lt;/li&gt;
&lt;/ul&gt;</pre>


  
  
  
  <h2>Swipe List with Static Aside</h2>
  <h3>Code</h3>
<div class="code-container">
<pre id="pre0" class="code">&lt;!DOCTYPE html&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/style.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/open-sans/index.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/icon.css" /&gt;
    &lt;!--[if IE]&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/ie.css" /&gt;
    &lt;![endif]--&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.unand.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript"&gt;
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('*');
    }
    &lt;/script&gt;
&lt;style type="text/css"&gt;
[data-role="swipe-list"] &gt; li &gt; div{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:12px;
	text-overflow:ellipsis;
	white-space:nowrap;
	text-align:center;
}
.tools{
	padding:4px 0px;
}
&lt;/style&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;aside data-transition="left" data-role="aside" data-section="aside1" data-aside-float="false" data-active="false"&gt;
	   &lt;header data-title="Aside" onclick="mui.closeAside('aside1')"&gt;
    &lt;nav data-float="right"&gt;
    &lt;a href="javascript:mui.closeAside('aside1')"&gt;&lt;span class="icon remove"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;/nav&gt;
    &lt;h3&gt;Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;a href="#aside1" data-role="toolbar-icon" data-position="float-left" data-rel="aside"&gt;&lt;span class="icon chevron-right icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;


  &lt;div data-role="content"&gt;
    &lt;ul data-role="swipe-list"&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-merah.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-hijau.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Hijau&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/tomat2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Tomat&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-merah2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-hijau2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Hijau&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/cabai-besar.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Cabai Besar&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/grapes.png" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/kacang-hijau.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Kacang Hijau&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/pisang.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Pisang&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/jagung.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Jagung&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/kedondong4.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Kedondong&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/cabai-besar-2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Cabai Besar&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/kubis.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Kubis&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/mangga.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Mangga&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/sawi-putih.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Sawi Putih&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/manggis.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Manggis&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/tomat1.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Tomat&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-merah.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
    &lt;/ul&gt;  
  &lt;/div&gt;<p></p>
&lt;/body&gt;
&lt;/html&gt;
</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>


  <h2>Swipe Page with Resizeable Page Aside</h2>
  <h3>Code</h3>
<div class="code-container">
<pre id="pre1" class="code">&lt;!DOCTYPE html&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/style.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/open-sans/index.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/icon.css" /&gt;
    &lt;!--[if IE]&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/ie.css" /&gt;
    &lt;![endif]--&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.unand.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript"&gt;
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('*');
    }
    &lt;/script&gt;
&lt;style type="text/css"&gt;
[data-role="swipe-list"] &gt; li &gt; div{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:12px;
	text-overflow:ellipsis;
	white-space:nowrap;
	text-align:center;
}
.tools{
	padding:4px 0px;
}
&lt;/style&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;aside data-transition="left" data-role="aside" data-section="aside1" data-aside-float="false" data-active="false" data-resize="true"&gt;
	   &lt;header data-title="Aside" onclick="mui.closeAside('aside1')"&gt;
    &lt;nav data-float="right"&gt;
    &lt;a href="javascript:mui.closeAside('aside1')"&gt;&lt;span class="icon remove"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;/nav&gt;
    &lt;h3&gt;Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;a href="#aside1" data-role="toolbar-icon" data-position="float-left" data-rel="aside"&gt;&lt;span class="icon chevron-right icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;  
  &lt;div data-role="content"&gt;
    &lt;ul data-role="swipe-list"&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-merah.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-hijau.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Hijau&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/tomat2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Tomat&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-merah2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-hijau2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Hijau&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/cabai-besar.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Cabai Besar&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/grapes.png" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/kacang-hijau.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Kacang Hijau&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/pisang.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Pisang&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/jagung.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Jagung&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/kedondong4.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Kedondong&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/cabai-besar-2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Cabai Besar&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/kubis.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Kubis&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/mangga.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Mangga&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/sawi-putih.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Sawi Putih&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/manggis.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Manggis&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/tomat1.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Tomat&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-merah.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
    &lt;/ul&gt;  
  &lt;/div&gt;<p></p>
&lt;/body&gt;
&lt;/html&gt;
</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>



  <h2>Swipe Page with Callback Function</h2>
  <h3>Code</h3>
<div class="code-container">
<pre id="pre1" class="code">&lt;!DOCTYPE html&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/style.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/open-sans/index.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/icon.css" /&gt;
    &lt;!--[if IE]&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/ie.css" /&gt;
    &lt;![endif]--&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.unand.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript"&gt;
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('*');
    }
    function thecallback(index)
    {
        $('.status').html('Current index is '+index);
    }
    &lt;/script&gt;
&lt;style type="text/css"&gt;
[data-role="swipe-list"] &gt; li &gt; div{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:12px;
	text-overflow:ellipsis;
	white-space:nowrap;
	text-align:center;
}
.tools{
	padding:4px 0px;
}
&lt;/style&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;aside data-transition="left" data-role="aside" data-section="aside1" data-aside-float="false" data-active="false" data-resize="true"&gt;
	   &lt;header data-title="Aside" onclick="mui.closeAside('aside1')"&gt;
    &lt;nav data-float="right"&gt;
    &lt;a href="javascript:mui.closeAside('aside1')"&gt;&lt;span class="icon remove"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;/nav&gt;
    &lt;h3&gt;Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;a href="#aside1" data-role="toolbar-icon" data-position="float-left" data-rel="aside"&gt;&lt;span class="icon chevron-right icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;  
  &lt;div data-role="content"&gt;
    &lt;ul data-role="swipe-list" data-callback="thecallback"&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-merah.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-hijau.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Hijau&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/tomat2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Tomat&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-merah2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-hijau2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Hijau&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/cabai-besar.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Cabai Besar&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/grapes.png" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/kacang-hijau.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Kacang Hijau&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/pisang.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Pisang&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/jagung.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Jagung&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/kedondong4.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Kedondong&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/cabai-besar-2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Cabai Besar&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/kubis.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Kubis&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/mangga.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Mangga&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/sawi-putih.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Sawi Putih&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/manggis.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Manggis&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/tomat1.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Tomat&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-merah.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
    &lt;div class="status" style="padding:10px 0px"&gt;
    &lt;/div&gt;  
  &lt;/div&gt;<p></p>
&lt;/body&gt;
&lt;/html&gt;
</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>



<h2>Swipe List with AJAX</h2>
<h3>Code</h3>
<div class="code-container">
  <pre id="pre2" class="code">&lt;!DOCTYPE html&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/style.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/open-sans/index.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/icon.css" /&gt;
    &lt;!--[if IE]&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/ie.css" /&gt;
    &lt;![endif]--&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.unand.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript"&gt;
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('*');
    }
    &lt;/script&gt;
&lt;style type="text/css"&gt;
[data-role="swipe-list"] &gt; li &gt; div{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:12px;
	text-overflow:ellipsis;
	white-space:nowrap;
	text-align:center;
}
.tools{
	padding:4px 0px;
}
&lt;/style&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;aside data-transition="left" data-role="aside" data-section="aside1" data-aside-float="false" data-active="false" data-resize="true"&gt;
	   &lt;header data-title="Aside" onclick="mui.closeAside('aside1')"&gt;
    &lt;nav data-float="right"&gt;
    &lt;a href="javascript:mui.closeAside('aside1')"&gt;&lt;span class="icon remove"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;/nav&gt;
    &lt;h3&gt;Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;a href="#aside1" data-role="toolbar-icon" data-position="float-left" data-rel="aside"&gt;&lt;span class="icon chevron-right icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
  &lt;div data-role="content"&gt;
    &lt;ul data-role="swipe-list" data-ajax-location="ajax-swipe-list.php" data-ajax-offset="18" data-ajax-num-load="10"&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-merah.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-hijau.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Hijau&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/tomat2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Tomat&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-merah2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-hijau2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Hijau&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/cabai-besar.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Cabai Besar&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/grapes.png" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/kacang-hijau.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Kacang Hijau&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/pisang.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Pisang&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/jagung.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Jagung&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/kedondong4.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Kedondong&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/cabai-besar-2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Cabai Besar&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/kubis.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Kubis&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/mangga.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Mangga&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/sawi-putih.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Sawi Putih&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/manggis.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Manggis&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/tomat1.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Tomat&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-merah.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
    &lt;/ul&gt;  
  &lt;/div&gt;<p></p>
&lt;/body&gt;
&lt;/html&gt;
</pre>
  <form method="post" action="../example/ui/test.php" target="_blank">
    <input name="code" value="" type="hidden">
    <input name="submit" value="Test" onclick="copyCode(this)" type="submit">
  </form>
</div>


<h2>Swipe List with AJAX and API Functions</h2>
<h3>Code</h3>
<div class="code-container">
  <pre id="pre3" class="code">&lt;!DOCTYPE html&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/style.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/open-sans/index.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/icon.css" /&gt;
    &lt;!--[if IE]&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/ie.css" /&gt;
    &lt;![endif]--&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.unand.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript"&gt;
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('*');
    }
    &lt;/script&gt;
&lt;style type="text/css"&gt;
[data-role="swipe-list"] &gt; li &gt; div{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:12px;
	text-overflow:ellipsis;
	white-space:nowrap;
	text-align:center;
}
.tools{
	padding:4px 0px;
}
&lt;/style&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;aside data-transition="left" data-role="aside" data-section="aside1" data-aside-float="false" data-active="false" data-resize="true"&gt;
	   &lt;header data-title="Aside" onclick="mui.closeAside('aside1')"&gt;
    &lt;nav data-float="right"&gt;
    &lt;a href="javascript:mui.closeAside('aside1')"&gt;&lt;span class="icon remove"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;/nav&gt;
    &lt;h3&gt;Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;a href="#aside1" data-role="toolbar-icon" data-position="float-left" data-rel="aside"&gt;&lt;span class="icon chevron-right icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
  &lt;div data-role="content"&gt;
    &lt;ul id="swipe-list-1" data-role="swipe-list" data-ajax-location="ajax-swipe-list.php" data-ajax-offset="18" data-ajax-num-load="10"&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-merah.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-hijau.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Hijau&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/tomat2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Tomat&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-merah2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-hijau2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Hijau&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/cabai-besar.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Cabai Besar&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/grapes.png" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/kacang-hijau.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Kacang Hijau&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/pisang.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Pisang&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/jagung.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Jagung&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/kedondong4.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Kedondong&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/cabai-besar-2.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Cabai Besar&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/kubis.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Kubis&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/mangga.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Mangga&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/sawi-putih.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Sawi Putih&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/manggis.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Manggis&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/tomat1.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Tomat&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div&gt;
            &lt;img src="../images/horticulture/anggur-merah.jpg" width="100%"&gt;
            &lt;div class="tools"&gt;Anggur Merah&lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
    &lt;/ul&gt;  
    &lt;div style="padding:10px 0px;"&gt;
    	&lt;a href="javascript:mui.wipeListPrev($('#swipe-list-1'));"&gt;&lt;span class="icon icon-24 arrow-circle-alt-left"&gt;&lt;/span&gt;&lt;/a&gt;
    	&lt;a href="javascript:mui.wipeListNext($('#swipe-list-1'));"&gt;&lt;span class="icon icon-24 arrow-circle-alt-right"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
  <form method="post" action="../example/ui/test.php" target="_blank">
    <input name="code" value="" type="hidden">
    <input name="submit" value="Test" onclick="copyCode(this)" type="submit">
  </form>
</div>


<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
