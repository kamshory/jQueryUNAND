<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Swipe Page</h1>
<p>Swipe page is a set of pages that is displayed inline. One page is displayed and the others are hidden. When user wipe the page, two page are displayed and move to left or to right according to wipe direction. Then the second page is displayed and the others are hidden. Each pages are wrapped by &lt;section&gt;.</p>
<p>This UI require JavaScript and must be initialize.</p>
<p>Example:</p>
<pre>&lt;div data-role="swipe-page"&gt;
    &lt;section&gt;
    &lt;div style="background-color:#FFF;"&gt;
    &lt;h3&gt;Lorem Ipsum 1&lt;/h3&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 1&lt;/p&gt;
    &lt;p&gt;Wipe me left or right&lt;/p&gt;
    &lt;/div&gt;
    &lt;/section&gt;
    &lt;section&gt;
    &lt;div style="background-color:#F66;"&gt;
    &lt;h3&gt;Lorem Ipsum 2&lt;/h3&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 2&lt;/p&gt;
    &lt;p&gt;Wipe me left or right&lt;/p&gt;
    &lt;/div&gt;
    &lt;/section&gt;
    &lt;section&gt;
    &lt;div style="background-color:#9C6;"&gt;
    &lt;h3&gt;Lorem Ipsum 3&lt;/h3&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 3&lt;/p&gt;
    &lt;p&gt;Wipe me left or right&lt;/p&gt;
    &lt;/div&gt;
    &lt;/section&gt;
&lt;/div&gt;
    </pre>
    
    
      
  
  
  <h2>Swipe Page with Static Aside</h2>
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


  &lt;div data-role="swipe-page"&gt;
  &lt;section&gt;
  &lt;div style="background-color:#FFF;"&gt;
  &lt;h3&gt;Lorem Ipsum 1&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 1&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#F66;"&gt;
  &lt;h3&gt;Lorem Ipsum 2&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 2&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#9C6;"&gt;
  &lt;h3&gt;Lorem Ipsum 3&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 3&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#3CC;"&gt;
  &lt;h3&gt;Lorem Ipsum 4&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 4&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#9F9;"&gt;
  &lt;h3&gt;Lorem Ipsum 5&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 5&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#CCF"&gt;
  &lt;h3&gt;Lorem Ipsum 6&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 6&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#F9C;"&gt;
  &lt;h3&gt;Lorem Ipsum 7&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 7&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
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


  &lt;div data-role="swipe-page"&gt;
  &lt;section&gt;
  &lt;div style="background-color:#FFF;"&gt;
  &lt;h3&gt;Lorem Ipsum 1&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 1&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#F66;"&gt;
  &lt;h3&gt;Lorem Ipsum 2&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 2&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#9C6;"&gt;
  &lt;h3&gt;Lorem Ipsum 3&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 3&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#3CC;"&gt;
  &lt;h3&gt;Lorem Ipsum 4&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 4&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#9F9;"&gt;
  &lt;h3&gt;Lorem Ipsum 5&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 5&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#CCF"&gt;
  &lt;h3&gt;Lorem Ipsum 6&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 6&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#F9C;"&gt;
  &lt;h3&gt;Lorem Ipsum 7&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 7&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;/div&gt;<p></p>
&lt;/body&gt;
&lt;/html&gt;
</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  <h2>Swipe Page with API Functions</h2>
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


  &lt;div data-role="swipe-page" id="swipe-page-1"&gt;
  &lt;section&gt;
  &lt;div style="background-color:#FFF;"&gt;
  &lt;h3&gt;Lorem Ipsum 1&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 1&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#F66;"&gt;
  &lt;h3&gt;Lorem Ipsum 2&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 2&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#9C6;"&gt;
  &lt;h3&gt;Lorem Ipsum 3&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 3&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#3CC;"&gt;
  &lt;h3&gt;Lorem Ipsum 4&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 4&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#9F9;"&gt;
  &lt;h3&gt;Lorem Ipsum 5&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 5&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#CCF"&gt;
  &lt;h3&gt;Lorem Ipsum 6&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 6&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#F9C;"&gt;
  &lt;h3&gt;Lorem Ipsum 7&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 7&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;/div&gt;
  &lt;div style="padding:10px 0px 0px 10px; "&gt;      	
  &lt;a href="javascript:mui.wipePagePrev($('#swipe-page-1'));"&gt;&lt;span class="icon icon-24 arrow-circle-alt-left"&gt;&lt;/span&gt;&lt;/a&gt;      	
  &lt;a href="javascript:mui.wipePageNext($('#swipe-page-1'));"&gt;&lt;span class="icon icon-24 arrow-circle-alt-right"&gt;&lt;/span&gt;&lt;/a&gt;      
  &lt;/div&gt;
  
 &lt;/body&gt;
