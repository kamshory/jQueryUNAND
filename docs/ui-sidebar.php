<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Sidebar</h1>
<p>Sidebar is used to put some navigation links or other widgets. Sidebar can float left or right. The width of sidebar and content are defined on CSS document in percent. User can change this values inline with the elements. When the screen resolution in not enough to put sidebar and content together, sidebar will be moved to bottom of the content. </p>


  <h2>Left Sidebar</h2>
  <h3>Code</h3>
<div class="code-container">
<pre class="code" id="pre0">&lt;!DOCTYPE html&gt;
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
    
    &lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;
  &lt;div data-role="mainbar" data-position="float-right"&gt;
  &lt;h1&gt;Lorem Ipsum Dolor Sit Amet&lt;/h1&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
  &lt;h2&gt;Standard Ordered List&lt;/h2&gt;
  &lt;ol&gt;
  &lt;li&gt;Item 1
  &lt;ol&gt;
  &lt;li&gt;Subitem 1&lt;/li&gt;
  &lt;li&gt;Subitem 2&lt;/li&gt;
  &lt;li&gt;Subitem 3&lt;/li&gt;
  &lt;/ol&gt;
  &lt;/li&gt;
  &lt;li&gt;Item 2&lt;/li&gt;
  &lt;li&gt;Item 3&lt;/li&gt;
  &lt;/ol&gt;
  &lt;h2&gt;Standard Unordered List&lt;/h2&gt;
  &lt;ul&gt;
  &lt;li&gt;Item 1
  &lt;ul&gt;
  &lt;li&gt;Subitem 1&lt;/li&gt;
  &lt;li&gt;Subitem 2&lt;/li&gt;
  &lt;li&gt;Subitem 3&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;Item 2&lt;/li&gt;
  &lt;li&gt;Item 3&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/div&gt;
  
  &lt;div data-role="sidebar" data-position="float-left"&gt;
  
  &lt;h2&gt;Listgroup&lt;/h2&gt;
  
  &lt;ul data-role="listgroup"&gt;
  &lt;li&gt;&lt;h3&gt;Category 1&lt;/h3&gt;
  &lt;ul&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 2&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 3&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;&lt;h3&gt;Category 2&lt;/h3&gt;
  &lt;ul&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 4&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 5&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 6&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;&lt;h3&gt;&lt;span class="icon edit"&gt;&lt;/span&gt; Category 3&lt;/h3&gt;
  &lt;ul&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon copy"&gt;&lt;/span&gt; Item 7&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon cut"&gt;&lt;/span&gt; Item 8&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon paste"&gt;&lt;/span&gt; Item 9&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;/ul&gt;
  &lt;h2&gt;List&lt;/h2&gt;
  &lt;ul data-role="list"&gt;
     &lt;li&gt;&lt;a href="#"&gt;About jQeury Unand&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href="#"&gt;The Advantage&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href="#"&gt;Why Use jQery Unand&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;

  &lt;/div&gt;
  &lt;div data-clear="both"&gt;&lt;/div&gt;
  &lt;h2&gt;Normal Size&lt;/h2&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
&lt;/div&gt;
    
&lt;/body&gt;
&lt;/html&gt;
</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  

  <h2>Right Sidebar</h2>
  <h3>Code</h3>
  <div class="code-container">
<pre class="code" id="pre1">&lt;!DOCTYPE html&gt;
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
    
    &lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;
  &lt;div data-role="mainbar" data-position="float-left"&gt;
  &lt;h1&gt;Lorem Ipsum Dolor Sit Amet&lt;/h1&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
  &lt;h2&gt;Standard Ordered List&lt;/h2&gt;
  &lt;ol&gt;
  &lt;li&gt;Item 1
  &lt;ol&gt;
  &lt;li&gt;Subitem 1&lt;/li&gt;
  &lt;li&gt;Subitem 2&lt;/li&gt;
  &lt;li&gt;Subitem 3&lt;/li&gt;
  &lt;/ol&gt;
  &lt;/li&gt;
  &lt;li&gt;Item 2&lt;/li&gt;
  &lt;li&gt;Item 3&lt;/li&gt;
  &lt;/ol&gt;
  &lt;h2&gt;Standard Unordered List&lt;/h2&gt;
  &lt;ul&gt;
  &lt;li&gt;Item 1
  &lt;ul&gt;
  &lt;li&gt;Subitem 1&lt;/li&gt;
  &lt;li&gt;Subitem 2&lt;/li&gt;
  &lt;li&gt;Subitem 3&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;Item 2&lt;/li&gt;
  &lt;li&gt;Item 3&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/div&gt;
  
  &lt;div data-role="sidebar" data-position="float-right"&gt;
  
  &lt;h2&gt;Listgroup&lt;/h2&gt;
  
  &lt;ul data-role="listgroup"&gt;
  &lt;li&gt;&lt;h3&gt;Category 1&lt;/h3&gt;
  &lt;ul&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 2&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 3&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;&lt;h3&gt;Category 2&lt;/h3&gt;
  &lt;ul&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 4&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 5&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 6&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;&lt;h3&gt;&lt;span class="icon edit"&gt;&lt;/span&gt; Category 3&lt;/h3&gt;
  &lt;ul&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon copy"&gt;&lt;/span&gt; Item 7&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon cut"&gt;&lt;/span&gt; Item 8&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon paste"&gt;&lt;/span&gt; Item 9&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;/ul&gt;
  &lt;/div&gt;<p></p>
