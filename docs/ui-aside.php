<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Aside</h1>
<p>Asde is the element displayed on the left side or right side of the content. <span id="result_box" lang="en" xml:lang="en">Aside usually used to put the navigation links.</span> <span id="result_box2" lang="en" xml:lang="en">Aside usually used to put the navigation links. Aside can also be used to put a banner and other content.</span> <span id="result_box3" lang="en" xml:lang="en">On the initial conditions, aside can be displayed or hidden. In mobile applications, aside should have the option to be hidden.</span></p>
<p>This UI require JavaScript and must be initialize.</p>
<p>Example:</p>
<pre>
&lt;aside data-transition="left" data-role="aside" data-section="aside1" 
data-aside-float="false" data-active="false"&gt;
	 &lt;header data-title="Aside"&gt;
        &lt;h3&gt;Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
        Aside content here
    &lt;/div&gt;
    &lt;/article&gt;
&lt;/aside&gt;</pre>

  
  
  
  
  <h2>Single Static Aside</h2>
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

    &lt;div data-role="content"&gt;&lt;h1&gt;Lorem Ipsum&lt;/h1&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2>Single Static Aside with Resize Body</h2>
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

    &lt;div data-role="content"&gt;&lt;h1&gt;Lorem Ipsum&lt;/h1&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;
  </pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  <h2>Single Float Aside</h2>
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

    &lt;aside data-transition="left" data-role="aside" data-section="aside1" data-aside-float="true" data-active="false"&gt;
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
    Put content here
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;
  </pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
  
  <h2> Single Default Aside</h2>
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
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;aside data-transition="left" data-role="aside" data-section="aside1" data-aside-float="false" data-active="true"&gt;
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
    Put content here
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;
  </pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  

  <h2> Double Static Aside</h2>
  <h3>Code</h3>
<div class="code-container">
<pre id="pre4" class="code">&lt;!DOCTYPE html&gt;
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
    &lt;h3&gt;Left Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Left aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;aside data-transition="right" data-role="aside" data-section="aside2" data-aside-float="false" data-active="false"&gt;
	   &lt;header data-title="Aside" onclick="mui.closeAside('aside2')"&gt;
    &lt;nav data-float="right"&gt;
    &lt;a href="javascript:mui.closeAside('aside2')"&gt;&lt;span class="icon remove"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;/nav&gt;
    &lt;h3&gt;Right Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Right aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;a href="#aside1" data-role="toolbar-icon" data-position="float-left" data-rel="aside"&gt;&lt;span class="icon chevron-right icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;a href="#aside2" data-role="toolbar-icon" data-position="float-right" data-rel="aside"&gt;&lt;span class="icon chevron-left icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;

    &lt;div data-role="content"&gt;
    Put content here
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
  <h2> Double Static Aside with Resize Body</h2>
  <h3>Code</h3>
  <div class="code-container">
<pre id="pre5" class="code">&lt;!DOCTYPE html&gt;
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
    &lt;h3&gt;Left Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Left aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;aside data-transition="right" data-role="aside" data-section="aside2" data-aside-float="false" data-active="false" data-resize="true"&gt;
	   &lt;header data-title="Aside" onclick="mui.closeAside('aside2')"&gt;
    &lt;nav data-float="right"&gt;
    &lt;a href="javascript:mui.closeAside('aside2')"&gt;&lt;span class="icon remove"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;/nav&gt;
    &lt;h3&gt;Right Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Right aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;a href="#aside1" data-role="toolbar-icon" data-position="float-left" data-rel="aside"&gt;&lt;span class="icon chevron-right icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;a href="#aside2" data-role="toolbar-icon" data-position="float-right" data-rel="aside"&gt;&lt;span class="icon chevron-left icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;

    &lt;div data-role="content"&gt;
    &lt;h1&gt;Lorem Ipsum Dolor Sit Amet&lt;/h1&gt;<br>    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;
  </pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  <h2>Double Static Aside with Alternate Trigger</h2>
  <h3>Code</h3>
  <div class="code-container">
<pre id="pre6" class="code">&lt;!DOCTYPE html&gt;
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
	   &lt;header data-title="Aside"&gt;
    &lt;h3&gt;Left Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Left aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;aside data-transition="right" data-role="aside" data-section="aside2" data-aside-float="false" data-active="false" data-resize="true"&gt;
	   &lt;header data-title="Aside"&gt;
    &lt;h3&gt;Right Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Right aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;a href="#aside1" data-role="toolbar-icon" data-position="float-left" data-rel="aside" data-behavior="alternate"&gt;&lt;span class="icon aside-left icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;a href="#aside2" data-role="toolbar-icon" data-position="float-right" data-rel="aside" data-behavior="alternate"&gt;&lt;span class="icon aside-right icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;

    &lt;div data-role="content"&gt;
    &lt;h1&gt;Lorem Ipsum Dolor Sit Amet&lt;/h1&gt;<br>    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;
  </pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  <h2>Double Static Aside with API Functions </h2>
  <h3>Code</h3>
<div class="code-container">
<pre id="pre7" class="code">&lt;!DOCTYPE html&gt;
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
        var tgl = false, tgl1 = false, tgl2 = false;
        $(document).on('click', '.toggle-aside', function(event){
            
             mui.toggleAside();
             return false;
        });
        $(document).on('click', '.toggle-aside1', function(event){
             mui.toggleAside('aside1');
             return false;
        });
        $(document).on('click', '.toggle-aside2', function(event){
             mui.toggleAside('aside2');
             return false;
        });
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
    &lt;h3&gt;Left Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Left aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;aside data-transition="right" data-role="aside" data-section="aside2" data-aside-float="false" data-active="false"&gt;
    &lt;header data-title="Aside" onclick="mui.closeAside('aside2')"&gt;
    &lt;nav data-float="right"&gt;
    &lt;a href="javascript:mui.closeAside('aside2')"&gt;&lt;span class="icon remove"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;/nav&gt;
    &lt;h3&gt;Right Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Right aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;a href="javascript:mui.toggleAside('aside1')" data-role="toolbar-icon" data-position="float-left"&gt;&lt;span class="icon aside-left icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;a href="javascript:mui.toggleAside('aside2')" data-role="toolbar-icon" data-position="float-right"&gt;&lt;span class="icon aside-right icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;

    &lt;div data-role="content"&gt;
    Put content here
    &lt;div&gt;
    &lt;a class="toggle-aside" href="#"&gt;Toggle Aside&lt;/a&gt; &lt;a class="toggle-aside1" href="#"&gt;Toggle Left Aside&lt;/a&gt; &lt;a class="toggle-aside2" href="#"&gt;Toggle Right Aside&lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>


<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>