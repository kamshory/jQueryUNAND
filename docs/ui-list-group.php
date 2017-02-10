<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>List Group</h1>
<p>Two levels list.</p>
<pre id="pre0">&lt;ul data-role=&quot;listgroup&quot;&gt;    
    &lt;li&gt;&lt;h3&gt;Desktop Operating System&lt;/h3&gt;&lt;/li&gt;
    &lt;li&gt;&lt;ul&gt;&lt;li&gt;Windows&lt;/li&gt;    
    &lt;li&gt;Linux&lt;/li&gt;
    &lt;li&gt;OS X&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;h3&gt;Mobile Operating System&lt;/h3&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;ul&gt;
    &lt;li&gt;Windows Phone&lt;/li&gt;
    &lt;li&gt;Android&lt;/li&gt;
    &lt;li&gt;iOS&lt;/li&gt;
    &lt;li&gt;Bada&lt;/li&gt;
    &lt;li&gt;Symbian&lt;/li&gt;
    &lt;li&gt;Firefox OS&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;h3&gt;Web Server&lt;/h3&gt;
    &lt;/li&gt;
    &lt;li&gt;
    &lt;ul&gt;
    &lt;li&gt;Apache&lt;/li&gt;
    &lt;li&gt;Internet Informastion Service&lt;/li&gt;
    &lt;li&gt;nginX&lt;/li&gt; 
    &lt;/ul&gt;
    &lt;/li&gt;
&lt;/ul&gt;</pre>



<h2>Default List Group</h2>
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
  &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
  &lt;h1&gt;Page Header&lt;/h1&gt;
  &lt;/div&gt;
  &lt;div data-role="content"&gt;
  &lt;h1&gt;List Group&lt;/h1&gt;
  &lt;ul data-role="listgroup"&gt;
  &lt;li&gt;
  &lt;h3&gt;Desktop Operating System&lt;/h3&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;ul&gt;
  &lt;li&gt;Windows&lt;/li&gt;
  &lt;li&gt;Linux&lt;/li&gt;
  &lt;li&gt;OS X&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;h3&gt;Mobile Operating System&lt;/h3&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;ul&gt;
  &lt;li&gt;Windows Phone&lt;/li&gt;
  &lt;li&gt;Android&lt;/li&gt;
  &lt;li&gt;iOS&lt;/li&gt;
  &lt;li&gt;Bada&lt;/li&gt;
  &lt;li&gt;Symbian&lt;/li&gt;
  &lt;li&gt;Firefox OS&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;h3&gt;Web Server&lt;/h3&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;ul&gt;
  &lt;li&gt;Apache&lt;/li&gt;
  &lt;li&gt;Internet Informastion Service&lt;/li&gt;
  &lt;li&gt;nginX &lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;/ul&gt;
  &lt;/div&gt;
  
  &lt;/body&gt;
  &lt;/html&gt;
</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>



<h2>List Group with Filter</h2>
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
  &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
  &lt;h1&gt;Page Header&lt;/h1&gt;
  &lt;/div&gt;
  &lt;div data-role="content"&gt;
  &lt;h1&gt;List Group with Filter&lt;/h1&gt;
  &lt;ul data-role="listgroup" data-filter="true" data-filter-placeholder="Search item" data-filter-focus="true"&gt;
  &lt;li&gt;
  &lt;h3&gt;Server-Side Script&lt;/h3&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;ul&gt;
  &lt;li&gt;PHP&lt;/li&gt;
  &lt;li&gt;JSP&lt;/li&gt;
  &lt;li&gt;ASP&lt;/li&gt;
  &lt;li&gt;NodeJS&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;h3&gt;Client-Side Script&lt;/h3&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;ul&gt;
  &lt;li&gt;JavaScript&lt;/li&gt;
  &lt;li&gt;VBScript&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;h3&gt;Database&lt;/h3&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;ul&gt;
  &lt;li&gt;MySQL&lt;/li&gt;
  &lt;li&gt;SQL Server&lt;/li&gt;
  &lt;li&gt;PostgreSQL&lt;/li&gt;
  &lt;li&gt;Oracle&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;/ul&gt;
  &lt;/div&gt;
  
  &lt;/body&gt;
  &lt;/html&gt;
</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

<h2>List Group with Hyperlink</h2>
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
  &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
  &lt;h1&gt;Page Header&lt;/h1&gt;
  &lt;/div&gt;
  &lt;div data-role="content"&gt;
  &lt;h1&gt;List Group with Hyperlink&lt;/h1&gt;
  &lt;ul data-role="listgroup"&gt;
  &lt;li&gt;
  &lt;h3&gt;Image Format&lt;/h3&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;ul&gt;
  &lt;li&gt;&lt;a href="#"&gt;JPEG&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;PNG&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;GIF&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;h3&gt;Audio Format&lt;/h3&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;ul&gt;
  &lt;li&gt;&lt;a href="#"&gt;WAV&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;MP3&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;WMA&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;h3&gt;Video Format&lt;/h3&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;ul&gt;
  &lt;li&gt;&lt;a href="#"&gt;AVI&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;MP4&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;MPEG&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;WMV&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;/ul&gt;
  &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