<p>&lt;div data-clear="both"&gt;&lt;/div&gt;</p>
<p>&lt;h2&gt;Normal Size&lt;/h2&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
&lt;/div&gt;
    
&lt;/body&gt;
&lt;/html&gt;
</p>
  </pre>
  <form method="post" action="../example/ui/test.php" target="_blank">
    <input name="code" value="" type="hidden">
    <input name="submit" value="Test" onclick="copyCode(this)" type="submit">
  </form>
</div>

  <h2>Custom Width Sidebar</h2>
  <h3>Code</h3>
  <div class="code-container">
<pre class="code" id="pre2">&lt;!DOCTYPE html&gt;
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
    
    &lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;
  &lt;div data-role="mainbar" data-position="float-left" style="width:65%"&gt;
  &lt;h1&gt;Lorem Ipsum Dolor Sit Amet&lt;/h1&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
  &lt;h2&gt;Standard Ordered List&lt;/h2&gt;
  &lt;ol&gt;
  &lt;li&gt;Item 1
  &lt;ol&gt;
  &lt;li&gt;Subitem 1&lt;/li&gt;
  &lt;li&gt;Subitem 2&lt;/li&gt;
  &lt;li&gt;Subitem 3&lt;/li&gt;
  &lt;/ol&gt;
  &lt;/li&gt;
  &lt;li&gt;Item 2&lt;/li&gt;
  &lt;li&gt;Item 3&lt;/li&gt;
  &lt;/ol&gt;
  &lt;h2&gt;Standard Unordered List&lt;/h2&gt;
  &lt;ul&gt;
  &lt;li&gt;Item 1
  &lt;ul&gt;
  &lt;li&gt;Subitem 1&lt;/li&gt;
  &lt;li&gt;Subitem 2&lt;/li&gt;
  &lt;li&gt;Subitem 3&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;Item 2&lt;/li&gt;
  &lt;li&gt;Item 3&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/div&gt;
  
  &lt;div data-role="sidebar" data-position="float-right" style="width:32%"&gt;
  
  &lt;h2&gt;Listgroup&lt;/h2&gt;
  
  &lt;ul data-role="listgroup"&gt;
  &lt;li&gt;&lt;h3&gt;Category 1&lt;/h3&gt;
  &lt;ul&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 2&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 3&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;&lt;h3&gt;Category 2&lt;/h3&gt;
  &lt;ul&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 4&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 5&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Item 6&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;&lt;h3&gt;&lt;span class="icon edit"&gt;&lt;/span&gt; Category 3&lt;/h3&gt;
  &lt;ul&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon copy"&gt;&lt;/span&gt; Item 7&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon cut"&gt;&lt;/span&gt; Item 8&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;span class="icon paste"&gt;&lt;/span&gt; Item 9&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;/ul&gt;
  &lt;/div&gt;<p></p>
<p>&lt;div data-clear="both"&gt;&lt;/div&gt;</p>
<p>&lt;h2&gt;Normal Size&lt;/h2&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
&lt;/div&gt;
    
&lt;/body&gt;
&lt;/html&gt;
</p>
  </pre>
  <form method="post" action="../example/ui/test.php" target="_blank">
    <input name="code" value="" type="hidden">
    <input name="submit" value="Test" onclick="copyCode(this)" type="submit">
  </form>
</div>


<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
