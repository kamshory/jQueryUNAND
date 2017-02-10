<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Navbar</h1>
<p>Navbar is the navigation bar.</p>
<p>Example</p>
<pre id="pre0">&lt;nav data-role=&quot;navbar&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon globe&quot;&gt;&lt;/span&gt; Tab 1&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon mail&quot;&gt;&lt;/span&gt; Tab 2&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon user&quot;&gt;&lt;/span&gt; Tab 3&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon cog&quot;&gt;&lt;/span&gt; Tab 4&lt;/a&gt;
&lt;/nav&gt;</pre>



  
  
  
  
  <h2>Default Navbar</h2>
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
    &lt;h1&gt;Default Navigation Bar&lt;/h1&gt;
    &lt;/div&gt;    
    &lt;nav data-role="navbar"&gt;
        &lt;a href="#"&gt;&lt;span class="icon globe"&gt;&lt;/span&gt; Tab 1&lt;/a&gt;
        &lt;a href="#"&gt;&lt;span class="icon mail"&gt;&lt;/span&gt; Tab 2&lt;/a&gt;
        &lt;a href="#"&gt;&lt;span class="icon user"&gt;&lt;/span&gt; Tab 3&lt;/a&gt;
        &lt;a href="#"&gt;&lt;span class="icon cog"&gt;&lt;/span&gt; Tab 4&lt;/a&gt;
    &lt;/nav&gt;
    
    &lt;div data-role="content"&gt;
    &lt;h1&gt;Page Title&lt;/h1&gt;
    &lt;p&gt;Unand jQuery is a JavaScript and CSS framework designed to make     web-based applications on mobile devices. jQuery Unand are designed to     simplify the program code created by programmers. jQuery Unand aims to     minimize the resources used and the size of the file to be loaded by   the   browser so it can run on devices with lower specs.
    &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2>Navbar with Script</h2>
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
        $(document).on('click', '[data-role="navbar"] a', function(event){
           // Todo: add your code here
           return false;
        });
    }
    &lt;/script&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;    
    &lt;nav data-role="navbar"&gt;
        &lt;a href="#"&gt;&lt;span class="icon globe"&gt;&lt;/span&gt; Tab 1&lt;/a&gt;
        &lt;a href="#"&gt;&lt;span class="icon mail"&gt;&lt;/span&gt; Tab 2&lt;/a&gt;
        &lt;a href="#"&gt;&lt;/span&gt; Tab 3&lt;/a&gt;
        &lt;a href="#"&gt;&lt;span class="icon cog"&gt;&lt;/span&gt; Tab 4&lt;/a&gt;
    &lt;/nav&gt;
    
    &lt;div data-role="content"&gt;
    &lt;h1&gt;Navigation Bar with Script&lt;/h1&gt;
    &lt;p&gt;Unand jQuery is a JavaScript and CSS framework designed to make     web-based applications on mobile devices. jQuery Unand are designed to     simplify the program code created by programmers. jQuery Unand aims to     minimize the resources used and the size of the file to be loaded by   the   browser so it can run on devices with lower specs.
    &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>


   

  <h2>Navbar and Mark Selected</h2>
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
        $(document).on('click', '[data-role="navbar"] a', function(event){
           $(this).siblings().removeClass('item-selected');
           $(this).addClass('item-selected');
           // Todo: add your code here
           return false;
        });
    }
    &lt;/script&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;    
    &lt;nav data-role="navbar" data-mark-selected="true"&gt;
        &lt;a href="#"&gt;&lt;span class="icon globe"&gt;&lt;/span&gt; Tab 1&lt;/a&gt;
        &lt;a href="#"&gt;&lt;span class="icon mail"&gt;&lt;/span&gt; Tab 2&lt;/a&gt;
        &lt;a href="#" class="item-selected"&gt;&lt;span class="icon user"&gt;&lt;/span&gt; Tab 3&lt;/a&gt;
        &lt;a href="#"&gt;&lt;span class="icon cog"&gt;&lt;/span&gt; Tab 4&lt;/a&gt;
    &lt;/nav&gt;
    
    &lt;div data-role="content"&gt;
    &lt;h1&gt;Selected Navigation Bar&lt;/h1&gt;
    &lt;p&gt;Unand jQuery is a JavaScript and CSS framework designed to make web-based applications on mobile devices. jQuery Unand are designed to     simplify the program code created by programmers. jQuery Unand aims to     minimize the resources used and the size of the file to be loaded by   the   browser so it can run on devices with lower specs.
    &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
