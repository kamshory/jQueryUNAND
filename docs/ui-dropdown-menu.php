<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Dropdown Menu</h1>
<p>Dropdown menu is tree menu that can be expanded when the parent menu is clicked. On the initial conditions, all of submenus are hidden.</p>
<p>This UI require JavaScript and must be initialize.</p>

<p>Example:</p>
<pre>
&lt;ul data-role="dropdown-menu"&gt;
    &lt;li&gt;
        &lt;a href="#"&gt;Menu 1&lt;/a&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="#"&gt;Submenu 1&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;Submenu 2&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;Submenu 3&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;Submenu 4&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;Submenu 5&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;Submenu 6&lt;/a&gt;&lt;/li&gt;
       &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;a href="#"&gt;Menu 2&lt;/a&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="#"&gt;Submenu 7&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;Submenu 8&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;Submenu 9&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;Submenu 10&lt;/a&gt;&lt;/li&gt;
       &lt;/ul&gt;
    &lt;/li&gt;
&lt;/ul&gt;
</pre>
  
  
  
  <h2>Default Dropdown Menu</h2>
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

    
    &lt;ul data-role="dropdown-menu"&gt;
        &lt;li&gt;
            &lt;a href="#"&gt;Menu 1&lt;/a&gt;
            &lt;ul&gt;
                &lt;li&gt;&lt;a href="#"&gt;Submenu 1&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;Submenu 2&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;Submenu 3&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;Submenu 4&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;Submenu 5&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;Submenu 6&lt;/a&gt;&lt;/li&gt;
           &lt;/ul&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;a href="#"&gt;Menu 2&lt;/a&gt;
            &lt;ul&gt;
                &lt;li&gt;&lt;a href="#"&gt;Submenu 7&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;Submenu 8&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;Submenu 9&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;Submenu 10&lt;/a&gt;&lt;/li&gt;
           &lt;/ul&gt;
        &lt;/li&gt;
        &lt;/ul&gt;
        

    &lt;/div&gt;
    
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2>Dropdown Menu with Icon</h2>
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
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;

   
    &lt;ul data-role="dropdown-menu"&gt;
        &lt;li&gt;
            &lt;a href="#"&gt;&lt;span class="icon file"&gt;&lt;/span&gt; File&lt;/a&gt;
            &lt;ul&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon file"&gt;&lt;/span&gt; New&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon folder-open"&gt;&lt;/span&gt; Open&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon save"&gt;&lt;/span&gt; Save&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon save"&gt;&lt;/span&gt; Save As&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon print"&gt;&lt;/span&gt; Print&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon import"&gt;&lt;/span&gt; Import&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon export"&gt;&lt;/span&gt; Export&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            &lt;/li&gt;
            &lt;li&gt;
            &lt;a href="#"&gt;&lt;span class="icon pencil"&gt;&lt;/span&gt; Edit&lt;/a&gt;
            &lt;ul&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon copy"&gt;&lt;/span&gt; Copy&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon cut"&gt;&lt;/span&gt; Cut&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon paste"&gt;&lt;/span&gt; Paste&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon search"&gt;&lt;/span&gt; Find&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon refresh"&gt;&lt;/span&gt; Replace&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon filter"&gt;&lt;/span&gt; Filter&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon arrow-left"&gt;&lt;/span&gt; Undo&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon arrow-right"&gt;&lt;/span&gt; Redo&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            &lt;/li&gt;
            &lt;li&gt;
            &lt;a href="#"&gt;&lt;span class="icon exchange-horizontal"&gt;&lt;/span&gt; Exchange&lt;/a&gt;
            &lt;ul&gt;
            &lt;li&gt;
            &lt;a href="#"&gt;&lt;span class="icon import"&gt;&lt;/span&gt; Import&lt;/a&gt;
            &lt;ul&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon import"&gt;&lt;/span&gt; Portable Data Format&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon import"&gt;&lt;/span&gt; Word Document&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon import"&gt;&lt;/span&gt; Scalable Vector Graphic&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon import"&gt;&lt;/span&gt; Extensible Markup Language&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            &lt;/li&gt;
            &lt;li&gt;
            &lt;a href="#"&gt;&lt;span class="icon export"&gt;&lt;/span&gt; Export&lt;/a&gt;
            &lt;ul&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon export"&gt;&lt;/span&gt; Portable Data Format&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon export"&gt;&lt;/span&gt; Word Document&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon export"&gt;&lt;/span&gt; Scalable Vector Graphic&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon export"&gt;&lt;/span&gt; Extensible Markup Language&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            &lt;/li&gt;
            &lt;/ul&gt;
            &lt;/li&gt;
            &lt;li&gt;
            &lt;a href="#"&gt;&lt;span class="icon cogs"&gt;&lt;/span&gt; Tools&lt;/a&gt;
            &lt;ul&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon cog"&gt;&lt;/span&gt; Setting&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon user"&gt;&lt;/span&gt; Customize&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon lock"&gt;&lt;/span&gt; Password&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            &lt;/li&gt;
            &lt;li&gt;
            &lt;a href="#"&gt;&lt;span class="icon help"&gt;&lt;/span&gt; Help&lt;/a&gt;
            &lt;ul&gt;
                &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon help"&gt;&lt;/span&gt; Help Content&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#about" data-rel="popup"&gt;&lt;span class="icon help"&gt;&lt;/span&gt; About jQuery UNAND&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#credit" data-rel="popup"&gt;&lt;span class="icon help"&gt;&lt;/span&gt; Credit&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
        

    &lt;/div&gt;

    &lt;div data-role="popup" data-section="about" data-modal="true" data-close-on-click="true"&gt;
    	jQuery UNAND is JavaScript framework to develop mobile web application.
    &lt;/div&gt;
    
    &lt;div data-role="popup" data-section="credit" data-modal="true" data-close-on-click="true" style="width:350px;"&gt;
        &lt;table width="100%" border="0" cellspacing="0" cellpadding="0"&gt;
          &lt;tr&gt;
            &lt;td width="40%"&gt;Framework Name&lt;/td&gt;
            &lt;td&gt;jQuery UNAND&lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;jQuery Version&lt;/td&gt;
            &lt;td&gt;1.7.2&lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;Coder&lt;/td&gt;
            &lt;td&gt;Kamshory&lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;Layout Designer&lt;/td&gt;
            &lt;td&gt;Kamshory&lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;UI Designer&lt;/td&gt;
            &lt;td&gt;Kamshory&lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;Font&lt;/td&gt;
            &lt;td&gt;Open Sans&lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;Icon&lt;/td&gt;
            &lt;td&gt;Unand Font&lt;/td&gt;
          &lt;/tr&gt;
        &lt;/table&gt;
    &lt;/div&gt;
    
&lt;/body&gt;</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