&lt;/html&gt;
</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>


  <h2>Swipe Page with Navigation Bar Using Selector and Callback Function</h2>
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
    function setmark(index)
    {
        index = index+1;
        $('#navbar-1 a').removeClass('item-selected');
        $('#navbar-1 a:nth-child('+index+')').addClass('item-selected');
    }
    &lt;/script&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;aside data-transition="left" data-role="aside" data-section="aside1" data-aside-float="false" data-active="false" data-resize="true"&gt;
	   &lt;header data-title="Aside"&gt;
    &lt;h3&gt;Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;a href="#aside1" data-role="toolbar-icon" data-position="float-left" data-rel="aside" data-behavior="alternate"&gt;&lt;span class="icon chevron-right icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;

    &lt;nav id="navbar-1" data-role="navbar" data-mark-selected="true" data-rel="swipe-page" data-target-selector="#swipe-page-1"&gt;
        &lt;a href="#"&gt;1&lt;/a&gt;
        &lt;a href="#"&gt;2&lt;/a&gt;
        &lt;a href="#"&gt;3&lt;/a&gt;        
        &lt;a href="#"&gt;4&lt;/a&gt;
        &lt;a href="#"&gt;5&lt;/a&gt;
        &lt;a href="#"&gt;6&lt;/a&gt;
        &lt;a href="#"&gt;7&lt;/a&gt;
    &lt;/nav&gt;

  &lt;div data-role="swipe-page" id="swipe-page-1" data-callback="setmark"&gt;
  &lt;section&gt;
  &lt;div style="background-color:#FFF;"&gt;
  &lt;h3&gt;Lorem Ipsum 1&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 1&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#F66;"&gt;
  &lt;h3&gt;Lorem Ipsum 2&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 2&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#9C6;"&gt;
  &lt;h3&gt;Lorem Ipsum 3&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 3&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#3CC;"&gt;
  &lt;h3&gt;Lorem Ipsum 4&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 4&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#9F9;"&gt;
  &lt;h3&gt;Lorem Ipsum 5&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 5&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#CCF"&gt;
  &lt;h3&gt;Lorem Ipsum 6&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 6&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#F9C;"&gt;
  &lt;h3&gt;Lorem Ipsum 7&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 7&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;/div&gt;

 &lt;/body&gt;
&lt;/html&gt;
</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>




  <h2>Swipe Page with Navigation Bar Using Section and Callback Function</h2>
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
    function setmark(index)
    {
        index = index+1;
        $('#navbar-1 a').removeClass('item-selected');
        $('#navbar-1 a:nth-child('+index+')').addClass('item-selected');
    }
    &lt;/script&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;aside data-transition="left" data-role="aside" data-section="aside1" data-aside-float="false" data-active="false" data-resize="true"&gt;
	   &lt;header data-title="Aside"&gt;
    &lt;h3&gt;Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;a href="#aside1" data-role="toolbar-icon" data-position="float-left" data-rel="aside" data-behavior="alternate"&gt;&lt;span class="icon chevron-right icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;

    &lt;nav id="navbar-1" data-role="navbar" data-mark-selected="true" data-rel="swipe-page" href="#swipe-page-1"&gt;
        &lt;a href="#"&gt;1&lt;/a&gt;
        &lt;a href="#"&gt;2&lt;/a&gt;
        &lt;a href="#"&gt;3&lt;/a&gt;        
        &lt;a href="#"&gt;4&lt;/a&gt;
        &lt;a href="#"&gt;5&lt;/a&gt;
        &lt;a href="#"&gt;6&lt;/a&gt;
        &lt;a href="#"&gt;7&lt;/a&gt;
    &lt;/nav&gt;

  &lt;div data-role="swipe-page" data-section="swipe-page-1" data-callback="setmark"&gt;
  &lt;section&gt;
  &lt;div style="background-color:#FFF;"&gt;
  &lt;h3&gt;Lorem Ipsum 1&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 1&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#F66;"&gt;
  &lt;h3&gt;Lorem Ipsum 2&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 2&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#9C6;"&gt;
  &lt;h3&gt;Lorem Ipsum 3&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 3&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#3CC;"&gt;
  &lt;h3&gt;Lorem Ipsum 4&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 4&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#9F9;"&gt;
  &lt;h3&gt;Lorem Ipsum 5&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 5&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#CCF"&gt;
  &lt;h3&gt;Lorem Ipsum 6&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 6&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;section&gt;
  &lt;div style="background-color:#F9C;"&gt;
  &lt;h3&gt;Lorem Ipsum 7&lt;/h3&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 7&lt;/p&gt;
  &lt;p&gt;Wipe me left or right&lt;/p&gt;
  &lt;/div&gt;
  &lt;/section&gt;
  &lt;/div&gt;

 &lt;/body&gt;
&lt;/html&gt;
</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

    
<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
